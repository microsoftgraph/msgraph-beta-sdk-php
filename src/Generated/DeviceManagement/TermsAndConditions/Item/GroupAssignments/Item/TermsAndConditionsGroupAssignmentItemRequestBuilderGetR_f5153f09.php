<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\TermsAndConditions\Item\GroupAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TermsAndConditionsGroupAssignmentItemRequestBuilderGetRequestConfiguration
*/
class TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09 extends BaseRequestConfiguration 
{
    /**
     * @var TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730 $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsGroupAssignmentItemRequestBuilderGetR_f5153f09 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730 {
        return new TermsAndConditionsGroupAssignmentItemRequestBuilderGetQ_8d3eb730($expand, $select);
    }

}
