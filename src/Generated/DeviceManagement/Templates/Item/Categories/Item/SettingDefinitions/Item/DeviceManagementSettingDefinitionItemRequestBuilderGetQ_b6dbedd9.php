<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Categories\Item\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The setting definitions this category contains Original name: DeviceManagementSettingDefinitionItemRequestBuilderGetQueryParameters
*/
class DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9 
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
     * Instantiates a new DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
