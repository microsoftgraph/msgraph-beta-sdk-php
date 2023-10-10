<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove a claimsMappingPolicy from a servicePrincipal. This API is available in the following national cloud deployments.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id Delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id Delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
