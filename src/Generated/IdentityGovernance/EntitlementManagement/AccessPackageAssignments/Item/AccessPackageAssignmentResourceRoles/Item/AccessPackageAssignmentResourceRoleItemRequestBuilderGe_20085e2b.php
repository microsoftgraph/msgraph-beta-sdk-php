<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackageAssignmentResourceRoles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The resource roles delivered to the target user for this assignment. Read-only. Nullable. Original name: AccessPackageAssignmentResourceRoleItemRequestBuilderGetQueryParameters
*/
class AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b 
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
     * Instantiates a new AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
