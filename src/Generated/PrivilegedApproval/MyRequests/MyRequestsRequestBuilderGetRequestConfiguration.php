<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval\MyRequests;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRequestsRequestBuilderGetRequestConfiguration 
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
     * @var MyRequestsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRequestsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
