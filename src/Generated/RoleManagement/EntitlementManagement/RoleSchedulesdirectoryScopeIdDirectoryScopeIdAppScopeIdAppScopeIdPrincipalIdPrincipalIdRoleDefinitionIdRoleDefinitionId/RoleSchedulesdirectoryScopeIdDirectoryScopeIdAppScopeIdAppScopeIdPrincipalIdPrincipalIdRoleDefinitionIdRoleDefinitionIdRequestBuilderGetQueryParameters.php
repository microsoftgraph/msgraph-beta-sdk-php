<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId;

use Microsoft\Kiota\Abstractions\QueryParameter;

class RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $appScopeId Usage: appScopeId='@appScopeId'
    */
    public ?string $appScopeId = null;
    
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
    */
    public ?string $directoryScopeId = null;
    
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
     * @var string|null $principalId Usage: principalId='@principalId'
    */
    public ?string $principalId = null;
    
    /**
     * @var string|null $roleDefinitionId Usage: roleDefinitionId='@roleDefinitionId'
    */
    public ?string $roleDefinitionId = null;
    
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
