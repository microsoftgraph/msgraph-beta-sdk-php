<?php

namespace Microsoft\Graph\Beta\Generated\Policies\RoleManagementPolicyAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the role management policy assignments. Original name: UnifiedRoleManagementPolicyAssignmentItemRequestBuilderGetQueryParameters
*/
class UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613 
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
     * Instantiates a new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder_d2156613 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
