<?php

namespace Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\AgentGroups\Item\Agents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of onPremisesAgent that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
*/
class OnPremisesAgentItemRequestBuilderGetQueryParameters 
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
    
}
