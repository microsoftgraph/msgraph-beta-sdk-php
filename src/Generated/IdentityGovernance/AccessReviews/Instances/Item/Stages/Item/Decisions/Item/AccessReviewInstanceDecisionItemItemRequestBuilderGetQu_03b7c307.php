<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Instances\Item\Stages\Item\Decisions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed. Original name: AccessReviewInstanceDecisionItemItemRequestBuilderGetQueryParameters
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
