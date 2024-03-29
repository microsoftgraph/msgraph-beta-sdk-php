<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters {
        return new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
