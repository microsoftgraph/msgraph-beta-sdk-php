<?php

namespace Microsoft\Graph\Beta\Generated\Directory\AttributeSets\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttributeSetItemRequestBuilderGetRequestConfiguration 
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
     * @var AttributeSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttributeSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttributeSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AttributeSetItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AttributeSetItemRequestBuilderGetQueryParameters {
        return new AttributeSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AttributeSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AttributeSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttributeSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
