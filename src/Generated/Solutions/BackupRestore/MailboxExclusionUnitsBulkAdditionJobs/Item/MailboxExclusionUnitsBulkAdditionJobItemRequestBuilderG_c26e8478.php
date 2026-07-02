<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\MailboxExclusionUnitsBulkAdditionJobs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of bulk addition jobs for mailbox exclusion units in the tenant. Original name: MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderGetQueryParameters
*/
class MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478 
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
     * Instantiates a new MailboxExclusionUnitsBulkAdditionJobItemRequestBuilderG_c26e8478 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
