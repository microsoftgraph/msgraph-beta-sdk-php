<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Edge;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdgeRequestBuilderGetRequestConfiguration 
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
     * @var EdgeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdgeRequestBuilderGetQueryParameters $queryParameters = null;
    
}
