<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationPolicyAssignmentItemReques_bf07e925 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyAssignmentItemReques_bf07e925 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd {
        return new DeviceManagementConfigurationPolicyAssignmentItemReques_2a0250fd($expand, $select);
    }

}
