<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Outlook;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Selective Outlook services available to the user. Read-only. Nullable.
*/
class OutlookRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new outlookRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
