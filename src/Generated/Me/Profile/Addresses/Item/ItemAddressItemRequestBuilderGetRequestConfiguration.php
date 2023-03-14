<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\Addresses\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ItemAddressItemRequestBuilderGetRequestConfiguration 
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
     * @var ItemAddressItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ItemAddressItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ItemAddressItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ItemAddressItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ItemAddressItemRequestBuilderGetQueryParameters {
        return new ItemAddressItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ItemAddressItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ItemAddressItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ItemAddressItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
