<?php

namespace Microsoft\Graph\Beta\Generated\Network;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NetworkRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NetworkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NetworkRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NetworkRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NetworkRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NetworkRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NetworkRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NetworkRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NetworkRequestBuilderGetQueryParameters {
        return new NetworkRequestBuilderGetQueryParameters($expand, $select);
    }

}
