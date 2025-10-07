<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\DataDiscovery;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataDiscoveryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataDiscoveryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataDiscoveryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataDiscoveryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataDiscoveryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataDiscoveryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataDiscoveryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataDiscoveryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataDiscoveryRequestBuilderGetQueryParameters {
        return new DataDiscoveryRequestBuilderGetQueryParameters($expand, $select);
    }

}
