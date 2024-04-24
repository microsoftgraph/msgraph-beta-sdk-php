<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Outlook\TaskGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get taskGroups from users
*/
class OutlookTaskGroupItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new OutlookTaskGroupItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
