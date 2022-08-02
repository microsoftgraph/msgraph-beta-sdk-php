<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var DeviceThreatProtectionLevel|null $advancedThreatProtectionRequiredSecurityLevel Device threat protection levels for the Device Threat Protection API.
    */
    private ?DeviceThreatProtectionLevel $advancedThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var bool|null $deviceThreatProtectionEnabled Require that devices have enabled device threat protection .
    */
    private ?bool $deviceThreatProtectionEnabled = null;
    
    /**
     * @var DeviceThreatProtectionLevel|null $deviceThreatProtectionRequiredSecurityLevel Device threat protection levels for the Device Threat Protection API.
    */
    private ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var bool|null $managedEmailProfileRequired Indicates whether or not to require a managed email profile.
    */
    private ?bool $managedEmailProfileRequired = null;
    
    /**
     * @var string|null $osMaximumBuildVersion Maximum IOS build version.
    */
    private ?string $osMaximumBuildVersion = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum IOS version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumBuildVersion Minimum IOS build version.
    */
    private ?string $osMinimumBuildVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum IOS version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var bool|null $passcodeBlockSimple Indicates whether or not to block simple passcodes.
    */
    private ?bool $passcodeBlockSimple = null;
    
    /**
     * @var int|null $passcodeExpirationDays Number of days before the passcode expires. Valid values 1 to 65535
    */
    private ?int $passcodeExpirationDays = null;
    
    /**
     * @var int|null $passcodeMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passcodeMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passcodeMinimumLength Minimum length of passcode. Valid values 4 to 14
    */
    private ?int $passcodeMinimumLength = null;
    
    /**
     * @var int|null $passcodeMinutesOfInactivityBeforeLock Minutes of inactivity before a passcode is required.
    */
    private ?int $passcodeMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passcodeMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passcodeMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passcodePreviousPasscodeBlockCount Number of previous passcodes to block. Valid values 1 to 24
    */
    private ?int $passcodePreviousPasscodeBlockCount = null;
    
    /**
     * @var bool|null $passcodeRequired Indicates whether or not to require a passcode.
    */
    private ?bool $passcodeRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passcodeRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passcodeRequiredType = null;
    
    /**
     * @var array<AppListItem>|null $restrictedApps Require the device to not have the specified apps installed. This collection can contain a maximum of 100 elements.
    */
    private ?array $restrictedApps = null;
    
    /**
     * @var bool|null $securityBlockJailbrokenDevices Devices must not be jailbroken or rooted.
    */
    private ?bool $securityBlockJailbrokenDevices = null;
    
    /**
     * Instantiates a new IosCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosCompliancePolicy {
        return new IosCompliancePolicy();
    }

    /**
     * Gets the advancedThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getAdvancedThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->advancedThreatProtectionRequiredSecurityLevel;
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection .
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->deviceThreatProtectionEnabled;
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
            'managedEmailProfileRequired' => function (ParseNode $n) use ($o) { $o->setManagedEmailProfileRequired($n->getBooleanValue()); },
            'osMaximumBuildVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumBuildVersion($n->getStringValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumBuildVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumBuildVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passcodeBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasscodeBlockSimple($n->getBooleanValue()); },
            'passcodeExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasscodeExpirationDays($n->getIntegerValue()); },
            'passcodeMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasscodeMinimumCharacterSetCount($n->getIntegerValue()); },
            'passcodeMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasscodeMinimumLength($n->getIntegerValue()); },
            'passcodeMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasscodeMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passcodeMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasscodeMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passcodePreviousPasscodeBlockCount' => function (ParseNode $n) use ($o) { $o->setPasscodePreviousPasscodeBlockCount($n->getIntegerValue()); },
            'passcodeRequired' => function (ParseNode $n) use ($o) { $o->setPasscodeRequired($n->getBooleanValue()); },
            'passcodeRequiredType' => function (ParseNode $n) use ($o) { $o->setPasscodeRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'restrictedApps' => function (ParseNode $n) use ($o) { $o->setRestrictedApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'securityBlockJailbrokenDevices' => function (ParseNode $n) use ($o) { $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the managedEmailProfileRequired property value. Indicates whether or not to require a managed email profile.
     * @return bool|null
    */
    public function getManagedEmailProfileRequired(): ?bool {
        return $this->managedEmailProfileRequired;
    }

    /**
     * Gets the osMaximumBuildVersion property value. Maximum IOS build version.
     * @return string|null
    */
    public function getOsMaximumBuildVersion(): ?string {
        return $this->osMaximumBuildVersion;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum IOS version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumBuildVersion property value. Minimum IOS build version.
     * @return string|null
    */
    public function getOsMinimumBuildVersion(): ?string {
        return $this->osMinimumBuildVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum IOS version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     * @return bool|null
    */
    public function getPasscodeBlockSimple(): ?bool {
        return $this->passcodeBlockSimple;
    }

    /**
     * Gets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     * @return int|null
    */
    public function getPasscodeExpirationDays(): ?int {
        return $this->passcodeExpirationDays;
    }

    /**
     * Gets the passcodeMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasscodeMinimumCharacterSetCount(): ?int {
        return $this->passcodeMinimumCharacterSetCount;
    }

    /**
     * Gets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     * @return int|null
    */
    public function getPasscodeMinimumLength(): ?int {
        return $this->passcodeMinimumLength;
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeLock(): ?int {
        return $this->passcodeMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passcodeMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasscodePreviousPasscodeBlockCount(): ?int {
        return $this->passcodePreviousPasscodeBlockCount;
    }

    /**
     * Gets the passcodeRequired property value. Indicates whether or not to require a passcode.
     * @return bool|null
    */
    public function getPasscodeRequired(): ?bool {
        return $this->passcodeRequired;
    }

    /**
     * Gets the passcodeRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasscodeRequiredType(): ?RequiredPasswordType {
        return $this->passcodeRequiredType;
    }

    /**
     * Gets the restrictedApps property value. Require the device to not have the specified apps installed. This collection can contain a maximum of 100 elements.
     * @return array<AppListItem>|null
    */
    public function getRestrictedApps(): ?array {
        return $this->restrictedApps;
    }

    /**
     * Gets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     * @return bool|null
    */
    public function getSecurityBlockJailbrokenDevices(): ?bool {
        return $this->securityBlockJailbrokenDevices;
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
        $writer->writeBooleanValue('managedEmailProfileRequired', $this->managedEmailProfileRequired);
        $writer->writeStringValue('osMaximumBuildVersion', $this->osMaximumBuildVersion);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumBuildVersion', $this->osMinimumBuildVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeBooleanValue('passcodeBlockSimple', $this->passcodeBlockSimple);
        $writer->writeIntegerValue('passcodeExpirationDays', $this->passcodeExpirationDays);
        $writer->writeIntegerValue('passcodeMinimumCharacterSetCount', $this->passcodeMinimumCharacterSetCount);
        $writer->writeIntegerValue('passcodeMinimumLength', $this->passcodeMinimumLength);
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeLock', $this->passcodeMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeScreenTimeout', $this->passcodeMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passcodePreviousPasscodeBlockCount', $this->passcodePreviousPasscodeBlockCount);
        $writer->writeBooleanValue('passcodeRequired', $this->passcodeRequired);
        $writer->writeEnumValue('passcodeRequiredType', $this->passcodeRequiredType);
        $writer->writeCollectionOfObjectValues('restrictedApps', $this->restrictedApps);
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->securityBlockJailbrokenDevices);
    }

    /**
     * Sets the advancedThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the advancedThreatProtectionRequiredSecurityLevel property.
    */
    public function setAdvancedThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->advancedThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection .
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value ): void {
        $this->deviceThreatProtectionEnabled = $value;
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->deviceThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the managedEmailProfileRequired property value. Indicates whether or not to require a managed email profile.
     *  @param bool|null $value Value to set for the managedEmailProfileRequired property.
    */
    public function setManagedEmailProfileRequired(?bool $value ): void {
        $this->managedEmailProfileRequired = $value;
    }

    /**
     * Sets the osMaximumBuildVersion property value. Maximum IOS build version.
     *  @param string|null $value Value to set for the osMaximumBuildVersion property.
    */
    public function setOsMaximumBuildVersion(?string $value ): void {
        $this->osMaximumBuildVersion = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum IOS version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumBuildVersion property value. Minimum IOS build version.
     *  @param string|null $value Value to set for the osMinimumBuildVersion property.
    */
    public function setOsMinimumBuildVersion(?string $value ): void {
        $this->osMinimumBuildVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum IOS version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     *  @param bool|null $value Value to set for the passcodeBlockSimple property.
    */
    public function setPasscodeBlockSimple(?bool $value ): void {
        $this->passcodeBlockSimple = $value;
    }

    /**
     * Sets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     *  @param int|null $value Value to set for the passcodeExpirationDays property.
    */
    public function setPasscodeExpirationDays(?int $value ): void {
        $this->passcodeExpirationDays = $value;
    }

    /**
     * Sets the passcodeMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passcodeMinimumCharacterSetCount property.
    */
    public function setPasscodeMinimumCharacterSetCount(?int $value ): void {
        $this->passcodeMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     *  @param int|null $value Value to set for the passcodeMinimumLength property.
    */
    public function setPasscodeMinimumLength(?int $value ): void {
        $this->passcodeMinimumLength = $value;
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     *  @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeLock property.
    */
    public function setPasscodeMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passcodeMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasscodeMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passcodeMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     *  @param int|null $value Value to set for the passcodePreviousPasscodeBlockCount property.
    */
    public function setPasscodePreviousPasscodeBlockCount(?int $value ): void {
        $this->passcodePreviousPasscodeBlockCount = $value;
    }

    /**
     * Sets the passcodeRequired property value. Indicates whether or not to require a passcode.
     *  @param bool|null $value Value to set for the passcodeRequired property.
    */
    public function setPasscodeRequired(?bool $value ): void {
        $this->passcodeRequired = $value;
    }

    /**
     * Sets the passcodeRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passcodeRequiredType property.
    */
    public function setPasscodeRequiredType(?RequiredPasswordType $value ): void {
        $this->passcodeRequiredType = $value;
    }

    /**
     * Sets the restrictedApps property value. Require the device to not have the specified apps installed. This collection can contain a maximum of 100 elements.
     *  @param array<AppListItem>|null $value Value to set for the restrictedApps property.
    */
    public function setRestrictedApps(?array $value ): void {
        $this->restrictedApps = $value;
    }

    /**
     * Sets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     *  @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value ): void {
        $this->securityBlockJailbrokenDevices = $value;
    }

}
