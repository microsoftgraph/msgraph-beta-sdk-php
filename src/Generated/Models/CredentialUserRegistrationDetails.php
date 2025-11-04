<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CredentialUserRegistrationDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new CredentialUserRegistrationDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialUserRegistrationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUserRegistrationDetails {
        return new CredentialUserRegistrationDetails();
    }

    /**
     * Gets the authMethods property value. Represents the authentication method that the user has registered. Possible values are: email, mobilePhone, officePhone,  securityQuestion (only used for self-service password reset), appNotification,  appCode, alternateMobilePhone (supported only in registration),  fido,  appPassword,  unknownFutureValue.
     * @return array<RegistrationAuthMethod>|null
    */
    public function getAuthMethods(): ?array {
        $val = $this->getBackingStore()->get('authMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RegistrationAuthMethod::class);
            /** @var array<RegistrationAuthMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authMethods'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethods' => fn(ParseNode $n) => $o->setAuthMethods($n->getCollectionOfEnumValues(RegistrationAuthMethod::class)),
            'isCapable' => fn(ParseNode $n) => $o->setIsCapable($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'isMfaRegistered' => fn(ParseNode $n) => $o->setIsMfaRegistered($n->getBooleanValue()),
            'isRegistered' => fn(ParseNode $n) => $o->setIsRegistered($n->getBooleanValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isCapable property value. Indicates whether the user is ready to perform self-service password reset or MFA.
     * @return bool|null
    */
    public function getIsCapable(): ?bool {
        $val = $this->getBackingStore()->get('isCapable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCapable'");
    }

    /**
     * Gets the isEnabled property value. Indicates whether the user enabled to perform self-service password reset.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the isMfaRegistered property value. Indicates whether the user is registered for MFA.
     * @return bool|null
    */
    public function getIsMfaRegistered(): ?bool {
        $val = $this->getBackingStore()->get('isMfaRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMfaRegistered'");
    }

    /**
     * Gets the isRegistered property value. Indicates whether the user has registered any authentication methods for self-service password reset.
     * @return bool|null
    */
    public function getIsRegistered(): ?bool {
        $val = $this->getBackingStore()->get('isRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRegistered'");
    }

    /**
     * Gets the userDisplayName property value. Provides the user name of the corresponding user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userPrincipalName property value. Provides the user principal name of the corresponding user.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('authMethods', $this->getAuthMethods());
        $writer->writeBooleanValue('isCapable', $this->getIsCapable());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeBooleanValue('isMfaRegistered', $this->getIsMfaRegistered());
        $writer->writeBooleanValue('isRegistered', $this->getIsRegistered());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the authMethods property value. Represents the authentication method that the user has registered. Possible values are: email, mobilePhone, officePhone,  securityQuestion (only used for self-service password reset), appNotification,  appCode, alternateMobilePhone (supported only in registration),  fido,  appPassword,  unknownFutureValue.
     * @param array<RegistrationAuthMethod>|null $value Value to set for the authMethods property.
    */
    public function setAuthMethods(?array $value): void {
        $this->getBackingStore()->set('authMethods', $value);
    }

    /**
     * Sets the isCapable property value. Indicates whether the user is ready to perform self-service password reset or MFA.
     * @param bool|null $value Value to set for the isCapable property.
    */
    public function setIsCapable(?bool $value): void {
        $this->getBackingStore()->set('isCapable', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the user enabled to perform self-service password reset.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the isMfaRegistered property value. Indicates whether the user is registered for MFA.
     * @param bool|null $value Value to set for the isMfaRegistered property.
    */
    public function setIsMfaRegistered(?bool $value): void {
        $this->getBackingStore()->set('isMfaRegistered', $value);
    }

    /**
     * Sets the isRegistered property value. Indicates whether the user has registered any authentication methods for self-service password reset.
     * @param bool|null $value Value to set for the isRegistered property.
    */
    public function setIsRegistered(?bool $value): void {
        $this->getBackingStore()->set('isRegistered', $value);
    }

    /**
     * Sets the userDisplayName property value. Provides the user name of the corresponding user.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPrincipalName property value. Provides the user principal name of the corresponding user.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
