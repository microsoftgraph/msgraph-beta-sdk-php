<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\ExportJobs\Item\CloudPcExportJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetDailyAggregatedRemoteConnectionReports\MicrosoftGraphGetDailyAggregatedRemoteConnectionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcId\MicrosoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcId\MicrosoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetRemoteConnectionHistoricalReports\MicrosoftGraphGetRemoteConnectionHistoricalReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetSharedUseLicenseUsageReport\MicrosoftGraphGetSharedUseLicenseUsageReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\MicrosoftGraphGetTotalAggregatedRemoteConnectionReports\MicrosoftGraphGetTotalAggregatedRemoteConnectionReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudPcReports;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the reports property of the microsoft.graph.virtualEndpoint entity.
*/
class ReportsRequestBuilder 
{
    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.cloudPcReports entity.
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDailyAggregatedRemoteConnectionReports method.
    */
    public function microsoftGraphGetDailyAggregatedRemoteConnectionReports(): MicrosoftGraphGetDailyAggregatedRemoteConnectionReportsRequestBuilder {
        return new MicrosoftGraphGetDailyAggregatedRemoteConnectionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemoteConnectionHistoricalReports method.
    */
    public function microsoftGraphGetRemoteConnectionHistoricalReports(): MicrosoftGraphGetRemoteConnectionHistoricalReportsRequestBuilder {
        return new MicrosoftGraphGetRemoteConnectionHistoricalReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSharedUseLicenseUsageReport method.
    */
    public function microsoftGraphGetSharedUseLicenseUsageReport(): MicrosoftGraphGetSharedUseLicenseUsageReportRequestBuilder {
        return new MicrosoftGraphGetSharedUseLicenseUsageReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getTotalAggregatedRemoteConnectionReports method.
    */
    public function microsoftGraphGetTotalAggregatedRemoteConnectionReports(): MicrosoftGraphGetTotalAggregatedRemoteConnectionReportsRequestBuilder {
        return new MicrosoftGraphGetTotalAggregatedRemoteConnectionReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.cloudPcReports entity.
     * @param string $id Unique identifier of the item
     * @return CloudPcExportJobItemRequestBuilder
    */
    public function exportJobsById(string $id): CloudPcExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcExportJob%2Did'] = $id;
        return new CloudPcExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Cloud PC related reports.
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPcReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getRealTimeRemoteConnectionLatency method.
     * @param string $cloudPcId Usage: cloudPcId='{cloudPcId}'
     * @return MicrosoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder
    */
    public function microsoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcId(string $cloudPcId): MicrosoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder {
        return new MicrosoftGraphGetRealTimeRemoteConnectionLatencyWithCloudPcIdRequestBuilder($this->pathParameters, $this->requestAdapter, $cloudPcId);
    }

    /**
     * Provides operations to call the getRealTimeRemoteConnectionStatus method.
     * @param string $cloudPcId Usage: cloudPcId='{cloudPcId}'
     * @return MicrosoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder
    */
    public function microsoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcId(string $cloudPcId): MicrosoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder {
        return new MicrosoftGraphGetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder($this->pathParameters, $this->requestAdapter, $cloudPcId);
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param CloudPcReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(CloudPcReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudPcReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
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
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
