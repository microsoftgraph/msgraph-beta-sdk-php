<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Navigational property to a list of targets to which this pool is assigned. Original name: EmbeddedSIMActivationCodePoolAssignmentItemRequestBuilderGetQueryParameters
*/
class EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3 
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
     * Instantiates a new EmbeddedSIMActivationCodePoolAssignmentItemRequestBuild_2dfafad3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
