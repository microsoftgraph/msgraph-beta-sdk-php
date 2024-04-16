<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantCustomizedInformation;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\TenantCustomizedInformationCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Item\TenantCustomizedInformationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class TenantsCustomizedInformationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $tenantCustomizedInformationId The unique identifier of tenantCustomizedInformation
     * @return TenantCustomizedInformationItemRequestBuilder
    */
    public function byTenantCustomizedInformationId(string $tenantCustomizedInformationId): TenantCustomizedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantCustomizedInformation%2Did'] = $tenantCustomizedInformationId;
        return new TenantCustomizedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TenantsCustomizedInformationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/tenantsCustomizedInformation{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the tenantCustomizedInformation objects and their properties.
     * @param TenantsCustomizedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantCustomizedInformationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/managedtenants-managedtenant-list-tenantscustomizedinformation?view=graph-rest-1.0 Find more info here
    */
    public function get(?TenantsCustomizedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantCustomizedInformationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to tenantsCustomizedInformation for tenantRelationships
     * @param TenantCustomizedInformation $body The request body
     * @param TenantsCustomizedInformationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantCustomizedInformation|null>
     * @throws Exception
    */
    public function post(TenantCustomizedInformation $body, ?TenantsCustomizedInformationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantCustomizedInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the tenantCustomizedInformation objects and their properties.
     * @param TenantsCustomizedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantsCustomizedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to tenantsCustomizedInformation for tenantRelationships
     * @param TenantCustomizedInformation $body The request body
     * @param TenantsCustomizedInformationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TenantCustomizedInformation $body, ?TenantsCustomizedInformationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TenantsCustomizedInformationRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantsCustomizedInformationRequestBuilder {
        return new TenantsCustomizedInformationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
