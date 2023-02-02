<?php

namespace Microsoft\Graph\Beta\Generated\MessageTraces\Item\Recipients;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecipientsRequestBuilderGetRequestConfiguration 
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
     * @var RecipientsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecipientsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
