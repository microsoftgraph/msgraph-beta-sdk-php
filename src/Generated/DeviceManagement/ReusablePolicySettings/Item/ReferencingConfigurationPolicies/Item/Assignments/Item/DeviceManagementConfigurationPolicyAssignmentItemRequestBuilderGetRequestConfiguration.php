<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetRequestConfiguration 
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
     * @var DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters {
        return new DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationPolicyAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
