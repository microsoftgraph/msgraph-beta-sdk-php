<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobApp extends MobileLobApp implements Parsable 
{
    /**
     * @var WindowsArchitecture|null $applicableArchitectures The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    */
    private ?WindowsArchitecture $applicableArchitectures = null;
    
    /**
     * @var array<Win32LobAppDetection>|null $detectionRules The detection rules to detect Win32 Line of Business (LoB) app.
    */
    private ?array $detectionRules = null;
    
    /**
     * @var string|null $displayVersion The version displayed in the UX for this app.
    */
    private ?string $displayVersion = null;
    
    /**
     * @var string|null $installCommandLine The command line to install this app
    */
    private ?string $installCommandLine = null;
    
    /**
     * @var Win32LobAppInstallExperience|null $installExperience The install experience for this app.
    */
    private ?Win32LobAppInstallExperience $installExperience = null;
    
    /**
     * @var int|null $minimumCpuSpeedInMHz The value for the minimum CPU speed which is required to install this app.
    */
    private ?int $minimumCpuSpeedInMHz = null;
    
    /**
     * @var int|null $minimumFreeDiskSpaceInMB The value for the minimum free disk space which is required to install this app.
    */
    private ?int $minimumFreeDiskSpaceInMB = null;
    
    /**
     * @var int|null $minimumMemoryInMB The value for the minimum physical memory which is required to install this app.
    */
    private ?int $minimumMemoryInMB = null;
    
    /**
     * @var int|null $minimumNumberOfProcessors The value for the minimum number of processors which is required to install this app.
    */
    private ?int $minimumNumberOfProcessors = null;
    
    /**
     * @var WindowsMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?WindowsMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $minimumSupportedWindowsRelease The value for the minimum supported windows release.
    */
    private ?string $minimumSupportedWindowsRelease = null;
    
    /**
     * @var Win32LobAppMsiInformation|null $msiInformation The MSI details if this Win32 app is an MSI app.
    */
    private ?Win32LobAppMsiInformation $msiInformation = null;
    
    /**
     * @var array<Win32LobAppRequirement>|null $requirementRules The requirement rules to detect Win32 Line of Business (LoB) app.
    */
    private ?array $requirementRules = null;
    
    /**
     * @var array<Win32LobAppReturnCode>|null $returnCodes The return codes for post installation behavior.
    */
    private ?array $returnCodes = null;
    
    /**
     * @var array<Win32LobAppRule>|null $rules The detection and requirement rules for this app.
    */
    private ?array $rules = null;
    
    /**
     * @var string|null $setupFilePath The relative path of the setup file in the encrypted Win32LobApp package.
    */
    private ?string $setupFilePath = null;
    
    /**
     * @var string|null $uninstallCommandLine The command line to uninstall this app
    */
    private ?string $uninstallCommandLine = null;
    
    /**
     * Instantiates a new Win32LobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobApp {
        return new Win32LobApp();
    }

    /**
     * Gets the applicableArchitectures property value. The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
     * @return WindowsArchitecture|null
    */
    public function getApplicableArchitectures(): ?WindowsArchitecture {
        return $this->applicableArchitectures;
    }

    /**
     * Gets the detectionRules property value. The detection rules to detect Win32 Line of Business (LoB) app.
     * @return array<Win32LobAppDetection>|null
    */
    public function getDetectionRules(): ?array {
        return $this->detectionRules;
    }

    /**
     * Gets the displayVersion property value. The version displayed in the UX for this app.
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        return $this->displayVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableArchitectures' => function (ParseNode $n) use ($o) { $o->setApplicableArchitectures($n->getEnumValue(WindowsArchitecture::class)); },
            'detectionRules' => function (ParseNode $n) use ($o) { $o->setDetectionRules($n->getCollectionOfObjectValues(array(Win32LobAppDetection::class, 'createFromDiscriminatorValue'))); },
            'displayVersion' => function (ParseNode $n) use ($o) { $o->setDisplayVersion($n->getStringValue()); },
            'installCommandLine' => function (ParseNode $n) use ($o) { $o->setInstallCommandLine($n->getStringValue()); },
            'installExperience' => function (ParseNode $n) use ($o) { $o->setInstallExperience($n->getObjectValue(array(Win32LobAppInstallExperience::class, 'createFromDiscriminatorValue'))); },
            'minimumCpuSpeedInMHz' => function (ParseNode $n) use ($o) { $o->setMinimumCpuSpeedInMHz($n->getIntegerValue()); },
            'minimumFreeDiskSpaceInMB' => function (ParseNode $n) use ($o) { $o->setMinimumFreeDiskSpaceInMB($n->getIntegerValue()); },
            'minimumMemoryInMB' => function (ParseNode $n) use ($o) { $o->setMinimumMemoryInMB($n->getIntegerValue()); },
            'minimumNumberOfProcessors' => function (ParseNode $n) use ($o) { $o->setMinimumNumberOfProcessors($n->getIntegerValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'minimumSupportedWindowsRelease' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedWindowsRelease($n->getStringValue()); },
            'msiInformation' => function (ParseNode $n) use ($o) { $o->setMsiInformation($n->getObjectValue(array(Win32LobAppMsiInformation::class, 'createFromDiscriminatorValue'))); },
            'requirementRules' => function (ParseNode $n) use ($o) { $o->setRequirementRules($n->getCollectionOfObjectValues(array(Win32LobAppRequirement::class, 'createFromDiscriminatorValue'))); },
            'returnCodes' => function (ParseNode $n) use ($o) { $o->setReturnCodes($n->getCollectionOfObjectValues(array(Win32LobAppReturnCode::class, 'createFromDiscriminatorValue'))); },
            'rules' => function (ParseNode $n) use ($o) { $o->setRules($n->getCollectionOfObjectValues(array(Win32LobAppRule::class, 'createFromDiscriminatorValue'))); },
            'setupFilePath' => function (ParseNode $n) use ($o) { $o->setSetupFilePath($n->getStringValue()); },
            'uninstallCommandLine' => function (ParseNode $n) use ($o) { $o->setUninstallCommandLine($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the installCommandLine property value. The command line to install this app
     * @return string|null
    */
    public function getInstallCommandLine(): ?string {
        return $this->installCommandLine;
    }

    /**
     * Gets the installExperience property value. The install experience for this app.
     * @return Win32LobAppInstallExperience|null
    */
    public function getInstallExperience(): ?Win32LobAppInstallExperience {
        return $this->installExperience;
    }

    /**
     * Gets the minimumCpuSpeedInMHz property value. The value for the minimum CPU speed which is required to install this app.
     * @return int|null
    */
    public function getMinimumCpuSpeedInMHz(): ?int {
        return $this->minimumCpuSpeedInMHz;
    }

    /**
     * Gets the minimumFreeDiskSpaceInMB property value. The value for the minimum free disk space which is required to install this app.
     * @return int|null
    */
    public function getMinimumFreeDiskSpaceInMB(): ?int {
        return $this->minimumFreeDiskSpaceInMB;
    }

    /**
     * Gets the minimumMemoryInMB property value. The value for the minimum physical memory which is required to install this app.
     * @return int|null
    */
    public function getMinimumMemoryInMB(): ?int {
        return $this->minimumMemoryInMB;
    }

    /**
     * Gets the minimumNumberOfProcessors property value. The value for the minimum number of processors which is required to install this app.
     * @return int|null
    */
    public function getMinimumNumberOfProcessors(): ?int {
        return $this->minimumNumberOfProcessors;
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the minimumSupportedWindowsRelease property value. The value for the minimum supported windows release.
     * @return string|null
    */
    public function getMinimumSupportedWindowsRelease(): ?string {
        return $this->minimumSupportedWindowsRelease;
    }

    /**
     * Gets the msiInformation property value. The MSI details if this Win32 app is an MSI app.
     * @return Win32LobAppMsiInformation|null
    */
    public function getMsiInformation(): ?Win32LobAppMsiInformation {
        return $this->msiInformation;
    }

    /**
     * Gets the requirementRules property value. The requirement rules to detect Win32 Line of Business (LoB) app.
     * @return array<Win32LobAppRequirement>|null
    */
    public function getRequirementRules(): ?array {
        return $this->requirementRules;
    }

    /**
     * Gets the returnCodes property value. The return codes for post installation behavior.
     * @return array<Win32LobAppReturnCode>|null
    */
    public function getReturnCodes(): ?array {
        return $this->returnCodes;
    }

    /**
     * Gets the rules property value. The detection and requirement rules for this app.
     * @return array<Win32LobAppRule>|null
    */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * Gets the setupFilePath property value. The relative path of the setup file in the encrypted Win32LobApp package.
     * @return string|null
    */
    public function getSetupFilePath(): ?string {
        return $this->setupFilePath;
    }

    /**
     * Gets the uninstallCommandLine property value. The command line to uninstall this app
     * @return string|null
    */
    public function getUninstallCommandLine(): ?string {
        return $this->uninstallCommandLine;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableArchitectures', $this->applicableArchitectures);
        $writer->writeCollectionOfObjectValues('detectionRules', $this->detectionRules);
        $writer->writeStringValue('displayVersion', $this->displayVersion);
        $writer->writeStringValue('installCommandLine', $this->installCommandLine);
        $writer->writeObjectValue('installExperience', $this->installExperience);
        $writer->writeIntegerValue('minimumCpuSpeedInMHz', $this->minimumCpuSpeedInMHz);
        $writer->writeIntegerValue('minimumFreeDiskSpaceInMB', $this->minimumFreeDiskSpaceInMB);
        $writer->writeIntegerValue('minimumMemoryInMB', $this->minimumMemoryInMB);
        $writer->writeIntegerValue('minimumNumberOfProcessors', $this->minimumNumberOfProcessors);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('minimumSupportedWindowsRelease', $this->minimumSupportedWindowsRelease);
        $writer->writeObjectValue('msiInformation', $this->msiInformation);
        $writer->writeCollectionOfObjectValues('requirementRules', $this->requirementRules);
        $writer->writeCollectionOfObjectValues('returnCodes', $this->returnCodes);
        $writer->writeCollectionOfObjectValues('rules', $this->rules);
        $writer->writeStringValue('setupFilePath', $this->setupFilePath);
        $writer->writeStringValue('uninstallCommandLine', $this->uninstallCommandLine);
    }

    /**
     * Sets the applicableArchitectures property value. The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
     *  @param WindowsArchitecture|null $value Value to set for the applicableArchitectures property.
    */
    public function setApplicableArchitectures(?WindowsArchitecture $value ): void {
        $this->applicableArchitectures = $value;
    }

    /**
     * Sets the detectionRules property value. The detection rules to detect Win32 Line of Business (LoB) app.
     *  @param array<Win32LobAppDetection>|null $value Value to set for the detectionRules property.
    */
    public function setDetectionRules(?array $value ): void {
        $this->detectionRules = $value;
    }

    /**
     * Sets the displayVersion property value. The version displayed in the UX for this app.
     *  @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value ): void {
        $this->displayVersion = $value;
    }

    /**
     * Sets the installCommandLine property value. The command line to install this app
     *  @param string|null $value Value to set for the installCommandLine property.
    */
    public function setInstallCommandLine(?string $value ): void {
        $this->installCommandLine = $value;
    }

    /**
     * Sets the installExperience property value. The install experience for this app.
     *  @param Win32LobAppInstallExperience|null $value Value to set for the installExperience property.
    */
    public function setInstallExperience(?Win32LobAppInstallExperience $value ): void {
        $this->installExperience = $value;
    }

    /**
     * Sets the minimumCpuSpeedInMHz property value. The value for the minimum CPU speed which is required to install this app.
     *  @param int|null $value Value to set for the minimumCpuSpeedInMHz property.
    */
    public function setMinimumCpuSpeedInMHz(?int $value ): void {
        $this->minimumCpuSpeedInMHz = $value;
    }

    /**
     * Sets the minimumFreeDiskSpaceInMB property value. The value for the minimum free disk space which is required to install this app.
     *  @param int|null $value Value to set for the minimumFreeDiskSpaceInMB property.
    */
    public function setMinimumFreeDiskSpaceInMB(?int $value ): void {
        $this->minimumFreeDiskSpaceInMB = $value;
    }

    /**
     * Sets the minimumMemoryInMB property value. The value for the minimum physical memory which is required to install this app.
     *  @param int|null $value Value to set for the minimumMemoryInMB property.
    */
    public function setMinimumMemoryInMB(?int $value ): void {
        $this->minimumMemoryInMB = $value;
    }

    /**
     * Sets the minimumNumberOfProcessors property value. The value for the minimum number of processors which is required to install this app.
     *  @param int|null $value Value to set for the minimumNumberOfProcessors property.
    */
    public function setMinimumNumberOfProcessors(?int $value ): void {
        $this->minimumNumberOfProcessors = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the minimumSupportedWindowsRelease property value. The value for the minimum supported windows release.
     *  @param string|null $value Value to set for the minimumSupportedWindowsRelease property.
    */
    public function setMinimumSupportedWindowsRelease(?string $value ): void {
        $this->minimumSupportedWindowsRelease = $value;
    }

    /**
     * Sets the msiInformation property value. The MSI details if this Win32 app is an MSI app.
     *  @param Win32LobAppMsiInformation|null $value Value to set for the msiInformation property.
    */
    public function setMsiInformation(?Win32LobAppMsiInformation $value ): void {
        $this->msiInformation = $value;
    }

    /**
     * Sets the requirementRules property value. The requirement rules to detect Win32 Line of Business (LoB) app.
     *  @param array<Win32LobAppRequirement>|null $value Value to set for the requirementRules property.
    */
    public function setRequirementRules(?array $value ): void {
        $this->requirementRules = $value;
    }

    /**
     * Sets the returnCodes property value. The return codes for post installation behavior.
     *  @param array<Win32LobAppReturnCode>|null $value Value to set for the returnCodes property.
    */
    public function setReturnCodes(?array $value ): void {
        $this->returnCodes = $value;
    }

    /**
     * Sets the rules property value. The detection and requirement rules for this app.
     *  @param array<Win32LobAppRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value ): void {
        $this->rules = $value;
    }

    /**
     * Sets the setupFilePath property value. The relative path of the setup file in the encrypted Win32LobApp package.
     *  @param string|null $value Value to set for the setupFilePath property.
    */
    public function setSetupFilePath(?string $value ): void {
        $this->setupFilePath = $value;
    }

    /**
     * Sets the uninstallCommandLine property value. The command line to uninstall this app
     *  @param string|null $value Value to set for the uninstallCommandLine property.
    */
    public function setUninstallCommandLine(?string $value ): void {
        $this->uninstallCommandLine = $value;
    }

}
