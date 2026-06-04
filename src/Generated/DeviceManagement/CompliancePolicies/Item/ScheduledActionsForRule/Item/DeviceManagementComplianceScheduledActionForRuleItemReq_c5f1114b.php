<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\ScheduledActionsForRule\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3|null $queryParameters Request query parameters
    */
    public ?DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementComplianceScheduledActionForRuleItemReq_c5f1114b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3 {
        return new DeviceManagementComplianceScheduledActionForRuleItemReq_bd55c1f3($expand, $select);
    }

}
