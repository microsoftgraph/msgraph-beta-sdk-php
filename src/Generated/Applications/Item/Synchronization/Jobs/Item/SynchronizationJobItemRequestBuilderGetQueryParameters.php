<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
*/
class SynchronizationJobItemRequestBuilderGetQueryParameters 
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
