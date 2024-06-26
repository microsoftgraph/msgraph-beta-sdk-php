<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\Tenant;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\Item\TenantItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenants property of the microsoft.graph.managedTenants.managedTenant entity.
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
     * Provides operations to manage the tenants property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $tenantId The unique identifier of tenant
     * @return TenantItemRequestBuilder
    */
    public function byTenantId(string $tenantId): TenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenant%2Did'] = $tenantId;
        return new TenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TenantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/tenants{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the tenant objects and their properties.
     * @param TenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/managedtenants-managedtenant-list-tenants?view=graph-rest-beta Find more info here
    */
    public function get(?TenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to tenants for tenantRelationships
     * @param Tenant $body The request body
     * @param TenantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Tenant|null>
     * @throws Exception
    */
    public function post(Tenant $body, ?TenantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Tenant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the tenant objects and their properties.
     * @param TenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to tenants for tenantRelationships
     * @param Tenant $body The request body
     * @param TenantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Tenant $body, ?TenantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TenantsRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantsRequestBuilder {
        return new TenantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
