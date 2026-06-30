<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicyTemplates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationPolicyTemplateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationPolicyTemplateItemRequestB_a15e4f6c extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyTemplateItemRequestB_a15e4f6c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509 {
        return new DeviceManagementConfigurationPolicyTemplateItemRequestB_245d0509($expand, $select);
    }

}
