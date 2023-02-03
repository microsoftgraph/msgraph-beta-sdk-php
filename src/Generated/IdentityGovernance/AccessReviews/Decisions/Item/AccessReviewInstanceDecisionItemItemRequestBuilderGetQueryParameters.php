<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Decisions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents an Azure AD access review decision on an instance of a review.
*/
class AccessReviewInstanceDecisionItemItemRequestBuilderGetQueryParameters 
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
