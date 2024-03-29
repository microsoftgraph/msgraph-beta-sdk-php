<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrivilegedRoleAssignmentRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrivilegedRoleAssignmentRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters {
        return new PrivilegedRoleAssignmentRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
