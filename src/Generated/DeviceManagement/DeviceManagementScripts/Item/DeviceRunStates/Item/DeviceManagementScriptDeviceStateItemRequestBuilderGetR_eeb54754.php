<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementScriptDeviceStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementScriptDeviceStateItemRequestBuilderGetR_eeb54754 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104|null $queryParameters Request query parameters
    */
    public ?DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementScriptDeviceStateItemRequestBuilderGetR_eeb54754 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104 {
        return new DeviceManagementScriptDeviceStateItemRequestBuilderGetQ_5f6ce104($expand, $select);
    }

}
