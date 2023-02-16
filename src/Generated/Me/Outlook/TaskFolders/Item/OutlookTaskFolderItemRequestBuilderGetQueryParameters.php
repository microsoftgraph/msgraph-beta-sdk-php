<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook\TaskFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get taskFolders from me
*/
class OutlookTaskFolderItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new OutlookTaskFolderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
