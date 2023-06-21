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
     * Instantiates a new DeviceHealthScript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. The timestamp of when the device health script was created. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Description of the device health script
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the detectionScriptContent property value. The entire content of the detection powershell script
     * @return StreamInterface|null
    */
    public function getDetectionScriptContent(): ?StreamInterface {
        return $this->getBackingStore()->get('detectionScriptContent');
    }

    /**
     * Gets the detectionScriptParameters property value. List of ComplexType DetectionScriptParameters objects.
     * @return array<DeviceHealthScriptParameter>|null
    */
    public function getDetectionScriptParameters(): ?array {
        return $this->getBackingStore()->get('detectionScriptParameters');
    }

    /**
     * Gets the deviceHealthScriptType property value. Indicates the type of device script.
     * @return DeviceHealthScriptType|null
    */
    public function getDeviceHealthScriptType(): ?DeviceHealthScriptType {
        return $this->getBackingStore()->get('deviceHealthScriptType');
    }

    /**
     * Gets the deviceRunStates property value. List of run states for the device health script across all devices
     * @return array<DeviceHealthScriptDeviceState>|null
    */
    public function getDeviceRunStates(): ?array {
        return $this->getBackingStore()->get('deviceRunStates');
    }

    /**
     * Gets the displayName property value. Name of the device health script
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        return $this->getBackingStore()->get('enforceSignatureCheck');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceHealthScriptAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectionScriptContent' => fn(ParseNode $n) => $o->setDetectionScriptContent($n->getBinaryContent()),
            'detectionScriptParameters' => fn(ParseNode $n) => $o->setDetectionScriptParameters($n->getCollectionOfObjectValues([DeviceHealthScriptParameter::class, 'createFromDiscriminatorValue'])),
            'deviceHealthScriptType' => fn(ParseNode $n) => $o->setDeviceHealthScriptType($n->getEnumValue(DeviceHealthScriptType::class)),
            'deviceRunStates' => fn(ParseNode $n) => $o->setDeviceRunStates($n->getCollectionOfObjectValues([DeviceHealthScriptDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforceSignatureCheck' => fn(ParseNode $n) => $o->setEnforceSignatureCheck($n->getBooleanValue()),
            'highestAvailableVersion' => fn(ParseNode $n) => $o->setHighestAvailableVersion($n->getStringValue()),
            'isGlobalScript' => fn(ParseNode $n) => $o->setIsGlobalScript($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'remediationScriptContent' => fn(ParseNode $n) => $o->setRemediationScriptContent($n->getBinaryContent()),
            'remediationScriptParameters' => fn(ParseNode $n) => $o->setRemediationScriptParameters($n->getCollectionOfObjectValues([DeviceHealthScriptParameter::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'runAs32Bit' => fn(ParseNode $n) => $o->setRunAs32Bit($n->getBooleanValue()),
            'runAsAccount' => fn(ParseNode $n) => $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)),
            'runSummary' => fn(ParseNode $n) => $o->setRunSummary($n->getObjectValue([DeviceHealthScriptRunSummary::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the highestAvailableVersion property value. Highest available version for a Microsoft Proprietary script
     * @return string|null
    */
    public function getHighestAvailableVersion(): ?string {
        return $this->getBackingStore()->get('highestAvailableVersion');
    }

    /**
     * Gets the isGlobalScript property value. Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
     * @return bool|null
    */
    public function getIsGlobalScript(): ?bool {
        return $this->getBackingStore()->get('isGlobalScript');
    }

    /**
     * Gets the lastModifiedDateTime property value. The timestamp of when the device health script was modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the publisher property value. Name of the device health script publisher
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->getBackingStore()->get('publisher');
    }

    /**
     * Gets the remediationScriptContent property value. The entire content of the remediation powershell script
     * @return StreamInterface|null
    */
    public function getRemediationScriptContent(): ?StreamInterface {
        return $this->getBackingStore()->get('remediationScriptContent');
    }

    /**
     * Gets the remediationScriptParameters property value. List of ComplexType RemediationScriptParameters objects.
     * @return array<DeviceHealthScriptParameter>|null
    */
    public function getRemediationScriptParameters(): ?array {
        return $this->getBackingStore()->get('remediationScriptParameters');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tag IDs for the device health script
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the runAs32Bit property value. Indicate whether PowerShell script(s) should run as 32-bit
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        return $this->getBackingStore()->get('runAs32Bit');
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->getBackingStore()->get('runAsAccount');
    }

    /**
     * Gets the runSummary property value. High level run summary for device health script.
     * @return DeviceHealthScriptRunSummary|null
    */
    public function getRunSummary(): ?DeviceHealthScriptRunSummary {
        return $this->getBackingStore()->get('runSummary');
    }

    /**
     * Gets the version property value. Version of the device health script
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBinaryContent('detectionScriptContent', $this->getDetectionScriptContent());
        $writer->writeCollectionOfObjectValues('detectionScriptParameters', $this->getDetectionScriptParameters());
        $writer->writeEnumValue('deviceHealthScriptType', $this->getDeviceHealthScriptType());
        $writer->writeCollectionOfObjectValues('deviceRunStates', $this->getDeviceRunStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enforceSignatureCheck', $this->getEnforceSignatureCheck());
        $writer->writeStringValue('highestAvailableVersion', $this->getHighestAvailableVersion());
        $writer->writeBooleanValue('isGlobalScript', $this->getIsGlobalScript());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeBinaryContent('remediationScriptContent', $this->getRemediationScriptContent());
        $writer->writeCollectionOfObjectValues('remediationScriptParameters', $this->getRemediationScriptParameters());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('runAs32Bit', $this->getRunAs32Bit());
        $writer->writeEnumValue('runAsAccount', $this->getRunAsAccount());
        $writer->writeObjectValue('runSummary', $this->getRunSummary());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The list of group assignments for the device health script
     * @param array<DeviceHealthScriptAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The timestamp of when the device health script was created. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description of the device health script
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectionScriptContent property value. The entire content of the detection powershell script
     * @param StreamInterface|null $value Value to set for the detectionScriptContent property.
    */
    public function setDetectionScriptContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('detectionScriptContent', $value);
    }

    /**
     * Sets the detectionScriptParameters property value. List of ComplexType DetectionScriptParameters objects.
     * @param array<DeviceHealthScriptParameter>|null $value Value to set for the detectionScriptParameters property.
    */
    public function setDetectionScriptParameters(?array $value): void {
        $this->getBackingStore()->set('detectionScriptParameters', $value);
    }

    /**
     * Sets the deviceHealthScriptType property value. Indicates the type of device script.
     * @param DeviceHealthScriptType|null $value Value to set for the deviceHealthScriptType property.
    */
    public function setDeviceHealthScriptType(?DeviceHealthScriptType $value): void {
        $this->getBackingStore()->set('deviceHealthScriptType', $value);
    }

    /**
     * Sets the deviceRunStates property value. List of run states for the device health script across all devices
     * @param array<DeviceHealthScriptDeviceState>|null $value Value to set for the deviceRunStates property.
    */
    public function setDeviceRunStates(?array $value): void {
        $this->getBackingStore()->set('deviceRunStates', $value);
    }

    /**
     * Sets the displayName property value. Name of the device health script
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforceSignatureCheck property value. Indicate whether the script signature needs be checked
     * @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value): void {
        $this->getBackingStore()->set('enforceSignatureCheck', $value);
    }

    /**
     * Sets the highestAvailableVersion property value. Highest available version for a Microsoft Proprietary script
     * @param string|null $value Value to set for the highestAvailableVersion property.
    */
    public function setHighestAvailableVersion(?string $value): void {
        $this->getBackingStore()->set('highestAvailableVersion', $value);
    }

    /**
     * Sets the isGlobalScript property value. Determines if this is Microsoft Proprietary Script. Proprietary scripts are read-only
     * @param bool|null $value Value to set for the isGlobalScript property.
    */
    public function setIsGlobalScript(?bool $value): void {
        $this->getBackingStore()->set('isGlobalScript', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The timestamp of when the device health script was modified. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the publisher property value. Name of the device health script publisher
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the remediationScriptContent property value. The entire content of the remediation powershell script
     * @param StreamInterface|null $value Value to set for the remediationScriptContent property.
    */
    public function setRemediationScriptContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('remediationScriptContent', $value);
    }

    /**
     * Sets the remediationScriptParameters property value. List of ComplexType RemediationScriptParameters objects.
     * @param array<DeviceHealthScriptParameter>|null $value Value to set for the remediationScriptParameters property.
    */
    public function setRemediationScriptParameters(?array $value): void {
        $this->getBackingStore()->set('remediationScriptParameters', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tag IDs for the device health script
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the runAs32Bit property value. Indicate whether PowerShell script(s) should run as 32-bit
     * @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value): void {
        $this->getBackingStore()->set('runAs32Bit', $value);
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value): void {
        $this->getBackingStore()->set('runAsAccount', $value);
    }

    /**
     * Sets the runSummary property value. High level run summary for device health script.
     * @param DeviceHealthScriptRunSummary|null $value Value to set for the runSummary property.
    */
    public function setRunSummary(?DeviceHealthScriptRunSummary $value): void {
        $this->getBackingStore()->set('runSummary', $value);
    }

    /**
     * Sets the version property value. Version of the device health script
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
