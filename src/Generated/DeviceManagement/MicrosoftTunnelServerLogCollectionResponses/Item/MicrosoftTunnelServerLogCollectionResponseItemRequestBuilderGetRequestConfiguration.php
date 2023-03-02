<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters {
        return new MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
