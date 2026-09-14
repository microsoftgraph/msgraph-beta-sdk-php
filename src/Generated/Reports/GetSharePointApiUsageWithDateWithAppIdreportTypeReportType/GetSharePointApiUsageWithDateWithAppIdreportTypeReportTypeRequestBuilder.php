<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithDateWithAppIdreportTypeReportType;

use DateTime;
use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getSharePointApiUsage method.
*/
class GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $appId Usage: appId='{appId}'
     * @param DateTime|null $date Usage: date={date}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $appId = null, ?DateTime $date = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getSharePointApiUsage(date={date},appId=\'{appId}\',reportType=\'@reportType\'){?reportType*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['appId'] = $appId;
            $urlTplParams['date'] = $date;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get aggregated usage data for all applications in a tenant. Specify either a period or a date, but not both. Optionally filter the results by application ID. Data is returned in CSV format by default, or in JSON format when requested through the $format query parameter. Use the optional reportType parameter to choose which usage metrics to return: egressReport (default) includes usage (UsageMB in CSV, usageMB in JSON), and throttlingReport includes throttled request counts (ThrottledRequests in CSV, throttledRequests in JSON). Each report type must be enabled (onboarded) for the tenant before its data is available. Use enableApiUsageReport to enable a report metric, disableApiUsageReport to disable it, and List apiUsageReportMetrics to check the enablement status. If you request a report type that isn't enabled for the tenant, this method returns a 403 Forbidden response with the error code accessDenied and the message 'Tenant is not enabled for this report type.' CSV column headers use PascalCase (ThrottledRequests) while JSON properties use camelCase (throttledRequests) to maintain consistency with other Microsoft Graph reporting APIs.
     * @param GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-getsharepointapiusage?view=graph-rest-beta Find more info here
    */
    public function get(?GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get aggregated usage data for all applications in a tenant. Specify either a period or a date, but not both. Optionally filter the results by application ID. Data is returned in CSV format by default, or in JSON format when requested through the $format query parameter. Use the optional reportType parameter to choose which usage metrics to return: egressReport (default) includes usage (UsageMB in CSV, usageMB in JSON), and throttlingReport includes throttled request counts (ThrottledRequests in CSV, throttledRequests in JSON). Each report type must be enabled (onboarded) for the tenant before its data is available. Use enableApiUsageReport to enable a report metric, disableApiUsageReport to disable it, and List apiUsageReportMetrics to check the enablement status. If you request a report type that isn't enabled for the tenant, this method returns a 403 Forbidden response with the error code accessDenied and the message 'Tenant is not enabled for this report type.' CSV column headers use PascalCase (ThrottledRequests) while JSON properties use camelCase (throttledRequests) to maintain consistency with other Microsoft Graph reporting APIs.
     * @param GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilder
    */
    public function withUrl(string $rawUrl): GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilder {
        return new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
