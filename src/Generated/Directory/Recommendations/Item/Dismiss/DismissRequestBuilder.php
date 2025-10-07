<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\Recommendations\Item\Dismiss;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\Recommendation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the dismiss method.
*/
class DismissRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DismissRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recommendations/{recommendation%2Did}/dismiss');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Dismiss a recommendation object that you consider to be inapplicable to your tenant and update its status to dismissed .
     * @param DismissPostRequestBody $body The request body
     * @param DismissRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Recommendation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/recommendation-dismiss?view=graph-rest-beta Find more info here
    */
    public function post(DismissPostRequestBody $body, ?DismissRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Recommendation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Dismiss a recommendation object that you consider to be inapplicable to your tenant and update its status to dismissed .
     * @param DismissPostRequestBody $body The request body
     * @param DismissRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DismissPostRequestBody $body, ?DismissRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DismissRequestBuilder
    */
    public function withUrl(string $rawUrl): DismissRequestBuilder {
        return new DismissRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
