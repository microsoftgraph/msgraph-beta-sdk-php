<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\PermissionGrantPreApprovalPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the permissionGrantPreApprovalPolicy object for the servicePrincipal. Original name: PermissionGrantPreApprovalPolicyItemRequestBuilderGetQueryParameters
*/
class PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46 
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
     * Instantiates a new PermissionGrantPreApprovalPolicyItemRequestBuilderGetQu_fac38c46 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
