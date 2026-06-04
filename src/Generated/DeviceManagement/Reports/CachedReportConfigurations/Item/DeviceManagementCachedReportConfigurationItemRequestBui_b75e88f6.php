<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementCachedReportConfigurationItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementCachedReportConfigurationItemRequestBui_b75e88f6 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d|null $queryParameters Request query parameters
    */
    public ?DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementCachedReportConfigurationItemRequestBui_b75e88f6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d {
        return new DeviceManagementCachedReportConfigurationItemRequestBui_25953c9d($expand, $select);
    }

}
