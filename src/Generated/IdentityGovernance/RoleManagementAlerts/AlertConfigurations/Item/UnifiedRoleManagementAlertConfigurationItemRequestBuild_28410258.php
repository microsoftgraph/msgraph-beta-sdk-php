<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\AlertConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleManagementAlertConfigurationItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleManagementAlertConfigurationItemRequestBuild_28410258 extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementAlertConfigurationItemRequestBuild_28410258 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b {
        return new UnifiedRoleManagementAlertConfigurationItemRequestBuild_5bc5800b($expand, $select);
    }

}
