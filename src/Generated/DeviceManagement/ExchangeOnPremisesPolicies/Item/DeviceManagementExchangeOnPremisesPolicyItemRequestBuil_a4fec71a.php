<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of Exchange On Premisis policies configured by the tenant. Original name: DeviceManagementExchangeOnPremisesPolicyItemRequestBuilderGetQueryParameters
*/
class DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a 
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
     * Instantiates a new DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
