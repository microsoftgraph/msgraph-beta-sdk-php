<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceHealthScript extends Entity implements Parsable 
{
    /**
     * @var array<DeviceHealthScriptAssignment>|null $assignments The list of group assignments for the device health script
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The timestamp of when the device health script was created. This property is read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description of the device health script
    */
    private ?string $description = null;
    
    /**
     * @var StreamInterface|null $detectionScriptContent The entire content of the detection powershell script
    */
    private ?StreamInterface $detectionScriptContent = null;
    
    /**
     * @var array<DeviceHealthScriptParameter>|null $detectionScriptParameters List of ComplexType DetectionScriptParameters objects.
    */
    private ?array $detectionScriptParameters = null;
    
    /**
     * @var array<DeviceHealthScriptDeviceState>|null $deviceRunStates List of run states for the device health script across all devices
    */
    private ?array $deviceRunStates = null;
    
    /**
     * @var string|null $displayName Name of the device health script
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enforceSignatureCheck Indicate whether the script signature needs be checked
    */
    private ?bool $enforceSignatureCheck = null;
    
    /**
     * @var string|null $highestAvailableVersion Highest available version for a Microsoft Proprietary script
    */
    private ?string $highestAvailableVersion = null;
    
    /**
     * @var bool|null $isGlobalScript Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
    */
    private ?bool $isGlobalScript = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The timestamp of when the device health script was modified. This property is read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $publisher Name of the device health script publisher
    */
    private ?string $publisher = null;
    
    /**
     * @var StreamInterface|null $remediationScriptContent The entire content of the remediation powershell script
    */
    private ?StreamInterface $remediationScriptContent = null;
    
    /**
     * @var array<DeviceHealthScriptParameter>|null $remediationScriptParameters List of ComplexType RemediationScriptParameters objects.
    */
    private ?array $remediationScriptParameters = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tag IDs for the device health script
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var bool|null $runAs32Bit Indicate whether PowerShell script(s) should run as 32-bit
    */
    private ?bool $runAs32Bit = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount Indicates the type of execution context the app runs in.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * @var DeviceHealthScriptRunSummary|null $runSummary High level run summary for device health script.
    */
    private ?DeviceHealthScriptRunSummary $runSummary = null;
    
    /**
     * @var string|null $version Version of the device health script
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new deviceHealthScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceHealthScript');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScript {
        return new DeviceHealthScript();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the device health script
     * @return array<DeviceHealthScriptAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The timestamp of when the device health script was created. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the device health script
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the detectionScriptContent property value. The entire content of the detection powershell script
     * @return StreamInterface|null
    */
    public function getDetectionScriptContent(): ?StreamInterface {
        return $this->detectionScriptContent;
    }

    /**
     * Gets the detectionScriptParameters property value. List of ComplexType DetectionScriptParameters objects.
     * @return array<DeviceHealthScriptParameter>|null
    */
    public function getDetectionScriptParameters(): ?array {
        return $this->detectionScriptParameters;
    }

    /**
     * Gets the deviceRunStates property value. List of run states for the device health script across all devices
     * @return array<DeviceHealthScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        return $this->deviceRunStates;
    }

    /**
     * Gets the displayName property value. Name of the device health script
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        return $this->enforceSignatureCheck;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(DeviceHealthScriptAssignment::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'detectionScriptContent' => function (ParseNode $n) use ($o) { $o->setDetectionScriptContent($n->getBinaryContent()); },
            'detectionScriptParameters' => function (ParseNode $n) use ($o) { $o->setDetectionScriptParameters($n->getCollectionOfObjectValues(array(DeviceHealthScriptParameter::class, 'createFromDiscriminatorValue'))); },
            'deviceRunStates' => function (ParseNode $n) use ($o) { $o->setDeviceRunStates($n->getCollectionOfObjectValues(array(DeviceHealthScriptDeviceState::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforceSignatureCheck' => function (ParseNode $n) use ($o) { $o->setEnforceSignatureCheck($n->getBooleanValue()); },
            'highestAvailableVersion' => function (ParseNode $n) use ($o) { $o->setHighestAvailableVersion($n->getStringValue()); },
            'isGlobalScript' => function (ParseNode $n) use ($o) { $o->setIsGlobalScript($n->getBooleanValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'remediationScriptContent' => function (ParseNode $n) use ($o) { $o->setRemediationScriptContent($n->getBinaryContent()); },
            'remediationScriptParameters' => function (ParseNode $n) use ($o) { $o->setRemediationScriptParameters($n->getCollectionOfObjectValues(array(DeviceHealthScriptParameter::class, 'createFromDiscriminatorValue'))); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'runAs32Bit' => function (ParseNode $n) use ($o) { $o->setRunAs32Bit($n->getBooleanValue()); },
            'runAsAccount' => function (ParseNode $n) use ($o) { $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)); },
            'runSummary' => function (ParseNode $n) use ($o) { $o->setRunSummary($n->getObjectValue(array(DeviceHealthScriptRunSummary::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the highestAvailableVersion property value. Highest available version for a Microsoft Proprietary script
     * @return string|null
    */
    public function getHighestAvailableVersion(): ?string {
        return $this->highestAvailableVersion;
    }

    /**
     * Gets the isGlobalScript property value. Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
     * @return bool|null
    */
    public function getIsGlobalScript(): ?bool {
        return $this->isGlobalScript;
    }

    /**
     * Gets the lastModifiedDateTime property value. The timestamp of when the device health script was modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the publisher property value. Name of the device health script publisher
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the remediationScriptContent property value. The entire content of the remediation powershell script
     * @return StreamInterface|null
    */
    public function getRemediationScriptContent(): ?StreamInterface {
        return $this->remediationScriptContent;
    }

    /**
     * Gets the remediationScriptParameters property value. List of ComplexType RemediationScriptParameters objects.
     * @return array<DeviceHealthScriptParameter>|null
    */
    public function getRemediationScriptParameters(): ?array {
        return $this->remediationScriptParameters;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for the device health script
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the runAs32Bit property value. Indicate whether PowerShell script(s) should run as 32-bit
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        return $this->runAs32Bit;
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Gets the runSummary property value. High level run summary for device health script.
     * @return DeviceHealthScriptRunSummary|null
    */
    public function getRunSummary(): ?DeviceHealthScriptRunSummary {
        return $this->runSummary;
    }

    /**
     * Gets the version property value. Version of the device health script
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBinaryContent('detectionScriptContent', $this->detectionScriptContent);
        $writer->writeCollectionOfObjectValues('detectionScriptParameters', $this->detectionScriptParameters);
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->deviceRunStates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enforceSignatureCheck', $this->enforceSignatureCheck);
        $writer->writeStringValue('highestAvailableVersion', $this->highestAvailableVersion);
        $writer->writeBooleanValue('isGlobalScript', $this->isGlobalScript);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeBinaryContent('remediationScriptContent', $this->remediationScriptContent);
        $writer->writeCollectionOfObjectValues('remediationScriptParameters', $this->remediationScriptParameters);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('runAs32Bit', $this->runAs32Bit);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
        $writer->writeObjectValue('runSummary', $this->runSummary);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device health script
     *  @param array<DeviceHealthScriptAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the description property value. Description of the device health script
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the detectionScriptContent property value. The entire content of the detection powershell script
     *  @param StreamInterface|null $value Value to set for the detectionScriptContent property.
    */
    public function setDetectionScriptContent(?StreamInterface $value ): void {
        $this->detectionScriptContent = $value;
    }

    /**
     * Sets the detectionScriptParameters property value. List of ComplexType DetectionScriptParameters objects.
     *  @param array<DeviceHealthScriptParameter>|null $value Value to set for the detectionScriptParameters property.
    */
    public function setDetectionScriptParameters(?array $value ): void {
        $this->detectionScriptParameters = $value;
    }

    /**
     * Sets the deviceRunStates property value. List of run states for the device health script across all devices
     *  @param array<DeviceHealthScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value ): void {
        $this->deviceRunStates = $value;
    }

    /**
     * Sets the displayName property value. Name of the device health script
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked
     *  @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value ): void {
        $this->enforceSignatureCheck = $value;
    }

    /**
     * Sets the highestAvailableVersion property value. Highest available version for a Microsoft Proprietary script
     *  @param string|null $value Value to set for the highestAvailableVersion property.
    */
    public function setHighestAvailableVersion(?string $value ): void {
        $this->highestAvailableVersion = $value;
    }

    /**
     * Sets the isGlobalScript property value. Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
     *  @param bool|null $value Value to set for the isGlobalScript property.
    */
    public function setIsGlobalScript(?bool $value ): void {
        $this->isGlobalScript = $value;
    }

    /**
     * Sets the publisher property value. Name of the device health script publisher
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the remediationScriptContent property value. The entire content of the remediation powershell script
     *  @param StreamInterface|null $value Value to set for the remediationScriptContent property.
    */
    public function setRemediationScriptContent(?StreamInterface $value ): void {
        $this->remediationScriptContent = $value;
    }

    /**
     * Sets the remediationScriptParameters property value. List of ComplexType RemediationScriptParameters objects.
     *  @param array<DeviceHealthScriptParameter>|null $value Value to set for the remediationScriptParameters property.
    */
    public function setRemediationScriptParameters(?array $value ): void {
        $this->remediationScriptParameters = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for the device health script
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the runAs32Bit property value. Indicate whether PowerShell script(s) should run as 32-bit
     *  @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value ): void {
        $this->runAs32Bit = $value;
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

    /**
     * Sets the runSummary property value. High level run summary for device health script.
     *  @param DeviceHealthScriptRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?DeviceHealthScriptRunSummary $value ): void {
        $this->runSummary = $value;
    }

    /**
     * Sets the version property value. Version of the device health script
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
