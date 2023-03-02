<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\Item\TaskFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of task folders in the task group. Read-only. Nullable.
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
