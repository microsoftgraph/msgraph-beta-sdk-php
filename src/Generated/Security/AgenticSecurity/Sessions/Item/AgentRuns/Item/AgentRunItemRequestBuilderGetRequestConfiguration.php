<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgentRunItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgentRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgentRunItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgentRunItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgentRunItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgentRunItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgentRunItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgentRunItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgentRunItemRequestBuilderGetQueryParameters {
        return new AgentRunItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
