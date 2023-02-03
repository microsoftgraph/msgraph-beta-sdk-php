<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
*/
class UpdatesRequestBuilderGetQueryParameters 
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
