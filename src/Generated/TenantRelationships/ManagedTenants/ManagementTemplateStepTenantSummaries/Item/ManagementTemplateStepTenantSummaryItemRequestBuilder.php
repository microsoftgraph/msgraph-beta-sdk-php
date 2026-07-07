<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepTenantSummaries\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementTemplateStepTenantSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managementTemplateStepTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
*/
class ManagementTemplateStepTenantSummaryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagementTemplateStepTenantSummaryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants/managementTemplateStepTenantSummaries/{managementTemplateStepTenantSummary%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managementTemplateStepTenantSummaries for tenantRelationships
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderDe_021c4608|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ManagementTemplateStepTenantSummaryItemRequestBuilderDe_021c4608 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get managementTemplateStepTenantSummaries from tenantRelationships
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagementTemplateStepTenantSummary|null>
     * @throws Exception
    */
    public function get(?ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagementTemplateStepTenantSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property managementTemplateStepTenantSummaries in tenantRelationships
     * @param ManagementTemplateStepTenantSummary $body The request body
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderPa_05e156fd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagementTemplateStepTenantSummary|null>
     * @throws Exception
    */
    public function patch(ManagementTemplateStepTenantSummary $body, ?ManagementTemplateStepTenantSummaryItemRequestBuilderPa_05e156fd $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagementTemplateStepTenantSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property managementTemplateStepTenantSummaries for tenantRelationships
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderDe_021c4608|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagementTemplateStepTenantSummaryItemRequestBuilderDe_021c4608 $requestConfiguration = null): RequestInformation {
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
     * Get managementTemplateStepTenantSummaries from tenantRelationships
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagementTemplateStepTenantSummaryItemRequestBuilderGe_8e741bdb $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property managementTemplateStepTenantSummaries in tenantRelationships
     * @param ManagementTemplateStepTenantSummary $body The request body
     * @param ManagementTemplateStepTenantSummaryItemRequestBuilderPa_05e156fd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagementTemplateStepTenantSummary $body, ?ManagementTemplateStepTenantSummaryItemRequestBuilderPa_05e156fd $requestConfiguration = null): RequestInformation {
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
     * @return ManagementTemplateStepTenantSummaryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagementTemplateStepTenantSummaryItemRequestBuilder {
        return new ManagementTemplateStepTenantSummaryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
