<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\PermissionGrantPreApprovalPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PermissionGrantPreApprovalPolicyCollectionResponse;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\PermissionGrantPreApprovalPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\PermissionGrantPreApprovalPolicies\Item\PermissionGrantPreApprovalPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionGrantPreApprovalPolicies property of the microsoft.graph.servicePrincipal entity.
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
     * Provides operations to manage the permissionGrantPreApprovalPolicies property of the microsoft.graph.servicePrincipal entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/permissionGrantPreApprovalPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the permissionGrantPreApprovalPolicy object for the servicePrincipal.
     * @param PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantPreApprovalPolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PermissionGrantPreApprovalPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantPreApprovalPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the permissionGrantPreApprovalPolicy object for the servicePrincipal.
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PermissionGrantPreApprovalPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionGrantPreApprovalPoliciesRequestBuilder {
        return new PermissionGrantPreApprovalPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
