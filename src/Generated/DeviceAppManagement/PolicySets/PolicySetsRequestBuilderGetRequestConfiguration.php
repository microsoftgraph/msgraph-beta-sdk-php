<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PolicySetsRequestBuilderGetRequestConfiguration 
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
     * @var PolicySetsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PolicySetsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
