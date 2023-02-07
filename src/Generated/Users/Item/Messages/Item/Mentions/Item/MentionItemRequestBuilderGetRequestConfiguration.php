<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\Mentions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MentionItemRequestBuilderGetRequestConfiguration 
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
     * @var MentionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MentionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
