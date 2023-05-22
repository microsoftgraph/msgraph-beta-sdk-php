<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BusinessScenarioItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BusinessScenarioItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BusinessScenarioItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BusinessScenarioItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BusinessScenarioItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BusinessScenarioItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BusinessScenarioItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BusinessScenarioItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BusinessScenarioItemRequestBuilderGetQueryParameters {
        return new BusinessScenarioItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
