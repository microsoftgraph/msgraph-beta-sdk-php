<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The Teams devices provisioned for the tenant.
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
    
}
