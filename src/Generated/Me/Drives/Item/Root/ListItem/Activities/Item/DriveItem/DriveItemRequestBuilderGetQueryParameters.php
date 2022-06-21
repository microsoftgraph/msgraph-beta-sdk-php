<?php

namespace Microsoft\Graph\Beta\Generated\Me\Drives\Item\Root\ListItem\Activities\Item\DriveItem;

use Microsoft\Kiota\Abstractions\QueryParameter;

class DriveItemRequestBuilderGetQueryParameters 
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
