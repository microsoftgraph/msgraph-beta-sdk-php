<?php

namespace Microsoft\Graph\Beta\Generated\Directory\CustomSecurityAttributeDefinitions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomSecurityAttributeDefinitionItemRequestBuilderGetRequestConfiguration 
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
     * @var CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters {
        return new CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CustomSecurityAttributeDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomSecurityAttributeDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
