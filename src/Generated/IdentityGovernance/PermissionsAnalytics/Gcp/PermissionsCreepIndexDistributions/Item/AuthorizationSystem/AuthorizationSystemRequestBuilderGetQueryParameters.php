<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\PermissionsAnalytics\Gcp\PermissionsCreepIndexDistributions\Item\AuthorizationSystem;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents an authorization system onboarded to Permissions Management.
*/
class AuthorizationSystemRequestBuilderGetQueryParameters 
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
     * Instantiates a new AuthorizationSystemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
