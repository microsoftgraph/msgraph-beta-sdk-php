<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\CloudPC\ResourceNamespaces\Item\ResourceActions\Item\ResourceScope;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceScopeRequestBuilderGetRequestConfiguration 
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
     * @var ResourceScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceScopeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new resourceScopeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourceScopeRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ResourceScopeRequestBuilderGetQueryParameters {
        return new ResourceScopeRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new resourceScopeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ResourceScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourceScopeRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
