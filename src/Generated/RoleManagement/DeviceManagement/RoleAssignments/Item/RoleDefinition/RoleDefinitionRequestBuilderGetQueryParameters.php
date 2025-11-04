<?php

namespace Microsoft\\Graph\\Beta\\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\RoleDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
*/
class RoleDefinitionRequestBuilderGetQueryParameters 
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
     * Instantiates a new RoleDefinitionRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
