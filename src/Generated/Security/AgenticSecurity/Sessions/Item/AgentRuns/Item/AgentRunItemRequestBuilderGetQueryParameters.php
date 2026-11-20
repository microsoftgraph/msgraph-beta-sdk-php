<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\Sessions\Item\AgentRuns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get an agent run and its processing status. This operation uses the agentRun resource. List the session's agent runs to find the run id. Use that value unchanged with the same parent session identifier; the embedded agent object's key isn't the run identifier. Use this method to inspect one agent's execution. For the overall playbook state, get the parent session rather than inferring it from an individual run.
*/
class AgentRunItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new AgentRunItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
