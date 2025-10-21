<?php

namespace Microsoft\\Graph\\Beta\\Generated\RoleManagement\EntitlementManagement\RoleAssignmentApprovals\Item\Steps\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Used to represent the decision associated with a single step in the approval process configured in approvalStage.
*/
class ApprovalStepItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ApprovalStepItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
