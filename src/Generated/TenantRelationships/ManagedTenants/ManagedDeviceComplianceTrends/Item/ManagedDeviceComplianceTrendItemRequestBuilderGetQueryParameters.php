<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Trend insights for device compliance across managed tenants.
*/
class ManagedDeviceComplianceTrendItemRequestBuilderGetQueryParameters 
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
