<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportType;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters.
     * @param string|null $reportType Usage: reportType='@reportType'
     * @return GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $reportType = null): GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters {
        return new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters($reportType);
    }

}
