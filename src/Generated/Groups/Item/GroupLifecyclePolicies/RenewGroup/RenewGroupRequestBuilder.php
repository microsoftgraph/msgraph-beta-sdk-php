<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\GroupLifecyclePolicies\RenewGroup;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the renewGroup method.
*/
class RenewGroupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RenewGroupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/groupLifecyclePolicies/renewGroup');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Renew a group's expiration. When a group is renewed, the group expiration is extended by the number of days defined in the policy.
     * @param RenewGroupPostRequestBody $body The request body
     * @param RenewGroupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RenewGroupPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/grouplifecyclepolicy-renewgroup?view=graph-rest-1.0 Find more info here
    */
    public function post(RenewGroupPostRequestBody $body, ?RenewGroupRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RenewGroupPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Renew a group's expiration. When a group is renewed, the group expiration is extended by the number of days defined in the policy.
     * @param RenewGroupPostRequestBody $body The request body
     * @param RenewGroupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RenewGroupPostRequestBody $body, ?RenewGroupRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RenewGroupRequestBuilder
    */
    public function withUrl(string $rawUrl): RenewGroupRequestBuilder {
        return new RenewGroupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
