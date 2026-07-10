<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApiUsageReportEnablementStatusMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApiUsageReportEnablementStatusMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters {
        return new ApiUsageReportEnablementStatusMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
