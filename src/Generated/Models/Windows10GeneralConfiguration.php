<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Psr\Http\Message\StreamInterface;

class Windows10GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $accountsBlockAddingNonMicrosoftAccountEmail Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
    */
    private ?bool $accountsBlockAddingNonMicrosoftAccountEmail = null;
    
    /**
     * @var Enablement|null $activateAppsWithVoice Possible values of a property
    */
    private ?Enablement $activateAppsWithVoice = null;
    
    /**
     * @var bool|null $antiTheftModeBlocked Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
    */
    private ?bool $antiTheftModeBlocked = null;
    
    /**
     * @var bool|null $appManagementMSIAllowUserControlOverInstall This policy setting permits users to change installation options that typically are available only to system administrators.
    */
    private ?bool $appManagementMSIAllowUserControlOverInstall = null;
    
    /**
     * @var bool|null $appManagementMSIAlwaysInstallWithElevatedPrivileges This policy setting directs Windows Installer to use elevated permissions when it installs any program on the system.
    */
    private ?bool $appManagementMSIAlwaysInstallWithElevatedPrivileges = null;
    
    /**
     * @var array<string>|null $appManagementPackageFamilyNamesToLaunchAfterLogOn List of semi-colon delimited Package Family Names of Windows apps. Listed Windows apps are to be launched after logon.​
    */
    private ?array $appManagementPackageFamilyNamesToLaunchAfterLogOn = null;
    
    /**
     * @var StateManagementSetting|null $appsAllowTrustedAppsSideloading State Management Setting.
    */
    private ?StateManagementSetting $appsAllowTrustedAppsSideloading = null;
    
    /**
     * @var bool|null $appsBlockWindowsStoreOriginatedApps Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
    */
    private ?bool $appsBlockWindowsStoreOriginatedApps = null;
    
    /**
     * @var bool|null $authenticationAllowSecondaryDevice Allows secondary authentication devices to work with Windows.
    */
    private ?bool $authenticationAllowSecondaryDevice = null;
    
    /**
     * @var string|null $authenticationPreferredAzureADTenantDomainName Specifies the preferred domain among available domains in the Azure AD tenant.
    */
    private ?string $authenticationPreferredAzureADTenantDomainName = null;
    
    /**
     * @var Enablement|null $authenticationWebSignIn Possible values of a property
    */
    private ?Enablement $authenticationWebSignIn = null;
    
    /**
     * @var array<string>|null $bluetoothAllowedServices Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
    */
    private ?array $bluetoothAllowedServices = null;
    
    /**
     * @var bool|null $bluetoothBlockAdvertising Whether or not to Block the user from using bluetooth advertising.
    */
    private ?bool $bluetoothBlockAdvertising = null;
    
    /**
     * @var bool|null $bluetoothBlockDiscoverableMode Whether or not to Block the user from using bluetooth discoverable mode.
    */
    private ?bool $bluetoothBlockDiscoverableMode = null;
    
    /**
     * @var bool|null $bluetoothBlocked Whether or not to Block the user from using bluetooth.
    */
    private ?bool $bluetoothBlocked = null;
    
    /**
     * @var bool|null $bluetoothBlockPrePairing Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
    */
    private ?bool $bluetoothBlockPrePairing = null;
    
    /**
     * @var bool|null $bluetoothBlockPromptedProximalConnections Whether or not to block the users from using Swift Pair and other proximity based scenarios.
    */
    private ?bool $bluetoothBlockPromptedProximalConnections = null;
    
    /**
     * @var bool|null $cameraBlocked Whether or not to Block the user from accessing the camera of the device.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockDataWhenRoaming Whether or not to Block the user from using data over cellular while roaming.
    */
    private ?bool $cellularBlockDataWhenRoaming = null;
    
    /**
     * @var bool|null $cellularBlockVpn Whether or not to Block the user from using VPN over cellular.
    */
    private ?bool $cellularBlockVpn = null;
    
    /**
     * @var bool|null $cellularBlockVpnWhenRoaming Whether or not to Block the user from using VPN when roaming over cellular.
    */
    private ?bool $cellularBlockVpnWhenRoaming = null;
    
    /**
     * @var ConfigurationUsage|null $cellularData Possible values of the ConfigurationUsage list.
    */
    private ?ConfigurationUsage $cellularData = null;
    
    /**
     * @var bool|null $certificatesBlockManualRootCertificateInstallation Whether or not to Block the user from doing manual root certificate installation.
    */
    private ?bool $certificatesBlockManualRootCertificateInstallation = null;
    
    /**
     * @var string|null $configureTimeZone Specifies the time zone to be applied to the device. This is the standard Windows name for the target time zone.
    */
    private ?string $configureTimeZone = null;
    
    /**
     * @var bool|null $connectedDevicesServiceBlocked Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
    */
    private ?bool $connectedDevicesServiceBlocked = null;
    
    /**
     * @var bool|null $copyPasteBlocked Whether or not to Block the user from using copy paste.
    */
    private ?bool $copyPasteBlocked = null;
    
    /**
     * @var bool|null $cortanaBlocked Whether or not to Block the user from using Cortana.
    */
    private ?bool $cortanaBlocked = null;
    
    /**
     * @var bool|null $cryptographyAllowFipsAlgorithmPolicy Specify whether to allow or disallow the Federal Information Processing Standard (FIPS) policy.
    */
    private ?bool $cryptographyAllowFipsAlgorithmPolicy = null;
    
    /**
     * @var bool|null $dataProtectionBlockDirectMemoryAccess This policy setting allows you to block direct memory access (DMA) for all hot pluggable PCI downstream ports until a user logs into Windows.
    */
    private ?bool $dataProtectionBlockDirectMemoryAccess = null;
    
    /**
     * @var bool|null $defenderBlockEndUserAccess Whether or not to block end user access to Defender.
    */
    private ?bool $defenderBlockEndUserAccess = null;
    
    /**
     * @var bool|null $defenderBlockOnAccessProtection Allows or disallows Windows Defender On Access Protection functionality.
    */
    private ?bool $defenderBlockOnAccessProtection = null;
    
    /**
     * @var DefenderCloudBlockLevelType|null $defenderCloudBlockLevel Possible values of Cloud Block Level
    */
    private ?DefenderCloudBlockLevelType $defenderCloudBlockLevel = null;
    
    /**
     * @var int|null $defenderCloudExtendedTimeout Timeout extension for file scanning by the cloud. Valid values 0 to 50
    */
    private ?int $defenderCloudExtendedTimeout = null;
    
    /**
     * @var int|null $defenderCloudExtendedTimeoutInSeconds Timeout extension for file scanning by the cloud. Valid values 0 to 50
    */
    private ?int $defenderCloudExtendedTimeoutInSeconds = null;
    
    /**
     * @var int|null $defenderDaysBeforeDeletingQuarantinedMalware Number of days before deleting quarantined malware. Valid values 0 to 90
    */
    private ?int $defenderDaysBeforeDeletingQuarantinedMalware = null;
    
    /**
     * @var DefenderDetectedMalwareActions|null $defenderDetectedMalwareActions Gets or sets Defender’s actions to take on detected Malware per threat level.
    */
    private ?DefenderDetectedMalwareActions $defenderDetectedMalwareActions = null;
    
    /**
     * @var bool|null $defenderDisableCatchupFullScan When blocked, catch-up scans for scheduled full scans will be turned off.
    */
    private ?bool $defenderDisableCatchupFullScan = null;
    
    /**
     * @var bool|null $defenderDisableCatchupQuickScan When blocked, catch-up scans for scheduled quick scans will be turned off.
    */
    private ?bool $defenderDisableCatchupQuickScan = null;
    
    /**
     * @var array<string>|null $defenderFileExtensionsToExclude File extensions to exclude from scans and real time protection.
    */
    private ?array $defenderFileExtensionsToExclude = null;
    
    /**
     * @var array<string>|null $defenderFilesAndFoldersToExclude Files and folder to exclude from scans and real time protection.
    */
    private ?array $defenderFilesAndFoldersToExclude = null;
    
    /**
     * @var DefenderMonitorFileActivity|null $defenderMonitorFileActivity Possible values for monitoring file activity.
    */
    private ?DefenderMonitorFileActivity $defenderMonitorFileActivity = null;
    
    /**
     * @var DefenderPotentiallyUnwantedAppAction|null $defenderPotentiallyUnwantedAppAction Gets or sets Defender’s action to take on Potentially Unwanted Application (PUA), which includes software with behaviors of ad-injection, software bundling, persistent solicitation for payment or subscription, etc. Defender alerts user when PUA is being downloaded or attempts to install itself. Added in Windows 10 for desktop. Possible values are: deviceDefault, block, audit.
    */
    private ?DefenderPotentiallyUnwantedAppAction $defenderPotentiallyUnwantedAppAction = null;
    
    /**
     * @var DefenderProtectionType|null $defenderPotentiallyUnwantedAppActionSetting Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderPotentiallyUnwantedAppActionSetting = null;
    
    /**
     * @var array<string>|null $defenderProcessesToExclude Processes to exclude from scans and real time protection.
    */
    private ?array $defenderProcessesToExclude = null;
    
    /**
     * @var DefenderPromptForSampleSubmission|null $defenderPromptForSampleSubmission Possible values for prompting user for samples submission.
    */
    private ?DefenderPromptForSampleSubmission $defenderPromptForSampleSubmission = null;
    
    /**
     * @var bool|null $defenderRequireBehaviorMonitoring Indicates whether or not to require behavior monitoring.
    */
    private ?bool $defenderRequireBehaviorMonitoring = null;
    
    /**
     * @var bool|null $defenderRequireCloudProtection Indicates whether or not to require cloud protection.
    */
    private ?bool $defenderRequireCloudProtection = null;
    
    /**
     * @var bool|null $defenderRequireNetworkInspectionSystem Indicates whether or not to require network inspection system.
    */
    private ?bool $defenderRequireNetworkInspectionSystem = null;
    
    /**
     * @var bool|null $defenderRequireRealTimeMonitoring Indicates whether or not to require real time monitoring.
    */
    private ?bool $defenderRequireRealTimeMonitoring = null;
    
    /**
     * @var bool|null $defenderScanArchiveFiles Indicates whether or not to scan archive files.
    */
    private ?bool $defenderScanArchiveFiles = null;
    
    /**
     * @var bool|null $defenderScanDownloads Indicates whether or not to scan downloads.
    */
    private ?bool $defenderScanDownloads = null;
    
    /**
     * @var bool|null $defenderScanIncomingMail Indicates whether or not to scan incoming mail messages.
    */
    private ?bool $defenderScanIncomingMail = null;
    
    /**
     * @var bool|null $defenderScanMappedNetworkDrivesDuringFullScan Indicates whether or not to scan mapped network drives during full scan.
    */
    private ?bool $defenderScanMappedNetworkDrivesDuringFullScan = null;
    
    /**
     * @var int|null $defenderScanMaxCpu Max CPU usage percentage during scan. Valid values 0 to 100
    */
    private ?int $defenderScanMaxCpu = null;
    
    /**
     * @var bool|null $defenderScanNetworkFiles Indicates whether or not to scan files opened from a network folder.
    */
    private ?bool $defenderScanNetworkFiles = null;
    
    /**
     * @var bool|null $defenderScanRemovableDrivesDuringFullScan Indicates whether or not to scan removable drives during full scan.
    */
    private ?bool $defenderScanRemovableDrivesDuringFullScan = null;
    
    /**
     * @var bool|null $defenderScanScriptsLoadedInInternetExplorer Indicates whether or not to scan scripts loaded in Internet Explorer browser.
    */
    private ?bool $defenderScanScriptsLoadedInInternetExplorer = null;
    
    /**
     * @var DefenderScanType|null $defenderScanType Possible values for system scan type.
    */
    private ?DefenderScanType $defenderScanType = null;
    
    /**
     * @var Time|null $defenderScheduledQuickScanTime The time to perform a daily quick scan.
    */
    private ?Time $defenderScheduledQuickScanTime = null;
    
    /**
     * @var Time|null $defenderScheduledScanTime The defender time for the system scan.
    */
    private ?Time $defenderScheduledScanTime = null;
    
    /**
     * @var bool|null $defenderScheduleScanEnableLowCpuPriority When enabled, low CPU priority will be used during scheduled scans.
    */
    private ?bool $defenderScheduleScanEnableLowCpuPriority = null;
    
    /**
     * @var int|null $defenderSignatureUpdateIntervalInHours The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
    */
    private ?int $defenderSignatureUpdateIntervalInHours = null;
    
    /**
     * @var DefenderSubmitSamplesConsentType|null $defenderSubmitSamplesConsentType Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
    */
    private ?DefenderSubmitSamplesConsentType $defenderSubmitSamplesConsentType = null;
    
    /**
     * @var WeeklySchedule|null $defenderSystemScanSchedule Possible values for a weekly schedule.
    */
    private ?WeeklySchedule $defenderSystemScanSchedule = null;
    
    /**
     * @var StateManagementSetting|null $developerUnlockSetting State Management Setting.
    */
    private ?StateManagementSetting $developerUnlockSetting = null;
    
    /**
     * @var bool|null $deviceManagementBlockFactoryResetOnMobile Indicates whether or not to Block the user from resetting their phone.
    */
    private ?bool $deviceManagementBlockFactoryResetOnMobile = null;
    
    /**
     * @var bool|null $deviceManagementBlockManualUnenroll Indicates whether or not to Block the user from doing manual un-enrollment from device management.
    */
    private ?bool $deviceManagementBlockManualUnenroll = null;
    
    /**
     * @var DiagnosticDataSubmissionMode|null $diagnosticsDataSubmissionMode Allow the device to send diagnostic and usage telemetry data, such as Watson.
    */
    private ?DiagnosticDataSubmissionMode $diagnosticsDataSubmissionMode = null;
    
    /**
     * @var array<string>|null $displayAppListWithGdiDPIScalingTurnedOff List of legacy applications that have GDI DPI Scaling turned off.
    */
    private ?array $displayAppListWithGdiDPIScalingTurnedOff = null;
    
    /**
     * @var array<string>|null $displayAppListWithGdiDPIScalingTurnedOn List of legacy applications that have GDI DPI Scaling turned on.
    */
    private ?array $displayAppListWithGdiDPIScalingTurnedOn = null;
    
    /**
     * @var bool|null $edgeAllowStartPagesModification Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
    */
    private ?bool $edgeAllowStartPagesModification = null;
    
    /**
     * @var bool|null $edgeBlockAccessToAboutFlags Indicates whether or not to prevent access to about flags on Edge browser.
    */
    private ?bool $edgeBlockAccessToAboutFlags = null;
    
    /**
     * @var bool|null $edgeBlockAddressBarDropdown Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
    */
    private ?bool $edgeBlockAddressBarDropdown = null;
    
    /**
     * @var bool|null $edgeBlockAutofill Indicates whether or not to block auto fill.
    */
    private ?bool $edgeBlockAutofill = null;
    
    /**
     * @var bool|null $edgeBlockCompatibilityList Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
    */
    private ?bool $edgeBlockCompatibilityList = null;
    
    /**
     * @var bool|null $edgeBlockDeveloperTools Indicates whether or not to block developer tools in the Edge browser.
    */
    private ?bool $edgeBlockDeveloperTools = null;
    
    /**
     * @var bool|null $edgeBlocked Indicates whether or not to Block the user from using the Edge browser.
    */
    private ?bool $edgeBlocked = null;
    
    /**
     * @var bool|null $edgeBlockEditFavorites Indicates whether or not to Block the user from making changes to Favorites.
    */
    private ?bool $edgeBlockEditFavorites = null;
    
    /**
     * @var bool|null $edgeBlockExtensions Indicates whether or not to block extensions in the Edge browser.
    */
    private ?bool $edgeBlockExtensions = null;
    
    /**
     * @var bool|null $edgeBlockFullScreenMode Allow or prevent Edge from entering the full screen mode.
    */
    private ?bool $edgeBlockFullScreenMode = null;
    
    /**
     * @var bool|null $edgeBlockInPrivateBrowsing Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
    */
    private ?bool $edgeBlockInPrivateBrowsing = null;
    
    /**
     * @var bool|null $edgeBlockJavaScript Indicates whether or not to Block the user from using JavaScript.
    */
    private ?bool $edgeBlockJavaScript = null;
    
    /**
     * @var bool|null $edgeBlockLiveTileDataCollection Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
    */
    private ?bool $edgeBlockLiveTileDataCollection = null;
    
    /**
     * @var bool|null $edgeBlockPasswordManager Indicates whether or not to Block password manager.
    */
    private ?bool $edgeBlockPasswordManager = null;
    
    /**
     * @var bool|null $edgeBlockPopups Indicates whether or not to block popups.
    */
    private ?bool $edgeBlockPopups = null;
    
    /**
     * @var bool|null $edgeBlockPrelaunch Decide whether Microsoft Edge is prelaunched at Windows startup.
    */
    private ?bool $edgeBlockPrelaunch = null;
    
    /**
     * @var bool|null $edgeBlockPrinting Configure Edge to allow or block printing.
    */
    private ?bool $edgeBlockPrinting = null;
    
    /**
     * @var bool|null $edgeBlockSavingHistory Configure Edge to allow browsing history to be saved or to never save browsing history.
    */
    private ?bool $edgeBlockSavingHistory = null;
    
    /**
     * @var bool|null $edgeBlockSearchEngineCustomization Indicates whether or not to block the user from adding new search engine or changing the default search engine.
    */
    private ?bool $edgeBlockSearchEngineCustomization = null;
    
    /**
     * @var bool|null $edgeBlockSearchSuggestions Indicates whether or not to block the user from using the search suggestions in the address bar.
    */
    private ?bool $edgeBlockSearchSuggestions = null;
    
    /**
     * @var bool|null $edgeBlockSendingDoNotTrackHeader Indicates whether or not to Block the user from sending the do not track header.
    */
    private ?bool $edgeBlockSendingDoNotTrackHeader = null;
    
    /**
     * @var bool|null $edgeBlockSendingIntranetTrafficToInternetExplorer Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
    */
    private ?bool $edgeBlockSendingIntranetTrafficToInternetExplorer = null;
    
    /**
     * @var bool|null $edgeBlockSideloadingExtensions Indicates whether the user can sideload extensions.
    */
    private ?bool $edgeBlockSideloadingExtensions = null;
    
    /**
     * @var bool|null $edgeBlockTabPreloading Configure whether Edge preloads the new tab page at Windows startup.
    */
    private ?bool $edgeBlockTabPreloading = null;
    
    /**
     * @var bool|null $edgeBlockWebContentOnNewTabPage Configure to load a blank page in Edge instead of the default New tab page and prevent users from changing it.
    */
    private ?bool $edgeBlockWebContentOnNewTabPage = null;
    
    /**
     * @var bool|null $edgeClearBrowsingDataOnExit Clear browsing data on exiting Microsoft Edge.
    */
    private ?bool $edgeClearBrowsingDataOnExit = null;
    
    /**
     * @var EdgeCookiePolicy|null $edgeCookiePolicy Possible values to specify which cookies are allowed in Microsoft Edge.
    */
    private ?EdgeCookiePolicy $edgeCookiePolicy = null;
    
    /**
     * @var bool|null $edgeDisableFirstRunPage Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
    */
    private ?bool $edgeDisableFirstRunPage = null;
    
    /**
     * @var string|null $edgeEnterpriseModeSiteListLocation Indicates the enterprise mode site list location. Could be a local file, local network or http location.
    */
    private ?string $edgeEnterpriseModeSiteListLocation = null;
    
    /**
     * @var VisibilitySetting|null $edgeFavoritesBarVisibility Generic visibility state.
    */
    private ?VisibilitySetting $edgeFavoritesBarVisibility = null;
    
    /**
     * @var string|null $edgeFavoritesListLocation The location of the favorites list to provision. Could be a local file, local network or http location.
    */
    private ?string $edgeFavoritesListLocation = null;
    
    /**
     * @var string|null $edgeFirstRunUrl The first run URL for when Edge browser is opened for the first time.
    */
    private ?string $edgeFirstRunUrl = null;
    
    /**
     * @var EdgeHomeButtonConfiguration|null $edgeHomeButtonConfiguration Causes the Home button to either hide, load the default Start page, load a New tab page, or a custom URL
    */
    private ?EdgeHomeButtonConfiguration $edgeHomeButtonConfiguration = null;
    
    /**
     * @var bool|null $edgeHomeButtonConfigurationEnabled Enable the Home button configuration.
    */
    private ?bool $edgeHomeButtonConfigurationEnabled = null;
    
    /**
     * @var array<string>|null $edgeHomepageUrls The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
    */
    private ?array $edgeHomepageUrls = null;
    
    /**
     * @var EdgeKioskModeRestrictionType|null $edgeKioskModeRestriction Specify how the Microsoft Edge settings are restricted based on kiosk mode.
    */
    private ?EdgeKioskModeRestrictionType $edgeKioskModeRestriction = null;
    
    /**
     * @var int|null $edgeKioskResetAfterIdleTimeInMinutes Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
    */
    private ?int $edgeKioskResetAfterIdleTimeInMinutes = null;
    
    /**
     * @var string|null $edgeNewTabPageURL Specify the page opened when new tabs are created.
    */
    private ?string $edgeNewTabPageURL = null;
    
    /**
     * @var EdgeOpenOptions|null $edgeOpensWith Possible values for the EdgeOpensWith setting.
    */
    private ?EdgeOpenOptions $edgeOpensWith = null;
    
    /**
     * @var bool|null $edgePreventCertificateErrorOverride Allow or prevent users from overriding certificate errors.
    */
    private ?bool $edgePreventCertificateErrorOverride = null;
    
    /**
     * @var array<string>|null $edgeRequiredExtensionPackageFamilyNames Specify the list of package family names of browser extensions that are required and cannot be turned off by the user.
    */
    private ?array $edgeRequiredExtensionPackageFamilyNames = null;
    
    /**
     * @var bool|null $edgeRequireSmartScreen Indicates whether or not to Require the user to use the smart screen filter.
    */
    private ?bool $edgeRequireSmartScreen = null;
    
    /**
     * @var EdgeSearchEngineBase|null $edgeSearchEngine Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
    */
    private ?EdgeSearchEngineBase $edgeSearchEngine = null;
    
    /**
     * @var bool|null $edgeSendIntranetTrafficToInternetExplorer Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
    */
    private ?bool $edgeSendIntranetTrafficToInternetExplorer = null;
    
    /**
     * @var InternetExplorerMessageSetting|null $edgeShowMessageWhenOpeningInternetExplorerSites What message will be displayed by Edge before switching to Internet Explorer.
    */
    private ?InternetExplorerMessageSetting $edgeShowMessageWhenOpeningInternetExplorerSites = null;
    
    /**
     * @var bool|null $edgeSyncFavoritesWithInternetExplorer Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
    */
    private ?bool $edgeSyncFavoritesWithInternetExplorer = null;
    
    /**
     * @var EdgeTelemetryMode|null $edgeTelemetryForMicrosoft365Analytics Type of browsing data sent to Microsoft 365 analytics
    */
    private ?EdgeTelemetryMode $edgeTelemetryForMicrosoft365Analytics = null;
    
    /**
     * @var bool|null $enableAutomaticRedeployment Allow users with administrative rights to delete all user data and settings using CTRL + Win + R at the device lock screen so that the device can be automatically re-configured and re-enrolled into management.
    */
    private ?bool $enableAutomaticRedeployment = null;
    
    /**
     * @var int|null $energySaverOnBatteryThresholdPercentage This setting allows you to specify battery charge level at which Energy Saver is turned on. While on battery, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
    */
    private ?int $energySaverOnBatteryThresholdPercentage = null;
    
    /**
     * @var int|null $energySaverPluggedInThresholdPercentage This setting allows you to specify battery charge level at which Energy Saver is turned on. While plugged in, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
    */
    private ?int $energySaverPluggedInThresholdPercentage = null;
    
    /**
     * @var string|null $enterpriseCloudPrintDiscoveryEndPoint Endpoint for discovering cloud printers.
    */
    private ?string $enterpriseCloudPrintDiscoveryEndPoint = null;
    
    /**
     * @var int|null $enterpriseCloudPrintDiscoveryMaxLimit Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
    */
    private ?int $enterpriseCloudPrintDiscoveryMaxLimit = null;
    
    /**
     * @var string|null $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier OAuth resource URI for printer discovery service as configured in Azure portal.
    */
    private ?string $enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = null;
    
    /**
     * @var string|null $enterpriseCloudPrintOAuthAuthority Authentication endpoint for acquiring OAuth tokens.
    */
    private ?string $enterpriseCloudPrintOAuthAuthority = null;
    
    /**
     * @var string|null $enterpriseCloudPrintOAuthClientIdentifier GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
    */
    private ?string $enterpriseCloudPrintOAuthClientIdentifier = null;
    
    /**
     * @var string|null $enterpriseCloudPrintResourceIdentifier OAuth resource URI for print service as configured in the Azure portal.
    */
    private ?string $enterpriseCloudPrintResourceIdentifier = null;
    
    /**
     * @var bool|null $experienceBlockDeviceDiscovery Indicates whether or not to enable device discovery UX.
    */
    private ?bool $experienceBlockDeviceDiscovery = null;
    
    /**
     * @var bool|null $experienceBlockErrorDialogWhenNoSIM Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
    */
    private ?bool $experienceBlockErrorDialogWhenNoSIM = null;
    
    /**
     * @var bool|null $experienceBlockTaskSwitcher Indicates whether or not to enable task switching on the device.
    */
    private ?bool $experienceBlockTaskSwitcher = null;
    
    /**
     * @var BrowserSyncSetting|null $experienceDoNotSyncBrowserSettings Allow(Not Configured) or prevent(Block) the syncing of Microsoft Edge Browser settings. Option to prevent syncing across devices, but allow user override.
    */
    private ?BrowserSyncSetting $experienceDoNotSyncBrowserSettings = null;
    
    /**
     * @var Enablement|null $findMyFiles Possible values of a property
    */
    private ?Enablement $findMyFiles = null;
    
    /**
     * @var bool|null $gameDvrBlocked Indicates whether or not to block DVR and broadcasting.
    */
    private ?bool $gameDvrBlocked = null;
    
    /**
     * @var InkAccessSetting|null $inkWorkspaceAccess Values for the InkWorkspaceAccess setting.
    */
    private ?InkAccessSetting $inkWorkspaceAccess = null;
    
    /**
     * @var StateManagementSetting|null $inkWorkspaceAccessState State Management Setting.
    */
    private ?StateManagementSetting $inkWorkspaceAccessState = null;
    
    /**
     * @var bool|null $inkWorkspaceBlockSuggestedApps Specify whether to show recommended app suggestions in the ink workspace.
    */
    private ?bool $inkWorkspaceBlockSuggestedApps = null;
    
    /**
     * @var bool|null $internetSharingBlocked Indicates whether or not to Block the user from using internet sharing.
    */
    private ?bool $internetSharingBlocked = null;
    
    /**
     * @var bool|null $locationServicesBlocked Indicates whether or not to Block the user from location services.
    */
    private ?bool $locationServicesBlocked = null;
    
    /**
     * @var Enablement|null $lockScreenActivateAppsWithVoice Possible values of a property
    */
    private ?Enablement $lockScreenActivateAppsWithVoice = null;
    
    /**
     * @var bool|null $lockScreenAllowTimeoutConfiguration Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
    */
    private ?bool $lockScreenAllowTimeoutConfiguration = null;
    
    /**
     * @var bool|null $lockScreenBlockActionCenterNotifications Indicates whether or not to block action center notifications over lock screen.
    */
    private ?bool $lockScreenBlockActionCenterNotifications = null;
    
    /**
     * @var bool|null $lockScreenBlockCortana Indicates whether or not the user can interact with Cortana using speech while the system is locked.
    */
    private ?bool $lockScreenBlockCortana = null;
    
    /**
     * @var bool|null $lockScreenBlockToastNotifications Indicates whether to allow toast notifications above the device lock screen.
    */
    private ?bool $lockScreenBlockToastNotifications = null;
    
    /**
     * @var int|null $lockScreenTimeoutInSeconds Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
    */
    private ?int $lockScreenTimeoutInSeconds = null;
    
    /**
     * @var bool|null $logonBlockFastUserSwitching Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
    */
    private ?bool $logonBlockFastUserSwitching = null;
    
    /**
     * @var bool|null $messagingBlockMMS Indicates whether or not to block the MMS send/receive functionality on the device.
    */
    private ?bool $messagingBlockMMS = null;
    
    /**
     * @var bool|null $messagingBlockRichCommunicationServices Indicates whether or not to block the RCS send/receive functionality on the device.
    */
    private ?bool $messagingBlockRichCommunicationServices = null;
    
    /**
     * @var bool|null $messagingBlockSync Indicates whether or not to block text message back up and restore and Messaging Everywhere.
    */
    private ?bool $messagingBlockSync = null;
    
    /**
     * @var bool|null $microsoftAccountBlocked Indicates whether or not to Block a Microsoft account.
    */
    private ?bool $microsoftAccountBlocked = null;
    
    /**
     * @var bool|null $microsoftAccountBlockSettingsSync Indicates whether or not to Block Microsoft account settings sync.
    */
    private ?bool $microsoftAccountBlockSettingsSync = null;
    
    /**
     * @var SignInAssistantOptions|null $microsoftAccountSignInAssistantSettings Values for the SignInAssistantSettings.
    */
    private ?SignInAssistantOptions $microsoftAccountSignInAssistantSettings = null;
    
    /**
     * @var bool|null $networkProxyApplySettingsDeviceWide If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
    */
    private ?bool $networkProxyApplySettingsDeviceWide = null;
    
    /**
     * @var string|null $networkProxyAutomaticConfigurationUrl Address to the proxy auto-config (PAC) script you want to use.
    */
    private ?string $networkProxyAutomaticConfigurationUrl = null;
    
    /**
     * @var bool|null $networkProxyDisableAutoDetect Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
    */
    private ?bool $networkProxyDisableAutoDetect = null;
    
    /**
     * @var Windows10NetworkProxyServer|null $networkProxyServer Specifies manual proxy server settings.
    */
    private ?Windows10NetworkProxyServer $networkProxyServer = null;
    
    /**
     * @var bool|null $nfcBlocked Indicates whether or not to Block the user from using near field communication.
    */
    private ?bool $nfcBlocked = null;
    
    /**
     * @var bool|null $oneDriveDisableFileSync Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
    */
    private ?bool $oneDriveDisableFileSync = null;
    
    /**
     * @var bool|null $passwordBlockSimple Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays The password expiration in days. Valid values 0 to 730
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumAgeInDays This security setting determines the period of time (in days) that a password must be used before the user can change it. Valid values 0 to 998
    */
    private ?int $passwordMinimumAgeInDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength The minimum password length. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout The minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount The number of previous passwords to prevent reuse of. Valid values 0 to 50
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Indicates whether or not to require the user to have a password.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $passwordRequireWhenResumeFromIdleState Indicates whether or not to require a password upon resuming from an idle state.
    */
    private ?bool $passwordRequireWhenResumeFromIdleState = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset The number of sign in failures before factory reset. Valid values 0 to 999
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var string|null $personalizationDesktopImageUrl A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
    */
    private ?string $personalizationDesktopImageUrl = null;
    
    /**
     * @var string|null $personalizationLockScreenImageUrl A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
    */
    private ?string $personalizationLockScreenImageUrl = null;
    
    /**
     * @var PowerActionType|null $powerButtonActionOnBattery Power action types
    */
    private ?PowerActionType $powerButtonActionOnBattery = null;
    
    /**
     * @var PowerActionType|null $powerButtonActionPluggedIn Power action types
    */
    private ?PowerActionType $powerButtonActionPluggedIn = null;
    
    /**
     * @var Enablement|null $powerHybridSleepOnBattery Possible values of a property
    */
    private ?Enablement $powerHybridSleepOnBattery = null;
    
    /**
     * @var Enablement|null $powerHybridSleepPluggedIn Possible values of a property
    */
    private ?Enablement $powerHybridSleepPluggedIn = null;
    
    /**
     * @var PowerActionType|null $powerLidCloseActionOnBattery Power action types
    */
    private ?PowerActionType $powerLidCloseActionOnBattery = null;
    
    /**
     * @var PowerActionType|null $powerLidCloseActionPluggedIn Power action types
    */
    private ?PowerActionType $powerLidCloseActionPluggedIn = null;
    
    /**
     * @var PowerActionType|null $powerSleepButtonActionOnBattery Power action types
    */
    private ?PowerActionType $powerSleepButtonActionOnBattery = null;
    
    /**
     * @var PowerActionType|null $powerSleepButtonActionPluggedIn Power action types
    */
    private ?PowerActionType $powerSleepButtonActionPluggedIn = null;
    
    /**
     * @var bool|null $printerBlockAddition Prevent user installation of additional printers from printers settings.
    */
    private ?bool $printerBlockAddition = null;
    
    /**
     * @var string|null $printerDefaultName Name (network host name) of an installed printer.
    */
    private ?string $printerDefaultName = null;
    
    /**
     * @var array<string>|null $printerNames Automatically provision printers based on their names (network host names).
    */
    private ?array $printerNames = null;
    
    /**
     * @var array<WindowsPrivacyDataAccessControlItem>|null $privacyAccessControls Indicates a list of applications with their access control levels over privacy data categories, and/or the default access levels per category. This collection can contain a maximum of 500 elements.
    */
    private ?array $privacyAccessControls = null;
    
    /**
     * @var StateManagementSetting|null $privacyAdvertisingId State Management Setting.
    */
    private ?StateManagementSetting $privacyAdvertisingId = null;
    
    /**
     * @var bool|null $privacyAutoAcceptPairingAndConsentPrompts Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
    */
    private ?bool $privacyAutoAcceptPairingAndConsentPrompts = null;
    
    /**
     * @var bool|null $privacyBlockActivityFeed Blocks the usage of cloud based speech services for Cortana, Dictation, or Store applications.
    */
    private ?bool $privacyBlockActivityFeed = null;
    
    /**
     * @var bool|null $privacyBlockInputPersonalization Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
    */
    private ?bool $privacyBlockInputPersonalization = null;
    
    /**
     * @var bool|null $privacyBlockPublishUserActivities Blocks the shared experiences/discovery of recently used resources in task switcher etc.
    */
    private ?bool $privacyBlockPublishUserActivities = null;
    
    /**
     * @var bool|null $privacyDisableLaunchExperience This policy prevents the privacy experience from launching during user logon for new and upgraded users.​
    */
    private ?bool $privacyDisableLaunchExperience = null;
    
    /**
     * @var bool|null $resetProtectionModeBlocked Indicates whether or not to Block the user from reset protection mode.
    */
    private ?bool $resetProtectionModeBlocked = null;
    
    /**
     * @var SafeSearchFilterType|null $safeSearchFilter Specifies what level of safe search (filtering adult content) is required
    */
    private ?SafeSearchFilterType $safeSearchFilter = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to Block the user from taking Screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $searchBlockDiacritics Specifies if search can use diacritics.
    */
    private ?bool $searchBlockDiacritics = null;
    
    /**
     * @var bool|null $searchBlockWebResults Indicates whether or not to block the web search.
    */
    private ?bool $searchBlockWebResults = null;
    
    /**
     * @var bool|null $searchDisableAutoLanguageDetection Specifies whether to use automatic language detection when indexing content and properties.
    */
    private ?bool $searchDisableAutoLanguageDetection = null;
    
    /**
     * @var bool|null $searchDisableIndexerBackoff Indicates whether or not to disable the search indexer backoff feature.
    */
    private ?bool $searchDisableIndexerBackoff = null;
    
    /**
     * @var bool|null $searchDisableIndexingEncryptedItems Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
    */
    private ?bool $searchDisableIndexingEncryptedItems = null;
    
    /**
     * @var bool|null $searchDisableIndexingRemovableDrive Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
    */
    private ?bool $searchDisableIndexingRemovableDrive = null;
    
    /**
     * @var bool|null $searchDisableLocation Specifies if search can use location information.
    */
    private ?bool $searchDisableLocation = null;
    
    /**
     * @var bool|null $searchDisableUseLocation Specifies if search can use location information.
    */
    private ?bool $searchDisableUseLocation = null;
    
    /**
     * @var bool|null $searchEnableAutomaticIndexSizeManangement Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
    */
    private ?bool $searchEnableAutomaticIndexSizeManangement = null;
    
    /**
     * @var bool|null $searchEnableRemoteQueries Indicates whether or not to block remote queries of this computer’s index.
    */
    private ?bool $searchEnableRemoteQueries = null;
    
    /**
     * @var bool|null $securityBlockAzureADJoinedDevicesAutoEncryption Specify whether to allow automatic device encryption during OOBE when the device is Azure AD joined (desktop only).
    */
    private ?bool $securityBlockAzureADJoinedDevicesAutoEncryption = null;
    
    /**
     * @var bool|null $settingsBlockAccountsPage Indicates whether or not to block access to Accounts in Settings app.
    */
    private ?bool $settingsBlockAccountsPage = null;
    
    /**
     * @var bool|null $settingsBlockAddProvisioningPackage Indicates whether or not to block the user from installing provisioning packages.
    */
    private ?bool $settingsBlockAddProvisioningPackage = null;
    
    /**
     * @var bool|null $settingsBlockAppsPage Indicates whether or not to block access to Apps in Settings app.
    */
    private ?bool $settingsBlockAppsPage = null;
    
    /**
     * @var bool|null $settingsBlockChangeLanguage Indicates whether or not to block the user from changing the language settings.
    */
    private ?bool $settingsBlockChangeLanguage = null;
    
    /**
     * @var bool|null $settingsBlockChangePowerSleep Indicates whether or not to block the user from changing power and sleep settings.
    */
    private ?bool $settingsBlockChangePowerSleep = null;
    
    /**
     * @var bool|null $settingsBlockChangeRegion Indicates whether or not to block the user from changing the region settings.
    */
    private ?bool $settingsBlockChangeRegion = null;
    
    /**
     * @var bool|null $settingsBlockChangeSystemTime Indicates whether or not to block the user from changing date and time settings.
    */
    private ?bool $settingsBlockChangeSystemTime = null;
    
    /**
     * @var bool|null $settingsBlockDevicesPage Indicates whether or not to block access to Devices in Settings app.
    */
    private ?bool $settingsBlockDevicesPage = null;
    
    /**
     * @var bool|null $settingsBlockEaseOfAccessPage Indicates whether or not to block access to Ease of Access in Settings app.
    */
    private ?bool $settingsBlockEaseOfAccessPage = null;
    
    /**
     * @var bool|null $settingsBlockEditDeviceName Indicates whether or not to block the user from editing the device name.
    */
    private ?bool $settingsBlockEditDeviceName = null;
    
    /**
     * @var bool|null $settingsBlockGamingPage Indicates whether or not to block access to Gaming in Settings app.
    */
    private ?bool $settingsBlockGamingPage = null;
    
    /**
     * @var bool|null $settingsBlockNetworkInternetPage Indicates whether or not to block access to Network & Internet in Settings app.
    */
    private ?bool $settingsBlockNetworkInternetPage = null;
    
    /**
     * @var bool|null $settingsBlockPersonalizationPage Indicates whether or not to block access to Personalization in Settings app.
    */
    private ?bool $settingsBlockPersonalizationPage = null;
    
    /**
     * @var bool|null $settingsBlockPrivacyPage Indicates whether or not to block access to Privacy in Settings app.
    */
    private ?bool $settingsBlockPrivacyPage = null;
    
    /**
     * @var bool|null $settingsBlockRemoveProvisioningPackage Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
    */
    private ?bool $settingsBlockRemoveProvisioningPackage = null;
    
    /**
     * @var bool|null $settingsBlockSettingsApp Indicates whether or not to block access to Settings app.
    */
    private ?bool $settingsBlockSettingsApp = null;
    
    /**
     * @var bool|null $settingsBlockSystemPage Indicates whether or not to block access to System in Settings app.
    */
    private ?bool $settingsBlockSystemPage = null;
    
    /**
     * @var bool|null $settingsBlockTimeLanguagePage Indicates whether or not to block access to Time & Language in Settings app.
    */
    private ?bool $settingsBlockTimeLanguagePage = null;
    
    /**
     * @var bool|null $settingsBlockUpdateSecurityPage Indicates whether or not to block access to Update & Security in Settings app.
    */
    private ?bool $settingsBlockUpdateSecurityPage = null;
    
    /**
     * @var bool|null $sharedUserAppDataAllowed Indicates whether or not to block multiple users of the same app to share data.
    */
    private ?bool $sharedUserAppDataAllowed = null;
    
    /**
     * @var AppInstallControlType|null $smartScreenAppInstallControl App Install control Setting
    */
    private ?AppInstallControlType $smartScreenAppInstallControl = null;
    
    /**
     * @var bool|null $smartScreenBlockPromptOverride Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
    */
    private ?bool $smartScreenBlockPromptOverride = null;
    
    /**
     * @var bool|null $smartScreenBlockPromptOverrideForFiles Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
    */
    private ?bool $smartScreenBlockPromptOverrideForFiles = null;
    
    /**
     * @var bool|null $smartScreenEnableAppInstallControl This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
    */
    private ?bool $smartScreenEnableAppInstallControl = null;
    
    /**
     * @var bool|null $startBlockUnpinningAppsFromTaskbar Indicates whether or not to block the user from unpinning apps from taskbar.
    */
    private ?bool $startBlockUnpinningAppsFromTaskbar = null;
    
    /**
     * @var WindowsStartMenuAppListVisibilityType|null $startMenuAppListVisibility Type of start menu app list visibility.
    */
    private ?WindowsStartMenuAppListVisibilityType $startMenuAppListVisibility = null;
    
    /**
     * @var bool|null $startMenuHideChangeAccountSettings Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideChangeAccountSettings = null;
    
    /**
     * @var bool|null $startMenuHideFrequentlyUsedApps Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideFrequentlyUsedApps = null;
    
    /**
     * @var bool|null $startMenuHideHibernate Enabling this policy hides hibernate from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideHibernate = null;
    
    /**
     * @var bool|null $startMenuHideLock Enabling this policy hides lock from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideLock = null;
    
    /**
     * @var bool|null $startMenuHidePowerButton Enabling this policy hides the power button from appearing in the start menu.
    */
    private ?bool $startMenuHidePowerButton = null;
    
    /**
     * @var bool|null $startMenuHideRecentJumpLists Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideRecentJumpLists = null;
    
    /**
     * @var bool|null $startMenuHideRecentlyAddedApps Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
    */
    private ?bool $startMenuHideRecentlyAddedApps = null;
    
    /**
     * @var bool|null $startMenuHideRestartOptions Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideRestartOptions = null;
    
    /**
     * @var bool|null $startMenuHideShutDown Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideShutDown = null;
    
    /**
     * @var bool|null $startMenuHideSignOut Enabling this policy hides sign out from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideSignOut = null;
    
    /**
     * @var bool|null $startMenuHideSleep Enabling this policy hides sleep from appearing in the power button in the start menu.
    */
    private ?bool $startMenuHideSleep = null;
    
    /**
     * @var bool|null $startMenuHideSwitchAccount Enabling this policy hides switch account from appearing in the user tile in the start menu.
    */
    private ?bool $startMenuHideSwitchAccount = null;
    
    /**
     * @var bool|null $startMenuHideUserTile Enabling this policy hides the user tile from appearing in the start menu.
    */
    private ?bool $startMenuHideUserTile = null;
    
    /**
     * @var StreamInterface|null $startMenuLayoutEdgeAssetsXml This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
    */
    private ?StreamInterface $startMenuLayoutEdgeAssetsXml = null;
    
    /**
     * @var StreamInterface|null $startMenuLayoutXml Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
    */
    private ?StreamInterface $startMenuLayoutXml = null;
    
    /**
     * @var WindowsStartMenuModeType|null $startMenuMode Type of display modes for the start menu.
    */
    private ?WindowsStartMenuModeType $startMenuMode = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderDocuments Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderDocuments = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderDownloads Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderDownloads = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderFileExplorer Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderFileExplorer = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderHomeGroup Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderHomeGroup = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderMusic Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderMusic = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderNetwork Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderNetwork = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderPersonalFolder Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderPersonalFolder = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderPictures Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderPictures = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderSettings Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderSettings = null;
    
    /**
     * @var VisibilitySetting|null $startMenuPinnedFolderVideos Generic visibility state.
    */
    private ?VisibilitySetting $startMenuPinnedFolderVideos = null;
    
    /**
     * @var bool|null $storageBlockRemovableStorage Indicates whether or not to Block the user from using removable storage.
    */
    private ?bool $storageBlockRemovableStorage = null;
    
    /**
     * @var bool|null $storageRequireMobileDeviceEncryption Indicating whether or not to require encryption on a mobile device.
    */
    private ?bool $storageRequireMobileDeviceEncryption = null;
    
    /**
     * @var bool|null $storageRestrictAppDataToSystemVolume Indicates whether application data is restricted to the system drive.
    */
    private ?bool $storageRestrictAppDataToSystemVolume = null;
    
    /**
     * @var bool|null $storageRestrictAppInstallToSystemVolume Indicates whether the installation of applications is restricted to the system drive.
    */
    private ?bool $storageRestrictAppInstallToSystemVolume = null;
    
    /**
     * @var string|null $systemTelemetryProxyServer Gets or sets the fully qualified domain name (FQDN) or IP address of a proxy server to forward Connected User Experiences and Telemetry requests.
    */
    private ?string $systemTelemetryProxyServer = null;
    
    /**
     * @var bool|null $taskManagerBlockEndTask Specify whether non-administrators can use Task Manager to end tasks.
    */
    private ?bool $taskManagerBlockEndTask = null;
    
    /**
     * @var bool|null $tenantLockdownRequireNetworkDuringOutOfBoxExperience Whether the device is required to connect to the network.
    */
    private ?bool $tenantLockdownRequireNetworkDuringOutOfBoxExperience = null;
    
    /**
     * @var bool|null $uninstallBuiltInApps Indicates whether or not to uninstall a fixed list of built-in Windows apps.
    */
    private ?bool $uninstallBuiltInApps = null;
    
    /**
     * @var bool|null $usbBlocked Indicates whether or not to Block the user from USB connection.
    */
    private ?bool $usbBlocked = null;
    
    /**
     * @var bool|null $voiceRecordingBlocked Indicates whether or not to Block the user from voice recording.
    */
    private ?bool $voiceRecordingBlocked = null;
    
    /**
     * @var bool|null $webRtcBlockLocalhostIpAddress Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
    */
    private ?bool $webRtcBlockLocalhostIpAddress = null;
    
    /**
     * @var bool|null $wiFiBlockAutomaticConnectHotspots Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
    */
    private ?bool $wiFiBlockAutomaticConnectHotspots = null;
    
    /**
     * @var bool|null $wiFiBlocked Indicates whether or not to Block the user from using Wi-Fi.
    */
    private ?bool $wiFiBlocked = null;
    
    /**
     * @var bool|null $wiFiBlockManualConfiguration Indicates whether or not to Block the user from using Wi-Fi manual configuration.
    */
    private ?bool $wiFiBlockManualConfiguration = null;
    
    /**
     * @var int|null $wiFiScanInterval Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
    */
    private ?int $wiFiScanInterval = null;
    
    /**
     * @var Windows10AppsForceUpdateSchedule|null $windows10AppsForceUpdateSchedule Windows 10 force update schedule for Apps.
    */
    private ?Windows10AppsForceUpdateSchedule $windows10AppsForceUpdateSchedule = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockConsumerSpecificFeatures Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
    */
    private ?bool $windowsSpotlightBlockConsumerSpecificFeatures = null;
    
    /**
     * @var bool|null $windowsSpotlightBlocked Allows IT admins to turn off all Windows Spotlight features
    */
    private ?bool $windowsSpotlightBlocked = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockOnActionCenter Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
    */
    private ?bool $windowsSpotlightBlockOnActionCenter = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockTailoredExperiences Block personalized content in Windows spotlight based on user’s device usage.
    */
    private ?bool $windowsSpotlightBlockTailoredExperiences = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockThirdPartyNotifications Block third party content delivered via Windows Spotlight
    */
    private ?bool $windowsSpotlightBlockThirdPartyNotifications = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockWelcomeExperience Block Windows Spotlight Windows welcome experience
    */
    private ?bool $windowsSpotlightBlockWelcomeExperience = null;
    
    /**
     * @var bool|null $windowsSpotlightBlockWindowsTips Allows IT admins to turn off the popup of Windows Tips.
    */
    private ?bool $windowsSpotlightBlockWindowsTips = null;
    
    /**
     * @var WindowsSpotlightEnablementSettings|null $windowsSpotlightConfigureOnLockScreen Allows IT admind to set a predefined default search engine for MDM-Controlled devices
    */
    private ?WindowsSpotlightEnablementSettings $windowsSpotlightConfigureOnLockScreen = null;
    
    /**
     * @var bool|null $windowsStoreBlockAutoUpdate Indicates whether or not to block automatic update of apps from Windows Store.
    */
    private ?bool $windowsStoreBlockAutoUpdate = null;
    
    /**
     * @var bool|null $windowsStoreBlocked Indicates whether or not to Block the user from using the Windows store.
    */
    private ?bool $windowsStoreBlocked = null;
    
    /**
     * @var bool|null $windowsStoreEnablePrivateStoreOnly Indicates whether or not to enable Private Store Only.
    */
    private ?bool $windowsStoreEnablePrivateStoreOnly = null;
    
    /**
     * @var bool|null $wirelessDisplayBlockProjectionToThisDevice Indicates whether or not to allow other devices from discovering this PC for projection.
    */
    private ?bool $wirelessDisplayBlockProjectionToThisDevice = null;
    
    /**
     * @var bool|null $wirelessDisplayBlockUserInputFromReceiver Indicates whether or not to allow user input from wireless display receiver.
    */
    private ?bool $wirelessDisplayBlockUserInputFromReceiver = null;
    
    /**
     * @var bool|null $wirelessDisplayRequirePinForPairing Indicates whether or not to require a PIN for new devices to initiate pairing.
    */
    private ?bool $wirelessDisplayRequirePinForPairing = null;
    
    /**
     * Instantiates a new Windows10GeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10GeneralConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10GeneralConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10GeneralConfiguration {
        return new Windows10GeneralConfiguration();
    }

    /**
     * Gets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     * @return bool|null
    */
    public function getAccountsBlockAddingNonMicrosoftAccountEmail(): ?bool {
        return $this->accountsBlockAddingNonMicrosoftAccountEmail;
    }

    /**
     * Gets the activateAppsWithVoice property value. Possible values of a property
     * @return Enablement|null
    */
    public function getActivateAppsWithVoice(): ?Enablement {
        return $this->activateAppsWithVoice;
    }

    /**
     * Gets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     * @return bool|null
    */
    public function getAntiTheftModeBlocked(): ?bool {
        return $this->antiTheftModeBlocked;
    }

    /**
     * Gets the appManagementMSIAllowUserControlOverInstall property value. This policy setting permits users to change installation options that typically are available only to system administrators.
     * @return bool|null
    */
    public function getAppManagementMSIAllowUserControlOverInstall(): ?bool {
        return $this->appManagementMSIAllowUserControlOverInstall;
    }

    /**
     * Gets the appManagementMSIAlwaysInstallWithElevatedPrivileges property value. This policy setting directs Windows Installer to use elevated permissions when it installs any program on the system.
     * @return bool|null
    */
    public function getAppManagementMSIAlwaysInstallWithElevatedPrivileges(): ?bool {
        return $this->appManagementMSIAlwaysInstallWithElevatedPrivileges;
    }

    /**
     * Gets the appManagementPackageFamilyNamesToLaunchAfterLogOn property value. List of semi-colon delimited Package Family Names of Windows apps. Listed Windows apps are to be launched after logon.​
     * @return array<string>|null
    */
    public function getAppManagementPackageFamilyNamesToLaunchAfterLogOn(): ?array {
        return $this->appManagementPackageFamilyNamesToLaunchAfterLogOn;
    }

    /**
     * Gets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getAppsAllowTrustedAppsSideloading(): ?StateManagementSetting {
        return $this->appsAllowTrustedAppsSideloading;
    }

    /**
     * Gets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     * @return bool|null
    */
    public function getAppsBlockWindowsStoreOriginatedApps(): ?bool {
        return $this->appsBlockWindowsStoreOriginatedApps;
    }

    /**
     * Gets the authenticationAllowSecondaryDevice property value. Allows secondary authentication devices to work with Windows.
     * @return bool|null
    */
    public function getAuthenticationAllowSecondaryDevice(): ?bool {
        return $this->authenticationAllowSecondaryDevice;
    }

    /**
     * Gets the authenticationPreferredAzureADTenantDomainName property value. Specifies the preferred domain among available domains in the Azure AD tenant.
     * @return string|null
    */
    public function getAuthenticationPreferredAzureADTenantDomainName(): ?string {
        return $this->authenticationPreferredAzureADTenantDomainName;
    }

    /**
     * Gets the authenticationWebSignIn property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAuthenticationWebSignIn(): ?Enablement {
        return $this->authenticationWebSignIn;
    }

    /**
     * Gets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @return array<string>|null
    */
    public function getBluetoothAllowedServices(): ?array {
        return $this->bluetoothAllowedServices;
    }

    /**
     * Gets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     * @return bool|null
    */
    public function getBluetoothBlockAdvertising(): ?bool {
        return $this->bluetoothBlockAdvertising;
    }

    /**
     * Gets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     * @return bool|null
    */
    public function getBluetoothBlockDiscoverableMode(): ?bool {
        return $this->bluetoothBlockDiscoverableMode;
    }

    /**
     * Gets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->bluetoothBlocked;
    }

    /**
     * Gets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     * @return bool|null
    */
    public function getBluetoothBlockPrePairing(): ?bool {
        return $this->bluetoothBlockPrePairing;
    }

    /**
     * Gets the bluetoothBlockPromptedProximalConnections property value. Whether or not to block the users from using Swift Pair and other proximity based scenarios.
     * @return bool|null
    */
    public function getBluetoothBlockPromptedProximalConnections(): ?bool {
        return $this->bluetoothBlockPromptedProximalConnections;
    }

    /**
     * Gets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     * @return bool|null
    */
    public function getCellularBlockDataWhenRoaming(): ?bool {
        return $this->cellularBlockDataWhenRoaming;
    }

    /**
     * Gets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpn(): ?bool {
        return $this->cellularBlockVpn;
    }

    /**
     * Gets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpnWhenRoaming(): ?bool {
        return $this->cellularBlockVpnWhenRoaming;
    }

    /**
     * Gets the cellularData property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getCellularData(): ?ConfigurationUsage {
        return $this->cellularData;
    }

    /**
     * Gets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     * @return bool|null
    */
    public function getCertificatesBlockManualRootCertificateInstallation(): ?bool {
        return $this->certificatesBlockManualRootCertificateInstallation;
    }

    /**
     * Gets the configureTimeZone property value. Specifies the time zone to be applied to the device. This is the standard Windows name for the target time zone.
     * @return string|null
    */
    public function getConfigureTimeZone(): ?string {
        return $this->configureTimeZone;
    }

    /**
     * Gets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     * @return bool|null
    */
    public function getConnectedDevicesServiceBlocked(): ?bool {
        return $this->connectedDevicesServiceBlocked;
    }

    /**
     * Gets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     * @return bool|null
    */
    public function getCopyPasteBlocked(): ?bool {
        return $this->copyPasteBlocked;
    }

    /**
     * Gets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     * @return bool|null
    */
    public function getCortanaBlocked(): ?bool {
        return $this->cortanaBlocked;
    }

    /**
     * Gets the cryptographyAllowFipsAlgorithmPolicy property value. Specify whether to allow or disallow the Federal Information Processing Standard (FIPS) policy.
     * @return bool|null
    */
    public function getCryptographyAllowFipsAlgorithmPolicy(): ?bool {
        return $this->cryptographyAllowFipsAlgorithmPolicy;
    }

    /**
     * Gets the dataProtectionBlockDirectMemoryAccess property value. This policy setting allows you to block direct memory access (DMA) for all hot pluggable PCI downstream ports until a user logs into Windows.
     * @return bool|null
    */
    public function getDataProtectionBlockDirectMemoryAccess(): ?bool {
        return $this->dataProtectionBlockDirectMemoryAccess;
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        return $this->defenderBlockEndUserAccess;
    }

    /**
     * Gets the defenderBlockOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderBlockOnAccessProtection(): ?bool {
        return $this->defenderBlockOnAccessProtection;
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        return $this->defenderCloudBlockLevel;
    }

    /**
     * Gets the defenderCloudExtendedTimeout property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeout(): ?int {
        return $this->defenderCloudExtendedTimeout;
    }

    /**
     * Gets the defenderCloudExtendedTimeoutInSeconds property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeoutInSeconds(): ?int {
        return $this->defenderCloudExtendedTimeoutInSeconds;
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        return $this->defenderDaysBeforeDeletingQuarantinedMalware;
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        return $this->defenderDetectedMalwareActions;
    }

    /**
     * Gets the defenderDisableCatchupFullScan property value. When blocked, catch-up scans for scheduled full scans will be turned off.
     * @return bool|null
    */
    public function getDefenderDisableCatchupFullScan(): ?bool {
        return $this->defenderDisableCatchupFullScan;
    }

    /**
     * Gets the defenderDisableCatchupQuickScan property value. When blocked, catch-up scans for scheduled quick scans will be turned off.
     * @return bool|null
    */
    public function getDefenderDisableCatchupQuickScan(): ?bool {
        return $this->defenderDisableCatchupQuickScan;
    }

    /**
     * Gets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFileExtensionsToExclude(): ?array {
        return $this->defenderFileExtensionsToExclude;
    }

    /**
     * Gets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFilesAndFoldersToExclude(): ?array {
        return $this->defenderFilesAndFoldersToExclude;
    }

    /**
     * Gets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     * @return DefenderMonitorFileActivity|null
    */
    public function getDefenderMonitorFileActivity(): ?DefenderMonitorFileActivity {
        return $this->defenderMonitorFileActivity;
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppAction property value. Gets or sets Defender’s action to take on Potentially Unwanted Application (PUA), which includes software with behaviors of ad-injection, software bundling, persistent solicitation for payment or subscription, etc. Defender alerts user when PUA is being downloaded or attempts to install itself. Added in Windows 10 for desktop. Possible values are: deviceDefault, block, audit.
     * @return DefenderPotentiallyUnwantedAppAction|null
    */
    public function getDefenderPotentiallyUnwantedAppAction(): ?DefenderPotentiallyUnwantedAppAction {
        return $this->defenderPotentiallyUnwantedAppAction;
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppActionSetting property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderPotentiallyUnwantedAppActionSetting(): ?DefenderProtectionType {
        return $this->defenderPotentiallyUnwantedAppActionSetting;
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        return $this->defenderProcessesToExclude;
    }

    /**
     * Gets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     * @return DefenderPromptForSampleSubmission|null
    */
    public function getDefenderPromptForSampleSubmission(): ?DefenderPromptForSampleSubmission {
        return $this->defenderPromptForSampleSubmission;
    }

    /**
     * Gets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     * @return bool|null
    */
    public function getDefenderRequireBehaviorMonitoring(): ?bool {
        return $this->defenderRequireBehaviorMonitoring;
    }

    /**
     * Gets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     * @return bool|null
    */
    public function getDefenderRequireCloudProtection(): ?bool {
        return $this->defenderRequireCloudProtection;
    }

    /**
     * Gets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     * @return bool|null
    */
    public function getDefenderRequireNetworkInspectionSystem(): ?bool {
        return $this->defenderRequireNetworkInspectionSystem;
    }

    /**
     * Gets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     * @return bool|null
    */
    public function getDefenderRequireRealTimeMonitoring(): ?bool {
        return $this->defenderRequireRealTimeMonitoring;
    }

    /**
     * Gets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     * @return bool|null
    */
    public function getDefenderScanArchiveFiles(): ?bool {
        return $this->defenderScanArchiveFiles;
    }

    /**
     * Gets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     * @return bool|null
    */
    public function getDefenderScanDownloads(): ?bool {
        return $this->defenderScanDownloads;
    }

    /**
     * Gets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     * @return bool|null
    */
    public function getDefenderScanIncomingMail(): ?bool {
        return $this->defenderScanIncomingMail;
    }

    /**
     * Gets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanMappedNetworkDrivesDuringFullScan(): ?bool {
        return $this->defenderScanMappedNetworkDrivesDuringFullScan;
    }

    /**
     * Gets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpu(): ?int {
        return $this->defenderScanMaxCpu;
    }

    /**
     * Gets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     * @return bool|null
    */
    public function getDefenderScanNetworkFiles(): ?bool {
        return $this->defenderScanNetworkFiles;
    }

    /**
     * Gets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanRemovableDrivesDuringFullScan(): ?bool {
        return $this->defenderScanRemovableDrivesDuringFullScan;
    }

    /**
     * Gets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     * @return bool|null
    */
    public function getDefenderScanScriptsLoadedInInternetExplorer(): ?bool {
        return $this->defenderScanScriptsLoadedInInternetExplorer;
    }

    /**
     * Gets the defenderScanType property value. Possible values for system scan type.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        return $this->defenderScanType;
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        return $this->defenderScheduledQuickScanTime;
    }

    /**
     * Gets the defenderScheduledScanTime property value. The defender time for the system scan.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        return $this->defenderScheduledScanTime;
    }

    /**
     * Gets the defenderScheduleScanEnableLowCpuPriority property value. When enabled, low CPU priority will be used during scheduled scans.
     * @return bool|null
    */
    public function getDefenderScheduleScanEnableLowCpuPriority(): ?bool {
        return $this->defenderScheduleScanEnableLowCpuPriority;
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     * @return int|null
    */
    public function getDefenderSignatureUpdateIntervalInHours(): ?int {
        return $this->defenderSignatureUpdateIntervalInHours;
    }

    /**
     * Gets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     * @return DefenderSubmitSamplesConsentType|null
    */
    public function getDefenderSubmitSamplesConsentType(): ?DefenderSubmitSamplesConsentType {
        return $this->defenderSubmitSamplesConsentType;
    }

    /**
     * Gets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getDefenderSystemScanSchedule(): ?WeeklySchedule {
        return $this->defenderSystemScanSchedule;
    }

    /**
     * Gets the developerUnlockSetting property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getDeveloperUnlockSetting(): ?StateManagementSetting {
        return $this->developerUnlockSetting;
    }

    /**
     * Gets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     * @return bool|null
    */
    public function getDeviceManagementBlockFactoryResetOnMobile(): ?bool {
        return $this->deviceManagementBlockFactoryResetOnMobile;
    }

    /**
     * Gets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     * @return bool|null
    */
    public function getDeviceManagementBlockManualUnenroll(): ?bool {
        return $this->deviceManagementBlockManualUnenroll;
    }

    /**
     * Gets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     * @return DiagnosticDataSubmissionMode|null
    */
    public function getDiagnosticsDataSubmissionMode(): ?DiagnosticDataSubmissionMode {
        return $this->diagnosticsDataSubmissionMode;
    }

    /**
     * Gets the displayAppListWithGdiDPIScalingTurnedOff property value. List of legacy applications that have GDI DPI Scaling turned off.
     * @return array<string>|null
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOff(): ?array {
        return $this->displayAppListWithGdiDPIScalingTurnedOff;
    }

    /**
     * Gets the displayAppListWithGdiDPIScalingTurnedOn property value. List of legacy applications that have GDI DPI Scaling turned on.
     * @return array<string>|null
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOn(): ?array {
        return $this->displayAppListWithGdiDPIScalingTurnedOn;
    }

    /**
     * Gets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     * @return bool|null
    */
    public function getEdgeAllowStartPagesModification(): ?bool {
        return $this->edgeAllowStartPagesModification;
    }

    /**
     * Gets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockAccessToAboutFlags(): ?bool {
        return $this->edgeBlockAccessToAboutFlags;
    }

    /**
     * Gets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     * @return bool|null
    */
    public function getEdgeBlockAddressBarDropdown(): ?bool {
        return $this->edgeBlockAddressBarDropdown;
    }

    /**
     * Gets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getEdgeBlockAutofill(): ?bool {
        return $this->edgeBlockAutofill;
    }

    /**
     * Gets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     * @return bool|null
    */
    public function getEdgeBlockCompatibilityList(): ?bool {
        return $this->edgeBlockCompatibilityList;
    }

    /**
     * Gets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockDeveloperTools(): ?bool {
        return $this->edgeBlockDeveloperTools;
    }

    /**
     * Gets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlocked(): ?bool {
        return $this->edgeBlocked;
    }

    /**
     * Gets the edgeBlockEditFavorites property value. Indicates whether or not to Block the user from making changes to Favorites.
     * @return bool|null
    */
    public function getEdgeBlockEditFavorites(): ?bool {
        return $this->edgeBlockEditFavorites;
    }

    /**
     * Gets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockExtensions(): ?bool {
        return $this->edgeBlockExtensions;
    }

    /**
     * Gets the edgeBlockFullScreenMode property value. Allow or prevent Edge from entering the full screen mode.
     * @return bool|null
    */
    public function getEdgeBlockFullScreenMode(): ?bool {
        return $this->edgeBlockFullScreenMode;
    }

    /**
     * Gets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockInPrivateBrowsing(): ?bool {
        return $this->edgeBlockInPrivateBrowsing;
    }

    /**
     * Gets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getEdgeBlockJavaScript(): ?bool {
        return $this->edgeBlockJavaScript;
    }

    /**
     * Gets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeBlockLiveTileDataCollection(): ?bool {
        return $this->edgeBlockLiveTileDataCollection;
    }

    /**
     * Gets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     * @return bool|null
    */
    public function getEdgeBlockPasswordManager(): ?bool {
        return $this->edgeBlockPasswordManager;
    }

    /**
     * Gets the edgeBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getEdgeBlockPopups(): ?bool {
        return $this->edgeBlockPopups;
    }

    /**
     * Gets the edgeBlockPrelaunch property value. Decide whether Microsoft Edge is prelaunched at Windows startup.
     * @return bool|null
    */
    public function getEdgeBlockPrelaunch(): ?bool {
        return $this->edgeBlockPrelaunch;
    }

    /**
     * Gets the edgeBlockPrinting property value. Configure Edge to allow or block printing.
     * @return bool|null
    */
    public function getEdgeBlockPrinting(): ?bool {
        return $this->edgeBlockPrinting;
    }

    /**
     * Gets the edgeBlockSavingHistory property value. Configure Edge to allow browsing history to be saved or to never save browsing history.
     * @return bool|null
    */
    public function getEdgeBlockSavingHistory(): ?bool {
        return $this->edgeBlockSavingHistory;
    }

    /**
     * Gets the edgeBlockSearchEngineCustomization property value. Indicates whether or not to block the user from adding new search engine or changing the default search engine.
     * @return bool|null
    */
    public function getEdgeBlockSearchEngineCustomization(): ?bool {
        return $this->edgeBlockSearchEngineCustomization;
    }

    /**
     * Gets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     * @return bool|null
    */
    public function getEdgeBlockSearchSuggestions(): ?bool {
        return $this->edgeBlockSearchSuggestions;
    }

    /**
     * Gets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getEdgeBlockSendingDoNotTrackHeader(): ?bool {
        return $this->edgeBlockSendingDoNotTrackHeader;
    }

    /**
     * Gets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     * @return bool|null
    */
    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer(): ?bool {
        return $this->edgeBlockSendingIntranetTrafficToInternetExplorer;
    }

    /**
     * Gets the edgeBlockSideloadingExtensions property value. Indicates whether the user can sideload extensions.
     * @return bool|null
    */
    public function getEdgeBlockSideloadingExtensions(): ?bool {
        return $this->edgeBlockSideloadingExtensions;
    }

    /**
     * Gets the edgeBlockTabPreloading property value. Configure whether Edge preloads the new tab page at Windows startup.
     * @return bool|null
    */
    public function getEdgeBlockTabPreloading(): ?bool {
        return $this->edgeBlockTabPreloading;
    }

    /**
     * Gets the edgeBlockWebContentOnNewTabPage property value. Configure to load a blank page in Edge instead of the default New tab page and prevent users from changing it.
     * @return bool|null
    */
    public function getEdgeBlockWebContentOnNewTabPage(): ?bool {
        return $this->edgeBlockWebContentOnNewTabPage;
    }

    /**
     * Gets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeClearBrowsingDataOnExit(): ?bool {
        return $this->edgeClearBrowsingDataOnExit;
    }

    /**
     * Gets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     * @return EdgeCookiePolicy|null
    */
    public function getEdgeCookiePolicy(): ?EdgeCookiePolicy {
        return $this->edgeCookiePolicy;
    }

    /**
     * Gets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     * @return bool|null
    */
    public function getEdgeDisableFirstRunPage(): ?bool {
        return $this->edgeDisableFirstRunPage;
    }

    /**
     * Gets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeEnterpriseModeSiteListLocation(): ?string {
        return $this->edgeEnterpriseModeSiteListLocation;
    }

    /**
     * Gets the edgeFavoritesBarVisibility property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getEdgeFavoritesBarVisibility(): ?VisibilitySetting {
        return $this->edgeFavoritesBarVisibility;
    }

    /**
     * Gets the edgeFavoritesListLocation property value. The location of the favorites list to provision. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeFavoritesListLocation(): ?string {
        return $this->edgeFavoritesListLocation;
    }

    /**
     * Gets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     * @return string|null
    */
    public function getEdgeFirstRunUrl(): ?string {
        return $this->edgeFirstRunUrl;
    }

    /**
     * Gets the edgeHomeButtonConfiguration property value. Causes the Home button to either hide, load the default Start page, load a New tab page, or a custom URL
     * @return EdgeHomeButtonConfiguration|null
    */
    public function getEdgeHomeButtonConfiguration(): ?EdgeHomeButtonConfiguration {
        return $this->edgeHomeButtonConfiguration;
    }

    /**
     * Gets the edgeHomeButtonConfigurationEnabled property value. Enable the Home button configuration.
     * @return bool|null
    */
    public function getEdgeHomeButtonConfigurationEnabled(): ?bool {
        return $this->edgeHomeButtonConfigurationEnabled;
    }

    /**
     * Gets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @return array<string>|null
    */
    public function getEdgeHomepageUrls(): ?array {
        return $this->edgeHomepageUrls;
    }

    /**
     * Gets the edgeKioskModeRestriction property value. Specify how the Microsoft Edge settings are restricted based on kiosk mode.
     * @return EdgeKioskModeRestrictionType|null
    */
    public function getEdgeKioskModeRestriction(): ?EdgeKioskModeRestrictionType {
        return $this->edgeKioskModeRestriction;
    }

    /**
     * Gets the edgeKioskResetAfterIdleTimeInMinutes property value. Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
     * @return int|null
    */
    public function getEdgeKioskResetAfterIdleTimeInMinutes(): ?int {
        return $this->edgeKioskResetAfterIdleTimeInMinutes;
    }

    /**
     * Gets the edgeNewTabPageURL property value. Specify the page opened when new tabs are created.
     * @return string|null
    */
    public function getEdgeNewTabPageURL(): ?string {
        return $this->edgeNewTabPageURL;
    }

    /**
     * Gets the edgeOpensWith property value. Possible values for the EdgeOpensWith setting.
     * @return EdgeOpenOptions|null
    */
    public function getEdgeOpensWith(): ?EdgeOpenOptions {
        return $this->edgeOpensWith;
    }

    /**
     * Gets the edgePreventCertificateErrorOverride property value. Allow or prevent users from overriding certificate errors.
     * @return bool|null
    */
    public function getEdgePreventCertificateErrorOverride(): ?bool {
        return $this->edgePreventCertificateErrorOverride;
    }

    /**
     * Gets the edgeRequiredExtensionPackageFamilyNames property value. Specify the list of package family names of browser extensions that are required and cannot be turned off by the user.
     * @return array<string>|null
    */
    public function getEdgeRequiredExtensionPackageFamilyNames(): ?array {
        return $this->edgeRequiredExtensionPackageFamilyNames;
    }

    /**
     * Gets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getEdgeRequireSmartScreen(): ?bool {
        return $this->edgeRequireSmartScreen;
    }

    /**
     * Gets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @return EdgeSearchEngineBase|null
    */
    public function getEdgeSearchEngine(): ?EdgeSearchEngineBase {
        return $this->edgeSearchEngine;
    }

    /**
     * Gets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     * @return bool|null
    */
    public function getEdgeSendIntranetTrafficToInternetExplorer(): ?bool {
        return $this->edgeSendIntranetTrafficToInternetExplorer;
    }

    /**
     * Gets the edgeShowMessageWhenOpeningInternetExplorerSites property value. What message will be displayed by Edge before switching to Internet Explorer.
     * @return InternetExplorerMessageSetting|null
    */
    public function getEdgeShowMessageWhenOpeningInternetExplorerSites(): ?InternetExplorerMessageSetting {
        return $this->edgeShowMessageWhenOpeningInternetExplorerSites;
    }

    /**
     * Gets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     * @return bool|null
    */
    public function getEdgeSyncFavoritesWithInternetExplorer(): ?bool {
        return $this->edgeSyncFavoritesWithInternetExplorer;
    }

    /**
     * Gets the edgeTelemetryForMicrosoft365Analytics property value. Type of browsing data sent to Microsoft 365 analytics
     * @return EdgeTelemetryMode|null
    */
    public function getEdgeTelemetryForMicrosoft365Analytics(): ?EdgeTelemetryMode {
        return $this->edgeTelemetryForMicrosoft365Analytics;
    }

    /**
     * Gets the enableAutomaticRedeployment property value. Allow users with administrative rights to delete all user data and settings using CTRL + Win + R at the device lock screen so that the device can be automatically re-configured and re-enrolled into management.
     * @return bool|null
    */
    public function getEnableAutomaticRedeployment(): ?bool {
        return $this->enableAutomaticRedeployment;
    }

    /**
     * Gets the energySaverOnBatteryThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While on battery, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getEnergySaverOnBatteryThresholdPercentage(): ?int {
        return $this->energySaverOnBatteryThresholdPercentage;
    }

    /**
     * Gets the energySaverPluggedInThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While plugged in, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getEnergySaverPluggedInThresholdPercentage(): ?int {
        return $this->energySaverPluggedInThresholdPercentage;
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     * @return string|null
    */
    public function getEnterpriseCloudPrintDiscoveryEndPoint(): ?string {
        return $this->enterpriseCloudPrintDiscoveryEndPoint;
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     * @return int|null
    */
    public function getEnterpriseCloudPrintDiscoveryMaxLimit(): ?int {
        return $this->enterpriseCloudPrintDiscoveryMaxLimit;
    }

    /**
     * Gets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(): ?string {
        return $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier;
    }

    /**
     * Gets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthAuthority(): ?string {
        return $this->enterpriseCloudPrintOAuthAuthority;
    }

    /**
     * Gets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthClientIdentifier(): ?string {
        return $this->enterpriseCloudPrintOAuthClientIdentifier;
    }

    /**
     * Gets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintResourceIdentifier(): ?string {
        return $this->enterpriseCloudPrintResourceIdentifier;
    }

    /**
     * Gets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     * @return bool|null
    */
    public function getExperienceBlockDeviceDiscovery(): ?bool {
        return $this->experienceBlockDeviceDiscovery;
    }

    /**
     * Gets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     * @return bool|null
    */
    public function getExperienceBlockErrorDialogWhenNoSIM(): ?bool {
        return $this->experienceBlockErrorDialogWhenNoSIM;
    }

    /**
     * Gets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     * @return bool|null
    */
    public function getExperienceBlockTaskSwitcher(): ?bool {
        return $this->experienceBlockTaskSwitcher;
    }

    /**
     * Gets the experienceDoNotSyncBrowserSettings property value. Allow(Not Configured) or prevent(Block) the syncing of Microsoft Edge Browser settings. Option to prevent syncing across devices, but allow user override.
     * @return BrowserSyncSetting|null
    */
    public function getExperienceDoNotSyncBrowserSettings(): ?BrowserSyncSetting {
        return $this->experienceDoNotSyncBrowserSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountsBlockAddingNonMicrosoftAccountEmail' => fn(ParseNode $n) => $o->setAccountsBlockAddingNonMicrosoftAccountEmail($n->getBooleanValue()),
            'activateAppsWithVoice' => fn(ParseNode $n) => $o->setActivateAppsWithVoice($n->getEnumValue(Enablement::class)),
            'antiTheftModeBlocked' => fn(ParseNode $n) => $o->setAntiTheftModeBlocked($n->getBooleanValue()),
            'appManagementMSIAllowUserControlOverInstall' => fn(ParseNode $n) => $o->setAppManagementMSIAllowUserControlOverInstall($n->getBooleanValue()),
            'appManagementMSIAlwaysInstallWithElevatedPrivileges' => fn(ParseNode $n) => $o->setAppManagementMSIAlwaysInstallWithElevatedPrivileges($n->getBooleanValue()),
            'appManagementPackageFamilyNamesToLaunchAfterLogOn' => fn(ParseNode $n) => $o->setAppManagementPackageFamilyNamesToLaunchAfterLogOn($n->getCollectionOfPrimitiveValues()),
            'appsAllowTrustedAppsSideloading' => fn(ParseNode $n) => $o->setAppsAllowTrustedAppsSideloading($n->getEnumValue(StateManagementSetting::class)),
            'appsBlockWindowsStoreOriginatedApps' => fn(ParseNode $n) => $o->setAppsBlockWindowsStoreOriginatedApps($n->getBooleanValue()),
            'authenticationAllowSecondaryDevice' => fn(ParseNode $n) => $o->setAuthenticationAllowSecondaryDevice($n->getBooleanValue()),
            'authenticationPreferredAzureADTenantDomainName' => fn(ParseNode $n) => $o->setAuthenticationPreferredAzureADTenantDomainName($n->getStringValue()),
            'authenticationWebSignIn' => fn(ParseNode $n) => $o->setAuthenticationWebSignIn($n->getEnumValue(Enablement::class)),
            'bluetoothAllowedServices' => fn(ParseNode $n) => $o->setBluetoothAllowedServices($n->getCollectionOfPrimitiveValues()),
            'bluetoothBlockAdvertising' => fn(ParseNode $n) => $o->setBluetoothBlockAdvertising($n->getBooleanValue()),
            'bluetoothBlockDiscoverableMode' => fn(ParseNode $n) => $o->setBluetoothBlockDiscoverableMode($n->getBooleanValue()),
            'bluetoothBlocked' => fn(ParseNode $n) => $o->setBluetoothBlocked($n->getBooleanValue()),
            'bluetoothBlockPrePairing' => fn(ParseNode $n) => $o->setBluetoothBlockPrePairing($n->getBooleanValue()),
            'bluetoothBlockPromptedProximalConnections' => fn(ParseNode $n) => $o->setBluetoothBlockPromptedProximalConnections($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockDataWhenRoaming' => fn(ParseNode $n) => $o->setCellularBlockDataWhenRoaming($n->getBooleanValue()),
            'cellularBlockVpn' => fn(ParseNode $n) => $o->setCellularBlockVpn($n->getBooleanValue()),
            'cellularBlockVpnWhenRoaming' => fn(ParseNode $n) => $o->setCellularBlockVpnWhenRoaming($n->getBooleanValue()),
            'cellularData' => fn(ParseNode $n) => $o->setCellularData($n->getEnumValue(ConfigurationUsage::class)),
            'certificatesBlockManualRootCertificateInstallation' => fn(ParseNode $n) => $o->setCertificatesBlockManualRootCertificateInstallation($n->getBooleanValue()),
            'configureTimeZone' => fn(ParseNode $n) => $o->setConfigureTimeZone($n->getStringValue()),
            'connectedDevicesServiceBlocked' => fn(ParseNode $n) => $o->setConnectedDevicesServiceBlocked($n->getBooleanValue()),
            'copyPasteBlocked' => fn(ParseNode $n) => $o->setCopyPasteBlocked($n->getBooleanValue()),
            'cortanaBlocked' => fn(ParseNode $n) => $o->setCortanaBlocked($n->getBooleanValue()),
            'cryptographyAllowFipsAlgorithmPolicy' => fn(ParseNode $n) => $o->setCryptographyAllowFipsAlgorithmPolicy($n->getBooleanValue()),
            'dataProtectionBlockDirectMemoryAccess' => fn(ParseNode $n) => $o->setDataProtectionBlockDirectMemoryAccess($n->getBooleanValue()),
            'defenderBlockEndUserAccess' => fn(ParseNode $n) => $o->setDefenderBlockEndUserAccess($n->getBooleanValue()),
            'defenderBlockOnAccessProtection' => fn(ParseNode $n) => $o->setDefenderBlockOnAccessProtection($n->getBooleanValue()),
            'defenderCloudBlockLevel' => fn(ParseNode $n) => $o->setDefenderCloudBlockLevel($n->getEnumValue(DefenderCloudBlockLevelType::class)),
            'defenderCloudExtendedTimeout' => fn(ParseNode $n) => $o->setDefenderCloudExtendedTimeout($n->getIntegerValue()),
            'defenderCloudExtendedTimeoutInSeconds' => fn(ParseNode $n) => $o->setDefenderCloudExtendedTimeoutInSeconds($n->getIntegerValue()),
            'defenderDaysBeforeDeletingQuarantinedMalware' => fn(ParseNode $n) => $o->setDefenderDaysBeforeDeletingQuarantinedMalware($n->getIntegerValue()),
            'defenderDetectedMalwareActions' => fn(ParseNode $n) => $o->setDefenderDetectedMalwareActions($n->getObjectValue([DefenderDetectedMalwareActions::class, 'createFromDiscriminatorValue'])),
            'defenderDisableCatchupFullScan' => fn(ParseNode $n) => $o->setDefenderDisableCatchupFullScan($n->getBooleanValue()),
            'defenderDisableCatchupQuickScan' => fn(ParseNode $n) => $o->setDefenderDisableCatchupQuickScan($n->getBooleanValue()),
            'defenderFileExtensionsToExclude' => fn(ParseNode $n) => $o->setDefenderFileExtensionsToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderFilesAndFoldersToExclude' => fn(ParseNode $n) => $o->setDefenderFilesAndFoldersToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderMonitorFileActivity' => fn(ParseNode $n) => $o->setDefenderMonitorFileActivity($n->getEnumValue(DefenderMonitorFileActivity::class)),
            'defenderPotentiallyUnwantedAppAction' => fn(ParseNode $n) => $o->setDefenderPotentiallyUnwantedAppAction($n->getEnumValue(DefenderPotentiallyUnwantedAppAction::class)),
            'defenderPotentiallyUnwantedAppActionSetting' => fn(ParseNode $n) => $o->setDefenderPotentiallyUnwantedAppActionSetting($n->getEnumValue(DefenderProtectionType::class)),
            'defenderProcessesToExclude' => fn(ParseNode $n) => $o->setDefenderProcessesToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderPromptForSampleSubmission' => fn(ParseNode $n) => $o->setDefenderPromptForSampleSubmission($n->getEnumValue(DefenderPromptForSampleSubmission::class)),
            'defenderRequireBehaviorMonitoring' => fn(ParseNode $n) => $o->setDefenderRequireBehaviorMonitoring($n->getBooleanValue()),
            'defenderRequireCloudProtection' => fn(ParseNode $n) => $o->setDefenderRequireCloudProtection($n->getBooleanValue()),
            'defenderRequireNetworkInspectionSystem' => fn(ParseNode $n) => $o->setDefenderRequireNetworkInspectionSystem($n->getBooleanValue()),
            'defenderRequireRealTimeMonitoring' => fn(ParseNode $n) => $o->setDefenderRequireRealTimeMonitoring($n->getBooleanValue()),
            'defenderScanArchiveFiles' => fn(ParseNode $n) => $o->setDefenderScanArchiveFiles($n->getBooleanValue()),
            'defenderScanDownloads' => fn(ParseNode $n) => $o->setDefenderScanDownloads($n->getBooleanValue()),
            'defenderScanIncomingMail' => fn(ParseNode $n) => $o->setDefenderScanIncomingMail($n->getBooleanValue()),
            'defenderScanMappedNetworkDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderScanMappedNetworkDrivesDuringFullScan($n->getBooleanValue()),
            'defenderScanMaxCpu' => fn(ParseNode $n) => $o->setDefenderScanMaxCpu($n->getIntegerValue()),
            'defenderScanNetworkFiles' => fn(ParseNode $n) => $o->setDefenderScanNetworkFiles($n->getBooleanValue()),
            'defenderScanRemovableDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderScanRemovableDrivesDuringFullScan($n->getBooleanValue()),
            'defenderScanScriptsLoadedInInternetExplorer' => fn(ParseNode $n) => $o->setDefenderScanScriptsLoadedInInternetExplorer($n->getBooleanValue()),
            'defenderScanType' => fn(ParseNode $n) => $o->setDefenderScanType($n->getEnumValue(DefenderScanType::class)),
            'defenderScheduledQuickScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledQuickScanTime($n->getTimeValue()),
            'defenderScheduledScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledScanTime($n->getTimeValue()),
            'defenderScheduleScanEnableLowCpuPriority' => fn(ParseNode $n) => $o->setDefenderScheduleScanEnableLowCpuPriority($n->getBooleanValue()),
            'defenderSignatureUpdateIntervalInHours' => fn(ParseNode $n) => $o->setDefenderSignatureUpdateIntervalInHours($n->getIntegerValue()),
            'defenderSubmitSamplesConsentType' => fn(ParseNode $n) => $o->setDefenderSubmitSamplesConsentType($n->getEnumValue(DefenderSubmitSamplesConsentType::class)),
            'defenderSystemScanSchedule' => fn(ParseNode $n) => $o->setDefenderSystemScanSchedule($n->getEnumValue(WeeklySchedule::class)),
            'developerUnlockSetting' => fn(ParseNode $n) => $o->setDeveloperUnlockSetting($n->getEnumValue(StateManagementSetting::class)),
            'deviceManagementBlockFactoryResetOnMobile' => fn(ParseNode $n) => $o->setDeviceManagementBlockFactoryResetOnMobile($n->getBooleanValue()),
            'deviceManagementBlockManualUnenroll' => fn(ParseNode $n) => $o->setDeviceManagementBlockManualUnenroll($n->getBooleanValue()),
            'diagnosticsDataSubmissionMode' => fn(ParseNode $n) => $o->setDiagnosticsDataSubmissionMode($n->getEnumValue(DiagnosticDataSubmissionMode::class)),
            'displayAppListWithGdiDPIScalingTurnedOff' => fn(ParseNode $n) => $o->setDisplayAppListWithGdiDPIScalingTurnedOff($n->getCollectionOfPrimitiveValues()),
            'displayAppListWithGdiDPIScalingTurnedOn' => fn(ParseNode $n) => $o->setDisplayAppListWithGdiDPIScalingTurnedOn($n->getCollectionOfPrimitiveValues()),
            'edgeAllowStartPagesModification' => fn(ParseNode $n) => $o->setEdgeAllowStartPagesModification($n->getBooleanValue()),
            'edgeBlockAccessToAboutFlags' => fn(ParseNode $n) => $o->setEdgeBlockAccessToAboutFlags($n->getBooleanValue()),
            'edgeBlockAddressBarDropdown' => fn(ParseNode $n) => $o->setEdgeBlockAddressBarDropdown($n->getBooleanValue()),
            'edgeBlockAutofill' => fn(ParseNode $n) => $o->setEdgeBlockAutofill($n->getBooleanValue()),
            'edgeBlockCompatibilityList' => fn(ParseNode $n) => $o->setEdgeBlockCompatibilityList($n->getBooleanValue()),
            'edgeBlockDeveloperTools' => fn(ParseNode $n) => $o->setEdgeBlockDeveloperTools($n->getBooleanValue()),
            'edgeBlocked' => fn(ParseNode $n) => $o->setEdgeBlocked($n->getBooleanValue()),
            'edgeBlockEditFavorites' => fn(ParseNode $n) => $o->setEdgeBlockEditFavorites($n->getBooleanValue()),
            'edgeBlockExtensions' => fn(ParseNode $n) => $o->setEdgeBlockExtensions($n->getBooleanValue()),
            'edgeBlockFullScreenMode' => fn(ParseNode $n) => $o->setEdgeBlockFullScreenMode($n->getBooleanValue()),
            'edgeBlockInPrivateBrowsing' => fn(ParseNode $n) => $o->setEdgeBlockInPrivateBrowsing($n->getBooleanValue()),
            'edgeBlockJavaScript' => fn(ParseNode $n) => $o->setEdgeBlockJavaScript($n->getBooleanValue()),
            'edgeBlockLiveTileDataCollection' => fn(ParseNode $n) => $o->setEdgeBlockLiveTileDataCollection($n->getBooleanValue()),
            'edgeBlockPasswordManager' => fn(ParseNode $n) => $o->setEdgeBlockPasswordManager($n->getBooleanValue()),
            'edgeBlockPopups' => fn(ParseNode $n) => $o->setEdgeBlockPopups($n->getBooleanValue()),
            'edgeBlockPrelaunch' => fn(ParseNode $n) => $o->setEdgeBlockPrelaunch($n->getBooleanValue()),
            'edgeBlockPrinting' => fn(ParseNode $n) => $o->setEdgeBlockPrinting($n->getBooleanValue()),
            'edgeBlockSavingHistory' => fn(ParseNode $n) => $o->setEdgeBlockSavingHistory($n->getBooleanValue()),
            'edgeBlockSearchEngineCustomization' => fn(ParseNode $n) => $o->setEdgeBlockSearchEngineCustomization($n->getBooleanValue()),
            'edgeBlockSearchSuggestions' => fn(ParseNode $n) => $o->setEdgeBlockSearchSuggestions($n->getBooleanValue()),
            'edgeBlockSendingDoNotTrackHeader' => fn(ParseNode $n) => $o->setEdgeBlockSendingDoNotTrackHeader($n->getBooleanValue()),
            'edgeBlockSendingIntranetTrafficToInternetExplorer' => fn(ParseNode $n) => $o->setEdgeBlockSendingIntranetTrafficToInternetExplorer($n->getBooleanValue()),
            'edgeBlockSideloadingExtensions' => fn(ParseNode $n) => $o->setEdgeBlockSideloadingExtensions($n->getBooleanValue()),
            'edgeBlockTabPreloading' => fn(ParseNode $n) => $o->setEdgeBlockTabPreloading($n->getBooleanValue()),
            'edgeBlockWebContentOnNewTabPage' => fn(ParseNode $n) => $o->setEdgeBlockWebContentOnNewTabPage($n->getBooleanValue()),
            'edgeClearBrowsingDataOnExit' => fn(ParseNode $n) => $o->setEdgeClearBrowsingDataOnExit($n->getBooleanValue()),
            'edgeCookiePolicy' => fn(ParseNode $n) => $o->setEdgeCookiePolicy($n->getEnumValue(EdgeCookiePolicy::class)),
            'edgeDisableFirstRunPage' => fn(ParseNode $n) => $o->setEdgeDisableFirstRunPage($n->getBooleanValue()),
            'edgeEnterpriseModeSiteListLocation' => fn(ParseNode $n) => $o->setEdgeEnterpriseModeSiteListLocation($n->getStringValue()),
            'edgeFavoritesBarVisibility' => fn(ParseNode $n) => $o->setEdgeFavoritesBarVisibility($n->getEnumValue(VisibilitySetting::class)),
            'edgeFavoritesListLocation' => fn(ParseNode $n) => $o->setEdgeFavoritesListLocation($n->getStringValue()),
            'edgeFirstRunUrl' => fn(ParseNode $n) => $o->setEdgeFirstRunUrl($n->getStringValue()),
            'edgeHomeButtonConfiguration' => fn(ParseNode $n) => $o->setEdgeHomeButtonConfiguration($n->getObjectValue([EdgeHomeButtonConfiguration::class, 'createFromDiscriminatorValue'])),
            'edgeHomeButtonConfigurationEnabled' => fn(ParseNode $n) => $o->setEdgeHomeButtonConfigurationEnabled($n->getBooleanValue()),
            'edgeHomepageUrls' => fn(ParseNode $n) => $o->setEdgeHomepageUrls($n->getCollectionOfPrimitiveValues()),
            'edgeKioskModeRestriction' => fn(ParseNode $n) => $o->setEdgeKioskModeRestriction($n->getEnumValue(EdgeKioskModeRestrictionType::class)),
            'edgeKioskResetAfterIdleTimeInMinutes' => fn(ParseNode $n) => $o->setEdgeKioskResetAfterIdleTimeInMinutes($n->getIntegerValue()),
            'edgeNewTabPageURL' => fn(ParseNode $n) => $o->setEdgeNewTabPageURL($n->getStringValue()),
            'edgeOpensWith' => fn(ParseNode $n) => $o->setEdgeOpensWith($n->getEnumValue(EdgeOpenOptions::class)),
            'edgePreventCertificateErrorOverride' => fn(ParseNode $n) => $o->setEdgePreventCertificateErrorOverride($n->getBooleanValue()),
            'edgeRequiredExtensionPackageFamilyNames' => fn(ParseNode $n) => $o->setEdgeRequiredExtensionPackageFamilyNames($n->getCollectionOfPrimitiveValues()),
            'edgeRequireSmartScreen' => fn(ParseNode $n) => $o->setEdgeRequireSmartScreen($n->getBooleanValue()),
            'edgeSearchEngine' => fn(ParseNode $n) => $o->setEdgeSearchEngine($n->getObjectValue([EdgeSearchEngineBase::class, 'createFromDiscriminatorValue'])),
            'edgeSendIntranetTrafficToInternetExplorer' => fn(ParseNode $n) => $o->setEdgeSendIntranetTrafficToInternetExplorer($n->getBooleanValue()),
            'edgeShowMessageWhenOpeningInternetExplorerSites' => fn(ParseNode $n) => $o->setEdgeShowMessageWhenOpeningInternetExplorerSites($n->getEnumValue(InternetExplorerMessageSetting::class)),
            'edgeSyncFavoritesWithInternetExplorer' => fn(ParseNode $n) => $o->setEdgeSyncFavoritesWithInternetExplorer($n->getBooleanValue()),
            'edgeTelemetryForMicrosoft365Analytics' => fn(ParseNode $n) => $o->setEdgeTelemetryForMicrosoft365Analytics($n->getEnumValue(EdgeTelemetryMode::class)),
            'enableAutomaticRedeployment' => fn(ParseNode $n) => $o->setEnableAutomaticRedeployment($n->getBooleanValue()),
            'energySaverOnBatteryThresholdPercentage' => fn(ParseNode $n) => $o->setEnergySaverOnBatteryThresholdPercentage($n->getIntegerValue()),
            'energySaverPluggedInThresholdPercentage' => fn(ParseNode $n) => $o->setEnergySaverPluggedInThresholdPercentage($n->getIntegerValue()),
            'enterpriseCloudPrintDiscoveryEndPoint' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintDiscoveryEndPoint($n->getStringValue()),
            'enterpriseCloudPrintDiscoveryMaxLimit' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintDiscoveryMaxLimit($n->getIntegerValue()),
            'enterpriseCloudPrintMopriaDiscoveryResourceIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier($n->getStringValue()),
            'enterpriseCloudPrintOAuthAuthority' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintOAuthAuthority($n->getStringValue()),
            'enterpriseCloudPrintOAuthClientIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintOAuthClientIdentifier($n->getStringValue()),
            'enterpriseCloudPrintResourceIdentifier' => fn(ParseNode $n) => $o->setEnterpriseCloudPrintResourceIdentifier($n->getStringValue()),
            'experienceBlockDeviceDiscovery' => fn(ParseNode $n) => $o->setExperienceBlockDeviceDiscovery($n->getBooleanValue()),
            'experienceBlockErrorDialogWhenNoSIM' => fn(ParseNode $n) => $o->setExperienceBlockErrorDialogWhenNoSIM($n->getBooleanValue()),
            'experienceBlockTaskSwitcher' => fn(ParseNode $n) => $o->setExperienceBlockTaskSwitcher($n->getBooleanValue()),
            'experienceDoNotSyncBrowserSettings' => fn(ParseNode $n) => $o->setExperienceDoNotSyncBrowserSettings($n->getEnumValue(BrowserSyncSetting::class)),
            'findMyFiles' => fn(ParseNode $n) => $o->setFindMyFiles($n->getEnumValue(Enablement::class)),
            'gameDvrBlocked' => fn(ParseNode $n) => $o->setGameDvrBlocked($n->getBooleanValue()),
            'inkWorkspaceAccess' => fn(ParseNode $n) => $o->setInkWorkspaceAccess($n->getEnumValue(InkAccessSetting::class)),
            'inkWorkspaceAccessState' => fn(ParseNode $n) => $o->setInkWorkspaceAccessState($n->getEnumValue(StateManagementSetting::class)),
            'inkWorkspaceBlockSuggestedApps' => fn(ParseNode $n) => $o->setInkWorkspaceBlockSuggestedApps($n->getBooleanValue()),
            'internetSharingBlocked' => fn(ParseNode $n) => $o->setInternetSharingBlocked($n->getBooleanValue()),
            'locationServicesBlocked' => fn(ParseNode $n) => $o->setLocationServicesBlocked($n->getBooleanValue()),
            'lockScreenActivateAppsWithVoice' => fn(ParseNode $n) => $o->setLockScreenActivateAppsWithVoice($n->getEnumValue(Enablement::class)),
            'lockScreenAllowTimeoutConfiguration' => fn(ParseNode $n) => $o->setLockScreenAllowTimeoutConfiguration($n->getBooleanValue()),
            'lockScreenBlockActionCenterNotifications' => fn(ParseNode $n) => $o->setLockScreenBlockActionCenterNotifications($n->getBooleanValue()),
            'lockScreenBlockCortana' => fn(ParseNode $n) => $o->setLockScreenBlockCortana($n->getBooleanValue()),
            'lockScreenBlockToastNotifications' => fn(ParseNode $n) => $o->setLockScreenBlockToastNotifications($n->getBooleanValue()),
            'lockScreenTimeoutInSeconds' => fn(ParseNode $n) => $o->setLockScreenTimeoutInSeconds($n->getIntegerValue()),
            'logonBlockFastUserSwitching' => fn(ParseNode $n) => $o->setLogonBlockFastUserSwitching($n->getBooleanValue()),
            'messagingBlockMMS' => fn(ParseNode $n) => $o->setMessagingBlockMMS($n->getBooleanValue()),
            'messagingBlockRichCommunicationServices' => fn(ParseNode $n) => $o->setMessagingBlockRichCommunicationServices($n->getBooleanValue()),
            'messagingBlockSync' => fn(ParseNode $n) => $o->setMessagingBlockSync($n->getBooleanValue()),
            'microsoftAccountBlocked' => fn(ParseNode $n) => $o->setMicrosoftAccountBlocked($n->getBooleanValue()),
            'microsoftAccountBlockSettingsSync' => fn(ParseNode $n) => $o->setMicrosoftAccountBlockSettingsSync($n->getBooleanValue()),
            'microsoftAccountSignInAssistantSettings' => fn(ParseNode $n) => $o->setMicrosoftAccountSignInAssistantSettings($n->getEnumValue(SignInAssistantOptions::class)),
            'networkProxyApplySettingsDeviceWide' => fn(ParseNode $n) => $o->setNetworkProxyApplySettingsDeviceWide($n->getBooleanValue()),
            'networkProxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setNetworkProxyAutomaticConfigurationUrl($n->getStringValue()),
            'networkProxyDisableAutoDetect' => fn(ParseNode $n) => $o->setNetworkProxyDisableAutoDetect($n->getBooleanValue()),
            'networkProxyServer' => fn(ParseNode $n) => $o->setNetworkProxyServer($n->getObjectValue([Windows10NetworkProxyServer::class, 'createFromDiscriminatorValue'])),
            'nfcBlocked' => fn(ParseNode $n) => $o->setNfcBlocked($n->getBooleanValue()),
            'oneDriveDisableFileSync' => fn(ParseNode $n) => $o->setOneDriveDisableFileSync($n->getBooleanValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumAgeInDays' => fn(ParseNode $n) => $o->setPasswordMinimumAgeInDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passwordRequireWhenResumeFromIdleState' => fn(ParseNode $n) => $o->setPasswordRequireWhenResumeFromIdleState($n->getBooleanValue()),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'personalizationDesktopImageUrl' => fn(ParseNode $n) => $o->setPersonalizationDesktopImageUrl($n->getStringValue()),
            'personalizationLockScreenImageUrl' => fn(ParseNode $n) => $o->setPersonalizationLockScreenImageUrl($n->getStringValue()),
            'powerButtonActionOnBattery' => fn(ParseNode $n) => $o->setPowerButtonActionOnBattery($n->getEnumValue(PowerActionType::class)),
            'powerButtonActionPluggedIn' => fn(ParseNode $n) => $o->setPowerButtonActionPluggedIn($n->getEnumValue(PowerActionType::class)),
            'powerHybridSleepOnBattery' => fn(ParseNode $n) => $o->setPowerHybridSleepOnBattery($n->getEnumValue(Enablement::class)),
            'powerHybridSleepPluggedIn' => fn(ParseNode $n) => $o->setPowerHybridSleepPluggedIn($n->getEnumValue(Enablement::class)),
            'powerLidCloseActionOnBattery' => fn(ParseNode $n) => $o->setPowerLidCloseActionOnBattery($n->getEnumValue(PowerActionType::class)),
            'powerLidCloseActionPluggedIn' => fn(ParseNode $n) => $o->setPowerLidCloseActionPluggedIn($n->getEnumValue(PowerActionType::class)),
            'powerSleepButtonActionOnBattery' => fn(ParseNode $n) => $o->setPowerSleepButtonActionOnBattery($n->getEnumValue(PowerActionType::class)),
            'powerSleepButtonActionPluggedIn' => fn(ParseNode $n) => $o->setPowerSleepButtonActionPluggedIn($n->getEnumValue(PowerActionType::class)),
            'printerBlockAddition' => fn(ParseNode $n) => $o->setPrinterBlockAddition($n->getBooleanValue()),
            'printerDefaultName' => fn(ParseNode $n) => $o->setPrinterDefaultName($n->getStringValue()),
            'printerNames' => fn(ParseNode $n) => $o->setPrinterNames($n->getCollectionOfPrimitiveValues()),
            'privacyAccessControls' => fn(ParseNode $n) => $o->setPrivacyAccessControls($n->getCollectionOfObjectValues([WindowsPrivacyDataAccessControlItem::class, 'createFromDiscriminatorValue'])),
            'privacyAdvertisingId' => fn(ParseNode $n) => $o->setPrivacyAdvertisingId($n->getEnumValue(StateManagementSetting::class)),
            'privacyAutoAcceptPairingAndConsentPrompts' => fn(ParseNode $n) => $o->setPrivacyAutoAcceptPairingAndConsentPrompts($n->getBooleanValue()),
            'privacyBlockActivityFeed' => fn(ParseNode $n) => $o->setPrivacyBlockActivityFeed($n->getBooleanValue()),
            'privacyBlockInputPersonalization' => fn(ParseNode $n) => $o->setPrivacyBlockInputPersonalization($n->getBooleanValue()),
            'privacyBlockPublishUserActivities' => fn(ParseNode $n) => $o->setPrivacyBlockPublishUserActivities($n->getBooleanValue()),
            'privacyDisableLaunchExperience' => fn(ParseNode $n) => $o->setPrivacyDisableLaunchExperience($n->getBooleanValue()),
            'resetProtectionModeBlocked' => fn(ParseNode $n) => $o->setResetProtectionModeBlocked($n->getBooleanValue()),
            'safeSearchFilter' => fn(ParseNode $n) => $o->setSafeSearchFilter($n->getEnumValue(SafeSearchFilterType::class)),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'searchBlockDiacritics' => fn(ParseNode $n) => $o->setSearchBlockDiacritics($n->getBooleanValue()),
            'searchBlockWebResults' => fn(ParseNode $n) => $o->setSearchBlockWebResults($n->getBooleanValue()),
            'searchDisableAutoLanguageDetection' => fn(ParseNode $n) => $o->setSearchDisableAutoLanguageDetection($n->getBooleanValue()),
            'searchDisableIndexerBackoff' => fn(ParseNode $n) => $o->setSearchDisableIndexerBackoff($n->getBooleanValue()),
            'searchDisableIndexingEncryptedItems' => fn(ParseNode $n) => $o->setSearchDisableIndexingEncryptedItems($n->getBooleanValue()),
            'searchDisableIndexingRemovableDrive' => fn(ParseNode $n) => $o->setSearchDisableIndexingRemovableDrive($n->getBooleanValue()),
            'searchDisableLocation' => fn(ParseNode $n) => $o->setSearchDisableLocation($n->getBooleanValue()),
            'searchDisableUseLocation' => fn(ParseNode $n) => $o->setSearchDisableUseLocation($n->getBooleanValue()),
            'searchEnableAutomaticIndexSizeManangement' => fn(ParseNode $n) => $o->setSearchEnableAutomaticIndexSizeManangement($n->getBooleanValue()),
            'searchEnableRemoteQueries' => fn(ParseNode $n) => $o->setSearchEnableRemoteQueries($n->getBooleanValue()),
            'securityBlockAzureADJoinedDevicesAutoEncryption' => fn(ParseNode $n) => $o->setSecurityBlockAzureADJoinedDevicesAutoEncryption($n->getBooleanValue()),
            'settingsBlockAccountsPage' => fn(ParseNode $n) => $o->setSettingsBlockAccountsPage($n->getBooleanValue()),
            'settingsBlockAddProvisioningPackage' => fn(ParseNode $n) => $o->setSettingsBlockAddProvisioningPackage($n->getBooleanValue()),
            'settingsBlockAppsPage' => fn(ParseNode $n) => $o->setSettingsBlockAppsPage($n->getBooleanValue()),
            'settingsBlockChangeLanguage' => fn(ParseNode $n) => $o->setSettingsBlockChangeLanguage($n->getBooleanValue()),
            'settingsBlockChangePowerSleep' => fn(ParseNode $n) => $o->setSettingsBlockChangePowerSleep($n->getBooleanValue()),
            'settingsBlockChangeRegion' => fn(ParseNode $n) => $o->setSettingsBlockChangeRegion($n->getBooleanValue()),
            'settingsBlockChangeSystemTime' => fn(ParseNode $n) => $o->setSettingsBlockChangeSystemTime($n->getBooleanValue()),
            'settingsBlockDevicesPage' => fn(ParseNode $n) => $o->setSettingsBlockDevicesPage($n->getBooleanValue()),
            'settingsBlockEaseOfAccessPage' => fn(ParseNode $n) => $o->setSettingsBlockEaseOfAccessPage($n->getBooleanValue()),
            'settingsBlockEditDeviceName' => fn(ParseNode $n) => $o->setSettingsBlockEditDeviceName($n->getBooleanValue()),
            'settingsBlockGamingPage' => fn(ParseNode $n) => $o->setSettingsBlockGamingPage($n->getBooleanValue()),
            'settingsBlockNetworkInternetPage' => fn(ParseNode $n) => $o->setSettingsBlockNetworkInternetPage($n->getBooleanValue()),
            'settingsBlockPersonalizationPage' => fn(ParseNode $n) => $o->setSettingsBlockPersonalizationPage($n->getBooleanValue()),
            'settingsBlockPrivacyPage' => fn(ParseNode $n) => $o->setSettingsBlockPrivacyPage($n->getBooleanValue()),
            'settingsBlockRemoveProvisioningPackage' => fn(ParseNode $n) => $o->setSettingsBlockRemoveProvisioningPackage($n->getBooleanValue()),
            'settingsBlockSettingsApp' => fn(ParseNode $n) => $o->setSettingsBlockSettingsApp($n->getBooleanValue()),
            'settingsBlockSystemPage' => fn(ParseNode $n) => $o->setSettingsBlockSystemPage($n->getBooleanValue()),
            'settingsBlockTimeLanguagePage' => fn(ParseNode $n) => $o->setSettingsBlockTimeLanguagePage($n->getBooleanValue()),
            'settingsBlockUpdateSecurityPage' => fn(ParseNode $n) => $o->setSettingsBlockUpdateSecurityPage($n->getBooleanValue()),
            'sharedUserAppDataAllowed' => fn(ParseNode $n) => $o->setSharedUserAppDataAllowed($n->getBooleanValue()),
            'smartScreenAppInstallControl' => fn(ParseNode $n) => $o->setSmartScreenAppInstallControl($n->getEnumValue(AppInstallControlType::class)),
            'smartScreenBlockPromptOverride' => fn(ParseNode $n) => $o->setSmartScreenBlockPromptOverride($n->getBooleanValue()),
            'smartScreenBlockPromptOverrideForFiles' => fn(ParseNode $n) => $o->setSmartScreenBlockPromptOverrideForFiles($n->getBooleanValue()),
            'smartScreenEnableAppInstallControl' => fn(ParseNode $n) => $o->setSmartScreenEnableAppInstallControl($n->getBooleanValue()),
            'startBlockUnpinningAppsFromTaskbar' => fn(ParseNode $n) => $o->setStartBlockUnpinningAppsFromTaskbar($n->getBooleanValue()),
            'startMenuAppListVisibility' => fn(ParseNode $n) => $o->setStartMenuAppListVisibility($n->getEnumValue(WindowsStartMenuAppListVisibilityType::class)),
            'startMenuHideChangeAccountSettings' => fn(ParseNode $n) => $o->setStartMenuHideChangeAccountSettings($n->getBooleanValue()),
            'startMenuHideFrequentlyUsedApps' => fn(ParseNode $n) => $o->setStartMenuHideFrequentlyUsedApps($n->getBooleanValue()),
            'startMenuHideHibernate' => fn(ParseNode $n) => $o->setStartMenuHideHibernate($n->getBooleanValue()),
            'startMenuHideLock' => fn(ParseNode $n) => $o->setStartMenuHideLock($n->getBooleanValue()),
            'startMenuHidePowerButton' => fn(ParseNode $n) => $o->setStartMenuHidePowerButton($n->getBooleanValue()),
            'startMenuHideRecentJumpLists' => fn(ParseNode $n) => $o->setStartMenuHideRecentJumpLists($n->getBooleanValue()),
            'startMenuHideRecentlyAddedApps' => fn(ParseNode $n) => $o->setStartMenuHideRecentlyAddedApps($n->getBooleanValue()),
            'startMenuHideRestartOptions' => fn(ParseNode $n) => $o->setStartMenuHideRestartOptions($n->getBooleanValue()),
            'startMenuHideShutDown' => fn(ParseNode $n) => $o->setStartMenuHideShutDown($n->getBooleanValue()),
            'startMenuHideSignOut' => fn(ParseNode $n) => $o->setStartMenuHideSignOut($n->getBooleanValue()),
            'startMenuHideSleep' => fn(ParseNode $n) => $o->setStartMenuHideSleep($n->getBooleanValue()),
            'startMenuHideSwitchAccount' => fn(ParseNode $n) => $o->setStartMenuHideSwitchAccount($n->getBooleanValue()),
            'startMenuHideUserTile' => fn(ParseNode $n) => $o->setStartMenuHideUserTile($n->getBooleanValue()),
            'startMenuLayoutEdgeAssetsXml' => fn(ParseNode $n) => $o->setStartMenuLayoutEdgeAssetsXml($n->getBinaryContent()),
            'startMenuLayoutXml' => fn(ParseNode $n) => $o->setStartMenuLayoutXml($n->getBinaryContent()),
            'startMenuMode' => fn(ParseNode $n) => $o->setStartMenuMode($n->getEnumValue(WindowsStartMenuModeType::class)),
            'startMenuPinnedFolderDocuments' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderDocuments($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderDownloads' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderDownloads($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderFileExplorer' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderFileExplorer($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderHomeGroup' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderHomeGroup($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderMusic' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderMusic($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderNetwork' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderNetwork($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderPersonalFolder' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderPersonalFolder($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderPictures' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderPictures($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderSettings' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderSettings($n->getEnumValue(VisibilitySetting::class)),
            'startMenuPinnedFolderVideos' => fn(ParseNode $n) => $o->setStartMenuPinnedFolderVideos($n->getEnumValue(VisibilitySetting::class)),
            'storageBlockRemovableStorage' => fn(ParseNode $n) => $o->setStorageBlockRemovableStorage($n->getBooleanValue()),
            'storageRequireMobileDeviceEncryption' => fn(ParseNode $n) => $o->setStorageRequireMobileDeviceEncryption($n->getBooleanValue()),
            'storageRestrictAppDataToSystemVolume' => fn(ParseNode $n) => $o->setStorageRestrictAppDataToSystemVolume($n->getBooleanValue()),
            'storageRestrictAppInstallToSystemVolume' => fn(ParseNode $n) => $o->setStorageRestrictAppInstallToSystemVolume($n->getBooleanValue()),
            'systemTelemetryProxyServer' => fn(ParseNode $n) => $o->setSystemTelemetryProxyServer($n->getStringValue()),
            'taskManagerBlockEndTask' => fn(ParseNode $n) => $o->setTaskManagerBlockEndTask($n->getBooleanValue()),
            'tenantLockdownRequireNetworkDuringOutOfBoxExperience' => fn(ParseNode $n) => $o->setTenantLockdownRequireNetworkDuringOutOfBoxExperience($n->getBooleanValue()),
            'uninstallBuiltInApps' => fn(ParseNode $n) => $o->setUninstallBuiltInApps($n->getBooleanValue()),
            'usbBlocked' => fn(ParseNode $n) => $o->setUsbBlocked($n->getBooleanValue()),
            'voiceRecordingBlocked' => fn(ParseNode $n) => $o->setVoiceRecordingBlocked($n->getBooleanValue()),
            'webRtcBlockLocalhostIpAddress' => fn(ParseNode $n) => $o->setWebRtcBlockLocalhostIpAddress($n->getBooleanValue()),
            'wiFiBlockAutomaticConnectHotspots' => fn(ParseNode $n) => $o->setWiFiBlockAutomaticConnectHotspots($n->getBooleanValue()),
            'wiFiBlocked' => fn(ParseNode $n) => $o->setWiFiBlocked($n->getBooleanValue()),
            'wiFiBlockManualConfiguration' => fn(ParseNode $n) => $o->setWiFiBlockManualConfiguration($n->getBooleanValue()),
            'wiFiScanInterval' => fn(ParseNode $n) => $o->setWiFiScanInterval($n->getIntegerValue()),
            'windows10AppsForceUpdateSchedule' => fn(ParseNode $n) => $o->setWindows10AppsForceUpdateSchedule($n->getObjectValue([Windows10AppsForceUpdateSchedule::class, 'createFromDiscriminatorValue'])),
            'windowsSpotlightBlockConsumerSpecificFeatures' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockConsumerSpecificFeatures($n->getBooleanValue()),
            'windowsSpotlightBlocked' => fn(ParseNode $n) => $o->setWindowsSpotlightBlocked($n->getBooleanValue()),
            'windowsSpotlightBlockOnActionCenter' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockOnActionCenter($n->getBooleanValue()),
            'windowsSpotlightBlockTailoredExperiences' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockTailoredExperiences($n->getBooleanValue()),
            'windowsSpotlightBlockThirdPartyNotifications' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockThirdPartyNotifications($n->getBooleanValue()),
            'windowsSpotlightBlockWelcomeExperience' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockWelcomeExperience($n->getBooleanValue()),
            'windowsSpotlightBlockWindowsTips' => fn(ParseNode $n) => $o->setWindowsSpotlightBlockWindowsTips($n->getBooleanValue()),
            'windowsSpotlightConfigureOnLockScreen' => fn(ParseNode $n) => $o->setWindowsSpotlightConfigureOnLockScreen($n->getEnumValue(WindowsSpotlightEnablementSettings::class)),
            'windowsStoreBlockAutoUpdate' => fn(ParseNode $n) => $o->setWindowsStoreBlockAutoUpdate($n->getBooleanValue()),
            'windowsStoreBlocked' => fn(ParseNode $n) => $o->setWindowsStoreBlocked($n->getBooleanValue()),
            'windowsStoreEnablePrivateStoreOnly' => fn(ParseNode $n) => $o->setWindowsStoreEnablePrivateStoreOnly($n->getBooleanValue()),
            'wirelessDisplayBlockProjectionToThisDevice' => fn(ParseNode $n) => $o->setWirelessDisplayBlockProjectionToThisDevice($n->getBooleanValue()),
            'wirelessDisplayBlockUserInputFromReceiver' => fn(ParseNode $n) => $o->setWirelessDisplayBlockUserInputFromReceiver($n->getBooleanValue()),
            'wirelessDisplayRequirePinForPairing' => fn(ParseNode $n) => $o->setWirelessDisplayRequirePinForPairing($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the findMyFiles property value. Possible values of a property
     * @return Enablement|null
    */
    public function getFindMyFiles(): ?Enablement {
        return $this->findMyFiles;
    }

    /**
     * Gets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     * @return bool|null
    */
    public function getGameDvrBlocked(): ?bool {
        return $this->gameDvrBlocked;
    }

    /**
     * Gets the inkWorkspaceAccess property value. Values for the InkWorkspaceAccess setting.
     * @return InkAccessSetting|null
    */
    public function getInkWorkspaceAccess(): ?InkAccessSetting {
        return $this->inkWorkspaceAccess;
    }

    /**
     * Gets the inkWorkspaceAccessState property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getInkWorkspaceAccessState(): ?StateManagementSetting {
        return $this->inkWorkspaceAccessState;
    }

    /**
     * Gets the inkWorkspaceBlockSuggestedApps property value. Specify whether to show recommended app suggestions in the ink workspace.
     * @return bool|null
    */
    public function getInkWorkspaceBlockSuggestedApps(): ?bool {
        return $this->inkWorkspaceBlockSuggestedApps;
    }

    /**
     * Gets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     * @return bool|null
    */
    public function getInternetSharingBlocked(): ?bool {
        return $this->internetSharingBlocked;
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        return $this->locationServicesBlocked;
    }

    /**
     * Gets the lockScreenActivateAppsWithVoice property value. Possible values of a property
     * @return Enablement|null
    */
    public function getLockScreenActivateAppsWithVoice(): ?Enablement {
        return $this->lockScreenActivateAppsWithVoice;
    }

    /**
     * Gets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     * @return bool|null
    */
    public function getLockScreenAllowTimeoutConfiguration(): ?bool {
        return $this->lockScreenAllowTimeoutConfiguration;
    }

    /**
     * Gets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockActionCenterNotifications(): ?bool {
        return $this->lockScreenBlockActionCenterNotifications;
    }

    /**
     * Gets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     * @return bool|null
    */
    public function getLockScreenBlockCortana(): ?bool {
        return $this->lockScreenBlockCortana;
    }

    /**
     * Gets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockToastNotifications(): ?bool {
        return $this->lockScreenBlockToastNotifications;
    }

    /**
     * Gets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     * @return int|null
    */
    public function getLockScreenTimeoutInSeconds(): ?int {
        return $this->lockScreenTimeoutInSeconds;
    }

    /**
     * Gets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     * @return bool|null
    */
    public function getLogonBlockFastUserSwitching(): ?bool {
        return $this->logonBlockFastUserSwitching;
    }

    /**
     * Gets the messagingBlockMMS property value. Indicates whether or not to block the MMS send/receive functionality on the device.
     * @return bool|null
    */
    public function getMessagingBlockMMS(): ?bool {
        return $this->messagingBlockMMS;
    }

    /**
     * Gets the messagingBlockRichCommunicationServices property value. Indicates whether or not to block the RCS send/receive functionality on the device.
     * @return bool|null
    */
    public function getMessagingBlockRichCommunicationServices(): ?bool {
        return $this->messagingBlockRichCommunicationServices;
    }

    /**
     * Gets the messagingBlockSync property value. Indicates whether or not to block text message back up and restore and Messaging Everywhere.
     * @return bool|null
    */
    public function getMessagingBlockSync(): ?bool {
        return $this->messagingBlockSync;
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        return $this->microsoftAccountBlocked;
    }

    /**
     * Gets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     * @return bool|null
    */
    public function getMicrosoftAccountBlockSettingsSync(): ?bool {
        return $this->microsoftAccountBlockSettingsSync;
    }

    /**
     * Gets the microsoftAccountSignInAssistantSettings property value. Values for the SignInAssistantSettings.
     * @return SignInAssistantOptions|null
    */
    public function getMicrosoftAccountSignInAssistantSettings(): ?SignInAssistantOptions {
        return $this->microsoftAccountSignInAssistantSettings;
    }

    /**
     * Gets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     * @return bool|null
    */
    public function getNetworkProxyApplySettingsDeviceWide(): ?bool {
        return $this->networkProxyApplySettingsDeviceWide;
    }

    /**
     * Gets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     * @return string|null
    */
    public function getNetworkProxyAutomaticConfigurationUrl(): ?string {
        return $this->networkProxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     * @return bool|null
    */
    public function getNetworkProxyDisableAutoDetect(): ?bool {
        return $this->networkProxyDisableAutoDetect;
    }

    /**
     * Gets the networkProxyServer property value. Specifies manual proxy server settings.
     * @return Windows10NetworkProxyServer|null
    */
    public function getNetworkProxyServer(): ?Windows10NetworkProxyServer {
        return $this->networkProxyServer;
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        return $this->nfcBlocked;
    }

    /**
     * Gets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     * @return bool|null
    */
    public function getOneDriveDisableFileSync(): ?bool {
        return $this->oneDriveDisableFileSync;
    }

    /**
     * Gets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumAgeInDays property value. This security setting determines the period of time (in days) that a password must be used before the user can change it. Valid values 0 to 998
     * @return int|null
    */
    public function getPasswordMinimumAgeInDays(): ?int {
        return $this->passwordMinimumAgeInDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     * @return bool|null
    */
    public function getPasswordRequireWhenResumeFromIdleState(): ?bool {
        return $this->passwordRequireWhenResumeFromIdleState;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     * @return string|null
    */
    public function getPersonalizationDesktopImageUrl(): ?string {
        return $this->personalizationDesktopImageUrl;
    }

    /**
     * Gets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     * @return string|null
    */
    public function getPersonalizationLockScreenImageUrl(): ?string {
        return $this->personalizationLockScreenImageUrl;
    }

    /**
     * Gets the powerButtonActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerButtonActionOnBattery(): ?PowerActionType {
        return $this->powerButtonActionOnBattery;
    }

    /**
     * Gets the powerButtonActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerButtonActionPluggedIn(): ?PowerActionType {
        return $this->powerButtonActionPluggedIn;
    }

    /**
     * Gets the powerHybridSleepOnBattery property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPowerHybridSleepOnBattery(): ?Enablement {
        return $this->powerHybridSleepOnBattery;
    }

    /**
     * Gets the powerHybridSleepPluggedIn property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPowerHybridSleepPluggedIn(): ?Enablement {
        return $this->powerHybridSleepPluggedIn;
    }

    /**
     * Gets the powerLidCloseActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerLidCloseActionOnBattery(): ?PowerActionType {
        return $this->powerLidCloseActionOnBattery;
    }

    /**
     * Gets the powerLidCloseActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerLidCloseActionPluggedIn(): ?PowerActionType {
        return $this->powerLidCloseActionPluggedIn;
    }

    /**
     * Gets the powerSleepButtonActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerSleepButtonActionOnBattery(): ?PowerActionType {
        return $this->powerSleepButtonActionOnBattery;
    }

    /**
     * Gets the powerSleepButtonActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerSleepButtonActionPluggedIn(): ?PowerActionType {
        return $this->powerSleepButtonActionPluggedIn;
    }

    /**
     * Gets the printerBlockAddition property value. Prevent user installation of additional printers from printers settings.
     * @return bool|null
    */
    public function getPrinterBlockAddition(): ?bool {
        return $this->printerBlockAddition;
    }

    /**
     * Gets the printerDefaultName property value. Name (network host name) of an installed printer.
     * @return string|null
    */
    public function getPrinterDefaultName(): ?string {
        return $this->printerDefaultName;
    }

    /**
     * Gets the printerNames property value. Automatically provision printers based on their names (network host names).
     * @return array<string>|null
    */
    public function getPrinterNames(): ?array {
        return $this->printerNames;
    }

    /**
     * Gets the privacyAccessControls property value. Indicates a list of applications with their access control levels over privacy data categories, and/or the default access levels per category. This collection can contain a maximum of 500 elements.
     * @return array<WindowsPrivacyDataAccessControlItem>|null
    */
    public function getPrivacyAccessControls(): ?array {
        return $this->privacyAccessControls;
    }

    /**
     * Gets the privacyAdvertisingId property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getPrivacyAdvertisingId(): ?StateManagementSetting {
        return $this->privacyAdvertisingId;
    }

    /**
     * Gets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     * @return bool|null
    */
    public function getPrivacyAutoAcceptPairingAndConsentPrompts(): ?bool {
        return $this->privacyAutoAcceptPairingAndConsentPrompts;
    }

    /**
     * Gets the privacyBlockActivityFeed property value. Blocks the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockActivityFeed(): ?bool {
        return $this->privacyBlockActivityFeed;
    }

    /**
     * Gets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockInputPersonalization(): ?bool {
        return $this->privacyBlockInputPersonalization;
    }

    /**
     * Gets the privacyBlockPublishUserActivities property value. Blocks the shared experiences/discovery of recently used resources in task switcher etc.
     * @return bool|null
    */
    public function getPrivacyBlockPublishUserActivities(): ?bool {
        return $this->privacyBlockPublishUserActivities;
    }

    /**
     * Gets the privacyDisableLaunchExperience property value. This policy prevents the privacy experience from launching during user logon for new and upgraded users.​
     * @return bool|null
    */
    public function getPrivacyDisableLaunchExperience(): ?bool {
        return $this->privacyDisableLaunchExperience;
    }

    /**
     * Gets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     * @return bool|null
    */
    public function getResetProtectionModeBlocked(): ?bool {
        return $this->resetProtectionModeBlocked;
    }

    /**
     * Gets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     * @return SafeSearchFilterType|null
    */
    public function getSafeSearchFilter(): ?SafeSearchFilterType {
        return $this->safeSearchFilter;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     * @return bool|null
    */
    public function getSearchBlockDiacritics(): ?bool {
        return $this->searchBlockDiacritics;
    }

    /**
     * Gets the searchBlockWebResults property value. Indicates whether or not to block the web search.
     * @return bool|null
    */
    public function getSearchBlockWebResults(): ?bool {
        return $this->searchBlockWebResults;
    }

    /**
     * Gets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     * @return bool|null
    */
    public function getSearchDisableAutoLanguageDetection(): ?bool {
        return $this->searchDisableAutoLanguageDetection;
    }

    /**
     * Gets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     * @return bool|null
    */
    public function getSearchDisableIndexerBackoff(): ?bool {
        return $this->searchDisableIndexerBackoff;
    }

    /**
     * Gets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     * @return bool|null
    */
    public function getSearchDisableIndexingEncryptedItems(): ?bool {
        return $this->searchDisableIndexingEncryptedItems;
    }

    /**
     * Gets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     * @return bool|null
    */
    public function getSearchDisableIndexingRemovableDrive(): ?bool {
        return $this->searchDisableIndexingRemovableDrive;
    }

    /**
     * Gets the searchDisableLocation property value. Specifies if search can use location information.
     * @return bool|null
    */
    public function getSearchDisableLocation(): ?bool {
        return $this->searchDisableLocation;
    }

    /**
     * Gets the searchDisableUseLocation property value. Specifies if search can use location information.
     * @return bool|null
    */
    public function getSearchDisableUseLocation(): ?bool {
        return $this->searchDisableUseLocation;
    }

    /**
     * Gets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     * @return bool|null
    */
    public function getSearchEnableAutomaticIndexSizeManangement(): ?bool {
        return $this->searchEnableAutomaticIndexSizeManangement;
    }

    /**
     * Gets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     * @return bool|null
    */
    public function getSearchEnableRemoteQueries(): ?bool {
        return $this->searchEnableRemoteQueries;
    }

    /**
     * Gets the securityBlockAzureADJoinedDevicesAutoEncryption property value. Specify whether to allow automatic device encryption during OOBE when the device is Azure AD joined (desktop only).
     * @return bool|null
    */
    public function getSecurityBlockAzureADJoinedDevicesAutoEncryption(): ?bool {
        return $this->securityBlockAzureADJoinedDevicesAutoEncryption;
    }

    /**
     * Gets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAccountsPage(): ?bool {
        return $this->settingsBlockAccountsPage;
    }

    /**
     * Gets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockAddProvisioningPackage(): ?bool {
        return $this->settingsBlockAddProvisioningPackage;
    }

    /**
     * Gets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAppsPage(): ?bool {
        return $this->settingsBlockAppsPage;
    }

    /**
     * Gets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeLanguage(): ?bool {
        return $this->settingsBlockChangeLanguage;
    }

    /**
     * Gets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     * @return bool|null
    */
    public function getSettingsBlockChangePowerSleep(): ?bool {
        return $this->settingsBlockChangePowerSleep;
    }

    /**
     * Gets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeRegion(): ?bool {
        return $this->settingsBlockChangeRegion;
    }

    /**
     * Gets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeSystemTime(): ?bool {
        return $this->settingsBlockChangeSystemTime;
    }

    /**
     * Gets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockDevicesPage(): ?bool {
        return $this->settingsBlockDevicesPage;
    }

    /**
     * Gets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockEaseOfAccessPage(): ?bool {
        return $this->settingsBlockEaseOfAccessPage;
    }

    /**
     * Gets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     * @return bool|null
    */
    public function getSettingsBlockEditDeviceName(): ?bool {
        return $this->settingsBlockEditDeviceName;
    }

    /**
     * Gets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockGamingPage(): ?bool {
        return $this->settingsBlockGamingPage;
    }

    /**
     * Gets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockNetworkInternetPage(): ?bool {
        return $this->settingsBlockNetworkInternetPage;
    }

    /**
     * Gets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPersonalizationPage(): ?bool {
        return $this->settingsBlockPersonalizationPage;
    }

    /**
     * Gets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPrivacyPage(): ?bool {
        return $this->settingsBlockPrivacyPage;
    }

    /**
     * Gets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockRemoveProvisioningPackage(): ?bool {
        return $this->settingsBlockRemoveProvisioningPackage;
    }

    /**
     * Gets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSettingsApp(): ?bool {
        return $this->settingsBlockSettingsApp;
    }

    /**
     * Gets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSystemPage(): ?bool {
        return $this->settingsBlockSystemPage;
    }

    /**
     * Gets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockTimeLanguagePage(): ?bool {
        return $this->settingsBlockTimeLanguagePage;
    }

    /**
     * Gets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockUpdateSecurityPage(): ?bool {
        return $this->settingsBlockUpdateSecurityPage;
    }

    /**
     * Gets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     * @return bool|null
    */
    public function getSharedUserAppDataAllowed(): ?bool {
        return $this->sharedUserAppDataAllowed;
    }

    /**
     * Gets the smartScreenAppInstallControl property value. App Install control Setting
     * @return AppInstallControlType|null
    */
    public function getSmartScreenAppInstallControl(): ?AppInstallControlType {
        return $this->smartScreenAppInstallControl;
    }

    /**
     * Gets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverride(): ?bool {
        return $this->smartScreenBlockPromptOverride;
    }

    /**
     * Gets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverrideForFiles(): ?bool {
        return $this->smartScreenBlockPromptOverrideForFiles;
    }

    /**
     * Gets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     * @return bool|null
    */
    public function getSmartScreenEnableAppInstallControl(): ?bool {
        return $this->smartScreenEnableAppInstallControl;
    }

    /**
     * Gets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     * @return bool|null
    */
    public function getStartBlockUnpinningAppsFromTaskbar(): ?bool {
        return $this->startBlockUnpinningAppsFromTaskbar;
    }

    /**
     * Gets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     * @return WindowsStartMenuAppListVisibilityType|null
    */
    public function getStartMenuAppListVisibility(): ?WindowsStartMenuAppListVisibilityType {
        return $this->startMenuAppListVisibility;
    }

    /**
     * Gets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideChangeAccountSettings(): ?bool {
        return $this->startMenuHideChangeAccountSettings;
    }

    /**
     * Gets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideFrequentlyUsedApps(): ?bool {
        return $this->startMenuHideFrequentlyUsedApps;
    }

    /**
     * Gets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideHibernate(): ?bool {
        return $this->startMenuHideHibernate;
    }

    /**
     * Gets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideLock(): ?bool {
        return $this->startMenuHideLock;
    }

    /**
     * Gets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHidePowerButton(): ?bool {
        return $this->startMenuHidePowerButton;
    }

    /**
     * Gets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentJumpLists(): ?bool {
        return $this->startMenuHideRecentJumpLists;
    }

    /**
     * Gets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentlyAddedApps(): ?bool {
        return $this->startMenuHideRecentlyAddedApps;
    }

    /**
     * Gets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideRestartOptions(): ?bool {
        return $this->startMenuHideRestartOptions;
    }

    /**
     * Gets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideShutDown(): ?bool {
        return $this->startMenuHideShutDown;
    }

    /**
     * Gets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSignOut(): ?bool {
        return $this->startMenuHideSignOut;
    }

    /**
     * Gets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSleep(): ?bool {
        return $this->startMenuHideSleep;
    }

    /**
     * Gets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSwitchAccount(): ?bool {
        return $this->startMenuHideSwitchAccount;
    }

    /**
     * Gets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideUserTile(): ?bool {
        return $this->startMenuHideUserTile;
    }

    /**
     * Gets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     * @return StreamInterface
    */
    public function getStartMenuLayoutEdgeAssetsXml(): StreamInterface {
        return $this->startMenuLayoutEdgeAssetsXml;
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     * @return StreamInterface
    */
    public function getStartMenuLayoutXml(): StreamInterface {
        return $this->startMenuLayoutXml;
    }

    /**
     * Gets the startMenuMode property value. Type of display modes for the start menu.
     * @return WindowsStartMenuModeType|null
    */
    public function getStartMenuMode(): ?WindowsStartMenuModeType {
        return $this->startMenuMode;
    }

    /**
     * Gets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDocuments(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderDocuments;
    }

    /**
     * Gets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDownloads(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderDownloads;
    }

    /**
     * Gets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderFileExplorer(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderFileExplorer;
    }

    /**
     * Gets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderHomeGroup(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderHomeGroup;
    }

    /**
     * Gets the startMenuPinnedFolderMusic property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderMusic(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderMusic;
    }

    /**
     * Gets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderNetwork(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderNetwork;
    }

    /**
     * Gets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPersonalFolder(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderPersonalFolder;
    }

    /**
     * Gets the startMenuPinnedFolderPictures property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPictures(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderPictures;
    }

    /**
     * Gets the startMenuPinnedFolderSettings property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderSettings(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderSettings;
    }

    /**
     * Gets the startMenuPinnedFolderVideos property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderVideos(): ?VisibilitySetting {
        return $this->startMenuPinnedFolderVideos;
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        return $this->storageBlockRemovableStorage;
    }

    /**
     * Gets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireMobileDeviceEncryption(): ?bool {
        return $this->storageRequireMobileDeviceEncryption;
    }

    /**
     * Gets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppDataToSystemVolume(): ?bool {
        return $this->storageRestrictAppDataToSystemVolume;
    }

    /**
     * Gets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppInstallToSystemVolume(): ?bool {
        return $this->storageRestrictAppInstallToSystemVolume;
    }

    /**
     * Gets the systemTelemetryProxyServer property value. Gets or sets the fully qualified domain name (FQDN) or IP address of a proxy server to forward Connected User Experiences and Telemetry requests.
     * @return string|null
    */
    public function getSystemTelemetryProxyServer(): ?string {
        return $this->systemTelemetryProxyServer;
    }

    /**
     * Gets the taskManagerBlockEndTask property value. Specify whether non-administrators can use Task Manager to end tasks.
     * @return bool|null
    */
    public function getTaskManagerBlockEndTask(): ?bool {
        return $this->taskManagerBlockEndTask;
    }

    /**
     * Gets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     * @return bool|null
    */
    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience(): ?bool {
        return $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience;
    }

    /**
     * Gets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     * @return bool|null
    */
    public function getUninstallBuiltInApps(): ?bool {
        return $this->uninstallBuiltInApps;
    }

    /**
     * Gets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     * @return bool|null
    */
    public function getUsbBlocked(): ?bool {
        return $this->usbBlocked;
    }

    /**
     * Gets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     * @return bool|null
    */
    public function getVoiceRecordingBlocked(): ?bool {
        return $this->voiceRecordingBlocked;
    }

    /**
     * Gets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     * @return bool|null
    */
    public function getWebRtcBlockLocalhostIpAddress(): ?bool {
        return $this->webRtcBlockLocalhostIpAddress;
    }

    /**
     * Gets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWiFiBlockAutomaticConnectHotspots(): ?bool {
        return $this->wiFiBlockAutomaticConnectHotspots;
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        return $this->wiFiBlocked;
    }

    /**
     * Gets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     * @return bool|null
    */
    public function getWiFiBlockManualConfiguration(): ?bool {
        return $this->wiFiBlockManualConfiguration;
    }

    /**
     * Gets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     * @return int|null
    */
    public function getWiFiScanInterval(): ?int {
        return $this->wiFiScanInterval;
    }

    /**
     * Gets the windows10AppsForceUpdateSchedule property value. Windows 10 force update schedule for Apps.
     * @return Windows10AppsForceUpdateSchedule|null
    */
    public function getWindows10AppsForceUpdateSchedule(): ?Windows10AppsForceUpdateSchedule {
        return $this->windows10AppsForceUpdateSchedule;
    }

    /**
     * Gets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockConsumerSpecificFeatures(): ?bool {
        return $this->windowsSpotlightBlockConsumerSpecificFeatures;
    }

    /**
     * Gets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     * @return bool|null
    */
    public function getWindowsSpotlightBlocked(): ?bool {
        return $this->windowsSpotlightBlocked;
    }

    /**
     * Gets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     * @return bool|null
    */
    public function getWindowsSpotlightBlockOnActionCenter(): ?bool {
        return $this->windowsSpotlightBlockOnActionCenter;
    }

    /**
     * Gets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockTailoredExperiences(): ?bool {
        return $this->windowsSpotlightBlockTailoredExperiences;
    }

    /**
     * Gets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     * @return bool|null
    */
    public function getWindowsSpotlightBlockThirdPartyNotifications(): ?bool {
        return $this->windowsSpotlightBlockThirdPartyNotifications;
    }

    /**
     * Gets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWelcomeExperience(): ?bool {
        return $this->windowsSpotlightBlockWelcomeExperience;
    }

    /**
     * Gets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWindowsTips(): ?bool {
        return $this->windowsSpotlightBlockWindowsTips;
    }

    /**
     * Gets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @return WindowsSpotlightEnablementSettings|null
    */
    public function getWindowsSpotlightConfigureOnLockScreen(): ?WindowsSpotlightEnablementSettings {
        return $this->windowsSpotlightConfigureOnLockScreen;
    }

    /**
     * Gets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlockAutoUpdate(): ?bool {
        return $this->windowsStoreBlockAutoUpdate;
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        return $this->windowsStoreBlocked;
    }

    /**
     * Gets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     * @return bool|null
    */
    public function getWindowsStoreEnablePrivateStoreOnly(): ?bool {
        return $this->windowsStoreEnablePrivateStoreOnly;
    }

    /**
     * Gets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     * @return bool|null
    */
    public function getWirelessDisplayBlockProjectionToThisDevice(): ?bool {
        return $this->wirelessDisplayBlockProjectionToThisDevice;
    }

    /**
     * Gets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     * @return bool|null
    */
    public function getWirelessDisplayBlockUserInputFromReceiver(): ?bool {
        return $this->wirelessDisplayBlockUserInputFromReceiver;
    }

    /**
     * Gets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     * @return bool|null
    */
    public function getWirelessDisplayRequirePinForPairing(): ?bool {
        return $this->wirelessDisplayRequirePinForPairing;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->accountsBlockAddingNonMicrosoftAccountEmail);
        $writer->writeEnumValue('activateAppsWithVoice', $this->activateAppsWithVoice);
        $writer->writeBooleanValue('antiTheftModeBlocked', $this->antiTheftModeBlocked);
        $writer->writeBooleanValue('appManagementMSIAllowUserControlOverInstall', $this->appManagementMSIAllowUserControlOverInstall);
        $writer->writeBooleanValue('appManagementMSIAlwaysInstallWithElevatedPrivileges', $this->appManagementMSIAlwaysInstallWithElevatedPrivileges);
        $writer->writeCollectionOfPrimitiveValues('appManagementPackageFamilyNamesToLaunchAfterLogOn', $this->appManagementPackageFamilyNamesToLaunchAfterLogOn);
        $writer->writeEnumValue('appsAllowTrustedAppsSideloading', $this->appsAllowTrustedAppsSideloading);
        $writer->writeBooleanValue('appsBlockWindowsStoreOriginatedApps', $this->appsBlockWindowsStoreOriginatedApps);
        $writer->writeBooleanValue('authenticationAllowSecondaryDevice', $this->authenticationAllowSecondaryDevice);
        $writer->writeStringValue('authenticationPreferredAzureADTenantDomainName', $this->authenticationPreferredAzureADTenantDomainName);
        $writer->writeEnumValue('authenticationWebSignIn', $this->authenticationWebSignIn);
        $writer->writeCollectionOfPrimitiveValues('bluetoothAllowedServices', $this->bluetoothAllowedServices);
        $writer->writeBooleanValue('bluetoothBlockAdvertising', $this->bluetoothBlockAdvertising);
        $writer->writeBooleanValue('bluetoothBlockDiscoverableMode', $this->bluetoothBlockDiscoverableMode);
        $writer->writeBooleanValue('bluetoothBlocked', $this->bluetoothBlocked);
        $writer->writeBooleanValue('bluetoothBlockPrePairing', $this->bluetoothBlockPrePairing);
        $writer->writeBooleanValue('bluetoothBlockPromptedProximalConnections', $this->bluetoothBlockPromptedProximalConnections);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockDataWhenRoaming', $this->cellularBlockDataWhenRoaming);
        $writer->writeBooleanValue('cellularBlockVpn', $this->cellularBlockVpn);
        $writer->writeBooleanValue('cellularBlockVpnWhenRoaming', $this->cellularBlockVpnWhenRoaming);
        $writer->writeEnumValue('cellularData', $this->cellularData);
        $writer->writeBooleanValue('certificatesBlockManualRootCertificateInstallation', $this->certificatesBlockManualRootCertificateInstallation);
        $writer->writeStringValue('configureTimeZone', $this->configureTimeZone);
        $writer->writeBooleanValue('connectedDevicesServiceBlocked', $this->connectedDevicesServiceBlocked);
        $writer->writeBooleanValue('copyPasteBlocked', $this->copyPasteBlocked);
        $writer->writeBooleanValue('cortanaBlocked', $this->cortanaBlocked);
        $writer->writeBooleanValue('cryptographyAllowFipsAlgorithmPolicy', $this->cryptographyAllowFipsAlgorithmPolicy);
        $writer->writeBooleanValue('dataProtectionBlockDirectMemoryAccess', $this->dataProtectionBlockDirectMemoryAccess);
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->defenderBlockEndUserAccess);
        $writer->writeBooleanValue('defenderBlockOnAccessProtection', $this->defenderBlockOnAccessProtection);
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->defenderCloudBlockLevel);
        $writer->writeIntegerValue('defenderCloudExtendedTimeout', $this->defenderCloudExtendedTimeout);
        $writer->writeIntegerValue('defenderCloudExtendedTimeoutInSeconds', $this->defenderCloudExtendedTimeoutInSeconds);
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->defenderDaysBeforeDeletingQuarantinedMalware);
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->defenderDetectedMalwareActions);
        $writer->writeBooleanValue('defenderDisableCatchupFullScan', $this->defenderDisableCatchupFullScan);
        $writer->writeBooleanValue('defenderDisableCatchupQuickScan', $this->defenderDisableCatchupQuickScan);
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->defenderFileExtensionsToExclude);
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->defenderFilesAndFoldersToExclude);
        $writer->writeEnumValue('defenderMonitorFileActivity', $this->defenderMonitorFileActivity);
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppAction', $this->defenderPotentiallyUnwantedAppAction);
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppActionSetting', $this->defenderPotentiallyUnwantedAppActionSetting);
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->defenderProcessesToExclude);
        $writer->writeEnumValue('defenderPromptForSampleSubmission', $this->defenderPromptForSampleSubmission);
        $writer->writeBooleanValue('defenderRequireBehaviorMonitoring', $this->defenderRequireBehaviorMonitoring);
        $writer->writeBooleanValue('defenderRequireCloudProtection', $this->defenderRequireCloudProtection);
        $writer->writeBooleanValue('defenderRequireNetworkInspectionSystem', $this->defenderRequireNetworkInspectionSystem);
        $writer->writeBooleanValue('defenderRequireRealTimeMonitoring', $this->defenderRequireRealTimeMonitoring);
        $writer->writeBooleanValue('defenderScanArchiveFiles', $this->defenderScanArchiveFiles);
        $writer->writeBooleanValue('defenderScanDownloads', $this->defenderScanDownloads);
        $writer->writeBooleanValue('defenderScanIncomingMail', $this->defenderScanIncomingMail);
        $writer->writeBooleanValue('defenderScanMappedNetworkDrivesDuringFullScan', $this->defenderScanMappedNetworkDrivesDuringFullScan);
        $writer->writeIntegerValue('defenderScanMaxCpu', $this->defenderScanMaxCpu);
        $writer->writeBooleanValue('defenderScanNetworkFiles', $this->defenderScanNetworkFiles);
        $writer->writeBooleanValue('defenderScanRemovableDrivesDuringFullScan', $this->defenderScanRemovableDrivesDuringFullScan);
        $writer->writeBooleanValue('defenderScanScriptsLoadedInInternetExplorer', $this->defenderScanScriptsLoadedInInternetExplorer);
        $writer->writeEnumValue('defenderScanType', $this->defenderScanType);
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->defenderScheduledQuickScanTime);
        $writer->writeTimeValue('defenderScheduledScanTime', $this->defenderScheduledScanTime);
        $writer->writeBooleanValue('defenderScheduleScanEnableLowCpuPriority', $this->defenderScheduleScanEnableLowCpuPriority);
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->defenderSignatureUpdateIntervalInHours);
        $writer->writeEnumValue('defenderSubmitSamplesConsentType', $this->defenderSubmitSamplesConsentType);
        $writer->writeEnumValue('defenderSystemScanSchedule', $this->defenderSystemScanSchedule);
        $writer->writeEnumValue('developerUnlockSetting', $this->developerUnlockSetting);
        $writer->writeBooleanValue('deviceManagementBlockFactoryResetOnMobile', $this->deviceManagementBlockFactoryResetOnMobile);
        $writer->writeBooleanValue('deviceManagementBlockManualUnenroll', $this->deviceManagementBlockManualUnenroll);
        $writer->writeEnumValue('diagnosticsDataSubmissionMode', $this->diagnosticsDataSubmissionMode);
        $writer->writeCollectionOfPrimitiveValues('displayAppListWithGdiDPIScalingTurnedOff', $this->displayAppListWithGdiDPIScalingTurnedOff);
        $writer->writeCollectionOfPrimitiveValues('displayAppListWithGdiDPIScalingTurnedOn', $this->displayAppListWithGdiDPIScalingTurnedOn);
        $writer->writeBooleanValue('edgeAllowStartPagesModification', $this->edgeAllowStartPagesModification);
        $writer->writeBooleanValue('edgeBlockAccessToAboutFlags', $this->edgeBlockAccessToAboutFlags);
        $writer->writeBooleanValue('edgeBlockAddressBarDropdown', $this->edgeBlockAddressBarDropdown);
        $writer->writeBooleanValue('edgeBlockAutofill', $this->edgeBlockAutofill);
        $writer->writeBooleanValue('edgeBlockCompatibilityList', $this->edgeBlockCompatibilityList);
        $writer->writeBooleanValue('edgeBlockDeveloperTools', $this->edgeBlockDeveloperTools);
        $writer->writeBooleanValue('edgeBlocked', $this->edgeBlocked);
        $writer->writeBooleanValue('edgeBlockEditFavorites', $this->edgeBlockEditFavorites);
        $writer->writeBooleanValue('edgeBlockExtensions', $this->edgeBlockExtensions);
        $writer->writeBooleanValue('edgeBlockFullScreenMode', $this->edgeBlockFullScreenMode);
        $writer->writeBooleanValue('edgeBlockInPrivateBrowsing', $this->edgeBlockInPrivateBrowsing);
        $writer->writeBooleanValue('edgeBlockJavaScript', $this->edgeBlockJavaScript);
        $writer->writeBooleanValue('edgeBlockLiveTileDataCollection', $this->edgeBlockLiveTileDataCollection);
        $writer->writeBooleanValue('edgeBlockPasswordManager', $this->edgeBlockPasswordManager);
        $writer->writeBooleanValue('edgeBlockPopups', $this->edgeBlockPopups);
        $writer->writeBooleanValue('edgeBlockPrelaunch', $this->edgeBlockPrelaunch);
        $writer->writeBooleanValue('edgeBlockPrinting', $this->edgeBlockPrinting);
        $writer->writeBooleanValue('edgeBlockSavingHistory', $this->edgeBlockSavingHistory);
        $writer->writeBooleanValue('edgeBlockSearchEngineCustomization', $this->edgeBlockSearchEngineCustomization);
        $writer->writeBooleanValue('edgeBlockSearchSuggestions', $this->edgeBlockSearchSuggestions);
        $writer->writeBooleanValue('edgeBlockSendingDoNotTrackHeader', $this->edgeBlockSendingDoNotTrackHeader);
        $writer->writeBooleanValue('edgeBlockSendingIntranetTrafficToInternetExplorer', $this->edgeBlockSendingIntranetTrafficToInternetExplorer);
        $writer->writeBooleanValue('edgeBlockSideloadingExtensions', $this->edgeBlockSideloadingExtensions);
        $writer->writeBooleanValue('edgeBlockTabPreloading', $this->edgeBlockTabPreloading);
        $writer->writeBooleanValue('edgeBlockWebContentOnNewTabPage', $this->edgeBlockWebContentOnNewTabPage);
        $writer->writeBooleanValue('edgeClearBrowsingDataOnExit', $this->edgeClearBrowsingDataOnExit);
        $writer->writeEnumValue('edgeCookiePolicy', $this->edgeCookiePolicy);
        $writer->writeBooleanValue('edgeDisableFirstRunPage', $this->edgeDisableFirstRunPage);
        $writer->writeStringValue('edgeEnterpriseModeSiteListLocation', $this->edgeEnterpriseModeSiteListLocation);
        $writer->writeEnumValue('edgeFavoritesBarVisibility', $this->edgeFavoritesBarVisibility);
        $writer->writeStringValue('edgeFavoritesListLocation', $this->edgeFavoritesListLocation);
        $writer->writeStringValue('edgeFirstRunUrl', $this->edgeFirstRunUrl);
        $writer->writeObjectValue('edgeHomeButtonConfiguration', $this->edgeHomeButtonConfiguration);
        $writer->writeBooleanValue('edgeHomeButtonConfigurationEnabled', $this->edgeHomeButtonConfigurationEnabled);
        $writer->writeCollectionOfPrimitiveValues('edgeHomepageUrls', $this->edgeHomepageUrls);
        $writer->writeEnumValue('edgeKioskModeRestriction', $this->edgeKioskModeRestriction);
        $writer->writeIntegerValue('edgeKioskResetAfterIdleTimeInMinutes', $this->edgeKioskResetAfterIdleTimeInMinutes);
        $writer->writeStringValue('edgeNewTabPageURL', $this->edgeNewTabPageURL);
        $writer->writeEnumValue('edgeOpensWith', $this->edgeOpensWith);
        $writer->writeBooleanValue('edgePreventCertificateErrorOverride', $this->edgePreventCertificateErrorOverride);
        $writer->writeCollectionOfPrimitiveValues('edgeRequiredExtensionPackageFamilyNames', $this->edgeRequiredExtensionPackageFamilyNames);
        $writer->writeBooleanValue('edgeRequireSmartScreen', $this->edgeRequireSmartScreen);
        $writer->writeObjectValue('edgeSearchEngine', $this->edgeSearchEngine);
        $writer->writeBooleanValue('edgeSendIntranetTrafficToInternetExplorer', $this->edgeSendIntranetTrafficToInternetExplorer);
        $writer->writeEnumValue('edgeShowMessageWhenOpeningInternetExplorerSites', $this->edgeShowMessageWhenOpeningInternetExplorerSites);
        $writer->writeBooleanValue('edgeSyncFavoritesWithInternetExplorer', $this->edgeSyncFavoritesWithInternetExplorer);
        $writer->writeEnumValue('edgeTelemetryForMicrosoft365Analytics', $this->edgeTelemetryForMicrosoft365Analytics);
        $writer->writeBooleanValue('enableAutomaticRedeployment', $this->enableAutomaticRedeployment);
        $writer->writeIntegerValue('energySaverOnBatteryThresholdPercentage', $this->energySaverOnBatteryThresholdPercentage);
        $writer->writeIntegerValue('energySaverPluggedInThresholdPercentage', $this->energySaverPluggedInThresholdPercentage);
        $writer->writeStringValue('enterpriseCloudPrintDiscoveryEndPoint', $this->enterpriseCloudPrintDiscoveryEndPoint);
        $writer->writeIntegerValue('enterpriseCloudPrintDiscoveryMaxLimit', $this->enterpriseCloudPrintDiscoveryMaxLimit);
        $writer->writeStringValue('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier);
        $writer->writeStringValue('enterpriseCloudPrintOAuthAuthority', $this->enterpriseCloudPrintOAuthAuthority);
        $writer->writeStringValue('enterpriseCloudPrintOAuthClientIdentifier', $this->enterpriseCloudPrintOAuthClientIdentifier);
        $writer->writeStringValue('enterpriseCloudPrintResourceIdentifier', $this->enterpriseCloudPrintResourceIdentifier);
        $writer->writeBooleanValue('experienceBlockDeviceDiscovery', $this->experienceBlockDeviceDiscovery);
        $writer->writeBooleanValue('experienceBlockErrorDialogWhenNoSIM', $this->experienceBlockErrorDialogWhenNoSIM);
        $writer->writeBooleanValue('experienceBlockTaskSwitcher', $this->experienceBlockTaskSwitcher);
        $writer->writeEnumValue('experienceDoNotSyncBrowserSettings', $this->experienceDoNotSyncBrowserSettings);
        $writer->writeEnumValue('findMyFiles', $this->findMyFiles);
        $writer->writeBooleanValue('gameDvrBlocked', $this->gameDvrBlocked);
        $writer->writeEnumValue('inkWorkspaceAccess', $this->inkWorkspaceAccess);
        $writer->writeEnumValue('inkWorkspaceAccessState', $this->inkWorkspaceAccessState);
        $writer->writeBooleanValue('inkWorkspaceBlockSuggestedApps', $this->inkWorkspaceBlockSuggestedApps);
        $writer->writeBooleanValue('internetSharingBlocked', $this->internetSharingBlocked);
        $writer->writeBooleanValue('locationServicesBlocked', $this->locationServicesBlocked);
        $writer->writeEnumValue('lockScreenActivateAppsWithVoice', $this->lockScreenActivateAppsWithVoice);
        $writer->writeBooleanValue('lockScreenAllowTimeoutConfiguration', $this->lockScreenAllowTimeoutConfiguration);
        $writer->writeBooleanValue('lockScreenBlockActionCenterNotifications', $this->lockScreenBlockActionCenterNotifications);
        $writer->writeBooleanValue('lockScreenBlockCortana', $this->lockScreenBlockCortana);
        $writer->writeBooleanValue('lockScreenBlockToastNotifications', $this->lockScreenBlockToastNotifications);
        $writer->writeIntegerValue('lockScreenTimeoutInSeconds', $this->lockScreenTimeoutInSeconds);
        $writer->writeBooleanValue('logonBlockFastUserSwitching', $this->logonBlockFastUserSwitching);
        $writer->writeBooleanValue('messagingBlockMMS', $this->messagingBlockMMS);
        $writer->writeBooleanValue('messagingBlockRichCommunicationServices', $this->messagingBlockRichCommunicationServices);
        $writer->writeBooleanValue('messagingBlockSync', $this->messagingBlockSync);
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->microsoftAccountBlocked);
        $writer->writeBooleanValue('microsoftAccountBlockSettingsSync', $this->microsoftAccountBlockSettingsSync);
        $writer->writeEnumValue('microsoftAccountSignInAssistantSettings', $this->microsoftAccountSignInAssistantSettings);
        $writer->writeBooleanValue('networkProxyApplySettingsDeviceWide', $this->networkProxyApplySettingsDeviceWide);
        $writer->writeStringValue('networkProxyAutomaticConfigurationUrl', $this->networkProxyAutomaticConfigurationUrl);
        $writer->writeBooleanValue('networkProxyDisableAutoDetect', $this->networkProxyDisableAutoDetect);
        $writer->writeObjectValue('networkProxyServer', $this->networkProxyServer);
        $writer->writeBooleanValue('nfcBlocked', $this->nfcBlocked);
        $writer->writeBooleanValue('oneDriveDisableFileSync', $this->oneDriveDisableFileSync);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumAgeInDays', $this->passwordMinimumAgeInDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('passwordRequireWhenResumeFromIdleState', $this->passwordRequireWhenResumeFromIdleState);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeStringValue('personalizationDesktopImageUrl', $this->personalizationDesktopImageUrl);
        $writer->writeStringValue('personalizationLockScreenImageUrl', $this->personalizationLockScreenImageUrl);
        $writer->writeEnumValue('powerButtonActionOnBattery', $this->powerButtonActionOnBattery);
        $writer->writeEnumValue('powerButtonActionPluggedIn', $this->powerButtonActionPluggedIn);
        $writer->writeEnumValue('powerHybridSleepOnBattery', $this->powerHybridSleepOnBattery);
        $writer->writeEnumValue('powerHybridSleepPluggedIn', $this->powerHybridSleepPluggedIn);
        $writer->writeEnumValue('powerLidCloseActionOnBattery', $this->powerLidCloseActionOnBattery);
        $writer->writeEnumValue('powerLidCloseActionPluggedIn', $this->powerLidCloseActionPluggedIn);
        $writer->writeEnumValue('powerSleepButtonActionOnBattery', $this->powerSleepButtonActionOnBattery);
        $writer->writeEnumValue('powerSleepButtonActionPluggedIn', $this->powerSleepButtonActionPluggedIn);
        $writer->writeBooleanValue('printerBlockAddition', $this->printerBlockAddition);
        $writer->writeStringValue('printerDefaultName', $this->printerDefaultName);
        $writer->writeCollectionOfPrimitiveValues('printerNames', $this->printerNames);
        $writer->writeCollectionOfObjectValues('privacyAccessControls', $this->privacyAccessControls);
        $writer->writeEnumValue('privacyAdvertisingId', $this->privacyAdvertisingId);
        $writer->writeBooleanValue('privacyAutoAcceptPairingAndConsentPrompts', $this->privacyAutoAcceptPairingAndConsentPrompts);
        $writer->writeBooleanValue('privacyBlockActivityFeed', $this->privacyBlockActivityFeed);
        $writer->writeBooleanValue('privacyBlockInputPersonalization', $this->privacyBlockInputPersonalization);
        $writer->writeBooleanValue('privacyBlockPublishUserActivities', $this->privacyBlockPublishUserActivities);
        $writer->writeBooleanValue('privacyDisableLaunchExperience', $this->privacyDisableLaunchExperience);
        $writer->writeBooleanValue('resetProtectionModeBlocked', $this->resetProtectionModeBlocked);
        $writer->writeEnumValue('safeSearchFilter', $this->safeSearchFilter);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('searchBlockDiacritics', $this->searchBlockDiacritics);
        $writer->writeBooleanValue('searchBlockWebResults', $this->searchBlockWebResults);
        $writer->writeBooleanValue('searchDisableAutoLanguageDetection', $this->searchDisableAutoLanguageDetection);
        $writer->writeBooleanValue('searchDisableIndexerBackoff', $this->searchDisableIndexerBackoff);
        $writer->writeBooleanValue('searchDisableIndexingEncryptedItems', $this->searchDisableIndexingEncryptedItems);
        $writer->writeBooleanValue('searchDisableIndexingRemovableDrive', $this->searchDisableIndexingRemovableDrive);
        $writer->writeBooleanValue('searchDisableLocation', $this->searchDisableLocation);
        $writer->writeBooleanValue('searchDisableUseLocation', $this->searchDisableUseLocation);
        $writer->writeBooleanValue('searchEnableAutomaticIndexSizeManangement', $this->searchEnableAutomaticIndexSizeManangement);
        $writer->writeBooleanValue('searchEnableRemoteQueries', $this->searchEnableRemoteQueries);
        $writer->writeBooleanValue('securityBlockAzureADJoinedDevicesAutoEncryption', $this->securityBlockAzureADJoinedDevicesAutoEncryption);
        $writer->writeBooleanValue('settingsBlockAccountsPage', $this->settingsBlockAccountsPage);
        $writer->writeBooleanValue('settingsBlockAddProvisioningPackage', $this->settingsBlockAddProvisioningPackage);
        $writer->writeBooleanValue('settingsBlockAppsPage', $this->settingsBlockAppsPage);
        $writer->writeBooleanValue('settingsBlockChangeLanguage', $this->settingsBlockChangeLanguage);
        $writer->writeBooleanValue('settingsBlockChangePowerSleep', $this->settingsBlockChangePowerSleep);
        $writer->writeBooleanValue('settingsBlockChangeRegion', $this->settingsBlockChangeRegion);
        $writer->writeBooleanValue('settingsBlockChangeSystemTime', $this->settingsBlockChangeSystemTime);
        $writer->writeBooleanValue('settingsBlockDevicesPage', $this->settingsBlockDevicesPage);
        $writer->writeBooleanValue('settingsBlockEaseOfAccessPage', $this->settingsBlockEaseOfAccessPage);
        $writer->writeBooleanValue('settingsBlockEditDeviceName', $this->settingsBlockEditDeviceName);
        $writer->writeBooleanValue('settingsBlockGamingPage', $this->settingsBlockGamingPage);
        $writer->writeBooleanValue('settingsBlockNetworkInternetPage', $this->settingsBlockNetworkInternetPage);
        $writer->writeBooleanValue('settingsBlockPersonalizationPage', $this->settingsBlockPersonalizationPage);
        $writer->writeBooleanValue('settingsBlockPrivacyPage', $this->settingsBlockPrivacyPage);
        $writer->writeBooleanValue('settingsBlockRemoveProvisioningPackage', $this->settingsBlockRemoveProvisioningPackage);
        $writer->writeBooleanValue('settingsBlockSettingsApp', $this->settingsBlockSettingsApp);
        $writer->writeBooleanValue('settingsBlockSystemPage', $this->settingsBlockSystemPage);
        $writer->writeBooleanValue('settingsBlockTimeLanguagePage', $this->settingsBlockTimeLanguagePage);
        $writer->writeBooleanValue('settingsBlockUpdateSecurityPage', $this->settingsBlockUpdateSecurityPage);
        $writer->writeBooleanValue('sharedUserAppDataAllowed', $this->sharedUserAppDataAllowed);
        $writer->writeEnumValue('smartScreenAppInstallControl', $this->smartScreenAppInstallControl);
        $writer->writeBooleanValue('smartScreenBlockPromptOverride', $this->smartScreenBlockPromptOverride);
        $writer->writeBooleanValue('smartScreenBlockPromptOverrideForFiles', $this->smartScreenBlockPromptOverrideForFiles);
        $writer->writeBooleanValue('smartScreenEnableAppInstallControl', $this->smartScreenEnableAppInstallControl);
        $writer->writeBooleanValue('startBlockUnpinningAppsFromTaskbar', $this->startBlockUnpinningAppsFromTaskbar);
        $writer->writeEnumValue('startMenuAppListVisibility', $this->startMenuAppListVisibility);
        $writer->writeBooleanValue('startMenuHideChangeAccountSettings', $this->startMenuHideChangeAccountSettings);
        $writer->writeBooleanValue('startMenuHideFrequentlyUsedApps', $this->startMenuHideFrequentlyUsedApps);
        $writer->writeBooleanValue('startMenuHideHibernate', $this->startMenuHideHibernate);
        $writer->writeBooleanValue('startMenuHideLock', $this->startMenuHideLock);
        $writer->writeBooleanValue('startMenuHidePowerButton', $this->startMenuHidePowerButton);
        $writer->writeBooleanValue('startMenuHideRecentJumpLists', $this->startMenuHideRecentJumpLists);
        $writer->writeBooleanValue('startMenuHideRecentlyAddedApps', $this->startMenuHideRecentlyAddedApps);
        $writer->writeBooleanValue('startMenuHideRestartOptions', $this->startMenuHideRestartOptions);
        $writer->writeBooleanValue('startMenuHideShutDown', $this->startMenuHideShutDown);
        $writer->writeBooleanValue('startMenuHideSignOut', $this->startMenuHideSignOut);
        $writer->writeBooleanValue('startMenuHideSleep', $this->startMenuHideSleep);
        $writer->writeBooleanValue('startMenuHideSwitchAccount', $this->startMenuHideSwitchAccount);
        $writer->writeBooleanValue('startMenuHideUserTile', $this->startMenuHideUserTile);
        $writer->writeBinaryContent('startMenuLayoutEdgeAssetsXml', $this->startMenuLayoutEdgeAssetsXml);
        $writer->writeBinaryContent('startMenuLayoutXml', $this->startMenuLayoutXml);
        $writer->writeEnumValue('startMenuMode', $this->startMenuMode);
        $writer->writeEnumValue('startMenuPinnedFolderDocuments', $this->startMenuPinnedFolderDocuments);
        $writer->writeEnumValue('startMenuPinnedFolderDownloads', $this->startMenuPinnedFolderDownloads);
        $writer->writeEnumValue('startMenuPinnedFolderFileExplorer', $this->startMenuPinnedFolderFileExplorer);
        $writer->writeEnumValue('startMenuPinnedFolderHomeGroup', $this->startMenuPinnedFolderHomeGroup);
        $writer->writeEnumValue('startMenuPinnedFolderMusic', $this->startMenuPinnedFolderMusic);
        $writer->writeEnumValue('startMenuPinnedFolderNetwork', $this->startMenuPinnedFolderNetwork);
        $writer->writeEnumValue('startMenuPinnedFolderPersonalFolder', $this->startMenuPinnedFolderPersonalFolder);
        $writer->writeEnumValue('startMenuPinnedFolderPictures', $this->startMenuPinnedFolderPictures);
        $writer->writeEnumValue('startMenuPinnedFolderSettings', $this->startMenuPinnedFolderSettings);
        $writer->writeEnumValue('startMenuPinnedFolderVideos', $this->startMenuPinnedFolderVideos);
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->storageBlockRemovableStorage);
        $writer->writeBooleanValue('storageRequireMobileDeviceEncryption', $this->storageRequireMobileDeviceEncryption);
        $writer->writeBooleanValue('storageRestrictAppDataToSystemVolume', $this->storageRestrictAppDataToSystemVolume);
        $writer->writeBooleanValue('storageRestrictAppInstallToSystemVolume', $this->storageRestrictAppInstallToSystemVolume);
        $writer->writeStringValue('systemTelemetryProxyServer', $this->systemTelemetryProxyServer);
        $writer->writeBooleanValue('taskManagerBlockEndTask', $this->taskManagerBlockEndTask);
        $writer->writeBooleanValue('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience);
        $writer->writeBooleanValue('uninstallBuiltInApps', $this->uninstallBuiltInApps);
        $writer->writeBooleanValue('usbBlocked', $this->usbBlocked);
        $writer->writeBooleanValue('voiceRecordingBlocked', $this->voiceRecordingBlocked);
        $writer->writeBooleanValue('webRtcBlockLocalhostIpAddress', $this->webRtcBlockLocalhostIpAddress);
        $writer->writeBooleanValue('wiFiBlockAutomaticConnectHotspots', $this->wiFiBlockAutomaticConnectHotspots);
        $writer->writeBooleanValue('wiFiBlocked', $this->wiFiBlocked);
        $writer->writeBooleanValue('wiFiBlockManualConfiguration', $this->wiFiBlockManualConfiguration);
        $writer->writeIntegerValue('wiFiScanInterval', $this->wiFiScanInterval);
        $writer->writeObjectValue('windows10AppsForceUpdateSchedule', $this->windows10AppsForceUpdateSchedule);
        $writer->writeBooleanValue('windowsSpotlightBlockConsumerSpecificFeatures', $this->windowsSpotlightBlockConsumerSpecificFeatures);
        $writer->writeBooleanValue('windowsSpotlightBlocked', $this->windowsSpotlightBlocked);
        $writer->writeBooleanValue('windowsSpotlightBlockOnActionCenter', $this->windowsSpotlightBlockOnActionCenter);
        $writer->writeBooleanValue('windowsSpotlightBlockTailoredExperiences', $this->windowsSpotlightBlockTailoredExperiences);
        $writer->writeBooleanValue('windowsSpotlightBlockThirdPartyNotifications', $this->windowsSpotlightBlockThirdPartyNotifications);
        $writer->writeBooleanValue('windowsSpotlightBlockWelcomeExperience', $this->windowsSpotlightBlockWelcomeExperience);
        $writer->writeBooleanValue('windowsSpotlightBlockWindowsTips', $this->windowsSpotlightBlockWindowsTips);
        $writer->writeEnumValue('windowsSpotlightConfigureOnLockScreen', $this->windowsSpotlightConfigureOnLockScreen);
        $writer->writeBooleanValue('windowsStoreBlockAutoUpdate', $this->windowsStoreBlockAutoUpdate);
        $writer->writeBooleanValue('windowsStoreBlocked', $this->windowsStoreBlocked);
        $writer->writeBooleanValue('windowsStoreEnablePrivateStoreOnly', $this->windowsStoreEnablePrivateStoreOnly);
        $writer->writeBooleanValue('wirelessDisplayBlockProjectionToThisDevice', $this->wirelessDisplayBlockProjectionToThisDevice);
        $writer->writeBooleanValue('wirelessDisplayBlockUserInputFromReceiver', $this->wirelessDisplayBlockUserInputFromReceiver);
        $writer->writeBooleanValue('wirelessDisplayRequirePinForPairing', $this->wirelessDisplayRequirePinForPairing);
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     *  @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value ): void {
        $this->accountsBlockAddingNonMicrosoftAccountEmail = $value;
    }

    /**
     * Sets the activateAppsWithVoice property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the activateAppsWithVoice property.
    */
    public function setActivateAppsWithVoice(?Enablement $value ): void {
        $this->activateAppsWithVoice = $value;
    }

    /**
     * Sets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     *  @param bool|null $value Value to set for the antiTheftModeBlocked property.
    */
    public function setAntiTheftModeBlocked(?bool $value ): void {
        $this->antiTheftModeBlocked = $value;
    }

    /**
     * Sets the appManagementMSIAllowUserControlOverInstall property value. This policy setting permits users to change installation options that typically are available only to system administrators.
     *  @param bool|null $value Value to set for the appManagementMSIAllowUserControlOverInstall property.
    */
    public function setAppManagementMSIAllowUserControlOverInstall(?bool $value ): void {
        $this->appManagementMSIAllowUserControlOverInstall = $value;
    }

    /**
     * Sets the appManagementMSIAlwaysInstallWithElevatedPrivileges property value. This policy setting directs Windows Installer to use elevated permissions when it installs any program on the system.
     *  @param bool|null $value Value to set for the appManagementMSIAlwaysInstallWithElevatedPrivileges property.
    */
    public function setAppManagementMSIAlwaysInstallWithElevatedPrivileges(?bool $value ): void {
        $this->appManagementMSIAlwaysInstallWithElevatedPrivileges = $value;
    }

    /**
     * Sets the appManagementPackageFamilyNamesToLaunchAfterLogOn property value. List of semi-colon delimited Package Family Names of Windows apps. Listed Windows apps are to be launched after logon.​
     *  @param array<string>|null $value Value to set for the appManagementPackageFamilyNamesToLaunchAfterLogOn property.
    */
    public function setAppManagementPackageFamilyNamesToLaunchAfterLogOn(?array $value ): void {
        $this->appManagementPackageFamilyNamesToLaunchAfterLogOn = $value;
    }

    /**
     * Sets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the appsAllowTrustedAppsSideloading property.
    */
    public function setAppsAllowTrustedAppsSideloading(?StateManagementSetting $value ): void {
        $this->appsAllowTrustedAppsSideloading = $value;
    }

    /**
     * Sets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     *  @param bool|null $value Value to set for the appsBlockWindowsStoreOriginatedApps property.
    */
    public function setAppsBlockWindowsStoreOriginatedApps(?bool $value ): void {
        $this->appsBlockWindowsStoreOriginatedApps = $value;
    }

    /**
     * Sets the authenticationAllowSecondaryDevice property value. Allows secondary authentication devices to work with Windows.
     *  @param bool|null $value Value to set for the authenticationAllowSecondaryDevice property.
    */
    public function setAuthenticationAllowSecondaryDevice(?bool $value ): void {
        $this->authenticationAllowSecondaryDevice = $value;
    }

    /**
     * Sets the authenticationPreferredAzureADTenantDomainName property value. Specifies the preferred domain among available domains in the Azure AD tenant.
     *  @param string|null $value Value to set for the authenticationPreferredAzureADTenantDomainName property.
    */
    public function setAuthenticationPreferredAzureADTenantDomainName(?string $value ): void {
        $this->authenticationPreferredAzureADTenantDomainName = $value;
    }

    /**
     * Sets the authenticationWebSignIn property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the authenticationWebSignIn property.
    */
    public function setAuthenticationWebSignIn(?Enablement $value ): void {
        $this->authenticationWebSignIn = $value;
    }

    /**
     * Sets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     *  @param array<string>|null $value Value to set for the bluetoothAllowedServices property.
    */
    public function setBluetoothAllowedServices(?array $value ): void {
        $this->bluetoothAllowedServices = $value;
    }

    /**
     * Sets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     *  @param bool|null $value Value to set for the bluetoothBlockAdvertising property.
    */
    public function setBluetoothBlockAdvertising(?bool $value ): void {
        $this->bluetoothBlockAdvertising = $value;
    }

    /**
     * Sets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     *  @param bool|null $value Value to set for the bluetoothBlockDiscoverableMode property.
    */
    public function setBluetoothBlockDiscoverableMode(?bool $value ): void {
        $this->bluetoothBlockDiscoverableMode = $value;
    }

    /**
     * Sets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value ): void {
        $this->bluetoothBlocked = $value;
    }

    /**
     * Sets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     *  @param bool|null $value Value to set for the bluetoothBlockPrePairing property.
    */
    public function setBluetoothBlockPrePairing(?bool $value ): void {
        $this->bluetoothBlockPrePairing = $value;
    }

    /**
     * Sets the bluetoothBlockPromptedProximalConnections property value. Whether or not to block the users from using Swift Pair and other proximity based scenarios.
     *  @param bool|null $value Value to set for the bluetoothBlockPromptedProximalConnections property.
    */
    public function setBluetoothBlockPromptedProximalConnections(?bool $value ): void {
        $this->bluetoothBlockPromptedProximalConnections = $value;
    }

    /**
     * Sets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataWhenRoaming property.
    */
    public function setCellularBlockDataWhenRoaming(?bool $value ): void {
        $this->cellularBlockDataWhenRoaming = $value;
    }

    /**
     * Sets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpn property.
    */
    public function setCellularBlockVpn(?bool $value ): void {
        $this->cellularBlockVpn = $value;
    }

    /**
     * Sets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpnWhenRoaming property.
    */
    public function setCellularBlockVpnWhenRoaming(?bool $value ): void {
        $this->cellularBlockVpnWhenRoaming = $value;
    }

    /**
     * Sets the cellularData property value. Possible values of the ConfigurationUsage list.
     *  @param ConfigurationUsage|null $value Value to set for the cellularData property.
    */
    public function setCellularData(?ConfigurationUsage $value ): void {
        $this->cellularData = $value;
    }

    /**
     * Sets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     *  @param bool|null $value Value to set for the certificatesBlockManualRootCertificateInstallation property.
    */
    public function setCertificatesBlockManualRootCertificateInstallation(?bool $value ): void {
        $this->certificatesBlockManualRootCertificateInstallation = $value;
    }

    /**
     * Sets the configureTimeZone property value. Specifies the time zone to be applied to the device. This is the standard Windows name for the target time zone.
     *  @param string|null $value Value to set for the configureTimeZone property.
    */
    public function setConfigureTimeZone(?string $value ): void {
        $this->configureTimeZone = $value;
    }

    /**
     * Sets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     *  @param bool|null $value Value to set for the connectedDevicesServiceBlocked property.
    */
    public function setConnectedDevicesServiceBlocked(?bool $value ): void {
        $this->connectedDevicesServiceBlocked = $value;
    }

    /**
     * Sets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     *  @param bool|null $value Value to set for the copyPasteBlocked property.
    */
    public function setCopyPasteBlocked(?bool $value ): void {
        $this->copyPasteBlocked = $value;
    }

    /**
     * Sets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     *  @param bool|null $value Value to set for the cortanaBlocked property.
    */
    public function setCortanaBlocked(?bool $value ): void {
        $this->cortanaBlocked = $value;
    }

    /**
     * Sets the cryptographyAllowFipsAlgorithmPolicy property value. Specify whether to allow or disallow the Federal Information Processing Standard (FIPS) policy.
     *  @param bool|null $value Value to set for the cryptographyAllowFipsAlgorithmPolicy property.
    */
    public function setCryptographyAllowFipsAlgorithmPolicy(?bool $value ): void {
        $this->cryptographyAllowFipsAlgorithmPolicy = $value;
    }

    /**
     * Sets the dataProtectionBlockDirectMemoryAccess property value. This policy setting allows you to block direct memory access (DMA) for all hot pluggable PCI downstream ports until a user logs into Windows.
     *  @param bool|null $value Value to set for the dataProtectionBlockDirectMemoryAccess property.
    */
    public function setDataProtectionBlockDirectMemoryAccess(?bool $value ): void {
        $this->dataProtectionBlockDirectMemoryAccess = $value;
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     *  @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value ): void {
        $this->defenderBlockEndUserAccess = $value;
    }

    /**
     * Sets the defenderBlockOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     *  @param bool|null $value Value to set for the defenderBlockOnAccessProtection property.
    */
    public function setDefenderBlockOnAccessProtection(?bool $value ): void {
        $this->defenderBlockOnAccessProtection = $value;
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     *  @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value ): void {
        $this->defenderCloudBlockLevel = $value;
    }

    /**
     * Sets the defenderCloudExtendedTimeout property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     *  @param int|null $value Value to set for the defenderCloudExtendedTimeout property.
    */
    public function setDefenderCloudExtendedTimeout(?int $value ): void {
        $this->defenderCloudExtendedTimeout = $value;
    }

    /**
     * Sets the defenderCloudExtendedTimeoutInSeconds property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     *  @param int|null $value Value to set for the defenderCloudExtendedTimeoutInSeconds property.
    */
    public function setDefenderCloudExtendedTimeoutInSeconds(?int $value ): void {
        $this->defenderCloudExtendedTimeoutInSeconds = $value;
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     *  @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value ): void {
        $this->defenderDaysBeforeDeletingQuarantinedMalware = $value;
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     *  @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value ): void {
        $this->defenderDetectedMalwareActions = $value;
    }

    /**
     * Sets the defenderDisableCatchupFullScan property value. When blocked, catch-up scans for scheduled full scans will be turned off.
     *  @param bool|null $value Value to set for the defenderDisableCatchupFullScan property.
    */
    public function setDefenderDisableCatchupFullScan(?bool $value ): void {
        $this->defenderDisableCatchupFullScan = $value;
    }

    /**
     * Sets the defenderDisableCatchupQuickScan property value. When blocked, catch-up scans for scheduled quick scans will be turned off.
     *  @param bool|null $value Value to set for the defenderDisableCatchupQuickScan property.
    */
    public function setDefenderDisableCatchupQuickScan(?bool $value ): void {
        $this->defenderDisableCatchupQuickScan = $value;
    }

    /**
     * Sets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFileExtensionsToExclude property.
    */
    public function setDefenderFileExtensionsToExclude(?array $value ): void {
        $this->defenderFileExtensionsToExclude = $value;
    }

    /**
     * Sets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFilesAndFoldersToExclude property.
    */
    public function setDefenderFilesAndFoldersToExclude(?array $value ): void {
        $this->defenderFilesAndFoldersToExclude = $value;
    }

    /**
     * Sets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     *  @param DefenderMonitorFileActivity|null $value Value to set for the defenderMonitorFileActivity property.
    */
    public function setDefenderMonitorFileActivity(?DefenderMonitorFileActivity $value ): void {
        $this->defenderMonitorFileActivity = $value;
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppAction property value. Gets or sets Defender’s action to take on Potentially Unwanted Application (PUA), which includes software with behaviors of ad-injection, software bundling, persistent solicitation for payment or subscription, etc. Defender alerts user when PUA is being downloaded or attempts to install itself. Added in Windows 10 for desktop. Possible values are: deviceDefault, block, audit.
     *  @param DefenderPotentiallyUnwantedAppAction|null $value Value to set for the defenderPotentiallyUnwantedAppAction property.
    */
    public function setDefenderPotentiallyUnwantedAppAction(?DefenderPotentiallyUnwantedAppAction $value ): void {
        $this->defenderPotentiallyUnwantedAppAction = $value;
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppActionSetting property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderPotentiallyUnwantedAppActionSetting property.
    */
    public function setDefenderPotentiallyUnwantedAppActionSetting(?DefenderProtectionType $value ): void {
        $this->defenderPotentiallyUnwantedAppActionSetting = $value;
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value ): void {
        $this->defenderProcessesToExclude = $value;
    }

    /**
     * Sets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     *  @param DefenderPromptForSampleSubmission|null $value Value to set for the defenderPromptForSampleSubmission property.
    */
    public function setDefenderPromptForSampleSubmission(?DefenderPromptForSampleSubmission $value ): void {
        $this->defenderPromptForSampleSubmission = $value;
    }

    /**
     * Sets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     *  @param bool|null $value Value to set for the defenderRequireBehaviorMonitoring property.
    */
    public function setDefenderRequireBehaviorMonitoring(?bool $value ): void {
        $this->defenderRequireBehaviorMonitoring = $value;
    }

    /**
     * Sets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     *  @param bool|null $value Value to set for the defenderRequireCloudProtection property.
    */
    public function setDefenderRequireCloudProtection(?bool $value ): void {
        $this->defenderRequireCloudProtection = $value;
    }

    /**
     * Sets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     *  @param bool|null $value Value to set for the defenderRequireNetworkInspectionSystem property.
    */
    public function setDefenderRequireNetworkInspectionSystem(?bool $value ): void {
        $this->defenderRequireNetworkInspectionSystem = $value;
    }

    /**
     * Sets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     *  @param bool|null $value Value to set for the defenderRequireRealTimeMonitoring property.
    */
    public function setDefenderRequireRealTimeMonitoring(?bool $value ): void {
        $this->defenderRequireRealTimeMonitoring = $value;
    }

    /**
     * Sets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     *  @param bool|null $value Value to set for the defenderScanArchiveFiles property.
    */
    public function setDefenderScanArchiveFiles(?bool $value ): void {
        $this->defenderScanArchiveFiles = $value;
    }

    /**
     * Sets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     *  @param bool|null $value Value to set for the defenderScanDownloads property.
    */
    public function setDefenderScanDownloads(?bool $value ): void {
        $this->defenderScanDownloads = $value;
    }

    /**
     * Sets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     *  @param bool|null $value Value to set for the defenderScanIncomingMail property.
    */
    public function setDefenderScanIncomingMail(?bool $value ): void {
        $this->defenderScanIncomingMail = $value;
    }

    /**
     * Sets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderScanMappedNetworkDrivesDuringFullScan(?bool $value ): void {
        $this->defenderScanMappedNetworkDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     *  @param int|null $value Value to set for the defenderScanMaxCpu property.
    */
    public function setDefenderScanMaxCpu(?int $value ): void {
        $this->defenderScanMaxCpu = $value;
    }

    /**
     * Sets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     *  @param bool|null $value Value to set for the defenderScanNetworkFiles property.
    */
    public function setDefenderScanNetworkFiles(?bool $value ): void {
        $this->defenderScanNetworkFiles = $value;
    }

    /**
     * Sets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderScanRemovableDrivesDuringFullScan(?bool $value ): void {
        $this->defenderScanRemovableDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     *  @param bool|null $value Value to set for the defenderScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderScanScriptsLoadedInInternetExplorer(?bool $value ): void {
        $this->defenderScanScriptsLoadedInInternetExplorer = $value;
    }

    /**
     * Sets the defenderScanType property value. Possible values for system scan type.
     *  @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value ): void {
        $this->defenderScanType = $value;
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     *  @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value ): void {
        $this->defenderScheduledQuickScanTime = $value;
    }

    /**
     * Sets the defenderScheduledScanTime property value. The defender time for the system scan.
     *  @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value ): void {
        $this->defenderScheduledScanTime = $value;
    }

    /**
     * Sets the defenderScheduleScanEnableLowCpuPriority property value. When enabled, low CPU priority will be used during scheduled scans.
     *  @param bool|null $value Value to set for the defenderScheduleScanEnableLowCpuPriority property.
    */
    public function setDefenderScheduleScanEnableLowCpuPriority(?bool $value ): void {
        $this->defenderScheduleScanEnableLowCpuPriority = $value;
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     *  @param int|null $value Value to set for the defenderSignatureUpdateIntervalInHours property.
    */
    public function setDefenderSignatureUpdateIntervalInHours(?int $value ): void {
        $this->defenderSignatureUpdateIntervalInHours = $value;
    }

    /**
     * Sets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     *  @param DefenderSubmitSamplesConsentType|null $value Value to set for the defenderSubmitSamplesConsentType property.
    */
    public function setDefenderSubmitSamplesConsentType(?DefenderSubmitSamplesConsentType $value ): void {
        $this->defenderSubmitSamplesConsentType = $value;
    }

    /**
     * Sets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     *  @param WeeklySchedule|null $value Value to set for the defenderSystemScanSchedule property.
    */
    public function setDefenderSystemScanSchedule(?WeeklySchedule $value ): void {
        $this->defenderSystemScanSchedule = $value;
    }

    /**
     * Sets the developerUnlockSetting property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the developerUnlockSetting property.
    */
    public function setDeveloperUnlockSetting(?StateManagementSetting $value ): void {
        $this->developerUnlockSetting = $value;
    }

    /**
     * Sets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     *  @param bool|null $value Value to set for the deviceManagementBlockFactoryResetOnMobile property.
    */
    public function setDeviceManagementBlockFactoryResetOnMobile(?bool $value ): void {
        $this->deviceManagementBlockFactoryResetOnMobile = $value;
    }

    /**
     * Sets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     *  @param bool|null $value Value to set for the deviceManagementBlockManualUnenroll property.
    */
    public function setDeviceManagementBlockManualUnenroll(?bool $value ): void {
        $this->deviceManagementBlockManualUnenroll = $value;
    }

    /**
     * Sets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     *  @param DiagnosticDataSubmissionMode|null $value Value to set for the diagnosticsDataSubmissionMode property.
    */
    public function setDiagnosticsDataSubmissionMode(?DiagnosticDataSubmissionMode $value ): void {
        $this->diagnosticsDataSubmissionMode = $value;
    }

    /**
     * Sets the displayAppListWithGdiDPIScalingTurnedOff property value. List of legacy applications that have GDI DPI Scaling turned off.
     *  @param array<string>|null $value Value to set for the displayAppListWithGdiDPIScalingTurnedOff property.
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOff(?array $value ): void {
        $this->displayAppListWithGdiDPIScalingTurnedOff = $value;
    }

    /**
     * Sets the displayAppListWithGdiDPIScalingTurnedOn property value. List of legacy applications that have GDI DPI Scaling turned on.
     *  @param array<string>|null $value Value to set for the displayAppListWithGdiDPIScalingTurnedOn property.
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOn(?array $value ): void {
        $this->displayAppListWithGdiDPIScalingTurnedOn = $value;
    }

    /**
     * Sets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     *  @param bool|null $value Value to set for the edgeAllowStartPagesModification property.
    */
    public function setEdgeAllowStartPagesModification(?bool $value ): void {
        $this->edgeAllowStartPagesModification = $value;
    }

    /**
     * Sets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockAccessToAboutFlags property.
    */
    public function setEdgeBlockAccessToAboutFlags(?bool $value ): void {
        $this->edgeBlockAccessToAboutFlags = $value;
    }

    /**
     * Sets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     *  @param bool|null $value Value to set for the edgeBlockAddressBarDropdown property.
    */
    public function setEdgeBlockAddressBarDropdown(?bool $value ): void {
        $this->edgeBlockAddressBarDropdown = $value;
    }

    /**
     * Sets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     *  @param bool|null $value Value to set for the edgeBlockAutofill property.
    */
    public function setEdgeBlockAutofill(?bool $value ): void {
        $this->edgeBlockAutofill = $value;
    }

    /**
     * Sets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     *  @param bool|null $value Value to set for the edgeBlockCompatibilityList property.
    */
    public function setEdgeBlockCompatibilityList(?bool $value ): void {
        $this->edgeBlockCompatibilityList = $value;
    }

    /**
     * Sets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockDeveloperTools property.
    */
    public function setEdgeBlockDeveloperTools(?bool $value ): void {
        $this->edgeBlockDeveloperTools = $value;
    }

    /**
     * Sets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlocked property.
    */
    public function setEdgeBlocked(?bool $value ): void {
        $this->edgeBlocked = $value;
    }

    /**
     * Sets the edgeBlockEditFavorites property value. Indicates whether or not to Block the user from making changes to Favorites.
     *  @param bool|null $value Value to set for the edgeBlockEditFavorites property.
    */
    public function setEdgeBlockEditFavorites(?bool $value ): void {
        $this->edgeBlockEditFavorites = $value;
    }

    /**
     * Sets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockExtensions property.
    */
    public function setEdgeBlockExtensions(?bool $value ): void {
        $this->edgeBlockExtensions = $value;
    }

    /**
     * Sets the edgeBlockFullScreenMode property value. Allow or prevent Edge from entering the full screen mode.
     *  @param bool|null $value Value to set for the edgeBlockFullScreenMode property.
    */
    public function setEdgeBlockFullScreenMode(?bool $value ): void {
        $this->edgeBlockFullScreenMode = $value;
    }

    /**
     * Sets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockInPrivateBrowsing property.
    */
    public function setEdgeBlockInPrivateBrowsing(?bool $value ): void {
        $this->edgeBlockInPrivateBrowsing = $value;
    }

    /**
     * Sets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     *  @param bool|null $value Value to set for the edgeBlockJavaScript property.
    */
    public function setEdgeBlockJavaScript(?bool $value ): void {
        $this->edgeBlockJavaScript = $value;
    }

    /**
     * Sets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeBlockLiveTileDataCollection property.
    */
    public function setEdgeBlockLiveTileDataCollection(?bool $value ): void {
        $this->edgeBlockLiveTileDataCollection = $value;
    }

    /**
     * Sets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     *  @param bool|null $value Value to set for the edgeBlockPasswordManager property.
    */
    public function setEdgeBlockPasswordManager(?bool $value ): void {
        $this->edgeBlockPasswordManager = $value;
    }

    /**
     * Sets the edgeBlockPopups property value. Indicates whether or not to block popups.
     *  @param bool|null $value Value to set for the edgeBlockPopups property.
    */
    public function setEdgeBlockPopups(?bool $value ): void {
        $this->edgeBlockPopups = $value;
    }

    /**
     * Sets the edgeBlockPrelaunch property value. Decide whether Microsoft Edge is prelaunched at Windows startup.
     *  @param bool|null $value Value to set for the edgeBlockPrelaunch property.
    */
    public function setEdgeBlockPrelaunch(?bool $value ): void {
        $this->edgeBlockPrelaunch = $value;
    }

    /**
     * Sets the edgeBlockPrinting property value. Configure Edge to allow or block printing.
     *  @param bool|null $value Value to set for the edgeBlockPrinting property.
    */
    public function setEdgeBlockPrinting(?bool $value ): void {
        $this->edgeBlockPrinting = $value;
    }

    /**
     * Sets the edgeBlockSavingHistory property value. Configure Edge to allow browsing history to be saved or to never save browsing history.
     *  @param bool|null $value Value to set for the edgeBlockSavingHistory property.
    */
    public function setEdgeBlockSavingHistory(?bool $value ): void {
        $this->edgeBlockSavingHistory = $value;
    }

    /**
     * Sets the edgeBlockSearchEngineCustomization property value. Indicates whether or not to block the user from adding new search engine or changing the default search engine.
     *  @param bool|null $value Value to set for the edgeBlockSearchEngineCustomization property.
    */
    public function setEdgeBlockSearchEngineCustomization(?bool $value ): void {
        $this->edgeBlockSearchEngineCustomization = $value;
    }

    /**
     * Sets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     *  @param bool|null $value Value to set for the edgeBlockSearchSuggestions property.
    */
    public function setEdgeBlockSearchSuggestions(?bool $value ): void {
        $this->edgeBlockSearchSuggestions = $value;
    }

    /**
     * Sets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     *  @param bool|null $value Value to set for the edgeBlockSendingDoNotTrackHeader property.
    */
    public function setEdgeBlockSendingDoNotTrackHeader(?bool $value ): void {
        $this->edgeBlockSendingDoNotTrackHeader = $value;
    }

    /**
     * Sets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     *  @param bool|null $value Value to set for the edgeBlockSendingIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer(?bool $value ): void {
        $this->edgeBlockSendingIntranetTrafficToInternetExplorer = $value;
    }

    /**
     * Sets the edgeBlockSideloadingExtensions property value. Indicates whether the user can sideload extensions.
     *  @param bool|null $value Value to set for the edgeBlockSideloadingExtensions property.
    */
    public function setEdgeBlockSideloadingExtensions(?bool $value ): void {
        $this->edgeBlockSideloadingExtensions = $value;
    }

    /**
     * Sets the edgeBlockTabPreloading property value. Configure whether Edge preloads the new tab page at Windows startup.
     *  @param bool|null $value Value to set for the edgeBlockTabPreloading property.
    */
    public function setEdgeBlockTabPreloading(?bool $value ): void {
        $this->edgeBlockTabPreloading = $value;
    }

    /**
     * Sets the edgeBlockWebContentOnNewTabPage property value. Configure to load a blank page in Edge instead of the default New tab page and prevent users from changing it.
     *  @param bool|null $value Value to set for the edgeBlockWebContentOnNewTabPage property.
    */
    public function setEdgeBlockWebContentOnNewTabPage(?bool $value ): void {
        $this->edgeBlockWebContentOnNewTabPage = $value;
    }

    /**
     * Sets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeClearBrowsingDataOnExit property.
    */
    public function setEdgeClearBrowsingDataOnExit(?bool $value ): void {
        $this->edgeClearBrowsingDataOnExit = $value;
    }

    /**
     * Sets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     *  @param EdgeCookiePolicy|null $value Value to set for the edgeCookiePolicy property.
    */
    public function setEdgeCookiePolicy(?EdgeCookiePolicy $value ): void {
        $this->edgeCookiePolicy = $value;
    }

    /**
     * Sets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     *  @param bool|null $value Value to set for the edgeDisableFirstRunPage property.
    */
    public function setEdgeDisableFirstRunPage(?bool $value ): void {
        $this->edgeDisableFirstRunPage = $value;
    }

    /**
     * Sets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the edgeEnterpriseModeSiteListLocation property.
    */
    public function setEdgeEnterpriseModeSiteListLocation(?string $value ): void {
        $this->edgeEnterpriseModeSiteListLocation = $value;
    }

    /**
     * Sets the edgeFavoritesBarVisibility property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the edgeFavoritesBarVisibility property.
    */
    public function setEdgeFavoritesBarVisibility(?VisibilitySetting $value ): void {
        $this->edgeFavoritesBarVisibility = $value;
    }

    /**
     * Sets the edgeFavoritesListLocation property value. The location of the favorites list to provision. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the edgeFavoritesListLocation property.
    */
    public function setEdgeFavoritesListLocation(?string $value ): void {
        $this->edgeFavoritesListLocation = $value;
    }

    /**
     * Sets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     *  @param string|null $value Value to set for the edgeFirstRunUrl property.
    */
    public function setEdgeFirstRunUrl(?string $value ): void {
        $this->edgeFirstRunUrl = $value;
    }

    /**
     * Sets the edgeHomeButtonConfiguration property value. Causes the Home button to either hide, load the default Start page, load a New tab page, or a custom URL
     *  @param EdgeHomeButtonConfiguration|null $value Value to set for the edgeHomeButtonConfiguration property.
    */
    public function setEdgeHomeButtonConfiguration(?EdgeHomeButtonConfiguration $value ): void {
        $this->edgeHomeButtonConfiguration = $value;
    }

    /**
     * Sets the edgeHomeButtonConfigurationEnabled property value. Enable the Home button configuration.
     *  @param bool|null $value Value to set for the edgeHomeButtonConfigurationEnabled property.
    */
    public function setEdgeHomeButtonConfigurationEnabled(?bool $value ): void {
        $this->edgeHomeButtonConfigurationEnabled = $value;
    }

    /**
     * Sets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     *  @param array<string>|null $value Value to set for the edgeHomepageUrls property.
    */
    public function setEdgeHomepageUrls(?array $value ): void {
        $this->edgeHomepageUrls = $value;
    }

    /**
     * Sets the edgeKioskModeRestriction property value. Specify how the Microsoft Edge settings are restricted based on kiosk mode.
     *  @param EdgeKioskModeRestrictionType|null $value Value to set for the edgeKioskModeRestriction property.
    */
    public function setEdgeKioskModeRestriction(?EdgeKioskModeRestrictionType $value ): void {
        $this->edgeKioskModeRestriction = $value;
    }

    /**
     * Sets the edgeKioskResetAfterIdleTimeInMinutes property value. Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
     *  @param int|null $value Value to set for the edgeKioskResetAfterIdleTimeInMinutes property.
    */
    public function setEdgeKioskResetAfterIdleTimeInMinutes(?int $value ): void {
        $this->edgeKioskResetAfterIdleTimeInMinutes = $value;
    }

    /**
     * Sets the edgeNewTabPageURL property value. Specify the page opened when new tabs are created.
     *  @param string|null $value Value to set for the edgeNewTabPageURL property.
    */
    public function setEdgeNewTabPageURL(?string $value ): void {
        $this->edgeNewTabPageURL = $value;
    }

    /**
     * Sets the edgeOpensWith property value. Possible values for the EdgeOpensWith setting.
     *  @param EdgeOpenOptions|null $value Value to set for the edgeOpensWith property.
    */
    public function setEdgeOpensWith(?EdgeOpenOptions $value ): void {
        $this->edgeOpensWith = $value;
    }

    /**
     * Sets the edgePreventCertificateErrorOverride property value. Allow or prevent users from overriding certificate errors.
     *  @param bool|null $value Value to set for the edgePreventCertificateErrorOverride property.
    */
    public function setEdgePreventCertificateErrorOverride(?bool $value ): void {
        $this->edgePreventCertificateErrorOverride = $value;
    }

    /**
     * Sets the edgeRequiredExtensionPackageFamilyNames property value. Specify the list of package family names of browser extensions that are required and cannot be turned off by the user.
     *  @param array<string>|null $value Value to set for the edgeRequiredExtensionPackageFamilyNames property.
    */
    public function setEdgeRequiredExtensionPackageFamilyNames(?array $value ): void {
        $this->edgeRequiredExtensionPackageFamilyNames = $value;
    }

    /**
     * Sets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     *  @param bool|null $value Value to set for the edgeRequireSmartScreen property.
    */
    public function setEdgeRequireSmartScreen(?bool $value ): void {
        $this->edgeRequireSmartScreen = $value;
    }

    /**
     * Sets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     *  @param EdgeSearchEngineBase|null $value Value to set for the edgeSearchEngine property.
    */
    public function setEdgeSearchEngine(?EdgeSearchEngineBase $value ): void {
        $this->edgeSearchEngine = $value;
    }

    /**
     * Sets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     *  @param bool|null $value Value to set for the edgeSendIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeSendIntranetTrafficToInternetExplorer(?bool $value ): void {
        $this->edgeSendIntranetTrafficToInternetExplorer = $value;
    }

    /**
     * Sets the edgeShowMessageWhenOpeningInternetExplorerSites property value. What message will be displayed by Edge before switching to Internet Explorer.
     *  @param InternetExplorerMessageSetting|null $value Value to set for the edgeShowMessageWhenOpeningInternetExplorerSites property.
    */
    public function setEdgeShowMessageWhenOpeningInternetExplorerSites(?InternetExplorerMessageSetting $value ): void {
        $this->edgeShowMessageWhenOpeningInternetExplorerSites = $value;
    }

    /**
     * Sets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     *  @param bool|null $value Value to set for the edgeSyncFavoritesWithInternetExplorer property.
    */
    public function setEdgeSyncFavoritesWithInternetExplorer(?bool $value ): void {
        $this->edgeSyncFavoritesWithInternetExplorer = $value;
    }

    /**
     * Sets the edgeTelemetryForMicrosoft365Analytics property value. Type of browsing data sent to Microsoft 365 analytics
     *  @param EdgeTelemetryMode|null $value Value to set for the edgeTelemetryForMicrosoft365Analytics property.
    */
    public function setEdgeTelemetryForMicrosoft365Analytics(?EdgeTelemetryMode $value ): void {
        $this->edgeTelemetryForMicrosoft365Analytics = $value;
    }

    /**
     * Sets the enableAutomaticRedeployment property value. Allow users with administrative rights to delete all user data and settings using CTRL + Win + R at the device lock screen so that the device can be automatically re-configured and re-enrolled into management.
     *  @param bool|null $value Value to set for the enableAutomaticRedeployment property.
    */
    public function setEnableAutomaticRedeployment(?bool $value ): void {
        $this->enableAutomaticRedeployment = $value;
    }

    /**
     * Sets the energySaverOnBatteryThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While on battery, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the energySaverOnBatteryThresholdPercentage property.
    */
    public function setEnergySaverOnBatteryThresholdPercentage(?int $value ): void {
        $this->energySaverOnBatteryThresholdPercentage = $value;
    }

    /**
     * Sets the energySaverPluggedInThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While plugged in, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the energySaverPluggedInThresholdPercentage property.
    */
    public function setEnergySaverPluggedInThresholdPercentage(?int $value ): void {
        $this->energySaverPluggedInThresholdPercentage = $value;
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     *  @param string|null $value Value to set for the enterpriseCloudPrintDiscoveryEndPoint property.
    */
    public function setEnterpriseCloudPrintDiscoveryEndPoint(?string $value ): void {
        $this->enterpriseCloudPrintDiscoveryEndPoint = $value;
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     *  @param int|null $value Value to set for the enterpriseCloudPrintDiscoveryMaxLimit property.
    */
    public function setEnterpriseCloudPrintDiscoveryMaxLimit(?int $value ): void {
        $this->enterpriseCloudPrintDiscoveryMaxLimit = $value;
    }

    /**
     * Sets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintMopriaDiscoveryResourceIdentifier = $value;
    }

    /**
     * Sets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthAuthority property.
    */
    public function setEnterpriseCloudPrintOAuthAuthority(?string $value ): void {
        $this->enterpriseCloudPrintOAuthAuthority = $value;
    }

    /**
     * Sets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthClientIdentifier property.
    */
    public function setEnterpriseCloudPrintOAuthClientIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintOAuthClientIdentifier = $value;
    }

    /**
     * Sets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintResourceIdentifier(?string $value ): void {
        $this->enterpriseCloudPrintResourceIdentifier = $value;
    }

    /**
     * Sets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     *  @param bool|null $value Value to set for the experienceBlockDeviceDiscovery property.
    */
    public function setExperienceBlockDeviceDiscovery(?bool $value ): void {
        $this->experienceBlockDeviceDiscovery = $value;
    }

    /**
     * Sets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     *  @param bool|null $value Value to set for the experienceBlockErrorDialogWhenNoSIM property.
    */
    public function setExperienceBlockErrorDialogWhenNoSIM(?bool $value ): void {
        $this->experienceBlockErrorDialogWhenNoSIM = $value;
    }

    /**
     * Sets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     *  @param bool|null $value Value to set for the experienceBlockTaskSwitcher property.
    */
    public function setExperienceBlockTaskSwitcher(?bool $value ): void {
        $this->experienceBlockTaskSwitcher = $value;
    }

    /**
     * Sets the experienceDoNotSyncBrowserSettings property value. Allow(Not Configured) or prevent(Block) the syncing of Microsoft Edge Browser settings. Option to prevent syncing across devices, but allow user override.
     *  @param BrowserSyncSetting|null $value Value to set for the experienceDoNotSyncBrowserSettings property.
    */
    public function setExperienceDoNotSyncBrowserSettings(?BrowserSyncSetting $value ): void {
        $this->experienceDoNotSyncBrowserSettings = $value;
    }

    /**
     * Sets the findMyFiles property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the findMyFiles property.
    */
    public function setFindMyFiles(?Enablement $value ): void {
        $this->findMyFiles = $value;
    }

    /**
     * Sets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     *  @param bool|null $value Value to set for the gameDvrBlocked property.
    */
    public function setGameDvrBlocked(?bool $value ): void {
        $this->gameDvrBlocked = $value;
    }

    /**
     * Sets the inkWorkspaceAccess property value. Values for the InkWorkspaceAccess setting.
     *  @param InkAccessSetting|null $value Value to set for the inkWorkspaceAccess property.
    */
    public function setInkWorkspaceAccess(?InkAccessSetting $value ): void {
        $this->inkWorkspaceAccess = $value;
    }

    /**
     * Sets the inkWorkspaceAccessState property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the inkWorkspaceAccessState property.
    */
    public function setInkWorkspaceAccessState(?StateManagementSetting $value ): void {
        $this->inkWorkspaceAccessState = $value;
    }

    /**
     * Sets the inkWorkspaceBlockSuggestedApps property value. Specify whether to show recommended app suggestions in the ink workspace.
     *  @param bool|null $value Value to set for the inkWorkspaceBlockSuggestedApps property.
    */
    public function setInkWorkspaceBlockSuggestedApps(?bool $value ): void {
        $this->inkWorkspaceBlockSuggestedApps = $value;
    }

    /**
     * Sets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     *  @param bool|null $value Value to set for the internetSharingBlocked property.
    */
    public function setInternetSharingBlocked(?bool $value ): void {
        $this->internetSharingBlocked = $value;
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     *  @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value ): void {
        $this->locationServicesBlocked = $value;
    }

    /**
     * Sets the lockScreenActivateAppsWithVoice property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the lockScreenActivateAppsWithVoice property.
    */
    public function setLockScreenActivateAppsWithVoice(?Enablement $value ): void {
        $this->lockScreenActivateAppsWithVoice = $value;
    }

    /**
     * Sets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     *  @param bool|null $value Value to set for the lockScreenAllowTimeoutConfiguration property.
    */
    public function setLockScreenAllowTimeoutConfiguration(?bool $value ): void {
        $this->lockScreenAllowTimeoutConfiguration = $value;
    }

    /**
     * Sets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockActionCenterNotifications property.
    */
    public function setLockScreenBlockActionCenterNotifications(?bool $value ): void {
        $this->lockScreenBlockActionCenterNotifications = $value;
    }

    /**
     * Sets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     *  @param bool|null $value Value to set for the lockScreenBlockCortana property.
    */
    public function setLockScreenBlockCortana(?bool $value ): void {
        $this->lockScreenBlockCortana = $value;
    }

    /**
     * Sets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockToastNotifications property.
    */
    public function setLockScreenBlockToastNotifications(?bool $value ): void {
        $this->lockScreenBlockToastNotifications = $value;
    }

    /**
     * Sets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     *  @param int|null $value Value to set for the lockScreenTimeoutInSeconds property.
    */
    public function setLockScreenTimeoutInSeconds(?int $value ): void {
        $this->lockScreenTimeoutInSeconds = $value;
    }

    /**
     * Sets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     *  @param bool|null $value Value to set for the logonBlockFastUserSwitching property.
    */
    public function setLogonBlockFastUserSwitching(?bool $value ): void {
        $this->logonBlockFastUserSwitching = $value;
    }

    /**
     * Sets the messagingBlockMMS property value. Indicates whether or not to block the MMS send/receive functionality on the device.
     *  @param bool|null $value Value to set for the messagingBlockMMS property.
    */
    public function setMessagingBlockMMS(?bool $value ): void {
        $this->messagingBlockMMS = $value;
    }

    /**
     * Sets the messagingBlockRichCommunicationServices property value. Indicates whether or not to block the RCS send/receive functionality on the device.
     *  @param bool|null $value Value to set for the messagingBlockRichCommunicationServices property.
    */
    public function setMessagingBlockRichCommunicationServices(?bool $value ): void {
        $this->messagingBlockRichCommunicationServices = $value;
    }

    /**
     * Sets the messagingBlockSync property value. Indicates whether or not to block text message back up and restore and Messaging Everywhere.
     *  @param bool|null $value Value to set for the messagingBlockSync property.
    */
    public function setMessagingBlockSync(?bool $value ): void {
        $this->messagingBlockSync = $value;
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     *  @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value ): void {
        $this->microsoftAccountBlocked = $value;
    }

    /**
     * Sets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     *  @param bool|null $value Value to set for the microsoftAccountBlockSettingsSync property.
    */
    public function setMicrosoftAccountBlockSettingsSync(?bool $value ): void {
        $this->microsoftAccountBlockSettingsSync = $value;
    }

    /**
     * Sets the microsoftAccountSignInAssistantSettings property value. Values for the SignInAssistantSettings.
     *  @param SignInAssistantOptions|null $value Value to set for the microsoftAccountSignInAssistantSettings property.
    */
    public function setMicrosoftAccountSignInAssistantSettings(?SignInAssistantOptions $value ): void {
        $this->microsoftAccountSignInAssistantSettings = $value;
    }

    /**
     * Sets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     *  @param bool|null $value Value to set for the networkProxyApplySettingsDeviceWide property.
    */
    public function setNetworkProxyApplySettingsDeviceWide(?bool $value ): void {
        $this->networkProxyApplySettingsDeviceWide = $value;
    }

    /**
     * Sets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     *  @param string|null $value Value to set for the networkProxyAutomaticConfigurationUrl property.
    */
    public function setNetworkProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->networkProxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     *  @param bool|null $value Value to set for the networkProxyDisableAutoDetect property.
    */
    public function setNetworkProxyDisableAutoDetect(?bool $value ): void {
        $this->networkProxyDisableAutoDetect = $value;
    }

    /**
     * Sets the networkProxyServer property value. Specifies manual proxy server settings.
     *  @param Windows10NetworkProxyServer|null $value Value to set for the networkProxyServer property.
    */
    public function setNetworkProxyServer(?Windows10NetworkProxyServer $value ): void {
        $this->networkProxyServer = $value;
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     *  @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value ): void {
        $this->nfcBlocked = $value;
    }

    /**
     * Sets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     *  @param bool|null $value Value to set for the oneDriveDisableFileSync property.
    */
    public function setOneDriveDisableFileSync(?bool $value ): void {
        $this->oneDriveDisableFileSync = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumAgeInDays property value. This security setting determines the period of time (in days) that a password must be used before the user can change it. Valid values 0 to 998
     *  @param int|null $value Value to set for the passwordMinimumAgeInDays property.
    */
    public function setPasswordMinimumAgeInDays(?int $value ): void {
        $this->passwordMinimumAgeInDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     *  @param bool|null $value Value to set for the passwordRequireWhenResumeFromIdleState property.
    */
    public function setPasswordRequireWhenResumeFromIdleState(?bool $value ): void {
        $this->passwordRequireWhenResumeFromIdleState = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     *  @param string|null $value Value to set for the personalizationDesktopImageUrl property.
    */
    public function setPersonalizationDesktopImageUrl(?string $value ): void {
        $this->personalizationDesktopImageUrl = $value;
    }

    /**
     * Sets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     *  @param string|null $value Value to set for the personalizationLockScreenImageUrl property.
    */
    public function setPersonalizationLockScreenImageUrl(?string $value ): void {
        $this->personalizationLockScreenImageUrl = $value;
    }

    /**
     * Sets the powerButtonActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerButtonActionOnBattery property.
    */
    public function setPowerButtonActionOnBattery(?PowerActionType $value ): void {
        $this->powerButtonActionOnBattery = $value;
    }

    /**
     * Sets the powerButtonActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerButtonActionPluggedIn property.
    */
    public function setPowerButtonActionPluggedIn(?PowerActionType $value ): void {
        $this->powerButtonActionPluggedIn = $value;
    }

    /**
     * Sets the powerHybridSleepOnBattery property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the powerHybridSleepOnBattery property.
    */
    public function setPowerHybridSleepOnBattery(?Enablement $value ): void {
        $this->powerHybridSleepOnBattery = $value;
    }

    /**
     * Sets the powerHybridSleepPluggedIn property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the powerHybridSleepPluggedIn property.
    */
    public function setPowerHybridSleepPluggedIn(?Enablement $value ): void {
        $this->powerHybridSleepPluggedIn = $value;
    }

    /**
     * Sets the powerLidCloseActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerLidCloseActionOnBattery property.
    */
    public function setPowerLidCloseActionOnBattery(?PowerActionType $value ): void {
        $this->powerLidCloseActionOnBattery = $value;
    }

    /**
     * Sets the powerLidCloseActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerLidCloseActionPluggedIn property.
    */
    public function setPowerLidCloseActionPluggedIn(?PowerActionType $value ): void {
        $this->powerLidCloseActionPluggedIn = $value;
    }

    /**
     * Sets the powerSleepButtonActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerSleepButtonActionOnBattery property.
    */
    public function setPowerSleepButtonActionOnBattery(?PowerActionType $value ): void {
        $this->powerSleepButtonActionOnBattery = $value;
    }

    /**
     * Sets the powerSleepButtonActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerSleepButtonActionPluggedIn property.
    */
    public function setPowerSleepButtonActionPluggedIn(?PowerActionType $value ): void {
        $this->powerSleepButtonActionPluggedIn = $value;
    }

    /**
     * Sets the printerBlockAddition property value. Prevent user installation of additional printers from printers settings.
     *  @param bool|null $value Value to set for the printerBlockAddition property.
    */
    public function setPrinterBlockAddition(?bool $value ): void {
        $this->printerBlockAddition = $value;
    }

    /**
     * Sets the printerDefaultName property value. Name (network host name) of an installed printer.
     *  @param string|null $value Value to set for the printerDefaultName property.
    */
    public function setPrinterDefaultName(?string $value ): void {
        $this->printerDefaultName = $value;
    }

    /**
     * Sets the printerNames property value. Automatically provision printers based on their names (network host names).
     *  @param array<string>|null $value Value to set for the printerNames property.
    */
    public function setPrinterNames(?array $value ): void {
        $this->printerNames = $value;
    }

    /**
     * Sets the privacyAccessControls property value. Indicates a list of applications with their access control levels over privacy data categories, and/or the default access levels per category. This collection can contain a maximum of 500 elements.
     *  @param array<WindowsPrivacyDataAccessControlItem>|null $value Value to set for the privacyAccessControls property.
    */
    public function setPrivacyAccessControls(?array $value ): void {
        $this->privacyAccessControls = $value;
    }

    /**
     * Sets the privacyAdvertisingId property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the privacyAdvertisingId property.
    */
    public function setPrivacyAdvertisingId(?StateManagementSetting $value ): void {
        $this->privacyAdvertisingId = $value;
    }

    /**
     * Sets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     *  @param bool|null $value Value to set for the privacyAutoAcceptPairingAndConsentPrompts property.
    */
    public function setPrivacyAutoAcceptPairingAndConsentPrompts(?bool $value ): void {
        $this->privacyAutoAcceptPairingAndConsentPrompts = $value;
    }

    /**
     * Sets the privacyBlockActivityFeed property value. Blocks the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     *  @param bool|null $value Value to set for the privacyBlockActivityFeed property.
    */
    public function setPrivacyBlockActivityFeed(?bool $value ): void {
        $this->privacyBlockActivityFeed = $value;
    }

    /**
     * Sets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     *  @param bool|null $value Value to set for the privacyBlockInputPersonalization property.
    */
    public function setPrivacyBlockInputPersonalization(?bool $value ): void {
        $this->privacyBlockInputPersonalization = $value;
    }

    /**
     * Sets the privacyBlockPublishUserActivities property value. Blocks the shared experiences/discovery of recently used resources in task switcher etc.
     *  @param bool|null $value Value to set for the privacyBlockPublishUserActivities property.
    */
    public function setPrivacyBlockPublishUserActivities(?bool $value ): void {
        $this->privacyBlockPublishUserActivities = $value;
    }

    /**
     * Sets the privacyDisableLaunchExperience property value. This policy prevents the privacy experience from launching during user logon for new and upgraded users.​
     *  @param bool|null $value Value to set for the privacyDisableLaunchExperience property.
    */
    public function setPrivacyDisableLaunchExperience(?bool $value ): void {
        $this->privacyDisableLaunchExperience = $value;
    }

    /**
     * Sets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     *  @param bool|null $value Value to set for the resetProtectionModeBlocked property.
    */
    public function setResetProtectionModeBlocked(?bool $value ): void {
        $this->resetProtectionModeBlocked = $value;
    }

    /**
     * Sets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     *  @param SafeSearchFilterType|null $value Value to set for the safeSearchFilter property.
    */
    public function setSafeSearchFilter(?SafeSearchFilterType $value ): void {
        $this->safeSearchFilter = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     *  @param bool|null $value Value to set for the searchBlockDiacritics property.
    */
    public function setSearchBlockDiacritics(?bool $value ): void {
        $this->searchBlockDiacritics = $value;
    }

    /**
     * Sets the searchBlockWebResults property value. Indicates whether or not to block the web search.
     *  @param bool|null $value Value to set for the searchBlockWebResults property.
    */
    public function setSearchBlockWebResults(?bool $value ): void {
        $this->searchBlockWebResults = $value;
    }

    /**
     * Sets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     *  @param bool|null $value Value to set for the searchDisableAutoLanguageDetection property.
    */
    public function setSearchDisableAutoLanguageDetection(?bool $value ): void {
        $this->searchDisableAutoLanguageDetection = $value;
    }

    /**
     * Sets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     *  @param bool|null $value Value to set for the searchDisableIndexerBackoff property.
    */
    public function setSearchDisableIndexerBackoff(?bool $value ): void {
        $this->searchDisableIndexerBackoff = $value;
    }

    /**
     * Sets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     *  @param bool|null $value Value to set for the searchDisableIndexingEncryptedItems property.
    */
    public function setSearchDisableIndexingEncryptedItems(?bool $value ): void {
        $this->searchDisableIndexingEncryptedItems = $value;
    }

    /**
     * Sets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     *  @param bool|null $value Value to set for the searchDisableIndexingRemovableDrive property.
    */
    public function setSearchDisableIndexingRemovableDrive(?bool $value ): void {
        $this->searchDisableIndexingRemovableDrive = $value;
    }

    /**
     * Sets the searchDisableLocation property value. Specifies if search can use location information.
     *  @param bool|null $value Value to set for the searchDisableLocation property.
    */
    public function setSearchDisableLocation(?bool $value ): void {
        $this->searchDisableLocation = $value;
    }

    /**
     * Sets the searchDisableUseLocation property value. Specifies if search can use location information.
     *  @param bool|null $value Value to set for the searchDisableUseLocation property.
    */
    public function setSearchDisableUseLocation(?bool $value ): void {
        $this->searchDisableUseLocation = $value;
    }

    /**
     * Sets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     *  @param bool|null $value Value to set for the searchEnableAutomaticIndexSizeManangement property.
    */
    public function setSearchEnableAutomaticIndexSizeManangement(?bool $value ): void {
        $this->searchEnableAutomaticIndexSizeManangement = $value;
    }

    /**
     * Sets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     *  @param bool|null $value Value to set for the searchEnableRemoteQueries property.
    */
    public function setSearchEnableRemoteQueries(?bool $value ): void {
        $this->searchEnableRemoteQueries = $value;
    }

    /**
     * Sets the securityBlockAzureADJoinedDevicesAutoEncryption property value. Specify whether to allow automatic device encryption during OOBE when the device is Azure AD joined (desktop only).
     *  @param bool|null $value Value to set for the securityBlockAzureADJoinedDevicesAutoEncryption property.
    */
    public function setSecurityBlockAzureADJoinedDevicesAutoEncryption(?bool $value ): void {
        $this->securityBlockAzureADJoinedDevicesAutoEncryption = $value;
    }

    /**
     * Sets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAccountsPage property.
    */
    public function setSettingsBlockAccountsPage(?bool $value ): void {
        $this->settingsBlockAccountsPage = $value;
    }

    /**
     * Sets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockAddProvisioningPackage property.
    */
    public function setSettingsBlockAddProvisioningPackage(?bool $value ): void {
        $this->settingsBlockAddProvisioningPackage = $value;
    }

    /**
     * Sets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAppsPage property.
    */
    public function setSettingsBlockAppsPage(?bool $value ): void {
        $this->settingsBlockAppsPage = $value;
    }

    /**
     * Sets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeLanguage property.
    */
    public function setSettingsBlockChangeLanguage(?bool $value ): void {
        $this->settingsBlockChangeLanguage = $value;
    }

    /**
     * Sets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     *  @param bool|null $value Value to set for the settingsBlockChangePowerSleep property.
    */
    public function setSettingsBlockChangePowerSleep(?bool $value ): void {
        $this->settingsBlockChangePowerSleep = $value;
    }

    /**
     * Sets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeRegion property.
    */
    public function setSettingsBlockChangeRegion(?bool $value ): void {
        $this->settingsBlockChangeRegion = $value;
    }

    /**
     * Sets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeSystemTime property.
    */
    public function setSettingsBlockChangeSystemTime(?bool $value ): void {
        $this->settingsBlockChangeSystemTime = $value;
    }

    /**
     * Sets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockDevicesPage property.
    */
    public function setSettingsBlockDevicesPage(?bool $value ): void {
        $this->settingsBlockDevicesPage = $value;
    }

    /**
     * Sets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockEaseOfAccessPage property.
    */
    public function setSettingsBlockEaseOfAccessPage(?bool $value ): void {
        $this->settingsBlockEaseOfAccessPage = $value;
    }

    /**
     * Sets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     *  @param bool|null $value Value to set for the settingsBlockEditDeviceName property.
    */
    public function setSettingsBlockEditDeviceName(?bool $value ): void {
        $this->settingsBlockEditDeviceName = $value;
    }

    /**
     * Sets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockGamingPage property.
    */
    public function setSettingsBlockGamingPage(?bool $value ): void {
        $this->settingsBlockGamingPage = $value;
    }

    /**
     * Sets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockNetworkInternetPage property.
    */
    public function setSettingsBlockNetworkInternetPage(?bool $value ): void {
        $this->settingsBlockNetworkInternetPage = $value;
    }

    /**
     * Sets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPersonalizationPage property.
    */
    public function setSettingsBlockPersonalizationPage(?bool $value ): void {
        $this->settingsBlockPersonalizationPage = $value;
    }

    /**
     * Sets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPrivacyPage property.
    */
    public function setSettingsBlockPrivacyPage(?bool $value ): void {
        $this->settingsBlockPrivacyPage = $value;
    }

    /**
     * Sets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockRemoveProvisioningPackage property.
    */
    public function setSettingsBlockRemoveProvisioningPackage(?bool $value ): void {
        $this->settingsBlockRemoveProvisioningPackage = $value;
    }

    /**
     * Sets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSettingsApp property.
    */
    public function setSettingsBlockSettingsApp(?bool $value ): void {
        $this->settingsBlockSettingsApp = $value;
    }

    /**
     * Sets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSystemPage property.
    */
    public function setSettingsBlockSystemPage(?bool $value ): void {
        $this->settingsBlockSystemPage = $value;
    }

    /**
     * Sets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockTimeLanguagePage property.
    */
    public function setSettingsBlockTimeLanguagePage(?bool $value ): void {
        $this->settingsBlockTimeLanguagePage = $value;
    }

    /**
     * Sets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockUpdateSecurityPage property.
    */
    public function setSettingsBlockUpdateSecurityPage(?bool $value ): void {
        $this->settingsBlockUpdateSecurityPage = $value;
    }

    /**
     * Sets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     *  @param bool|null $value Value to set for the sharedUserAppDataAllowed property.
    */
    public function setSharedUserAppDataAllowed(?bool $value ): void {
        $this->sharedUserAppDataAllowed = $value;
    }

    /**
     * Sets the smartScreenAppInstallControl property value. App Install control Setting
     *  @param AppInstallControlType|null $value Value to set for the smartScreenAppInstallControl property.
    */
    public function setSmartScreenAppInstallControl(?AppInstallControlType $value ): void {
        $this->smartScreenAppInstallControl = $value;
    }

    /**
     * Sets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverride property.
    */
    public function setSmartScreenBlockPromptOverride(?bool $value ): void {
        $this->smartScreenBlockPromptOverride = $value;
    }

    /**
     * Sets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverrideForFiles property.
    */
    public function setSmartScreenBlockPromptOverrideForFiles(?bool $value ): void {
        $this->smartScreenBlockPromptOverrideForFiles = $value;
    }

    /**
     * Sets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     *  @param bool|null $value Value to set for the smartScreenEnableAppInstallControl property.
    */
    public function setSmartScreenEnableAppInstallControl(?bool $value ): void {
        $this->smartScreenEnableAppInstallControl = $value;
    }

    /**
     * Sets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     *  @param bool|null $value Value to set for the startBlockUnpinningAppsFromTaskbar property.
    */
    public function setStartBlockUnpinningAppsFromTaskbar(?bool $value ): void {
        $this->startBlockUnpinningAppsFromTaskbar = $value;
    }

    /**
     * Sets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     *  @param WindowsStartMenuAppListVisibilityType|null $value Value to set for the startMenuAppListVisibility property.
    */
    public function setStartMenuAppListVisibility(?WindowsStartMenuAppListVisibilityType $value ): void {
        $this->startMenuAppListVisibility = $value;
    }

    /**
     * Sets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideChangeAccountSettings property.
    */
    public function setStartMenuHideChangeAccountSettings(?bool $value ): void {
        $this->startMenuHideChangeAccountSettings = $value;
    }

    /**
     * Sets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideFrequentlyUsedApps property.
    */
    public function setStartMenuHideFrequentlyUsedApps(?bool $value ): void {
        $this->startMenuHideFrequentlyUsedApps = $value;
    }

    /**
     * Sets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideHibernate property.
    */
    public function setStartMenuHideHibernate(?bool $value ): void {
        $this->startMenuHideHibernate = $value;
    }

    /**
     * Sets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideLock property.
    */
    public function setStartMenuHideLock(?bool $value ): void {
        $this->startMenuHideLock = $value;
    }

    /**
     * Sets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHidePowerButton property.
    */
    public function setStartMenuHidePowerButton(?bool $value ): void {
        $this->startMenuHidePowerButton = $value;
    }

    /**
     * Sets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentJumpLists property.
    */
    public function setStartMenuHideRecentJumpLists(?bool $value ): void {
        $this->startMenuHideRecentJumpLists = $value;
    }

    /**
     * Sets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentlyAddedApps property.
    */
    public function setStartMenuHideRecentlyAddedApps(?bool $value ): void {
        $this->startMenuHideRecentlyAddedApps = $value;
    }

    /**
     * Sets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideRestartOptions property.
    */
    public function setStartMenuHideRestartOptions(?bool $value ): void {
        $this->startMenuHideRestartOptions = $value;
    }

    /**
     * Sets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideShutDown property.
    */
    public function setStartMenuHideShutDown(?bool $value ): void {
        $this->startMenuHideShutDown = $value;
    }

    /**
     * Sets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSignOut property.
    */
    public function setStartMenuHideSignOut(?bool $value ): void {
        $this->startMenuHideSignOut = $value;
    }

    /**
     * Sets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSleep property.
    */
    public function setStartMenuHideSleep(?bool $value ): void {
        $this->startMenuHideSleep = $value;
    }

    /**
     * Sets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSwitchAccount property.
    */
    public function setStartMenuHideSwitchAccount(?bool $value ): void {
        $this->startMenuHideSwitchAccount = $value;
    }

    /**
     * Sets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideUserTile property.
    */
    public function setStartMenuHideUserTile(?bool $value ): void {
        $this->startMenuHideUserTile = $value;
    }

    /**
     * Sets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutEdgeAssetsXml property.
    */
    public function setStartMenuLayoutEdgeAssetsXml(?StreamInterface $value ): void {
        $this->startMenuLayoutEdgeAssetsXml = $value;
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value ): void {
        $this->startMenuLayoutXml = $value;
    }

    /**
     * Sets the startMenuMode property value. Type of display modes for the start menu.
     *  @param WindowsStartMenuModeType|null $value Value to set for the startMenuMode property.
    */
    public function setStartMenuMode(?WindowsStartMenuModeType $value ): void {
        $this->startMenuMode = $value;
    }

    /**
     * Sets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDocuments property.
    */
    public function setStartMenuPinnedFolderDocuments(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderDocuments = $value;
    }

    /**
     * Sets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDownloads property.
    */
    public function setStartMenuPinnedFolderDownloads(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderDownloads = $value;
    }

    /**
     * Sets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderFileExplorer property.
    */
    public function setStartMenuPinnedFolderFileExplorer(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderFileExplorer = $value;
    }

    /**
     * Sets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderHomeGroup property.
    */
    public function setStartMenuPinnedFolderHomeGroup(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderHomeGroup = $value;
    }

    /**
     * Sets the startMenuPinnedFolderMusic property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderMusic property.
    */
    public function setStartMenuPinnedFolderMusic(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderMusic = $value;
    }

    /**
     * Sets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderNetwork property.
    */
    public function setStartMenuPinnedFolderNetwork(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderNetwork = $value;
    }

    /**
     * Sets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPersonalFolder property.
    */
    public function setStartMenuPinnedFolderPersonalFolder(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderPersonalFolder = $value;
    }

    /**
     * Sets the startMenuPinnedFolderPictures property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPictures property.
    */
    public function setStartMenuPinnedFolderPictures(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderPictures = $value;
    }

    /**
     * Sets the startMenuPinnedFolderSettings property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderSettings property.
    */
    public function setStartMenuPinnedFolderSettings(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderSettings = $value;
    }

    /**
     * Sets the startMenuPinnedFolderVideos property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderVideos property.
    */
    public function setStartMenuPinnedFolderVideos(?VisibilitySetting $value ): void {
        $this->startMenuPinnedFolderVideos = $value;
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     *  @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value ): void {
        $this->storageBlockRemovableStorage = $value;
    }

    /**
     * Sets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     *  @param bool|null $value Value to set for the storageRequireMobileDeviceEncryption property.
    */
    public function setStorageRequireMobileDeviceEncryption(?bool $value ): void {
        $this->storageRequireMobileDeviceEncryption = $value;
    }

    /**
     * Sets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppDataToSystemVolume property.
    */
    public function setStorageRestrictAppDataToSystemVolume(?bool $value ): void {
        $this->storageRestrictAppDataToSystemVolume = $value;
    }

    /**
     * Sets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppInstallToSystemVolume property.
    */
    public function setStorageRestrictAppInstallToSystemVolume(?bool $value ): void {
        $this->storageRestrictAppInstallToSystemVolume = $value;
    }

    /**
     * Sets the systemTelemetryProxyServer property value. Gets or sets the fully qualified domain name (FQDN) or IP address of a proxy server to forward Connected User Experiences and Telemetry requests.
     *  @param string|null $value Value to set for the systemTelemetryProxyServer property.
    */
    public function setSystemTelemetryProxyServer(?string $value ): void {
        $this->systemTelemetryProxyServer = $value;
    }

    /**
     * Sets the taskManagerBlockEndTask property value. Specify whether non-administrators can use Task Manager to end tasks.
     *  @param bool|null $value Value to set for the taskManagerBlockEndTask property.
    */
    public function setTaskManagerBlockEndTask(?bool $value ): void {
        $this->taskManagerBlockEndTask = $value;
    }

    /**
     * Sets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     *  @param bool|null $value Value to set for the tenantLockdownRequireNetworkDuringOutOfBoxExperience property.
    */
    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience(?bool $value ): void {
        $this->tenantLockdownRequireNetworkDuringOutOfBoxExperience = $value;
    }

    /**
     * Sets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     *  @param bool|null $value Value to set for the uninstallBuiltInApps property.
    */
    public function setUninstallBuiltInApps(?bool $value ): void {
        $this->uninstallBuiltInApps = $value;
    }

    /**
     * Sets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     *  @param bool|null $value Value to set for the usbBlocked property.
    */
    public function setUsbBlocked(?bool $value ): void {
        $this->usbBlocked = $value;
    }

    /**
     * Sets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     *  @param bool|null $value Value to set for the voiceRecordingBlocked property.
    */
    public function setVoiceRecordingBlocked(?bool $value ): void {
        $this->voiceRecordingBlocked = $value;
    }

    /**
     * Sets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     *  @param bool|null $value Value to set for the webRtcBlockLocalhostIpAddress property.
    */
    public function setWebRtcBlockLocalhostIpAddress(?bool $value ): void {
        $this->webRtcBlockLocalhostIpAddress = $value;
    }

    /**
     * Sets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the wiFiBlockAutomaticConnectHotspots property.
    */
    public function setWiFiBlockAutomaticConnectHotspots(?bool $value ): void {
        $this->wiFiBlockAutomaticConnectHotspots = $value;
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     *  @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value ): void {
        $this->wiFiBlocked = $value;
    }

    /**
     * Sets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     *  @param bool|null $value Value to set for the wiFiBlockManualConfiguration property.
    */
    public function setWiFiBlockManualConfiguration(?bool $value ): void {
        $this->wiFiBlockManualConfiguration = $value;
    }

    /**
     * Sets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     *  @param int|null $value Value to set for the wiFiScanInterval property.
    */
    public function setWiFiScanInterval(?int $value ): void {
        $this->wiFiScanInterval = $value;
    }

    /**
     * Sets the windows10AppsForceUpdateSchedule property value. Windows 10 force update schedule for Apps.
     *  @param Windows10AppsForceUpdateSchedule|null $value Value to set for the windows10AppsForceUpdateSchedule property.
    */
    public function setWindows10AppsForceUpdateSchedule(?Windows10AppsForceUpdateSchedule $value ): void {
        $this->windows10AppsForceUpdateSchedule = $value;
    }

    /**
     * Sets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockConsumerSpecificFeatures property.
    */
    public function setWindowsSpotlightBlockConsumerSpecificFeatures(?bool $value ): void {
        $this->windowsSpotlightBlockConsumerSpecificFeatures = $value;
    }

    /**
     * Sets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     *  @param bool|null $value Value to set for the windowsSpotlightBlocked property.
    */
    public function setWindowsSpotlightBlocked(?bool $value ): void {
        $this->windowsSpotlightBlocked = $value;
    }

    /**
     * Sets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     *  @param bool|null $value Value to set for the windowsSpotlightBlockOnActionCenter property.
    */
    public function setWindowsSpotlightBlockOnActionCenter(?bool $value ): void {
        $this->windowsSpotlightBlockOnActionCenter = $value;
    }

    /**
     * Sets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockTailoredExperiences property.
    */
    public function setWindowsSpotlightBlockTailoredExperiences(?bool $value ): void {
        $this->windowsSpotlightBlockTailoredExperiences = $value;
    }

    /**
     * Sets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     *  @param bool|null $value Value to set for the windowsSpotlightBlockThirdPartyNotifications property.
    */
    public function setWindowsSpotlightBlockThirdPartyNotifications(?bool $value ): void {
        $this->windowsSpotlightBlockThirdPartyNotifications = $value;
    }

    /**
     * Sets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWelcomeExperience property.
    */
    public function setWindowsSpotlightBlockWelcomeExperience(?bool $value ): void {
        $this->windowsSpotlightBlockWelcomeExperience = $value;
    }

    /**
     * Sets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWindowsTips property.
    */
    public function setWindowsSpotlightBlockWindowsTips(?bool $value ): void {
        $this->windowsSpotlightBlockWindowsTips = $value;
    }

    /**
     * Sets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     *  @param WindowsSpotlightEnablementSettings|null $value Value to set for the windowsSpotlightConfigureOnLockScreen property.
    */
    public function setWindowsSpotlightConfigureOnLockScreen(?WindowsSpotlightEnablementSettings $value ): void {
        $this->windowsSpotlightConfigureOnLockScreen = $value;
    }

    /**
     * Sets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     *  @param bool|null $value Value to set for the windowsStoreBlockAutoUpdate property.
    */
    public function setWindowsStoreBlockAutoUpdate(?bool $value ): void {
        $this->windowsStoreBlockAutoUpdate = $value;
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     *  @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value ): void {
        $this->windowsStoreBlocked = $value;
    }

    /**
     * Sets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     *  @param bool|null $value Value to set for the windowsStoreEnablePrivateStoreOnly property.
    */
    public function setWindowsStoreEnablePrivateStoreOnly(?bool $value ): void {
        $this->windowsStoreEnablePrivateStoreOnly = $value;
    }

    /**
     * Sets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockProjectionToThisDevice property.
    */
    public function setWirelessDisplayBlockProjectionToThisDevice(?bool $value ): void {
        $this->wirelessDisplayBlockProjectionToThisDevice = $value;
    }

    /**
     * Sets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockUserInputFromReceiver property.
    */
    public function setWirelessDisplayBlockUserInputFromReceiver(?bool $value ): void {
        $this->wirelessDisplayBlockUserInputFromReceiver = $value;
    }

    /**
     * Sets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     *  @param bool|null $value Value to set for the wirelessDisplayRequirePinForPairing property.
    */
    public function setWirelessDisplayRequirePinForPairing(?bool $value ): void {
        $this->wirelessDisplayRequirePinForPairing = $value;
    }

}
