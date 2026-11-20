<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\DeviceProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceProfileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceProfileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceProfileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceProfileItemRequestBuilderGetQueryParameters {
        return new DeviceProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
