<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\CloudFirewallPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\CloudFirewallPolicy;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\CloudFirewallPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\CloudFirewallPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\CloudFirewallPolicies\Item\CloudFirewallPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudFirewallPolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
*/
class CloudFirewallPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudFirewallPolicies property of the microsoft.graph.networkaccess.networkAccessRoot entity.
     * @param string $cloudFirewallPolicyId The unique identifier of cloudFirewallPolicy
     * @return CloudFirewallPolicyItemRequestBuilder
    */
    public function byCloudFirewallPolicyId(string $cloudFirewallPolicyId): CloudFirewallPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudFirewallPolicy%2Did'] = $cloudFirewallPolicyId;
        return new CloudFirewallPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CloudFirewallPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/cloudFirewallPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the cloudFirewallPolicy objects and their properties.
     * @param CloudFirewallPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudFirewallPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-networkaccessroot-list-cloudfirewallpolicies?view=graph-rest-beta Find more info here
    */
    public function get(?CloudFirewallPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudFirewallPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new cloudFirewallPolicy object.
     * @param CloudFirewallPolicy $body The request body
     * @param CloudFirewallPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudFirewallPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/networkaccess-networkaccessroot-post-cloudfirewallpolicies?view=graph-rest-beta Find more info here
    */
    public function post(CloudFirewallPolicy $body, ?CloudFirewallPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudFirewallPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the cloudFirewallPolicy objects and their properties.
     * @param CloudFirewallPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CloudFirewallPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new cloudFirewallPolicy object.
     * @param CloudFirewallPolicy $body The request body
     * @param CloudFirewallPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudFirewallPolicy $body, ?CloudFirewallPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloudFirewallPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): CloudFirewallPoliciesRequestBuilder {
        return new CloudFirewallPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
