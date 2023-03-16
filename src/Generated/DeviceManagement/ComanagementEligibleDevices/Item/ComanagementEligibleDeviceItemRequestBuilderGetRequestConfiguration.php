<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagementEligibleDevices\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ComanagementEligibleDeviceItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ComanagementEligibleDeviceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters {
        return new ComanagementEligibleDeviceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
