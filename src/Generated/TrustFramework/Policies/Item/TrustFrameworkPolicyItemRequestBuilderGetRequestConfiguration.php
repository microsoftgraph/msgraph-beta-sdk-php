<?php

namespace Microsoft\\Graph\\Beta\\Generated\TrustFramework\Policies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrustFrameworkPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TrustFrameworkPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrustFrameworkPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TrustFrameworkPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TrustFrameworkPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TrustFrameworkPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TrustFrameworkPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TrustFrameworkPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TrustFrameworkPolicyItemRequestBuilderGetQueryParameters {
        return new TrustFrameworkPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
