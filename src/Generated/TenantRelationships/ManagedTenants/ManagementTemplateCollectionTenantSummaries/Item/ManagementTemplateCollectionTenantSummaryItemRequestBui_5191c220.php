<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollectionTenantSummaries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get managementTemplateCollectionTenantSummaries from tenantRelationships Original name: ManagementTemplateCollectionTenantSummaryItemRequestBuilderGetQueryParameters
*/
class ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220 
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
     * Instantiates a new ManagementTemplateCollectionTenantSummaryItemRequestBui_5191c220 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
