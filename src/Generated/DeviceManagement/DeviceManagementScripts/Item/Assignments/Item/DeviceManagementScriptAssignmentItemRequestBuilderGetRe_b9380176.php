<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementScriptAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementScriptAssignmentItemRequestBuilderGetRe_b9380176 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb|null $queryParameters Request query parameters
    */
    public ?DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementScriptAssignmentItemRequestBuilderGetRe_b9380176 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb {
        return new DeviceManagementScriptAssignmentItemRequestBuilderGetQu_5befb6cb($expand, $select);
    }

}
