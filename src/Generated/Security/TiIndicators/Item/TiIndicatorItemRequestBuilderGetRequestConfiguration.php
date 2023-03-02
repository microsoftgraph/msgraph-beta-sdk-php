<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TiIndicatorItemRequestBuilderGetRequestConfiguration 
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
     * @var TiIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TiIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TiIndicatorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TiIndicatorItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TiIndicatorItemRequestBuilderGetQueryParameters {
        return new TiIndicatorItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TiIndicatorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TiIndicatorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TiIndicatorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
