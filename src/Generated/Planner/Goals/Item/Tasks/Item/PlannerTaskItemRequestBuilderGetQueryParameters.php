<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Goals\Item\Tasks\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. The tasks associated with the goal. This relationship doesn't support direct retrieval or $expand. To identify the goals associated with a task, read the goalIds property of the plannerTask resource.
*/
class PlannerTaskItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PlannerTaskItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
