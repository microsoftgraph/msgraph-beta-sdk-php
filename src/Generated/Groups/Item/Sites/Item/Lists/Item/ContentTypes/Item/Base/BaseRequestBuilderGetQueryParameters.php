<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Sites\Item\Lists\Item\ContentTypes\Item\Base;

use Microsoft\Kiota\Abstractions\QueryParameter;

class BaseRequestBuilderGetQueryParameters 
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
