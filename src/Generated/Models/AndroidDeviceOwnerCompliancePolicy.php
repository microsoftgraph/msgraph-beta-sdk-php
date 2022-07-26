<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var DeviceThreatProtectionLevel|null $advancedThreatProtectionRequiredSecurityLevel MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    */
    private ?DeviceThreatProtectionLevel $advancedThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var bool|null $deviceThreatProtectionEnabled Require that devices have enabled device threat protection.
    */
    private ?bool $deviceThreatProtectionEnabled = null;
    
    /**
     * @var DeviceThreatProtectionLevel|null $deviceThreatProtectionRequiredSecurityLevel Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    */
    private ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var string|null $minAndroidSecurityPatchLevel Minimum Android security patch level.
    */
    private ?string $minAndroidSecurityPatchLevel = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum Android version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum Android version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum password length. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinimumLetterCharacters Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumLetterCharacters = null;
    
    /**
     * @var int|null $passwordMinimumLowerCaseCharacters Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumLowerCaseCharacters = null;
    
    /**
     * @var int|null $passwordMinimumNonLetterCharacters Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumNonLetterCharacters = null;
    
    /**
     * @var int|null $passwordMinimumNumericCharacters Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumNumericCharacters = null;
    
    /**
     * @var int|null $passwordMinimumSymbolCharacters Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumSymbolCharacters = null;
    
    /**
     * @var int|null $passwordMinimumUpperCaseCharacters Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
    */
    private ?int $passwordMinimumUpperCaseCharacters = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeLock Minutes of inactivity before a password is required.
    */
    private ?int $passwordMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passwordPreviousPasswordCountToBlock Number of previous passwords to block. Valid values 1 to 24
    */
    private ?int $passwordPreviousPasswordCountToBlock = null;
    
    /**
     * @var bool|null $passwordRequired Require a password to unlock device.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordType|null $passwordRequiredType Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    */
    private ?AndroidDeviceOwnerRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $securityRequireIntuneAppIntegrity If setting is set to true, checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Playstore. If the check fails, the device will be reported as non-compliant.
    */
    private ?bool $securityRequireIntuneAppIntegrity = null;
    
    /**
     * @var bool|null $securityRequireSafetyNetAttestationBasicIntegrity Require the device to pass the SafetyNet basic integrity check.
    */
    private ?bool $securityRequireSafetyNetAttestationBasicIntegrity = null;
    
    /**
     * @var bool|null $securityRequireSafetyNetAttestationCertifiedDevice Require the device to pass the SafetyNet certified device check.
    */
    private ?bool $securityRequireSafetyNetAttestationCertifiedDevice = null;
    
    /**
     * @var bool|null $storageRequireEncryption Require encryption on Android devices.
    */
    private ?bool $storageRequireEncryption = null;
    
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
     * Gets the advancedThreatProtectionRequiredSecurityLevel property value. MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getAdvancedThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->advancedThreatProtectionRequiredSecurityLevel;
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->deviceThreatProtectionEnabled;
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->deviceThreatProtectionRequiredSecurityLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'advancedThreatProtectionRequiredSecurityLevel' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)); },
            'deviceThreatProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()); },
            'deviceThreatProtectionRequiredSecurityLevel' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)); },
            'minAndroidSecurityPatchLevel' => function (ParseNode $n) use ($o) { $o->setMinAndroidSecurityPatchLevel($n->getStringValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinimumLetterCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLetterCharacters($n->getIntegerValue()); },
            'passwordMinimumLowerCaseCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLowerCaseCharacters($n->getIntegerValue()); },
            'passwordMinimumNonLetterCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumNonLetterCharacters($n->getIntegerValue()); },
            'passwordMinimumNumericCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumNumericCharacters($n->getIntegerValue()); },
            'passwordMinimumSymbolCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumSymbolCharacters($n->getIntegerValue()); },
            'passwordMinimumUpperCaseCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumUpperCaseCharacters($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordPreviousPasswordCountToBlock' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordCountToBlock($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)); },
            'securityRequireIntuneAppIntegrity' => function (ParseNode $n) use ($o) { $o->setSecurityRequireIntuneAppIntegrity($n->getBooleanValue()); },
            'securityRequireSafetyNetAttestationBasicIntegrity' => function (ParseNode $n) use ($o) { $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()); },
            'securityRequireSafetyNetAttestationCertifiedDevice' => function (ParseNode $n) use ($o) { $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     * @return string|null
    */
    public function getMinAndroidSecurityPatchLevel(): ?string {
        return $this->minAndroidSecurityPatchLevel;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Android version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Android version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumLetterCharacters(): ?int {
        return $this->passwordMinimumLetterCharacters;
    }

    /**
     * Gets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumLowerCaseCharacters(): ?int {
        return $this->passwordMinimumLowerCaseCharacters;
    }

    /**
     * Gets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumNonLetterCharacters(): ?int {
        return $this->passwordMinimumNonLetterCharacters;
    }

    /**
     * Gets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumNumericCharacters(): ?int {
        return $this->passwordMinimumNumericCharacters;
    }

    /**
     * Gets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumSymbolCharacters(): ?int {
        return $this->passwordMinimumSymbolCharacters;
    }

    /**
     * Gets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumUpperCaseCharacters(): ?int {
        return $this->passwordMinimumUpperCaseCharacters;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passwordPreviousPasswordCountToBlock property value. Number of previous passwords to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordCountToBlock(): ?int {
        return $this->passwordPreviousPasswordCountToBlock;
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the securityRequireIntuneAppIntegrity property value. If setting is set to true, checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Playstore. If the check fails, the device will be reported as non-compliant.
     * @return bool|null
    */
    public function getSecurityRequireIntuneAppIntegrity(): ?bool {
        return $this->securityRequireIntuneAppIntegrity;
    }

    /**
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity(): ?bool {
        return $this->securityRequireSafetyNetAttestationBasicIntegrity;
    }

    /**
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice(): ?bool {
        return $this->securityRequireSafetyNetAttestationCertifiedDevice;
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on Android devices.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->storageRequireEncryption;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('advancedThreatProtectionRequiredSecurityLevel', $this->advancedThreatProtectionRequiredSecurityLevel);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->deviceThreatProtectionEnabled);
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->deviceThreatProtectionRequiredSecurityLevel);
        $writer->writeStringValue('minAndroidSecurityPatchLevel', $this->minAndroidSecurityPatchLevel);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinimumLetterCharacters', $this->passwordMinimumLetterCharacters);
        $writer->writeIntegerValue('passwordMinimumLowerCaseCharacters', $this->passwordMinimumLowerCaseCharacters);
        $writer->writeIntegerValue('passwordMinimumNonLetterCharacters', $this->passwordMinimumNonLetterCharacters);
        $writer->writeIntegerValue('passwordMinimumNumericCharacters', $this->passwordMinimumNumericCharacters);
        $writer->writeIntegerValue('passwordMinimumSymbolCharacters', $this->passwordMinimumSymbolCharacters);
        $writer->writeIntegerValue('passwordMinimumUpperCaseCharacters', $this->passwordMinimumUpperCaseCharacters);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordPreviousPasswordCountToBlock', $this->passwordPreviousPasswordCountToBlock);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('securityRequireIntuneAppIntegrity', $this->securityRequireIntuneAppIntegrity);
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->securityRequireSafetyNetAttestationBasicIntegrity);
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->securityRequireSafetyNetAttestationCertifiedDevice);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
    }

    /**
     * Sets the advancedThreatProtectionRequiredSecurityLevel property value. MDATP Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the advancedThreatProtectionRequiredSecurityLevel property.
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->advancedThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value ): void {
        $this->deviceThreatProtectionEnabled = $value;
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->deviceThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     *  @param string|null $value Value to set for the minAndroidSecurityPatchLevel property.
    */
    public function setMinAndroidSecurityPatchLevel(?string $value ): void {
        $this->minAndroidSecurityPatchLevel = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Android version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Android version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumLetterCharacters property.
    */
    public function setPasswordMinimumLetterCharacters(?int $value ): void {
        $this->passwordMinimumLetterCharacters = $value;
    }

    /**
     * Sets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumLowerCaseCharacters property.
    */
    public function setPasswordMinimumLowerCaseCharacters(?int $value ): void {
        $this->passwordMinimumLowerCaseCharacters = $value;
    }

    /**
     * Sets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumNonLetterCharacters property.
    */
    public function setPasswordMinimumNonLetterCharacters(?int $value ): void {
        $this->passwordMinimumNonLetterCharacters = $value;
    }

    /**
     * Sets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumNumericCharacters property.
    */
    public function setPasswordMinimumNumericCharacters(?int $value ): void {
        $this->passwordMinimumNumericCharacters = $value;
    }

    /**
     * Sets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumSymbolCharacters property.
    */
    public function setPasswordMinimumSymbolCharacters(?int $value ): void {
        $this->passwordMinimumSymbolCharacters = $value;
    }

    /**
     * Sets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumUpperCaseCharacters property.
    */
    public function setPasswordMinimumUpperCaseCharacters(?int $value ): void {
        $this->passwordMinimumUpperCaseCharacters = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passwordPreviousPasswordCountToBlock property value. Number of previous passwords to block. Valid values 1 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordCountToBlock property.
    */
    public function setPasswordPreviousPasswordCountToBlock(?int $value ): void {
        $this->passwordPreviousPasswordCountToBlock = $value;
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock device.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the securityRequireIntuneAppIntegrity property value. If setting is set to true, checks that the Intune app installed on fully managed, dedicated, or corporate-owned work profile Android Enterprise enrolled devices, is the one provided by Microsoft from the Managed Google Playstore. If the check fails, the device will be reported as non-compliant.
     *  @param bool|null $value Value to set for the securityRequireIntuneAppIntegrity property.
    */
    public function setSecurityRequireIntuneAppIntegrity(?bool $value ): void {
        $this->securityRequireIntuneAppIntegrity = $value;
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     *  @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value ): void {
        $this->securityRequireSafetyNetAttestationBasicIntegrity = $value;
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     *  @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value ): void {
        $this->securityRequireSafetyNetAttestationCertifiedDevice = $value;
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on Android devices.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

}
