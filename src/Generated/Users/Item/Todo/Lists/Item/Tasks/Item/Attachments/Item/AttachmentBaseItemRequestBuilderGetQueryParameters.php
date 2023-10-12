<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Todo\Lists\Item\Tasks\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a taskFileAttachment object. This API is available in the following national cloud deployments.
*/
class AttachmentBaseItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AttachmentBaseItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
