<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithDatereportTypeReportType;

/**
 * Invoke function getSharePointApiUsage
*/
class GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $reportType Usage: reportType='@reportType'
    */
    public ?string $reportType = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithDatereportTypeReportTypeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $reportType Usage: reportType='@reportType'
    */
    public function __construct(?string $reportType = null) {
        $this->reportType = $reportType;
    }

}
