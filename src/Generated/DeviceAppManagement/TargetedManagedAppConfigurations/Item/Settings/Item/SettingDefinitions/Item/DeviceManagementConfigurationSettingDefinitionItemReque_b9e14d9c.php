<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Settings\Item\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737 {
        return new DeviceManagementConfigurationSettingDefinitionItemReque_9a02c737($expand, $select);
    }

}
