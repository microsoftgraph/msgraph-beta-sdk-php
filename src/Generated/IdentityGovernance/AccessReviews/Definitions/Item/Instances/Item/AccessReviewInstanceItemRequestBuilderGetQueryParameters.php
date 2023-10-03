<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve an accessReviewInstance object using the identifier of an accessReviewInstance and its parent accessReviewScheduleDefinition. This returns all properties of the instance except for the associated accessReviewInstanceDecisionItems. To retrieve the decisions on the instance, use List accessReviewInstanceDecisionItem. This API is supported in the following national cloud deployments.
*/
class AccessReviewInstanceItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new AccessReviewInstanceItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
