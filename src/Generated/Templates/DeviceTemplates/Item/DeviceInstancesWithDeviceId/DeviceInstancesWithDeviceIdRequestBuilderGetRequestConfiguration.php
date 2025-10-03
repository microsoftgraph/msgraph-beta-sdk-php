<?php

namespace Microsoft\\Graph\\Beta\\Generated\Templates\DeviceTemplates\Item\DeviceInstancesWithDeviceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters {
        return new DeviceInstancesWithDeviceIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
