<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2xUserFlows\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents entry point for B2X and self-service sign-up identity userflows.
*/
class B2xIdentityUserFlowItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new B2xIdentityUserFlowItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
