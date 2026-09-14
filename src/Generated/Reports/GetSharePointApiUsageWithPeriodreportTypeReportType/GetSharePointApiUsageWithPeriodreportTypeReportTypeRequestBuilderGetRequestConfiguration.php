<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithPeriodreportTypeReportType;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters.
     * @param string|null $reportType Usage: reportType='@reportType'
     * @return GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $reportType = null): GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters {
        return new GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters($reportType);
    }

}
