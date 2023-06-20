<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\ForwardingPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ForwardingPolicyItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ForwardingPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ForwardingPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ForwardingPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ForwardingPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ForwardingPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ForwardingPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ForwardingPolicyItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ForwardingPolicyItemRequestBuilderGetQueryParameters {
        return new ForwardingPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
