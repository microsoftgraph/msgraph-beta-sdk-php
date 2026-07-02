<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\AppRoleAssignedResourcesWithAppId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: appRoleAssignedResourcesWithAppIdRequestBuilderGetRequestConfiguration
*/
class AppRoleAssignedResourcesWithAppIdRequestBuilderGetReque_27b182ad extends BaseRequestConfiguration 
{
    /**
     * @var AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20|null $queryParameters Request query parameters
    */
    public ?AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20 $queryParameters = null;
    
    /**
     * Instantiates a new AppRoleAssignedResourcesWithAppIdRequestBuilderGetReque_27b182ad and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20 {
        return new AppRoleAssignedResourcesWithAppIdRequestBuilderGetQuery_4cfe8b20($expand, $select);
    }

}
