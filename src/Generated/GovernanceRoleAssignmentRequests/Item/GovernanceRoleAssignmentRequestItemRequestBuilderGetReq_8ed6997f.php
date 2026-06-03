<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: GovernanceRoleAssignmentRequestItemRequestBuilderGetRequestConfiguration
*/
class GovernanceRoleAssignmentRequestItemRequestBuilderGetReq_8ed6997f extends BaseRequestConfiguration 
{
    /**
     * @var GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df|null $queryParameters Request query parameters
    */
    public ?GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df $queryParameters = null;
    
    /**
     * Instantiates a new GovernanceRoleAssignmentRequestItemRequestBuilderGetReq_8ed6997f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df {
        return new GovernanceRoleAssignmentRequestItemRequestBuilderGetQue_18ada4df($expand, $select);
    }

}
