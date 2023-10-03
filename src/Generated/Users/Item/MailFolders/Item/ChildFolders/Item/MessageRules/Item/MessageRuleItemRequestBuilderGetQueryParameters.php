<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\Item\ChildFolders\Item\MessageRules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties and relationships of a messageRule object. This API is supported in the following national cloud deployments.
*/
class MessageRuleItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MessageRuleItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
