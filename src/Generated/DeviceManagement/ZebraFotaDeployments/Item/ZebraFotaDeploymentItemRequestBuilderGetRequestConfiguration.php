<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaDeployments\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ZebraFotaDeploymentItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ZebraFotaDeploymentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ZebraFotaDeploymentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ZebraFotaDeploymentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ZebraFotaDeploymentItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ZebraFotaDeploymentItemRequestBuilderGetQueryParameters {
        return new ZebraFotaDeploymentItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ZebraFotaDeploymentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ZebraFotaDeploymentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ZebraFotaDeploymentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
