<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagementActionTenantDeploymentStatusItemRequestBuilderGetRequestConfiguration
*/
class ManagementActionTenantDeploymentStatusItemRequestBuilde_62b01d1e extends BaseRequestConfiguration 
{
    /**
     * @var ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687|null $queryParameters Request query parameters
    */
    public ?ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687 $queryParameters = null;
    
    /**
     * Instantiates a new ManagementActionTenantDeploymentStatusItemRequestBuilde_62b01d1e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687 {
        return new ManagementActionTenantDeploymentStatusItemRequestBuilde_ca914687($expand, $select);
    }

}
