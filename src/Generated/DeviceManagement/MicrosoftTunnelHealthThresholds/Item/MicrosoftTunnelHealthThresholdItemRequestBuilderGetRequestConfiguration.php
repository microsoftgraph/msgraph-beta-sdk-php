<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelHealthThresholds\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftTunnelHealthThresholdItemRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters {
        return new MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MicrosoftTunnelHealthThresholdItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftTunnelHealthThresholdItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
