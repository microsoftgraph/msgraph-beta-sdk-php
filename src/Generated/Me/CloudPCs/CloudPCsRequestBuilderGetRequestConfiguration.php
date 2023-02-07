<?php

namespace Microsoft\Graph\Beta\Generated\Me\CloudPCs;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudPCsRequestBuilderGetRequestConfiguration 
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
     * @var CloudPCsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPCsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
