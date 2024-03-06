<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleAssignments\Item\LinkedEligibleRoleAssignment;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LinkedEligibleRoleAssignmentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LinkedEligibleRoleAssignmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters {
        return new LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters($expand, $select);
    }

}
