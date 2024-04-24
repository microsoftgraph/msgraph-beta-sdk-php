<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\AggregatedPolicyCompliance;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\AggregatedPolicyComplianceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Item\AggregatedPolicyComplianceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class AggregatedPolicyCompliancesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
     * @param string $aggregatedPolicyComplianceId The unique identifier of aggregatedPolicyCompliance
     * @return AggregatedPolicyComplianceItemRequestBuilder
    */
    public function byAggregatedPolicyComplianceId(string $aggregatedPolicyComplianceId): AggregatedPolicyComplianceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['aggregatedPolicyCompliance%2Did'] = $aggregatedPolicyComplianceId;
        return new AggregatedPolicyComplianceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AggregatedPolicyCompliancesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/aggregatedPolicyCompliances{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Aggregate view of device compliance policies across managed tenants.
     * @param AggregatedPolicyCompliancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AggregatedPolicyComplianceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AggregatedPolicyCompliancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AggregatedPolicyComplianceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to aggregatedPolicyCompliances for tenantRelationships
     * @param AggregatedPolicyCompliance $body The request body
     * @param AggregatedPolicyCompliancesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AggregatedPolicyCompliance|null>
     * @throws Exception
    */
    public function post(AggregatedPolicyCompliance $body, ?AggregatedPolicyCompliancesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AggregatedPolicyCompliance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Aggregate view of device compliance policies across managed tenants.
     * @param AggregatedPolicyCompliancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AggregatedPolicyCompliancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to aggregatedPolicyCompliances for tenantRelationships
     * @param AggregatedPolicyCompliance $body The request body
     * @param AggregatedPolicyCompliancesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AggregatedPolicyCompliance $body, ?AggregatedPolicyCompliancesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AggregatedPolicyCompliancesRequestBuilder
    */
    public function withUrl(string $rawUrl): AggregatedPolicyCompliancesRequestBuilder {
        return new AggregatedPolicyCompliancesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
