<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignedResourcesWithAppId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new appRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new appRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters {
        return new AppRoleAssignedResourcesWithAppIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
