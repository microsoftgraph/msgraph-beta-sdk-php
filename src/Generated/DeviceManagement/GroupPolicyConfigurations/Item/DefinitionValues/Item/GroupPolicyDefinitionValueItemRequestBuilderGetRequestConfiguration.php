<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\DefinitionValues\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupPolicyDefinitionValueItemRequestBuilderGetRequestConfiguration 
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
     * @var GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters {
        return new GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new GroupPolicyDefinitionValueItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyDefinitionValueItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
