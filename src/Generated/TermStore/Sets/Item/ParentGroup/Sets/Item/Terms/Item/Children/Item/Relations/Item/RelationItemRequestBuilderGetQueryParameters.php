<?php

namespace Microsoft\Graph\Beta\Generated\TermStore\Sets\Item\ParentGroup\Sets\Item\Terms\Item\Children\Item\Relations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class RelationItemRequestBuilderGetQueryParameters 
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