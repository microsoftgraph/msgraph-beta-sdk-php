<?php

namespace Microsoft\Graph\Beta\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Thumbnails\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of thumbnailSet objects associated with the item. For more information, see getting thumbnails. Read-only. Nullable.
*/
class ThumbnailSetItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ThumbnailSetItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
