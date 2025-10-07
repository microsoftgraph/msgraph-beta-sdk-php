<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\MailFolders\Item\Messages\Item\Mentions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of mentions in the message, ordered by the createdDateTime from the newest to the oldest. By default, a GET /messages does not return this property unless you apply $expand on the property.
*/
class MentionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MentionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
