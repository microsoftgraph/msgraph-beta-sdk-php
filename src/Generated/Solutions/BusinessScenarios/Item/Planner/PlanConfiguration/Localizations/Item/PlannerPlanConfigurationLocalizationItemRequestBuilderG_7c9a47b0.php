<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenarios\Item\Planner\PlanConfiguration\Localizations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Localized names for the plan configuration. Original name: PlannerPlanConfigurationLocalizationItemRequestBuilderGetQueryParameters
*/
class PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new PlannerPlanConfigurationLocalizationItemRequestBuilderG_7c9a47b0 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
