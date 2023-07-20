<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This entity provides descriptions of the declared methods, properties and relationships exposed by Windows Hello for Business.
*/
class WindowsIdentityProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windowsIdentityProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsIdentityProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsIdentityProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsIdentityProtectionConfiguration {
        return new WindowsIdentityProtectionConfiguration();
    }

    /**
     * Gets the enhancedAntiSpoofingForFacialFeaturesEnabled property value. Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
     * @return bool|null
    */
    public function getEnhancedAntiSpoofingForFacialFeaturesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enhancedAntiSpoofingForFacialFeaturesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enhancedAntiSpoofingForFacialFeaturesEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enhancedAntiSpoofingForFacialFeaturesEnabled' => fn(ParseNode $n) => $o->setEnhancedAntiSpoofingForFacialFeaturesEnabled($n->getBooleanValue()),
            'pinExpirationInDays' => fn(ParseNode $n) => $o->setPinExpirationInDays($n->getIntegerValue()),
            'pinLowercaseCharactersUsage' => fn(ParseNode $n) => $o->setPinLowercaseCharactersUsage($n->getEnumValue(ConfigurationUsage::class)),
            'pinMaximumLength' => fn(ParseNode $n) => $o->setPinMaximumLength($n->getIntegerValue()),
            'pinMinimumLength' => fn(ParseNode $n) => $o->setPinMinimumLength($n->getIntegerValue()),
            'pinPreviousBlockCount' => fn(ParseNode $n) => $o->setPinPreviousBlockCount($n->getIntegerValue()),
            'pinRecoveryEnabled' => fn(ParseNode $n) => $o->setPinRecoveryEnabled($n->getBooleanValue()),
            'pinSpecialCharactersUsage' => fn(ParseNode $n) => $o->setPinSpecialCharactersUsage($n->getEnumValue(ConfigurationUsage::class)),
            'pinUppercaseCharactersUsage' => fn(ParseNode $n) => $o->setPinUppercaseCharactersUsage($n->getEnumValue(ConfigurationUsage::class)),
            'securityDeviceRequired' => fn(ParseNode $n) => $o->setSecurityDeviceRequired($n->getBooleanValue()),
            'unlockWithBiometricsEnabled' => fn(ParseNode $n) => $o->setUnlockWithBiometricsEnabled($n->getBooleanValue()),
            'useCertificatesForOnPremisesAuthEnabled' => fn(ParseNode $n) => $o->setUseCertificatesForOnPremisesAuthEnabled($n->getBooleanValue()),
            'useSecurityKeyForSignin' => fn(ParseNode $n) => $o->setUseSecurityKeyForSignin($n->getBooleanValue()),
            'windowsHelloForBusinessBlocked' => fn(ParseNode $n) => $o->setWindowsHelloForBusinessBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the pinExpirationInDays property value. Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
     * @return int|null
    */
    public function getPinExpirationInDays(): ?int {
        $val = $this->getBackingStore()->get('pinExpirationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinExpirationInDays'");
    }

    /**
     * Gets the pinLowercaseCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getPinLowercaseCharactersUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('pinLowercaseCharactersUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinLowercaseCharactersUsage'");
    }

    /**
     * Gets the pinMaximumLength property value. Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
     * @return int|null
    */
    public function getPinMaximumLength(): ?int {
        $val = $this->getBackingStore()->get('pinMaximumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinMaximumLength'");
    }

    /**
     * Gets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
     * @return int|null
    */
    public function getPinMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('pinMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinMinimumLength'");
    }

    /**
     * Gets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
     * @return int|null
    */
    public function getPinPreviousBlockCount(): ?int {
        $val = $this->getBackingStore()->get('pinPreviousBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinPreviousBlockCount'");
    }

    /**
     * Gets the pinRecoveryEnabled property value. Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
     * @return bool|null
    */
    public function getPinRecoveryEnabled(): ?bool {
        $val = $this->getBackingStore()->get('pinRecoveryEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinRecoveryEnabled'");
    }

    /**
     * Gets the pinSpecialCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getPinSpecialCharactersUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('pinSpecialCharactersUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinSpecialCharactersUsage'");
    }

    /**
     * Gets the pinUppercaseCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getPinUppercaseCharactersUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('pinUppercaseCharactersUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinUppercaseCharactersUsage'");
    }

    /**
     * Gets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @return bool|null
    */
    public function getSecurityDeviceRequired(): ?bool {
        $val = $this->getBackingStore()->get('securityDeviceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDeviceRequired'");
    }

    /**
     * Gets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @return bool|null
    */
    public function getUnlockWithBiometricsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('unlockWithBiometricsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unlockWithBiometricsEnabled'");
    }

    /**
     * Gets the useCertificatesForOnPremisesAuthEnabled property value. Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
     * @return bool|null
    */
    public function getUseCertificatesForOnPremisesAuthEnabled(): ?bool {
        $val = $this->getBackingStore()->get('useCertificatesForOnPremisesAuthEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useCertificatesForOnPremisesAuthEnabled'");
    }

    /**
     * Gets the useSecurityKeyForSignin property value. Boolean value used to enable the Windows Hello security key as a logon credential.
     * @return bool|null
    */
    public function getUseSecurityKeyForSignin(): ?bool {
        $val = $this->getBackingStore()->get('useSecurityKeyForSignin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useSecurityKeyForSignin'");
    }

    /**
     * Gets the windowsHelloForBusinessBlocked property value. Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
     * @return bool|null
    */
    public function getWindowsHelloForBusinessBlocked(): ?bool {
        $val = $this->getBackingStore()->get('windowsHelloForBusinessBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsHelloForBusinessBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enhancedAntiSpoofingForFacialFeaturesEnabled', $this->getEnhancedAntiSpoofingForFacialFeaturesEnabled());
        $writer->writeIntegerValue('pinExpirationInDays', $this->getPinExpirationInDays());
        $writer->writeEnumValue('pinLowercaseCharactersUsage', $this->getPinLowercaseCharactersUsage());
        $writer->writeIntegerValue('pinMaximumLength', $this->getPinMaximumLength());
        $writer->writeIntegerValue('pinMinimumLength', $this->getPinMinimumLength());
        $writer->writeIntegerValue('pinPreviousBlockCount', $this->getPinPreviousBlockCount());
        $writer->writeBooleanValue('pinRecoveryEnabled', $this->getPinRecoveryEnabled());
        $writer->writeEnumValue('pinSpecialCharactersUsage', $this->getPinSpecialCharactersUsage());
        $writer->writeEnumValue('pinUppercaseCharactersUsage', $this->getPinUppercaseCharactersUsage());
        $writer->writeBooleanValue('securityDeviceRequired', $this->getSecurityDeviceRequired());
        $writer->writeBooleanValue('unlockWithBiometricsEnabled', $this->getUnlockWithBiometricsEnabled());
        $writer->writeBooleanValue('useCertificatesForOnPremisesAuthEnabled', $this->getUseCertificatesForOnPremisesAuthEnabled());
        $writer->writeBooleanValue('useSecurityKeyForSignin', $this->getUseSecurityKeyForSignin());
        $writer->writeBooleanValue('windowsHelloForBusinessBlocked', $this->getWindowsHelloForBusinessBlocked());
    }

    /**
     * Sets the enhancedAntiSpoofingForFacialFeaturesEnabled property value. Boolean value used to enable enhanced anti-spoofing for facial feature recognition on Windows Hello face authentication.
     * @param bool|null $value Value to set for the enhancedAntiSpoofingForFacialFeaturesEnabled property.
    */
    public function setEnhancedAntiSpoofingForFacialFeaturesEnabled(?bool $value): void {
        $this->getBackingStore()->set('enhancedAntiSpoofingForFacialFeaturesEnabled', $value);
    }

    /**
     * Sets the pinExpirationInDays property value. Integer value specifies the period (in days) that a PIN can be used before the system requires the user to change it. Valid values are 0 to 730 inclusive. Valid values 0 to 730
     * @param int|null $value Value to set for the pinExpirationInDays property.
    */
    public function setPinExpirationInDays(?int $value): void {
        $this->getBackingStore()->set('pinExpirationInDays', $value);
    }

    /**
     * Sets the pinLowercaseCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the pinLowercaseCharactersUsage property.
    */
    public function setPinLowercaseCharactersUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('pinLowercaseCharactersUsage', $value);
    }

    /**
     * Sets the pinMaximumLength property value. Integer value that sets the maximum number of characters allowed for the work PIN. Valid values are 4 to 127 inclusive and greater than or equal to the value set for the minimum PIN. Valid values 4 to 127
     * @param int|null $value Value to set for the pinMaximumLength property.
    */
    public function setPinMaximumLength(?int $value): void {
        $this->getBackingStore()->set('pinMaximumLength', $value);
    }

    /**
     * Sets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the Windows Hello for Business PIN. Valid values are 4 to 127 inclusive and less than or equal to the value set for the maximum PIN. Valid values 4 to 127
     * @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value): void {
        $this->getBackingStore()->set('pinMinimumLength', $value);
    }

    /**
     * Sets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset. Valid values 0 to 50
     * @param int|null $value Value to set for the pinPreviousBlockCount property.
    */
    public function setPinPreviousBlockCount(?int $value): void {
        $this->getBackingStore()->set('pinPreviousBlockCount', $value);
    }

    /**
     * Sets the pinRecoveryEnabled property value. Boolean value that enables a user to change their PIN by using the Windows Hello for Business PIN recovery service.
     * @param bool|null $value Value to set for the pinRecoveryEnabled property.
    */
    public function setPinRecoveryEnabled(?bool $value): void {
        $this->getBackingStore()->set('pinRecoveryEnabled', $value);
    }

    /**
     * Sets the pinSpecialCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the pinSpecialCharactersUsage property.
    */
    public function setPinSpecialCharactersUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('pinSpecialCharactersUsage', $value);
    }

    /**
     * Sets the pinUppercaseCharactersUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the pinUppercaseCharactersUsage property.
    */
    public function setPinUppercaseCharactersUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('pinUppercaseCharactersUsage', $value);
    }

    /**
     * Sets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @param bool|null $value Value to set for the securityDeviceRequired property.
    */
    public function setSecurityDeviceRequired(?bool $value): void {
        $this->getBackingStore()->set('securityDeviceRequired', $value);
    }

    /**
     * Sets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @param bool|null $value Value to set for the unlockWithBiometricsEnabled property.
    */
    public function setUnlockWithBiometricsEnabled(?bool $value): void {
        $this->getBackingStore()->set('unlockWithBiometricsEnabled', $value);
    }

    /**
     * Sets the useCertificatesForOnPremisesAuthEnabled property value. Boolean value that enables Windows Hello for Business to use certificates to authenticate on-premise resources.
     * @param bool|null $value Value to set for the useCertificatesForOnPremisesAuthEnabled property.
    */
    public function setUseCertificatesForOnPremisesAuthEnabled(?bool $value): void {
        $this->getBackingStore()->set('useCertificatesForOnPremisesAuthEnabled', $value);
    }

    /**
     * Sets the useSecurityKeyForSignin property value. Boolean value used to enable the Windows Hello security key as a logon credential.
     * @param bool|null $value Value to set for the useSecurityKeyForSignin property.
    */
    public function setUseSecurityKeyForSignin(?bool $value): void {
        $this->getBackingStore()->set('useSecurityKeyForSignin', $value);
    }

    /**
     * Sets the windowsHelloForBusinessBlocked property value. Boolean value that blocks Windows Hello for Business as a method for signing into Windows.
     * @param bool|null $value Value to set for the windowsHelloForBusinessBlocked property.
    */
    public function setWindowsHelloForBusinessBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsHelloForBusinessBlocked', $value);
    }

}
