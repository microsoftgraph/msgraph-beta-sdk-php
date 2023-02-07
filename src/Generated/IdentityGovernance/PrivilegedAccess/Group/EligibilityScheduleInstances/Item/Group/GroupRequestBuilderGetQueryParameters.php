<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleInstances\Item\Group;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get group from identityGovernance
*/
class GroupRequestBuilderGetQueryParameters 
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
