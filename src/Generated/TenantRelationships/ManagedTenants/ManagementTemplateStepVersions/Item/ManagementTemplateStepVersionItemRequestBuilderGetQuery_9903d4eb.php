<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get managementTemplateStepVersions from tenantRelationships Original name: ManagementTemplateStepVersionItemRequestBuilderGetQueryParameters
*/
class ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb 
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
     * Instantiates a new ManagementTemplateStepVersionItemRequestBuilderGetQuery_9903d4eb and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
