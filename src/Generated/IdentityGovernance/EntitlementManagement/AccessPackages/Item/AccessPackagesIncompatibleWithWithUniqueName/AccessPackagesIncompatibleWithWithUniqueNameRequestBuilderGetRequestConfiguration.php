<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWithWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters {
        return new AccessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
