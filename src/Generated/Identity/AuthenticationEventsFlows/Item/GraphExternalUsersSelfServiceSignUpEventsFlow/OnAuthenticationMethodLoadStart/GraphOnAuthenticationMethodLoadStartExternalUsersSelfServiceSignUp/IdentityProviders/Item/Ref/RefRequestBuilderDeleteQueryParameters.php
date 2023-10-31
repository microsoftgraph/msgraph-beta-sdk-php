<?php

namespace Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphOnAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp\IdentityProviders\Item\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Delete ref of navigation property identityProviders for identity
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
