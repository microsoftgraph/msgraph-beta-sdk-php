<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Connectivity;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConnectivityRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConnectivityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConnectivityRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new connectivityRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConnectivityRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConnectivityRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new connectivityRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConnectivityRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConnectivityRequestBuilderGetQueryParameters {
        return new ConnectivityRequestBuilderGetQueryParameters($expand, $select);
    }

}
