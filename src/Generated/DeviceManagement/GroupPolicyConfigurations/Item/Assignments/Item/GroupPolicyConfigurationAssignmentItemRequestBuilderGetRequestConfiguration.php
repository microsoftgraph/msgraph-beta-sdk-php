<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupPolicyConfigurationAssignmentItemRequestBuilderGetRequestConfiguration 
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
     * @var GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters {
        return new GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new GroupPolicyConfigurationAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupPolicyConfigurationAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
