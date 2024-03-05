<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetActionStatusReports\GetActionStatusReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetCloudPcPerformanceReport\GetCloudPcPerformanceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetCloudPcRecommendationReports\GetCloudPcRecommendationReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetConnectionQualityReports\GetConnectionQualityReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetDailyAggregatedRemoteConnectionReports\GetDailyAggregatedRemoteConnectionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetFrontlineReport\GetFrontlineReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetInaccessibleCloudPcReports\GetInaccessibleCloudPcReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetRawRemoteConnectionReports\GetRawRemoteConnectionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetRealTimeRemoteConnectionLatencyWithCloudPcId\GetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetRealTimeRemoteConnectionStatusWithCloudPcId\GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetRemoteConnectionHistoricalReports\GetRemoteConnectionHistoricalReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetSharedUseLicenseUsageReport\GetSharedUseLicenseUsageReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetTotalAggregatedRemoteConnectionReports\GetTotalAggregatedRemoteConnectionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\RetrieveCrossRegionDisasterRecoveryReport\RetrieveCrossRegionDisasterRecoveryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcReports;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reports property of the microsoft.graph.virtualEndpoint entity.
*/
class ReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.cloudPcReports entity.
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActionStatusReports method.
    */
    public function getActionStatusReports(): GetActionStatusReportsRequestBuilder {
        return new GetActionStatusReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcPerformanceReport method.
    */
    public function getCloudPcPerformanceReport(): GetCloudPcPerformanceReportRequestBuilder {
        return new GetCloudPcPerformanceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCloudPcRecommendationReports method.
    */
    public function getCloudPcRecommendationReports(): GetCloudPcRecommendationReportsRequestBuilder {
        return new GetCloudPcRecommendationReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConnectionQualityReports method.
    */
    public function getConnectionQualityReports(): GetConnectionQualityReportsRequestBuilder {
        return new GetConnectionQualityReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDailyAggregatedRemoteConnectionReports method.
    */
    public function getDailyAggregatedRemoteConnectionReports(): GetDailyAggregatedRemoteConnectionReportsRequestBuilder {
        return new GetDailyAggregatedRemoteConnectionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFrontlineReport method.
    */
    public function getFrontlineReport(): GetFrontlineReportRequestBuilder {
        return new GetFrontlineReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getInaccessibleCloudPcReports method.
    */
    public function getInaccessibleCloudPcReports(): GetInaccessibleCloudPcReportsRequestBuilder {
        return new GetInaccessibleCloudPcReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRawRemoteConnectionReports method.
    */
    public function getRawRemoteConnectionReports(): GetRawRemoteConnectionReportsRequestBuilder {
        return new GetRawRemoteConnectionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemoteConnectionHistoricalReports method.
    */
    public function getRemoteConnectionHistoricalReports(): GetRemoteConnectionHistoricalReportsRequestBuilder {
        return new GetRemoteConnectionHistoricalReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSharedUseLicenseUsageReport method.
    */
    public function getSharedUseLicenseUsageReport(): GetSharedUseLicenseUsageReportRequestBuilder {
        return new GetSharedUseLicenseUsageReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getTotalAggregatedRemoteConnectionReports method.
    */
    public function getTotalAggregatedRemoteConnectionReports(): GetTotalAggregatedRemoteConnectionReportsRequestBuilder {
        return new GetTotalAggregatedRemoteConnectionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the retrieveCrossRegionDisasterRecoveryReport method.
    */
    public function retrieveCrossRegionDisasterRecoveryReport(): RetrieveCrossRegionDisasterRecoveryReportRequestBuilder {
        return new RetrieveCrossRegionDisasterRecoveryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
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
     * Cloud PC related reports.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcReports|null>
     * @throws Exception
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcReports::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getRealTimeRemoteConnectionLatency method.
     * @param string $cloudPcId Usage: cloudPcId='{cloudPcId}'
     * @return GetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder
    */
    public function getRealTimeRemoteConnectionLatencyWithCloudPcId(string $cloudPcId): GetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder {
        return new GetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder($this->pathParameters, $this->requestAdapter, $cloudPcId);
    }

    /**
     * Provides operations to call the getRealTimeRemoteConnectionStatus method.
     * @param string $cloudPcId Usage: cloudPcId='{cloudPcId}'
     * @return GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder
    */
    public function getRealTimeRemoteConnectionStatusWithCloudPcId(string $cloudPcId): GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder {
        return new GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder($this->pathParameters, $this->requestAdapter, $cloudPcId);
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param CloudPcReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcReports|null>
     * @throws Exception
    */
    public function patch(CloudPcReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcReports::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/reports';
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
     * Cloud PC related reports.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property reports in deviceManagement
     * @param CloudPcReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudPcReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/reports';
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
