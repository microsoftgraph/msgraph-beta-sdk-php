<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EnterpriseApps\Item\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_8f0404c6;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: roleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilderGetRequestConfiguration
*/
class RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa extends BaseRequestConfiguration 
{
    /**
     * @var RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404|null $queryParameters Request query parameters
    */
    public ?RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404 $queryParameters = null;
    
    /**
     * Instantiates a new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ea0ca5aa and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404.
     * @param string|null $appScopeId Usage: appScopeId='@appScopeId'
     * @param bool|null $count Include count of items
     * @param string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $principalId Usage: principalId='@principalId'
     * @param string|null $roleDefinitionId Usage: roleDefinitionId='@roleDefinitionId'
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404
    */
    public static function createQueryParameters(?string $appScopeId = null, ?bool $count = null, ?string $directoryScopeId = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $principalId = null, ?string $roleDefinitionId = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404 {
        return new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeId_ede88404($appScopeId, $count, $directoryScopeId, $expand, $filter, $orderby, $principalId, $roleDefinitionId, $search, $select, $skip, $top);
    }

}
