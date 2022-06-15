<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceComplianceScript extends Entity implements Parsable 
{
    /**
     * @var array<DeviceHealthScriptAssignment>|null $assignments The list of group assignments for the device compliance script
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The timestamp of when the device compliance script was created. This property is read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Description of the device compliance script
    */
    private ?string $description = null;
    
    /**
     * @var StreamInterface|null $detectionScriptContent The entire content of the detection powershell script
    */
    private ?StreamInterface $detectionScriptContent = null;
    
    /**
     * @var array<DeviceComplianceScriptDeviceState>|null $deviceRunStates List of run states for the device compliance script across all devices
    */
    private ?array $deviceRunStates = null;
    
    /**
     * @var string|null $displayName Name of the device compliance script
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enforceSignatureCheck Indicate whether the script signature needs be checked
    */
    private ?bool $enforceSignatureCheck = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The timestamp of when the device compliance script was modified. This property is read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $publisher Name of the device compliance script publisher
    */
    private ?string $publisher = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tag IDs for the device compliance script
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var bool|null $runAs32Bit Indicate whether PowerShell script(s) should run as 32-bit
    */
    private ?bool $runAs32Bit = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount Indicates the type of execution context. Possible values are: system, user.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * @var DeviceComplianceScriptRunSummary|null $runSummary High level run summary for device compliance script.
    */
    private ?DeviceComplianceScriptRunSummary $runSummary = null;
    
    /**
     * @var string|null $version Version of the device compliance script
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new deviceComplianceScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScript {
        return new DeviceComplianceScript();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the device compliance script
     * @return array<DeviceHealthScriptAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The timestamp of when the device compliance script was created. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Description of the device compliance script
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
     * Gets the deviceRunStates property value. List of run states for the device compliance script across all devices
     * @return array<DeviceComplianceScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        return $this->deviceRunStates;
    }

    /**
     * Gets the displayName property value. Name of the device compliance script
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
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'detectionScriptContent' => function (ParseNode $n) use ($o) { $o->setDetectionScriptContent($n->getBinaryContent()); },
            'deviceRunStates' => function (ParseNode $n) use ($o) { $o->setDeviceRunStates($n->getCollectionOfObjectValues(array(DeviceComplianceScriptDeviceState::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforceSignatureCheck' => function (ParseNode $n) use ($o) { $o->setEnforceSignatureCheck($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'runAs32Bit' => function (ParseNode $n) use ($o) { $o->setRunAs32Bit($n->getBooleanValue()); },
            'runAsAccount' => function (ParseNode $n) use ($o) { $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)); },
            'runSummary' => function (ParseNode $n) use ($o) { $o->setRunSummary($n->getObjectValue(array(DeviceComplianceScriptRunSummary::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The timestamp of when the device compliance script was modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the publisher property value. Name of the device compliance script publisher
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for the device compliance script
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
     * Gets the runAsAccount property value. Indicates the type of execution context. Possible values are: system, user.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Gets the runSummary property value. High level run summary for device compliance script.
     * @return DeviceComplianceScriptRunSummary|null
    */
    public function getRunSummary(): ?DeviceComplianceScriptRunSummary {
        return $this->runSummary;
    }

    /**
     * Gets the version property value. Version of the device compliance script
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
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBinaryContent('detectionScriptContent', $this->detectionScriptContent);
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->deviceRunStates);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enforceSignatureCheck', $this->enforceSignatureCheck);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('runAs32Bit', $this->runAs32Bit);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
        $writer->writeObjectValue('runSummary', $this->runSummary);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device compliance script
     *  @param array<DeviceHealthScriptAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The timestamp of when the device compliance script was created. This property is read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Description of the device compliance script
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
     * Sets the deviceRunStates property value. List of run states for the device compliance script across all devices
     *  @param array<DeviceComplianceScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value ): void {
        $this->deviceRunStates = $value;
    }

    /**
     * Sets the displayName property value. Name of the device compliance script
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
     * Sets the lastModifiedDateTime property value. The timestamp of when the device compliance script was modified. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the publisher property value. Name of the device compliance script publisher
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for the device compliance script
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
     * Sets the runAsAccount property value. Indicates the type of execution context. Possible values are: system, user.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

    /**
     * Sets the runSummary property value. High level run summary for device compliance script.
     *  @param DeviceComplianceScriptRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?DeviceComplianceScriptRunSummary $value ): void {
        $this->runSummary = $value;
    }

    /**
     * Sets the version property value. Version of the device compliance script
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
