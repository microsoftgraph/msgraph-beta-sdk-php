<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ApiUsageReportEnablementStatusMetricItemRequestBuilderGetRequestConfiguration
*/
class ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f extends BaseRequestConfiguration 
{
    /**
     * @var ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797|null $queryParameters Request query parameters
    */
    public ?ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797 $queryParameters = null;
    
    /**
     * Instantiates a new ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797 {
        return new ApiUsageReportEnablementStatusMetricItemRequestBuilderG_6e922797($expand, $select);
    }

}
