<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties and inherited properties for Win32 apps.
*/
class Win32LobApp extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new Win32LobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32CatalogApp': return new Win32CatalogApp();
            }
        }
        return new Win32LobApp();
    }

    /**
     * Gets the allowAvailableUninstall property value. Indicates whether the uninstall is supported from the company portal for the Win32 app with an available assignment. When TRUE, indicates that uninstall is supported from the company portal for the Windows app (Win32) with an available assignment. When FALSE, indicates that uninstall is not supported for the Windows app (Win32) with an Available assignment. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowAvailableUninstall(): ?bool {
        $val = $this->getBackingStore()->get('allowAvailableUninstall');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAvailableUninstall'");
    }

    /**
     * Gets the allowedArchitectures property value. Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the allowedArchitectures property, the value of the applicableArchitectures property is set to none. Possible values are: null, x86, x64, arm64. Possible values are: none, x86, x64, arm, neutral, arm64.
     * @return WindowsArchitecture|null
    */
    public function getAllowedArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('allowedArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedArchitectures'");
    }

    /**
     * Gets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('applicableArchitectures');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableArchitectures'");
    }

    /**
     * Gets the detectionRules property value. Indicates the detection rules to detect Win32 Line of Business (LoB) app. Possible values are Win32LobAppPowerShellScriptDetection, Win32LobAppRegistryDetection, Win32LobAppFileSystemDetection, Win32LobAppProductCodeDetection.
     * @return array<Win32LobAppDetection>|null
    */
    public function getDetectionRules(): ?array {
        $val = $this->getBackingStore()->get('detectionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppDetection::class);
            /** @var array<Win32LobAppDetection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionRules'");
    }

    /**
     * Gets the displayVersion property value. Indicates the version displayed in the UX for this app. Used to set the version of the app. Example: 1.0.3.215.
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        $val = $this->getBackingStore()->get('displayVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAvailableUninstall' => fn(ParseNode $n) => $o->setAllowAvailableUninstall($n->getBooleanValue()),
            'allowedArchitectures' => fn(ParseNode $n) => $o->setAllowedArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'applicableArchitectures' => fn(ParseNode $n) => $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)),
            'detectionRules' => fn(ParseNode $n) => $o->setDetectionRules($n->getCollectionOfObjectValues([Win32LobAppDetection::class, 'createFromDiscriminatorValue'])),
            'displayVersion' => fn(ParseNode $n) => $o->setDisplayVersion($n->getStringValue()),
            'installCommandLine' => fn(ParseNode $n) => $o->setInstallCommandLine($n->getStringValue()),
            'installExperience' => fn(ParseNode $n) => $o->setInstallExperience($n->getObjectValue([Win32LobAppInstallExperience::class, 'createFromDiscriminatorValue'])),
            'minimumCpuSpeedInMHz' => fn(ParseNode $n) => $o->setMinimumCpuSpeedInMHz($n->getIntegerValue()),
            'minimumFreeDiskSpaceInMB' => fn(ParseNode $n) => $o->setMinimumFreeDiskSpaceInMB($n->getIntegerValue()),
            'minimumMemoryInMB' => fn(ParseNode $n) => $o->setMinimumMemoryInMB($n->getIntegerValue()),
            'minimumNumberOfProcessors' => fn(ParseNode $n) => $o->setMinimumNumberOfProcessors($n->getIntegerValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'minimumSupportedWindowsRelease' => fn(ParseNode $n) => $o->setMinimumSupportedWindowsRelease($n->getStringValue()),
            'msiInformation' => fn(ParseNode $n) => $o->setMsiInformation($n->getObjectValue([Win32LobAppMsiInformation::class, 'createFromDiscriminatorValue'])),
            'requirementRules' => fn(ParseNode $n) => $o->setRequirementRules($n->getCollectionOfObjectValues([Win32LobAppRequirement::class, 'createFromDiscriminatorValue'])),
            'returnCodes' => fn(ParseNode $n) => $o->setReturnCodes($n->getCollectionOfObjectValues([Win32LobAppReturnCode::class, 'createFromDiscriminatorValue'])),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([Win32LobAppRule::class, 'createFromDiscriminatorValue'])),
            'setupFilePath' => fn(ParseNode $n) => $o->setSetupFilePath($n->getStringValue()),
            'uninstallCommandLine' => fn(ParseNode $n) => $o->setUninstallCommandLine($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installCommandLine property value. Indicates the command line to install this app. Used to install the Win32 app. Example: msiexec /i 'Orca.Msi' /qn.
     * @return string|null
    */
    public function getInstallCommandLine(): ?string {
        $val = $this->getBackingStore()->get('installCommandLine');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installCommandLine'");
    }

    /**
     * Gets the installExperience property value. Indicates the install experience for this app.
     * @return Win32LobAppInstallExperience|null
    */
    public function getInstallExperience(): ?Win32LobAppInstallExperience {
        $val = $this->getBackingStore()->get('installExperience');
        if (is_null($val) || $val instanceof Win32LobAppInstallExperience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installExperience'");
    }

    /**
     * Gets the minimumCpuSpeedInMHz property value. Indicates the value for the minimum CPU speed which is required to install this app. Allowed range from 0 to clock speed from WMI helper.
     * @return int|null
    */
    public function getMinimumCpuSpeedInMHz(): ?int {
        $val = $this->getBackingStore()->get('minimumCpuSpeedInMHz');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumCpuSpeedInMHz'");
    }

    /**
     * Gets the minimumFreeDiskSpaceInMB property value. Indicates the value for the minimum free disk space which is required to install this app. Allowed range from 0 to driver's maximum available free space.
     * @return int|null
    */
    public function getMinimumFreeDiskSpaceInMB(): ?int {
        $val = $this->getBackingStore()->get('minimumFreeDiskSpaceInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumFreeDiskSpaceInMB'");
    }

    /**
     * Gets the minimumMemoryInMB property value. Indicates the value for the minimum physical memory which is required to install this app. Allowed range from 0 to total physical memory from WMI helper.
     * @return int|null
    */
    public function getMinimumMemoryInMB(): ?int {
        $val = $this->getBackingStore()->get('minimumMemoryInMB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumMemoryInMB'");
    }

    /**
     * Gets the minimumNumberOfProcessors property value. Indicates the value for the minimum number of processors which is required to install this app. Minimum value is 0.
     * @return int|null
    */
    public function getMinimumNumberOfProcessors(): ?int {
        $val = $this->getBackingStore()->get('minimumNumberOfProcessors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumNumberOfProcessors'");
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. Indicates the value for the minimum applicable operating system.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof WindowsMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the minimumSupportedWindowsRelease property value. Indicates the value for the minimum supported windows release. Example: Windows11_23H2.
     * @return string|null
    */
    public function getMinimumSupportedWindowsRelease(): ?string {
        $val = $this->getBackingStore()->get('minimumSupportedWindowsRelease');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedWindowsRelease'");
    }

    /**
     * Gets the msiInformation property value. Indicates the MSI details if this Win32 app is an MSI app.
     * @return Win32LobAppMsiInformation|null
    */
    public function getMsiInformation(): ?Win32LobAppMsiInformation {
        $val = $this->getBackingStore()->get('msiInformation');
        if (is_null($val) || $val instanceof Win32LobAppMsiInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'msiInformation'");
    }

    /**
     * Gets the requirementRules property value. Indicates the requirement rules to detect Win32 Line of Business (LoB) app. Possible values are: Win32LobAppFileSystemRequirement, Win32LobAppPowerShellScriptRequirement, Win32LobAppRegistryRequirement.
     * @return array<Win32LobAppRequirement>|null
    */
    public function getRequirementRules(): ?array {
        $val = $this->getBackingStore()->get('requirementRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppRequirement::class);
            /** @var array<Win32LobAppRequirement>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requirementRules'");
    }

    /**
     * Gets the returnCodes property value. Indicates the return codes for post installation behavior.
     * @return array<Win32LobAppReturnCode>|null
    */
    public function getReturnCodes(): ?array {
        $val = $this->getBackingStore()->get('returnCodes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppReturnCode::class);
            /** @var array<Win32LobAppReturnCode>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'returnCodes'");
    }

    /**
     * Gets the rules property value. Indicates the detection and requirement rules for this app. Possible values are: Win32LobAppFileSystemRule, Win32LobAppPowerShellScriptRule, Win32LobAppProductCodeRule, Win32LobAppRegistryRule.
     * @return array<Win32LobAppRule>|null
    */
    public function getRules(): ?array {
        $val = $this->getBackingStore()->get('rules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Win32LobAppRule::class);
            /** @var array<Win32LobAppRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rules'");
    }

    /**
     * Gets the setupFilePath property value. Indicates the relative path of the setup file in the encrypted Win32LobApp package. Example: Intel-SA-00075 Detection and Mitigation Tool.msi.
     * @return string|null
    */
    public function getSetupFilePath(): ?string {
        $val = $this->getBackingStore()->get('setupFilePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setupFilePath'");
    }

    /**
     * Gets the uninstallCommandLine property value. Indicates the command line to uninstall this app. Used to uninstall the app. Example: msiexec /x '{85F4CBCB-9BBC-4B50-A7D8-E1106771498D}' /qn.
     * @return string|null
    */
    public function getUninstallCommandLine(): ?string {
        $val = $this->getBackingStore()->get('uninstallCommandLine');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uninstallCommandLine'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAvailableUninstall', $this->getAllowAvailableUninstall());
        $writer->writeEnumValue('allowedArchitectures', $this->getAllowedArchitectures());
        $writer->writeEnumValue('applicableArchitectures', $this->getApplicableArchitectures());
        $writer->writeCollectionOfObjectValues('detectionRules', $this->getDetectionRules());
        $writer->writeStringValue('displayVersion', $this->getDisplayVersion());
        $writer->writeStringValue('installCommandLine', $this->getInstallCommandLine());
        $writer->writeObjectValue('installExperience', $this->getInstallExperience());
        $writer->writeIntegerValue('minimumCpuSpeedInMHz', $this->getMinimumCpuSpeedInMHz());
        $writer->writeIntegerValue('minimumFreeDiskSpaceInMB', $this->getMinimumFreeDiskSpaceInMB());
        $writer->writeIntegerValue('minimumMemoryInMB', $this->getMinimumMemoryInMB());
        $writer->writeIntegerValue('minimumNumberOfProcessors', $this->getMinimumNumberOfProcessors());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('minimumSupportedWindowsRelease', $this->getMinimumSupportedWindowsRelease());
        $writer->writeObjectValue('msiInformation', $this->getMsiInformation());
        $writer->writeCollectionOfObjectValues('requirementRules', $this->getRequirementRules());
        $writer->writeCollectionOfObjectValues('returnCodes', $this->getReturnCodes());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeStringValue('setupFilePath', $this->getSetupFilePath());
        $writer->writeStringValue('uninstallCommandLine', $this->getUninstallCommandLine());
    }

    /**
     * Sets the allowAvailableUninstall property value. Indicates whether the uninstall is supported from the company portal for the Win32 app with an available assignment. When TRUE, indicates that uninstall is supported from the company portal for the Windows app (Win32) with an available assignment. When FALSE, indicates that uninstall is not supported for the Windows app (Win32) with an Available assignment. Default value is FALSE.
     * @param bool|null $value Value to set for the allowAvailableUninstall property.
    */
    public function setAllowAvailableUninstall(?bool $value): void {
        $this->getBackingStore()->set('allowAvailableUninstall', $value);
    }

    /**
     * Sets the allowedArchitectures property value. Indicates the Windows architecture(s) this app should be installed on. The app will be treated as not applicable for devices with architectures not matching the selected value. When a non-null value is provided for the allowedArchitectures property, the value of the applicableArchitectures property is set to none. Possible values are: null, x86, x64, arm64. Possible values are: none, x86, x64, arm, neutral, arm64.
     * @param WindowsArchitecture|null $value Value to set for the allowedArchitectures property.
    */
    public function setAllowedArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('allowedArchitectures', $value);
    }

    /**
     * Sets the applicableArchitectures property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('applicableArchitectures', $value);
    }

    /**
     * Sets the detectionRules property value. Indicates the detection rules to detect Win32 Line of Business (LoB) app. Possible values are Win32LobAppPowerShellScriptDetection, Win32LobAppRegistryDetection, Win32LobAppFileSystemDetection, Win32LobAppProductCodeDetection.
     * @param array<Win32LobAppDetection>|null $value Value to set for the detectionRules property.
    */
    public function setDetectionRules(?array $value): void {
        $this->getBackingStore()->set('detectionRules', $value);
    }

    /**
     * Sets the displayVersion property value. Indicates the version displayed in the UX for this app. Used to set the version of the app. Example: 1.0.3.215.
     * @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('displayVersion', $value);
    }

    /**
     * Sets the installCommandLine property value. Indicates the command line to install this app. Used to install the Win32 app. Example: msiexec /i 'Orca.Msi' /qn.
     * @param string|null $value Value to set for the installCommandLine property.
    */
    public function setInstallCommandLine(?string $value): void {
        $this->getBackingStore()->set('installCommandLine', $value);
    }

    /**
     * Sets the installExperience property value. Indicates the install experience for this app.
     * @param Win32LobAppInstallExperience|null $value Value to set for the installExperience property.
    */
    public function setInstallExperience(?Win32LobAppInstallExperience $value): void {
        $this->getBackingStore()->set('installExperience', $value);
    }

    /**
     * Sets the minimumCpuSpeedInMHz property value. Indicates the value for the minimum CPU speed which is required to install this app. Allowed range from 0 to clock speed from WMI helper.
     * @param int|null $value Value to set for the minimumCpuSpeedInMHz property.
    */
    public function setMinimumCpuSpeedInMHz(?int $value): void {
        $this->getBackingStore()->set('minimumCpuSpeedInMHz', $value);
    }

    /**
     * Sets the minimumFreeDiskSpaceInMB property value. Indicates the value for the minimum free disk space which is required to install this app. Allowed range from 0 to driver's maximum available free space.
     * @param int|null $value Value to set for the minimumFreeDiskSpaceInMB property.
    */
    public function setMinimumFreeDiskSpaceInMB(?int $value): void {
        $this->getBackingStore()->set('minimumFreeDiskSpaceInMB', $value);
    }

    /**
     * Sets the minimumMemoryInMB property value. Indicates the value for the minimum physical memory which is required to install this app. Allowed range from 0 to total physical memory from WMI helper.
     * @param int|null $value Value to set for the minimumMemoryInMB property.
    */
    public function setMinimumMemoryInMB(?int $value): void {
        $this->getBackingStore()->set('minimumMemoryInMB', $value);
    }

    /**
     * Sets the minimumNumberOfProcessors property value. Indicates the value for the minimum number of processors which is required to install this app. Minimum value is 0.
     * @param int|null $value Value to set for the minimumNumberOfProcessors property.
    */
    public function setMinimumNumberOfProcessors(?int $value): void {
        $this->getBackingStore()->set('minimumNumberOfProcessors', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. Indicates the value for the minimum applicable operating system.
     * @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the minimumSupportedWindowsRelease property value. Indicates the value for the minimum supported windows release. Example: Windows11_23H2.
     * @param string|null $value Value to set for the minimumSupportedWindowsRelease property.
    */
    public function setMinimumSupportedWindowsRelease(?string $value): void {
        $this->getBackingStore()->set('minimumSupportedWindowsRelease', $value);
    }

    /**
     * Sets the msiInformation property value. Indicates the MSI details if this Win32 app is an MSI app.
     * @param Win32LobAppMsiInformation|null $value Value to set for the msiInformation property.
    */
    public function setMsiInformation(?Win32LobAppMsiInformation $value): void {
        $this->getBackingStore()->set('msiInformation', $value);
    }

    /**
     * Sets the requirementRules property value. Indicates the requirement rules to detect Win32 Line of Business (LoB) app. Possible values are: Win32LobAppFileSystemRequirement, Win32LobAppPowerShellScriptRequirement, Win32LobAppRegistryRequirement.
     * @param array<Win32LobAppRequirement>|null $value Value to set for the requirementRules property.
    */
    public function setRequirementRules(?array $value): void {
        $this->getBackingStore()->set('requirementRules', $value);
    }

    /**
     * Sets the returnCodes property value. Indicates the return codes for post installation behavior.
     * @param array<Win32LobAppReturnCode>|null $value Value to set for the returnCodes property.
    */
    public function setReturnCodes(?array $value): void {
        $this->getBackingStore()->set('returnCodes', $value);
    }

    /**
     * Sets the rules property value. Indicates the detection and requirement rules for this app. Possible values are: Win32LobAppFileSystemRule, Win32LobAppPowerShellScriptRule, Win32LobAppProductCodeRule, Win32LobAppRegistryRule.
     * @param array<Win32LobAppRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the setupFilePath property value. Indicates the relative path of the setup file in the encrypted Win32LobApp package. Example: Intel-SA-00075 Detection and Mitigation Tool.msi.
     * @param string|null $value Value to set for the setupFilePath property.
    */
    public function setSetupFilePath(?string $value): void {
        $this->getBackingStore()->set('setupFilePath', $value);
    }

    /**
     * Sets the uninstallCommandLine property value. Indicates the command line to uninstall this app. Used to uninstall the app. Example: msiexec /x '{85F4CBCB-9BBC-4B50-A7D8-E1106771498D}' /qn.
     * @param string|null $value Value to set for the uninstallCommandLine property.
    */
    public function setUninstallCommandLine(?string $value): void {
        $this->getBackingStore()->set('uninstallCommandLine', $value);
    }

}
