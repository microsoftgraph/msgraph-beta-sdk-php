<?php

namespace Microsoft\Graph\Beta\Generated\MessageRecipients;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRecipientsRequestBuilderGetRequestConfiguration 
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
     * @var MessageRecipientsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRecipientsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
