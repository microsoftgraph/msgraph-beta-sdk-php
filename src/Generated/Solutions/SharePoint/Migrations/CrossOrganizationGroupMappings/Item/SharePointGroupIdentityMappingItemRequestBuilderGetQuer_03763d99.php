<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationGroupMappings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of group identity mappings for cross-organization migration. Original name: SharePointGroupIdentityMappingItemRequestBuilderGetQueryParameters
*/
class SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99 
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
     * Instantiates a new SharePointGroupIdentityMappingItemRequestBuilderGetQuer_03763d99 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
