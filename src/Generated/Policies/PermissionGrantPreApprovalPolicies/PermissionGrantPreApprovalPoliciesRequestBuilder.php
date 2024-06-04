<?php

namespace Microsoft\Graph\Beta\Generated\Policies\PermissionGrantPreApprovalPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PermissionGrantPreApprovalPolicy;
use Microsoft\Graph\Beta\Generated\Models\PermissionGrantPreApprovalPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\Policies\PermissionGrantPreApprovalPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\PermissionGrantPreApprovalPolicies\Item\PermissionGrantPreApprovalPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionGrantPreApprovalPolicies property of the microsoft.graph.policyRoot entity.
*/
class PermissionGrantPreApprovalPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionGrantPreApprovalPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $permissionGrantPreApprovalPolicyId The unique identifier of permissionGrantPreApprovalPolicy
     * @return PermissionGrantPreApprovalPolicyItemRequestBuilder
    */
    public function byPermissionGrantPreApprovalPolicyId(string $permissionGrantPreApprovalPolicyId): PermissionGrantPreApprovalPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantPreApprovalPolicy%2Did'] = $permissionGrantPreApprovalPolicyId;
        return new PermissionGrantPreApprovalPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PermissionGrantPreApprovalPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/permissionGrantPreApprovalPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of permissionGrantPreApprovalPolicy objects in the tenant.
     * @param PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantPreApprovalPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policyroot-list-permissiongrantpreapprovalpolicies?view=graph-rest-beta Find more info here
    */
    public function get(?PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPreApprovalPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicy $body The request body
     * @param PermissionGrantPreApprovalPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantPreApprovalPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policyroot-post-permissiongrantpreapprovalpolicies?view=graph-rest-beta Find more info here
    */
    public function post(PermissionGrantPreApprovalPolicy $body, ?PermissionGrantPreApprovalPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPreApprovalPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of permissionGrantPreApprovalPolicy objects in the tenant.
     * @param PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new permissionGrantPreApprovalPolicy object.
     * @param PermissionGrantPreApprovalPolicy $body The request body
     * @param PermissionGrantPreApprovalPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PermissionGrantPreApprovalPolicy $body, ?PermissionGrantPreApprovalPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PermissionGrantPreApprovalPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionGrantPreApprovalPoliciesRequestBuilder {
        return new PermissionGrantPreApprovalPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
