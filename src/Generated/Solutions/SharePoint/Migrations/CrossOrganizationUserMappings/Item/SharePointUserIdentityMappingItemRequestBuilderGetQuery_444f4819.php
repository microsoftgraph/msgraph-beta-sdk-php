<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationUserMappings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of user identity mappings for cross-organization migration. Original name: SharePointUserIdentityMappingItemRequestBuilderGetQueryParameters
*/
class SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819 
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
     * Instantiates a new SharePointUserIdentityMappingItemRequestBuilderGetQuery_444f4819 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
