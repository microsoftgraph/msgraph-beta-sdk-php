<?php

namespace Microsoft\Graph\Beta\Generated\Connections\Item\Items\Item\Activities\Item\PerformedBy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents an identity used to identify who is responsible for the activity.
*/
class PerformedByRequestBuilderGetQueryParameters 
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
