<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithDatereportTypeReportType;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters.
     * @param string|null $reportType Usage: reportType='@reportType'
     * @return GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $reportType = null): GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters {
        return new GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters($reportType);
    }

}
