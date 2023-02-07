<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\Runs\Item\TaskProcessingResults;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaskProcessingResultsRequestBuilderGetRequestConfiguration 
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
     * @var TaskProcessingResultsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaskProcessingResultsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
