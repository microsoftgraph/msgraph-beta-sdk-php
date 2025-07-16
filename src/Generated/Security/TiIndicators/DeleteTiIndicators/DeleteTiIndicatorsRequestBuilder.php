<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators\DeleteTiIndicators;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the deleteTiIndicators method.
*/
class DeleteTiIndicatorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeleteTiIndicatorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/tiIndicators/deleteTiIndicators');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete multiple threat intelligence (TI) indicators in one request instead of multiple requests.
     * @param DeleteTiIndicatorsPostRequestBody $body The request body
     * @param DeleteTiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeleteTiIndicatorsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tiindicator-deletetiindicators?view=graph-rest-beta Find more info here
    */
    public function post(DeleteTiIndicatorsPostRequestBody $body, ?DeleteTiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeleteTiIndicatorsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete multiple threat intelligence (TI) indicators in one request instead of multiple requests.
     * @param DeleteTiIndicatorsPostRequestBody $body The request body
     * @param DeleteTiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeleteTiIndicatorsPostRequestBody $body, ?DeleteTiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeleteTiIndicatorsRequestBuilder
    */
    public function withUrl(string $rawUrl): DeleteTiIndicatorsRequestBuilder {
        return new DeleteTiIndicatorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
