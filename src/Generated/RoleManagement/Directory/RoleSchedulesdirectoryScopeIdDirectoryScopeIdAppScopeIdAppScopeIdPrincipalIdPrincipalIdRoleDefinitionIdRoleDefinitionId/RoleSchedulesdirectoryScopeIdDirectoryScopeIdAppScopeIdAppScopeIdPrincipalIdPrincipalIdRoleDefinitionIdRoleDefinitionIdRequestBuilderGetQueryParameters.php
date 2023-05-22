<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Invoke function roleSchedules
*/
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
    
    /**
     * Instantiates a new roleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $appScopeId Usage: appScopeId='@appScopeId'
     * @param bool|null $count Include count of items
     * @param string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $principalId Usage: principalId='@principalId'
     * @param string|null $roleDefinitionId Usage: roleDefinitionId='@roleDefinitionId'
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?string $appScopeId = null, ?bool $count = null, ?string $directoryScopeId = null, ?string $filter = null, ?array $orderby = null, ?string $principalId = null, ?string $roleDefinitionId = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null) {
        $this->appScopeId = $appScopeId;
        $this->count = $count;
        $this->directoryScopeId = $directoryScopeId;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->principalId = $principalId;
        $this->roleDefinitionId = $roleDefinitionId;
        $this->search = $search;
        $this->select = $select;
        $this->skip = $skip;
        $this->top = $top;
    }

}
