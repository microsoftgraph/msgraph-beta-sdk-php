<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only aggregate references to the same investigation messages contained by this session's agent runs. id maps backend messageId and is unique across the session; the canonical identity belongs to the owning run. The provider preserves owning-run authorization, list/keyed GET with $select and server-driven paging. No direct or deep insert; this schema requirement does not attest runtime implementation.
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
