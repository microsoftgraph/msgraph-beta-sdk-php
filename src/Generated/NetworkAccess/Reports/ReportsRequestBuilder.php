<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\Reports;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_2c36c1b1\MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_a1d75760;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDestinationReportWithStartDa_cc1b1768\MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_88652905\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_9a0306bb\MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_498a5660\MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_deb6fdbd;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_b76c2738\MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_286f0b81\MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_25f69f8c;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithSta_04bba7b0\MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithSta_ed4715ce;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_790ff302\MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_55bfc071;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_d5c8c2a7\MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_bdf840c8\MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_35868684;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_7ee1907f\MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_080aebee;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessTransactionSummariesWithStar_d11d4593\MicrosoftGraphNetworkaccessTransactionSummariesWithStar_4783c7d5;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUsageProfilingWithStartDateT_c845ee52\MicrosoftGraphNetworkaccessUsageProfilingWithStartDateT_f9b34007;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_b974b70d\MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_1f4eb17e;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessWebCategoryReportWithStartDa_2064c19e\MicrosoftGraphNetworkaccessWebCategoryReportWithStartDa_e0d9d5f9;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reports property of the microsoft.graph.networkaccess.networkAccessRoot entity.
*/
class ReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/reports');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reports for networkAccess
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the status of the Global Secure Access services for the tenant.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Reports|null>
     * @throws Exception
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Reports::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the crossTenantAccessReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_a1d75760
    */
    public function microsoftGraphNetworkaccessCrossTenantAccessReportWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_a1d75760 {
        return new MicrosoftGraphNetworkaccessCrossTenantAccessReportWithS_a1d75760($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the destinationReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee
    */
    public function microsoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentName(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee {
        return new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_2e862eee($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the deviceReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0
    */
    public function microsoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrl(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0 {
        return new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_047ad6f0($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the entitiesSummaries method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1
    */
    public function microsoftGraphNetworkaccessEntitiesSummariesWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1 {
        return new MicrosoftGraphNetworkaccessEntitiesSummariesWithStartDa_c41097f1($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getApplicationUsageAnalytics method.
     * @param string $aggregatedBy Usage: aggregatedBy='{aggregatedBy}'
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_deb6fdbd
    */
    public function microsoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedBy(string $aggregatedBy, DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_deb6fdbd {
        return new MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_deb6fdbd($this->pathParameters, $this->requestAdapter, $aggregatedBy, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getCloudApplicationReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159
    */
    public function microsoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserId(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159 {
        return new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_318af159($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getConnectionSummaries method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_25f69f8c
    */
    public function microsoftGraphNetworkaccessGetConnectionSummariesWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_25f69f8c {
        return new MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_25f69f8c($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getCrossTenantSummary method.
     * @param DateTime $discoveryPivotDateTime Usage: discoveryPivotDateTime={discoveryPivotDateTime}
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithSta_ed4715ce
    */
    public function microsoftGraphNetworkaccessGetCrossTenantSummaryWithStartDateTimeWithEndDateTimeWithDiscoveryPivotDateTime(DateTime $discoveryPivotDateTime, DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithSta_ed4715ce {
        return new MicrosoftGraphNetworkaccessGetCrossTenantSummaryWithSta_ed4715ce($this->pathParameters, $this->requestAdapter, $discoveryPivotDateTime, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getDestinationSummaries method.
     * @param string $aggregatedBy Usage: aggregatedBy='{aggregatedBy}'
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_55bfc071
    */
    public function microsoftGraphNetworkaccessGetDestinationSummariesWithStartDateTimeWithEndDateTimeWithAggregatedBy(string $aggregatedBy, DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_55bfc071 {
        return new MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_55bfc071($this->pathParameters, $this->requestAdapter, $aggregatedBy, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getDeviceUsageSummary method.
     * @param DateTime $activityPivotDateTime Usage: activityPivotDateTime={activityPivotDateTime}
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5
    */
    public function microsoftGraphNetworkaccessGetDeviceUsageSummaryWithStartDateTimeWithEndDateTimeWithActivityPivotDateTime(DateTime $activityPivotDateTime, DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5 {
        return new MicrosoftGraphNetworkaccessGetDeviceUsageSummaryWithSta_96bea7e5($this->pathParameters, $this->requestAdapter, $activityPivotDateTime, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getDiscoveredApplicationSegmentReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_35868684
    */
    public function microsoftGraphNetworkaccessGetDiscoveredApplicationSegmentReportWithStartDateTimeWithEndDateTimeuserIdUserId(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_35868684 {
        return new MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegm_35868684($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the getEnterpriseApplicationReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_080aebee
    */
    public function microsoftGraphNetworkaccessGetEnterpriseApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserId(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_080aebee {
        return new MicrosoftGraphNetworkaccessGetEnterpriseApplicationRepo_080aebee($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the transactionSummaries method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessTransactionSummariesWithStar_4783c7d5
    */
    public function microsoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessTransactionSummariesWithStar_4783c7d5 {
        return new MicrosoftGraphNetworkaccessTransactionSummariesWithStar_4783c7d5($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the usageProfiling method.
     * @param string $aggregatedBy Usage: aggregatedBy='{aggregatedBy}'
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessUsageProfilingWithStartDateT_f9b34007
    */
    public function microsoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationId(string $aggregatedBy, DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessUsageProfilingWithStartDateT_f9b34007 {
        return new MicrosoftGraphNetworkaccessUsageProfilingWithStartDateT_f9b34007($this->pathParameters, $this->requestAdapter, $aggregatedBy, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the userReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_1f4eb17e
    */
    public function microsoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrl(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_1f4eb17e {
        return new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_1f4eb17e($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Provides operations to call the webCategoryReport method.
     * @param DateTime $endDateTime Usage: endDateTime={endDateTime}
     * @param DateTime $startDateTime Usage: startDateTime={startDateTime}
     * @return MicrosoftGraphNetworkaccessWebCategoryReportWithStartDa_e0d9d5f9
    */
    public function microsoftGraphNetworkaccessWebCategoryReportWithStartDateTimeWithEndDateTime(DateTime $endDateTime, DateTime $startDateTime): MicrosoftGraphNetworkaccessWebCategoryReportWithStartDa_e0d9d5f9 {
        return new MicrosoftGraphNetworkaccessWebCategoryReportWithStartDa_e0d9d5f9($this->pathParameters, $this->requestAdapter, $endDateTime, $startDateTime);
    }

    /**
     * Update the navigation property reports in networkAccess
     * @param Reports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Reports|null>
     * @throws Exception
    */
    public function patch(Reports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Reports::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property reports for networkAccess
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents the status of the Global Secure Access services for the tenant.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/networkAccess/reports{?%24expand,%24select}';
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
     * Update the navigation property reports in networkAccess
     * @param Reports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Reports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReportsRequestBuilder {
        return new ReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
