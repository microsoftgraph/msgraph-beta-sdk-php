<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: crossTenantMigrationJobsWithDisplayNameRequestBuilderGetRequestConfiguration
*/
class CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_aa4d205c extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d|null $queryParameters Request query parameters
    */
    public ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_aa4d205c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d {
        return new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGe_0270ed9d($expand, $select);
    }

}
