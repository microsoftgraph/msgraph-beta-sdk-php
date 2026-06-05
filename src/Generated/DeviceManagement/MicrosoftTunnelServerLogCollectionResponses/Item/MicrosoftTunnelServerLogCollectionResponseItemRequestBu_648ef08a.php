<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account. Original name: MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters
*/
class MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a 
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
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBu_648ef08a and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
