<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementIntentDeviceStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementIntentDeviceStateItemRequestBuilderGetR_9e430257 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9|null $queryParameters Request query parameters
    */
    public ?DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementIntentDeviceStateItemRequestBuilderGetR_9e430257 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9 {
        return new DeviceManagementIntentDeviceStateItemRequestBuilderGetQ_a41e9fd9($expand, $select);
    }

}
