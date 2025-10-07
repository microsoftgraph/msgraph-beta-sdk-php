<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\DeviceStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EmbeddedSIMDeviceStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EmbeddedSIMDeviceStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters {
        return new EmbeddedSIMDeviceStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
