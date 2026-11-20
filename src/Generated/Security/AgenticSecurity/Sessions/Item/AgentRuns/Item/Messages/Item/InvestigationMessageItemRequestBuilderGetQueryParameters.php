<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only investigation messages contained by this run; id maps backend messageId. Supports collection and keyed reads. Message creation is not supported. Collection overflow requires an @odata.nextLink preserving tenant, caller, parent and query context; this schema requirement does not attest runtime implementation.
*/
class InvestigationMessageItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new InvestigationMessageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
