<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a group's conversation object.
*/
class ConversationItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new ConversationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
