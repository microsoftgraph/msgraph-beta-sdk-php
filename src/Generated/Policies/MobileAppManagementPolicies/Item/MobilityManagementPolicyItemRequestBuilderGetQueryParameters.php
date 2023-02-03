<?php

namespace Microsoft\Graph\Beta\Generated\Policies\MobileAppManagementPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
*/
class MobilityManagementPolicyItemRequestBuilderGetQueryParameters 
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
    
}
