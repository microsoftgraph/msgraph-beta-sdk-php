<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\UserProcessingResults\Item\Subject;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The unique identifier of the AAD user targeted for the taskProcessingResult.Supports $filter(eq, ne) and $expand.
*/
class SubjectRequestBuilderGetQueryParameters 
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
