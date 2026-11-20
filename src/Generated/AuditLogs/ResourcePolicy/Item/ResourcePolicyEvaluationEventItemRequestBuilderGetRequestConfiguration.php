<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\ResourcePolicy\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourcePolicyEvaluationEventItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ResourcePolicyEvaluationEventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters {
        return new ResourcePolicyEvaluationEventItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
