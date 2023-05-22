<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\Item\Items\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PolicySetItemItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PolicySetItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PolicySetItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PolicySetItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PolicySetItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PolicySetItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PolicySetItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PolicySetItemItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PolicySetItemItemRequestBuilderGetQueryParameters {
        return new PolicySetItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
