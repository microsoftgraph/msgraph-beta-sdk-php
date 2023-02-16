<?php

namespace Microsoft\Graph\Beta\Generated\Me\Todo\Lists\Item\Tasks\Item\AttachmentSessions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get attachmentSessions from me
*/
class AttachmentSessionItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AttachmentSessionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
