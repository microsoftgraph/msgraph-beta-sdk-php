<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\MultiTenantOrganization\Tenants;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\MultiTenantOrganizationMember;
use Microsoft\Graph\Beta\Generated\Models\MultiTenantOrganizationMemberCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\MultiTenantOrganization\Tenants\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\MultiTenantOrganization\Tenants\Item\MultiTenantOrganizationMemberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenants property of the microsoft.graph.multiTenantOrganization entity.
*/
class TenantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenants property of the microsoft.graph.multiTenantOrganization entity.
     * @param string $multiTenantOrganizationMemberId The unique identifier of multiTenantOrganizationMember
     * @return MultiTenantOrganizationMemberItemRequestBuilder
    */
    public function byMultiTenantOrganizationMemberId(string $multiTenantOrganizationMemberId): MultiTenantOrganizationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiTenantOrganizationMember%2Did'] = $multiTenantOrganizationMemberId;
        return new MultiTenantOrganizationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TenantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/multiTenantOrganization/tenants{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the tenants and their properties in the multi-tenant organization. This API is supported in the following national cloud deployments.
     * @param TenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/multitenantorganization-list-tenants?view=graph-rest-1.0 Find more info here
    */
    public function get(?TenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Add a tenant to a multi-tenant organization. The administrator of an owner tenant has the permissions to add tenants to the multi-tenant organization. The added tenant is in the pending state until the administrator of the added tenant joins the multi-tenant organization by submitting a join request. Note that a tenant can be part of only one multi-tenant organization. This API is supported in the following national cloud deployments.
     * @param MultiTenantOrganizationMember $body The request body
     * @param TenantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/multitenantorganization-post-tenants?view=graph-rest-1.0 Find more info here
    */
    public function post(MultiTenantOrganizationMember $body, ?TenantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationMember::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List the tenants and their properties in the multi-tenant organization. This API is supported in the following national cloud deployments.
     * @param TenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Add a tenant to a multi-tenant organization. The administrator of an owner tenant has the permissions to add tenants to the multi-tenant organization. The added tenant is in the pending state until the administrator of the added tenant joins the multi-tenant organization by submitting a join request. Note that a tenant can be part of only one multi-tenant organization. This API is supported in the following national cloud deployments.
     * @param MultiTenantOrganizationMember $body The request body
     * @param TenantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MultiTenantOrganizationMember $body, ?TenantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TenantsRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantsRequestBuilder {
        return new TenantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
