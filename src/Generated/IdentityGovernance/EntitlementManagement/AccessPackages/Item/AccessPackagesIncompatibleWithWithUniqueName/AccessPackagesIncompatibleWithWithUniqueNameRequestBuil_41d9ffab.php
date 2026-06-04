<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWithWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: accessPackagesIncompatibleWithWithUniqueNameRequestBuilderGetRequestConfiguration
*/
class AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_41d9ffab extends BaseRequestConfiguration 
{
    /**
     * @var AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51|null $queryParameters Request query parameters
    */
    public ?AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51 $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_41d9ffab and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51 {
        return new AccessPackagesIncompatibleWithWithUniqueNameRequestBuil_1f4fff51($expand, $select);
    }

}
