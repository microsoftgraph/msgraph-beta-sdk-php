<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of run states for the device health script across all devices
*/
class DeviceHealthScriptDeviceStateItemRequestBuilderGetQueryParameters 
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
    
}
