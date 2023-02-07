<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignmentRequests\Item\RoleDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. The role definition that the request aims to.
*/
class RoleDefinitionRequestBuilderGetQueryParameters 
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
