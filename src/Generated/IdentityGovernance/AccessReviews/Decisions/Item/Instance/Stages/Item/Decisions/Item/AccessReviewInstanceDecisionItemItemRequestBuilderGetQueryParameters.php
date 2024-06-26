<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Decisions\Item\Instance\Stages\Item\Decisions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
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
    
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
