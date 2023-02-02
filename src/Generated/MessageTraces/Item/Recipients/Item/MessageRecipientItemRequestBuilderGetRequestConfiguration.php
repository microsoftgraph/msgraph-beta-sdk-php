<?php

namespace Microsoft\Graph\Beta\Generated\MessageTraces\Item\Recipients\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRecipientItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MessageRecipientItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRecipientItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
