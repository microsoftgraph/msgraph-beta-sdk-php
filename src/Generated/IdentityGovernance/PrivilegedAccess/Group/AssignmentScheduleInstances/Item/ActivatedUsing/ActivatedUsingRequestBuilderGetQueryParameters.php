<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item\ActivatedUsing;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * When the request activates a membership or ownership in PIM for Groups, this object represents the eligibility request for the group. Otherwise, it's null.
*/
class ActivatedUsingRequestBuilderGetQueryParameters 
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
     * Instantiates a new ActivatedUsingRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
