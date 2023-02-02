<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Root;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the metadata for a driveItem in a drive by file system path or ID.
*/
class RootRequestBuilderGetQueryParameters 
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
