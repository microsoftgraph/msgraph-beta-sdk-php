<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicyTemplates\Item\SettingTemplates\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceManagementConfigurationSettingTemplateItemRequestBuilderGetRequestConfiguration 
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
     * @var DeviceManagementConfigurationSettingTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationSettingTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
