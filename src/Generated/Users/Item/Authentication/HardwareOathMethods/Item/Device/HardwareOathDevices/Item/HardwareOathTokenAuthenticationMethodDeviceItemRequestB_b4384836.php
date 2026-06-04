<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\Item\Device\HardwareOathDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration
*/
class HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836 extends BaseRequestConfiguration 
{
    /**
     * @var HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0|null $queryParameters Request query parameters
    */
    public ?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0 $queryParameters = null;
    
    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0 {
        return new HardwareOathTokenAuthenticationMethodDeviceItemRequestB_f66cb1a0($expand, $select);
    }

}
