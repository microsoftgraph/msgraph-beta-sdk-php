<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile\Languages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents detailed information about languages that a user has added to their profile.
*/
class LanguageProficiencyItemRequestBuilderGetQueryParameters 
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
