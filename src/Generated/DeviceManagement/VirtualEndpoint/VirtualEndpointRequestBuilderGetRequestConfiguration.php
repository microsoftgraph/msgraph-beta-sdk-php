<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEndpointRequestBuilderGetRequestConfiguration 
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
     * @var VirtualEndpointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEndpointRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new virtualEndpointRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEndpointRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): VirtualEndpointRequestBuilderGetQueryParameters {
        return new VirtualEndpointRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new virtualEndpointRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param VirtualEndpointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEndpointRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
