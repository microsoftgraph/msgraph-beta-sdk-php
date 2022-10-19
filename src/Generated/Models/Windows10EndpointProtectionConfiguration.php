<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Psr\Http\Message\StreamInterface;

class Windows10EndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $applicationGuardAllowCameraMicrophoneRedirection Gets or sets whether applications inside Microsoft Defender Application Guard can access the device’s camera and microphone.
    */
    private ?bool $applicationGuardAllowCameraMicrophoneRedirection = null;
    
    /**
     * @var bool|null $applicationGuardAllowFileSaveOnHost Allow users to download files from Edge in the application guard container and save them on the host file system
    */
    private ?bool $applicationGuardAllowFileSaveOnHost = null;
    
    /**
     * @var bool|null $applicationGuardAllowPersistence Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
    */
    private ?bool $applicationGuardAllowPersistence = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToLocalPrinters Allow printing to Local Printers from Container
    */
    private ?bool $applicationGuardAllowPrintToLocalPrinters = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToNetworkPrinters Allow printing to Network Printers from Container
    */
    private ?bool $applicationGuardAllowPrintToNetworkPrinters = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToPDF Allow printing to PDF from Container
    */
    private ?bool $applicationGuardAllowPrintToPDF = null;
    
    /**
     * @var bool|null $applicationGuardAllowPrintToXPS Allow printing to XPS from Container
    */
    private ?bool $applicationGuardAllowPrintToXPS = null;
    
    /**
     * @var bool|null $applicationGuardAllowVirtualGPU Allow application guard to use virtual GPU
    */
    private ?bool $applicationGuardAllowVirtualGPU = null;
    
    /**
     * @var ApplicationGuardBlockClipboardSharingType|null $applicationGuardBlockClipboardSharing Possible values for applicationGuardBlockClipboardSharingType
    */
    private ?ApplicationGuardBlockClipboardSharingType $applicationGuardBlockClipboardSharing = null;
    
    /**
     * @var ApplicationGuardBlockFileTransferType|null $applicationGuardBlockFileTransfer Possible values for applicationGuardBlockFileTransfer
    */
    private ?ApplicationGuardBlockFileTransferType $applicationGuardBlockFileTransfer = null;
    
    /**
     * @var bool|null $applicationGuardBlockNonEnterpriseContent Block enterprise sites to load non-enterprise content, such as third party plug-ins
    */
    private ?bool $applicationGuardBlockNonEnterpriseContent = null;
    
    /**
     * @var array<string>|null $applicationGuardCertificateThumbprints Allows certain device level Root Certificates to be shared with the Microsoft Defender Application Guard container.
    */
    private ?array $applicationGuardCertificateThumbprints = null;
    
    /**
     * @var bool|null $applicationGuardEnabled Enable Windows Defender Application Guard
    */
    private ?bool $applicationGuardEnabled = null;
    
    /**
     * @var ApplicationGuardEnabledOptions|null $applicationGuardEnabledOptions Possible values for ApplicationGuardEnabledOptions
    */
    private ?ApplicationGuardEnabledOptions $applicationGuardEnabledOptions = null;
    
    /**
     * @var bool|null $applicationGuardForceAuditing Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
    */
    private ?bool $applicationGuardForceAuditing = null;
    
    /**
     * @var AppLockerApplicationControlType|null $appLockerApplicationControl Possible values of AppLocker Application Control Types
    */
    private ?AppLockerApplicationControlType $appLockerApplicationControl = null;
    
    /**
     * @var bool|null $bitLockerAllowStandardUserEncryption Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
    */
    private ?bool $bitLockerAllowStandardUserEncryption = null;
    
    /**
     * @var bool|null $bitLockerDisableWarningForOtherDiskEncryption Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
    */
    private ?bool $bitLockerDisableWarningForOtherDiskEncryption = null;
    
    /**
     * @var bool|null $bitLockerEnableStorageCardEncryptionOnMobile Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
    */
    private ?bool $bitLockerEnableStorageCardEncryptionOnMobile = null;
    
    /**
     * @var bool|null $bitLockerEncryptDevice Allows the admin to require encryption to be turned on using BitLocker.
    */
    private ?bool $bitLockerEncryptDevice = null;
    
    /**
     * @var BitLockerFixedDrivePolicy|null $bitLockerFixedDrivePolicy BitLocker Fixed Drive Policy.
    */
    private ?BitLockerFixedDrivePolicy $bitLockerFixedDrivePolicy = null;
    
    /**
     * @var BitLockerRecoveryPasswordRotationType|null $bitLockerRecoveryPasswordRotation BitLocker recovery password rotation type
    */
    private ?BitLockerRecoveryPasswordRotationType $bitLockerRecoveryPasswordRotation = null;
    
    /**
     * @var BitLockerRemovableDrivePolicy|null $bitLockerRemovableDrivePolicy BitLocker Removable Drive Policy.
    */
    private ?BitLockerRemovableDrivePolicy $bitLockerRemovableDrivePolicy = null;
    
    /**
     * @var BitLockerSystemDrivePolicy|null $bitLockerSystemDrivePolicy BitLocker System Drive Policy.
    */
    private ?BitLockerSystemDrivePolicy $bitLockerSystemDrivePolicy = null;
    
    /**
     * @var array<string>|null $defenderAdditionalGuardedFolders List of folder paths to be added to the list of protected folders
    */
    private ?array $defenderAdditionalGuardedFolders = null;
    
    /**
     * @var DefenderProtectionType|null $defenderAdobeReaderLaunchChildProcess Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderAdobeReaderLaunchChildProcess = null;
    
    /**
     * @var DefenderProtectionType|null $defenderAdvancedRansomewareProtectionType Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderAdvancedRansomewareProtectionType = null;
    
    /**
     * @var bool|null $defenderAllowBehaviorMonitoring Allows or disallows Windows Defender Behavior Monitoring functionality.
    */
    private ?bool $defenderAllowBehaviorMonitoring = null;
    
    /**
     * @var bool|null $defenderAllowCloudProtection To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
    */
    private ?bool $defenderAllowCloudProtection = null;
    
    /**
     * @var bool|null $defenderAllowEndUserAccess Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
    */
    private ?bool $defenderAllowEndUserAccess = null;
    
    /**
     * @var bool|null $defenderAllowIntrusionPreventionSystem Allows or disallows Windows Defender Intrusion Prevention functionality.
    */
    private ?bool $defenderAllowIntrusionPreventionSystem = null;
    
    /**
     * @var bool|null $defenderAllowOnAccessProtection Allows or disallows Windows Defender On Access Protection functionality.
    */
    private ?bool $defenderAllowOnAccessProtection = null;
    
    /**
     * @var bool|null $defenderAllowRealTimeMonitoring Allows or disallows Windows Defender Realtime Monitoring functionality.
    */
    private ?bool $defenderAllowRealTimeMonitoring = null;
    
    /**
     * @var bool|null $defenderAllowScanArchiveFiles Allows or disallows scanning of archives.
    */
    private ?bool $defenderAllowScanArchiveFiles = null;
    
    /**
     * @var bool|null $defenderAllowScanDownloads Allows or disallows Windows Defender IOAVP Protection functionality.
    */
    private ?bool $defenderAllowScanDownloads = null;
    
    /**
     * @var bool|null $defenderAllowScanNetworkFiles Allows or disallows a scanning of network files.
    */
    private ?bool $defenderAllowScanNetworkFiles = null;
    
    /**
     * @var bool|null $defenderAllowScanRemovableDrivesDuringFullScan Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
    */
    private ?bool $defenderAllowScanRemovableDrivesDuringFullScan = null;
    
    /**
     * @var bool|null $defenderAllowScanScriptsLoadedInInternetExplorer Allows or disallows Windows Defender Script Scanning functionality.
    */
    private ?bool $defenderAllowScanScriptsLoadedInInternetExplorer = null;
    
    /**
     * @var array<string>|null $defenderAttackSurfaceReductionExcludedPaths List of exe files and folders to be excluded from attack surface reduction rules
    */
    private ?array $defenderAttackSurfaceReductionExcludedPaths = null;
    
    /**
     * @var bool|null $defenderBlockEndUserAccess Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
    */
    private ?bool $defenderBlockEndUserAccess = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderBlockPersistenceThroughWmiType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderBlockPersistenceThroughWmiType = null;
    
    /**
     * @var bool|null $defenderCheckForSignaturesBeforeRunningScan This policy setting allows you to manage whether a check for new virus and spyware definitions will occur before running a scan.
    */
    private ?bool $defenderCheckForSignaturesBeforeRunningScan = null;
    
    /**
     * @var DefenderCloudBlockLevelType|null $defenderCloudBlockLevel Added in Windows 10, version 1709. This policy setting determines how aggressive Windows Defender Antivirus will be in blocking and scanning suspicious files. Value type is integer. This feature requires the 'Join Microsoft MAPS' setting enabled in order to function. Possible values are: notConfigured, high, highPlus, zeroTolerance.
    */
    private ?DefenderCloudBlockLevelType $defenderCloudBlockLevel = null;
    
    /**
     * @var int|null $defenderCloudExtendedTimeoutInSeconds Added in Windows 10, version 1709. This feature allows Windows Defender Antivirus to block a suspicious file for up to 60 seconds, and scan it in the cloud to make sure it's safe. Value type is integer, range is 0 - 50. This feature depends on three other MAPS settings the must all be enabled- 'Configure the 'Block at First Sight' feature; 'Join Microsoft MAPS'; 'Send file samples when further analysis is required'. Valid values 0 to 50
    */
    private ?int $defenderCloudExtendedTimeoutInSeconds = null;
    
    /**
     * @var int|null $defenderDaysBeforeDeletingQuarantinedMalware Time period (in days) that quarantine items will be stored on the system. Valid values 0 to 90
    */
    private ?int $defenderDaysBeforeDeletingQuarantinedMalware = null;
    
    /**
     * @var DefenderDetectedMalwareActions|null $defenderDetectedMalwareActions Allows an administrator to specify any valid threat severity levels and the corresponding default action ID to take.
    */
    private ?DefenderDetectedMalwareActions $defenderDetectedMalwareActions = null;
    
    /**
     * @var bool|null $defenderDisableBehaviorMonitoring Allows or disallows Windows Defender Behavior Monitoring functionality.
    */
    private ?bool $defenderDisableBehaviorMonitoring = null;
    
    /**
     * @var bool|null $defenderDisableCatchupFullScan This policy setting allows you to configure catch-up scans for scheduled full scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
    */
    private ?bool $defenderDisableCatchupFullScan = null;
    
    /**
     * @var bool|null $defenderDisableCatchupQuickScan This policy setting allows you to configure catch-up scans for scheduled quick scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
    */
    private ?bool $defenderDisableCatchupQuickScan = null;
    
    /**
     * @var bool|null $defenderDisableCloudProtection To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
    */
    private ?bool $defenderDisableCloudProtection = null;
    
    /**
     * @var bool|null $defenderDisableIntrusionPreventionSystem Allows or disallows Windows Defender Intrusion Prevention functionality.
    */
    private ?bool $defenderDisableIntrusionPreventionSystem = null;
    
    /**
     * @var bool|null $defenderDisableOnAccessProtection Allows or disallows Windows Defender On Access Protection functionality.
    */
    private ?bool $defenderDisableOnAccessProtection = null;
    
    /**
     * @var bool|null $defenderDisableRealTimeMonitoring Allows or disallows Windows Defender Realtime Monitoring functionality.
    */
    private ?bool $defenderDisableRealTimeMonitoring = null;
    
    /**
     * @var bool|null $defenderDisableScanArchiveFiles Allows or disallows scanning of archives.
    */
    private ?bool $defenderDisableScanArchiveFiles = null;
    
    /**
     * @var bool|null $defenderDisableScanDownloads Allows or disallows Windows Defender IOAVP Protection functionality.
    */
    private ?bool $defenderDisableScanDownloads = null;
    
    /**
     * @var bool|null $defenderDisableScanNetworkFiles Allows or disallows a scanning of network files.
    */
    private ?bool $defenderDisableScanNetworkFiles = null;
    
    /**
     * @var bool|null $defenderDisableScanRemovableDrivesDuringFullScan Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
    */
    private ?bool $defenderDisableScanRemovableDrivesDuringFullScan = null;
    
    /**
     * @var bool|null $defenderDisableScanScriptsLoadedInInternetExplorer Allows or disallows Windows Defender Script Scanning functionality.
    */
    private ?bool $defenderDisableScanScriptsLoadedInInternetExplorer = null;
    
    /**
     * @var DefenderProtectionType|null $defenderEmailContentExecution Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderEmailContentExecution = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderEmailContentExecutionType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderEmailContentExecutionType = null;
    
    /**
     * @var bool|null $defenderEnableLowCpuPriority This policy setting allows you to enable or disable low CPU priority for scheduled scans.
    */
    private ?bool $defenderEnableLowCpuPriority = null;
    
    /**
     * @var bool|null $defenderEnableScanIncomingMail Allows or disallows scanning of email.
    */
    private ?bool $defenderEnableScanIncomingMail = null;
    
    /**
     * @var bool|null $defenderEnableScanMappedNetworkDrivesDuringFullScan Allows or disallows a full scan of mapped network drives.
    */
    private ?bool $defenderEnableScanMappedNetworkDrivesDuringFullScan = null;
    
    /**
     * @var StreamInterface|null $defenderExploitProtectionXml Xml content containing information regarding exploit protection details.
    */
    private ?StreamInterface $defenderExploitProtectionXml = null;
    
    /**
     * @var string|null $defenderExploitProtectionXmlFileName Name of the file from which DefenderExploitProtectionXml was obtained.
    */
    private ?string $defenderExploitProtectionXmlFileName = null;
    
    /**
     * @var array<string>|null $defenderFileExtensionsToExclude File extensions to exclude from scans and real time protection.
    */
    private ?array $defenderFileExtensionsToExclude = null;
    
    /**
     * @var array<string>|null $defenderFilesAndFoldersToExclude Files and folder to exclude from scans and real time protection.
    */
    private ?array $defenderFilesAndFoldersToExclude = null;
    
    /**
     * @var array<string>|null $defenderGuardedFoldersAllowedAppPaths List of paths to exe that are allowed to access protected folders
    */
    private ?array $defenderGuardedFoldersAllowedAppPaths = null;
    
    /**
     * @var FolderProtectionType|null $defenderGuardMyFoldersType Possible values of Folder Protection
    */
    private ?FolderProtectionType $defenderGuardMyFoldersType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderNetworkProtectionType Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderNetworkProtectionType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderOfficeAppsExecutableContentCreationOrLaunch Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderOfficeAppsExecutableContentCreationOrLaunch = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderOfficeAppsExecutableContentCreationOrLaunchType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderOfficeAppsExecutableContentCreationOrLaunchType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderOfficeAppsLaunchChildProcess Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderOfficeAppsLaunchChildProcess = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderOfficeAppsLaunchChildProcessType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderOfficeAppsLaunchChildProcessType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderOfficeAppsOtherProcessInjection Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderOfficeAppsOtherProcessInjection = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderOfficeAppsOtherProcessInjectionType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderOfficeAppsOtherProcessInjectionType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderOfficeCommunicationAppsLaunchChildProcess Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderOfficeCommunicationAppsLaunchChildProcess = null;
    
    /**
     * @var DefenderProtectionType|null $defenderOfficeMacroCodeAllowWin32Imports Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderOfficeMacroCodeAllowWin32Imports = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderOfficeMacroCodeAllowWin32ImportsType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderOfficeMacroCodeAllowWin32ImportsType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderPotentiallyUnwantedAppAction Added in Windows 10, version 1607. Specifies the level of detection for potentially unwanted applications (PUAs). Windows Defender alerts you when potentially unwanted software is being downloaded or attempts to install itself on your computer. Possible values are: userDefined, enable, auditMode, warn, notConfigured.
    */
    private ?DefenderProtectionType $defenderPotentiallyUnwantedAppAction = null;
    
    /**
     * @var DefenderProtectionType|null $defenderPreventCredentialStealingType Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderPreventCredentialStealingType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderProcessCreation Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderProcessCreation = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderProcessCreationType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderProcessCreationType = null;
    
    /**
     * @var array<string>|null $defenderProcessesToExclude Processes to exclude from scans and real time protection.
    */
    private ?array $defenderProcessesToExclude = null;
    
    /**
     * @var DefenderRealtimeScanDirection|null $defenderScanDirection Controls which sets of files should be monitored. Possible values are: monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
    */
    private ?DefenderRealtimeScanDirection $defenderScanDirection = null;
    
    /**
     * @var int|null $defenderScanMaxCpuPercentage Represents the average CPU load factor for the Windows Defender scan (in percent). The default value is 50. Valid values 0 to 100
    */
    private ?int $defenderScanMaxCpuPercentage = null;
    
    /**
     * @var DefenderScanType|null $defenderScanType Selects whether to perform a quick scan or full scan. Possible values are: userDefined, disabled, quick, full.
    */
    private ?DefenderScanType $defenderScanType = null;
    
    /**
     * @var Time|null $defenderScheduledQuickScanTime Selects the time of day that the Windows Defender quick scan should run. For example, a value of 0=12:00AM, a value of 60=1:00AM, a value of 120=2:00, and so on, up to a value of 1380=11:00PM. The default value is 120
    */
    private ?Time $defenderScheduledQuickScanTime = null;
    
    /**
     * @var WeeklySchedule|null $defenderScheduledScanDay Selects the day that the Windows Defender scan should run. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
    */
    private ?WeeklySchedule $defenderScheduledScanDay = null;
    
    /**
     * @var Time|null $defenderScheduledScanTime Selects the time of day that the Windows Defender scan should run.
    */
    private ?Time $defenderScheduledScanTime = null;
    
    /**
     * @var DefenderProtectionType|null $defenderScriptDownloadedPayloadExecution Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderScriptDownloadedPayloadExecution = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderScriptDownloadedPayloadExecutionType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderScriptDownloadedPayloadExecutionType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderScriptObfuscatedMacroCode Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderScriptObfuscatedMacroCode = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderScriptObfuscatedMacroCodeType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderScriptObfuscatedMacroCodeType = null;
    
    /**
     * @var bool|null $defenderSecurityCenterBlockExploitProtectionOverride Indicates whether or not to block user from overriding Exploit Protection settings.
    */
    private ?bool $defenderSecurityCenterBlockExploitProtectionOverride = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableAccountUI Used to disable the display of the account protection area.
    */
    private ?bool $defenderSecurityCenterDisableAccountUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableAppBrowserUI Used to disable the display of the app and browser protection area.
    */
    private ?bool $defenderSecurityCenterDisableAppBrowserUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableClearTpmUI Used to disable the display of the Clear TPM button.
    */
    private ?bool $defenderSecurityCenterDisableClearTpmUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableFamilyUI Used to disable the display of the family options area.
    */
    private ?bool $defenderSecurityCenterDisableFamilyUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableHardwareUI Used to disable the display of the hardware protection area.
    */
    private ?bool $defenderSecurityCenterDisableHardwareUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableHealthUI Used to disable the display of the device performance and health area.
    */
    private ?bool $defenderSecurityCenterDisableHealthUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableNetworkUI Used to disable the display of the firewall and network protection area.
    */
    private ?bool $defenderSecurityCenterDisableNetworkUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableNotificationAreaUI Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
    */
    private ?bool $defenderSecurityCenterDisableNotificationAreaUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableRansomwareUI Used to disable the display of the ransomware protection area.
    */
    private ?bool $defenderSecurityCenterDisableRansomwareUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableSecureBootUI Used to disable the display of the secure boot area under Device security.
    */
    private ?bool $defenderSecurityCenterDisableSecureBootUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableTroubleshootingUI Used to disable the display of the security process troubleshooting under Device security.
    */
    private ?bool $defenderSecurityCenterDisableTroubleshootingUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableVirusUI Used to disable the display of the virus and threat protection area.
    */
    private ?bool $defenderSecurityCenterDisableVirusUI = null;
    
    /**
     * @var bool|null $defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
    */
    private ?bool $defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI = null;
    
    /**
     * @var string|null $defenderSecurityCenterHelpEmail The email address that is displayed to users.
    */
    private ?string $defenderSecurityCenterHelpEmail = null;
    
    /**
     * @var string|null $defenderSecurityCenterHelpPhone The phone number or Skype ID that is displayed to users.
    */
    private ?string $defenderSecurityCenterHelpPhone = null;
    
    /**
     * @var string|null $defenderSecurityCenterHelpURL The help portal URL this is displayed to users.
    */
    private ?string $defenderSecurityCenterHelpURL = null;
    
    /**
     * @var DefenderSecurityCenterITContactDisplayType|null $defenderSecurityCenterITContactDisplay Possible values for defenderSecurityCenterITContactDisplay
    */
    private ?DefenderSecurityCenterITContactDisplayType $defenderSecurityCenterITContactDisplay = null;
    
    /**
     * @var DefenderSecurityCenterNotificationsFromAppType|null $defenderSecurityCenterNotificationsFromApp Possible values for defenderSecurityCenterNotificationsFromApp
    */
    private ?DefenderSecurityCenterNotificationsFromAppType $defenderSecurityCenterNotificationsFromApp = null;
    
    /**
     * @var string|null $defenderSecurityCenterOrganizationDisplayName The company name that is displayed to the users.
    */
    private ?string $defenderSecurityCenterOrganizationDisplayName = null;
    
    /**
     * @var int|null $defenderSignatureUpdateIntervalInHours Specifies the interval (in hours) that will be used to check for signatures, so instead of using the ScheduleDay and ScheduleTime the check for new signatures will be set according to the interval. Valid values 0 to 24
    */
    private ?int $defenderSignatureUpdateIntervalInHours = null;
    
    /**
     * @var DefenderSubmitSamplesConsentType|null $defenderSubmitSamplesConsentType Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
    */
    private ?DefenderSubmitSamplesConsentType $defenderSubmitSamplesConsentType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderUntrustedExecutable Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderUntrustedExecutable = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderUntrustedExecutableType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderUntrustedExecutableType = null;
    
    /**
     * @var DefenderProtectionType|null $defenderUntrustedUSBProcess Possible values of Defender PUA Protection
    */
    private ?DefenderProtectionType $defenderUntrustedUSBProcess = null;
    
    /**
     * @var DefenderAttackSurfaceType|null $defenderUntrustedUSBProcessType Possible values of Defender Attack Surface Reduction Rules
    */
    private ?DefenderAttackSurfaceType $defenderUntrustedUSBProcessType = null;
    
    /**
     * @var bool|null $deviceGuardEnableSecureBootWithDMA This property will be deprecated in May 2019 and will be replaced with property DeviceGuardSecureBootWithDMA. Specifies whether Platform Security Level is enabled at next reboot.
    */
    private ?bool $deviceGuardEnableSecureBootWithDMA = null;
    
    /**
     * @var bool|null $deviceGuardEnableVirtualizationBasedSecurity Turns On Virtualization Based Security(VBS).
    */
    private ?bool $deviceGuardEnableVirtualizationBasedSecurity = null;
    
    /**
     * @var Enablement|null $deviceGuardLaunchSystemGuard Possible values of a property
    */
    private ?Enablement $deviceGuardLaunchSystemGuard = null;
    
    /**
     * @var DeviceGuardLocalSystemAuthorityCredentialGuardType|null $deviceGuardLocalSystemAuthorityCredentialGuardSettings Possible values of Credential Guard settings.
    */
    private ?DeviceGuardLocalSystemAuthorityCredentialGuardType $deviceGuardLocalSystemAuthorityCredentialGuardSettings = null;
    
    /**
     * @var SecureBootWithDMAType|null $deviceGuardSecureBootWithDMA Possible values of Secure Boot with DMA
    */
    private ?SecureBootWithDMAType $deviceGuardSecureBootWithDMA = null;
    
    /**
     * @var DmaGuardDeviceEnumerationPolicyType|null $dmaGuardDeviceEnumerationPolicy Possible values of the DmaGuardDeviceEnumerationPolicy.
    */
    private ?DmaGuardDeviceEnumerationPolicyType $dmaGuardDeviceEnumerationPolicy = null;
    
    /**
     * @var bool|null $firewallBlockStatefulFTP Blocks stateful FTP connections to the device
    */
    private ?bool $firewallBlockStatefulFTP = null;
    
    /**
     * @var FirewallCertificateRevocationListCheckMethodType|null $firewallCertificateRevocationListCheckMethod Possible values for firewallCertificateRevocationListCheckMethod
    */
    private ?FirewallCertificateRevocationListCheckMethodType $firewallCertificateRevocationListCheckMethod = null;
    
    /**
     * @var int|null $firewallIdleTimeoutForSecurityAssociationInSeconds Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
    */
    private ?int $firewallIdleTimeoutForSecurityAssociationInSeconds = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowDHCP Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
    */
    private ?bool $firewallIPSecExemptionsAllowDHCP = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowICMP Configures IPSec exemptions to allow ICMP
    */
    private ?bool $firewallIPSecExemptionsAllowICMP = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowNeighborDiscovery Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
    */
    private ?bool $firewallIPSecExemptionsAllowNeighborDiscovery = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsAllowRouterDiscovery Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
    */
    private ?bool $firewallIPSecExemptionsAllowRouterDiscovery = null;
    
    /**
     * @var bool|null $firewallIPSecExemptionsNone Configures IPSec exemptions to no exemptions
    */
    private ?bool $firewallIPSecExemptionsNone = null;
    
    /**
     * @var bool|null $firewallMergeKeyingModuleSettings If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
    */
    private ?bool $firewallMergeKeyingModuleSettings = null;
    
    /**
     * @var FirewallPacketQueueingMethodType|null $firewallPacketQueueingMethod Possible values for firewallPacketQueueingMethod
    */
    private ?FirewallPacketQueueingMethodType $firewallPacketQueueingMethod = null;
    
    /**
     * @var FirewallPreSharedKeyEncodingMethodType|null $firewallPreSharedKeyEncodingMethod Possible values for firewallPreSharedKeyEncodingMethod
    */
    private ?FirewallPreSharedKeyEncodingMethodType $firewallPreSharedKeyEncodingMethod = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfileDomain Configures the firewall profile settings for domain networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfileDomain = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfilePrivate Configures the firewall profile settings for private networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfilePrivate = null;
    
    /**
     * @var WindowsFirewallNetworkProfile|null $firewallProfilePublic Configures the firewall profile settings for public networks
    */
    private ?WindowsFirewallNetworkProfile $firewallProfilePublic = null;
    
    /**
     * @var array<WindowsFirewallRule>|null $firewallRules Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
    */
    private ?array $firewallRules = null;
    
    /**
     * @var LanManagerAuthenticationLevel|null $lanManagerAuthenticationLevel Possible values for LanManagerAuthenticationLevel
    */
    private ?LanManagerAuthenticationLevel $lanManagerAuthenticationLevel = null;
    
    /**
     * @var bool|null $lanManagerWorkstationDisableInsecureGuestLogons If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
    */
    private ?bool $lanManagerWorkstationDisableInsecureGuestLogons = null;
    
    /**
     * @var string|null $localSecurityOptionsAdministratorAccountName Define a different account name to be associated with the security identifier (SID) for the account 'Administrator'.
    */
    private ?string $localSecurityOptionsAdministratorAccountName = null;
    
    /**
     * @var LocalSecurityOptionsAdministratorElevationPromptBehaviorType|null $localSecurityOptionsAdministratorElevationPromptBehavior Possible values for LocalSecurityOptionsAdministratorElevationPromptBehavior
    */
    private ?LocalSecurityOptionsAdministratorElevationPromptBehaviorType $localSecurityOptionsAdministratorElevationPromptBehavior = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
    */
    private ?bool $localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowPKU2UAuthenticationRequests Block PKU2U authentication requests to this device to use online identities.
    */
    private ?bool $localSecurityOptionsAllowPKU2UAuthenticationRequests = null;
    
    /**
     * @var string|null $localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
    */
    private ?string $localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
    */
    private ?bool $localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn This security setting determines whether a computer can be shut down without having to log on to Windows.
    */
    private ?bool $localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowUIAccessApplicationElevation Allow UIAccess apps to prompt for elevation without using the secure desktop.
    */
    private ?bool $localSecurityOptionsAllowUIAccessApplicationElevation = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowUIAccessApplicationsForSecureLocations Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
    */
    private ?bool $localSecurityOptionsAllowUIAccessApplicationsForSecureLocations = null;
    
    /**
     * @var bool|null $localSecurityOptionsAllowUndockWithoutHavingToLogon Prevent a portable computer from being undocked without having to log in.
    */
    private ?bool $localSecurityOptionsAllowUndockWithoutHavingToLogon = null;
    
    /**
     * @var bool|null $localSecurityOptionsBlockMicrosoftAccounts Prevent users from adding new Microsoft accounts to this computer.
    */
    private ?bool $localSecurityOptionsBlockMicrosoftAccounts = null;
    
    /**
     * @var bool|null $localSecurityOptionsBlockRemoteLogonWithBlankPassword Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
    */
    private ?bool $localSecurityOptionsBlockRemoteLogonWithBlankPassword = null;
    
    /**
     * @var bool|null $localSecurityOptionsBlockRemoteOpticalDriveAccess Enabling this settings allows only interactively logged on user to access CD-ROM media.
    */
    private ?bool $localSecurityOptionsBlockRemoteOpticalDriveAccess = null;
    
    /**
     * @var bool|null $localSecurityOptionsBlockUsersInstallingPrinterDrivers Restrict installing printer drivers as part of connecting to a shared printer to admins only.
    */
    private ?bool $localSecurityOptionsBlockUsersInstallingPrinterDrivers = null;
    
    /**
     * @var bool|null $localSecurityOptionsClearVirtualMemoryPageFile This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
    */
    private ?bool $localSecurityOptionsClearVirtualMemoryPageFile = null;
    
    /**
     * @var bool|null $localSecurityOptionsClientDigitallySignCommunicationsAlways This security setting determines whether packet signing is required by the SMB client component.
    */
    private ?bool $localSecurityOptionsClientDigitallySignCommunicationsAlways = null;
    
    /**
     * @var bool|null $localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
    */
    private ?bool $localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers = null;
    
    /**
     * @var bool|null $localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
    */
    private ?bool $localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation = null;
    
    /**
     * @var bool|null $localSecurityOptionsDisableAdministratorAccount Determines whether the Local Administrator account is enabled or disabled.
    */
    private ?bool $localSecurityOptionsDisableAdministratorAccount = null;
    
    /**
     * @var bool|null $localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
    */
    private ?bool $localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees = null;
    
    /**
     * @var bool|null $localSecurityOptionsDisableGuestAccount Determines if the Guest account is enabled or disabled.
    */
    private ?bool $localSecurityOptionsDisableGuestAccount = null;
    
    /**
     * @var bool|null $localSecurityOptionsDisableServerDigitallySignCommunicationsAlways This security setting determines whether packet signing is required by the SMB server component.
    */
    private ?bool $localSecurityOptionsDisableServerDigitallySignCommunicationsAlways = null;
    
    /**
     * @var bool|null $localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
    */
    private ?bool $localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees = null;
    
    /**
     * @var bool|null $localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts This security setting determines what additional permissions will be granted for anonymous connections to the computer.
    */
    private ?bool $localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts = null;
    
    /**
     * @var bool|null $localSecurityOptionsDoNotRequireCtrlAltDel Require CTRL+ALT+DEL to be pressed before a user can log on.
    */
    private ?bool $localSecurityOptionsDoNotRequireCtrlAltDel = null;
    
    /**
     * @var bool|null $localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. It’s not stored by default.
    */
    private ?bool $localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange = null;
    
    /**
     * @var LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType|null $localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser Possible values for LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
    */
    private ?LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType $localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser = null;
    
    /**
     * @var string|null $localSecurityOptionsGuestAccountName Define a different account name to be associated with the security identifier (SID) for the account 'Guest'.
    */
    private ?string $localSecurityOptionsGuestAccountName = null;
    
    /**
     * @var bool|null $localSecurityOptionsHideLastSignedInUser Do not display the username of the last person who signed in on this device.
    */
    private ?bool $localSecurityOptionsHideLastSignedInUser = null;
    
    /**
     * @var bool|null $localSecurityOptionsHideUsernameAtSignIn Do not display the username of the person signing in to this device after credentials are entered and before the device’s desktop is shown.
    */
    private ?bool $localSecurityOptionsHideUsernameAtSignIn = null;
    
    /**
     * @var LocalSecurityOptionsInformationDisplayedOnLockScreenType|null $localSecurityOptionsInformationDisplayedOnLockScreen Possible values for LocalSecurityOptionsInformationDisplayedOnLockScreen
    */
    private ?LocalSecurityOptionsInformationDisplayedOnLockScreenType $localSecurityOptionsInformationDisplayedOnLockScreen = null;
    
    /**
     * @var LocalSecurityOptionsInformationShownOnLockScreenType|null $localSecurityOptionsInformationShownOnLockScreen Possible values for LocalSecurityOptionsInformationShownOnLockScreenType
    */
    private ?LocalSecurityOptionsInformationShownOnLockScreenType $localSecurityOptionsInformationShownOnLockScreen = null;
    
    /**
     * @var string|null $localSecurityOptionsLogOnMessageText Set message text for users attempting to log in.
    */
    private ?string $localSecurityOptionsLogOnMessageText = null;
    
    /**
     * @var string|null $localSecurityOptionsLogOnMessageTitle Set message title for users attempting to log in.
    */
    private ?string $localSecurityOptionsLogOnMessageTitle = null;
    
    /**
     * @var int|null $localSecurityOptionsMachineInactivityLimit Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
    */
    private ?int $localSecurityOptionsMachineInactivityLimit = null;
    
    /**
     * @var int|null $localSecurityOptionsMachineInactivityLimitInMinutes Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
    */
    private ?int $localSecurityOptionsMachineInactivityLimitInMinutes = null;
    
    /**
     * @var LocalSecurityOptionsMinimumSessionSecurity|null $localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients Possible values for LocalSecurityOptionsMinimumSessionSecurity
    */
    private ?LocalSecurityOptionsMinimumSessionSecurity $localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients = null;
    
    /**
     * @var LocalSecurityOptionsMinimumSessionSecurity|null $localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers Possible values for LocalSecurityOptionsMinimumSessionSecurity
    */
    private ?LocalSecurityOptionsMinimumSessionSecurity $localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers = null;
    
    /**
     * @var bool|null $localSecurityOptionsOnlyElevateSignedExecutables Enforce PKI certification path validation for a given executable file before it is permitted to run.
    */
    private ?bool $localSecurityOptionsOnlyElevateSignedExecutables = null;
    
    /**
     * @var bool|null $localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
    */
    private ?bool $localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares = null;
    
    /**
     * @var LocalSecurityOptionsSmartCardRemovalBehaviorType|null $localSecurityOptionsSmartCardRemovalBehavior Possible values for LocalSecurityOptionsSmartCardRemovalBehaviorType
    */
    private ?LocalSecurityOptionsSmartCardRemovalBehaviorType $localSecurityOptionsSmartCardRemovalBehavior = null;
    
    /**
     * @var LocalSecurityOptionsStandardUserElevationPromptBehaviorType|null $localSecurityOptionsStandardUserElevationPromptBehavior Possible values for LocalSecurityOptionsStandardUserElevationPromptBehavior
    */
    private ?LocalSecurityOptionsStandardUserElevationPromptBehaviorType $localSecurityOptionsStandardUserElevationPromptBehavior = null;
    
    /**
     * @var bool|null $localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
    */
    private ?bool $localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation = null;
    
    /**
     * @var bool|null $localSecurityOptionsUseAdminApprovalMode Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
    */
    private ?bool $localSecurityOptionsUseAdminApprovalMode = null;
    
    /**
     * @var bool|null $localSecurityOptionsUseAdminApprovalModeForAdministrators Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
    */
    private ?bool $localSecurityOptionsUseAdminApprovalModeForAdministrators = null;
    
    /**
     * @var bool|null $localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations Virtualize file and registry write failures to per user locations
    */
    private ?bool $localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations = null;
    
    /**
     * @var bool|null $smartScreenBlockOverrideForFiles Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
    */
    private ?bool $smartScreenBlockOverrideForFiles = null;
    
    /**
     * @var bool|null $smartScreenEnableInShell Allows IT Admins to configure SmartScreen for Windows.
    */
    private ?bool $smartScreenEnableInShell = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsAccessCredentialManagerAsTrustedCaller This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsAccessCredentialManagerAsTrustedCaller = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsActAsPartOfTheOperatingSystem This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsActAsPartOfTheOperatingSystem = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsAllowAccessFromNetwork This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsAllowAccessFromNetwork = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsBackupData This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsBackupData = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsBlockAccessFromNetwork This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsBlockAccessFromNetwork = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsChangeSystemTime This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsChangeSystemTime = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsCreateGlobalObjects This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsCreateGlobalObjects = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsCreatePageFile This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsCreatePageFile = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsCreatePermanentSharedObjects This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsCreatePermanentSharedObjects = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsCreateSymbolicLinks This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsCreateSymbolicLinks = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsCreateToken This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsCreateToken = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsDebugPrograms This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsDebugPrograms = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsDelegation This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsDelegation = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsDenyLocalLogOn This user right determines which users cannot log on to the computer. States NotConfigured, Blocked are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsDenyLocalLogOn = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsGenerateSecurityAudits This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsGenerateSecurityAudits = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsImpersonateClient Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsImpersonateClient = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsIncreaseSchedulingPriority This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsIncreaseSchedulingPriority = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsLoadUnloadDrivers This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsLoadUnloadDrivers = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsLocalLogOn This user right determines which users can log on to the computer. States NotConfigured, Allowed are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsLocalLogOn = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsLockMemory This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsLockMemory = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsManageAuditingAndSecurityLogs This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsManageAuditingAndSecurityLogs = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsManageVolumes This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsManageVolumes = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsModifyFirmwareEnvironment This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsModifyFirmwareEnvironment = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsModifyObjectLabels This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsModifyObjectLabels = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsProfileSingleProcess This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsProfileSingleProcess = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsRemoteDesktopServicesLogOn This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
    */
    private ?DeviceManagementUserRightsSetting $userRightsRemoteDesktopServicesLogOn = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsRemoteShutdown This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsRemoteShutdown = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsRestoreData This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsRestoreData = null;
    
    /**
     * @var DeviceManagementUserRightsSetting|null $userRightsTakeOwnership This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
    */
    private ?DeviceManagementUserRightsSetting $userRightsTakeOwnership = null;
    
    /**
     * @var WindowsDefenderTamperProtectionOptions|null $windowsDefenderTamperProtection Defender TamperProtection setting options
    */
    private ?WindowsDefenderTamperProtectionOptions $windowsDefenderTamperProtection = null;
    
    /**
     * @var ServiceStartType|null $xboxServicesAccessoryManagementServiceStartupMode Possible values of xbox service start type
    */
    private ?ServiceStartType $xboxServicesAccessoryManagementServiceStartupMode = null;
    
    /**
     * @var bool|null $xboxServicesEnableXboxGameSaveTask This setting determines whether xbox game save is enabled (1) or disabled (0).
    */
    private ?bool $xboxServicesEnableXboxGameSaveTask = null;
    
    /**
     * @var ServiceStartType|null $xboxServicesLiveAuthManagerServiceStartupMode Possible values of xbox service start type
    */
    private ?ServiceStartType $xboxServicesLiveAuthManagerServiceStartupMode = null;
    
    /**
     * @var ServiceStartType|null $xboxServicesLiveGameSaveServiceStartupMode Possible values of xbox service start type
    */
    private ?ServiceStartType $xboxServicesLiveGameSaveServiceStartupMode = null;
    
    /**
     * @var ServiceStartType|null $xboxServicesLiveNetworkingServiceStartupMode Possible values of xbox service start type
    */
    private ?ServiceStartType $xboxServicesLiveNetworkingServiceStartupMode = null;
    
    /**
     * Instantiates a new Windows10EndpointProtectionConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EndpointProtectionConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EndpointProtectionConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EndpointProtectionConfiguration {
        return new Windows10EndpointProtectionConfiguration();
    }

    /**
     * Gets the applicationGuardAllowCameraMicrophoneRedirection property value. Gets or sets whether applications inside Microsoft Defender Application Guard can access the device’s camera and microphone.
     * @return bool|null
    */
    public function getApplicationGuardAllowCameraMicrophoneRedirection(): ?bool {
        return $this->applicationGuardAllowCameraMicrophoneRedirection;
    }

    /**
     * Gets the applicationGuardAllowFileSaveOnHost property value. Allow users to download files from Edge in the application guard container and save them on the host file system
     * @return bool|null
    */
    public function getApplicationGuardAllowFileSaveOnHost(): ?bool {
        return $this->applicationGuardAllowFileSaveOnHost;
    }

    /**
     * Gets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     * @return bool|null
    */
    public function getApplicationGuardAllowPersistence(): ?bool {
        return $this->applicationGuardAllowPersistence;
    }

    /**
     * Gets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToLocalPrinters(): ?bool {
        return $this->applicationGuardAllowPrintToLocalPrinters;
    }

    /**
     * Gets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters(): ?bool {
        return $this->applicationGuardAllowPrintToNetworkPrinters;
    }

    /**
     * Gets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToPDF(): ?bool {
        return $this->applicationGuardAllowPrintToPDF;
    }

    /**
     * Gets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToXPS(): ?bool {
        return $this->applicationGuardAllowPrintToXPS;
    }

    /**
     * Gets the applicationGuardAllowVirtualGPU property value. Allow application guard to use virtual GPU
     * @return bool|null
    */
    public function getApplicationGuardAllowVirtualGPU(): ?bool {
        return $this->applicationGuardAllowVirtualGPU;
    }

    /**
     * Gets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     * @return ApplicationGuardBlockClipboardSharingType|null
    */
    public function getApplicationGuardBlockClipboardSharing(): ?ApplicationGuardBlockClipboardSharingType {
        return $this->applicationGuardBlockClipboardSharing;
    }

    /**
     * Gets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     * @return ApplicationGuardBlockFileTransferType|null
    */
    public function getApplicationGuardBlockFileTransfer(): ?ApplicationGuardBlockFileTransferType {
        return $this->applicationGuardBlockFileTransfer;
    }

    /**
     * Gets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     * @return bool|null
    */
    public function getApplicationGuardBlockNonEnterpriseContent(): ?bool {
        return $this->applicationGuardBlockNonEnterpriseContent;
    }

    /**
     * Gets the applicationGuardCertificateThumbprints property value. Allows certain device level Root Certificates to be shared with the Microsoft Defender Application Guard container.
     * @return array<string>|null
    */
    public function getApplicationGuardCertificateThumbprints(): ?array {
        return $this->applicationGuardCertificateThumbprints;
    }

    /**
     * Gets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     * @return bool|null
    */
    public function getApplicationGuardEnabled(): ?bool {
        return $this->applicationGuardEnabled;
    }

    /**
     * Gets the applicationGuardEnabledOptions property value. Possible values for ApplicationGuardEnabledOptions
     * @return ApplicationGuardEnabledOptions|null
    */
    public function getApplicationGuardEnabledOptions(): ?ApplicationGuardEnabledOptions {
        return $this->applicationGuardEnabledOptions;
    }

    /**
     * Gets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     * @return bool|null
    */
    public function getApplicationGuardForceAuditing(): ?bool {
        return $this->applicationGuardForceAuditing;
    }

    /**
     * Gets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     * @return AppLockerApplicationControlType|null
    */
    public function getAppLockerApplicationControl(): ?AppLockerApplicationControlType {
        return $this->appLockerApplicationControl;
    }

    /**
     * Gets the bitLockerAllowStandardUserEncryption property value. Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
     * @return bool|null
    */
    public function getBitLockerAllowStandardUserEncryption(): ?bool {
        return $this->bitLockerAllowStandardUserEncryption;
    }

    /**
     * Gets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     * @return bool|null
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption(): ?bool {
        return $this->bitLockerDisableWarningForOtherDiskEncryption;
    }

    /**
     * Gets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     * @return bool|null
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile(): ?bool {
        return $this->bitLockerEnableStorageCardEncryptionOnMobile;
    }

    /**
     * Gets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     * @return bool|null
    */
    public function getBitLockerEncryptDevice(): ?bool {
        return $this->bitLockerEncryptDevice;
    }

    /**
     * Gets the bitLockerFixedDrivePolicy property value. BitLocker Fixed Drive Policy.
     * @return BitLockerFixedDrivePolicy|null
    */
    public function getBitLockerFixedDrivePolicy(): ?BitLockerFixedDrivePolicy {
        return $this->bitLockerFixedDrivePolicy;
    }

    /**
     * Gets the bitLockerRecoveryPasswordRotation property value. BitLocker recovery password rotation type
     * @return BitLockerRecoveryPasswordRotationType|null
    */
    public function getBitLockerRecoveryPasswordRotation(): ?BitLockerRecoveryPasswordRotationType {
        return $this->bitLockerRecoveryPasswordRotation;
    }

    /**
     * Gets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     * @return BitLockerRemovableDrivePolicy|null
    */
    public function getBitLockerRemovableDrivePolicy(): ?BitLockerRemovableDrivePolicy {
        return $this->bitLockerRemovableDrivePolicy;
    }

    /**
     * Gets the bitLockerSystemDrivePolicy property value. BitLocker System Drive Policy.
     * @return BitLockerSystemDrivePolicy|null
    */
    public function getBitLockerSystemDrivePolicy(): ?BitLockerSystemDrivePolicy {
        return $this->bitLockerSystemDrivePolicy;
    }

    /**
     * Gets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     * @return array<string>|null
    */
    public function getDefenderAdditionalGuardedFolders(): ?array {
        return $this->defenderAdditionalGuardedFolders;
    }

    /**
     * Gets the defenderAdobeReaderLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderAdobeReaderLaunchChildProcess(): ?DefenderProtectionType {
        return $this->defenderAdobeReaderLaunchChildProcess;
    }

    /**
     * Gets the defenderAdvancedRansomewareProtectionType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderAdvancedRansomewareProtectionType(): ?DefenderProtectionType {
        return $this->defenderAdvancedRansomewareProtectionType;
    }

    /**
     * Gets the defenderAllowBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderAllowBehaviorMonitoring(): ?bool {
        return $this->defenderAllowBehaviorMonitoring;
    }

    /**
     * Gets the defenderAllowCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @return bool|null
    */
    public function getDefenderAllowCloudProtection(): ?bool {
        return $this->defenderAllowCloudProtection;
    }

    /**
     * Gets the defenderAllowEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @return bool|null
    */
    public function getDefenderAllowEndUserAccess(): ?bool {
        return $this->defenderAllowEndUserAccess;
    }

    /**
     * Gets the defenderAllowIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @return bool|null
    */
    public function getDefenderAllowIntrusionPreventionSystem(): ?bool {
        return $this->defenderAllowIntrusionPreventionSystem;
    }

    /**
     * Gets the defenderAllowOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderAllowOnAccessProtection(): ?bool {
        return $this->defenderAllowOnAccessProtection;
    }

    /**
     * Gets the defenderAllowRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderAllowRealTimeMonitoring(): ?bool {
        return $this->defenderAllowRealTimeMonitoring;
    }

    /**
     * Gets the defenderAllowScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @return bool|null
    */
    public function getDefenderAllowScanArchiveFiles(): ?bool {
        return $this->defenderAllowScanArchiveFiles;
    }

    /**
     * Gets the defenderAllowScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @return bool|null
    */
    public function getDefenderAllowScanDownloads(): ?bool {
        return $this->defenderAllowScanDownloads;
    }

    /**
     * Gets the defenderAllowScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @return bool|null
    */
    public function getDefenderAllowScanNetworkFiles(): ?bool {
        return $this->defenderAllowScanNetworkFiles;
    }

    /**
     * Gets the defenderAllowScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @return bool|null
    */
    public function getDefenderAllowScanRemovableDrivesDuringFullScan(): ?bool {
        return $this->defenderAllowScanRemovableDrivesDuringFullScan;
    }

    /**
     * Gets the defenderAllowScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @return bool|null
    */
    public function getDefenderAllowScanScriptsLoadedInInternetExplorer(): ?bool {
        return $this->defenderAllowScanScriptsLoadedInInternetExplorer;
    }

    /**
     * Gets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     * @return array<string>|null
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths(): ?array {
        return $this->defenderAttackSurfaceReductionExcludedPaths;
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        return $this->defenderBlockEndUserAccess;
    }

    /**
     * Gets the defenderBlockPersistenceThroughWmiType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderBlockPersistenceThroughWmiType(): ?DefenderAttackSurfaceType {
        return $this->defenderBlockPersistenceThroughWmiType;
    }

    /**
     * Gets the defenderCheckForSignaturesBeforeRunningScan property value. This policy setting allows you to manage whether a check for new virus and spyware definitions will occur before running a scan.
     * @return bool|null
    */
    public function getDefenderCheckForSignaturesBeforeRunningScan(): ?bool {
        return $this->defenderCheckForSignaturesBeforeRunningScan;
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Added in Windows 10, version 1709. This policy setting determines how aggressive Windows Defender Antivirus will be in blocking and scanning suspicious files. Value type is integer. This feature requires the 'Join Microsoft MAPS' setting enabled in order to function. Possible values are: notConfigured, high, highPlus, zeroTolerance.
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        return $this->defenderCloudBlockLevel;
    }

    /**
     * Gets the defenderCloudExtendedTimeoutInSeconds property value. Added in Windows 10, version 1709. This feature allows Windows Defender Antivirus to block a suspicious file for up to 60 seconds, and scan it in the cloud to make sure it's safe. Value type is integer, range is 0 - 50. This feature depends on three other MAPS settings the must all be enabled- 'Configure the 'Block at First Sight' feature; 'Join Microsoft MAPS'; 'Send file samples when further analysis is required'. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeoutInSeconds(): ?int {
        return $this->defenderCloudExtendedTimeoutInSeconds;
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Time period (in days) that quarantine items will be stored on the system. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        return $this->defenderDaysBeforeDeletingQuarantinedMalware;
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Allows an administrator to specify any valid threat severity levels and the corresponding default action ID to take.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        return $this->defenderDetectedMalwareActions;
    }

    /**
     * Gets the defenderDisableBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderDisableBehaviorMonitoring(): ?bool {
        return $this->defenderDisableBehaviorMonitoring;
    }

    /**
     * Gets the defenderDisableCatchupFullScan property value. This policy setting allows you to configure catch-up scans for scheduled full scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @return bool|null
    */
    public function getDefenderDisableCatchupFullScan(): ?bool {
        return $this->defenderDisableCatchupFullScan;
    }

    /**
     * Gets the defenderDisableCatchupQuickScan property value. This policy setting allows you to configure catch-up scans for scheduled quick scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @return bool|null
    */
    public function getDefenderDisableCatchupQuickScan(): ?bool {
        return $this->defenderDisableCatchupQuickScan;
    }

    /**
     * Gets the defenderDisableCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @return bool|null
    */
    public function getDefenderDisableCloudProtection(): ?bool {
        return $this->defenderDisableCloudProtection;
    }

    /**
     * Gets the defenderDisableIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @return bool|null
    */
    public function getDefenderDisableIntrusionPreventionSystem(): ?bool {
        return $this->defenderDisableIntrusionPreventionSystem;
    }

    /**
     * Gets the defenderDisableOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderDisableOnAccessProtection(): ?bool {
        return $this->defenderDisableOnAccessProtection;
    }

    /**
     * Gets the defenderDisableRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderDisableRealTimeMonitoring(): ?bool {
        return $this->defenderDisableRealTimeMonitoring;
    }

    /**
     * Gets the defenderDisableScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @return bool|null
    */
    public function getDefenderDisableScanArchiveFiles(): ?bool {
        return $this->defenderDisableScanArchiveFiles;
    }

    /**
     * Gets the defenderDisableScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @return bool|null
    */
    public function getDefenderDisableScanDownloads(): ?bool {
        return $this->defenderDisableScanDownloads;
    }

    /**
     * Gets the defenderDisableScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @return bool|null
    */
    public function getDefenderDisableScanNetworkFiles(): ?bool {
        return $this->defenderDisableScanNetworkFiles;
    }

    /**
     * Gets the defenderDisableScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @return bool|null
    */
    public function getDefenderDisableScanRemovableDrivesDuringFullScan(): ?bool {
        return $this->defenderDisableScanRemovableDrivesDuringFullScan;
    }

    /**
     * Gets the defenderDisableScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @return bool|null
    */
    public function getDefenderDisableScanScriptsLoadedInInternetExplorer(): ?bool {
        return $this->defenderDisableScanScriptsLoadedInInternetExplorer;
    }

    /**
     * Gets the defenderEmailContentExecution property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderEmailContentExecution(): ?DefenderProtectionType {
        return $this->defenderEmailContentExecution;
    }

    /**
     * Gets the defenderEmailContentExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderEmailContentExecutionType(): ?DefenderAttackSurfaceType {
        return $this->defenderEmailContentExecutionType;
    }

    /**
     * Gets the defenderEnableLowCpuPriority property value. This policy setting allows you to enable or disable low CPU priority for scheduled scans.
     * @return bool|null
    */
    public function getDefenderEnableLowCpuPriority(): ?bool {
        return $this->defenderEnableLowCpuPriority;
    }

    /**
     * Gets the defenderEnableScanIncomingMail property value. Allows or disallows scanning of email.
     * @return bool|null
    */
    public function getDefenderEnableScanIncomingMail(): ?bool {
        return $this->defenderEnableScanIncomingMail;
    }

    /**
     * Gets the defenderEnableScanMappedNetworkDrivesDuringFullScan property value. Allows or disallows a full scan of mapped network drives.
     * @return bool|null
    */
    public function getDefenderEnableScanMappedNetworkDrivesDuringFullScan(): ?bool {
        return $this->defenderEnableScanMappedNetworkDrivesDuringFullScan;
    }

    /**
     * Gets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     * @return StreamInterface
    */
    public function getDefenderExploitProtectionXml(): StreamInterface {
        return $this->defenderExploitProtectionXml;
    }

    /**
     * Gets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     * @return string|null
    */
    public function getDefenderExploitProtectionXmlFileName(): ?string {
        return $this->defenderExploitProtectionXmlFileName;
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
     * Gets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     * @return array<string>|null
    */
    public function getDefenderGuardedFoldersAllowedAppPaths(): ?array {
        return $this->defenderGuardedFoldersAllowedAppPaths;
    }

    /**
     * Gets the defenderGuardMyFoldersType property value. Possible values of Folder Protection
     * @return FolderProtectionType|null
    */
    public function getDefenderGuardMyFoldersType(): ?FolderProtectionType {
        return $this->defenderGuardMyFoldersType;
    }

    /**
     * Gets the defenderNetworkProtectionType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderNetworkProtectionType(): ?DefenderProtectionType {
        return $this->defenderNetworkProtectionType;
    }

    /**
     * Gets the defenderOfficeAppsExecutableContentCreationOrLaunch property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunch(): ?DefenderProtectionType {
        return $this->defenderOfficeAppsExecutableContentCreationOrLaunch;
    }

    /**
     * Gets the defenderOfficeAppsExecutableContentCreationOrLaunchType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunchType(): ?DefenderAttackSurfaceType {
        return $this->defenderOfficeAppsExecutableContentCreationOrLaunchType;
    }

    /**
     * Gets the defenderOfficeAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsLaunchChildProcess(): ?DefenderProtectionType {
        return $this->defenderOfficeAppsLaunchChildProcess;
    }

    /**
     * Gets the defenderOfficeAppsLaunchChildProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsLaunchChildProcessType(): ?DefenderAttackSurfaceType {
        return $this->defenderOfficeAppsLaunchChildProcessType;
    }

    /**
     * Gets the defenderOfficeAppsOtherProcessInjection property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsOtherProcessInjection(): ?DefenderProtectionType {
        return $this->defenderOfficeAppsOtherProcessInjection;
    }

    /**
     * Gets the defenderOfficeAppsOtherProcessInjectionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsOtherProcessInjectionType(): ?DefenderAttackSurfaceType {
        return $this->defenderOfficeAppsOtherProcessInjectionType;
    }

    /**
     * Gets the defenderOfficeCommunicationAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeCommunicationAppsLaunchChildProcess(): ?DefenderProtectionType {
        return $this->defenderOfficeCommunicationAppsLaunchChildProcess;
    }

    /**
     * Gets the defenderOfficeMacroCodeAllowWin32Imports property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeMacroCodeAllowWin32Imports(): ?DefenderProtectionType {
        return $this->defenderOfficeMacroCodeAllowWin32Imports;
    }

    /**
     * Gets the defenderOfficeMacroCodeAllowWin32ImportsType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeMacroCodeAllowWin32ImportsType(): ?DefenderAttackSurfaceType {
        return $this->defenderOfficeMacroCodeAllowWin32ImportsType;
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppAction property value. Added in Windows 10, version 1607. Specifies the level of detection for potentially unwanted applications (PUAs). Windows Defender alerts you when potentially unwanted software is being downloaded or attempts to install itself on your computer. Possible values are: userDefined, enable, auditMode, warn, notConfigured.
     * @return DefenderProtectionType|null
    */
    public function getDefenderPotentiallyUnwantedAppAction(): ?DefenderProtectionType {
        return $this->defenderPotentiallyUnwantedAppAction;
    }

    /**
     * Gets the defenderPreventCredentialStealingType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderPreventCredentialStealingType(): ?DefenderProtectionType {
        return $this->defenderPreventCredentialStealingType;
    }

    /**
     * Gets the defenderProcessCreation property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderProcessCreation(): ?DefenderProtectionType {
        return $this->defenderProcessCreation;
    }

    /**
     * Gets the defenderProcessCreationType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderProcessCreationType(): ?DefenderAttackSurfaceType {
        return $this->defenderProcessCreationType;
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        return $this->defenderProcessesToExclude;
    }

    /**
     * Gets the defenderScanDirection property value. Controls which sets of files should be monitored. Possible values are: monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
     * @return DefenderRealtimeScanDirection|null
    */
    public function getDefenderScanDirection(): ?DefenderRealtimeScanDirection {
        return $this->defenderScanDirection;
    }

    /**
     * Gets the defenderScanMaxCpuPercentage property value. Represents the average CPU load factor for the Windows Defender scan (in percent). The default value is 50. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpuPercentage(): ?int {
        return $this->defenderScanMaxCpuPercentage;
    }

    /**
     * Gets the defenderScanType property value. Selects whether to perform a quick scan or full scan. Possible values are: userDefined, disabled, quick, full.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        return $this->defenderScanType;
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. Selects the time of day that the Windows Defender quick scan should run. For example, a value of 0=12:00AM, a value of 60=1:00AM, a value of 120=2:00, and so on, up to a value of 1380=11:00PM. The default value is 120
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        return $this->defenderScheduledQuickScanTime;
    }

    /**
     * Gets the defenderScheduledScanDay property value. Selects the day that the Windows Defender scan should run. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
     * @return WeeklySchedule|null
    */
    public function getDefenderScheduledScanDay(): ?WeeklySchedule {
        return $this->defenderScheduledScanDay;
    }

    /**
     * Gets the defenderScheduledScanTime property value. Selects the time of day that the Windows Defender scan should run.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        return $this->defenderScheduledScanTime;
    }

    /**
     * Gets the defenderScriptDownloadedPayloadExecution property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderScriptDownloadedPayloadExecution(): ?DefenderProtectionType {
        return $this->defenderScriptDownloadedPayloadExecution;
    }

    /**
     * Gets the defenderScriptDownloadedPayloadExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderScriptDownloadedPayloadExecutionType(): ?DefenderAttackSurfaceType {
        return $this->defenderScriptDownloadedPayloadExecutionType;
    }

    /**
     * Gets the defenderScriptObfuscatedMacroCode property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderScriptObfuscatedMacroCode(): ?DefenderProtectionType {
        return $this->defenderScriptObfuscatedMacroCode;
    }

    /**
     * Gets the defenderScriptObfuscatedMacroCodeType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderScriptObfuscatedMacroCodeType(): ?DefenderAttackSurfaceType {
        return $this->defenderScriptObfuscatedMacroCodeType;
    }

    /**
     * Gets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     * @return bool|null
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride(): ?bool {
        return $this->defenderSecurityCenterBlockExploitProtectionOverride;
    }

    /**
     * Gets the defenderSecurityCenterDisableAccountUI property value. Used to disable the display of the account protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableAccountUI(): ?bool {
        return $this->defenderSecurityCenterDisableAccountUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableAppBrowserUI property value. Used to disable the display of the app and browser protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableAppBrowserUI(): ?bool {
        return $this->defenderSecurityCenterDisableAppBrowserUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableClearTpmUI property value. Used to disable the display of the Clear TPM button.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableClearTpmUI(): ?bool {
        return $this->defenderSecurityCenterDisableClearTpmUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableFamilyUI property value. Used to disable the display of the family options area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableFamilyUI(): ?bool {
        return $this->defenderSecurityCenterDisableFamilyUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableHardwareUI property value. Used to disable the display of the hardware protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableHardwareUI(): ?bool {
        return $this->defenderSecurityCenterDisableHardwareUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableHealthUI property value. Used to disable the display of the device performance and health area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableHealthUI(): ?bool {
        return $this->defenderSecurityCenterDisableHealthUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableNetworkUI property value. Used to disable the display of the firewall and network protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableNetworkUI(): ?bool {
        return $this->defenderSecurityCenterDisableNetworkUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableNotificationAreaUI property value. Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableNotificationAreaUI(): ?bool {
        return $this->defenderSecurityCenterDisableNotificationAreaUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableRansomwareUI property value. Used to disable the display of the ransomware protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableRansomwareUI(): ?bool {
        return $this->defenderSecurityCenterDisableRansomwareUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableSecureBootUI property value. Used to disable the display of the secure boot area under Device security.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableSecureBootUI(): ?bool {
        return $this->defenderSecurityCenterDisableSecureBootUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableTroubleshootingUI property value. Used to disable the display of the security process troubleshooting under Device security.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableTroubleshootingUI(): ?bool {
        return $this->defenderSecurityCenterDisableTroubleshootingUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableVirusUI property value. Used to disable the display of the virus and threat protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableVirusUI(): ?bool {
        return $this->defenderSecurityCenterDisableVirusUI;
    }

    /**
     * Gets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property value. Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI(): ?bool {
        return $this->defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI;
    }

    /**
     * Gets the defenderSecurityCenterHelpEmail property value. The email address that is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpEmail(): ?string {
        return $this->defenderSecurityCenterHelpEmail;
    }

    /**
     * Gets the defenderSecurityCenterHelpPhone property value. The phone number or Skype ID that is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpPhone(): ?string {
        return $this->defenderSecurityCenterHelpPhone;
    }

    /**
     * Gets the defenderSecurityCenterHelpURL property value. The help portal URL this is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpURL(): ?string {
        return $this->defenderSecurityCenterHelpURL;
    }

    /**
     * Gets the defenderSecurityCenterITContactDisplay property value. Possible values for defenderSecurityCenterITContactDisplay
     * @return DefenderSecurityCenterITContactDisplayType|null
    */
    public function getDefenderSecurityCenterITContactDisplay(): ?DefenderSecurityCenterITContactDisplayType {
        return $this->defenderSecurityCenterITContactDisplay;
    }

    /**
     * Gets the defenderSecurityCenterNotificationsFromApp property value. Possible values for defenderSecurityCenterNotificationsFromApp
     * @return DefenderSecurityCenterNotificationsFromAppType|null
    */
    public function getDefenderSecurityCenterNotificationsFromApp(): ?DefenderSecurityCenterNotificationsFromAppType {
        return $this->defenderSecurityCenterNotificationsFromApp;
    }

    /**
     * Gets the defenderSecurityCenterOrganizationDisplayName property value. The company name that is displayed to the users.
     * @return string|null
    */
    public function getDefenderSecurityCenterOrganizationDisplayName(): ?string {
        return $this->defenderSecurityCenterOrganizationDisplayName;
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. Specifies the interval (in hours) that will be used to check for signatures, so instead of using the ScheduleDay and ScheduleTime the check for new signatures will be set according to the interval. Valid values 0 to 24
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
     * Gets the defenderUntrustedExecutable property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderUntrustedExecutable(): ?DefenderProtectionType {
        return $this->defenderUntrustedExecutable;
    }

    /**
     * Gets the defenderUntrustedExecutableType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderUntrustedExecutableType(): ?DefenderAttackSurfaceType {
        return $this->defenderUntrustedExecutableType;
    }

    /**
     * Gets the defenderUntrustedUSBProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderUntrustedUSBProcess(): ?DefenderProtectionType {
        return $this->defenderUntrustedUSBProcess;
    }

    /**
     * Gets the defenderUntrustedUSBProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderUntrustedUSBProcessType(): ?DefenderAttackSurfaceType {
        return $this->defenderUntrustedUSBProcessType;
    }

    /**
     * Gets the deviceGuardEnableSecureBootWithDMA property value. This property will be deprecated in May 2019 and will be replaced with property DeviceGuardSecureBootWithDMA. Specifies whether Platform Security Level is enabled at next reboot.
     * @return bool|null
    */
    public function getDeviceGuardEnableSecureBootWithDMA(): ?bool {
        return $this->deviceGuardEnableSecureBootWithDMA;
    }

    /**
     * Gets the deviceGuardEnableVirtualizationBasedSecurity property value. Turns On Virtualization Based Security(VBS).
     * @return bool|null
    */
    public function getDeviceGuardEnableVirtualizationBasedSecurity(): ?bool {
        return $this->deviceGuardEnableVirtualizationBasedSecurity;
    }

    /**
     * Gets the deviceGuardLaunchSystemGuard property value. Possible values of a property
     * @return Enablement|null
    */
    public function getDeviceGuardLaunchSystemGuard(): ?Enablement {
        return $this->deviceGuardLaunchSystemGuard;
    }

    /**
     * Gets the deviceGuardLocalSystemAuthorityCredentialGuardSettings property value. Possible values of Credential Guard settings.
     * @return DeviceGuardLocalSystemAuthorityCredentialGuardType|null
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardSettings(): ?DeviceGuardLocalSystemAuthorityCredentialGuardType {
        return $this->deviceGuardLocalSystemAuthorityCredentialGuardSettings;
    }

    /**
     * Gets the deviceGuardSecureBootWithDMA property value. Possible values of Secure Boot with DMA
     * @return SecureBootWithDMAType|null
    */
    public function getDeviceGuardSecureBootWithDMA(): ?SecureBootWithDMAType {
        return $this->deviceGuardSecureBootWithDMA;
    }

    /**
     * Gets the dmaGuardDeviceEnumerationPolicy property value. Possible values of the DmaGuardDeviceEnumerationPolicy.
     * @return DmaGuardDeviceEnumerationPolicyType|null
    */
    public function getDmaGuardDeviceEnumerationPolicy(): ?DmaGuardDeviceEnumerationPolicyType {
        return $this->dmaGuardDeviceEnumerationPolicy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationGuardAllowCameraMicrophoneRedirection' => fn(ParseNode $n) => $o->setApplicationGuardAllowCameraMicrophoneRedirection($n->getBooleanValue()),
            'applicationGuardAllowFileSaveOnHost' => fn(ParseNode $n) => $o->setApplicationGuardAllowFileSaveOnHost($n->getBooleanValue()),
            'applicationGuardAllowPersistence' => fn(ParseNode $n) => $o->setApplicationGuardAllowPersistence($n->getBooleanValue()),
            'applicationGuardAllowPrintToLocalPrinters' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToLocalPrinters($n->getBooleanValue()),
            'applicationGuardAllowPrintToNetworkPrinters' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToNetworkPrinters($n->getBooleanValue()),
            'applicationGuardAllowPrintToPDF' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToPDF($n->getBooleanValue()),
            'applicationGuardAllowPrintToXPS' => fn(ParseNode $n) => $o->setApplicationGuardAllowPrintToXPS($n->getBooleanValue()),
            'applicationGuardAllowVirtualGPU' => fn(ParseNode $n) => $o->setApplicationGuardAllowVirtualGPU($n->getBooleanValue()),
            'applicationGuardBlockClipboardSharing' => fn(ParseNode $n) => $o->setApplicationGuardBlockClipboardSharing($n->getEnumValue(ApplicationGuardBlockClipboardSharingType::class)),
            'applicationGuardBlockFileTransfer' => fn(ParseNode $n) => $o->setApplicationGuardBlockFileTransfer($n->getEnumValue(ApplicationGuardBlockFileTransferType::class)),
            'applicationGuardBlockNonEnterpriseContent' => fn(ParseNode $n) => $o->setApplicationGuardBlockNonEnterpriseContent($n->getBooleanValue()),
            'applicationGuardCertificateThumbprints' => fn(ParseNode $n) => $o->setApplicationGuardCertificateThumbprints($n->getCollectionOfPrimitiveValues()),
            'applicationGuardEnabled' => fn(ParseNode $n) => $o->setApplicationGuardEnabled($n->getBooleanValue()),
            'applicationGuardEnabledOptions' => fn(ParseNode $n) => $o->setApplicationGuardEnabledOptions($n->getEnumValue(ApplicationGuardEnabledOptions::class)),
            'applicationGuardForceAuditing' => fn(ParseNode $n) => $o->setApplicationGuardForceAuditing($n->getBooleanValue()),
            'appLockerApplicationControl' => fn(ParseNode $n) => $o->setAppLockerApplicationControl($n->getEnumValue(AppLockerApplicationControlType::class)),
            'bitLockerAllowStandardUserEncryption' => fn(ParseNode $n) => $o->setBitLockerAllowStandardUserEncryption($n->getBooleanValue()),
            'bitLockerDisableWarningForOtherDiskEncryption' => fn(ParseNode $n) => $o->setBitLockerDisableWarningForOtherDiskEncryption($n->getBooleanValue()),
            'bitLockerEnableStorageCardEncryptionOnMobile' => fn(ParseNode $n) => $o->setBitLockerEnableStorageCardEncryptionOnMobile($n->getBooleanValue()),
            'bitLockerEncryptDevice' => fn(ParseNode $n) => $o->setBitLockerEncryptDevice($n->getBooleanValue()),
            'bitLockerFixedDrivePolicy' => fn(ParseNode $n) => $o->setBitLockerFixedDrivePolicy($n->getObjectValue([BitLockerFixedDrivePolicy::class, 'createFromDiscriminatorValue'])),
            'bitLockerRecoveryPasswordRotation' => fn(ParseNode $n) => $o->setBitLockerRecoveryPasswordRotation($n->getEnumValue(BitLockerRecoveryPasswordRotationType::class)),
            'bitLockerRemovableDrivePolicy' => fn(ParseNode $n) => $o->setBitLockerRemovableDrivePolicy($n->getObjectValue([BitLockerRemovableDrivePolicy::class, 'createFromDiscriminatorValue'])),
            'bitLockerSystemDrivePolicy' => fn(ParseNode $n) => $o->setBitLockerSystemDrivePolicy($n->getObjectValue([BitLockerSystemDrivePolicy::class, 'createFromDiscriminatorValue'])),
            'defenderAdditionalGuardedFolders' => fn(ParseNode $n) => $o->setDefenderAdditionalGuardedFolders($n->getCollectionOfPrimitiveValues()),
            'defenderAdobeReaderLaunchChildProcess' => fn(ParseNode $n) => $o->setDefenderAdobeReaderLaunchChildProcess($n->getEnumValue(DefenderProtectionType::class)),
            'defenderAdvancedRansomewareProtectionType' => fn(ParseNode $n) => $o->setDefenderAdvancedRansomewareProtectionType($n->getEnumValue(DefenderProtectionType::class)),
            'defenderAllowBehaviorMonitoring' => fn(ParseNode $n) => $o->setDefenderAllowBehaviorMonitoring($n->getBooleanValue()),
            'defenderAllowCloudProtection' => fn(ParseNode $n) => $o->setDefenderAllowCloudProtection($n->getBooleanValue()),
            'defenderAllowEndUserAccess' => fn(ParseNode $n) => $o->setDefenderAllowEndUserAccess($n->getBooleanValue()),
            'defenderAllowIntrusionPreventionSystem' => fn(ParseNode $n) => $o->setDefenderAllowIntrusionPreventionSystem($n->getBooleanValue()),
            'defenderAllowOnAccessProtection' => fn(ParseNode $n) => $o->setDefenderAllowOnAccessProtection($n->getBooleanValue()),
            'defenderAllowRealTimeMonitoring' => fn(ParseNode $n) => $o->setDefenderAllowRealTimeMonitoring($n->getBooleanValue()),
            'defenderAllowScanArchiveFiles' => fn(ParseNode $n) => $o->setDefenderAllowScanArchiveFiles($n->getBooleanValue()),
            'defenderAllowScanDownloads' => fn(ParseNode $n) => $o->setDefenderAllowScanDownloads($n->getBooleanValue()),
            'defenderAllowScanNetworkFiles' => fn(ParseNode $n) => $o->setDefenderAllowScanNetworkFiles($n->getBooleanValue()),
            'defenderAllowScanRemovableDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderAllowScanRemovableDrivesDuringFullScan($n->getBooleanValue()),
            'defenderAllowScanScriptsLoadedInInternetExplorer' => fn(ParseNode $n) => $o->setDefenderAllowScanScriptsLoadedInInternetExplorer($n->getBooleanValue()),
            'defenderAttackSurfaceReductionExcludedPaths' => fn(ParseNode $n) => $o->setDefenderAttackSurfaceReductionExcludedPaths($n->getCollectionOfPrimitiveValues()),
            'defenderBlockEndUserAccess' => fn(ParseNode $n) => $o->setDefenderBlockEndUserAccess($n->getBooleanValue()),
            'defenderBlockPersistenceThroughWmiType' => fn(ParseNode $n) => $o->setDefenderBlockPersistenceThroughWmiType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderCheckForSignaturesBeforeRunningScan' => fn(ParseNode $n) => $o->setDefenderCheckForSignaturesBeforeRunningScan($n->getBooleanValue()),
            'defenderCloudBlockLevel' => fn(ParseNode $n) => $o->setDefenderCloudBlockLevel($n->getEnumValue(DefenderCloudBlockLevelType::class)),
            'defenderCloudExtendedTimeoutInSeconds' => fn(ParseNode $n) => $o->setDefenderCloudExtendedTimeoutInSeconds($n->getIntegerValue()),
            'defenderDaysBeforeDeletingQuarantinedMalware' => fn(ParseNode $n) => $o->setDefenderDaysBeforeDeletingQuarantinedMalware($n->getIntegerValue()),
            'defenderDetectedMalwareActions' => fn(ParseNode $n) => $o->setDefenderDetectedMalwareActions($n->getObjectValue([DefenderDetectedMalwareActions::class, 'createFromDiscriminatorValue'])),
            'defenderDisableBehaviorMonitoring' => fn(ParseNode $n) => $o->setDefenderDisableBehaviorMonitoring($n->getBooleanValue()),
            'defenderDisableCatchupFullScan' => fn(ParseNode $n) => $o->setDefenderDisableCatchupFullScan($n->getBooleanValue()),
            'defenderDisableCatchupQuickScan' => fn(ParseNode $n) => $o->setDefenderDisableCatchupQuickScan($n->getBooleanValue()),
            'defenderDisableCloudProtection' => fn(ParseNode $n) => $o->setDefenderDisableCloudProtection($n->getBooleanValue()),
            'defenderDisableIntrusionPreventionSystem' => fn(ParseNode $n) => $o->setDefenderDisableIntrusionPreventionSystem($n->getBooleanValue()),
            'defenderDisableOnAccessProtection' => fn(ParseNode $n) => $o->setDefenderDisableOnAccessProtection($n->getBooleanValue()),
            'defenderDisableRealTimeMonitoring' => fn(ParseNode $n) => $o->setDefenderDisableRealTimeMonitoring($n->getBooleanValue()),
            'defenderDisableScanArchiveFiles' => fn(ParseNode $n) => $o->setDefenderDisableScanArchiveFiles($n->getBooleanValue()),
            'defenderDisableScanDownloads' => fn(ParseNode $n) => $o->setDefenderDisableScanDownloads($n->getBooleanValue()),
            'defenderDisableScanNetworkFiles' => fn(ParseNode $n) => $o->setDefenderDisableScanNetworkFiles($n->getBooleanValue()),
            'defenderDisableScanRemovableDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderDisableScanRemovableDrivesDuringFullScan($n->getBooleanValue()),
            'defenderDisableScanScriptsLoadedInInternetExplorer' => fn(ParseNode $n) => $o->setDefenderDisableScanScriptsLoadedInInternetExplorer($n->getBooleanValue()),
            'defenderEmailContentExecution' => fn(ParseNode $n) => $o->setDefenderEmailContentExecution($n->getEnumValue(DefenderProtectionType::class)),
            'defenderEmailContentExecutionType' => fn(ParseNode $n) => $o->setDefenderEmailContentExecutionType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderEnableLowCpuPriority' => fn(ParseNode $n) => $o->setDefenderEnableLowCpuPriority($n->getBooleanValue()),
            'defenderEnableScanIncomingMail' => fn(ParseNode $n) => $o->setDefenderEnableScanIncomingMail($n->getBooleanValue()),
            'defenderEnableScanMappedNetworkDrivesDuringFullScan' => fn(ParseNode $n) => $o->setDefenderEnableScanMappedNetworkDrivesDuringFullScan($n->getBooleanValue()),
            'defenderExploitProtectionXml' => fn(ParseNode $n) => $o->setDefenderExploitProtectionXml($n->getBinaryContent()),
            'defenderExploitProtectionXmlFileName' => fn(ParseNode $n) => $o->setDefenderExploitProtectionXmlFileName($n->getStringValue()),
            'defenderFileExtensionsToExclude' => fn(ParseNode $n) => $o->setDefenderFileExtensionsToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderFilesAndFoldersToExclude' => fn(ParseNode $n) => $o->setDefenderFilesAndFoldersToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderGuardedFoldersAllowedAppPaths' => fn(ParseNode $n) => $o->setDefenderGuardedFoldersAllowedAppPaths($n->getCollectionOfPrimitiveValues()),
            'defenderGuardMyFoldersType' => fn(ParseNode $n) => $o->setDefenderGuardMyFoldersType($n->getEnumValue(FolderProtectionType::class)),
            'defenderNetworkProtectionType' => fn(ParseNode $n) => $o->setDefenderNetworkProtectionType($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeAppsExecutableContentCreationOrLaunch' => fn(ParseNode $n) => $o->setDefenderOfficeAppsExecutableContentCreationOrLaunch($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeAppsExecutableContentCreationOrLaunchType' => fn(ParseNode $n) => $o->setDefenderOfficeAppsExecutableContentCreationOrLaunchType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderOfficeAppsLaunchChildProcess' => fn(ParseNode $n) => $o->setDefenderOfficeAppsLaunchChildProcess($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeAppsLaunchChildProcessType' => fn(ParseNode $n) => $o->setDefenderOfficeAppsLaunchChildProcessType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderOfficeAppsOtherProcessInjection' => fn(ParseNode $n) => $o->setDefenderOfficeAppsOtherProcessInjection($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeAppsOtherProcessInjectionType' => fn(ParseNode $n) => $o->setDefenderOfficeAppsOtherProcessInjectionType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderOfficeCommunicationAppsLaunchChildProcess' => fn(ParseNode $n) => $o->setDefenderOfficeCommunicationAppsLaunchChildProcess($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeMacroCodeAllowWin32Imports' => fn(ParseNode $n) => $o->setDefenderOfficeMacroCodeAllowWin32Imports($n->getEnumValue(DefenderProtectionType::class)),
            'defenderOfficeMacroCodeAllowWin32ImportsType' => fn(ParseNode $n) => $o->setDefenderOfficeMacroCodeAllowWin32ImportsType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderPotentiallyUnwantedAppAction' => fn(ParseNode $n) => $o->setDefenderPotentiallyUnwantedAppAction($n->getEnumValue(DefenderProtectionType::class)),
            'defenderPreventCredentialStealingType' => fn(ParseNode $n) => $o->setDefenderPreventCredentialStealingType($n->getEnumValue(DefenderProtectionType::class)),
            'defenderProcessCreation' => fn(ParseNode $n) => $o->setDefenderProcessCreation($n->getEnumValue(DefenderProtectionType::class)),
            'defenderProcessCreationType' => fn(ParseNode $n) => $o->setDefenderProcessCreationType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderProcessesToExclude' => fn(ParseNode $n) => $o->setDefenderProcessesToExclude($n->getCollectionOfPrimitiveValues()),
            'defenderScanDirection' => fn(ParseNode $n) => $o->setDefenderScanDirection($n->getEnumValue(DefenderRealtimeScanDirection::class)),
            'defenderScanMaxCpuPercentage' => fn(ParseNode $n) => $o->setDefenderScanMaxCpuPercentage($n->getIntegerValue()),
            'defenderScanType' => fn(ParseNode $n) => $o->setDefenderScanType($n->getEnumValue(DefenderScanType::class)),
            'defenderScheduledQuickScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledQuickScanTime($n->getTimeValue()),
            'defenderScheduledScanDay' => fn(ParseNode $n) => $o->setDefenderScheduledScanDay($n->getEnumValue(WeeklySchedule::class)),
            'defenderScheduledScanTime' => fn(ParseNode $n) => $o->setDefenderScheduledScanTime($n->getTimeValue()),
            'defenderScriptDownloadedPayloadExecution' => fn(ParseNode $n) => $o->setDefenderScriptDownloadedPayloadExecution($n->getEnumValue(DefenderProtectionType::class)),
            'defenderScriptDownloadedPayloadExecutionType' => fn(ParseNode $n) => $o->setDefenderScriptDownloadedPayloadExecutionType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderScriptObfuscatedMacroCode' => fn(ParseNode $n) => $o->setDefenderScriptObfuscatedMacroCode($n->getEnumValue(DefenderProtectionType::class)),
            'defenderScriptObfuscatedMacroCodeType' => fn(ParseNode $n) => $o->setDefenderScriptObfuscatedMacroCodeType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderSecurityCenterBlockExploitProtectionOverride' => fn(ParseNode $n) => $o->setDefenderSecurityCenterBlockExploitProtectionOverride($n->getBooleanValue()),
            'defenderSecurityCenterDisableAccountUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableAccountUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableAppBrowserUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableAppBrowserUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableClearTpmUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableClearTpmUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableFamilyUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableFamilyUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableHardwareUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableHardwareUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableHealthUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableHealthUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableNetworkUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableNetworkUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableNotificationAreaUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableNotificationAreaUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableRansomwareUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableRansomwareUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableSecureBootUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableSecureBootUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableTroubleshootingUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableTroubleshootingUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableVirusUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableVirusUI($n->getBooleanValue()),
            'defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI' => fn(ParseNode $n) => $o->setDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI($n->getBooleanValue()),
            'defenderSecurityCenterHelpEmail' => fn(ParseNode $n) => $o->setDefenderSecurityCenterHelpEmail($n->getStringValue()),
            'defenderSecurityCenterHelpPhone' => fn(ParseNode $n) => $o->setDefenderSecurityCenterHelpPhone($n->getStringValue()),
            'defenderSecurityCenterHelpURL' => fn(ParseNode $n) => $o->setDefenderSecurityCenterHelpURL($n->getStringValue()),
            'defenderSecurityCenterITContactDisplay' => fn(ParseNode $n) => $o->setDefenderSecurityCenterITContactDisplay($n->getEnumValue(DefenderSecurityCenterITContactDisplayType::class)),
            'defenderSecurityCenterNotificationsFromApp' => fn(ParseNode $n) => $o->setDefenderSecurityCenterNotificationsFromApp($n->getEnumValue(DefenderSecurityCenterNotificationsFromAppType::class)),
            'defenderSecurityCenterOrganizationDisplayName' => fn(ParseNode $n) => $o->setDefenderSecurityCenterOrganizationDisplayName($n->getStringValue()),
            'defenderSignatureUpdateIntervalInHours' => fn(ParseNode $n) => $o->setDefenderSignatureUpdateIntervalInHours($n->getIntegerValue()),
            'defenderSubmitSamplesConsentType' => fn(ParseNode $n) => $o->setDefenderSubmitSamplesConsentType($n->getEnumValue(DefenderSubmitSamplesConsentType::class)),
            'defenderUntrustedExecutable' => fn(ParseNode $n) => $o->setDefenderUntrustedExecutable($n->getEnumValue(DefenderProtectionType::class)),
            'defenderUntrustedExecutableType' => fn(ParseNode $n) => $o->setDefenderUntrustedExecutableType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'defenderUntrustedUSBProcess' => fn(ParseNode $n) => $o->setDefenderUntrustedUSBProcess($n->getEnumValue(DefenderProtectionType::class)),
            'defenderUntrustedUSBProcessType' => fn(ParseNode $n) => $o->setDefenderUntrustedUSBProcessType($n->getEnumValue(DefenderAttackSurfaceType::class)),
            'deviceGuardEnableSecureBootWithDMA' => fn(ParseNode $n) => $o->setDeviceGuardEnableSecureBootWithDMA($n->getBooleanValue()),
            'deviceGuardEnableVirtualizationBasedSecurity' => fn(ParseNode $n) => $o->setDeviceGuardEnableVirtualizationBasedSecurity($n->getBooleanValue()),
            'deviceGuardLaunchSystemGuard' => fn(ParseNode $n) => $o->setDeviceGuardLaunchSystemGuard($n->getEnumValue(Enablement::class)),
            'deviceGuardLocalSystemAuthorityCredentialGuardSettings' => fn(ParseNode $n) => $o->setDeviceGuardLocalSystemAuthorityCredentialGuardSettings($n->getEnumValue(DeviceGuardLocalSystemAuthorityCredentialGuardType::class)),
            'deviceGuardSecureBootWithDMA' => fn(ParseNode $n) => $o->setDeviceGuardSecureBootWithDMA($n->getEnumValue(SecureBootWithDMAType::class)),
            'dmaGuardDeviceEnumerationPolicy' => fn(ParseNode $n) => $o->setDmaGuardDeviceEnumerationPolicy($n->getEnumValue(DmaGuardDeviceEnumerationPolicyType::class)),
            'firewallBlockStatefulFTP' => fn(ParseNode $n) => $o->setFirewallBlockStatefulFTP($n->getBooleanValue()),
            'firewallCertificateRevocationListCheckMethod' => fn(ParseNode $n) => $o->setFirewallCertificateRevocationListCheckMethod($n->getEnumValue(FirewallCertificateRevocationListCheckMethodType::class)),
            'firewallIdleTimeoutForSecurityAssociationInSeconds' => fn(ParseNode $n) => $o->setFirewallIdleTimeoutForSecurityAssociationInSeconds($n->getIntegerValue()),
            'firewallIPSecExemptionsAllowDHCP' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowDHCP($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowICMP' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowICMP($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowNeighborDiscovery' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowNeighborDiscovery($n->getBooleanValue()),
            'firewallIPSecExemptionsAllowRouterDiscovery' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsAllowRouterDiscovery($n->getBooleanValue()),
            'firewallIPSecExemptionsNone' => fn(ParseNode $n) => $o->setFirewallIPSecExemptionsNone($n->getBooleanValue()),
            'firewallMergeKeyingModuleSettings' => fn(ParseNode $n) => $o->setFirewallMergeKeyingModuleSettings($n->getBooleanValue()),
            'firewallPacketQueueingMethod' => fn(ParseNode $n) => $o->setFirewallPacketQueueingMethod($n->getEnumValue(FirewallPacketQueueingMethodType::class)),
            'firewallPreSharedKeyEncodingMethod' => fn(ParseNode $n) => $o->setFirewallPreSharedKeyEncodingMethod($n->getEnumValue(FirewallPreSharedKeyEncodingMethodType::class)),
            'firewallProfileDomain' => fn(ParseNode $n) => $o->setFirewallProfileDomain($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'firewallProfilePrivate' => fn(ParseNode $n) => $o->setFirewallProfilePrivate($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'firewallProfilePublic' => fn(ParseNode $n) => $o->setFirewallProfilePublic($n->getObjectValue([WindowsFirewallNetworkProfile::class, 'createFromDiscriminatorValue'])),
            'firewallRules' => fn(ParseNode $n) => $o->setFirewallRules($n->getCollectionOfObjectValues([WindowsFirewallRule::class, 'createFromDiscriminatorValue'])),
            'lanManagerAuthenticationLevel' => fn(ParseNode $n) => $o->setLanManagerAuthenticationLevel($n->getEnumValue(LanManagerAuthenticationLevel::class)),
            'lanManagerWorkstationDisableInsecureGuestLogons' => fn(ParseNode $n) => $o->setLanManagerWorkstationDisableInsecureGuestLogons($n->getBooleanValue()),
            'localSecurityOptionsAdministratorAccountName' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAdministratorAccountName($n->getStringValue()),
            'localSecurityOptionsAdministratorElevationPromptBehavior' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAdministratorElevationPromptBehavior($n->getEnumValue(LocalSecurityOptionsAdministratorElevationPromptBehaviorType::class)),
            'localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares($n->getBooleanValue()),
            'localSecurityOptionsAllowPKU2UAuthenticationRequests' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowPKU2UAuthenticationRequests($n->getBooleanValue()),
            'localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager($n->getStringValue()),
            'localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool($n->getBooleanValue()),
            'localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn($n->getBooleanValue()),
            'localSecurityOptionsAllowUIAccessApplicationElevation' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowUIAccessApplicationElevation($n->getBooleanValue()),
            'localSecurityOptionsAllowUIAccessApplicationsForSecureLocations' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations($n->getBooleanValue()),
            'localSecurityOptionsAllowUndockWithoutHavingToLogon' => fn(ParseNode $n) => $o->setLocalSecurityOptionsAllowUndockWithoutHavingToLogon($n->getBooleanValue()),
            'localSecurityOptionsBlockMicrosoftAccounts' => fn(ParseNode $n) => $o->setLocalSecurityOptionsBlockMicrosoftAccounts($n->getBooleanValue()),
            'localSecurityOptionsBlockRemoteLogonWithBlankPassword' => fn(ParseNode $n) => $o->setLocalSecurityOptionsBlockRemoteLogonWithBlankPassword($n->getBooleanValue()),
            'localSecurityOptionsBlockRemoteOpticalDriveAccess' => fn(ParseNode $n) => $o->setLocalSecurityOptionsBlockRemoteOpticalDriveAccess($n->getBooleanValue()),
            'localSecurityOptionsBlockUsersInstallingPrinterDrivers' => fn(ParseNode $n) => $o->setLocalSecurityOptionsBlockUsersInstallingPrinterDrivers($n->getBooleanValue()),
            'localSecurityOptionsClearVirtualMemoryPageFile' => fn(ParseNode $n) => $o->setLocalSecurityOptionsClearVirtualMemoryPageFile($n->getBooleanValue()),
            'localSecurityOptionsClientDigitallySignCommunicationsAlways' => fn(ParseNode $n) => $o->setLocalSecurityOptionsClientDigitallySignCommunicationsAlways($n->getBooleanValue()),
            'localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers' => fn(ParseNode $n) => $o->setLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers($n->getBooleanValue()),
            'localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation($n->getBooleanValue()),
            'localSecurityOptionsDisableAdministratorAccount' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDisableAdministratorAccount($n->getBooleanValue()),
            'localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees($n->getBooleanValue()),
            'localSecurityOptionsDisableGuestAccount' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDisableGuestAccount($n->getBooleanValue()),
            'localSecurityOptionsDisableServerDigitallySignCommunicationsAlways' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways($n->getBooleanValue()),
            'localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees($n->getBooleanValue()),
            'localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts($n->getBooleanValue()),
            'localSecurityOptionsDoNotRequireCtrlAltDel' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDoNotRequireCtrlAltDel($n->getBooleanValue()),
            'localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange' => fn(ParseNode $n) => $o->setLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange($n->getBooleanValue()),
            'localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser' => fn(ParseNode $n) => $o->setLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser($n->getEnumValue(LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType::class)),
            'localSecurityOptionsGuestAccountName' => fn(ParseNode $n) => $o->setLocalSecurityOptionsGuestAccountName($n->getStringValue()),
            'localSecurityOptionsHideLastSignedInUser' => fn(ParseNode $n) => $o->setLocalSecurityOptionsHideLastSignedInUser($n->getBooleanValue()),
            'localSecurityOptionsHideUsernameAtSignIn' => fn(ParseNode $n) => $o->setLocalSecurityOptionsHideUsernameAtSignIn($n->getBooleanValue()),
            'localSecurityOptionsInformationDisplayedOnLockScreen' => fn(ParseNode $n) => $o->setLocalSecurityOptionsInformationDisplayedOnLockScreen($n->getEnumValue(LocalSecurityOptionsInformationDisplayedOnLockScreenType::class)),
            'localSecurityOptionsInformationShownOnLockScreen' => fn(ParseNode $n) => $o->setLocalSecurityOptionsInformationShownOnLockScreen($n->getEnumValue(LocalSecurityOptionsInformationShownOnLockScreenType::class)),
            'localSecurityOptionsLogOnMessageText' => fn(ParseNode $n) => $o->setLocalSecurityOptionsLogOnMessageText($n->getStringValue()),
            'localSecurityOptionsLogOnMessageTitle' => fn(ParseNode $n) => $o->setLocalSecurityOptionsLogOnMessageTitle($n->getStringValue()),
            'localSecurityOptionsMachineInactivityLimit' => fn(ParseNode $n) => $o->setLocalSecurityOptionsMachineInactivityLimit($n->getIntegerValue()),
            'localSecurityOptionsMachineInactivityLimitInMinutes' => fn(ParseNode $n) => $o->setLocalSecurityOptionsMachineInactivityLimitInMinutes($n->getIntegerValue()),
            'localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients' => fn(ParseNode $n) => $o->setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients($n->getEnumValue(LocalSecurityOptionsMinimumSessionSecurity::class)),
            'localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers' => fn(ParseNode $n) => $o->setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers($n->getEnumValue(LocalSecurityOptionsMinimumSessionSecurity::class)),
            'localSecurityOptionsOnlyElevateSignedExecutables' => fn(ParseNode $n) => $o->setLocalSecurityOptionsOnlyElevateSignedExecutables($n->getBooleanValue()),
            'localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares' => fn(ParseNode $n) => $o->setLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares($n->getBooleanValue()),
            'localSecurityOptionsSmartCardRemovalBehavior' => fn(ParseNode $n) => $o->setLocalSecurityOptionsSmartCardRemovalBehavior($n->getEnumValue(LocalSecurityOptionsSmartCardRemovalBehaviorType::class)),
            'localSecurityOptionsStandardUserElevationPromptBehavior' => fn(ParseNode $n) => $o->setLocalSecurityOptionsStandardUserElevationPromptBehavior($n->getEnumValue(LocalSecurityOptionsStandardUserElevationPromptBehaviorType::class)),
            'localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation' => fn(ParseNode $n) => $o->setLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation($n->getBooleanValue()),
            'localSecurityOptionsUseAdminApprovalMode' => fn(ParseNode $n) => $o->setLocalSecurityOptionsUseAdminApprovalMode($n->getBooleanValue()),
            'localSecurityOptionsUseAdminApprovalModeForAdministrators' => fn(ParseNode $n) => $o->setLocalSecurityOptionsUseAdminApprovalModeForAdministrators($n->getBooleanValue()),
            'localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations' => fn(ParseNode $n) => $o->setLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations($n->getBooleanValue()),
            'smartScreenBlockOverrideForFiles' => fn(ParseNode $n) => $o->setSmartScreenBlockOverrideForFiles($n->getBooleanValue()),
            'smartScreenEnableInShell' => fn(ParseNode $n) => $o->setSmartScreenEnableInShell($n->getBooleanValue()),
            'userRightsAccessCredentialManagerAsTrustedCaller' => fn(ParseNode $n) => $o->setUserRightsAccessCredentialManagerAsTrustedCaller($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsActAsPartOfTheOperatingSystem' => fn(ParseNode $n) => $o->setUserRightsActAsPartOfTheOperatingSystem($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsAllowAccessFromNetwork' => fn(ParseNode $n) => $o->setUserRightsAllowAccessFromNetwork($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsBackupData' => fn(ParseNode $n) => $o->setUserRightsBackupData($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsBlockAccessFromNetwork' => fn(ParseNode $n) => $o->setUserRightsBlockAccessFromNetwork($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsChangeSystemTime' => fn(ParseNode $n) => $o->setUserRightsChangeSystemTime($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsCreateGlobalObjects' => fn(ParseNode $n) => $o->setUserRightsCreateGlobalObjects($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsCreatePageFile' => fn(ParseNode $n) => $o->setUserRightsCreatePageFile($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsCreatePermanentSharedObjects' => fn(ParseNode $n) => $o->setUserRightsCreatePermanentSharedObjects($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsCreateSymbolicLinks' => fn(ParseNode $n) => $o->setUserRightsCreateSymbolicLinks($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsCreateToken' => fn(ParseNode $n) => $o->setUserRightsCreateToken($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsDebugPrograms' => fn(ParseNode $n) => $o->setUserRightsDebugPrograms($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsDelegation' => fn(ParseNode $n) => $o->setUserRightsDelegation($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsDenyLocalLogOn' => fn(ParseNode $n) => $o->setUserRightsDenyLocalLogOn($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsGenerateSecurityAudits' => fn(ParseNode $n) => $o->setUserRightsGenerateSecurityAudits($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsImpersonateClient' => fn(ParseNode $n) => $o->setUserRightsImpersonateClient($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsIncreaseSchedulingPriority' => fn(ParseNode $n) => $o->setUserRightsIncreaseSchedulingPriority($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsLoadUnloadDrivers' => fn(ParseNode $n) => $o->setUserRightsLoadUnloadDrivers($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsLocalLogOn' => fn(ParseNode $n) => $o->setUserRightsLocalLogOn($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsLockMemory' => fn(ParseNode $n) => $o->setUserRightsLockMemory($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsManageAuditingAndSecurityLogs' => fn(ParseNode $n) => $o->setUserRightsManageAuditingAndSecurityLogs($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsManageVolumes' => fn(ParseNode $n) => $o->setUserRightsManageVolumes($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsModifyFirmwareEnvironment' => fn(ParseNode $n) => $o->setUserRightsModifyFirmwareEnvironment($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsModifyObjectLabels' => fn(ParseNode $n) => $o->setUserRightsModifyObjectLabels($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsProfileSingleProcess' => fn(ParseNode $n) => $o->setUserRightsProfileSingleProcess($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsRemoteDesktopServicesLogOn' => fn(ParseNode $n) => $o->setUserRightsRemoteDesktopServicesLogOn($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsRemoteShutdown' => fn(ParseNode $n) => $o->setUserRightsRemoteShutdown($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsRestoreData' => fn(ParseNode $n) => $o->setUserRightsRestoreData($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'userRightsTakeOwnership' => fn(ParseNode $n) => $o->setUserRightsTakeOwnership($n->getObjectValue([DeviceManagementUserRightsSetting::class, 'createFromDiscriminatorValue'])),
            'windowsDefenderTamperProtection' => fn(ParseNode $n) => $o->setWindowsDefenderTamperProtection($n->getEnumValue(WindowsDefenderTamperProtectionOptions::class)),
            'xboxServicesAccessoryManagementServiceStartupMode' => fn(ParseNode $n) => $o->setXboxServicesAccessoryManagementServiceStartupMode($n->getEnumValue(ServiceStartType::class)),
            'xboxServicesEnableXboxGameSaveTask' => fn(ParseNode $n) => $o->setXboxServicesEnableXboxGameSaveTask($n->getBooleanValue()),
            'xboxServicesLiveAuthManagerServiceStartupMode' => fn(ParseNode $n) => $o->setXboxServicesLiveAuthManagerServiceStartupMode($n->getEnumValue(ServiceStartType::class)),
            'xboxServicesLiveGameSaveServiceStartupMode' => fn(ParseNode $n) => $o->setXboxServicesLiveGameSaveServiceStartupMode($n->getEnumValue(ServiceStartType::class)),
            'xboxServicesLiveNetworkingServiceStartupMode' => fn(ParseNode $n) => $o->setXboxServicesLiveNetworkingServiceStartupMode($n->getEnumValue(ServiceStartType::class)),
        ]);
    }

    /**
     * Gets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     * @return bool|null
    */
    public function getFirewallBlockStatefulFTP(): ?bool {
        return $this->firewallBlockStatefulFTP;
    }

    /**
     * Gets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     * @return FirewallCertificateRevocationListCheckMethodType|null
    */
    public function getFirewallCertificateRevocationListCheckMethod(): ?FirewallCertificateRevocationListCheckMethodType {
        return $this->firewallCertificateRevocationListCheckMethod;
    }

    /**
     * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     * @return int|null
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds(): ?int {
        return $this->firewallIdleTimeoutForSecurityAssociationInSeconds;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowDHCP(): ?bool {
        return $this->firewallIPSecExemptionsAllowDHCP;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowICMP(): ?bool {
        return $this->firewallIPSecExemptionsAllowICMP;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery(): ?bool {
        return $this->firewallIPSecExemptionsAllowNeighborDiscovery;
    }

    /**
     * Gets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery(): ?bool {
        return $this->firewallIPSecExemptionsAllowRouterDiscovery;
    }

    /**
     * Gets the firewallIPSecExemptionsNone property value. Configures IPSec exemptions to no exemptions
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsNone(): ?bool {
        return $this->firewallIPSecExemptionsNone;
    }

    /**
     * Gets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     * @return bool|null
    */
    public function getFirewallMergeKeyingModuleSettings(): ?bool {
        return $this->firewallMergeKeyingModuleSettings;
    }

    /**
     * Gets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     * @return FirewallPacketQueueingMethodType|null
    */
    public function getFirewallPacketQueueingMethod(): ?FirewallPacketQueueingMethodType {
        return $this->firewallPacketQueueingMethod;
    }

    /**
     * Gets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     * @return FirewallPreSharedKeyEncodingMethodType|null
    */
    public function getFirewallPreSharedKeyEncodingMethod(): ?FirewallPreSharedKeyEncodingMethodType {
        return $this->firewallPreSharedKeyEncodingMethod;
    }

    /**
     * Gets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfileDomain(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfileDomain;
    }

    /**
     * Gets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePrivate(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfilePrivate;
    }

    /**
     * Gets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePublic(): ?WindowsFirewallNetworkProfile {
        return $this->firewallProfilePublic;
    }

    /**
     * Gets the firewallRules property value. Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
     * @return array<WindowsFirewallRule>|null
    */
    public function getFirewallRules(): ?array {
        return $this->firewallRules;
    }

    /**
     * Gets the lanManagerAuthenticationLevel property value. Possible values for LanManagerAuthenticationLevel
     * @return LanManagerAuthenticationLevel|null
    */
    public function getLanManagerAuthenticationLevel(): ?LanManagerAuthenticationLevel {
        return $this->lanManagerAuthenticationLevel;
    }

    /**
     * Gets the lanManagerWorkstationDisableInsecureGuestLogons property value. If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
     * @return bool|null
    */
    public function getLanManagerWorkstationDisableInsecureGuestLogons(): ?bool {
        return $this->lanManagerWorkstationDisableInsecureGuestLogons;
    }

    /**
     * Gets the localSecurityOptionsAdministratorAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Administrator'.
     * @return string|null
    */
    public function getLocalSecurityOptionsAdministratorAccountName(): ?string {
        return $this->localSecurityOptionsAdministratorAccountName;
    }

    /**
     * Gets the localSecurityOptionsAdministratorElevationPromptBehavior property value. Possible values for LocalSecurityOptionsAdministratorElevationPromptBehavior
     * @return LocalSecurityOptionsAdministratorElevationPromptBehaviorType|null
    */
    public function getLocalSecurityOptionsAdministratorElevationPromptBehavior(): ?LocalSecurityOptionsAdministratorElevationPromptBehaviorType {
        return $this->localSecurityOptionsAdministratorElevationPromptBehavior;
    }

    /**
     * Gets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property value. This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares(): ?bool {
        return $this->localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares;
    }

    /**
     * Gets the localSecurityOptionsAllowPKU2UAuthenticationRequests property value. Block PKU2U authentication requests to this device to use online identities.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowPKU2UAuthenticationRequests(): ?bool {
        return $this->localSecurityOptionsAllowPKU2UAuthenticationRequests;
    }

    /**
     * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property value. Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
     * @return string|null
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager(): ?string {
        return $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager;
    }

    /**
     * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property value. UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool(): ?bool {
        return $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool;
    }

    /**
     * Gets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property value. This security setting determines whether a computer can be shut down without having to log on to Windows.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn(): ?bool {
        return $this->localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn;
    }

    /**
     * Gets the localSecurityOptionsAllowUIAccessApplicationElevation property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationElevation(): ?bool {
        return $this->localSecurityOptionsAllowUIAccessApplicationElevation;
    }

    /**
     * Gets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations(): ?bool {
        return $this->localSecurityOptionsAllowUIAccessApplicationsForSecureLocations;
    }

    /**
     * Gets the localSecurityOptionsAllowUndockWithoutHavingToLogon property value. Prevent a portable computer from being undocked without having to log in.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUndockWithoutHavingToLogon(): ?bool {
        return $this->localSecurityOptionsAllowUndockWithoutHavingToLogon;
    }

    /**
     * Gets the localSecurityOptionsBlockMicrosoftAccounts property value. Prevent users from adding new Microsoft accounts to this computer.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockMicrosoftAccounts(): ?bool {
        return $this->localSecurityOptionsBlockMicrosoftAccounts;
    }

    /**
     * Gets the localSecurityOptionsBlockRemoteLogonWithBlankPassword property value. Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockRemoteLogonWithBlankPassword(): ?bool {
        return $this->localSecurityOptionsBlockRemoteLogonWithBlankPassword;
    }

    /**
     * Gets the localSecurityOptionsBlockRemoteOpticalDriveAccess property value. Enabling this settings allows only interactively logged on user to access CD-ROM media.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockRemoteOpticalDriveAccess(): ?bool {
        return $this->localSecurityOptionsBlockRemoteOpticalDriveAccess;
    }

    /**
     * Gets the localSecurityOptionsBlockUsersInstallingPrinterDrivers property value. Restrict installing printer drivers as part of connecting to a shared printer to admins only.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockUsersInstallingPrinterDrivers(): ?bool {
        return $this->localSecurityOptionsBlockUsersInstallingPrinterDrivers;
    }

    /**
     * Gets the localSecurityOptionsClearVirtualMemoryPageFile property value. This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClearVirtualMemoryPageFile(): ?bool {
        return $this->localSecurityOptionsClearVirtualMemoryPageFile;
    }

    /**
     * Gets the localSecurityOptionsClientDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB client component.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClientDigitallySignCommunicationsAlways(): ?bool {
        return $this->localSecurityOptionsClientDigitallySignCommunicationsAlways;
    }

    /**
     * Gets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property value. If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers(): ?bool {
        return $this->localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers;
    }

    /**
     * Gets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property value. App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation(): ?bool {
        return $this->localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation;
    }

    /**
     * Gets the localSecurityOptionsDisableAdministratorAccount property value. Determines whether the Local Administrator account is enabled or disabled.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableAdministratorAccount(): ?bool {
        return $this->localSecurityOptionsDisableAdministratorAccount;
    }

    /**
     * Gets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property value. This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees(): ?bool {
        return $this->localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees;
    }

    /**
     * Gets the localSecurityOptionsDisableGuestAccount property value. Determines if the Guest account is enabled or disabled.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableGuestAccount(): ?bool {
        return $this->localSecurityOptionsDisableGuestAccount;
    }

    /**
     * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB server component.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways(): ?bool {
        return $this->localSecurityOptionsDisableServerDigitallySignCommunicationsAlways;
    }

    /**
     * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property value. This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees(): ?bool {
        return $this->localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees;
    }

    /**
     * Gets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property value. This security setting determines what additional permissions will be granted for anonymous connections to the computer.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts(): ?bool {
        return $this->localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts;
    }

    /**
     * Gets the localSecurityOptionsDoNotRequireCtrlAltDel property value. Require CTRL+ALT+DEL to be pressed before a user can log on.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotRequireCtrlAltDel(): ?bool {
        return $this->localSecurityOptionsDoNotRequireCtrlAltDel;
    }

    /**
     * Gets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property value. This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. It’s not stored by default.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange(): ?bool {
        return $this->localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange;
    }

    /**
     * Gets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property value. Possible values for LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
     * @return LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType|null
    */
    public function getLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser(): ?LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType {
        return $this->localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser;
    }

    /**
     * Gets the localSecurityOptionsGuestAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Guest'.
     * @return string|null
    */
    public function getLocalSecurityOptionsGuestAccountName(): ?string {
        return $this->localSecurityOptionsGuestAccountName;
    }

    /**
     * Gets the localSecurityOptionsHideLastSignedInUser property value. Do not display the username of the last person who signed in on this device.
     * @return bool|null
    */
    public function getLocalSecurityOptionsHideLastSignedInUser(): ?bool {
        return $this->localSecurityOptionsHideLastSignedInUser;
    }

    /**
     * Gets the localSecurityOptionsHideUsernameAtSignIn property value. Do not display the username of the person signing in to this device after credentials are entered and before the device’s desktop is shown.
     * @return bool|null
    */
    public function getLocalSecurityOptionsHideUsernameAtSignIn(): ?bool {
        return $this->localSecurityOptionsHideUsernameAtSignIn;
    }

    /**
     * Gets the localSecurityOptionsInformationDisplayedOnLockScreen property value. Possible values for LocalSecurityOptionsInformationDisplayedOnLockScreen
     * @return LocalSecurityOptionsInformationDisplayedOnLockScreenType|null
    */
    public function getLocalSecurityOptionsInformationDisplayedOnLockScreen(): ?LocalSecurityOptionsInformationDisplayedOnLockScreenType {
        return $this->localSecurityOptionsInformationDisplayedOnLockScreen;
    }

    /**
     * Gets the localSecurityOptionsInformationShownOnLockScreen property value. Possible values for LocalSecurityOptionsInformationShownOnLockScreenType
     * @return LocalSecurityOptionsInformationShownOnLockScreenType|null
    */
    public function getLocalSecurityOptionsInformationShownOnLockScreen(): ?LocalSecurityOptionsInformationShownOnLockScreenType {
        return $this->localSecurityOptionsInformationShownOnLockScreen;
    }

    /**
     * Gets the localSecurityOptionsLogOnMessageText property value. Set message text for users attempting to log in.
     * @return string|null
    */
    public function getLocalSecurityOptionsLogOnMessageText(): ?string {
        return $this->localSecurityOptionsLogOnMessageText;
    }

    /**
     * Gets the localSecurityOptionsLogOnMessageTitle property value. Set message title for users attempting to log in.
     * @return string|null
    */
    public function getLocalSecurityOptionsLogOnMessageTitle(): ?string {
        return $this->localSecurityOptionsLogOnMessageTitle;
    }

    /**
     * Gets the localSecurityOptionsMachineInactivityLimit property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @return int|null
    */
    public function getLocalSecurityOptionsMachineInactivityLimit(): ?int {
        return $this->localSecurityOptionsMachineInactivityLimit;
    }

    /**
     * Gets the localSecurityOptionsMachineInactivityLimitInMinutes property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @return int|null
    */
    public function getLocalSecurityOptionsMachineInactivityLimitInMinutes(): ?int {
        return $this->localSecurityOptionsMachineInactivityLimitInMinutes;
    }

    /**
     * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @return LocalSecurityOptionsMinimumSessionSecurity|null
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients(): ?LocalSecurityOptionsMinimumSessionSecurity {
        return $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients;
    }

    /**
     * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @return LocalSecurityOptionsMinimumSessionSecurity|null
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers(): ?LocalSecurityOptionsMinimumSessionSecurity {
        return $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers;
    }

    /**
     * Gets the localSecurityOptionsOnlyElevateSignedExecutables property value. Enforce PKI certification path validation for a given executable file before it is permitted to run.
     * @return bool|null
    */
    public function getLocalSecurityOptionsOnlyElevateSignedExecutables(): ?bool {
        return $this->localSecurityOptionsOnlyElevateSignedExecutables;
    }

    /**
     * Gets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property value. By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
     * @return bool|null
    */
    public function getLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares(): ?bool {
        return $this->localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares;
    }

    /**
     * Gets the localSecurityOptionsSmartCardRemovalBehavior property value. Possible values for LocalSecurityOptionsSmartCardRemovalBehaviorType
     * @return LocalSecurityOptionsSmartCardRemovalBehaviorType|null
    */
    public function getLocalSecurityOptionsSmartCardRemovalBehavior(): ?LocalSecurityOptionsSmartCardRemovalBehaviorType {
        return $this->localSecurityOptionsSmartCardRemovalBehavior;
    }

    /**
     * Gets the localSecurityOptionsStandardUserElevationPromptBehavior property value. Possible values for LocalSecurityOptionsStandardUserElevationPromptBehavior
     * @return LocalSecurityOptionsStandardUserElevationPromptBehaviorType|null
    */
    public function getLocalSecurityOptionsStandardUserElevationPromptBehavior(): ?LocalSecurityOptionsStandardUserElevationPromptBehaviorType {
        return $this->localSecurityOptionsStandardUserElevationPromptBehavior;
    }

    /**
     * Gets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property value. Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
     * @return bool|null
    */
    public function getLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation(): ?bool {
        return $this->localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation;
    }

    /**
     * Gets the localSecurityOptionsUseAdminApprovalMode property value. Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsUseAdminApprovalMode(): ?bool {
        return $this->localSecurityOptionsUseAdminApprovalMode;
    }

    /**
     * Gets the localSecurityOptionsUseAdminApprovalModeForAdministrators property value. Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsUseAdminApprovalModeForAdministrators(): ?bool {
        return $this->localSecurityOptionsUseAdminApprovalModeForAdministrators;
    }

    /**
     * Gets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property value. Virtualize file and registry write failures to per user locations
     * @return bool|null
    */
    public function getLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations(): ?bool {
        return $this->localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations;
    }

    /**
     * Gets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     * @return bool|null
    */
    public function getSmartScreenBlockOverrideForFiles(): ?bool {
        return $this->smartScreenBlockOverrideForFiles;
    }

    /**
     * Gets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     * @return bool|null
    */
    public function getSmartScreenEnableInShell(): ?bool {
        return $this->smartScreenEnableInShell;
    }

    /**
     * Gets the userRightsAccessCredentialManagerAsTrustedCaller property value. This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsAccessCredentialManagerAsTrustedCaller(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsAccessCredentialManagerAsTrustedCaller;
    }

    /**
     * Gets the userRightsActAsPartOfTheOperatingSystem property value. This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsActAsPartOfTheOperatingSystem(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsActAsPartOfTheOperatingSystem;
    }

    /**
     * Gets the userRightsAllowAccessFromNetwork property value. This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsAllowAccessFromNetwork(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsAllowAccessFromNetwork;
    }

    /**
     * Gets the userRightsBackupData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsBackupData(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsBackupData;
    }

    /**
     * Gets the userRightsBlockAccessFromNetwork property value. This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsBlockAccessFromNetwork(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsBlockAccessFromNetwork;
    }

    /**
     * Gets the userRightsChangeSystemTime property value. This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsChangeSystemTime(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsChangeSystemTime;
    }

    /**
     * Gets the userRightsCreateGlobalObjects property value. This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateGlobalObjects(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsCreateGlobalObjects;
    }

    /**
     * Gets the userRightsCreatePageFile property value. This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreatePageFile(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsCreatePageFile;
    }

    /**
     * Gets the userRightsCreatePermanentSharedObjects property value. This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreatePermanentSharedObjects(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsCreatePermanentSharedObjects;
    }

    /**
     * Gets the userRightsCreateSymbolicLinks property value. This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateSymbolicLinks(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsCreateSymbolicLinks;
    }

    /**
     * Gets the userRightsCreateToken property value. This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateToken(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsCreateToken;
    }

    /**
     * Gets the userRightsDebugPrograms property value. This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDebugPrograms(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsDebugPrograms;
    }

    /**
     * Gets the userRightsDelegation property value. This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDelegation(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsDelegation;
    }

    /**
     * Gets the userRightsDenyLocalLogOn property value. This user right determines which users cannot log on to the computer. States NotConfigured, Blocked are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDenyLocalLogOn(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsDenyLocalLogOn;
    }

    /**
     * Gets the userRightsGenerateSecurityAudits property value. This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsGenerateSecurityAudits(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsGenerateSecurityAudits;
    }

    /**
     * Gets the userRightsImpersonateClient property value. Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsImpersonateClient(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsImpersonateClient;
    }

    /**
     * Gets the userRightsIncreaseSchedulingPriority property value. This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsIncreaseSchedulingPriority(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsIncreaseSchedulingPriority;
    }

    /**
     * Gets the userRightsLoadUnloadDrivers property value. This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLoadUnloadDrivers(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsLoadUnloadDrivers;
    }

    /**
     * Gets the userRightsLocalLogOn property value. This user right determines which users can log on to the computer. States NotConfigured, Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLocalLogOn(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsLocalLogOn;
    }

    /**
     * Gets the userRightsLockMemory property value. This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLockMemory(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsLockMemory;
    }

    /**
     * Gets the userRightsManageAuditingAndSecurityLogs property value. This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsManageAuditingAndSecurityLogs(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsManageAuditingAndSecurityLogs;
    }

    /**
     * Gets the userRightsManageVolumes property value. This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsManageVolumes(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsManageVolumes;
    }

    /**
     * Gets the userRightsModifyFirmwareEnvironment property value. This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsModifyFirmwareEnvironment(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsModifyFirmwareEnvironment;
    }

    /**
     * Gets the userRightsModifyObjectLabels property value. This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsModifyObjectLabels(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsModifyObjectLabels;
    }

    /**
     * Gets the userRightsProfileSingleProcess property value. This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsProfileSingleProcess(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsProfileSingleProcess;
    }

    /**
     * Gets the userRightsRemoteDesktopServicesLogOn property value. This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRemoteDesktopServicesLogOn(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsRemoteDesktopServicesLogOn;
    }

    /**
     * Gets the userRightsRemoteShutdown property value. This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRemoteShutdown(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsRemoteShutdown;
    }

    /**
     * Gets the userRightsRestoreData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRestoreData(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsRestoreData;
    }

    /**
     * Gets the userRightsTakeOwnership property value. This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsTakeOwnership(): ?DeviceManagementUserRightsSetting {
        return $this->userRightsTakeOwnership;
    }

    /**
     * Gets the windowsDefenderTamperProtection property value. Defender TamperProtection setting options
     * @return WindowsDefenderTamperProtectionOptions|null
    */
    public function getWindowsDefenderTamperProtection(): ?WindowsDefenderTamperProtectionOptions {
        return $this->windowsDefenderTamperProtection;
    }

    /**
     * Gets the xboxServicesAccessoryManagementServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesAccessoryManagementServiceStartupMode(): ?ServiceStartType {
        return $this->xboxServicesAccessoryManagementServiceStartupMode;
    }

    /**
     * Gets the xboxServicesEnableXboxGameSaveTask property value. This setting determines whether xbox game save is enabled (1) or disabled (0).
     * @return bool|null
    */
    public function getXboxServicesEnableXboxGameSaveTask(): ?bool {
        return $this->xboxServicesEnableXboxGameSaveTask;
    }

    /**
     * Gets the xboxServicesLiveAuthManagerServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveAuthManagerServiceStartupMode(): ?ServiceStartType {
        return $this->xboxServicesLiveAuthManagerServiceStartupMode;
    }

    /**
     * Gets the xboxServicesLiveGameSaveServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveGameSaveServiceStartupMode(): ?ServiceStartType {
        return $this->xboxServicesLiveGameSaveServiceStartupMode;
    }

    /**
     * Gets the xboxServicesLiveNetworkingServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveNetworkingServiceStartupMode(): ?ServiceStartType {
        return $this->xboxServicesLiveNetworkingServiceStartupMode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applicationGuardAllowCameraMicrophoneRedirection', $this->applicationGuardAllowCameraMicrophoneRedirection);
        $writer->writeBooleanValue('applicationGuardAllowFileSaveOnHost', $this->applicationGuardAllowFileSaveOnHost);
        $writer->writeBooleanValue('applicationGuardAllowPersistence', $this->applicationGuardAllowPersistence);
        $writer->writeBooleanValue('applicationGuardAllowPrintToLocalPrinters', $this->applicationGuardAllowPrintToLocalPrinters);
        $writer->writeBooleanValue('applicationGuardAllowPrintToNetworkPrinters', $this->applicationGuardAllowPrintToNetworkPrinters);
        $writer->writeBooleanValue('applicationGuardAllowPrintToPDF', $this->applicationGuardAllowPrintToPDF);
        $writer->writeBooleanValue('applicationGuardAllowPrintToXPS', $this->applicationGuardAllowPrintToXPS);
        $writer->writeBooleanValue('applicationGuardAllowVirtualGPU', $this->applicationGuardAllowVirtualGPU);
        $writer->writeEnumValue('applicationGuardBlockClipboardSharing', $this->applicationGuardBlockClipboardSharing);
        $writer->writeEnumValue('applicationGuardBlockFileTransfer', $this->applicationGuardBlockFileTransfer);
        $writer->writeBooleanValue('applicationGuardBlockNonEnterpriseContent', $this->applicationGuardBlockNonEnterpriseContent);
        $writer->writeCollectionOfPrimitiveValues('applicationGuardCertificateThumbprints', $this->applicationGuardCertificateThumbprints);
        $writer->writeBooleanValue('applicationGuardEnabled', $this->applicationGuardEnabled);
        $writer->writeEnumValue('applicationGuardEnabledOptions', $this->applicationGuardEnabledOptions);
        $writer->writeBooleanValue('applicationGuardForceAuditing', $this->applicationGuardForceAuditing);
        $writer->writeEnumValue('appLockerApplicationControl', $this->appLockerApplicationControl);
        $writer->writeBooleanValue('bitLockerAllowStandardUserEncryption', $this->bitLockerAllowStandardUserEncryption);
        $writer->writeBooleanValue('bitLockerDisableWarningForOtherDiskEncryption', $this->bitLockerDisableWarningForOtherDiskEncryption);
        $writer->writeBooleanValue('bitLockerEnableStorageCardEncryptionOnMobile', $this->bitLockerEnableStorageCardEncryptionOnMobile);
        $writer->writeBooleanValue('bitLockerEncryptDevice', $this->bitLockerEncryptDevice);
        $writer->writeObjectValue('bitLockerFixedDrivePolicy', $this->bitLockerFixedDrivePolicy);
        $writer->writeEnumValue('bitLockerRecoveryPasswordRotation', $this->bitLockerRecoveryPasswordRotation);
        $writer->writeObjectValue('bitLockerRemovableDrivePolicy', $this->bitLockerRemovableDrivePolicy);
        $writer->writeObjectValue('bitLockerSystemDrivePolicy', $this->bitLockerSystemDrivePolicy);
        $writer->writeCollectionOfPrimitiveValues('defenderAdditionalGuardedFolders', $this->defenderAdditionalGuardedFolders);
        $writer->writeEnumValue('defenderAdobeReaderLaunchChildProcess', $this->defenderAdobeReaderLaunchChildProcess);
        $writer->writeEnumValue('defenderAdvancedRansomewareProtectionType', $this->defenderAdvancedRansomewareProtectionType);
        $writer->writeBooleanValue('defenderAllowBehaviorMonitoring', $this->defenderAllowBehaviorMonitoring);
        $writer->writeBooleanValue('defenderAllowCloudProtection', $this->defenderAllowCloudProtection);
        $writer->writeBooleanValue('defenderAllowEndUserAccess', $this->defenderAllowEndUserAccess);
        $writer->writeBooleanValue('defenderAllowIntrusionPreventionSystem', $this->defenderAllowIntrusionPreventionSystem);
        $writer->writeBooleanValue('defenderAllowOnAccessProtection', $this->defenderAllowOnAccessProtection);
        $writer->writeBooleanValue('defenderAllowRealTimeMonitoring', $this->defenderAllowRealTimeMonitoring);
        $writer->writeBooleanValue('defenderAllowScanArchiveFiles', $this->defenderAllowScanArchiveFiles);
        $writer->writeBooleanValue('defenderAllowScanDownloads', $this->defenderAllowScanDownloads);
        $writer->writeBooleanValue('defenderAllowScanNetworkFiles', $this->defenderAllowScanNetworkFiles);
        $writer->writeBooleanValue('defenderAllowScanRemovableDrivesDuringFullScan', $this->defenderAllowScanRemovableDrivesDuringFullScan);
        $writer->writeBooleanValue('defenderAllowScanScriptsLoadedInInternetExplorer', $this->defenderAllowScanScriptsLoadedInInternetExplorer);
        $writer->writeCollectionOfPrimitiveValues('defenderAttackSurfaceReductionExcludedPaths', $this->defenderAttackSurfaceReductionExcludedPaths);
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->defenderBlockEndUserAccess);
        $writer->writeEnumValue('defenderBlockPersistenceThroughWmiType', $this->defenderBlockPersistenceThroughWmiType);
        $writer->writeBooleanValue('defenderCheckForSignaturesBeforeRunningScan', $this->defenderCheckForSignaturesBeforeRunningScan);
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->defenderCloudBlockLevel);
        $writer->writeIntegerValue('defenderCloudExtendedTimeoutInSeconds', $this->defenderCloudExtendedTimeoutInSeconds);
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->defenderDaysBeforeDeletingQuarantinedMalware);
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->defenderDetectedMalwareActions);
        $writer->writeBooleanValue('defenderDisableBehaviorMonitoring', $this->defenderDisableBehaviorMonitoring);
        $writer->writeBooleanValue('defenderDisableCatchupFullScan', $this->defenderDisableCatchupFullScan);
        $writer->writeBooleanValue('defenderDisableCatchupQuickScan', $this->defenderDisableCatchupQuickScan);
        $writer->writeBooleanValue('defenderDisableCloudProtection', $this->defenderDisableCloudProtection);
        $writer->writeBooleanValue('defenderDisableIntrusionPreventionSystem', $this->defenderDisableIntrusionPreventionSystem);
        $writer->writeBooleanValue('defenderDisableOnAccessProtection', $this->defenderDisableOnAccessProtection);
        $writer->writeBooleanValue('defenderDisableRealTimeMonitoring', $this->defenderDisableRealTimeMonitoring);
        $writer->writeBooleanValue('defenderDisableScanArchiveFiles', $this->defenderDisableScanArchiveFiles);
        $writer->writeBooleanValue('defenderDisableScanDownloads', $this->defenderDisableScanDownloads);
        $writer->writeBooleanValue('defenderDisableScanNetworkFiles', $this->defenderDisableScanNetworkFiles);
        $writer->writeBooleanValue('defenderDisableScanRemovableDrivesDuringFullScan', $this->defenderDisableScanRemovableDrivesDuringFullScan);
        $writer->writeBooleanValue('defenderDisableScanScriptsLoadedInInternetExplorer', $this->defenderDisableScanScriptsLoadedInInternetExplorer);
        $writer->writeEnumValue('defenderEmailContentExecution', $this->defenderEmailContentExecution);
        $writer->writeEnumValue('defenderEmailContentExecutionType', $this->defenderEmailContentExecutionType);
        $writer->writeBooleanValue('defenderEnableLowCpuPriority', $this->defenderEnableLowCpuPriority);
        $writer->writeBooleanValue('defenderEnableScanIncomingMail', $this->defenderEnableScanIncomingMail);
        $writer->writeBooleanValue('defenderEnableScanMappedNetworkDrivesDuringFullScan', $this->defenderEnableScanMappedNetworkDrivesDuringFullScan);
        $writer->writeBinaryContent('defenderExploitProtectionXml', $this->defenderExploitProtectionXml);
        $writer->writeStringValue('defenderExploitProtectionXmlFileName', $this->defenderExploitProtectionXmlFileName);
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->defenderFileExtensionsToExclude);
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->defenderFilesAndFoldersToExclude);
        $writer->writeCollectionOfPrimitiveValues('defenderGuardedFoldersAllowedAppPaths', $this->defenderGuardedFoldersAllowedAppPaths);
        $writer->writeEnumValue('defenderGuardMyFoldersType', $this->defenderGuardMyFoldersType);
        $writer->writeEnumValue('defenderNetworkProtectionType', $this->defenderNetworkProtectionType);
        $writer->writeEnumValue('defenderOfficeAppsExecutableContentCreationOrLaunch', $this->defenderOfficeAppsExecutableContentCreationOrLaunch);
        $writer->writeEnumValue('defenderOfficeAppsExecutableContentCreationOrLaunchType', $this->defenderOfficeAppsExecutableContentCreationOrLaunchType);
        $writer->writeEnumValue('defenderOfficeAppsLaunchChildProcess', $this->defenderOfficeAppsLaunchChildProcess);
        $writer->writeEnumValue('defenderOfficeAppsLaunchChildProcessType', $this->defenderOfficeAppsLaunchChildProcessType);
        $writer->writeEnumValue('defenderOfficeAppsOtherProcessInjection', $this->defenderOfficeAppsOtherProcessInjection);
        $writer->writeEnumValue('defenderOfficeAppsOtherProcessInjectionType', $this->defenderOfficeAppsOtherProcessInjectionType);
        $writer->writeEnumValue('defenderOfficeCommunicationAppsLaunchChildProcess', $this->defenderOfficeCommunicationAppsLaunchChildProcess);
        $writer->writeEnumValue('defenderOfficeMacroCodeAllowWin32Imports', $this->defenderOfficeMacroCodeAllowWin32Imports);
        $writer->writeEnumValue('defenderOfficeMacroCodeAllowWin32ImportsType', $this->defenderOfficeMacroCodeAllowWin32ImportsType);
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppAction', $this->defenderPotentiallyUnwantedAppAction);
        $writer->writeEnumValue('defenderPreventCredentialStealingType', $this->defenderPreventCredentialStealingType);
        $writer->writeEnumValue('defenderProcessCreation', $this->defenderProcessCreation);
        $writer->writeEnumValue('defenderProcessCreationType', $this->defenderProcessCreationType);
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->defenderProcessesToExclude);
        $writer->writeEnumValue('defenderScanDirection', $this->defenderScanDirection);
        $writer->writeIntegerValue('defenderScanMaxCpuPercentage', $this->defenderScanMaxCpuPercentage);
        $writer->writeEnumValue('defenderScanType', $this->defenderScanType);
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->defenderScheduledQuickScanTime);
        $writer->writeEnumValue('defenderScheduledScanDay', $this->defenderScheduledScanDay);
        $writer->writeTimeValue('defenderScheduledScanTime', $this->defenderScheduledScanTime);
        $writer->writeEnumValue('defenderScriptDownloadedPayloadExecution', $this->defenderScriptDownloadedPayloadExecution);
        $writer->writeEnumValue('defenderScriptDownloadedPayloadExecutionType', $this->defenderScriptDownloadedPayloadExecutionType);
        $writer->writeEnumValue('defenderScriptObfuscatedMacroCode', $this->defenderScriptObfuscatedMacroCode);
        $writer->writeEnumValue('defenderScriptObfuscatedMacroCodeType', $this->defenderScriptObfuscatedMacroCodeType);
        $writer->writeBooleanValue('defenderSecurityCenterBlockExploitProtectionOverride', $this->defenderSecurityCenterBlockExploitProtectionOverride);
        $writer->writeBooleanValue('defenderSecurityCenterDisableAccountUI', $this->defenderSecurityCenterDisableAccountUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableAppBrowserUI', $this->defenderSecurityCenterDisableAppBrowserUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableClearTpmUI', $this->defenderSecurityCenterDisableClearTpmUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableFamilyUI', $this->defenderSecurityCenterDisableFamilyUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableHardwareUI', $this->defenderSecurityCenterDisableHardwareUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableHealthUI', $this->defenderSecurityCenterDisableHealthUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableNetworkUI', $this->defenderSecurityCenterDisableNetworkUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableNotificationAreaUI', $this->defenderSecurityCenterDisableNotificationAreaUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableRansomwareUI', $this->defenderSecurityCenterDisableRansomwareUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableSecureBootUI', $this->defenderSecurityCenterDisableSecureBootUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableTroubleshootingUI', $this->defenderSecurityCenterDisableTroubleshootingUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableVirusUI', $this->defenderSecurityCenterDisableVirusUI);
        $writer->writeBooleanValue('defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI', $this->defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI);
        $writer->writeStringValue('defenderSecurityCenterHelpEmail', $this->defenderSecurityCenterHelpEmail);
        $writer->writeStringValue('defenderSecurityCenterHelpPhone', $this->defenderSecurityCenterHelpPhone);
        $writer->writeStringValue('defenderSecurityCenterHelpURL', $this->defenderSecurityCenterHelpURL);
        $writer->writeEnumValue('defenderSecurityCenterITContactDisplay', $this->defenderSecurityCenterITContactDisplay);
        $writer->writeEnumValue('defenderSecurityCenterNotificationsFromApp', $this->defenderSecurityCenterNotificationsFromApp);
        $writer->writeStringValue('defenderSecurityCenterOrganizationDisplayName', $this->defenderSecurityCenterOrganizationDisplayName);
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->defenderSignatureUpdateIntervalInHours);
        $writer->writeEnumValue('defenderSubmitSamplesConsentType', $this->defenderSubmitSamplesConsentType);
        $writer->writeEnumValue('defenderUntrustedExecutable', $this->defenderUntrustedExecutable);
        $writer->writeEnumValue('defenderUntrustedExecutableType', $this->defenderUntrustedExecutableType);
        $writer->writeEnumValue('defenderUntrustedUSBProcess', $this->defenderUntrustedUSBProcess);
        $writer->writeEnumValue('defenderUntrustedUSBProcessType', $this->defenderUntrustedUSBProcessType);
        $writer->writeBooleanValue('deviceGuardEnableSecureBootWithDMA', $this->deviceGuardEnableSecureBootWithDMA);
        $writer->writeBooleanValue('deviceGuardEnableVirtualizationBasedSecurity', $this->deviceGuardEnableVirtualizationBasedSecurity);
        $writer->writeEnumValue('deviceGuardLaunchSystemGuard', $this->deviceGuardLaunchSystemGuard);
        $writer->writeEnumValue('deviceGuardLocalSystemAuthorityCredentialGuardSettings', $this->deviceGuardLocalSystemAuthorityCredentialGuardSettings);
        $writer->writeEnumValue('deviceGuardSecureBootWithDMA', $this->deviceGuardSecureBootWithDMA);
        $writer->writeEnumValue('dmaGuardDeviceEnumerationPolicy', $this->dmaGuardDeviceEnumerationPolicy);
        $writer->writeBooleanValue('firewallBlockStatefulFTP', $this->firewallBlockStatefulFTP);
        $writer->writeEnumValue('firewallCertificateRevocationListCheckMethod', $this->firewallCertificateRevocationListCheckMethod);
        $writer->writeIntegerValue('firewallIdleTimeoutForSecurityAssociationInSeconds', $this->firewallIdleTimeoutForSecurityAssociationInSeconds);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowDHCP', $this->firewallIPSecExemptionsAllowDHCP);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowICMP', $this->firewallIPSecExemptionsAllowICMP);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowNeighborDiscovery', $this->firewallIPSecExemptionsAllowNeighborDiscovery);
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowRouterDiscovery', $this->firewallIPSecExemptionsAllowRouterDiscovery);
        $writer->writeBooleanValue('firewallIPSecExemptionsNone', $this->firewallIPSecExemptionsNone);
        $writer->writeBooleanValue('firewallMergeKeyingModuleSettings', $this->firewallMergeKeyingModuleSettings);
        $writer->writeEnumValue('firewallPacketQueueingMethod', $this->firewallPacketQueueingMethod);
        $writer->writeEnumValue('firewallPreSharedKeyEncodingMethod', $this->firewallPreSharedKeyEncodingMethod);
        $writer->writeObjectValue('firewallProfileDomain', $this->firewallProfileDomain);
        $writer->writeObjectValue('firewallProfilePrivate', $this->firewallProfilePrivate);
        $writer->writeObjectValue('firewallProfilePublic', $this->firewallProfilePublic);
        $writer->writeCollectionOfObjectValues('firewallRules', $this->firewallRules);
        $writer->writeEnumValue('lanManagerAuthenticationLevel', $this->lanManagerAuthenticationLevel);
        $writer->writeBooleanValue('lanManagerWorkstationDisableInsecureGuestLogons', $this->lanManagerWorkstationDisableInsecureGuestLogons);
        $writer->writeStringValue('localSecurityOptionsAdministratorAccountName', $this->localSecurityOptionsAdministratorAccountName);
        $writer->writeEnumValue('localSecurityOptionsAdministratorElevationPromptBehavior', $this->localSecurityOptionsAdministratorElevationPromptBehavior);
        $writer->writeBooleanValue('localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares', $this->localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares);
        $writer->writeBooleanValue('localSecurityOptionsAllowPKU2UAuthenticationRequests', $this->localSecurityOptionsAllowPKU2UAuthenticationRequests);
        $writer->writeStringValue('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager', $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager);
        $writer->writeBooleanValue('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool', $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool);
        $writer->writeBooleanValue('localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn', $this->localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn);
        $writer->writeBooleanValue('localSecurityOptionsAllowUIAccessApplicationElevation', $this->localSecurityOptionsAllowUIAccessApplicationElevation);
        $writer->writeBooleanValue('localSecurityOptionsAllowUIAccessApplicationsForSecureLocations', $this->localSecurityOptionsAllowUIAccessApplicationsForSecureLocations);
        $writer->writeBooleanValue('localSecurityOptionsAllowUndockWithoutHavingToLogon', $this->localSecurityOptionsAllowUndockWithoutHavingToLogon);
        $writer->writeBooleanValue('localSecurityOptionsBlockMicrosoftAccounts', $this->localSecurityOptionsBlockMicrosoftAccounts);
        $writer->writeBooleanValue('localSecurityOptionsBlockRemoteLogonWithBlankPassword', $this->localSecurityOptionsBlockRemoteLogonWithBlankPassword);
        $writer->writeBooleanValue('localSecurityOptionsBlockRemoteOpticalDriveAccess', $this->localSecurityOptionsBlockRemoteOpticalDriveAccess);
        $writer->writeBooleanValue('localSecurityOptionsBlockUsersInstallingPrinterDrivers', $this->localSecurityOptionsBlockUsersInstallingPrinterDrivers);
        $writer->writeBooleanValue('localSecurityOptionsClearVirtualMemoryPageFile', $this->localSecurityOptionsClearVirtualMemoryPageFile);
        $writer->writeBooleanValue('localSecurityOptionsClientDigitallySignCommunicationsAlways', $this->localSecurityOptionsClientDigitallySignCommunicationsAlways);
        $writer->writeBooleanValue('localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers', $this->localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers);
        $writer->writeBooleanValue('localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation', $this->localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation);
        $writer->writeBooleanValue('localSecurityOptionsDisableAdministratorAccount', $this->localSecurityOptionsDisableAdministratorAccount);
        $writer->writeBooleanValue('localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees', $this->localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees);
        $writer->writeBooleanValue('localSecurityOptionsDisableGuestAccount', $this->localSecurityOptionsDisableGuestAccount);
        $writer->writeBooleanValue('localSecurityOptionsDisableServerDigitallySignCommunicationsAlways', $this->localSecurityOptionsDisableServerDigitallySignCommunicationsAlways);
        $writer->writeBooleanValue('localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees', $this->localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees);
        $writer->writeBooleanValue('localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts', $this->localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts);
        $writer->writeBooleanValue('localSecurityOptionsDoNotRequireCtrlAltDel', $this->localSecurityOptionsDoNotRequireCtrlAltDel);
        $writer->writeBooleanValue('localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange', $this->localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange);
        $writer->writeEnumValue('localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser', $this->localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser);
        $writer->writeStringValue('localSecurityOptionsGuestAccountName', $this->localSecurityOptionsGuestAccountName);
        $writer->writeBooleanValue('localSecurityOptionsHideLastSignedInUser', $this->localSecurityOptionsHideLastSignedInUser);
        $writer->writeBooleanValue('localSecurityOptionsHideUsernameAtSignIn', $this->localSecurityOptionsHideUsernameAtSignIn);
        $writer->writeEnumValue('localSecurityOptionsInformationDisplayedOnLockScreen', $this->localSecurityOptionsInformationDisplayedOnLockScreen);
        $writer->writeEnumValue('localSecurityOptionsInformationShownOnLockScreen', $this->localSecurityOptionsInformationShownOnLockScreen);
        $writer->writeStringValue('localSecurityOptionsLogOnMessageText', $this->localSecurityOptionsLogOnMessageText);
        $writer->writeStringValue('localSecurityOptionsLogOnMessageTitle', $this->localSecurityOptionsLogOnMessageTitle);
        $writer->writeIntegerValue('localSecurityOptionsMachineInactivityLimit', $this->localSecurityOptionsMachineInactivityLimit);
        $writer->writeIntegerValue('localSecurityOptionsMachineInactivityLimitInMinutes', $this->localSecurityOptionsMachineInactivityLimitInMinutes);
        $writer->writeEnumValue('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients', $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients);
        $writer->writeEnumValue('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers', $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers);
        $writer->writeBooleanValue('localSecurityOptionsOnlyElevateSignedExecutables', $this->localSecurityOptionsOnlyElevateSignedExecutables);
        $writer->writeBooleanValue('localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares', $this->localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares);
        $writer->writeEnumValue('localSecurityOptionsSmartCardRemovalBehavior', $this->localSecurityOptionsSmartCardRemovalBehavior);
        $writer->writeEnumValue('localSecurityOptionsStandardUserElevationPromptBehavior', $this->localSecurityOptionsStandardUserElevationPromptBehavior);
        $writer->writeBooleanValue('localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation', $this->localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation);
        $writer->writeBooleanValue('localSecurityOptionsUseAdminApprovalMode', $this->localSecurityOptionsUseAdminApprovalMode);
        $writer->writeBooleanValue('localSecurityOptionsUseAdminApprovalModeForAdministrators', $this->localSecurityOptionsUseAdminApprovalModeForAdministrators);
        $writer->writeBooleanValue('localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations', $this->localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations);
        $writer->writeBooleanValue('smartScreenBlockOverrideForFiles', $this->smartScreenBlockOverrideForFiles);
        $writer->writeBooleanValue('smartScreenEnableInShell', $this->smartScreenEnableInShell);
        $writer->writeObjectValue('userRightsAccessCredentialManagerAsTrustedCaller', $this->userRightsAccessCredentialManagerAsTrustedCaller);
        $writer->writeObjectValue('userRightsActAsPartOfTheOperatingSystem', $this->userRightsActAsPartOfTheOperatingSystem);
        $writer->writeObjectValue('userRightsAllowAccessFromNetwork', $this->userRightsAllowAccessFromNetwork);
        $writer->writeObjectValue('userRightsBackupData', $this->userRightsBackupData);
        $writer->writeObjectValue('userRightsBlockAccessFromNetwork', $this->userRightsBlockAccessFromNetwork);
        $writer->writeObjectValue('userRightsChangeSystemTime', $this->userRightsChangeSystemTime);
        $writer->writeObjectValue('userRightsCreateGlobalObjects', $this->userRightsCreateGlobalObjects);
        $writer->writeObjectValue('userRightsCreatePageFile', $this->userRightsCreatePageFile);
        $writer->writeObjectValue('userRightsCreatePermanentSharedObjects', $this->userRightsCreatePermanentSharedObjects);
        $writer->writeObjectValue('userRightsCreateSymbolicLinks', $this->userRightsCreateSymbolicLinks);
        $writer->writeObjectValue('userRightsCreateToken', $this->userRightsCreateToken);
        $writer->writeObjectValue('userRightsDebugPrograms', $this->userRightsDebugPrograms);
        $writer->writeObjectValue('userRightsDelegation', $this->userRightsDelegation);
        $writer->writeObjectValue('userRightsDenyLocalLogOn', $this->userRightsDenyLocalLogOn);
        $writer->writeObjectValue('userRightsGenerateSecurityAudits', $this->userRightsGenerateSecurityAudits);
        $writer->writeObjectValue('userRightsImpersonateClient', $this->userRightsImpersonateClient);
        $writer->writeObjectValue('userRightsIncreaseSchedulingPriority', $this->userRightsIncreaseSchedulingPriority);
        $writer->writeObjectValue('userRightsLoadUnloadDrivers', $this->userRightsLoadUnloadDrivers);
        $writer->writeObjectValue('userRightsLocalLogOn', $this->userRightsLocalLogOn);
        $writer->writeObjectValue('userRightsLockMemory', $this->userRightsLockMemory);
        $writer->writeObjectValue('userRightsManageAuditingAndSecurityLogs', $this->userRightsManageAuditingAndSecurityLogs);
        $writer->writeObjectValue('userRightsManageVolumes', $this->userRightsManageVolumes);
        $writer->writeObjectValue('userRightsModifyFirmwareEnvironment', $this->userRightsModifyFirmwareEnvironment);
        $writer->writeObjectValue('userRightsModifyObjectLabels', $this->userRightsModifyObjectLabels);
        $writer->writeObjectValue('userRightsProfileSingleProcess', $this->userRightsProfileSingleProcess);
        $writer->writeObjectValue('userRightsRemoteDesktopServicesLogOn', $this->userRightsRemoteDesktopServicesLogOn);
        $writer->writeObjectValue('userRightsRemoteShutdown', $this->userRightsRemoteShutdown);
        $writer->writeObjectValue('userRightsRestoreData', $this->userRightsRestoreData);
        $writer->writeObjectValue('userRightsTakeOwnership', $this->userRightsTakeOwnership);
        $writer->writeEnumValue('windowsDefenderTamperProtection', $this->windowsDefenderTamperProtection);
        $writer->writeEnumValue('xboxServicesAccessoryManagementServiceStartupMode', $this->xboxServicesAccessoryManagementServiceStartupMode);
        $writer->writeBooleanValue('xboxServicesEnableXboxGameSaveTask', $this->xboxServicesEnableXboxGameSaveTask);
        $writer->writeEnumValue('xboxServicesLiveAuthManagerServiceStartupMode', $this->xboxServicesLiveAuthManagerServiceStartupMode);
        $writer->writeEnumValue('xboxServicesLiveGameSaveServiceStartupMode', $this->xboxServicesLiveGameSaveServiceStartupMode);
        $writer->writeEnumValue('xboxServicesLiveNetworkingServiceStartupMode', $this->xboxServicesLiveNetworkingServiceStartupMode);
    }

    /**
     * Sets the applicationGuardAllowCameraMicrophoneRedirection property value. Gets or sets whether applications inside Microsoft Defender Application Guard can access the device’s camera and microphone.
     *  @param bool|null $value Value to set for the applicationGuardAllowCameraMicrophoneRedirection property.
    */
    public function setApplicationGuardAllowCameraMicrophoneRedirection(?bool $value ): void {
        $this->applicationGuardAllowCameraMicrophoneRedirection = $value;
    }

    /**
     * Sets the applicationGuardAllowFileSaveOnHost property value. Allow users to download files from Edge in the application guard container and save them on the host file system
     *  @param bool|null $value Value to set for the applicationGuardAllowFileSaveOnHost property.
    */
    public function setApplicationGuardAllowFileSaveOnHost(?bool $value ): void {
        $this->applicationGuardAllowFileSaveOnHost = $value;
    }

    /**
     * Sets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     *  @param bool|null $value Value to set for the applicationGuardAllowPersistence property.
    */
    public function setApplicationGuardAllowPersistence(?bool $value ): void {
        $this->applicationGuardAllowPersistence = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToLocalPrinters property.
    */
    public function setApplicationGuardAllowPrintToLocalPrinters(?bool $value ): void {
        $this->applicationGuardAllowPrintToLocalPrinters = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToNetworkPrinters property.
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters(?bool $value ): void {
        $this->applicationGuardAllowPrintToNetworkPrinters = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToPDF property.
    */
    public function setApplicationGuardAllowPrintToPDF(?bool $value ): void {
        $this->applicationGuardAllowPrintToPDF = $value;
    }

    /**
     * Sets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     *  @param bool|null $value Value to set for the applicationGuardAllowPrintToXPS property.
    */
    public function setApplicationGuardAllowPrintToXPS(?bool $value ): void {
        $this->applicationGuardAllowPrintToXPS = $value;
    }

    /**
     * Sets the applicationGuardAllowVirtualGPU property value. Allow application guard to use virtual GPU
     *  @param bool|null $value Value to set for the applicationGuardAllowVirtualGPU property.
    */
    public function setApplicationGuardAllowVirtualGPU(?bool $value ): void {
        $this->applicationGuardAllowVirtualGPU = $value;
    }

    /**
     * Sets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     *  @param ApplicationGuardBlockClipboardSharingType|null $value Value to set for the applicationGuardBlockClipboardSharing property.
    */
    public function setApplicationGuardBlockClipboardSharing(?ApplicationGuardBlockClipboardSharingType $value ): void {
        $this->applicationGuardBlockClipboardSharing = $value;
    }

    /**
     * Sets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     *  @param ApplicationGuardBlockFileTransferType|null $value Value to set for the applicationGuardBlockFileTransfer property.
    */
    public function setApplicationGuardBlockFileTransfer(?ApplicationGuardBlockFileTransferType $value ): void {
        $this->applicationGuardBlockFileTransfer = $value;
    }

    /**
     * Sets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     *  @param bool|null $value Value to set for the applicationGuardBlockNonEnterpriseContent property.
    */
    public function setApplicationGuardBlockNonEnterpriseContent(?bool $value ): void {
        $this->applicationGuardBlockNonEnterpriseContent = $value;
    }

    /**
     * Sets the applicationGuardCertificateThumbprints property value. Allows certain device level Root Certificates to be shared with the Microsoft Defender Application Guard container.
     *  @param array<string>|null $value Value to set for the applicationGuardCertificateThumbprints property.
    */
    public function setApplicationGuardCertificateThumbprints(?array $value ): void {
        $this->applicationGuardCertificateThumbprints = $value;
    }

    /**
     * Sets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     *  @param bool|null $value Value to set for the applicationGuardEnabled property.
    */
    public function setApplicationGuardEnabled(?bool $value ): void {
        $this->applicationGuardEnabled = $value;
    }

    /**
     * Sets the applicationGuardEnabledOptions property value. Possible values for ApplicationGuardEnabledOptions
     *  @param ApplicationGuardEnabledOptions|null $value Value to set for the applicationGuardEnabledOptions property.
    */
    public function setApplicationGuardEnabledOptions(?ApplicationGuardEnabledOptions $value ): void {
        $this->applicationGuardEnabledOptions = $value;
    }

    /**
     * Sets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     *  @param bool|null $value Value to set for the applicationGuardForceAuditing property.
    */
    public function setApplicationGuardForceAuditing(?bool $value ): void {
        $this->applicationGuardForceAuditing = $value;
    }

    /**
     * Sets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     *  @param AppLockerApplicationControlType|null $value Value to set for the appLockerApplicationControl property.
    */
    public function setAppLockerApplicationControl(?AppLockerApplicationControlType $value ): void {
        $this->appLockerApplicationControl = $value;
    }

    /**
     * Sets the bitLockerAllowStandardUserEncryption property value. Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
     *  @param bool|null $value Value to set for the bitLockerAllowStandardUserEncryption property.
    */
    public function setBitLockerAllowStandardUserEncryption(?bool $value ): void {
        $this->bitLockerAllowStandardUserEncryption = $value;
    }

    /**
     * Sets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     *  @param bool|null $value Value to set for the bitLockerDisableWarningForOtherDiskEncryption property.
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption(?bool $value ): void {
        $this->bitLockerDisableWarningForOtherDiskEncryption = $value;
    }

    /**
     * Sets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     *  @param bool|null $value Value to set for the bitLockerEnableStorageCardEncryptionOnMobile property.
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile(?bool $value ): void {
        $this->bitLockerEnableStorageCardEncryptionOnMobile = $value;
    }

    /**
     * Sets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     *  @param bool|null $value Value to set for the bitLockerEncryptDevice property.
    */
    public function setBitLockerEncryptDevice(?bool $value ): void {
        $this->bitLockerEncryptDevice = $value;
    }

    /**
     * Sets the bitLockerFixedDrivePolicy property value. BitLocker Fixed Drive Policy.
     *  @param BitLockerFixedDrivePolicy|null $value Value to set for the bitLockerFixedDrivePolicy property.
    */
    public function setBitLockerFixedDrivePolicy(?BitLockerFixedDrivePolicy $value ): void {
        $this->bitLockerFixedDrivePolicy = $value;
    }

    /**
     * Sets the bitLockerRecoveryPasswordRotation property value. BitLocker recovery password rotation type
     *  @param BitLockerRecoveryPasswordRotationType|null $value Value to set for the bitLockerRecoveryPasswordRotation property.
    */
    public function setBitLockerRecoveryPasswordRotation(?BitLockerRecoveryPasswordRotationType $value ): void {
        $this->bitLockerRecoveryPasswordRotation = $value;
    }

    /**
     * Sets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     *  @param BitLockerRemovableDrivePolicy|null $value Value to set for the bitLockerRemovableDrivePolicy property.
    */
    public function setBitLockerRemovableDrivePolicy(?BitLockerRemovableDrivePolicy $value ): void {
        $this->bitLockerRemovableDrivePolicy = $value;
    }

    /**
     * Sets the bitLockerSystemDrivePolicy property value. BitLocker System Drive Policy.
     *  @param BitLockerSystemDrivePolicy|null $value Value to set for the bitLockerSystemDrivePolicy property.
    */
    public function setBitLockerSystemDrivePolicy(?BitLockerSystemDrivePolicy $value ): void {
        $this->bitLockerSystemDrivePolicy = $value;
    }

    /**
     * Sets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     *  @param array<string>|null $value Value to set for the defenderAdditionalGuardedFolders property.
    */
    public function setDefenderAdditionalGuardedFolders(?array $value ): void {
        $this->defenderAdditionalGuardedFolders = $value;
    }

    /**
     * Sets the defenderAdobeReaderLaunchChildProcess property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderAdobeReaderLaunchChildProcess property.
    */
    public function setDefenderAdobeReaderLaunchChildProcess(?DefenderProtectionType $value ): void {
        $this->defenderAdobeReaderLaunchChildProcess = $value;
    }

    /**
     * Sets the defenderAdvancedRansomewareProtectionType property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderAdvancedRansomewareProtectionType property.
    */
    public function setDefenderAdvancedRansomewareProtectionType(?DefenderProtectionType $value ): void {
        $this->defenderAdvancedRansomewareProtectionType = $value;
    }

    /**
     * Sets the defenderAllowBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     *  @param bool|null $value Value to set for the defenderAllowBehaviorMonitoring property.
    */
    public function setDefenderAllowBehaviorMonitoring(?bool $value ): void {
        $this->defenderAllowBehaviorMonitoring = $value;
    }

    /**
     * Sets the defenderAllowCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     *  @param bool|null $value Value to set for the defenderAllowCloudProtection property.
    */
    public function setDefenderAllowCloudProtection(?bool $value ): void {
        $this->defenderAllowCloudProtection = $value;
    }

    /**
     * Sets the defenderAllowEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     *  @param bool|null $value Value to set for the defenderAllowEndUserAccess property.
    */
    public function setDefenderAllowEndUserAccess(?bool $value ): void {
        $this->defenderAllowEndUserAccess = $value;
    }

    /**
     * Sets the defenderAllowIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     *  @param bool|null $value Value to set for the defenderAllowIntrusionPreventionSystem property.
    */
    public function setDefenderAllowIntrusionPreventionSystem(?bool $value ): void {
        $this->defenderAllowIntrusionPreventionSystem = $value;
    }

    /**
     * Sets the defenderAllowOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     *  @param bool|null $value Value to set for the defenderAllowOnAccessProtection property.
    */
    public function setDefenderAllowOnAccessProtection(?bool $value ): void {
        $this->defenderAllowOnAccessProtection = $value;
    }

    /**
     * Sets the defenderAllowRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     *  @param bool|null $value Value to set for the defenderAllowRealTimeMonitoring property.
    */
    public function setDefenderAllowRealTimeMonitoring(?bool $value ): void {
        $this->defenderAllowRealTimeMonitoring = $value;
    }

    /**
     * Sets the defenderAllowScanArchiveFiles property value. Allows or disallows scanning of archives.
     *  @param bool|null $value Value to set for the defenderAllowScanArchiveFiles property.
    */
    public function setDefenderAllowScanArchiveFiles(?bool $value ): void {
        $this->defenderAllowScanArchiveFiles = $value;
    }

    /**
     * Sets the defenderAllowScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     *  @param bool|null $value Value to set for the defenderAllowScanDownloads property.
    */
    public function setDefenderAllowScanDownloads(?bool $value ): void {
        $this->defenderAllowScanDownloads = $value;
    }

    /**
     * Sets the defenderAllowScanNetworkFiles property value. Allows or disallows a scanning of network files.
     *  @param bool|null $value Value to set for the defenderAllowScanNetworkFiles property.
    */
    public function setDefenderAllowScanNetworkFiles(?bool $value ): void {
        $this->defenderAllowScanNetworkFiles = $value;
    }

    /**
     * Sets the defenderAllowScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     *  @param bool|null $value Value to set for the defenderAllowScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderAllowScanRemovableDrivesDuringFullScan(?bool $value ): void {
        $this->defenderAllowScanRemovableDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderAllowScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     *  @param bool|null $value Value to set for the defenderAllowScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderAllowScanScriptsLoadedInInternetExplorer(?bool $value ): void {
        $this->defenderAllowScanScriptsLoadedInInternetExplorer = $value;
    }

    /**
     * Sets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     *  @param array<string>|null $value Value to set for the defenderAttackSurfaceReductionExcludedPaths property.
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths(?array $value ): void {
        $this->defenderAttackSurfaceReductionExcludedPaths = $value;
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     *  @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value ): void {
        $this->defenderBlockEndUserAccess = $value;
    }

    /**
     * Sets the defenderBlockPersistenceThroughWmiType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderBlockPersistenceThroughWmiType property.
    */
    public function setDefenderBlockPersistenceThroughWmiType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderBlockPersistenceThroughWmiType = $value;
    }

    /**
     * Sets the defenderCheckForSignaturesBeforeRunningScan property value. This policy setting allows you to manage whether a check for new virus and spyware definitions will occur before running a scan.
     *  @param bool|null $value Value to set for the defenderCheckForSignaturesBeforeRunningScan property.
    */
    public function setDefenderCheckForSignaturesBeforeRunningScan(?bool $value ): void {
        $this->defenderCheckForSignaturesBeforeRunningScan = $value;
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Added in Windows 10, version 1709. This policy setting determines how aggressive Windows Defender Antivirus will be in blocking and scanning suspicious files. Value type is integer. This feature requires the 'Join Microsoft MAPS' setting enabled in order to function. Possible values are: notConfigured, high, highPlus, zeroTolerance.
     *  @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value ): void {
        $this->defenderCloudBlockLevel = $value;
    }

    /**
     * Sets the defenderCloudExtendedTimeoutInSeconds property value. Added in Windows 10, version 1709. This feature allows Windows Defender Antivirus to block a suspicious file for up to 60 seconds, and scan it in the cloud to make sure it's safe. Value type is integer, range is 0 - 50. This feature depends on three other MAPS settings the must all be enabled- 'Configure the 'Block at First Sight' feature; 'Join Microsoft MAPS'; 'Send file samples when further analysis is required'. Valid values 0 to 50
     *  @param int|null $value Value to set for the defenderCloudExtendedTimeoutInSeconds property.
    */
    public function setDefenderCloudExtendedTimeoutInSeconds(?int $value ): void {
        $this->defenderCloudExtendedTimeoutInSeconds = $value;
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Time period (in days) that quarantine items will be stored on the system. Valid values 0 to 90
     *  @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value ): void {
        $this->defenderDaysBeforeDeletingQuarantinedMalware = $value;
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Allows an administrator to specify any valid threat severity levels and the corresponding default action ID to take.
     *  @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value ): void {
        $this->defenderDetectedMalwareActions = $value;
    }

    /**
     * Sets the defenderDisableBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     *  @param bool|null $value Value to set for the defenderDisableBehaviorMonitoring property.
    */
    public function setDefenderDisableBehaviorMonitoring(?bool $value ): void {
        $this->defenderDisableBehaviorMonitoring = $value;
    }

    /**
     * Sets the defenderDisableCatchupFullScan property value. This policy setting allows you to configure catch-up scans for scheduled full scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     *  @param bool|null $value Value to set for the defenderDisableCatchupFullScan property.
    */
    public function setDefenderDisableCatchupFullScan(?bool $value ): void {
        $this->defenderDisableCatchupFullScan = $value;
    }

    /**
     * Sets the defenderDisableCatchupQuickScan property value. This policy setting allows you to configure catch-up scans for scheduled quick scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     *  @param bool|null $value Value to set for the defenderDisableCatchupQuickScan property.
    */
    public function setDefenderDisableCatchupQuickScan(?bool $value ): void {
        $this->defenderDisableCatchupQuickScan = $value;
    }

    /**
     * Sets the defenderDisableCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     *  @param bool|null $value Value to set for the defenderDisableCloudProtection property.
    */
    public function setDefenderDisableCloudProtection(?bool $value ): void {
        $this->defenderDisableCloudProtection = $value;
    }

    /**
     * Sets the defenderDisableIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     *  @param bool|null $value Value to set for the defenderDisableIntrusionPreventionSystem property.
    */
    public function setDefenderDisableIntrusionPreventionSystem(?bool $value ): void {
        $this->defenderDisableIntrusionPreventionSystem = $value;
    }

    /**
     * Sets the defenderDisableOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     *  @param bool|null $value Value to set for the defenderDisableOnAccessProtection property.
    */
    public function setDefenderDisableOnAccessProtection(?bool $value ): void {
        $this->defenderDisableOnAccessProtection = $value;
    }

    /**
     * Sets the defenderDisableRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     *  @param bool|null $value Value to set for the defenderDisableRealTimeMonitoring property.
    */
    public function setDefenderDisableRealTimeMonitoring(?bool $value ): void {
        $this->defenderDisableRealTimeMonitoring = $value;
    }

    /**
     * Sets the defenderDisableScanArchiveFiles property value. Allows or disallows scanning of archives.
     *  @param bool|null $value Value to set for the defenderDisableScanArchiveFiles property.
    */
    public function setDefenderDisableScanArchiveFiles(?bool $value ): void {
        $this->defenderDisableScanArchiveFiles = $value;
    }

    /**
     * Sets the defenderDisableScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     *  @param bool|null $value Value to set for the defenderDisableScanDownloads property.
    */
    public function setDefenderDisableScanDownloads(?bool $value ): void {
        $this->defenderDisableScanDownloads = $value;
    }

    /**
     * Sets the defenderDisableScanNetworkFiles property value. Allows or disallows a scanning of network files.
     *  @param bool|null $value Value to set for the defenderDisableScanNetworkFiles property.
    */
    public function setDefenderDisableScanNetworkFiles(?bool $value ): void {
        $this->defenderDisableScanNetworkFiles = $value;
    }

    /**
     * Sets the defenderDisableScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     *  @param bool|null $value Value to set for the defenderDisableScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderDisableScanRemovableDrivesDuringFullScan(?bool $value ): void {
        $this->defenderDisableScanRemovableDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderDisableScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     *  @param bool|null $value Value to set for the defenderDisableScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderDisableScanScriptsLoadedInInternetExplorer(?bool $value ): void {
        $this->defenderDisableScanScriptsLoadedInInternetExplorer = $value;
    }

    /**
     * Sets the defenderEmailContentExecution property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderEmailContentExecution property.
    */
    public function setDefenderEmailContentExecution(?DefenderProtectionType $value ): void {
        $this->defenderEmailContentExecution = $value;
    }

    /**
     * Sets the defenderEmailContentExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderEmailContentExecutionType property.
    */
    public function setDefenderEmailContentExecutionType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderEmailContentExecutionType = $value;
    }

    /**
     * Sets the defenderEnableLowCpuPriority property value. This policy setting allows you to enable or disable low CPU priority for scheduled scans.
     *  @param bool|null $value Value to set for the defenderEnableLowCpuPriority property.
    */
    public function setDefenderEnableLowCpuPriority(?bool $value ): void {
        $this->defenderEnableLowCpuPriority = $value;
    }

    /**
     * Sets the defenderEnableScanIncomingMail property value. Allows or disallows scanning of email.
     *  @param bool|null $value Value to set for the defenderEnableScanIncomingMail property.
    */
    public function setDefenderEnableScanIncomingMail(?bool $value ): void {
        $this->defenderEnableScanIncomingMail = $value;
    }

    /**
     * Sets the defenderEnableScanMappedNetworkDrivesDuringFullScan property value. Allows or disallows a full scan of mapped network drives.
     *  @param bool|null $value Value to set for the defenderEnableScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderEnableScanMappedNetworkDrivesDuringFullScan(?bool $value ): void {
        $this->defenderEnableScanMappedNetworkDrivesDuringFullScan = $value;
    }

    /**
     * Sets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     *  @param StreamInterface|null $value Value to set for the defenderExploitProtectionXml property.
    */
    public function setDefenderExploitProtectionXml(?StreamInterface $value ): void {
        $this->defenderExploitProtectionXml = $value;
    }

    /**
     * Sets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     *  @param string|null $value Value to set for the defenderExploitProtectionXmlFileName property.
    */
    public function setDefenderExploitProtectionXmlFileName(?string $value ): void {
        $this->defenderExploitProtectionXmlFileName = $value;
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
     * Sets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     *  @param array<string>|null $value Value to set for the defenderGuardedFoldersAllowedAppPaths property.
    */
    public function setDefenderGuardedFoldersAllowedAppPaths(?array $value ): void {
        $this->defenderGuardedFoldersAllowedAppPaths = $value;
    }

    /**
     * Sets the defenderGuardMyFoldersType property value. Possible values of Folder Protection
     *  @param FolderProtectionType|null $value Value to set for the defenderGuardMyFoldersType property.
    */
    public function setDefenderGuardMyFoldersType(?FolderProtectionType $value ): void {
        $this->defenderGuardMyFoldersType = $value;
    }

    /**
     * Sets the defenderNetworkProtectionType property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderNetworkProtectionType property.
    */
    public function setDefenderNetworkProtectionType(?DefenderProtectionType $value ): void {
        $this->defenderNetworkProtectionType = $value;
    }

    /**
     * Sets the defenderOfficeAppsExecutableContentCreationOrLaunch property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsExecutableContentCreationOrLaunch property.
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunch(?DefenderProtectionType $value ): void {
        $this->defenderOfficeAppsExecutableContentCreationOrLaunch = $value;
    }

    /**
     * Sets the defenderOfficeAppsExecutableContentCreationOrLaunchType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsExecutableContentCreationOrLaunchType property.
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunchType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderOfficeAppsExecutableContentCreationOrLaunchType = $value;
    }

    /**
     * Sets the defenderOfficeAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsLaunchChildProcess property.
    */
    public function setDefenderOfficeAppsLaunchChildProcess(?DefenderProtectionType $value ): void {
        $this->defenderOfficeAppsLaunchChildProcess = $value;
    }

    /**
     * Sets the defenderOfficeAppsLaunchChildProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsLaunchChildProcessType property.
    */
    public function setDefenderOfficeAppsLaunchChildProcessType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderOfficeAppsLaunchChildProcessType = $value;
    }

    /**
     * Sets the defenderOfficeAppsOtherProcessInjection property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsOtherProcessInjection property.
    */
    public function setDefenderOfficeAppsOtherProcessInjection(?DefenderProtectionType $value ): void {
        $this->defenderOfficeAppsOtherProcessInjection = $value;
    }

    /**
     * Sets the defenderOfficeAppsOtherProcessInjectionType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsOtherProcessInjectionType property.
    */
    public function setDefenderOfficeAppsOtherProcessInjectionType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderOfficeAppsOtherProcessInjectionType = $value;
    }

    /**
     * Sets the defenderOfficeCommunicationAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderOfficeCommunicationAppsLaunchChildProcess property.
    */
    public function setDefenderOfficeCommunicationAppsLaunchChildProcess(?DefenderProtectionType $value ): void {
        $this->defenderOfficeCommunicationAppsLaunchChildProcess = $value;
    }

    /**
     * Sets the defenderOfficeMacroCodeAllowWin32Imports property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderOfficeMacroCodeAllowWin32Imports property.
    */
    public function setDefenderOfficeMacroCodeAllowWin32Imports(?DefenderProtectionType $value ): void {
        $this->defenderOfficeMacroCodeAllowWin32Imports = $value;
    }

    /**
     * Sets the defenderOfficeMacroCodeAllowWin32ImportsType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeMacroCodeAllowWin32ImportsType property.
    */
    public function setDefenderOfficeMacroCodeAllowWin32ImportsType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderOfficeMacroCodeAllowWin32ImportsType = $value;
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppAction property value. Added in Windows 10, version 1607. Specifies the level of detection for potentially unwanted applications (PUAs). Windows Defender alerts you when potentially unwanted software is being downloaded or attempts to install itself on your computer. Possible values are: userDefined, enable, auditMode, warn, notConfigured.
     *  @param DefenderProtectionType|null $value Value to set for the defenderPotentiallyUnwantedAppAction property.
    */
    public function setDefenderPotentiallyUnwantedAppAction(?DefenderProtectionType $value ): void {
        $this->defenderPotentiallyUnwantedAppAction = $value;
    }

    /**
     * Sets the defenderPreventCredentialStealingType property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderPreventCredentialStealingType property.
    */
    public function setDefenderPreventCredentialStealingType(?DefenderProtectionType $value ): void {
        $this->defenderPreventCredentialStealingType = $value;
    }

    /**
     * Sets the defenderProcessCreation property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderProcessCreation property.
    */
    public function setDefenderProcessCreation(?DefenderProtectionType $value ): void {
        $this->defenderProcessCreation = $value;
    }

    /**
     * Sets the defenderProcessCreationType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderProcessCreationType property.
    */
    public function setDefenderProcessCreationType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderProcessCreationType = $value;
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     *  @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value ): void {
        $this->defenderProcessesToExclude = $value;
    }

    /**
     * Sets the defenderScanDirection property value. Controls which sets of files should be monitored. Possible values are: monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
     *  @param DefenderRealtimeScanDirection|null $value Value to set for the defenderScanDirection property.
    */
    public function setDefenderScanDirection(?DefenderRealtimeScanDirection $value ): void {
        $this->defenderScanDirection = $value;
    }

    /**
     * Sets the defenderScanMaxCpuPercentage property value. Represents the average CPU load factor for the Windows Defender scan (in percent). The default value is 50. Valid values 0 to 100
     *  @param int|null $value Value to set for the defenderScanMaxCpuPercentage property.
    */
    public function setDefenderScanMaxCpuPercentage(?int $value ): void {
        $this->defenderScanMaxCpuPercentage = $value;
    }

    /**
     * Sets the defenderScanType property value. Selects whether to perform a quick scan or full scan. Possible values are: userDefined, disabled, quick, full.
     *  @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value ): void {
        $this->defenderScanType = $value;
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. Selects the time of day that the Windows Defender quick scan should run. For example, a value of 0=12:00AM, a value of 60=1:00AM, a value of 120=2:00, and so on, up to a value of 1380=11:00PM. The default value is 120
     *  @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value ): void {
        $this->defenderScheduledQuickScanTime = $value;
    }

    /**
     * Sets the defenderScheduledScanDay property value. Selects the day that the Windows Defender scan should run. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
     *  @param WeeklySchedule|null $value Value to set for the defenderScheduledScanDay property.
    */
    public function setDefenderScheduledScanDay(?WeeklySchedule $value ): void {
        $this->defenderScheduledScanDay = $value;
    }

    /**
     * Sets the defenderScheduledScanTime property value. Selects the time of day that the Windows Defender scan should run.
     *  @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value ): void {
        $this->defenderScheduledScanTime = $value;
    }

    /**
     * Sets the defenderScriptDownloadedPayloadExecution property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderScriptDownloadedPayloadExecution property.
    */
    public function setDefenderScriptDownloadedPayloadExecution(?DefenderProtectionType $value ): void {
        $this->defenderScriptDownloadedPayloadExecution = $value;
    }

    /**
     * Sets the defenderScriptDownloadedPayloadExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderScriptDownloadedPayloadExecutionType property.
    */
    public function setDefenderScriptDownloadedPayloadExecutionType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderScriptDownloadedPayloadExecutionType = $value;
    }

    /**
     * Sets the defenderScriptObfuscatedMacroCode property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderScriptObfuscatedMacroCode property.
    */
    public function setDefenderScriptObfuscatedMacroCode(?DefenderProtectionType $value ): void {
        $this->defenderScriptObfuscatedMacroCode = $value;
    }

    /**
     * Sets the defenderScriptObfuscatedMacroCodeType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderScriptObfuscatedMacroCodeType property.
    */
    public function setDefenderScriptObfuscatedMacroCodeType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderScriptObfuscatedMacroCodeType = $value;
    }

    /**
     * Sets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     *  @param bool|null $value Value to set for the defenderSecurityCenterBlockExploitProtectionOverride property.
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride(?bool $value ): void {
        $this->defenderSecurityCenterBlockExploitProtectionOverride = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableAccountUI property value. Used to disable the display of the account protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableAccountUI property.
    */
    public function setDefenderSecurityCenterDisableAccountUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableAccountUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableAppBrowserUI property value. Used to disable the display of the app and browser protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableAppBrowserUI property.
    */
    public function setDefenderSecurityCenterDisableAppBrowserUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableAppBrowserUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableClearTpmUI property value. Used to disable the display of the Clear TPM button.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableClearTpmUI property.
    */
    public function setDefenderSecurityCenterDisableClearTpmUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableClearTpmUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableFamilyUI property value. Used to disable the display of the family options area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableFamilyUI property.
    */
    public function setDefenderSecurityCenterDisableFamilyUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableFamilyUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableHardwareUI property value. Used to disable the display of the hardware protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableHardwareUI property.
    */
    public function setDefenderSecurityCenterDisableHardwareUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableHardwareUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableHealthUI property value. Used to disable the display of the device performance and health area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableHealthUI property.
    */
    public function setDefenderSecurityCenterDisableHealthUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableHealthUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableNetworkUI property value. Used to disable the display of the firewall and network protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableNetworkUI property.
    */
    public function setDefenderSecurityCenterDisableNetworkUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableNetworkUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableNotificationAreaUI property value. Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableNotificationAreaUI property.
    */
    public function setDefenderSecurityCenterDisableNotificationAreaUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableNotificationAreaUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableRansomwareUI property value. Used to disable the display of the ransomware protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableRansomwareUI property.
    */
    public function setDefenderSecurityCenterDisableRansomwareUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableRansomwareUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableSecureBootUI property value. Used to disable the display of the secure boot area under Device security.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableSecureBootUI property.
    */
    public function setDefenderSecurityCenterDisableSecureBootUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableSecureBootUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableTroubleshootingUI property value. Used to disable the display of the security process troubleshooting under Device security.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableTroubleshootingUI property.
    */
    public function setDefenderSecurityCenterDisableTroubleshootingUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableTroubleshootingUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableVirusUI property value. Used to disable the display of the virus and threat protection area.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableVirusUI property.
    */
    public function setDefenderSecurityCenterDisableVirusUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableVirusUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property value. Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
     *  @param bool|null $value Value to set for the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property.
    */
    public function setDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI(?bool $value ): void {
        $this->defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI = $value;
    }

    /**
     * Sets the defenderSecurityCenterHelpEmail property value. The email address that is displayed to users.
     *  @param string|null $value Value to set for the defenderSecurityCenterHelpEmail property.
    */
    public function setDefenderSecurityCenterHelpEmail(?string $value ): void {
        $this->defenderSecurityCenterHelpEmail = $value;
    }

    /**
     * Sets the defenderSecurityCenterHelpPhone property value. The phone number or Skype ID that is displayed to users.
     *  @param string|null $value Value to set for the defenderSecurityCenterHelpPhone property.
    */
    public function setDefenderSecurityCenterHelpPhone(?string $value ): void {
        $this->defenderSecurityCenterHelpPhone = $value;
    }

    /**
     * Sets the defenderSecurityCenterHelpURL property value. The help portal URL this is displayed to users.
     *  @param string|null $value Value to set for the defenderSecurityCenterHelpURL property.
    */
    public function setDefenderSecurityCenterHelpURL(?string $value ): void {
        $this->defenderSecurityCenterHelpURL = $value;
    }

    /**
     * Sets the defenderSecurityCenterITContactDisplay property value. Possible values for defenderSecurityCenterITContactDisplay
     *  @param DefenderSecurityCenterITContactDisplayType|null $value Value to set for the defenderSecurityCenterITContactDisplay property.
    */
    public function setDefenderSecurityCenterITContactDisplay(?DefenderSecurityCenterITContactDisplayType $value ): void {
        $this->defenderSecurityCenterITContactDisplay = $value;
    }

    /**
     * Sets the defenderSecurityCenterNotificationsFromApp property value. Possible values for defenderSecurityCenterNotificationsFromApp
     *  @param DefenderSecurityCenterNotificationsFromAppType|null $value Value to set for the defenderSecurityCenterNotificationsFromApp property.
    */
    public function setDefenderSecurityCenterNotificationsFromApp(?DefenderSecurityCenterNotificationsFromAppType $value ): void {
        $this->defenderSecurityCenterNotificationsFromApp = $value;
    }

    /**
     * Sets the defenderSecurityCenterOrganizationDisplayName property value. The company name that is displayed to the users.
     *  @param string|null $value Value to set for the defenderSecurityCenterOrganizationDisplayName property.
    */
    public function setDefenderSecurityCenterOrganizationDisplayName(?string $value ): void {
        $this->defenderSecurityCenterOrganizationDisplayName = $value;
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. Specifies the interval (in hours) that will be used to check for signatures, so instead of using the ScheduleDay and ScheduleTime the check for new signatures will be set according to the interval. Valid values 0 to 24
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
     * Sets the defenderUntrustedExecutable property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderUntrustedExecutable property.
    */
    public function setDefenderUntrustedExecutable(?DefenderProtectionType $value ): void {
        $this->defenderUntrustedExecutable = $value;
    }

    /**
     * Sets the defenderUntrustedExecutableType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderUntrustedExecutableType property.
    */
    public function setDefenderUntrustedExecutableType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderUntrustedExecutableType = $value;
    }

    /**
     * Sets the defenderUntrustedUSBProcess property value. Possible values of Defender PUA Protection
     *  @param DefenderProtectionType|null $value Value to set for the defenderUntrustedUSBProcess property.
    */
    public function setDefenderUntrustedUSBProcess(?DefenderProtectionType $value ): void {
        $this->defenderUntrustedUSBProcess = $value;
    }

    /**
     * Sets the defenderUntrustedUSBProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     *  @param DefenderAttackSurfaceType|null $value Value to set for the defenderUntrustedUSBProcessType property.
    */
    public function setDefenderUntrustedUSBProcessType(?DefenderAttackSurfaceType $value ): void {
        $this->defenderUntrustedUSBProcessType = $value;
    }

    /**
     * Sets the deviceGuardEnableSecureBootWithDMA property value. This property will be deprecated in May 2019 and will be replaced with property DeviceGuardSecureBootWithDMA. Specifies whether Platform Security Level is enabled at next reboot.
     *  @param bool|null $value Value to set for the deviceGuardEnableSecureBootWithDMA property.
    */
    public function setDeviceGuardEnableSecureBootWithDMA(?bool $value ): void {
        $this->deviceGuardEnableSecureBootWithDMA = $value;
    }

    /**
     * Sets the deviceGuardEnableVirtualizationBasedSecurity property value. Turns On Virtualization Based Security(VBS).
     *  @param bool|null $value Value to set for the deviceGuardEnableVirtualizationBasedSecurity property.
    */
    public function setDeviceGuardEnableVirtualizationBasedSecurity(?bool $value ): void {
        $this->deviceGuardEnableVirtualizationBasedSecurity = $value;
    }

    /**
     * Sets the deviceGuardLaunchSystemGuard property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the deviceGuardLaunchSystemGuard property.
    */
    public function setDeviceGuardLaunchSystemGuard(?Enablement $value ): void {
        $this->deviceGuardLaunchSystemGuard = $value;
    }

    /**
     * Sets the deviceGuardLocalSystemAuthorityCredentialGuardSettings property value. Possible values of Credential Guard settings.
     *  @param DeviceGuardLocalSystemAuthorityCredentialGuardType|null $value Value to set for the deviceGuardLocalSystemAuthorityCredentialGuardSettings property.
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardSettings(?DeviceGuardLocalSystemAuthorityCredentialGuardType $value ): void {
        $this->deviceGuardLocalSystemAuthorityCredentialGuardSettings = $value;
    }

    /**
     * Sets the deviceGuardSecureBootWithDMA property value. Possible values of Secure Boot with DMA
     *  @param SecureBootWithDMAType|null $value Value to set for the deviceGuardSecureBootWithDMA property.
    */
    public function setDeviceGuardSecureBootWithDMA(?SecureBootWithDMAType $value ): void {
        $this->deviceGuardSecureBootWithDMA = $value;
    }

    /**
     * Sets the dmaGuardDeviceEnumerationPolicy property value. Possible values of the DmaGuardDeviceEnumerationPolicy.
     *  @param DmaGuardDeviceEnumerationPolicyType|null $value Value to set for the dmaGuardDeviceEnumerationPolicy property.
    */
    public function setDmaGuardDeviceEnumerationPolicy(?DmaGuardDeviceEnumerationPolicyType $value ): void {
        $this->dmaGuardDeviceEnumerationPolicy = $value;
    }

    /**
     * Sets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     *  @param bool|null $value Value to set for the firewallBlockStatefulFTP property.
    */
    public function setFirewallBlockStatefulFTP(?bool $value ): void {
        $this->firewallBlockStatefulFTP = $value;
    }

    /**
     * Sets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     *  @param FirewallCertificateRevocationListCheckMethodType|null $value Value to set for the firewallCertificateRevocationListCheckMethod property.
    */
    public function setFirewallCertificateRevocationListCheckMethod(?FirewallCertificateRevocationListCheckMethodType $value ): void {
        $this->firewallCertificateRevocationListCheckMethod = $value;
    }

    /**
     * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     *  @param int|null $value Value to set for the firewallIdleTimeoutForSecurityAssociationInSeconds property.
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds(?int $value ): void {
        $this->firewallIdleTimeoutForSecurityAssociationInSeconds = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowDHCP property.
    */
    public function setFirewallIPSecExemptionsAllowDHCP(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowDHCP = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowICMP property.
    */
    public function setFirewallIPSecExemptionsAllowICMP(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowICMP = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowNeighborDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowNeighborDiscovery = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsAllowRouterDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery(?bool $value ): void {
        $this->firewallIPSecExemptionsAllowRouterDiscovery = $value;
    }

    /**
     * Sets the firewallIPSecExemptionsNone property value. Configures IPSec exemptions to no exemptions
     *  @param bool|null $value Value to set for the firewallIPSecExemptionsNone property.
    */
    public function setFirewallIPSecExemptionsNone(?bool $value ): void {
        $this->firewallIPSecExemptionsNone = $value;
    }

    /**
     * Sets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     *  @param bool|null $value Value to set for the firewallMergeKeyingModuleSettings property.
    */
    public function setFirewallMergeKeyingModuleSettings(?bool $value ): void {
        $this->firewallMergeKeyingModuleSettings = $value;
    }

    /**
     * Sets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     *  @param FirewallPacketQueueingMethodType|null $value Value to set for the firewallPacketQueueingMethod property.
    */
    public function setFirewallPacketQueueingMethod(?FirewallPacketQueueingMethodType $value ): void {
        $this->firewallPacketQueueingMethod = $value;
    }

    /**
     * Sets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     *  @param FirewallPreSharedKeyEncodingMethodType|null $value Value to set for the firewallPreSharedKeyEncodingMethod property.
    */
    public function setFirewallPreSharedKeyEncodingMethod(?FirewallPreSharedKeyEncodingMethodType $value ): void {
        $this->firewallPreSharedKeyEncodingMethod = $value;
    }

    /**
     * Sets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfileDomain property.
    */
    public function setFirewallProfileDomain(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfileDomain = $value;
    }

    /**
     * Sets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePrivate property.
    */
    public function setFirewallProfilePrivate(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfilePrivate = $value;
    }

    /**
     * Sets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     *  @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePublic property.
    */
    public function setFirewallProfilePublic(?WindowsFirewallNetworkProfile $value ): void {
        $this->firewallProfilePublic = $value;
    }

    /**
     * Sets the firewallRules property value. Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
     *  @param array<WindowsFirewallRule>|null $value Value to set for the firewallRules property.
    */
    public function setFirewallRules(?array $value ): void {
        $this->firewallRules = $value;
    }

    /**
     * Sets the lanManagerAuthenticationLevel property value. Possible values for LanManagerAuthenticationLevel
     *  @param LanManagerAuthenticationLevel|null $value Value to set for the lanManagerAuthenticationLevel property.
    */
    public function setLanManagerAuthenticationLevel(?LanManagerAuthenticationLevel $value ): void {
        $this->lanManagerAuthenticationLevel = $value;
    }

    /**
     * Sets the lanManagerWorkstationDisableInsecureGuestLogons property value. If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
     *  @param bool|null $value Value to set for the lanManagerWorkstationDisableInsecureGuestLogons property.
    */
    public function setLanManagerWorkstationDisableInsecureGuestLogons(?bool $value ): void {
        $this->lanManagerWorkstationDisableInsecureGuestLogons = $value;
    }

    /**
     * Sets the localSecurityOptionsAdministratorAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Administrator'.
     *  @param string|null $value Value to set for the localSecurityOptionsAdministratorAccountName property.
    */
    public function setLocalSecurityOptionsAdministratorAccountName(?string $value ): void {
        $this->localSecurityOptionsAdministratorAccountName = $value;
    }

    /**
     * Sets the localSecurityOptionsAdministratorElevationPromptBehavior property value. Possible values for LocalSecurityOptionsAdministratorElevationPromptBehavior
     *  @param LocalSecurityOptionsAdministratorElevationPromptBehaviorType|null $value Value to set for the localSecurityOptionsAdministratorElevationPromptBehavior property.
    */
    public function setLocalSecurityOptionsAdministratorElevationPromptBehavior(?LocalSecurityOptionsAdministratorElevationPromptBehaviorType $value ): void {
        $this->localSecurityOptionsAdministratorElevationPromptBehavior = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property value. This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property.
    */
    public function setLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares(?bool $value ): void {
        $this->localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowPKU2UAuthenticationRequests property value. Block PKU2U authentication requests to this device to use online identities.
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowPKU2UAuthenticationRequests property.
    */
    public function setLocalSecurityOptionsAllowPKU2UAuthenticationRequests(?bool $value ): void {
        $this->localSecurityOptionsAllowPKU2UAuthenticationRequests = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property value. Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
     *  @param string|null $value Value to set for the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property.
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager(?string $value ): void {
        $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property value. UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property.
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool(?bool $value ): void {
        $this->localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property value. This security setting determines whether a computer can be shut down without having to log on to Windows.
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property.
    */
    public function setLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn(?bool $value ): void {
        $this->localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowUIAccessApplicationElevation property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowUIAccessApplicationElevation property.
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationElevation(?bool $value ): void {
        $this->localSecurityOptionsAllowUIAccessApplicationElevation = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property.
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations(?bool $value ): void {
        $this->localSecurityOptionsAllowUIAccessApplicationsForSecureLocations = $value;
    }

    /**
     * Sets the localSecurityOptionsAllowUndockWithoutHavingToLogon property value. Prevent a portable computer from being undocked without having to log in.
     *  @param bool|null $value Value to set for the localSecurityOptionsAllowUndockWithoutHavingToLogon property.
    */
    public function setLocalSecurityOptionsAllowUndockWithoutHavingToLogon(?bool $value ): void {
        $this->localSecurityOptionsAllowUndockWithoutHavingToLogon = $value;
    }

    /**
     * Sets the localSecurityOptionsBlockMicrosoftAccounts property value. Prevent users from adding new Microsoft accounts to this computer.
     *  @param bool|null $value Value to set for the localSecurityOptionsBlockMicrosoftAccounts property.
    */
    public function setLocalSecurityOptionsBlockMicrosoftAccounts(?bool $value ): void {
        $this->localSecurityOptionsBlockMicrosoftAccounts = $value;
    }

    /**
     * Sets the localSecurityOptionsBlockRemoteLogonWithBlankPassword property value. Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
     *  @param bool|null $value Value to set for the localSecurityOptionsBlockRemoteLogonWithBlankPassword property.
    */
    public function setLocalSecurityOptionsBlockRemoteLogonWithBlankPassword(?bool $value ): void {
        $this->localSecurityOptionsBlockRemoteLogonWithBlankPassword = $value;
    }

    /**
     * Sets the localSecurityOptionsBlockRemoteOpticalDriveAccess property value. Enabling this settings allows only interactively logged on user to access CD-ROM media.
     *  @param bool|null $value Value to set for the localSecurityOptionsBlockRemoteOpticalDriveAccess property.
    */
    public function setLocalSecurityOptionsBlockRemoteOpticalDriveAccess(?bool $value ): void {
        $this->localSecurityOptionsBlockRemoteOpticalDriveAccess = $value;
    }

    /**
     * Sets the localSecurityOptionsBlockUsersInstallingPrinterDrivers property value. Restrict installing printer drivers as part of connecting to a shared printer to admins only.
     *  @param bool|null $value Value to set for the localSecurityOptionsBlockUsersInstallingPrinterDrivers property.
    */
    public function setLocalSecurityOptionsBlockUsersInstallingPrinterDrivers(?bool $value ): void {
        $this->localSecurityOptionsBlockUsersInstallingPrinterDrivers = $value;
    }

    /**
     * Sets the localSecurityOptionsClearVirtualMemoryPageFile property value. This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
     *  @param bool|null $value Value to set for the localSecurityOptionsClearVirtualMemoryPageFile property.
    */
    public function setLocalSecurityOptionsClearVirtualMemoryPageFile(?bool $value ): void {
        $this->localSecurityOptionsClearVirtualMemoryPageFile = $value;
    }

    /**
     * Sets the localSecurityOptionsClientDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB client component.
     *  @param bool|null $value Value to set for the localSecurityOptionsClientDigitallySignCommunicationsAlways property.
    */
    public function setLocalSecurityOptionsClientDigitallySignCommunicationsAlways(?bool $value ): void {
        $this->localSecurityOptionsClientDigitallySignCommunicationsAlways = $value;
    }

    /**
     * Sets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property value. If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
     *  @param bool|null $value Value to set for the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property.
    */
    public function setLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers(?bool $value ): void {
        $this->localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers = $value;
    }

    /**
     * Sets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property value. App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
     *  @param bool|null $value Value to set for the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property.
    */
    public function setLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation(?bool $value ): void {
        $this->localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation = $value;
    }

    /**
     * Sets the localSecurityOptionsDisableAdministratorAccount property value. Determines whether the Local Administrator account is enabled or disabled.
     *  @param bool|null $value Value to set for the localSecurityOptionsDisableAdministratorAccount property.
    */
    public function setLocalSecurityOptionsDisableAdministratorAccount(?bool $value ): void {
        $this->localSecurityOptionsDisableAdministratorAccount = $value;
    }

    /**
     * Sets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property value. This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
     *  @param bool|null $value Value to set for the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property.
    */
    public function setLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees(?bool $value ): void {
        $this->localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees = $value;
    }

    /**
     * Sets the localSecurityOptionsDisableGuestAccount property value. Determines if the Guest account is enabled or disabled.
     *  @param bool|null $value Value to set for the localSecurityOptionsDisableGuestAccount property.
    */
    public function setLocalSecurityOptionsDisableGuestAccount(?bool $value ): void {
        $this->localSecurityOptionsDisableGuestAccount = $value;
    }

    /**
     * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB server component.
     *  @param bool|null $value Value to set for the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property.
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways(?bool $value ): void {
        $this->localSecurityOptionsDisableServerDigitallySignCommunicationsAlways = $value;
    }

    /**
     * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property value. This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
     *  @param bool|null $value Value to set for the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property.
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees(?bool $value ): void {
        $this->localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees = $value;
    }

    /**
     * Sets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property value. This security setting determines what additional permissions will be granted for anonymous connections to the computer.
     *  @param bool|null $value Value to set for the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property.
    */
    public function setLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts(?bool $value ): void {
        $this->localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts = $value;
    }

    /**
     * Sets the localSecurityOptionsDoNotRequireCtrlAltDel property value. Require CTRL+ALT+DEL to be pressed before a user can log on.
     *  @param bool|null $value Value to set for the localSecurityOptionsDoNotRequireCtrlAltDel property.
    */
    public function setLocalSecurityOptionsDoNotRequireCtrlAltDel(?bool $value ): void {
        $this->localSecurityOptionsDoNotRequireCtrlAltDel = $value;
    }

    /**
     * Sets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property value. This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. It’s not stored by default.
     *  @param bool|null $value Value to set for the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property.
    */
    public function setLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange(?bool $value ): void {
        $this->localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange = $value;
    }

    /**
     * Sets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property value. Possible values for LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
     *  @param LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType|null $value Value to set for the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property.
    */
    public function setLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser(?LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType $value ): void {
        $this->localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser = $value;
    }

    /**
     * Sets the localSecurityOptionsGuestAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Guest'.
     *  @param string|null $value Value to set for the localSecurityOptionsGuestAccountName property.
    */
    public function setLocalSecurityOptionsGuestAccountName(?string $value ): void {
        $this->localSecurityOptionsGuestAccountName = $value;
    }

    /**
     * Sets the localSecurityOptionsHideLastSignedInUser property value. Do not display the username of the last person who signed in on this device.
     *  @param bool|null $value Value to set for the localSecurityOptionsHideLastSignedInUser property.
    */
    public function setLocalSecurityOptionsHideLastSignedInUser(?bool $value ): void {
        $this->localSecurityOptionsHideLastSignedInUser = $value;
    }

    /**
     * Sets the localSecurityOptionsHideUsernameAtSignIn property value. Do not display the username of the person signing in to this device after credentials are entered and before the device’s desktop is shown.
     *  @param bool|null $value Value to set for the localSecurityOptionsHideUsernameAtSignIn property.
    */
    public function setLocalSecurityOptionsHideUsernameAtSignIn(?bool $value ): void {
        $this->localSecurityOptionsHideUsernameAtSignIn = $value;
    }

    /**
     * Sets the localSecurityOptionsInformationDisplayedOnLockScreen property value. Possible values for LocalSecurityOptionsInformationDisplayedOnLockScreen
     *  @param LocalSecurityOptionsInformationDisplayedOnLockScreenType|null $value Value to set for the localSecurityOptionsInformationDisplayedOnLockScreen property.
    */
    public function setLocalSecurityOptionsInformationDisplayedOnLockScreen(?LocalSecurityOptionsInformationDisplayedOnLockScreenType $value ): void {
        $this->localSecurityOptionsInformationDisplayedOnLockScreen = $value;
    }

    /**
     * Sets the localSecurityOptionsInformationShownOnLockScreen property value. Possible values for LocalSecurityOptionsInformationShownOnLockScreenType
     *  @param LocalSecurityOptionsInformationShownOnLockScreenType|null $value Value to set for the localSecurityOptionsInformationShownOnLockScreen property.
    */
    public function setLocalSecurityOptionsInformationShownOnLockScreen(?LocalSecurityOptionsInformationShownOnLockScreenType $value ): void {
        $this->localSecurityOptionsInformationShownOnLockScreen = $value;
    }

    /**
     * Sets the localSecurityOptionsLogOnMessageText property value. Set message text for users attempting to log in.
     *  @param string|null $value Value to set for the localSecurityOptionsLogOnMessageText property.
    */
    public function setLocalSecurityOptionsLogOnMessageText(?string $value ): void {
        $this->localSecurityOptionsLogOnMessageText = $value;
    }

    /**
     * Sets the localSecurityOptionsLogOnMessageTitle property value. Set message title for users attempting to log in.
     *  @param string|null $value Value to set for the localSecurityOptionsLogOnMessageTitle property.
    */
    public function setLocalSecurityOptionsLogOnMessageTitle(?string $value ): void {
        $this->localSecurityOptionsLogOnMessageTitle = $value;
    }

    /**
     * Sets the localSecurityOptionsMachineInactivityLimit property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     *  @param int|null $value Value to set for the localSecurityOptionsMachineInactivityLimit property.
    */
    public function setLocalSecurityOptionsMachineInactivityLimit(?int $value ): void {
        $this->localSecurityOptionsMachineInactivityLimit = $value;
    }

    /**
     * Sets the localSecurityOptionsMachineInactivityLimitInMinutes property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     *  @param int|null $value Value to set for the localSecurityOptionsMachineInactivityLimitInMinutes property.
    */
    public function setLocalSecurityOptionsMachineInactivityLimitInMinutes(?int $value ): void {
        $this->localSecurityOptionsMachineInactivityLimitInMinutes = $value;
    }

    /**
     * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     *  @param LocalSecurityOptionsMinimumSessionSecurity|null $value Value to set for the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property.
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients(?LocalSecurityOptionsMinimumSessionSecurity $value ): void {
        $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients = $value;
    }

    /**
     * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     *  @param LocalSecurityOptionsMinimumSessionSecurity|null $value Value to set for the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property.
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers(?LocalSecurityOptionsMinimumSessionSecurity $value ): void {
        $this->localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers = $value;
    }

    /**
     * Sets the localSecurityOptionsOnlyElevateSignedExecutables property value. Enforce PKI certification path validation for a given executable file before it is permitted to run.
     *  @param bool|null $value Value to set for the localSecurityOptionsOnlyElevateSignedExecutables property.
    */
    public function setLocalSecurityOptionsOnlyElevateSignedExecutables(?bool $value ): void {
        $this->localSecurityOptionsOnlyElevateSignedExecutables = $value;
    }

    /**
     * Sets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property value. By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
     *  @param bool|null $value Value to set for the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property.
    */
    public function setLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares(?bool $value ): void {
        $this->localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares = $value;
    }

    /**
     * Sets the localSecurityOptionsSmartCardRemovalBehavior property value. Possible values for LocalSecurityOptionsSmartCardRemovalBehaviorType
     *  @param LocalSecurityOptionsSmartCardRemovalBehaviorType|null $value Value to set for the localSecurityOptionsSmartCardRemovalBehavior property.
    */
    public function setLocalSecurityOptionsSmartCardRemovalBehavior(?LocalSecurityOptionsSmartCardRemovalBehaviorType $value ): void {
        $this->localSecurityOptionsSmartCardRemovalBehavior = $value;
    }

    /**
     * Sets the localSecurityOptionsStandardUserElevationPromptBehavior property value. Possible values for LocalSecurityOptionsStandardUserElevationPromptBehavior
     *  @param LocalSecurityOptionsStandardUserElevationPromptBehaviorType|null $value Value to set for the localSecurityOptionsStandardUserElevationPromptBehavior property.
    */
    public function setLocalSecurityOptionsStandardUserElevationPromptBehavior(?LocalSecurityOptionsStandardUserElevationPromptBehaviorType $value ): void {
        $this->localSecurityOptionsStandardUserElevationPromptBehavior = $value;
    }

    /**
     * Sets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property value. Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
     *  @param bool|null $value Value to set for the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property.
    */
    public function setLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation(?bool $value ): void {
        $this->localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation = $value;
    }

    /**
     * Sets the localSecurityOptionsUseAdminApprovalMode property value. Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
     *  @param bool|null $value Value to set for the localSecurityOptionsUseAdminApprovalMode property.
    */
    public function setLocalSecurityOptionsUseAdminApprovalMode(?bool $value ): void {
        $this->localSecurityOptionsUseAdminApprovalMode = $value;
    }

    /**
     * Sets the localSecurityOptionsUseAdminApprovalModeForAdministrators property value. Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
     *  @param bool|null $value Value to set for the localSecurityOptionsUseAdminApprovalModeForAdministrators property.
    */
    public function setLocalSecurityOptionsUseAdminApprovalModeForAdministrators(?bool $value ): void {
        $this->localSecurityOptionsUseAdminApprovalModeForAdministrators = $value;
    }

    /**
     * Sets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property value. Virtualize file and registry write failures to per user locations
     *  @param bool|null $value Value to set for the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property.
    */
    public function setLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations(?bool $value ): void {
        $this->localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations = $value;
    }

    /**
     * Sets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     *  @param bool|null $value Value to set for the smartScreenBlockOverrideForFiles property.
    */
    public function setSmartScreenBlockOverrideForFiles(?bool $value ): void {
        $this->smartScreenBlockOverrideForFiles = $value;
    }

    /**
     * Sets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     *  @param bool|null $value Value to set for the smartScreenEnableInShell property.
    */
    public function setSmartScreenEnableInShell(?bool $value ): void {
        $this->smartScreenEnableInShell = $value;
    }

    /**
     * Sets the userRightsAccessCredentialManagerAsTrustedCaller property value. This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsAccessCredentialManagerAsTrustedCaller property.
    */
    public function setUserRightsAccessCredentialManagerAsTrustedCaller(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsAccessCredentialManagerAsTrustedCaller = $value;
    }

    /**
     * Sets the userRightsActAsPartOfTheOperatingSystem property value. This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsActAsPartOfTheOperatingSystem property.
    */
    public function setUserRightsActAsPartOfTheOperatingSystem(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsActAsPartOfTheOperatingSystem = $value;
    }

    /**
     * Sets the userRightsAllowAccessFromNetwork property value. This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsAllowAccessFromNetwork property.
    */
    public function setUserRightsAllowAccessFromNetwork(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsAllowAccessFromNetwork = $value;
    }

    /**
     * Sets the userRightsBackupData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsBackupData property.
    */
    public function setUserRightsBackupData(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsBackupData = $value;
    }

    /**
     * Sets the userRightsBlockAccessFromNetwork property value. This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsBlockAccessFromNetwork property.
    */
    public function setUserRightsBlockAccessFromNetwork(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsBlockAccessFromNetwork = $value;
    }

    /**
     * Sets the userRightsChangeSystemTime property value. This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsChangeSystemTime property.
    */
    public function setUserRightsChangeSystemTime(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsChangeSystemTime = $value;
    }

    /**
     * Sets the userRightsCreateGlobalObjects property value. This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateGlobalObjects property.
    */
    public function setUserRightsCreateGlobalObjects(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsCreateGlobalObjects = $value;
    }

    /**
     * Sets the userRightsCreatePageFile property value. This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreatePageFile property.
    */
    public function setUserRightsCreatePageFile(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsCreatePageFile = $value;
    }

    /**
     * Sets the userRightsCreatePermanentSharedObjects property value. This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreatePermanentSharedObjects property.
    */
    public function setUserRightsCreatePermanentSharedObjects(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsCreatePermanentSharedObjects = $value;
    }

    /**
     * Sets the userRightsCreateSymbolicLinks property value. This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateSymbolicLinks property.
    */
    public function setUserRightsCreateSymbolicLinks(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsCreateSymbolicLinks = $value;
    }

    /**
     * Sets the userRightsCreateToken property value. This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateToken property.
    */
    public function setUserRightsCreateToken(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsCreateToken = $value;
    }

    /**
     * Sets the userRightsDebugPrograms property value. This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDebugPrograms property.
    */
    public function setUserRightsDebugPrograms(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsDebugPrograms = $value;
    }

    /**
     * Sets the userRightsDelegation property value. This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDelegation property.
    */
    public function setUserRightsDelegation(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsDelegation = $value;
    }

    /**
     * Sets the userRightsDenyLocalLogOn property value. This user right determines which users cannot log on to the computer. States NotConfigured, Blocked are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDenyLocalLogOn property.
    */
    public function setUserRightsDenyLocalLogOn(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsDenyLocalLogOn = $value;
    }

    /**
     * Sets the userRightsGenerateSecurityAudits property value. This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsGenerateSecurityAudits property.
    */
    public function setUserRightsGenerateSecurityAudits(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsGenerateSecurityAudits = $value;
    }

    /**
     * Sets the userRightsImpersonateClient property value. Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsImpersonateClient property.
    */
    public function setUserRightsImpersonateClient(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsImpersonateClient = $value;
    }

    /**
     * Sets the userRightsIncreaseSchedulingPriority property value. This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsIncreaseSchedulingPriority property.
    */
    public function setUserRightsIncreaseSchedulingPriority(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsIncreaseSchedulingPriority = $value;
    }

    /**
     * Sets the userRightsLoadUnloadDrivers property value. This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLoadUnloadDrivers property.
    */
    public function setUserRightsLoadUnloadDrivers(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsLoadUnloadDrivers = $value;
    }

    /**
     * Sets the userRightsLocalLogOn property value. This user right determines which users can log on to the computer. States NotConfigured, Allowed are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLocalLogOn property.
    */
    public function setUserRightsLocalLogOn(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsLocalLogOn = $value;
    }

    /**
     * Sets the userRightsLockMemory property value. This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLockMemory property.
    */
    public function setUserRightsLockMemory(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsLockMemory = $value;
    }

    /**
     * Sets the userRightsManageAuditingAndSecurityLogs property value. This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsManageAuditingAndSecurityLogs property.
    */
    public function setUserRightsManageAuditingAndSecurityLogs(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsManageAuditingAndSecurityLogs = $value;
    }

    /**
     * Sets the userRightsManageVolumes property value. This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsManageVolumes property.
    */
    public function setUserRightsManageVolumes(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsManageVolumes = $value;
    }

    /**
     * Sets the userRightsModifyFirmwareEnvironment property value. This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsModifyFirmwareEnvironment property.
    */
    public function setUserRightsModifyFirmwareEnvironment(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsModifyFirmwareEnvironment = $value;
    }

    /**
     * Sets the userRightsModifyObjectLabels property value. This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsModifyObjectLabels property.
    */
    public function setUserRightsModifyObjectLabels(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsModifyObjectLabels = $value;
    }

    /**
     * Sets the userRightsProfileSingleProcess property value. This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsProfileSingleProcess property.
    */
    public function setUserRightsProfileSingleProcess(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsProfileSingleProcess = $value;
    }

    /**
     * Sets the userRightsRemoteDesktopServicesLogOn property value. This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRemoteDesktopServicesLogOn property.
    */
    public function setUserRightsRemoteDesktopServicesLogOn(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsRemoteDesktopServicesLogOn = $value;
    }

    /**
     * Sets the userRightsRemoteShutdown property value. This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRemoteShutdown property.
    */
    public function setUserRightsRemoteShutdown(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsRemoteShutdown = $value;
    }

    /**
     * Sets the userRightsRestoreData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRestoreData property.
    */
    public function setUserRightsRestoreData(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsRestoreData = $value;
    }

    /**
     * Sets the userRightsTakeOwnership property value. This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
     *  @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsTakeOwnership property.
    */
    public function setUserRightsTakeOwnership(?DeviceManagementUserRightsSetting $value ): void {
        $this->userRightsTakeOwnership = $value;
    }

    /**
     * Sets the windowsDefenderTamperProtection property value. Defender TamperProtection setting options
     *  @param WindowsDefenderTamperProtectionOptions|null $value Value to set for the windowsDefenderTamperProtection property.
    */
    public function setWindowsDefenderTamperProtection(?WindowsDefenderTamperProtectionOptions $value ): void {
        $this->windowsDefenderTamperProtection = $value;
    }

    /**
     * Sets the xboxServicesAccessoryManagementServiceStartupMode property value. Possible values of xbox service start type
     *  @param ServiceStartType|null $value Value to set for the xboxServicesAccessoryManagementServiceStartupMode property.
    */
    public function setXboxServicesAccessoryManagementServiceStartupMode(?ServiceStartType $value ): void {
        $this->xboxServicesAccessoryManagementServiceStartupMode = $value;
    }

    /**
     * Sets the xboxServicesEnableXboxGameSaveTask property value. This setting determines whether xbox game save is enabled (1) or disabled (0).
     *  @param bool|null $value Value to set for the xboxServicesEnableXboxGameSaveTask property.
    */
    public function setXboxServicesEnableXboxGameSaveTask(?bool $value ): void {
        $this->xboxServicesEnableXboxGameSaveTask = $value;
    }

    /**
     * Sets the xboxServicesLiveAuthManagerServiceStartupMode property value. Possible values of xbox service start type
     *  @param ServiceStartType|null $value Value to set for the xboxServicesLiveAuthManagerServiceStartupMode property.
    */
    public function setXboxServicesLiveAuthManagerServiceStartupMode(?ServiceStartType $value ): void {
        $this->xboxServicesLiveAuthManagerServiceStartupMode = $value;
    }

    /**
     * Sets the xboxServicesLiveGameSaveServiceStartupMode property value. Possible values of xbox service start type
     *  @param ServiceStartType|null $value Value to set for the xboxServicesLiveGameSaveServiceStartupMode property.
    */
    public function setXboxServicesLiveGameSaveServiceStartupMode(?ServiceStartType $value ): void {
        $this->xboxServicesLiveGameSaveServiceStartupMode = $value;
    }

    /**
     * Sets the xboxServicesLiveNetworkingServiceStartupMode property value. Possible values of xbox service start type
     *  @param ServiceStartType|null $value Value to set for the xboxServicesLiveNetworkingServiceStartupMode property.
    */
    public function setXboxServicesLiveNetworkingServiceStartupMode(?ServiceStartType $value ): void {
        $this->xboxServicesLiveNetworkingServiceStartupMode = $value;
    }

}
