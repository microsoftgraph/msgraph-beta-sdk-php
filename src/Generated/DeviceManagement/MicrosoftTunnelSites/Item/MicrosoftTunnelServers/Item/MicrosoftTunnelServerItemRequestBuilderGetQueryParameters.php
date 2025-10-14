<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A list of MicrosoftTunnelServers that are registered to this MicrosoftTunnelSite
*/
class MicrosoftTunnelServerItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MicrosoftTunnelServerItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
