<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Templates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Pre-configured synchronization settings for a particular application.
*/
class SynchronizationTemplateItemRequestBuilderGetQueryParameters 
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
