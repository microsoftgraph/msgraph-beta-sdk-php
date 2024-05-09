<?php

namespace Microsoft\Graph\Beta\Generated\Identity\B2cUserFlows\Item\IdentityProviders\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete an identity provider from a b2cIdentityUserFlow object. For more information about identity providers available for user flows, see the identityProviders API reference.
*/
class RefRequestBuilderDeleteQueryParameters 
{
    /**
     * @QueryParameter("%40id")
     * @var string|null $id The delete Uri
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new RefRequestBuilderDeleteQueryParameters and sets the default values.
     * @param string|null $id The delete Uri
    */
    public function __construct(?string $id = null) {
        $this->id = $id;
    }

}
