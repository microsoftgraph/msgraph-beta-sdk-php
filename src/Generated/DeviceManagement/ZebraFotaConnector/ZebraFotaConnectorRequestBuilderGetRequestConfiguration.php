<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ZebraFotaConnector;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ZebraFotaConnectorRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ZebraFotaConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ZebraFotaConnectorRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ZebraFotaConnectorRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ZebraFotaConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ZebraFotaConnectorRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ZebraFotaConnectorRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ZebraFotaConnectorRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ZebraFotaConnectorRequestBuilderGetQueryParameters {
        return new ZebraFotaConnectorRequestBuilderGetQueryParameters($expand, $select);
    }

}
