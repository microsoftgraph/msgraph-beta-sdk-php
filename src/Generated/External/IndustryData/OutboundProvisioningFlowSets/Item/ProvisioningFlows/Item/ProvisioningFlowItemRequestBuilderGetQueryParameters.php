<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item\ProvisioningFlows\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A flow that provisions relevant records of a given entity type in the Microsoft 365 tenant.
*/
class ProvisioningFlowItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ProvisioningFlowItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
