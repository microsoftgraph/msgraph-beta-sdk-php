<?php

namespace Microsoft\Graph\Beta\Generated\DeviceLocalCredentials;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceLocalCredentialsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceLocalCredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceLocalCredentialsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deviceLocalCredentialsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceLocalCredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceLocalCredentialsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new deviceLocalCredentialsRequestBuilderGetQueryParameters.
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceLocalCredentialsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null): DeviceLocalCredentialsRequestBuilderGetQueryParameters {
        return new DeviceLocalCredentialsRequestBuilderGetQueryParameters($filter, $orderby, $search, $select);
    }

}
