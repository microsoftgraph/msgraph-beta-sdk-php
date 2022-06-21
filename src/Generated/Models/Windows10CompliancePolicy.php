<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10CompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var bool|null $activeFirewallRequired Require active firewall on Windows devices.
    */
    private ?bool $activeFirewallRequired = null;
    
    /**
     * @var bool|null $antiSpywareRequired Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    */
    private ?bool $antiSpywareRequired = null;
    
    /**
     * @var bool|null $antivirusRequired Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
    */
    private ?bool $antivirusRequired = null;
    
    /**
     * @var bool|null $bitLockerEnabled Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    */
    private ?bool $bitLockerEnabled = null;
    
    /**
     * @var bool|null $codeIntegrityEnabled Require devices to be reported as healthy by Windows Device Health Attestation.
    */
    private ?bool $codeIntegrityEnabled = null;
    
    /**
     * @var bool|null $configurationManagerComplianceRequired Require to consider SCCM Compliance state into consideration for Intune Compliance State.
    */
    private ?bool $configurationManagerComplianceRequired = null;
    
    /**
     * @var bool|null $defenderEnabled Require Windows Defender Antimalware on Windows devices.
    */
    private ?bool $defenderEnabled = null;
    
    /**
     * @var string|null $defenderVersion Require Windows Defender Antimalware minimum version on Windows devices.
    */
    private ?string $defenderVersion = null;
    
    /**
     * @var DeviceCompliancePolicyScript|null $deviceCompliancePolicyScript Not yet documented
    */
    private ?DeviceCompliancePolicyScript $deviceCompliancePolicyScript = null;
    
    /**
     * @var bool|null $deviceThreatProtectionEnabled Require that devices have enabled device threat protection.
    */
    private ?bool $deviceThreatProtectionEnabled = null;
    
    /**
     * @var DeviceThreatProtectionLevel|null $deviceThreatProtectionRequiredSecurityLevel Require Device Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    */
    private ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var bool|null $earlyLaunchAntiMalwareDriverEnabled Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    */
    private ?bool $earlyLaunchAntiMalwareDriverEnabled = null;
    
    /**
     * @var string|null $mobileOsMaximumVersion Maximum Windows Phone version.
    */
    private ?string $mobileOsMaximumVersion = null;
    
    /**
     * @var string|null $mobileOsMinimumVersion Minimum Windows Phone version.
    */
    private ?string $mobileOsMinimumVersion = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum Windows 10 version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum Windows 10 version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var bool|null $passwordBlockSimple Indicates whether or not to block simple password.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays The password expiration in days.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength The minimum password length.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeLock Minutes of inactivity before a password is required.
    */
    private ?int $passwordMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount The number of previous passwords to prevent re-use of.
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Require a password to unlock Windows device.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var bool|null $passwordRequiredToUnlockFromIdle Require a password to unlock an idle device.
    */
    private ?bool $passwordRequiredToUnlockFromIdle = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $requireHealthyDeviceReport Require devices to be reported as healthy by Windows Device Health Attestation.
    */
    private ?bool $requireHealthyDeviceReport = null;
    
    /**
     * @var bool|null $rtpEnabled Require Windows Defender Antimalware Real-Time Protection on Windows devices.
    */
    private ?bool $rtpEnabled = null;
    
    /**
     * @var bool|null $secureBootEnabled Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    */
    private ?bool $secureBootEnabled = null;
    
    /**
     * @var bool|null $signatureOutOfDate Require Windows Defender Antimalware Signature to be up to date on Windows devices.
    */
    private ?bool $signatureOutOfDate = null;
    
    /**
     * @var bool|null $storageRequireEncryption Require encryption on windows devices.
    */
    private ?bool $storageRequireEncryption = null;
    
    /**
     * @var bool|null $tpmRequired Require Trusted Platform Module(TPM) to be present.
    */
    private ?bool $tpmRequired = null;
    
    /**
     * @var array<OperatingSystemVersionRange>|null $validOperatingSystemBuildRanges The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
    */
    private ?array $validOperatingSystemBuildRanges = null;
    
    /**
     * Instantiates a new Windows10CompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->activeFirewallRequired;
    }

    /**
     * Gets the antiSpywareRequired property value. Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @return bool|null
    */
    public function getAntiSpywareRequired(): ?bool {
        return $this->antiSpywareRequired;
    }

    /**
     * Gets the antivirusRequired property value. Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     * @return bool|null
    */
    public function getAntivirusRequired(): ?bool {
        return $this->antivirusRequired;
    }

    /**
     * Gets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @return bool|null
    */
    public function getBitLockerEnabled(): ?bool {
        return $this->bitLockerEnabled;
    }

    /**
     * Gets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getCodeIntegrityEnabled(): ?bool {
        return $this->codeIntegrityEnabled;
    }

    /**
     * Gets the configurationManagerComplianceRequired property value. Require to consider SCCM Compliance state into consideration for Intune Compliance State.
     * @return bool|null
    */
    public function getConfigurationManagerComplianceRequired(): ?bool {
        return $this->configurationManagerComplianceRequired;
    }

    /**
     * Gets the defenderEnabled property value. Require Windows Defender Antimalware on Windows devices.
     * @return bool|null
    */
    public function getDefenderEnabled(): ?bool {
        return $this->defenderEnabled;
    }

    /**
     * Gets the defenderVersion property value. Require Windows Defender Antimalware minimum version on Windows devices.
     * @return string|null
    */
    public function getDefenderVersion(): ?string {
        return $this->defenderVersion;
    }

    /**
     * Gets the deviceCompliancePolicyScript property value. Not yet documented
     * @return DeviceCompliancePolicyScript|null
    */
    public function getDeviceCompliancePolicyScript(): ?DeviceCompliancePolicyScript {
        return $this->deviceCompliancePolicyScript;
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->deviceThreatProtectionEnabled;
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Require Device Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->deviceThreatProtectionRequiredSecurityLevel;
    }

    /**
     * Gets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @return bool|null
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled(): ?bool {
        return $this->earlyLaunchAntiMalwareDriverEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeFirewallRequired' => function (ParseNode $n) use ($o) { $o->setActiveFirewallRequired($n->getBooleanValue()); },
            'antiSpywareRequired' => function (ParseNode $n) use ($o) { $o->setAntiSpywareRequired($n->getBooleanValue()); },
            'antivirusRequired' => function (ParseNode $n) use ($o) { $o->setAntivirusRequired($n->getBooleanValue()); },
            'bitLockerEnabled' => function (ParseNode $n) use ($o) { $o->setBitLockerEnabled($n->getBooleanValue()); },
            'codeIntegrityEnabled' => function (ParseNode $n) use ($o) { $o->setCodeIntegrityEnabled($n->getBooleanValue()); },
            'configurationManagerComplianceRequired' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerComplianceRequired($n->getBooleanValue()); },
            'defenderEnabled' => function (ParseNode $n) use ($o) { $o->setDefenderEnabled($n->getBooleanValue()); },
            'defenderVersion' => function (ParseNode $n) use ($o) { $o->setDefenderVersion($n->getStringValue()); },
            'deviceCompliancePolicyScript' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicyScript($n->getObjectValue(array(DeviceCompliancePolicyScript::class, 'createFromDiscriminatorValue'))); },
            'deviceThreatProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()); },
            'deviceThreatProtectionRequiredSecurityLevel' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)); },
            'earlyLaunchAntiMalwareDriverEnabled' => function (ParseNode $n) use ($o) { $o->setEarlyLaunchAntiMalwareDriverEnabled($n->getBooleanValue()); },
            'mobileOsMaximumVersion' => function (ParseNode $n) use ($o) { $o->setMobileOsMaximumVersion($n->getStringValue()); },
            'mobileOsMinimumVersion' => function (ParseNode $n) use ($o) { $o->setMobileOsMinimumVersion($n->getStringValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredToUnlockFromIdle' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredToUnlockFromIdle($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'requireHealthyDeviceReport' => function (ParseNode $n) use ($o) { $o->setRequireHealthyDeviceReport($n->getBooleanValue()); },
            'rtpEnabled' => function (ParseNode $n) use ($o) { $o->setRtpEnabled($n->getBooleanValue()); },
            'secureBootEnabled' => function (ParseNode $n) use ($o) { $o->setSecureBootEnabled($n->getBooleanValue()); },
            'signatureOutOfDate' => function (ParseNode $n) use ($o) { $o->setSignatureOutOfDate($n->getBooleanValue()); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
            'tpmRequired' => function (ParseNode $n) use ($o) { $o->setTpmRequired($n->getBooleanValue()); },
            'validOperatingSystemBuildRanges' => function (ParseNode $n) use ($o) { $o->setValidOperatingSystemBuildRanges($n->getCollectionOfObjectValues(array(OperatingSystemVersionRange::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMaximumVersion(): ?string {
        return $this->mobileOsMaximumVersion;
    }

    /**
     * Gets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMinimumVersion(): ?string {
        return $this->mobileOsMinimumVersion;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Windows 10 version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Windows 10 version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock Windows device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @return bool|null
    */
    public function getPasswordRequiredToUnlockFromIdle(): ?bool {
        return $this->passwordRequiredToUnlockFromIdle;
    }

    /**
     * Gets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getRequireHealthyDeviceReport(): ?bool {
        return $this->requireHealthyDeviceReport;
    }

    /**
     * Gets the rtpEnabled property value. Require Windows Defender Antimalware Real-Time Protection on Windows devices.
     * @return bool|null
    */
    public function getRtpEnabled(): ?bool {
        return $this->rtpEnabled;
    }

    /**
     * Gets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @return bool|null
    */
    public function getSecureBootEnabled(): ?bool {
        return $this->secureBootEnabled;
    }

    /**
     * Gets the signatureOutOfDate property value. Require Windows Defender Antimalware Signature to be up to date on Windows devices.
     * @return bool|null
    */
    public function getSignatureOutOfDate(): ?bool {
        return $this->signatureOutOfDate;
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on windows devices.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->storageRequireEncryption;
    }

    /**
     * Gets the tpmRequired property value. Require Trusted Platform Module(TPM) to be present.
     * @return bool|null
    */
    public function getTpmRequired(): ?bool {
        return $this->tpmRequired;
    }

    /**
     * Gets the validOperatingSystemBuildRanges property value. The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     * @return array<OperatingSystemVersionRange>|null
    */
    public function getValidOperatingSystemBuildRanges(): ?array {
        return $this->validOperatingSystemBuildRanges;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('activeFirewallRequired', $this->activeFirewallRequired);
        $writer->writeBooleanValue('antiSpywareRequired', $this->antiSpywareRequired);
        $writer->writeBooleanValue('antivirusRequired', $this->antivirusRequired);
        $writer->writeBooleanValue('bitLockerEnabled', $this->bitLockerEnabled);
        $writer->writeBooleanValue('codeIntegrityEnabled', $this->codeIntegrityEnabled);
        $writer->writeBooleanValue('configurationManagerComplianceRequired', $this->configurationManagerComplianceRequired);
        $writer->writeBooleanValue('defenderEnabled', $this->defenderEnabled);
        $writer->writeStringValue('defenderVersion', $this->defenderVersion);
        $writer->writeObjectValue('deviceCompliancePolicyScript', $this->deviceCompliancePolicyScript);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->deviceThreatProtectionEnabled);
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->deviceThreatProtectionRequiredSecurityLevel);
        $writer->writeBooleanValue('earlyLaunchAntiMalwareDriverEnabled', $this->earlyLaunchAntiMalwareDriverEnabled);
        $writer->writeStringValue('mobileOsMaximumVersion', $this->mobileOsMaximumVersion);
        $writer->writeStringValue('mobileOsMinimumVersion', $this->mobileOsMinimumVersion);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeBooleanValue('passwordRequiredToUnlockFromIdle', $this->passwordRequiredToUnlockFromIdle);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('requireHealthyDeviceReport', $this->requireHealthyDeviceReport);
        $writer->writeBooleanValue('rtpEnabled', $this->rtpEnabled);
        $writer->writeBooleanValue('secureBootEnabled', $this->secureBootEnabled);
        $writer->writeBooleanValue('signatureOutOfDate', $this->signatureOutOfDate);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
        $writer->writeBooleanValue('tpmRequired', $this->tpmRequired);
        $writer->writeCollectionOfObjectValues('validOperatingSystemBuildRanges', $this->validOperatingSystemBuildRanges);
    }

    /**
     * Sets the activeFirewallRequired property value. Require active firewall on Windows devices.
     *  @param bool|null $value Value to set for the activeFirewallRequired property.
    */
    public function setActiveFirewallRequired(?bool $value ): void {
        $this->activeFirewallRequired = $value;
    }

    /**
     * Sets the antiSpywareRequired property value. Require any AntiSpyware solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     *  @param bool|null $value Value to set for the antiSpywareRequired property.
    */
    public function setAntiSpywareRequired(?bool $value ): void {
        $this->antiSpywareRequired = $value;
    }

    /**
     * Sets the antivirusRequired property value. Require any Antivirus solution registered with Windows Decurity Center to be on and monitoring (e.g. Symantec, Windows Defender).
     *  @param bool|null $value Value to set for the antivirusRequired property.
    */
    public function setAntivirusRequired(?bool $value ): void {
        $this->antivirusRequired = $value;
    }

    /**
     * Sets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     *  @param bool|null $value Value to set for the bitLockerEnabled property.
    */
    public function setBitLockerEnabled(?bool $value ): void {
        $this->bitLockerEnabled = $value;
    }

    /**
     * Sets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     *  @param bool|null $value Value to set for the codeIntegrityEnabled property.
    */
    public function setCodeIntegrityEnabled(?bool $value ): void {
        $this->codeIntegrityEnabled = $value;
    }

    /**
     * Sets the configurationManagerComplianceRequired property value. Require to consider SCCM Compliance state into consideration for Intune Compliance State.
     *  @param bool|null $value Value to set for the configurationManagerComplianceRequired property.
    */
    public function setConfigurationManagerComplianceRequired(?bool $value ): void {
        $this->configurationManagerComplianceRequired = $value;
    }

    /**
     * Sets the defenderEnabled property value. Require Windows Defender Antimalware on Windows devices.
     *  @param bool|null $value Value to set for the defenderEnabled property.
    */
    public function setDefenderEnabled(?bool $value ): void {
        $this->defenderEnabled = $value;
    }

    /**
     * Sets the defenderVersion property value. Require Windows Defender Antimalware minimum version on Windows devices.
     *  @param string|null $value Value to set for the defenderVersion property.
    */
    public function setDefenderVersion(?string $value ): void {
        $this->defenderVersion = $value;
    }

    /**
     * Sets the deviceCompliancePolicyScript property value. Not yet documented
     *  @param DeviceCompliancePolicyScript|null $value Value to set for the deviceCompliancePolicyScript property.
    */
    public function setDeviceCompliancePolicyScript(?DeviceCompliancePolicyScript $value ): void {
        $this->deviceCompliancePolicyScript = $value;
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value ): void {
        $this->deviceThreatProtectionEnabled = $value;
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Require Device Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->deviceThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     *  @param bool|null $value Value to set for the earlyLaunchAntiMalwareDriverEnabled property.
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled(?bool $value ): void {
        $this->earlyLaunchAntiMalwareDriverEnabled = $value;
    }

    /**
     * Sets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     *  @param string|null $value Value to set for the mobileOsMaximumVersion property.
    */
    public function setMobileOsMaximumVersion(?string $value ): void {
        $this->mobileOsMaximumVersion = $value;
    }

    /**
     * Sets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     *  @param string|null $value Value to set for the mobileOsMinimumVersion property.
    */
    public function setMobileOsMinimumVersion(?string $value ): void {
        $this->mobileOsMinimumVersion = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Windows 10 version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Windows 10 version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length.
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock Windows device.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     *  @param bool|null $value Value to set for the passwordRequiredToUnlockFromIdle property.
    */
    public function setPasswordRequiredToUnlockFromIdle(?bool $value ): void {
        $this->passwordRequiredToUnlockFromIdle = $value;
    }

    /**
     * Sets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     *  @param bool|null $value Value to set for the requireHealthyDeviceReport property.
    */
    public function setRequireHealthyDeviceReport(?bool $value ): void {
        $this->requireHealthyDeviceReport = $value;
    }

    /**
     * Sets the rtpEnabled property value. Require Windows Defender Antimalware Real-Time Protection on Windows devices.
     *  @param bool|null $value Value to set for the rtpEnabled property.
    */
    public function setRtpEnabled(?bool $value ): void {
        $this->rtpEnabled = $value;
    }

    /**
     * Sets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     *  @param bool|null $value Value to set for the secureBootEnabled property.
    */
    public function setSecureBootEnabled(?bool $value ): void {
        $this->secureBootEnabled = $value;
    }

    /**
     * Sets the signatureOutOfDate property value. Require Windows Defender Antimalware Signature to be up to date on Windows devices.
     *  @param bool|null $value Value to set for the signatureOutOfDate property.
    */
    public function setSignatureOutOfDate(?bool $value ): void {
        $this->signatureOutOfDate = $value;
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on windows devices.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

    /**
     * Sets the tpmRequired property value. Require Trusted Platform Module(TPM) to be present.
     *  @param bool|null $value Value to set for the tpmRequired property.
    */
    public function setTpmRequired(?bool $value ): void {
        $this->tpmRequired = $value;
    }

    /**
     * Sets the validOperatingSystemBuildRanges property value. The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     *  @param array<OperatingSystemVersionRange>|null $value Value to set for the validOperatingSystemBuildRanges property.
    */
    public function setValidOperatingSystemBuildRanges(?array $value ): void {
        $this->validOperatingSystemBuildRanges = $value;
    }

}
