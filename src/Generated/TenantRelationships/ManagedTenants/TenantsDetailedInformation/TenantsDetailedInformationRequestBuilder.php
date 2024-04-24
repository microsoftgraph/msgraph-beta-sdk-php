<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantDetailedInformation;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantDetailedInformationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\Item\TenantDetailedInformationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenantsDetailedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class TenantsDetailedInformationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsDetailedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $tenantDetailedInformationId The unique identifier of tenantDetailedInformation
     * @return TenantDetailedInformationItemRequestBuilder
    */
    public function byTenantDetailedInformationId(string $tenantDetailedInformationId): TenantDetailedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantDetailedInformation%2Did'] = $tenantDetailedInformationId;
        return new TenantDetailedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TenantsDetailedInformationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/tenantsDetailedInformation{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection tenant level detailed information across managed tenants.
     * @param TenantsDetailedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantDetailedInformationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?TenantsDetailedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantDetailedInformationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to tenantsDetailedInformation for tenantRelationships
     * @param TenantDetailedInformation $body The request body
     * @param TenantsDetailedInformationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantDetailedInformation|null>
     * @throws Exception
    */
    public function post(TenantDetailedInformation $body, ?TenantsDetailedInformationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantDetailedInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection tenant level detailed information across managed tenants.
     * @param TenantsDetailedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantsDetailedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to tenantsDetailedInformation for tenantRelationships
     * @param TenantDetailedInformation $body The request body
     * @param TenantsDetailedInformationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TenantDetailedInformation $body, ?TenantsDetailedInformationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TenantsDetailedInformationRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantsDetailedInformationRequestBuilder {
        return new TenantsDetailedInformationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
