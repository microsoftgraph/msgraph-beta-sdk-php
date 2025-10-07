<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Connectivity\RemoteNetworks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RemoteNetworkItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RemoteNetworkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RemoteNetworkItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RemoteNetworkItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RemoteNetworkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RemoteNetworkItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RemoteNetworkItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RemoteNetworkItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RemoteNetworkItemRequestBuilderGetQueryParameters {
        return new RemoteNetworkItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
