<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConnectedOrganizationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConnectedOrganizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConnectedOrganizationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConnectedOrganizationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConnectedOrganizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConnectedOrganizationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConnectedOrganizationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConnectedOrganizationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConnectedOrganizationItemRequestBuilderGetQueryParameters {
        return new ConnectedOrganizationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
