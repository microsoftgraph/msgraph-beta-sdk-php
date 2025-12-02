<?php

namespace Microsoft\Graph\Beta\Generated\Policies\OnPremAuthenticationPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OnPremAuthenticationPolicy;
use Microsoft\Graph\Beta\Generated\Models\OnPremAuthenticationPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Policies\OnPremAuthenticationPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\OnPremAuthenticationPolicies\Item\OnPremAuthenticationPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onPremAuthenticationPolicies property of the microsoft.graph.policyRoot entity.
*/
class OnPremAuthenticationPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onPremAuthenticationPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $onPremAuthenticationPolicyId The unique identifier of onPremAuthenticationPolicy
     * @return OnPremAuthenticationPolicyItemRequestBuilder
    */
    public function byOnPremAuthenticationPolicyId(string $onPremAuthenticationPolicyId): OnPremAuthenticationPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremAuthenticationPolicy%2Did'] = $onPremAuthenticationPolicyId;
        return new OnPremAuthenticationPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnPremAuthenticationPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/onPremAuthenticationPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the onPremAuthenticationPolicy objects and their properties.
     * @param OnPremAuthenticationPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremAuthenticationPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policyroot-list-onpremauthenticationpolicies?view=graph-rest-beta Find more info here
    */
    public function get(?OnPremAuthenticationPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremAuthenticationPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new onPremAuthenticationPolicy object.
     * @param OnPremAuthenticationPolicy $body The request body
     * @param OnPremAuthenticationPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnPremAuthenticationPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policyroot-post-onpremauthenticationpolicies?view=graph-rest-beta Find more info here
    */
    public function post(OnPremAuthenticationPolicy $body, ?OnPremAuthenticationPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnPremAuthenticationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the onPremAuthenticationPolicy objects and their properties.
     * @param OnPremAuthenticationPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnPremAuthenticationPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new onPremAuthenticationPolicy object.
     * @param OnPremAuthenticationPolicy $body The request body
     * @param OnPremAuthenticationPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OnPremAuthenticationPolicy $body, ?OnPremAuthenticationPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OnPremAuthenticationPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): OnPremAuthenticationPoliciesRequestBuilder {
        return new OnPremAuthenticationPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
