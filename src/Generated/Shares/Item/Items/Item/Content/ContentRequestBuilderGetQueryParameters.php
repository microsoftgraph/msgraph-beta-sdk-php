<?php

namespace Microsoft\Graph\Beta\Generated\Shares\Item\Items\Item\Content;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get content for the navigation property items from shares
*/
class ContentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24format")
     * @var string|null $format Format of the content
    */
    public ?string $format = null;
    
    /**
     * Instantiates a new ContentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $format Format of the content
    */
    public function __construct(?string $format = null) {
        $this->format = $format;
    }

}
