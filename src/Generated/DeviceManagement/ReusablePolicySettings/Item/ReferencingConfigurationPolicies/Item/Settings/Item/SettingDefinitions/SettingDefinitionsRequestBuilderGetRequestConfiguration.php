<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\ReferencingConfigurationPolicies\Item\Settings\Item\SettingDefinitions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SettingDefinitionsRequestBuilderGetRequestConfiguration 
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
     * @var SettingDefinitionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SettingDefinitionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
