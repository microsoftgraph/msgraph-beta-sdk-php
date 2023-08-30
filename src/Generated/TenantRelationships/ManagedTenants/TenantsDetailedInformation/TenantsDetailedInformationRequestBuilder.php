<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/tenantsDetailedInformation{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the tenantDetailedInformation objects and their properties.
     * @param TenantsDetailedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/managedtenants-managedtenant-list-tenantsdetailedinformation?view=graph-rest-1.0 Find more info here
    */
    public function get(?TenantsDetailedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TenantDetailedInformationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to tenantsDetailedInformation for tenantRelationships
     * @param TenantDetailedInformation $body The request body
     * @param TenantsDetailedInformationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(TenantDetailedInformation $body, ?TenantsDetailedInformationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TenantDetailedInformation::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get a list of the tenantDetailedInformation objects and their properties.
     * @param TenantsDetailedInformationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantsDetailedInformationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TenantsDetailedInformationRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantsDetailedInformationRequestBuilder {
        return new TenantsDetailedInformationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
