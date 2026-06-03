<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\AggregatedPolicyCompliance;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class AggregatedPolicyComplianceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AggregatedPolicyComplianceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/aggregatedPolicyCompliances/{aggregatedPolicyCompliance%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property aggregatedPolicyCompliances for tenantRelationships
     * @param AggregatedPolicyComplianceItemRequestBuilderDeleteReque_6819b1d1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AggregatedPolicyComplianceItemRequestBuilderDeleteReque_6819b1d1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Aggregate view of device compliance policies across managed tenants.
     * @param AggregatedPolicyComplianceItemRequestBuilderGetRequestC_cc52c723|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AggregatedPolicyCompliance|null>
     * @throws Exception
    */
    public function get(?AggregatedPolicyComplianceItemRequestBuilderGetRequestC_cc52c723 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AggregatedPolicyCompliance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property aggregatedPolicyCompliances in tenantRelationships
     * @param AggregatedPolicyCompliance $body The request body
     * @param AggregatedPolicyComplianceItemRequestBuilderPatchReques_3a759375|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AggregatedPolicyCompliance|null>
     * @throws Exception
    */
    public function patch(AggregatedPolicyCompliance $body, ?AggregatedPolicyComplianceItemRequestBuilderPatchReques_3a759375 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AggregatedPolicyCompliance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property aggregatedPolicyCompliances for tenantRelationships
     * @param AggregatedPolicyComplianceItemRequestBuilderDeleteReque_6819b1d1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AggregatedPolicyComplianceItemRequestBuilderDeleteReque_6819b1d1 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Aggregate view of device compliance policies across managed tenants.
     * @param AggregatedPolicyComplianceItemRequestBuilderGetRequestC_cc52c723|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AggregatedPolicyComplianceItemRequestBuilderGetRequestC_cc52c723 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property aggregatedPolicyCompliances in tenantRelationships
     * @param AggregatedPolicyCompliance $body The request body
     * @param AggregatedPolicyComplianceItemRequestBuilderPatchReques_3a759375|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AggregatedPolicyCompliance $body, ?AggregatedPolicyComplianceItemRequestBuilderPatchReques_3a759375 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AggregatedPolicyComplianceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AggregatedPolicyComplianceItemRequestBuilder {
        return new AggregatedPolicyComplianceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
