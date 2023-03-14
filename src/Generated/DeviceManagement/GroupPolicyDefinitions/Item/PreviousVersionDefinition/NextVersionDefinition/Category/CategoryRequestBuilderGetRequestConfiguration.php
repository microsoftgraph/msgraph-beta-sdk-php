<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item\PreviousVersionDefinition\NextVersionDefinition\Category;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CategoryRequestBuilderGetRequestConfiguration 
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
     * @var CategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CategoryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new categoryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CategoryRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CategoryRequestBuilderGetQueryParameters {
        return new CategoryRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new categoryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CategoryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CategoryRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
