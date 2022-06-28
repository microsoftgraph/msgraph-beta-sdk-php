<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerGeneralDeviceConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $accountsBlockModification Indicates whether or not adding or removing accounts is disabled.
    */
    private ?bool $accountsBlockModification = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $appsAllowInstallFromUnknownSources Indicates whether or not the user is allowed to enable to unknown sources setting.
    */
    private ?bool $appsAllowInstallFromUnknownSources = null;
    
    /**
     * @var AndroidDeviceOwnerAppAutoUpdatePolicyType|null $appsAutoUpdatePolicy Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
    */
    private ?AndroidDeviceOwnerAppAutoUpdatePolicyType $appsAutoUpdatePolicy = null;
    
    /**
     * @var AndroidDeviceOwnerDefaultAppPermissionPolicyType|null $appsDefaultPermissionPolicy Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
    */
    private ?AndroidDeviceOwnerDefaultAppPermissionPolicyType $appsDefaultPermissionPolicy = null;
    
    /**
     * @var bool|null $appsRecommendSkippingFirstUseHints Whether or not to recommend all apps skip any first-time-use hints they may have added.
    */
    private ?bool $appsRecommendSkippingFirstUseHints = null;
    
    /**
     * @var array<AppListItem>|null $azureAdSharedDeviceDataClearApps A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
    */
    private ?array $azureAdSharedDeviceDataClearApps = null;
    
    /**
     * @var bool|null $bluetoothBlockConfiguration Indicates whether or not to block a user from configuring bluetooth.
    */
    private ?bool $bluetoothBlockConfiguration = null;
    
    /**
     * @var bool|null $bluetoothBlockContactSharing Indicates whether or not to block a user from sharing contacts via bluetooth.
    */
    private ?bool $bluetoothBlockContactSharing = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to disable the use of the camera.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockWiFiTethering Indicates whether or not to block Wi-Fi tethering.
    */
    private ?bool $cellularBlockWiFiTethering = null;
    
    /**
     * @var bool|null $certificateCredentialConfigurationDisabled Indicates whether or not to block users from any certificate credential configuration.
    */
    private ?bool $certificateCredentialConfigurationDisabled = null;
    
    /**
     * @var bool|null $crossProfilePoliciesAllowCopyPaste Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
    */
    private ?bool $crossProfilePoliciesAllowCopyPaste = null;
    
    /**
     * @var AndroidDeviceOwnerCrossProfileDataSharing|null $crossProfilePoliciesAllowDataSharing Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
    */
    private ?AndroidDeviceOwnerCrossProfileDataSharing $crossProfilePoliciesAllowDataSharing = null;
    
    /**
     * @var bool|null $crossProfilePoliciesShowWorkContactsInPersonalProfile Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
    */
    private ?bool $crossProfilePoliciesShowWorkContactsInPersonalProfile = null;
    
    /**
     * @var bool|null $dataRoamingBlocked Indicates whether or not to block a user from data roaming.
    */
    private ?bool $dataRoamingBlocked = null;
    
    /**
     * @var bool|null $dateTimeConfigurationBlocked Indicates whether or not to block the user from manually changing the date or time on the device
    */
    private ?bool $dateTimeConfigurationBlocked = null;
    
    /**
     * @var AndroidDeviceOwnerUserFacingMessage|null $detailedHelpText Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
    */
    private ?AndroidDeviceOwnerUserFacingMessage $detailedHelpText = null;
    
    /**
     * @var AndroidDeviceOwnerEnrollmentProfileType|null $enrollmentProfile Indicates which enrollment profile you want to configure. Possible values are: notConfigured, dedicatedDevice, fullyManaged.
    */
    private ?AndroidDeviceOwnerEnrollmentProfileType $enrollmentProfile = null;
    
    /**
     * @var bool|null $factoryResetBlocked Indicates whether or not the factory reset option in settings is disabled.
    */
    private ?bool $factoryResetBlocked = null;
    
    /**
     * @var array<string>|null $factoryResetDeviceAdministratorEmails List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
    */
    private ?array $factoryResetDeviceAdministratorEmails = null;
    
    /**
     * @var AndroidDeviceOwnerGlobalProxy|null $globalProxy Proxy is set up directly with host, port and excluded hosts.
    */
    private ?AndroidDeviceOwnerGlobalProxy $globalProxy = null;
    
    /**
     * @var bool|null $googleAccountsBlocked Indicates whether or not google accounts will be blocked.
    */
    private ?bool $googleAccountsBlocked = null;
    
    /**
     * @var bool|null $kioskCustomizationDeviceSettingsBlocked Indicates whether a user can access the device's Settings app while in Kiosk Mode.
    */
    private ?bool $kioskCustomizationDeviceSettingsBlocked = null;
    
    /**
     * @var bool|null $kioskCustomizationPowerButtonActionsBlocked Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
    */
    private ?bool $kioskCustomizationPowerButtonActionsBlocked = null;
    
    /**
     * @var AndroidDeviceOwnerKioskCustomizationStatusBar|null $kioskCustomizationStatusBar Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
    */
    private ?AndroidDeviceOwnerKioskCustomizationStatusBar $kioskCustomizationStatusBar = null;
    
    /**
     * @var bool|null $kioskCustomizationSystemErrorWarnings Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
    */
    private ?bool $kioskCustomizationSystemErrorWarnings = null;
    
    /**
     * @var AndroidDeviceOwnerKioskCustomizationSystemNavigation|null $kioskCustomizationSystemNavigation Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
    */
    private ?AndroidDeviceOwnerKioskCustomizationSystemNavigation $kioskCustomizationSystemNavigation = null;
    
    /**
     * @var bool|null $kioskModeAppOrderEnabled Whether or not to enable app ordering in Kiosk Mode.
    */
    private ?bool $kioskModeAppOrderEnabled = null;
    
    /**
     * @var array<AndroidDeviceOwnerKioskModeAppPositionItem>|null $kioskModeAppPositions The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
    */
    private ?array $kioskModeAppPositions = null;
    
    /**
     * @var array<AppListItem>|null $kioskModeApps A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
    */
    private ?array $kioskModeApps = null;
    
    /**
     * @var bool|null $kioskModeAppsInFolderOrderedByName Whether or not to alphabetize applications within a folder in Kiosk Mode.
    */
    private ?bool $kioskModeAppsInFolderOrderedByName = null;
    
    /**
     * @var bool|null $kioskModeBluetoothConfigurationEnabled Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
    */
    private ?bool $kioskModeBluetoothConfigurationEnabled = null;
    
    /**
     * @var bool|null $kioskModeDebugMenuEasyAccessEnabled Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
    */
    private ?bool $kioskModeDebugMenuEasyAccessEnabled = null;
    
    /**
     * @var string|null $kioskModeExitCode Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
    */
    private ?string $kioskModeExitCode = null;
    
    /**
     * @var bool|null $kioskModeFlashlightConfigurationEnabled Whether or not to allow a user to use the flashlight in Kiosk Mode.
    */
    private ?bool $kioskModeFlashlightConfigurationEnabled = null;
    
    /**
     * @var AndroidDeviceOwnerKioskModeFolderIcon|null $kioskModeFolderIcon Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
    */
    private ?AndroidDeviceOwnerKioskModeFolderIcon $kioskModeFolderIcon = null;
    
    /**
     * @var int|null $kioskModeGridHeight Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    */
    private ?int $kioskModeGridHeight = null;
    
    /**
     * @var int|null $kioskModeGridWidth Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
    */
    private ?int $kioskModeGridWidth = null;
    
    /**
     * @var AndroidDeviceOwnerKioskModeIconSize|null $kioskModeIconSize Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
    */
    private ?AndroidDeviceOwnerKioskModeIconSize $kioskModeIconSize = null;
    
    /**
     * @var bool|null $kioskModeLockHomeScreen Whether or not to lock home screen to the end user in Kiosk Mode.
    */
    private ?bool $kioskModeLockHomeScreen = null;
    
    /**
     * @var array<AndroidDeviceOwnerKioskModeManagedFolder>|null $kioskModeManagedFolders A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
    */
    private ?array $kioskModeManagedFolders = null;
    
    /**
     * @var bool|null $kioskModeManagedHomeScreenAutoSignout Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
    */
    private ?bool $kioskModeManagedHomeScreenAutoSignout = null;
    
    /**
     * @var int|null $kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
    */
    private ?int $kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds = null;
    
    /**
     * @var int|null $kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
    */
    private ?int $kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds = null;
    
    /**
     * @var KioskModeManagedHomeScreenPinComplexity|null $kioskModeManagedHomeScreenPinComplexity Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
    */
    private ?KioskModeManagedHomeScreenPinComplexity $kioskModeManagedHomeScreenPinComplexity = null;
    
    /**
     * @var bool|null $kioskModeManagedHomeScreenPinRequired Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
    */
    private ?bool $kioskModeManagedHomeScreenPinRequired = null;
    
    /**
     * @var bool|null $kioskModeManagedHomeScreenPinRequiredToResume Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
    */
    private ?bool $kioskModeManagedHomeScreenPinRequiredToResume = null;
    
    /**
     * @var string|null $kioskModeManagedHomeScreenSignInBackground Custom URL background for sign-in screen for Managed Home Screen.
    */
    private ?string $kioskModeManagedHomeScreenSignInBackground = null;
    
    /**
     * @var string|null $kioskModeManagedHomeScreenSignInBrandingLogo Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
    */
    private ?string $kioskModeManagedHomeScreenSignInBrandingLogo = null;
    
    /**
     * @var bool|null $kioskModeManagedHomeScreenSignInEnabled Whether or not show sign-in screen for Managed Home Screen.
    */
    private ?bool $kioskModeManagedHomeScreenSignInEnabled = null;
    
    /**
     * @var bool|null $kioskModeManagedSettingsEntryDisabled Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
    */
    private ?bool $kioskModeManagedSettingsEntryDisabled = null;
    
    /**
     * @var bool|null $kioskModeMediaVolumeConfigurationEnabled Whether or not to allow a user to change the media volume in Kiosk Mode.
    */
    private ?bool $kioskModeMediaVolumeConfigurationEnabled = null;
    
    /**
     * @var AndroidDeviceOwnerKioskModeScreenOrientation|null $kioskModeScreenOrientation Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
    */
    private ?AndroidDeviceOwnerKioskModeScreenOrientation $kioskModeScreenOrientation = null;
    
    /**
     * @var bool|null $kioskModeScreenSaverConfigurationEnabled Whether or not to enable screen saver mode or not in Kiosk Mode.
    */
    private ?bool $kioskModeScreenSaverConfigurationEnabled = null;
    
    /**
     * @var bool|null $kioskModeScreenSaverDetectMediaDisabled Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
    */
    private ?bool $kioskModeScreenSaverDetectMediaDisabled = null;
    
    /**
     * @var int|null $kioskModeScreenSaverDisplayTimeInSeconds The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
    */
    private ?int $kioskModeScreenSaverDisplayTimeInSeconds = null;
    
    /**
     * @var string|null $kioskModeScreenSaverImageUrl URL for an image that will be the device's screen saver in Kiosk Mode.
    */
    private ?string $kioskModeScreenSaverImageUrl = null;
    
    /**
     * @var int|null $kioskModeScreenSaverStartDelayInSeconds The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
    */
    private ?int $kioskModeScreenSaverStartDelayInSeconds = null;
    
    /**
     * @var bool|null $kioskModeShowAppNotificationBadge Whether or not to display application notification badges in Kiosk Mode.
    */
    private ?bool $kioskModeShowAppNotificationBadge = null;
    
    /**
     * @var bool|null $kioskModeShowDeviceInfo Whether or not to allow a user to access basic device information.
    */
    private ?bool $kioskModeShowDeviceInfo = null;
    
    /**
     * @var KioskModeType|null $kioskModeUseManagedHomeScreenApp Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
    */
    private ?KioskModeType $kioskModeUseManagedHomeScreenApp = null;
    
    /**
     * @var bool|null $kioskModeVirtualHomeButtonEnabled Whether or not to display a virtual home button when the device is in Kiosk Mode.
    */
    private ?bool $kioskModeVirtualHomeButtonEnabled = null;
    
    /**
     * @var AndroidDeviceOwnerVirtualHomeButtonType|null $kioskModeVirtualHomeButtonType Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
    */
    private ?AndroidDeviceOwnerVirtualHomeButtonType $kioskModeVirtualHomeButtonType = null;
    
    /**
     * @var string|null $kioskModeWallpaperUrl URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
    */
    private ?string $kioskModeWallpaperUrl = null;
    
    /**
     * @var array<string>|null $kioskModeWifiAllowedSsids The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
    */
    private ?array $kioskModeWifiAllowedSsids = null;
    
    /**
     * @var bool|null $kioskModeWiFiConfigurationEnabled Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
    */
    private ?bool $kioskModeWiFiConfigurationEnabled = null;
    
    /**
     * @var bool|null $microphoneForceMute Indicates whether or not to block unmuting the microphone on the device.
    */
    private ?bool $microphoneForceMute = null;
    
    /**
     * @var bool|null $microsoftLauncherConfigurationEnabled Indicates whether or not to you want configure Microsoft Launcher.
    */
    private ?bool $microsoftLauncherConfigurationEnabled = null;
    
    /**
     * @var bool|null $microsoftLauncherCustomWallpaperAllowUserModification Indicates whether or not the user can modify the wallpaper to personalize their device.
    */
    private ?bool $microsoftLauncherCustomWallpaperAllowUserModification = null;
    
    /**
     * @var bool|null $microsoftLauncherCustomWallpaperEnabled Indicates whether or not to configure the wallpaper on the targeted devices.
    */
    private ?bool $microsoftLauncherCustomWallpaperEnabled = null;
    
    /**
     * @var string|null $microsoftLauncherCustomWallpaperImageUrl Indicates the URL for the image file to use as the wallpaper on the targeted devices.
    */
    private ?string $microsoftLauncherCustomWallpaperImageUrl = null;
    
    /**
     * @var bool|null $microsoftLauncherDockPresenceAllowUserModification Indicates whether or not the user can modify the device dock configuration on the device.
    */
    private ?bool $microsoftLauncherDockPresenceAllowUserModification = null;
    
    /**
     * @var MicrosoftLauncherDockPresence|null $microsoftLauncherDockPresenceConfiguration Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
    */
    private ?MicrosoftLauncherDockPresence $microsoftLauncherDockPresenceConfiguration = null;
    
    /**
     * @var bool|null $microsoftLauncherFeedAllowUserModification Indicates whether or not the user can modify the launcher feed on the device.
    */
    private ?bool $microsoftLauncherFeedAllowUserModification = null;
    
    /**
     * @var bool|null $microsoftLauncherFeedEnabled Indicates whether or not you want to enable the launcher feed on the device.
    */
    private ?bool $microsoftLauncherFeedEnabled = null;
    
    /**
     * @var MicrosoftLauncherSearchBarPlacement|null $microsoftLauncherSearchBarPlacementConfiguration Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
    */
    private ?MicrosoftLauncherSearchBarPlacement $microsoftLauncherSearchBarPlacementConfiguration = null;
    
    /**
     * @var bool|null $networkEscapeHatchAllowed Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
    */
    private ?bool $networkEscapeHatchAllowed = null;
    
    /**
     * @var bool|null $nfcBlockOutgoingBeam Indicates whether or not to block NFC outgoing beam.
    */
    private ?bool $nfcBlockOutgoingBeam = null;
    
    /**
     * @var bool|null $passwordBlockKeyguard Indicates whether or not the keyguard is disabled.
    */
    private ?bool $passwordBlockKeyguard = null;
    
    /**
     * @var array<string>|null $passwordBlockKeyguardFeatures List of device keyguard features to block. This collection can contain a maximum of 7 elements.
    */
    private ?array $passwordBlockKeyguardFeatures = null;
    
    /**
     * @var int|null $passwordExpirationDays Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Indicates the minimum length of the password required on the device. Valid values 4 to 16
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
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordCountToBlock Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    */
    private ?int $passwordPreviousPasswordCountToBlock = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordType|null $passwordRequiredType Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    */
    private ?AndroidDeviceOwnerRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordUnlock|null $passwordRequireUnlock Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    */
    private ?AndroidDeviceOwnerRequiredPasswordUnlock $passwordRequireUnlock = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $personalProfileAppsAllowInstallFromUnknownSources Indicates whether the user can install apps from unknown sources on the personal profile.
    */
    private ?bool $personalProfileAppsAllowInstallFromUnknownSources = null;
    
    /**
     * @var bool|null $personalProfileCameraBlocked Indicates whether to disable the use of the camera on the personal profile.
    */
    private ?bool $personalProfileCameraBlocked = null;
    
    /**
     * @var array<AppListItem>|null $personalProfilePersonalApplications Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
    */
    private ?array $personalProfilePersonalApplications = null;
    
    /**
     * @var PersonalProfilePersonalPlayStoreMode|null $personalProfilePlayStoreMode Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
    */
    private ?PersonalProfilePersonalPlayStoreMode $personalProfilePlayStoreMode = null;
    
    /**
     * @var bool|null $personalProfileScreenCaptureBlocked Indicates whether to disable the capability to take screenshots on the personal profile.
    */
    private ?bool $personalProfileScreenCaptureBlocked = null;
    
    /**
     * @var AndroidDeviceOwnerPlayStoreMode|null $playStoreMode Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
    */
    private ?AndroidDeviceOwnerPlayStoreMode $playStoreMode = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to disable the capability to take screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $securityDeveloperSettingsEnabled Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
    */
    private ?bool $securityDeveloperSettingsEnabled = null;
    
    /**
     * @var bool|null $securityRequireVerifyApps Indicates whether or not verify apps is required.
    */
    private ?bool $securityRequireVerifyApps = null;
    
    /**
     * @var AndroidDeviceOwnerUserFacingMessage|null $shortHelpText Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
    */
    private ?AndroidDeviceOwnerUserFacingMessage $shortHelpText = null;
    
    /**
     * @var bool|null $statusBarBlocked Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
    */
    private ?bool $statusBarBlocked = null;
    
    /**
     * @var array<string>|null $stayOnModes List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
    */
    private ?array $stayOnModes = null;
    
    /**
     * @var bool|null $storageAllowUsb Indicates whether or not to allow USB mass storage.
    */
    private ?bool $storageAllowUsb = null;
    
    /**
     * @var bool|null $storageBlockExternalMedia Indicates whether or not to block external media.
    */
    private ?bool $storageBlockExternalMedia = null;
    
    /**
     * @var bool|null $storageBlockUsbFileTransfer Indicates whether or not to block USB file transfer.
    */
    private ?bool $storageBlockUsbFileTransfer = null;
    
    /**
     * @var array<AndroidDeviceOwnerSystemUpdateFreezePeriod>|null $systemUpdateFreezePeriods Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
    */
    private ?array $systemUpdateFreezePeriods = null;
    
    /**
     * @var AndroidDeviceOwnerSystemUpdateInstallType|null $systemUpdateInstallType The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
    */
    private ?AndroidDeviceOwnerSystemUpdateInstallType $systemUpdateInstallType = null;
    
    /**
     * @var int|null $systemUpdateWindowEndMinutesAfterMidnight Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
    */
    private ?int $systemUpdateWindowEndMinutesAfterMidnight = null;
    
    /**
     * @var int|null $systemUpdateWindowStartMinutesAfterMidnight Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
    */
    private ?int $systemUpdateWindowStartMinutesAfterMidnight = null;
    
    /**
     * @var bool|null $systemWindowsBlocked Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
    */
    private ?bool $systemWindowsBlocked = null;
    
    /**
     * @var bool|null $usersBlockAdd Indicates whether or not adding users and profiles is disabled.
    */
    private ?bool $usersBlockAdd = null;
    
    /**
     * @var bool|null $usersBlockRemove Indicates whether or not to disable removing other users from the device.
    */
    private ?bool $usersBlockRemove = null;
    
    /**
     * @var bool|null $volumeBlockAdjustment Indicates whether or not adjusting the master volume is disabled.
    */
    private ?bool $volumeBlockAdjustment = null;
    
    /**
     * @var bool|null $vpnAlwaysOnLockdownMode If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
    */
    private ?bool $vpnAlwaysOnLockdownMode = null;
    
    /**
     * @var string|null $vpnAlwaysOnPackageIdentifier Android app package name for app that will handle an always-on VPN connection.
    */
    private ?string $vpnAlwaysOnPackageIdentifier = null;
    
    /**
     * @var bool|null $wifiBlockEditConfigurations Indicates whether or not to block the user from editing the wifi connection settings.
    */
    private ?bool $wifiBlockEditConfigurations = null;
    
    /**
     * @var bool|null $wifiBlockEditPolicyDefinedConfigurations Indicates whether or not to block the user from editing just the networks defined by the policy.
    */
    private ?bool $wifiBlockEditPolicyDefinedConfigurations = null;
    
    /**
     * @var int|null $workProfilePasswordExpirationDays Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
    */
    private ?int $workProfilePasswordExpirationDays = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumLength Indicates the minimum length of the work profile password. Valid values 4 to 16
    */
    private ?int $workProfilePasswordMinimumLength = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumLetterCharacters Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumLowerCaseCharacters Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumLowerCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumNonLetterCharacters Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumNonLetterCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumNumericCharacters Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumNumericCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumSymbolCharacters Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumSymbolCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordMinimumUpperCaseCharacters Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
    */
    private ?int $workProfilePasswordMinimumUpperCaseCharacters = null;
    
    /**
     * @var int|null $workProfilePasswordPreviousPasswordCountToBlock Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
    */
    private ?int $workProfilePasswordPreviousPasswordCountToBlock = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordType|null $workProfilePasswordRequiredType Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
    */
    private ?AndroidDeviceOwnerRequiredPasswordType $workProfilePasswordRequiredType = null;
    
    /**
     * @var AndroidDeviceOwnerRequiredPasswordUnlock|null $workProfilePasswordRequireUnlock Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
    */
    private ?AndroidDeviceOwnerRequiredPasswordUnlock $workProfilePasswordRequireUnlock = null;
    
    /**
     * @var int|null $workProfilePasswordSignInFailureCountBeforeFactoryReset Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
    */
    private ?int $workProfilePasswordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        return $this->accountsBlockModification;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appsAllowInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable to unknown sources setting.
     * @return bool|null
    */
    public function getAppsAllowInstallFromUnknownSources(): ?bool {
        return $this->appsAllowInstallFromUnknownSources;
    }

    /**
     * Gets the appsAutoUpdatePolicy property value. Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
     * @return AndroidDeviceOwnerAppAutoUpdatePolicyType|null
    */
    public function getAppsAutoUpdatePolicy(): ?AndroidDeviceOwnerAppAutoUpdatePolicyType {
        return $this->appsAutoUpdatePolicy;
    }

    /**
     * Gets the appsDefaultPermissionPolicy property value. Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     * @return AndroidDeviceOwnerDefaultAppPermissionPolicyType|null
    */
    public function getAppsDefaultPermissionPolicy(): ?AndroidDeviceOwnerDefaultAppPermissionPolicyType {
        return $this->appsDefaultPermissionPolicy;
    }

    /**
     * Gets the appsRecommendSkippingFirstUseHints property value. Whether or not to recommend all apps skip any first-time-use hints they may have added.
     * @return bool|null
    */
    public function getAppsRecommendSkippingFirstUseHints(): ?bool {
        return $this->appsRecommendSkippingFirstUseHints;
    }

    /**
     * Gets the azureAdSharedDeviceDataClearApps property value. A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAzureAdSharedDeviceDataClearApps(): ?array {
        return $this->azureAdSharedDeviceDataClearApps;
    }

    /**
     * Gets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockConfiguration(): ?bool {
        return $this->bluetoothBlockConfiguration;
    }

    /**
     * Gets the bluetoothBlockContactSharing property value. Indicates whether or not to block a user from sharing contacts via bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlockContactSharing(): ?bool {
        return $this->bluetoothBlockContactSharing;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockWiFiTethering property value. Indicates whether or not to block Wi-Fi tethering.
     * @return bool|null
    */
    public function getCellularBlockWiFiTethering(): ?bool {
        return $this->cellularBlockWiFiTethering;
    }

    /**
     * Gets the certificateCredentialConfigurationDisabled property value. Indicates whether or not to block users from any certificate credential configuration.
     * @return bool|null
    */
    public function getCertificateCredentialConfigurationDisabled(): ?bool {
        return $this->certificateCredentialConfigurationDisabled;
    }

    /**
     * Gets the crossProfilePoliciesAllowCopyPaste property value. Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
     * @return bool|null
    */
    public function getCrossProfilePoliciesAllowCopyPaste(): ?bool {
        return $this->crossProfilePoliciesAllowCopyPaste;
    }

    /**
     * Gets the crossProfilePoliciesAllowDataSharing property value. Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
     * @return AndroidDeviceOwnerCrossProfileDataSharing|null
    */
    public function getCrossProfilePoliciesAllowDataSharing(): ?AndroidDeviceOwnerCrossProfileDataSharing {
        return $this->crossProfilePoliciesAllowDataSharing;
    }

    /**
     * Gets the crossProfilePoliciesShowWorkContactsInPersonalProfile property value. Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
     * @return bool|null
    */
    public function getCrossProfilePoliciesShowWorkContactsInPersonalProfile(): ?bool {
        return $this->crossProfilePoliciesShowWorkContactsInPersonalProfile;
    }

    /**
     * Gets the dataRoamingBlocked property value. Indicates whether or not to block a user from data roaming.
     * @return bool|null
    */
    public function getDataRoamingBlocked(): ?bool {
        return $this->dataRoamingBlocked;
    }

    /**
     * Gets the dateTimeConfigurationBlocked property value. Indicates whether or not to block the user from manually changing the date or time on the device
     * @return bool|null
    */
    public function getDateTimeConfigurationBlocked(): ?bool {
        return $this->dateTimeConfigurationBlocked;
    }

    /**
     * Gets the detailedHelpText property value. Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
     * @return AndroidDeviceOwnerUserFacingMessage|null
    */
    public function getDetailedHelpText(): ?AndroidDeviceOwnerUserFacingMessage {
        return $this->detailedHelpText;
    }

    /**
     * Gets the enrollmentProfile property value. Indicates which enrollment profile you want to configure. Possible values are: notConfigured, dedicatedDevice, fullyManaged.
     * @return AndroidDeviceOwnerEnrollmentProfileType|null
    */
    public function getEnrollmentProfile(): ?AndroidDeviceOwnerEnrollmentProfileType {
        return $this->enrollmentProfile;
    }

    /**
     * Gets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        return $this->factoryResetBlocked;
    }

    /**
     * Gets the factoryResetDeviceAdministratorEmails property value. List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
     * @return array<string>|null
    */
    public function getFactoryResetDeviceAdministratorEmails(): ?array {
        return $this->factoryResetDeviceAdministratorEmails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockModification' => function (ParseNode $n) use ($o) { $o->setAccountsBlockModification($n->getBooleanValue()); },
            'appsAllowInstallFromUnknownSources' => function (ParseNode $n) use ($o) { $o->setAppsAllowInstallFromUnknownSources($n->getBooleanValue()); },
            'appsAutoUpdatePolicy' => function (ParseNode $n) use ($o) { $o->setAppsAutoUpdatePolicy($n->getEnumValue(AndroidDeviceOwnerAppAutoUpdatePolicyType::class)); },
            'appsDefaultPermissionPolicy' => function (ParseNode $n) use ($o) { $o->setAppsDefaultPermissionPolicy($n->getEnumValue(AndroidDeviceOwnerDefaultAppPermissionPolicyType::class)); },
            'appsRecommendSkippingFirstUseHints' => function (ParseNode $n) use ($o) { $o->setAppsRecommendSkippingFirstUseHints($n->getBooleanValue()); },
            'azureAdSharedDeviceDataClearApps' => function (ParseNode $n) use ($o) { $o->setAzureAdSharedDeviceDataClearApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'bluetoothBlockConfiguration' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockConfiguration($n->getBooleanValue()); },
            'bluetoothBlockContactSharing' => function (ParseNode $n) use ($o) { $o->setBluetoothBlockContactSharing($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'cellularBlockWiFiTethering' => function (ParseNode $n) use ($o) { $o->setCellularBlockWiFiTethering($n->getBooleanValue()); },
            'certificateCredentialConfigurationDisabled' => function (ParseNode $n) use ($o) { $o->setCertificateCredentialConfigurationDisabled($n->getBooleanValue()); },
            'crossProfilePoliciesAllowCopyPaste' => function (ParseNode $n) use ($o) { $o->setCrossProfilePoliciesAllowCopyPaste($n->getBooleanValue()); },
            'crossProfilePoliciesAllowDataSharing' => function (ParseNode $n) use ($o) { $o->setCrossProfilePoliciesAllowDataSharing($n->getEnumValue(AndroidDeviceOwnerCrossProfileDataSharing::class)); },
            'crossProfilePoliciesShowWorkContactsInPersonalProfile' => function (ParseNode $n) use ($o) { $o->setCrossProfilePoliciesShowWorkContactsInPersonalProfile($n->getBooleanValue()); },
            'dataRoamingBlocked' => function (ParseNode $n) use ($o) { $o->setDataRoamingBlocked($n->getBooleanValue()); },
            'dateTimeConfigurationBlocked' => function (ParseNode $n) use ($o) { $o->setDateTimeConfigurationBlocked($n->getBooleanValue()); },
            'detailedHelpText' => function (ParseNode $n) use ($o) { $o->setDetailedHelpText($n->getObjectValue(array(AndroidDeviceOwnerUserFacingMessage::class, 'createFromDiscriminatorValue'))); },
            'enrollmentProfile' => function (ParseNode $n) use ($o) { $o->setEnrollmentProfile($n->getEnumValue(AndroidDeviceOwnerEnrollmentProfileType::class)); },
            'factoryResetBlocked' => function (ParseNode $n) use ($o) { $o->setFactoryResetBlocked($n->getBooleanValue()); },
            'factoryResetDeviceAdministratorEmails' => function (ParseNode $n) use ($o) { $o->setFactoryResetDeviceAdministratorEmails($n->getCollectionOfPrimitiveValues()); },
            'globalProxy' => function (ParseNode $n) use ($o) { $o->setGlobalProxy($n->getObjectValue(array(AndroidDeviceOwnerGlobalProxy::class, 'createFromDiscriminatorValue'))); },
            'googleAccountsBlocked' => function (ParseNode $n) use ($o) { $o->setGoogleAccountsBlocked($n->getBooleanValue()); },
            'kioskCustomizationDeviceSettingsBlocked' => function (ParseNode $n) use ($o) { $o->setKioskCustomizationDeviceSettingsBlocked($n->getBooleanValue()); },
            'kioskCustomizationPowerButtonActionsBlocked' => function (ParseNode $n) use ($o) { $o->setKioskCustomizationPowerButtonActionsBlocked($n->getBooleanValue()); },
            'kioskCustomizationStatusBar' => function (ParseNode $n) use ($o) { $o->setKioskCustomizationStatusBar($n->getEnumValue(AndroidDeviceOwnerKioskCustomizationStatusBar::class)); },
            'kioskCustomizationSystemErrorWarnings' => function (ParseNode $n) use ($o) { $o->setKioskCustomizationSystemErrorWarnings($n->getBooleanValue()); },
            'kioskCustomizationSystemNavigation' => function (ParseNode $n) use ($o) { $o->setKioskCustomizationSystemNavigation($n->getEnumValue(AndroidDeviceOwnerKioskCustomizationSystemNavigation::class)); },
            'kioskModeAppOrderEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeAppOrderEnabled($n->getBooleanValue()); },
            'kioskModeAppPositions' => function (ParseNode $n) use ($o) { $o->setKioskModeAppPositions($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerKioskModeAppPositionItem::class, 'createFromDiscriminatorValue'))); },
            'kioskModeApps' => function (ParseNode $n) use ($o) { $o->setKioskModeApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'kioskModeAppsInFolderOrderedByName' => function (ParseNode $n) use ($o) { $o->setKioskModeAppsInFolderOrderedByName($n->getBooleanValue()); },
            'kioskModeBluetoothConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeBluetoothConfigurationEnabled($n->getBooleanValue()); },
            'kioskModeDebugMenuEasyAccessEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeDebugMenuEasyAccessEnabled($n->getBooleanValue()); },
            'kioskModeExitCode' => function (ParseNode $n) use ($o) { $o->setKioskModeExitCode($n->getStringValue()); },
            'kioskModeFlashlightConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeFlashlightConfigurationEnabled($n->getBooleanValue()); },
            'kioskModeFolderIcon' => function (ParseNode $n) use ($o) { $o->setKioskModeFolderIcon($n->getEnumValue(AndroidDeviceOwnerKioskModeFolderIcon::class)); },
            'kioskModeGridHeight' => function (ParseNode $n) use ($o) { $o->setKioskModeGridHeight($n->getIntegerValue()); },
            'kioskModeGridWidth' => function (ParseNode $n) use ($o) { $o->setKioskModeGridWidth($n->getIntegerValue()); },
            'kioskModeIconSize' => function (ParseNode $n) use ($o) { $o->setKioskModeIconSize($n->getEnumValue(AndroidDeviceOwnerKioskModeIconSize::class)); },
            'kioskModeLockHomeScreen' => function (ParseNode $n) use ($o) { $o->setKioskModeLockHomeScreen($n->getBooleanValue()); },
            'kioskModeManagedFolders' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedFolders($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerKioskModeManagedFolder::class, 'createFromDiscriminatorValue'))); },
            'kioskModeManagedHomeScreenAutoSignout' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenAutoSignout($n->getBooleanValue()); },
            'kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds($n->getIntegerValue()); },
            'kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds($n->getIntegerValue()); },
            'kioskModeManagedHomeScreenPinComplexity' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenPinComplexity($n->getEnumValue(KioskModeManagedHomeScreenPinComplexity::class)); },
            'kioskModeManagedHomeScreenPinRequired' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenPinRequired($n->getBooleanValue()); },
            'kioskModeManagedHomeScreenPinRequiredToResume' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenPinRequiredToResume($n->getBooleanValue()); },
            'kioskModeManagedHomeScreenSignInBackground' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenSignInBackground($n->getStringValue()); },
            'kioskModeManagedHomeScreenSignInBrandingLogo' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenSignInBrandingLogo($n->getStringValue()); },
            'kioskModeManagedHomeScreenSignInEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedHomeScreenSignInEnabled($n->getBooleanValue()); },
            'kioskModeManagedSettingsEntryDisabled' => function (ParseNode $n) use ($o) { $o->setKioskModeManagedSettingsEntryDisabled($n->getBooleanValue()); },
            'kioskModeMediaVolumeConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeMediaVolumeConfigurationEnabled($n->getBooleanValue()); },
            'kioskModeScreenOrientation' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenOrientation($n->getEnumValue(AndroidDeviceOwnerKioskModeScreenOrientation::class)); },
            'kioskModeScreenSaverConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenSaverConfigurationEnabled($n->getBooleanValue()); },
            'kioskModeScreenSaverDetectMediaDisabled' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenSaverDetectMediaDisabled($n->getBooleanValue()); },
            'kioskModeScreenSaverDisplayTimeInSeconds' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenSaverDisplayTimeInSeconds($n->getIntegerValue()); },
            'kioskModeScreenSaverImageUrl' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenSaverImageUrl($n->getStringValue()); },
            'kioskModeScreenSaverStartDelayInSeconds' => function (ParseNode $n) use ($o) { $o->setKioskModeScreenSaverStartDelayInSeconds($n->getIntegerValue()); },
            'kioskModeShowAppNotificationBadge' => function (ParseNode $n) use ($o) { $o->setKioskModeShowAppNotificationBadge($n->getBooleanValue()); },
            'kioskModeShowDeviceInfo' => function (ParseNode $n) use ($o) { $o->setKioskModeShowDeviceInfo($n->getBooleanValue()); },
            'kioskModeUseManagedHomeScreenApp' => function (ParseNode $n) use ($o) { $o->setKioskModeUseManagedHomeScreenApp($n->getEnumValue(KioskModeType::class)); },
            'kioskModeVirtualHomeButtonEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeVirtualHomeButtonEnabled($n->getBooleanValue()); },
            'kioskModeVirtualHomeButtonType' => function (ParseNode $n) use ($o) { $o->setKioskModeVirtualHomeButtonType($n->getEnumValue(AndroidDeviceOwnerVirtualHomeButtonType::class)); },
            'kioskModeWallpaperUrl' => function (ParseNode $n) use ($o) { $o->setKioskModeWallpaperUrl($n->getStringValue()); },
            'kioskModeWifiAllowedSsids' => function (ParseNode $n) use ($o) { $o->setKioskModeWifiAllowedSsids($n->getCollectionOfPrimitiveValues()); },
            'kioskModeWiFiConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setKioskModeWiFiConfigurationEnabled($n->getBooleanValue()); },
            'microphoneForceMute' => function (ParseNode $n) use ($o) { $o->setMicrophoneForceMute($n->getBooleanValue()); },
            'microsoftLauncherConfigurationEnabled' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherConfigurationEnabled($n->getBooleanValue()); },
            'microsoftLauncherCustomWallpaperAllowUserModification' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherCustomWallpaperAllowUserModification($n->getBooleanValue()); },
            'microsoftLauncherCustomWallpaperEnabled' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherCustomWallpaperEnabled($n->getBooleanValue()); },
            'microsoftLauncherCustomWallpaperImageUrl' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherCustomWallpaperImageUrl($n->getStringValue()); },
            'microsoftLauncherDockPresenceAllowUserModification' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherDockPresenceAllowUserModification($n->getBooleanValue()); },
            'microsoftLauncherDockPresenceConfiguration' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherDockPresenceConfiguration($n->getEnumValue(MicrosoftLauncherDockPresence::class)); },
            'microsoftLauncherFeedAllowUserModification' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherFeedAllowUserModification($n->getBooleanValue()); },
            'microsoftLauncherFeedEnabled' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherFeedEnabled($n->getBooleanValue()); },
            'microsoftLauncherSearchBarPlacementConfiguration' => function (ParseNode $n) use ($o) { $o->setMicrosoftLauncherSearchBarPlacementConfiguration($n->getEnumValue(MicrosoftLauncherSearchBarPlacement::class)); },
            'networkEscapeHatchAllowed' => function (ParseNode $n) use ($o) { $o->setNetworkEscapeHatchAllowed($n->getBooleanValue()); },
            'nfcBlockOutgoingBeam' => function (ParseNode $n) use ($o) { $o->setNfcBlockOutgoingBeam($n->getBooleanValue()); },
            'passwordBlockKeyguard' => function (ParseNode $n) use ($o) { $o->setPasswordBlockKeyguard($n->getBooleanValue()); },
            'passwordBlockKeyguardFeatures' => function (ParseNode $n) use ($o) { $o->setPasswordBlockKeyguardFeatures($n->getCollectionOfPrimitiveValues()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinimumLetterCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLetterCharacters($n->getIntegerValue()); },
            'passwordMinimumLowerCaseCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLowerCaseCharacters($n->getIntegerValue()); },
            'passwordMinimumNonLetterCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumNonLetterCharacters($n->getIntegerValue()); },
            'passwordMinimumNumericCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumNumericCharacters($n->getIntegerValue()); },
            'passwordMinimumSymbolCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumSymbolCharacters($n->getIntegerValue()); },
            'passwordMinimumUpperCaseCharacters' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumUpperCaseCharacters($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordCountToBlock' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordCountToBlock($n->getIntegerValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)); },
            'passwordRequireUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordRequireUnlock($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordUnlock::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'personalProfileAppsAllowInstallFromUnknownSources' => function (ParseNode $n) use ($o) { $o->setPersonalProfileAppsAllowInstallFromUnknownSources($n->getBooleanValue()); },
            'personalProfileCameraBlocked' => function (ParseNode $n) use ($o) { $o->setPersonalProfileCameraBlocked($n->getBooleanValue()); },
            'personalProfilePersonalApplications' => function (ParseNode $n) use ($o) { $o->setPersonalProfilePersonalApplications($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'personalProfilePlayStoreMode' => function (ParseNode $n) use ($o) { $o->setPersonalProfilePlayStoreMode($n->getEnumValue(PersonalProfilePersonalPlayStoreMode::class)); },
            'personalProfileScreenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setPersonalProfileScreenCaptureBlocked($n->getBooleanValue()); },
            'playStoreMode' => function (ParseNode $n) use ($o) { $o->setPlayStoreMode($n->getEnumValue(AndroidDeviceOwnerPlayStoreMode::class)); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'securityDeveloperSettingsEnabled' => function (ParseNode $n) use ($o) { $o->setSecurityDeveloperSettingsEnabled($n->getBooleanValue()); },
            'securityRequireVerifyApps' => function (ParseNode $n) use ($o) { $o->setSecurityRequireVerifyApps($n->getBooleanValue()); },
            'shortHelpText' => function (ParseNode $n) use ($o) { $o->setShortHelpText($n->getObjectValue(array(AndroidDeviceOwnerUserFacingMessage::class, 'createFromDiscriminatorValue'))); },
            'statusBarBlocked' => function (ParseNode $n) use ($o) { $o->setStatusBarBlocked($n->getBooleanValue()); },
            'stayOnModes' => function (ParseNode $n) use ($o) { $o->setStayOnModes($n->getCollectionOfPrimitiveValues()); },
            'storageAllowUsb' => function (ParseNode $n) use ($o) { $o->setStorageAllowUsb($n->getBooleanValue()); },
            'storageBlockExternalMedia' => function (ParseNode $n) use ($o) { $o->setStorageBlockExternalMedia($n->getBooleanValue()); },
            'storageBlockUsbFileTransfer' => function (ParseNode $n) use ($o) { $o->setStorageBlockUsbFileTransfer($n->getBooleanValue()); },
            'systemUpdateFreezePeriods' => function (ParseNode $n) use ($o) { $o->setSystemUpdateFreezePeriods($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerSystemUpdateFreezePeriod::class, 'createFromDiscriminatorValue'))); },
            'systemUpdateInstallType' => function (ParseNode $n) use ($o) { $o->setSystemUpdateInstallType($n->getEnumValue(AndroidDeviceOwnerSystemUpdateInstallType::class)); },
            'systemUpdateWindowEndMinutesAfterMidnight' => function (ParseNode $n) use ($o) { $o->setSystemUpdateWindowEndMinutesAfterMidnight($n->getIntegerValue()); },
            'systemUpdateWindowStartMinutesAfterMidnight' => function (ParseNode $n) use ($o) { $o->setSystemUpdateWindowStartMinutesAfterMidnight($n->getIntegerValue()); },
            'systemWindowsBlocked' => function (ParseNode $n) use ($o) { $o->setSystemWindowsBlocked($n->getBooleanValue()); },
            'usersBlockAdd' => function (ParseNode $n) use ($o) { $o->setUsersBlockAdd($n->getBooleanValue()); },
            'usersBlockRemove' => function (ParseNode $n) use ($o) { $o->setUsersBlockRemove($n->getBooleanValue()); },
            'volumeBlockAdjustment' => function (ParseNode $n) use ($o) { $o->setVolumeBlockAdjustment($n->getBooleanValue()); },
            'vpnAlwaysOnLockdownMode' => function (ParseNode $n) use ($o) { $o->setVpnAlwaysOnLockdownMode($n->getBooleanValue()); },
            'vpnAlwaysOnPackageIdentifier' => function (ParseNode $n) use ($o) { $o->setVpnAlwaysOnPackageIdentifier($n->getStringValue()); },
            'wifiBlockEditConfigurations' => function (ParseNode $n) use ($o) { $o->setWifiBlockEditConfigurations($n->getBooleanValue()); },
            'wifiBlockEditPolicyDefinedConfigurations' => function (ParseNode $n) use ($o) { $o->setWifiBlockEditPolicyDefinedConfigurations($n->getBooleanValue()); },
            'workProfilePasswordExpirationDays' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordExpirationDays($n->getIntegerValue()); },
            'workProfilePasswordMinimumLength' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumLength($n->getIntegerValue()); },
            'workProfilePasswordMinimumLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinimumLowerCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumLowerCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinimumNonLetterCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumNonLetterCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinimumNumericCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumNumericCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinimumSymbolCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumSymbolCharacters($n->getIntegerValue()); },
            'workProfilePasswordMinimumUpperCaseCharacters' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordMinimumUpperCaseCharacters($n->getIntegerValue()); },
            'workProfilePasswordPreviousPasswordCountToBlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordPreviousPasswordCountToBlock($n->getIntegerValue()); },
            'workProfilePasswordRequiredType' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordRequiredType($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordType::class)); },
            'workProfilePasswordRequireUnlock' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordRequireUnlock($n->getEnumValue(AndroidDeviceOwnerRequiredPasswordUnlock::class)); },
            'workProfilePasswordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setWorkProfilePasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the globalProxy property value. Proxy is set up directly with host, port and excluded hosts.
     * @return AndroidDeviceOwnerGlobalProxy|null
    */
    public function getGlobalProxy(): ?AndroidDeviceOwnerGlobalProxy {
        return $this->globalProxy;
    }

    /**
     * Gets the googleAccountsBlocked property value. Indicates whether or not google accounts will be blocked.
     * @return bool|null
    */
    public function getGoogleAccountsBlocked(): ?bool {
        return $this->googleAccountsBlocked;
    }

    /**
     * Gets the kioskCustomizationDeviceSettingsBlocked property value. Indicates whether a user can access the device's Settings app while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationDeviceSettingsBlocked(): ?bool {
        return $this->kioskCustomizationDeviceSettingsBlocked;
    }

    /**
     * Gets the kioskCustomizationPowerButtonActionsBlocked property value. Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationPowerButtonActionsBlocked(): ?bool {
        return $this->kioskCustomizationPowerButtonActionsBlocked;
    }

    /**
     * Gets the kioskCustomizationStatusBar property value. Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
     * @return AndroidDeviceOwnerKioskCustomizationStatusBar|null
    */
    public function getKioskCustomizationStatusBar(): ?AndroidDeviceOwnerKioskCustomizationStatusBar {
        return $this->kioskCustomizationStatusBar;
    }

    /**
     * Gets the kioskCustomizationSystemErrorWarnings property value. Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskCustomizationSystemErrorWarnings(): ?bool {
        return $this->kioskCustomizationSystemErrorWarnings;
    }

    /**
     * Gets the kioskCustomizationSystemNavigation property value. Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
     * @return AndroidDeviceOwnerKioskCustomizationSystemNavigation|null
    */
    public function getKioskCustomizationSystemNavigation(): ?AndroidDeviceOwnerKioskCustomizationSystemNavigation {
        return $this->kioskCustomizationSystemNavigation;
    }

    /**
     * Gets the kioskModeAppOrderEnabled property value. Whether or not to enable app ordering in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeAppOrderEnabled(): ?bool {
        return $this->kioskModeAppOrderEnabled;
    }

    /**
     * Gets the kioskModeAppPositions property value. The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeAppPositionItem>|null
    */
    public function getKioskModeAppPositions(): ?array {
        return $this->kioskModeAppPositions;
    }

    /**
     * Gets the kioskModeApps property value. A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getKioskModeApps(): ?array {
        return $this->kioskModeApps;
    }

    /**
     * Gets the kioskModeAppsInFolderOrderedByName property value. Whether or not to alphabetize applications within a folder in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeAppsInFolderOrderedByName(): ?bool {
        return $this->kioskModeAppsInFolderOrderedByName;
    }

    /**
     * Gets the kioskModeBluetoothConfigurationEnabled property value. Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBluetoothConfigurationEnabled(): ?bool {
        return $this->kioskModeBluetoothConfigurationEnabled;
    }

    /**
     * Gets the kioskModeDebugMenuEasyAccessEnabled property value. Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeDebugMenuEasyAccessEnabled(): ?bool {
        return $this->kioskModeDebugMenuEasyAccessEnabled;
    }

    /**
     * Gets the kioskModeExitCode property value. Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeExitCode(): ?string {
        return $this->kioskModeExitCode;
    }

    /**
     * Gets the kioskModeFlashlightConfigurationEnabled property value. Whether or not to allow a user to use the flashlight in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeFlashlightConfigurationEnabled(): ?bool {
        return $this->kioskModeFlashlightConfigurationEnabled;
    }

    /**
     * Gets the kioskModeFolderIcon property value. Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
     * @return AndroidDeviceOwnerKioskModeFolderIcon|null
    */
    public function getKioskModeFolderIcon(): ?AndroidDeviceOwnerKioskModeFolderIcon {
        return $this->kioskModeFolderIcon;
    }

    /**
     * Gets the kioskModeGridHeight property value. Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeGridHeight(): ?int {
        return $this->kioskModeGridHeight;
    }

    /**
     * Gets the kioskModeGridWidth property value. Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeGridWidth(): ?int {
        return $this->kioskModeGridWidth;
    }

    /**
     * Gets the kioskModeIconSize property value. Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
     * @return AndroidDeviceOwnerKioskModeIconSize|null
    */
    public function getKioskModeIconSize(): ?AndroidDeviceOwnerKioskModeIconSize {
        return $this->kioskModeIconSize;
    }

    /**
     * Gets the kioskModeLockHomeScreen property value. Whether or not to lock home screen to the end user in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeLockHomeScreen(): ?bool {
        return $this->kioskModeLockHomeScreen;
    }

    /**
     * Gets the kioskModeManagedFolders property value. A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerKioskModeManagedFolder>|null
    */
    public function getKioskModeManagedFolders(): ?array {
        return $this->kioskModeManagedFolders;
    }

    /**
     * Gets the kioskModeManagedHomeScreenAutoSignout property value. Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenAutoSignout(): ?bool {
        return $this->kioskModeManagedHomeScreenAutoSignout;
    }

    /**
     * Gets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property value. Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds(): ?int {
        return $this->kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds;
    }

    /**
     * Gets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property value. Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds(): ?int {
        return $this->kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds;
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinComplexity property value. Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
     * @return KioskModeManagedHomeScreenPinComplexity|null
    */
    public function getKioskModeManagedHomeScreenPinComplexity(): ?KioskModeManagedHomeScreenPinComplexity {
        return $this->kioskModeManagedHomeScreenPinComplexity;
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinRequired property value. Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenPinRequired(): ?bool {
        return $this->kioskModeManagedHomeScreenPinRequired;
    }

    /**
     * Gets the kioskModeManagedHomeScreenPinRequiredToResume property value. Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenPinRequiredToResume(): ?bool {
        return $this->kioskModeManagedHomeScreenPinRequiredToResume;
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInBackground property value. Custom URL background for sign-in screen for Managed Home Screen.
     * @return string|null
    */
    public function getKioskModeManagedHomeScreenSignInBackground(): ?string {
        return $this->kioskModeManagedHomeScreenSignInBackground;
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInBrandingLogo property value. Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
     * @return string|null
    */
    public function getKioskModeManagedHomeScreenSignInBrandingLogo(): ?string {
        return $this->kioskModeManagedHomeScreenSignInBrandingLogo;
    }

    /**
     * Gets the kioskModeManagedHomeScreenSignInEnabled property value. Whether or not show sign-in screen for Managed Home Screen.
     * @return bool|null
    */
    public function getKioskModeManagedHomeScreenSignInEnabled(): ?bool {
        return $this->kioskModeManagedHomeScreenSignInEnabled;
    }

    /**
     * Gets the kioskModeManagedSettingsEntryDisabled property value. Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeManagedSettingsEntryDisabled(): ?bool {
        return $this->kioskModeManagedSettingsEntryDisabled;
    }

    /**
     * Gets the kioskModeMediaVolumeConfigurationEnabled property value. Whether or not to allow a user to change the media volume in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeMediaVolumeConfigurationEnabled(): ?bool {
        return $this->kioskModeMediaVolumeConfigurationEnabled;
    }

    /**
     * Gets the kioskModeScreenOrientation property value. Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
     * @return AndroidDeviceOwnerKioskModeScreenOrientation|null
    */
    public function getKioskModeScreenOrientation(): ?AndroidDeviceOwnerKioskModeScreenOrientation {
        return $this->kioskModeScreenOrientation;
    }

    /**
     * Gets the kioskModeScreenSaverConfigurationEnabled property value. Whether or not to enable screen saver mode or not in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeScreenSaverConfigurationEnabled(): ?bool {
        return $this->kioskModeScreenSaverConfigurationEnabled;
    }

    /**
     * Gets the kioskModeScreenSaverDetectMediaDisabled property value. Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeScreenSaverDetectMediaDisabled(): ?bool {
        return $this->kioskModeScreenSaverDetectMediaDisabled;
    }

    /**
     * Gets the kioskModeScreenSaverDisplayTimeInSeconds property value. The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
     * @return int|null
    */
    public function getKioskModeScreenSaverDisplayTimeInSeconds(): ?int {
        return $this->kioskModeScreenSaverDisplayTimeInSeconds;
    }

    /**
     * Gets the kioskModeScreenSaverImageUrl property value. URL for an image that will be the device's screen saver in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeScreenSaverImageUrl(): ?string {
        return $this->kioskModeScreenSaverImageUrl;
    }

    /**
     * Gets the kioskModeScreenSaverStartDelayInSeconds property value. The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
     * @return int|null
    */
    public function getKioskModeScreenSaverStartDelayInSeconds(): ?int {
        return $this->kioskModeScreenSaverStartDelayInSeconds;
    }

    /**
     * Gets the kioskModeShowAppNotificationBadge property value. Whether or not to display application notification badges in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeShowAppNotificationBadge(): ?bool {
        return $this->kioskModeShowAppNotificationBadge;
    }

    /**
     * Gets the kioskModeShowDeviceInfo property value. Whether or not to allow a user to access basic device information.
     * @return bool|null
    */
    public function getKioskModeShowDeviceInfo(): ?bool {
        return $this->kioskModeShowDeviceInfo;
    }

    /**
     * Gets the kioskModeUseManagedHomeScreenApp property value. Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
     * @return KioskModeType|null
    */
    public function getKioskModeUseManagedHomeScreenApp(): ?KioskModeType {
        return $this->kioskModeUseManagedHomeScreenApp;
    }

    /**
     * Gets the kioskModeVirtualHomeButtonEnabled property value. Whether or not to display a virtual home button when the device is in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeVirtualHomeButtonEnabled(): ?bool {
        return $this->kioskModeVirtualHomeButtonEnabled;
    }

    /**
     * Gets the kioskModeVirtualHomeButtonType property value. Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
     * @return AndroidDeviceOwnerVirtualHomeButtonType|null
    */
    public function getKioskModeVirtualHomeButtonType(): ?AndroidDeviceOwnerVirtualHomeButtonType {
        return $this->kioskModeVirtualHomeButtonType;
    }

    /**
     * Gets the kioskModeWallpaperUrl property value. URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
     * @return string|null
    */
    public function getKioskModeWallpaperUrl(): ?string {
        return $this->kioskModeWallpaperUrl;
    }

    /**
     * Gets the kioskModeWifiAllowedSsids property value. The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<string>|null
    */
    public function getKioskModeWifiAllowedSsids(): ?array {
        return $this->kioskModeWifiAllowedSsids;
    }

    /**
     * Gets the kioskModeWiFiConfigurationEnabled property value. Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeWiFiConfigurationEnabled(): ?bool {
        return $this->kioskModeWiFiConfigurationEnabled;
    }

    /**
     * Gets the microphoneForceMute property value. Indicates whether or not to block unmuting the microphone on the device.
     * @return bool|null
    */
    public function getMicrophoneForceMute(): ?bool {
        return $this->microphoneForceMute;
    }

    /**
     * Gets the microsoftLauncherConfigurationEnabled property value. Indicates whether or not to you want configure Microsoft Launcher.
     * @return bool|null
    */
    public function getMicrosoftLauncherConfigurationEnabled(): ?bool {
        return $this->microsoftLauncherConfigurationEnabled;
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperAllowUserModification property value. Indicates whether or not the user can modify the wallpaper to personalize their device.
     * @return bool|null
    */
    public function getMicrosoftLauncherCustomWallpaperAllowUserModification(): ?bool {
        return $this->microsoftLauncherCustomWallpaperAllowUserModification;
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperEnabled property value. Indicates whether or not to configure the wallpaper on the targeted devices.
     * @return bool|null
    */
    public function getMicrosoftLauncherCustomWallpaperEnabled(): ?bool {
        return $this->microsoftLauncherCustomWallpaperEnabled;
    }

    /**
     * Gets the microsoftLauncherCustomWallpaperImageUrl property value. Indicates the URL for the image file to use as the wallpaper on the targeted devices.
     * @return string|null
    */
    public function getMicrosoftLauncherCustomWallpaperImageUrl(): ?string {
        return $this->microsoftLauncherCustomWallpaperImageUrl;
    }

    /**
     * Gets the microsoftLauncherDockPresenceAllowUserModification property value. Indicates whether or not the user can modify the device dock configuration on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherDockPresenceAllowUserModification(): ?bool {
        return $this->microsoftLauncherDockPresenceAllowUserModification;
    }

    /**
     * Gets the microsoftLauncherDockPresenceConfiguration property value. Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
     * @return MicrosoftLauncherDockPresence|null
    */
    public function getMicrosoftLauncherDockPresenceConfiguration(): ?MicrosoftLauncherDockPresence {
        return $this->microsoftLauncherDockPresenceConfiguration;
    }

    /**
     * Gets the microsoftLauncherFeedAllowUserModification property value. Indicates whether or not the user can modify the launcher feed on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherFeedAllowUserModification(): ?bool {
        return $this->microsoftLauncherFeedAllowUserModification;
    }

    /**
     * Gets the microsoftLauncherFeedEnabled property value. Indicates whether or not you want to enable the launcher feed on the device.
     * @return bool|null
    */
    public function getMicrosoftLauncherFeedEnabled(): ?bool {
        return $this->microsoftLauncherFeedEnabled;
    }

    /**
     * Gets the microsoftLauncherSearchBarPlacementConfiguration property value. Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
     * @return MicrosoftLauncherSearchBarPlacement|null
    */
    public function getMicrosoftLauncherSearchBarPlacementConfiguration(): ?MicrosoftLauncherSearchBarPlacement {
        return $this->microsoftLauncherSearchBarPlacementConfiguration;
    }

    /**
     * Gets the networkEscapeHatchAllowed property value. Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
     * @return bool|null
    */
    public function getNetworkEscapeHatchAllowed(): ?bool {
        return $this->networkEscapeHatchAllowed;
    }

    /**
     * Gets the nfcBlockOutgoingBeam property value. Indicates whether or not to block NFC outgoing beam.
     * @return bool|null
    */
    public function getNfcBlockOutgoingBeam(): ?bool {
        return $this->nfcBlockOutgoingBeam;
    }

    /**
     * Gets the passwordBlockKeyguard property value. Indicates whether or not the keyguard is disabled.
     * @return bool|null
    */
    public function getPasswordBlockKeyguard(): ?bool {
        return $this->passwordBlockKeyguard;
    }

    /**
     * Gets the passwordBlockKeyguardFeatures property value. List of device keyguard features to block. This collection can contain a maximum of 7 elements.
     * @return array<string>|null
    */
    public function getPasswordBlockKeyguardFeatures(): ?array {
        return $this->passwordBlockKeyguardFeatures;
    }

    /**
     * Gets the passwordExpirationDays property value. Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
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
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordCountToBlock property value. Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordCountToBlock(): ?int {
        return $this->passwordPreviousPasswordCountToBlock;
    }

    /**
     * Gets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordRequireUnlock property value. Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     * @return AndroidDeviceOwnerRequiredPasswordUnlock|null
    */
    public function getPasswordRequireUnlock(): ?AndroidDeviceOwnerRequiredPasswordUnlock {
        return $this->passwordRequireUnlock;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the personalProfileAppsAllowInstallFromUnknownSources property value. Indicates whether the user can install apps from unknown sources on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileAppsAllowInstallFromUnknownSources(): ?bool {
        return $this->personalProfileAppsAllowInstallFromUnknownSources;
    }

    /**
     * Gets the personalProfileCameraBlocked property value. Indicates whether to disable the use of the camera on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileCameraBlocked(): ?bool {
        return $this->personalProfileCameraBlocked;
    }

    /**
     * Gets the personalProfilePersonalApplications property value. Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getPersonalProfilePersonalApplications(): ?array {
        return $this->personalProfilePersonalApplications;
    }

    /**
     * Gets the personalProfilePlayStoreMode property value. Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
     * @return PersonalProfilePersonalPlayStoreMode|null
    */
    public function getPersonalProfilePlayStoreMode(): ?PersonalProfilePersonalPlayStoreMode {
        return $this->personalProfilePlayStoreMode;
    }

    /**
     * Gets the personalProfileScreenCaptureBlocked property value. Indicates whether to disable the capability to take screenshots on the personal profile.
     * @return bool|null
    */
    public function getPersonalProfileScreenCaptureBlocked(): ?bool {
        return $this->personalProfileScreenCaptureBlocked;
    }

    /**
     * Gets the playStoreMode property value. Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
     * @return AndroidDeviceOwnerPlayStoreMode|null
    */
    public function getPlayStoreMode(): ?AndroidDeviceOwnerPlayStoreMode {
        return $this->playStoreMode;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the securityDeveloperSettingsEnabled property value. Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
     * @return bool|null
    */
    public function getSecurityDeveloperSettingsEnabled(): ?bool {
        return $this->securityDeveloperSettingsEnabled;
    }

    /**
     * Gets the securityRequireVerifyApps property value. Indicates whether or not verify apps is required.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->securityRequireVerifyApps;
    }

    /**
     * Gets the shortHelpText property value. Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
     * @return AndroidDeviceOwnerUserFacingMessage|null
    */
    public function getShortHelpText(): ?AndroidDeviceOwnerUserFacingMessage {
        return $this->shortHelpText;
    }

    /**
     * Gets the statusBarBlocked property value. Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
     * @return bool|null
    */
    public function getStatusBarBlocked(): ?bool {
        return $this->statusBarBlocked;
    }

    /**
     * Gets the stayOnModes property value. List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
     * @return array<string>|null
    */
    public function getStayOnModes(): ?array {
        return $this->stayOnModes;
    }

    /**
     * Gets the storageAllowUsb property value. Indicates whether or not to allow USB mass storage.
     * @return bool|null
    */
    public function getStorageAllowUsb(): ?bool {
        return $this->storageAllowUsb;
    }

    /**
     * Gets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     * @return bool|null
    */
    public function getStorageBlockExternalMedia(): ?bool {
        return $this->storageBlockExternalMedia;
    }

    /**
     * Gets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     * @return bool|null
    */
    public function getStorageBlockUsbFileTransfer(): ?bool {
        return $this->storageBlockUsbFileTransfer;
    }

    /**
     * Gets the systemUpdateFreezePeriods property value. Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
     * @return array<AndroidDeviceOwnerSystemUpdateFreezePeriod>|null
    */
    public function getSystemUpdateFreezePeriods(): ?array {
        return $this->systemUpdateFreezePeriods;
    }

    /**
     * Gets the systemUpdateInstallType property value. The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
     * @return AndroidDeviceOwnerSystemUpdateInstallType|null
    */
    public function getSystemUpdateInstallType(): ?AndroidDeviceOwnerSystemUpdateInstallType {
        return $this->systemUpdateInstallType;
    }

    /**
     * Gets the systemUpdateWindowEndMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
     * @return int|null
    */
    public function getSystemUpdateWindowEndMinutesAfterMidnight(): ?int {
        return $this->systemUpdateWindowEndMinutesAfterMidnight;
    }

    /**
     * Gets the systemUpdateWindowStartMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
     * @return int|null
    */
    public function getSystemUpdateWindowStartMinutesAfterMidnight(): ?int {
        return $this->systemUpdateWindowStartMinutesAfterMidnight;
    }

    /**
     * Gets the systemWindowsBlocked property value. Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
     * @return bool|null
    */
    public function getSystemWindowsBlocked(): ?bool {
        return $this->systemWindowsBlocked;
    }

    /**
     * Gets the usersBlockAdd property value. Indicates whether or not adding users and profiles is disabled.
     * @return bool|null
    */
    public function getUsersBlockAdd(): ?bool {
        return $this->usersBlockAdd;
    }

    /**
     * Gets the usersBlockRemove property value. Indicates whether or not to disable removing other users from the device.
     * @return bool|null
    */
    public function getUsersBlockRemove(): ?bool {
        return $this->usersBlockRemove;
    }

    /**
     * Gets the volumeBlockAdjustment property value. Indicates whether or not adjusting the master volume is disabled.
     * @return bool|null
    */
    public function getVolumeBlockAdjustment(): ?bool {
        return $this->volumeBlockAdjustment;
    }

    /**
     * Gets the vpnAlwaysOnLockdownMode property value. If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
     * @return bool|null
    */
    public function getVpnAlwaysOnLockdownMode(): ?bool {
        return $this->vpnAlwaysOnLockdownMode;
    }

    /**
     * Gets the vpnAlwaysOnPackageIdentifier property value. Android app package name for app that will handle an always-on VPN connection.
     * @return string|null
    */
    public function getVpnAlwaysOnPackageIdentifier(): ?string {
        return $this->vpnAlwaysOnPackageIdentifier;
    }

    /**
     * Gets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     * @return bool|null
    */
    public function getWifiBlockEditConfigurations(): ?bool {
        return $this->wifiBlockEditConfigurations;
    }

    /**
     * Gets the wifiBlockEditPolicyDefinedConfigurations property value. Indicates whether or not to block the user from editing just the networks defined by the policy.
     * @return bool|null
    */
    public function getWifiBlockEditPolicyDefinedConfigurations(): ?bool {
        return $this->wifiBlockEditPolicyDefinedConfigurations;
    }

    /**
     * Gets the workProfilePasswordExpirationDays property value. Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
     * @return int|null
    */
    public function getWorkProfilePasswordExpirationDays(): ?int {
        return $this->workProfilePasswordExpirationDays;
    }

    /**
     * Gets the workProfilePasswordMinimumLength property value. Indicates the minimum length of the work profile password. Valid values 4 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLength(): ?int {
        return $this->workProfilePasswordMinimumLength;
    }

    /**
     * Gets the workProfilePasswordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLetterCharacters(): ?int {
        return $this->workProfilePasswordMinimumLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumLowerCaseCharacters(): ?int {
        return $this->workProfilePasswordMinimumLowerCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumNonLetterCharacters(): ?int {
        return $this->workProfilePasswordMinimumNonLetterCharacters;
    }

    /**
     * Gets the workProfilePasswordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumNumericCharacters(): ?int {
        return $this->workProfilePasswordMinimumNumericCharacters;
    }

    /**
     * Gets the workProfilePasswordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumSymbolCharacters(): ?int {
        return $this->workProfilePasswordMinimumSymbolCharacters;
    }

    /**
     * Gets the workProfilePasswordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
     * @return int|null
    */
    public function getWorkProfilePasswordMinimumUpperCaseCharacters(): ?int {
        return $this->workProfilePasswordMinimumUpperCaseCharacters;
    }

    /**
     * Gets the workProfilePasswordPreviousPasswordCountToBlock property value. Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     * @return int|null
    */
    public function getWorkProfilePasswordPreviousPasswordCountToBlock(): ?int {
        return $this->workProfilePasswordPreviousPasswordCountToBlock;
    }

    /**
     * Gets the workProfilePasswordRequiredType property value. Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     * @return AndroidDeviceOwnerRequiredPasswordType|null
    */
    public function getWorkProfilePasswordRequiredType(): ?AndroidDeviceOwnerRequiredPasswordType {
        return $this->workProfilePasswordRequiredType;
    }

    /**
     * Gets the workProfilePasswordRequireUnlock property value. Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     * @return AndroidDeviceOwnerRequiredPasswordUnlock|null
    */
    public function getWorkProfilePasswordRequireUnlock(): ?AndroidDeviceOwnerRequiredPasswordUnlock {
        return $this->workProfilePasswordRequireUnlock;
    }

    /**
     * Gets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
     * @return int|null
    */
    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->workProfilePasswordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockModification', $this->accountsBlockModification);
        $writer->writeBooleanValue('appsAllowInstallFromUnknownSources', $this->appsAllowInstallFromUnknownSources);
        $writer->writeEnumValue('appsAutoUpdatePolicy', $this->appsAutoUpdatePolicy);
        $writer->writeEnumValue('appsDefaultPermissionPolicy', $this->appsDefaultPermissionPolicy);
        $writer->writeBooleanValue('appsRecommendSkippingFirstUseHints', $this->appsRecommendSkippingFirstUseHints);
        $writer->writeCollectionOfObjectValues('azureAdSharedDeviceDataClearApps', $this->azureAdSharedDeviceDataClearApps);
        $writer->writeBooleanValue('bluetoothBlockConfiguration', $this->bluetoothBlockConfiguration);
        $writer->writeBooleanValue('bluetoothBlockContactSharing', $this->bluetoothBlockContactSharing);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockWiFiTethering', $this->cellularBlockWiFiTethering);
        $writer->writeBooleanValue('certificateCredentialConfigurationDisabled', $this->certificateCredentialConfigurationDisabled);
        $writer->writeBooleanValue('crossProfilePoliciesAllowCopyPaste', $this->crossProfilePoliciesAllowCopyPaste);
        $writer->writeEnumValue('crossProfilePoliciesAllowDataSharing', $this->crossProfilePoliciesAllowDataSharing);
        $writer->writeBooleanValue('crossProfilePoliciesShowWorkContactsInPersonalProfile', $this->crossProfilePoliciesShowWorkContactsInPersonalProfile);
        $writer->writeBooleanValue('dataRoamingBlocked', $this->dataRoamingBlocked);
        $writer->writeBooleanValue('dateTimeConfigurationBlocked', $this->dateTimeConfigurationBlocked);
        $writer->writeObjectValue('detailedHelpText', $this->detailedHelpText);
        $writer->writeEnumValue('enrollmentProfile', $this->enrollmentProfile);
        $writer->writeBooleanValue('factoryResetBlocked', $this->factoryResetBlocked);
        $writer->writeCollectionOfPrimitiveValues('factoryResetDeviceAdministratorEmails', $this->factoryResetDeviceAdministratorEmails);
        $writer->writeObjectValue('globalProxy', $this->globalProxy);
        $writer->writeBooleanValue('googleAccountsBlocked', $this->googleAccountsBlocked);
        $writer->writeBooleanValue('kioskCustomizationDeviceSettingsBlocked', $this->kioskCustomizationDeviceSettingsBlocked);
        $writer->writeBooleanValue('kioskCustomizationPowerButtonActionsBlocked', $this->kioskCustomizationPowerButtonActionsBlocked);
        $writer->writeEnumValue('kioskCustomizationStatusBar', $this->kioskCustomizationStatusBar);
        $writer->writeBooleanValue('kioskCustomizationSystemErrorWarnings', $this->kioskCustomizationSystemErrorWarnings);
        $writer->writeEnumValue('kioskCustomizationSystemNavigation', $this->kioskCustomizationSystemNavigation);
        $writer->writeBooleanValue('kioskModeAppOrderEnabled', $this->kioskModeAppOrderEnabled);
        $writer->writeCollectionOfObjectValues('kioskModeAppPositions', $this->kioskModeAppPositions);
        $writer->writeCollectionOfObjectValues('kioskModeApps', $this->kioskModeApps);
        $writer->writeBooleanValue('kioskModeAppsInFolderOrderedByName', $this->kioskModeAppsInFolderOrderedByName);
        $writer->writeBooleanValue('kioskModeBluetoothConfigurationEnabled', $this->kioskModeBluetoothConfigurationEnabled);
        $writer->writeBooleanValue('kioskModeDebugMenuEasyAccessEnabled', $this->kioskModeDebugMenuEasyAccessEnabled);
        $writer->writeStringValue('kioskModeExitCode', $this->kioskModeExitCode);
        $writer->writeBooleanValue('kioskModeFlashlightConfigurationEnabled', $this->kioskModeFlashlightConfigurationEnabled);
        $writer->writeEnumValue('kioskModeFolderIcon', $this->kioskModeFolderIcon);
        $writer->writeIntegerValue('kioskModeGridHeight', $this->kioskModeGridHeight);
        $writer->writeIntegerValue('kioskModeGridWidth', $this->kioskModeGridWidth);
        $writer->writeEnumValue('kioskModeIconSize', $this->kioskModeIconSize);
        $writer->writeBooleanValue('kioskModeLockHomeScreen', $this->kioskModeLockHomeScreen);
        $writer->writeCollectionOfObjectValues('kioskModeManagedFolders', $this->kioskModeManagedFolders);
        $writer->writeBooleanValue('kioskModeManagedHomeScreenAutoSignout', $this->kioskModeManagedHomeScreenAutoSignout);
        $writer->writeIntegerValue('kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds', $this->kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds);
        $writer->writeIntegerValue('kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds', $this->kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds);
        $writer->writeEnumValue('kioskModeManagedHomeScreenPinComplexity', $this->kioskModeManagedHomeScreenPinComplexity);
        $writer->writeBooleanValue('kioskModeManagedHomeScreenPinRequired', $this->kioskModeManagedHomeScreenPinRequired);
        $writer->writeBooleanValue('kioskModeManagedHomeScreenPinRequiredToResume', $this->kioskModeManagedHomeScreenPinRequiredToResume);
        $writer->writeStringValue('kioskModeManagedHomeScreenSignInBackground', $this->kioskModeManagedHomeScreenSignInBackground);
        $writer->writeStringValue('kioskModeManagedHomeScreenSignInBrandingLogo', $this->kioskModeManagedHomeScreenSignInBrandingLogo);
        $writer->writeBooleanValue('kioskModeManagedHomeScreenSignInEnabled', $this->kioskModeManagedHomeScreenSignInEnabled);
        $writer->writeBooleanValue('kioskModeManagedSettingsEntryDisabled', $this->kioskModeManagedSettingsEntryDisabled);
        $writer->writeBooleanValue('kioskModeMediaVolumeConfigurationEnabled', $this->kioskModeMediaVolumeConfigurationEnabled);
        $writer->writeEnumValue('kioskModeScreenOrientation', $this->kioskModeScreenOrientation);
        $writer->writeBooleanValue('kioskModeScreenSaverConfigurationEnabled', $this->kioskModeScreenSaverConfigurationEnabled);
        $writer->writeBooleanValue('kioskModeScreenSaverDetectMediaDisabled', $this->kioskModeScreenSaverDetectMediaDisabled);
        $writer->writeIntegerValue('kioskModeScreenSaverDisplayTimeInSeconds', $this->kioskModeScreenSaverDisplayTimeInSeconds);
        $writer->writeStringValue('kioskModeScreenSaverImageUrl', $this->kioskModeScreenSaverImageUrl);
        $writer->writeIntegerValue('kioskModeScreenSaverStartDelayInSeconds', $this->kioskModeScreenSaverStartDelayInSeconds);
        $writer->writeBooleanValue('kioskModeShowAppNotificationBadge', $this->kioskModeShowAppNotificationBadge);
        $writer->writeBooleanValue('kioskModeShowDeviceInfo', $this->kioskModeShowDeviceInfo);
        $writer->writeEnumValue('kioskModeUseManagedHomeScreenApp', $this->kioskModeUseManagedHomeScreenApp);
        $writer->writeBooleanValue('kioskModeVirtualHomeButtonEnabled', $this->kioskModeVirtualHomeButtonEnabled);
        $writer->writeEnumValue('kioskModeVirtualHomeButtonType', $this->kioskModeVirtualHomeButtonType);
        $writer->writeStringValue('kioskModeWallpaperUrl', $this->kioskModeWallpaperUrl);
        $writer->writeCollectionOfPrimitiveValues('kioskModeWifiAllowedSsids', $this->kioskModeWifiAllowedSsids);
        $writer->writeBooleanValue('kioskModeWiFiConfigurationEnabled', $this->kioskModeWiFiConfigurationEnabled);
        $writer->writeBooleanValue('microphoneForceMute', $this->microphoneForceMute);
        $writer->writeBooleanValue('microsoftLauncherConfigurationEnabled', $this->microsoftLauncherConfigurationEnabled);
        $writer->writeBooleanValue('microsoftLauncherCustomWallpaperAllowUserModification', $this->microsoftLauncherCustomWallpaperAllowUserModification);
        $writer->writeBooleanValue('microsoftLauncherCustomWallpaperEnabled', $this->microsoftLauncherCustomWallpaperEnabled);
        $writer->writeStringValue('microsoftLauncherCustomWallpaperImageUrl', $this->microsoftLauncherCustomWallpaperImageUrl);
        $writer->writeBooleanValue('microsoftLauncherDockPresenceAllowUserModification', $this->microsoftLauncherDockPresenceAllowUserModification);
        $writer->writeEnumValue('microsoftLauncherDockPresenceConfiguration', $this->microsoftLauncherDockPresenceConfiguration);
        $writer->writeBooleanValue('microsoftLauncherFeedAllowUserModification', $this->microsoftLauncherFeedAllowUserModification);
        $writer->writeBooleanValue('microsoftLauncherFeedEnabled', $this->microsoftLauncherFeedEnabled);
        $writer->writeEnumValue('microsoftLauncherSearchBarPlacementConfiguration', $this->microsoftLauncherSearchBarPlacementConfiguration);
        $writer->writeBooleanValue('networkEscapeHatchAllowed', $this->networkEscapeHatchAllowed);
        $writer->writeBooleanValue('nfcBlockOutgoingBeam', $this->nfcBlockOutgoingBeam);
        $writer->writeBooleanValue('passwordBlockKeyguard', $this->passwordBlockKeyguard);
        $writer->writeCollectionOfPrimitiveValues('passwordBlockKeyguardFeatures', $this->passwordBlockKeyguardFeatures);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinimumLetterCharacters', $this->passwordMinimumLetterCharacters);
        $writer->writeIntegerValue('passwordMinimumLowerCaseCharacters', $this->passwordMinimumLowerCaseCharacters);
        $writer->writeIntegerValue('passwordMinimumNonLetterCharacters', $this->passwordMinimumNonLetterCharacters);
        $writer->writeIntegerValue('passwordMinimumNumericCharacters', $this->passwordMinimumNumericCharacters);
        $writer->writeIntegerValue('passwordMinimumSymbolCharacters', $this->passwordMinimumSymbolCharacters);
        $writer->writeIntegerValue('passwordMinimumUpperCaseCharacters', $this->passwordMinimumUpperCaseCharacters);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordCountToBlock', $this->passwordPreviousPasswordCountToBlock);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeEnumValue('passwordRequireUnlock', $this->passwordRequireUnlock);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('personalProfileAppsAllowInstallFromUnknownSources', $this->personalProfileAppsAllowInstallFromUnknownSources);
        $writer->writeBooleanValue('personalProfileCameraBlocked', $this->personalProfileCameraBlocked);
        $writer->writeCollectionOfObjectValues('personalProfilePersonalApplications', $this->personalProfilePersonalApplications);
        $writer->writeEnumValue('personalProfilePlayStoreMode', $this->personalProfilePlayStoreMode);
        $writer->writeBooleanValue('personalProfileScreenCaptureBlocked', $this->personalProfileScreenCaptureBlocked);
        $writer->writeEnumValue('playStoreMode', $this->playStoreMode);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('securityDeveloperSettingsEnabled', $this->securityDeveloperSettingsEnabled);
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->securityRequireVerifyApps);
        $writer->writeObjectValue('shortHelpText', $this->shortHelpText);
        $writer->writeBooleanValue('statusBarBlocked', $this->statusBarBlocked);
        $writer->writeCollectionOfPrimitiveValues('stayOnModes', $this->stayOnModes);
        $writer->writeBooleanValue('storageAllowUsb', $this->storageAllowUsb);
        $writer->writeBooleanValue('storageBlockExternalMedia', $this->storageBlockExternalMedia);
        $writer->writeBooleanValue('storageBlockUsbFileTransfer', $this->storageBlockUsbFileTransfer);
        $writer->writeCollectionOfObjectValues('systemUpdateFreezePeriods', $this->systemUpdateFreezePeriods);
        $writer->writeEnumValue('systemUpdateInstallType', $this->systemUpdateInstallType);
        $writer->writeIntegerValue('systemUpdateWindowEndMinutesAfterMidnight', $this->systemUpdateWindowEndMinutesAfterMidnight);
        $writer->writeIntegerValue('systemUpdateWindowStartMinutesAfterMidnight', $this->systemUpdateWindowStartMinutesAfterMidnight);
        $writer->writeBooleanValue('systemWindowsBlocked', $this->systemWindowsBlocked);
        $writer->writeBooleanValue('usersBlockAdd', $this->usersBlockAdd);
        $writer->writeBooleanValue('usersBlockRemove', $this->usersBlockRemove);
        $writer->writeBooleanValue('volumeBlockAdjustment', $this->volumeBlockAdjustment);
        $writer->writeBooleanValue('vpnAlwaysOnLockdownMode', $this->vpnAlwaysOnLockdownMode);
        $writer->writeStringValue('vpnAlwaysOnPackageIdentifier', $this->vpnAlwaysOnPackageIdentifier);
        $writer->writeBooleanValue('wifiBlockEditConfigurations', $this->wifiBlockEditConfigurations);
        $writer->writeBooleanValue('wifiBlockEditPolicyDefinedConfigurations', $this->wifiBlockEditPolicyDefinedConfigurations);
        $writer->writeIntegerValue('workProfilePasswordExpirationDays', $this->workProfilePasswordExpirationDays);
        $writer->writeIntegerValue('workProfilePasswordMinimumLength', $this->workProfilePasswordMinimumLength);
        $writer->writeIntegerValue('workProfilePasswordMinimumLetterCharacters', $this->workProfilePasswordMinimumLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinimumLowerCaseCharacters', $this->workProfilePasswordMinimumLowerCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinimumNonLetterCharacters', $this->workProfilePasswordMinimumNonLetterCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinimumNumericCharacters', $this->workProfilePasswordMinimumNumericCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinimumSymbolCharacters', $this->workProfilePasswordMinimumSymbolCharacters);
        $writer->writeIntegerValue('workProfilePasswordMinimumUpperCaseCharacters', $this->workProfilePasswordMinimumUpperCaseCharacters);
        $writer->writeIntegerValue('workProfilePasswordPreviousPasswordCountToBlock', $this->workProfilePasswordPreviousPasswordCountToBlock);
        $writer->writeEnumValue('workProfilePasswordRequiredType', $this->workProfilePasswordRequiredType);
        $writer->writeEnumValue('workProfilePasswordRequireUnlock', $this->workProfilePasswordRequireUnlock);
        $writer->writeIntegerValue('workProfilePasswordSignInFailureCountBeforeFactoryReset', $this->workProfilePasswordSignInFailureCountBeforeFactoryReset);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountsBlockModification property value. Indicates whether or not adding or removing accounts is disabled.
     *  @param bool|null $value Value to set for the accountsBlockModification property.
    */
    public function setAccountsBlockModification(?bool $value ): void {
        $this->accountsBlockModification = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the appsAllowInstallFromUnknownSources property value. Indicates whether or not the user is allowed to enable to unknown sources setting.
     *  @param bool|null $value Value to set for the appsAllowInstallFromUnknownSources property.
    */
    public function setAppsAllowInstallFromUnknownSources(?bool $value ): void {
        $this->appsAllowInstallFromUnknownSources = $value;
    }

    /**
     * Sets the appsAutoUpdatePolicy property value. Indicates the value of the app auto update policy. Possible values are: notConfigured, userChoice, never, wiFiOnly, always.
     *  @param AndroidDeviceOwnerAppAutoUpdatePolicyType|null $value Value to set for the appsAutoUpdatePolicy property.
    */
    public function setAppsAutoUpdatePolicy(?AndroidDeviceOwnerAppAutoUpdatePolicyType $value ): void {
        $this->appsAutoUpdatePolicy = $value;
    }

    /**
     * Sets the appsDefaultPermissionPolicy property value. Indicates the permission policy for requests for runtime permissions if one is not defined for the app specifically. Possible values are: deviceDefault, prompt, autoGrant, autoDeny.
     *  @param AndroidDeviceOwnerDefaultAppPermissionPolicyType|null $value Value to set for the appsDefaultPermissionPolicy property.
    */
    public function setAppsDefaultPermissionPolicy(?AndroidDeviceOwnerDefaultAppPermissionPolicyType $value ): void {
        $this->appsDefaultPermissionPolicy = $value;
    }

    /**
     * Sets the appsRecommendSkippingFirstUseHints property value. Whether or not to recommend all apps skip any first-time-use hints they may have added.
     *  @param bool|null $value Value to set for the appsRecommendSkippingFirstUseHints property.
    */
    public function setAppsRecommendSkippingFirstUseHints(?bool $value ): void {
        $this->appsRecommendSkippingFirstUseHints = $value;
    }

    /**
     * Sets the azureAdSharedDeviceDataClearApps property value. A list of managed apps that will have their data cleared during a global sign-out in AAD shared device mode. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the azureAdSharedDeviceDataClearApps property.
    */
    public function setAzureAdSharedDeviceDataClearApps(?array $value ): void {
        $this->azureAdSharedDeviceDataClearApps = $value;
    }

    /**
     * Sets the bluetoothBlockConfiguration property value. Indicates whether or not to block a user from configuring bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlockConfiguration property.
    */
    public function setBluetoothBlockConfiguration(?bool $value ): void {
        $this->bluetoothBlockConfiguration = $value;
    }

    /**
     * Sets the bluetoothBlockContactSharing property value. Indicates whether or not to block a user from sharing contacts via bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlockContactSharing property.
    */
    public function setBluetoothBlockContactSharing(?bool $value ): void {
        $this->bluetoothBlockContactSharing = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to disable the use of the camera.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockWiFiTethering property value. Indicates whether or not to block Wi-Fi tethering.
     *  @param bool|null $value Value to set for the cellularBlockWiFiTethering property.
    */
    public function setCellularBlockWiFiTethering(?bool $value ): void {
        $this->cellularBlockWiFiTethering = $value;
    }

    /**
     * Sets the certificateCredentialConfigurationDisabled property value. Indicates whether or not to block users from any certificate credential configuration.
     *  @param bool|null $value Value to set for the certificateCredentialConfigurationDisabled property.
    */
    public function setCertificateCredentialConfigurationDisabled(?bool $value ): void {
        $this->certificateCredentialConfigurationDisabled = $value;
    }

    /**
     * Sets the crossProfilePoliciesAllowCopyPaste property value. Indicates whether or not text copied from one profile (personal or work) can be pasted in the other.
     *  @param bool|null $value Value to set for the crossProfilePoliciesAllowCopyPaste property.
    */
    public function setCrossProfilePoliciesAllowCopyPaste(?bool $value ): void {
        $this->crossProfilePoliciesAllowCopyPaste = $value;
    }

    /**
     * Sets the crossProfilePoliciesAllowDataSharing property value. Indicates whether data from one profile (personal or work) can be shared with apps in the other profile. Possible values are: notConfigured, crossProfileDataSharingBlocked, dataSharingFromWorkToPersonalBlocked, crossProfileDataSharingAllowed, unkownFutureValue.
     *  @param AndroidDeviceOwnerCrossProfileDataSharing|null $value Value to set for the crossProfilePoliciesAllowDataSharing property.
    */
    public function setCrossProfilePoliciesAllowDataSharing(?AndroidDeviceOwnerCrossProfileDataSharing $value ): void {
        $this->crossProfilePoliciesAllowDataSharing = $value;
    }

    /**
     * Sets the crossProfilePoliciesShowWorkContactsInPersonalProfile property value. Indicates whether or not contacts stored in work profile are shown in personal profile contact searches/incoming calls.
     *  @param bool|null $value Value to set for the crossProfilePoliciesShowWorkContactsInPersonalProfile property.
    */
    public function setCrossProfilePoliciesShowWorkContactsInPersonalProfile(?bool $value ): void {
        $this->crossProfilePoliciesShowWorkContactsInPersonalProfile = $value;
    }

    /**
     * Sets the dataRoamingBlocked property value. Indicates whether or not to block a user from data roaming.
     *  @param bool|null $value Value to set for the dataRoamingBlocked property.
    */
    public function setDataRoamingBlocked(?bool $value ): void {
        $this->dataRoamingBlocked = $value;
    }

    /**
     * Sets the dateTimeConfigurationBlocked property value. Indicates whether or not to block the user from manually changing the date or time on the device
     *  @param bool|null $value Value to set for the dateTimeConfigurationBlocked property.
    */
    public function setDateTimeConfigurationBlocked(?bool $value ): void {
        $this->dateTimeConfigurationBlocked = $value;
    }

    /**
     * Sets the detailedHelpText property value. Represents the customized detailed help text provided to users when they attempt to modify managed settings on their device.
     *  @param AndroidDeviceOwnerUserFacingMessage|null $value Value to set for the detailedHelpText property.
    */
    public function setDetailedHelpText(?AndroidDeviceOwnerUserFacingMessage $value ): void {
        $this->detailedHelpText = $value;
    }

    /**
     * Sets the enrollmentProfile property value. Indicates which enrollment profile you want to configure. Possible values are: notConfigured, dedicatedDevice, fullyManaged.
     *  @param AndroidDeviceOwnerEnrollmentProfileType|null $value Value to set for the enrollmentProfile property.
    */
    public function setEnrollmentProfile(?AndroidDeviceOwnerEnrollmentProfileType $value ): void {
        $this->enrollmentProfile = $value;
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not the factory reset option in settings is disabled.
     *  @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value ): void {
        $this->factoryResetBlocked = $value;
    }

    /**
     * Sets the factoryResetDeviceAdministratorEmails property value. List of Google account emails that will be required to authenticate after a device is factory reset before it can be set up.
     *  @param array<string>|null $value Value to set for the factoryResetDeviceAdministratorEmails property.
    */
    public function setFactoryResetDeviceAdministratorEmails(?array $value ): void {
        $this->factoryResetDeviceAdministratorEmails = $value;
    }

    /**
     * Sets the globalProxy property value. Proxy is set up directly with host, port and excluded hosts.
     *  @param AndroidDeviceOwnerGlobalProxy|null $value Value to set for the globalProxy property.
    */
    public function setGlobalProxy(?AndroidDeviceOwnerGlobalProxy $value ): void {
        $this->globalProxy = $value;
    }

    /**
     * Sets the googleAccountsBlocked property value. Indicates whether or not google accounts will be blocked.
     *  @param bool|null $value Value to set for the googleAccountsBlocked property.
    */
    public function setGoogleAccountsBlocked(?bool $value ): void {
        $this->googleAccountsBlocked = $value;
    }

    /**
     * Sets the kioskCustomizationDeviceSettingsBlocked property value. Indicates whether a user can access the device's Settings app while in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationDeviceSettingsBlocked property.
    */
    public function setKioskCustomizationDeviceSettingsBlocked(?bool $value ): void {
        $this->kioskCustomizationDeviceSettingsBlocked = $value;
    }

    /**
     * Sets the kioskCustomizationPowerButtonActionsBlocked property value. Whether the power menu is shown when a user long presses the Power button of a device in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationPowerButtonActionsBlocked property.
    */
    public function setKioskCustomizationPowerButtonActionsBlocked(?bool $value ): void {
        $this->kioskCustomizationPowerButtonActionsBlocked = $value;
    }

    /**
     * Sets the kioskCustomizationStatusBar property value. Indicates whether system info and notifications are disabled in Kiosk Mode. Possible values are: notConfigured, notificationsAndSystemInfoEnabled, systemInfoOnly.
     *  @param AndroidDeviceOwnerKioskCustomizationStatusBar|null $value Value to set for the kioskCustomizationStatusBar property.
    */
    public function setKioskCustomizationStatusBar(?AndroidDeviceOwnerKioskCustomizationStatusBar $value ): void {
        $this->kioskCustomizationStatusBar = $value;
    }

    /**
     * Sets the kioskCustomizationSystemErrorWarnings property value. Indicates whether system error dialogs for crashed or unresponsive apps are shown in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskCustomizationSystemErrorWarnings property.
    */
    public function setKioskCustomizationSystemErrorWarnings(?bool $value ): void {
        $this->kioskCustomizationSystemErrorWarnings = $value;
    }

    /**
     * Sets the kioskCustomizationSystemNavigation property value. Indicates which navigation features are enabled in Kiosk Mode. Possible values are: notConfigured, navigationEnabled, homeButtonOnly.
     *  @param AndroidDeviceOwnerKioskCustomizationSystemNavigation|null $value Value to set for the kioskCustomizationSystemNavigation property.
    */
    public function setKioskCustomizationSystemNavigation(?AndroidDeviceOwnerKioskCustomizationSystemNavigation $value ): void {
        $this->kioskCustomizationSystemNavigation = $value;
    }

    /**
     * Sets the kioskModeAppOrderEnabled property value. Whether or not to enable app ordering in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeAppOrderEnabled property.
    */
    public function setKioskModeAppOrderEnabled(?bool $value ): void {
        $this->kioskModeAppOrderEnabled = $value;
    }

    /**
     * Sets the kioskModeAppPositions property value. The ordering of items on Kiosk Mode Managed Home Screen. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerKioskModeAppPositionItem>|null $value Value to set for the kioskModeAppPositions property.
    */
    public function setKioskModeAppPositions(?array $value ): void {
        $this->kioskModeAppPositions = $value;
    }

    /**
     * Sets the kioskModeApps property value. A list of managed apps that will be shown when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the kioskModeApps property.
    */
    public function setKioskModeApps(?array $value ): void {
        $this->kioskModeApps = $value;
    }

    /**
     * Sets the kioskModeAppsInFolderOrderedByName property value. Whether or not to alphabetize applications within a folder in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeAppsInFolderOrderedByName property.
    */
    public function setKioskModeAppsInFolderOrderedByName(?bool $value ): void {
        $this->kioskModeAppsInFolderOrderedByName = $value;
    }

    /**
     * Sets the kioskModeBluetoothConfigurationEnabled property value. Whether or not to allow a user to configure Bluetooth settings in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeBluetoothConfigurationEnabled property.
    */
    public function setKioskModeBluetoothConfigurationEnabled(?bool $value ): void {
        $this->kioskModeBluetoothConfigurationEnabled = $value;
    }

    /**
     * Sets the kioskModeDebugMenuEasyAccessEnabled property value. Whether or not to allow a user to easy access to the debug menu in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeDebugMenuEasyAccessEnabled property.
    */
    public function setKioskModeDebugMenuEasyAccessEnabled(?bool $value ): void {
        $this->kioskModeDebugMenuEasyAccessEnabled = $value;
    }

    /**
     * Sets the kioskModeExitCode property value. Exit code to allow a user to escape from Kiosk Mode when the device is in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeExitCode property.
    */
    public function setKioskModeExitCode(?string $value ): void {
        $this->kioskModeExitCode = $value;
    }

    /**
     * Sets the kioskModeFlashlightConfigurationEnabled property value. Whether or not to allow a user to use the flashlight in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeFlashlightConfigurationEnabled property.
    */
    public function setKioskModeFlashlightConfigurationEnabled(?bool $value ): void {
        $this->kioskModeFlashlightConfigurationEnabled = $value;
    }

    /**
     * Sets the kioskModeFolderIcon property value. Folder icon configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, darkSquare, darkCircle, lightSquare, lightCircle.
     *  @param AndroidDeviceOwnerKioskModeFolderIcon|null $value Value to set for the kioskModeFolderIcon property.
    */
    public function setKioskModeFolderIcon(?AndroidDeviceOwnerKioskModeFolderIcon $value ): void {
        $this->kioskModeFolderIcon = $value;
    }

    /**
     * Sets the kioskModeGridHeight property value. Number of rows for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeGridHeight property.
    */
    public function setKioskModeGridHeight(?int $value ): void {
        $this->kioskModeGridHeight = $value;
    }

    /**
     * Sets the kioskModeGridWidth property value. Number of columns for Managed Home Screen grid with app ordering enabled in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeGridWidth property.
    */
    public function setKioskModeGridWidth(?int $value ): void {
        $this->kioskModeGridWidth = $value;
    }

    /**
     * Sets the kioskModeIconSize property value. Icon size configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, smallest, small, regular, large, largest.
     *  @param AndroidDeviceOwnerKioskModeIconSize|null $value Value to set for the kioskModeIconSize property.
    */
    public function setKioskModeIconSize(?AndroidDeviceOwnerKioskModeIconSize $value ): void {
        $this->kioskModeIconSize = $value;
    }

    /**
     * Sets the kioskModeLockHomeScreen property value. Whether or not to lock home screen to the end user in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeLockHomeScreen property.
    */
    public function setKioskModeLockHomeScreen(?bool $value ): void {
        $this->kioskModeLockHomeScreen = $value;
    }

    /**
     * Sets the kioskModeManagedFolders property value. A list of managed folders for a device in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerKioskModeManagedFolder>|null $value Value to set for the kioskModeManagedFolders property.
    */
    public function setKioskModeManagedFolders(?array $value ): void {
        $this->kioskModeManagedFolders = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenAutoSignout property value. Whether or not to automatically sign-out of MHS and Shared device mode applications after inactive for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenAutoSignout property.
    */
    public function setKioskModeManagedHomeScreenAutoSignout(?bool $value ): void {
        $this->kioskModeManagedHomeScreenAutoSignout = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property value. Number of seconds to give user notice before automatically signing them out for Managed Home Screen. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds property.
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutDelayInSeconds(?int $value ): void {
        $this->kioskModeManagedHomeScreenInactiveSignOutDelayInSeconds = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property value. Number of seconds device is inactive before automatically signing user out for Managed Home Screen. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds property.
    */
    public function setKioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds(?int $value ): void {
        $this->kioskModeManagedHomeScreenInactiveSignOutNoticeInSeconds = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinComplexity property value. Complexity of PIN for sign-in session for Managed Home Screen. Possible values are: notConfigured, simple, complex.
     *  @param KioskModeManagedHomeScreenPinComplexity|null $value Value to set for the kioskModeManagedHomeScreenPinComplexity property.
    */
    public function setKioskModeManagedHomeScreenPinComplexity(?KioskModeManagedHomeScreenPinComplexity $value ): void {
        $this->kioskModeManagedHomeScreenPinComplexity = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinRequired property value. Whether or not require user to set a PIN for sign-in session for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenPinRequired property.
    */
    public function setKioskModeManagedHomeScreenPinRequired(?bool $value ): void {
        $this->kioskModeManagedHomeScreenPinRequired = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenPinRequiredToResume property value. Whether or not required user to enter session PIN if screensaver has appeared for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenPinRequiredToResume property.
    */
    public function setKioskModeManagedHomeScreenPinRequiredToResume(?bool $value ): void {
        $this->kioskModeManagedHomeScreenPinRequiredToResume = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInBackground property value. Custom URL background for sign-in screen for Managed Home Screen.
     *  @param string|null $value Value to set for the kioskModeManagedHomeScreenSignInBackground property.
    */
    public function setKioskModeManagedHomeScreenSignInBackground(?string $value ): void {
        $this->kioskModeManagedHomeScreenSignInBackground = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInBrandingLogo property value. Custom URL branding logo for sign-in screen and session pin page for Managed Home Screen.
     *  @param string|null $value Value to set for the kioskModeManagedHomeScreenSignInBrandingLogo property.
    */
    public function setKioskModeManagedHomeScreenSignInBrandingLogo(?string $value ): void {
        $this->kioskModeManagedHomeScreenSignInBrandingLogo = $value;
    }

    /**
     * Sets the kioskModeManagedHomeScreenSignInEnabled property value. Whether or not show sign-in screen for Managed Home Screen.
     *  @param bool|null $value Value to set for the kioskModeManagedHomeScreenSignInEnabled property.
    */
    public function setKioskModeManagedHomeScreenSignInEnabled(?bool $value ): void {
        $this->kioskModeManagedHomeScreenSignInEnabled = $value;
    }

    /**
     * Sets the kioskModeManagedSettingsEntryDisabled property value. Whether or not to display the Managed Settings entry point on the managed home screen in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeManagedSettingsEntryDisabled property.
    */
    public function setKioskModeManagedSettingsEntryDisabled(?bool $value ): void {
        $this->kioskModeManagedSettingsEntryDisabled = $value;
    }

    /**
     * Sets the kioskModeMediaVolumeConfigurationEnabled property value. Whether or not to allow a user to change the media volume in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeMediaVolumeConfigurationEnabled property.
    */
    public function setKioskModeMediaVolumeConfigurationEnabled(?bool $value ): void {
        $this->kioskModeMediaVolumeConfigurationEnabled = $value;
    }

    /**
     * Sets the kioskModeScreenOrientation property value. Screen orientation configuration for managed home screen in Kiosk Mode. Possible values are: notConfigured, portrait, landscape, autoRotate.
     *  @param AndroidDeviceOwnerKioskModeScreenOrientation|null $value Value to set for the kioskModeScreenOrientation property.
    */
    public function setKioskModeScreenOrientation(?AndroidDeviceOwnerKioskModeScreenOrientation $value ): void {
        $this->kioskModeScreenOrientation = $value;
    }

    /**
     * Sets the kioskModeScreenSaverConfigurationEnabled property value. Whether or not to enable screen saver mode or not in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeScreenSaverConfigurationEnabled property.
    */
    public function setKioskModeScreenSaverConfigurationEnabled(?bool $value ): void {
        $this->kioskModeScreenSaverConfigurationEnabled = $value;
    }

    /**
     * Sets the kioskModeScreenSaverDetectMediaDisabled property value. Whether or not the device screen should show the screen saver if audio/video is playing in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeScreenSaverDetectMediaDisabled property.
    */
    public function setKioskModeScreenSaverDetectMediaDisabled(?bool $value ): void {
        $this->kioskModeScreenSaverDetectMediaDisabled = $value;
    }

    /**
     * Sets the kioskModeScreenSaverDisplayTimeInSeconds property value. The number of seconds that the device will display the screen saver for in Kiosk Mode. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the kioskModeScreenSaverDisplayTimeInSeconds property.
    */
    public function setKioskModeScreenSaverDisplayTimeInSeconds(?int $value ): void {
        $this->kioskModeScreenSaverDisplayTimeInSeconds = $value;
    }

    /**
     * Sets the kioskModeScreenSaverImageUrl property value. URL for an image that will be the device's screen saver in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeScreenSaverImageUrl property.
    */
    public function setKioskModeScreenSaverImageUrl(?string $value ): void {
        $this->kioskModeScreenSaverImageUrl = $value;
    }

    /**
     * Sets the kioskModeScreenSaverStartDelayInSeconds property value. The number of seconds the device needs to be inactive for before the screen saver is shown in Kiosk Mode. Valid values 1 to 9999999
     *  @param int|null $value Value to set for the kioskModeScreenSaverStartDelayInSeconds property.
    */
    public function setKioskModeScreenSaverStartDelayInSeconds(?int $value ): void {
        $this->kioskModeScreenSaverStartDelayInSeconds = $value;
    }

    /**
     * Sets the kioskModeShowAppNotificationBadge property value. Whether or not to display application notification badges in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeShowAppNotificationBadge property.
    */
    public function setKioskModeShowAppNotificationBadge(?bool $value ): void {
        $this->kioskModeShowAppNotificationBadge = $value;
    }

    /**
     * Sets the kioskModeShowDeviceInfo property value. Whether or not to allow a user to access basic device information.
     *  @param bool|null $value Value to set for the kioskModeShowDeviceInfo property.
    */
    public function setKioskModeShowDeviceInfo(?bool $value ): void {
        $this->kioskModeShowDeviceInfo = $value;
    }

    /**
     * Sets the kioskModeUseManagedHomeScreenApp property value. Whether or not to use single app kiosk mode or multi-app kiosk mode. Possible values are: notConfigured, singleAppMode, multiAppMode.
     *  @param KioskModeType|null $value Value to set for the kioskModeUseManagedHomeScreenApp property.
    */
    public function setKioskModeUseManagedHomeScreenApp(?KioskModeType $value ): void {
        $this->kioskModeUseManagedHomeScreenApp = $value;
    }

    /**
     * Sets the kioskModeVirtualHomeButtonEnabled property value. Whether or not to display a virtual home button when the device is in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeVirtualHomeButtonEnabled property.
    */
    public function setKioskModeVirtualHomeButtonEnabled(?bool $value ): void {
        $this->kioskModeVirtualHomeButtonEnabled = $value;
    }

    /**
     * Sets the kioskModeVirtualHomeButtonType property value. Indicates whether the virtual home button is a swipe up home button or a floating home button. Possible values are: notConfigured, swipeUp, floating.
     *  @param AndroidDeviceOwnerVirtualHomeButtonType|null $value Value to set for the kioskModeVirtualHomeButtonType property.
    */
    public function setKioskModeVirtualHomeButtonType(?AndroidDeviceOwnerVirtualHomeButtonType $value ): void {
        $this->kioskModeVirtualHomeButtonType = $value;
    }

    /**
     * Sets the kioskModeWallpaperUrl property value. URL to a publicly accessible image to use for the wallpaper when the device is in Kiosk Mode.
     *  @param string|null $value Value to set for the kioskModeWallpaperUrl property.
    */
    public function setKioskModeWallpaperUrl(?string $value ): void {
        $this->kioskModeWallpaperUrl = $value;
    }

    /**
     * Sets the kioskModeWifiAllowedSsids property value. The restricted set of WIFI SSIDs available for the user to configure in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<string>|null $value Value to set for the kioskModeWifiAllowedSsids property.
    */
    public function setKioskModeWifiAllowedSsids(?array $value ): void {
        $this->kioskModeWifiAllowedSsids = $value;
    }

    /**
     * Sets the kioskModeWiFiConfigurationEnabled property value. Whether or not to allow a user to configure Wi-Fi settings in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeWiFiConfigurationEnabled property.
    */
    public function setKioskModeWiFiConfigurationEnabled(?bool $value ): void {
        $this->kioskModeWiFiConfigurationEnabled = $value;
    }

    /**
     * Sets the microphoneForceMute property value. Indicates whether or not to block unmuting the microphone on the device.
     *  @param bool|null $value Value to set for the microphoneForceMute property.
    */
    public function setMicrophoneForceMute(?bool $value ): void {
        $this->microphoneForceMute = $value;
    }

    /**
     * Sets the microsoftLauncherConfigurationEnabled property value. Indicates whether or not to you want configure Microsoft Launcher.
     *  @param bool|null $value Value to set for the microsoftLauncherConfigurationEnabled property.
    */
    public function setMicrosoftLauncherConfigurationEnabled(?bool $value ): void {
        $this->microsoftLauncherConfigurationEnabled = $value;
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperAllowUserModification property value. Indicates whether or not the user can modify the wallpaper to personalize their device.
     *  @param bool|null $value Value to set for the microsoftLauncherCustomWallpaperAllowUserModification property.
    */
    public function setMicrosoftLauncherCustomWallpaperAllowUserModification(?bool $value ): void {
        $this->microsoftLauncherCustomWallpaperAllowUserModification = $value;
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperEnabled property value. Indicates whether or not to configure the wallpaper on the targeted devices.
     *  @param bool|null $value Value to set for the microsoftLauncherCustomWallpaperEnabled property.
    */
    public function setMicrosoftLauncherCustomWallpaperEnabled(?bool $value ): void {
        $this->microsoftLauncherCustomWallpaperEnabled = $value;
    }

    /**
     * Sets the microsoftLauncherCustomWallpaperImageUrl property value. Indicates the URL for the image file to use as the wallpaper on the targeted devices.
     *  @param string|null $value Value to set for the microsoftLauncherCustomWallpaperImageUrl property.
    */
    public function setMicrosoftLauncherCustomWallpaperImageUrl(?string $value ): void {
        $this->microsoftLauncherCustomWallpaperImageUrl = $value;
    }

    /**
     * Sets the microsoftLauncherDockPresenceAllowUserModification property value. Indicates whether or not the user can modify the device dock configuration on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherDockPresenceAllowUserModification property.
    */
    public function setMicrosoftLauncherDockPresenceAllowUserModification(?bool $value ): void {
        $this->microsoftLauncherDockPresenceAllowUserModification = $value;
    }

    /**
     * Sets the microsoftLauncherDockPresenceConfiguration property value. Indicates whether or not you want to configure the device dock. Possible values are: notConfigured, show, hide, disabled.
     *  @param MicrosoftLauncherDockPresence|null $value Value to set for the microsoftLauncherDockPresenceConfiguration property.
    */
    public function setMicrosoftLauncherDockPresenceConfiguration(?MicrosoftLauncherDockPresence $value ): void {
        $this->microsoftLauncherDockPresenceConfiguration = $value;
    }

    /**
     * Sets the microsoftLauncherFeedAllowUserModification property value. Indicates whether or not the user can modify the launcher feed on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherFeedAllowUserModification property.
    */
    public function setMicrosoftLauncherFeedAllowUserModification(?bool $value ): void {
        $this->microsoftLauncherFeedAllowUserModification = $value;
    }

    /**
     * Sets the microsoftLauncherFeedEnabled property value. Indicates whether or not you want to enable the launcher feed on the device.
     *  @param bool|null $value Value to set for the microsoftLauncherFeedEnabled property.
    */
    public function setMicrosoftLauncherFeedEnabled(?bool $value ): void {
        $this->microsoftLauncherFeedEnabled = $value;
    }

    /**
     * Sets the microsoftLauncherSearchBarPlacementConfiguration property value. Indicates the search bar placement configuration on the device. Possible values are: notConfigured, top, bottom, hide.
     *  @param MicrosoftLauncherSearchBarPlacement|null $value Value to set for the microsoftLauncherSearchBarPlacementConfiguration property.
    */
    public function setMicrosoftLauncherSearchBarPlacementConfiguration(?MicrosoftLauncherSearchBarPlacement $value ): void {
        $this->microsoftLauncherSearchBarPlacementConfiguration = $value;
    }

    /**
     * Sets the networkEscapeHatchAllowed property value. Indicates whether or not the device will allow connecting to a temporary network connection at boot time.
     *  @param bool|null $value Value to set for the networkEscapeHatchAllowed property.
    */
    public function setNetworkEscapeHatchAllowed(?bool $value ): void {
        $this->networkEscapeHatchAllowed = $value;
    }

    /**
     * Sets the nfcBlockOutgoingBeam property value. Indicates whether or not to block NFC outgoing beam.
     *  @param bool|null $value Value to set for the nfcBlockOutgoingBeam property.
    */
    public function setNfcBlockOutgoingBeam(?bool $value ): void {
        $this->nfcBlockOutgoingBeam = $value;
    }

    /**
     * Sets the passwordBlockKeyguard property value. Indicates whether or not the keyguard is disabled.
     *  @param bool|null $value Value to set for the passwordBlockKeyguard property.
    */
    public function setPasswordBlockKeyguard(?bool $value ): void {
        $this->passwordBlockKeyguard = $value;
    }

    /**
     * Sets the passwordBlockKeyguardFeatures property value. List of device keyguard features to block. This collection can contain a maximum of 7 elements.
     *  @param array<string>|null $value Value to set for the passwordBlockKeyguardFeatures property.
    */
    public function setPasswordBlockKeyguardFeatures(?array $value ): void {
        $this->passwordBlockKeyguardFeatures = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Indicates the amount of time that a password can be set for before it expires and a new password will be required. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Indicates the minimum length of the password required on the device. Valid values 4 to 16
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
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordCountToBlock property value. Indicates the length of password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordCountToBlock property.
    */
    public function setPasswordPreviousPasswordCountToBlock(?int $value ): void {
        $this->passwordPreviousPasswordCountToBlock = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Indicates the minimum password quality required on the device. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordRequireUnlock property value. Indicates the timeout period after which a device must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     *  @param AndroidDeviceOwnerRequiredPasswordUnlock|null $value Value to set for the passwordRequireUnlock property.
    */
    public function setPasswordRequireUnlock(?AndroidDeviceOwnerRequiredPasswordUnlock $value ): void {
        $this->passwordRequireUnlock = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect password before the device is wiped. Valid values 4 to 11
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the personalProfileAppsAllowInstallFromUnknownSources property value. Indicates whether the user can install apps from unknown sources on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileAppsAllowInstallFromUnknownSources property.
    */
    public function setPersonalProfileAppsAllowInstallFromUnknownSources(?bool $value ): void {
        $this->personalProfileAppsAllowInstallFromUnknownSources = $value;
    }

    /**
     * Sets the personalProfileCameraBlocked property value. Indicates whether to disable the use of the camera on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileCameraBlocked property.
    */
    public function setPersonalProfileCameraBlocked(?bool $value ): void {
        $this->personalProfileCameraBlocked = $value;
    }

    /**
     * Sets the personalProfilePersonalApplications property value. Policy applied to applications in the personal profile. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the personalProfilePersonalApplications property.
    */
    public function setPersonalProfilePersonalApplications(?array $value ): void {
        $this->personalProfilePersonalApplications = $value;
    }

    /**
     * Sets the personalProfilePlayStoreMode property value. Used together with PersonalProfilePersonalApplications to control how apps in the personal profile are allowed or blocked. Possible values are: notConfigured, blockedApps, allowedApps.
     *  @param PersonalProfilePersonalPlayStoreMode|null $value Value to set for the personalProfilePlayStoreMode property.
    */
    public function setPersonalProfilePlayStoreMode(?PersonalProfilePersonalPlayStoreMode $value ): void {
        $this->personalProfilePlayStoreMode = $value;
    }

    /**
     * Sets the personalProfileScreenCaptureBlocked property value. Indicates whether to disable the capability to take screenshots on the personal profile.
     *  @param bool|null $value Value to set for the personalProfileScreenCaptureBlocked property.
    */
    public function setPersonalProfileScreenCaptureBlocked(?bool $value ): void {
        $this->personalProfileScreenCaptureBlocked = $value;
    }

    /**
     * Sets the playStoreMode property value. Indicates the Play Store mode of the device. Possible values are: notConfigured, allowList, blockList.
     *  @param AndroidDeviceOwnerPlayStoreMode|null $value Value to set for the playStoreMode property.
    */
    public function setPlayStoreMode(?AndroidDeviceOwnerPlayStoreMode $value ): void {
        $this->playStoreMode = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to disable the capability to take screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the securityDeveloperSettingsEnabled property value. Indicates whether or not the user is allowed to access developer settings like developer options and safe boot on the device.
     *  @param bool|null $value Value to set for the securityDeveloperSettingsEnabled property.
    */
    public function setSecurityDeveloperSettingsEnabled(?bool $value ): void {
        $this->securityDeveloperSettingsEnabled = $value;
    }

    /**
     * Sets the securityRequireVerifyApps property value. Indicates whether or not verify apps is required.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value ): void {
        $this->securityRequireVerifyApps = $value;
    }

    /**
     * Sets the shortHelpText property value. Represents the customized short help text provided to users when they attempt to modify managed settings on their device.
     *  @param AndroidDeviceOwnerUserFacingMessage|null $value Value to set for the shortHelpText property.
    */
    public function setShortHelpText(?AndroidDeviceOwnerUserFacingMessage $value ): void {
        $this->shortHelpText = $value;
    }

    /**
     * Sets the statusBarBlocked property value. Indicates whether or the status bar is disabled, including notifications, quick settings and other screen overlays.
     *  @param bool|null $value Value to set for the statusBarBlocked property.
    */
    public function setStatusBarBlocked(?bool $value ): void {
        $this->statusBarBlocked = $value;
    }

    /**
     * Sets the stayOnModes property value. List of modes in which the device's display will stay powered-on. This collection can contain a maximum of 4 elements.
     *  @param array<string>|null $value Value to set for the stayOnModes property.
    */
    public function setStayOnModes(?array $value ): void {
        $this->stayOnModes = $value;
    }

    /**
     * Sets the storageAllowUsb property value. Indicates whether or not to allow USB mass storage.
     *  @param bool|null $value Value to set for the storageAllowUsb property.
    */
    public function setStorageAllowUsb(?bool $value ): void {
        $this->storageAllowUsb = $value;
    }

    /**
     * Sets the storageBlockExternalMedia property value. Indicates whether or not to block external media.
     *  @param bool|null $value Value to set for the storageBlockExternalMedia property.
    */
    public function setStorageBlockExternalMedia(?bool $value ): void {
        $this->storageBlockExternalMedia = $value;
    }

    /**
     * Sets the storageBlockUsbFileTransfer property value. Indicates whether or not to block USB file transfer.
     *  @param bool|null $value Value to set for the storageBlockUsbFileTransfer property.
    */
    public function setStorageBlockUsbFileTransfer(?bool $value ): void {
        $this->storageBlockUsbFileTransfer = $value;
    }

    /**
     * Sets the systemUpdateFreezePeriods property value. Indicates the annually repeating time periods during which system updates are postponed. This collection can contain a maximum of 500 elements.
     *  @param array<AndroidDeviceOwnerSystemUpdateFreezePeriod>|null $value Value to set for the systemUpdateFreezePeriods property.
    */
    public function setSystemUpdateFreezePeriods(?array $value ): void {
        $this->systemUpdateFreezePeriods = $value;
    }

    /**
     * Sets the systemUpdateInstallType property value. The type of system update configuration. Possible values are: deviceDefault, postpone, windowed, automatic.
     *  @param AndroidDeviceOwnerSystemUpdateInstallType|null $value Value to set for the systemUpdateInstallType property.
    */
    public function setSystemUpdateInstallType(?AndroidDeviceOwnerSystemUpdateInstallType $value ): void {
        $this->systemUpdateInstallType = $value;
    }

    /**
     * Sets the systemUpdateWindowEndMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window ends. Valid values 0 to 1440
     *  @param int|null $value Value to set for the systemUpdateWindowEndMinutesAfterMidnight property.
    */
    public function setSystemUpdateWindowEndMinutesAfterMidnight(?int $value ): void {
        $this->systemUpdateWindowEndMinutesAfterMidnight = $value;
    }

    /**
     * Sets the systemUpdateWindowStartMinutesAfterMidnight property value. Indicates the number of minutes after midnight that the system update window starts. Valid values 0 to 1440
     *  @param int|null $value Value to set for the systemUpdateWindowStartMinutesAfterMidnight property.
    */
    public function setSystemUpdateWindowStartMinutesAfterMidnight(?int $value ): void {
        $this->systemUpdateWindowStartMinutesAfterMidnight = $value;
    }

    /**
     * Sets the systemWindowsBlocked property value. Whether or not to block Android system prompt windows, like toasts, phone activities, and system alerts.
     *  @param bool|null $value Value to set for the systemWindowsBlocked property.
    */
    public function setSystemWindowsBlocked(?bool $value ): void {
        $this->systemWindowsBlocked = $value;
    }

    /**
     * Sets the usersBlockAdd property value. Indicates whether or not adding users and profiles is disabled.
     *  @param bool|null $value Value to set for the usersBlockAdd property.
    */
    public function setUsersBlockAdd(?bool $value ): void {
        $this->usersBlockAdd = $value;
    }

    /**
     * Sets the usersBlockRemove property value. Indicates whether or not to disable removing other users from the device.
     *  @param bool|null $value Value to set for the usersBlockRemove property.
    */
    public function setUsersBlockRemove(?bool $value ): void {
        $this->usersBlockRemove = $value;
    }

    /**
     * Sets the volumeBlockAdjustment property value. Indicates whether or not adjusting the master volume is disabled.
     *  @param bool|null $value Value to set for the volumeBlockAdjustment property.
    */
    public function setVolumeBlockAdjustment(?bool $value ): void {
        $this->volumeBlockAdjustment = $value;
    }

    /**
     * Sets the vpnAlwaysOnLockdownMode property value. If an always on VPN package name is specified, whether or not to lock network traffic when that VPN is disconnected.
     *  @param bool|null $value Value to set for the vpnAlwaysOnLockdownMode property.
    */
    public function setVpnAlwaysOnLockdownMode(?bool $value ): void {
        $this->vpnAlwaysOnLockdownMode = $value;
    }

    /**
     * Sets the vpnAlwaysOnPackageIdentifier property value. Android app package name for app that will handle an always-on VPN connection.
     *  @param string|null $value Value to set for the vpnAlwaysOnPackageIdentifier property.
    */
    public function setVpnAlwaysOnPackageIdentifier(?string $value ): void {
        $this->vpnAlwaysOnPackageIdentifier = $value;
    }

    /**
     * Sets the wifiBlockEditConfigurations property value. Indicates whether or not to block the user from editing the wifi connection settings.
     *  @param bool|null $value Value to set for the wifiBlockEditConfigurations property.
    */
    public function setWifiBlockEditConfigurations(?bool $value ): void {
        $this->wifiBlockEditConfigurations = $value;
    }

    /**
     * Sets the wifiBlockEditPolicyDefinedConfigurations property value. Indicates whether or not to block the user from editing just the networks defined by the policy.
     *  @param bool|null $value Value to set for the wifiBlockEditPolicyDefinedConfigurations property.
    */
    public function setWifiBlockEditPolicyDefinedConfigurations(?bool $value ): void {
        $this->wifiBlockEditPolicyDefinedConfigurations = $value;
    }

    /**
     * Sets the workProfilePasswordExpirationDays property value. Indicates the number of days that a work profile password can be set before it expires and a new password will be required. Valid values 1 to 365
     *  @param int|null $value Value to set for the workProfilePasswordExpirationDays property.
    */
    public function setWorkProfilePasswordExpirationDays(?int $value ): void {
        $this->workProfilePasswordExpirationDays = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumLength property value. Indicates the minimum length of the work profile password. Valid values 4 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLength property.
    */
    public function setWorkProfilePasswordMinimumLength(?int $value ): void {
        $this->workProfilePasswordMinimumLength = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumLetterCharacters property value. Indicates the minimum number of letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLetterCharacters property.
    */
    public function setWorkProfilePasswordMinimumLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumLowerCaseCharacters property value. Indicates the minimum number of lower-case characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumLowerCaseCharacters property.
    */
    public function setWorkProfilePasswordMinimumLowerCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumLowerCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumNonLetterCharacters property value. Indicates the minimum number of non-letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumNonLetterCharacters property.
    */
    public function setWorkProfilePasswordMinimumNonLetterCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumNonLetterCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumNumericCharacters property value. Indicates the minimum number of numeric characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumNumericCharacters property.
    */
    public function setWorkProfilePasswordMinimumNumericCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumNumericCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumSymbolCharacters property value. Indicates the minimum number of symbol characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumSymbolCharacters property.
    */
    public function setWorkProfilePasswordMinimumSymbolCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumSymbolCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordMinimumUpperCaseCharacters property value. Indicates the minimum number of upper-case letter characters required for the work profile password. Valid values 1 to 16
     *  @param int|null $value Value to set for the workProfilePasswordMinimumUpperCaseCharacters property.
    */
    public function setWorkProfilePasswordMinimumUpperCaseCharacters(?int $value ): void {
        $this->workProfilePasswordMinimumUpperCaseCharacters = $value;
    }

    /**
     * Sets the workProfilePasswordPreviousPasswordCountToBlock property value. Indicates the length of the work profile password history, where the user will not be able to enter a new password that is the same as any password in the history. Valid values 0 to 24
     *  @param int|null $value Value to set for the workProfilePasswordPreviousPasswordCountToBlock property.
    */
    public function setWorkProfilePasswordPreviousPasswordCountToBlock(?int $value ): void {
        $this->workProfilePasswordPreviousPasswordCountToBlock = $value;
    }

    /**
     * Sets the workProfilePasswordRequiredType property value. Indicates the minimum password quality required on the work profile password. Possible values are: deviceDefault, required, numeric, numericComplex, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, customPassword.
     *  @param AndroidDeviceOwnerRequiredPasswordType|null $value Value to set for the workProfilePasswordRequiredType property.
    */
    public function setWorkProfilePasswordRequiredType(?AndroidDeviceOwnerRequiredPasswordType $value ): void {
        $this->workProfilePasswordRequiredType = $value;
    }

    /**
     * Sets the workProfilePasswordRequireUnlock property value. Indicates the timeout period after which a work profile must be unlocked using a form of strong authentication. Possible values are: deviceDefault, daily, unkownFutureValue.
     *  @param AndroidDeviceOwnerRequiredPasswordUnlock|null $value Value to set for the workProfilePasswordRequireUnlock property.
    */
    public function setWorkProfilePasswordRequireUnlock(?AndroidDeviceOwnerRequiredPasswordUnlock $value ): void {
        $this->workProfilePasswordRequireUnlock = $value;
    }

    /**
     * Sets the workProfilePasswordSignInFailureCountBeforeFactoryReset property value. Indicates the number of times a user can enter an incorrect work profile password before the device is wiped. Valid values 4 to 11
     *  @param int|null $value Value to set for the workProfilePasswordSignInFailureCountBeforeFactoryReset property.
    */
    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = $value;
    }

}
