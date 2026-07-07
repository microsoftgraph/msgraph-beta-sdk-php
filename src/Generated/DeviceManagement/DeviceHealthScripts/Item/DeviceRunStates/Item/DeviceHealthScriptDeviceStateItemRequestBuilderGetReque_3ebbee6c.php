<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceHealthScriptDeviceStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceHealthScriptDeviceStateItemRequestBuilderGetReque_3ebbee6c extends BaseRequestConfiguration 
{
    /**
     * @var DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c|null $queryParameters Request query parameters
    */
    public ?DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c $queryParameters = null;
    
    /**
     * Instantiates a new DeviceHealthScriptDeviceStateItemRequestBuilderGetReque_3ebbee6c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c {
        return new DeviceHealthScriptDeviceStateItemRequestBuilderGetQuery_de9a540c($expand, $select);
    }

}
