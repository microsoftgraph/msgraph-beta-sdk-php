<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentResourceRoles\Item\AccessPackageSubject\ConnectedOrganization;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConnectedOrganizationRequestBuilderGetRequestConfiguration 
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
     * @var ConnectedOrganizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConnectedOrganizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new connectedOrganizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConnectedOrganizationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ConnectedOrganizationRequestBuilderGetQueryParameters {
        return new ConnectedOrganizationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new connectedOrganizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ConnectedOrganizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConnectedOrganizationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
