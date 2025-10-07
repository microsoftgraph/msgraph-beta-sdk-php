<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\TargetedManagedAppConfigurations\Item\Settings\Item\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters {
        return new DeviceManagementConfigurationSettingDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
