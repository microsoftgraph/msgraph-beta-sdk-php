<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the connectors used to communicate with external resource systems. Original name: ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters
*/
class ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87 
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
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilderGetQue_6bfada87 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
