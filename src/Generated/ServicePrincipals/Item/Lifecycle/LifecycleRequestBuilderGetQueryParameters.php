<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Lifecycle;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of an microsoft.graph.identityGovernance.identityLifecycle object for a servicePrincipal. Use $expand=effectiveGoverningPolicy to retrieve the highest-priority policy governing the identity. The lastAttestationDateTime property can be null for an identity that hasn't yet been attested.
*/
class LifecycleRequestBuilderGetQueryParameters 
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
     * Instantiates a new LifecycleRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
