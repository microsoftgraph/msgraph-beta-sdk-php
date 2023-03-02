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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MessageRecipientItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRecipientItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MessageRecipientItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MessageRecipientItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MessageRecipientItemRequestBuilderGetQueryParameters {
        return new MessageRecipientItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MessageRecipientItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MessageRecipientItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessageRecipientItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
