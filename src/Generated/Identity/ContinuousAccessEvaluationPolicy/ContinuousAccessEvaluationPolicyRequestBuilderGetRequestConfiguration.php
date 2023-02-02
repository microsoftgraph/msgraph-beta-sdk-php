<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ContinuousAccessEvaluationPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContinuousAccessEvaluationPolicyRequestBuilderGetRequestConfiguration 
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
     * @var ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
}
