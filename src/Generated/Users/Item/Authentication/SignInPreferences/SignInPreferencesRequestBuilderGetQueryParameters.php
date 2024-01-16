<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\SignInPreferences;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The settings and preferences for to the sign-in experience of a user. Use this property to configure the user's default multifactor authentication (MFA) method.
*/
class SignInPreferencesRequestBuilderGetQueryParameters 
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
     * Instantiates a new signInPreferencesRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
