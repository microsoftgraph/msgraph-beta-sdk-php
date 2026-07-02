<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\IntuneBrandingProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of group assignments for the branding profile Original name: IntuneBrandingProfileAssignmentItemRequestBuilderGetQueryParameters
*/
class IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded 
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
     * Instantiates a new IntuneBrandingProfileAssignmentItemRequestBuilderGetQue_5511cded and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
