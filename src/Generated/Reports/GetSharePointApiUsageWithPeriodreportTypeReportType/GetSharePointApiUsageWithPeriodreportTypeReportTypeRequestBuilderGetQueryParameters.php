<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithPeriodreportTypeReportType;

/**
 * Invoke function getSharePointApiUsage
*/
class GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $reportType Usage: reportType='@reportType'
    */
    public ?string $reportType = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodreportTypeReportTypeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $reportType Usage: reportType='@reportType'
    */
    public function __construct(?string $reportType = null) {
        $this->reportType = $reportType;
    }

}
