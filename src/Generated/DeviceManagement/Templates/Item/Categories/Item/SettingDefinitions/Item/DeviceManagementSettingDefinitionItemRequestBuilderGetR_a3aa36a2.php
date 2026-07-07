<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Categories\Item\SettingDefinitions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementSettingDefinitionItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9|null $queryParameters Request query parameters
    */
    public ?DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9 {
        return new DeviceManagementSettingDefinitionItemRequestBuilderGetQ_b6dbedd9($expand, $select);
    }

}
