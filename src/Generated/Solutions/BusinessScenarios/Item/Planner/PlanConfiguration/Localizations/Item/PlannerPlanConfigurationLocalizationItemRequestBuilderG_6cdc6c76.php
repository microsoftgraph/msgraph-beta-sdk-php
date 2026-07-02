<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\PlanConfiguration\Localizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: PlannerPlanConfigurationLocalizationItemRequestBuilderGetRequestConfiguration
*/
class PlannerPlanConfigurationLocalizationItemRequestBuilderG_6cdc6c76 extends BaseRequestConfiguration 
{
    /**
     * @var PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0|null $queryParameters Request query parameters
    */
    public ?PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0 $queryParameters = null;
    
    /**
     * Instantiates a new PlannerPlanConfigurationLocalizationItemRequestBuilderG_6cdc6c76 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0 {
        return new PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0($expand, $select);
    }

}
