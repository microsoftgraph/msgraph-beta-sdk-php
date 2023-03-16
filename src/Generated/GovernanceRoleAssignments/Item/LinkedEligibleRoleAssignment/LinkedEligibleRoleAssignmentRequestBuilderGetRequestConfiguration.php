<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\Item\LinkedEligibleRoleAssignment;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LinkedEligibleRoleAssignmentRequestBuilderGetRequestConfiguration 
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
     * @var LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new linkedEligibleRoleAssignmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters {
        return new LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new linkedEligibleRoleAssignmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LinkedEligibleRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
