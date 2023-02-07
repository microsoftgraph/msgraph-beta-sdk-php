<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Threads\Item\Posts\Item\InReplyTo;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The earlier post that this post is replying to in the conversationThread. Read-only. Supports $expand.
*/
class InReplyToRequestBuilderGetQueryParameters 
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
    
}
