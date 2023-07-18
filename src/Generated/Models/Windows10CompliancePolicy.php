<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This class contains compliance settings for Windows 10.
*/
class Windows10CompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new windows10CompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10CompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10CompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10CompliancePolicy {
        return new Windows10CompliancePolicy();
    }

    /**
     * Gets the activeFirewallRequired property value. Require active firewall on Windows devices.
     * @return bool|null
    */
    public function getActiveFirewallRequired(): ?bool {
        $val = $this->getBackingStore()->get('activeFirewallRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeFirewallRequired'");
    }

    /**
     * Gets the antiSpywareRequired property value. Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @return bool|null
    */
    public function getAntiSpywareRequired(): ?bool {
        $val = $this->getBackingStore()->get('antiSpywareRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'antiSpywareRequired'");
    }

    /**
     * Gets the antivirusRequired property value. Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @return bool|null
    */
    public function getAntivirusRequired(): ?bool {
        $val = $this->getBackingStore()->get('antivirusRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'antivirusRequired'");
    }

    /**
     * Gets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @return bool|null
    */
    public function getBitLockerEnabled(): ?bool {
        $val = $this->getBackingStore()->get('bitLockerEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerEnabled'");
    }

    /**
     * Gets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getCodeIntegrityEnabled(): ?bool {
        $val = $this->getBackingStore()->get('codeIntegrityEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'codeIntegrityEnabled'");
    }

    /**
     * Gets the configurationManagerComplianceRequired property value. Require to consider SCCM Compliance state into consideration for Intune Compliance State.
     * @return bool|null
    */
    public function getConfigurationManagerComplianceRequired(): ?bool {
        $val = $this->getBackingStore()->get('configurationManagerComplianceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationManagerComplianceRequired'");
    }

    /**
     * Gets the defenderEnabled property value. Require Windows Defender Antimalware on Windows devices.
     * @return bool|null
    */
    public function getDefenderEnabled(): ?bool {
        $val = $this->getBackingStore()->get('defenderEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEnabled'");
    }

    /**
     * Gets the defenderVersion property value. Require Windows Defender Antimalware minimum version on Windows devices.
     * @return string|null
    */
    public function getDefenderVersion(): ?string {
        $val = $this->getBackingStore()->get('defenderVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderVersion'");
    }

    /**
     * Gets the deviceCompliancePolicyScript property value. Not yet documented
     * @return DeviceCompliancePolicyScript|null
    */
    public function getDeviceCompliancePolicyScript(): ?DeviceCompliancePolicyScript {
        $val = $this->getBackingStore()->get('deviceCompliancePolicyScript');
        if (is_null($val) || $val instanceof DeviceCompliancePolicyScript) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicyScript'");
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
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
     * Gets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @return bool|null
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled(): ?bool {
        $val = $this->getBackingStore()->get('earlyLaunchAntiMalwareDriverEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'earlyLaunchAntiMalwareDriverEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeFirewallRequired' => fn(ParseNode $n) => $o->setActiveFirewallRequired($n->getBooleanValue()),
            'antiSpywareRequired' => fn(ParseNode $n) => $o->setAntiSpywareRequired($n->getBooleanValue()),
            'antivirusRequired' => fn(ParseNode $n) => $o->setAntivirusRequired($n->getBooleanValue()),
            'bitLockerEnabled' => fn(ParseNode $n) => $o->setBitLockerEnabled($n->getBooleanValue()),
            'codeIntegrityEnabled' => fn(ParseNode $n) => $o->setCodeIntegrityEnabled($n->getBooleanValue()),
            'configurationManagerComplianceRequired' => fn(ParseNode $n) => $o->setConfigurationManagerComplianceRequired($n->getBooleanValue()),
            'defenderEnabled' => fn(ParseNode $n) => $o->setDefenderEnabled($n->getBooleanValue()),
            'defenderVersion' => fn(ParseNode $n) => $o->setDefenderVersion($n->getStringValue()),
            'deviceCompliancePolicyScript' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyScript($n->getObjectValue([DeviceCompliancePolicyScript::class, 'createFromDiscriminatorValue'])),
            'deviceThreatProtectionEnabled' => fn(ParseNode $n) => $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()),
            'deviceThreatProtectionRequiredSecurityLevel' => fn(ParseNode $n) => $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)),
            'earlyLaunchAntiMalwareDriverEnabled' => fn(ParseNode $n) => $o->setEarlyLaunchAntiMalwareDriverEnabled($n->getBooleanValue()),
            'mobileOsMaximumVersion' => fn(ParseNode $n) => $o->setMobileOsMaximumVersion($n->getStringValue()),
            'mobileOsMinimumVersion' => fn(ParseNode $n) => $o->setMobileOsMinimumVersion($n->getStringValue()),
            'osMaximumVersion' => fn(ParseNode $n) => $o->setOsMaximumVersion($n->getStringValue()),
            'osMinimumVersion' => fn(ParseNode $n) => $o->setOsMinimumVersion($n->getStringValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredToUnlockFromIdle' => fn(ParseNode $n) => $o->setPasswordRequiredToUnlockFromIdle($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'requireHealthyDeviceReport' => fn(ParseNode $n) => $o->setRequireHealthyDeviceReport($n->getBooleanValue()),
            'rtpEnabled' => fn(ParseNode $n) => $o->setRtpEnabled($n->getBooleanValue()),
            'secureBootEnabled' => fn(ParseNode $n) => $o->setSecureBootEnabled($n->getBooleanValue()),
            'signatureOutOfDate' => fn(ParseNode $n) => $o->setSignatureOutOfDate($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
            'tpmRequired' => fn(ParseNode $n) => $o->setTpmRequired($n->getBooleanValue()),
            'validOperatingSystemBuildRanges' => fn(ParseNode $n) => $o->setValidOperatingSystemBuildRanges($n->getCollectionOfObjectValues([OperatingSystemVersionRange::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMaximumVersion(): ?string {
        $val = $this->getBackingStore()->get('mobileOsMaximumVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileOsMaximumVersion'");
    }

    /**
     * Gets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMinimumVersion(): ?string {
        $val = $this->getBackingStore()->get('mobileOsMinimumVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileOsMinimumVersion'");
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Windows 10 version.
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
     * Gets the osMinimumVersion property value. Minimum Windows 10 version.
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
     * Gets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockSimple'");
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days.
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
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length.
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
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock Windows device.
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
     * Gets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @return bool|null
    */
    public function getPasswordRequiredToUnlockFromIdle(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequiredToUnlockFromIdle');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredToUnlockFromIdle'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getRequireHealthyDeviceReport(): ?bool {
        $val = $this->getBackingStore()->get('requireHealthyDeviceReport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireHealthyDeviceReport'");
    }

    /**
     * Gets the rtpEnabled property value. Require Windows Defender Antimalware Real-Time Protection on Windows devices.
     * @return bool|null
    */
    public function getRtpEnabled(): ?bool {
        $val = $this->getBackingStore()->get('rtpEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rtpEnabled'");
    }

    /**
     * Gets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @return bool|null
    */
    public function getSecureBootEnabled(): ?bool {
        $val = $this->getBackingStore()->get('secureBootEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureBootEnabled'");
    }

    /**
     * Gets the signatureOutOfDate property value. Require Windows Defender Antimalware Signature to be up to date on Windows devices.
     * @return bool|null
    */
    public function getSignatureOutOfDate(): ?bool {
        $val = $this->getBackingStore()->get('signatureOutOfDate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signatureOutOfDate'");
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on windows devices.
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
     * Gets the tpmRequired property value. Require Trusted Platform Module(TPM) to be present.
     * @return bool|null
    */
    public function getTpmRequired(): ?bool {
        $val = $this->getBackingStore()->get('tpmRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmRequired'");
    }

    /**
     * Gets the validOperatingSystemBuildRanges property value. The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     * @return array<OperatingSystemVersionRange>|null
    */
    public function getValidOperatingSystemBuildRanges(): ?array {
        $val = $this->getBackingStore()->get('validOperatingSystemBuildRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OperatingSystemVersionRange::class);
            /** @var array<OperatingSystemVersionRange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validOperatingSystemBuildRanges'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('activeFirewallRequired', $this->getActiveFirewallRequired());
        $writer->writeBooleanValue('antiSpywareRequired', $this->getAntiSpywareRequired());
        $writer->writeBooleanValue('antivirusRequired', $this->getAntivirusRequired());
        $writer->writeBooleanValue('bitLockerEnabled', $this->getBitLockerEnabled());
        $writer->writeBooleanValue('codeIntegrityEnabled', $this->getCodeIntegrityEnabled());
        $writer->writeBooleanValue('configurationManagerComplianceRequired', $this->getConfigurationManagerComplianceRequired());
        $writer->writeBooleanValue('defenderEnabled', $this->getDefenderEnabled());
        $writer->writeStringValue('defenderVersion', $this->getDefenderVersion());
        $writer->writeObjectValue('deviceCompliancePolicyScript', $this->getDeviceCompliancePolicyScript());
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->getDeviceThreatProtectionEnabled());
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->getDeviceThreatProtectionRequiredSecurityLevel());
        $writer->writeBooleanValue('earlyLaunchAntiMalwareDriverEnabled', $this->getEarlyLaunchAntiMalwareDriverEnabled());
        $writer->writeStringValue('mobileOsMaximumVersion', $this->getMobileOsMaximumVersion());
        $writer->writeStringValue('mobileOsMinimumVersion', $this->getMobileOsMinimumVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osMaximumVersion', $this->getOsMaximumVersion());
        $writer->writeStringValue('osMinimumVersion', $this->getOsMinimumVersion());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeBooleanValue('passwordRequiredToUnlockFromIdle', $this->getPasswordRequiredToUnlockFromIdle());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('requireHealthyDeviceReport', $this->getRequireHealthyDeviceReport());
        $writer->writeBooleanValue('rtpEnabled', $this->getRtpEnabled());
        $writer->writeBooleanValue('secureBootEnabled', $this->getSecureBootEnabled());
        $writer->writeBooleanValue('signatureOutOfDate', $this->getSignatureOutOfDate());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
        $writer->writeBooleanValue('tpmRequired', $this->getTpmRequired());
        $writer->writeCollectionOfObjectValues('validOperatingSystemBuildRanges', $this->getValidOperatingSystemBuildRanges());
    }

    /**
     * Sets the activeFirewallRequired property value. Require active firewall on Windows devices.
     * @param bool|null $value Value to set for the activeFirewallRequired property.
    */
    public function setActiveFirewallRequired(?bool $value): void {
        $this->getBackingStore()->set('activeFirewallRequired', $value);
    }

    /**
     * Sets the antiSpywareRequired property value. Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @param bool|null $value Value to set for the antiSpywareRequired property.
    */
    public function setAntiSpywareRequired(?bool $value): void {
        $this->getBackingStore()->set('antiSpywareRequired', $value);
    }

    /**
     * Sets the antivirusRequired property value. Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @param bool|null $value Value to set for the antivirusRequired property.
    */
    public function setAntivirusRequired(?bool $value): void {
        $this->getBackingStore()->set('antivirusRequired', $value);
    }

    /**
     * Sets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @param bool|null $value Value to set for the bitLockerEnabled property.
    */
    public function setBitLockerEnabled(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEnabled', $value);
    }

    /**
     * Sets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @param bool|null $value Value to set for the codeIntegrityEnabled property.
    */
    public function setCodeIntegrityEnabled(?bool $value): void {
        $this->getBackingStore()->set('codeIntegrityEnabled', $value);
    }

    /**
     * Sets the configurationManagerComplianceRequired property value. Require to consider SCCM Compliance state into consideration for Intune Compliance State.
     * @param bool|null $value Value to set for the configurationManagerComplianceRequired property.
    */
    public function setConfigurationManagerComplianceRequired(?bool $value): void {
        $this->getBackingStore()->set('configurationManagerComplianceRequired', $value);
    }

    /**
     * Sets the defenderEnabled property value. Require Windows Defender Antimalware on Windows devices.
     * @param bool|null $value Value to set for the defenderEnabled property.
    */
    public function setDefenderEnabled(?bool $value): void {
        $this->getBackingStore()->set('defenderEnabled', $value);
    }

    /**
     * Sets the defenderVersion property value. Require Windows Defender Antimalware minimum version on Windows devices.
     * @param string|null $value Value to set for the defenderVersion property.
    */
    public function setDefenderVersion(?string $value): void {
        $this->getBackingStore()->set('defenderVersion', $value);
    }

    /**
     * Sets the deviceCompliancePolicyScript property value. Not yet documented
     * @param DeviceCompliancePolicyScript|null $value Value to set for the deviceCompliancePolicyScript property.
    */
    public function setDeviceCompliancePolicyScript(?DeviceCompliancePolicyScript $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyScript', $value);
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionEnabled', $value);
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @param bool|null $value Value to set for the earlyLaunchAntiMalwareDriverEnabled property.
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled(?bool $value): void {
        $this->getBackingStore()->set('earlyLaunchAntiMalwareDriverEnabled', $value);
    }

    /**
     * Sets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     * @param string|null $value Value to set for the mobileOsMaximumVersion property.
    */
    public function setMobileOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('mobileOsMaximumVersion', $value);
    }

    /**
     * Sets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     * @param string|null $value Value to set for the mobileOsMinimumVersion property.
    */
    public function setMobileOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('mobileOsMinimumVersion', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Windows 10 version.
     * @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Windows 10 version.
     * @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock Windows device.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @param bool|null $value Value to set for the passwordRequiredToUnlockFromIdle property.
    */
    public function setPasswordRequiredToUnlockFromIdle(?bool $value): void {
        $this->getBackingStore()->set('passwordRequiredToUnlockFromIdle', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @param bool|null $value Value to set for the requireHealthyDeviceReport property.
    */
    public function setRequireHealthyDeviceReport(?bool $value): void {
        $this->getBackingStore()->set('requireHealthyDeviceReport', $value);
    }

    /**
     * Sets the rtpEnabled property value. Require Windows Defender Antimalware Real-Time Protection on Windows devices.
     * @param bool|null $value Value to set for the rtpEnabled property.
    */
    public function setRtpEnabled(?bool $value): void {
        $this->getBackingStore()->set('rtpEnabled', $value);
    }

    /**
     * Sets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @param bool|null $value Value to set for the secureBootEnabled property.
    */
    public function setSecureBootEnabled(?bool $value): void {
        $this->getBackingStore()->set('secureBootEnabled', $value);
    }

    /**
     * Sets the signatureOutOfDate property value. Require Windows Defender Antimalware Signature to be up to date on Windows devices.
     * @param bool|null $value Value to set for the signatureOutOfDate property.
    */
    public function setSignatureOutOfDate(?bool $value): void {
        $this->getBackingStore()->set('signatureOutOfDate', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on windows devices.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

    /**
     * Sets the tpmRequired property value. Require Trusted Platform Module(TPM) to be present.
     * @param bool|null $value Value to set for the tpmRequired property.
    */
    public function setTpmRequired(?bool $value): void {
        $this->getBackingStore()->set('tpmRequired', $value);
    }

    /**
     * Sets the validOperatingSystemBuildRanges property value. The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     * @param array<OperatingSystemVersionRange>|null $value Value to set for the validOperatingSystemBuildRanges property.
    */
    public function setValidOperatingSystemBuildRanges(?array $value): void {
        $this->getBackingStore()->set('validOperatingSystemBuildRanges', $value);
    }

}
