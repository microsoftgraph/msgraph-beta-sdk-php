<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\PlaybookDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a playbook definition from the catalog or the definition selected by an agentic session. This operation uses the playbookDefinition resource.
*/
class PlaybookDefinitionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PlaybookDefinitionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
