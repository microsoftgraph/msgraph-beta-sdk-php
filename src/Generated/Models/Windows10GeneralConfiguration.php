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
        return $this->getBackingStore()->get('accountsBlockAddingNonMicrosoftAccountEmail');
    }

    /**
     * Gets the activateAppsWithVoice property value. Possible values of a property
     * @return Enablement|null
    */
    public function getActivateAppsWithVoice(): ?Enablement {
        return $this->getBackingStore()->get('activateAppsWithVoice');
    }

    /**
     * Gets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     * @return bool|null
    */
    public function getAntiTheftModeBlocked(): ?bool {
        return $this->getBackingStore()->get('antiTheftModeBlocked');
    }

    /**
     * Gets the appManagementMSIAllowUserControlOverInstall property value. This policy setting permits users to change installation options that typically are available only to system administrators.
     * @return bool|null
    */
    public function getAppManagementMSIAllowUserControlOverInstall(): ?bool {
        return $this->getBackingStore()->get('appManagementMSIAllowUserControlOverInstall');
    }

    /**
     * Gets the appManagementMSIAlwaysInstallWithElevatedPrivileges property value. This policy setting directs Windows Installer to use elevated permissions when it installs any program on the system.
     * @return bool|null
    */
    public function getAppManagementMSIAlwaysInstallWithElevatedPrivileges(): ?bool {
        return $this->getBackingStore()->get('appManagementMSIAlwaysInstallWithElevatedPrivileges');
    }

    /**
     * Gets the appManagementPackageFamilyNamesToLaunchAfterLogOn property value. List of semi-colon delimited Package Family Names of Windows apps. Listed Windows apps are to be launched after logon.​
     * @return array<string>|null
    */
    public function getAppManagementPackageFamilyNamesToLaunchAfterLogOn(): ?array {
        return $this->getBackingStore()->get('appManagementPackageFamilyNamesToLaunchAfterLogOn');
    }

    /**
     * Gets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getAppsAllowTrustedAppsSideloading(): ?StateManagementSetting {
        return $this->getBackingStore()->get('appsAllowTrustedAppsSideloading');
    }

    /**
     * Gets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     * @return bool|null
    */
    public function getAppsBlockWindowsStoreOriginatedApps(): ?bool {
        return $this->getBackingStore()->get('appsBlockWindowsStoreOriginatedApps');
    }

    /**
     * Gets the authenticationAllowSecondaryDevice property value. Allows secondary authentication devices to work with Windows.
     * @return bool|null
    */
    public function getAuthenticationAllowSecondaryDevice(): ?bool {
        return $this->getBackingStore()->get('authenticationAllowSecondaryDevice');
    }

    /**
     * Gets the authenticationPreferredAzureADTenantDomainName property value. Specifies the preferred domain among available domains in the Azure AD tenant.
     * @return string|null
    */
    public function getAuthenticationPreferredAzureADTenantDomainName(): ?string {
        return $this->getBackingStore()->get('authenticationPreferredAzureADTenantDomainName');
    }

    /**
     * Gets the authenticationWebSignIn property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAuthenticationWebSignIn(): ?Enablement {
        return $this->getBackingStore()->get('authenticationWebSignIn');
    }

    /**
     * Gets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     * @return array<string>|null
    */
    public function getBluetoothAllowedServices(): ?array {
        return $this->getBackingStore()->get('bluetoothAllowedServices');
    }

    /**
     * Gets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     * @return bool|null
    */
    public function getBluetoothBlockAdvertising(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockAdvertising');
    }

    /**
     * Gets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     * @return bool|null
    */
    public function getBluetoothBlockDiscoverableMode(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockDiscoverableMode');
    }

    /**
     * Gets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlocked');
    }

    /**
     * Gets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     * @return bool|null
    */
    public function getBluetoothBlockPrePairing(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockPrePairing');
    }

    /**
     * Gets the bluetoothBlockPromptedProximalConnections property value. Whether or not to block the users from using Swift Pair and other proximity based scenarios.
     * @return bool|null
    */
    public function getBluetoothBlockPromptedProximalConnections(): ?bool {
        return $this->getBackingStore()->get('bluetoothBlockPromptedProximalConnections');
    }

    /**
     * Gets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->getBackingStore()->get('cameraBlocked');
    }

    /**
     * Gets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     * @return bool|null
    */
    public function getCellularBlockDataWhenRoaming(): ?bool {
        return $this->getBackingStore()->get('cellularBlockDataWhenRoaming');
    }

    /**
     * Gets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpn(): ?bool {
        return $this->getBackingStore()->get('cellularBlockVpn');
    }

    /**
     * Gets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     * @return bool|null
    */
    public function getCellularBlockVpnWhenRoaming(): ?bool {
        return $this->getBackingStore()->get('cellularBlockVpnWhenRoaming');
    }

    /**
     * Gets the cellularData property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getCellularData(): ?ConfigurationUsage {
        return $this->getBackingStore()->get('cellularData');
    }

    /**
     * Gets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     * @return bool|null
    */
    public function getCertificatesBlockManualRootCertificateInstallation(): ?bool {
        return $this->getBackingStore()->get('certificatesBlockManualRootCertificateInstallation');
    }

    /**
     * Gets the configureTimeZone property value. Specifies the time zone to be applied to the device. This is the standard Windows name for the target time zone.
     * @return string|null
    */
    public function getConfigureTimeZone(): ?string {
        return $this->getBackingStore()->get('configureTimeZone');
    }

    /**
     * Gets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     * @return bool|null
    */
    public function getConnectedDevicesServiceBlocked(): ?bool {
        return $this->getBackingStore()->get('connectedDevicesServiceBlocked');
    }

    /**
     * Gets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     * @return bool|null
    */
    public function getCopyPasteBlocked(): ?bool {
        return $this->getBackingStore()->get('copyPasteBlocked');
    }

    /**
     * Gets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     * @return bool|null
    */
    public function getCortanaBlocked(): ?bool {
        return $this->getBackingStore()->get('cortanaBlocked');
    }

    /**
     * Gets the cryptographyAllowFipsAlgorithmPolicy property value. Specify whether to allow or disallow the Federal Information Processing Standard (FIPS) policy.
     * @return bool|null
    */
    public function getCryptographyAllowFipsAlgorithmPolicy(): ?bool {
        return $this->getBackingStore()->get('cryptographyAllowFipsAlgorithmPolicy');
    }

    /**
     * Gets the dataProtectionBlockDirectMemoryAccess property value. This policy setting allows you to block direct memory access (DMA) for all hot pluggable PCI downstream ports until a user logs into Windows.
     * @return bool|null
    */
    public function getDataProtectionBlockDirectMemoryAccess(): ?bool {
        return $this->getBackingStore()->get('dataProtectionBlockDirectMemoryAccess');
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        return $this->getBackingStore()->get('defenderBlockEndUserAccess');
    }

    /**
     * Gets the defenderBlockOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderBlockOnAccessProtection(): ?bool {
        return $this->getBackingStore()->get('defenderBlockOnAccessProtection');
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        return $this->getBackingStore()->get('defenderCloudBlockLevel');
    }

    /**
     * Gets the defenderCloudExtendedTimeout property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeout(): ?int {
        return $this->getBackingStore()->get('defenderCloudExtendedTimeout');
    }

    /**
     * Gets the defenderCloudExtendedTimeoutInSeconds property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeoutInSeconds(): ?int {
        return $this->getBackingStore()->get('defenderCloudExtendedTimeoutInSeconds');
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        return $this->getBackingStore()->get('defenderDaysBeforeDeletingQuarantinedMalware');
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        return $this->getBackingStore()->get('defenderDetectedMalwareActions');
    }

    /**
     * Gets the defenderDisableCatchupFullScan property value. When blocked, catch-up scans for scheduled full scans will be turned off.
     * @return bool|null
    */
    public function getDefenderDisableCatchupFullScan(): ?bool {
        return $this->getBackingStore()->get('defenderDisableCatchupFullScan');
    }

    /**
     * Gets the defenderDisableCatchupQuickScan property value. When blocked, catch-up scans for scheduled quick scans will be turned off.
     * @return bool|null
    */
    public function getDefenderDisableCatchupQuickScan(): ?bool {
        return $this->getBackingStore()->get('defenderDisableCatchupQuickScan');
    }

    /**
     * Gets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFileExtensionsToExclude(): ?array {
        return $this->getBackingStore()->get('defenderFileExtensionsToExclude');
    }

    /**
     * Gets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFilesAndFoldersToExclude(): ?array {
        return $this->getBackingStore()->get('defenderFilesAndFoldersToExclude');
    }

    /**
     * Gets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     * @return DefenderMonitorFileActivity|null
    */
    public function getDefenderMonitorFileActivity(): ?DefenderMonitorFileActivity {
        return $this->getBackingStore()->get('defenderMonitorFileActivity');
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppAction property value. Gets or sets Defender’s action to take on Potentially Unwanted Application (PUA), which includes software with behaviors of ad-injection, software bundling, persistent solicitation for payment or subscription, etc. Defender alerts user when PUA is being downloaded or attempts to install itself. Added in Windows 10 for desktop. Possible values are: deviceDefault, block, audit.
     * @return DefenderPotentiallyUnwantedAppAction|null
    */
    public function getDefenderPotentiallyUnwantedAppAction(): ?DefenderPotentiallyUnwantedAppAction {
        return $this->getBackingStore()->get('defenderPotentiallyUnwantedAppAction');
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppActionSetting property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderPotentiallyUnwantedAppActionSetting(): ?DefenderProtectionType {
        return $this->getBackingStore()->get('defenderPotentiallyUnwantedAppActionSetting');
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        return $this->getBackingStore()->get('defenderProcessesToExclude');
    }

    /**
     * Gets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     * @return DefenderPromptForSampleSubmission|null
    */
    public function getDefenderPromptForSampleSubmission(): ?DefenderPromptForSampleSubmission {
        return $this->getBackingStore()->get('defenderPromptForSampleSubmission');
    }

    /**
     * Gets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     * @return bool|null
    */
    public function getDefenderRequireBehaviorMonitoring(): ?bool {
        return $this->getBackingStore()->get('defenderRequireBehaviorMonitoring');
    }

    /**
     * Gets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     * @return bool|null
    */
    public function getDefenderRequireCloudProtection(): ?bool {
        return $this->getBackingStore()->get('defenderRequireCloudProtection');
    }

    /**
     * Gets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     * @return bool|null
    */
    public function getDefenderRequireNetworkInspectionSystem(): ?bool {
        return $this->getBackingStore()->get('defenderRequireNetworkInspectionSystem');
    }

    /**
     * Gets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     * @return bool|null
    */
    public function getDefenderRequireRealTimeMonitoring(): ?bool {
        return $this->getBackingStore()->get('defenderRequireRealTimeMonitoring');
    }

    /**
     * Gets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     * @return bool|null
    */
    public function getDefenderScanArchiveFiles(): ?bool {
        return $this->getBackingStore()->get('defenderScanArchiveFiles');
    }

    /**
     * Gets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     * @return bool|null
    */
    public function getDefenderScanDownloads(): ?bool {
        return $this->getBackingStore()->get('defenderScanDownloads');
    }

    /**
     * Gets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     * @return bool|null
    */
    public function getDefenderScanIncomingMail(): ?bool {
        return $this->getBackingStore()->get('defenderScanIncomingMail');
    }

    /**
     * Gets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanMappedNetworkDrivesDuringFullScan(): ?bool {
        return $this->getBackingStore()->get('defenderScanMappedNetworkDrivesDuringFullScan');
    }

    /**
     * Gets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpu(): ?int {
        return $this->getBackingStore()->get('defenderScanMaxCpu');
    }

    /**
     * Gets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     * @return bool|null
    */
    public function getDefenderScanNetworkFiles(): ?bool {
        return $this->getBackingStore()->get('defenderScanNetworkFiles');
    }

    /**
     * Gets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     * @return bool|null
    */
    public function getDefenderScanRemovableDrivesDuringFullScan(): ?bool {
        return $this->getBackingStore()->get('defenderScanRemovableDrivesDuringFullScan');
    }

    /**
     * Gets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     * @return bool|null
    */
    public function getDefenderScanScriptsLoadedInInternetExplorer(): ?bool {
        return $this->getBackingStore()->get('defenderScanScriptsLoadedInInternetExplorer');
    }

    /**
     * Gets the defenderScanType property value. Possible values for system scan type.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        return $this->getBackingStore()->get('defenderScanType');
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        return $this->getBackingStore()->get('defenderScheduledQuickScanTime');
    }

    /**
     * Gets the defenderScheduledScanTime property value. The defender time for the system scan.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        return $this->getBackingStore()->get('defenderScheduledScanTime');
    }

    /**
     * Gets the defenderScheduleScanEnableLowCpuPriority property value. When enabled, low CPU priority will be used during scheduled scans.
     * @return bool|null
    */
    public function getDefenderScheduleScanEnableLowCpuPriority(): ?bool {
        return $this->getBackingStore()->get('defenderScheduleScanEnableLowCpuPriority');
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     * @return int|null
    */
    public function getDefenderSignatureUpdateIntervalInHours(): ?int {
        return $this->getBackingStore()->get('defenderSignatureUpdateIntervalInHours');
    }

    /**
     * Gets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     * @return DefenderSubmitSamplesConsentType|null
    */
    public function getDefenderSubmitSamplesConsentType(): ?DefenderSubmitSamplesConsentType {
        return $this->getBackingStore()->get('defenderSubmitSamplesConsentType');
    }

    /**
     * Gets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     * @return WeeklySchedule|null
    */
    public function getDefenderSystemScanSchedule(): ?WeeklySchedule {
        return $this->getBackingStore()->get('defenderSystemScanSchedule');
    }

    /**
     * Gets the developerUnlockSetting property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getDeveloperUnlockSetting(): ?StateManagementSetting {
        return $this->getBackingStore()->get('developerUnlockSetting');
    }

    /**
     * Gets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     * @return bool|null
    */
    public function getDeviceManagementBlockFactoryResetOnMobile(): ?bool {
        return $this->getBackingStore()->get('deviceManagementBlockFactoryResetOnMobile');
    }

    /**
     * Gets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     * @return bool|null
    */
    public function getDeviceManagementBlockManualUnenroll(): ?bool {
        return $this->getBackingStore()->get('deviceManagementBlockManualUnenroll');
    }

    /**
     * Gets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     * @return DiagnosticDataSubmissionMode|null
    */
    public function getDiagnosticsDataSubmissionMode(): ?DiagnosticDataSubmissionMode {
        return $this->getBackingStore()->get('diagnosticsDataSubmissionMode');
    }

    /**
     * Gets the displayAppListWithGdiDPIScalingTurnedOff property value. List of legacy applications that have GDI DPI Scaling turned off.
     * @return array<string>|null
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOff(): ?array {
        return $this->getBackingStore()->get('displayAppListWithGdiDPIScalingTurnedOff');
    }

    /**
     * Gets the displayAppListWithGdiDPIScalingTurnedOn property value. List of legacy applications that have GDI DPI Scaling turned on.
     * @return array<string>|null
    */
    public function getDisplayAppListWithGdiDPIScalingTurnedOn(): ?array {
        return $this->getBackingStore()->get('displayAppListWithGdiDPIScalingTurnedOn');
    }

    /**
     * Gets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     * @return bool|null
    */
    public function getEdgeAllowStartPagesModification(): ?bool {
        return $this->getBackingStore()->get('edgeAllowStartPagesModification');
    }

    /**
     * Gets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockAccessToAboutFlags(): ?bool {
        return $this->getBackingStore()->get('edgeBlockAccessToAboutFlags');
    }

    /**
     * Gets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     * @return bool|null
    */
    public function getEdgeBlockAddressBarDropdown(): ?bool {
        return $this->getBackingStore()->get('edgeBlockAddressBarDropdown');
    }

    /**
     * Gets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     * @return bool|null
    */
    public function getEdgeBlockAutofill(): ?bool {
        return $this->getBackingStore()->get('edgeBlockAutofill');
    }

    /**
     * Gets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     * @return bool|null
    */
    public function getEdgeBlockCompatibilityList(): ?bool {
        return $this->getBackingStore()->get('edgeBlockCompatibilityList');
    }

    /**
     * Gets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockDeveloperTools(): ?bool {
        return $this->getBackingStore()->get('edgeBlockDeveloperTools');
    }

    /**
     * Gets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlocked(): ?bool {
        return $this->getBackingStore()->get('edgeBlocked');
    }

    /**
     * Gets the edgeBlockEditFavorites property value. Indicates whether or not to Block the user from making changes to Favorites.
     * @return bool|null
    */
    public function getEdgeBlockEditFavorites(): ?bool {
        return $this->getBackingStore()->get('edgeBlockEditFavorites');
    }

    /**
     * Gets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockExtensions(): ?bool {
        return $this->getBackingStore()->get('edgeBlockExtensions');
    }

    /**
     * Gets the edgeBlockFullScreenMode property value. Allow or prevent Edge from entering the full screen mode.
     * @return bool|null
    */
    public function getEdgeBlockFullScreenMode(): ?bool {
        return $this->getBackingStore()->get('edgeBlockFullScreenMode');
    }

    /**
     * Gets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     * @return bool|null
    */
    public function getEdgeBlockInPrivateBrowsing(): ?bool {
        return $this->getBackingStore()->get('edgeBlockInPrivateBrowsing');
    }

    /**
     * Gets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     * @return bool|null
    */
    public function getEdgeBlockJavaScript(): ?bool {
        return $this->getBackingStore()->get('edgeBlockJavaScript');
    }

    /**
     * Gets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeBlockLiveTileDataCollection(): ?bool {
        return $this->getBackingStore()->get('edgeBlockLiveTileDataCollection');
    }

    /**
     * Gets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     * @return bool|null
    */
    public function getEdgeBlockPasswordManager(): ?bool {
        return $this->getBackingStore()->get('edgeBlockPasswordManager');
    }

    /**
     * Gets the edgeBlockPopups property value. Indicates whether or not to block popups.
     * @return bool|null
    */
    public function getEdgeBlockPopups(): ?bool {
        return $this->getBackingStore()->get('edgeBlockPopups');
    }

    /**
     * Gets the edgeBlockPrelaunch property value. Decide whether Microsoft Edge is prelaunched at Windows startup.
     * @return bool|null
    */
    public function getEdgeBlockPrelaunch(): ?bool {
        return $this->getBackingStore()->get('edgeBlockPrelaunch');
    }

    /**
     * Gets the edgeBlockPrinting property value. Configure Edge to allow or block printing.
     * @return bool|null
    */
    public function getEdgeBlockPrinting(): ?bool {
        return $this->getBackingStore()->get('edgeBlockPrinting');
    }

    /**
     * Gets the edgeBlockSavingHistory property value. Configure Edge to allow browsing history to be saved or to never save browsing history.
     * @return bool|null
    */
    public function getEdgeBlockSavingHistory(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSavingHistory');
    }

    /**
     * Gets the edgeBlockSearchEngineCustomization property value. Indicates whether or not to block the user from adding new search engine or changing the default search engine.
     * @return bool|null
    */
    public function getEdgeBlockSearchEngineCustomization(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSearchEngineCustomization');
    }

    /**
     * Gets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     * @return bool|null
    */
    public function getEdgeBlockSearchSuggestions(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSearchSuggestions');
    }

    /**
     * Gets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     * @return bool|null
    */
    public function getEdgeBlockSendingDoNotTrackHeader(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSendingDoNotTrackHeader');
    }

    /**
     * Gets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     * @return bool|null
    */
    public function getEdgeBlockSendingIntranetTrafficToInternetExplorer(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSendingIntranetTrafficToInternetExplorer');
    }

    /**
     * Gets the edgeBlockSideloadingExtensions property value. Indicates whether the user can sideload extensions.
     * @return bool|null
    */
    public function getEdgeBlockSideloadingExtensions(): ?bool {
        return $this->getBackingStore()->get('edgeBlockSideloadingExtensions');
    }

    /**
     * Gets the edgeBlockTabPreloading property value. Configure whether Edge preloads the new tab page at Windows startup.
     * @return bool|null
    */
    public function getEdgeBlockTabPreloading(): ?bool {
        return $this->getBackingStore()->get('edgeBlockTabPreloading');
    }

    /**
     * Gets the edgeBlockWebContentOnNewTabPage property value. Configure to load a blank page in Edge instead of the default New tab page and prevent users from changing it.
     * @return bool|null
    */
    public function getEdgeBlockWebContentOnNewTabPage(): ?bool {
        return $this->getBackingStore()->get('edgeBlockWebContentOnNewTabPage');
    }

    /**
     * Gets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     * @return bool|null
    */
    public function getEdgeClearBrowsingDataOnExit(): ?bool {
        return $this->getBackingStore()->get('edgeClearBrowsingDataOnExit');
    }

    /**
     * Gets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     * @return EdgeCookiePolicy|null
    */
    public function getEdgeCookiePolicy(): ?EdgeCookiePolicy {
        return $this->getBackingStore()->get('edgeCookiePolicy');
    }

    /**
     * Gets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     * @return bool|null
    */
    public function getEdgeDisableFirstRunPage(): ?bool {
        return $this->getBackingStore()->get('edgeDisableFirstRunPage');
    }

    /**
     * Gets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeEnterpriseModeSiteListLocation(): ?string {
        return $this->getBackingStore()->get('edgeEnterpriseModeSiteListLocation');
    }

    /**
     * Gets the edgeFavoritesBarVisibility property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getEdgeFavoritesBarVisibility(): ?VisibilitySetting {
        return $this->getBackingStore()->get('edgeFavoritesBarVisibility');
    }

    /**
     * Gets the edgeFavoritesListLocation property value. The location of the favorites list to provision. Could be a local file, local network or http location.
     * @return string|null
    */
    public function getEdgeFavoritesListLocation(): ?string {
        return $this->getBackingStore()->get('edgeFavoritesListLocation');
    }

    /**
     * Gets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     * @return string|null
    */
    public function getEdgeFirstRunUrl(): ?string {
        return $this->getBackingStore()->get('edgeFirstRunUrl');
    }

    /**
     * Gets the edgeHomeButtonConfiguration property value. Causes the Home button to either hide, load the default Start page, load a New tab page, or a custom URL
     * @return EdgeHomeButtonConfiguration|null
    */
    public function getEdgeHomeButtonConfiguration(): ?EdgeHomeButtonConfiguration {
        return $this->getBackingStore()->get('edgeHomeButtonConfiguration');
    }

    /**
     * Gets the edgeHomeButtonConfigurationEnabled property value. Enable the Home button configuration.
     * @return bool|null
    */
    public function getEdgeHomeButtonConfigurationEnabled(): ?bool {
        return $this->getBackingStore()->get('edgeHomeButtonConfigurationEnabled');
    }

    /**
     * Gets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     * @return array<string>|null
    */
    public function getEdgeHomepageUrls(): ?array {
        return $this->getBackingStore()->get('edgeHomepageUrls');
    }

    /**
     * Gets the edgeKioskModeRestriction property value. Specify how the Microsoft Edge settings are restricted based on kiosk mode.
     * @return EdgeKioskModeRestrictionType|null
    */
    public function getEdgeKioskModeRestriction(): ?EdgeKioskModeRestrictionType {
        return $this->getBackingStore()->get('edgeKioskModeRestriction');
    }

    /**
     * Gets the edgeKioskResetAfterIdleTimeInMinutes property value. Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
     * @return int|null
    */
    public function getEdgeKioskResetAfterIdleTimeInMinutes(): ?int {
        return $this->getBackingStore()->get('edgeKioskResetAfterIdleTimeInMinutes');
    }

    /**
     * Gets the edgeNewTabPageURL property value. Specify the page opened when new tabs are created.
     * @return string|null
    */
    public function getEdgeNewTabPageURL(): ?string {
        return $this->getBackingStore()->get('edgeNewTabPageURL');
    }

    /**
     * Gets the edgeOpensWith property value. Possible values for the EdgeOpensWith setting.
     * @return EdgeOpenOptions|null
    */
    public function getEdgeOpensWith(): ?EdgeOpenOptions {
        return $this->getBackingStore()->get('edgeOpensWith');
    }

    /**
     * Gets the edgePreventCertificateErrorOverride property value. Allow or prevent users from overriding certificate errors.
     * @return bool|null
    */
    public function getEdgePreventCertificateErrorOverride(): ?bool {
        return $this->getBackingStore()->get('edgePreventCertificateErrorOverride');
    }

    /**
     * Gets the edgeRequiredExtensionPackageFamilyNames property value. Specify the list of package family names of browser extensions that are required and cannot be turned off by the user.
     * @return array<string>|null
    */
    public function getEdgeRequiredExtensionPackageFamilyNames(): ?array {
        return $this->getBackingStore()->get('edgeRequiredExtensionPackageFamilyNames');
    }

    /**
     * Gets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     * @return bool|null
    */
    public function getEdgeRequireSmartScreen(): ?bool {
        return $this->getBackingStore()->get('edgeRequireSmartScreen');
    }

    /**
     * Gets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     * @return EdgeSearchEngineBase|null
    */
    public function getEdgeSearchEngine(): ?EdgeSearchEngineBase {
        return $this->getBackingStore()->get('edgeSearchEngine');
    }

    /**
     * Gets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     * @return bool|null
    */
    public function getEdgeSendIntranetTrafficToInternetExplorer(): ?bool {
        return $this->getBackingStore()->get('edgeSendIntranetTrafficToInternetExplorer');
    }

    /**
     * Gets the edgeShowMessageWhenOpeningInternetExplorerSites property value. What message will be displayed by Edge before switching to Internet Explorer.
     * @return InternetExplorerMessageSetting|null
    */
    public function getEdgeShowMessageWhenOpeningInternetExplorerSites(): ?InternetExplorerMessageSetting {
        return $this->getBackingStore()->get('edgeShowMessageWhenOpeningInternetExplorerSites');
    }

    /**
     * Gets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     * @return bool|null
    */
    public function getEdgeSyncFavoritesWithInternetExplorer(): ?bool {
        return $this->getBackingStore()->get('edgeSyncFavoritesWithInternetExplorer');
    }

    /**
     * Gets the edgeTelemetryForMicrosoft365Analytics property value. Type of browsing data sent to Microsoft 365 analytics
     * @return EdgeTelemetryMode|null
    */
    public function getEdgeTelemetryForMicrosoft365Analytics(): ?EdgeTelemetryMode {
        return $this->getBackingStore()->get('edgeTelemetryForMicrosoft365Analytics');
    }

    /**
     * Gets the enableAutomaticRedeployment property value. Allow users with administrative rights to delete all user data and settings using CTRL + Win + R at the device lock screen so that the device can be automatically re-configured and re-enrolled into management.
     * @return bool|null
    */
    public function getEnableAutomaticRedeployment(): ?bool {
        return $this->getBackingStore()->get('enableAutomaticRedeployment');
    }

    /**
     * Gets the energySaverOnBatteryThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While on battery, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getEnergySaverOnBatteryThresholdPercentage(): ?int {
        return $this->getBackingStore()->get('energySaverOnBatteryThresholdPercentage');
    }

    /**
     * Gets the energySaverPluggedInThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While plugged in, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getEnergySaverPluggedInThresholdPercentage(): ?int {
        return $this->getBackingStore()->get('energySaverPluggedInThresholdPercentage');
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     * @return string|null
    */
    public function getEnterpriseCloudPrintDiscoveryEndPoint(): ?string {
        return $this->getBackingStore()->get('enterpriseCloudPrintDiscoveryEndPoint');
    }

    /**
     * Gets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     * @return int|null
    */
    public function getEnterpriseCloudPrintDiscoveryMaxLimit(): ?int {
        return $this->getBackingStore()->get('enterpriseCloudPrintDiscoveryMaxLimit');
    }

    /**
     * Gets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(): ?string {
        return $this->getBackingStore()->get('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier');
    }

    /**
     * Gets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthAuthority(): ?string {
        return $this->getBackingStore()->get('enterpriseCloudPrintOAuthAuthority');
    }

    /**
     * Gets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     * @return string|null
    */
    public function getEnterpriseCloudPrintOAuthClientIdentifier(): ?string {
        return $this->getBackingStore()->get('enterpriseCloudPrintOAuthClientIdentifier');
    }

    /**
     * Gets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     * @return string|null
    */
    public function getEnterpriseCloudPrintResourceIdentifier(): ?string {
        return $this->getBackingStore()->get('enterpriseCloudPrintResourceIdentifier');
    }

    /**
     * Gets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     * @return bool|null
    */
    public function getExperienceBlockDeviceDiscovery(): ?bool {
        return $this->getBackingStore()->get('experienceBlockDeviceDiscovery');
    }

    /**
     * Gets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     * @return bool|null
    */
    public function getExperienceBlockErrorDialogWhenNoSIM(): ?bool {
        return $this->getBackingStore()->get('experienceBlockErrorDialogWhenNoSIM');
    }

    /**
     * Gets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     * @return bool|null
    */
    public function getExperienceBlockTaskSwitcher(): ?bool {
        return $this->getBackingStore()->get('experienceBlockTaskSwitcher');
    }

    /**
     * Gets the experienceDoNotSyncBrowserSettings property value. Allow(Not Configured) or prevent(Block) the syncing of Microsoft Edge Browser settings. Option to prevent syncing across devices, but allow user override.
     * @return BrowserSyncSetting|null
    */
    public function getExperienceDoNotSyncBrowserSettings(): ?BrowserSyncSetting {
        return $this->getBackingStore()->get('experienceDoNotSyncBrowserSettings');
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
        return $this->getBackingStore()->get('findMyFiles');
    }

    /**
     * Gets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     * @return bool|null
    */
    public function getGameDvrBlocked(): ?bool {
        return $this->getBackingStore()->get('gameDvrBlocked');
    }

    /**
     * Gets the inkWorkspaceAccess property value. Values for the InkWorkspaceAccess setting.
     * @return InkAccessSetting|null
    */
    public function getInkWorkspaceAccess(): ?InkAccessSetting {
        return $this->getBackingStore()->get('inkWorkspaceAccess');
    }

    /**
     * Gets the inkWorkspaceAccessState property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getInkWorkspaceAccessState(): ?StateManagementSetting {
        return $this->getBackingStore()->get('inkWorkspaceAccessState');
    }

    /**
     * Gets the inkWorkspaceBlockSuggestedApps property value. Specify whether to show recommended app suggestions in the ink workspace.
     * @return bool|null
    */
    public function getInkWorkspaceBlockSuggestedApps(): ?bool {
        return $this->getBackingStore()->get('inkWorkspaceBlockSuggestedApps');
    }

    /**
     * Gets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     * @return bool|null
    */
    public function getInternetSharingBlocked(): ?bool {
        return $this->getBackingStore()->get('internetSharingBlocked');
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        return $this->getBackingStore()->get('locationServicesBlocked');
    }

    /**
     * Gets the lockScreenActivateAppsWithVoice property value. Possible values of a property
     * @return Enablement|null
    */
    public function getLockScreenActivateAppsWithVoice(): ?Enablement {
        return $this->getBackingStore()->get('lockScreenActivateAppsWithVoice');
    }

    /**
     * Gets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     * @return bool|null
    */
    public function getLockScreenAllowTimeoutConfiguration(): ?bool {
        return $this->getBackingStore()->get('lockScreenAllowTimeoutConfiguration');
    }

    /**
     * Gets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockActionCenterNotifications(): ?bool {
        return $this->getBackingStore()->get('lockScreenBlockActionCenterNotifications');
    }

    /**
     * Gets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     * @return bool|null
    */
    public function getLockScreenBlockCortana(): ?bool {
        return $this->getBackingStore()->get('lockScreenBlockCortana');
    }

    /**
     * Gets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     * @return bool|null
    */
    public function getLockScreenBlockToastNotifications(): ?bool {
        return $this->getBackingStore()->get('lockScreenBlockToastNotifications');
    }

    /**
     * Gets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     * @return int|null
    */
    public function getLockScreenTimeoutInSeconds(): ?int {
        return $this->getBackingStore()->get('lockScreenTimeoutInSeconds');
    }

    /**
     * Gets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     * @return bool|null
    */
    public function getLogonBlockFastUserSwitching(): ?bool {
        return $this->getBackingStore()->get('logonBlockFastUserSwitching');
    }

    /**
     * Gets the messagingBlockMMS property value. Indicates whether or not to block the MMS send/receive functionality on the device.
     * @return bool|null
    */
    public function getMessagingBlockMMS(): ?bool {
        return $this->getBackingStore()->get('messagingBlockMMS');
    }

    /**
     * Gets the messagingBlockRichCommunicationServices property value. Indicates whether or not to block the RCS send/receive functionality on the device.
     * @return bool|null
    */
    public function getMessagingBlockRichCommunicationServices(): ?bool {
        return $this->getBackingStore()->get('messagingBlockRichCommunicationServices');
    }

    /**
     * Gets the messagingBlockSync property value. Indicates whether or not to block text message back up and restore and Messaging Everywhere.
     * @return bool|null
    */
    public function getMessagingBlockSync(): ?bool {
        return $this->getBackingStore()->get('messagingBlockSync');
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        return $this->getBackingStore()->get('microsoftAccountBlocked');
    }

    /**
     * Gets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     * @return bool|null
    */
    public function getMicrosoftAccountBlockSettingsSync(): ?bool {
        return $this->getBackingStore()->get('microsoftAccountBlockSettingsSync');
    }

    /**
     * Gets the microsoftAccountSignInAssistantSettings property value. Values for the SignInAssistantSettings.
     * @return SignInAssistantOptions|null
    */
    public function getMicrosoftAccountSignInAssistantSettings(): ?SignInAssistantOptions {
        return $this->getBackingStore()->get('microsoftAccountSignInAssistantSettings');
    }

    /**
     * Gets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     * @return bool|null
    */
    public function getNetworkProxyApplySettingsDeviceWide(): ?bool {
        return $this->getBackingStore()->get('networkProxyApplySettingsDeviceWide');
    }

    /**
     * Gets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     * @return string|null
    */
    public function getNetworkProxyAutomaticConfigurationUrl(): ?string {
        return $this->getBackingStore()->get('networkProxyAutomaticConfigurationUrl');
    }

    /**
     * Gets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     * @return bool|null
    */
    public function getNetworkProxyDisableAutoDetect(): ?bool {
        return $this->getBackingStore()->get('networkProxyDisableAutoDetect');
    }

    /**
     * Gets the networkProxyServer property value. Specifies manual proxy server settings.
     * @return Windows10NetworkProxyServer|null
    */
    public function getNetworkProxyServer(): ?Windows10NetworkProxyServer {
        return $this->getBackingStore()->get('networkProxyServer');
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        return $this->getBackingStore()->get('nfcBlocked');
    }

    /**
     * Gets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     * @return bool|null
    */
    public function getOneDriveDisableFileSync(): ?bool {
        return $this->getBackingStore()->get('oneDriveDisableFileSync');
    }

    /**
     * Gets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->getBackingStore()->get('passwordBlockSimple');
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('passwordExpirationDays');
    }

    /**
     * Gets the passwordMinimumAgeInDays property value. This security setting determines the period of time (in days) that a password must be used before the user can change it. Valid values 0 to 998
     * @return int|null
    */
    public function getPasswordMinimumAgeInDays(): ?int {
        return $this->getBackingStore()->get('passwordMinimumAgeInDays');
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLength');
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->getBackingStore()->get('passwordRequired');
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->getBackingStore()->get('passwordRequiredType');
    }

    /**
     * Gets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     * @return bool|null
    */
    public function getPasswordRequireWhenResumeFromIdleState(): ?bool {
        return $this->getBackingStore()->get('passwordRequireWhenResumeFromIdleState');
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
    }

    /**
     * Gets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     * @return string|null
    */
    public function getPersonalizationDesktopImageUrl(): ?string {
        return $this->getBackingStore()->get('personalizationDesktopImageUrl');
    }

    /**
     * Gets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     * @return string|null
    */
    public function getPersonalizationLockScreenImageUrl(): ?string {
        return $this->getBackingStore()->get('personalizationLockScreenImageUrl');
    }

    /**
     * Gets the powerButtonActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerButtonActionOnBattery(): ?PowerActionType {
        return $this->getBackingStore()->get('powerButtonActionOnBattery');
    }

    /**
     * Gets the powerButtonActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerButtonActionPluggedIn(): ?PowerActionType {
        return $this->getBackingStore()->get('powerButtonActionPluggedIn');
    }

    /**
     * Gets the powerHybridSleepOnBattery property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPowerHybridSleepOnBattery(): ?Enablement {
        return $this->getBackingStore()->get('powerHybridSleepOnBattery');
    }

    /**
     * Gets the powerHybridSleepPluggedIn property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPowerHybridSleepPluggedIn(): ?Enablement {
        return $this->getBackingStore()->get('powerHybridSleepPluggedIn');
    }

    /**
     * Gets the powerLidCloseActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerLidCloseActionOnBattery(): ?PowerActionType {
        return $this->getBackingStore()->get('powerLidCloseActionOnBattery');
    }

    /**
     * Gets the powerLidCloseActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerLidCloseActionPluggedIn(): ?PowerActionType {
        return $this->getBackingStore()->get('powerLidCloseActionPluggedIn');
    }

    /**
     * Gets the powerSleepButtonActionOnBattery property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerSleepButtonActionOnBattery(): ?PowerActionType {
        return $this->getBackingStore()->get('powerSleepButtonActionOnBattery');
    }

    /**
     * Gets the powerSleepButtonActionPluggedIn property value. Power action types
     * @return PowerActionType|null
    */
    public function getPowerSleepButtonActionPluggedIn(): ?PowerActionType {
        return $this->getBackingStore()->get('powerSleepButtonActionPluggedIn');
    }

    /**
     * Gets the printerBlockAddition property value. Prevent user installation of additional printers from printers settings.
     * @return bool|null
    */
    public function getPrinterBlockAddition(): ?bool {
        return $this->getBackingStore()->get('printerBlockAddition');
    }

    /**
     * Gets the printerDefaultName property value. Name (network host name) of an installed printer.
     * @return string|null
    */
    public function getPrinterDefaultName(): ?string {
        return $this->getBackingStore()->get('printerDefaultName');
    }

    /**
     * Gets the printerNames property value. Automatically provision printers based on their names (network host names).
     * @return array<string>|null
    */
    public function getPrinterNames(): ?array {
        return $this->getBackingStore()->get('printerNames');
    }

    /**
     * Gets the privacyAccessControls property value. Indicates a list of applications with their access control levels over privacy data categories, and/or the default access levels per category. This collection can contain a maximum of 500 elements.
     * @return array<WindowsPrivacyDataAccessControlItem>|null
    */
    public function getPrivacyAccessControls(): ?array {
        return $this->getBackingStore()->get('privacyAccessControls');
    }

    /**
     * Gets the privacyAdvertisingId property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getPrivacyAdvertisingId(): ?StateManagementSetting {
        return $this->getBackingStore()->get('privacyAdvertisingId');
    }

    /**
     * Gets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     * @return bool|null
    */
    public function getPrivacyAutoAcceptPairingAndConsentPrompts(): ?bool {
        return $this->getBackingStore()->get('privacyAutoAcceptPairingAndConsentPrompts');
    }

    /**
     * Gets the privacyBlockActivityFeed property value. Blocks the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockActivityFeed(): ?bool {
        return $this->getBackingStore()->get('privacyBlockActivityFeed');
    }

    /**
     * Gets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     * @return bool|null
    */
    public function getPrivacyBlockInputPersonalization(): ?bool {
        return $this->getBackingStore()->get('privacyBlockInputPersonalization');
    }

    /**
     * Gets the privacyBlockPublishUserActivities property value. Blocks the shared experiences/discovery of recently used resources in task switcher etc.
     * @return bool|null
    */
    public function getPrivacyBlockPublishUserActivities(): ?bool {
        return $this->getBackingStore()->get('privacyBlockPublishUserActivities');
    }

    /**
     * Gets the privacyDisableLaunchExperience property value. This policy prevents the privacy experience from launching during user logon for new and upgraded users.​
     * @return bool|null
    */
    public function getPrivacyDisableLaunchExperience(): ?bool {
        return $this->getBackingStore()->get('privacyDisableLaunchExperience');
    }

    /**
     * Gets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     * @return bool|null
    */
    public function getResetProtectionModeBlocked(): ?bool {
        return $this->getBackingStore()->get('resetProtectionModeBlocked');
    }

    /**
     * Gets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     * @return SafeSearchFilterType|null
    */
    public function getSafeSearchFilter(): ?SafeSearchFilterType {
        return $this->getBackingStore()->get('safeSearchFilter');
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->getBackingStore()->get('screenCaptureBlocked');
    }

    /**
     * Gets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     * @return bool|null
    */
    public function getSearchBlockDiacritics(): ?bool {
        return $this->getBackingStore()->get('searchBlockDiacritics');
    }

    /**
     * Gets the searchBlockWebResults property value. Indicates whether or not to block the web search.
     * @return bool|null
    */
    public function getSearchBlockWebResults(): ?bool {
        return $this->getBackingStore()->get('searchBlockWebResults');
    }

    /**
     * Gets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     * @return bool|null
    */
    public function getSearchDisableAutoLanguageDetection(): ?bool {
        return $this->getBackingStore()->get('searchDisableAutoLanguageDetection');
    }

    /**
     * Gets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     * @return bool|null
    */
    public function getSearchDisableIndexerBackoff(): ?bool {
        return $this->getBackingStore()->get('searchDisableIndexerBackoff');
    }

    /**
     * Gets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     * @return bool|null
    */
    public function getSearchDisableIndexingEncryptedItems(): ?bool {
        return $this->getBackingStore()->get('searchDisableIndexingEncryptedItems');
    }

    /**
     * Gets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     * @return bool|null
    */
    public function getSearchDisableIndexingRemovableDrive(): ?bool {
        return $this->getBackingStore()->get('searchDisableIndexingRemovableDrive');
    }

    /**
     * Gets the searchDisableLocation property value. Specifies if search can use location information.
     * @return bool|null
    */
    public function getSearchDisableLocation(): ?bool {
        return $this->getBackingStore()->get('searchDisableLocation');
    }

    /**
     * Gets the searchDisableUseLocation property value. Specifies if search can use location information.
     * @return bool|null
    */
    public function getSearchDisableUseLocation(): ?bool {
        return $this->getBackingStore()->get('searchDisableUseLocation');
    }

    /**
     * Gets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     * @return bool|null
    */
    public function getSearchEnableAutomaticIndexSizeManangement(): ?bool {
        return $this->getBackingStore()->get('searchEnableAutomaticIndexSizeManangement');
    }

    /**
     * Gets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     * @return bool|null
    */
    public function getSearchEnableRemoteQueries(): ?bool {
        return $this->getBackingStore()->get('searchEnableRemoteQueries');
    }

    /**
     * Gets the securityBlockAzureADJoinedDevicesAutoEncryption property value. Specify whether to allow automatic device encryption during OOBE when the device is Azure AD joined (desktop only).
     * @return bool|null
    */
    public function getSecurityBlockAzureADJoinedDevicesAutoEncryption(): ?bool {
        return $this->getBackingStore()->get('securityBlockAzureADJoinedDevicesAutoEncryption');
    }

    /**
     * Gets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAccountsPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockAccountsPage');
    }

    /**
     * Gets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockAddProvisioningPackage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockAddProvisioningPackage');
    }

    /**
     * Gets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockAppsPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockAppsPage');
    }

    /**
     * Gets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeLanguage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockChangeLanguage');
    }

    /**
     * Gets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     * @return bool|null
    */
    public function getSettingsBlockChangePowerSleep(): ?bool {
        return $this->getBackingStore()->get('settingsBlockChangePowerSleep');
    }

    /**
     * Gets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeRegion(): ?bool {
        return $this->getBackingStore()->get('settingsBlockChangeRegion');
    }

    /**
     * Gets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     * @return bool|null
    */
    public function getSettingsBlockChangeSystemTime(): ?bool {
        return $this->getBackingStore()->get('settingsBlockChangeSystemTime');
    }

    /**
     * Gets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockDevicesPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockDevicesPage');
    }

    /**
     * Gets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockEaseOfAccessPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockEaseOfAccessPage');
    }

    /**
     * Gets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     * @return bool|null
    */
    public function getSettingsBlockEditDeviceName(): ?bool {
        return $this->getBackingStore()->get('settingsBlockEditDeviceName');
    }

    /**
     * Gets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockGamingPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockGamingPage');
    }

    /**
     * Gets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockNetworkInternetPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockNetworkInternetPage');
    }

    /**
     * Gets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPersonalizationPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockPersonalizationPage');
    }

    /**
     * Gets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockPrivacyPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockPrivacyPage');
    }

    /**
     * Gets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     * @return bool|null
    */
    public function getSettingsBlockRemoveProvisioningPackage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockRemoveProvisioningPackage');
    }

    /**
     * Gets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSettingsApp(): ?bool {
        return $this->getBackingStore()->get('settingsBlockSettingsApp');
    }

    /**
     * Gets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockSystemPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockSystemPage');
    }

    /**
     * Gets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockTimeLanguagePage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockTimeLanguagePage');
    }

    /**
     * Gets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     * @return bool|null
    */
    public function getSettingsBlockUpdateSecurityPage(): ?bool {
        return $this->getBackingStore()->get('settingsBlockUpdateSecurityPage');
    }

    /**
     * Gets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     * @return bool|null
    */
    public function getSharedUserAppDataAllowed(): ?bool {
        return $this->getBackingStore()->get('sharedUserAppDataAllowed');
    }

    /**
     * Gets the smartScreenAppInstallControl property value. App Install control Setting
     * @return AppInstallControlType|null
    */
    public function getSmartScreenAppInstallControl(): ?AppInstallControlType {
        return $this->getBackingStore()->get('smartScreenAppInstallControl');
    }

    /**
     * Gets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverride(): ?bool {
        return $this->getBackingStore()->get('smartScreenBlockPromptOverride');
    }

    /**
     * Gets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     * @return bool|null
    */
    public function getSmartScreenBlockPromptOverrideForFiles(): ?bool {
        return $this->getBackingStore()->get('smartScreenBlockPromptOverrideForFiles');
    }

    /**
     * Gets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     * @return bool|null
    */
    public function getSmartScreenEnableAppInstallControl(): ?bool {
        return $this->getBackingStore()->get('smartScreenEnableAppInstallControl');
    }

    /**
     * Gets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     * @return bool|null
    */
    public function getStartBlockUnpinningAppsFromTaskbar(): ?bool {
        return $this->getBackingStore()->get('startBlockUnpinningAppsFromTaskbar');
    }

    /**
     * Gets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     * @return WindowsStartMenuAppListVisibilityType|null
    */
    public function getStartMenuAppListVisibility(): ?WindowsStartMenuAppListVisibilityType {
        return $this->getBackingStore()->get('startMenuAppListVisibility');
    }

    /**
     * Gets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideChangeAccountSettings(): ?bool {
        return $this->getBackingStore()->get('startMenuHideChangeAccountSettings');
    }

    /**
     * Gets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideFrequentlyUsedApps(): ?bool {
        return $this->getBackingStore()->get('startMenuHideFrequentlyUsedApps');
    }

    /**
     * Gets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideHibernate(): ?bool {
        return $this->getBackingStore()->get('startMenuHideHibernate');
    }

    /**
     * Gets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideLock(): ?bool {
        return $this->getBackingStore()->get('startMenuHideLock');
    }

    /**
     * Gets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHidePowerButton(): ?bool {
        return $this->getBackingStore()->get('startMenuHidePowerButton');
    }

    /**
     * Gets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentJumpLists(): ?bool {
        return $this->getBackingStore()->get('startMenuHideRecentJumpLists');
    }

    /**
     * Gets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     * @return bool|null
    */
    public function getStartMenuHideRecentlyAddedApps(): ?bool {
        return $this->getBackingStore()->get('startMenuHideRecentlyAddedApps');
    }

    /**
     * Gets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideRestartOptions(): ?bool {
        return $this->getBackingStore()->get('startMenuHideRestartOptions');
    }

    /**
     * Gets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideShutDown(): ?bool {
        return $this->getBackingStore()->get('startMenuHideShutDown');
    }

    /**
     * Gets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSignOut(): ?bool {
        return $this->getBackingStore()->get('startMenuHideSignOut');
    }

    /**
     * Gets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSleep(): ?bool {
        return $this->getBackingStore()->get('startMenuHideSleep');
    }

    /**
     * Gets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideSwitchAccount(): ?bool {
        return $this->getBackingStore()->get('startMenuHideSwitchAccount');
    }

    /**
     * Gets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     * @return bool|null
    */
    public function getStartMenuHideUserTile(): ?bool {
        return $this->getBackingStore()->get('startMenuHideUserTile');
    }

    /**
     * Gets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutEdgeAssetsXml(): ?StreamInterface {
        return $this->getBackingStore()->get('startMenuLayoutEdgeAssetsXml');
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        return $this->getBackingStore()->get('startMenuLayoutXml');
    }

    /**
     * Gets the startMenuMode property value. Type of display modes for the start menu.
     * @return WindowsStartMenuModeType|null
    */
    public function getStartMenuMode(): ?WindowsStartMenuModeType {
        return $this->getBackingStore()->get('startMenuMode');
    }

    /**
     * Gets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDocuments(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderDocuments');
    }

    /**
     * Gets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderDownloads(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderDownloads');
    }

    /**
     * Gets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderFileExplorer(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderFileExplorer');
    }

    /**
     * Gets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderHomeGroup(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderHomeGroup');
    }

    /**
     * Gets the startMenuPinnedFolderMusic property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderMusic(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderMusic');
    }

    /**
     * Gets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderNetwork(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderNetwork');
    }

    /**
     * Gets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPersonalFolder(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderPersonalFolder');
    }

    /**
     * Gets the startMenuPinnedFolderPictures property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderPictures(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderPictures');
    }

    /**
     * Gets the startMenuPinnedFolderSettings property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderSettings(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderSettings');
    }

    /**
     * Gets the startMenuPinnedFolderVideos property value. Generic visibility state.
     * @return VisibilitySetting|null
    */
    public function getStartMenuPinnedFolderVideos(): ?VisibilitySetting {
        return $this->getBackingStore()->get('startMenuPinnedFolderVideos');
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        return $this->getBackingStore()->get('storageBlockRemovableStorage');
    }

    /**
     * Gets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     * @return bool|null
    */
    public function getStorageRequireMobileDeviceEncryption(): ?bool {
        return $this->getBackingStore()->get('storageRequireMobileDeviceEncryption');
    }

    /**
     * Gets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppDataToSystemVolume(): ?bool {
        return $this->getBackingStore()->get('storageRestrictAppDataToSystemVolume');
    }

    /**
     * Gets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     * @return bool|null
    */
    public function getStorageRestrictAppInstallToSystemVolume(): ?bool {
        return $this->getBackingStore()->get('storageRestrictAppInstallToSystemVolume');
    }

    /**
     * Gets the systemTelemetryProxyServer property value. Gets or sets the fully qualified domain name (FQDN) or IP address of a proxy server to forward Connected User Experiences and Telemetry requests.
     * @return string|null
    */
    public function getSystemTelemetryProxyServer(): ?string {
        return $this->getBackingStore()->get('systemTelemetryProxyServer');
    }

    /**
     * Gets the taskManagerBlockEndTask property value. Specify whether non-administrators can use Task Manager to end tasks.
     * @return bool|null
    */
    public function getTaskManagerBlockEndTask(): ?bool {
        return $this->getBackingStore()->get('taskManagerBlockEndTask');
    }

    /**
     * Gets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     * @return bool|null
    */
    public function getTenantLockdownRequireNetworkDuringOutOfBoxExperience(): ?bool {
        return $this->getBackingStore()->get('tenantLockdownRequireNetworkDuringOutOfBoxExperience');
    }

    /**
     * Gets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     * @return bool|null
    */
    public function getUninstallBuiltInApps(): ?bool {
        return $this->getBackingStore()->get('uninstallBuiltInApps');
    }

    /**
     * Gets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     * @return bool|null
    */
    public function getUsbBlocked(): ?bool {
        return $this->getBackingStore()->get('usbBlocked');
    }

    /**
     * Gets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     * @return bool|null
    */
    public function getVoiceRecordingBlocked(): ?bool {
        return $this->getBackingStore()->get('voiceRecordingBlocked');
    }

    /**
     * Gets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     * @return bool|null
    */
    public function getWebRtcBlockLocalhostIpAddress(): ?bool {
        return $this->getBackingStore()->get('webRtcBlockLocalhostIpAddress');
    }

    /**
     * Gets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWiFiBlockAutomaticConnectHotspots(): ?bool {
        return $this->getBackingStore()->get('wiFiBlockAutomaticConnectHotspots');
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        return $this->getBackingStore()->get('wiFiBlocked');
    }

    /**
     * Gets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     * @return bool|null
    */
    public function getWiFiBlockManualConfiguration(): ?bool {
        return $this->getBackingStore()->get('wiFiBlockManualConfiguration');
    }

    /**
     * Gets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     * @return int|null
    */
    public function getWiFiScanInterval(): ?int {
        return $this->getBackingStore()->get('wiFiScanInterval');
    }

    /**
     * Gets the windows10AppsForceUpdateSchedule property value. Windows 10 force update schedule for Apps.
     * @return Windows10AppsForceUpdateSchedule|null
    */
    public function getWindows10AppsForceUpdateSchedule(): ?Windows10AppsForceUpdateSchedule {
        return $this->getBackingStore()->get('windows10AppsForceUpdateSchedule');
    }

    /**
     * Gets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockConsumerSpecificFeatures(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockConsumerSpecificFeatures');
    }

    /**
     * Gets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     * @return bool|null
    */
    public function getWindowsSpotlightBlocked(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlocked');
    }

    /**
     * Gets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     * @return bool|null
    */
    public function getWindowsSpotlightBlockOnActionCenter(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockOnActionCenter');
    }

    /**
     * Gets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockTailoredExperiences(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockTailoredExperiences');
    }

    /**
     * Gets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     * @return bool|null
    */
    public function getWindowsSpotlightBlockThirdPartyNotifications(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockThirdPartyNotifications');
    }

    /**
     * Gets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWelcomeExperience(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockWelcomeExperience');
    }

    /**
     * Gets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     * @return bool|null
    */
    public function getWindowsSpotlightBlockWindowsTips(): ?bool {
        return $this->getBackingStore()->get('windowsSpotlightBlockWindowsTips');
    }

    /**
     * Gets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     * @return WindowsSpotlightEnablementSettings|null
    */
    public function getWindowsSpotlightConfigureOnLockScreen(): ?WindowsSpotlightEnablementSettings {
        return $this->getBackingStore()->get('windowsSpotlightConfigureOnLockScreen');
    }

    /**
     * Gets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlockAutoUpdate(): ?bool {
        return $this->getBackingStore()->get('windowsStoreBlockAutoUpdate');
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        return $this->getBackingStore()->get('windowsStoreBlocked');
    }

    /**
     * Gets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     * @return bool|null
    */
    public function getWindowsStoreEnablePrivateStoreOnly(): ?bool {
        return $this->getBackingStore()->get('windowsStoreEnablePrivateStoreOnly');
    }

    /**
     * Gets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     * @return bool|null
    */
    public function getWirelessDisplayBlockProjectionToThisDevice(): ?bool {
        return $this->getBackingStore()->get('wirelessDisplayBlockProjectionToThisDevice');
    }

    /**
     * Gets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     * @return bool|null
    */
    public function getWirelessDisplayBlockUserInputFromReceiver(): ?bool {
        return $this->getBackingStore()->get('wirelessDisplayBlockUserInputFromReceiver');
    }

    /**
     * Gets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     * @return bool|null
    */
    public function getWirelessDisplayRequirePinForPairing(): ?bool {
        return $this->getBackingStore()->get('wirelessDisplayRequirePinForPairing');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountsBlockAddingNonMicrosoftAccountEmail', $this->getAccountsBlockAddingNonMicrosoftAccountEmail());
        $writer->writeEnumValue('activateAppsWithVoice', $this->getActivateAppsWithVoice());
        $writer->writeBooleanValue('antiTheftModeBlocked', $this->getAntiTheftModeBlocked());
        $writer->writeBooleanValue('appManagementMSIAllowUserControlOverInstall', $this->getAppManagementMSIAllowUserControlOverInstall());
        $writer->writeBooleanValue('appManagementMSIAlwaysInstallWithElevatedPrivileges', $this->getAppManagementMSIAlwaysInstallWithElevatedPrivileges());
        $writer->writeCollectionOfPrimitiveValues('appManagementPackageFamilyNamesToLaunchAfterLogOn', $this->getAppManagementPackageFamilyNamesToLaunchAfterLogOn());
        $writer->writeEnumValue('appsAllowTrustedAppsSideloading', $this->getAppsAllowTrustedAppsSideloading());
        $writer->writeBooleanValue('appsBlockWindowsStoreOriginatedApps', $this->getAppsBlockWindowsStoreOriginatedApps());
        $writer->writeBooleanValue('authenticationAllowSecondaryDevice', $this->getAuthenticationAllowSecondaryDevice());
        $writer->writeStringValue('authenticationPreferredAzureADTenantDomainName', $this->getAuthenticationPreferredAzureADTenantDomainName());
        $writer->writeEnumValue('authenticationWebSignIn', $this->getAuthenticationWebSignIn());
        $writer->writeCollectionOfPrimitiveValues('bluetoothAllowedServices', $this->getBluetoothAllowedServices());
        $writer->writeBooleanValue('bluetoothBlockAdvertising', $this->getBluetoothBlockAdvertising());
        $writer->writeBooleanValue('bluetoothBlockDiscoverableMode', $this->getBluetoothBlockDiscoverableMode());
        $writer->writeBooleanValue('bluetoothBlocked', $this->getBluetoothBlocked());
        $writer->writeBooleanValue('bluetoothBlockPrePairing', $this->getBluetoothBlockPrePairing());
        $writer->writeBooleanValue('bluetoothBlockPromptedProximalConnections', $this->getBluetoothBlockPromptedProximalConnections());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockDataWhenRoaming', $this->getCellularBlockDataWhenRoaming());
        $writer->writeBooleanValue('cellularBlockVpn', $this->getCellularBlockVpn());
        $writer->writeBooleanValue('cellularBlockVpnWhenRoaming', $this->getCellularBlockVpnWhenRoaming());
        $writer->writeEnumValue('cellularData', $this->getCellularData());
        $writer->writeBooleanValue('certificatesBlockManualRootCertificateInstallation', $this->getCertificatesBlockManualRootCertificateInstallation());
        $writer->writeStringValue('configureTimeZone', $this->getConfigureTimeZone());
        $writer->writeBooleanValue('connectedDevicesServiceBlocked', $this->getConnectedDevicesServiceBlocked());
        $writer->writeBooleanValue('copyPasteBlocked', $this->getCopyPasteBlocked());
        $writer->writeBooleanValue('cortanaBlocked', $this->getCortanaBlocked());
        $writer->writeBooleanValue('cryptographyAllowFipsAlgorithmPolicy', $this->getCryptographyAllowFipsAlgorithmPolicy());
        $writer->writeBooleanValue('dataProtectionBlockDirectMemoryAccess', $this->getDataProtectionBlockDirectMemoryAccess());
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->getDefenderBlockEndUserAccess());
        $writer->writeBooleanValue('defenderBlockOnAccessProtection', $this->getDefenderBlockOnAccessProtection());
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->getDefenderCloudBlockLevel());
        $writer->writeIntegerValue('defenderCloudExtendedTimeout', $this->getDefenderCloudExtendedTimeout());
        $writer->writeIntegerValue('defenderCloudExtendedTimeoutInSeconds', $this->getDefenderCloudExtendedTimeoutInSeconds());
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->getDefenderDaysBeforeDeletingQuarantinedMalware());
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->getDefenderDetectedMalwareActions());
        $writer->writeBooleanValue('defenderDisableCatchupFullScan', $this->getDefenderDisableCatchupFullScan());
        $writer->writeBooleanValue('defenderDisableCatchupQuickScan', $this->getDefenderDisableCatchupQuickScan());
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->getDefenderFileExtensionsToExclude());
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->getDefenderFilesAndFoldersToExclude());
        $writer->writeEnumValue('defenderMonitorFileActivity', $this->getDefenderMonitorFileActivity());
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppAction', $this->getDefenderPotentiallyUnwantedAppAction());
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppActionSetting', $this->getDefenderPotentiallyUnwantedAppActionSetting());
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->getDefenderProcessesToExclude());
        $writer->writeEnumValue('defenderPromptForSampleSubmission', $this->getDefenderPromptForSampleSubmission());
        $writer->writeBooleanValue('defenderRequireBehaviorMonitoring', $this->getDefenderRequireBehaviorMonitoring());
        $writer->writeBooleanValue('defenderRequireCloudProtection', $this->getDefenderRequireCloudProtection());
        $writer->writeBooleanValue('defenderRequireNetworkInspectionSystem', $this->getDefenderRequireNetworkInspectionSystem());
        $writer->writeBooleanValue('defenderRequireRealTimeMonitoring', $this->getDefenderRequireRealTimeMonitoring());
        $writer->writeBooleanValue('defenderScanArchiveFiles', $this->getDefenderScanArchiveFiles());
        $writer->writeBooleanValue('defenderScanDownloads', $this->getDefenderScanDownloads());
        $writer->writeBooleanValue('defenderScanIncomingMail', $this->getDefenderScanIncomingMail());
        $writer->writeBooleanValue('defenderScanMappedNetworkDrivesDuringFullScan', $this->getDefenderScanMappedNetworkDrivesDuringFullScan());
        $writer->writeIntegerValue('defenderScanMaxCpu', $this->getDefenderScanMaxCpu());
        $writer->writeBooleanValue('defenderScanNetworkFiles', $this->getDefenderScanNetworkFiles());
        $writer->writeBooleanValue('defenderScanRemovableDrivesDuringFullScan', $this->getDefenderScanRemovableDrivesDuringFullScan());
        $writer->writeBooleanValue('defenderScanScriptsLoadedInInternetExplorer', $this->getDefenderScanScriptsLoadedInInternetExplorer());
        $writer->writeEnumValue('defenderScanType', $this->getDefenderScanType());
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->getDefenderScheduledQuickScanTime());
        $writer->writeTimeValue('defenderScheduledScanTime', $this->getDefenderScheduledScanTime());
        $writer->writeBooleanValue('defenderScheduleScanEnableLowCpuPriority', $this->getDefenderScheduleScanEnableLowCpuPriority());
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->getDefenderSignatureUpdateIntervalInHours());
        $writer->writeEnumValue('defenderSubmitSamplesConsentType', $this->getDefenderSubmitSamplesConsentType());
        $writer->writeEnumValue('defenderSystemScanSchedule', $this->getDefenderSystemScanSchedule());
        $writer->writeEnumValue('developerUnlockSetting', $this->getDeveloperUnlockSetting());
        $writer->writeBooleanValue('deviceManagementBlockFactoryResetOnMobile', $this->getDeviceManagementBlockFactoryResetOnMobile());
        $writer->writeBooleanValue('deviceManagementBlockManualUnenroll', $this->getDeviceManagementBlockManualUnenroll());
        $writer->writeEnumValue('diagnosticsDataSubmissionMode', $this->getDiagnosticsDataSubmissionMode());
        $writer->writeCollectionOfPrimitiveValues('displayAppListWithGdiDPIScalingTurnedOff', $this->getDisplayAppListWithGdiDPIScalingTurnedOff());
        $writer->writeCollectionOfPrimitiveValues('displayAppListWithGdiDPIScalingTurnedOn', $this->getDisplayAppListWithGdiDPIScalingTurnedOn());
        $writer->writeBooleanValue('edgeAllowStartPagesModification', $this->getEdgeAllowStartPagesModification());
        $writer->writeBooleanValue('edgeBlockAccessToAboutFlags', $this->getEdgeBlockAccessToAboutFlags());
        $writer->writeBooleanValue('edgeBlockAddressBarDropdown', $this->getEdgeBlockAddressBarDropdown());
        $writer->writeBooleanValue('edgeBlockAutofill', $this->getEdgeBlockAutofill());
        $writer->writeBooleanValue('edgeBlockCompatibilityList', $this->getEdgeBlockCompatibilityList());
        $writer->writeBooleanValue('edgeBlockDeveloperTools', $this->getEdgeBlockDeveloperTools());
        $writer->writeBooleanValue('edgeBlocked', $this->getEdgeBlocked());
        $writer->writeBooleanValue('edgeBlockEditFavorites', $this->getEdgeBlockEditFavorites());
        $writer->writeBooleanValue('edgeBlockExtensions', $this->getEdgeBlockExtensions());
        $writer->writeBooleanValue('edgeBlockFullScreenMode', $this->getEdgeBlockFullScreenMode());
        $writer->writeBooleanValue('edgeBlockInPrivateBrowsing', $this->getEdgeBlockInPrivateBrowsing());
        $writer->writeBooleanValue('edgeBlockJavaScript', $this->getEdgeBlockJavaScript());
        $writer->writeBooleanValue('edgeBlockLiveTileDataCollection', $this->getEdgeBlockLiveTileDataCollection());
        $writer->writeBooleanValue('edgeBlockPasswordManager', $this->getEdgeBlockPasswordManager());
        $writer->writeBooleanValue('edgeBlockPopups', $this->getEdgeBlockPopups());
        $writer->writeBooleanValue('edgeBlockPrelaunch', $this->getEdgeBlockPrelaunch());
        $writer->writeBooleanValue('edgeBlockPrinting', $this->getEdgeBlockPrinting());
        $writer->writeBooleanValue('edgeBlockSavingHistory', $this->getEdgeBlockSavingHistory());
        $writer->writeBooleanValue('edgeBlockSearchEngineCustomization', $this->getEdgeBlockSearchEngineCustomization());
        $writer->writeBooleanValue('edgeBlockSearchSuggestions', $this->getEdgeBlockSearchSuggestions());
        $writer->writeBooleanValue('edgeBlockSendingDoNotTrackHeader', $this->getEdgeBlockSendingDoNotTrackHeader());
        $writer->writeBooleanValue('edgeBlockSendingIntranetTrafficToInternetExplorer', $this->getEdgeBlockSendingIntranetTrafficToInternetExplorer());
        $writer->writeBooleanValue('edgeBlockSideloadingExtensions', $this->getEdgeBlockSideloadingExtensions());
        $writer->writeBooleanValue('edgeBlockTabPreloading', $this->getEdgeBlockTabPreloading());
        $writer->writeBooleanValue('edgeBlockWebContentOnNewTabPage', $this->getEdgeBlockWebContentOnNewTabPage());
        $writer->writeBooleanValue('edgeClearBrowsingDataOnExit', $this->getEdgeClearBrowsingDataOnExit());
        $writer->writeEnumValue('edgeCookiePolicy', $this->getEdgeCookiePolicy());
        $writer->writeBooleanValue('edgeDisableFirstRunPage', $this->getEdgeDisableFirstRunPage());
        $writer->writeStringValue('edgeEnterpriseModeSiteListLocation', $this->getEdgeEnterpriseModeSiteListLocation());
        $writer->writeEnumValue('edgeFavoritesBarVisibility', $this->getEdgeFavoritesBarVisibility());
        $writer->writeStringValue('edgeFavoritesListLocation', $this->getEdgeFavoritesListLocation());
        $writer->writeStringValue('edgeFirstRunUrl', $this->getEdgeFirstRunUrl());
        $writer->writeObjectValue('edgeHomeButtonConfiguration', $this->getEdgeHomeButtonConfiguration());
        $writer->writeBooleanValue('edgeHomeButtonConfigurationEnabled', $this->getEdgeHomeButtonConfigurationEnabled());
        $writer->writeCollectionOfPrimitiveValues('edgeHomepageUrls', $this->getEdgeHomepageUrls());
        $writer->writeEnumValue('edgeKioskModeRestriction', $this->getEdgeKioskModeRestriction());
        $writer->writeIntegerValue('edgeKioskResetAfterIdleTimeInMinutes', $this->getEdgeKioskResetAfterIdleTimeInMinutes());
        $writer->writeStringValue('edgeNewTabPageURL', $this->getEdgeNewTabPageURL());
        $writer->writeEnumValue('edgeOpensWith', $this->getEdgeOpensWith());
        $writer->writeBooleanValue('edgePreventCertificateErrorOverride', $this->getEdgePreventCertificateErrorOverride());
        $writer->writeCollectionOfPrimitiveValues('edgeRequiredExtensionPackageFamilyNames', $this->getEdgeRequiredExtensionPackageFamilyNames());
        $writer->writeBooleanValue('edgeRequireSmartScreen', $this->getEdgeRequireSmartScreen());
        $writer->writeObjectValue('edgeSearchEngine', $this->getEdgeSearchEngine());
        $writer->writeBooleanValue('edgeSendIntranetTrafficToInternetExplorer', $this->getEdgeSendIntranetTrafficToInternetExplorer());
        $writer->writeEnumValue('edgeShowMessageWhenOpeningInternetExplorerSites', $this->getEdgeShowMessageWhenOpeningInternetExplorerSites());
        $writer->writeBooleanValue('edgeSyncFavoritesWithInternetExplorer', $this->getEdgeSyncFavoritesWithInternetExplorer());
        $writer->writeEnumValue('edgeTelemetryForMicrosoft365Analytics', $this->getEdgeTelemetryForMicrosoft365Analytics());
        $writer->writeBooleanValue('enableAutomaticRedeployment', $this->getEnableAutomaticRedeployment());
        $writer->writeIntegerValue('energySaverOnBatteryThresholdPercentage', $this->getEnergySaverOnBatteryThresholdPercentage());
        $writer->writeIntegerValue('energySaverPluggedInThresholdPercentage', $this->getEnergySaverPluggedInThresholdPercentage());
        $writer->writeStringValue('enterpriseCloudPrintDiscoveryEndPoint', $this->getEnterpriseCloudPrintDiscoveryEndPoint());
        $writer->writeIntegerValue('enterpriseCloudPrintDiscoveryMaxLimit', $this->getEnterpriseCloudPrintDiscoveryMaxLimit());
        $writer->writeStringValue('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $this->getEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier());
        $writer->writeStringValue('enterpriseCloudPrintOAuthAuthority', $this->getEnterpriseCloudPrintOAuthAuthority());
        $writer->writeStringValue('enterpriseCloudPrintOAuthClientIdentifier', $this->getEnterpriseCloudPrintOAuthClientIdentifier());
        $writer->writeStringValue('enterpriseCloudPrintResourceIdentifier', $this->getEnterpriseCloudPrintResourceIdentifier());
        $writer->writeBooleanValue('experienceBlockDeviceDiscovery', $this->getExperienceBlockDeviceDiscovery());
        $writer->writeBooleanValue('experienceBlockErrorDialogWhenNoSIM', $this->getExperienceBlockErrorDialogWhenNoSIM());
        $writer->writeBooleanValue('experienceBlockTaskSwitcher', $this->getExperienceBlockTaskSwitcher());
        $writer->writeEnumValue('experienceDoNotSyncBrowserSettings', $this->getExperienceDoNotSyncBrowserSettings());
        $writer->writeEnumValue('findMyFiles', $this->getFindMyFiles());
        $writer->writeBooleanValue('gameDvrBlocked', $this->getGameDvrBlocked());
        $writer->writeEnumValue('inkWorkspaceAccess', $this->getInkWorkspaceAccess());
        $writer->writeEnumValue('inkWorkspaceAccessState', $this->getInkWorkspaceAccessState());
        $writer->writeBooleanValue('inkWorkspaceBlockSuggestedApps', $this->getInkWorkspaceBlockSuggestedApps());
        $writer->writeBooleanValue('internetSharingBlocked', $this->getInternetSharingBlocked());
        $writer->writeBooleanValue('locationServicesBlocked', $this->getLocationServicesBlocked());
        $writer->writeEnumValue('lockScreenActivateAppsWithVoice', $this->getLockScreenActivateAppsWithVoice());
        $writer->writeBooleanValue('lockScreenAllowTimeoutConfiguration', $this->getLockScreenAllowTimeoutConfiguration());
        $writer->writeBooleanValue('lockScreenBlockActionCenterNotifications', $this->getLockScreenBlockActionCenterNotifications());
        $writer->writeBooleanValue('lockScreenBlockCortana', $this->getLockScreenBlockCortana());
        $writer->writeBooleanValue('lockScreenBlockToastNotifications', $this->getLockScreenBlockToastNotifications());
        $writer->writeIntegerValue('lockScreenTimeoutInSeconds', $this->getLockScreenTimeoutInSeconds());
        $writer->writeBooleanValue('logonBlockFastUserSwitching', $this->getLogonBlockFastUserSwitching());
        $writer->writeBooleanValue('messagingBlockMMS', $this->getMessagingBlockMMS());
        $writer->writeBooleanValue('messagingBlockRichCommunicationServices', $this->getMessagingBlockRichCommunicationServices());
        $writer->writeBooleanValue('messagingBlockSync', $this->getMessagingBlockSync());
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->getMicrosoftAccountBlocked());
        $writer->writeBooleanValue('microsoftAccountBlockSettingsSync', $this->getMicrosoftAccountBlockSettingsSync());
        $writer->writeEnumValue('microsoftAccountSignInAssistantSettings', $this->getMicrosoftAccountSignInAssistantSettings());
        $writer->writeBooleanValue('networkProxyApplySettingsDeviceWide', $this->getNetworkProxyApplySettingsDeviceWide());
        $writer->writeStringValue('networkProxyAutomaticConfigurationUrl', $this->getNetworkProxyAutomaticConfigurationUrl());
        $writer->writeBooleanValue('networkProxyDisableAutoDetect', $this->getNetworkProxyDisableAutoDetect());
        $writer->writeObjectValue('networkProxyServer', $this->getNetworkProxyServer());
        $writer->writeBooleanValue('nfcBlocked', $this->getNfcBlocked());
        $writer->writeBooleanValue('oneDriveDisableFileSync', $this->getOneDriveDisableFileSync());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumAgeInDays', $this->getPasswordMinimumAgeInDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('passwordRequireWhenResumeFromIdleState', $this->getPasswordRequireWhenResumeFromIdleState());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeStringValue('personalizationDesktopImageUrl', $this->getPersonalizationDesktopImageUrl());
        $writer->writeStringValue('personalizationLockScreenImageUrl', $this->getPersonalizationLockScreenImageUrl());
        $writer->writeEnumValue('powerButtonActionOnBattery', $this->getPowerButtonActionOnBattery());
        $writer->writeEnumValue('powerButtonActionPluggedIn', $this->getPowerButtonActionPluggedIn());
        $writer->writeEnumValue('powerHybridSleepOnBattery', $this->getPowerHybridSleepOnBattery());
        $writer->writeEnumValue('powerHybridSleepPluggedIn', $this->getPowerHybridSleepPluggedIn());
        $writer->writeEnumValue('powerLidCloseActionOnBattery', $this->getPowerLidCloseActionOnBattery());
        $writer->writeEnumValue('powerLidCloseActionPluggedIn', $this->getPowerLidCloseActionPluggedIn());
        $writer->writeEnumValue('powerSleepButtonActionOnBattery', $this->getPowerSleepButtonActionOnBattery());
        $writer->writeEnumValue('powerSleepButtonActionPluggedIn', $this->getPowerSleepButtonActionPluggedIn());
        $writer->writeBooleanValue('printerBlockAddition', $this->getPrinterBlockAddition());
        $writer->writeStringValue('printerDefaultName', $this->getPrinterDefaultName());
        $writer->writeCollectionOfPrimitiveValues('printerNames', $this->getPrinterNames());
        $writer->writeCollectionOfObjectValues('privacyAccessControls', $this->getPrivacyAccessControls());
        $writer->writeEnumValue('privacyAdvertisingId', $this->getPrivacyAdvertisingId());
        $writer->writeBooleanValue('privacyAutoAcceptPairingAndConsentPrompts', $this->getPrivacyAutoAcceptPairingAndConsentPrompts());
        $writer->writeBooleanValue('privacyBlockActivityFeed', $this->getPrivacyBlockActivityFeed());
        $writer->writeBooleanValue('privacyBlockInputPersonalization', $this->getPrivacyBlockInputPersonalization());
        $writer->writeBooleanValue('privacyBlockPublishUserActivities', $this->getPrivacyBlockPublishUserActivities());
        $writer->writeBooleanValue('privacyDisableLaunchExperience', $this->getPrivacyDisableLaunchExperience());
        $writer->writeBooleanValue('resetProtectionModeBlocked', $this->getResetProtectionModeBlocked());
        $writer->writeEnumValue('safeSearchFilter', $this->getSafeSearchFilter());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('searchBlockDiacritics', $this->getSearchBlockDiacritics());
        $writer->writeBooleanValue('searchBlockWebResults', $this->getSearchBlockWebResults());
        $writer->writeBooleanValue('searchDisableAutoLanguageDetection', $this->getSearchDisableAutoLanguageDetection());
        $writer->writeBooleanValue('searchDisableIndexerBackoff', $this->getSearchDisableIndexerBackoff());
        $writer->writeBooleanValue('searchDisableIndexingEncryptedItems', $this->getSearchDisableIndexingEncryptedItems());
        $writer->writeBooleanValue('searchDisableIndexingRemovableDrive', $this->getSearchDisableIndexingRemovableDrive());
        $writer->writeBooleanValue('searchDisableLocation', $this->getSearchDisableLocation());
        $writer->writeBooleanValue('searchDisableUseLocation', $this->getSearchDisableUseLocation());
        $writer->writeBooleanValue('searchEnableAutomaticIndexSizeManangement', $this->getSearchEnableAutomaticIndexSizeManangement());
        $writer->writeBooleanValue('searchEnableRemoteQueries', $this->getSearchEnableRemoteQueries());
        $writer->writeBooleanValue('securityBlockAzureADJoinedDevicesAutoEncryption', $this->getSecurityBlockAzureADJoinedDevicesAutoEncryption());
        $writer->writeBooleanValue('settingsBlockAccountsPage', $this->getSettingsBlockAccountsPage());
        $writer->writeBooleanValue('settingsBlockAddProvisioningPackage', $this->getSettingsBlockAddProvisioningPackage());
        $writer->writeBooleanValue('settingsBlockAppsPage', $this->getSettingsBlockAppsPage());
        $writer->writeBooleanValue('settingsBlockChangeLanguage', $this->getSettingsBlockChangeLanguage());
        $writer->writeBooleanValue('settingsBlockChangePowerSleep', $this->getSettingsBlockChangePowerSleep());
        $writer->writeBooleanValue('settingsBlockChangeRegion', $this->getSettingsBlockChangeRegion());
        $writer->writeBooleanValue('settingsBlockChangeSystemTime', $this->getSettingsBlockChangeSystemTime());
        $writer->writeBooleanValue('settingsBlockDevicesPage', $this->getSettingsBlockDevicesPage());
        $writer->writeBooleanValue('settingsBlockEaseOfAccessPage', $this->getSettingsBlockEaseOfAccessPage());
        $writer->writeBooleanValue('settingsBlockEditDeviceName', $this->getSettingsBlockEditDeviceName());
        $writer->writeBooleanValue('settingsBlockGamingPage', $this->getSettingsBlockGamingPage());
        $writer->writeBooleanValue('settingsBlockNetworkInternetPage', $this->getSettingsBlockNetworkInternetPage());
        $writer->writeBooleanValue('settingsBlockPersonalizationPage', $this->getSettingsBlockPersonalizationPage());
        $writer->writeBooleanValue('settingsBlockPrivacyPage', $this->getSettingsBlockPrivacyPage());
        $writer->writeBooleanValue('settingsBlockRemoveProvisioningPackage', $this->getSettingsBlockRemoveProvisioningPackage());
        $writer->writeBooleanValue('settingsBlockSettingsApp', $this->getSettingsBlockSettingsApp());
        $writer->writeBooleanValue('settingsBlockSystemPage', $this->getSettingsBlockSystemPage());
        $writer->writeBooleanValue('settingsBlockTimeLanguagePage', $this->getSettingsBlockTimeLanguagePage());
        $writer->writeBooleanValue('settingsBlockUpdateSecurityPage', $this->getSettingsBlockUpdateSecurityPage());
        $writer->writeBooleanValue('sharedUserAppDataAllowed', $this->getSharedUserAppDataAllowed());
        $writer->writeEnumValue('smartScreenAppInstallControl', $this->getSmartScreenAppInstallControl());
        $writer->writeBooleanValue('smartScreenBlockPromptOverride', $this->getSmartScreenBlockPromptOverride());
        $writer->writeBooleanValue('smartScreenBlockPromptOverrideForFiles', $this->getSmartScreenBlockPromptOverrideForFiles());
        $writer->writeBooleanValue('smartScreenEnableAppInstallControl', $this->getSmartScreenEnableAppInstallControl());
        $writer->writeBooleanValue('startBlockUnpinningAppsFromTaskbar', $this->getStartBlockUnpinningAppsFromTaskbar());
        $writer->writeEnumValue('startMenuAppListVisibility', $this->getStartMenuAppListVisibility());
        $writer->writeBooleanValue('startMenuHideChangeAccountSettings', $this->getStartMenuHideChangeAccountSettings());
        $writer->writeBooleanValue('startMenuHideFrequentlyUsedApps', $this->getStartMenuHideFrequentlyUsedApps());
        $writer->writeBooleanValue('startMenuHideHibernate', $this->getStartMenuHideHibernate());
        $writer->writeBooleanValue('startMenuHideLock', $this->getStartMenuHideLock());
        $writer->writeBooleanValue('startMenuHidePowerButton', $this->getStartMenuHidePowerButton());
        $writer->writeBooleanValue('startMenuHideRecentJumpLists', $this->getStartMenuHideRecentJumpLists());
        $writer->writeBooleanValue('startMenuHideRecentlyAddedApps', $this->getStartMenuHideRecentlyAddedApps());
        $writer->writeBooleanValue('startMenuHideRestartOptions', $this->getStartMenuHideRestartOptions());
        $writer->writeBooleanValue('startMenuHideShutDown', $this->getStartMenuHideShutDown());
        $writer->writeBooleanValue('startMenuHideSignOut', $this->getStartMenuHideSignOut());
        $writer->writeBooleanValue('startMenuHideSleep', $this->getStartMenuHideSleep());
        $writer->writeBooleanValue('startMenuHideSwitchAccount', $this->getStartMenuHideSwitchAccount());
        $writer->writeBooleanValue('startMenuHideUserTile', $this->getStartMenuHideUserTile());
        $writer->writeBinaryContent('startMenuLayoutEdgeAssetsXml', $this->getStartMenuLayoutEdgeAssetsXml());
        $writer->writeBinaryContent('startMenuLayoutXml', $this->getStartMenuLayoutXml());
        $writer->writeEnumValue('startMenuMode', $this->getStartMenuMode());
        $writer->writeEnumValue('startMenuPinnedFolderDocuments', $this->getStartMenuPinnedFolderDocuments());
        $writer->writeEnumValue('startMenuPinnedFolderDownloads', $this->getStartMenuPinnedFolderDownloads());
        $writer->writeEnumValue('startMenuPinnedFolderFileExplorer', $this->getStartMenuPinnedFolderFileExplorer());
        $writer->writeEnumValue('startMenuPinnedFolderHomeGroup', $this->getStartMenuPinnedFolderHomeGroup());
        $writer->writeEnumValue('startMenuPinnedFolderMusic', $this->getStartMenuPinnedFolderMusic());
        $writer->writeEnumValue('startMenuPinnedFolderNetwork', $this->getStartMenuPinnedFolderNetwork());
        $writer->writeEnumValue('startMenuPinnedFolderPersonalFolder', $this->getStartMenuPinnedFolderPersonalFolder());
        $writer->writeEnumValue('startMenuPinnedFolderPictures', $this->getStartMenuPinnedFolderPictures());
        $writer->writeEnumValue('startMenuPinnedFolderSettings', $this->getStartMenuPinnedFolderSettings());
        $writer->writeEnumValue('startMenuPinnedFolderVideos', $this->getStartMenuPinnedFolderVideos());
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->getStorageBlockRemovableStorage());
        $writer->writeBooleanValue('storageRequireMobileDeviceEncryption', $this->getStorageRequireMobileDeviceEncryption());
        $writer->writeBooleanValue('storageRestrictAppDataToSystemVolume', $this->getStorageRestrictAppDataToSystemVolume());
        $writer->writeBooleanValue('storageRestrictAppInstallToSystemVolume', $this->getStorageRestrictAppInstallToSystemVolume());
        $writer->writeStringValue('systemTelemetryProxyServer', $this->getSystemTelemetryProxyServer());
        $writer->writeBooleanValue('taskManagerBlockEndTask', $this->getTaskManagerBlockEndTask());
        $writer->writeBooleanValue('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $this->getTenantLockdownRequireNetworkDuringOutOfBoxExperience());
        $writer->writeBooleanValue('uninstallBuiltInApps', $this->getUninstallBuiltInApps());
        $writer->writeBooleanValue('usbBlocked', $this->getUsbBlocked());
        $writer->writeBooleanValue('voiceRecordingBlocked', $this->getVoiceRecordingBlocked());
        $writer->writeBooleanValue('webRtcBlockLocalhostIpAddress', $this->getWebRtcBlockLocalhostIpAddress());
        $writer->writeBooleanValue('wiFiBlockAutomaticConnectHotspots', $this->getWiFiBlockAutomaticConnectHotspots());
        $writer->writeBooleanValue('wiFiBlocked', $this->getWiFiBlocked());
        $writer->writeBooleanValue('wiFiBlockManualConfiguration', $this->getWiFiBlockManualConfiguration());
        $writer->writeIntegerValue('wiFiScanInterval', $this->getWiFiScanInterval());
        $writer->writeObjectValue('windows10AppsForceUpdateSchedule', $this->getWindows10AppsForceUpdateSchedule());
        $writer->writeBooleanValue('windowsSpotlightBlockConsumerSpecificFeatures', $this->getWindowsSpotlightBlockConsumerSpecificFeatures());
        $writer->writeBooleanValue('windowsSpotlightBlocked', $this->getWindowsSpotlightBlocked());
        $writer->writeBooleanValue('windowsSpotlightBlockOnActionCenter', $this->getWindowsSpotlightBlockOnActionCenter());
        $writer->writeBooleanValue('windowsSpotlightBlockTailoredExperiences', $this->getWindowsSpotlightBlockTailoredExperiences());
        $writer->writeBooleanValue('windowsSpotlightBlockThirdPartyNotifications', $this->getWindowsSpotlightBlockThirdPartyNotifications());
        $writer->writeBooleanValue('windowsSpotlightBlockWelcomeExperience', $this->getWindowsSpotlightBlockWelcomeExperience());
        $writer->writeBooleanValue('windowsSpotlightBlockWindowsTips', $this->getWindowsSpotlightBlockWindowsTips());
        $writer->writeEnumValue('windowsSpotlightConfigureOnLockScreen', $this->getWindowsSpotlightConfigureOnLockScreen());
        $writer->writeBooleanValue('windowsStoreBlockAutoUpdate', $this->getWindowsStoreBlockAutoUpdate());
        $writer->writeBooleanValue('windowsStoreBlocked', $this->getWindowsStoreBlocked());
        $writer->writeBooleanValue('windowsStoreEnablePrivateStoreOnly', $this->getWindowsStoreEnablePrivateStoreOnly());
        $writer->writeBooleanValue('wirelessDisplayBlockProjectionToThisDevice', $this->getWirelessDisplayBlockProjectionToThisDevice());
        $writer->writeBooleanValue('wirelessDisplayBlockUserInputFromReceiver', $this->getWirelessDisplayBlockUserInputFromReceiver());
        $writer->writeBooleanValue('wirelessDisplayRequirePinForPairing', $this->getWirelessDisplayRequirePinForPairing());
    }

    /**
     * Sets the accountsBlockAddingNonMicrosoftAccountEmail property value. Indicates whether or not to Block the user from adding email accounts to the device that are not associated with a Microsoft account.
     *  @param bool|null $value Value to set for the accountsBlockAddingNonMicrosoftAccountEmail property.
    */
    public function setAccountsBlockAddingNonMicrosoftAccountEmail(?bool $value): void {
        $this->getBackingStore()->set('accountsBlockAddingNonMicrosoftAccountEmail', $value);
    }

    /**
     * Sets the activateAppsWithVoice property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the activateAppsWithVoice property.
    */
    public function setActivateAppsWithVoice(?Enablement $value): void {
        $this->getBackingStore()->set('activateAppsWithVoice', $value);
    }

    /**
     * Sets the antiTheftModeBlocked property value. Indicates whether or not to block the user from selecting an AntiTheft mode preference (Windows 10 Mobile only).
     *  @param bool|null $value Value to set for the antiTheftModeBlocked property.
    */
    public function setAntiTheftModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('antiTheftModeBlocked', $value);
    }

    /**
     * Sets the appManagementMSIAllowUserControlOverInstall property value. This policy setting permits users to change installation options that typically are available only to system administrators.
     *  @param bool|null $value Value to set for the appManagementMSIAllowUserControlOverInstall property.
    */
    public function setAppManagementMSIAllowUserControlOverInstall(?bool $value): void {
        $this->getBackingStore()->set('appManagementMSIAllowUserControlOverInstall', $value);
    }

    /**
     * Sets the appManagementMSIAlwaysInstallWithElevatedPrivileges property value. This policy setting directs Windows Installer to use elevated permissions when it installs any program on the system.
     *  @param bool|null $value Value to set for the appManagementMSIAlwaysInstallWithElevatedPrivileges property.
    */
    public function setAppManagementMSIAlwaysInstallWithElevatedPrivileges(?bool $value): void {
        $this->getBackingStore()->set('appManagementMSIAlwaysInstallWithElevatedPrivileges', $value);
    }

    /**
     * Sets the appManagementPackageFamilyNamesToLaunchAfterLogOn property value. List of semi-colon delimited Package Family Names of Windows apps. Listed Windows apps are to be launched after logon.​
     *  @param array<string>|null $value Value to set for the appManagementPackageFamilyNamesToLaunchAfterLogOn property.
    */
    public function setAppManagementPackageFamilyNamesToLaunchAfterLogOn(?array $value): void {
        $this->getBackingStore()->set('appManagementPackageFamilyNamesToLaunchAfterLogOn', $value);
    }

    /**
     * Sets the appsAllowTrustedAppsSideloading property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the appsAllowTrustedAppsSideloading property.
    */
    public function setAppsAllowTrustedAppsSideloading(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('appsAllowTrustedAppsSideloading', $value);
    }

    /**
     * Sets the appsBlockWindowsStoreOriginatedApps property value. Indicates whether or not to disable the launch of all apps from Windows Store that came pre-installed or were downloaded.
     *  @param bool|null $value Value to set for the appsBlockWindowsStoreOriginatedApps property.
    */
    public function setAppsBlockWindowsStoreOriginatedApps(?bool $value): void {
        $this->getBackingStore()->set('appsBlockWindowsStoreOriginatedApps', $value);
    }

    /**
     * Sets the authenticationAllowSecondaryDevice property value. Allows secondary authentication devices to work with Windows.
     *  @param bool|null $value Value to set for the authenticationAllowSecondaryDevice property.
    */
    public function setAuthenticationAllowSecondaryDevice(?bool $value): void {
        $this->getBackingStore()->set('authenticationAllowSecondaryDevice', $value);
    }

    /**
     * Sets the authenticationPreferredAzureADTenantDomainName property value. Specifies the preferred domain among available domains in the Azure AD tenant.
     *  @param string|null $value Value to set for the authenticationPreferredAzureADTenantDomainName property.
    */
    public function setAuthenticationPreferredAzureADTenantDomainName(?string $value): void {
        $this->getBackingStore()->set('authenticationPreferredAzureADTenantDomainName', $value);
    }

    /**
     * Sets the authenticationWebSignIn property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the authenticationWebSignIn property.
    */
    public function setAuthenticationWebSignIn(?Enablement $value): void {
        $this->getBackingStore()->set('authenticationWebSignIn', $value);
    }

    /**
     * Sets the bluetoothAllowedServices property value. Specify a list of allowed Bluetooth services and profiles in hex formatted strings.
     *  @param array<string>|null $value Value to set for the bluetoothAllowedServices property.
    */
    public function setBluetoothAllowedServices(?array $value): void {
        $this->getBackingStore()->set('bluetoothAllowedServices', $value);
    }

    /**
     * Sets the bluetoothBlockAdvertising property value. Whether or not to Block the user from using bluetooth advertising.
     *  @param bool|null $value Value to set for the bluetoothBlockAdvertising property.
    */
    public function setBluetoothBlockAdvertising(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockAdvertising', $value);
    }

    /**
     * Sets the bluetoothBlockDiscoverableMode property value. Whether or not to Block the user from using bluetooth discoverable mode.
     *  @param bool|null $value Value to set for the bluetoothBlockDiscoverableMode property.
    */
    public function setBluetoothBlockDiscoverableMode(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockDiscoverableMode', $value);
    }

    /**
     * Sets the bluetoothBlocked property value. Whether or not to Block the user from using bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlocked', $value);
    }

    /**
     * Sets the bluetoothBlockPrePairing property value. Whether or not to block specific bundled Bluetooth peripherals to automatically pair with the host device.
     *  @param bool|null $value Value to set for the bluetoothBlockPrePairing property.
    */
    public function setBluetoothBlockPrePairing(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockPrePairing', $value);
    }

    /**
     * Sets the bluetoothBlockPromptedProximalConnections property value. Whether or not to block the users from using Swift Pair and other proximity based scenarios.
     *  @param bool|null $value Value to set for the bluetoothBlockPromptedProximalConnections property.
    */
    public function setBluetoothBlockPromptedProximalConnections(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlockPromptedProximalConnections', $value);
    }

    /**
     * Sets the cameraBlocked property value. Whether or not to Block the user from accessing the camera of the device.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockDataWhenRoaming property value. Whether or not to Block the user from using data over cellular while roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataWhenRoaming property.
    */
    public function setCellularBlockDataWhenRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockDataWhenRoaming', $value);
    }

    /**
     * Sets the cellularBlockVpn property value. Whether or not to Block the user from using VPN over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpn property.
    */
    public function setCellularBlockVpn(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVpn', $value);
    }

    /**
     * Sets the cellularBlockVpnWhenRoaming property value. Whether or not to Block the user from using VPN when roaming over cellular.
     *  @param bool|null $value Value to set for the cellularBlockVpnWhenRoaming property.
    */
    public function setCellularBlockVpnWhenRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVpnWhenRoaming', $value);
    }

    /**
     * Sets the cellularData property value. Possible values of the ConfigurationUsage list.
     *  @param ConfigurationUsage|null $value Value to set for the cellularData property.
    */
    public function setCellularData(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('cellularData', $value);
    }

    /**
     * Sets the certificatesBlockManualRootCertificateInstallation property value. Whether or not to Block the user from doing manual root certificate installation.
     *  @param bool|null $value Value to set for the certificatesBlockManualRootCertificateInstallation property.
    */
    public function setCertificatesBlockManualRootCertificateInstallation(?bool $value): void {
        $this->getBackingStore()->set('certificatesBlockManualRootCertificateInstallation', $value);
    }

    /**
     * Sets the configureTimeZone property value. Specifies the time zone to be applied to the device. This is the standard Windows name for the target time zone.
     *  @param string|null $value Value to set for the configureTimeZone property.
    */
    public function setConfigureTimeZone(?string $value): void {
        $this->getBackingStore()->set('configureTimeZone', $value);
    }

    /**
     * Sets the connectedDevicesServiceBlocked property value. Whether or not to block Connected Devices Service which enables discovery and connection to other devices, remote messaging, remote app sessions and other cross-device experiences.
     *  @param bool|null $value Value to set for the connectedDevicesServiceBlocked property.
    */
    public function setConnectedDevicesServiceBlocked(?bool $value): void {
        $this->getBackingStore()->set('connectedDevicesServiceBlocked', $value);
    }

    /**
     * Sets the copyPasteBlocked property value. Whether or not to Block the user from using copy paste.
     *  @param bool|null $value Value to set for the copyPasteBlocked property.
    */
    public function setCopyPasteBlocked(?bool $value): void {
        $this->getBackingStore()->set('copyPasteBlocked', $value);
    }

    /**
     * Sets the cortanaBlocked property value. Whether or not to Block the user from using Cortana.
     *  @param bool|null $value Value to set for the cortanaBlocked property.
    */
    public function setCortanaBlocked(?bool $value): void {
        $this->getBackingStore()->set('cortanaBlocked', $value);
    }

    /**
     * Sets the cryptographyAllowFipsAlgorithmPolicy property value. Specify whether to allow or disallow the Federal Information Processing Standard (FIPS) policy.
     *  @param bool|null $value Value to set for the cryptographyAllowFipsAlgorithmPolicy property.
    */
    public function setCryptographyAllowFipsAlgorithmPolicy(?bool $value): void {
        $this->getBackingStore()->set('cryptographyAllowFipsAlgorithmPolicy', $value);
    }

    /**
     * Sets the dataProtectionBlockDirectMemoryAccess property value. This policy setting allows you to block direct memory access (DMA) for all hot pluggable PCI downstream ports until a user logs into Windows.
     *  @param bool|null $value Value to set for the dataProtectionBlockDirectMemoryAccess property.
    */
    public function setDataProtectionBlockDirectMemoryAccess(?bool $value): void {
        $this->getBackingStore()->set('dataProtectionBlockDirectMemoryAccess', $value);
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Whether or not to block end user access to Defender.
     *  @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value): void {
        $this->getBackingStore()->set('defenderBlockEndUserAccess', $value);
    }

    /**
     * Sets the defenderBlockOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     *  @param bool|null $value Value to set for the defenderBlockOnAccessProtection property.
    */
    public function setDefenderBlockOnAccessProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderBlockOnAccessProtection', $value);
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Possible values of Cloud Block Level
     *  @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value): void {
        $this->getBackingStore()->set('defenderCloudBlockLevel', $value);
    }

    /**
     * Sets the defenderCloudExtendedTimeout property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     *  @param int|null $value Value to set for the defenderCloudExtendedTimeout property.
    */
    public function setDefenderCloudExtendedTimeout(?int $value): void {
        $this->getBackingStore()->set('defenderCloudExtendedTimeout', $value);
    }

    /**
     * Sets the defenderCloudExtendedTimeoutInSeconds property value. Timeout extension for file scanning by the cloud. Valid values 0 to 50
     *  @param int|null $value Value to set for the defenderCloudExtendedTimeoutInSeconds property.
    */
    public function setDefenderCloudExtendedTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('defenderCloudExtendedTimeoutInSeconds', $value);
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Number of days before deleting quarantined malware. Valid values 0 to 90
     *  @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value): void {
        $this->getBackingStore()->set('defenderDaysBeforeDeletingQuarantinedMalware', $value);
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Gets or sets Defender’s actions to take on detected Malware per threat level.
     *  @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value): void {
        $this->getBackingStore()->set('defenderDetectedMalwareActions', $value);
    }

    /**
     * Sets the defenderDisableCatchupFullScan property value. When blocked, catch-up scans for scheduled full scans will be turned off.
     *  @param bool|null $value Value to set for the defenderDisableCatchupFullScan property.
    */
    public function setDefenderDisableCatchupFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableCatchupFullScan', $value);
    }

    /**
     * Sets the defenderDisableCatchupQuickScan property value. When blocked, catch-up scans for scheduled quick scans will be turned off.
     *  @param bool|null $value Value to set for the defenderDisableCatchupQuickScan property.
    */
    public function setDefenderDisableCatchupQuickScan(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableCatchupQuickScan', $value);
    }

    /**
     * Sets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFileExtensionsToExclude property.
    */
    public function setDefenderFileExtensionsToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFileExtensionsToExclude', $value);
    }

    /**
     * Sets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderFilesAndFoldersToExclude property.
    */
    public function setDefenderFilesAndFoldersToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFilesAndFoldersToExclude', $value);
    }

    /**
     * Sets the defenderMonitorFileActivity property value. Possible values for monitoring file activity.
     *  @param DefenderMonitorFileActivity|null $value Value to set for the defenderMonitorFileActivity property.
    */
    public function setDefenderMonitorFileActivity(?DefenderMonitorFileActivity $value): void {
        $this->getBackingStore()->set('defenderMonitorFileActivity', $value);
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppAction property value. Gets or sets Defender’s action to take on Potentially Unwanted Application (PUA), which includes software with behaviors of ad-injection, software bundling, persistent solicitation for payment or subscription, etc. Defender alerts user when PUA is being downloaded or attempts to install itself. Added in Windows 10 for desktop. Possible values are: deviceDefault, block, audit.
     *  @param DefenderPotentiallyUnwantedAppAction|null $value Value to set for the defenderPotentiallyUnwantedAppAction property.
    */
    public function setDefenderPotentiallyUnwantedAppAction(?DefenderPotentiallyUnwantedAppAction $value): void {
        $this->getBackingStore()->set('defenderPotentiallyUnwantedAppAction', $value);
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppActionSetting property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderPotentiallyUnwantedAppActionSetting property.
    */
    public function setDefenderPotentiallyUnwantedAppActionSetting(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderPotentiallyUnwantedAppActionSetting', $value);
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderProcessesToExclude', $value);
    }

    /**
     * Sets the defenderPromptForSampleSubmission property value. Possible values for prompting user for samples submission.
     *  @param DefenderPromptForSampleSubmission|null $value Value to set for the defenderPromptForSampleSubmission property.
    */
    public function setDefenderPromptForSampleSubmission(?DefenderPromptForSampleSubmission $value): void {
        $this->getBackingStore()->set('defenderPromptForSampleSubmission', $value);
    }

    /**
     * Sets the defenderRequireBehaviorMonitoring property value. Indicates whether or not to require behavior monitoring.
     *  @param bool|null $value Value to set for the defenderRequireBehaviorMonitoring property.
    */
    public function setDefenderRequireBehaviorMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireBehaviorMonitoring', $value);
    }

    /**
     * Sets the defenderRequireCloudProtection property value. Indicates whether or not to require cloud protection.
     *  @param bool|null $value Value to set for the defenderRequireCloudProtection property.
    */
    public function setDefenderRequireCloudProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireCloudProtection', $value);
    }

    /**
     * Sets the defenderRequireNetworkInspectionSystem property value. Indicates whether or not to require network inspection system.
     *  @param bool|null $value Value to set for the defenderRequireNetworkInspectionSystem property.
    */
    public function setDefenderRequireNetworkInspectionSystem(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireNetworkInspectionSystem', $value);
    }

    /**
     * Sets the defenderRequireRealTimeMonitoring property value. Indicates whether or not to require real time monitoring.
     *  @param bool|null $value Value to set for the defenderRequireRealTimeMonitoring property.
    */
    public function setDefenderRequireRealTimeMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderRequireRealTimeMonitoring', $value);
    }

    /**
     * Sets the defenderScanArchiveFiles property value. Indicates whether or not to scan archive files.
     *  @param bool|null $value Value to set for the defenderScanArchiveFiles property.
    */
    public function setDefenderScanArchiveFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderScanArchiveFiles', $value);
    }

    /**
     * Sets the defenderScanDownloads property value. Indicates whether or not to scan downloads.
     *  @param bool|null $value Value to set for the defenderScanDownloads property.
    */
    public function setDefenderScanDownloads(?bool $value): void {
        $this->getBackingStore()->set('defenderScanDownloads', $value);
    }

    /**
     * Sets the defenderScanIncomingMail property value. Indicates whether or not to scan incoming mail messages.
     *  @param bool|null $value Value to set for the defenderScanIncomingMail property.
    */
    public function setDefenderScanIncomingMail(?bool $value): void {
        $this->getBackingStore()->set('defenderScanIncomingMail', $value);
    }

    /**
     * Sets the defenderScanMappedNetworkDrivesDuringFullScan property value. Indicates whether or not to scan mapped network drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderScanMappedNetworkDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderScanMappedNetworkDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderScanMaxCpu property value. Max CPU usage percentage during scan. Valid values 0 to 100
     *  @param int|null $value Value to set for the defenderScanMaxCpu property.
    */
    public function setDefenderScanMaxCpu(?int $value): void {
        $this->getBackingStore()->set('defenderScanMaxCpu', $value);
    }

    /**
     * Sets the defenderScanNetworkFiles property value. Indicates whether or not to scan files opened from a network folder.
     *  @param bool|null $value Value to set for the defenderScanNetworkFiles property.
    */
    public function setDefenderScanNetworkFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderScanNetworkFiles', $value);
    }

    /**
     * Sets the defenderScanRemovableDrivesDuringFullScan property value. Indicates whether or not to scan removable drives during full scan.
     *  @param bool|null $value Value to set for the defenderScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderScanRemovableDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderScanRemovableDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderScanScriptsLoadedInInternetExplorer property value. Indicates whether or not to scan scripts loaded in Internet Explorer browser.
     *  @param bool|null $value Value to set for the defenderScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderScanScriptsLoadedInInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('defenderScanScriptsLoadedInInternetExplorer', $value);
    }

    /**
     * Sets the defenderScanType property value. Possible values for system scan type.
     *  @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value): void {
        $this->getBackingStore()->set('defenderScanType', $value);
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. The time to perform a daily quick scan.
     *  @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledQuickScanTime', $value);
    }

    /**
     * Sets the defenderScheduledScanTime property value. The defender time for the system scan.
     *  @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledScanTime', $value);
    }

    /**
     * Sets the defenderScheduleScanEnableLowCpuPriority property value. When enabled, low CPU priority will be used during scheduled scans.
     *  @param bool|null $value Value to set for the defenderScheduleScanEnableLowCpuPriority property.
    */
    public function setDefenderScheduleScanEnableLowCpuPriority(?bool $value): void {
        $this->getBackingStore()->set('defenderScheduleScanEnableLowCpuPriority', $value);
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. The signature update interval in hours. Specify 0 not to check. Valid values 0 to 24
     *  @param int|null $value Value to set for the defenderSignatureUpdateIntervalInHours property.
    */
    public function setDefenderSignatureUpdateIntervalInHours(?int $value): void {
        $this->getBackingStore()->set('defenderSignatureUpdateIntervalInHours', $value);
    }

    /**
     * Sets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     *  @param DefenderSubmitSamplesConsentType|null $value Value to set for the defenderSubmitSamplesConsentType property.
    */
    public function setDefenderSubmitSamplesConsentType(?DefenderSubmitSamplesConsentType $value): void {
        $this->getBackingStore()->set('defenderSubmitSamplesConsentType', $value);
    }

    /**
     * Sets the defenderSystemScanSchedule property value. Possible values for a weekly schedule.
     *  @param WeeklySchedule|null $value Value to set for the defenderSystemScanSchedule property.
    */
    public function setDefenderSystemScanSchedule(?WeeklySchedule $value): void {
        $this->getBackingStore()->set('defenderSystemScanSchedule', $value);
    }

    /**
     * Sets the developerUnlockSetting property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the developerUnlockSetting property.
    */
    public function setDeveloperUnlockSetting(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('developerUnlockSetting', $value);
    }

    /**
     * Sets the deviceManagementBlockFactoryResetOnMobile property value. Indicates whether or not to Block the user from resetting their phone.
     *  @param bool|null $value Value to set for the deviceManagementBlockFactoryResetOnMobile property.
    */
    public function setDeviceManagementBlockFactoryResetOnMobile(?bool $value): void {
        $this->getBackingStore()->set('deviceManagementBlockFactoryResetOnMobile', $value);
    }

    /**
     * Sets the deviceManagementBlockManualUnenroll property value. Indicates whether or not to Block the user from doing manual un-enrollment from device management.
     *  @param bool|null $value Value to set for the deviceManagementBlockManualUnenroll property.
    */
    public function setDeviceManagementBlockManualUnenroll(?bool $value): void {
        $this->getBackingStore()->set('deviceManagementBlockManualUnenroll', $value);
    }

    /**
     * Sets the diagnosticsDataSubmissionMode property value. Allow the device to send diagnostic and usage telemetry data, such as Watson.
     *  @param DiagnosticDataSubmissionMode|null $value Value to set for the diagnosticsDataSubmissionMode property.
    */
    public function setDiagnosticsDataSubmissionMode(?DiagnosticDataSubmissionMode $value): void {
        $this->getBackingStore()->set('diagnosticsDataSubmissionMode', $value);
    }

    /**
     * Sets the displayAppListWithGdiDPIScalingTurnedOff property value. List of legacy applications that have GDI DPI Scaling turned off.
     *  @param array<string>|null $value Value to set for the displayAppListWithGdiDPIScalingTurnedOff property.
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOff(?array $value): void {
        $this->getBackingStore()->set('displayAppListWithGdiDPIScalingTurnedOff', $value);
    }

    /**
     * Sets the displayAppListWithGdiDPIScalingTurnedOn property value. List of legacy applications that have GDI DPI Scaling turned on.
     *  @param array<string>|null $value Value to set for the displayAppListWithGdiDPIScalingTurnedOn property.
    */
    public function setDisplayAppListWithGdiDPIScalingTurnedOn(?array $value): void {
        $this->getBackingStore()->set('displayAppListWithGdiDPIScalingTurnedOn', $value);
    }

    /**
     * Sets the edgeAllowStartPagesModification property value. Allow users to change Start pages on Edge. Use the EdgeHomepageUrls to specify the Start pages that the user would see by default when they open Edge.
     *  @param bool|null $value Value to set for the edgeAllowStartPagesModification property.
    */
    public function setEdgeAllowStartPagesModification(?bool $value): void {
        $this->getBackingStore()->set('edgeAllowStartPagesModification', $value);
    }

    /**
     * Sets the edgeBlockAccessToAboutFlags property value. Indicates whether or not to prevent access to about flags on Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockAccessToAboutFlags property.
    */
    public function setEdgeBlockAccessToAboutFlags(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAccessToAboutFlags', $value);
    }

    /**
     * Sets the edgeBlockAddressBarDropdown property value. Block the address bar dropdown functionality in Microsoft Edge. Disable this settings to minimize network connections from Microsoft Edge to Microsoft services.
     *  @param bool|null $value Value to set for the edgeBlockAddressBarDropdown property.
    */
    public function setEdgeBlockAddressBarDropdown(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAddressBarDropdown', $value);
    }

    /**
     * Sets the edgeBlockAutofill property value. Indicates whether or not to block auto fill.
     *  @param bool|null $value Value to set for the edgeBlockAutofill property.
    */
    public function setEdgeBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockAutofill', $value);
    }

    /**
     * Sets the edgeBlockCompatibilityList property value. Block Microsoft compatibility list in Microsoft Edge. This list from Microsoft helps Edge properly display sites with known compatibility issues.
     *  @param bool|null $value Value to set for the edgeBlockCompatibilityList property.
    */
    public function setEdgeBlockCompatibilityList(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockCompatibilityList', $value);
    }

    /**
     * Sets the edgeBlockDeveloperTools property value. Indicates whether or not to block developer tools in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockDeveloperTools property.
    */
    public function setEdgeBlockDeveloperTools(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockDeveloperTools', $value);
    }

    /**
     * Sets the edgeBlocked property value. Indicates whether or not to Block the user from using the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlocked property.
    */
    public function setEdgeBlocked(?bool $value): void {
        $this->getBackingStore()->set('edgeBlocked', $value);
    }

    /**
     * Sets the edgeBlockEditFavorites property value. Indicates whether or not to Block the user from making changes to Favorites.
     *  @param bool|null $value Value to set for the edgeBlockEditFavorites property.
    */
    public function setEdgeBlockEditFavorites(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockEditFavorites', $value);
    }

    /**
     * Sets the edgeBlockExtensions property value. Indicates whether or not to block extensions in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockExtensions property.
    */
    public function setEdgeBlockExtensions(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockExtensions', $value);
    }

    /**
     * Sets the edgeBlockFullScreenMode property value. Allow or prevent Edge from entering the full screen mode.
     *  @param bool|null $value Value to set for the edgeBlockFullScreenMode property.
    */
    public function setEdgeBlockFullScreenMode(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockFullScreenMode', $value);
    }

    /**
     * Sets the edgeBlockInPrivateBrowsing property value. Indicates whether or not to block InPrivate browsing on corporate networks, in the Edge browser.
     *  @param bool|null $value Value to set for the edgeBlockInPrivateBrowsing property.
    */
    public function setEdgeBlockInPrivateBrowsing(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockInPrivateBrowsing', $value);
    }

    /**
     * Sets the edgeBlockJavaScript property value. Indicates whether or not to Block the user from using JavaScript.
     *  @param bool|null $value Value to set for the edgeBlockJavaScript property.
    */
    public function setEdgeBlockJavaScript(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockJavaScript', $value);
    }

    /**
     * Sets the edgeBlockLiveTileDataCollection property value. Block the collection of information by Microsoft for live tile creation when users pin a site to Start from Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeBlockLiveTileDataCollection property.
    */
    public function setEdgeBlockLiveTileDataCollection(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockLiveTileDataCollection', $value);
    }

    /**
     * Sets the edgeBlockPasswordManager property value. Indicates whether or not to Block password manager.
     *  @param bool|null $value Value to set for the edgeBlockPasswordManager property.
    */
    public function setEdgeBlockPasswordManager(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPasswordManager', $value);
    }

    /**
     * Sets the edgeBlockPopups property value. Indicates whether or not to block popups.
     *  @param bool|null $value Value to set for the edgeBlockPopups property.
    */
    public function setEdgeBlockPopups(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPopups', $value);
    }

    /**
     * Sets the edgeBlockPrelaunch property value. Decide whether Microsoft Edge is prelaunched at Windows startup.
     *  @param bool|null $value Value to set for the edgeBlockPrelaunch property.
    */
    public function setEdgeBlockPrelaunch(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPrelaunch', $value);
    }

    /**
     * Sets the edgeBlockPrinting property value. Configure Edge to allow or block printing.
     *  @param bool|null $value Value to set for the edgeBlockPrinting property.
    */
    public function setEdgeBlockPrinting(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockPrinting', $value);
    }

    /**
     * Sets the edgeBlockSavingHistory property value. Configure Edge to allow browsing history to be saved or to never save browsing history.
     *  @param bool|null $value Value to set for the edgeBlockSavingHistory property.
    */
    public function setEdgeBlockSavingHistory(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSavingHistory', $value);
    }

    /**
     * Sets the edgeBlockSearchEngineCustomization property value. Indicates whether or not to block the user from adding new search engine or changing the default search engine.
     *  @param bool|null $value Value to set for the edgeBlockSearchEngineCustomization property.
    */
    public function setEdgeBlockSearchEngineCustomization(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSearchEngineCustomization', $value);
    }

    /**
     * Sets the edgeBlockSearchSuggestions property value. Indicates whether or not to block the user from using the search suggestions in the address bar.
     *  @param bool|null $value Value to set for the edgeBlockSearchSuggestions property.
    */
    public function setEdgeBlockSearchSuggestions(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSearchSuggestions', $value);
    }

    /**
     * Sets the edgeBlockSendingDoNotTrackHeader property value. Indicates whether or not to Block the user from sending the do not track header.
     *  @param bool|null $value Value to set for the edgeBlockSendingDoNotTrackHeader property.
    */
    public function setEdgeBlockSendingDoNotTrackHeader(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSendingDoNotTrackHeader', $value);
    }

    /**
     * Sets the edgeBlockSendingIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer. Note: the name of this property is misleading; the property is obsolete, use EdgeSendIntranetTrafficToInternetExplorer instead.
     *  @param bool|null $value Value to set for the edgeBlockSendingIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeBlockSendingIntranetTrafficToInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSendingIntranetTrafficToInternetExplorer', $value);
    }

    /**
     * Sets the edgeBlockSideloadingExtensions property value. Indicates whether the user can sideload extensions.
     *  @param bool|null $value Value to set for the edgeBlockSideloadingExtensions property.
    */
    public function setEdgeBlockSideloadingExtensions(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockSideloadingExtensions', $value);
    }

    /**
     * Sets the edgeBlockTabPreloading property value. Configure whether Edge preloads the new tab page at Windows startup.
     *  @param bool|null $value Value to set for the edgeBlockTabPreloading property.
    */
    public function setEdgeBlockTabPreloading(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockTabPreloading', $value);
    }

    /**
     * Sets the edgeBlockWebContentOnNewTabPage property value. Configure to load a blank page in Edge instead of the default New tab page and prevent users from changing it.
     *  @param bool|null $value Value to set for the edgeBlockWebContentOnNewTabPage property.
    */
    public function setEdgeBlockWebContentOnNewTabPage(?bool $value): void {
        $this->getBackingStore()->set('edgeBlockWebContentOnNewTabPage', $value);
    }

    /**
     * Sets the edgeClearBrowsingDataOnExit property value. Clear browsing data on exiting Microsoft Edge.
     *  @param bool|null $value Value to set for the edgeClearBrowsingDataOnExit property.
    */
    public function setEdgeClearBrowsingDataOnExit(?bool $value): void {
        $this->getBackingStore()->set('edgeClearBrowsingDataOnExit', $value);
    }

    /**
     * Sets the edgeCookiePolicy property value. Possible values to specify which cookies are allowed in Microsoft Edge.
     *  @param EdgeCookiePolicy|null $value Value to set for the edgeCookiePolicy property.
    */
    public function setEdgeCookiePolicy(?EdgeCookiePolicy $value): void {
        $this->getBackingStore()->set('edgeCookiePolicy', $value);
    }

    /**
     * Sets the edgeDisableFirstRunPage property value. Block the Microsoft web page that opens on the first use of Microsoft Edge. This policy allows enterprises, like those enrolled in zero emissions configurations, to block this page.
     *  @param bool|null $value Value to set for the edgeDisableFirstRunPage property.
    */
    public function setEdgeDisableFirstRunPage(?bool $value): void {
        $this->getBackingStore()->set('edgeDisableFirstRunPage', $value);
    }

    /**
     * Sets the edgeEnterpriseModeSiteListLocation property value. Indicates the enterprise mode site list location. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the edgeEnterpriseModeSiteListLocation property.
    */
    public function setEdgeEnterpriseModeSiteListLocation(?string $value): void {
        $this->getBackingStore()->set('edgeEnterpriseModeSiteListLocation', $value);
    }

    /**
     * Sets the edgeFavoritesBarVisibility property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the edgeFavoritesBarVisibility property.
    */
    public function setEdgeFavoritesBarVisibility(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('edgeFavoritesBarVisibility', $value);
    }

    /**
     * Sets the edgeFavoritesListLocation property value. The location of the favorites list to provision. Could be a local file, local network or http location.
     *  @param string|null $value Value to set for the edgeFavoritesListLocation property.
    */
    public function setEdgeFavoritesListLocation(?string $value): void {
        $this->getBackingStore()->set('edgeFavoritesListLocation', $value);
    }

    /**
     * Sets the edgeFirstRunUrl property value. The first run URL for when Edge browser is opened for the first time.
     *  @param string|null $value Value to set for the edgeFirstRunUrl property.
    */
    public function setEdgeFirstRunUrl(?string $value): void {
        $this->getBackingStore()->set('edgeFirstRunUrl', $value);
    }

    /**
     * Sets the edgeHomeButtonConfiguration property value. Causes the Home button to either hide, load the default Start page, load a New tab page, or a custom URL
     *  @param EdgeHomeButtonConfiguration|null $value Value to set for the edgeHomeButtonConfiguration property.
    */
    public function setEdgeHomeButtonConfiguration(?EdgeHomeButtonConfiguration $value): void {
        $this->getBackingStore()->set('edgeHomeButtonConfiguration', $value);
    }

    /**
     * Sets the edgeHomeButtonConfigurationEnabled property value. Enable the Home button configuration.
     *  @param bool|null $value Value to set for the edgeHomeButtonConfigurationEnabled property.
    */
    public function setEdgeHomeButtonConfigurationEnabled(?bool $value): void {
        $this->getBackingStore()->set('edgeHomeButtonConfigurationEnabled', $value);
    }

    /**
     * Sets the edgeHomepageUrls property value. The list of URLs for homepages shodwn on MDM-enrolled devices on Edge browser.
     *  @param array<string>|null $value Value to set for the edgeHomepageUrls property.
    */
    public function setEdgeHomepageUrls(?array $value): void {
        $this->getBackingStore()->set('edgeHomepageUrls', $value);
    }

    /**
     * Sets the edgeKioskModeRestriction property value. Specify how the Microsoft Edge settings are restricted based on kiosk mode.
     *  @param EdgeKioskModeRestrictionType|null $value Value to set for the edgeKioskModeRestriction property.
    */
    public function setEdgeKioskModeRestriction(?EdgeKioskModeRestrictionType $value): void {
        $this->getBackingStore()->set('edgeKioskModeRestriction', $value);
    }

    /**
     * Sets the edgeKioskResetAfterIdleTimeInMinutes property value. Specifies the time in minutes from the last user activity before Microsoft Edge kiosk resets.  Valid values are 0-1440. The default is 5. 0 indicates no reset. Valid values 0 to 1440
     *  @param int|null $value Value to set for the edgeKioskResetAfterIdleTimeInMinutes property.
    */
    public function setEdgeKioskResetAfterIdleTimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('edgeKioskResetAfterIdleTimeInMinutes', $value);
    }

    /**
     * Sets the edgeNewTabPageURL property value. Specify the page opened when new tabs are created.
     *  @param string|null $value Value to set for the edgeNewTabPageURL property.
    */
    public function setEdgeNewTabPageURL(?string $value): void {
        $this->getBackingStore()->set('edgeNewTabPageURL', $value);
    }

    /**
     * Sets the edgeOpensWith property value. Possible values for the EdgeOpensWith setting.
     *  @param EdgeOpenOptions|null $value Value to set for the edgeOpensWith property.
    */
    public function setEdgeOpensWith(?EdgeOpenOptions $value): void {
        $this->getBackingStore()->set('edgeOpensWith', $value);
    }

    /**
     * Sets the edgePreventCertificateErrorOverride property value. Allow or prevent users from overriding certificate errors.
     *  @param bool|null $value Value to set for the edgePreventCertificateErrorOverride property.
    */
    public function setEdgePreventCertificateErrorOverride(?bool $value): void {
        $this->getBackingStore()->set('edgePreventCertificateErrorOverride', $value);
    }

    /**
     * Sets the edgeRequiredExtensionPackageFamilyNames property value. Specify the list of package family names of browser extensions that are required and cannot be turned off by the user.
     *  @param array<string>|null $value Value to set for the edgeRequiredExtensionPackageFamilyNames property.
    */
    public function setEdgeRequiredExtensionPackageFamilyNames(?array $value): void {
        $this->getBackingStore()->set('edgeRequiredExtensionPackageFamilyNames', $value);
    }

    /**
     * Sets the edgeRequireSmartScreen property value. Indicates whether or not to Require the user to use the smart screen filter.
     *  @param bool|null $value Value to set for the edgeRequireSmartScreen property.
    */
    public function setEdgeRequireSmartScreen(?bool $value): void {
        $this->getBackingStore()->set('edgeRequireSmartScreen', $value);
    }

    /**
     * Sets the edgeSearchEngine property value. Allows IT admins to set a default search engine for MDM-Controlled devices. Users can override this and change their default search engine provided the AllowSearchEngineCustomization policy is not set.
     *  @param EdgeSearchEngineBase|null $value Value to set for the edgeSearchEngine property.
    */
    public function setEdgeSearchEngine(?EdgeSearchEngineBase $value): void {
        $this->getBackingStore()->set('edgeSearchEngine', $value);
    }

    /**
     * Sets the edgeSendIntranetTrafficToInternetExplorer property value. Indicates whether or not to switch the intranet traffic from Edge to Internet Explorer.
     *  @param bool|null $value Value to set for the edgeSendIntranetTrafficToInternetExplorer property.
    */
    public function setEdgeSendIntranetTrafficToInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeSendIntranetTrafficToInternetExplorer', $value);
    }

    /**
     * Sets the edgeShowMessageWhenOpeningInternetExplorerSites property value. What message will be displayed by Edge before switching to Internet Explorer.
     *  @param InternetExplorerMessageSetting|null $value Value to set for the edgeShowMessageWhenOpeningInternetExplorerSites property.
    */
    public function setEdgeShowMessageWhenOpeningInternetExplorerSites(?InternetExplorerMessageSetting $value): void {
        $this->getBackingStore()->set('edgeShowMessageWhenOpeningInternetExplorerSites', $value);
    }

    /**
     * Sets the edgeSyncFavoritesWithInternetExplorer property value. Enable favorites sync between Internet Explorer and Microsoft Edge. Additions, deletions, modifications and order changes to favorites are shared between browsers.
     *  @param bool|null $value Value to set for the edgeSyncFavoritesWithInternetExplorer property.
    */
    public function setEdgeSyncFavoritesWithInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('edgeSyncFavoritesWithInternetExplorer', $value);
    }

    /**
     * Sets the edgeTelemetryForMicrosoft365Analytics property value. Type of browsing data sent to Microsoft 365 analytics
     *  @param EdgeTelemetryMode|null $value Value to set for the edgeTelemetryForMicrosoft365Analytics property.
    */
    public function setEdgeTelemetryForMicrosoft365Analytics(?EdgeTelemetryMode $value): void {
        $this->getBackingStore()->set('edgeTelemetryForMicrosoft365Analytics', $value);
    }

    /**
     * Sets the enableAutomaticRedeployment property value. Allow users with administrative rights to delete all user data and settings using CTRL + Win + R at the device lock screen so that the device can be automatically re-configured and re-enrolled into management.
     *  @param bool|null $value Value to set for the enableAutomaticRedeployment property.
    */
    public function setEnableAutomaticRedeployment(?bool $value): void {
        $this->getBackingStore()->set('enableAutomaticRedeployment', $value);
    }

    /**
     * Sets the energySaverOnBatteryThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While on battery, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the energySaverOnBatteryThresholdPercentage property.
    */
    public function setEnergySaverOnBatteryThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('energySaverOnBatteryThresholdPercentage', $value);
    }

    /**
     * Sets the energySaverPluggedInThresholdPercentage property value. This setting allows you to specify battery charge level at which Energy Saver is turned on. While plugged in, Energy Saver is automatically turned on at (and below) the specified battery charge level. Valid input range (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the energySaverPluggedInThresholdPercentage property.
    */
    public function setEnergySaverPluggedInThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('energySaverPluggedInThresholdPercentage', $value);
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryEndPoint property value. Endpoint for discovering cloud printers.
     *  @param string|null $value Value to set for the enterpriseCloudPrintDiscoveryEndPoint property.
    */
    public function setEnterpriseCloudPrintDiscoveryEndPoint(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintDiscoveryEndPoint', $value);
    }

    /**
     * Sets the enterpriseCloudPrintDiscoveryMaxLimit property value. Maximum number of printers that should be queried from a discovery endpoint. This is a mobile only setting. Valid values 1 to 65535
     *  @param int|null $value Value to set for the enterpriseCloudPrintDiscoveryMaxLimit property.
    */
    public function setEnterpriseCloudPrintDiscoveryMaxLimit(?int $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintDiscoveryMaxLimit', $value);
    }

    /**
     * Sets the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property value. OAuth resource URI for printer discovery service as configured in Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintMopriaDiscoveryResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintMopriaDiscoveryResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintMopriaDiscoveryResourceIdentifier', $value);
    }

    /**
     * Sets the enterpriseCloudPrintOAuthAuthority property value. Authentication endpoint for acquiring OAuth tokens.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthAuthority property.
    */
    public function setEnterpriseCloudPrintOAuthAuthority(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintOAuthAuthority', $value);
    }

    /**
     * Sets the enterpriseCloudPrintOAuthClientIdentifier property value. GUID of a client application authorized to retrieve OAuth tokens from the OAuth Authority.
     *  @param string|null $value Value to set for the enterpriseCloudPrintOAuthClientIdentifier property.
    */
    public function setEnterpriseCloudPrintOAuthClientIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintOAuthClientIdentifier', $value);
    }

    /**
     * Sets the enterpriseCloudPrintResourceIdentifier property value. OAuth resource URI for print service as configured in the Azure portal.
     *  @param string|null $value Value to set for the enterpriseCloudPrintResourceIdentifier property.
    */
    public function setEnterpriseCloudPrintResourceIdentifier(?string $value): void {
        $this->getBackingStore()->set('enterpriseCloudPrintResourceIdentifier', $value);
    }

    /**
     * Sets the experienceBlockDeviceDiscovery property value. Indicates whether or not to enable device discovery UX.
     *  @param bool|null $value Value to set for the experienceBlockDeviceDiscovery property.
    */
    public function setExperienceBlockDeviceDiscovery(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockDeviceDiscovery', $value);
    }

    /**
     * Sets the experienceBlockErrorDialogWhenNoSIM property value. Indicates whether or not to allow the error dialog from displaying if no SIM card is detected.
     *  @param bool|null $value Value to set for the experienceBlockErrorDialogWhenNoSIM property.
    */
    public function setExperienceBlockErrorDialogWhenNoSIM(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockErrorDialogWhenNoSIM', $value);
    }

    /**
     * Sets the experienceBlockTaskSwitcher property value. Indicates whether or not to enable task switching on the device.
     *  @param bool|null $value Value to set for the experienceBlockTaskSwitcher property.
    */
    public function setExperienceBlockTaskSwitcher(?bool $value): void {
        $this->getBackingStore()->set('experienceBlockTaskSwitcher', $value);
    }

    /**
     * Sets the experienceDoNotSyncBrowserSettings property value. Allow(Not Configured) or prevent(Block) the syncing of Microsoft Edge Browser settings. Option to prevent syncing across devices, but allow user override.
     *  @param BrowserSyncSetting|null $value Value to set for the experienceDoNotSyncBrowserSettings property.
    */
    public function setExperienceDoNotSyncBrowserSettings(?BrowserSyncSetting $value): void {
        $this->getBackingStore()->set('experienceDoNotSyncBrowserSettings', $value);
    }

    /**
     * Sets the findMyFiles property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the findMyFiles property.
    */
    public function setFindMyFiles(?Enablement $value): void {
        $this->getBackingStore()->set('findMyFiles', $value);
    }

    /**
     * Sets the gameDvrBlocked property value. Indicates whether or not to block DVR and broadcasting.
     *  @param bool|null $value Value to set for the gameDvrBlocked property.
    */
    public function setGameDvrBlocked(?bool $value): void {
        $this->getBackingStore()->set('gameDvrBlocked', $value);
    }

    /**
     * Sets the inkWorkspaceAccess property value. Values for the InkWorkspaceAccess setting.
     *  @param InkAccessSetting|null $value Value to set for the inkWorkspaceAccess property.
    */
    public function setInkWorkspaceAccess(?InkAccessSetting $value): void {
        $this->getBackingStore()->set('inkWorkspaceAccess', $value);
    }

    /**
     * Sets the inkWorkspaceAccessState property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the inkWorkspaceAccessState property.
    */
    public function setInkWorkspaceAccessState(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('inkWorkspaceAccessState', $value);
    }

    /**
     * Sets the inkWorkspaceBlockSuggestedApps property value. Specify whether to show recommended app suggestions in the ink workspace.
     *  @param bool|null $value Value to set for the inkWorkspaceBlockSuggestedApps property.
    */
    public function setInkWorkspaceBlockSuggestedApps(?bool $value): void {
        $this->getBackingStore()->set('inkWorkspaceBlockSuggestedApps', $value);
    }

    /**
     * Sets the internetSharingBlocked property value. Indicates whether or not to Block the user from using internet sharing.
     *  @param bool|null $value Value to set for the internetSharingBlocked property.
    */
    public function setInternetSharingBlocked(?bool $value): void {
        $this->getBackingStore()->set('internetSharingBlocked', $value);
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to Block the user from location services.
     *  @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value): void {
        $this->getBackingStore()->set('locationServicesBlocked', $value);
    }

    /**
     * Sets the lockScreenActivateAppsWithVoice property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the lockScreenActivateAppsWithVoice property.
    */
    public function setLockScreenActivateAppsWithVoice(?Enablement $value): void {
        $this->getBackingStore()->set('lockScreenActivateAppsWithVoice', $value);
    }

    /**
     * Sets the lockScreenAllowTimeoutConfiguration property value. Specify whether to show a user-configurable setting to control the screen timeout while on the lock screen of Windows 10 Mobile devices. If this policy is set to Allow, the value set by lockScreenTimeoutInSeconds is ignored.
     *  @param bool|null $value Value to set for the lockScreenAllowTimeoutConfiguration property.
    */
    public function setLockScreenAllowTimeoutConfiguration(?bool $value): void {
        $this->getBackingStore()->set('lockScreenAllowTimeoutConfiguration', $value);
    }

    /**
     * Sets the lockScreenBlockActionCenterNotifications property value. Indicates whether or not to block action center notifications over lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockActionCenterNotifications property.
    */
    public function setLockScreenBlockActionCenterNotifications(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockActionCenterNotifications', $value);
    }

    /**
     * Sets the lockScreenBlockCortana property value. Indicates whether or not the user can interact with Cortana using speech while the system is locked.
     *  @param bool|null $value Value to set for the lockScreenBlockCortana property.
    */
    public function setLockScreenBlockCortana(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockCortana', $value);
    }

    /**
     * Sets the lockScreenBlockToastNotifications property value. Indicates whether to allow toast notifications above the device lock screen.
     *  @param bool|null $value Value to set for the lockScreenBlockToastNotifications property.
    */
    public function setLockScreenBlockToastNotifications(?bool $value): void {
        $this->getBackingStore()->set('lockScreenBlockToastNotifications', $value);
    }

    /**
     * Sets the lockScreenTimeoutInSeconds property value. Set the duration (in seconds) from the screen locking to the screen turning off for Windows 10 Mobile devices. Supported values are 11-1800. Valid values 11 to 1800
     *  @param int|null $value Value to set for the lockScreenTimeoutInSeconds property.
    */
    public function setLockScreenTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('lockScreenTimeoutInSeconds', $value);
    }

    /**
     * Sets the logonBlockFastUserSwitching property value. Disables the ability to quickly switch between users that are logged on simultaneously without logging off.
     *  @param bool|null $value Value to set for the logonBlockFastUserSwitching property.
    */
    public function setLogonBlockFastUserSwitching(?bool $value): void {
        $this->getBackingStore()->set('logonBlockFastUserSwitching', $value);
    }

    /**
     * Sets the messagingBlockMMS property value. Indicates whether or not to block the MMS send/receive functionality on the device.
     *  @param bool|null $value Value to set for the messagingBlockMMS property.
    */
    public function setMessagingBlockMMS(?bool $value): void {
        $this->getBackingStore()->set('messagingBlockMMS', $value);
    }

    /**
     * Sets the messagingBlockRichCommunicationServices property value. Indicates whether or not to block the RCS send/receive functionality on the device.
     *  @param bool|null $value Value to set for the messagingBlockRichCommunicationServices property.
    */
    public function setMessagingBlockRichCommunicationServices(?bool $value): void {
        $this->getBackingStore()->set('messagingBlockRichCommunicationServices', $value);
    }

    /**
     * Sets the messagingBlockSync property value. Indicates whether or not to block text message back up and restore and Messaging Everywhere.
     *  @param bool|null $value Value to set for the messagingBlockSync property.
    */
    public function setMessagingBlockSync(?bool $value): void {
        $this->getBackingStore()->set('messagingBlockSync', $value);
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to Block a Microsoft account.
     *  @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value): void {
        $this->getBackingStore()->set('microsoftAccountBlocked', $value);
    }

    /**
     * Sets the microsoftAccountBlockSettingsSync property value. Indicates whether or not to Block Microsoft account settings sync.
     *  @param bool|null $value Value to set for the microsoftAccountBlockSettingsSync property.
    */
    public function setMicrosoftAccountBlockSettingsSync(?bool $value): void {
        $this->getBackingStore()->set('microsoftAccountBlockSettingsSync', $value);
    }

    /**
     * Sets the microsoftAccountSignInAssistantSettings property value. Values for the SignInAssistantSettings.
     *  @param SignInAssistantOptions|null $value Value to set for the microsoftAccountSignInAssistantSettings property.
    */
    public function setMicrosoftAccountSignInAssistantSettings(?SignInAssistantOptions $value): void {
        $this->getBackingStore()->set('microsoftAccountSignInAssistantSettings', $value);
    }

    /**
     * Sets the networkProxyApplySettingsDeviceWide property value. If set, proxy settings will be applied to all processes and accounts in the device. Otherwise, it will be applied to the user account that’s enrolled into MDM.
     *  @param bool|null $value Value to set for the networkProxyApplySettingsDeviceWide property.
    */
    public function setNetworkProxyApplySettingsDeviceWide(?bool $value): void {
        $this->getBackingStore()->set('networkProxyApplySettingsDeviceWide', $value);
    }

    /**
     * Sets the networkProxyAutomaticConfigurationUrl property value. Address to the proxy auto-config (PAC) script you want to use.
     *  @param string|null $value Value to set for the networkProxyAutomaticConfigurationUrl property.
    */
    public function setNetworkProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('networkProxyAutomaticConfigurationUrl', $value);
    }

    /**
     * Sets the networkProxyDisableAutoDetect property value. Disable automatic detection of settings. If enabled, the system will try to find the path to a proxy auto-config (PAC) script.
     *  @param bool|null $value Value to set for the networkProxyDisableAutoDetect property.
    */
    public function setNetworkProxyDisableAutoDetect(?bool $value): void {
        $this->getBackingStore()->set('networkProxyDisableAutoDetect', $value);
    }

    /**
     * Sets the networkProxyServer property value. Specifies manual proxy server settings.
     *  @param Windows10NetworkProxyServer|null $value Value to set for the networkProxyServer property.
    */
    public function setNetworkProxyServer(?Windows10NetworkProxyServer $value): void {
        $this->getBackingStore()->set('networkProxyServer', $value);
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to Block the user from using near field communication.
     *  @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value): void {
        $this->getBackingStore()->set('nfcBlocked', $value);
    }

    /**
     * Sets the oneDriveDisableFileSync property value. Gets or sets a value allowing IT admins to prevent apps and features from working with files on OneDrive.
     *  @param bool|null $value Value to set for the oneDriveDisableFileSync property.
    */
    public function setOneDriveDisableFileSync(?bool $value): void {
        $this->getBackingStore()->set('oneDriveDisableFileSync', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Specify whether PINs or passwords such as '1111' or '1234' are allowed. For Windows 10 desktops, it also controls the use of picture passwords.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days. Valid values 0 to 730
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumAgeInDays property value. This security setting determines the period of time (in days) that a password must be used before the user can change it. Valid values 0 to 998
     *  @param int|null $value Value to set for the passwordMinimumAgeInDays property.
    */
    public function setPasswordMinimumAgeInDays(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumAgeInDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. The minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent reuse of. Valid values 0 to 50
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require the user to have a password.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordRequireWhenResumeFromIdleState property value. Indicates whether or not to require a password upon resuming from an idle state.
     *  @param bool|null $value Value to set for the passwordRequireWhenResumeFromIdleState property.
    */
    public function setPasswordRequireWhenResumeFromIdleState(?bool $value): void {
        $this->getBackingStore()->set('passwordRequireWhenResumeFromIdleState', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. The number of sign in failures before factory reset. Valid values 0 to 999
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the personalizationDesktopImageUrl property value. A http or https Url to a jpg, jpeg or png image that needs to be downloaded and used as the Desktop Image or a file Url to a local image on the file system that needs to used as the Desktop Image.
     *  @param string|null $value Value to set for the personalizationDesktopImageUrl property.
    */
    public function setPersonalizationDesktopImageUrl(?string $value): void {
        $this->getBackingStore()->set('personalizationDesktopImageUrl', $value);
    }

    /**
     * Sets the personalizationLockScreenImageUrl property value. A http or https Url to a jpg, jpeg or png image that neeeds to be downloaded and used as the Lock Screen Image or a file Url to a local image on the file system that needs to be used as the Lock Screen Image.
     *  @param string|null $value Value to set for the personalizationLockScreenImageUrl property.
    */
    public function setPersonalizationLockScreenImageUrl(?string $value): void {
        $this->getBackingStore()->set('personalizationLockScreenImageUrl', $value);
    }

    /**
     * Sets the powerButtonActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerButtonActionOnBattery property.
    */
    public function setPowerButtonActionOnBattery(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerButtonActionOnBattery', $value);
    }

    /**
     * Sets the powerButtonActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerButtonActionPluggedIn property.
    */
    public function setPowerButtonActionPluggedIn(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerButtonActionPluggedIn', $value);
    }

    /**
     * Sets the powerHybridSleepOnBattery property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the powerHybridSleepOnBattery property.
    */
    public function setPowerHybridSleepOnBattery(?Enablement $value): void {
        $this->getBackingStore()->set('powerHybridSleepOnBattery', $value);
    }

    /**
     * Sets the powerHybridSleepPluggedIn property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the powerHybridSleepPluggedIn property.
    */
    public function setPowerHybridSleepPluggedIn(?Enablement $value): void {
        $this->getBackingStore()->set('powerHybridSleepPluggedIn', $value);
    }

    /**
     * Sets the powerLidCloseActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerLidCloseActionOnBattery property.
    */
    public function setPowerLidCloseActionOnBattery(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerLidCloseActionOnBattery', $value);
    }

    /**
     * Sets the powerLidCloseActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerLidCloseActionPluggedIn property.
    */
    public function setPowerLidCloseActionPluggedIn(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerLidCloseActionPluggedIn', $value);
    }

    /**
     * Sets the powerSleepButtonActionOnBattery property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerSleepButtonActionOnBattery property.
    */
    public function setPowerSleepButtonActionOnBattery(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerSleepButtonActionOnBattery', $value);
    }

    /**
     * Sets the powerSleepButtonActionPluggedIn property value. Power action types
     *  @param PowerActionType|null $value Value to set for the powerSleepButtonActionPluggedIn property.
    */
    public function setPowerSleepButtonActionPluggedIn(?PowerActionType $value): void {
        $this->getBackingStore()->set('powerSleepButtonActionPluggedIn', $value);
    }

    /**
     * Sets the printerBlockAddition property value. Prevent user installation of additional printers from printers settings.
     *  @param bool|null $value Value to set for the printerBlockAddition property.
    */
    public function setPrinterBlockAddition(?bool $value): void {
        $this->getBackingStore()->set('printerBlockAddition', $value);
    }

    /**
     * Sets the printerDefaultName property value. Name (network host name) of an installed printer.
     *  @param string|null $value Value to set for the printerDefaultName property.
    */
    public function setPrinterDefaultName(?string $value): void {
        $this->getBackingStore()->set('printerDefaultName', $value);
    }

    /**
     * Sets the printerNames property value. Automatically provision printers based on their names (network host names).
     *  @param array<string>|null $value Value to set for the printerNames property.
    */
    public function setPrinterNames(?array $value): void {
        $this->getBackingStore()->set('printerNames', $value);
    }

    /**
     * Sets the privacyAccessControls property value. Indicates a list of applications with their access control levels over privacy data categories, and/or the default access levels per category. This collection can contain a maximum of 500 elements.
     *  @param array<WindowsPrivacyDataAccessControlItem>|null $value Value to set for the privacyAccessControls property.
    */
    public function setPrivacyAccessControls(?array $value): void {
        $this->getBackingStore()->set('privacyAccessControls', $value);
    }

    /**
     * Sets the privacyAdvertisingId property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the privacyAdvertisingId property.
    */
    public function setPrivacyAdvertisingId(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('privacyAdvertisingId', $value);
    }

    /**
     * Sets the privacyAutoAcceptPairingAndConsentPrompts property value. Indicates whether or not to allow the automatic acceptance of the pairing and privacy user consent dialog when launching apps.
     *  @param bool|null $value Value to set for the privacyAutoAcceptPairingAndConsentPrompts property.
    */
    public function setPrivacyAutoAcceptPairingAndConsentPrompts(?bool $value): void {
        $this->getBackingStore()->set('privacyAutoAcceptPairingAndConsentPrompts', $value);
    }

    /**
     * Sets the privacyBlockActivityFeed property value. Blocks the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     *  @param bool|null $value Value to set for the privacyBlockActivityFeed property.
    */
    public function setPrivacyBlockActivityFeed(?bool $value): void {
        $this->getBackingStore()->set('privacyBlockActivityFeed', $value);
    }

    /**
     * Sets the privacyBlockInputPersonalization property value. Indicates whether or not to block the usage of cloud based speech services for Cortana, Dictation, or Store applications.
     *  @param bool|null $value Value to set for the privacyBlockInputPersonalization property.
    */
    public function setPrivacyBlockInputPersonalization(?bool $value): void {
        $this->getBackingStore()->set('privacyBlockInputPersonalization', $value);
    }

    /**
     * Sets the privacyBlockPublishUserActivities property value. Blocks the shared experiences/discovery of recently used resources in task switcher etc.
     *  @param bool|null $value Value to set for the privacyBlockPublishUserActivities property.
    */
    public function setPrivacyBlockPublishUserActivities(?bool $value): void {
        $this->getBackingStore()->set('privacyBlockPublishUserActivities', $value);
    }

    /**
     * Sets the privacyDisableLaunchExperience property value. This policy prevents the privacy experience from launching during user logon for new and upgraded users.​
     *  @param bool|null $value Value to set for the privacyDisableLaunchExperience property.
    */
    public function setPrivacyDisableLaunchExperience(?bool $value): void {
        $this->getBackingStore()->set('privacyDisableLaunchExperience', $value);
    }

    /**
     * Sets the resetProtectionModeBlocked property value. Indicates whether or not to Block the user from reset protection mode.
     *  @param bool|null $value Value to set for the resetProtectionModeBlocked property.
    */
    public function setResetProtectionModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('resetProtectionModeBlocked', $value);
    }

    /**
     * Sets the safeSearchFilter property value. Specifies what level of safe search (filtering adult content) is required
     *  @param SafeSearchFilterType|null $value Value to set for the safeSearchFilter property.
    */
    public function setSafeSearchFilter(?SafeSearchFilterType $value): void {
        $this->getBackingStore()->set('safeSearchFilter', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to Block the user from taking Screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the searchBlockDiacritics property value. Specifies if search can use diacritics.
     *  @param bool|null $value Value to set for the searchBlockDiacritics property.
    */
    public function setSearchBlockDiacritics(?bool $value): void {
        $this->getBackingStore()->set('searchBlockDiacritics', $value);
    }

    /**
     * Sets the searchBlockWebResults property value. Indicates whether or not to block the web search.
     *  @param bool|null $value Value to set for the searchBlockWebResults property.
    */
    public function setSearchBlockWebResults(?bool $value): void {
        $this->getBackingStore()->set('searchBlockWebResults', $value);
    }

    /**
     * Sets the searchDisableAutoLanguageDetection property value. Specifies whether to use automatic language detection when indexing content and properties.
     *  @param bool|null $value Value to set for the searchDisableAutoLanguageDetection property.
    */
    public function setSearchDisableAutoLanguageDetection(?bool $value): void {
        $this->getBackingStore()->set('searchDisableAutoLanguageDetection', $value);
    }

    /**
     * Sets the searchDisableIndexerBackoff property value. Indicates whether or not to disable the search indexer backoff feature.
     *  @param bool|null $value Value to set for the searchDisableIndexerBackoff property.
    */
    public function setSearchDisableIndexerBackoff(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexerBackoff', $value);
    }

    /**
     * Sets the searchDisableIndexingEncryptedItems property value. Indicates whether or not to block indexing of WIP-protected items to prevent them from appearing in search results for Cortana or Explorer.
     *  @param bool|null $value Value to set for the searchDisableIndexingEncryptedItems property.
    */
    public function setSearchDisableIndexingEncryptedItems(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexingEncryptedItems', $value);
    }

    /**
     * Sets the searchDisableIndexingRemovableDrive property value. Indicates whether or not to allow users to add locations on removable drives to libraries and to be indexed.
     *  @param bool|null $value Value to set for the searchDisableIndexingRemovableDrive property.
    */
    public function setSearchDisableIndexingRemovableDrive(?bool $value): void {
        $this->getBackingStore()->set('searchDisableIndexingRemovableDrive', $value);
    }

    /**
     * Sets the searchDisableLocation property value. Specifies if search can use location information.
     *  @param bool|null $value Value to set for the searchDisableLocation property.
    */
    public function setSearchDisableLocation(?bool $value): void {
        $this->getBackingStore()->set('searchDisableLocation', $value);
    }

    /**
     * Sets the searchDisableUseLocation property value. Specifies if search can use location information.
     *  @param bool|null $value Value to set for the searchDisableUseLocation property.
    */
    public function setSearchDisableUseLocation(?bool $value): void {
        $this->getBackingStore()->set('searchDisableUseLocation', $value);
    }

    /**
     * Sets the searchEnableAutomaticIndexSizeManangement property value. Specifies minimum amount of hard drive space on the same drive as the index location before indexing stops.
     *  @param bool|null $value Value to set for the searchEnableAutomaticIndexSizeManangement property.
    */
    public function setSearchEnableAutomaticIndexSizeManangement(?bool $value): void {
        $this->getBackingStore()->set('searchEnableAutomaticIndexSizeManangement', $value);
    }

    /**
     * Sets the searchEnableRemoteQueries property value. Indicates whether or not to block remote queries of this computer’s index.
     *  @param bool|null $value Value to set for the searchEnableRemoteQueries property.
    */
    public function setSearchEnableRemoteQueries(?bool $value): void {
        $this->getBackingStore()->set('searchEnableRemoteQueries', $value);
    }

    /**
     * Sets the securityBlockAzureADJoinedDevicesAutoEncryption property value. Specify whether to allow automatic device encryption during OOBE when the device is Azure AD joined (desktop only).
     *  @param bool|null $value Value to set for the securityBlockAzureADJoinedDevicesAutoEncryption property.
    */
    public function setSecurityBlockAzureADJoinedDevicesAutoEncryption(?bool $value): void {
        $this->getBackingStore()->set('securityBlockAzureADJoinedDevicesAutoEncryption', $value);
    }

    /**
     * Sets the settingsBlockAccountsPage property value. Indicates whether or not to block access to Accounts in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAccountsPage property.
    */
    public function setSettingsBlockAccountsPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAccountsPage', $value);
    }

    /**
     * Sets the settingsBlockAddProvisioningPackage property value. Indicates whether or not to block the user from installing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockAddProvisioningPackage property.
    */
    public function setSettingsBlockAddProvisioningPackage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAddProvisioningPackage', $value);
    }

    /**
     * Sets the settingsBlockAppsPage property value. Indicates whether or not to block access to Apps in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockAppsPage property.
    */
    public function setSettingsBlockAppsPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockAppsPage', $value);
    }

    /**
     * Sets the settingsBlockChangeLanguage property value. Indicates whether or not to block the user from changing the language settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeLanguage property.
    */
    public function setSettingsBlockChangeLanguage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeLanguage', $value);
    }

    /**
     * Sets the settingsBlockChangePowerSleep property value. Indicates whether or not to block the user from changing power and sleep settings.
     *  @param bool|null $value Value to set for the settingsBlockChangePowerSleep property.
    */
    public function setSettingsBlockChangePowerSleep(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangePowerSleep', $value);
    }

    /**
     * Sets the settingsBlockChangeRegion property value. Indicates whether or not to block the user from changing the region settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeRegion property.
    */
    public function setSettingsBlockChangeRegion(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeRegion', $value);
    }

    /**
     * Sets the settingsBlockChangeSystemTime property value. Indicates whether or not to block the user from changing date and time settings.
     *  @param bool|null $value Value to set for the settingsBlockChangeSystemTime property.
    */
    public function setSettingsBlockChangeSystemTime(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockChangeSystemTime', $value);
    }

    /**
     * Sets the settingsBlockDevicesPage property value. Indicates whether or not to block access to Devices in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockDevicesPage property.
    */
    public function setSettingsBlockDevicesPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockDevicesPage', $value);
    }

    /**
     * Sets the settingsBlockEaseOfAccessPage property value. Indicates whether or not to block access to Ease of Access in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockEaseOfAccessPage property.
    */
    public function setSettingsBlockEaseOfAccessPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockEaseOfAccessPage', $value);
    }

    /**
     * Sets the settingsBlockEditDeviceName property value. Indicates whether or not to block the user from editing the device name.
     *  @param bool|null $value Value to set for the settingsBlockEditDeviceName property.
    */
    public function setSettingsBlockEditDeviceName(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockEditDeviceName', $value);
    }

    /**
     * Sets the settingsBlockGamingPage property value. Indicates whether or not to block access to Gaming in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockGamingPage property.
    */
    public function setSettingsBlockGamingPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockGamingPage', $value);
    }

    /**
     * Sets the settingsBlockNetworkInternetPage property value. Indicates whether or not to block access to Network & Internet in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockNetworkInternetPage property.
    */
    public function setSettingsBlockNetworkInternetPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockNetworkInternetPage', $value);
    }

    /**
     * Sets the settingsBlockPersonalizationPage property value. Indicates whether or not to block access to Personalization in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPersonalizationPage property.
    */
    public function setSettingsBlockPersonalizationPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockPersonalizationPage', $value);
    }

    /**
     * Sets the settingsBlockPrivacyPage property value. Indicates whether or not to block access to Privacy in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockPrivacyPage property.
    */
    public function setSettingsBlockPrivacyPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockPrivacyPage', $value);
    }

    /**
     * Sets the settingsBlockRemoveProvisioningPackage property value. Indicates whether or not to block the runtime configuration agent from removing provisioning packages.
     *  @param bool|null $value Value to set for the settingsBlockRemoveProvisioningPackage property.
    */
    public function setSettingsBlockRemoveProvisioningPackage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockRemoveProvisioningPackage', $value);
    }

    /**
     * Sets the settingsBlockSettingsApp property value. Indicates whether or not to block access to Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSettingsApp property.
    */
    public function setSettingsBlockSettingsApp(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSettingsApp', $value);
    }

    /**
     * Sets the settingsBlockSystemPage property value. Indicates whether or not to block access to System in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockSystemPage property.
    */
    public function setSettingsBlockSystemPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockSystemPage', $value);
    }

    /**
     * Sets the settingsBlockTimeLanguagePage property value. Indicates whether or not to block access to Time & Language in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockTimeLanguagePage property.
    */
    public function setSettingsBlockTimeLanguagePage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockTimeLanguagePage', $value);
    }

    /**
     * Sets the settingsBlockUpdateSecurityPage property value. Indicates whether or not to block access to Update & Security in Settings app.
     *  @param bool|null $value Value to set for the settingsBlockUpdateSecurityPage property.
    */
    public function setSettingsBlockUpdateSecurityPage(?bool $value): void {
        $this->getBackingStore()->set('settingsBlockUpdateSecurityPage', $value);
    }

    /**
     * Sets the sharedUserAppDataAllowed property value. Indicates whether or not to block multiple users of the same app to share data.
     *  @param bool|null $value Value to set for the sharedUserAppDataAllowed property.
    */
    public function setSharedUserAppDataAllowed(?bool $value): void {
        $this->getBackingStore()->set('sharedUserAppDataAllowed', $value);
    }

    /**
     * Sets the smartScreenAppInstallControl property value. App Install control Setting
     *  @param AppInstallControlType|null $value Value to set for the smartScreenAppInstallControl property.
    */
    public function setSmartScreenAppInstallControl(?AppInstallControlType $value): void {
        $this->getBackingStore()->set('smartScreenAppInstallControl', $value);
    }

    /**
     * Sets the smartScreenBlockPromptOverride property value. Indicates whether or not users can override SmartScreen Filter warnings about potentially malicious websites.
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverride property.
    */
    public function setSmartScreenBlockPromptOverride(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockPromptOverride', $value);
    }

    /**
     * Sets the smartScreenBlockPromptOverrideForFiles property value. Indicates whether or not users can override the SmartScreen Filter warnings about downloading unverified files
     *  @param bool|null $value Value to set for the smartScreenBlockPromptOverrideForFiles property.
    */
    public function setSmartScreenBlockPromptOverrideForFiles(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockPromptOverrideForFiles', $value);
    }

    /**
     * Sets the smartScreenEnableAppInstallControl property value. This property will be deprecated in July 2019 and will be replaced by property SmartScreenAppInstallControl. Allows IT Admins to control whether users are allowed to install apps from places other than the Store.
     *  @param bool|null $value Value to set for the smartScreenEnableAppInstallControl property.
    */
    public function setSmartScreenEnableAppInstallControl(?bool $value): void {
        $this->getBackingStore()->set('smartScreenEnableAppInstallControl', $value);
    }

    /**
     * Sets the startBlockUnpinningAppsFromTaskbar property value. Indicates whether or not to block the user from unpinning apps from taskbar.
     *  @param bool|null $value Value to set for the startBlockUnpinningAppsFromTaskbar property.
    */
    public function setStartBlockUnpinningAppsFromTaskbar(?bool $value): void {
        $this->getBackingStore()->set('startBlockUnpinningAppsFromTaskbar', $value);
    }

    /**
     * Sets the startMenuAppListVisibility property value. Type of start menu app list visibility.
     *  @param WindowsStartMenuAppListVisibilityType|null $value Value to set for the startMenuAppListVisibility property.
    */
    public function setStartMenuAppListVisibility(?WindowsStartMenuAppListVisibilityType $value): void {
        $this->getBackingStore()->set('startMenuAppListVisibility', $value);
    }

    /**
     * Sets the startMenuHideChangeAccountSettings property value. Enabling this policy hides the change account setting from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideChangeAccountSettings property.
    */
    public function setStartMenuHideChangeAccountSettings(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideChangeAccountSettings', $value);
    }

    /**
     * Sets the startMenuHideFrequentlyUsedApps property value. Enabling this policy hides the most used apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideFrequentlyUsedApps property.
    */
    public function setStartMenuHideFrequentlyUsedApps(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideFrequentlyUsedApps', $value);
    }

    /**
     * Sets the startMenuHideHibernate property value. Enabling this policy hides hibernate from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideHibernate property.
    */
    public function setStartMenuHideHibernate(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideHibernate', $value);
    }

    /**
     * Sets the startMenuHideLock property value. Enabling this policy hides lock from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideLock property.
    */
    public function setStartMenuHideLock(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideLock', $value);
    }

    /**
     * Sets the startMenuHidePowerButton property value. Enabling this policy hides the power button from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHidePowerButton property.
    */
    public function setStartMenuHidePowerButton(?bool $value): void {
        $this->getBackingStore()->set('startMenuHidePowerButton', $value);
    }

    /**
     * Sets the startMenuHideRecentJumpLists property value. Enabling this policy hides recent jump lists from appearing on the start menu/taskbar and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentJumpLists property.
    */
    public function setStartMenuHideRecentJumpLists(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRecentJumpLists', $value);
    }

    /**
     * Sets the startMenuHideRecentlyAddedApps property value. Enabling this policy hides recently added apps from appearing on the start menu and disables the corresponding toggle in the Settings app.
     *  @param bool|null $value Value to set for the startMenuHideRecentlyAddedApps property.
    */
    public function setStartMenuHideRecentlyAddedApps(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRecentlyAddedApps', $value);
    }

    /**
     * Sets the startMenuHideRestartOptions property value. Enabling this policy hides 'Restart/Update and Restart' from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideRestartOptions property.
    */
    public function setStartMenuHideRestartOptions(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideRestartOptions', $value);
    }

    /**
     * Sets the startMenuHideShutDown property value. Enabling this policy hides shut down/update and shut down from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideShutDown property.
    */
    public function setStartMenuHideShutDown(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideShutDown', $value);
    }

    /**
     * Sets the startMenuHideSignOut property value. Enabling this policy hides sign out from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSignOut property.
    */
    public function setStartMenuHideSignOut(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSignOut', $value);
    }

    /**
     * Sets the startMenuHideSleep property value. Enabling this policy hides sleep from appearing in the power button in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSleep property.
    */
    public function setStartMenuHideSleep(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSleep', $value);
    }

    /**
     * Sets the startMenuHideSwitchAccount property value. Enabling this policy hides switch account from appearing in the user tile in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideSwitchAccount property.
    */
    public function setStartMenuHideSwitchAccount(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideSwitchAccount', $value);
    }

    /**
     * Sets the startMenuHideUserTile property value. Enabling this policy hides the user tile from appearing in the start menu.
     *  @param bool|null $value Value to set for the startMenuHideUserTile property.
    */
    public function setStartMenuHideUserTile(?bool $value): void {
        $this->getBackingStore()->set('startMenuHideUserTile', $value);
    }

    /**
     * Sets the startMenuLayoutEdgeAssetsXml property value. This policy setting allows you to import Edge assets to be used with startMenuLayoutXml policy. Start layout can contain secondary tile from Edge app which looks for Edge local asset file. Edge local asset would not exist and cause Edge secondary tile to appear empty in this case. This policy only gets applied when startMenuLayoutXml policy is modified. The value should be a UTF-8 Base64 encoded byte array.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutEdgeAssetsXml property.
    */
    public function setStartMenuLayoutEdgeAssetsXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('startMenuLayoutEdgeAssetsXml', $value);
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start menu layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in a UTF8 encoded byte array format.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('startMenuLayoutXml', $value);
    }

    /**
     * Sets the startMenuMode property value. Type of display modes for the start menu.
     *  @param WindowsStartMenuModeType|null $value Value to set for the startMenuMode property.
    */
    public function setStartMenuMode(?WindowsStartMenuModeType $value): void {
        $this->getBackingStore()->set('startMenuMode', $value);
    }

    /**
     * Sets the startMenuPinnedFolderDocuments property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDocuments property.
    */
    public function setStartMenuPinnedFolderDocuments(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderDocuments', $value);
    }

    /**
     * Sets the startMenuPinnedFolderDownloads property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderDownloads property.
    */
    public function setStartMenuPinnedFolderDownloads(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderDownloads', $value);
    }

    /**
     * Sets the startMenuPinnedFolderFileExplorer property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderFileExplorer property.
    */
    public function setStartMenuPinnedFolderFileExplorer(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderFileExplorer', $value);
    }

    /**
     * Sets the startMenuPinnedFolderHomeGroup property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderHomeGroup property.
    */
    public function setStartMenuPinnedFolderHomeGroup(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderHomeGroup', $value);
    }

    /**
     * Sets the startMenuPinnedFolderMusic property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderMusic property.
    */
    public function setStartMenuPinnedFolderMusic(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderMusic', $value);
    }

    /**
     * Sets the startMenuPinnedFolderNetwork property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderNetwork property.
    */
    public function setStartMenuPinnedFolderNetwork(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderNetwork', $value);
    }

    /**
     * Sets the startMenuPinnedFolderPersonalFolder property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPersonalFolder property.
    */
    public function setStartMenuPinnedFolderPersonalFolder(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderPersonalFolder', $value);
    }

    /**
     * Sets the startMenuPinnedFolderPictures property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderPictures property.
    */
    public function setStartMenuPinnedFolderPictures(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderPictures', $value);
    }

    /**
     * Sets the startMenuPinnedFolderSettings property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderSettings property.
    */
    public function setStartMenuPinnedFolderSettings(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderSettings', $value);
    }

    /**
     * Sets the startMenuPinnedFolderVideos property value. Generic visibility state.
     *  @param VisibilitySetting|null $value Value to set for the startMenuPinnedFolderVideos property.
    */
    public function setStartMenuPinnedFolderVideos(?VisibilitySetting $value): void {
        $this->getBackingStore()->set('startMenuPinnedFolderVideos', $value);
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to Block the user from using removable storage.
     *  @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value): void {
        $this->getBackingStore()->set('storageBlockRemovableStorage', $value);
    }

    /**
     * Sets the storageRequireMobileDeviceEncryption property value. Indicating whether or not to require encryption on a mobile device.
     *  @param bool|null $value Value to set for the storageRequireMobileDeviceEncryption property.
    */
    public function setStorageRequireMobileDeviceEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireMobileDeviceEncryption', $value);
    }

    /**
     * Sets the storageRestrictAppDataToSystemVolume property value. Indicates whether application data is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppDataToSystemVolume property.
    */
    public function setStorageRestrictAppDataToSystemVolume(?bool $value): void {
        $this->getBackingStore()->set('storageRestrictAppDataToSystemVolume', $value);
    }

    /**
     * Sets the storageRestrictAppInstallToSystemVolume property value. Indicates whether the installation of applications is restricted to the system drive.
     *  @param bool|null $value Value to set for the storageRestrictAppInstallToSystemVolume property.
    */
    public function setStorageRestrictAppInstallToSystemVolume(?bool $value): void {
        $this->getBackingStore()->set('storageRestrictAppInstallToSystemVolume', $value);
    }

    /**
     * Sets the systemTelemetryProxyServer property value. Gets or sets the fully qualified domain name (FQDN) or IP address of a proxy server to forward Connected User Experiences and Telemetry requests.
     *  @param string|null $value Value to set for the systemTelemetryProxyServer property.
    */
    public function setSystemTelemetryProxyServer(?string $value): void {
        $this->getBackingStore()->set('systemTelemetryProxyServer', $value);
    }

    /**
     * Sets the taskManagerBlockEndTask property value. Specify whether non-administrators can use Task Manager to end tasks.
     *  @param bool|null $value Value to set for the taskManagerBlockEndTask property.
    */
    public function setTaskManagerBlockEndTask(?bool $value): void {
        $this->getBackingStore()->set('taskManagerBlockEndTask', $value);
    }

    /**
     * Sets the tenantLockdownRequireNetworkDuringOutOfBoxExperience property value. Whether the device is required to connect to the network.
     *  @param bool|null $value Value to set for the tenantLockdownRequireNetworkDuringOutOfBoxExperience property.
    */
    public function setTenantLockdownRequireNetworkDuringOutOfBoxExperience(?bool $value): void {
        $this->getBackingStore()->set('tenantLockdownRequireNetworkDuringOutOfBoxExperience', $value);
    }

    /**
     * Sets the uninstallBuiltInApps property value. Indicates whether or not to uninstall a fixed list of built-in Windows apps.
     *  @param bool|null $value Value to set for the uninstallBuiltInApps property.
    */
    public function setUninstallBuiltInApps(?bool $value): void {
        $this->getBackingStore()->set('uninstallBuiltInApps', $value);
    }

    /**
     * Sets the usbBlocked property value. Indicates whether or not to Block the user from USB connection.
     *  @param bool|null $value Value to set for the usbBlocked property.
    */
    public function setUsbBlocked(?bool $value): void {
        $this->getBackingStore()->set('usbBlocked', $value);
    }

    /**
     * Sets the voiceRecordingBlocked property value. Indicates whether or not to Block the user from voice recording.
     *  @param bool|null $value Value to set for the voiceRecordingBlocked property.
    */
    public function setVoiceRecordingBlocked(?bool $value): void {
        $this->getBackingStore()->set('voiceRecordingBlocked', $value);
    }

    /**
     * Sets the webRtcBlockLocalhostIpAddress property value. Indicates whether or not user's localhost IP address is displayed while making phone calls using the WebRTC
     *  @param bool|null $value Value to set for the webRtcBlockLocalhostIpAddress property.
    */
    public function setWebRtcBlockLocalhostIpAddress(?bool $value): void {
        $this->getBackingStore()->set('webRtcBlockLocalhostIpAddress', $value);
    }

    /**
     * Sets the wiFiBlockAutomaticConnectHotspots property value. Indicating whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the wiFiBlockAutomaticConnectHotspots property.
    */
    public function setWiFiBlockAutomaticConnectHotspots(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlockAutomaticConnectHotspots', $value);
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to Block the user from using Wi-Fi.
     *  @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlocked', $value);
    }

    /**
     * Sets the wiFiBlockManualConfiguration property value. Indicates whether or not to Block the user from using Wi-Fi manual configuration.
     *  @param bool|null $value Value to set for the wiFiBlockManualConfiguration property.
    */
    public function setWiFiBlockManualConfiguration(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlockManualConfiguration', $value);
    }

    /**
     * Sets the wiFiScanInterval property value. Specify how often devices scan for Wi-Fi networks. Supported values are 1-500, where 100 = default, and 500 = low frequency. Valid values 1 to 500
     *  @param int|null $value Value to set for the wiFiScanInterval property.
    */
    public function setWiFiScanInterval(?int $value): void {
        $this->getBackingStore()->set('wiFiScanInterval', $value);
    }

    /**
     * Sets the windows10AppsForceUpdateSchedule property value. Windows 10 force update schedule for Apps.
     *  @param Windows10AppsForceUpdateSchedule|null $value Value to set for the windows10AppsForceUpdateSchedule property.
    */
    public function setWindows10AppsForceUpdateSchedule(?Windows10AppsForceUpdateSchedule $value): void {
        $this->getBackingStore()->set('windows10AppsForceUpdateSchedule', $value);
    }

    /**
     * Sets the windowsSpotlightBlockConsumerSpecificFeatures property value. Allows IT admins to block experiences that are typically for consumers only, such as Start suggestions, Membership notifications, Post-OOBE app install and redirect tiles.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockConsumerSpecificFeatures property.
    */
    public function setWindowsSpotlightBlockConsumerSpecificFeatures(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockConsumerSpecificFeatures', $value);
    }

    /**
     * Sets the windowsSpotlightBlocked property value. Allows IT admins to turn off all Windows Spotlight features
     *  @param bool|null $value Value to set for the windowsSpotlightBlocked property.
    */
    public function setWindowsSpotlightBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlocked', $value);
    }

    /**
     * Sets the windowsSpotlightBlockOnActionCenter property value. Block suggestions from Microsoft that show after each OS clean install, upgrade or in an on-going basis to introduce users to what is new or changed
     *  @param bool|null $value Value to set for the windowsSpotlightBlockOnActionCenter property.
    */
    public function setWindowsSpotlightBlockOnActionCenter(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockOnActionCenter', $value);
    }

    /**
     * Sets the windowsSpotlightBlockTailoredExperiences property value. Block personalized content in Windows spotlight based on user’s device usage.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockTailoredExperiences property.
    */
    public function setWindowsSpotlightBlockTailoredExperiences(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockTailoredExperiences', $value);
    }

    /**
     * Sets the windowsSpotlightBlockThirdPartyNotifications property value. Block third party content delivered via Windows Spotlight
     *  @param bool|null $value Value to set for the windowsSpotlightBlockThirdPartyNotifications property.
    */
    public function setWindowsSpotlightBlockThirdPartyNotifications(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockThirdPartyNotifications', $value);
    }

    /**
     * Sets the windowsSpotlightBlockWelcomeExperience property value. Block Windows Spotlight Windows welcome experience
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWelcomeExperience property.
    */
    public function setWindowsSpotlightBlockWelcomeExperience(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockWelcomeExperience', $value);
    }

    /**
     * Sets the windowsSpotlightBlockWindowsTips property value. Allows IT admins to turn off the popup of Windows Tips.
     *  @param bool|null $value Value to set for the windowsSpotlightBlockWindowsTips property.
    */
    public function setWindowsSpotlightBlockWindowsTips(?bool $value): void {
        $this->getBackingStore()->set('windowsSpotlightBlockWindowsTips', $value);
    }

    /**
     * Sets the windowsSpotlightConfigureOnLockScreen property value. Allows IT admind to set a predefined default search engine for MDM-Controlled devices
     *  @param WindowsSpotlightEnablementSettings|null $value Value to set for the windowsSpotlightConfigureOnLockScreen property.
    */
    public function setWindowsSpotlightConfigureOnLockScreen(?WindowsSpotlightEnablementSettings $value): void {
        $this->getBackingStore()->set('windowsSpotlightConfigureOnLockScreen', $value);
    }

    /**
     * Sets the windowsStoreBlockAutoUpdate property value. Indicates whether or not to block automatic update of apps from Windows Store.
     *  @param bool|null $value Value to set for the windowsStoreBlockAutoUpdate property.
    */
    public function setWindowsStoreBlockAutoUpdate(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreBlockAutoUpdate', $value);
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to Block the user from using the Windows store.
     *  @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreBlocked', $value);
    }

    /**
     * Sets the windowsStoreEnablePrivateStoreOnly property value. Indicates whether or not to enable Private Store Only.
     *  @param bool|null $value Value to set for the windowsStoreEnablePrivateStoreOnly property.
    */
    public function setWindowsStoreEnablePrivateStoreOnly(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreEnablePrivateStoreOnly', $value);
    }

    /**
     * Sets the wirelessDisplayBlockProjectionToThisDevice property value. Indicates whether or not to allow other devices from discovering this PC for projection.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockProjectionToThisDevice property.
    */
    public function setWirelessDisplayBlockProjectionToThisDevice(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayBlockProjectionToThisDevice', $value);
    }

    /**
     * Sets the wirelessDisplayBlockUserInputFromReceiver property value. Indicates whether or not to allow user input from wireless display receiver.
     *  @param bool|null $value Value to set for the wirelessDisplayBlockUserInputFromReceiver property.
    */
    public function setWirelessDisplayBlockUserInputFromReceiver(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayBlockUserInputFromReceiver', $value);
    }

    /**
     * Sets the wirelessDisplayRequirePinForPairing property value. Indicates whether or not to require a PIN for new devices to initiate pairing.
     *  @param bool|null $value Value to set for the wirelessDisplayRequirePinForPairing property.
    */
    public function setWirelessDisplayRequirePinForPairing(?bool $value): void {
        $this->getBackingStore()->set('wirelessDisplayRequirePinForPairing', $value);
    }

}
