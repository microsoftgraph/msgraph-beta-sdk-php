<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\ManagedDevices\Item\SecurityBaselineStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SecurityBaselineStateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SecurityBaselineStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SecurityBaselineStateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SecurityBaselineStateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SecurityBaselineStateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SecurityBaselineStateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SecurityBaselineStateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SecurityBaselineStateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SecurityBaselineStateItemRequestBuilderGetQueryParameters {
        return new SecurityBaselineStateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
