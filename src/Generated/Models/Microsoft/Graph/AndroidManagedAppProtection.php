<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedAppProtection extends TargetedManagedAppProtection 
{
    /** @var string|null $allowedAndroidDeviceManufacturers Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work. */
    private ?string $allowedAndroidDeviceManufacturers = null;
    
    /** @var array<string>|null $allowedAndroidDeviceModels List of device models allowed, as a string, for the managed app to work. */
    private ?array $allowedAndroidDeviceModels = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfAndroidDeviceManufacturerNotAllowed Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. Possible values are: block, wipe, warn. */
    private ?ManagedAppRemediationAction $appActionIfAndroidDeviceManufacturerNotAllowed = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfAndroidDeviceModelNotAllowed Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. */
    private ?ManagedAppRemediationAction $appActionIfAndroidDeviceModelNotAllowed = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfAndroidSafetyNetAppsVerificationFailed Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails. Possible values are: block, wipe, warn. */
    private ?ManagedAppRemediationAction $appActionIfAndroidSafetyNetAppsVerificationFailed = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfAndroidSafetyNetDeviceAttestationFailed Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails. Possible values are: block, wipe, warn. */
    private ?ManagedAppRemediationAction $appActionIfAndroidSafetyNetDeviceAttestationFailed = null;
    
    /** @var ManagedAppRemediationAction|null $appActionIfDeviceLockNotSet Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on android device but is not set. */
    private ?ManagedAppRemediationAction $appActionIfDeviceLockNotSet = null;
    
    /** @var array<KeyValuePair>|null $approvedKeyboards If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name */
    private ?array $approvedKeyboards = null;
    
    /** @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed. */
    private ?array $apps = null;
    
    /** @var bool|null $biometricAuthenticationBlocked Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True. */
    private ?bool $biometricAuthenticationBlocked = null;
    
    /** @var int|null $blockAfterCompanyPortalUpdateDeferralInDays Maximum number of days Company Portal update can be deferred on the device or app access will be blocked. */
    private ?int $blockAfterCompanyPortalUpdateDeferralInDays = null;
    
    /** @var bool|null $connectToVpnOnLaunch Whether the app should connect to the configured VPN on launch. */
    private ?bool $connectToVpnOnLaunch = null;
    
    /** @var string|null $customBrowserDisplayName Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
    private ?string $customBrowserDisplayName = null;
    
    /** @var string|null $customBrowserPackageId Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
    private ?string $customBrowserPackageId = null;
    
    /** @var string|null $customDialerAppDisplayName Friendly name of a custom dialer app to click-to-open a phone number on Android. */
    private ?string $customDialerAppDisplayName = null;
    
    /** @var string|null $customDialerAppPackageId PackageId of a custom dialer app to click-to-open a phone number on Android. */
    private ?string $customDialerAppPackageId = null;
    
    /** @var int|null $deployedAppCount Count of apps to which the current policy is deployed. */
    private ?int $deployedAppCount = null;
    
    /** @var ManagedAppPolicyDeploymentSummary|null $deploymentSummary Navigation property to deployment summary of the configuration. */
    private ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null;
    
    /** @var bool|null $deviceLockRequired Defines if any kind of lock must be required on android device */
    private ?bool $deviceLockRequired = null;
    
    /** @var bool|null $disableAppEncryptionIfDeviceEncryptionIsEnabled When this setting is enabled, app level encryption is disabled if device level encryption is enabled */
    private ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled = null;
    
    /** @var bool|null $encryptAppData Indicates whether application data for managed apps should be encrypted */
    private ?bool $encryptAppData = null;
    
    /** @var array<KeyValuePair>|null $exemptedAppPackages App packages in this list will be exempt from the policy and will be able to receive data from managed apps. */
    private ?array $exemptedAppPackages = null;
    
    /** @var bool|null $keyboardsRestricted Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well. */
    private ?bool $keyboardsRestricted = null;
    
    /** @var string|null $minimumRequiredCompanyPortalVersion Minimum version of the Company portal that must be installed on the device or app access will be blocked */
    private ?string $minimumRequiredCompanyPortalVersion = null;
    
    /** @var string|null $minimumRequiredPatchVersion Define the oldest required Android security patch level a user can have to gain secure access to the app. */
    private ?string $minimumRequiredPatchVersion = null;
    
    /** @var string|null $minimumWarningCompanyPortalVersion Minimum version of the Company portal that must be installed on the device or the user will receive a warning */
    private ?string $minimumWarningCompanyPortalVersion = null;
    
    /** @var string|null $minimumWarningPatchVersion Define the oldest recommended Android security patch level a user can have for secure access to the app. */
    private ?string $minimumWarningPatchVersion = null;
    
    /** @var string|null $minimumWipeCompanyPortalVersion Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped */
    private ?string $minimumWipeCompanyPortalVersion = null;
    
    /** @var string|null $minimumWipePatchVersion Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data. */
    private ?string $minimumWipePatchVersion = null;
    
    /** @var AndroidManagedAppSafetyNetAppsVerificationType|null $requiredAndroidSafetyNetAppsVerificationType Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled. */
    private ?AndroidManagedAppSafetyNetAppsVerificationType $requiredAndroidSafetyNetAppsVerificationType = null;
    
    /** @var AndroidManagedAppSafetyNetDeviceAttestationType|null $requiredAndroidSafetyNetDeviceAttestationType Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification. */
    private ?AndroidManagedAppSafetyNetDeviceAttestationType $requiredAndroidSafetyNetDeviceAttestationType = null;
    
    /** @var AndroidManagedAppSafetyNetEvaluationType|null $requiredAndroidSafetyNetEvaluationType Defines the Android SafetyNet evaluation type requirement for a managed app to work. */
    private ?AndroidManagedAppSafetyNetEvaluationType $requiredAndroidSafetyNetEvaluationType = null;
    
    /** @var bool|null $screenCaptureBlocked Indicates whether a managed user can take screen captures of managed apps */
    private ?bool $screenCaptureBlocked = null;
    
    /** @var int|null $warnAfterCompanyPortalUpdateDeferralInDays Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning */
    private ?int $warnAfterCompanyPortalUpdateDeferralInDays = null;
    
    /** @var int|null $wipeAfterCompanyPortalUpdateDeferralInDays Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped */
    private ?int $wipeAfterCompanyPortalUpdateDeferralInDays = null;
    
    /**
     * Instantiates a new androidManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedAppProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedAppProtection {
        return new AndroidManagedAppProtection();
    }

    /**
     * Gets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
     * @return string|null
    */
    public function getAllowedAndroidDeviceManufacturers(): ?string {
        return $this->allowedAndroidDeviceManufacturers;
    }

    /**
     * Gets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work.
     * @return array<string>|null
    */
    public function getAllowedAndroidDeviceModels(): ?array {
        return $this->allowedAndroidDeviceModels;
    }

    /**
     * Gets the appActionIfAndroidDeviceManufacturerNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceManufacturerNotAllowed(): ?ManagedAppRemediationAction {
        return $this->appActionIfAndroidDeviceManufacturerNotAllowed;
    }

    /**
     * Gets the appActionIfAndroidDeviceModelNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device model is not allowed.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidDeviceModelNotAllowed(): ?ManagedAppRemediationAction {
        return $this->appActionIfAndroidDeviceModelNotAllowed;
    }

    /**
     * Gets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetAppsVerificationFailed(): ?ManagedAppRemediationAction {
        return $this->appActionIfAndroidSafetyNetAppsVerificationFailed;
    }

    /**
     * Gets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails. Possible values are: block, wipe, warn.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfAndroidSafetyNetDeviceAttestationFailed(): ?ManagedAppRemediationAction {
        return $this->appActionIfAndroidSafetyNetDeviceAttestationFailed;
    }

    /**
     * Gets the appActionIfDeviceLockNotSet property value. Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on android device but is not set.
     * @return ManagedAppRemediationAction|null
    */
    public function getAppActionIfDeviceLockNotSet(): ?ManagedAppRemediationAction {
        return $this->appActionIfDeviceLockNotSet;
    }

    /**
     * Gets the approvedKeyboards property value. If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
     * @return array<KeyValuePair>|null
    */
    public function getApprovedKeyboards(): ?array {
        return $this->approvedKeyboards;
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getBiometricAuthenticationBlocked(): ?bool {
        return $this->biometricAuthenticationBlocked;
    }

    /**
     * Gets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     * @return int|null
    */
    public function getBlockAfterCompanyPortalUpdateDeferralInDays(): ?int {
        return $this->blockAfterCompanyPortalUpdateDeferralInDays;
    }

    /**
     * Gets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch.
     * @return bool|null
    */
    public function getConnectToVpnOnLaunch(): ?bool {
        return $this->connectToVpnOnLaunch;
    }

    /**
     * Gets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserDisplayName(): ?string {
        return $this->customBrowserDisplayName;
    }

    /**
     * Gets the customBrowserPackageId property value. Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserPackageId(): ?string {
        return $this->customBrowserPackageId;
    }

    /**
     * Gets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppDisplayName(): ?string {
        return $this->customDialerAppDisplayName;
    }

    /**
     * Gets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     * @return string|null
    */
    public function getCustomDialerAppPackageId(): ?string {
        return $this->customDialerAppPackageId;
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->deployedAppCount;
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->deploymentSummary;
    }

    /**
     * Gets the deviceLockRequired property value. Defines if any kind of lock must be required on android device
     * @return bool|null
    */
    public function getDeviceLockRequired(): ?bool {
        return $this->deviceLockRequired;
    }

    /**
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        return $this->disableAppEncryptionIfDeviceEncryptionIsEnabled;
    }

    /**
     * Gets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        return $this->encryptAppData;
    }

    /**
     * Gets the exemptedAppPackages property value. App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
     * @return array<KeyValuePair>|null
    */
    public function getExemptedAppPackages(): ?array {
        return $this->exemptedAppPackages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAndroidDeviceManufacturers' => function (self $o, ParseNode $n) { $o->setAllowedAndroidDeviceManufacturers($n->getStringValue()); },
            'allowedAndroidDeviceModels' => function (self $o, ParseNode $n) { $o->setAllowedAndroidDeviceModels($n->getCollectionOfPrimitiveValues()); },
            'appActionIfAndroidDeviceManufacturerNotAllowed' => function (self $o, ParseNode $n) { $o->setAppActionIfAndroidDeviceManufacturerNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'appActionIfAndroidDeviceModelNotAllowed' => function (self $o, ParseNode $n) { $o->setAppActionIfAndroidDeviceModelNotAllowed($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'appActionIfAndroidSafetyNetAppsVerificationFailed' => function (self $o, ParseNode $n) { $o->setAppActionIfAndroidSafetyNetAppsVerificationFailed($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'appActionIfAndroidSafetyNetDeviceAttestationFailed' => function (self $o, ParseNode $n) { $o->setAppActionIfAndroidSafetyNetDeviceAttestationFailed($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'appActionIfDeviceLockNotSet' => function (self $o, ParseNode $n) { $o->setAppActionIfDeviceLockNotSet($n->getEnumValue(ManagedAppRemediationAction::class)); },
            'approvedKeyboards' => function (self $o, ParseNode $n) { $o->setApprovedKeyboards($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'apps' => function (self $o, ParseNode $n) { $o->setApps($n->getCollectionOfObjectValues(ManagedMobileApp::class)); },
            'biometricAuthenticationBlocked' => function (self $o, ParseNode $n) { $o->setBiometricAuthenticationBlocked($n->getBooleanValue()); },
            'blockAfterCompanyPortalUpdateDeferralInDays' => function (self $o, ParseNode $n) { $o->setBlockAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()); },
            'connectToVpnOnLaunch' => function (self $o, ParseNode $n) { $o->setConnectToVpnOnLaunch($n->getBooleanValue()); },
            'customBrowserDisplayName' => function (self $o, ParseNode $n) { $o->setCustomBrowserDisplayName($n->getStringValue()); },
            'customBrowserPackageId' => function (self $o, ParseNode $n) { $o->setCustomBrowserPackageId($n->getStringValue()); },
            'customDialerAppDisplayName' => function (self $o, ParseNode $n) { $o->setCustomDialerAppDisplayName($n->getStringValue()); },
            'customDialerAppPackageId' => function (self $o, ParseNode $n) { $o->setCustomDialerAppPackageId($n->getStringValue()); },
            'deployedAppCount' => function (self $o, ParseNode $n) { $o->setDeployedAppCount($n->getIntegerValue()); },
            'deploymentSummary' => function (self $o, ParseNode $n) { $o->setDeploymentSummary($n->getObjectValue(ManagedAppPolicyDeploymentSummary::class)); },
            'deviceLockRequired' => function (self $o, ParseNode $n) { $o->setDeviceLockRequired($n->getBooleanValue()); },
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => function (self $o, ParseNode $n) { $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()); },
            'encryptAppData' => function (self $o, ParseNode $n) { $o->setEncryptAppData($n->getBooleanValue()); },
            'exemptedAppPackages' => function (self $o, ParseNode $n) { $o->setExemptedAppPackages($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'keyboardsRestricted' => function (self $o, ParseNode $n) { $o->setKeyboardsRestricted($n->getBooleanValue()); },
            'minimumRequiredCompanyPortalVersion' => function (self $o, ParseNode $n) { $o->setMinimumRequiredCompanyPortalVersion($n->getStringValue()); },
            'minimumRequiredPatchVersion' => function (self $o, ParseNode $n) { $o->setMinimumRequiredPatchVersion($n->getStringValue()); },
            'minimumWarningCompanyPortalVersion' => function (self $o, ParseNode $n) { $o->setMinimumWarningCompanyPortalVersion($n->getStringValue()); },
            'minimumWarningPatchVersion' => function (self $o, ParseNode $n) { $o->setMinimumWarningPatchVersion($n->getStringValue()); },
            'minimumWipeCompanyPortalVersion' => function (self $o, ParseNode $n) { $o->setMinimumWipeCompanyPortalVersion($n->getStringValue()); },
            'minimumWipePatchVersion' => function (self $o, ParseNode $n) { $o->setMinimumWipePatchVersion($n->getStringValue()); },
            'requiredAndroidSafetyNetAppsVerificationType' => function (self $o, ParseNode $n) { $o->setRequiredAndroidSafetyNetAppsVerificationType($n->getEnumValue(AndroidManagedAppSafetyNetAppsVerificationType::class)); },
            'requiredAndroidSafetyNetDeviceAttestationType' => function (self $o, ParseNode $n) { $o->setRequiredAndroidSafetyNetDeviceAttestationType($n->getEnumValue(AndroidManagedAppSafetyNetDeviceAttestationType::class)); },
            'requiredAndroidSafetyNetEvaluationType' => function (self $o, ParseNode $n) { $o->setRequiredAndroidSafetyNetEvaluationType($n->getEnumValue(AndroidManagedAppSafetyNetEvaluationType::class)); },
            'screenCaptureBlocked' => function (self $o, ParseNode $n) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'warnAfterCompanyPortalUpdateDeferralInDays' => function (self $o, ParseNode $n) { $o->setWarnAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()); },
            'wipeAfterCompanyPortalUpdateDeferralInDays' => function (self $o, ParseNode $n) { $o->setWipeAfterCompanyPortalUpdateDeferralInDays($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the keyboardsRestricted property value. Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
     * @return bool|null
    */
    public function getKeyboardsRestricted(): ?bool {
        return $this->keyboardsRestricted;
    }

    /**
     * Gets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     * @return string|null
    */
    public function getMinimumRequiredCompanyPortalVersion(): ?string {
        return $this->minimumRequiredCompanyPortalVersion;
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        return $this->minimumRequiredPatchVersion;
    }

    /**
     * Gets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     * @return string|null
    */
    public function getMinimumWarningCompanyPortalVersion(): ?string {
        return $this->minimumWarningCompanyPortalVersion;
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        return $this->minimumWarningPatchVersion;
    }

    /**
     * Gets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     * @return string|null
    */
    public function getMinimumWipeCompanyPortalVersion(): ?string {
        return $this->minimumWipeCompanyPortalVersion;
    }

    /**
     * Gets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
     * @return string|null
    */
    public function getMinimumWipePatchVersion(): ?string {
        return $this->minimumWipePatchVersion;
    }

    /**
     * Gets the requiredAndroidSafetyNetAppsVerificationType property value. Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
     * @return AndroidManagedAppSafetyNetAppsVerificationType|null
    */
    public function getRequiredAndroidSafetyNetAppsVerificationType(): ?AndroidManagedAppSafetyNetAppsVerificationType {
        return $this->requiredAndroidSafetyNetAppsVerificationType;
    }

    /**
     * Gets the requiredAndroidSafetyNetDeviceAttestationType property value. Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
     * @return AndroidManagedAppSafetyNetDeviceAttestationType|null
    */
    public function getRequiredAndroidSafetyNetDeviceAttestationType(): ?AndroidManagedAppSafetyNetDeviceAttestationType {
        return $this->requiredAndroidSafetyNetDeviceAttestationType;
    }

    /**
     * Gets the requiredAndroidSafetyNetEvaluationType property value. Defines the Android SafetyNet evaluation type requirement for a managed app to work.
     * @return AndroidManagedAppSafetyNetEvaluationType|null
    */
    public function getRequiredAndroidSafetyNetEvaluationType(): ?AndroidManagedAppSafetyNetEvaluationType {
        return $this->requiredAndroidSafetyNetEvaluationType;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     * @return int|null
    */
    public function getWarnAfterCompanyPortalUpdateDeferralInDays(): ?int {
        return $this->warnAfterCompanyPortalUpdateDeferralInDays;
    }

    /**
     * Gets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     * @return int|null
    */
    public function getWipeAfterCompanyPortalUpdateDeferralInDays(): ?int {
        return $this->wipeAfterCompanyPortalUpdateDeferralInDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('allowedAndroidDeviceManufacturers', $this->allowedAndroidDeviceManufacturers);
        $writer->writeCollectionOfPrimitiveValues('allowedAndroidDeviceModels', $this->allowedAndroidDeviceModels);
        $writer->writeEnumValue('appActionIfAndroidDeviceManufacturerNotAllowed', $this->appActionIfAndroidDeviceManufacturerNotAllowed);
        $writer->writeEnumValue('appActionIfAndroidDeviceModelNotAllowed', $this->appActionIfAndroidDeviceModelNotAllowed);
        $writer->writeEnumValue('appActionIfAndroidSafetyNetAppsVerificationFailed', $this->appActionIfAndroidSafetyNetAppsVerificationFailed);
        $writer->writeEnumValue('appActionIfAndroidSafetyNetDeviceAttestationFailed', $this->appActionIfAndroidSafetyNetDeviceAttestationFailed);
        $writer->writeEnumValue('appActionIfDeviceLockNotSet', $this->appActionIfDeviceLockNotSet);
        $writer->writeCollectionOfObjectValues('approvedKeyboards', $this->approvedKeyboards);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeBooleanValue('biometricAuthenticationBlocked', $this->biometricAuthenticationBlocked);
        $writer->writeIntegerValue('blockAfterCompanyPortalUpdateDeferralInDays', $this->blockAfterCompanyPortalUpdateDeferralInDays);
        $writer->writeBooleanValue('connectToVpnOnLaunch', $this->connectToVpnOnLaunch);
        $writer->writeStringValue('customBrowserDisplayName', $this->customBrowserDisplayName);
        $writer->writeStringValue('customBrowserPackageId', $this->customBrowserPackageId);
        $writer->writeStringValue('customDialerAppDisplayName', $this->customDialerAppDisplayName);
        $writer->writeStringValue('customDialerAppPackageId', $this->customDialerAppPackageId);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeObjectValue('deploymentSummary', $this->deploymentSummary);
        $writer->writeBooleanValue('deviceLockRequired', $this->deviceLockRequired);
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->disableAppEncryptionIfDeviceEncryptionIsEnabled);
        $writer->writeBooleanValue('encryptAppData', $this->encryptAppData);
        $writer->writeCollectionOfObjectValues('exemptedAppPackages', $this->exemptedAppPackages);
        $writer->writeBooleanValue('keyboardsRestricted', $this->keyboardsRestricted);
        $writer->writeStringValue('minimumRequiredCompanyPortalVersion', $this->minimumRequiredCompanyPortalVersion);
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->minimumRequiredPatchVersion);
        $writer->writeStringValue('minimumWarningCompanyPortalVersion', $this->minimumWarningCompanyPortalVersion);
        $writer->writeStringValue('minimumWarningPatchVersion', $this->minimumWarningPatchVersion);
        $writer->writeStringValue('minimumWipeCompanyPortalVersion', $this->minimumWipeCompanyPortalVersion);
        $writer->writeStringValue('minimumWipePatchVersion', $this->minimumWipePatchVersion);
        $writer->writeEnumValue('requiredAndroidSafetyNetAppsVerificationType', $this->requiredAndroidSafetyNetAppsVerificationType);
        $writer->writeEnumValue('requiredAndroidSafetyNetDeviceAttestationType', $this->requiredAndroidSafetyNetDeviceAttestationType);
        $writer->writeEnumValue('requiredAndroidSafetyNetEvaluationType', $this->requiredAndroidSafetyNetEvaluationType);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeIntegerValue('warnAfterCompanyPortalUpdateDeferralInDays', $this->warnAfterCompanyPortalUpdateDeferralInDays);
        $writer->writeIntegerValue('wipeAfterCompanyPortalUpdateDeferralInDays', $this->wipeAfterCompanyPortalUpdateDeferralInDays);
    }

    /**
     * Sets the allowedAndroidDeviceManufacturers property value. Semicolon seperated list of device manufacturers allowed, as a string, for the managed app to work.
     *  @param string|null $value Value to set for the allowedAndroidDeviceManufacturers property.
    */
    public function setAllowedAndroidDeviceManufacturers(?string $value ): void {
        $this->allowedAndroidDeviceManufacturers = $value;
    }

    /**
     * Sets the allowedAndroidDeviceModels property value. List of device models allowed, as a string, for the managed app to work.
     *  @param array<string>|null $value Value to set for the allowedAndroidDeviceModels property.
    */
    public function setAllowedAndroidDeviceModels(?array $value ): void {
        $this->allowedAndroidDeviceModels = $value;
    }

    /**
     * Sets the appActionIfAndroidDeviceManufacturerNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device manufacturer is not allowed. Possible values are: block, wipe, warn.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceManufacturerNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceManufacturerNotAllowed(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfAndroidDeviceManufacturerNotAllowed = $value;
    }

    /**
     * Sets the appActionIfAndroidDeviceModelNotAllowed property value. Defines a managed app behavior, either block or wipe, if the specified device model is not allowed.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidDeviceModelNotAllowed property.
    */
    public function setAppActionIfAndroidDeviceModelNotAllowed(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfAndroidDeviceModelNotAllowed = $value;
    }

    /**
     * Sets the appActionIfAndroidSafetyNetAppsVerificationFailed property value. Defines a managed app behavior, either warn or block, if the specified Android App Verification requirment fails. Possible values are: block, wipe, warn.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetAppsVerificationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetAppsVerificationFailed(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfAndroidSafetyNetAppsVerificationFailed = $value;
    }

    /**
     * Sets the appActionIfAndroidSafetyNetDeviceAttestationFailed property value. Defines a managed app behavior, either warn or block, if the specified Android SafetyNet Attestation requirment fails. Possible values are: block, wipe, warn.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfAndroidSafetyNetDeviceAttestationFailed property.
    */
    public function setAppActionIfAndroidSafetyNetDeviceAttestationFailed(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfAndroidSafetyNetDeviceAttestationFailed = $value;
    }

    /**
     * Sets the appActionIfDeviceLockNotSet property value. Defines a managed app behavior, either warn, block or wipe, if the screen lock is required on android device but is not set.
     *  @param ManagedAppRemediationAction|null $value Value to set for the appActionIfDeviceLockNotSet property.
    */
    public function setAppActionIfDeviceLockNotSet(?ManagedAppRemediationAction $value ): void {
        $this->appActionIfDeviceLockNotSet = $value;
    }

    /**
     * Sets the approvedKeyboards property value. If Keyboard Restriction is enabled, only keyboards in this approved list will be allowed. A key should be Android package id for a keyboard and value should be a friendly name
     *  @param array<KeyValuePair>|null $value Value to set for the approvedKeyboards property.
    */
    public function setApprovedKeyboards(?array $value ): void {
        $this->approvedKeyboards = $value;
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the biometricAuthenticationBlocked property value. Indicates whether use of the biometric authentication is allowed in place of a pin if PinRequired is set to True.
     *  @param bool|null $value Value to set for the biometricAuthenticationBlocked property.
    */
    public function setBiometricAuthenticationBlocked(?bool $value ): void {
        $this->biometricAuthenticationBlocked = $value;
    }

    /**
     * Sets the blockAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or app access will be blocked.
     *  @param int|null $value Value to set for the blockAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setBlockAfterCompanyPortalUpdateDeferralInDays(?int $value ): void {
        $this->blockAfterCompanyPortalUpdateDeferralInDays = $value;
    }

    /**
     * Sets the connectToVpnOnLaunch property value. Whether the app should connect to the configured VPN on launch.
     *  @param bool|null $value Value to set for the connectToVpnOnLaunch property.
    */
    public function setConnectToVpnOnLaunch(?bool $value ): void {
        $this->connectToVpnOnLaunch = $value;
    }

    /**
     * Sets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     *  @param string|null $value Value to set for the customBrowserDisplayName property.
    */
    public function setCustomBrowserDisplayName(?string $value ): void {
        $this->customBrowserDisplayName = $value;
    }

    /**
     * Sets the customBrowserPackageId property value. Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     *  @param string|null $value Value to set for the customBrowserPackageId property.
    */
    public function setCustomBrowserPackageId(?string $value ): void {
        $this->customBrowserPackageId = $value;
    }

    /**
     * Sets the customDialerAppDisplayName property value. Friendly name of a custom dialer app to click-to-open a phone number on Android.
     *  @param string|null $value Value to set for the customDialerAppDisplayName property.
    */
    public function setCustomDialerAppDisplayName(?string $value ): void {
        $this->customDialerAppDisplayName = $value;
    }

    /**
     * Sets the customDialerAppPackageId property value. PackageId of a custom dialer app to click-to-open a phone number on Android.
     *  @param string|null $value Value to set for the customDialerAppPackageId property.
    */
    public function setCustomDialerAppPackageId(?string $value ): void {
        $this->customDialerAppPackageId = $value;
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     *  @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value ): void {
        $this->deployedAppCount = $value;
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     *  @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value ): void {
        $this->deploymentSummary = $value;
    }

    /**
     * Sets the deviceLockRequired property value. Defines if any kind of lock must be required on android device
     *  @param bool|null $value Value to set for the deviceLockRequired property.
    */
    public function setDeviceLockRequired(?bool $value ): void {
        $this->deviceLockRequired = $value;
    }

    /**
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     *  @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value ): void {
        $this->disableAppEncryptionIfDeviceEncryptionIsEnabled = $value;
    }

    /**
     * Sets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     *  @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value ): void {
        $this->encryptAppData = $value;
    }

    /**
     * Sets the exemptedAppPackages property value. App packages in this list will be exempt from the policy and will be able to receive data from managed apps.
     *  @param array<KeyValuePair>|null $value Value to set for the exemptedAppPackages property.
    */
    public function setExemptedAppPackages(?array $value ): void {
        $this->exemptedAppPackages = $value;
    }

    /**
     * Sets the keyboardsRestricted property value. Indicates if keyboard restriction is enabled. If enabled list of approved keyboards must be provided as well.
     *  @param bool|null $value Value to set for the keyboardsRestricted property.
    */
    public function setKeyboardsRestricted(?bool $value ): void {
        $this->keyboardsRestricted = $value;
    }

    /**
     * Sets the minimumRequiredCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or app access will be blocked
     *  @param string|null $value Value to set for the minimumRequiredCompanyPortalVersion property.
    */
    public function setMinimumRequiredCompanyPortalVersion(?string $value ): void {
        $this->minimumRequiredCompanyPortalVersion = $value;
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     *  @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value ): void {
        $this->minimumRequiredPatchVersion = $value;
    }

    /**
     * Sets the minimumWarningCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the user will receive a warning
     *  @param string|null $value Value to set for the minimumWarningCompanyPortalVersion property.
    */
    public function setMinimumWarningCompanyPortalVersion(?string $value ): void {
        $this->minimumWarningCompanyPortalVersion = $value;
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     *  @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value ): void {
        $this->minimumWarningPatchVersion = $value;
    }

    /**
     * Sets the minimumWipeCompanyPortalVersion property value. Minimum version of the Company portal that must be installed on the device or the company data on the app will be wiped
     *  @param string|null $value Value to set for the minimumWipeCompanyPortalVersion property.
    */
    public function setMinimumWipeCompanyPortalVersion(?string $value ): void {
        $this->minimumWipeCompanyPortalVersion = $value;
    }

    /**
     * Sets the minimumWipePatchVersion property value. Android security patch level  less than or equal to the specified value will wipe the managed app and the associated company data.
     *  @param string|null $value Value to set for the minimumWipePatchVersion property.
    */
    public function setMinimumWipePatchVersion(?string $value ): void {
        $this->minimumWipePatchVersion = $value;
    }

    /**
     * Sets the requiredAndroidSafetyNetAppsVerificationType property value. Defines the Android SafetyNet Apps Verification requirement for a managed app to work. Possible values are: none, enabled.
     *  @param AndroidManagedAppSafetyNetAppsVerificationType|null $value Value to set for the requiredAndroidSafetyNetAppsVerificationType property.
    */
    public function setRequiredAndroidSafetyNetAppsVerificationType(?AndroidManagedAppSafetyNetAppsVerificationType $value ): void {
        $this->requiredAndroidSafetyNetAppsVerificationType = $value;
    }

    /**
     * Sets the requiredAndroidSafetyNetDeviceAttestationType property value. Defines the Android SafetyNet Device Attestation requirement for a managed app to work. Possible values are: none, basicIntegrity, basicIntegrityAndDeviceCertification.
     *  @param AndroidManagedAppSafetyNetDeviceAttestationType|null $value Value to set for the requiredAndroidSafetyNetDeviceAttestationType property.
    */
    public function setRequiredAndroidSafetyNetDeviceAttestationType(?AndroidManagedAppSafetyNetDeviceAttestationType $value ): void {
        $this->requiredAndroidSafetyNetDeviceAttestationType = $value;
    }

    /**
     * Sets the requiredAndroidSafetyNetEvaluationType property value. Defines the Android SafetyNet evaluation type requirement for a managed app to work.
     *  @param AndroidManagedAppSafetyNetEvaluationType|null $value Value to set for the requiredAndroidSafetyNetEvaluationType property.
    */
    public function setRequiredAndroidSafetyNetEvaluationType(?AndroidManagedAppSafetyNetEvaluationType $value ): void {
        $this->requiredAndroidSafetyNetEvaluationType = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the warnAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the user will receive the warning
     *  @param int|null $value Value to set for the warnAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWarnAfterCompanyPortalUpdateDeferralInDays(?int $value ): void {
        $this->warnAfterCompanyPortalUpdateDeferralInDays = $value;
    }

    /**
     * Sets the wipeAfterCompanyPortalUpdateDeferralInDays property value. Maximum number of days Company Portal update can be deferred on the device or the company data on the app will be wiped
     *  @param int|null $value Value to set for the wipeAfterCompanyPortalUpdateDeferralInDays property.
    */
    public function setWipeAfterCompanyPortalUpdateDeferralInDays(?int $value ): void {
        $this->wipeAfterCompanyPortalUpdateDeferralInDays = $value;
    }

}
