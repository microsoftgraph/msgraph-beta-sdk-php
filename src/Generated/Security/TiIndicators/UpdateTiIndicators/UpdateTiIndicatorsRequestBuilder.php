<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators\UpdateTiIndicators;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updateTiIndicators method.
*/
class UpdateTiIndicatorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdateTiIndicatorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/tiIndicators/updateTiIndicators');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update multiple threat intelligence (TI) indicators in one request instead of multiple requests. This API is available in the following national cloud deployments.
     * @param UpdateTiIndicatorsPostRequestBody $body The request body
     * @param UpdateTiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateTiIndicatorsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tiindicator-updatetiindicators?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdateTiIndicatorsPostRequestBody $body, ?UpdateTiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateTiIndicatorsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update multiple threat intelligence (TI) indicators in one request instead of multiple requests. This API is available in the following national cloud deployments.
     * @param UpdateTiIndicatorsPostRequestBody $body The request body
     * @param UpdateTiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateTiIndicatorsPostRequestBody $body, ?UpdateTiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UpdateTiIndicatorsRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdateTiIndicatorsRequestBuilder {
        return new UpdateTiIndicatorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
