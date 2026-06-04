<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCustomAttributeShellScripts\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementScriptGroupAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementScriptGroupAssignmentItemRequestBuilder_511c25ce extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b|null $queryParameters Request query parameters
    */
    public ?DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementScriptGroupAssignmentItemRequestBuilder_511c25ce and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b {
        return new DeviceManagementScriptGroupAssignmentItemRequestBuilder_3ebb427b($expand, $select);
    }

}
