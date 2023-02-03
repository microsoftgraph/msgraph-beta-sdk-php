<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Errors;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ErrorsRequestBuilderGetRequestConfiguration 
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
     * @var ErrorsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ErrorsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
