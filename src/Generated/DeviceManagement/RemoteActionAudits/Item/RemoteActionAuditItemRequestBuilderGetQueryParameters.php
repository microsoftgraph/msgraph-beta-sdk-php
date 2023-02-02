<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteActionAudits\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of device remote action audits with the tenant.
*/
class RemoteActionAuditItemRequestBuilderGetQueryParameters 
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
