<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the AndroidDeviceOwnerCompliancePolicy resource.
*/
class AndroidDeviceOwnerCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerCompliancePolicy {
        return new AndroidDeviceOwnerCompliancePolicy();
    }

    /**
     * Gets the advancedThreatProtectionRequiredSecurityLevel property value. Indicates the Microsoft Defender for Endpoint (also referred to Microsoft Defender Advanced Threat Protection (MDATP)) minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getAdvancedThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        $val = $this->getBackingStore()->get('advancedThreatProtectionRequiredSecurityLevel');
        if (is_null($val) || $val instanceof DeviceThreatProtectionLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionRequiredSecurityLevel'");
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Indicates whether the policy requires devices have device threat protection enabled.  When TRUE, threat protection is enabled.  When FALSE, threat protection is not enabled.  Default is FALSE.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('deviceThreatProtectionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceThreatProtectionEnabled'");
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Indicates the minimum mobile threat protection risk level to that results in Intune reporting device noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        $val = $this->getBackingStore()->get('deviceThreatProtectionRequiredSecurityLevel');
        if (is_null($val) || $val instanceof DeviceThreatProtectionLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceThreatProtectionRequiredSecurityLevel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionRequiredSecurityLevel' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)),
            'deviceThreatProtectionEnabled' => fn(ParseNode $n) => $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()),
            'deviceThreatProtectionRequiredSecurityLevel' => fn(ParseNode $n) => $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)),
            'minAndroidSecurityPatchLevel' => fn(ParseNode $n) => $o->setMinAndroidSecurityPatchLevel($n->getStringValue()),
            'osMaximumVersion' => fn(ParseNode $n) => $o->setOsMaximumVersion($n->getStringValue()),
            'osMinimumVersion' => fn(ParseNode $n) => $o->setOsMinimumVersion($n->getStringValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinimumLetterCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumLetterCharacters($n->getIntegerValue()),
            'passwordMinimumLowerCaseCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumLowerCaseCharacters($n->getIntegerValue()),
            'passwordMinimumNonLetterCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumNonLetterCharacters($n->getIntegerValue()),
            'passwordMinimumNumericCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumNumericCharacters($n->getIntegerValue()),
            'passwordMinimumSymbolCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumSymbolCharacters($n->getIntegerValue()),
            'passwordMinimumUpperCaseCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumUpperCaseCharacters($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordPreviousPasswordCountToBlock' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordCountToBlock($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)),
            'requireNoPendingSystemUpdates' => fn(ParseNode $n) => $o->setRequireNoPendingSystemUpdates($n->getBooleanValue()),
            'securityBlockJailbrokenDevices' => fn(ParseNode $n) => $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()),
            'securityRequiredAndroidSafetyNetEvaluationType' => fn(ParseNode $n) => $o->setSecurityRequiredAndroidSafetyNetEvaluationType($n->getEnumValue(AndroidSafetyNetEvaluationType::class)),
            'securityRequireIntuneAppIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireIntuneAppIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationBasicIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationCertifiedDevice' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the minAndroidSecurityPatchLevel property value. Indicates the minimum Android security patch level required to mark the device as compliant.  For example: 'February 1, 2025'
     * @return string|null
    */
    public function getMinAndroidSecurityPatchLevel(): ?string {
        $val = $this->getBackingStore()->get('minAndroidSecurityPatchLevel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minAndroidSecurityPatchLevel'");
    }

    /**
     * Gets the osMaximumVersion property value. Indicates the maximum Android version required to mark the device as compliant.  For example: '15'
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        $val = $this->getBackingStore()->get('osMaximumVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osMaximumVersion'");
    }

    /**
     * Gets the osMinimumVersion property value. Indicates the minimum Android version required to mark the device as compliant. For example: '14'
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        $val = $this->getBackingStore()->get('osMinimumVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osMinimumVersion'");
    }

    /**
     * Gets the passwordExpirationDays property value. Indicates the number of days before the password expires. Valid values 1 to 365.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMinimumLength property value. Indicates the minimum password length required to mark the device as compliant. Valid values are 4 to 16, inclusive. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumLetterCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLetterCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLetterCharacters'");
    }

    /**
     * Gets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumLowerCaseCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLowerCaseCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLowerCaseCharacters'");
    }

    /**
     * Gets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumNonLetterCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumNonLetterCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumNonLetterCharacters'");
    }

    /**
     * Gets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumNumericCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumNumericCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumNumericCharacters'");
    }

    /**
     * Gets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumSymbolCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumSymbolCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumSymbolCharacters'");
    }

    /**
     * Gets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @return int|null
    */
    public function getPasswordMinimumUpperCaseCharacters(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumUpperCaseCharacters');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumUpperCaseCharacters'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Indicates the number of minutes of inactivity before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeLock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeLock'");
    }

    /**
     * Gets the passwordPreviousPasswordCountToBlock property value. Indicates the number of previous passwords to block. Valid values 1 to 24.
     * @return int|null
    */
    public function getPasswordPreviousPasswordCountToBlock(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordCountToBlock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordCountToBlock'");
    }

    /**
     * Gets the passwordRequired property value. Indicates whether a password is required to unlock the device. When TRUE, there must be a password set that unlocks the device for the device to be marked as compliant.  When FALSE, a device is marked as compliant whether or not a password is set as required to unlock the device.  Default is FALSE.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequired'");
    }

    /**
     * Gets the passwordRequiredType property value. Indicates the password complexity requirement for the device to be marked compliant. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerRequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the requireNoPendingSystemUpdates property value. Indicates whether the device has pending security or OS updates and sets the compliance state accordingly.  When TRUE, checks if there are any pending system updates on each check in and if there are any pending security or OS version updates (System Updates), the device will be reported as non-compliant. If set to FALSE, then checks for any pending security or OS version updates (System Updates) are done without impact to device compliance state. Default is FALSE.
     * @return bool|null
    */
    public function getRequireNoPendingSystemUpdates(): ?bool {
        $val = $this->getBackingStore()->get('requireNoPendingSystemUpdates');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireNoPendingSystemUpdates'");
    }

    /**
     * Gets the securityBlockJailbrokenDevices property value. Indicates the device should not be rooted. When TRUE, if the device is detected as rooted it will be reported non-compliant. When FALSE, the device is not reported as non-compliant regardless of device rooted state. Default is FALSE.
     * @return bool|null
    */
    public function getSecurityBlockJailbrokenDevices(): ?bool {
        $val = $this->getBackingStore()->get('securityBlockJailbrokenDevices');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityBlockJailbrokenDevices'");
    }

    /**
     * Gets the securityRequiredAndroidSafetyNetEvaluationType property value. Indicates the types of measurements and reference data used to evaluate the device SafetyNet evaluation. Evaluation is completed on the device to assess device integrity based on checks defined by Android and built into the device hardware, for example, compromised OS version or root detection. Possible values are: basic, hardwareBacked, with default value of basic. Possible values are: basic, hardwareBacked.
     * @return AndroidSafetyNetEvaluationType|null
    */
    public function getSecurityRequiredAndroidSafetyNetEvaluationType(): ?AndroidSafetyNetEvaluationType {
        $val = $this->getBackingStore()->get('securityRequiredAndroidSafetyNetEvaluationType');
        if (is_null($val) || $val instanceof AndroidSafetyNetEvaluationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequiredAndroidSafetyNetEvaluationType'");
    }

    /**
     * Gets the securityRequireIntuneAppIntegrity property value. Indicates whether Intune application integrity is required to mark the device as compliant.  When TRUE, Intune checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Play store. If the check fails, the device will be reported as non-compliant. Default is FALSE.
     * @return bool|null
    */
    public function getSecurityRequireIntuneAppIntegrity(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireIntuneAppIntegrity');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireIntuneAppIntegrity'");
    }

    /**
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Indicates whether the compliance check will validate the Google Play Integrity check. When TRUE, the Google Play integrity basic check must pass to consider the device compliant.  When FALSE, the Google Play integrity basic check can pass or fail and the device will be considered compliant.  Default is FALSE.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireSafetyNetAttestationBasicIntegrity');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireSafetyNetAttestationBasicIntegrity'");
    }

    /**
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Indicates whether the compliance check will validate the Google Play Integrity check. When TRUE, the Google Play integrity device check must pass to consider the device compliant.  When FALSE, the Google Play integrity device check can pass or fail and the device will be considered compliant.  Default is FALSE.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireSafetyNetAttestationCertifiedDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireSafetyNetAttestationCertifiedDevice'");
    }

    /**
     * Gets the storageRequireEncryption property value. Indicates whether encryption on Android devices is required to mark the device as compliant.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireEncryption'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedThreatProtectionRequiredSecurityLevel', $this->getAdvancedThreatProtectionRequiredSecurityLevel());
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->getDeviceThreatProtectionEnabled());
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->getDeviceThreatProtectionRequiredSecurityLevel());
        $writer->writeStringValue('minAndroidSecurityPatchLevel', $this->getMinAndroidSecurityPatchLevel());
        $writer->writeStringValue('osMaximumVersion', $this->getOsMaximumVersion());
        $writer->writeStringValue('osMinimumVersion', $this->getOsMinimumVersion());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinimumLetterCharacters', $this->getPasswordMinimumLetterCharacters());
        $writer->writeIntegerValue('passwordMinimumLowerCaseCharacters', $this->getPasswordMinimumLowerCaseCharacters());
        $writer->writeIntegerValue('passwordMinimumNonLetterCharacters', $this->getPasswordMinimumNonLetterCharacters());
        $writer->writeIntegerValue('passwordMinimumNumericCharacters', $this->getPasswordMinimumNumericCharacters());
        $writer->writeIntegerValue('passwordMinimumSymbolCharacters', $this->getPasswordMinimumSymbolCharacters());
        $writer->writeIntegerValue('passwordMinimumUpperCaseCharacters', $this->getPasswordMinimumUpperCaseCharacters());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordPreviousPasswordCountToBlock', $this->getPasswordPreviousPasswordCountToBlock());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('requireNoPendingSystemUpdates', $this->getRequireNoPendingSystemUpdates());
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->getSecurityBlockJailbrokenDevices());
        $writer->writeEnumValue('securityRequiredAndroidSafetyNetEvaluationType', $this->getSecurityRequiredAndroidSafetyNetEvaluationType());
        $writer->writeBooleanValue('securityRequireIntuneAppIntegrity', $this->getSecurityRequireIntuneAppIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->getSecurityRequireSafetyNetAttestationBasicIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->getSecurityRequireSafetyNetAttestationCertifiedDevice());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
    }

    /**
     * Sets the advancedThreatProtectionRequiredSecurityLevel property value. Indicates the Microsoft Defender for Endpoint (also referred to Microsoft Defender Advanced Threat Protection (MDATP)) minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the advancedThreatProtectionRequiredSecurityLevel property.
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Indicates whether the policy requires devices have device threat protection enabled.  When TRUE, threat protection is enabled.  When FALSE, threat protection is not enabled.  Default is FALSE.
     * @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionEnabled', $value);
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Indicates the minimum mobile threat protection risk level to that results in Intune reporting device noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the minAndroidSecurityPatchLevel property value. Indicates the minimum Android security patch level required to mark the device as compliant.  For example: 'February 1, 2025'
     * @param string|null $value Value to set for the minAndroidSecurityPatchLevel property.
    */
    public function setMinAndroidSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('minAndroidSecurityPatchLevel', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Indicates the maximum Android version required to mark the device as compliant.  For example: '15'
     * @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Indicates the minimum Android version required to mark the device as compliant. For example: '14'
     * @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Indicates the number of days before the password expires. Valid values 1 to 365.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Indicates the minimum password length required to mark the device as compliant. Valid values are 4 to 16, inclusive. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumLetterCharacters property.
    */
    public function setPasswordMinimumLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumLowerCaseCharacters property.
    */
    public function setPasswordMinimumLowerCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLowerCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumNonLetterCharacters property.
    */
    public function setPasswordMinimumNonLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNonLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumNumericCharacters property.
    */
    public function setPasswordMinimumNumericCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNumericCharacters', $value);
    }

    /**
     * Sets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumSymbolCharacters property.
    */
    public function setPasswordMinimumSymbolCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumSymbolCharacters', $value);
    }

    /**
     * Sets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password for the device to be marked compliant. Valid values 1 to 16.
     * @param int|null $value Value to set for the passwordMinimumUpperCaseCharacters property.
    */
    public function setPasswordMinimumUpperCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumUpperCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Indicates the number of minutes of inactivity before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordPreviousPasswordCountToBlock property value. Indicates the number of previous passwords to block. Valid values 1 to 24.
     * @param int|null $value Value to set for the passwordPreviousPasswordCountToBlock property.
    */
    public function setPasswordPreviousPasswordCountToBlock(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordCountToBlock', $value);
    }

    /**
     * Sets the passwordRequired property value. Indicates whether a password is required to unlock the device. When TRUE, there must be a password set that unlocks the device for the device to be marked as compliant.  When FALSE, a device is marked as compliant whether or not a password is set as required to unlock the device.  Default is FALSE.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Indicates the password complexity requirement for the device to be marked compliant. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the requireNoPendingSystemUpdates property value. Indicates whether the device has pending security or OS updates and sets the compliance state accordingly.  When TRUE, checks if there are any pending system updates on each check in and if there are any pending security or OS version updates (System Updates), the device will be reported as non-compliant. If set to FALSE, then checks for any pending security or OS version updates (System Updates) are done without impact to device compliance state. Default is FALSE.
     * @param bool|null $value Value to set for the requireNoPendingSystemUpdates property.
    */
    public function setRequireNoPendingSystemUpdates(?bool $value): void {
        $this->getBackingStore()->set('requireNoPendingSystemUpdates', $value);
    }

    /**
     * Sets the securityBlockJailbrokenDevices property value. Indicates the device should not be rooted. When TRUE, if the device is detected as rooted it will be reported non-compliant. When FALSE, the device is not reported as non-compliant regardless of device rooted state. Default is FALSE.
     * @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value): void {
        $this->getBackingStore()->set('securityBlockJailbrokenDevices', $value);
    }

    /**
     * Sets the securityRequiredAndroidSafetyNetEvaluationType property value. Indicates the types of measurements and reference data used to evaluate the device SafetyNet evaluation. Evaluation is completed on the device to assess device integrity based on checks defined by Android and built into the device hardware, for example, compromised OS version or root detection. Possible values are: basic, hardwareBacked, with default value of basic. Possible values are: basic, hardwareBacked.
     * @param AndroidSafetyNetEvaluationType|null $value Value to set for the securityRequiredAndroidSafetyNetEvaluationType property.
    */
    public function setSecurityRequiredAndroidSafetyNetEvaluationType(?AndroidSafetyNetEvaluationType $value): void {
        $this->getBackingStore()->set('securityRequiredAndroidSafetyNetEvaluationType', $value);
    }

    /**
     * Sets the securityRequireIntuneAppIntegrity property value. Indicates whether Intune application integrity is required to mark the device as compliant.  When TRUE, Intune checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Play store. If the check fails, the device will be reported as non-compliant. Default is FALSE.
     * @param bool|null $value Value to set for the securityRequireIntuneAppIntegrity property.
    */
    public function setSecurityRequireIntuneAppIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireIntuneAppIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Indicates whether the compliance check will validate the Google Play Integrity check. When TRUE, the Google Play integrity basic check must pass to consider the device compliant.  When FALSE, the Google Play integrity basic check can pass or fail and the device will be considered compliant.  Default is FALSE.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationBasicIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Indicates whether the compliance check will validate the Google Play Integrity check. When TRUE, the Google Play integrity device check must pass to consider the device compliant.  When FALSE, the Google Play integrity device check can pass or fail and the device will be considered compliant.  Default is FALSE.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationCertifiedDevice', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Indicates whether encryption on Android devices is required to mark the device as compliant.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

}
