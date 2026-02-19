<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\AssignmentErrors\Item\UsageRight;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a usageRight object affected by an assignmentError. A usageRight object is returned only if a preexisting one is in effect and can't be updated due to this assignmentError.
*/
class UsageRightRequestBuilderGetQueryParameters 
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
     * Instantiates a new UsageRightRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
