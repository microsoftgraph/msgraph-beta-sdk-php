<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of group assignments for the device management script. Original name: DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters
*/
class DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b 
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
     * Instantiates a new DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
