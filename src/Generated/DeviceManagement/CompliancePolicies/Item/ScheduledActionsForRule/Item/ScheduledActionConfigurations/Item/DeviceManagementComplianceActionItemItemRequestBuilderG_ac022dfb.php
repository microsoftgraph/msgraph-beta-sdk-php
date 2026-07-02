<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementComplianceActionItemItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementComplianceActionItemItemRequestBuilderG_ac022dfb extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4|null $queryParameters Request query parameters
    */
    public ?DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementComplianceActionItemItemRequestBuilderG_ac022dfb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4 {
        return new DeviceManagementComplianceActionItemItemRequestBuilderG_f9e182e4($expand, $select);
    }

}
