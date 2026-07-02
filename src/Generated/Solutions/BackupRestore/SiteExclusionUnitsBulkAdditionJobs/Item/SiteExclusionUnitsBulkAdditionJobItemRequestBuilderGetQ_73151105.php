<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SiteExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of bulk addition jobs for site exclusion units in the tenant. Original name: SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
*/
class SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105 
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
     * Instantiates a new SiteExclusionUnitsBulkAdditionJobItemRequestBuilderGetQ_73151105 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
