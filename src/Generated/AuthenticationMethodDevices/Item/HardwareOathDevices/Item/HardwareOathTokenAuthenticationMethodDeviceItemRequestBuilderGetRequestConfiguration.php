<?php

namespace Microsoft\Graph\Beta\Generated\AuthenticationMethodDevices\Item\HardwareOathDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters {
        return new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
