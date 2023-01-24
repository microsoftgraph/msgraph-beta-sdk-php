<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The device management intent setting definitions
*/
class DeviceManagementSettingDefinitionItemRequestBuilderGetQueryParameters 
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
