<?php

namespace Microsoft\Graph\Beta\Generated\Directory\ImpactedResources\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ImpactedResourceItemRequestBuilderGetRequestConfiguration 
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
     * @var ImpactedResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ImpactedResourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
