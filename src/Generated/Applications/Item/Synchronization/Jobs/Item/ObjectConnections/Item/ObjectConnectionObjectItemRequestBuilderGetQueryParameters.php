<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ObjectConnections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Connector data store linkage records contained by the job. During public preview, retrieve an individual connection using a known objectId, or delete it to clear its cached linkage. Collection listing isn't supported and returns 400 Bad Request.
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
