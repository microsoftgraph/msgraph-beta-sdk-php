<?php

namespace Microsoft\\Graph\\Beta\\Generated\External\IndustryData\InboundFlows\Item\DataConnector;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataConnectorRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataConnectorRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataConnectorRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataConnectorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataConnectorRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataConnectorRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataConnectorRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataConnectorRequestBuilderGetQueryParameters {
        return new DataConnectorRequestBuilderGetQueryParameters($expand, $select);
    }

}
