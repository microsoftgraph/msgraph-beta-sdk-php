<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceComplianceScripts\Item\DeviceRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceComplianceScriptDeviceStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceComplianceScriptDeviceStateItemRequestBuilderGetR_ee4d8a5a extends BaseRequestConfiguration 
{
    /**
     * @var DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d|null $queryParameters Request query parameters
    */
    public ?DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d $queryParameters = null;
    
    /**
     * Instantiates a new DeviceComplianceScriptDeviceStateItemRequestBuilderGetR_ee4d8a5a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d {
        return new DeviceComplianceScriptDeviceStateItemRequestBuilderGetQ_d869ad5d($expand, $select);
    }

}
