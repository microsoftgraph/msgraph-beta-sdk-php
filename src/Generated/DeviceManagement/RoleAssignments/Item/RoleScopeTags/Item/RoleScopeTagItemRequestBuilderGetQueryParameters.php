<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RoleAssignments\Item\RoleScopeTags\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The set of Role Scope Tags defined on the Role Assignment.
*/
class RoleScopeTagItemRequestBuilderGetQueryParameters 
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
