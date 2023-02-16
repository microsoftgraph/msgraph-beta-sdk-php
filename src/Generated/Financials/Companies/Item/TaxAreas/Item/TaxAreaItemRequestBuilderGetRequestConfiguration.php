<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\TaxAreas\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaxAreaItemRequestBuilderGetRequestConfiguration 
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
     * @var TaxAreaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaxAreaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TaxAreaItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TaxAreaItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TaxAreaItemRequestBuilderGetQueryParameters {
        return new TaxAreaItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TaxAreaItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TaxAreaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TaxAreaItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
