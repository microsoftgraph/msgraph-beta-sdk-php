<?php

namespace Microsoft\\Graph\\Beta\\Generated\GovernanceResources\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernanceResourceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GovernanceResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernanceResourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GovernanceResourceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernanceResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernanceResourceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernanceResourceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernanceResourceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernanceResourceItemRequestBuilderGetQueryParameters {
        return new GovernanceResourceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
