<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
*/
class IdentityVerificationEventItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new IdentityVerificationEventItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
