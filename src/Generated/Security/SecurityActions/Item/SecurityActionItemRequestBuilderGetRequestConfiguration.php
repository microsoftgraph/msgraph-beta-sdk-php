<?php

namespace Microsoft\Graph\Beta\Generated\Security\SecurityActions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SecurityActionItemRequestBuilderGetRequestConfiguration 
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
     * @var SecurityActionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SecurityActionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SecurityActionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SecurityActionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SecurityActionItemRequestBuilderGetQueryParameters {
        return new SecurityActionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SecurityActionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SecurityActionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SecurityActionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
