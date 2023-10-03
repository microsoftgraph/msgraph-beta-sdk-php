<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsManagement;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionsManagementRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PermissionsManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionsManagementRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new permissionsManagementRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PermissionsManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PermissionsManagementRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new permissionsManagementRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PermissionsManagementRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PermissionsManagementRequestBuilderGetQueryParameters {
        return new PermissionsManagementRequestBuilderGetQueryParameters($expand, $select);
    }

}
