<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: HardwareConfigurationDeviceStateItemRequestBuilderGetRequestConfiguration
*/
class HardwareConfigurationDeviceStateItemRequestBuilderGetRe_da4329da extends BaseRequestConfiguration 
{
    /**
     * @var HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c|null $queryParameters Request query parameters
    */
    public ?HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c $queryParameters = null;
    
    /**
     * Instantiates a new HardwareConfigurationDeviceStateItemRequestBuilderGetRe_da4329da and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c {
        return new HardwareConfigurationDeviceStateItemRequestBuilderGetQu_e9e67f1c($expand, $select);
    }

}
