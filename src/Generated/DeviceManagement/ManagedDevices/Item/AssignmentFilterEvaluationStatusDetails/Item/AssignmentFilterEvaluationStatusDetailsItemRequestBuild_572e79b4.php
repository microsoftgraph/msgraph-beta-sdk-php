<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\AssignmentFilterEvaluationStatusDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AssignmentFilterEvaluationStatusDetailsItemRequestBuilderGetRequestConfiguration
*/
class AssignmentFilterEvaluationStatusDetailsItemRequestBuild_572e79b4 extends BaseRequestConfiguration 
{
    /**
     * @var AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217|null $queryParameters Request query parameters
    */
    public ?AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217 $queryParameters = null;
    
    /**
     * Instantiates a new AssignmentFilterEvaluationStatusDetailsItemRequestBuild_572e79b4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217 {
        return new AssignmentFilterEvaluationStatusDetailsItemRequestBuild_6bbdb217($expand, $select);
    }

}
