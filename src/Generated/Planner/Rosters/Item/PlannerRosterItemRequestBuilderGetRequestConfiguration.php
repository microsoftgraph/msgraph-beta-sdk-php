<?php

namespace Microsoft\\Graph\\Beta\\Generated\Planner\Rosters\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerRosterItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlannerRosterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerRosterItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlannerRosterItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlannerRosterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerRosterItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlannerRosterItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerRosterItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlannerRosterItemRequestBuilderGetQueryParameters {
        return new PlannerRosterItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
