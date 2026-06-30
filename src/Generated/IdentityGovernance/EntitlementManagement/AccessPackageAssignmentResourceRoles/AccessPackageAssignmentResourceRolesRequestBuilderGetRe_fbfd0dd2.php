<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentResourceRoles;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: accessPackageAssignmentResourceRolesRequestBuilderGetRequestConfiguration
*/
class AccessPackageAssignmentResourceRolesRequestBuilderGetRe_fbfd0dd2 extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb|null $queryParameters Request query parameters
    */
    public ?AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageAssignmentResourceRolesRequestBuilderGetRe_fbfd0dd2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb {
        return new AccessPackageAssignmentResourceRolesRequestBuilderGetQu_318b5afb($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
