<?php

namespace Microsoft\\Graph\\Beta\\Generated\OnPremisesPublishingProfiles\Item\AgentGroups\Item\Agents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnPremisesAgentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnPremisesAgentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnPremisesAgentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnPremisesAgentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnPremisesAgentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnPremisesAgentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnPremisesAgentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnPremisesAgentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnPremisesAgentItemRequestBuilderGetQueryParameters {
        return new OnPremisesAgentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
