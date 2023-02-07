<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConfigurationPoliciesRequestBuilderGetRequestConfiguration 
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
     * @var ConfigurationPoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConfigurationPoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
