<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethodsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsRoot {
        return new AuthenticationMethodsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userRegistrationDetails' => fn(ParseNode $n) => $o->setUserRegistrationDetails($n->getCollectionOfObjectValues([UserRegistrationDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userRegistrationDetails property value. Represents the state of a user's authentication methods, including which methods are registered and which features the user is registered and capable of (such as multi-factor authentication, self-service password reset, and passwordless authentication).
     * @return array<UserRegistrationDetails>|null
    */
    public function getUserRegistrationDetails(): ?array {
        return $this->getBackingStore()->get('userRegistrationDetails');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('userRegistrationDetails', $this->getUserRegistrationDetails());
    }

    /**
     * Sets the userRegistrationDetails property value. Represents the state of a user's authentication methods, including which methods are registered and which features the user is registered and capable of (such as multi-factor authentication, self-service password reset, and passwordless authentication).
     * @param array<UserRegistrationDetails>|null $value Value to set for the userRegistrationDetails property.
    */
    public function setUserRegistrationDetails(?array $value): void {
        $this->getBackingStore()->set('userRegistrationDetails', $value);
    }

}
