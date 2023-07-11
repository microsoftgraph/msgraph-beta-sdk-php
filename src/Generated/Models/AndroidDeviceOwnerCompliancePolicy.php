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
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new androidDeviceOwnerCompliancePolicy and sets the default values.
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
     * Gets the advancedThreatProtectionRequiredSecurityLevel property value. MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
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
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
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
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
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
            'securityRequireIntuneAppIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireIntuneAppIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationBasicIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationCertifiedDevice' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
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
     * Gets the osMaximumVersion property value. Maximum Android version.
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
     * Gets the osMinimumVersion property value. Minimum Android version.
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
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
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
     * Gets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
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
     * Gets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
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
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
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
     * Gets the passwordPreviousPasswordCountToBlock property value. Number of previous passwords to block. Valid values 1 to 24
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
     * Gets the passwordRequired property value. Require a password to unlock device.
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
     * Gets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
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
     * Gets the securityRequireIntuneAppIntegrity property value. If setting is set to true, checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Playstore. If the check fails, the device will be reported as non-compliant.
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
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
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
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
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
     * Gets the storageRequireEncryption property value. Require encryption on Android devices.
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
        $writer->writeBooleanValue('securityRequireIntuneAppIntegrity', $this->getSecurityRequireIntuneAppIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->getSecurityRequireSafetyNetAttestationBasicIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->getSecurityRequireSafetyNetAttestationCertifiedDevice());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
    }

    /**
     * Sets the advancedThreatProtectionRequiredSecurityLevel property value. MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the advancedThreatProtectionRequiredSecurityLevel property.
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionEnabled', $value);
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     * @param string|null $value Value to set for the minAndroidSecurityPatchLevel property.
    */
    public function setMinAndroidSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('minAndroidSecurityPatchLevel', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Android version.
     * @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Android version.
     * @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumLetterCharacters property.
    */
    public function setPasswordMinimumLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumLowerCaseCharacters property.
    */
    public function setPasswordMinimumLowerCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLowerCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumNonLetterCharacters property.
    */
    public function setPasswordMinimumNonLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNonLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumNumericCharacters property.
    */
    public function setPasswordMinimumNumericCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNumericCharacters', $value);
    }

    /**
     * Sets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumSymbolCharacters property.
    */
    public function setPasswordMinimumSymbolCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumSymbolCharacters', $value);
    }

    /**
     * Sets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordMinimumUpperCaseCharacters property.
    */
    public function setPasswordMinimumUpperCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumUpperCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordPreviousPasswordCountToBlock property value. Number of previous passwords to block. Valid values 1 to 24
     * @param int|null $value Value to set for the passwordPreviousPasswordCountToBlock property.
    */
    public function setPasswordPreviousPasswordCountToBlock(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordCountToBlock', $value);
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock device.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the securityRequireIntuneAppIntegrity property value. If setting is set to true, checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Playstore. If the check fails, the device will be reported as non-compliant.
     * @param bool|null $value Value to set for the securityRequireIntuneAppIntegrity property.
    */
    public function setSecurityRequireIntuneAppIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireIntuneAppIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationBasicIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationCertifiedDevice', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on Android devices.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

}
