<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IndustryDataRunItemRequestBuilderGetRequestConfiguration 
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
     * @var IndustryDataRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IndustryDataRunItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IndustryDataRunItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IndustryDataRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IndustryDataRunItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IndustryDataRunItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IndustryDataRunItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IndustryDataRunItemRequestBuilderGetQueryParameters {
        return new IndustryDataRunItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
