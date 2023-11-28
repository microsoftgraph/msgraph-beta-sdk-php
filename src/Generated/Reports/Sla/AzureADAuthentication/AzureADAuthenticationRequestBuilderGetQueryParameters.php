<?php

namespace Microsoft\Graph\Beta\Generated\Reports\Sla\AzureADAuthentication;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of an azureADAuthentication object to find the level of Microsoft Entra authentication availability for your tenant. The Microsoft Entra service Level Agreement (SLA) commits to at least 99.99% authentication availability, as described in Microsoft Entra SLA performance. This object provides you with your tenant’s actual performance against this commitment.
*/
class AzureADAuthenticationRequestBuilderGetQueryParameters 
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
     * Instantiates a new azureADAuthenticationRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
