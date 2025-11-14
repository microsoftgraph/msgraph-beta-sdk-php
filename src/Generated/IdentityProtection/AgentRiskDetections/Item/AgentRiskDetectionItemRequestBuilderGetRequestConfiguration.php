<?php

namespace Microsoft\Graph\Beta\Generated\IdentityProtection\AgentRiskDetections\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgentRiskDetectionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgentRiskDetectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgentRiskDetectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgentRiskDetectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgentRiskDetectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgentRiskDetectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgentRiskDetectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AgentRiskDetectionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AgentRiskDetectionItemRequestBuilderGetQueryParameters {
        return new AgentRiskDetectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
