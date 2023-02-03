<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\Attachments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the post. Read-only. Nullable. Supports $expand.
*/
class AttachmentItemRequestBuilderGetQueryParameters 
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
