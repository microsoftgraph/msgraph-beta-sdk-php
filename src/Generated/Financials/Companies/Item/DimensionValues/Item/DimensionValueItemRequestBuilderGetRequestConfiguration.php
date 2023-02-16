<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\DimensionValues\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DimensionValueItemRequestBuilderGetRequestConfiguration 
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
     * @var DimensionValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DimensionValueItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DimensionValueItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DimensionValueItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DimensionValueItemRequestBuilderGetQueryParameters {
        return new DimensionValueItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DimensionValueItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DimensionValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DimensionValueItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
