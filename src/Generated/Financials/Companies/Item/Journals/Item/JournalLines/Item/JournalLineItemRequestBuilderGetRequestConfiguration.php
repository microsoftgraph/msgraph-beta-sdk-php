<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\Item\JournalLines\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class JournalLineItemRequestBuilderGetRequestConfiguration 
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
     * @var JournalLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?JournalLineItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new JournalLineItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return JournalLineItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): JournalLineItemRequestBuilderGetQueryParameters {
        return new JournalLineItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new JournalLineItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param JournalLineItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?JournalLineItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
