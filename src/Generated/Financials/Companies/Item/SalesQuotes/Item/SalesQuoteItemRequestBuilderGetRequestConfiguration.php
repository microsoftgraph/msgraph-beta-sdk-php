<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\SalesQuotes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SalesQuoteItemRequestBuilderGetRequestConfiguration 
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
     * @var SalesQuoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SalesQuoteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SalesQuoteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SalesQuoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SalesQuoteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SalesQuoteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SalesQuoteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SalesQuoteItemRequestBuilderGetQueryParameters {
        return new SalesQuoteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
