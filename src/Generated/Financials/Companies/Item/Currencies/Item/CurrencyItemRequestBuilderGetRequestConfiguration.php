<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Currencies\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrencyItemRequestBuilderGetRequestConfiguration 
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
     * @var CurrencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrencyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrencyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CurrencyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CurrencyItemRequestBuilderGetQueryParameters {
        return new CurrencyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CurrencyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CurrencyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrencyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
