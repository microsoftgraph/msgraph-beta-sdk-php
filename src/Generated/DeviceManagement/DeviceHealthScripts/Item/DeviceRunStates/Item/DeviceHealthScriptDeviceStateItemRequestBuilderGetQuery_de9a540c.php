<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of run states for the device health script across all devices Original name: DeviceHealthScriptDeviceStateItemRequestBuilderGetQueryParameters
*/
class DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c 
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
     * Instantiates a new DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
