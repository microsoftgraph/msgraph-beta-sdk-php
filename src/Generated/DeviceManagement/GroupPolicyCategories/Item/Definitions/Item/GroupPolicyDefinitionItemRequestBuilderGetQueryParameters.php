<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\Definitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class GroupPolicyDefinitionItemRequestBuilderGetQueryParameters 
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
