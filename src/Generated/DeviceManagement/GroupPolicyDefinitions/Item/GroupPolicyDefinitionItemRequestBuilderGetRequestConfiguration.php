<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration 
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
     * @var GroupPolicyDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupPolicyDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyDefinitionItemRequestBuilderGetQueryParameters {
        return new GroupPolicyDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new GroupPolicyDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
