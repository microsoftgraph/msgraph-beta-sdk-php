<?php

namespace Microsoft\\Graph\\Beta\\Generated\Identity\B2cUserFlows\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class B2cIdentityUserFlowItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var B2cIdentityUserFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?B2cIdentityUserFlowItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new B2cIdentityUserFlowItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param B2cIdentityUserFlowItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?B2cIdentityUserFlowItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new B2cIdentityUserFlowItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return B2cIdentityUserFlowItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): B2cIdentityUserFlowItemRequestBuilderGetQueryParameters {
        return new B2cIdentityUserFlowItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
