<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\ForwardingPolicies\Item\PolicyRules\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PolicyRuleItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PolicyRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PolicyRuleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PolicyRuleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PolicyRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PolicyRuleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PolicyRuleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PolicyRuleItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PolicyRuleItemRequestBuilderGetQueryParameters {
        return new PolicyRuleItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
