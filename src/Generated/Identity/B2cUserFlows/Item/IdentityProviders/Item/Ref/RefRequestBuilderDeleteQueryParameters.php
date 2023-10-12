<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\IdentityProviders\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete an identity provider from a b2cIdentityUserFlow object. For more information about identity providers available for user flows, see the identityProviders API reference. This API is available in the following national cloud deployments.
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
