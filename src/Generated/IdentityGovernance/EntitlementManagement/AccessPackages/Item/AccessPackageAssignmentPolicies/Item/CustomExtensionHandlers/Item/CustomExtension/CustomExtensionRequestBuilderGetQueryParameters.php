<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageAssignmentPolicies\Item\CustomExtensionHandlers\Item\CustomExtension;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Indicates which custom workflow extension will be executed at this stage. Nullable. Supports $expand.
*/
class CustomExtensionRequestBuilderGetQueryParameters 
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
