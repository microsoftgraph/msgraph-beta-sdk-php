<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\ObjectConnections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the objectConnection cached linkage record for a known object in a synchronizationJob. During public preview, you must specify a known objectId. Collection listing isn't supported; a GET request to the objectConnections collection returns 400 Bad Request.
*/
class ObjectConnectionObjectItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ObjectConnectionObjectItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
