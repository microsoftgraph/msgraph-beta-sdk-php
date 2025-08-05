<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userEventsSummary' => fn(ParseNode $n) => $o->setUserEventsSummary($n->getCollectionOfObjectValues([UserEventsSummary::class, 'createFromDiscriminatorValue'])),
            'userMfaSignInSummary' => fn(ParseNode $n) => $o->setUserMfaSignInSummary($n->getCollectionOfObjectValues([UserMfaSignInSummary::class, 'createFromDiscriminatorValue'])),
            'userPasswordResetsAndChangesSummary' => fn(ParseNode $n) => $o->setUserPasswordResetsAndChangesSummary($n->getCollectionOfObjectValues([UserPasswordResetsAndChangesSummary::class, 'createFromDiscriminatorValue'])),
            'userRegistrationDetails' => fn(ParseNode $n) => $o->setUserRegistrationDetails($n->getCollectionOfObjectValues([UserRegistrationDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userEventsSummary property value. Represents a specific user MFA/SSPR registration or reset event, including whether the event was successful, which authentication method was targeted, and failure reason if any.
     * @return array<UserEventsSummary>|null
    */
    public function getUserEventsSummary(): ?array {
        $val = $this->getBackingStore()->get('userEventsSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserEventsSummary::class);
            /** @var array<UserEventsSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userEventsSummary'");
    }

    /**
     * Gets the userMfaSignInSummary property value. Represents the total count of MFA vs non-MFA sign-in counts for a specified period.
     * @return array<UserMfaSignInSummary>|null
    */
    public function getUserMfaSignInSummary(): ?array {
        $val = $this->getBackingStore()->get('userMfaSignInSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserMfaSignInSummary::class);
            /** @var array<UserMfaSignInSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userMfaSignInSummary'");
    }

    /**
     * Gets the userPasswordResetsAndChangesSummary property value. Represents the summary of password resets and changes for a specific day. This includes the number of password resets that were self-service and those triggered by an administrator.
     * @return array<UserPasswordResetsAndChangesSummary>|null
    */
    public function getUserPasswordResetsAndChangesSummary(): ?array {
        $val = $this->getBackingStore()->get('userPasswordResetsAndChangesSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserPasswordResetsAndChangesSummary::class);
            /** @var array<UserPasswordResetsAndChangesSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPasswordResetsAndChangesSummary'");
    }

    /**
     * Gets the userRegistrationDetails property value. Represents the state of a user's authentication methods, including which methods are registered and which features the user is registered and capable of (such as multifactor authentication, self-service password reset, and passwordless authentication).
     * @return array<UserRegistrationDetails>|null
    */
    public function getUserRegistrationDetails(): ?array {
        $val = $this->getBackingStore()->get('userRegistrationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserRegistrationDetails::class);
            /** @var array<UserRegistrationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRegistrationDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('userEventsSummary', $this->getUserEventsSummary());
        $writer->writeCollectionOfObjectValues('userMfaSignInSummary', $this->getUserMfaSignInSummary());
        $writer->writeCollectionOfObjectValues('userPasswordResetsAndChangesSummary', $this->getUserPasswordResetsAndChangesSummary());
        $writer->writeCollectionOfObjectValues('userRegistrationDetails', $this->getUserRegistrationDetails());
    }

    /**
     * Sets the userEventsSummary property value. Represents a specific user MFA/SSPR registration or reset event, including whether the event was successful, which authentication method was targeted, and failure reason if any.
     * @param array<UserEventsSummary>|null $value Value to set for the userEventsSummary property.
    */
    public function setUserEventsSummary(?array $value): void {
        $this->getBackingStore()->set('userEventsSummary', $value);
    }

    /**
     * Sets the userMfaSignInSummary property value. Represents the total count of MFA vs non-MFA sign-in counts for a specified period.
     * @param array<UserMfaSignInSummary>|null $value Value to set for the userMfaSignInSummary property.
    */
    public function setUserMfaSignInSummary(?array $value): void {
        $this->getBackingStore()->set('userMfaSignInSummary', $value);
    }

    /**
     * Sets the userPasswordResetsAndChangesSummary property value. Represents the summary of password resets and changes for a specific day. This includes the number of password resets that were self-service and those triggered by an administrator.
     * @param array<UserPasswordResetsAndChangesSummary>|null $value Value to set for the userPasswordResetsAndChangesSummary property.
    */
    public function setUserPasswordResetsAndChangesSummary(?array $value): void {
        $this->getBackingStore()->set('userPasswordResetsAndChangesSummary', $value);
    }

    /**
     * Sets the userRegistrationDetails property value. Represents the state of a user's authentication methods, including which methods are registered and which features the user is registered and capable of (such as multifactor authentication, self-service password reset, and passwordless authentication).
     * @param array<UserRegistrationDetails>|null $value Value to set for the userRegistrationDetails property.
    */
    public function setUserRegistrationDetails(?array $value): void {
        $this->getBackingStore()->set('userRegistrationDetails', $value);
    }

}
