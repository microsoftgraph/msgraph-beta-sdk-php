<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\ExtensionProperties\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExtensionPropertyItemRequestBuilderGetRequestConfiguration 
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
     * @var ExtensionPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExtensionPropertyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExtensionPropertyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExtensionPropertyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ExtensionPropertyItemRequestBuilderGetQueryParameters {
        return new ExtensionPropertyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ExtensionPropertyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ExtensionPropertyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExtensionPropertyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
