<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get generativeAIInsights from networkAccess Original name: GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters
*/
class GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06 
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
     * Instantiates a new GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
