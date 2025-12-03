<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobsWithDisplayName;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of crossTenantMigrationJob object. Includes details of the crossTenantMigrationJob , but not details of the individual crossTenantMigrationTasks of the crossTenantMigrationJob.
*/
class CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CrossTenantMigrationJobsWithDisplayNameRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
