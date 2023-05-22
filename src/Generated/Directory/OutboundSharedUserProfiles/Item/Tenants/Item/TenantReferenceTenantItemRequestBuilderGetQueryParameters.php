<?php

namespace Microsoft\Graph\Beta\Generated\Directory\OutboundSharedUserProfiles\Item\Tenants\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of external Azure AD tenants that the user has shared profile data with. Read-only.
*/
class TenantReferenceTenantItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new TenantReferenceTenantItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
