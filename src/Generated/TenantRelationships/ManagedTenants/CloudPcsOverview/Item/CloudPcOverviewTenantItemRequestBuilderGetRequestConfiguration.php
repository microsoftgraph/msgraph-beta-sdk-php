<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudPcOverviewTenantItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcOverviewTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPcOverviewTenantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcOverviewTenantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcOverviewTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcOverviewTenantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcOverviewTenantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcOverviewTenantItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcOverviewTenantItemRequestBuilderGetQueryParameters {
        return new CloudPcOverviewTenantItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
