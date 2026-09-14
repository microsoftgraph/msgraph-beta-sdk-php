<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a drive exclusion units bulk addition job associated with a OneDrive for work or school protection policy.
*/
class DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
