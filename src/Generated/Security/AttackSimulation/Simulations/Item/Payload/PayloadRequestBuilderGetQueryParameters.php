<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\Simulations\Item\Payload;

use Microsoft\Kiota\Abstractions\QueryParameter;

class PayloadRequestBuilderGetQueryParameters 
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
