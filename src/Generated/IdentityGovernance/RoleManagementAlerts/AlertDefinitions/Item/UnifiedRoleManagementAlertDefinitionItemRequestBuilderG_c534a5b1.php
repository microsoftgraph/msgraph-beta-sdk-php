<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleManagementAlertDefinitionItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_c534a5b1 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_c534a5b1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa {
        return new UnifiedRoleManagementAlertDefinitionItemRequestBuilderG_fcea9faa($expand, $select);
    }

}
