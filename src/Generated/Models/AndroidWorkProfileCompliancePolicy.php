<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This class contains compliance settings for Android Work Profile.
*/
class AndroidWorkProfileCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * Instantiates a new AndroidWorkProfileCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidWorkProfileCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileCompliancePolicy {
        return new AndroidWorkProfileCompliancePolicy();
    }

    /**
     * Gets the advancedThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidRequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'requiredPasswordComplexity' => fn(ParseNode $n) => $o->setRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)),
            'securityBlockJailbrokenDevices' => fn(ParseNode $n) => $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()),
            'securityDisableUsbDebugging' => fn(ParseNode $n) => $o->setSecurityDisableUsbDebugging($n->getBooleanValue()),
            'securityPreventInstallAppsFromUnknownSources' => fn(ParseNode $n) => $o->setSecurityPreventInstallAppsFromUnknownSources($n->getBooleanValue()),
            'securityRequireCompanyPortalAppIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireCompanyPortalAppIntegrity($n->getBooleanValue()),
            'securityRequiredAndroidSafetyNetEvaluationType' => fn(ParseNode $n) => $o->setSecurityRequiredAndroidSafetyNetEvaluationType($n->getEnumValue(AndroidSafetyNetEvaluationType::class)),
            'securityRequireGooglePlayServices' => fn(ParseNode $n) => $o->setSecurityRequireGooglePlayServices($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationBasicIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationCertifiedDevice' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()),
            'securityRequireUpToDateSecurityProviders' => fn(ParseNode $n) => $o->setSecurityRequireUpToDateSecurityProviders($n->getBooleanValue()),
            'securityRequireVerifyApps' => fn(ParseNode $n) => $o->setSecurityRequireVerifyApps($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
            'workProfileInactiveBeforeScreenLockInMinutes' => fn(ParseNode $n) => $o->setWorkProfileInactiveBeforeScreenLockInMinutes($n->getIntegerValue()),
            'workProfilePasswordExpirationInDays' => fn(ParseNode $n) => $o->setWorkProfilePasswordExpirationInDays($n->getIntegerValue()),
            'workProfilePasswordMinimumLength' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()),
            'workProfilePasswordRequiredType' => fn(ParseNode $n) => $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidWorkProfileRequiredPasswordType::class)),
            'workProfilePreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setWorkProfilePreviousPasswordBlockCount($n->getIntegerValue()),
            'workProfileRequiredPasswordComplexity' => fn(ParseNode $n) => $o->setWorkProfileRequiredPasswordComplexity($n->getEnumValue(AndroidRequiredPasswordComplexity::class)),
            'workProfileRequirePassword' => fn(ParseNode $n) => $o->setWorkProfileRequirePassword($n->getBooleanValue()),
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
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
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
     * Gets the passwordRequiredType property value. Android required password type.
     * @return AndroidRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidRequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof AndroidRequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign-in failures allowed before factory reset. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        $val = $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordSignInFailureCountBeforeFactoryReset'");
    }

    /**
     * Gets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        $val = $this->getBackingStore()->get('requiredPasswordComplexity');
        if (is_null($val) || $val instanceof AndroidRequiredPasswordComplexity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredPasswordComplexity'");
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
     * Gets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     * @return bool|null
    */
    public function getSecurityDisableUsbDebugging(): ?bool {
        $val = $this->getBackingStore()->get('securityDisableUsbDebugging');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDisableUsbDebugging'");
    }

    /**
     * Gets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     * @return bool|null
    */
    public function getSecurityPreventInstallAppsFromUnknownSources(): ?bool {
        $val = $this->getBackingStore()->get('securityPreventInstallAppsFromUnknownSources');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityPreventInstallAppsFromUnknownSources'");
    }

    /**
     * Gets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     * @return bool|null
    */
    public function getSecurityRequireCompanyPortalAppIntegrity(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireCompanyPortalAppIntegrity');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireCompanyPortalAppIntegrity'");
    }

    /**
     * Gets the securityRequiredAndroidSafetyNetEvaluationType property value. An enum representing the Android Play Integrity API evaluation types.
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
     * Gets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     * @return bool|null
    */
    public function getSecurityRequireGooglePlayServices(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireGooglePlayServices');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireGooglePlayServices'");
    }

    /**
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the Play Integrity basic integrity check.
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
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the Play Integrity device integrity check.
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
     * Gets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     * @return bool|null
    */
    public function getSecurityRequireUpToDateSecurityProviders(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireUpToDateSecurityProviders');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireUpToDateSecurityProviders'");
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireVerifyApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireVerifyApps'");
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
     * Gets the workProfileInactiveBeforeScreenLockInMinutes property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getWorkProfileInactiveBeforeScreenLockInMinutes(): ?int {
        $val = $this->getBackingStore()->get('workProfileInactiveBeforeScreenLockInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfileInactiveBeforeScreenLockInMinutes'");
    }

    /**
     * Gets the workProfilePasswordExpirationInDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationInDays(): ?int {
        $val = $this->getBackingStore()->get('workProfilePasswordExpirationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfilePasswordExpirationInDays'");
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('workProfilePasswordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfilePasswordMinimumLength'");
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Android Work Profile required password type.
     * @return AndroidWorkProfileRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidWorkProfileRequiredPasswordType {
        $val = $this->getBackingStore()->get('workProfilePasswordRequiredType');
        if (is_null($val) || $val instanceof AndroidWorkProfileRequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfilePasswordRequiredType'");
    }

    /**
     * Gets the workProfilePreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('workProfilePreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfilePreviousPasswordBlockCount'");
    }

    /**
     * Gets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @return AndroidRequiredPasswordComplexity|null
    */
    public function getWorkProfileRequiredPasswordComplexity(): ?AndroidRequiredPasswordComplexity {
        $val = $this->getBackingStore()->get('workProfileRequiredPasswordComplexity');
        if (is_null($val) || $val instanceof AndroidRequiredPasswordComplexity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfileRequiredPasswordComplexity'");
    }

    /**
     * Gets the workProfileRequirePassword property value. Password is required or not for work profile
     * @return bool|null
    */
    public function getWorkProfileRequirePassword(): ?bool {
        $val = $this->getBackingStore()->get('workProfileRequirePassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workProfileRequirePassword'");
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
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeEnumValue('requiredPasswordComplexity', $this->getRequiredPasswordComplexity());
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->getSecurityBlockJailbrokenDevices());
        $writer->writeBooleanValue('securityDisableUsbDebugging', $this->getSecurityDisableUsbDebugging());
        $writer->writeBooleanValue('securityPreventInstallAppsFromUnknownSources', $this->getSecurityPreventInstallAppsFromUnknownSources());
        $writer->writeBooleanValue('securityRequireCompanyPortalAppIntegrity', $this->getSecurityRequireCompanyPortalAppIntegrity());
        $writer->writeEnumValue('securityRequiredAndroidSafetyNetEvaluationType', $this->getSecurityRequiredAndroidSafetyNetEvaluationType());
        $writer->writeBooleanValue('securityRequireGooglePlayServices', $this->getSecurityRequireGooglePlayServices());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->getSecurityRequireSafetyNetAttestationBasicIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->getSecurityRequireSafetyNetAttestationCertifiedDevice());
        $writer->writeBooleanValue('securityRequireUpToDateSecurityProviders', $this->getSecurityRequireUpToDateSecurityProviders());
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->getSecurityRequireVerifyApps());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
        $writer->writeIntegerValue('workProfileInactiveBeforeScreenLockInMinutes', $this->getWorkProfileInactiveBeforeScreenLockInMinutes());
        $writer->writeIntegerValue('workProfilePasswordExpirationInDays', $this->getWorkProfilePasswordExpirationInDays());
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->getWorkProfilePasswordMinimumLength());
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->getWorkProfilePasswordRequiredType());
        $writer->writeIntegerValue('workProfilePreviousPasswordBlockCount', $this->getWorkProfilePreviousPasswordBlockCount());
        $writer->writeEnumValue('workProfileRequiredPasswordComplexity', $this->getWorkProfileRequiredPasswordComplexity());
        $writer->writeBooleanValue('workProfileRequirePassword', $this->getWorkProfileRequirePassword());
    }

    /**
     * Sets the advancedThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock device.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Android required password type.
     * @param AndroidRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign-in failures allowed before factory reset. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the requiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @param AndroidRequiredPasswordComplexity|null $value Value to set for the requiredPasswordComplexity property.
    */
    public function setRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value): void {
        $this->getBackingStore()->set('requiredPasswordComplexity', $value);
    }

    /**
     * Sets the securityBlockJailbrokenDevices property value. Indicates the device should not be rooted. When TRUE, if the device is detected as rooted it will be reported non-compliant. When FALSE, the device is not reported as non-compliant regardless of device rooted state. Default is FALSE.
     * @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value): void {
        $this->getBackingStore()->set('securityBlockJailbrokenDevices', $value);
    }

    /**
     * Sets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     * @param bool|null $value Value to set for the securityDisableUsbDebugging property.
    */
    public function setSecurityDisableUsbDebugging(?bool $value): void {
        $this->getBackingStore()->set('securityDisableUsbDebugging', $value);
    }

    /**
     * Sets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     * @param bool|null $value Value to set for the securityPreventInstallAppsFromUnknownSources property.
    */
    public function setSecurityPreventInstallAppsFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('securityPreventInstallAppsFromUnknownSources', $value);
    }

    /**
     * Sets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     * @param bool|null $value Value to set for the securityRequireCompanyPortalAppIntegrity property.
    */
    public function setSecurityRequireCompanyPortalAppIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireCompanyPortalAppIntegrity', $value);
    }

    /**
     * Sets the securityRequiredAndroidSafetyNetEvaluationType property value. An enum representing the Android Play Integrity API evaluation types.
     * @param AndroidSafetyNetEvaluationType|null $value Value to set for the securityRequiredAndroidSafetyNetEvaluationType property.
    */
    public function setSecurityRequiredAndroidSafetyNetEvaluationType(?AndroidSafetyNetEvaluationType $value): void {
        $this->getBackingStore()->set('securityRequiredAndroidSafetyNetEvaluationType', $value);
    }

    /**
     * Sets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     * @param bool|null $value Value to set for the securityRequireGooglePlayServices property.
    */
    public function setSecurityRequireGooglePlayServices(?bool $value): void {
        $this->getBackingStore()->set('securityRequireGooglePlayServices', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the Play Integrity basic integrity check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationBasicIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the Play Integrity device integrity check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationCertifiedDevice', $value);
    }

    /**
     * Sets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     * @param bool|null $value Value to set for the securityRequireUpToDateSecurityProviders property.
    */
    public function setSecurityRequireUpToDateSecurityProviders(?bool $value): void {
        $this->getBackingStore()->set('securityRequireUpToDateSecurityProviders', $value);
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value): void {
        $this->getBackingStore()->set('securityRequireVerifyApps', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on Android devices.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

    /**
     * Sets the workProfileInactiveBeforeScreenLockInMinutes property value. Minutes of inactivity before the screen times out.
     * @param int|null $value Value to set for the workProfileInactiveBeforeScreenLockInMinutes property.
    */
    public function setWorkProfileInactiveBeforeScreenLockInMinutes(?int $value): void {
        $this->getBackingStore()->set('workProfileInactiveBeforeScreenLockInMinutes', $value);
    }

    /**
     * Sets the workProfilePasswordExpirationInDays property value. Number of days before the work profile password expires. Valid values 1 to 365
     * @param int|null $value Value to set for the workProfilePasswordExpirationInDays property.
    */
    public function setWorkProfilePasswordExpirationInDays(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordExpirationInDays', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Minimum length of work profile password. Valid values 4 to 16
     * @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumLength', $value);
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Android Work Profile required password type.
     * @param AndroidWorkProfileRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidWorkProfileRequiredPasswordType $value): void {
        $this->getBackingStore()->set('workProfilePasswordRequiredType', $value);
    }

    /**
     * Sets the workProfilePreviousPasswordBlockCount property value. Number of previous work profile passwords to block. Valid values 0 to 24
     * @param int|null $value Value to set for the workProfilePreviousPasswordBlockCount property.
    */
    public function setWorkProfilePreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('workProfilePreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the workProfileRequiredPasswordComplexity property value. The password complexity types that can be set on Android. One of: NONE, LOW, MEDIUM, HIGH. This is an API targeted to Android 11+.
     * @param AndroidRequiredPasswordComplexity|null $value Value to set for the workProfileRequiredPasswordComplexity property.
    */
    public function setWorkProfileRequiredPasswordComplexity(?AndroidRequiredPasswordComplexity $value): void {
        $this->getBackingStore()->set('workProfileRequiredPasswordComplexity', $value);
    }

    /**
     * Sets the workProfileRequirePassword property value. Password is required or not for work profile
     * @param bool|null $value Value to set for the workProfileRequirePassword property.
    */
    public function setWorkProfileRequirePassword(?bool $value): void {
        $this->getBackingStore()->set('workProfileRequirePassword', $value);
    }

}
