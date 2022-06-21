<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Participants\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ParticipantItemRequestBuilderGetQueryParameters 
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
