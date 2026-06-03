<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsDriverUpdateProfileItemRequestBuilderGetRequestConfiguration
*/
class WindowsDriverUpdateProfileItemRequestBuilderGetRequestC_88d88b30 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDriverUpdateProfileItemRequestBuilderGetRequestC_88d88b30 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters {
        return new WindowsDriverUpdateProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
