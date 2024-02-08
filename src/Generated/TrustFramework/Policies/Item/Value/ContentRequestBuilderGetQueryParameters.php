<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\Policies\Item\Value;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get media content for the navigation property policies from trustFramework
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
