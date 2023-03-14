<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCustomAttributeShellScripts\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementScriptGroupAssignmentItemRequestBuilderGetRequestConfiguration 
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
     * @var DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters {
        return new DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DeviceManagementScriptGroupAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementScriptGroupAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
