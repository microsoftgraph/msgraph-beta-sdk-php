<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ZebraFotaDeployments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ZebraFotaDeploymentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ZebraFotaDeploymentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ZebraFotaDeploymentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ZebraFotaDeploymentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ZebraFotaDeploymentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ZebraFotaDeploymentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ZebraFotaDeploymentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ZebraFotaDeploymentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ZebraFotaDeploymentItemRequestBuilderGetQueryParameters {
        return new ZebraFotaDeploymentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
