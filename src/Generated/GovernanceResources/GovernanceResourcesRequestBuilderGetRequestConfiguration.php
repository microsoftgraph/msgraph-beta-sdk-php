<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GovernanceResourcesRequestBuilderGetRequestConfiguration 
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
     * @var GovernanceResourcesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GovernanceResourcesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
