<?php

namespace Microsoft\\Graph\\Beta\\Generated\RoleManagement\CloudPC\RoleAssignments\Item\AppScopes\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
*/
class AppScopeItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new AppScopeItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
