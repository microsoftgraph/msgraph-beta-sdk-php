<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ZebraFotaConnectorRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ZebraFotaConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ZebraFotaConnectorRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new zebraFotaConnectorRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ZebraFotaConnectorRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ZebraFotaConnectorRequestBuilderGetQueryParameters {
        return new ZebraFotaConnectorRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new zebraFotaConnectorRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ZebraFotaConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ZebraFotaConnectorRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
