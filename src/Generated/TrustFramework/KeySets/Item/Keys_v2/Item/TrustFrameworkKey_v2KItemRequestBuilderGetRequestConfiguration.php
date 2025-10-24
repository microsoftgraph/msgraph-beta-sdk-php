<?php

namespace Microsoft\\Graph\\Beta\\Generated\TrustFramework\KeySets\Item\Keys_v2\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrustFrameworkKey_v2KItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TrustFrameworkKey_v2KItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters {
        return new TrustFrameworkKey_v2KItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
