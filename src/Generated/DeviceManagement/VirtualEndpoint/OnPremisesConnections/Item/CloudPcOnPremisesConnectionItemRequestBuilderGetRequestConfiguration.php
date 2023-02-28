<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudPcOnPremisesConnectionItemRequestBuilderGetRequestConfiguration 
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
     * @var CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters {
        return new CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new CloudPcOnPremisesConnectionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcOnPremisesConnectionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
