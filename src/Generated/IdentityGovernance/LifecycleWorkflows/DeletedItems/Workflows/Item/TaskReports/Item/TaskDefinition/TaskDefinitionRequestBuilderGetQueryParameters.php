<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\TaskReports\Item\TaskDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The taskDefinition associated with the related lifecycle workflow task.Supports $filter(eq, ne) and $expand.
*/
class TaskDefinitionRequestBuilderGetQueryParameters 
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
