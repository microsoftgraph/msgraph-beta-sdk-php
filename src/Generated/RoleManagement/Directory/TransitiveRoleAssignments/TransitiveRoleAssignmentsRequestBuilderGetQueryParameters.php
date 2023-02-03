<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory\TransitiveRoleAssignments;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the list of direct and transitive unifiedRoleAssignment objects for a specific principal. For example, if a user is assigned an Azure AD role through group membership, the role assignment is transitive, and this request will list the group's ID as the **principalId**. Results can also be filtered by the **roleDefinitionId** and **directoryScopeId**. Supported only for directory (Azure AD) provider. For more information, see Use Azure AD groups to manage role assignments.
*/
class TransitiveRoleAssignmentsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
}
