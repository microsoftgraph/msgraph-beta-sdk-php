<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Dimensions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DimensionItemRequestBuilderGetRequestConfiguration 
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
     * @var DimensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DimensionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DimensionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DimensionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DimensionItemRequestBuilderGetQueryParameters {
        return new DimensionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DimensionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DimensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DimensionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
