<?php

namespace Microsoft\Graph\Beta\Generated\Me\Teamwork;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A container for Microsoft Teams features available for the user. Read-only. Nullable.
*/
class TeamworkRequestBuilderGetQueryParameters 
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
