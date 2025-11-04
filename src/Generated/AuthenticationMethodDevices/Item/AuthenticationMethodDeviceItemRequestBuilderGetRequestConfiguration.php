<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuthenticationMethodDevices\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters {
        return new AuthenticationMethodDeviceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
