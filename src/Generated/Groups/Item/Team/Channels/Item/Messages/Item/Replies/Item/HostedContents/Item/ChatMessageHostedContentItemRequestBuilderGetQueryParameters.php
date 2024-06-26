<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\Replies\Item\HostedContents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
*/
class ChatMessageHostedContentItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ChatMessageHostedContentItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
