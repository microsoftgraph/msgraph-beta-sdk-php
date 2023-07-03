<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class Windows10EndpointProtectionConfiguration extends DeviceConfiguration implements Parsable 
{
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
        $val = $this->getBackingStore()->get('applicationGuardAllowCameraMicrophoneRedirection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowCameraMicrophoneRedirection'");
    }

    /**
     * Gets the applicationGuardAllowFileSaveOnHost property value. Allow users to download files from Edge in the application guard container and save them on the host file system
     * @return bool|null
    */
    public function getApplicationGuardAllowFileSaveOnHost(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowFileSaveOnHost');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowFileSaveOnHost'");
    }

    /**
     * Gets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     * @return bool|null
    */
    public function getApplicationGuardAllowPersistence(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowPersistence');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowPersistence'");
    }

    /**
     * Gets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToLocalPrinters(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowPrintToLocalPrinters');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowPrintToLocalPrinters'");
    }

    /**
     * Gets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowPrintToNetworkPrinters');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowPrintToNetworkPrinters'");
    }

    /**
     * Gets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToPDF(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowPrintToPDF');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowPrintToPDF'");
    }

    /**
     * Gets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     * @return bool|null
    */
    public function getApplicationGuardAllowPrintToXPS(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowPrintToXPS');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowPrintToXPS'");
    }

    /**
     * Gets the applicationGuardAllowVirtualGPU property value. Allow application guard to use virtual GPU
     * @return bool|null
    */
    public function getApplicationGuardAllowVirtualGPU(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardAllowVirtualGPU');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardAllowVirtualGPU'");
    }

    /**
     * Gets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     * @return ApplicationGuardBlockClipboardSharingType|null
    */
    public function getApplicationGuardBlockClipboardSharing(): ?ApplicationGuardBlockClipboardSharingType {
        $val = $this->getBackingStore()->get('applicationGuardBlockClipboardSharing');
        if (is_null($val) || $val instanceof ApplicationGuardBlockClipboardSharingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardBlockClipboardSharing'");
    }

    /**
     * Gets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     * @return ApplicationGuardBlockFileTransferType|null
    */
    public function getApplicationGuardBlockFileTransfer(): ?ApplicationGuardBlockFileTransferType {
        $val = $this->getBackingStore()->get('applicationGuardBlockFileTransfer');
        if (is_null($val) || $val instanceof ApplicationGuardBlockFileTransferType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardBlockFileTransfer'");
    }

    /**
     * Gets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     * @return bool|null
    */
    public function getApplicationGuardBlockNonEnterpriseContent(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardBlockNonEnterpriseContent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardBlockNonEnterpriseContent'");
    }

    /**
     * Gets the applicationGuardCertificateThumbprints property value. Allows certain device level Root Certificates to be shared with the Microsoft Defender Application Guard container.
     * @return array<string>|null
    */
    public function getApplicationGuardCertificateThumbprints(): ?array {
        $val = $this->getBackingStore()->get('applicationGuardCertificateThumbprints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardCertificateThumbprints'");
    }

    /**
     * Gets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     * @return bool|null
    */
    public function getApplicationGuardEnabled(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardEnabled'");
    }

    /**
     * Gets the applicationGuardEnabledOptions property value. Possible values for ApplicationGuardEnabledOptions
     * @return ApplicationGuardEnabledOptions|null
    */
    public function getApplicationGuardEnabledOptions(): ?ApplicationGuardEnabledOptions {
        $val = $this->getBackingStore()->get('applicationGuardEnabledOptions');
        if (is_null($val) || $val instanceof ApplicationGuardEnabledOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardEnabledOptions'");
    }

    /**
     * Gets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     * @return bool|null
    */
    public function getApplicationGuardForceAuditing(): ?bool {
        $val = $this->getBackingStore()->get('applicationGuardForceAuditing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationGuardForceAuditing'");
    }

    /**
     * Gets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     * @return AppLockerApplicationControlType|null
    */
    public function getAppLockerApplicationControl(): ?AppLockerApplicationControlType {
        $val = $this->getBackingStore()->get('appLockerApplicationControl');
        if (is_null($val) || $val instanceof AppLockerApplicationControlType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appLockerApplicationControl'");
    }

    /**
     * Gets the bitLockerAllowStandardUserEncryption property value. Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
     * @return bool|null
    */
    public function getBitLockerAllowStandardUserEncryption(): ?bool {
        $val = $this->getBackingStore()->get('bitLockerAllowStandardUserEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerAllowStandardUserEncryption'");
    }

    /**
     * Gets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     * @return bool|null
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption(): ?bool {
        $val = $this->getBackingStore()->get('bitLockerDisableWarningForOtherDiskEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerDisableWarningForOtherDiskEncryption'");
    }

    /**
     * Gets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     * @return bool|null
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile(): ?bool {
        $val = $this->getBackingStore()->get('bitLockerEnableStorageCardEncryptionOnMobile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerEnableStorageCardEncryptionOnMobile'");
    }

    /**
     * Gets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     * @return bool|null
    */
    public function getBitLockerEncryptDevice(): ?bool {
        $val = $this->getBackingStore()->get('bitLockerEncryptDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerEncryptDevice'");
    }

    /**
     * Gets the bitLockerFixedDrivePolicy property value. BitLocker Fixed Drive Policy.
     * @return BitLockerFixedDrivePolicy|null
    */
    public function getBitLockerFixedDrivePolicy(): ?BitLockerFixedDrivePolicy {
        $val = $this->getBackingStore()->get('bitLockerFixedDrivePolicy');
        if (is_null($val) || $val instanceof BitLockerFixedDrivePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerFixedDrivePolicy'");
    }

    /**
     * Gets the bitLockerRecoveryPasswordRotation property value. BitLocker recovery password rotation type
     * @return BitLockerRecoveryPasswordRotationType|null
    */
    public function getBitLockerRecoveryPasswordRotation(): ?BitLockerRecoveryPasswordRotationType {
        $val = $this->getBackingStore()->get('bitLockerRecoveryPasswordRotation');
        if (is_null($val) || $val instanceof BitLockerRecoveryPasswordRotationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerRecoveryPasswordRotation'");
    }

    /**
     * Gets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     * @return BitLockerRemovableDrivePolicy|null
    */
    public function getBitLockerRemovableDrivePolicy(): ?BitLockerRemovableDrivePolicy {
        $val = $this->getBackingStore()->get('bitLockerRemovableDrivePolicy');
        if (is_null($val) || $val instanceof BitLockerRemovableDrivePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerRemovableDrivePolicy'");
    }

    /**
     * Gets the bitLockerSystemDrivePolicy property value. BitLocker System Drive Policy.
     * @return BitLockerSystemDrivePolicy|null
    */
    public function getBitLockerSystemDrivePolicy(): ?BitLockerSystemDrivePolicy {
        $val = $this->getBackingStore()->get('bitLockerSystemDrivePolicy');
        if (is_null($val) || $val instanceof BitLockerSystemDrivePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bitLockerSystemDrivePolicy'");
    }

    /**
     * Gets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     * @return array<string>|null
    */
    public function getDefenderAdditionalGuardedFolders(): ?array {
        $val = $this->getBackingStore()->get('defenderAdditionalGuardedFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAdditionalGuardedFolders'");
    }

    /**
     * Gets the defenderAdobeReaderLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderAdobeReaderLaunchChildProcess(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderAdobeReaderLaunchChildProcess');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAdobeReaderLaunchChildProcess'");
    }

    /**
     * Gets the defenderAdvancedRansomewareProtectionType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderAdvancedRansomewareProtectionType(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderAdvancedRansomewareProtectionType');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAdvancedRansomewareProtectionType'");
    }

    /**
     * Gets the defenderAllowBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderAllowBehaviorMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowBehaviorMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowBehaviorMonitoring'");
    }

    /**
     * Gets the defenderAllowCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @return bool|null
    */
    public function getDefenderAllowCloudProtection(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowCloudProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowCloudProtection'");
    }

    /**
     * Gets the defenderAllowEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @return bool|null
    */
    public function getDefenderAllowEndUserAccess(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowEndUserAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowEndUserAccess'");
    }

    /**
     * Gets the defenderAllowIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @return bool|null
    */
    public function getDefenderAllowIntrusionPreventionSystem(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowIntrusionPreventionSystem');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowIntrusionPreventionSystem'");
    }

    /**
     * Gets the defenderAllowOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderAllowOnAccessProtection(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowOnAccessProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowOnAccessProtection'");
    }

    /**
     * Gets the defenderAllowRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderAllowRealTimeMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowRealTimeMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowRealTimeMonitoring'");
    }

    /**
     * Gets the defenderAllowScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @return bool|null
    */
    public function getDefenderAllowScanArchiveFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowScanArchiveFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowScanArchiveFiles'");
    }

    /**
     * Gets the defenderAllowScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @return bool|null
    */
    public function getDefenderAllowScanDownloads(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowScanDownloads');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowScanDownloads'");
    }

    /**
     * Gets the defenderAllowScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @return bool|null
    */
    public function getDefenderAllowScanNetworkFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowScanNetworkFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowScanNetworkFiles'");
    }

    /**
     * Gets the defenderAllowScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @return bool|null
    */
    public function getDefenderAllowScanRemovableDrivesDuringFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowScanRemovableDrivesDuringFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowScanRemovableDrivesDuringFullScan'");
    }

    /**
     * Gets the defenderAllowScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @return bool|null
    */
    public function getDefenderAllowScanScriptsLoadedInInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('defenderAllowScanScriptsLoadedInInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAllowScanScriptsLoadedInInternetExplorer'");
    }

    /**
     * Gets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     * @return array<string>|null
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths(): ?array {
        $val = $this->getBackingStore()->get('defenderAttackSurfaceReductionExcludedPaths');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderAttackSurfaceReductionExcludedPaths'");
    }

    /**
     * Gets the defenderBlockEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @return bool|null
    */
    public function getDefenderBlockEndUserAccess(): ?bool {
        $val = $this->getBackingStore()->get('defenderBlockEndUserAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderBlockEndUserAccess'");
    }

    /**
     * Gets the defenderBlockPersistenceThroughWmiType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderBlockPersistenceThroughWmiType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderBlockPersistenceThroughWmiType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderBlockPersistenceThroughWmiType'");
    }

    /**
     * Gets the defenderCheckForSignaturesBeforeRunningScan property value. This policy setting allows you to manage whether a check for new virus and spyware definitions will occur before running a scan.
     * @return bool|null
    */
    public function getDefenderCheckForSignaturesBeforeRunningScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderCheckForSignaturesBeforeRunningScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderCheckForSignaturesBeforeRunningScan'");
    }

    /**
     * Gets the defenderCloudBlockLevel property value. Added in Windows 10, version 1709. This policy setting determines how aggressive Windows Defender Antivirus will be in blocking and scanning suspicious files. Value type is integer. This feature requires the 'Join Microsoft MAPS' setting enabled in order to function. Possible values are: notConfigured, high, highPlus, zeroTolerance.
     * @return DefenderCloudBlockLevelType|null
    */
    public function getDefenderCloudBlockLevel(): ?DefenderCloudBlockLevelType {
        $val = $this->getBackingStore()->get('defenderCloudBlockLevel');
        if (is_null($val) || $val instanceof DefenderCloudBlockLevelType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderCloudBlockLevel'");
    }

    /**
     * Gets the defenderCloudExtendedTimeoutInSeconds property value. Added in Windows 10, version 1709. This feature allows Windows Defender Antivirus to block a suspicious file for up to 60 seconds, and scan it in the cloud to make sure it's safe. Value type is integer, range is 0 - 50. This feature depends on three other MAPS settings the must all be enabled- 'Configure the 'Block at First Sight' feature; 'Join Microsoft MAPS'; 'Send file samples when further analysis is required'. Valid values 0 to 50
     * @return int|null
    */
    public function getDefenderCloudExtendedTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('defenderCloudExtendedTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderCloudExtendedTimeoutInSeconds'");
    }

    /**
     * Gets the defenderDaysBeforeDeletingQuarantinedMalware property value. Time period (in days) that quarantine items will be stored on the system. Valid values 0 to 90
     * @return int|null
    */
    public function getDefenderDaysBeforeDeletingQuarantinedMalware(): ?int {
        $val = $this->getBackingStore()->get('defenderDaysBeforeDeletingQuarantinedMalware');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDaysBeforeDeletingQuarantinedMalware'");
    }

    /**
     * Gets the defenderDetectedMalwareActions property value. Allows an administrator to specify any valid threat severity levels and the corresponding default action ID to take.
     * @return DefenderDetectedMalwareActions|null
    */
    public function getDefenderDetectedMalwareActions(): ?DefenderDetectedMalwareActions {
        $val = $this->getBackingStore()->get('defenderDetectedMalwareActions');
        if (is_null($val) || $val instanceof DefenderDetectedMalwareActions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDetectedMalwareActions'");
    }

    /**
     * Gets the defenderDisableBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderDisableBehaviorMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableBehaviorMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableBehaviorMonitoring'");
    }

    /**
     * Gets the defenderDisableCatchupFullScan property value. This policy setting allows you to configure catch-up scans for scheduled full scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @return bool|null
    */
    public function getDefenderDisableCatchupFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableCatchupFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableCatchupFullScan'");
    }

    /**
     * Gets the defenderDisableCatchupQuickScan property value. This policy setting allows you to configure catch-up scans for scheduled quick scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @return bool|null
    */
    public function getDefenderDisableCatchupQuickScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableCatchupQuickScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableCatchupQuickScan'");
    }

    /**
     * Gets the defenderDisableCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @return bool|null
    */
    public function getDefenderDisableCloudProtection(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableCloudProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableCloudProtection'");
    }

    /**
     * Gets the defenderDisableIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @return bool|null
    */
    public function getDefenderDisableIntrusionPreventionSystem(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableIntrusionPreventionSystem');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableIntrusionPreventionSystem'");
    }

    /**
     * Gets the defenderDisableOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @return bool|null
    */
    public function getDefenderDisableOnAccessProtection(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableOnAccessProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableOnAccessProtection'");
    }

    /**
     * Gets the defenderDisableRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @return bool|null
    */
    public function getDefenderDisableRealTimeMonitoring(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableRealTimeMonitoring');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableRealTimeMonitoring'");
    }

    /**
     * Gets the defenderDisableScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @return bool|null
    */
    public function getDefenderDisableScanArchiveFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableScanArchiveFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableScanArchiveFiles'");
    }

    /**
     * Gets the defenderDisableScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @return bool|null
    */
    public function getDefenderDisableScanDownloads(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableScanDownloads');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableScanDownloads'");
    }

    /**
     * Gets the defenderDisableScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @return bool|null
    */
    public function getDefenderDisableScanNetworkFiles(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableScanNetworkFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableScanNetworkFiles'");
    }

    /**
     * Gets the defenderDisableScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @return bool|null
    */
    public function getDefenderDisableScanRemovableDrivesDuringFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableScanRemovableDrivesDuringFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableScanRemovableDrivesDuringFullScan'");
    }

    /**
     * Gets the defenderDisableScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @return bool|null
    */
    public function getDefenderDisableScanScriptsLoadedInInternetExplorer(): ?bool {
        $val = $this->getBackingStore()->get('defenderDisableScanScriptsLoadedInInternetExplorer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderDisableScanScriptsLoadedInInternetExplorer'");
    }

    /**
     * Gets the defenderEmailContentExecution property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderEmailContentExecution(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderEmailContentExecution');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEmailContentExecution'");
    }

    /**
     * Gets the defenderEmailContentExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderEmailContentExecutionType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderEmailContentExecutionType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEmailContentExecutionType'");
    }

    /**
     * Gets the defenderEnableLowCpuPriority property value. This policy setting allows you to enable or disable low CPU priority for scheduled scans.
     * @return bool|null
    */
    public function getDefenderEnableLowCpuPriority(): ?bool {
        $val = $this->getBackingStore()->get('defenderEnableLowCpuPriority');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEnableLowCpuPriority'");
    }

    /**
     * Gets the defenderEnableScanIncomingMail property value. Allows or disallows scanning of email.
     * @return bool|null
    */
    public function getDefenderEnableScanIncomingMail(): ?bool {
        $val = $this->getBackingStore()->get('defenderEnableScanIncomingMail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEnableScanIncomingMail'");
    }

    /**
     * Gets the defenderEnableScanMappedNetworkDrivesDuringFullScan property value. Allows or disallows a full scan of mapped network drives.
     * @return bool|null
    */
    public function getDefenderEnableScanMappedNetworkDrivesDuringFullScan(): ?bool {
        $val = $this->getBackingStore()->get('defenderEnableScanMappedNetworkDrivesDuringFullScan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderEnableScanMappedNetworkDrivesDuringFullScan'");
    }

    /**
     * Gets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     * @return StreamInterface|null
    */
    public function getDefenderExploitProtectionXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('defenderExploitProtectionXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderExploitProtectionXml'");
    }

    /**
     * Gets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     * @return string|null
    */
    public function getDefenderExploitProtectionXmlFileName(): ?string {
        $val = $this->getBackingStore()->get('defenderExploitProtectionXmlFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderExploitProtectionXmlFileName'");
    }

    /**
     * Gets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFileExtensionsToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderFileExtensionsToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderFileExtensionsToExclude'");
    }

    /**
     * Gets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderFilesAndFoldersToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderFilesAndFoldersToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderFilesAndFoldersToExclude'");
    }

    /**
     * Gets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     * @return array<string>|null
    */
    public function getDefenderGuardedFoldersAllowedAppPaths(): ?array {
        $val = $this->getBackingStore()->get('defenderGuardedFoldersAllowedAppPaths');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderGuardedFoldersAllowedAppPaths'");
    }

    /**
     * Gets the defenderGuardMyFoldersType property value. Possible values of Folder Protection
     * @return FolderProtectionType|null
    */
    public function getDefenderGuardMyFoldersType(): ?FolderProtectionType {
        $val = $this->getBackingStore()->get('defenderGuardMyFoldersType');
        if (is_null($val) || $val instanceof FolderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderGuardMyFoldersType'");
    }

    /**
     * Gets the defenderNetworkProtectionType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderNetworkProtectionType(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderNetworkProtectionType');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderNetworkProtectionType'");
    }

    /**
     * Gets the defenderOfficeAppsExecutableContentCreationOrLaunch property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunch(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsExecutableContentCreationOrLaunch');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsExecutableContentCreationOrLaunch'");
    }

    /**
     * Gets the defenderOfficeAppsExecutableContentCreationOrLaunchType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsExecutableContentCreationOrLaunchType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsExecutableContentCreationOrLaunchType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsExecutableContentCreationOrLaunchType'");
    }

    /**
     * Gets the defenderOfficeAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsLaunchChildProcess(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsLaunchChildProcess');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsLaunchChildProcess'");
    }

    /**
     * Gets the defenderOfficeAppsLaunchChildProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsLaunchChildProcessType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsLaunchChildProcessType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsLaunchChildProcessType'");
    }

    /**
     * Gets the defenderOfficeAppsOtherProcessInjection property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeAppsOtherProcessInjection(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsOtherProcessInjection');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsOtherProcessInjection'");
    }

    /**
     * Gets the defenderOfficeAppsOtherProcessInjectionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeAppsOtherProcessInjectionType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderOfficeAppsOtherProcessInjectionType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeAppsOtherProcessInjectionType'");
    }

    /**
     * Gets the defenderOfficeCommunicationAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeCommunicationAppsLaunchChildProcess(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderOfficeCommunicationAppsLaunchChildProcess');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeCommunicationAppsLaunchChildProcess'");
    }

    /**
     * Gets the defenderOfficeMacroCodeAllowWin32Imports property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderOfficeMacroCodeAllowWin32Imports(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderOfficeMacroCodeAllowWin32Imports');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeMacroCodeAllowWin32Imports'");
    }

    /**
     * Gets the defenderOfficeMacroCodeAllowWin32ImportsType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderOfficeMacroCodeAllowWin32ImportsType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderOfficeMacroCodeAllowWin32ImportsType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderOfficeMacroCodeAllowWin32ImportsType'");
    }

    /**
     * Gets the defenderPotentiallyUnwantedAppAction property value. Added in Windows 10, version 1607. Specifies the level of detection for potentially unwanted applications (PUAs). Windows Defender alerts you when potentially unwanted software is being downloaded or attempts to install itself on your computer. Possible values are: userDefined, enable, auditMode, warn, notConfigured.
     * @return DefenderProtectionType|null
    */
    public function getDefenderPotentiallyUnwantedAppAction(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderPotentiallyUnwantedAppAction');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderPotentiallyUnwantedAppAction'");
    }

    /**
     * Gets the defenderPreventCredentialStealingType property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderPreventCredentialStealingType(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderPreventCredentialStealingType');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderPreventCredentialStealingType'");
    }

    /**
     * Gets the defenderProcessCreation property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderProcessCreation(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderProcessCreation');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderProcessCreation'");
    }

    /**
     * Gets the defenderProcessCreationType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderProcessCreationType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderProcessCreationType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderProcessCreationType'");
    }

    /**
     * Gets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @return array<string>|null
    */
    public function getDefenderProcessesToExclude(): ?array {
        $val = $this->getBackingStore()->get('defenderProcessesToExclude');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderProcessesToExclude'");
    }

    /**
     * Gets the defenderScanDirection property value. Controls which sets of files should be monitored. Possible values are: monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
     * @return DefenderRealtimeScanDirection|null
    */
    public function getDefenderScanDirection(): ?DefenderRealtimeScanDirection {
        $val = $this->getBackingStore()->get('defenderScanDirection');
        if (is_null($val) || $val instanceof DefenderRealtimeScanDirection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanDirection'");
    }

    /**
     * Gets the defenderScanMaxCpuPercentage property value. Represents the average CPU load factor for the Windows Defender scan (in percent). The default value is 50. Valid values 0 to 100
     * @return int|null
    */
    public function getDefenderScanMaxCpuPercentage(): ?int {
        $val = $this->getBackingStore()->get('defenderScanMaxCpuPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanMaxCpuPercentage'");
    }

    /**
     * Gets the defenderScanType property value. Selects whether to perform a quick scan or full scan. Possible values are: userDefined, disabled, quick, full.
     * @return DefenderScanType|null
    */
    public function getDefenderScanType(): ?DefenderScanType {
        $val = $this->getBackingStore()->get('defenderScanType');
        if (is_null($val) || $val instanceof DefenderScanType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScanType'");
    }

    /**
     * Gets the defenderScheduledQuickScanTime property value. Selects the time of day that the Windows Defender quick scan should run. For example, a value of 0=12:00AM, a value of 60=1:00AM, a value of 120=2:00, and so on, up to a value of 1380=11:00PM. The default value is 120
     * @return Time|null
    */
    public function getDefenderScheduledQuickScanTime(): ?Time {
        $val = $this->getBackingStore()->get('defenderScheduledQuickScanTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScheduledQuickScanTime'");
    }

    /**
     * Gets the defenderScheduledScanDay property value. Selects the day that the Windows Defender scan should run. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
     * @return WeeklySchedule|null
    */
    public function getDefenderScheduledScanDay(): ?WeeklySchedule {
        $val = $this->getBackingStore()->get('defenderScheduledScanDay');
        if (is_null($val) || $val instanceof WeeklySchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScheduledScanDay'");
    }

    /**
     * Gets the defenderScheduledScanTime property value. Selects the time of day that the Windows Defender scan should run.
     * @return Time|null
    */
    public function getDefenderScheduledScanTime(): ?Time {
        $val = $this->getBackingStore()->get('defenderScheduledScanTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScheduledScanTime'");
    }

    /**
     * Gets the defenderScriptDownloadedPayloadExecution property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderScriptDownloadedPayloadExecution(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderScriptDownloadedPayloadExecution');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScriptDownloadedPayloadExecution'");
    }

    /**
     * Gets the defenderScriptDownloadedPayloadExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderScriptDownloadedPayloadExecutionType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderScriptDownloadedPayloadExecutionType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScriptDownloadedPayloadExecutionType'");
    }

    /**
     * Gets the defenderScriptObfuscatedMacroCode property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderScriptObfuscatedMacroCode(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderScriptObfuscatedMacroCode');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScriptObfuscatedMacroCode'");
    }

    /**
     * Gets the defenderScriptObfuscatedMacroCodeType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderScriptObfuscatedMacroCodeType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderScriptObfuscatedMacroCodeType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderScriptObfuscatedMacroCodeType'");
    }

    /**
     * Gets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     * @return bool|null
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterBlockExploitProtectionOverride');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterBlockExploitProtectionOverride'");
    }

    /**
     * Gets the defenderSecurityCenterDisableAccountUI property value. Used to disable the display of the account protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableAccountUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableAccountUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableAccountUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableAppBrowserUI property value. Used to disable the display of the app and browser protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableAppBrowserUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableAppBrowserUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableAppBrowserUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableClearTpmUI property value. Used to disable the display of the Clear TPM button.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableClearTpmUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableClearTpmUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableClearTpmUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableFamilyUI property value. Used to disable the display of the family options area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableFamilyUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableFamilyUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableFamilyUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableHardwareUI property value. Used to disable the display of the hardware protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableHardwareUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableHardwareUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableHardwareUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableHealthUI property value. Used to disable the display of the device performance and health area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableHealthUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableHealthUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableHealthUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableNetworkUI property value. Used to disable the display of the firewall and network protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableNetworkUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableNetworkUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableNetworkUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableNotificationAreaUI property value. Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableNotificationAreaUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableNotificationAreaUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableNotificationAreaUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableRansomwareUI property value. Used to disable the display of the ransomware protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableRansomwareUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableRansomwareUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableRansomwareUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableSecureBootUI property value. Used to disable the display of the secure boot area under Device security.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableSecureBootUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableSecureBootUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableSecureBootUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableTroubleshootingUI property value. Used to disable the display of the security process troubleshooting under Device security.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableTroubleshootingUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableTroubleshootingUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableTroubleshootingUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableVirusUI property value. Used to disable the display of the virus and threat protection area.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableVirusUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableVirusUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableVirusUI'");
    }

    /**
     * Gets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property value. Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
     * @return bool|null
    */
    public function getDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI(): ?bool {
        $val = $this->getBackingStore()->get('defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI'");
    }

    /**
     * Gets the defenderSecurityCenterHelpEmail property value. The email address that is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpEmail(): ?string {
        $val = $this->getBackingStore()->get('defenderSecurityCenterHelpEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterHelpEmail'");
    }

    /**
     * Gets the defenderSecurityCenterHelpPhone property value. The phone number or Skype ID that is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpPhone(): ?string {
        $val = $this->getBackingStore()->get('defenderSecurityCenterHelpPhone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterHelpPhone'");
    }

    /**
     * Gets the defenderSecurityCenterHelpURL property value. The help portal URL this is displayed to users.
     * @return string|null
    */
    public function getDefenderSecurityCenterHelpURL(): ?string {
        $val = $this->getBackingStore()->get('defenderSecurityCenterHelpURL');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterHelpURL'");
    }

    /**
     * Gets the defenderSecurityCenterITContactDisplay property value. Possible values for defenderSecurityCenterITContactDisplay
     * @return DefenderSecurityCenterITContactDisplayType|null
    */
    public function getDefenderSecurityCenterITContactDisplay(): ?DefenderSecurityCenterITContactDisplayType {
        $val = $this->getBackingStore()->get('defenderSecurityCenterITContactDisplay');
        if (is_null($val) || $val instanceof DefenderSecurityCenterITContactDisplayType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterITContactDisplay'");
    }

    /**
     * Gets the defenderSecurityCenterNotificationsFromApp property value. Possible values for defenderSecurityCenterNotificationsFromApp
     * @return DefenderSecurityCenterNotificationsFromAppType|null
    */
    public function getDefenderSecurityCenterNotificationsFromApp(): ?DefenderSecurityCenterNotificationsFromAppType {
        $val = $this->getBackingStore()->get('defenderSecurityCenterNotificationsFromApp');
        if (is_null($val) || $val instanceof DefenderSecurityCenterNotificationsFromAppType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterNotificationsFromApp'");
    }

    /**
     * Gets the defenderSecurityCenterOrganizationDisplayName property value. The company name that is displayed to the users.
     * @return string|null
    */
    public function getDefenderSecurityCenterOrganizationDisplayName(): ?string {
        $val = $this->getBackingStore()->get('defenderSecurityCenterOrganizationDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSecurityCenterOrganizationDisplayName'");
    }

    /**
     * Gets the defenderSignatureUpdateIntervalInHours property value. Specifies the interval (in hours) that will be used to check for signatures, so instead of using the ScheduleDay and ScheduleTime the check for new signatures will be set according to the interval. Valid values 0 to 24
     * @return int|null
    */
    public function getDefenderSignatureUpdateIntervalInHours(): ?int {
        $val = $this->getBackingStore()->get('defenderSignatureUpdateIntervalInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSignatureUpdateIntervalInHours'");
    }

    /**
     * Gets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     * @return DefenderSubmitSamplesConsentType|null
    */
    public function getDefenderSubmitSamplesConsentType(): ?DefenderSubmitSamplesConsentType {
        $val = $this->getBackingStore()->get('defenderSubmitSamplesConsentType');
        if (is_null($val) || $val instanceof DefenderSubmitSamplesConsentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderSubmitSamplesConsentType'");
    }

    /**
     * Gets the defenderUntrustedExecutable property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderUntrustedExecutable(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderUntrustedExecutable');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderUntrustedExecutable'");
    }

    /**
     * Gets the defenderUntrustedExecutableType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderUntrustedExecutableType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderUntrustedExecutableType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderUntrustedExecutableType'");
    }

    /**
     * Gets the defenderUntrustedUSBProcess property value. Possible values of Defender PUA Protection
     * @return DefenderProtectionType|null
    */
    public function getDefenderUntrustedUSBProcess(): ?DefenderProtectionType {
        $val = $this->getBackingStore()->get('defenderUntrustedUSBProcess');
        if (is_null($val) || $val instanceof DefenderProtectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderUntrustedUSBProcess'");
    }

    /**
     * Gets the defenderUntrustedUSBProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @return DefenderAttackSurfaceType|null
    */
    public function getDefenderUntrustedUSBProcessType(): ?DefenderAttackSurfaceType {
        $val = $this->getBackingStore()->get('defenderUntrustedUSBProcessType');
        if (is_null($val) || $val instanceof DefenderAttackSurfaceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defenderUntrustedUSBProcessType'");
    }

    /**
     * Gets the deviceGuardEnableSecureBootWithDMA property value. This property will be deprecated in May 2019 and will be replaced with property DeviceGuardSecureBootWithDMA. Specifies whether Platform Security Level is enabled at next reboot.
     * @return bool|null
    */
    public function getDeviceGuardEnableSecureBootWithDMA(): ?bool {
        $val = $this->getBackingStore()->get('deviceGuardEnableSecureBootWithDMA');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardEnableSecureBootWithDMA'");
    }

    /**
     * Gets the deviceGuardEnableVirtualizationBasedSecurity property value. Turns On Virtualization Based Security(VBS).
     * @return bool|null
    */
    public function getDeviceGuardEnableVirtualizationBasedSecurity(): ?bool {
        $val = $this->getBackingStore()->get('deviceGuardEnableVirtualizationBasedSecurity');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardEnableVirtualizationBasedSecurity'");
    }

    /**
     * Gets the deviceGuardLaunchSystemGuard property value. Possible values of a property
     * @return Enablement|null
    */
    public function getDeviceGuardLaunchSystemGuard(): ?Enablement {
        $val = $this->getBackingStore()->get('deviceGuardLaunchSystemGuard');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardLaunchSystemGuard'");
    }

    /**
     * Gets the deviceGuardLocalSystemAuthorityCredentialGuardSettings property value. Possible values of Credential Guard settings.
     * @return DeviceGuardLocalSystemAuthorityCredentialGuardType|null
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardSettings(): ?DeviceGuardLocalSystemAuthorityCredentialGuardType {
        $val = $this->getBackingStore()->get('deviceGuardLocalSystemAuthorityCredentialGuardSettings');
        if (is_null($val) || $val instanceof DeviceGuardLocalSystemAuthorityCredentialGuardType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardLocalSystemAuthorityCredentialGuardSettings'");
    }

    /**
     * Gets the deviceGuardSecureBootWithDMA property value. Possible values of Secure Boot with DMA
     * @return SecureBootWithDMAType|null
    */
    public function getDeviceGuardSecureBootWithDMA(): ?SecureBootWithDMAType {
        $val = $this->getBackingStore()->get('deviceGuardSecureBootWithDMA');
        if (is_null($val) || $val instanceof SecureBootWithDMAType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardSecureBootWithDMA'");
    }

    /**
     * Gets the dmaGuardDeviceEnumerationPolicy property value. Possible values of the DmaGuardDeviceEnumerationPolicy.
     * @return DmaGuardDeviceEnumerationPolicyType|null
    */
    public function getDmaGuardDeviceEnumerationPolicy(): ?DmaGuardDeviceEnumerationPolicyType {
        $val = $this->getBackingStore()->get('dmaGuardDeviceEnumerationPolicy');
        if (is_null($val) || $val instanceof DmaGuardDeviceEnumerationPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dmaGuardDeviceEnumerationPolicy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'applicationGuardCertificateThumbprints' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApplicationGuardCertificateThumbprints($val);
            },
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
            'defenderAdditionalGuardedFolders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderAdditionalGuardedFolders($val);
            },
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
            'defenderAttackSurfaceReductionExcludedPaths' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderAttackSurfaceReductionExcludedPaths($val);
            },
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
            'defenderFileExtensionsToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderFileExtensionsToExclude($val);
            },
            'defenderFilesAndFoldersToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderFilesAndFoldersToExclude($val);
            },
            'defenderGuardedFoldersAllowedAppPaths' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderGuardedFoldersAllowedAppPaths($val);
            },
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
            'defenderProcessesToExclude' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefenderProcessesToExclude($val);
            },
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
        $val = $this->getBackingStore()->get('firewallBlockStatefulFTP');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallBlockStatefulFTP'");
    }

    /**
     * Gets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     * @return FirewallCertificateRevocationListCheckMethodType|null
    */
    public function getFirewallCertificateRevocationListCheckMethod(): ?FirewallCertificateRevocationListCheckMethodType {
        $val = $this->getBackingStore()->get('firewallCertificateRevocationListCheckMethod');
        if (is_null($val) || $val instanceof FirewallCertificateRevocationListCheckMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallCertificateRevocationListCheckMethod'");
    }

    /**
     * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     * @return int|null
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds(): ?int {
        $val = $this->getBackingStore()->get('firewallIdleTimeoutForSecurityAssociationInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIdleTimeoutForSecurityAssociationInSeconds'");
    }

    /**
     * Gets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowDHCP(): ?bool {
        $val = $this->getBackingStore()->get('firewallIPSecExemptionsAllowDHCP');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIPSecExemptionsAllowDHCP'");
    }

    /**
     * Gets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowICMP(): ?bool {
        $val = $this->getBackingStore()->get('firewallIPSecExemptionsAllowICMP');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIPSecExemptionsAllowICMP'");
    }

    /**
     * Gets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery(): ?bool {
        $val = $this->getBackingStore()->get('firewallIPSecExemptionsAllowNeighborDiscovery');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIPSecExemptionsAllowNeighborDiscovery'");
    }

    /**
     * Gets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery(): ?bool {
        $val = $this->getBackingStore()->get('firewallIPSecExemptionsAllowRouterDiscovery');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIPSecExemptionsAllowRouterDiscovery'");
    }

    /**
     * Gets the firewallIPSecExemptionsNone property value. Configures IPSec exemptions to no exemptions
     * @return bool|null
    */
    public function getFirewallIPSecExemptionsNone(): ?bool {
        $val = $this->getBackingStore()->get('firewallIPSecExemptionsNone');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallIPSecExemptionsNone'");
    }

    /**
     * Gets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     * @return bool|null
    */
    public function getFirewallMergeKeyingModuleSettings(): ?bool {
        $val = $this->getBackingStore()->get('firewallMergeKeyingModuleSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallMergeKeyingModuleSettings'");
    }

    /**
     * Gets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     * @return FirewallPacketQueueingMethodType|null
    */
    public function getFirewallPacketQueueingMethod(): ?FirewallPacketQueueingMethodType {
        $val = $this->getBackingStore()->get('firewallPacketQueueingMethod');
        if (is_null($val) || $val instanceof FirewallPacketQueueingMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallPacketQueueingMethod'");
    }

    /**
     * Gets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     * @return FirewallPreSharedKeyEncodingMethodType|null
    */
    public function getFirewallPreSharedKeyEncodingMethod(): ?FirewallPreSharedKeyEncodingMethodType {
        $val = $this->getBackingStore()->get('firewallPreSharedKeyEncodingMethod');
        if (is_null($val) || $val instanceof FirewallPreSharedKeyEncodingMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallPreSharedKeyEncodingMethod'");
    }

    /**
     * Gets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfileDomain(): ?WindowsFirewallNetworkProfile {
        $val = $this->getBackingStore()->get('firewallProfileDomain');
        if (is_null($val) || $val instanceof WindowsFirewallNetworkProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallProfileDomain'");
    }

    /**
     * Gets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePrivate(): ?WindowsFirewallNetworkProfile {
        $val = $this->getBackingStore()->get('firewallProfilePrivate');
        if (is_null($val) || $val instanceof WindowsFirewallNetworkProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallProfilePrivate'");
    }

    /**
     * Gets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     * @return WindowsFirewallNetworkProfile|null
    */
    public function getFirewallProfilePublic(): ?WindowsFirewallNetworkProfile {
        $val = $this->getBackingStore()->get('firewallProfilePublic');
        if (is_null($val) || $val instanceof WindowsFirewallNetworkProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallProfilePublic'");
    }

    /**
     * Gets the firewallRules property value. Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
     * @return array<WindowsFirewallRule>|null
    */
    public function getFirewallRules(): ?array {
        $val = $this->getBackingStore()->get('firewallRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsFirewallRule::class);
            /** @var array<WindowsFirewallRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallRules'");
    }

    /**
     * Gets the lanManagerAuthenticationLevel property value. Possible values for LanManagerAuthenticationLevel
     * @return LanManagerAuthenticationLevel|null
    */
    public function getLanManagerAuthenticationLevel(): ?LanManagerAuthenticationLevel {
        $val = $this->getBackingStore()->get('lanManagerAuthenticationLevel');
        if (is_null($val) || $val instanceof LanManagerAuthenticationLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lanManagerAuthenticationLevel'");
    }

    /**
     * Gets the lanManagerWorkstationDisableInsecureGuestLogons property value. If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
     * @return bool|null
    */
    public function getLanManagerWorkstationDisableInsecureGuestLogons(): ?bool {
        $val = $this->getBackingStore()->get('lanManagerWorkstationDisableInsecureGuestLogons');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lanManagerWorkstationDisableInsecureGuestLogons'");
    }

    /**
     * Gets the localSecurityOptionsAdministratorAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Administrator'.
     * @return string|null
    */
    public function getLocalSecurityOptionsAdministratorAccountName(): ?string {
        $val = $this->getBackingStore()->get('localSecurityOptionsAdministratorAccountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAdministratorAccountName'");
    }

    /**
     * Gets the localSecurityOptionsAdministratorElevationPromptBehavior property value. Possible values for LocalSecurityOptionsAdministratorElevationPromptBehavior
     * @return LocalSecurityOptionsAdministratorElevationPromptBehaviorType|null
    */
    public function getLocalSecurityOptionsAdministratorElevationPromptBehavior(): ?LocalSecurityOptionsAdministratorElevationPromptBehaviorType {
        $val = $this->getBackingStore()->get('localSecurityOptionsAdministratorElevationPromptBehavior');
        if (is_null($val) || $val instanceof LocalSecurityOptionsAdministratorElevationPromptBehaviorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAdministratorElevationPromptBehavior'");
    }

    /**
     * Gets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property value. This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares'");
    }

    /**
     * Gets the localSecurityOptionsAllowPKU2UAuthenticationRequests property value. Block PKU2U authentication requests to this device to use online identities.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowPKU2UAuthenticationRequests(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowPKU2UAuthenticationRequests');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowPKU2UAuthenticationRequests'");
    }

    /**
     * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property value. Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
     * @return string|null
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager(): ?string {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager'");
    }

    /**
     * Gets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property value. UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool'");
    }

    /**
     * Gets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property value. This security setting determines whether a computer can be shut down without having to log on to Windows.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn'");
    }

    /**
     * Gets the localSecurityOptionsAllowUIAccessApplicationElevation property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationElevation(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowUIAccessApplicationElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowUIAccessApplicationElevation'");
    }

    /**
     * Gets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowUIAccessApplicationsForSecureLocations');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowUIAccessApplicationsForSecureLocations'");
    }

    /**
     * Gets the localSecurityOptionsAllowUndockWithoutHavingToLogon property value. Prevent a portable computer from being undocked without having to log in.
     * @return bool|null
    */
    public function getLocalSecurityOptionsAllowUndockWithoutHavingToLogon(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsAllowUndockWithoutHavingToLogon');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsAllowUndockWithoutHavingToLogon'");
    }

    /**
     * Gets the localSecurityOptionsBlockMicrosoftAccounts property value. Prevent users from adding new Microsoft accounts to this computer.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockMicrosoftAccounts(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsBlockMicrosoftAccounts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsBlockMicrosoftAccounts'");
    }

    /**
     * Gets the localSecurityOptionsBlockRemoteLogonWithBlankPassword property value. Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockRemoteLogonWithBlankPassword(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsBlockRemoteLogonWithBlankPassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsBlockRemoteLogonWithBlankPassword'");
    }

    /**
     * Gets the localSecurityOptionsBlockRemoteOpticalDriveAccess property value. Enabling this settings allows only interactively logged on user to access CD-ROM media.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockRemoteOpticalDriveAccess(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsBlockRemoteOpticalDriveAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsBlockRemoteOpticalDriveAccess'");
    }

    /**
     * Gets the localSecurityOptionsBlockUsersInstallingPrinterDrivers property value. Restrict installing printer drivers as part of connecting to a shared printer to admins only.
     * @return bool|null
    */
    public function getLocalSecurityOptionsBlockUsersInstallingPrinterDrivers(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsBlockUsersInstallingPrinterDrivers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsBlockUsersInstallingPrinterDrivers'");
    }

    /**
     * Gets the localSecurityOptionsClearVirtualMemoryPageFile property value. This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClearVirtualMemoryPageFile(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsClearVirtualMemoryPageFile');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsClearVirtualMemoryPageFile'");
    }

    /**
     * Gets the localSecurityOptionsClientDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB client component.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClientDigitallySignCommunicationsAlways(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsClientDigitallySignCommunicationsAlways');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsClientDigitallySignCommunicationsAlways'");
    }

    /**
     * Gets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property value. If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
     * @return bool|null
    */
    public function getLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers'");
    }

    /**
     * Gets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property value. App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation'");
    }

    /**
     * Gets the localSecurityOptionsDisableAdministratorAccount property value. Determines whether the Local Administrator account is enabled or disabled.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableAdministratorAccount(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDisableAdministratorAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDisableAdministratorAccount'");
    }

    /**
     * Gets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property value. This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees'");
    }

    /**
     * Gets the localSecurityOptionsDisableGuestAccount property value. Determines if the Guest account is enabled or disabled.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableGuestAccount(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDisableGuestAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDisableGuestAccount'");
    }

    /**
     * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB server component.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDisableServerDigitallySignCommunicationsAlways');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDisableServerDigitallySignCommunicationsAlways'");
    }

    /**
     * Gets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property value. This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees'");
    }

    /**
     * Gets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property value. This security setting determines what additional permissions will be granted for anonymous connections to the computer.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts'");
    }

    /**
     * Gets the localSecurityOptionsDoNotRequireCtrlAltDel property value. Require CTRL+ALT+DEL to be pressed before a user can log on.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotRequireCtrlAltDel(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDoNotRequireCtrlAltDel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDoNotRequireCtrlAltDel'");
    }

    /**
     * Gets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property value. This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. It’s not stored by default.
     * @return bool|null
    */
    public function getLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange'");
    }

    /**
     * Gets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property value. Possible values for LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
     * @return LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType|null
    */
    public function getLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser(): ?LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType {
        $val = $this->getBackingStore()->get('localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser');
        if (is_null($val) || $val instanceof LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser'");
    }

    /**
     * Gets the localSecurityOptionsGuestAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Guest'.
     * @return string|null
    */
    public function getLocalSecurityOptionsGuestAccountName(): ?string {
        $val = $this->getBackingStore()->get('localSecurityOptionsGuestAccountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsGuestAccountName'");
    }

    /**
     * Gets the localSecurityOptionsHideLastSignedInUser property value. Do not display the username of the last person who signed in on this device.
     * @return bool|null
    */
    public function getLocalSecurityOptionsHideLastSignedInUser(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsHideLastSignedInUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsHideLastSignedInUser'");
    }

    /**
     * Gets the localSecurityOptionsHideUsernameAtSignIn property value. Do not display the username of the person signing in to this device after credentials are entered and before the device’s desktop is shown.
     * @return bool|null
    */
    public function getLocalSecurityOptionsHideUsernameAtSignIn(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsHideUsernameAtSignIn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsHideUsernameAtSignIn'");
    }

    /**
     * Gets the localSecurityOptionsInformationDisplayedOnLockScreen property value. Possible values for LocalSecurityOptionsInformationDisplayedOnLockScreen
     * @return LocalSecurityOptionsInformationDisplayedOnLockScreenType|null
    */
    public function getLocalSecurityOptionsInformationDisplayedOnLockScreen(): ?LocalSecurityOptionsInformationDisplayedOnLockScreenType {
        $val = $this->getBackingStore()->get('localSecurityOptionsInformationDisplayedOnLockScreen');
        if (is_null($val) || $val instanceof LocalSecurityOptionsInformationDisplayedOnLockScreenType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsInformationDisplayedOnLockScreen'");
    }

    /**
     * Gets the localSecurityOptionsInformationShownOnLockScreen property value. Possible values for LocalSecurityOptionsInformationShownOnLockScreenType
     * @return LocalSecurityOptionsInformationShownOnLockScreenType|null
    */
    public function getLocalSecurityOptionsInformationShownOnLockScreen(): ?LocalSecurityOptionsInformationShownOnLockScreenType {
        $val = $this->getBackingStore()->get('localSecurityOptionsInformationShownOnLockScreen');
        if (is_null($val) || $val instanceof LocalSecurityOptionsInformationShownOnLockScreenType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsInformationShownOnLockScreen'");
    }

    /**
     * Gets the localSecurityOptionsLogOnMessageText property value. Set message text for users attempting to log in.
     * @return string|null
    */
    public function getLocalSecurityOptionsLogOnMessageText(): ?string {
        $val = $this->getBackingStore()->get('localSecurityOptionsLogOnMessageText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsLogOnMessageText'");
    }

    /**
     * Gets the localSecurityOptionsLogOnMessageTitle property value. Set message title for users attempting to log in.
     * @return string|null
    */
    public function getLocalSecurityOptionsLogOnMessageTitle(): ?string {
        $val = $this->getBackingStore()->get('localSecurityOptionsLogOnMessageTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsLogOnMessageTitle'");
    }

    /**
     * Gets the localSecurityOptionsMachineInactivityLimit property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @return int|null
    */
    public function getLocalSecurityOptionsMachineInactivityLimit(): ?int {
        $val = $this->getBackingStore()->get('localSecurityOptionsMachineInactivityLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsMachineInactivityLimit'");
    }

    /**
     * Gets the localSecurityOptionsMachineInactivityLimitInMinutes property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @return int|null
    */
    public function getLocalSecurityOptionsMachineInactivityLimitInMinutes(): ?int {
        $val = $this->getBackingStore()->get('localSecurityOptionsMachineInactivityLimitInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsMachineInactivityLimitInMinutes'");
    }

    /**
     * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @return LocalSecurityOptionsMinimumSessionSecurity|null
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients(): ?LocalSecurityOptionsMinimumSessionSecurity {
        $val = $this->getBackingStore()->get('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients');
        if (is_null($val) || $val instanceof LocalSecurityOptionsMinimumSessionSecurity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients'");
    }

    /**
     * Gets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @return LocalSecurityOptionsMinimumSessionSecurity|null
    */
    public function getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers(): ?LocalSecurityOptionsMinimumSessionSecurity {
        $val = $this->getBackingStore()->get('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers');
        if (is_null($val) || $val instanceof LocalSecurityOptionsMinimumSessionSecurity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers'");
    }

    /**
     * Gets the localSecurityOptionsOnlyElevateSignedExecutables property value. Enforce PKI certification path validation for a given executable file before it is permitted to run.
     * @return bool|null
    */
    public function getLocalSecurityOptionsOnlyElevateSignedExecutables(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsOnlyElevateSignedExecutables');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsOnlyElevateSignedExecutables'");
    }

    /**
     * Gets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property value. By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
     * @return bool|null
    */
    public function getLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares'");
    }

    /**
     * Gets the localSecurityOptionsSmartCardRemovalBehavior property value. Possible values for LocalSecurityOptionsSmartCardRemovalBehaviorType
     * @return LocalSecurityOptionsSmartCardRemovalBehaviorType|null
    */
    public function getLocalSecurityOptionsSmartCardRemovalBehavior(): ?LocalSecurityOptionsSmartCardRemovalBehaviorType {
        $val = $this->getBackingStore()->get('localSecurityOptionsSmartCardRemovalBehavior');
        if (is_null($val) || $val instanceof LocalSecurityOptionsSmartCardRemovalBehaviorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsSmartCardRemovalBehavior'");
    }

    /**
     * Gets the localSecurityOptionsStandardUserElevationPromptBehavior property value. Possible values for LocalSecurityOptionsStandardUserElevationPromptBehavior
     * @return LocalSecurityOptionsStandardUserElevationPromptBehaviorType|null
    */
    public function getLocalSecurityOptionsStandardUserElevationPromptBehavior(): ?LocalSecurityOptionsStandardUserElevationPromptBehaviorType {
        $val = $this->getBackingStore()->get('localSecurityOptionsStandardUserElevationPromptBehavior');
        if (is_null($val) || $val instanceof LocalSecurityOptionsStandardUserElevationPromptBehaviorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsStandardUserElevationPromptBehavior'");
    }

    /**
     * Gets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property value. Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
     * @return bool|null
    */
    public function getLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation'");
    }

    /**
     * Gets the localSecurityOptionsUseAdminApprovalMode property value. Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsUseAdminApprovalMode(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsUseAdminApprovalMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsUseAdminApprovalMode'");
    }

    /**
     * Gets the localSecurityOptionsUseAdminApprovalModeForAdministrators property value. Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
     * @return bool|null
    */
    public function getLocalSecurityOptionsUseAdminApprovalModeForAdministrators(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsUseAdminApprovalModeForAdministrators');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsUseAdminApprovalModeForAdministrators'");
    }

    /**
     * Gets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property value. Virtualize file and registry write failures to per user locations
     * @return bool|null
    */
    public function getLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations(): ?bool {
        $val = $this->getBackingStore()->get('localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations'");
    }

    /**
     * Gets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     * @return bool|null
    */
    public function getSmartScreenBlockOverrideForFiles(): ?bool {
        $val = $this->getBackingStore()->get('smartScreenBlockOverrideForFiles');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smartScreenBlockOverrideForFiles'");
    }

    /**
     * Gets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     * @return bool|null
    */
    public function getSmartScreenEnableInShell(): ?bool {
        $val = $this->getBackingStore()->get('smartScreenEnableInShell');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smartScreenEnableInShell'");
    }

    /**
     * Gets the userRightsAccessCredentialManagerAsTrustedCaller property value. This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsAccessCredentialManagerAsTrustedCaller(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsAccessCredentialManagerAsTrustedCaller');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsAccessCredentialManagerAsTrustedCaller'");
    }

    /**
     * Gets the userRightsActAsPartOfTheOperatingSystem property value. This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsActAsPartOfTheOperatingSystem(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsActAsPartOfTheOperatingSystem');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsActAsPartOfTheOperatingSystem'");
    }

    /**
     * Gets the userRightsAllowAccessFromNetwork property value. This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsAllowAccessFromNetwork(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsAllowAccessFromNetwork');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsAllowAccessFromNetwork'");
    }

    /**
     * Gets the userRightsBackupData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsBackupData(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsBackupData');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsBackupData'");
    }

    /**
     * Gets the userRightsBlockAccessFromNetwork property value. This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsBlockAccessFromNetwork(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsBlockAccessFromNetwork');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsBlockAccessFromNetwork'");
    }

    /**
     * Gets the userRightsChangeSystemTime property value. This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsChangeSystemTime(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsChangeSystemTime');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsChangeSystemTime'");
    }

    /**
     * Gets the userRightsCreateGlobalObjects property value. This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateGlobalObjects(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsCreateGlobalObjects');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsCreateGlobalObjects'");
    }

    /**
     * Gets the userRightsCreatePageFile property value. This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreatePageFile(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsCreatePageFile');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsCreatePageFile'");
    }

    /**
     * Gets the userRightsCreatePermanentSharedObjects property value. This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreatePermanentSharedObjects(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsCreatePermanentSharedObjects');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsCreatePermanentSharedObjects'");
    }

    /**
     * Gets the userRightsCreateSymbolicLinks property value. This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateSymbolicLinks(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsCreateSymbolicLinks');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsCreateSymbolicLinks'");
    }

    /**
     * Gets the userRightsCreateToken property value. This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsCreateToken(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsCreateToken');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsCreateToken'");
    }

    /**
     * Gets the userRightsDebugPrograms property value. This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDebugPrograms(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsDebugPrograms');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsDebugPrograms'");
    }

    /**
     * Gets the userRightsDelegation property value. This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDelegation(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsDelegation');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsDelegation'");
    }

    /**
     * Gets the userRightsDenyLocalLogOn property value. This user right determines which users cannot log on to the computer. States NotConfigured, Blocked are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsDenyLocalLogOn(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsDenyLocalLogOn');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsDenyLocalLogOn'");
    }

    /**
     * Gets the userRightsGenerateSecurityAudits property value. This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsGenerateSecurityAudits(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsGenerateSecurityAudits');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsGenerateSecurityAudits'");
    }

    /**
     * Gets the userRightsImpersonateClient property value. Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsImpersonateClient(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsImpersonateClient');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsImpersonateClient'");
    }

    /**
     * Gets the userRightsIncreaseSchedulingPriority property value. This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsIncreaseSchedulingPriority(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsIncreaseSchedulingPriority');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsIncreaseSchedulingPriority'");
    }

    /**
     * Gets the userRightsLoadUnloadDrivers property value. This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLoadUnloadDrivers(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsLoadUnloadDrivers');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsLoadUnloadDrivers'");
    }

    /**
     * Gets the userRightsLocalLogOn property value. This user right determines which users can log on to the computer. States NotConfigured, Allowed are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLocalLogOn(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsLocalLogOn');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsLocalLogOn'");
    }

    /**
     * Gets the userRightsLockMemory property value. This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsLockMemory(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsLockMemory');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsLockMemory'");
    }

    /**
     * Gets the userRightsManageAuditingAndSecurityLogs property value. This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsManageAuditingAndSecurityLogs(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsManageAuditingAndSecurityLogs');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsManageAuditingAndSecurityLogs'");
    }

    /**
     * Gets the userRightsManageVolumes property value. This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsManageVolumes(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsManageVolumes');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsManageVolumes'");
    }

    /**
     * Gets the userRightsModifyFirmwareEnvironment property value. This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsModifyFirmwareEnvironment(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsModifyFirmwareEnvironment');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsModifyFirmwareEnvironment'");
    }

    /**
     * Gets the userRightsModifyObjectLabels property value. This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsModifyObjectLabels(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsModifyObjectLabels');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsModifyObjectLabels'");
    }

    /**
     * Gets the userRightsProfileSingleProcess property value. This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsProfileSingleProcess(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsProfileSingleProcess');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsProfileSingleProcess'");
    }

    /**
     * Gets the userRightsRemoteDesktopServicesLogOn property value. This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRemoteDesktopServicesLogOn(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsRemoteDesktopServicesLogOn');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsRemoteDesktopServicesLogOn'");
    }

    /**
     * Gets the userRightsRemoteShutdown property value. This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRemoteShutdown(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsRemoteShutdown');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsRemoteShutdown'");
    }

    /**
     * Gets the userRightsRestoreData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsRestoreData(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsRestoreData');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsRestoreData'");
    }

    /**
     * Gets the userRightsTakeOwnership property value. This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
     * @return DeviceManagementUserRightsSetting|null
    */
    public function getUserRightsTakeOwnership(): ?DeviceManagementUserRightsSetting {
        $val = $this->getBackingStore()->get('userRightsTakeOwnership');
        if (is_null($val) || $val instanceof DeviceManagementUserRightsSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRightsTakeOwnership'");
    }

    /**
     * Gets the windowsDefenderTamperProtection property value. Defender TamperProtection setting options
     * @return WindowsDefenderTamperProtectionOptions|null
    */
    public function getWindowsDefenderTamperProtection(): ?WindowsDefenderTamperProtectionOptions {
        $val = $this->getBackingStore()->get('windowsDefenderTamperProtection');
        if (is_null($val) || $val instanceof WindowsDefenderTamperProtectionOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsDefenderTamperProtection'");
    }

    /**
     * Gets the xboxServicesAccessoryManagementServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesAccessoryManagementServiceStartupMode(): ?ServiceStartType {
        $val = $this->getBackingStore()->get('xboxServicesAccessoryManagementServiceStartupMode');
        if (is_null($val) || $val instanceof ServiceStartType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xboxServicesAccessoryManagementServiceStartupMode'");
    }

    /**
     * Gets the xboxServicesEnableXboxGameSaveTask property value. This setting determines whether xbox game save is enabled (1) or disabled (0).
     * @return bool|null
    */
    public function getXboxServicesEnableXboxGameSaveTask(): ?bool {
        $val = $this->getBackingStore()->get('xboxServicesEnableXboxGameSaveTask');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xboxServicesEnableXboxGameSaveTask'");
    }

    /**
     * Gets the xboxServicesLiveAuthManagerServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveAuthManagerServiceStartupMode(): ?ServiceStartType {
        $val = $this->getBackingStore()->get('xboxServicesLiveAuthManagerServiceStartupMode');
        if (is_null($val) || $val instanceof ServiceStartType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xboxServicesLiveAuthManagerServiceStartupMode'");
    }

    /**
     * Gets the xboxServicesLiveGameSaveServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveGameSaveServiceStartupMode(): ?ServiceStartType {
        $val = $this->getBackingStore()->get('xboxServicesLiveGameSaveServiceStartupMode');
        if (is_null($val) || $val instanceof ServiceStartType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xboxServicesLiveGameSaveServiceStartupMode'");
    }

    /**
     * Gets the xboxServicesLiveNetworkingServiceStartupMode property value. Possible values of xbox service start type
     * @return ServiceStartType|null
    */
    public function getXboxServicesLiveNetworkingServiceStartupMode(): ?ServiceStartType {
        $val = $this->getBackingStore()->get('xboxServicesLiveNetworkingServiceStartupMode');
        if (is_null($val) || $val instanceof ServiceStartType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xboxServicesLiveNetworkingServiceStartupMode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('applicationGuardAllowCameraMicrophoneRedirection', $this->getApplicationGuardAllowCameraMicrophoneRedirection());
        $writer->writeBooleanValue('applicationGuardAllowFileSaveOnHost', $this->getApplicationGuardAllowFileSaveOnHost());
        $writer->writeBooleanValue('applicationGuardAllowPersistence', $this->getApplicationGuardAllowPersistence());
        $writer->writeBooleanValue('applicationGuardAllowPrintToLocalPrinters', $this->getApplicationGuardAllowPrintToLocalPrinters());
        $writer->writeBooleanValue('applicationGuardAllowPrintToNetworkPrinters', $this->getApplicationGuardAllowPrintToNetworkPrinters());
        $writer->writeBooleanValue('applicationGuardAllowPrintToPDF', $this->getApplicationGuardAllowPrintToPDF());
        $writer->writeBooleanValue('applicationGuardAllowPrintToXPS', $this->getApplicationGuardAllowPrintToXPS());
        $writer->writeBooleanValue('applicationGuardAllowVirtualGPU', $this->getApplicationGuardAllowVirtualGPU());
        $writer->writeEnumValue('applicationGuardBlockClipboardSharing', $this->getApplicationGuardBlockClipboardSharing());
        $writer->writeEnumValue('applicationGuardBlockFileTransfer', $this->getApplicationGuardBlockFileTransfer());
        $writer->writeBooleanValue('applicationGuardBlockNonEnterpriseContent', $this->getApplicationGuardBlockNonEnterpriseContent());
        $writer->writeCollectionOfPrimitiveValues('applicationGuardCertificateThumbprints', $this->getApplicationGuardCertificateThumbprints());
        $writer->writeBooleanValue('applicationGuardEnabled', $this->getApplicationGuardEnabled());
        $writer->writeEnumValue('applicationGuardEnabledOptions', $this->getApplicationGuardEnabledOptions());
        $writer->writeBooleanValue('applicationGuardForceAuditing', $this->getApplicationGuardForceAuditing());
        $writer->writeEnumValue('appLockerApplicationControl', $this->getAppLockerApplicationControl());
        $writer->writeBooleanValue('bitLockerAllowStandardUserEncryption', $this->getBitLockerAllowStandardUserEncryption());
        $writer->writeBooleanValue('bitLockerDisableWarningForOtherDiskEncryption', $this->getBitLockerDisableWarningForOtherDiskEncryption());
        $writer->writeBooleanValue('bitLockerEnableStorageCardEncryptionOnMobile', $this->getBitLockerEnableStorageCardEncryptionOnMobile());
        $writer->writeBooleanValue('bitLockerEncryptDevice', $this->getBitLockerEncryptDevice());
        $writer->writeObjectValue('bitLockerFixedDrivePolicy', $this->getBitLockerFixedDrivePolicy());
        $writer->writeEnumValue('bitLockerRecoveryPasswordRotation', $this->getBitLockerRecoveryPasswordRotation());
        $writer->writeObjectValue('bitLockerRemovableDrivePolicy', $this->getBitLockerRemovableDrivePolicy());
        $writer->writeObjectValue('bitLockerSystemDrivePolicy', $this->getBitLockerSystemDrivePolicy());
        $writer->writeCollectionOfPrimitiveValues('defenderAdditionalGuardedFolders', $this->getDefenderAdditionalGuardedFolders());
        $writer->writeEnumValue('defenderAdobeReaderLaunchChildProcess', $this->getDefenderAdobeReaderLaunchChildProcess());
        $writer->writeEnumValue('defenderAdvancedRansomewareProtectionType', $this->getDefenderAdvancedRansomewareProtectionType());
        $writer->writeBooleanValue('defenderAllowBehaviorMonitoring', $this->getDefenderAllowBehaviorMonitoring());
        $writer->writeBooleanValue('defenderAllowCloudProtection', $this->getDefenderAllowCloudProtection());
        $writer->writeBooleanValue('defenderAllowEndUserAccess', $this->getDefenderAllowEndUserAccess());
        $writer->writeBooleanValue('defenderAllowIntrusionPreventionSystem', $this->getDefenderAllowIntrusionPreventionSystem());
        $writer->writeBooleanValue('defenderAllowOnAccessProtection', $this->getDefenderAllowOnAccessProtection());
        $writer->writeBooleanValue('defenderAllowRealTimeMonitoring', $this->getDefenderAllowRealTimeMonitoring());
        $writer->writeBooleanValue('defenderAllowScanArchiveFiles', $this->getDefenderAllowScanArchiveFiles());
        $writer->writeBooleanValue('defenderAllowScanDownloads', $this->getDefenderAllowScanDownloads());
        $writer->writeBooleanValue('defenderAllowScanNetworkFiles', $this->getDefenderAllowScanNetworkFiles());
        $writer->writeBooleanValue('defenderAllowScanRemovableDrivesDuringFullScan', $this->getDefenderAllowScanRemovableDrivesDuringFullScan());
        $writer->writeBooleanValue('defenderAllowScanScriptsLoadedInInternetExplorer', $this->getDefenderAllowScanScriptsLoadedInInternetExplorer());
        $writer->writeCollectionOfPrimitiveValues('defenderAttackSurfaceReductionExcludedPaths', $this->getDefenderAttackSurfaceReductionExcludedPaths());
        $writer->writeBooleanValue('defenderBlockEndUserAccess', $this->getDefenderBlockEndUserAccess());
        $writer->writeEnumValue('defenderBlockPersistenceThroughWmiType', $this->getDefenderBlockPersistenceThroughWmiType());
        $writer->writeBooleanValue('defenderCheckForSignaturesBeforeRunningScan', $this->getDefenderCheckForSignaturesBeforeRunningScan());
        $writer->writeEnumValue('defenderCloudBlockLevel', $this->getDefenderCloudBlockLevel());
        $writer->writeIntegerValue('defenderCloudExtendedTimeoutInSeconds', $this->getDefenderCloudExtendedTimeoutInSeconds());
        $writer->writeIntegerValue('defenderDaysBeforeDeletingQuarantinedMalware', $this->getDefenderDaysBeforeDeletingQuarantinedMalware());
        $writer->writeObjectValue('defenderDetectedMalwareActions', $this->getDefenderDetectedMalwareActions());
        $writer->writeBooleanValue('defenderDisableBehaviorMonitoring', $this->getDefenderDisableBehaviorMonitoring());
        $writer->writeBooleanValue('defenderDisableCatchupFullScan', $this->getDefenderDisableCatchupFullScan());
        $writer->writeBooleanValue('defenderDisableCatchupQuickScan', $this->getDefenderDisableCatchupQuickScan());
        $writer->writeBooleanValue('defenderDisableCloudProtection', $this->getDefenderDisableCloudProtection());
        $writer->writeBooleanValue('defenderDisableIntrusionPreventionSystem', $this->getDefenderDisableIntrusionPreventionSystem());
        $writer->writeBooleanValue('defenderDisableOnAccessProtection', $this->getDefenderDisableOnAccessProtection());
        $writer->writeBooleanValue('defenderDisableRealTimeMonitoring', $this->getDefenderDisableRealTimeMonitoring());
        $writer->writeBooleanValue('defenderDisableScanArchiveFiles', $this->getDefenderDisableScanArchiveFiles());
        $writer->writeBooleanValue('defenderDisableScanDownloads', $this->getDefenderDisableScanDownloads());
        $writer->writeBooleanValue('defenderDisableScanNetworkFiles', $this->getDefenderDisableScanNetworkFiles());
        $writer->writeBooleanValue('defenderDisableScanRemovableDrivesDuringFullScan', $this->getDefenderDisableScanRemovableDrivesDuringFullScan());
        $writer->writeBooleanValue('defenderDisableScanScriptsLoadedInInternetExplorer', $this->getDefenderDisableScanScriptsLoadedInInternetExplorer());
        $writer->writeEnumValue('defenderEmailContentExecution', $this->getDefenderEmailContentExecution());
        $writer->writeEnumValue('defenderEmailContentExecutionType', $this->getDefenderEmailContentExecutionType());
        $writer->writeBooleanValue('defenderEnableLowCpuPriority', $this->getDefenderEnableLowCpuPriority());
        $writer->writeBooleanValue('defenderEnableScanIncomingMail', $this->getDefenderEnableScanIncomingMail());
        $writer->writeBooleanValue('defenderEnableScanMappedNetworkDrivesDuringFullScan', $this->getDefenderEnableScanMappedNetworkDrivesDuringFullScan());
        $writer->writeBinaryContent('defenderExploitProtectionXml', $this->getDefenderExploitProtectionXml());
        $writer->writeStringValue('defenderExploitProtectionXmlFileName', $this->getDefenderExploitProtectionXmlFileName());
        $writer->writeCollectionOfPrimitiveValues('defenderFileExtensionsToExclude', $this->getDefenderFileExtensionsToExclude());
        $writer->writeCollectionOfPrimitiveValues('defenderFilesAndFoldersToExclude', $this->getDefenderFilesAndFoldersToExclude());
        $writer->writeCollectionOfPrimitiveValues('defenderGuardedFoldersAllowedAppPaths', $this->getDefenderGuardedFoldersAllowedAppPaths());
        $writer->writeEnumValue('defenderGuardMyFoldersType', $this->getDefenderGuardMyFoldersType());
        $writer->writeEnumValue('defenderNetworkProtectionType', $this->getDefenderNetworkProtectionType());
        $writer->writeEnumValue('defenderOfficeAppsExecutableContentCreationOrLaunch', $this->getDefenderOfficeAppsExecutableContentCreationOrLaunch());
        $writer->writeEnumValue('defenderOfficeAppsExecutableContentCreationOrLaunchType', $this->getDefenderOfficeAppsExecutableContentCreationOrLaunchType());
        $writer->writeEnumValue('defenderOfficeAppsLaunchChildProcess', $this->getDefenderOfficeAppsLaunchChildProcess());
        $writer->writeEnumValue('defenderOfficeAppsLaunchChildProcessType', $this->getDefenderOfficeAppsLaunchChildProcessType());
        $writer->writeEnumValue('defenderOfficeAppsOtherProcessInjection', $this->getDefenderOfficeAppsOtherProcessInjection());
        $writer->writeEnumValue('defenderOfficeAppsOtherProcessInjectionType', $this->getDefenderOfficeAppsOtherProcessInjectionType());
        $writer->writeEnumValue('defenderOfficeCommunicationAppsLaunchChildProcess', $this->getDefenderOfficeCommunicationAppsLaunchChildProcess());
        $writer->writeEnumValue('defenderOfficeMacroCodeAllowWin32Imports', $this->getDefenderOfficeMacroCodeAllowWin32Imports());
        $writer->writeEnumValue('defenderOfficeMacroCodeAllowWin32ImportsType', $this->getDefenderOfficeMacroCodeAllowWin32ImportsType());
        $writer->writeEnumValue('defenderPotentiallyUnwantedAppAction', $this->getDefenderPotentiallyUnwantedAppAction());
        $writer->writeEnumValue('defenderPreventCredentialStealingType', $this->getDefenderPreventCredentialStealingType());
        $writer->writeEnumValue('defenderProcessCreation', $this->getDefenderProcessCreation());
        $writer->writeEnumValue('defenderProcessCreationType', $this->getDefenderProcessCreationType());
        $writer->writeCollectionOfPrimitiveValues('defenderProcessesToExclude', $this->getDefenderProcessesToExclude());
        $writer->writeEnumValue('defenderScanDirection', $this->getDefenderScanDirection());
        $writer->writeIntegerValue('defenderScanMaxCpuPercentage', $this->getDefenderScanMaxCpuPercentage());
        $writer->writeEnumValue('defenderScanType', $this->getDefenderScanType());
        $writer->writeTimeValue('defenderScheduledQuickScanTime', $this->getDefenderScheduledQuickScanTime());
        $writer->writeEnumValue('defenderScheduledScanDay', $this->getDefenderScheduledScanDay());
        $writer->writeTimeValue('defenderScheduledScanTime', $this->getDefenderScheduledScanTime());
        $writer->writeEnumValue('defenderScriptDownloadedPayloadExecution', $this->getDefenderScriptDownloadedPayloadExecution());
        $writer->writeEnumValue('defenderScriptDownloadedPayloadExecutionType', $this->getDefenderScriptDownloadedPayloadExecutionType());
        $writer->writeEnumValue('defenderScriptObfuscatedMacroCode', $this->getDefenderScriptObfuscatedMacroCode());
        $writer->writeEnumValue('defenderScriptObfuscatedMacroCodeType', $this->getDefenderScriptObfuscatedMacroCodeType());
        $writer->writeBooleanValue('defenderSecurityCenterBlockExploitProtectionOverride', $this->getDefenderSecurityCenterBlockExploitProtectionOverride());
        $writer->writeBooleanValue('defenderSecurityCenterDisableAccountUI', $this->getDefenderSecurityCenterDisableAccountUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableAppBrowserUI', $this->getDefenderSecurityCenterDisableAppBrowserUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableClearTpmUI', $this->getDefenderSecurityCenterDisableClearTpmUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableFamilyUI', $this->getDefenderSecurityCenterDisableFamilyUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableHardwareUI', $this->getDefenderSecurityCenterDisableHardwareUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableHealthUI', $this->getDefenderSecurityCenterDisableHealthUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableNetworkUI', $this->getDefenderSecurityCenterDisableNetworkUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableNotificationAreaUI', $this->getDefenderSecurityCenterDisableNotificationAreaUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableRansomwareUI', $this->getDefenderSecurityCenterDisableRansomwareUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableSecureBootUI', $this->getDefenderSecurityCenterDisableSecureBootUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableTroubleshootingUI', $this->getDefenderSecurityCenterDisableTroubleshootingUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableVirusUI', $this->getDefenderSecurityCenterDisableVirusUI());
        $writer->writeBooleanValue('defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI', $this->getDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI());
        $writer->writeStringValue('defenderSecurityCenterHelpEmail', $this->getDefenderSecurityCenterHelpEmail());
        $writer->writeStringValue('defenderSecurityCenterHelpPhone', $this->getDefenderSecurityCenterHelpPhone());
        $writer->writeStringValue('defenderSecurityCenterHelpURL', $this->getDefenderSecurityCenterHelpURL());
        $writer->writeEnumValue('defenderSecurityCenterITContactDisplay', $this->getDefenderSecurityCenterITContactDisplay());
        $writer->writeEnumValue('defenderSecurityCenterNotificationsFromApp', $this->getDefenderSecurityCenterNotificationsFromApp());
        $writer->writeStringValue('defenderSecurityCenterOrganizationDisplayName', $this->getDefenderSecurityCenterOrganizationDisplayName());
        $writer->writeIntegerValue('defenderSignatureUpdateIntervalInHours', $this->getDefenderSignatureUpdateIntervalInHours());
        $writer->writeEnumValue('defenderSubmitSamplesConsentType', $this->getDefenderSubmitSamplesConsentType());
        $writer->writeEnumValue('defenderUntrustedExecutable', $this->getDefenderUntrustedExecutable());
        $writer->writeEnumValue('defenderUntrustedExecutableType', $this->getDefenderUntrustedExecutableType());
        $writer->writeEnumValue('defenderUntrustedUSBProcess', $this->getDefenderUntrustedUSBProcess());
        $writer->writeEnumValue('defenderUntrustedUSBProcessType', $this->getDefenderUntrustedUSBProcessType());
        $writer->writeBooleanValue('deviceGuardEnableSecureBootWithDMA', $this->getDeviceGuardEnableSecureBootWithDMA());
        $writer->writeBooleanValue('deviceGuardEnableVirtualizationBasedSecurity', $this->getDeviceGuardEnableVirtualizationBasedSecurity());
        $writer->writeEnumValue('deviceGuardLaunchSystemGuard', $this->getDeviceGuardLaunchSystemGuard());
        $writer->writeEnumValue('deviceGuardLocalSystemAuthorityCredentialGuardSettings', $this->getDeviceGuardLocalSystemAuthorityCredentialGuardSettings());
        $writer->writeEnumValue('deviceGuardSecureBootWithDMA', $this->getDeviceGuardSecureBootWithDMA());
        $writer->writeEnumValue('dmaGuardDeviceEnumerationPolicy', $this->getDmaGuardDeviceEnumerationPolicy());
        $writer->writeBooleanValue('firewallBlockStatefulFTP', $this->getFirewallBlockStatefulFTP());
        $writer->writeEnumValue('firewallCertificateRevocationListCheckMethod', $this->getFirewallCertificateRevocationListCheckMethod());
        $writer->writeIntegerValue('firewallIdleTimeoutForSecurityAssociationInSeconds', $this->getFirewallIdleTimeoutForSecurityAssociationInSeconds());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowDHCP', $this->getFirewallIPSecExemptionsAllowDHCP());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowICMP', $this->getFirewallIPSecExemptionsAllowICMP());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowNeighborDiscovery', $this->getFirewallIPSecExemptionsAllowNeighborDiscovery());
        $writer->writeBooleanValue('firewallIPSecExemptionsAllowRouterDiscovery', $this->getFirewallIPSecExemptionsAllowRouterDiscovery());
        $writer->writeBooleanValue('firewallIPSecExemptionsNone', $this->getFirewallIPSecExemptionsNone());
        $writer->writeBooleanValue('firewallMergeKeyingModuleSettings', $this->getFirewallMergeKeyingModuleSettings());
        $writer->writeEnumValue('firewallPacketQueueingMethod', $this->getFirewallPacketQueueingMethod());
        $writer->writeEnumValue('firewallPreSharedKeyEncodingMethod', $this->getFirewallPreSharedKeyEncodingMethod());
        $writer->writeObjectValue('firewallProfileDomain', $this->getFirewallProfileDomain());
        $writer->writeObjectValue('firewallProfilePrivate', $this->getFirewallProfilePrivate());
        $writer->writeObjectValue('firewallProfilePublic', $this->getFirewallProfilePublic());
        $writer->writeCollectionOfObjectValues('firewallRules', $this->getFirewallRules());
        $writer->writeEnumValue('lanManagerAuthenticationLevel', $this->getLanManagerAuthenticationLevel());
        $writer->writeBooleanValue('lanManagerWorkstationDisableInsecureGuestLogons', $this->getLanManagerWorkstationDisableInsecureGuestLogons());
        $writer->writeStringValue('localSecurityOptionsAdministratorAccountName', $this->getLocalSecurityOptionsAdministratorAccountName());
        $writer->writeEnumValue('localSecurityOptionsAdministratorElevationPromptBehavior', $this->getLocalSecurityOptionsAdministratorElevationPromptBehavior());
        $writer->writeBooleanValue('localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares', $this->getLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares());
        $writer->writeBooleanValue('localSecurityOptionsAllowPKU2UAuthenticationRequests', $this->getLocalSecurityOptionsAllowPKU2UAuthenticationRequests());
        $writer->writeStringValue('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager', $this->getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager());
        $writer->writeBooleanValue('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool', $this->getLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool());
        $writer->writeBooleanValue('localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn', $this->getLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn());
        $writer->writeBooleanValue('localSecurityOptionsAllowUIAccessApplicationElevation', $this->getLocalSecurityOptionsAllowUIAccessApplicationElevation());
        $writer->writeBooleanValue('localSecurityOptionsAllowUIAccessApplicationsForSecureLocations', $this->getLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations());
        $writer->writeBooleanValue('localSecurityOptionsAllowUndockWithoutHavingToLogon', $this->getLocalSecurityOptionsAllowUndockWithoutHavingToLogon());
        $writer->writeBooleanValue('localSecurityOptionsBlockMicrosoftAccounts', $this->getLocalSecurityOptionsBlockMicrosoftAccounts());
        $writer->writeBooleanValue('localSecurityOptionsBlockRemoteLogonWithBlankPassword', $this->getLocalSecurityOptionsBlockRemoteLogonWithBlankPassword());
        $writer->writeBooleanValue('localSecurityOptionsBlockRemoteOpticalDriveAccess', $this->getLocalSecurityOptionsBlockRemoteOpticalDriveAccess());
        $writer->writeBooleanValue('localSecurityOptionsBlockUsersInstallingPrinterDrivers', $this->getLocalSecurityOptionsBlockUsersInstallingPrinterDrivers());
        $writer->writeBooleanValue('localSecurityOptionsClearVirtualMemoryPageFile', $this->getLocalSecurityOptionsClearVirtualMemoryPageFile());
        $writer->writeBooleanValue('localSecurityOptionsClientDigitallySignCommunicationsAlways', $this->getLocalSecurityOptionsClientDigitallySignCommunicationsAlways());
        $writer->writeBooleanValue('localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers', $this->getLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers());
        $writer->writeBooleanValue('localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation', $this->getLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation());
        $writer->writeBooleanValue('localSecurityOptionsDisableAdministratorAccount', $this->getLocalSecurityOptionsDisableAdministratorAccount());
        $writer->writeBooleanValue('localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees', $this->getLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees());
        $writer->writeBooleanValue('localSecurityOptionsDisableGuestAccount', $this->getLocalSecurityOptionsDisableGuestAccount());
        $writer->writeBooleanValue('localSecurityOptionsDisableServerDigitallySignCommunicationsAlways', $this->getLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways());
        $writer->writeBooleanValue('localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees', $this->getLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees());
        $writer->writeBooleanValue('localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts', $this->getLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts());
        $writer->writeBooleanValue('localSecurityOptionsDoNotRequireCtrlAltDel', $this->getLocalSecurityOptionsDoNotRequireCtrlAltDel());
        $writer->writeBooleanValue('localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange', $this->getLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange());
        $writer->writeEnumValue('localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser', $this->getLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser());
        $writer->writeStringValue('localSecurityOptionsGuestAccountName', $this->getLocalSecurityOptionsGuestAccountName());
        $writer->writeBooleanValue('localSecurityOptionsHideLastSignedInUser', $this->getLocalSecurityOptionsHideLastSignedInUser());
        $writer->writeBooleanValue('localSecurityOptionsHideUsernameAtSignIn', $this->getLocalSecurityOptionsHideUsernameAtSignIn());
        $writer->writeEnumValue('localSecurityOptionsInformationDisplayedOnLockScreen', $this->getLocalSecurityOptionsInformationDisplayedOnLockScreen());
        $writer->writeEnumValue('localSecurityOptionsInformationShownOnLockScreen', $this->getLocalSecurityOptionsInformationShownOnLockScreen());
        $writer->writeStringValue('localSecurityOptionsLogOnMessageText', $this->getLocalSecurityOptionsLogOnMessageText());
        $writer->writeStringValue('localSecurityOptionsLogOnMessageTitle', $this->getLocalSecurityOptionsLogOnMessageTitle());
        $writer->writeIntegerValue('localSecurityOptionsMachineInactivityLimit', $this->getLocalSecurityOptionsMachineInactivityLimit());
        $writer->writeIntegerValue('localSecurityOptionsMachineInactivityLimitInMinutes', $this->getLocalSecurityOptionsMachineInactivityLimitInMinutes());
        $writer->writeEnumValue('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients', $this->getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients());
        $writer->writeEnumValue('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers', $this->getLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers());
        $writer->writeBooleanValue('localSecurityOptionsOnlyElevateSignedExecutables', $this->getLocalSecurityOptionsOnlyElevateSignedExecutables());
        $writer->writeBooleanValue('localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares', $this->getLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares());
        $writer->writeEnumValue('localSecurityOptionsSmartCardRemovalBehavior', $this->getLocalSecurityOptionsSmartCardRemovalBehavior());
        $writer->writeEnumValue('localSecurityOptionsStandardUserElevationPromptBehavior', $this->getLocalSecurityOptionsStandardUserElevationPromptBehavior());
        $writer->writeBooleanValue('localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation', $this->getLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation());
        $writer->writeBooleanValue('localSecurityOptionsUseAdminApprovalMode', $this->getLocalSecurityOptionsUseAdminApprovalMode());
        $writer->writeBooleanValue('localSecurityOptionsUseAdminApprovalModeForAdministrators', $this->getLocalSecurityOptionsUseAdminApprovalModeForAdministrators());
        $writer->writeBooleanValue('localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations', $this->getLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations());
        $writer->writeBooleanValue('smartScreenBlockOverrideForFiles', $this->getSmartScreenBlockOverrideForFiles());
        $writer->writeBooleanValue('smartScreenEnableInShell', $this->getSmartScreenEnableInShell());
        $writer->writeObjectValue('userRightsAccessCredentialManagerAsTrustedCaller', $this->getUserRightsAccessCredentialManagerAsTrustedCaller());
        $writer->writeObjectValue('userRightsActAsPartOfTheOperatingSystem', $this->getUserRightsActAsPartOfTheOperatingSystem());
        $writer->writeObjectValue('userRightsAllowAccessFromNetwork', $this->getUserRightsAllowAccessFromNetwork());
        $writer->writeObjectValue('userRightsBackupData', $this->getUserRightsBackupData());
        $writer->writeObjectValue('userRightsBlockAccessFromNetwork', $this->getUserRightsBlockAccessFromNetwork());
        $writer->writeObjectValue('userRightsChangeSystemTime', $this->getUserRightsChangeSystemTime());
        $writer->writeObjectValue('userRightsCreateGlobalObjects', $this->getUserRightsCreateGlobalObjects());
        $writer->writeObjectValue('userRightsCreatePageFile', $this->getUserRightsCreatePageFile());
        $writer->writeObjectValue('userRightsCreatePermanentSharedObjects', $this->getUserRightsCreatePermanentSharedObjects());
        $writer->writeObjectValue('userRightsCreateSymbolicLinks', $this->getUserRightsCreateSymbolicLinks());
        $writer->writeObjectValue('userRightsCreateToken', $this->getUserRightsCreateToken());
        $writer->writeObjectValue('userRightsDebugPrograms', $this->getUserRightsDebugPrograms());
        $writer->writeObjectValue('userRightsDelegation', $this->getUserRightsDelegation());
        $writer->writeObjectValue('userRightsDenyLocalLogOn', $this->getUserRightsDenyLocalLogOn());
        $writer->writeObjectValue('userRightsGenerateSecurityAudits', $this->getUserRightsGenerateSecurityAudits());
        $writer->writeObjectValue('userRightsImpersonateClient', $this->getUserRightsImpersonateClient());
        $writer->writeObjectValue('userRightsIncreaseSchedulingPriority', $this->getUserRightsIncreaseSchedulingPriority());
        $writer->writeObjectValue('userRightsLoadUnloadDrivers', $this->getUserRightsLoadUnloadDrivers());
        $writer->writeObjectValue('userRightsLocalLogOn', $this->getUserRightsLocalLogOn());
        $writer->writeObjectValue('userRightsLockMemory', $this->getUserRightsLockMemory());
        $writer->writeObjectValue('userRightsManageAuditingAndSecurityLogs', $this->getUserRightsManageAuditingAndSecurityLogs());
        $writer->writeObjectValue('userRightsManageVolumes', $this->getUserRightsManageVolumes());
        $writer->writeObjectValue('userRightsModifyFirmwareEnvironment', $this->getUserRightsModifyFirmwareEnvironment());
        $writer->writeObjectValue('userRightsModifyObjectLabels', $this->getUserRightsModifyObjectLabels());
        $writer->writeObjectValue('userRightsProfileSingleProcess', $this->getUserRightsProfileSingleProcess());
        $writer->writeObjectValue('userRightsRemoteDesktopServicesLogOn', $this->getUserRightsRemoteDesktopServicesLogOn());
        $writer->writeObjectValue('userRightsRemoteShutdown', $this->getUserRightsRemoteShutdown());
        $writer->writeObjectValue('userRightsRestoreData', $this->getUserRightsRestoreData());
        $writer->writeObjectValue('userRightsTakeOwnership', $this->getUserRightsTakeOwnership());
        $writer->writeEnumValue('windowsDefenderTamperProtection', $this->getWindowsDefenderTamperProtection());
        $writer->writeEnumValue('xboxServicesAccessoryManagementServiceStartupMode', $this->getXboxServicesAccessoryManagementServiceStartupMode());
        $writer->writeBooleanValue('xboxServicesEnableXboxGameSaveTask', $this->getXboxServicesEnableXboxGameSaveTask());
        $writer->writeEnumValue('xboxServicesLiveAuthManagerServiceStartupMode', $this->getXboxServicesLiveAuthManagerServiceStartupMode());
        $writer->writeEnumValue('xboxServicesLiveGameSaveServiceStartupMode', $this->getXboxServicesLiveGameSaveServiceStartupMode());
        $writer->writeEnumValue('xboxServicesLiveNetworkingServiceStartupMode', $this->getXboxServicesLiveNetworkingServiceStartupMode());
    }

    /**
     * Sets the applicationGuardAllowCameraMicrophoneRedirection property value. Gets or sets whether applications inside Microsoft Defender Application Guard can access the device’s camera and microphone.
     * @param bool|null $value Value to set for the applicationGuardAllowCameraMicrophoneRedirection property.
    */
    public function setApplicationGuardAllowCameraMicrophoneRedirection(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowCameraMicrophoneRedirection', $value);
    }

    /**
     * Sets the applicationGuardAllowFileSaveOnHost property value. Allow users to download files from Edge in the application guard container and save them on the host file system
     * @param bool|null $value Value to set for the applicationGuardAllowFileSaveOnHost property.
    */
    public function setApplicationGuardAllowFileSaveOnHost(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowFileSaveOnHost', $value);
    }

    /**
     * Sets the applicationGuardAllowPersistence property value. Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
     * @param bool|null $value Value to set for the applicationGuardAllowPersistence property.
    */
    public function setApplicationGuardAllowPersistence(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPersistence', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToLocalPrinters property value. Allow printing to Local Printers from Container
     * @param bool|null $value Value to set for the applicationGuardAllowPrintToLocalPrinters property.
    */
    public function setApplicationGuardAllowPrintToLocalPrinters(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToLocalPrinters', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToNetworkPrinters property value. Allow printing to Network Printers from Container
     * @param bool|null $value Value to set for the applicationGuardAllowPrintToNetworkPrinters property.
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToNetworkPrinters', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToPDF property value. Allow printing to PDF from Container
     * @param bool|null $value Value to set for the applicationGuardAllowPrintToPDF property.
    */
    public function setApplicationGuardAllowPrintToPDF(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToPDF', $value);
    }

    /**
     * Sets the applicationGuardAllowPrintToXPS property value. Allow printing to XPS from Container
     * @param bool|null $value Value to set for the applicationGuardAllowPrintToXPS property.
    */
    public function setApplicationGuardAllowPrintToXPS(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowPrintToXPS', $value);
    }

    /**
     * Sets the applicationGuardAllowVirtualGPU property value. Allow application guard to use virtual GPU
     * @param bool|null $value Value to set for the applicationGuardAllowVirtualGPU property.
    */
    public function setApplicationGuardAllowVirtualGPU(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardAllowVirtualGPU', $value);
    }

    /**
     * Sets the applicationGuardBlockClipboardSharing property value. Possible values for applicationGuardBlockClipboardSharingType
     * @param ApplicationGuardBlockClipboardSharingType|null $value Value to set for the applicationGuardBlockClipboardSharing property.
    */
    public function setApplicationGuardBlockClipboardSharing(?ApplicationGuardBlockClipboardSharingType $value): void {
        $this->getBackingStore()->set('applicationGuardBlockClipboardSharing', $value);
    }

    /**
     * Sets the applicationGuardBlockFileTransfer property value. Possible values for applicationGuardBlockFileTransfer
     * @param ApplicationGuardBlockFileTransferType|null $value Value to set for the applicationGuardBlockFileTransfer property.
    */
    public function setApplicationGuardBlockFileTransfer(?ApplicationGuardBlockFileTransferType $value): void {
        $this->getBackingStore()->set('applicationGuardBlockFileTransfer', $value);
    }

    /**
     * Sets the applicationGuardBlockNonEnterpriseContent property value. Block enterprise sites to load non-enterprise content, such as third party plug-ins
     * @param bool|null $value Value to set for the applicationGuardBlockNonEnterpriseContent property.
    */
    public function setApplicationGuardBlockNonEnterpriseContent(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardBlockNonEnterpriseContent', $value);
    }

    /**
     * Sets the applicationGuardCertificateThumbprints property value. Allows certain device level Root Certificates to be shared with the Microsoft Defender Application Guard container.
     * @param array<string>|null $value Value to set for the applicationGuardCertificateThumbprints property.
    */
    public function setApplicationGuardCertificateThumbprints(?array $value): void {
        $this->getBackingStore()->set('applicationGuardCertificateThumbprints', $value);
    }

    /**
     * Sets the applicationGuardEnabled property value. Enable Windows Defender Application Guard
     * @param bool|null $value Value to set for the applicationGuardEnabled property.
    */
    public function setApplicationGuardEnabled(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardEnabled', $value);
    }

    /**
     * Sets the applicationGuardEnabledOptions property value. Possible values for ApplicationGuardEnabledOptions
     * @param ApplicationGuardEnabledOptions|null $value Value to set for the applicationGuardEnabledOptions property.
    */
    public function setApplicationGuardEnabledOptions(?ApplicationGuardEnabledOptions $value): void {
        $this->getBackingStore()->set('applicationGuardEnabledOptions', $value);
    }

    /**
     * Sets the applicationGuardForceAuditing property value. Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
     * @param bool|null $value Value to set for the applicationGuardForceAuditing property.
    */
    public function setApplicationGuardForceAuditing(?bool $value): void {
        $this->getBackingStore()->set('applicationGuardForceAuditing', $value);
    }

    /**
     * Sets the appLockerApplicationControl property value. Possible values of AppLocker Application Control Types
     * @param AppLockerApplicationControlType|null $value Value to set for the appLockerApplicationControl property.
    */
    public function setAppLockerApplicationControl(?AppLockerApplicationControlType $value): void {
        $this->getBackingStore()->set('appLockerApplicationControl', $value);
    }

    /**
     * Sets the bitLockerAllowStandardUserEncryption property value. Allows the admin to allow standard users to enable encrpytion during Azure AD Join.
     * @param bool|null $value Value to set for the bitLockerAllowStandardUserEncryption property.
    */
    public function setBitLockerAllowStandardUserEncryption(?bool $value): void {
        $this->getBackingStore()->set('bitLockerAllowStandardUserEncryption', $value);
    }

    /**
     * Sets the bitLockerDisableWarningForOtherDiskEncryption property value. Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
     * @param bool|null $value Value to set for the bitLockerDisableWarningForOtherDiskEncryption property.
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption(?bool $value): void {
        $this->getBackingStore()->set('bitLockerDisableWarningForOtherDiskEncryption', $value);
    }

    /**
     * Sets the bitLockerEnableStorageCardEncryptionOnMobile property value. Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
     * @param bool|null $value Value to set for the bitLockerEnableStorageCardEncryptionOnMobile property.
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEnableStorageCardEncryptionOnMobile', $value);
    }

    /**
     * Sets the bitLockerEncryptDevice property value. Allows the admin to require encryption to be turned on using BitLocker.
     * @param bool|null $value Value to set for the bitLockerEncryptDevice property.
    */
    public function setBitLockerEncryptDevice(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEncryptDevice', $value);
    }

    /**
     * Sets the bitLockerFixedDrivePolicy property value. BitLocker Fixed Drive Policy.
     * @param BitLockerFixedDrivePolicy|null $value Value to set for the bitLockerFixedDrivePolicy property.
    */
    public function setBitLockerFixedDrivePolicy(?BitLockerFixedDrivePolicy $value): void {
        $this->getBackingStore()->set('bitLockerFixedDrivePolicy', $value);
    }

    /**
     * Sets the bitLockerRecoveryPasswordRotation property value. BitLocker recovery password rotation type
     * @param BitLockerRecoveryPasswordRotationType|null $value Value to set for the bitLockerRecoveryPasswordRotation property.
    */
    public function setBitLockerRecoveryPasswordRotation(?BitLockerRecoveryPasswordRotationType $value): void {
        $this->getBackingStore()->set('bitLockerRecoveryPasswordRotation', $value);
    }

    /**
     * Sets the bitLockerRemovableDrivePolicy property value. BitLocker Removable Drive Policy.
     * @param BitLockerRemovableDrivePolicy|null $value Value to set for the bitLockerRemovableDrivePolicy property.
    */
    public function setBitLockerRemovableDrivePolicy(?BitLockerRemovableDrivePolicy $value): void {
        $this->getBackingStore()->set('bitLockerRemovableDrivePolicy', $value);
    }

    /**
     * Sets the bitLockerSystemDrivePolicy property value. BitLocker System Drive Policy.
     * @param BitLockerSystemDrivePolicy|null $value Value to set for the bitLockerSystemDrivePolicy property.
    */
    public function setBitLockerSystemDrivePolicy(?BitLockerSystemDrivePolicy $value): void {
        $this->getBackingStore()->set('bitLockerSystemDrivePolicy', $value);
    }

    /**
     * Sets the defenderAdditionalGuardedFolders property value. List of folder paths to be added to the list of protected folders
     * @param array<string>|null $value Value to set for the defenderAdditionalGuardedFolders property.
    */
    public function setDefenderAdditionalGuardedFolders(?array $value): void {
        $this->getBackingStore()->set('defenderAdditionalGuardedFolders', $value);
    }

    /**
     * Sets the defenderAdobeReaderLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderAdobeReaderLaunchChildProcess property.
    */
    public function setDefenderAdobeReaderLaunchChildProcess(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderAdobeReaderLaunchChildProcess', $value);
    }

    /**
     * Sets the defenderAdvancedRansomewareProtectionType property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderAdvancedRansomewareProtectionType property.
    */
    public function setDefenderAdvancedRansomewareProtectionType(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderAdvancedRansomewareProtectionType', $value);
    }

    /**
     * Sets the defenderAllowBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @param bool|null $value Value to set for the defenderAllowBehaviorMonitoring property.
    */
    public function setDefenderAllowBehaviorMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowBehaviorMonitoring', $value);
    }

    /**
     * Sets the defenderAllowCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @param bool|null $value Value to set for the defenderAllowCloudProtection property.
    */
    public function setDefenderAllowCloudProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowCloudProtection', $value);
    }

    /**
     * Sets the defenderAllowEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @param bool|null $value Value to set for the defenderAllowEndUserAccess property.
    */
    public function setDefenderAllowEndUserAccess(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowEndUserAccess', $value);
    }

    /**
     * Sets the defenderAllowIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @param bool|null $value Value to set for the defenderAllowIntrusionPreventionSystem property.
    */
    public function setDefenderAllowIntrusionPreventionSystem(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowIntrusionPreventionSystem', $value);
    }

    /**
     * Sets the defenderAllowOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @param bool|null $value Value to set for the defenderAllowOnAccessProtection property.
    */
    public function setDefenderAllowOnAccessProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowOnAccessProtection', $value);
    }

    /**
     * Sets the defenderAllowRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @param bool|null $value Value to set for the defenderAllowRealTimeMonitoring property.
    */
    public function setDefenderAllowRealTimeMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowRealTimeMonitoring', $value);
    }

    /**
     * Sets the defenderAllowScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @param bool|null $value Value to set for the defenderAllowScanArchiveFiles property.
    */
    public function setDefenderAllowScanArchiveFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowScanArchiveFiles', $value);
    }

    /**
     * Sets the defenderAllowScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @param bool|null $value Value to set for the defenderAllowScanDownloads property.
    */
    public function setDefenderAllowScanDownloads(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowScanDownloads', $value);
    }

    /**
     * Sets the defenderAllowScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @param bool|null $value Value to set for the defenderAllowScanNetworkFiles property.
    */
    public function setDefenderAllowScanNetworkFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowScanNetworkFiles', $value);
    }

    /**
     * Sets the defenderAllowScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @param bool|null $value Value to set for the defenderAllowScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderAllowScanRemovableDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowScanRemovableDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderAllowScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @param bool|null $value Value to set for the defenderAllowScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderAllowScanScriptsLoadedInInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('defenderAllowScanScriptsLoadedInInternetExplorer', $value);
    }

    /**
     * Sets the defenderAttackSurfaceReductionExcludedPaths property value. List of exe files and folders to be excluded from attack surface reduction rules
     * @param array<string>|null $value Value to set for the defenderAttackSurfaceReductionExcludedPaths property.
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths(?array $value): void {
        $this->getBackingStore()->set('defenderAttackSurfaceReductionExcludedPaths', $value);
    }

    /**
     * Sets the defenderBlockEndUserAccess property value. Allows or disallows user access to the Windows Defender UI. If disallowed, all Windows Defender notifications will also be suppressed.
     * @param bool|null $value Value to set for the defenderBlockEndUserAccess property.
    */
    public function setDefenderBlockEndUserAccess(?bool $value): void {
        $this->getBackingStore()->set('defenderBlockEndUserAccess', $value);
    }

    /**
     * Sets the defenderBlockPersistenceThroughWmiType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderBlockPersistenceThroughWmiType property.
    */
    public function setDefenderBlockPersistenceThroughWmiType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderBlockPersistenceThroughWmiType', $value);
    }

    /**
     * Sets the defenderCheckForSignaturesBeforeRunningScan property value. This policy setting allows you to manage whether a check for new virus and spyware definitions will occur before running a scan.
     * @param bool|null $value Value to set for the defenderCheckForSignaturesBeforeRunningScan property.
    */
    public function setDefenderCheckForSignaturesBeforeRunningScan(?bool $value): void {
        $this->getBackingStore()->set('defenderCheckForSignaturesBeforeRunningScan', $value);
    }

    /**
     * Sets the defenderCloudBlockLevel property value. Added in Windows 10, version 1709. This policy setting determines how aggressive Windows Defender Antivirus will be in blocking and scanning suspicious files. Value type is integer. This feature requires the 'Join Microsoft MAPS' setting enabled in order to function. Possible values are: notConfigured, high, highPlus, zeroTolerance.
     * @param DefenderCloudBlockLevelType|null $value Value to set for the defenderCloudBlockLevel property.
    */
    public function setDefenderCloudBlockLevel(?DefenderCloudBlockLevelType $value): void {
        $this->getBackingStore()->set('defenderCloudBlockLevel', $value);
    }

    /**
     * Sets the defenderCloudExtendedTimeoutInSeconds property value. Added in Windows 10, version 1709. This feature allows Windows Defender Antivirus to block a suspicious file for up to 60 seconds, and scan it in the cloud to make sure it's safe. Value type is integer, range is 0 - 50. This feature depends on three other MAPS settings the must all be enabled- 'Configure the 'Block at First Sight' feature; 'Join Microsoft MAPS'; 'Send file samples when further analysis is required'. Valid values 0 to 50
     * @param int|null $value Value to set for the defenderCloudExtendedTimeoutInSeconds property.
    */
    public function setDefenderCloudExtendedTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('defenderCloudExtendedTimeoutInSeconds', $value);
    }

    /**
     * Sets the defenderDaysBeforeDeletingQuarantinedMalware property value. Time period (in days) that quarantine items will be stored on the system. Valid values 0 to 90
     * @param int|null $value Value to set for the defenderDaysBeforeDeletingQuarantinedMalware property.
    */
    public function setDefenderDaysBeforeDeletingQuarantinedMalware(?int $value): void {
        $this->getBackingStore()->set('defenderDaysBeforeDeletingQuarantinedMalware', $value);
    }

    /**
     * Sets the defenderDetectedMalwareActions property value. Allows an administrator to specify any valid threat severity levels and the corresponding default action ID to take.
     * @param DefenderDetectedMalwareActions|null $value Value to set for the defenderDetectedMalwareActions property.
    */
    public function setDefenderDetectedMalwareActions(?DefenderDetectedMalwareActions $value): void {
        $this->getBackingStore()->set('defenderDetectedMalwareActions', $value);
    }

    /**
     * Sets the defenderDisableBehaviorMonitoring property value. Allows or disallows Windows Defender Behavior Monitoring functionality.
     * @param bool|null $value Value to set for the defenderDisableBehaviorMonitoring property.
    */
    public function setDefenderDisableBehaviorMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableBehaviorMonitoring', $value);
    }

    /**
     * Sets the defenderDisableCatchupFullScan property value. This policy setting allows you to configure catch-up scans for scheduled full scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @param bool|null $value Value to set for the defenderDisableCatchupFullScan property.
    */
    public function setDefenderDisableCatchupFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableCatchupFullScan', $value);
    }

    /**
     * Sets the defenderDisableCatchupQuickScan property value. This policy setting allows you to configure catch-up scans for scheduled quick scans. A catch-up scan is a scan that is initiated because a regularly scheduled scan was missed. Usually these scheduled scans are missed because the computer was turned off at the scheduled time.
     * @param bool|null $value Value to set for the defenderDisableCatchupQuickScan property.
    */
    public function setDefenderDisableCatchupQuickScan(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableCatchupQuickScan', $value);
    }

    /**
     * Sets the defenderDisableCloudProtection property value. To best protect your PC, Windows Defender will send information to Microsoft about any problems it finds. Microsoft will analyze that information, learn more about problems affecting you and other customers, and offer improved solutions.
     * @param bool|null $value Value to set for the defenderDisableCloudProtection property.
    */
    public function setDefenderDisableCloudProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableCloudProtection', $value);
    }

    /**
     * Sets the defenderDisableIntrusionPreventionSystem property value. Allows or disallows Windows Defender Intrusion Prevention functionality.
     * @param bool|null $value Value to set for the defenderDisableIntrusionPreventionSystem property.
    */
    public function setDefenderDisableIntrusionPreventionSystem(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableIntrusionPreventionSystem', $value);
    }

    /**
     * Sets the defenderDisableOnAccessProtection property value. Allows or disallows Windows Defender On Access Protection functionality.
     * @param bool|null $value Value to set for the defenderDisableOnAccessProtection property.
    */
    public function setDefenderDisableOnAccessProtection(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableOnAccessProtection', $value);
    }

    /**
     * Sets the defenderDisableRealTimeMonitoring property value. Allows or disallows Windows Defender Realtime Monitoring functionality.
     * @param bool|null $value Value to set for the defenderDisableRealTimeMonitoring property.
    */
    public function setDefenderDisableRealTimeMonitoring(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableRealTimeMonitoring', $value);
    }

    /**
     * Sets the defenderDisableScanArchiveFiles property value. Allows or disallows scanning of archives.
     * @param bool|null $value Value to set for the defenderDisableScanArchiveFiles property.
    */
    public function setDefenderDisableScanArchiveFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableScanArchiveFiles', $value);
    }

    /**
     * Sets the defenderDisableScanDownloads property value. Allows or disallows Windows Defender IOAVP Protection functionality.
     * @param bool|null $value Value to set for the defenderDisableScanDownloads property.
    */
    public function setDefenderDisableScanDownloads(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableScanDownloads', $value);
    }

    /**
     * Sets the defenderDisableScanNetworkFiles property value. Allows or disallows a scanning of network files.
     * @param bool|null $value Value to set for the defenderDisableScanNetworkFiles property.
    */
    public function setDefenderDisableScanNetworkFiles(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableScanNetworkFiles', $value);
    }

    /**
     * Sets the defenderDisableScanRemovableDrivesDuringFullScan property value. Allows or disallows a full scan of removable drives. During a quick scan, removable drives may still be scanned.
     * @param bool|null $value Value to set for the defenderDisableScanRemovableDrivesDuringFullScan property.
    */
    public function setDefenderDisableScanRemovableDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableScanRemovableDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderDisableScanScriptsLoadedInInternetExplorer property value. Allows or disallows Windows Defender Script Scanning functionality.
     * @param bool|null $value Value to set for the defenderDisableScanScriptsLoadedInInternetExplorer property.
    */
    public function setDefenderDisableScanScriptsLoadedInInternetExplorer(?bool $value): void {
        $this->getBackingStore()->set('defenderDisableScanScriptsLoadedInInternetExplorer', $value);
    }

    /**
     * Sets the defenderEmailContentExecution property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderEmailContentExecution property.
    */
    public function setDefenderEmailContentExecution(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderEmailContentExecution', $value);
    }

    /**
     * Sets the defenderEmailContentExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderEmailContentExecutionType property.
    */
    public function setDefenderEmailContentExecutionType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderEmailContentExecutionType', $value);
    }

    /**
     * Sets the defenderEnableLowCpuPriority property value. This policy setting allows you to enable or disable low CPU priority for scheduled scans.
     * @param bool|null $value Value to set for the defenderEnableLowCpuPriority property.
    */
    public function setDefenderEnableLowCpuPriority(?bool $value): void {
        $this->getBackingStore()->set('defenderEnableLowCpuPriority', $value);
    }

    /**
     * Sets the defenderEnableScanIncomingMail property value. Allows or disallows scanning of email.
     * @param bool|null $value Value to set for the defenderEnableScanIncomingMail property.
    */
    public function setDefenderEnableScanIncomingMail(?bool $value): void {
        $this->getBackingStore()->set('defenderEnableScanIncomingMail', $value);
    }

    /**
     * Sets the defenderEnableScanMappedNetworkDrivesDuringFullScan property value. Allows or disallows a full scan of mapped network drives.
     * @param bool|null $value Value to set for the defenderEnableScanMappedNetworkDrivesDuringFullScan property.
    */
    public function setDefenderEnableScanMappedNetworkDrivesDuringFullScan(?bool $value): void {
        $this->getBackingStore()->set('defenderEnableScanMappedNetworkDrivesDuringFullScan', $value);
    }

    /**
     * Sets the defenderExploitProtectionXml property value. Xml content containing information regarding exploit protection details.
     * @param StreamInterface|null $value Value to set for the defenderExploitProtectionXml property.
    */
    public function setDefenderExploitProtectionXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('defenderExploitProtectionXml', $value);
    }

    /**
     * Sets the defenderExploitProtectionXmlFileName property value. Name of the file from which DefenderExploitProtectionXml was obtained.
     * @param string|null $value Value to set for the defenderExploitProtectionXmlFileName property.
    */
    public function setDefenderExploitProtectionXmlFileName(?string $value): void {
        $this->getBackingStore()->set('defenderExploitProtectionXmlFileName', $value);
    }

    /**
     * Sets the defenderFileExtensionsToExclude property value. File extensions to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderFileExtensionsToExclude property.
    */
    public function setDefenderFileExtensionsToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFileExtensionsToExclude', $value);
    }

    /**
     * Sets the defenderFilesAndFoldersToExclude property value. Files and folder to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderFilesAndFoldersToExclude property.
    */
    public function setDefenderFilesAndFoldersToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderFilesAndFoldersToExclude', $value);
    }

    /**
     * Sets the defenderGuardedFoldersAllowedAppPaths property value. List of paths to exe that are allowed to access protected folders
     * @param array<string>|null $value Value to set for the defenderGuardedFoldersAllowedAppPaths property.
    */
    public function setDefenderGuardedFoldersAllowedAppPaths(?array $value): void {
        $this->getBackingStore()->set('defenderGuardedFoldersAllowedAppPaths', $value);
    }

    /**
     * Sets the defenderGuardMyFoldersType property value. Possible values of Folder Protection
     * @param FolderProtectionType|null $value Value to set for the defenderGuardMyFoldersType property.
    */
    public function setDefenderGuardMyFoldersType(?FolderProtectionType $value): void {
        $this->getBackingStore()->set('defenderGuardMyFoldersType', $value);
    }

    /**
     * Sets the defenderNetworkProtectionType property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderNetworkProtectionType property.
    */
    public function setDefenderNetworkProtectionType(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderNetworkProtectionType', $value);
    }

    /**
     * Sets the defenderOfficeAppsExecutableContentCreationOrLaunch property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsExecutableContentCreationOrLaunch property.
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunch(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsExecutableContentCreationOrLaunch', $value);
    }

    /**
     * Sets the defenderOfficeAppsExecutableContentCreationOrLaunchType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsExecutableContentCreationOrLaunchType property.
    */
    public function setDefenderOfficeAppsExecutableContentCreationOrLaunchType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsExecutableContentCreationOrLaunchType', $value);
    }

    /**
     * Sets the defenderOfficeAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsLaunchChildProcess property.
    */
    public function setDefenderOfficeAppsLaunchChildProcess(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsLaunchChildProcess', $value);
    }

    /**
     * Sets the defenderOfficeAppsLaunchChildProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsLaunchChildProcessType property.
    */
    public function setDefenderOfficeAppsLaunchChildProcessType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsLaunchChildProcessType', $value);
    }

    /**
     * Sets the defenderOfficeAppsOtherProcessInjection property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderOfficeAppsOtherProcessInjection property.
    */
    public function setDefenderOfficeAppsOtherProcessInjection(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsOtherProcessInjection', $value);
    }

    /**
     * Sets the defenderOfficeAppsOtherProcessInjectionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeAppsOtherProcessInjectionType property.
    */
    public function setDefenderOfficeAppsOtherProcessInjectionType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderOfficeAppsOtherProcessInjectionType', $value);
    }

    /**
     * Sets the defenderOfficeCommunicationAppsLaunchChildProcess property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderOfficeCommunicationAppsLaunchChildProcess property.
    */
    public function setDefenderOfficeCommunicationAppsLaunchChildProcess(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderOfficeCommunicationAppsLaunchChildProcess', $value);
    }

    /**
     * Sets the defenderOfficeMacroCodeAllowWin32Imports property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderOfficeMacroCodeAllowWin32Imports property.
    */
    public function setDefenderOfficeMacroCodeAllowWin32Imports(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderOfficeMacroCodeAllowWin32Imports', $value);
    }

    /**
     * Sets the defenderOfficeMacroCodeAllowWin32ImportsType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderOfficeMacroCodeAllowWin32ImportsType property.
    */
    public function setDefenderOfficeMacroCodeAllowWin32ImportsType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderOfficeMacroCodeAllowWin32ImportsType', $value);
    }

    /**
     * Sets the defenderPotentiallyUnwantedAppAction property value. Added in Windows 10, version 1607. Specifies the level of detection for potentially unwanted applications (PUAs). Windows Defender alerts you when potentially unwanted software is being downloaded or attempts to install itself on your computer. Possible values are: userDefined, enable, auditMode, warn, notConfigured.
     * @param DefenderProtectionType|null $value Value to set for the defenderPotentiallyUnwantedAppAction property.
    */
    public function setDefenderPotentiallyUnwantedAppAction(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderPotentiallyUnwantedAppAction', $value);
    }

    /**
     * Sets the defenderPreventCredentialStealingType property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderPreventCredentialStealingType property.
    */
    public function setDefenderPreventCredentialStealingType(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderPreventCredentialStealingType', $value);
    }

    /**
     * Sets the defenderProcessCreation property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderProcessCreation property.
    */
    public function setDefenderProcessCreation(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderProcessCreation', $value);
    }

    /**
     * Sets the defenderProcessCreationType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderProcessCreationType property.
    */
    public function setDefenderProcessCreationType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderProcessCreationType', $value);
    }

    /**
     * Sets the defenderProcessesToExclude property value. Processes to exclude from scans and real time protection.
     * @param array<string>|null $value Value to set for the defenderProcessesToExclude property.
    */
    public function setDefenderProcessesToExclude(?array $value): void {
        $this->getBackingStore()->set('defenderProcessesToExclude', $value);
    }

    /**
     * Sets the defenderScanDirection property value. Controls which sets of files should be monitored. Possible values are: monitorAllFiles, monitorIncomingFilesOnly, monitorOutgoingFilesOnly.
     * @param DefenderRealtimeScanDirection|null $value Value to set for the defenderScanDirection property.
    */
    public function setDefenderScanDirection(?DefenderRealtimeScanDirection $value): void {
        $this->getBackingStore()->set('defenderScanDirection', $value);
    }

    /**
     * Sets the defenderScanMaxCpuPercentage property value. Represents the average CPU load factor for the Windows Defender scan (in percent). The default value is 50. Valid values 0 to 100
     * @param int|null $value Value to set for the defenderScanMaxCpuPercentage property.
    */
    public function setDefenderScanMaxCpuPercentage(?int $value): void {
        $this->getBackingStore()->set('defenderScanMaxCpuPercentage', $value);
    }

    /**
     * Sets the defenderScanType property value. Selects whether to perform a quick scan or full scan. Possible values are: userDefined, disabled, quick, full.
     * @param DefenderScanType|null $value Value to set for the defenderScanType property.
    */
    public function setDefenderScanType(?DefenderScanType $value): void {
        $this->getBackingStore()->set('defenderScanType', $value);
    }

    /**
     * Sets the defenderScheduledQuickScanTime property value. Selects the time of day that the Windows Defender quick scan should run. For example, a value of 0=12:00AM, a value of 60=1:00AM, a value of 120=2:00, and so on, up to a value of 1380=11:00PM. The default value is 120
     * @param Time|null $value Value to set for the defenderScheduledQuickScanTime property.
    */
    public function setDefenderScheduledQuickScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledQuickScanTime', $value);
    }

    /**
     * Sets the defenderScheduledScanDay property value. Selects the day that the Windows Defender scan should run. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
     * @param WeeklySchedule|null $value Value to set for the defenderScheduledScanDay property.
    */
    public function setDefenderScheduledScanDay(?WeeklySchedule $value): void {
        $this->getBackingStore()->set('defenderScheduledScanDay', $value);
    }

    /**
     * Sets the defenderScheduledScanTime property value. Selects the time of day that the Windows Defender scan should run.
     * @param Time|null $value Value to set for the defenderScheduledScanTime property.
    */
    public function setDefenderScheduledScanTime(?Time $value): void {
        $this->getBackingStore()->set('defenderScheduledScanTime', $value);
    }

    /**
     * Sets the defenderScriptDownloadedPayloadExecution property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderScriptDownloadedPayloadExecution property.
    */
    public function setDefenderScriptDownloadedPayloadExecution(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderScriptDownloadedPayloadExecution', $value);
    }

    /**
     * Sets the defenderScriptDownloadedPayloadExecutionType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderScriptDownloadedPayloadExecutionType property.
    */
    public function setDefenderScriptDownloadedPayloadExecutionType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderScriptDownloadedPayloadExecutionType', $value);
    }

    /**
     * Sets the defenderScriptObfuscatedMacroCode property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderScriptObfuscatedMacroCode property.
    */
    public function setDefenderScriptObfuscatedMacroCode(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderScriptObfuscatedMacroCode', $value);
    }

    /**
     * Sets the defenderScriptObfuscatedMacroCodeType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderScriptObfuscatedMacroCodeType property.
    */
    public function setDefenderScriptObfuscatedMacroCodeType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderScriptObfuscatedMacroCodeType', $value);
    }

    /**
     * Sets the defenderSecurityCenterBlockExploitProtectionOverride property value. Indicates whether or not to block user from overriding Exploit Protection settings.
     * @param bool|null $value Value to set for the defenderSecurityCenterBlockExploitProtectionOverride property.
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterBlockExploitProtectionOverride', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableAccountUI property value. Used to disable the display of the account protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableAccountUI property.
    */
    public function setDefenderSecurityCenterDisableAccountUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableAccountUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableAppBrowserUI property value. Used to disable the display of the app and browser protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableAppBrowserUI property.
    */
    public function setDefenderSecurityCenterDisableAppBrowserUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableAppBrowserUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableClearTpmUI property value. Used to disable the display of the Clear TPM button.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableClearTpmUI property.
    */
    public function setDefenderSecurityCenterDisableClearTpmUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableClearTpmUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableFamilyUI property value. Used to disable the display of the family options area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableFamilyUI property.
    */
    public function setDefenderSecurityCenterDisableFamilyUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableFamilyUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableHardwareUI property value. Used to disable the display of the hardware protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableHardwareUI property.
    */
    public function setDefenderSecurityCenterDisableHardwareUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableHardwareUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableHealthUI property value. Used to disable the display of the device performance and health area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableHealthUI property.
    */
    public function setDefenderSecurityCenterDisableHealthUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableHealthUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableNetworkUI property value. Used to disable the display of the firewall and network protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableNetworkUI property.
    */
    public function setDefenderSecurityCenterDisableNetworkUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableNetworkUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableNotificationAreaUI property value. Used to disable the display of the notification area control. The user needs to either sign out and sign in or reboot the computer for this setting to take effect.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableNotificationAreaUI property.
    */
    public function setDefenderSecurityCenterDisableNotificationAreaUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableNotificationAreaUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableRansomwareUI property value. Used to disable the display of the ransomware protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableRansomwareUI property.
    */
    public function setDefenderSecurityCenterDisableRansomwareUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableRansomwareUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableSecureBootUI property value. Used to disable the display of the secure boot area under Device security.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableSecureBootUI property.
    */
    public function setDefenderSecurityCenterDisableSecureBootUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableSecureBootUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableTroubleshootingUI property value. Used to disable the display of the security process troubleshooting under Device security.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableTroubleshootingUI property.
    */
    public function setDefenderSecurityCenterDisableTroubleshootingUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableTroubleshootingUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableVirusUI property value. Used to disable the display of the virus and threat protection area.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableVirusUI property.
    */
    public function setDefenderSecurityCenterDisableVirusUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableVirusUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property value. Used to disable the display of update TPM Firmware when a vulnerable firmware is detected.
     * @param bool|null $value Value to set for the defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI property.
    */
    public function setDefenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI(?bool $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterDisableVulnerableTpmFirmwareUpdateUI', $value);
    }

    /**
     * Sets the defenderSecurityCenterHelpEmail property value. The email address that is displayed to users.
     * @param string|null $value Value to set for the defenderSecurityCenterHelpEmail property.
    */
    public function setDefenderSecurityCenterHelpEmail(?string $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterHelpEmail', $value);
    }

    /**
     * Sets the defenderSecurityCenterHelpPhone property value. The phone number or Skype ID that is displayed to users.
     * @param string|null $value Value to set for the defenderSecurityCenterHelpPhone property.
    */
    public function setDefenderSecurityCenterHelpPhone(?string $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterHelpPhone', $value);
    }

    /**
     * Sets the defenderSecurityCenterHelpURL property value. The help portal URL this is displayed to users.
     * @param string|null $value Value to set for the defenderSecurityCenterHelpURL property.
    */
    public function setDefenderSecurityCenterHelpURL(?string $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterHelpURL', $value);
    }

    /**
     * Sets the defenderSecurityCenterITContactDisplay property value. Possible values for defenderSecurityCenterITContactDisplay
     * @param DefenderSecurityCenterITContactDisplayType|null $value Value to set for the defenderSecurityCenterITContactDisplay property.
    */
    public function setDefenderSecurityCenterITContactDisplay(?DefenderSecurityCenterITContactDisplayType $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterITContactDisplay', $value);
    }

    /**
     * Sets the defenderSecurityCenterNotificationsFromApp property value. Possible values for defenderSecurityCenterNotificationsFromApp
     * @param DefenderSecurityCenterNotificationsFromAppType|null $value Value to set for the defenderSecurityCenterNotificationsFromApp property.
    */
    public function setDefenderSecurityCenterNotificationsFromApp(?DefenderSecurityCenterNotificationsFromAppType $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterNotificationsFromApp', $value);
    }

    /**
     * Sets the defenderSecurityCenterOrganizationDisplayName property value. The company name that is displayed to the users.
     * @param string|null $value Value to set for the defenderSecurityCenterOrganizationDisplayName property.
    */
    public function setDefenderSecurityCenterOrganizationDisplayName(?string $value): void {
        $this->getBackingStore()->set('defenderSecurityCenterOrganizationDisplayName', $value);
    }

    /**
     * Sets the defenderSignatureUpdateIntervalInHours property value. Specifies the interval (in hours) that will be used to check for signatures, so instead of using the ScheduleDay and ScheduleTime the check for new signatures will be set according to the interval. Valid values 0 to 24
     * @param int|null $value Value to set for the defenderSignatureUpdateIntervalInHours property.
    */
    public function setDefenderSignatureUpdateIntervalInHours(?int $value): void {
        $this->getBackingStore()->set('defenderSignatureUpdateIntervalInHours', $value);
    }

    /**
     * Sets the defenderSubmitSamplesConsentType property value. Checks for the user consent level in Windows Defender to send data. Possible values are: sendSafeSamplesAutomatically, alwaysPrompt, neverSend, sendAllSamplesAutomatically.
     * @param DefenderSubmitSamplesConsentType|null $value Value to set for the defenderSubmitSamplesConsentType property.
    */
    public function setDefenderSubmitSamplesConsentType(?DefenderSubmitSamplesConsentType $value): void {
        $this->getBackingStore()->set('defenderSubmitSamplesConsentType', $value);
    }

    /**
     * Sets the defenderUntrustedExecutable property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderUntrustedExecutable property.
    */
    public function setDefenderUntrustedExecutable(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderUntrustedExecutable', $value);
    }

    /**
     * Sets the defenderUntrustedExecutableType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderUntrustedExecutableType property.
    */
    public function setDefenderUntrustedExecutableType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderUntrustedExecutableType', $value);
    }

    /**
     * Sets the defenderUntrustedUSBProcess property value. Possible values of Defender PUA Protection
     * @param DefenderProtectionType|null $value Value to set for the defenderUntrustedUSBProcess property.
    */
    public function setDefenderUntrustedUSBProcess(?DefenderProtectionType $value): void {
        $this->getBackingStore()->set('defenderUntrustedUSBProcess', $value);
    }

    /**
     * Sets the defenderUntrustedUSBProcessType property value. Possible values of Defender Attack Surface Reduction Rules
     * @param DefenderAttackSurfaceType|null $value Value to set for the defenderUntrustedUSBProcessType property.
    */
    public function setDefenderUntrustedUSBProcessType(?DefenderAttackSurfaceType $value): void {
        $this->getBackingStore()->set('defenderUntrustedUSBProcessType', $value);
    }

    /**
     * Sets the deviceGuardEnableSecureBootWithDMA property value. This property will be deprecated in May 2019 and will be replaced with property DeviceGuardSecureBootWithDMA. Specifies whether Platform Security Level is enabled at next reboot.
     * @param bool|null $value Value to set for the deviceGuardEnableSecureBootWithDMA property.
    */
    public function setDeviceGuardEnableSecureBootWithDMA(?bool $value): void {
        $this->getBackingStore()->set('deviceGuardEnableSecureBootWithDMA', $value);
    }

    /**
     * Sets the deviceGuardEnableVirtualizationBasedSecurity property value. Turns On Virtualization Based Security(VBS).
     * @param bool|null $value Value to set for the deviceGuardEnableVirtualizationBasedSecurity property.
    */
    public function setDeviceGuardEnableVirtualizationBasedSecurity(?bool $value): void {
        $this->getBackingStore()->set('deviceGuardEnableVirtualizationBasedSecurity', $value);
    }

    /**
     * Sets the deviceGuardLaunchSystemGuard property value. Possible values of a property
     * @param Enablement|null $value Value to set for the deviceGuardLaunchSystemGuard property.
    */
    public function setDeviceGuardLaunchSystemGuard(?Enablement $value): void {
        $this->getBackingStore()->set('deviceGuardLaunchSystemGuard', $value);
    }

    /**
     * Sets the deviceGuardLocalSystemAuthorityCredentialGuardSettings property value. Possible values of Credential Guard settings.
     * @param DeviceGuardLocalSystemAuthorityCredentialGuardType|null $value Value to set for the deviceGuardLocalSystemAuthorityCredentialGuardSettings property.
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardSettings(?DeviceGuardLocalSystemAuthorityCredentialGuardType $value): void {
        $this->getBackingStore()->set('deviceGuardLocalSystemAuthorityCredentialGuardSettings', $value);
    }

    /**
     * Sets the deviceGuardSecureBootWithDMA property value. Possible values of Secure Boot with DMA
     * @param SecureBootWithDMAType|null $value Value to set for the deviceGuardSecureBootWithDMA property.
    */
    public function setDeviceGuardSecureBootWithDMA(?SecureBootWithDMAType $value): void {
        $this->getBackingStore()->set('deviceGuardSecureBootWithDMA', $value);
    }

    /**
     * Sets the dmaGuardDeviceEnumerationPolicy property value. Possible values of the DmaGuardDeviceEnumerationPolicy.
     * @param DmaGuardDeviceEnumerationPolicyType|null $value Value to set for the dmaGuardDeviceEnumerationPolicy property.
    */
    public function setDmaGuardDeviceEnumerationPolicy(?DmaGuardDeviceEnumerationPolicyType $value): void {
        $this->getBackingStore()->set('dmaGuardDeviceEnumerationPolicy', $value);
    }

    /**
     * Sets the firewallBlockStatefulFTP property value. Blocks stateful FTP connections to the device
     * @param bool|null $value Value to set for the firewallBlockStatefulFTP property.
    */
    public function setFirewallBlockStatefulFTP(?bool $value): void {
        $this->getBackingStore()->set('firewallBlockStatefulFTP', $value);
    }

    /**
     * Sets the firewallCertificateRevocationListCheckMethod property value. Possible values for firewallCertificateRevocationListCheckMethod
     * @param FirewallCertificateRevocationListCheckMethodType|null $value Value to set for the firewallCertificateRevocationListCheckMethod property.
    */
    public function setFirewallCertificateRevocationListCheckMethod(?FirewallCertificateRevocationListCheckMethodType $value): void {
        $this->getBackingStore()->set('firewallCertificateRevocationListCheckMethod', $value);
    }

    /**
     * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds property value. Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
     * @param int|null $value Value to set for the firewallIdleTimeoutForSecurityAssociationInSeconds property.
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds(?int $value): void {
        $this->getBackingStore()->set('firewallIdleTimeoutForSecurityAssociationInSeconds', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowDHCP property value. Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
     * @param bool|null $value Value to set for the firewallIPSecExemptionsAllowDHCP property.
    */
    public function setFirewallIPSecExemptionsAllowDHCP(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowDHCP', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowICMP property value. Configures IPSec exemptions to allow ICMP
     * @param bool|null $value Value to set for the firewallIPSecExemptionsAllowICMP property.
    */
    public function setFirewallIPSecExemptionsAllowICMP(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowICMP', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowNeighborDiscovery property value. Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
     * @param bool|null $value Value to set for the firewallIPSecExemptionsAllowNeighborDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowNeighborDiscovery', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsAllowRouterDiscovery property value. Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
     * @param bool|null $value Value to set for the firewallIPSecExemptionsAllowRouterDiscovery property.
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsAllowRouterDiscovery', $value);
    }

    /**
     * Sets the firewallIPSecExemptionsNone property value. Configures IPSec exemptions to no exemptions
     * @param bool|null $value Value to set for the firewallIPSecExemptionsNone property.
    */
    public function setFirewallIPSecExemptionsNone(?bool $value): void {
        $this->getBackingStore()->set('firewallIPSecExemptionsNone', $value);
    }

    /**
     * Sets the firewallMergeKeyingModuleSettings property value. If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
     * @param bool|null $value Value to set for the firewallMergeKeyingModuleSettings property.
    */
    public function setFirewallMergeKeyingModuleSettings(?bool $value): void {
        $this->getBackingStore()->set('firewallMergeKeyingModuleSettings', $value);
    }

    /**
     * Sets the firewallPacketQueueingMethod property value. Possible values for firewallPacketQueueingMethod
     * @param FirewallPacketQueueingMethodType|null $value Value to set for the firewallPacketQueueingMethod property.
    */
    public function setFirewallPacketQueueingMethod(?FirewallPacketQueueingMethodType $value): void {
        $this->getBackingStore()->set('firewallPacketQueueingMethod', $value);
    }

    /**
     * Sets the firewallPreSharedKeyEncodingMethod property value. Possible values for firewallPreSharedKeyEncodingMethod
     * @param FirewallPreSharedKeyEncodingMethodType|null $value Value to set for the firewallPreSharedKeyEncodingMethod property.
    */
    public function setFirewallPreSharedKeyEncodingMethod(?FirewallPreSharedKeyEncodingMethodType $value): void {
        $this->getBackingStore()->set('firewallPreSharedKeyEncodingMethod', $value);
    }

    /**
     * Sets the firewallProfileDomain property value. Configures the firewall profile settings for domain networks
     * @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfileDomain property.
    */
    public function setFirewallProfileDomain(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfileDomain', $value);
    }

    /**
     * Sets the firewallProfilePrivate property value. Configures the firewall profile settings for private networks
     * @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePrivate property.
    */
    public function setFirewallProfilePrivate(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfilePrivate', $value);
    }

    /**
     * Sets the firewallProfilePublic property value. Configures the firewall profile settings for public networks
     * @param WindowsFirewallNetworkProfile|null $value Value to set for the firewallProfilePublic property.
    */
    public function setFirewallProfilePublic(?WindowsFirewallNetworkProfile $value): void {
        $this->getBackingStore()->set('firewallProfilePublic', $value);
    }

    /**
     * Sets the firewallRules property value. Configures the firewall rule settings. This collection can contain a maximum of 150 elements.
     * @param array<WindowsFirewallRule>|null $value Value to set for the firewallRules property.
    */
    public function setFirewallRules(?array $value): void {
        $this->getBackingStore()->set('firewallRules', $value);
    }

    /**
     * Sets the lanManagerAuthenticationLevel property value. Possible values for LanManagerAuthenticationLevel
     * @param LanManagerAuthenticationLevel|null $value Value to set for the lanManagerAuthenticationLevel property.
    */
    public function setLanManagerAuthenticationLevel(?LanManagerAuthenticationLevel $value): void {
        $this->getBackingStore()->set('lanManagerAuthenticationLevel', $value);
    }

    /**
     * Sets the lanManagerWorkstationDisableInsecureGuestLogons property value. If enabled,the SMB client will allow insecure guest logons. If not configured, the SMB client will reject insecure guest logons.
     * @param bool|null $value Value to set for the lanManagerWorkstationDisableInsecureGuestLogons property.
    */
    public function setLanManagerWorkstationDisableInsecureGuestLogons(?bool $value): void {
        $this->getBackingStore()->set('lanManagerWorkstationDisableInsecureGuestLogons', $value);
    }

    /**
     * Sets the localSecurityOptionsAdministratorAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Administrator'.
     * @param string|null $value Value to set for the localSecurityOptionsAdministratorAccountName property.
    */
    public function setLocalSecurityOptionsAdministratorAccountName(?string $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAdministratorAccountName', $value);
    }

    /**
     * Sets the localSecurityOptionsAdministratorElevationPromptBehavior property value. Possible values for LocalSecurityOptionsAdministratorElevationPromptBehavior
     * @param LocalSecurityOptionsAdministratorElevationPromptBehaviorType|null $value Value to set for the localSecurityOptionsAdministratorElevationPromptBehavior property.
    */
    public function setLocalSecurityOptionsAdministratorElevationPromptBehavior(?LocalSecurityOptionsAdministratorElevationPromptBehaviorType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAdministratorElevationPromptBehavior', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property value. This security setting determines whether to allows anonymous users to perform certain activities, such as enumerating the names of domain accounts and network shares.
     * @param bool|null $value Value to set for the localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares property.
    */
    public function setLocalSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowAnonymousEnumerationOfSAMAccountsAndShares', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowPKU2UAuthenticationRequests property value. Block PKU2U authentication requests to this device to use online identities.
     * @param bool|null $value Value to set for the localSecurityOptionsAllowPKU2UAuthenticationRequests property.
    */
    public function setLocalSecurityOptionsAllowPKU2UAuthenticationRequests(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowPKU2UAuthenticationRequests', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property value. Edit the default Security Descriptor Definition Language string to allow or deny users and groups to make remote calls to the SAM.
     * @param string|null $value Value to set for the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager property.
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager(?string $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManager', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property value. UI helper boolean for LocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManager entity
     * @param bool|null $value Value to set for the localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool property.
    */
    public function setLocalSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowRemoteCallsToSecurityAccountsManagerHelperBool', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property value. This security setting determines whether a computer can be shut down without having to log on to Windows.
     * @param bool|null $value Value to set for the localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn property.
    */
    public function setLocalSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowSystemToBeShutDownWithoutHavingToLogOn', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowUIAccessApplicationElevation property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.
     * @param bool|null $value Value to set for the localSecurityOptionsAllowUIAccessApplicationElevation property.
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationElevation(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowUIAccessApplicationElevation', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property value. Allow UIAccess apps to prompt for elevation without using the secure desktop.Default is enabled
     * @param bool|null $value Value to set for the localSecurityOptionsAllowUIAccessApplicationsForSecureLocations property.
    */
    public function setLocalSecurityOptionsAllowUIAccessApplicationsForSecureLocations(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowUIAccessApplicationsForSecureLocations', $value);
    }

    /**
     * Sets the localSecurityOptionsAllowUndockWithoutHavingToLogon property value. Prevent a portable computer from being undocked without having to log in.
     * @param bool|null $value Value to set for the localSecurityOptionsAllowUndockWithoutHavingToLogon property.
    */
    public function setLocalSecurityOptionsAllowUndockWithoutHavingToLogon(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsAllowUndockWithoutHavingToLogon', $value);
    }

    /**
     * Sets the localSecurityOptionsBlockMicrosoftAccounts property value. Prevent users from adding new Microsoft accounts to this computer.
     * @param bool|null $value Value to set for the localSecurityOptionsBlockMicrosoftAccounts property.
    */
    public function setLocalSecurityOptionsBlockMicrosoftAccounts(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsBlockMicrosoftAccounts', $value);
    }

    /**
     * Sets the localSecurityOptionsBlockRemoteLogonWithBlankPassword property value. Enable Local accounts that are not password protected to log on from locations other than the physical device.Default is enabled
     * @param bool|null $value Value to set for the localSecurityOptionsBlockRemoteLogonWithBlankPassword property.
    */
    public function setLocalSecurityOptionsBlockRemoteLogonWithBlankPassword(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsBlockRemoteLogonWithBlankPassword', $value);
    }

    /**
     * Sets the localSecurityOptionsBlockRemoteOpticalDriveAccess property value. Enabling this settings allows only interactively logged on user to access CD-ROM media.
     * @param bool|null $value Value to set for the localSecurityOptionsBlockRemoteOpticalDriveAccess property.
    */
    public function setLocalSecurityOptionsBlockRemoteOpticalDriveAccess(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsBlockRemoteOpticalDriveAccess', $value);
    }

    /**
     * Sets the localSecurityOptionsBlockUsersInstallingPrinterDrivers property value. Restrict installing printer drivers as part of connecting to a shared printer to admins only.
     * @param bool|null $value Value to set for the localSecurityOptionsBlockUsersInstallingPrinterDrivers property.
    */
    public function setLocalSecurityOptionsBlockUsersInstallingPrinterDrivers(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsBlockUsersInstallingPrinterDrivers', $value);
    }

    /**
     * Sets the localSecurityOptionsClearVirtualMemoryPageFile property value. This security setting determines whether the virtual memory pagefile is cleared when the system is shut down.
     * @param bool|null $value Value to set for the localSecurityOptionsClearVirtualMemoryPageFile property.
    */
    public function setLocalSecurityOptionsClearVirtualMemoryPageFile(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsClearVirtualMemoryPageFile', $value);
    }

    /**
     * Sets the localSecurityOptionsClientDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB client component.
     * @param bool|null $value Value to set for the localSecurityOptionsClientDigitallySignCommunicationsAlways property.
    */
    public function setLocalSecurityOptionsClientDigitallySignCommunicationsAlways(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsClientDigitallySignCommunicationsAlways', $value);
    }

    /**
     * Sets the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property value. If this security setting is enabled, the Server Message Block (SMB) redirector is allowed to send plaintext passwords to non-Microsoft SMB servers that do not support password encryption during authentication.
     * @param bool|null $value Value to set for the localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers property.
    */
    public function setLocalSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsClientSendUnencryptedPasswordToThirdPartySMBServers', $value);
    }

    /**
     * Sets the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property value. App installations requiring elevated privileges will prompt for admin credentials.Default is enabled
     * @param bool|null $value Value to set for the localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation property.
    */
    public function setLocalSecurityOptionsDetectApplicationInstallationsAndPromptForElevation(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDetectApplicationInstallationsAndPromptForElevation', $value);
    }

    /**
     * Sets the localSecurityOptionsDisableAdministratorAccount property value. Determines whether the Local Administrator account is enabled or disabled.
     * @param bool|null $value Value to set for the localSecurityOptionsDisableAdministratorAccount property.
    */
    public function setLocalSecurityOptionsDisableAdministratorAccount(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDisableAdministratorAccount', $value);
    }

    /**
     * Sets the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property value. This security setting determines whether the SMB client attempts to negotiate SMB packet signing.
     * @param bool|null $value Value to set for the localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees property.
    */
    public function setLocalSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDisableClientDigitallySignCommunicationsIfServerAgrees', $value);
    }

    /**
     * Sets the localSecurityOptionsDisableGuestAccount property value. Determines if the Guest account is enabled or disabled.
     * @param bool|null $value Value to set for the localSecurityOptionsDisableGuestAccount property.
    */
    public function setLocalSecurityOptionsDisableGuestAccount(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDisableGuestAccount', $value);
    }

    /**
     * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property value. This security setting determines whether packet signing is required by the SMB server component.
     * @param bool|null $value Value to set for the localSecurityOptionsDisableServerDigitallySignCommunicationsAlways property.
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsAlways(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDisableServerDigitallySignCommunicationsAlways', $value);
    }

    /**
     * Sets the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property value. This security setting determines whether the SMB server will negotiate SMB packet signing with clients that request it.
     * @param bool|null $value Value to set for the localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees property.
    */
    public function setLocalSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDisableServerDigitallySignCommunicationsIfClientAgrees', $value);
    }

    /**
     * Sets the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property value. This security setting determines what additional permissions will be granted for anonymous connections to the computer.
     * @param bool|null $value Value to set for the localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts property.
    */
    public function setLocalSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDoNotAllowAnonymousEnumerationOfSAMAccounts', $value);
    }

    /**
     * Sets the localSecurityOptionsDoNotRequireCtrlAltDel property value. Require CTRL+ALT+DEL to be pressed before a user can log on.
     * @param bool|null $value Value to set for the localSecurityOptionsDoNotRequireCtrlAltDel property.
    */
    public function setLocalSecurityOptionsDoNotRequireCtrlAltDel(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDoNotRequireCtrlAltDel', $value);
    }

    /**
     * Sets the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property value. This security setting determines if, at the next password change, the LAN Manager (LM) hash value for the new password is stored. It’s not stored by default.
     * @param bool|null $value Value to set for the localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange property.
    */
    public function setLocalSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsDoNotStoreLANManagerHashValueOnNextPasswordChange', $value);
    }

    /**
     * Sets the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property value. Possible values for LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser
     * @param LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType|null $value Value to set for the localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser property.
    */
    public function setLocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser(?LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUser', $value);
    }

    /**
     * Sets the localSecurityOptionsGuestAccountName property value. Define a different account name to be associated with the security identifier (SID) for the account 'Guest'.
     * @param string|null $value Value to set for the localSecurityOptionsGuestAccountName property.
    */
    public function setLocalSecurityOptionsGuestAccountName(?string $value): void {
        $this->getBackingStore()->set('localSecurityOptionsGuestAccountName', $value);
    }

    /**
     * Sets the localSecurityOptionsHideLastSignedInUser property value. Do not display the username of the last person who signed in on this device.
     * @param bool|null $value Value to set for the localSecurityOptionsHideLastSignedInUser property.
    */
    public function setLocalSecurityOptionsHideLastSignedInUser(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsHideLastSignedInUser', $value);
    }

    /**
     * Sets the localSecurityOptionsHideUsernameAtSignIn property value. Do not display the username of the person signing in to this device after credentials are entered and before the device’s desktop is shown.
     * @param bool|null $value Value to set for the localSecurityOptionsHideUsernameAtSignIn property.
    */
    public function setLocalSecurityOptionsHideUsernameAtSignIn(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsHideUsernameAtSignIn', $value);
    }

    /**
     * Sets the localSecurityOptionsInformationDisplayedOnLockScreen property value. Possible values for LocalSecurityOptionsInformationDisplayedOnLockScreen
     * @param LocalSecurityOptionsInformationDisplayedOnLockScreenType|null $value Value to set for the localSecurityOptionsInformationDisplayedOnLockScreen property.
    */
    public function setLocalSecurityOptionsInformationDisplayedOnLockScreen(?LocalSecurityOptionsInformationDisplayedOnLockScreenType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsInformationDisplayedOnLockScreen', $value);
    }

    /**
     * Sets the localSecurityOptionsInformationShownOnLockScreen property value. Possible values for LocalSecurityOptionsInformationShownOnLockScreenType
     * @param LocalSecurityOptionsInformationShownOnLockScreenType|null $value Value to set for the localSecurityOptionsInformationShownOnLockScreen property.
    */
    public function setLocalSecurityOptionsInformationShownOnLockScreen(?LocalSecurityOptionsInformationShownOnLockScreenType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsInformationShownOnLockScreen', $value);
    }

    /**
     * Sets the localSecurityOptionsLogOnMessageText property value. Set message text for users attempting to log in.
     * @param string|null $value Value to set for the localSecurityOptionsLogOnMessageText property.
    */
    public function setLocalSecurityOptionsLogOnMessageText(?string $value): void {
        $this->getBackingStore()->set('localSecurityOptionsLogOnMessageText', $value);
    }

    /**
     * Sets the localSecurityOptionsLogOnMessageTitle property value. Set message title for users attempting to log in.
     * @param string|null $value Value to set for the localSecurityOptionsLogOnMessageTitle property.
    */
    public function setLocalSecurityOptionsLogOnMessageTitle(?string $value): void {
        $this->getBackingStore()->set('localSecurityOptionsLogOnMessageTitle', $value);
    }

    /**
     * Sets the localSecurityOptionsMachineInactivityLimit property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @param int|null $value Value to set for the localSecurityOptionsMachineInactivityLimit property.
    */
    public function setLocalSecurityOptionsMachineInactivityLimit(?int $value): void {
        $this->getBackingStore()->set('localSecurityOptionsMachineInactivityLimit', $value);
    }

    /**
     * Sets the localSecurityOptionsMachineInactivityLimitInMinutes property value. Define maximum minutes of inactivity on the interactive desktop’s login screen until the screen saver runs. Valid values 0 to 9999
     * @param int|null $value Value to set for the localSecurityOptionsMachineInactivityLimitInMinutes property.
    */
    public function setLocalSecurityOptionsMachineInactivityLimitInMinutes(?int $value): void {
        $this->getBackingStore()->set('localSecurityOptionsMachineInactivityLimitInMinutes', $value);
    }

    /**
     * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @param LocalSecurityOptionsMinimumSessionSecurity|null $value Value to set for the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients property.
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients(?LocalSecurityOptionsMinimumSessionSecurity $value): void {
        $this->getBackingStore()->set('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedClients', $value);
    }

    /**
     * Sets the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property value. Possible values for LocalSecurityOptionsMinimumSessionSecurity
     * @param LocalSecurityOptionsMinimumSessionSecurity|null $value Value to set for the localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers property.
    */
    public function setLocalSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers(?LocalSecurityOptionsMinimumSessionSecurity $value): void {
        $this->getBackingStore()->set('localSecurityOptionsMinimumSessionSecurityForNtlmSspBasedServers', $value);
    }

    /**
     * Sets the localSecurityOptionsOnlyElevateSignedExecutables property value. Enforce PKI certification path validation for a given executable file before it is permitted to run.
     * @param bool|null $value Value to set for the localSecurityOptionsOnlyElevateSignedExecutables property.
    */
    public function setLocalSecurityOptionsOnlyElevateSignedExecutables(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsOnlyElevateSignedExecutables', $value);
    }

    /**
     * Sets the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property value. By default, this security setting restricts anonymous access to shares and pipes to the settings for named pipes that can be accessed anonymously and Shares that can be accessed anonymously
     * @param bool|null $value Value to set for the localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares property.
    */
    public function setLocalSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsRestrictAnonymousAccessToNamedPipesAndShares', $value);
    }

    /**
     * Sets the localSecurityOptionsSmartCardRemovalBehavior property value. Possible values for LocalSecurityOptionsSmartCardRemovalBehaviorType
     * @param LocalSecurityOptionsSmartCardRemovalBehaviorType|null $value Value to set for the localSecurityOptionsSmartCardRemovalBehavior property.
    */
    public function setLocalSecurityOptionsSmartCardRemovalBehavior(?LocalSecurityOptionsSmartCardRemovalBehaviorType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsSmartCardRemovalBehavior', $value);
    }

    /**
     * Sets the localSecurityOptionsStandardUserElevationPromptBehavior property value. Possible values for LocalSecurityOptionsStandardUserElevationPromptBehavior
     * @param LocalSecurityOptionsStandardUserElevationPromptBehaviorType|null $value Value to set for the localSecurityOptionsStandardUserElevationPromptBehavior property.
    */
    public function setLocalSecurityOptionsStandardUserElevationPromptBehavior(?LocalSecurityOptionsStandardUserElevationPromptBehaviorType $value): void {
        $this->getBackingStore()->set('localSecurityOptionsStandardUserElevationPromptBehavior', $value);
    }

    /**
     * Sets the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property value. Enable all elevation requests to go to the interactive user's desktop rather than the secure desktop. Prompt behavior policy settings for admins and standard users are used.
     * @param bool|null $value Value to set for the localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation property.
    */
    public function setLocalSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsSwitchToSecureDesktopWhenPromptingForElevation', $value);
    }

    /**
     * Sets the localSecurityOptionsUseAdminApprovalMode property value. Defines whether the built-in admin account uses Admin Approval Mode or runs all apps with full admin privileges.Default is enabled
     * @param bool|null $value Value to set for the localSecurityOptionsUseAdminApprovalMode property.
    */
    public function setLocalSecurityOptionsUseAdminApprovalMode(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsUseAdminApprovalMode', $value);
    }

    /**
     * Sets the localSecurityOptionsUseAdminApprovalModeForAdministrators property value. Define whether Admin Approval Mode and all UAC policy settings are enabled, default is enabled
     * @param bool|null $value Value to set for the localSecurityOptionsUseAdminApprovalModeForAdministrators property.
    */
    public function setLocalSecurityOptionsUseAdminApprovalModeForAdministrators(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsUseAdminApprovalModeForAdministrators', $value);
    }

    /**
     * Sets the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property value. Virtualize file and registry write failures to per user locations
     * @param bool|null $value Value to set for the localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations property.
    */
    public function setLocalSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations(?bool $value): void {
        $this->getBackingStore()->set('localSecurityOptionsVirtualizeFileAndRegistryWriteFailuresToPerUserLocations', $value);
    }

    /**
     * Sets the smartScreenBlockOverrideForFiles property value. Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
     * @param bool|null $value Value to set for the smartScreenBlockOverrideForFiles property.
    */
    public function setSmartScreenBlockOverrideForFiles(?bool $value): void {
        $this->getBackingStore()->set('smartScreenBlockOverrideForFiles', $value);
    }

    /**
     * Sets the smartScreenEnableInShell property value. Allows IT Admins to configure SmartScreen for Windows.
     * @param bool|null $value Value to set for the smartScreenEnableInShell property.
    */
    public function setSmartScreenEnableInShell(?bool $value): void {
        $this->getBackingStore()->set('smartScreenEnableInShell', $value);
    }

    /**
     * Sets the userRightsAccessCredentialManagerAsTrustedCaller property value. This user right is used by Credential Manager during Backup/Restore. Users' saved credentials might be compromised if this privilege is given to other entities. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsAccessCredentialManagerAsTrustedCaller property.
    */
    public function setUserRightsAccessCredentialManagerAsTrustedCaller(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsAccessCredentialManagerAsTrustedCaller', $value);
    }

    /**
     * Sets the userRightsActAsPartOfTheOperatingSystem property value. This user right allows a process to impersonate any user without authentication. The process can therefore gain access to the same local resources as that user. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsActAsPartOfTheOperatingSystem property.
    */
    public function setUserRightsActAsPartOfTheOperatingSystem(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsActAsPartOfTheOperatingSystem', $value);
    }

    /**
     * Sets the userRightsAllowAccessFromNetwork property value. This user right determines which users and groups are allowed to connect to the computer over the network. State Allowed is supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsAllowAccessFromNetwork property.
    */
    public function setUserRightsAllowAccessFromNetwork(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsAllowAccessFromNetwork', $value);
    }

    /**
     * Sets the userRightsBackupData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when backing up files and directories. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsBackupData property.
    */
    public function setUserRightsBackupData(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsBackupData', $value);
    }

    /**
     * Sets the userRightsBlockAccessFromNetwork property value. This user right determines which users and groups are block from connecting to the computer over the network. State Block is supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsBlockAccessFromNetwork property.
    */
    public function setUserRightsBlockAccessFromNetwork(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsBlockAccessFromNetwork', $value);
    }

    /**
     * Sets the userRightsChangeSystemTime property value. This user right determines which users and groups can change the time and date on the internal clock of the computer. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsChangeSystemTime property.
    */
    public function setUserRightsChangeSystemTime(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsChangeSystemTime', $value);
    }

    /**
     * Sets the userRightsCreateGlobalObjects property value. This security setting determines whether users can create global objects that are available to all sessions. Users who can create global objects could affect processes that run under other users' sessions, which could lead to application failure or data corruption. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateGlobalObjects property.
    */
    public function setUserRightsCreateGlobalObjects(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsCreateGlobalObjects', $value);
    }

    /**
     * Sets the userRightsCreatePageFile property value. This user right determines which users and groups can call an internal API to create and change the size of a page file. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreatePageFile property.
    */
    public function setUserRightsCreatePageFile(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsCreatePageFile', $value);
    }

    /**
     * Sets the userRightsCreatePermanentSharedObjects property value. This user right determines which accounts can be used by processes to create a directory object using the object manager. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreatePermanentSharedObjects property.
    */
    public function setUserRightsCreatePermanentSharedObjects(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsCreatePermanentSharedObjects', $value);
    }

    /**
     * Sets the userRightsCreateSymbolicLinks property value. This user right determines if the user can create a symbolic link from the computer to which they are logged on. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateSymbolicLinks property.
    */
    public function setUserRightsCreateSymbolicLinks(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsCreateSymbolicLinks', $value);
    }

    /**
     * Sets the userRightsCreateToken property value. This user right determines which users/groups can be used by processes to create a token that can then be used to get access to any local resources when the process uses an internal API to create an access token. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsCreateToken property.
    */
    public function setUserRightsCreateToken(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsCreateToken', $value);
    }

    /**
     * Sets the userRightsDebugPrograms property value. This user right determines which users can attach a debugger to any process or to the kernel. Only states NotConfigured and Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDebugPrograms property.
    */
    public function setUserRightsDebugPrograms(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsDebugPrograms', $value);
    }

    /**
     * Sets the userRightsDelegation property value. This user right determines which users can set the Trusted for Delegation setting on a user or computer object. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDelegation property.
    */
    public function setUserRightsDelegation(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsDelegation', $value);
    }

    /**
     * Sets the userRightsDenyLocalLogOn property value. This user right determines which users cannot log on to the computer. States NotConfigured, Blocked are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsDenyLocalLogOn property.
    */
    public function setUserRightsDenyLocalLogOn(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsDenyLocalLogOn', $value);
    }

    /**
     * Sets the userRightsGenerateSecurityAudits property value. This user right determines which accounts can be used by a process to add entries to the security log. The security log is used to trace unauthorized system access.  Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsGenerateSecurityAudits property.
    */
    public function setUserRightsGenerateSecurityAudits(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsGenerateSecurityAudits', $value);
    }

    /**
     * Sets the userRightsImpersonateClient property value. Assigning this user right to a user allows programs running on behalf of that user to impersonate a client. Requiring this user right for this kind of impersonation prevents an unauthorized user from convincing a client to connect to a service that they have created and then impersonating that client, which can elevate the unauthorized user's permissions to administrative or system levels. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsImpersonateClient property.
    */
    public function setUserRightsImpersonateClient(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsImpersonateClient', $value);
    }

    /**
     * Sets the userRightsIncreaseSchedulingPriority property value. This user right determines which accounts can use a process with Write Property access to another process to increase the execution priority assigned to the other process. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsIncreaseSchedulingPriority property.
    */
    public function setUserRightsIncreaseSchedulingPriority(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsIncreaseSchedulingPriority', $value);
    }

    /**
     * Sets the userRightsLoadUnloadDrivers property value. This user right determines which users can dynamically load and unload device drivers or other code in to kernel mode. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLoadUnloadDrivers property.
    */
    public function setUserRightsLoadUnloadDrivers(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsLoadUnloadDrivers', $value);
    }

    /**
     * Sets the userRightsLocalLogOn property value. This user right determines which users can log on to the computer. States NotConfigured, Allowed are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLocalLogOn property.
    */
    public function setUserRightsLocalLogOn(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsLocalLogOn', $value);
    }

    /**
     * Sets the userRightsLockMemory property value. This user right determines which accounts can use a process to keep data in physical memory, which prevents the system from paging the data to virtual memory on disk. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsLockMemory property.
    */
    public function setUserRightsLockMemory(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsLockMemory', $value);
    }

    /**
     * Sets the userRightsManageAuditingAndSecurityLogs property value. This user right determines which users can specify object access auditing options for individual resources, such as files, Active Directory objects, and registry keys. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsManageAuditingAndSecurityLogs property.
    */
    public function setUserRightsManageAuditingAndSecurityLogs(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsManageAuditingAndSecurityLogs', $value);
    }

    /**
     * Sets the userRightsManageVolumes property value. This user right determines which users and groups can run maintenance tasks on a volume, such as remote defragmentation. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsManageVolumes property.
    */
    public function setUserRightsManageVolumes(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsManageVolumes', $value);
    }

    /**
     * Sets the userRightsModifyFirmwareEnvironment property value. This user right determines who can modify firmware environment values. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsModifyFirmwareEnvironment property.
    */
    public function setUserRightsModifyFirmwareEnvironment(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsModifyFirmwareEnvironment', $value);
    }

    /**
     * Sets the userRightsModifyObjectLabels property value. This user right determines which user accounts can modify the integrity label of objects, such as files, registry keys, or processes owned by other users. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsModifyObjectLabels property.
    */
    public function setUserRightsModifyObjectLabels(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsModifyObjectLabels', $value);
    }

    /**
     * Sets the userRightsProfileSingleProcess property value. This user right determines which users can use performance monitoring tools to monitor the performance of system processes. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsProfileSingleProcess property.
    */
    public function setUserRightsProfileSingleProcess(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsProfileSingleProcess', $value);
    }

    /**
     * Sets the userRightsRemoteDesktopServicesLogOn property value. This user right determines which users and groups are prohibited from logging on as a Remote Desktop Services client. Only states NotConfigured and Blocked are supported
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRemoteDesktopServicesLogOn property.
    */
    public function setUserRightsRemoteDesktopServicesLogOn(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsRemoteDesktopServicesLogOn', $value);
    }

    /**
     * Sets the userRightsRemoteShutdown property value. This user right determines which users are allowed to shut down a computer from a remote location on the network. Misuse of this user right can result in a denial of service. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRemoteShutdown property.
    */
    public function setUserRightsRemoteShutdown(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsRemoteShutdown', $value);
    }

    /**
     * Sets the userRightsRestoreData property value. This user right determines which users can bypass file, directory, registry, and other persistent objects permissions when restoring backed up files and directories, and determines which users can set any valid security principal as the owner of an object. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsRestoreData property.
    */
    public function setUserRightsRestoreData(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsRestoreData', $value);
    }

    /**
     * Sets the userRightsTakeOwnership property value. This user right determines which users can take ownership of any securable object in the system, including Active Directory objects, files and folders, printers, registry keys, processes, and threads. Only states NotConfigured and Allowed are supported.
     * @param DeviceManagementUserRightsSetting|null $value Value to set for the userRightsTakeOwnership property.
    */
    public function setUserRightsTakeOwnership(?DeviceManagementUserRightsSetting $value): void {
        $this->getBackingStore()->set('userRightsTakeOwnership', $value);
    }

    /**
     * Sets the windowsDefenderTamperProtection property value. Defender TamperProtection setting options
     * @param WindowsDefenderTamperProtectionOptions|null $value Value to set for the windowsDefenderTamperProtection property.
    */
    public function setWindowsDefenderTamperProtection(?WindowsDefenderTamperProtectionOptions $value): void {
        $this->getBackingStore()->set('windowsDefenderTamperProtection', $value);
    }

    /**
     * Sets the xboxServicesAccessoryManagementServiceStartupMode property value. Possible values of xbox service start type
     * @param ServiceStartType|null $value Value to set for the xboxServicesAccessoryManagementServiceStartupMode property.
    */
    public function setXboxServicesAccessoryManagementServiceStartupMode(?ServiceStartType $value): void {
        $this->getBackingStore()->set('xboxServicesAccessoryManagementServiceStartupMode', $value);
    }

    /**
     * Sets the xboxServicesEnableXboxGameSaveTask property value. This setting determines whether xbox game save is enabled (1) or disabled (0).
     * @param bool|null $value Value to set for the xboxServicesEnableXboxGameSaveTask property.
    */
    public function setXboxServicesEnableXboxGameSaveTask(?bool $value): void {
        $this->getBackingStore()->set('xboxServicesEnableXboxGameSaveTask', $value);
    }

    /**
     * Sets the xboxServicesLiveAuthManagerServiceStartupMode property value. Possible values of xbox service start type
     * @param ServiceStartType|null $value Value to set for the xboxServicesLiveAuthManagerServiceStartupMode property.
    */
    public function setXboxServicesLiveAuthManagerServiceStartupMode(?ServiceStartType $value): void {
        $this->getBackingStore()->set('xboxServicesLiveAuthManagerServiceStartupMode', $value);
    }

    /**
     * Sets the xboxServicesLiveGameSaveServiceStartupMode property value. Possible values of xbox service start type
     * @param ServiceStartType|null $value Value to set for the xboxServicesLiveGameSaveServiceStartupMode property.
    */
    public function setXboxServicesLiveGameSaveServiceStartupMode(?ServiceStartType $value): void {
        $this->getBackingStore()->set('xboxServicesLiveGameSaveServiceStartupMode', $value);
    }

    /**
     * Sets the xboxServicesLiveNetworkingServiceStartupMode property value. Possible values of xbox service start type
     * @param ServiceStartType|null $value Value to set for the xboxServicesLiveNetworkingServiceStartupMode property.
    */
    public function setXboxServicesLiveNetworkingServiceStartupMode(?ServiceStartType $value): void {
        $this->getBackingStore()->set('xboxServicesLiveNetworkingServiceStartupMode', $value);
    }

}
