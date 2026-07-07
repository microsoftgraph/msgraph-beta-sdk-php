<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Decisions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents a Microsoft Entra access review decision on an instance of a review. Original name: AccessReviewInstanceDecisionItemItemRequestBuilderGetQueryParameters
*/
class AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307 
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
     * Instantiates a new AccessReviewInstanceDecisionItemItemRequestBuilderGetQu_03b7c307 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
