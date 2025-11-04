<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignments\Item\AccessPackage\AccessPackageResourceRoleScopes\Item\AccessPackageResourceScope\AccessPackageResource\AccessPackageResourceRoles\Item\AccessPackageResource;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessPackageResourceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackageResourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessPackageResourceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageResourceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageResourceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageResourceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageResourceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageResourceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageResourceRequestBuilderGetQueryParameters {
        return new AccessPackageResourceRequestBuilderGetQueryParameters($expand, $select);
    }

}
