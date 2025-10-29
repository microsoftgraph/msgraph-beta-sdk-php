<?php

namespace Microsoft\\Graph\\Beta\\Generated\Financials\Companies\Item\SalesQuotes\Item\Customer\ShipmentMethod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ShipmentMethodRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ShipmentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ShipmentMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ShipmentMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ShipmentMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ShipmentMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ShipmentMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ShipmentMethodRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ShipmentMethodRequestBuilderGetQueryParameters {
        return new ShipmentMethodRequestBuilderGetQueryParameters($expand, $select);
    }

}
