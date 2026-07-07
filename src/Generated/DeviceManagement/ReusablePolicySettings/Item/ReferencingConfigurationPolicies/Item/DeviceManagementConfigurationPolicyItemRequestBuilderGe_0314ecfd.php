<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationPolicyItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationPolicyItemRequestBuilderGe_0314ecfd extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyItemRequestBuilderGe_0314ecfd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d {
        return new DeviceManagementConfigurationPolicyItemRequestBuilderGe_2386a75d($expand, $select);
    }

}
