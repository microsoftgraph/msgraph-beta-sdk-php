<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of assignments for this profile. Original name: AppleEnrollmentProfileAssignmentItemRequestBuilderGetQueryParameters
*/
class AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686 
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
     * Instantiates a new AppleEnrollmentProfileAssignmentItemRequestBuilderGetQu_5d451686 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
