<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilitySchedules\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetRequestConfiguration 
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
     * @var PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters {
        return new PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupEligibilityScheduleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
