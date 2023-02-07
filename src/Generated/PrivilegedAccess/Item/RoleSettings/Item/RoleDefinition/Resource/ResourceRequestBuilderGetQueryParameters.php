<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleSettings\Item\RoleDefinition\Resource;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. The associated resource for the role definition.
*/
class ResourceRequestBuilderGetQueryParameters 
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
