<?php

namespace Microsoft\Graph\Beta\Generated\Security\Alerts\UpdateAlerts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updateAlerts method.
*/
class UpdateAlertsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdateAlertsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/alerts/updateAlerts');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update multiple alerts in one request instead of multiple requests.
     * @param UpdateAlertsPostRequestBody $body The request body
     * @param UpdateAlertsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateAlertsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/alert-updatealerts?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdateAlertsPostRequestBody $body, ?UpdateAlertsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateAlertsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update multiple alerts in one request instead of multiple requests.
     * @param UpdateAlertsPostRequestBody $body The request body
     * @param UpdateAlertsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateAlertsPostRequestBody $body, ?UpdateAlertsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdateAlertsRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdateAlertsRequestBuilder {
        return new UpdateAlertsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
