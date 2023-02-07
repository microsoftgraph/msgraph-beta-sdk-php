<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupPolicyDefinitionsRequestBuilderGetRequestConfiguration 
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
     * @var GroupPolicyDefinitionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupPolicyDefinitionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
