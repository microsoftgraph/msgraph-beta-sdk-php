<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\DeviceStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Navigational property to a list of device states for this pool.
*/
class EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
