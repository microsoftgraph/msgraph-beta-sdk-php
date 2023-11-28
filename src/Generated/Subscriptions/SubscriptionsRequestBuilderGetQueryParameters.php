<?php

namespace Microsoft\Graph\Beta\Generated\Subscriptions;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a list of webhook subscriptions. The content of the response depends on the context in which the app is calling; for details, see the scenarios in the Permissions section.
*/
class SubscriptionsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new subscriptionsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?string $search = null, ?array $select = null) {
        $this->search = $search;
        $this->select = $select;
    }

}
