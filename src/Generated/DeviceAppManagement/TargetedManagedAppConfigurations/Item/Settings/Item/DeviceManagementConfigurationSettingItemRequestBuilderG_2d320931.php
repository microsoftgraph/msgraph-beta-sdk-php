<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Settings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationSettingItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationSettingItemRequestBuilderG_2d320931 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingItemRequestBuilderG_2d320931 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5 {
        return new DeviceManagementConfigurationSettingItemRequestBuilderG_778da5c5($expand, $select);
    }

}
