<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertIncidents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleManagementAlertIncidentItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_84e7671e extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_84e7671e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463 {
        return new UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463($expand, $select);
    }

}
