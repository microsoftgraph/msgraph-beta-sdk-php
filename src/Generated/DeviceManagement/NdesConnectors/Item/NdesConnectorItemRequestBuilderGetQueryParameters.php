<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\NdesConnectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of Ndes connectors for this account.
*/
class NdesConnectorItemRequestBuilderGetQueryParameters 
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
