<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedDeviceMobileAppConfigurationStateItemRequestBuilderGetRequestConfiguration
*/
class ManagedDeviceMobileAppConfigurationStateItemRequestBuil_aa4f219e extends BaseRequestConfiguration 
{
    /**
     * @var ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42|null $queryParameters Request query parameters
    */
    public ?ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationStateItemRequestBuil_aa4f219e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42 {
        return new ManagedDeviceMobileAppConfigurationStateItemRequestBuil_499bff42($expand, $select);
    }

}
