<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AutopilotEvents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of autopilot events for the tenant. Original name: DeviceManagementAutopilotEventItemRequestBuilderGetQueryParameters
*/
class DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1 
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
     * Instantiates a new DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
