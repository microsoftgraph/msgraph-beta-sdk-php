<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Assets registered with the deployment service that can receive updates.
*/
class UpdatableAssetItemRequestBuilderGetQueryParameters 
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
