<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item\ComplianceChanges\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Compliance changes like content approvals which result in the automatic creation of deployments using the audience and deploymentSettings of the policy.
*/
class ComplianceChangeItemRequestBuilderGetQueryParameters 
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
