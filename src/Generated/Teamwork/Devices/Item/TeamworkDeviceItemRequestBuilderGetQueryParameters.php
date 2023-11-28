<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of a Microsoft Teams-enabled device. For example, you can use this method to get the device type, hardware detail, activity state, and health status information for a device that's enabled for Teams.
*/
class TeamworkDeviceItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new TeamworkDeviceItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
