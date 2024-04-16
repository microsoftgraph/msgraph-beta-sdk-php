<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HardwareConfigurationDeviceStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HardwareConfigurationDeviceStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters {
        return new HardwareConfigurationDeviceStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
