<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackageAssignmentResourceRoles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AccessPackageAssignmentResourceRoleItemRequestBuilderGetRequestConfiguration
*/
class AccessPackageAssignmentResourceRoleItemRequestBuilderGe_7e00acbf extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b|null $queryParameters Request query parameters
    */
    public ?AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageAssignmentResourceRoleItemRequestBuilderGe_7e00acbf and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b {
        return new AccessPackageAssignmentResourceRoleItemRequestBuilderGe_20085e2b($expand, $select);
    }

}
