<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a user's single Microsoft Authenticator Passwordless Phone Sign-in method object. This API is supported in the following national cloud deployments.
*/
class PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PasswordlessMicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
