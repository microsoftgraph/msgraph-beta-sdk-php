<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Deployments\Item\Audience\ApplicableContent\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Content eligible to deploy to devices in the audience. Not nullable. Read-only.
*/
class ApplicableContentCatalogEntryItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new ApplicableContentCatalogEntryItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
