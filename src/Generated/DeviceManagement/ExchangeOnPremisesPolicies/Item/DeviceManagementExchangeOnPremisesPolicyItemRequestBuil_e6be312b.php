<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementExchangeOnPremisesPolicyItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_e6be312b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a|null $queryParameters Request query parameters
    */
    public ?DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_e6be312b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a {
        return new DeviceManagementExchangeOnPremisesPolicyItemRequestBuil_a4fec71a($expand, $select);
    }

}
