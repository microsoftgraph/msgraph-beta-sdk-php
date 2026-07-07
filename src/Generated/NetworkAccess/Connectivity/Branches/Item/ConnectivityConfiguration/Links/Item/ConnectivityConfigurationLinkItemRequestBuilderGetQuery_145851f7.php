<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Connectivity\Branches\Item\ConnectivityConfiguration\Links\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of connectivity configurations for deviceLink objects. Original name: ConnectivityConfigurationLinkItemRequestBuilderGetQueryParameters
*/
class ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7 
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
     * Instantiates a new ConnectivityConfigurationLinkItemRequestBuilderGetQuery_145851f7 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
