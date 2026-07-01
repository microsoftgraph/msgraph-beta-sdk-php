<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\TemplateSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationSettingTemplateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationSettingTemplateItemRequest_8a15d34b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingTemplateItemRequest_8a15d34b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d {
        return new DeviceManagementConfigurationSettingTemplateItemRequest_30006a3d($expand, $select);
    }

}
