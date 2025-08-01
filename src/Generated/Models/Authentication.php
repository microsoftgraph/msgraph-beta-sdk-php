<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Authentication extends Entity implements Parsable 
{
    /**
     * Instantiates a new Authentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Authentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Authentication {
        return new Authentication();
    }

    /**
     * Gets the emailMethods property value. Represents the email addresses registered to a user for authentication.
     * @return array<EmailAuthenticationMethod>|null
    */
    public function getEmailMethods(): ?array {
        $val = $this->getBackingStore()->get('emailMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmailAuthenticationMethod::class);
            /** @var array<EmailAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailMethods'");
    }

    /**
     * Gets the externalAuthenticationMethods property value. The externalAuthenticationMethods property
     * @return array<ExternalAuthenticationMethod>|null
    */
    public function getExternalAuthenticationMethods(): ?array {
        $val = $this->getBackingStore()->get('externalAuthenticationMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalAuthenticationMethod::class);
            /** @var array<ExternalAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalAuthenticationMethods'");
    }

    /**
     * Gets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     * @return array<Fido2AuthenticationMethod>|null
    */
    public function getFido2Methods(): ?array {
        $val = $this->getBackingStore()->get('fido2Methods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Fido2AuthenticationMethod::class);
            /** @var array<Fido2AuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fido2Methods'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailMethods' => fn(ParseNode $n) => $o->setEmailMethods($n->getCollectionOfObjectValues([EmailAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'externalAuthenticationMethods' => fn(ParseNode $n) => $o->setExternalAuthenticationMethods($n->getCollectionOfObjectValues([ExternalAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'fido2Methods' => fn(ParseNode $n) => $o->setFido2Methods($n->getCollectionOfObjectValues([Fido2AuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'hardwareOathMethods' => fn(ParseNode $n) => $o->setHardwareOathMethods($n->getCollectionOfObjectValues([HardwareOathAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'methods' => fn(ParseNode $n) => $o->setMethods($n->getCollectionOfObjectValues([AuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'microsoftAuthenticatorMethods' => fn(ParseNode $n) => $o->setMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues([MicrosoftAuthenticatorAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([LongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'passwordlessMicrosoftAuthenticatorMethods' => fn(ParseNode $n) => $o->setPasswordlessMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues([PasswordlessMicrosoftAuthenticatorAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'passwordMethods' => fn(ParseNode $n) => $o->setPasswordMethods($n->getCollectionOfObjectValues([PasswordAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'phoneMethods' => fn(ParseNode $n) => $o->setPhoneMethods($n->getCollectionOfObjectValues([PhoneAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'platformCredentialMethods' => fn(ParseNode $n) => $o->setPlatformCredentialMethods($n->getCollectionOfObjectValues([PlatformCredentialAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'qrCodePinMethod' => fn(ParseNode $n) => $o->setQrCodePinMethod($n->getObjectValue([QrCodePinAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'requirements' => fn(ParseNode $n) => $o->setRequirements($n->getObjectValue([StrongAuthenticationRequirements::class, 'createFromDiscriminatorValue'])),
            'signInPreferences' => fn(ParseNode $n) => $o->setSignInPreferences($n->getObjectValue([SignInPreferences::class, 'createFromDiscriminatorValue'])),
            'softwareOathMethods' => fn(ParseNode $n) => $o->setSoftwareOathMethods($n->getCollectionOfObjectValues([SoftwareOathAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'temporaryAccessPassMethods' => fn(ParseNode $n) => $o->setTemporaryAccessPassMethods($n->getCollectionOfObjectValues([TemporaryAccessPassAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
            'windowsHelloForBusinessMethods' => fn(ParseNode $n) => $o->setWindowsHelloForBusinessMethods($n->getCollectionOfObjectValues([WindowsHelloForBusinessAuthenticationMethod::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hardwareOathMethods property value. The hardware OATH time-based one-time password (TOTP) devices assigned to a user for authentication.
     * @return array<HardwareOathAuthenticationMethod>|null
    */
    public function getHardwareOathMethods(): ?array {
        $val = $this->getBackingStore()->get('hardwareOathMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareOathAuthenticationMethod::class);
            /** @var array<HardwareOathAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareOathMethods'");
    }

    /**
     * Gets the methods property value. Represents all authentication methods registered to a user.
     * @return array<AuthenticationMethod>|null
    */
    public function getMethods(): ?array {
        $val = $this->getBackingStore()->get('methods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethod::class);
            /** @var array<AuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'methods'");
    }

    /**
     * Gets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     * @return array<MicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getMicrosoftAuthenticatorMethods(): ?array {
        $val = $this->getBackingStore()->get('microsoftAuthenticatorMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftAuthenticatorAuthenticationMethod::class);
            /** @var array<MicrosoftAuthenticatorAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftAuthenticatorMethods'");
    }

    /**
     * Gets the operations property value. Represents the status of a long-running operation, such as a password reset operation.
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LongRunningOperation::class);
            /** @var array<LongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the passwordlessMicrosoftAuthenticatorMethods property value. Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     * @return array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getPasswordlessMicrosoftAuthenticatorMethods(): ?array {
        $val = $this->getBackingStore()->get('passwordlessMicrosoftAuthenticatorMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PasswordlessMicrosoftAuthenticatorAuthenticationMethod::class);
            /** @var array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordlessMicrosoftAuthenticatorMethods'");
    }

    /**
     * Gets the passwordMethods property value. Represents the details of the password authentication method registered to a user for authentication.
     * @return array<PasswordAuthenticationMethod>|null
    */
    public function getPasswordMethods(): ?array {
        $val = $this->getBackingStore()->get('passwordMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PasswordAuthenticationMethod::class);
            /** @var array<PasswordAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMethods'");
    }

    /**
     * Gets the phoneMethods property value. Represents the phone registered to a user for authentication.
     * @return array<PhoneAuthenticationMethod>|null
    */
    public function getPhoneMethods(): ?array {
        $val = $this->getBackingStore()->get('phoneMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PhoneAuthenticationMethod::class);
            /** @var array<PhoneAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneMethods'");
    }

    /**
     * Gets the platformCredentialMethods property value. Represents a platform credential instance registered to a user on Mac OS.
     * @return array<PlatformCredentialAuthenticationMethod>|null
    */
    public function getPlatformCredentialMethods(): ?array {
        $val = $this->getBackingStore()->get('platformCredentialMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlatformCredentialAuthenticationMethod::class);
            /** @var array<PlatformCredentialAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformCredentialMethods'");
    }

    /**
     * Gets the qrCodePinMethod property value. Represents a QR code authentication method registered to a user for authentication.
     * @return QrCodePinAuthenticationMethod|null
    */
    public function getQrCodePinMethod(): ?QrCodePinAuthenticationMethod {
        $val = $this->getBackingStore()->get('qrCodePinMethod');
        if (is_null($val) || $val instanceof QrCodePinAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qrCodePinMethod'");
    }

    /**
     * Gets the requirements property value. The settings and preferences for per-user Microsoft Entra multifactor authentication.
     * @return StrongAuthenticationRequirements|null
    */
    public function getRequirements(): ?StrongAuthenticationRequirements {
        $val = $this->getBackingStore()->get('requirements');
        if (is_null($val) || $val instanceof StrongAuthenticationRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirements'");
    }

    /**
     * Gets the signInPreferences property value. The settings and preferences for the sign-in experience of a user. Use this property to configure the user's default multifactor authentication (MFA) method.
     * @return SignInPreferences|null
    */
    public function getSignInPreferences(): ?SignInPreferences {
        $val = $this->getBackingStore()->get('signInPreferences');
        if (is_null($val) || $val instanceof SignInPreferences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInPreferences'");
    }

    /**
     * Gets the softwareOathMethods property value. The software OATH time-based one-time password (TOTP) applications registered to a user for authentication.
     * @return array<SoftwareOathAuthenticationMethod>|null
    */
    public function getSoftwareOathMethods(): ?array {
        $val = $this->getBackingStore()->get('softwareOathMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SoftwareOathAuthenticationMethod::class);
            /** @var array<SoftwareOathAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareOathMethods'");
    }

    /**
     * Gets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @return array<TemporaryAccessPassAuthenticationMethod>|null
    */
    public function getTemporaryAccessPassMethods(): ?array {
        $val = $this->getBackingStore()->get('temporaryAccessPassMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TemporaryAccessPassAuthenticationMethod::class);
            /** @var array<TemporaryAccessPassAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporaryAccessPassMethods'");
    }

    /**
     * Gets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @return array<WindowsHelloForBusinessAuthenticationMethod>|null
    */
    public function getWindowsHelloForBusinessMethods(): ?array {
        $val = $this->getBackingStore()->get('windowsHelloForBusinessMethods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsHelloForBusinessAuthenticationMethod::class);
            /** @var array<WindowsHelloForBusinessAuthenticationMethod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsHelloForBusinessMethods'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailMethods', $this->getEmailMethods());
        $writer->writeCollectionOfObjectValues('externalAuthenticationMethods', $this->getExternalAuthenticationMethods());
        $writer->writeCollectionOfObjectValues('fido2Methods', $this->getFido2Methods());
        $writer->writeCollectionOfObjectValues('hardwareOathMethods', $this->getHardwareOathMethods());
        $writer->writeCollectionOfObjectValues('methods', $this->getMethods());
        $writer->writeCollectionOfObjectValues('microsoftAuthenticatorMethods', $this->getMicrosoftAuthenticatorMethods());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('passwordlessMicrosoftAuthenticatorMethods', $this->getPasswordlessMicrosoftAuthenticatorMethods());
        $writer->writeCollectionOfObjectValues('passwordMethods', $this->getPasswordMethods());
        $writer->writeCollectionOfObjectValues('phoneMethods', $this->getPhoneMethods());
        $writer->writeCollectionOfObjectValues('platformCredentialMethods', $this->getPlatformCredentialMethods());
        $writer->writeObjectValue('qrCodePinMethod', $this->getQrCodePinMethod());
        $writer->writeObjectValue('requirements', $this->getRequirements());
        $writer->writeObjectValue('signInPreferences', $this->getSignInPreferences());
        $writer->writeCollectionOfObjectValues('softwareOathMethods', $this->getSoftwareOathMethods());
        $writer->writeCollectionOfObjectValues('temporaryAccessPassMethods', $this->getTemporaryAccessPassMethods());
        $writer->writeCollectionOfObjectValues('windowsHelloForBusinessMethods', $this->getWindowsHelloForBusinessMethods());
    }

    /**
     * Sets the emailMethods property value. Represents the email addresses registered to a user for authentication.
     * @param array<EmailAuthenticationMethod>|null $value Value to set for the emailMethods property.
    */
    public function setEmailMethods(?array $value): void {
        $this->getBackingStore()->set('emailMethods', $value);
    }

    /**
     * Sets the externalAuthenticationMethods property value. The externalAuthenticationMethods property
     * @param array<ExternalAuthenticationMethod>|null $value Value to set for the externalAuthenticationMethods property.
    */
    public function setExternalAuthenticationMethods(?array $value): void {
        $this->getBackingStore()->set('externalAuthenticationMethods', $value);
    }

    /**
     * Sets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     * @param array<Fido2AuthenticationMethod>|null $value Value to set for the fido2Methods property.
    */
    public function setFido2Methods(?array $value): void {
        $this->getBackingStore()->set('fido2Methods', $value);
    }

    /**
     * Sets the hardwareOathMethods property value. The hardware OATH time-based one-time password (TOTP) devices assigned to a user for authentication.
     * @param array<HardwareOathAuthenticationMethod>|null $value Value to set for the hardwareOathMethods property.
    */
    public function setHardwareOathMethods(?array $value): void {
        $this->getBackingStore()->set('hardwareOathMethods', $value);
    }

    /**
     * Sets the methods property value. Represents all authentication methods registered to a user.
     * @param array<AuthenticationMethod>|null $value Value to set for the methods property.
    */
    public function setMethods(?array $value): void {
        $this->getBackingStore()->set('methods', $value);
    }

    /**
     * Sets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     * @param array<MicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the microsoftAuthenticatorMethods property.
    */
    public function setMicrosoftAuthenticatorMethods(?array $value): void {
        $this->getBackingStore()->set('microsoftAuthenticatorMethods', $value);
    }

    /**
     * Sets the operations property value. Represents the status of a long-running operation, such as a password reset operation.
     * @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the passwordlessMicrosoftAuthenticatorMethods property value. Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     * @param array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the passwordlessMicrosoftAuthenticatorMethods property.
    */
    public function setPasswordlessMicrosoftAuthenticatorMethods(?array $value): void {
        $this->getBackingStore()->set('passwordlessMicrosoftAuthenticatorMethods', $value);
    }

    /**
     * Sets the passwordMethods property value. Represents the details of the password authentication method registered to a user for authentication.
     * @param array<PasswordAuthenticationMethod>|null $value Value to set for the passwordMethods property.
    */
    public function setPasswordMethods(?array $value): void {
        $this->getBackingStore()->set('passwordMethods', $value);
    }

    /**
     * Sets the phoneMethods property value. Represents the phone registered to a user for authentication.
     * @param array<PhoneAuthenticationMethod>|null $value Value to set for the phoneMethods property.
    */
    public function setPhoneMethods(?array $value): void {
        $this->getBackingStore()->set('phoneMethods', $value);
    }

    /**
     * Sets the platformCredentialMethods property value. Represents a platform credential instance registered to a user on Mac OS.
     * @param array<PlatformCredentialAuthenticationMethod>|null $value Value to set for the platformCredentialMethods property.
    */
    public function setPlatformCredentialMethods(?array $value): void {
        $this->getBackingStore()->set('platformCredentialMethods', $value);
    }

    /**
     * Sets the qrCodePinMethod property value. Represents a QR code authentication method registered to a user for authentication.
     * @param QrCodePinAuthenticationMethod|null $value Value to set for the qrCodePinMethod property.
    */
    public function setQrCodePinMethod(?QrCodePinAuthenticationMethod $value): void {
        $this->getBackingStore()->set('qrCodePinMethod', $value);
    }

    /**
     * Sets the requirements property value. The settings and preferences for per-user Microsoft Entra multifactor authentication.
     * @param StrongAuthenticationRequirements|null $value Value to set for the requirements property.
    */
    public function setRequirements(?StrongAuthenticationRequirements $value): void {
        $this->getBackingStore()->set('requirements', $value);
    }

    /**
     * Sets the signInPreferences property value. The settings and preferences for the sign-in experience of a user. Use this property to configure the user's default multifactor authentication (MFA) method.
     * @param SignInPreferences|null $value Value to set for the signInPreferences property.
    */
    public function setSignInPreferences(?SignInPreferences $value): void {
        $this->getBackingStore()->set('signInPreferences', $value);
    }

    /**
     * Sets the softwareOathMethods property value. The software OATH time-based one-time password (TOTP) applications registered to a user for authentication.
     * @param array<SoftwareOathAuthenticationMethod>|null $value Value to set for the softwareOathMethods property.
    */
    public function setSoftwareOathMethods(?array $value): void {
        $this->getBackingStore()->set('softwareOathMethods', $value);
    }

    /**
     * Sets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @param array<TemporaryAccessPassAuthenticationMethod>|null $value Value to set for the temporaryAccessPassMethods property.
    */
    public function setTemporaryAccessPassMethods(?array $value): void {
        $this->getBackingStore()->set('temporaryAccessPassMethods', $value);
    }

    /**
     * Sets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @param array<WindowsHelloForBusinessAuthenticationMethod>|null $value Value to set for the windowsHelloForBusinessMethods property.
    */
    public function setWindowsHelloForBusinessMethods(?array $value): void {
        $this->getBackingStore()->set('windowsHelloForBusinessMethods', $value);
    }

}
