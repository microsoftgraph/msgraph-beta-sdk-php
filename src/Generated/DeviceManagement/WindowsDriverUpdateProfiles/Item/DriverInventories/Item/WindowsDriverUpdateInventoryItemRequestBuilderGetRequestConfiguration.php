<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\DriverInventories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsDriverUpdateInventoryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDriverUpdateInventoryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters {
        return new WindowsDriverUpdateInventoryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
