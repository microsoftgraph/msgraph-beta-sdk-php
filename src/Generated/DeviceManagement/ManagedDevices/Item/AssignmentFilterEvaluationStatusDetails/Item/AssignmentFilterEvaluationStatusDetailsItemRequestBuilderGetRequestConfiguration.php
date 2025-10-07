<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters {
        return new AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
