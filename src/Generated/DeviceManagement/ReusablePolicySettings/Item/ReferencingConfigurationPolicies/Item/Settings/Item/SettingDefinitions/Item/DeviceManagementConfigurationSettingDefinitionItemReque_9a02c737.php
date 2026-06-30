<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Settings\Item\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of related Setting Definitions. This property is read-only. Original name: DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters
*/
class DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
