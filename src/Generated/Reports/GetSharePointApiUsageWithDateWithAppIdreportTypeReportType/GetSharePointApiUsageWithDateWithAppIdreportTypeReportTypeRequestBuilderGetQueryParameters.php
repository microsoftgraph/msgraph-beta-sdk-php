<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithDateWithAppIdreportTypeReportType;

/**
 * Get aggregated usage data for all applications in a tenant. Specify either a period or a date, but not both. Optionally filter the results by application ID. Data is returned in CSV format by default, or in JSON format when requested through the $format query parameter. Use the optional reportType parameter to choose which usage metrics to return: The sharePointServicePrioritizationReport is intended for tenants that use SharePoint Service Prioritization. For details about the offering and onboarding, see SharePoint Service Prioritization. Each report type must be enabled (onboarded) for the tenant before its data is available. Use enableApiUsageReport to enable a report metric, disableApiUsageReport to disable it, and List apiUsageReportMetrics to check the enablement status. If you request a report type that isn't enabled for the tenant, this method returns a 403 Forbidden response with the error code accessDenied and the message 'Tenant is not enabled for this report type.' CSV column headers use PascalCase (for example, BilledStandardRequestCount), and JSON properties use camelCase (for example, billedStandardRequestCount) to maintain consistency with other Microsoft Graph reporting APIs.
*/
class GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $reportType Usage: reportType='@reportType'
    */
    public ?string $reportType = null;
    
    /**
     * Instantiates a new GetSharePointApiUsageWithDateWithAppIdreportTypeReportTypeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $reportType Usage: reportType='@reportType'
    */
    public function __construct(?string $reportType = null) {
        $this->reportType = $reportType;
    }

}
