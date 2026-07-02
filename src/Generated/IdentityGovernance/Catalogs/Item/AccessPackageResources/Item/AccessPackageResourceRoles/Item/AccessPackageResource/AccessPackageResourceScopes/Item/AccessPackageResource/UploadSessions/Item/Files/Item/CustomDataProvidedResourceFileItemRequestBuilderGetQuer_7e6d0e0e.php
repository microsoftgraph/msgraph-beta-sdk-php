<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\Catalogs\Item\AccessPackageResources\Item\AccessPackageResourceRoles\Item\AccessPackageResource\AccessPackageResourceScopes\Item\AccessPackageResource\UploadSessions\Item\Files\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby. Original name: CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters
*/
class CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e 
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
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetQuer_7e6d0e0e and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
