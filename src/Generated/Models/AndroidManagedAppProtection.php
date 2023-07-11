<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings targeted to specific security groups and for a specified set of apps on an Android device
*/
class AndroidManagedAppProtection extends TargetedManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new androidManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedAppProtection {
        return new AndroidManagedAppProtection();
    }

    /**
     * Gets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
     * @return string|null
    */
    public function getAllowedAndroidDeviceManufacturers(): ?string {
        $val = $this->getBackingStore()->get('allowedAndroidDeviceManufacturers');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAndroidDeviceManufacturers'");
    }

    /**
     * Gets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work.
     * @return array<string>|null
    */
    public function getAllowedAndroidDeviceModels(): ?array {
        $val = $this->getBackingStore()->get('allowedAndroidDeviceModels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAndroidDeviceModels'");
    }

    /**
     * Gets the appActionIfAccountIsClockedOut property value. Defines a managed app behavior, either block or warn, if the user is clocked out (non-working time).
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAccountIsClockedOut(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAccountIsClockedOut');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAccountIsClockedOut'");
    }

    /**
     * Gets the appActionIfAndroidDeviceManufacturerNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidDeviceManufacturerNotAllowed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidDeviceManufacturerNotAllowed'");
    }

    /**
     * Gets the appActionIfAndroidDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidDeviceModelNotAllowed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidDeviceModelNotAllowed'");
    }

    /**
     * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidSafetyNetAppsVerificationFailed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidSafetyNetAppsVerificationFailed'");
    }

    /**
     * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfAndroidSafetyNetDeviceAttestationFailed');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfAndroidSafetyNetDeviceAttestationFailed'");
    }

    /**
     * Gets the appActionIfDeviceLockNotSet property value. An admin initiated action to be applied on a managed app.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDeviceLockNotSet(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDeviceLockNotSet');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDeviceLockNotSet'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanHigh property value. If the device does not have a passcode of high complexity or higher, trigger the stored action.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanHigh(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanHigh');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanHigh'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanLow property value. If the device does not have a passcode of low complexity or higher, trigger the stored action.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanLow(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanLow');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanLow'");
    }

    /**
     * Gets the appActionIfDevicePasscodeComplexityLessThanMedium property value. If the device does not have a passcode of medium complexity or higher, trigger the stored action.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDevicePasscodeComplexityLessThanMedium(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfDevicePasscodeComplexityLessThanMedium');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfDevicePasscodeComplexityLessThanMedium'");
    }

    /**
     * Gets the appActionIfSamsungKnoxAttestationRequired property value. Defines the behavior of a managed app when Samsung Knox Attestation is required. Possible values are null, warn, block & wipe. If the admin does not set this action, the default is null, which indicates this setting is not configured.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfSamsungKnoxAttestationRequired(): ?ManagedAppRemediationAction {
        $val = $this->getBackingStore()->get('appActionIfSamsungKnoxAttestationRequired');
        if (is_null($val) || $val instanceof ManagedAppRemediationAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appActionIfSamsungKnoxAttestationRequired'");
    }

    /**
     * Gets the approvedKeyboards property value. If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
     * @return array<KeyValuePair>|null
    */
    public function getApprovedKeyboards(): ?array {
        $val = $this->getBackingStore()->get('approvedKeyboards');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvedKeyboards'");
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        $val = $this->getBackingStore()->get('apps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedMobileApp::class);
            /** @var array<ManagedMobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apps'");
    }

    /**
     * Gets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getBiometricAuthenticationBlocked(): ?bool {
        $val = $this->getBackingStore()->get('biometricAuthenticationBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'biometricAuthenticationBlocked'");
    }

    /**
     * Gets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     * @return int|null
    */
    public function getBlockAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('blockAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Gets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch.
     * @return bool|null
    */
    public function getConnectToVpnOnLaunch(): ?bool {
        $val = $this->getBackingStore()->get('connectToVpnOnLaunch');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectToVpnOnLaunch'");
    }

    /**
     * Gets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android.
     * @return string|null
    */
    public function getCustomBrowserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('customBrowserDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customBrowserDisplayName'");
    }

    /**
     * Gets the customBrowserPackageId property value. Unique identifier of a custom browser to open weblink on Android.
     * @return string|null
    */
    public function getCustomBrowserPackageId(): ?string {
        $val = $this->getBackingStore()->get('customBrowserPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customBrowserPackageId'");
    }

    /**
     * Gets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('customDialerAppDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDialerAppDisplayName'");
    }

    /**
     * Gets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppPackageId(): ?string {
        $val = $this->getBackingStore()->get('customDialerAppPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDialerAppPackageId'");
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        $val = $this->getBackingStore()->get('deployedAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedAppCount'");
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        $val = $this->getBackingStore()->get('deploymentSummary');
        if (is_null($val) || $val instanceof ManagedAppPolicyDeploymentSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSummary'");
    }

    /**
     * Gets the deviceLockRequired property value. Defines if any kind of lock must be required on android device
     * @return bool|null
    */
    public function getDeviceLockRequired(): ?bool {
        $val = $this->getBackingStore()->get('deviceLockRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLockRequired'");
    }

    /**
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('disableAppEncryptionIfDeviceEncryptionIsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAppEncryptionIfDeviceEncryptionIsEnabled'");
    }

    /**
     * Gets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        $val = $this->getBackingStore()->get('encryptAppData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptAppData'");
    }

    /**
     * Gets the exemptedAppPackages property value. App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppPackages(): ?array {
        $val = $this->getBackingStore()->get('exemptedAppPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptedAppPackages'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAndroidDeviceManufacturers' => fn(ParseNode $n) => $o->setAllowedAndroidDeviceManufacturers($n->getStringValue()),
            'allowedAndroidDeviceModels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedAndroidDeviceModels($val);
            },
            'appActionIfAccountIsClockedOut' => fn(ParseNode $n) => $o->setAppActionIfAccountIsClockedOut($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidDeviceManufacturerNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfAndroidDeviceManufacturerNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidDeviceModelNotAllowed' => fn(ParseNode $n) => $o->setAppActionIfAndroidDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidSafetyNetAppsVerificationFailed' => fn(ParseNode $n) => $o->setAppActionIfAndroidSafetyNetAppsVerificationFailed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfAndroidSafetyNetDeviceAttestationFailed' => fn(ParseNode $n) => $o->setAppActionIfAndroidSafetyNetDeviceAttestationFailed($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDeviceLockNotSet' => fn(ParseNode $n) => $o->setAppActionIfDeviceLockNotSet($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanHigh' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanHigh($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanLow' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanLow($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfDevicePasscodeComplexityLessThanMedium' => fn(ParseNode $n) => $o->setAppActionIfDevicePasscodeComplexityLessThanMedium($n->getEnumValue(ManagedAppRemediationAction::class)),
            'appActionIfSamsungKnoxAttestationRequired' => fn(ParseNode $n) => $o->setAppActionIfSamsungKnoxAttestationRequired($n->getEnumValue(ManagedAppRemediationAction::class)),
            'approvedKeyboards' => fn(ParseNode $n) => $o->setApprovedKeyboards($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'biometricAuthenticationBlocked' => fn(ParseNode $n) => $o->setBiometricAuthenticationBlocked($n->getBooleanValue()),
            'blockAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setBlockAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
            'connectToVpnOnLaunch' => fn(ParseNode $n) => $o->setConnectToVpnOnLaunch($n->getBooleanValue()),
            'customBrowserDisplayName' => fn(ParseNode $n) => $o->setCustomBrowserDisplayName($n->getStringValue()),
            'customBrowserPackageId' => fn(ParseNode $n) => $o->setCustomBrowserPackageId($n->getStringValue()),
            'customDialerAppDisplayName' => fn(ParseNode $n) => $o->setCustomDialerAppDisplayName($n->getStringValue()),
            'customDialerAppPackageId' => fn(ParseNode $n) => $o->setCustomDialerAppPackageId($n->getStringValue()),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'deviceLockRequired' => fn(ParseNode $n) => $o->setDeviceLockRequired($n->getBooleanValue()),
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => fn(ParseNode $n) => $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()),
            'encryptAppData' => fn(ParseNode $n) => $o->setEncryptAppData($n->getBooleanValue()),
            'exemptedAppPackages' => fn(ParseNode $n) => $o->setExemptedAppPackages($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'fingerprintAndBiometricEnabled' => fn(ParseNode $n) => $o->setFingerprintAndBiometricEnabled($n->getBooleanValue()),
            'keyboardsRestricted' => fn(ParseNode $n) => $o->setKeyboardsRestricted($n->getBooleanValue()),
            'minimumRequiredCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumRequiredCompanyPortalVersion($n->getStringValue()),
            'minimumRequiredPatchVersion' => fn(ParseNode $n) => $o->setMinimumRequiredPatchVersion($n->getStringValue()),
            'minimumWarningCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumWarningCompanyPortalVersion($n->getStringValue()),
            'minimumWarningPatchVersion' => fn(ParseNode $n) => $o->setMinimumWarningPatchVersion($n->getStringValue()),
            'minimumWipeCompanyPortalVersion' => fn(ParseNode $n) => $o->setMinimumWipeCompanyPortalVersion($n->getStringValue()),
            'minimumWipePatchVersion' => fn(ParseNode $n) => $o->setMinimumWipePatchVersion($n->getStringValue()),
            'requireClass3Biometrics' => fn(ParseNode $n) => $o->setRequireClass3Biometrics($n->getBooleanValue()),
            'requiredAndroidSafetyNetAppsVerificationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetAppsVerificationType($n->getEnumValue(AndroidManagedAppSafetyNetAppsVerificationType::class)),
            'requiredAndroidSafetyNetDeviceAttestationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetDeviceAttestationType($n->getEnumValue(AndroidManagedAppSafetyNetDeviceAttestationType::class)),
            'requiredAndroidSafetyNetEvaluationType' => fn(ParseNode $n) => $o->setRequiredAndroidSafetyNetEvaluationType($n->getEnumValue(AndroidManagedAppSafetyNetEvaluationType::class)),
            'requirePinAfterBiometricChange' => fn(ParseNode $n) => $o->setRequirePinAfterBiometricChange($n->getBooleanValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'warnAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setWarnAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
            'wipeAfterCompanyPortalUpdateDeferralInDays' => fn(ParseNode $n) => $o->setWipeAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fingerprintAndBiometricEnabled property value. If null, this setting will be ignored. If false both fingerprints and biometrics will not be enabled. If true, both fingerprints and biometrics will be enabled.
     * @return bool|null
    */
    public function getFingerprintAndBiometricEnabled(): ?bool {
        $val = $this->getBackingStore()->get('fingerprintAndBiometricEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fingerprintAndBiometricEnabled'");
    }

    /**
     * Gets the keyboardsRestricted property value. Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
     * @return bool|null
    */
    public function getKeyboardsRestricted(): ?bool {
        $val = $this->getBackingStore()->get('keyboardsRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardsRestricted'");
    }

    /**
     * Gets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     * @return string|null
    */
    public function getMinimumRequiredCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredCompanyPortalVersion'");
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredPatchVersion'");
    }

    /**
     * Gets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     * @return string|null
    */
    public function getMinimumWarningCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningCompanyPortalVersion'");
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningPatchVersion'");
    }

    /**
     * Gets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     * @return string|null
    */
    public function getMinimumWipeCompanyPortalVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipeCompanyPortalVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipeCompanyPortalVersion'");
    }

    /**
     * Gets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
     * @return string|null
    */
    public function getMinimumWipePatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWipePatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWipePatchVersion'");
    }

    /**
     * Gets the requireClass3Biometrics property value. Require user to apply Class 3 Biometrics on their Android device.
     * @return bool|null
    */
    public function getRequireClass3Biometrics(): ?bool {
        $val = $this->getBackingStore()->get('requireClass3Biometrics');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireClass3Biometrics'");
    }

    /**
     * Gets the requiredAndroidSafetyNetAppsVerificationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @return AndroidManagedAppSafetyNetAppsVerificationType|null
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType(): ?AndroidManagedAppSafetyNetAppsVerificationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetAppsVerificationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetAppsVerificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetAppsVerificationType'");
    }

    /**
     * Gets the requiredAndroidSafetyNetDeviceAttestationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @return AndroidManagedAppSafetyNetDeviceAttestationType|null
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType(): ?AndroidManagedAppSafetyNetDeviceAttestationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetDeviceAttestationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetDeviceAttestationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetDeviceAttestationType'");
    }

    /**
     * Gets the requiredAndroidSafetyNetEvaluationType property value. An admin enforced Android SafetyNet evaluation type requirement on a managed app.
     * @return AndroidManagedAppSafetyNetEvaluationType|null
    */
    public function getRequiredAndroidSafetyNetEvaluationType(): ?AndroidManagedAppSafetyNetEvaluationType {
        $val = $this->getBackingStore()->get('requiredAndroidSafetyNetEvaluationType');
        if (is_null($val) || $val instanceof AndroidManagedAppSafetyNetEvaluationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredAndroidSafetyNetEvaluationType'");
    }

    /**
     * Gets the requirePinAfterBiometricChange property value. A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
     * @return bool|null
    */
    public function getRequirePinAfterBiometricChange(): ?bool {
        $val = $this->getBackingStore()->get('requirePinAfterBiometricChange');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirePinAfterBiometricChange'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     * @return int|null
    */
    public function getWarnAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('warnAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'warnAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Gets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     * @return int|null
    */
    public function getWipeAfterCompanyPortalUpdateDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('wipeAfterCompanyPortalUpdateDeferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wipeAfterCompanyPortalUpdateDeferralInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedAndroidDeviceManufacturers', $this->getAllowedAndroidDeviceManufacturers());
        $writer->writeCollectionOfPrimitiveValues('allowedAndroidDeviceModels', $this->getAllowedAndroidDeviceModels());
        $writer->writeEnumValue('appActionIfAccountIsClockedOut', $this->getAppActionIfAccountIsClockedOut());
        $writer->writeEnumValue('appActionIfAndroidDeviceManufacturerNotAllowed', $this->getAppActionIfAndroidDeviceManufacturerNotAllowed());
        $writer->writeEnumValue('appActionIfAndroidDeviceModelNotAllowed', $this->getAppActionIfAndroidDeviceModelNotAllowed());
        $writer->writeEnumValue('appActionIfAndroidSafetyNetAppsVerificationFailed', $this->getAppActionIfAndroidSafetyNetAppsVerificationFailed());
        $writer->writeEnumValue('appActionIfAndroidSafetyNetDeviceAttestationFailed', $this->getAppActionIfAndroidSafetyNetDeviceAttestationFailed());
        $writer->writeEnumValue('appActionIfDeviceLockNotSet', $this->getAppActionIfDeviceLockNotSet());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanHigh', $this->getAppActionIfDevicePasscodeComplexityLessThanHigh());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanLow', $this->getAppActionIfDevicePasscodeComplexityLessThanLow());
        $writer->writeEnumValue('appActionIfDevicePasscodeComplexityLessThanMedium', $this->getAppActionIfDevicePasscodeComplexityLessThanMedium());
        $writer->writeEnumValue('appActionIfSamsungKnoxAttestationRequired', $this->getAppActionIfSamsungKnoxAttestationRequired());
        $writer->writeCollectionOfObjectValues('approvedKeyboards', $this->getApprovedKeyboards());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeBooleanValue('biometricAuthenticationBlocked', $this->getBiometricAuthenticationBlocked());
        $writer->writeIntegerValue('blockAfterCompanyPortalUpdateDeferralInDays', $this->getBlockAfterCompanyPortalUpdateDeferralInDays());
        $writer->writeBooleanValue('connectToVpnOnLaunch', $this->getConnectToVpnOnLaunch());
        $writer->writeStringValue('customBrowserDisplayName', $this->getCustomBrowserDisplayName());
        $writer->writeStringValue('customBrowserPackageId', $this->getCustomBrowserPackageId());
        $writer->writeStringValue('customDialerAppDisplayName', $this->getCustomDialerAppDisplayName());
        $writer->writeStringValue('customDialerAppPackageId', $this->getCustomDialerAppPackageId());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('deviceLockRequired', $this->getDeviceLockRequired());
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->getDisableAppEncryptionIfDeviceEncryptionIsEnabled());
        $writer->writeBooleanValue('encryptAppData', $this->getEncryptAppData());
        $writer->writeCollectionOfObjectValues('exemptedAppPackages', $this->getExemptedAppPackages());
        $writer->writeBooleanValue('fingerprintAndBiometricEnabled', $this->getFingerprintAndBiometricEnabled());
        $writer->writeBooleanValue('keyboardsRestricted', $this->getKeyboardsRestricted());
        $writer->writeStringValue('minimumRequiredCompanyPortalVersion', $this->getMinimumRequiredCompanyPortalVersion());
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->getMinimumRequiredPatchVersion());
        $writer->writeStringValue('minimumWarningCompanyPortalVersion', $this->getMinimumWarningCompanyPortalVersion());
        $writer->writeStringValue('minimumWarningPatchVersion', $this->getMinimumWarningPatchVersion());
        $writer->writeStringValue('minimumWipeCompanyPortalVersion', $this->getMinimumWipeCompanyPortalVersion());
        $writer->writeStringValue('minimumWipePatchVersion', $this->getMinimumWipePatchVersion());
        $writer->writeBooleanValue('requireClass3Biometrics', $this->getRequireClass3Biometrics());
        $writer->writeEnumValue('requiredAndroidSafetyNetAppsVerificationType', $this->getRequiredAndroidSafetyNetAppsVerificationType());
        $writer->writeEnumValue('requiredAndroidSafetyNetDeviceAttestationType', $this->getRequiredAndroidSafetyNetDeviceAttestationType());
        $writer->writeEnumValue('requiredAndroidSafetyNetEvaluationType', $this->getRequiredAndroidSafetyNetEvaluationType());
        $writer->writeBooleanValue('requirePinAfterBiometricChange', $this->getRequirePinAfterBiometricChange());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeIntegerValue('warnAfterCompanyPortalUpdateDeferralInDays', $this->getWarnAfterCompanyPortalUpdateDeferralInDays());
        $writer->writeIntegerValue('wipeAfterCompanyPortalUpdateDeferralInDays', $this->getWipeAfterCompanyPortalUpdateDeferralInDays());
    }

    /**
     * Sets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
     * @param string|null $value Value to set for the allowedAndroidDeviceManufacturers property.
    */
    public function setAllowedAndroidDeviceManufacturers(?string $value): void {
        $this->getBackingStore()->set('allowedAndroidDeviceManufacturers', $value);
    }

    /**
     * Sets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work.
     * @param array<string>|null $value Value to set for the allowedAndroidDeviceModels property.
    */
    public function setAllowedAndroidDeviceModels(?array $value): void {
        $this->getBackingStore()->set('allowedAndroidDeviceModels', $value);
    }

    /**
     * Sets the appActionIfAccountIsClockedOut property value. Defines a managed app behavior, either block or warn, if the user is clocked out (non-working time).
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAccountIsClockedOut property.
    */
    public function setAppActionIfAccountIsClockedOut(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAccountIsClockedOut', $value);
    }

    /**
     * Sets the appActionIfAndroidDeviceManufacturerNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceManufacturerNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidDeviceManufacturerNotAllowed', $value);
    }

    /**
     * Sets the appActionIfAndroidDeviceModelNotAllowed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceModelNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceModelNotAllowed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidDeviceModelNotAllowed', $value);
    }

    /**
     * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetAppsVerificationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidSafetyNetAppsVerificationFailed', $value);
    }

    /**
     * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetDeviceAttestationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfAndroidSafetyNetDeviceAttestationFailed', $value);
    }

    /**
     * Sets the appActionIfDeviceLockNotSet property value. An admin initiated action to be applied on a managed app.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDeviceLockNotSet property.
    */
    public function setAppActionIfDeviceLockNotSet(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDeviceLockNotSet', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanHigh property value. If the device does not have a passcode of high complexity or higher, trigger the stored action.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanHigh property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanHigh(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanHigh', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanLow property value. If the device does not have a passcode of low complexity or higher, trigger the stored action.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanLow property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanLow(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanLow', $value);
    }

    /**
     * Sets the appActionIfDevicePasscodeComplexityLessThanMedium property value. If the device does not have a passcode of medium complexity or higher, trigger the stored action.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDevicePasscodeComplexityLessThanMedium property.
    */
    public function setAppActionIfDevicePasscodeComplexityLessThanMedium(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfDevicePasscodeComplexityLessThanMedium', $value);
    }

    /**
     * Sets the appActionIfSamsungKnoxAttestationRequired property value. Defines the behavior of a managed app when Samsung Knox Attestation is required. Possible values are null, warn, block & wipe. If the admin does not set this action, the default is null, which indicates this setting is not configured.
     * @param ManagedAppRemediationAction|null $value Value to set for the appActionIfSamsungKnoxAttestationRequired property.
    */
    public function setAppActionIfSamsungKnoxAttestationRequired(?ManagedAppRemediationAction $value): void {
        $this->getBackingStore()->set('appActionIfSamsungKnoxAttestationRequired', $value);
    }

    /**
     * Sets the approvedKeyboards property value. If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
     * @param array<KeyValuePair>|null $value Value to set for the approvedKeyboards property.
    */
    public function setApprovedKeyboards(?array $value): void {
        $this->getBackingStore()->set('approvedKeyboards', $value);
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
     * @param bool|null $value Value to set for the biometricAuthenticationBlocked property.
    */
    public function setBiometricAuthenticationBlocked(?bool $value): void {
        $this->getBackingStore()->set('biometricAuthenticationBlocked', $value);
    }

    /**
     * Sets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     * @param int|null $value Value to set for the blockAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setBlockAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('blockAfterCompanyPortalUpdateDeferralInDays', $value);
    }

    /**
     * Sets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch.
     * @param bool|null $value Value to set for the connectToVpnOnLaunch property.
    */
    public function setConnectToVpnOnLaunch(?bool $value): void {
        $this->getBackingStore()->set('connectToVpnOnLaunch', $value);
    }

    /**
     * Sets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android.
     * @param string|null $value Value to set for the customBrowserDisplayName property.
    */
    public function setCustomBrowserDisplayName(?string $value): void {
        $this->getBackingStore()->set('customBrowserDisplayName', $value);
    }

    /**
     * Sets the customBrowserPackageId property value. Unique identifier of a custom browser to open weblink on Android.
     * @param string|null $value Value to set for the customBrowserPackageId property.
    */
    public function setCustomBrowserPackageId(?string $value): void {
        $this->getBackingStore()->set('customBrowserPackageId', $value);
    }

    /**
     * Sets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     * @param string|null $value Value to set for the customDialerAppDisplayName property.
    */
    public function setCustomDialerAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('customDialerAppDisplayName', $value);
    }

    /**
     * Sets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     * @param string|null $value Value to set for the customDialerAppPackageId property.
    */
    public function setCustomDialerAppPackageId(?string $value): void {
        $this->getBackingStore()->set('customDialerAppPackageId', $value);
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value): void {
        $this->getBackingStore()->set('deployedAppCount', $value);
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploymentSummary', $value);
    }

    /**
     * Sets the deviceLockRequired property value. Defines if any kind of lock must be required on android device
     * @param bool|null $value Value to set for the deviceLockRequired property.
    */
    public function setDeviceLockRequired(?bool $value): void {
        $this->getBackingStore()->set('deviceLockRequired', $value);
    }

    /**
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     * @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('disableAppEncryptionIfDeviceEncryptionIsEnabled', $value);
    }

    /**
     * Sets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     * @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value): void {
        $this->getBackingStore()->set('encryptAppData', $value);
    }

    /**
     * Sets the exemptedAppPackages property value. App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @param array<KeyValuePair>|null $value Value to set for the exemptedAppPackages property.
    */
    public function setExemptedAppPackages(?array $value): void {
        $this->getBackingStore()->set('exemptedAppPackages', $value);
    }

    /**
     * Sets the fingerprintAndBiometricEnabled property value. If null, this setting will be ignored. If false both fingerprints and biometrics will not be enabled. If true, both fingerprints and biometrics will be enabled.
     * @param bool|null $value Value to set for the fingerprintAndBiometricEnabled property.
    */
    public function setFingerprintAndBiometricEnabled(?bool $value): void {
        $this->getBackingStore()->set('fingerprintAndBiometricEnabled', $value);
    }

    /**
     * Sets the keyboardsRestricted property value. Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
     * @param bool|null $value Value to set for the keyboardsRestricted property.
    */
    public function setKeyboardsRestricted(?bool $value): void {
        $this->getBackingStore()->set('keyboardsRestricted', $value);
    }

    /**
     * Sets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     * @param string|null $value Value to set for the minimumRequiredCompanyPortalVersion property.
    */
    public function setMinimumRequiredCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     * @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredPatchVersion', $value);
    }

    /**
     * Sets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     * @param string|null $value Value to set for the minimumWarningCompanyPortalVersion property.
    */
    public function setMinimumWarningCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     * @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningPatchVersion', $value);
    }

    /**
     * Sets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     * @param string|null $value Value to set for the minimumWipeCompanyPortalVersion property.
    */
    public function setMinimumWipeCompanyPortalVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipeCompanyPortalVersion', $value);
    }

    /**
     * Sets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
     * @param string|null $value Value to set for the minimumWipePatchVersion property.
    */
    public function setMinimumWipePatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWipePatchVersion', $value);
    }

    /**
     * Sets the requireClass3Biometrics property value. Require user to apply Class 3 Biometrics on their Android device.
     * @param bool|null $value Value to set for the requireClass3Biometrics property.
    */
    public function setRequireClass3Biometrics(?bool $value): void {
        $this->getBackingStore()->set('requireClass3Biometrics', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetAppsVerificationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @param AndroidManagedAppSafetyNetAppsVerificationType|null $value Value to set for the requiredAndroidSafetyNetAppsVerificationType property.
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType(?AndroidManagedAppSafetyNetAppsVerificationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetAppsVerificationType', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetDeviceAttestationType property value. An admin enforced Android SafetyNet Device Attestation requirement on a managed app.
     * @param AndroidManagedAppSafetyNetDeviceAttestationType|null $value Value to set for the requiredAndroidSafetyNetDeviceAttestationType property.
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType(?AndroidManagedAppSafetyNetDeviceAttestationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetDeviceAttestationType', $value);
    }

    /**
     * Sets the requiredAndroidSafetyNetEvaluationType property value. An admin enforced Android SafetyNet evaluation type requirement on a managed app.
     * @param AndroidManagedAppSafetyNetEvaluationType|null $value Value to set for the requiredAndroidSafetyNetEvaluationType property.
    */
    public function setRequiredAndroidSafetyNetEvaluationType(?AndroidManagedAppSafetyNetEvaluationType $value): void {
        $this->getBackingStore()->set('requiredAndroidSafetyNetEvaluationType', $value);
    }

    /**
     * Sets the requirePinAfterBiometricChange property value. A PIN prompt will override biometric prompts if class 3 biometrics are updated on the device.
     * @param bool|null $value Value to set for the requirePinAfterBiometricChange property.
    */
    public function setRequirePinAfterBiometricChange(?bool $value): void {
        $this->getBackingStore()->set('requirePinAfterBiometricChange', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     * @param int|null $value Value to set for the warnAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWarnAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('warnAfterCompanyPortalUpdateDeferralInDays', $value);
    }

    /**
     * Sets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     * @param int|null $value Value to set for the wipeAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWipeAfterCompanyPortalUpdateDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('wipeAfterCompanyPortalUpdateDeferralInDays', $value);
    }

}
