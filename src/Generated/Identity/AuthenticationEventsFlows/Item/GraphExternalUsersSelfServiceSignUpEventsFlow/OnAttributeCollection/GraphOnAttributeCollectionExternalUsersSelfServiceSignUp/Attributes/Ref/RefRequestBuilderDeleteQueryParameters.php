<?php

namespace Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventsFlows\Item\GraphExternalUsersSelfServiceSignUpEventsFlow\OnAttributeCollection\GraphOnAttributeCollectionExternalUsersSelfServiceSignUp\Attributes\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Remove an attribute from an external identities self-service sign up user flow that's represented by an externalUsersSelfServiceSignupEventsFlow object. You can add both custom and built-in attributes to a user flow. After this step, PATCH the user flow to remove the attribute from the attribute collection step.
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
