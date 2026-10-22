<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\RetrieveCloudPcPerformanceMetricsReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the retrieveCloudPcPerformanceMetricsReport method.
*/
class RetrieveCloudPcPerformanceMetricsReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveCloudPcPerformanceMetricsReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/retrieveCloudPcPerformanceMetricsReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get VM-level utilization and performance metrics for a specific Cloud PC from the cloudPcReports resource, including CPU, memory, and network metrics. The metrics are returned as flattened time-series data. This API supports only Windows 365 Enterprise Cloud PCs and Windows 365 Frontline Cloud PCs in dedicated mode.
     * @param RetrieveCloudPcPerformanceMetricsReportPostRequestBody $body The request body
     * @param RetrieveCloudPcPerformanceMetricsReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-retrievecloudpcperformancemetricsreport?view=graph-rest-beta Find more info here
    */
    public function post(RetrieveCloudPcPerformanceMetricsReportPostRequestBody $body, ?RetrieveCloudPcPerformanceMetricsReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get VM-level utilization and performance metrics for a specific Cloud PC from the cloudPcReports resource, including CPU, memory, and network metrics. The metrics are returned as flattened time-series data. This API supports only Windows 365 Enterprise Cloud PCs and Windows 365 Frontline Cloud PCs in dedicated mode.
     * @param RetrieveCloudPcPerformanceMetricsReportPostRequestBody $body The request body
     * @param RetrieveCloudPcPerformanceMetricsReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveCloudPcPerformanceMetricsReportPostRequestBody $body, ?RetrieveCloudPcPerformanceMetricsReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrieveCloudPcPerformanceMetricsReportRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveCloudPcPerformanceMetricsReportRequestBuilder {
        return new RetrieveCloudPcPerformanceMetricsReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
