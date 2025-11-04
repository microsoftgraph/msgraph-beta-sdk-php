<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\RoleManagementAlerts\Alerts\Item\AlertDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Contains the description, impact, and measures to mitigate or prevent the security alert from being triggered in your tenant. Supports $expand.
*/
class AlertDefinitionRequestBuilderGetQueryParameters 
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
     * Instantiates a new AlertDefinitionRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
