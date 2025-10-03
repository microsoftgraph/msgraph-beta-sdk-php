<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Logs\Traffic\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NetworkAccessTrafficTransactionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NetworkAccessTrafficTransactionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters {
        return new NetworkAccessTrafficTransactionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
