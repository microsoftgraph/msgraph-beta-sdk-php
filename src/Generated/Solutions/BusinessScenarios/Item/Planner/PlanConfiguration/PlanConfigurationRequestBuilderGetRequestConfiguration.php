<?php

namespace Microsoft\\Graph\\Beta\\Generated\Solutions\BusinessScenarios\Item\Planner\PlanConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlanConfigurationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlanConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlanConfigurationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlanConfigurationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlanConfigurationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlanConfigurationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlanConfigurationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlanConfigurationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlanConfigurationRequestBuilderGetQueryParameters {
        return new PlanConfigurationRequestBuilderGetQueryParameters($expand, $select);
    }

}
