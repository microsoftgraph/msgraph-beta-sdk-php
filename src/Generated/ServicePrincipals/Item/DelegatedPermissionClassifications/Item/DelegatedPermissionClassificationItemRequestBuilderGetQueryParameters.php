<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The permission classifications for delegated permissions exposed by the app that this service principal represents. Supports $expand.
*/
class DelegatedPermissionClassificationItemRequestBuilderGetQueryParameters 
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
