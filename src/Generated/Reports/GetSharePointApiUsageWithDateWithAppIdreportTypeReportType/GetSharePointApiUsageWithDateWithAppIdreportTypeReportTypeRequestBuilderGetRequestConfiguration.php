<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithDateWithAppIdreportTypeReportType;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters.
     * @param string|null $reportType Usage: reportType='@reportType'
     * @return GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $reportType = null): GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters {
        return new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters($reportType);
    }

}
