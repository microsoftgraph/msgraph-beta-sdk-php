<?php

namespace Microsoft\Graph\Beta\Generated\SubscribedSkus\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a specific commercial subscription that an organization has acquired. This API is available in the following national cloud deployments.
*/
class SubscribedSkuItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new SubscribedSkuItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
