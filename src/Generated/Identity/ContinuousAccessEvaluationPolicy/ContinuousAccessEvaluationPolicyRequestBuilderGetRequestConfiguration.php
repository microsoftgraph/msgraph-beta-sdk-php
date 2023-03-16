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
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new continuousAccessEvaluationPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new continuousAccessEvaluationPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters {
        return new ContinuousAccessEvaluationPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
