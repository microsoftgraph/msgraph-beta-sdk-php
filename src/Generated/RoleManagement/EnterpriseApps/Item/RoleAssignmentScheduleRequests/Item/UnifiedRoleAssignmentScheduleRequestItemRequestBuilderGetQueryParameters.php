<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleAssignmentScheduleRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * In PIM, read the details of a request for an active and persistent role assignment made through the unifiedRoleAssignmentScheduleRequest object. This API is available in the following national cloud deployments.
*/
class UnifiedRoleAssignmentScheduleRequestItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new UnifiedRoleAssignmentScheduleRequestItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
