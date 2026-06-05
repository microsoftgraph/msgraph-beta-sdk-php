<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\CloudPC\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UnifiedRoleAssignmentMultipleItemRequestBuilderGetRequestConfiguration
*/
class UnifiedRoleAssignmentMultipleItemRequestBuilderGetReque_43b0c8ce extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27 $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentMultipleItemRequestBuilderGetReque_43b0c8ce and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27 {
        return new UnifiedRoleAssignmentMultipleItemRequestBuilderGetQuery_ade08d27($expand, $select);
    }

}
