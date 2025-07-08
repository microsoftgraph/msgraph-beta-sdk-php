<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\ThreatIntelligencePolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ThreatIntelligencePolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ThreatIntelligencePolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters {
        return new ThreatIntelligencePolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
