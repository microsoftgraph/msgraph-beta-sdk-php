<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertIncidents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the incidents of this type of alert that have been triggered in Privileged Identity Management (PIM) for Microsoft Entra roles in the tenant. Supports $expand. Original name: UnifiedRoleManagementAlertIncidentItemRequestBuilderGetQueryParameters
*/
class UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463 
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
    
    /**
     * Instantiates a new UnifiedRoleManagementAlertIncidentItemRequestBuilderGet_7f477463 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
