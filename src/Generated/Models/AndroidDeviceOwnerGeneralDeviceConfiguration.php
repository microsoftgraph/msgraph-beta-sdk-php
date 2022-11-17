<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerGeneralDeviceConfiguration {
        return new AndroidDeviceOwnerGeneralDeviceConfiguration();
    }

    /**
     * Gets the accountsBlockModification property value. Indicates whether or not adding or removing accounts is disabled.
     * @return bool|null
    */
    public function getAccountsBlockModification(): ?bool {
        return $this->getBackingStore()->get('accountsBlockModification');
    }

    /**
     * Gets the appsAllowInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable to unknown sources setting.
     * @return bool|null
    */
    public function getAppsAllowInstallFromUnknownSources(): ?bool {
        return $this->getBackingStore()->get('appsAllowInstallFromUnknownSources');
    }

    /**
     * Gets the appsAutoUpdatePolicy property value. Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
     * @return AndroidDeviceOwnerAppAutoUpdatePolicyType|null
    */
    public function getAppsAutoUpdatePolicy(): ?AndroidDeviceOwnerAppAutoUpdatePolicyType {
        return $this->getBackingStore()->get('appsAutoUpdatePolicy');
    }

    /**
     * Gets the appsDefaultPermissionPolicy property value. Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     * @return AndroidDeviceOwnerDefaultAppPermissionPolicyType|null
    */
    public function getAppsDefaultPermissionPolicy(): ?AndroidDeviceOwnerDefaultAppPermissionPolicyType {
        return $this->getBackingStore()->get('appsDefaultPermissionPolicy');
    }

    /**
     * Gets the appsRecommendSkippingFirstUseHints property value. Whether or not to recommend all apps skip any first-time-use hints they may have added.
     * @return bool|null
    */
    public function getAppsRecommendSkippingFirstUseHints(): ?bool {
        return $this->getBackingStore()->get('appsRecommendSkippingFirstUseHints');
    }

    /**
     * Gets the azureAdSharedDeviceDataClearApps property value. A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAzureAdSharedDeviceDataClearApps(): ?array {
        return $this->getBackingStore()->get('azureAdSharedDeviceDataClearApps');
    }

    /**
     * Gets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockConfiguration(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockConfiguration');
    }

    /**
     * Gets the bluetoothBlockContactSharing property value. Indicates whether or not to block a user from sharing contacts via bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockContactSharing(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockContactSharing');
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->getBackingStore()->get('cameraBlocked');
    }

    /**
     * Gets the cellularBlockWiFiTethering property value. Indicates whether or not to block Wi-Fi tethering.
     * @return bool|null
    */
    public function getCellularBlockWiFiTethering(): ?bool {
        return $this->getBackingStore()->get('cellularBlockWiFiTethering');
    }

    /**
     * Gets the certificateCredentialConfigurationDisabled property value. Indicates whether or not to block users from any certificate credential configuration.
     * @return bool|null
    */
    public function getCertificateCredentialConfigurationDisabled(): ?bool {
        return $this->getBackingStore()->get('certificateCredentialConfigurationDisabled');
    }

    /**
     * Gets the crossProfilePoliciesAllowCopyPaste property value. Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
     * @return bool|null
    */
    public function getCrossProfilePoliciesAllowCopyPaste(): ?bool {
        return $this->getBackingStore()->get('crossProfilePoliciesAllowCopyPaste');
    }

    /**
     * Gets the crossProfilePoliciesAllowDataSharing property value. Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
     * @return AndroidDeviceOwnerCrossProfileDataSharing|null
    */
    public function getCrossProfilePoliciesAllowDataSharing(): ?AndroidDeviceOwnerCrossProfileDataSharing {
        return $this->getBackingStore()->get('crossProfilePoliciesAllowDataSharing');
    }

    /**
     * Gets the crossProfilePoliciesShowWorkContactsInPersonalProfile property value. Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
     * @return bool|null
    */
    public function getCrossProfilePoliciesShowWorkContactsInPersonalProfile(): ?bool {
        return $this->getBackingStore()->get('crossProfilePoliciesShowWorkContactsInPersonalProfile');
    }

    /**
     * Gets the dataRoamingBlocked property value. Indicates whether or not to block a user from data roaming.
     * @return bool|null
    */
    public function getDataRoamingBlocked(): ?bool {
        return $this->getBackingStore()->get('dataRoamingBlocked');
    }

    /**
     * Gets the dateTimeConfigurationBlocked property value. Indicates whether or not to block the user from manually changing the date or time on the device
     * @return bool|null
    */
    public function getDateTimeConfigurationBlocked(): ?bool {
        return $this->getBackingStore()->get('dateTimeConfigurationBlocked');
    }

    /**
     * Gets the detailedHelpText property value. Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
     * @return AndroidDeviceOwnerUserFacingMessage|null
    */
    public function getDetailedHelpText(): ?AndroidDeviceOwnerUserFacingMessage {
        return $this->getBackingStore()->get('detailedHelpText');
    }

    /**
     * Gets the deviceOwnerLockScreenMessage property value. Represents the customized lock screen message provided to users when they attempt to modify managed settings on their device.
     * @return AndroidDeviceOwnerUserFacingMessage|null
    */
    public function getDeviceOwnerLockScreenMessage(): ?AndroidDeviceOwnerUserFacingMessage {
        return $this->getBackingStore()->get('deviceOwnerLockScreenMessage');
    }

    /**
     * Gets the enrollmentProfile property value. Android Device Owner Enrollment Profile types.
     * @return AndroidDeviceOwnerEnrollmentProfileType|null
    */
    public function getEnrollmentProfile(): ?AndroidDeviceOwnerEnrollmentProfileType {
        return $this->getBackingStore()->get('enrollmentProfile');
    }

    /**
     * Gets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        return $this->getBackingStore()->get('factoryResetBlocked');
    }

    /**
     * Gets the factoryResetDeviceAdministratorEmails property value. List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
     * @return array<string>|null
    */
    public function getFactoryResetDeviceAdministratorEmails(): ?array {
        return $this->getBackingStore()->get('factoryResetDeviceAdministratorEmails');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockModification' => fn(ParseNode $n) => $o->setAccountsBlockModification($n->getBooleanValue()),
            'appsAllowInstallFromUnknownSources' => fn(ParseNode $n) => $o->setAppsAllowInstallFromUnknownSources($n->getBooleanValue()),
            'appsAutoUpdatePolicy' => fn(ParseNode $n) => $o->setAppsAutoUpdatePolicy($n->getEnumValue(AndroidDeviceOwnerAppAutoUpdatePolicyType::class)),
            'appsDefaultPermissionPolicy' => fn(ParseNode $n) => $o->setAppsDefaultPermissionPolicy($n->getEnumValue(AndroidDeviceOwnerDefaultAppPermissionPolicyType::class)),
            'appsRecommendSkippingFirstUseHints' => fn(ParseNode $n) => $o->setAppsRecommendSkippingFirstUseHints($n->getBooleanValue()),
            'azureAdSharedDeviceDataClearApps' => fn(ParseNode $n) => $o->setAzureAdSharedDeviceDataClearApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'bluetoothBlockConfiguration' => fn(ParseNode $n) => $o->setBluetoothBlockConfiguration($n->getBooleanValue()),
            'bluetoothBlockContactSharing' => fn(ParseNode $n) => $o->setBluetoothBlockContactSharing($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockWiFiTethering' => fn(ParseNode $n) => $o->setCellularBlockWiFiTethering($n->getBooleanValue()),
            'certificateCredentialConfigurationDisabled' => fn(ParseNode $n) => $o->setCertificateCredentialConfigurationDisabled($n->getBooleanValue()),
            'crossProfilePoliciesAllowCopyPaste' => fn(ParseNode $n) => $o->setCrossProfilePoliciesAllowCopyPaste($n->getBooleanValue()),
            'crossProfilePoliciesAllowDataSharing' => fn(ParseNode $n) => $o->setCrossProfilePoliciesAllowDataSharing($n->getEnumValue(AndroidDeviceOwnerCrossProfileDataSharing::class)),
            'crossProfilePoliciesShowWorkContactsInPersonalProfile' => fn(ParseNode $n) => $o->setCrossProfilePoliciesShowWorkContactsInPersonalProfile($n->getBooleanValue()),
            'dataRoamingBlocked' => fn(ParseNode $n) => $o->setDataRoamingBlocked($n->getBooleanValue()),
            'dateTimeConfigurationBlocked' => fn(ParseNode $n) => $o->setDateTimeConfigurationBlocked($n->getBooleanValue()),
            'detailedHelpText' => fn(ParseNode $n) => $o->setDetailedHelpText($n->getObjectValue([AndroidDeviceOwnerUserFacingMessage::class, 'createFromDiscriminatorValue'])),
            'deviceOwnerLockScreenMessage' => fn(ParseNode $n) => $o->setDeviceOwnerLockScreenMessage($n->getObjectValue([AndroidDeviceOwnerUserFacingMessage::class, 'createFromDiscriminatorValue'])),
            'enrollmentProfile' => fn(ParseNode $n) => $o->setEnrollmentProfile($n->getEnumValue(AndroidDeviceOwnerEnrollmentProfileType::class)),
            'factoryResetBlocked' => fn(ParseNode $n) => $o->setFactoryResetBlocked($n->getBooleanValue()),
            'factoryResetDeviceAdministratorEmails' => fn(ParseNode $n) => $o->setFactoryResetDeviceAdministratorEmails($n->getCollectionOfPrimitiveValues()),
            'globalProxy' => fn(ParseNode $n) => $o->setGlobalProxy($n->getObjectValue([AndroidDeviceOwnerGlobalProxy::class, 'createFromDiscriminatorValue'])),
            'googleAccountsBlocked' => fn(ParseNode $n) => $o->setGoogleAccountsBlocked($n->getBooleanValue()),
            'kioskCustomizationDeviceSettingsBlocked' => fn(ParseNode $n) => $o->setKioskCustomizationDeviceSettingsBlocked($n->getBooleanValue()),
            'kioskCustomizationPowerButtonActionsBlocked' => fn(ParseNode $n) => $o->setKioskCustomizationPowerButtonActionsBlocked($n->getBooleanValue()),
            'kioskCustomizationStatusBar' => fn(ParseNode $n) => $o->setKioskCustomizationStatusBar($n->getEnumValue(AndroidDeviceOwnerKioskCustomizationStatusBar::class)),
            'kioskCustomizationSystemErrorWarnings' => fn(ParseNode $n) => $o->setKioskCustomizationSystemErrorWarnings($n->getBooleanValue()),
            'kioskCustomizationSystemNavigation' => fn(ParseNode $n) => $o->setKioskCustomizationSystemNavigation($n->getEnumValue(AndroidDeviceOwnerKioskCustomizationSystemNavigation::class)),
            'kioskModeAppOrderEnabled' => fn(ParseNode $n) => $o->setKioskModeAppOrderEnabled($n->getBooleanValue()),
            'kioskModeAppPositions' => fn(ParseNode $n) => $o->setKioskModeAppPositions($n->getCollectionOfObjectValues([AndroidDeviceOwnerKioskModeAppPositionItem::class, 'createFromDiscriminatorValue'])),
            'kioskModeApps' => fn(ParseNode $n) => $o->setKioskModeApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'kioskModeAppsInFolderOrderedByName' => fn(ParseNode $n) => $o->setKioskModeAppsInFolderOrderedByName($n->getBooleanValue()),
            'kioskModeBluetoothConfigurationEnabled' => fn(ParseNode $n) => $o->setKioskModeBluetoothConfigurationEnabled($n->getBooleanValue()),
            'kioskModeDebugMenuEasyAccessEnabled' => fn(ParseNode $n) => $o->setKioskModeDebugMenuEasyAccessEnabled($n->getBooleanValue()),
            'kioskModeExitCode' => fn(ParseNode $n) => $o->setKioskModeExitCode($n->getStringValue()),
            'kioskModeFlashlightConfigurationEnabled' => fn(ParseNode $n) => $o->setKioskModeFlashlightConfigurationEnabled($n->getBooleanValue()),
            'kioskModeFolderIcon' => fn(ParseNode $n) => $o->setKioskModeFolderIcon($n->getEnumValue(AndroidDeviceOwnerKioskModeFolderIcon::class)),
            'kioskModeGridHeight' => fn(ParseNode $n) => $o->setKioskModeGridHeight($n->getIntegerValue()),
            'kioskModeGridWidth' => fn(ParseNode $n) => $o->setKioskModeGridWidth($n->getIntegerValue()),
            'kioskModeIconSize' => fn(ParseNode $n) => $o->setKioskModeIconSize($n->getEnumValue(AndroidDeviceOwnerKioskModeIconSize::class)),
            'kioskModeLockHomeScreen' => fn(ParseNode $n) => $o->setKioskModeLockHomeScreen($n->getBooleanValue()),
            'kioskModeManagedFolders' => fn(ParseNode $n) => $o->setKioskModeManagedFolders($n->getCollectionOfObjectValues([AndroidDeviceOwnerKioskModeManagedFolder::class, 'createFromDiscriminatorValue'])),
            'kioskModeManagedHomeScreenAutoSignout' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenAutoSignout($n->getBooleanValue()),
            'kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds($n->getIntegerValue()),
            'kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds($n->getIntegerValue()),
            'kioskModeManagedHomeScreenPinComplexity' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenPinComplexity($n->getEnumValue(KioskModeManagedHomeScreenPinComplexity::class)),
            'kioskModeManagedHomeScreenPinRequired' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenPinRequired($n->getBooleanValue()),
            'kioskModeManagedHomeScreenPinRequiredToResume' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenPinRequiredToResume($n->getBooleanValue()),
            'kioskModeManagedHomeScreenSignInBackground' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenSignInBackground($n->getStringValue()),
            'kioskModeManagedHomeScreenSignInBrandingLogo' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenSignInBrandingLogo($n->getStringValue()),
            'kioskModeManagedHomeScreenSignInEnabled' => fn(ParseNode $n) => $o->setKioskModeManagedHomeScreenSignInEnabled($n->getBooleanValue()),
            'kioskModeManagedSettingsEntryDisabled' => fn(ParseNode $n) => $o->setKioskModeManagedSettingsEntryDisabled($n->getBooleanValue()),
            'kioskModeMediaVolumeConfigurationEnabled' => fn(ParseNode $n) => $o->setKioskModeMediaVolumeConfigurationEnabled($n->getBooleanValue()),
            'kioskModeScreenOrientation' => fn(ParseNode $n) => $o->setKioskModeScreenOrientation($n->getEnumValue(AndroidDeviceOwnerKioskModeScreenOrientation::class)),
            'kioskModeScreenSaverConfigurationEnabled' => fn(ParseNode $n) => $o->setKioskModeScreenSaverConfigurationEnabled($n->getBooleanValue()),
            'kioskModeScreenSaverDetectMediaDisabled' => fn(ParseNode $n) => $o->setKioskModeScreenSaverDetectMediaDisabled($n->getBooleanValue()),
            'kioskModeScreenSaverDisplayTimeInSeconds' => fn(ParseNode $n) => $o->setKioskModeScreenSaverDisplayTimeInSeconds($n->getIntegerValue()),
            'kioskModeScreenSaverImageUrl' => fn(ParseNode $n) => $o->setKioskModeScreenSaverImageUrl($n->getStringValue()),
            'kioskModeScreenSaverStartDelayInSeconds' => fn(ParseNode $n) => $o->setKioskModeScreenSaverStartDelayInSeconds($n->getIntegerValue()),
            'kioskModeShowAppNotificationBadge' => fn(ParseNode $n) => $o->setKioskModeShowAppNotificationBadge($n->getBooleanValue()),
            'kioskModeShowDeviceInfo' => fn(ParseNode $n) => $o->setKioskModeShowDeviceInfo($n->getBooleanValue()),
            'kioskModeUseManagedHomeScreenApp' => fn(ParseNode $n) => $o->setKioskModeUseManagedHomeScreenApp($n->getEnumValue(KioskModeType::class)),
            'kioskModeVirtualHomeButtonEnabled' => fn(ParseNode $n) => $o->setKioskModeVirtualHomeButtonEnabled($n->getBooleanValue()),
            'kioskModeVirtualHomeButtonType' => fn(ParseNode $n) => $o->setKioskModeVirtualHomeButtonType($n->getEnumValue(AndroidDeviceOwnerVirtualHomeButtonType::class)),
            'kioskModeWallpaperUrl' => fn(ParseNode $n) => $o->setKioskModeWallpaperUrl($n->getStringValue()),
            'kioskModeWifiAllowedSsids' => fn(ParseNode $n) => $o->setKioskModeWifiAllowedSsids($n->getCollectionOfPrimitiveValues()),
            'kioskModeWiFiConfigurationEnabled' => fn(ParseNode $n) => $o->setKioskModeWiFiConfigurationEnabled($n->getBooleanValue()),
            'microphoneForceMute' => fn(ParseNode $n) => $o->setMicrophoneForceMute($n->getBooleanValue()),
            'microsoftLauncherConfigurationEnabled' => fn(ParseNode $n) => $o->setMicrosoftLauncherConfigurationEnabled($n->getBooleanValue()),
            'microsoftLauncherCustomWallpaperAllowUserModification' => fn(ParseNode $n) => $o->setMicrosoftLauncherCustomWallpaperAllowUserModification($n->getBooleanValue()),
            'microsoftLauncherCustomWallpaperEnabled' => fn(ParseNode $n) => $o->setMicrosoftLauncherCustomWallpaperEnabled($n->getBooleanValue()),
            'microsoftLauncherCustomWallpaperImageUrl' => fn(ParseNode $n) => $o->setMicrosoftLauncherCustomWallpaperImageUrl($n->getStringValue()),
            'microsoftLauncherDockPresenceAllowUserModification' => fn(ParseNode $n) => $o->setMicrosoftLauncherDockPresenceAllowUserModification($n->getBooleanValue()),
            'microsoftLauncherDockPresenceConfiguration' => fn(ParseNode $n) => $o->setMicrosoftLauncherDockPresenceConfiguration($n->getEnumValue(MicrosoftLauncherDockPresence::class)),
            'microsoftLauncherFeedAllowUserModification' => fn(ParseNode $n) => $o->setMicrosoftLauncherFeedAllowUserModification($n->getBooleanValue()),
            'microsoftLauncherFeedEnabled' => fn(ParseNode $n) => $o->setMicrosoftLauncherFeedEnabled($n->getBooleanValue()),
            'microsoftLauncherSearchBarPlacementConfiguration' => fn(ParseNode $n) => $o->setMicrosoftLauncherSearchBarPlacementConfiguration($n->getEnumValue(MicrosoftLauncherSearchBarPlacement::class)),
            'networkEscapeHatchAllowed' => fn(ParseNode $n) => $o->setNetworkEscapeHatchAllowed($n->getBooleanValue()),
            'nfcBlockOutgoingBeam' => fn(ParseNode $n) => $o->setNfcBlockOutgoingBeam($n->getBooleanValue()),
            'passwordBlockKeyguard' => fn(ParseNode $n) => $o->setPasswordBlockKeyguard($n->getBooleanValue()),
            'passwordBlockKeyguardFeatures' => fn(ParseNode $n) => $o->setPasswordBlockKeyguardFeatures($n->getCollectionOfEnumValues(AndroidKeyguardFeature::class)),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinimumLetterCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumLetterCharacters($n->getIntegerValue()),
            'passwordMinimumLowerCaseCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumLowerCaseCharacters($n->getIntegerValue()),
            'passwordMinimumNonLetterCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumNonLetterCharacters($n->getIntegerValue()),
            'passwordMinimumNumericCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumNumericCharacters($n->getIntegerValue()),
            'passwordMinimumSymbolCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumSymbolCharacters($n->getIntegerValue()),
            'passwordMinimumUpperCaseCharacters' => fn(ParseNode $n) => $o->setPasswordMinimumUpperCaseCharacters($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordCountToBlock' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordCountToBlock($n->getIntegerValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)),
            'passwordRequireUnlock' => fn(ParseNode $n) => $o->setPasswordRequireUnlock($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordUnlock::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'personalProfileAppsAllowInstallFromUnknownSources' => fn(ParseNode $n) => $o->setPersonalProfileAppsAllowInstallFromUnknownSources($n->getBooleanValue()),
            'personalProfileCameraBlocked' => fn(ParseNode $n) => $o->setPersonalProfileCameraBlocked($n->getBooleanValue()),
            'personalProfilePersonalApplications' => fn(ParseNode $n) => $o->setPersonalProfilePersonalApplications($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'personalProfilePlayStoreMode' => fn(ParseNode $n) => $o->setPersonalProfilePlayStoreMode($n->getEnumValue(PersonalProfilePersonalPlayStoreMode::class)),
            'personalProfileScreenCaptureBlocked' => fn(ParseNode $n) => $o->setPersonalProfileScreenCaptureBlocked($n->getBooleanValue()),
            'playStoreMode' => fn(ParseNode $n) => $o->setPlayStoreMode($n->getEnumValue(AndroidDeviceOwnerPlayStoreMode::class)),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'securityCommonCriteriaModeEnabled' => fn(ParseNode $n) => $o->setSecurityCommonCriteriaModeEnabled($n->getBooleanValue()),
            'securityDeveloperSettingsEnabled' => fn(ParseNode $n) => $o->setSecurityDeveloperSettingsEnabled($n->getBooleanValue()),
            'securityRequireVerifyApps' => fn(ParseNode $n) => $o->setSecurityRequireVerifyApps($n->getBooleanValue()),
            'shortHelpText' => fn(ParseNode $n) => $o->setShortHelpText($n->getObjectValue([AndroidDeviceOwnerUserFacingMessage::class, 'createFromDiscriminatorValue'])),
            'statusBarBlocked' => fn(ParseNode $n) => $o->setStatusBarBlocked($n->getBooleanValue()),
            'stayOnModes' => fn(ParseNode $n) => $o->setStayOnModes($n->getCollectionOfEnumValues(AndroidDeviceOwnerBatteryPluggedMode::class)),
            'storageAllowUsb' => fn(ParseNode $n) => $o->setStorageAllowUsb($n->getBooleanValue()),
            'storageBlockExternalMedia' => fn(ParseNode $n) => $o->setStorageBlockExternalMedia($n->getBooleanValue()),
            'storageBlockUsbFileTransfer' => fn(ParseNode $n) => $o->setStorageBlockUsbFileTransfer($n->getBooleanValue()),
            'systemUpdateFreezePeriods' => fn(ParseNode $n) => $o->setSystemUpdateFreezePeriods($n->getCollectionOfObjectValues([AndroidDeviceOwnerSystemUpdateFreezePeriod::class, 'createFromDiscriminatorValue'])),
            'systemUpdateInstallType' => fn(ParseNode $n) => $o->setSystemUpdateInstallType($n->getEnumValue(AndroidDeviceOwnerSystemUpdateInstallType::class)),
            'systemUpdateWindowEndMinutesAfterMidnight' => fn(ParseNode $n) => $o->setSystemUpdateWindowEndMinutesAfterMidnight($n->getIntegerValue()),
            'systemUpdateWindowStartMinutesAfterMidnight' => fn(ParseNode $n) => $o->setSystemUpdateWindowStartMinutesAfterMidnight($n->getIntegerValue()),
            'systemWindowsBlocked' => fn(ParseNode $n) => $o->setSystemWindowsBlocked($n->getBooleanValue()),
            'usersBlockAdd' => fn(ParseNode $n) => $o->setUsersBlockAdd($n->getBooleanValue()),
            'usersBlockRemove' => fn(ParseNode $n) => $o->setUsersBlockRemove($n->getBooleanValue()),
            'volumeBlockAdjustment' => fn(ParseNode $n) => $o->setVolumeBlockAdjustment($n->getBooleanValue()),
            'vpnAlwaysOnLockdownMode' => fn(ParseNode $n) => $o->setVpnAlwaysOnLockdownMode($n->getBooleanValue()),
            'vpnAlwaysOnPackageIdentifier' => fn(ParseNode $n) => $o->setVpnAlwaysOnPackageIdentifier($n->getStringValue()),
            'wifiBlockEditConfigurations' => fn(ParseNode $n) => $o->setWifiBlockEditConfigurations($n->getBooleanValue()),
            'wifiBlockEditPolicyDefinedConfigurations' => fn(ParseNode $n) => $o->setWifiBlockEditPolicyDefinedConfigurations($n->getBooleanValue()),
            'workProfilePasswordExpirationDays' => fn(ParseNode $n) => $o->setWorkProfilePasswordExpirationDays($n->getIntegerValue()),
            'workProfilePasswordMinimumLength' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()),
            'workProfilePasswordMinimumLetterCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumLetterCharacters($n->getIntegerValue()),
            'workProfilePasswordMinimumLowerCaseCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumLowerCaseCharacters($n->getIntegerValue()),
            'workProfilePasswordMinimumNonLetterCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumNonLetterCharacters($n->getIntegerValue()),
            'workProfilePasswordMinimumNumericCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumNumericCharacters($n->getIntegerValue()),
            'workProfilePasswordMinimumSymbolCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumSymbolCharacters($n->getIntegerValue()),
            'workProfilePasswordMinimumUpperCaseCharacters' => fn(ParseNode $n) => $o->setWorkProfilePasswordMinimumUpperCaseCharacters($n->getIntegerValue()),
            'workProfilePasswordPreviousPasswordCountToBlock' => fn(ParseNode $n) => $o->setWorkProfilePasswordPreviousPasswordCountToBlock($n->getIntegerValue()),
            'workProfilePasswordRequiredType' => fn(ParseNode $n) => $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)),
            'workProfilePasswordRequireUnlock' => fn(ParseNode $n) => $o->setWorkProfilePasswordRequireUnlock($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordUnlock::class)),
            'workProfilePasswordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the globalProxy property value. Proxy is set up directly with host, port and excluded hosts.
     * @return AndroidDeviceOwnerGlobalProxy|null
    */
    public function getGlobalProxy(): ?AndroidDeviceOwnerGlobalProxy {
        return $this->getBackingStore()->get('globalProxy');
    }

    /**
     * Gets the googleAccountsBlocked property value. Indicates whether or not google accounts will be blocked.
     * @return bool|null
    */
    public function getGoogleAccountsBlocked(): ?bool {
        return $this->getBackingStore()->get('googleAccountsBlocked');
    }

    /**
     * Gets the kioskCustomizationDeviceSettingsBlocked property value. Indicates whether a user can access the device's Settings app while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationDeviceSettingsBlocked(): ?bool {
        return $this->getBackingStore()->get('kioskCustomizationDeviceSettingsBlocked');
    }

    /**
     * Gets the kioskCustomizationPowerButtonActionsBlocked property value. Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationPowerButtonActionsBlocked(): ?bool {
        return $this->getBackingStore()->get('kioskCustomizationPowerButtonActionsBlocked');
    }

    /**
     * Gets the kioskCustomizationStatusBar property value. Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
     * @return AndroidDeviceOwnerKioskCustomizationStatusBar|null
    */
    public function getKioskCustomizationStatusBar(): ?AndroidDeviceOwnerKioskCustomizationStatusBar {
        return $this->getBackingStore()->get('kioskCustomizationStatusBar');
    }

    /**
     * Gets the kioskCustomizationSystemErrorWarnings property value. Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationSystemErrorWarnings(): ?bool {
        return $this->getBackingStore()->get('kioskCustomizationSystemErrorWarnings');
    }

    /**
     * Gets the kioskCustomizationSystemNavigation property value. Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
     * @return AndroidDeviceOwnerKioskCustomizationSystemNavigation|null
    */
    public function getKioskCustomizationSystemNavigation(): ?AndroidDeviceOwnerKioskCustomizationSystemNavigation {
        return $this->getBackingStore()->get('kioskCustomizationSystemNavigation');
    }

    /**
     * Gets the kioskModeAppOrderEnabled property value. Whether or not to enable app ordering in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeAppOrderEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeAppOrderEnabled');
    }

    /**
     * Gets the kioskModeAppPositions property value. The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeAppPositionItem>|null
    */
    public function getKioskModeAppPositions(): ?array {
        return $this->getBackingStore()->get('kioskModeAppPositions');
    }

    /**
     * Gets the kioskModeApps property value. A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getKioskModeApps(): ?array {
        return $this->getBackingStore()->get('kioskModeApps');
    }

    /**
     * Gets the kioskModeAppsInFolderOrderedByName property value. Whether or not to alphabetize applications within a folder in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeAppsInFolderOrderedByName(): ?bool {
        return $this->getBackingStore()->get('kioskModeAppsInFolderOrderedByName');
    }

    /**
     * Gets the kioskModeBluetoothConfigurationEnabled property value. Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBluetoothConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeBluetoothConfigurationEnabled');
    }

    /**
     * Gets the kioskModeDebugMenuEasyAccessEnabled property value. Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeDebugMenuEasyAccessEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeDebugMenuEasyAccessEnabled');
    }

    /**
     * Gets the kioskModeExitCode property value. Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeExitCode(): ?string {
        return $this->getBackingStore()->get('kioskModeExitCode');
    }

    /**
     * Gets the kioskModeFlashlightConfigurationEnabled property value. Whether or not to allow a user to use the flashlight in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeFlashlightConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeFlashlightConfigurationEnabled');
    }

    /**
     * Gets the kioskModeFolderIcon property value. Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
     * @return AndroidDeviceOwnerKioskModeFolderIcon|null
    */
    public function getKioskModeFolderIcon(): ?AndroidDeviceOwnerKioskModeFolderIcon {
        return $this->getBackingStore()->get('kioskModeFolderIcon');
    }

    /**
     * Gets the kioskModeGridHeight property value. Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeGridHeight(): ?int {
        return $this->getBackingStore()->get('kioskModeGridHeight');
    }

    /**
     * Gets the kioskModeGridWidth property value. Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeGridWidth(): ?int {
        return $this->getBackingStore()->get('kioskModeGridWidth');
    }

    /**
     * Gets the kioskModeIconSize property value. Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
     * @return AndroidDeviceOwnerKioskModeIconSize|null
    */
    public function getKioskModeIconSize(): ?AndroidDeviceOwnerKioskModeIconSize {
        return $this->getBackingStore()->get('kioskModeIconSize');
    }

    /**
     * Gets the kioskModeLockHomeScreen property value. Whether or not to lock home screen to the end user in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeLockHomeScreen(): ?bool {
        return $this->getBackingStore()->get('kioskModeLockHomeScreen');
    }

    /**
     * Gets the kioskModeManagedFolders property value. A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeManagedFolder>|null
    */
    public function getKioskModeManagedFolders(): ?array {
        return $this->getBackingStore()->get('kioskModeManagedFolders');
    }

    /**
     * Gets the kioskModeManagedHomeScreenAutoSignout property value. Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenAutoSignout(): ?bool {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenAutoSignout');
    }

    /**
     * Gets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property value. Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds(): ?int {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds');
    }

    /**
     * Gets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property value. Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds(): ?int {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds');
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinComplexity property value. Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
     * @return KioskModeManagedHomeScreenPinComplexity|null
    */
    public function getKioskModeManagedHomeScreenPinComplexity(): ?KioskModeManagedHomeScreenPinComplexity {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenPinComplexity');
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinRequired property value. Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenPinRequired(): ?bool {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenPinRequired');
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinRequiredToResume property value. Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenPinRequiredToResume(): ?bool {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenPinRequiredToResume');
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInBackground property value. Custom URL background for sign-in screen for Managed Home Screen.
     * @return string|null
    */
    public function getKioskModeManagedHomeScreenSignInBackground(): ?string {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenSignInBackground');
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInBrandingLogo property value. Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
     * @return string|null
    */
    public function getKioskModeManagedHomeScreenSignInBrandingLogo(): ?string {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenSignInBrandingLogo');
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInEnabled property value. Whether or not show sign-in screen for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenSignInEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeManagedHomeScreenSignInEnabled');
    }

    /**
     * Gets the kioskModeManagedSettingsEntryDisabled property value. Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeManagedSettingsEntryDisabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeManagedSettingsEntryDisabled');
    }

    /**
     * Gets the kioskModeMediaVolumeConfigurationEnabled property value. Whether or not to allow a user to change the media volume in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeMediaVolumeConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeMediaVolumeConfigurationEnabled');
    }

    /**
     * Gets the kioskModeScreenOrientation property value. Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
     * @return AndroidDeviceOwnerKioskModeScreenOrientation|null
    */
    public function getKioskModeScreenOrientation(): ?AndroidDeviceOwnerKioskModeScreenOrientation {
        return $this->getBackingStore()->get('kioskModeScreenOrientation');
    }

    /**
     * Gets the kioskModeScreenSaverConfigurationEnabled property value. Whether or not to enable screen saver mode or not in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeScreenSaverConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeScreenSaverConfigurationEnabled');
    }

    /**
     * Gets the kioskModeScreenSaverDetectMediaDisabled property value. Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeScreenSaverDetectMediaDisabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeScreenSaverDetectMediaDisabled');
    }

    /**
     * Gets the kioskModeScreenSaverDisplayTimeInSeconds property value. The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeScreenSaverDisplayTimeInSeconds(): ?int {
        return $this->getBackingStore()->get('kioskModeScreenSaverDisplayTimeInSeconds');
    }

    /**
     * Gets the kioskModeScreenSaverImageUrl property value. URL for an image that will be the device's screen saver in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeScreenSaverImageUrl(): ?string {
        return $this->getBackingStore()->get('kioskModeScreenSaverImageUrl');
    }

    /**
     * Gets the kioskModeScreenSaverStartDelayInSeconds property value. The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeScreenSaverStartDelayInSeconds(): ?int {
        return $this->getBackingStore()->get('kioskModeScreenSaverStartDelayInSeconds');
    }

    /**
     * Gets the kioskModeShowAppNotificationBadge property value. Whether or not to display application notification badges in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeShowAppNotificationBadge(): ?bool {
        return $this->getBackingStore()->get('kioskModeShowAppNotificationBadge');
    }

    /**
     * Gets the kioskModeShowDeviceInfo property value. Whether or not to allow a user to access basic device information.
     * @return bool|null
    */
    public function getKioskModeShowDeviceInfo(): ?bool {
        return $this->getBackingStore()->get('kioskModeShowDeviceInfo');
    }

    /**
     * Gets the kioskModeUseManagedHomeScreenApp property value. Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
     * @return KioskModeType|null
    */
    public function getKioskModeUseManagedHomeScreenApp(): ?KioskModeType {
        return $this->getBackingStore()->get('kioskModeUseManagedHomeScreenApp');
    }

    /**
     * Gets the kioskModeVirtualHomeButtonEnabled property value. Whether or not to display a virtual home button when the device is in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeVirtualHomeButtonEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeVirtualHomeButtonEnabled');
    }

    /**
     * Gets the kioskModeVirtualHomeButtonType property value. Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
     * @return AndroidDeviceOwnerVirtualHomeButtonType|null
    */
    public function getKioskModeVirtualHomeButtonType(): ?AndroidDeviceOwnerVirtualHomeButtonType {
        return $this->getBackingStore()->get('kioskModeVirtualHomeButtonType');
    }

    /**
     * Gets the kioskModeWallpaperUrl property value. URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeWallpaperUrl(): ?string {
        return $this->getBackingStore()->get('kioskModeWallpaperUrl');
    }

    /**
     * Gets the kioskModeWifiAllowedSsids property value. The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<string>|null
    */
    public function getKioskModeWifiAllowedSsids(): ?array {
        return $this->getBackingStore()->get('kioskModeWifiAllowedSsids');
    }

    /**
     * Gets the kioskModeWiFiConfigurationEnabled property value. Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeWiFiConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('kioskModeWiFiConfigurationEnabled');
    }

    /**
     * Gets the microphoneForceMute property value. Indicates whether or not to block unmuting the microphone on the device.
     * @return bool|null
    */
    public function getMicrophoneForceMute(): ?bool {
        return $this->getBackingStore()->get('microphoneForceMute');
    }

    /**
     * Gets the microsoftLauncherConfigurationEnabled property value. Indicates whether or not to you want configure Microsoft Launcher.
     * @return bool|null
    */
    public function getMicrosoftLauncherConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherConfigurationEnabled');
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperAllowUserModification property value. Indicates whether or not the user can modify the wallpaper to personalize their device.
     * @return bool|null
    */
    public function getMicrosoftLauncherCustomWallpaperAllowUserModification(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherCustomWallpaperAllowUserModification');
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperEnabled property value. Indicates whether or not to configure the wallpaper on the targeted devices.
     * @return bool|null
    */
    public function getMicrosoftLauncherCustomWallpaperEnabled(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherCustomWallpaperEnabled');
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperImageUrl property value. Indicates the URL for the image file to use as the wallpaper on the targeted devices.
     * @return string|null
    */
    public function getMicrosoftLauncherCustomWallpaperImageUrl(): ?string {
        return $this->getBackingStore()->get('microsoftLauncherCustomWallpaperImageUrl');
    }

    /**
     * Gets the microsoftLauncherDockPresenceAllowUserModification property value. Indicates whether or not the user can modify the device dock configuration on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherDockPresenceAllowUserModification(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherDockPresenceAllowUserModification');
    }

    /**
     * Gets the microsoftLauncherDockPresenceConfiguration property value. Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
     * @return MicrosoftLauncherDockPresence|null
    */
    public function getMicrosoftLauncherDockPresenceConfiguration(): ?MicrosoftLauncherDockPresence {
        return $this->getBackingStore()->get('microsoftLauncherDockPresenceConfiguration');
    }

    /**
     * Gets the microsoftLauncherFeedAllowUserModification property value. Indicates whether or not the user can modify the launcher feed on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherFeedAllowUserModification(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherFeedAllowUserModification');
    }

    /**
     * Gets the microsoftLauncherFeedEnabled property value. Indicates whether or not you want to enable the launcher feed on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherFeedEnabled(): ?bool {
        return $this->getBackingStore()->get('microsoftLauncherFeedEnabled');
    }

    /**
     * Gets the microsoftLauncherSearchBarPlacementConfiguration property value. Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
     * @return MicrosoftLauncherSearchBarPlacement|null
    */
    public function getMicrosoftLauncherSearchBarPlacementConfiguration(): ?MicrosoftLauncherSearchBarPlacement {
        return $this->getBackingStore()->get('microsoftLauncherSearchBarPlacementConfiguration');
    }

    /**
     * Gets the networkEscapeHatchAllowed property value. Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
     * @return bool|null
    */
    public function getNetworkEscapeHatchAllowed(): ?bool {
        return $this->getBackingStore()->get('networkEscapeHatchAllowed');
    }

    /**
     * Gets the nfcBlockOutgoingBeam property value. Indicates whether or not to block NFC outgoing beam.
     * @return bool|null
    */
    public function getNfcBlockOutgoingBeam(): ?bool {
        return $this->getBackingStore()->get('nfcBlockOutgoingBeam');
    }

    /**
     * Gets the passwordBlockKeyguard property value. Indicates whether or not the keyguard is disabled.
     * @return bool|null
    */
    public function getPasswordBlockKeyguard(): ?bool {
        return $this->getBackingStore()->get('passwordBlockKeyguard');
    }

    /**
     * Gets the passwordBlockKeyguardFeatures property value. List of device keyguard features to block. This collection can contain a maximum of 11 elements.
     * @return array<AndroidKeyguardFeature>|null
    */
    public function getPasswordBlockKeyguardFeatures(): ?array {
        return $this->getBackingStore()->get('passwordBlockKeyguardFeatures');
    }

    /**
     * Gets the passwordExpirationDays property value. Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('passwordExpirationDays');
    }

    /**
     * Gets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLength');
    }

    /**
     * Gets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumLetterCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLetterCharacters');
    }

    /**
     * Gets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumLowerCaseCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLowerCaseCharacters');
    }

    /**
     * Gets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumNonLetterCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumNonLetterCharacters');
    }

    /**
     * Gets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumNumericCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumNumericCharacters');
    }

    /**
     * Gets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumSymbolCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumSymbolCharacters');
    }

    /**
     * Gets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordMinimumUpperCaseCharacters(): ?int {
        return $this->getBackingStore()->get('passwordMinimumUpperCaseCharacters');
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
    }

    /**
     * Gets the passwordPreviousPasswordCountToBlock property value. Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordCountToBlock(): ?int {
        return $this->getBackingStore()->get('passwordPreviousPasswordCountToBlock');
    }

    /**
     * Gets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->getBackingStore()->get('passwordRequiredType');
    }

    /**
     * Gets the passwordRequireUnlock property value. Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     * @return AndroidDeviceOwnerRequiredPasswordUnlock|null
    */
    public function getPasswordRequireUnlock(): ?AndroidDeviceOwnerRequiredPasswordUnlock {
        return $this->getBackingStore()->get('passwordRequireUnlock');
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
    }

    /**
     * Gets the personalProfileAppsAllowInstallFromUnknownSources property value. Indicates whether the user can install apps from unknown sources on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileAppsAllowInstallFromUnknownSources(): ?bool {
        return $this->getBackingStore()->get('personalProfileAppsAllowInstallFromUnknownSources');
    }

    /**
     * Gets the personalProfileCameraBlocked property value. Indicates whether to disable the use of the camera on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileCameraBlocked(): ?bool {
        return $this->getBackingStore()->get('personalProfileCameraBlocked');
    }

    /**
     * Gets the personalProfilePersonalApplications property value. Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getPersonalProfilePersonalApplications(): ?array {
        return $this->getBackingStore()->get('personalProfilePersonalApplications');
    }

    /**
     * Gets the personalProfilePlayStoreMode property value. Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
     * @return PersonalProfilePersonalPlayStoreMode|null
    */
    public function getPersonalProfilePlayStoreMode(): ?PersonalProfilePersonalPlayStoreMode {
        return $this->getBackingStore()->get('personalProfilePlayStoreMode');
    }

    /**
     * Gets the personalProfileScreenCaptureBlocked property value. Indicates whether to disable the capability to take screenshots on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileScreenCaptureBlocked(): ?bool {
        return $this->getBackingStore()->get('personalProfileScreenCaptureBlocked');
    }

    /**
     * Gets the playStoreMode property value. Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
     * @return AndroidDeviceOwnerPlayStoreMode|null
    */
    public function getPlayStoreMode(): ?AndroidDeviceOwnerPlayStoreMode {
        return $this->getBackingStore()->get('playStoreMode');
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->getBackingStore()->get('screenCaptureBlocked');
    }

    /**
     * Gets the securityCommonCriteriaModeEnabled property value. Represents the security common criteria mode enabled provided to users when they attempt to modify managed settings on their device.
     * @return bool|null
    */
    public function getSecurityCommonCriteriaModeEnabled(): ?bool {
        return $this->getBackingStore()->get('securityCommonCriteriaModeEnabled');
    }

    /**
     * Gets the securityDeveloperSettingsEnabled property value. Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
     * @return bool|null
    */
    public function getSecurityDeveloperSettingsEnabled(): ?bool {
        return $this->getBackingStore()->get('securityDeveloperSettingsEnabled');
    }

    /**
     * Gets the securityRequireVerifyApps property value. Indicates whether or not verify apps is required.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->getBackingStore()->get('securityRequireVerifyApps');
    }

    /**
     * Gets the shortHelpText property value. Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
     * @return AndroidDeviceOwnerUserFacingMessage|null
    */
    public function getShortHelpText(): ?AndroidDeviceOwnerUserFacingMessage {
        return $this->getBackingStore()->get('shortHelpText');
    }

    /**
     * Gets the statusBarBlocked property value. Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
     * @return bool|null
    */
    public function getStatusBarBlocked(): ?bool {
        return $this->getBackingStore()->get('statusBarBlocked');
    }

    /**
     * Gets the stayOnModes property value. List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
     * @return array<AndroidDeviceOwnerBatteryPluggedMode>|null
    */
    public function getStayOnModes(): ?array {
        return $this->getBackingStore()->get('stayOnModes');
    }

    /**
     * Gets the storageAllowUsb property value. Indicates whether or not to allow USB mass storage.
     * @return bool|null
    */
    public function getStorageAllowUsb(): ?bool {
        return $this->getBackingStore()->get('storageAllowUsb');
    }

    /**
     * Gets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     * @return bool|null
    */
    public function getStorageBlockExternalMedia(): ?bool {
        return $this->getBackingStore()->get('storageBlockExternalMedia');
    }

    /**
     * Gets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     * @return bool|null
    */
    public function getStorageBlockUsbFileTransfer(): ?bool {
        return $this->getBackingStore()->get('storageBlockUsbFileTransfer');
    }

    /**
     * Gets the systemUpdateFreezePeriods property value. Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerSystemUpdateFreezePeriod>|null
    */
    public function getSystemUpdateFreezePeriods(): ?array {
        return $this->getBackingStore()->get('systemUpdateFreezePeriods');
    }

    /**
     * Gets the systemUpdateInstallType property value. The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
     * @return AndroidDeviceOwnerSystemUpdateInstallType|null
    */
    public function getSystemUpdateInstallType(): ?AndroidDeviceOwnerSystemUpdateInstallType {
        return $this->getBackingStore()->get('systemUpdateInstallType');
    }

    /**
     * Gets the systemUpdateWindowEndMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
     * @return int|null
    */
    public function getSystemUpdateWindowEndMinutesAfterMidnight(): ?int {
        return $this->getBackingStore()->get('systemUpdateWindowEndMinutesAfterMidnight');
    }

    /**
     * Gets the systemUpdateWindowStartMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
     * @return int|null
    */
    public function getSystemUpdateWindowStartMinutesAfterMidnight(): ?int {
        return $this->getBackingStore()->get('systemUpdateWindowStartMinutesAfterMidnight');
    }

    /**
     * Gets the systemWindowsBlocked property value. Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
     * @return bool|null
    */
    public function getSystemWindowsBlocked(): ?bool {
        return $this->getBackingStore()->get('systemWindowsBlocked');
    }

    /**
     * Gets the usersBlockAdd property value. Indicates whether or not adding users and profiles is disabled.
     * @return bool|null
    */
    public function getUsersBlockAdd(): ?bool {
        return $this->getBackingStore()->get('usersBlockAdd');
    }

    /**
     * Gets the usersBlockRemove property value. Indicates whether or not to disable removing other users from the device.
     * @return bool|null
    */
    public function getUsersBlockRemove(): ?bool {
        return $this->getBackingStore()->get('usersBlockRemove');
    }

    /**
     * Gets the volumeBlockAdjustment property value. Indicates whether or not adjusting the master volume is disabled.
     * @return bool|null
    */
    public function getVolumeBlockAdjustment(): ?bool {
        return $this->getBackingStore()->get('volumeBlockAdjustment');
    }

    /**
     * Gets the vpnAlwaysOnLockdownMode property value. If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
     * @return bool|null
    */
    public function getVpnAlwaysOnLockdownMode(): ?bool {
        return $this->getBackingStore()->get('vpnAlwaysOnLockdownMode');
    }

    /**
     * Gets the vpnAlwaysOnPackageIdentifier property value. Android app package name for app that will handle an always-on VPN connection.
     * @return string|null
    */
    public function getVpnAlwaysOnPackageIdentifier(): ?string {
        return $this->getBackingStore()->get('vpnAlwaysOnPackageIdentifier');
    }

    /**
     * Gets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     * @return bool|null
    */
    public function getWifiBlockEditConfigurations(): ?bool {
        return $this->getBackingStore()->get('wifiBlockEditConfigurations');
    }

    /**
     * Gets the wifiBlockEditPolicyDefinedConfigurations property value. Indicates whether or not to block the user from editing just the networks defined by the policy.
     * @return bool|null
    */
    public function getWifiBlockEditPolicyDefinedConfigurations(): ?bool {
        return $this->getBackingStore()->get('wifiBlockEditPolicyDefinedConfigurations');
    }

    /**
     * Gets the workProfilePasswordExpirationDays property value. Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordExpirationDays');
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Indicates the minimum length of the work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumLength');
    }

    /**
     * Gets the workProfilePasswordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLetterCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumLetterCharacters');
    }

    /**
     * Gets the workProfilePasswordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLowerCaseCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumLowerCaseCharacters');
    }

    /**
     * Gets the workProfilePasswordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumNonLetterCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumNonLetterCharacters');
    }

    /**
     * Gets the workProfilePasswordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumNumericCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumNumericCharacters');
    }

    /**
     * Gets the workProfilePasswordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumSymbolCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumSymbolCharacters');
    }

    /**
     * Gets the workProfilePasswordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumUpperCaseCharacters(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordMinimumUpperCaseCharacters');
    }

    /**
     * Gets the workProfilePasswordPreviousPasswordCountToBlock property value. Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePasswordPreviousPasswordCountToBlock(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordPreviousPasswordCountToBlock');
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->getBackingStore()->get('workProfilePasswordRequiredType');
    }

    /**
     * Gets the workProfilePasswordRequireUnlock property value. Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     * @return AndroidDeviceOwnerRequiredPasswordUnlock|null
    */
    public function getWorkProfilePasswordRequireUnlock(): ?AndroidDeviceOwnerRequiredPasswordUnlock {
        return $this->getBackingStore()->get('workProfilePasswordRequireUnlock');
    }

    /**
     * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->getBackingStore()->get('workProfilePasswordSignInFailureCountBeforeFactoryReset');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockModification', $this->getAccountsBlockModification());
        $writer->writeBooleanValue('appsAllowInstallFromUnknownSources', $this->getAppsAllowInstallFromUnknownSources());
        $writer->writeEnumValue('appsAutoUpdatePolicy', $this->getAppsAutoUpdatePolicy());
        $writer->writeEnumValue('appsDefaultPermissionPolicy', $this->getAppsDefaultPermissionPolicy());
        $writer->writeBooleanValue('appsRecommendSkippingFirstUseHints', $this->getAppsRecommendSkippingFirstUseHints());
        $writer->writeCollectionOfObjectValues('azureAdSharedDeviceDataClearApps', $this->getAzureAdSharedDeviceDataClearApps());
        $writer->writeBooleanValue('bluetoothBlockConfiguration', $this->getBluetoothBlockConfiguration());
        $writer->writeBooleanValue('bluetoothBlockContactSharing', $this->getBluetoothBlockContactSharing());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockWiFiTethering', $this->getCellularBlockWiFiTethering());
        $writer->writeBooleanValue('certificateCredentialConfigurationDisabled', $this->getCertificateCredentialConfigurationDisabled());
        $writer->writeBooleanValue('crossProfilePoliciesAllowCopyPaste', $this->getCrossProfilePoliciesAllowCopyPaste());
        $writer->writeEnumValue('crossProfilePoliciesAllowDataSharing', $this->getCrossProfilePoliciesAllowDataSharing());
        $writer->writeBooleanValue('crossProfilePoliciesShowWorkContactsInPersonalProfile', $this->getCrossProfilePoliciesShowWorkContactsInPersonalProfile());
        $writer->writeBooleanValue('dataRoamingBlocked', $this->getDataRoamingBlocked());
        $writer->writeBooleanValue('dateTimeConfigurationBlocked', $this->getDateTimeConfigurationBlocked());
        $writer->writeObjectValue('detailedHelpText', $this->getDetailedHelpText());
        $writer->writeObjectValue('deviceOwnerLockScreenMessage', $this->getDeviceOwnerLockScreenMessage());
        $writer->writeEnumValue('enrollmentProfile', $this->getEnrollmentProfile());
        $writer->writeBooleanValue('factoryResetBlocked', $this->getFactoryResetBlocked());
        $writer->writeCollectionOfPrimitiveValues('factoryResetDeviceAdministratorEmails', $this->getFactoryResetDeviceAdministratorEmails());
        $writer->writeObjectValue('globalProxy', $this->getGlobalProxy());
        $writer->writeBooleanValue('googleAccountsBlocked', $this->getGoogleAccountsBlocked());
        $writer->writeBooleanValue('kioskCustomizationDeviceSettingsBlocked', $this->getKioskCustomizationDeviceSettingsBlocked());
        $writer->writeBooleanValue('kioskCustomizationPowerButtonActionsBlocked', $this->getKioskCustomizationPowerButtonActionsBlocked());
        $writer->writeEnumValue('kioskCustomizationStatusBar', $this->getKioskCustomizationStatusBar());
        $writer->writeBooleanValue('kioskCustomizationSystemErrorWarnings', $this->getKioskCustomizationSystemErrorWarnings());
        $writer->writeEnumValue('kioskCustomizationSystemNavigation', $this->getKioskCustomizationSystemNavigation());
        $writer->writeBooleanValue('kioskModeAppOrderEnabled', $this->getKioskModeAppOrderEnabled());
        $writer->writeCollectionOfObjectValues('kioskModeAppPositions', $this->getKioskModeAppPositions());
        $writer->writeCollectionOfObjectValues('kioskModeApps', $this->getKioskModeApps());
        $writer->writeBooleanValue('kioskModeAppsInFolderOrderedByName', $this->getKioskModeAppsInFolderOrderedByName());
        $writer->writeBooleanValue('kioskModeBluetoothConfigurationEnabled', $this->getKioskModeBluetoothConfigurationEnabled());
        $writer->writeBooleanValue('kioskModeDebugMenuEasyAccessEnabled', $this->getKioskModeDebugMenuEasyAccessEnabled());
        $writer->writeStringValue('kioskModeExitCode', $this->getKioskModeExitCode());
        $writer->writeBooleanValue('kioskModeFlashlightConfigurationEnabled', $this->getKioskModeFlashlightConfigurationEnabled());
        $writer->writeEnumValue('kioskModeFolderIcon', $this->getKioskModeFolderIcon());
        $writer->writeIntegerValue('kioskModeGridHeight', $this->getKioskModeGridHeight());
        $writer->writeIntegerValue('kioskModeGridWidth', $this->getKioskModeGridWidth());
        $writer->writeEnumValue('kioskModeIconSize', $this->getKioskModeIconSize());
        $writer->writeBooleanValue('kioskModeLockHomeScreen', $this->getKioskModeLockHomeScreen());
        $writer->writeCollectionOfObjectValues('kioskModeManagedFolders', $this->getKioskModeManagedFolders());
        $writer->writeBooleanValue('kioskModeManagedHomeScreenAutoSignout', $this->getKioskModeManagedHomeScreenAutoSignout());
        $writer->writeIntegerValue('kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds', $this->getKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds());
        $writer->writeIntegerValue('kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds', $this->getKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds());
        $writer->writeEnumValue('kioskModeManagedHomeScreenPinComplexity', $this->getKioskModeManagedHomeScreenPinComplexity());
        $writer->writeBooleanValue('kioskModeManagedHomeScreenPinRequired', $this->getKioskModeManagedHomeScreenPinRequired());
        $writer->writeBooleanValue('kioskModeManagedHomeScreenPinRequiredToResume', $this->getKioskModeManagedHomeScreenPinRequiredToResume());
        $writer->writeStringValue('kioskModeManagedHomeScreenSignInBackground', $this->getKioskModeManagedHomeScreenSignInBackground());
        $writer->writeStringValue('kioskModeManagedHomeScreenSignInBrandingLogo', $this->getKioskModeManagedHomeScreenSignInBrandingLogo());
        $writer->writeBooleanValue('kioskModeManagedHomeScreenSignInEnabled', $this->getKioskModeManagedHomeScreenSignInEnabled());
        $writer->writeBooleanValue('kioskModeManagedSettingsEntryDisabled', $this->getKioskModeManagedSettingsEntryDisabled());
        $writer->writeBooleanValue('kioskModeMediaVolumeConfigurationEnabled', $this->getKioskModeMediaVolumeConfigurationEnabled());
        $writer->writeEnumValue('kioskModeScreenOrientation', $this->getKioskModeScreenOrientation());
        $writer->writeBooleanValue('kioskModeScreenSaverConfigurationEnabled', $this->getKioskModeScreenSaverConfigurationEnabled());
        $writer->writeBooleanValue('kioskModeScreenSaverDetectMediaDisabled', $this->getKioskModeScreenSaverDetectMediaDisabled());
        $writer->writeIntegerValue('kioskModeScreenSaverDisplayTimeInSeconds', $this->getKioskModeScreenSaverDisplayTimeInSeconds());
        $writer->writeStringValue('kioskModeScreenSaverImageUrl', $this->getKioskModeScreenSaverImageUrl());
        $writer->writeIntegerValue('kioskModeScreenSaverStartDelayInSeconds', $this->getKioskModeScreenSaverStartDelayInSeconds());
        $writer->writeBooleanValue('kioskModeShowAppNotificationBadge', $this->getKioskModeShowAppNotificationBadge());
        $writer->writeBooleanValue('kioskModeShowDeviceInfo', $this->getKioskModeShowDeviceInfo());
        $writer->writeEnumValue('kioskModeUseManagedHomeScreenApp', $this->getKioskModeUseManagedHomeScreenApp());
        $writer->writeBooleanValue('kioskModeVirtualHomeButtonEnabled', $this->getKioskModeVirtualHomeButtonEnabled());
        $writer->writeEnumValue('kioskModeVirtualHomeButtonType', $this->getKioskModeVirtualHomeButtonType());
        $writer->writeStringValue('kioskModeWallpaperUrl', $this->getKioskModeWallpaperUrl());
        $writer->writeCollectionOfPrimitiveValues('kioskModeWifiAllowedSsids', $this->getKioskModeWifiAllowedSsids());
        $writer->writeBooleanValue('kioskModeWiFiConfigurationEnabled', $this->getKioskModeWiFiConfigurationEnabled());
        $writer->writeBooleanValue('microphoneForceMute', $this->getMicrophoneForceMute());
        $writer->writeBooleanValue('microsoftLauncherConfigurationEnabled', $this->getMicrosoftLauncherConfigurationEnabled());
        $writer->writeBooleanValue('microsoftLauncherCustomWallpaperAllowUserModification', $this->getMicrosoftLauncherCustomWallpaperAllowUserModification());
        $writer->writeBooleanValue('microsoftLauncherCustomWallpaperEnabled', $this->getMicrosoftLauncherCustomWallpaperEnabled());
        $writer->writeStringValue('microsoftLauncherCustomWallpaperImageUrl', $this->getMicrosoftLauncherCustomWallpaperImageUrl());
        $writer->writeBooleanValue('microsoftLauncherDockPresenceAllowUserModification', $this->getMicrosoftLauncherDockPresenceAllowUserModification());
        $writer->writeEnumValue('microsoftLauncherDockPresenceConfiguration', $this->getMicrosoftLauncherDockPresenceConfiguration());
        $writer->writeBooleanValue('microsoftLauncherFeedAllowUserModification', $this->getMicrosoftLauncherFeedAllowUserModification());
        $writer->writeBooleanValue('microsoftLauncherFeedEnabled', $this->getMicrosoftLauncherFeedEnabled());
        $writer->writeEnumValue('microsoftLauncherSearchBarPlacementConfiguration', $this->getMicrosoftLauncherSearchBarPlacementConfiguration());
        $writer->writeBooleanValue('networkEscapeHatchAllowed', $this->getNetworkEscapeHatchAllowed());
        $writer->writeBooleanValue('nfcBlockOutgoingBeam', $this->getNfcBlockOutgoingBeam());
        $writer->writeBooleanValue('passwordBlockKeyguard', $this->getPasswordBlockKeyguard());
        $writer->writeCollectionOfEnumValues('passwordBlockKeyguardFeatures', $this->getPasswordBlockKeyguardFeatures());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinimumLetterCharacters', $this->getPasswordMinimumLetterCharacters());
        $writer->writeIntegerValue('passwordMinimumLowerCaseCharacters', $this->getPasswordMinimumLowerCaseCharacters());
        $writer->writeIntegerValue('passwordMinimumNonLetterCharacters', $this->getPasswordMinimumNonLetterCharacters());
        $writer->writeIntegerValue('passwordMinimumNumericCharacters', $this->getPasswordMinimumNumericCharacters());
        $writer->writeIntegerValue('passwordMinimumSymbolCharacters', $this->getPasswordMinimumSymbolCharacters());
        $writer->writeIntegerValue('passwordMinimumUpperCaseCharacters', $this->getPasswordMinimumUpperCaseCharacters());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordCountToBlock', $this->getPasswordPreviousPasswordCountToBlock());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeEnumValue('passwordRequireUnlock', $this->getPasswordRequireUnlock());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeBooleanValue('personalProfileAppsAllowInstallFromUnknownSources', $this->getPersonalProfileAppsAllowInstallFromUnknownSources());
        $writer->writeBooleanValue('personalProfileCameraBlocked', $this->getPersonalProfileCameraBlocked());
        $writer->writeCollectionOfObjectValues('personalProfilePersonalApplications', $this->getPersonalProfilePersonalApplications());
        $writer->writeEnumValue('personalProfilePlayStoreMode', $this->getPersonalProfilePlayStoreMode());
        $writer->writeBooleanValue('personalProfileScreenCaptureBlocked', $this->getPersonalProfileScreenCaptureBlocked());
        $writer->writeEnumValue('playStoreMode', $this->getPlayStoreMode());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('securityCommonCriteriaModeEnabled', $this->getSecurityCommonCriteriaModeEnabled());
        $writer->writeBooleanValue('securityDeveloperSettingsEnabled', $this->getSecurityDeveloperSettingsEnabled());
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->getSecurityRequireVerifyApps());
        $writer->writeObjectValue('shortHelpText', $this->getShortHelpText());
        $writer->writeBooleanValue('statusBarBlocked', $this->getStatusBarBlocked());
        $writer->writeCollectionOfEnumValues('stayOnModes', $this->getStayOnModes());
        $writer->writeBooleanValue('storageAllowUsb', $this->getStorageAllowUsb());
        $writer->writeBooleanValue('storageBlockExternalMedia', $this->getStorageBlockExternalMedia());
        $writer->writeBooleanValue('storageBlockUsbFileTransfer', $this->getStorageBlockUsbFileTransfer());
        $writer->writeCollectionOfObjectValues('systemUpdateFreezePeriods', $this->getSystemUpdateFreezePeriods());
        $writer->writeEnumValue('systemUpdateInstallType', $this->getSystemUpdateInstallType());
        $writer->writeIntegerValue('systemUpdateWindowEndMinutesAfterMidnight', $this->getSystemUpdateWindowEndMinutesAfterMidnight());
        $writer->writeIntegerValue('systemUpdateWindowStartMinutesAfterMidnight', $this->getSystemUpdateWindowStartMinutesAfterMidnight());
        $writer->writeBooleanValue('systemWindowsBlocked', $this->getSystemWindowsBlocked());
        $writer->writeBooleanValue('usersBlockAdd', $this->getUsersBlockAdd());
        $writer->writeBooleanValue('usersBlockRemove', $this->getUsersBlockRemove());
        $writer->writeBooleanValue('volumeBlockAdjustment', $this->getVolumeBlockAdjustment());
        $writer->writeBooleanValue('vpnAlwaysOnLockdownMode', $this->getVpnAlwaysOnLockdownMode());
        $writer->writeStringValue('vpnAlwaysOnPackageIdentifier', $this->getVpnAlwaysOnPackageIdentifier());
        $writer->writeBooleanValue('wifiBlockEditConfigurations', $this->getWifiBlockEditConfigurations());
        $writer->writeBooleanValue('wifiBlockEditPolicyDefinedConfigurations', $this->getWifiBlockEditPolicyDefinedConfigurations());
        $writer->writeIntegerValue('workProfilePasswordExpirationDays', $this->getWorkProfilePasswordExpirationDays());
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->getWorkProfilePasswordMinimumLength());
        $writer->writeIntegerValue('workProfilePasswordMinimumLetterCharacters', $this->getWorkProfilePasswordMinimumLetterCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinimumLowerCaseCharacters', $this->getWorkProfilePasswordMinimumLowerCaseCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinimumNonLetterCharacters', $this->getWorkProfilePasswordMinimumNonLetterCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinimumNumericCharacters', $this->getWorkProfilePasswordMinimumNumericCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinimumSymbolCharacters', $this->getWorkProfilePasswordMinimumSymbolCharacters());
        $writer->writeIntegerValue('workProfilePasswordMinimumUpperCaseCharacters', $this->getWorkProfilePasswordMinimumUpperCaseCharacters());
        $writer->writeIntegerValue('workProfilePasswordPreviousPasswordCountToBlock', $this->getWorkProfilePasswordPreviousPasswordCountToBlock());
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->getWorkProfilePasswordRequiredType());
        $writer->writeEnumValue('workProfilePasswordRequireUnlock', $this->getWorkProfilePasswordRequireUnlock());
        $writer->writeIntegerValue('workProfilePasswordSignInFailureCountBeforeFactoryReset', $this->getWorkProfilePasswordSignInFailureCountBeforeFactoryReset());
    }

    /**
     * Sets the accountsBlockModification property value. Indicates whether or not adding or removing accounts is disabled.
     *  @param bool|null $value Value to set for the accountsBlockModification property.
    */
    public function setAccountsBlockModification(?bool $value): void {
        $this->getBackingStore()->set('accountsBlockModification', $value);
    }

    /**
     * Sets the appsAllowInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable to unknown sources setting.
     *  @param bool|null $value Value to set for the appsAllowInstallFromUnknownSources property.
    */
    public function setAppsAllowInstallFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('appsAllowInstallFromUnknownSources', $value);
    }

    /**
     * Sets the appsAutoUpdatePolicy property value. Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
     *  @param AndroidDeviceOwnerAppAutoUpdatePolicyType|null $value Value to set for the appsAutoUpdatePolicy property.
    */
    public function setAppsAutoUpdatePolicy(?AndroidDeviceOwnerAppAutoUpdatePolicyType $value): void {
        $this->getBackingStore()->set('appsAutoUpdatePolicy', $value);
    }

    /**
     * Sets the appsDefaultPermissionPolicy property value. Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     *  @param AndroidDeviceOwnerDefaultAppPermissionPolicyType|null $value Value to set for the appsDefaultPermissionPolicy property.
    */
    public function setAppsDefaultPermissionPolicy(?AndroidDeviceOwnerDefaultAppPermissionPolicyType $value): void {
        $this->getBackingStore()->set('appsDefaultPermissionPolicy', $value);
    }

    /**
     * Sets the appsRecommendSkippingFirstUseHints property value. Whether or not to recommend all apps skip any first-time-use hints they may have added.
     *  @param bool|null $value Value to set for the appsRecommendSkippingFirstUseHints property.
    */
    public function setAppsRecommendSkippingFirstUseHints(?bool $value): void {
        $this->getBackingStore()->set('appsRecommendSkippingFirstUseHints', $value);
    }

    /**
     * Sets the azureAdSharedDeviceDataClearApps property value. A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the azureAdSharedDeviceDataClearApps property.
    */
    public function setAzureAdSharedDeviceDataClearApps(?array $value): void {
        $this->getBackingStore()->set('azureAdSharedDeviceDataClearApps', $value);
    }

    /**
     * Sets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlockConfiguration property.
    */
    public function setBluetoothBlockConfiguration(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockConfiguration', $value);
    }

    /**
     * Sets the bluetoothBlockContactSharing property value. Indicates whether or not to block a user from sharing contacts via bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlockContactSharing property.
    */
    public function setBluetoothBlockContactSharing(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockContactSharing', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockWiFiTethering property value. Indicates whether or not to block Wi-Fi tethering.
     *  @param bool|null $value Value to set for the cellularBlockWiFiTethering property.
    */
    public function setCellularBlockWiFiTethering(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockWiFiTethering', $value);
    }

    /**
     * Sets the certificateCredentialConfigurationDisabled property value. Indicates whether or not to block users from any certificate credential configuration.
     *  @param bool|null $value Value to set for the certificateCredentialConfigurationDisabled property.
    */
    public function setCertificateCredentialConfigurationDisabled(?bool $value): void {
        $this->getBackingStore()->set('certificateCredentialConfigurationDisabled', $value);
    }

    /**
     * Sets the crossProfilePoliciesAllowCopyPaste property value. Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
     *  @param bool|null $value Value to set for the crossProfilePoliciesAllowCopyPaste property.
    */
    public function setCrossProfilePoliciesAllowCopyPaste(?bool $value): void {
        $this->getBackingStore()->set('crossProfilePoliciesAllowCopyPaste', $value);
    }

    /**
     * Sets the crossProfilePoliciesAllowDataSharing property value. Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
     *  @param AndroidDeviceOwnerCrossProfileDataSharing|null $value Value to set for the crossProfilePoliciesAllowDataSharing property.
    */
    public function setCrossProfilePoliciesAllowDataSharing(?AndroidDeviceOwnerCrossProfileDataSharing $value): void {
        $this->getBackingStore()->set('crossProfilePoliciesAllowDataSharing', $value);
    }

    /**
     * Sets the crossProfilePoliciesShowWorkContactsInPersonalProfile property value. Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
     *  @param bool|null $value Value to set for the crossProfilePoliciesShowWorkContactsInPersonalProfile property.
    */
    public function setCrossProfilePoliciesShowWorkContactsInPersonalProfile(?bool $value): void {
        $this->getBackingStore()->set('crossProfilePoliciesShowWorkContactsInPersonalProfile', $value);
    }

    /**
     * Sets the dataRoamingBlocked property value. Indicates whether or not to block a user from data roaming.
     *  @param bool|null $value Value to set for the dataRoamingBlocked property.
    */
    public function setDataRoamingBlocked(?bool $value): void {
        $this->getBackingStore()->set('dataRoamingBlocked', $value);
    }

    /**
     * Sets the dateTimeConfigurationBlocked property value. Indicates whether or not to block the user from manually changing the date or time on the device
     *  @param bool|null $value Value to set for the dateTimeConfigurationBlocked property.
    */
    public function setDateTimeConfigurationBlocked(?bool $value): void {
        $this->getBackingStore()->set('dateTimeConfigurationBlocked', $value);
    }

    /**
     * Sets the detailedHelpText property value. Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
     *  @param AndroidDeviceOwnerUserFacingMessage|null $value Value to set for the detailedHelpText property.
    */
    public function setDetailedHelpText(?AndroidDeviceOwnerUserFacingMessage $value): void {
        $this->getBackingStore()->set('detailedHelpText', $value);
    }

    /**
     * Sets the deviceOwnerLockScreenMessage property value. Represents the customized lock screen message provided to users when they attempt to modify managed settings on their device.
     *  @param AndroidDeviceOwnerUserFacingMessage|null $value Value to set for the deviceOwnerLockScreenMessage property.
    */
    public function setDeviceOwnerLockScreenMessage(?AndroidDeviceOwnerUserFacingMessage $value): void {
        $this->getBackingStore()->set('deviceOwnerLockScreenMessage', $value);
    }

    /**
     * Sets the enrollmentProfile property value. Android Device Owner Enrollment Profile types.
     *  @param AndroidDeviceOwnerEnrollmentProfileType|null $value Value to set for the enrollmentProfile property.
    */
    public function setEnrollmentProfile(?AndroidDeviceOwnerEnrollmentProfileType $value): void {
        $this->getBackingStore()->set('enrollmentProfile', $value);
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     *  @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value): void {
        $this->getBackingStore()->set('factoryResetBlocked', $value);
    }

    /**
     * Sets the factoryResetDeviceAdministratorEmails property value. List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
     *  @param array<string>|null $value Value to set for the factoryResetDeviceAdministratorEmails property.
    */
    public function setFactoryResetDeviceAdministratorEmails(?array $value): void {
        $this->getBackingStore()->set('factoryResetDeviceAdministratorEmails', $value);
    }

    /**
     * Sets the globalProxy property value. Proxy is set up directly with host, port and excluded hosts.
     *  @param AndroidDeviceOwnerGlobalProxy|null $value Value to set for the globalProxy property.
    */
    public function setGlobalProxy(?AndroidDeviceOwnerGlobalProxy $value): void {
        $this->getBackingStore()->set('globalProxy', $value);
    }

    /**
     * Sets the googleAccountsBlocked property value. Indicates whether or not google accounts will be blocked.
     *  @param bool|null $value Value to set for the googleAccountsBlocked property.
    */
    public function setGoogleAccountsBlocked(?bool $value): void {
        $this->getBackingStore()->set('googleAccountsBlocked', $value);
    }

    /**
     * Sets the kioskCustomizationDeviceSettingsBlocked property value. Indicates whether a user can access the device's Settings app while in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationDeviceSettingsBlocked property.
    */
    public function setKioskCustomizationDeviceSettingsBlocked(?bool $value): void {
        $this->getBackingStore()->set('kioskCustomizationDeviceSettingsBlocked', $value);
    }

    /**
     * Sets the kioskCustomizationPowerButtonActionsBlocked property value. Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationPowerButtonActionsBlocked property.
    */
    public function setKioskCustomizationPowerButtonActionsBlocked(?bool $value): void {
        $this->getBackingStore()->set('kioskCustomizationPowerButtonActionsBlocked', $value);
    }

    /**
     * Sets the kioskCustomizationStatusBar property value. Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
     *  @param AndroidDeviceOwnerKioskCustomizationStatusBar|null $value Value to set for the kioskCustomizationStatusBar property.
    */
    public function setKioskCustomizationStatusBar(?AndroidDeviceOwnerKioskCustomizationStatusBar $value): void {
        $this->getBackingStore()->set('kioskCustomizationStatusBar', $value);
    }

    /**
     * Sets the kioskCustomizationSystemErrorWarnings property value. Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationSystemErrorWarnings property.
    */
    public function setKioskCustomizationSystemErrorWarnings(?bool $value): void {
        $this->getBackingStore()->set('kioskCustomizationSystemErrorWarnings', $value);
    }

    /**
     * Sets the kioskCustomizationSystemNavigation property value. Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
     *  @param AndroidDeviceOwnerKioskCustomizationSystemNavigation|null $value Value to set for the kioskCustomizationSystemNavigation property.
    */
    public function setKioskCustomizationSystemNavigation(?AndroidDeviceOwnerKioskCustomizationSystemNavigation $value): void {
        $this->getBackingStore()->set('kioskCustomizationSystemNavigation', $value);
    }

    /**
     * Sets the kioskModeAppOrderEnabled property value. Whether or not to enable app ordering in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeAppOrderEnabled property.
    */
    public function setKioskModeAppOrderEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAppOrderEnabled', $value);
    }

    /**
     * Sets the kioskModeAppPositions property value. The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerKioskModeAppPositionItem>|null $value Value to set for the kioskModeAppPositions property.
    */
    public function setKioskModeAppPositions(?array $value): void {
        $this->getBackingStore()->set('kioskModeAppPositions', $value);
    }

    /**
     * Sets the kioskModeApps property value. A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the kioskModeApps property.
    */
    public function setKioskModeApps(?array $value): void {
        $this->getBackingStore()->set('kioskModeApps', $value);
    }

    /**
     * Sets the kioskModeAppsInFolderOrderedByName property value. Whether or not to alphabetize applications within a folder in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeAppsInFolderOrderedByName property.
    */
    public function setKioskModeAppsInFolderOrderedByName(?bool $value): void {
        $this->getBackingStore()->set('kioskModeAppsInFolderOrderedByName', $value);
    }

    /**
     * Sets the kioskModeBluetoothConfigurationEnabled property value. Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeBluetoothConfigurationEnabled property.
    */
    public function setKioskModeBluetoothConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeBluetoothConfigurationEnabled', $value);
    }

    /**
     * Sets the kioskModeDebugMenuEasyAccessEnabled property value. Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeDebugMenuEasyAccessEnabled property.
    */
    public function setKioskModeDebugMenuEasyAccessEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeDebugMenuEasyAccessEnabled', $value);
    }

    /**
     * Sets the kioskModeExitCode property value. Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeExitCode property.
    */
    public function setKioskModeExitCode(?string $value): void {
        $this->getBackingStore()->set('kioskModeExitCode', $value);
    }

    /**
     * Sets the kioskModeFlashlightConfigurationEnabled property value. Whether or not to allow a user to use the flashlight in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeFlashlightConfigurationEnabled property.
    */
    public function setKioskModeFlashlightConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeFlashlightConfigurationEnabled', $value);
    }

    /**
     * Sets the kioskModeFolderIcon property value. Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
     *  @param AndroidDeviceOwnerKioskModeFolderIcon|null $value Value to set for the kioskModeFolderIcon property.
    */
    public function setKioskModeFolderIcon(?AndroidDeviceOwnerKioskModeFolderIcon $value): void {
        $this->getBackingStore()->set('kioskModeFolderIcon', $value);
    }

    /**
     * Sets the kioskModeGridHeight property value. Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeGridHeight property.
    */
    public function setKioskModeGridHeight(?int $value): void {
        $this->getBackingStore()->set('kioskModeGridHeight', $value);
    }

    /**
     * Sets the kioskModeGridWidth property value. Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeGridWidth property.
    */
    public function setKioskModeGridWidth(?int $value): void {
        $this->getBackingStore()->set('kioskModeGridWidth', $value);
    }

    /**
     * Sets the kioskModeIconSize property value. Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
     *  @param AndroidDeviceOwnerKioskModeIconSize|null $value Value to set for the kioskModeIconSize property.
    */
    public function setKioskModeIconSize(?AndroidDeviceOwnerKioskModeIconSize $value): void {
        $this->getBackingStore()->set('kioskModeIconSize', $value);
    }

    /**
     * Sets the kioskModeLockHomeScreen property value. Whether or not to lock home screen to the end user in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeLockHomeScreen property.
    */
    public function setKioskModeLockHomeScreen(?bool $value): void {
        $this->getBackingStore()->set('kioskModeLockHomeScreen', $value);
    }

    /**
     * Sets the kioskModeManagedFolders property value. A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerKioskModeManagedFolder>|null $value Value to set for the kioskModeManagedFolders property.
    */
    public function setKioskModeManagedFolders(?array $value): void {
        $this->getBackingStore()->set('kioskModeManagedFolders', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenAutoSignout property value. Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenAutoSignout property.
    */
    public function setKioskModeManagedHomeScreenAutoSignout(?bool $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenAutoSignout', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property value. Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property.
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property value. Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property.
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds(?int $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinComplexity property value. Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
     *  @param KioskModeManagedHomeScreenPinComplexity|null $value Value to set for the kioskModeManagedHomeScreenPinComplexity property.
    */
    public function setKioskModeManagedHomeScreenPinComplexity(?KioskModeManagedHomeScreenPinComplexity $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenPinComplexity', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinRequired property value. Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenPinRequired property.
    */
    public function setKioskModeManagedHomeScreenPinRequired(?bool $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenPinRequired', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinRequiredToResume property value. Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenPinRequiredToResume property.
    */
    public function setKioskModeManagedHomeScreenPinRequiredToResume(?bool $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenPinRequiredToResume', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInBackground property value. Custom URL background for sign-in screen for Managed Home Screen.
     *  @param string|null $value Value to set for the kioskModeManagedHomeScreenSignInBackground property.
    */
    public function setKioskModeManagedHomeScreenSignInBackground(?string $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenSignInBackground', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInBrandingLogo property value. Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
     *  @param string|null $value Value to set for the kioskModeManagedHomeScreenSignInBrandingLogo property.
    */
    public function setKioskModeManagedHomeScreenSignInBrandingLogo(?string $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenSignInBrandingLogo', $value);
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInEnabled property value. Whether or not show sign-in screen for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenSignInEnabled property.
    */
    public function setKioskModeManagedHomeScreenSignInEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeManagedHomeScreenSignInEnabled', $value);
    }

    /**
     * Sets the kioskModeManagedSettingsEntryDisabled property value. Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeManagedSettingsEntryDisabled property.
    */
    public function setKioskModeManagedSettingsEntryDisabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeManagedSettingsEntryDisabled', $value);
    }

    /**
     * Sets the kioskModeMediaVolumeConfigurationEnabled property value. Whether or not to allow a user to change the media volume in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeMediaVolumeConfigurationEnabled property.
    */
    public function setKioskModeMediaVolumeConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeMediaVolumeConfigurationEnabled', $value);
    }

    /**
     * Sets the kioskModeScreenOrientation property value. Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
     *  @param AndroidDeviceOwnerKioskModeScreenOrientation|null $value Value to set for the kioskModeScreenOrientation property.
    */
    public function setKioskModeScreenOrientation(?AndroidDeviceOwnerKioskModeScreenOrientation $value): void {
        $this->getBackingStore()->set('kioskModeScreenOrientation', $value);
    }

    /**
     * Sets the kioskModeScreenSaverConfigurationEnabled property value. Whether or not to enable screen saver mode or not in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeScreenSaverConfigurationEnabled property.
    */
    public function setKioskModeScreenSaverConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeScreenSaverConfigurationEnabled', $value);
    }

    /**
     * Sets the kioskModeScreenSaverDetectMediaDisabled property value. Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeScreenSaverDetectMediaDisabled property.
    */
    public function setKioskModeScreenSaverDetectMediaDisabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeScreenSaverDetectMediaDisabled', $value);
    }

    /**
     * Sets the kioskModeScreenSaverDisplayTimeInSeconds property value. The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeScreenSaverDisplayTimeInSeconds property.
    */
    public function setKioskModeScreenSaverDisplayTimeInSeconds(?int $value): void {
        $this->getBackingStore()->set('kioskModeScreenSaverDisplayTimeInSeconds', $value);
    }

    /**
     * Sets the kioskModeScreenSaverImageUrl property value. URL for an image that will be the device's screen saver in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeScreenSaverImageUrl property.
    */
    public function setKioskModeScreenSaverImageUrl(?string $value): void {
        $this->getBackingStore()->set('kioskModeScreenSaverImageUrl', $value);
    }

    /**
     * Sets the kioskModeScreenSaverStartDelayInSeconds property value. The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeScreenSaverStartDelayInSeconds property.
    */
    public function setKioskModeScreenSaverStartDelayInSeconds(?int $value): void {
        $this->getBackingStore()->set('kioskModeScreenSaverStartDelayInSeconds', $value);
    }

    /**
     * Sets the kioskModeShowAppNotificationBadge property value. Whether or not to display application notification badges in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeShowAppNotificationBadge property.
    */
    public function setKioskModeShowAppNotificationBadge(?bool $value): void {
        $this->getBackingStore()->set('kioskModeShowAppNotificationBadge', $value);
    }

    /**
     * Sets the kioskModeShowDeviceInfo property value. Whether or not to allow a user to access basic device information.
     *  @param bool|null $value Value to set for the kioskModeShowDeviceInfo property.
    */
    public function setKioskModeShowDeviceInfo(?bool $value): void {
        $this->getBackingStore()->set('kioskModeShowDeviceInfo', $value);
    }

    /**
     * Sets the kioskModeUseManagedHomeScreenApp property value. Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
     *  @param KioskModeType|null $value Value to set for the kioskModeUseManagedHomeScreenApp property.
    */
    public function setKioskModeUseManagedHomeScreenApp(?KioskModeType $value): void {
        $this->getBackingStore()->set('kioskModeUseManagedHomeScreenApp', $value);
    }

    /**
     * Sets the kioskModeVirtualHomeButtonEnabled property value. Whether or not to display a virtual home button when the device is in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeVirtualHomeButtonEnabled property.
    */
    public function setKioskModeVirtualHomeButtonEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeVirtualHomeButtonEnabled', $value);
    }

    /**
     * Sets the kioskModeVirtualHomeButtonType property value. Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
     *  @param AndroidDeviceOwnerVirtualHomeButtonType|null $value Value to set for the kioskModeVirtualHomeButtonType property.
    */
    public function setKioskModeVirtualHomeButtonType(?AndroidDeviceOwnerVirtualHomeButtonType $value): void {
        $this->getBackingStore()->set('kioskModeVirtualHomeButtonType', $value);
    }

    /**
     * Sets the kioskModeWallpaperUrl property value. URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeWallpaperUrl property.
    */
    public function setKioskModeWallpaperUrl(?string $value): void {
        $this->getBackingStore()->set('kioskModeWallpaperUrl', $value);
    }

    /**
     * Sets the kioskModeWifiAllowedSsids property value. The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<string>|null $value Value to set for the kioskModeWifiAllowedSsids property.
    */
    public function setKioskModeWifiAllowedSsids(?array $value): void {
        $this->getBackingStore()->set('kioskModeWifiAllowedSsids', $value);
    }

    /**
     * Sets the kioskModeWiFiConfigurationEnabled property value. Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeWiFiConfigurationEnabled property.
    */
    public function setKioskModeWiFiConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('kioskModeWiFiConfigurationEnabled', $value);
    }

    /**
     * Sets the microphoneForceMute property value. Indicates whether or not to block unmuting the microphone on the device.
     *  @param bool|null $value Value to set for the microphoneForceMute property.
    */
    public function setMicrophoneForceMute(?bool $value): void {
        $this->getBackingStore()->set('microphoneForceMute', $value);
    }

    /**
     * Sets the microsoftLauncherConfigurationEnabled property value. Indicates whether or not to you want configure Microsoft Launcher.
     *  @param bool|null $value Value to set for the microsoftLauncherConfigurationEnabled property.
    */
    public function setMicrosoftLauncherConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherConfigurationEnabled', $value);
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperAllowUserModification property value. Indicates whether or not the user can modify the wallpaper to personalize their device.
     *  @param bool|null $value Value to set for the microsoftLauncherCustomWallpaperAllowUserModification property.
    */
    public function setMicrosoftLauncherCustomWallpaperAllowUserModification(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherCustomWallpaperAllowUserModification', $value);
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperEnabled property value. Indicates whether or not to configure the wallpaper on the targeted devices.
     *  @param bool|null $value Value to set for the microsoftLauncherCustomWallpaperEnabled property.
    */
    public function setMicrosoftLauncherCustomWallpaperEnabled(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherCustomWallpaperEnabled', $value);
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperImageUrl property value. Indicates the URL for the image file to use as the wallpaper on the targeted devices.
     *  @param string|null $value Value to set for the microsoftLauncherCustomWallpaperImageUrl property.
    */
    public function setMicrosoftLauncherCustomWallpaperImageUrl(?string $value): void {
        $this->getBackingStore()->set('microsoftLauncherCustomWallpaperImageUrl', $value);
    }

    /**
     * Sets the microsoftLauncherDockPresenceAllowUserModification property value. Indicates whether or not the user can modify the device dock configuration on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherDockPresenceAllowUserModification property.
    */
    public function setMicrosoftLauncherDockPresenceAllowUserModification(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherDockPresenceAllowUserModification', $value);
    }

    /**
     * Sets the microsoftLauncherDockPresenceConfiguration property value. Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
     *  @param MicrosoftLauncherDockPresence|null $value Value to set for the microsoftLauncherDockPresenceConfiguration property.
    */
    public function setMicrosoftLauncherDockPresenceConfiguration(?MicrosoftLauncherDockPresence $value): void {
        $this->getBackingStore()->set('microsoftLauncherDockPresenceConfiguration', $value);
    }

    /**
     * Sets the microsoftLauncherFeedAllowUserModification property value. Indicates whether or not the user can modify the launcher feed on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherFeedAllowUserModification property.
    */
    public function setMicrosoftLauncherFeedAllowUserModification(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherFeedAllowUserModification', $value);
    }

    /**
     * Sets the microsoftLauncherFeedEnabled property value. Indicates whether or not you want to enable the launcher feed on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherFeedEnabled property.
    */
    public function setMicrosoftLauncherFeedEnabled(?bool $value): void {
        $this->getBackingStore()->set('microsoftLauncherFeedEnabled', $value);
    }

    /**
     * Sets the microsoftLauncherSearchBarPlacementConfiguration property value. Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
     *  @param MicrosoftLauncherSearchBarPlacement|null $value Value to set for the microsoftLauncherSearchBarPlacementConfiguration property.
    */
    public function setMicrosoftLauncherSearchBarPlacementConfiguration(?MicrosoftLauncherSearchBarPlacement $value): void {
        $this->getBackingStore()->set('microsoftLauncherSearchBarPlacementConfiguration', $value);
    }

    /**
     * Sets the networkEscapeHatchAllowed property value. Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
     *  @param bool|null $value Value to set for the networkEscapeHatchAllowed property.
    */
    public function setNetworkEscapeHatchAllowed(?bool $value): void {
        $this->getBackingStore()->set('networkEscapeHatchAllowed', $value);
    }

    /**
     * Sets the nfcBlockOutgoingBeam property value. Indicates whether or not to block NFC outgoing beam.
     *  @param bool|null $value Value to set for the nfcBlockOutgoingBeam property.
    */
    public function setNfcBlockOutgoingBeam(?bool $value): void {
        $this->getBackingStore()->set('nfcBlockOutgoingBeam', $value);
    }

    /**
     * Sets the passwordBlockKeyguard property value. Indicates whether or not the keyguard is disabled.
     *  @param bool|null $value Value to set for the passwordBlockKeyguard property.
    */
    public function setPasswordBlockKeyguard(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockKeyguard', $value);
    }

    /**
     * Sets the passwordBlockKeyguardFeatures property value. List of device keyguard features to block. This collection can contain a maximum of 11 elements.
     *  @param array<AndroidKeyguardFeature>|null $value Value to set for the passwordBlockKeyguardFeatures property.
    */
    public function setPasswordBlockKeyguardFeatures(?array $value): void {
        $this->getBackingStore()->set('passwordBlockKeyguardFeatures', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumLetterCharacters property.
    */
    public function setPasswordMinimumLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower case characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumLowerCaseCharacters property.
    */
    public function setPasswordMinimumLowerCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLowerCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumNonLetterCharacters property.
    */
    public function setPasswordMinimumNonLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNonLetterCharacters', $value);
    }

    /**
     * Sets the passwordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumNumericCharacters property.
    */
    public function setPasswordMinimumNumericCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumNumericCharacters', $value);
    }

    /**
     * Sets the passwordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumSymbolCharacters property.
    */
    public function setPasswordMinimumSymbolCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumSymbolCharacters', $value);
    }

    /**
     * Sets the passwordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper case letter characters required for device password. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordMinimumUpperCaseCharacters property.
    */
    public function setPasswordMinimumUpperCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumUpperCaseCharacters', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordCountToBlock property value. Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordCountToBlock property.
    */
    public function setPasswordPreviousPasswordCountToBlock(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordCountToBlock', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordRequireUnlock property value. Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     *  @param AndroidDeviceOwnerRequiredPasswordUnlock|null $value Value to set for the passwordRequireUnlock property.
    */
    public function setPasswordRequireUnlock(?AndroidDeviceOwnerRequiredPasswordUnlock $value): void {
        $this->getBackingStore()->set('passwordRequireUnlock', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the personalProfileAppsAllowInstallFromUnknownSources property value. Indicates whether the user can install apps from unknown sources on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileAppsAllowInstallFromUnknownSources property.
    */
    public function setPersonalProfileAppsAllowInstallFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('personalProfileAppsAllowInstallFromUnknownSources', $value);
    }

    /**
     * Sets the personalProfileCameraBlocked property value. Indicates whether to disable the use of the camera on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileCameraBlocked property.
    */
    public function setPersonalProfileCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('personalProfileCameraBlocked', $value);
    }

    /**
     * Sets the personalProfilePersonalApplications property value. Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the personalProfilePersonalApplications property.
    */
    public function setPersonalProfilePersonalApplications(?array $value): void {
        $this->getBackingStore()->set('personalProfilePersonalApplications', $value);
    }

    /**
     * Sets the personalProfilePlayStoreMode property value. Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
     *  @param PersonalProfilePersonalPlayStoreMode|null $value Value to set for the personalProfilePlayStoreMode property.
    */
    public function setPersonalProfilePlayStoreMode(?PersonalProfilePersonalPlayStoreMode $value): void {
        $this->getBackingStore()->set('personalProfilePlayStoreMode', $value);
    }

    /**
     * Sets the personalProfileScreenCaptureBlocked property value. Indicates whether to disable the capability to take screenshots on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileScreenCaptureBlocked property.
    */
    public function setPersonalProfileScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('personalProfileScreenCaptureBlocked', $value);
    }

    /**
     * Sets the playStoreMode property value. Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
     *  @param AndroidDeviceOwnerPlayStoreMode|null $value Value to set for the playStoreMode property.
    */
    public function setPlayStoreMode(?AndroidDeviceOwnerPlayStoreMode $value): void {
        $this->getBackingStore()->set('playStoreMode', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the securityCommonCriteriaModeEnabled property value. Represents the security common criteria mode enabled provided to users when they attempt to modify managed settings on their device.
     *  @param bool|null $value Value to set for the securityCommonCriteriaModeEnabled property.
    */
    public function setSecurityCommonCriteriaModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('securityCommonCriteriaModeEnabled', $value);
    }

    /**
     * Sets the securityDeveloperSettingsEnabled property value. Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
     *  @param bool|null $value Value to set for the securityDeveloperSettingsEnabled property.
    */
    public function setSecurityDeveloperSettingsEnabled(?bool $value): void {
        $this->getBackingStore()->set('securityDeveloperSettingsEnabled', $value);
    }

    /**
     * Sets the securityRequireVerifyApps property value. Indicates whether or not verify apps is required.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value): void {
        $this->getBackingStore()->set('securityRequireVerifyApps', $value);
    }

    /**
     * Sets the shortHelpText property value. Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
     *  @param AndroidDeviceOwnerUserFacingMessage|null $value Value to set for the shortHelpText property.
    */
    public function setShortHelpText(?AndroidDeviceOwnerUserFacingMessage $value): void {
        $this->getBackingStore()->set('shortHelpText', $value);
    }

    /**
     * Sets the statusBarBlocked property value. Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
     *  @param bool|null $value Value to set for the statusBarBlocked property.
    */
    public function setStatusBarBlocked(?bool $value): void {
        $this->getBackingStore()->set('statusBarBlocked', $value);
    }

    /**
     * Sets the stayOnModes property value. List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
     *  @param array<AndroidDeviceOwnerBatteryPluggedMode>|null $value Value to set for the stayOnModes property.
    */
    public function setStayOnModes(?array $value): void {
        $this->getBackingStore()->set('stayOnModes', $value);
    }

    /**
     * Sets the storageAllowUsb property value. Indicates whether or not to allow USB mass storage.
     *  @param bool|null $value Value to set for the storageAllowUsb property.
    */
    public function setStorageAllowUsb(?bool $value): void {
        $this->getBackingStore()->set('storageAllowUsb', $value);
    }

    /**
     * Sets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     *  @param bool|null $value Value to set for the storageBlockExternalMedia property.
    */
    public function setStorageBlockExternalMedia(?bool $value): void {
        $this->getBackingStore()->set('storageBlockExternalMedia', $value);
    }

    /**
     * Sets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     *  @param bool|null $value Value to set for the storageBlockUsbFileTransfer property.
    */
    public function setStorageBlockUsbFileTransfer(?bool $value): void {
        $this->getBackingStore()->set('storageBlockUsbFileTransfer', $value);
    }

    /**
     * Sets the systemUpdateFreezePeriods property value. Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerSystemUpdateFreezePeriod>|null $value Value to set for the systemUpdateFreezePeriods property.
    */
    public function setSystemUpdateFreezePeriods(?array $value): void {
        $this->getBackingStore()->set('systemUpdateFreezePeriods', $value);
    }

    /**
     * Sets the systemUpdateInstallType property value. The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
     *  @param AndroidDeviceOwnerSystemUpdateInstallType|null $value Value to set for the systemUpdateInstallType property.
    */
    public function setSystemUpdateInstallType(?AndroidDeviceOwnerSystemUpdateInstallType $value): void {
        $this->getBackingStore()->set('systemUpdateInstallType', $value);
    }

    /**
     * Sets the systemUpdateWindowEndMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
     *  @param int|null $value Value to set for the systemUpdateWindowEndMinutesAfterMidnight property.
    */
    public function setSystemUpdateWindowEndMinutesAfterMidnight(?int $value): void {
        $this->getBackingStore()->set('systemUpdateWindowEndMinutesAfterMidnight', $value);
    }

    /**
     * Sets the systemUpdateWindowStartMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
     *  @param int|null $value Value to set for the systemUpdateWindowStartMinutesAfterMidnight property.
    */
    public function setSystemUpdateWindowStartMinutesAfterMidnight(?int $value): void {
        $this->getBackingStore()->set('systemUpdateWindowStartMinutesAfterMidnight', $value);
    }

    /**
     * Sets the systemWindowsBlocked property value. Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
     *  @param bool|null $value Value to set for the systemWindowsBlocked property.
    */
    public function setSystemWindowsBlocked(?bool $value): void {
        $this->getBackingStore()->set('systemWindowsBlocked', $value);
    }

    /**
     * Sets the usersBlockAdd property value. Indicates whether or not adding users and profiles is disabled.
     *  @param bool|null $value Value to set for the usersBlockAdd property.
    */
    public function setUsersBlockAdd(?bool $value): void {
        $this->getBackingStore()->set('usersBlockAdd', $value);
    }

    /**
     * Sets the usersBlockRemove property value. Indicates whether or not to disable removing other users from the device.
     *  @param bool|null $value Value to set for the usersBlockRemove property.
    */
    public function setUsersBlockRemove(?bool $value): void {
        $this->getBackingStore()->set('usersBlockRemove', $value);
    }

    /**
     * Sets the volumeBlockAdjustment property value. Indicates whether or not adjusting the master volume is disabled.
     *  @param bool|null $value Value to set for the volumeBlockAdjustment property.
    */
    public function setVolumeBlockAdjustment(?bool $value): void {
        $this->getBackingStore()->set('volumeBlockAdjustment', $value);
    }

    /**
     * Sets the vpnAlwaysOnLockdownMode property value. If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
     *  @param bool|null $value Value to set for the vpnAlwaysOnLockdownMode property.
    */
    public function setVpnAlwaysOnLockdownMode(?bool $value): void {
        $this->getBackingStore()->set('vpnAlwaysOnLockdownMode', $value);
    }

    /**
     * Sets the vpnAlwaysOnPackageIdentifier property value. Android app package name for app that will handle an always-on VPN connection.
     *  @param string|null $value Value to set for the vpnAlwaysOnPackageIdentifier property.
    */
    public function setVpnAlwaysOnPackageIdentifier(?string $value): void {
        $this->getBackingStore()->set('vpnAlwaysOnPackageIdentifier', $value);
    }

    /**
     * Sets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     *  @param bool|null $value Value to set for the wifiBlockEditConfigurations property.
    */
    public function setWifiBlockEditConfigurations(?bool $value): void {
        $this->getBackingStore()->set('wifiBlockEditConfigurations', $value);
    }

    /**
     * Sets the wifiBlockEditPolicyDefinedConfigurations property value. Indicates whether or not to block the user from editing just the networks defined by the policy.
     *  @param bool|null $value Value to set for the wifiBlockEditPolicyDefinedConfigurations property.
    */
    public function setWifiBlockEditPolicyDefinedConfigurations(?bool $value): void {
        $this->getBackingStore()->set('wifiBlockEditPolicyDefinedConfigurations', $value);
    }

    /**
     * Sets the workProfilePasswordExpirationDays property value. Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
     *  @param int|null $value Value to set for the workProfilePasswordExpirationDays property.
    */
    public function setWorkProfilePasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordExpirationDays', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Indicates the minimum length of the work profile password. Valid values 4 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumLength', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLetterCharacters property.
    */
    public function setWorkProfilePasswordMinimumLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumLetterCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLowerCaseCharacters property.
    */
    public function setWorkProfilePasswordMinimumLowerCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumLowerCaseCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumNonLetterCharacters property.
    */
    public function setWorkProfilePasswordMinimumNonLetterCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumNonLetterCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumNumericCharacters property.
    */
    public function setWorkProfilePasswordMinimumNumericCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumNumericCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumSymbolCharacters property.
    */
    public function setWorkProfilePasswordMinimumSymbolCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumSymbolCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumUpperCaseCharacters property.
    */
    public function setWorkProfilePasswordMinimumUpperCaseCharacters(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordMinimumUpperCaseCharacters', $value);
    }

    /**
     * Sets the workProfilePasswordPreviousPasswordCountToBlock property value. Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     *  @param int|null $value Value to set for the workProfilePasswordPreviousPasswordCountToBlock property.
    */
    public function setWorkProfilePasswordPreviousPasswordCountToBlock(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordPreviousPasswordCountToBlock', $value);
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value): void {
        $this->getBackingStore()->set('workProfilePasswordRequiredType', $value);
    }

    /**
     * Sets the workProfilePasswordRequireUnlock property value. Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     *  @param AndroidDeviceOwnerRequiredPasswordUnlock|null $value Value to set for the workProfilePasswordRequireUnlock property.
    */
    public function setWorkProfilePasswordRequireUnlock(?AndroidDeviceOwnerRequiredPasswordUnlock $value): void {
        $this->getBackingStore()->set('workProfilePasswordRequireUnlock', $value);
    }

    /**
     * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
     *  @param int|null $value Value to set for the workProfilePasswordSignInFailureCountBeforeFactoryReset property.
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('workProfilePasswordSignInFailureCountBeforeFactoryReset', $value);
    }

}
