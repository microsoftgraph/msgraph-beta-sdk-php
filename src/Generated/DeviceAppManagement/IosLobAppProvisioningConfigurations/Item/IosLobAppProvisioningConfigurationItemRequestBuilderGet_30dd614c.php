<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\IosLobAppProvisioningConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: IosLobAppProvisioningConfigurationItemRequestBuilderGetRequestConfiguration
*/
class IosLobAppProvisioningConfigurationItemRequestBuilderGet_30dd614c extends BaseRequestConfiguration 
{
    /**
     * @var IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4|null $queryParameters Request query parameters
    */
    public ?IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4 $queryParameters = null;
    
    /**
     * Instantiates a new IosLobAppProvisioningConfigurationItemRequestBuilderGet_30dd614c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4 {
        return new IosLobAppProvisioningConfigurationItemRequestBuilderGet_468d2ba4($expand, $select);
    }

}
