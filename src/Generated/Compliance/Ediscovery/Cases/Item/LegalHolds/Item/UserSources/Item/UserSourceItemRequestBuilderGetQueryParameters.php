<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\Item\UserSources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
*/
class UserSourceItemRequestBuilderGetQueryParameters 
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
    
}
