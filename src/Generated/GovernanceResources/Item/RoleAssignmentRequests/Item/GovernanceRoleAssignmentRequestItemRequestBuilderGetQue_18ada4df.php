<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignmentRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of role assignment requests for the resource. Original name: GovernanceRoleAssignmentRequestItemRequestBuilderGetQueryParameters
*/
class GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df 
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
     * Instantiates a new GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
