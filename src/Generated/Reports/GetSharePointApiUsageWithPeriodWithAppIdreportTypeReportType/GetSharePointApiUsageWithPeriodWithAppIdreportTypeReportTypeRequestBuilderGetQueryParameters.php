<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportType;

/**
 * Invoke function getSharePointApiUsage
*/
class GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $reportType Usage: reportType='@reportType'
    */
    public ?string $reportType = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $reportType Usage: reportType='@reportType'
    */
    public function __construct(?string $reportType = null) {
        $this->reportType = $reportType;
    }

}
