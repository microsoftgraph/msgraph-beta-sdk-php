<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptDeviceState extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $assignmentFilterIds A list of the assignment filter ids used for health script applicability evaluation
    */
    private ?array $assignmentFilterIds = null;
    
    /**
     * @var RunState|null $detectionState Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    */
    private ?RunState $detectionState = null;
    
    /**
     * @var DateTime|null $expectedStateUpdateDateTime The next timestamp of when the device health script is expected to execute
    */
    private ?DateTime $expectedStateUpdateDateTime = null;
    
    /**
     * @var DateTime|null $lastStateUpdateDateTime The last timestamp of when the device health script executed
    */
    private ?DateTime $lastStateUpdateDateTime = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The last time that Intune Managment Extension synced with Intune
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var ManagedDevice|null $managedDevice The managed device on which the device health script executed
    */
    private ?ManagedDevice $managedDevice = null;
    
    /**
     * @var string|null $postRemediationDetectionScriptError Error from the detection script after remediation
    */
    private ?string $postRemediationDetectionScriptError = null;
    
    /**
     * @var string|null $postRemediationDetectionScriptOutput Detection script output after remediation
    */
    private ?string $postRemediationDetectionScriptOutput = null;
    
    /**
     * @var string|null $preRemediationDetectionScriptError Error from the detection script before remediation
    */
    private ?string $preRemediationDetectionScriptError = null;
    
    /**
     * @var string|null $preRemediationDetectionScriptOutput Output of the detection script before remediation
    */
    private ?string $preRemediationDetectionScriptOutput = null;
    
    /**
     * @var string|null $remediationScriptError Error output of the remediation script
    */
    private ?string $remediationScriptError = null;
    
    /**
     * @var RemediationState|null $remediationState Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError.
    */
    private ?RemediationState $remediationState = null;
    
    /**
     * Instantiates a new deviceHealthScriptDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptDeviceState {
        return new DeviceHealthScriptDeviceState();
    }

    /**
     * Gets the assignmentFilterIds property value. A list of the assignment filter ids used for health script applicability evaluation
     * @return array<string>|null
    */
    public function getAssignmentFilterIds(): ?array {
        return $this->assignmentFilterIds;
    }

    /**
     * Gets the detectionState property value. Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     * @return RunState|null
    */
    public function getDetectionState(): ?RunState {
        return $this->detectionState;
    }

    /**
     * Gets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     * @return DateTime|null
    */
    public function getExpectedStateUpdateDateTime(): ?DateTime {
        return $this->expectedStateUpdateDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentFilterIds' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterIds($n->getCollectionOfPrimitiveValues()); },
            'detectionState' => function (ParseNode $n) use ($o) { $o->setDetectionState($n->getEnumValue(RunState::class)); },
            'expectedStateUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setExpectedStateUpdateDateTime($n->getDateTimeValue()); },
            'lastStateUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastStateUpdateDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDevice' => function (ParseNode $n) use ($o) { $o->setManagedDevice($n->getObjectValue(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'postRemediationDetectionScriptError' => function (ParseNode $n) use ($o) { $o->setPostRemediationDetectionScriptError($n->getStringValue()); },
            'postRemediationDetectionScriptOutput' => function (ParseNode $n) use ($o) { $o->setPostRemediationDetectionScriptOutput($n->getStringValue()); },
            'preRemediationDetectionScriptError' => function (ParseNode $n) use ($o) { $o->setPreRemediationDetectionScriptError($n->getStringValue()); },
            'preRemediationDetectionScriptOutput' => function (ParseNode $n) use ($o) { $o->setPreRemediationDetectionScriptOutput($n->getStringValue()); },
            'remediationScriptError' => function (ParseNode $n) use ($o) { $o->setRemediationScriptError($n->getStringValue()); },
            'remediationState' => function (ParseNode $n) use ($o) { $o->setRemediationState($n->getEnumValue(RemediationState::class)); },
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        return $this->lastStateUpdateDateTime;
    }

    /**
     * Gets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managedDevice property value. The managed device on which the device health script executed
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        return $this->managedDevice;
    }

    /**
     * Gets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptError(): ?string {
        return $this->postRemediationDetectionScriptError;
    }

    /**
     * Gets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptOutput(): ?string {
        return $this->postRemediationDetectionScriptOutput;
    }

    /**
     * Gets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptError(): ?string {
        return $this->preRemediationDetectionScriptError;
    }

    /**
     * Gets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptOutput(): ?string {
        return $this->preRemediationDetectionScriptOutput;
    }

    /**
     * Gets the remediationScriptError property value. Error output of the remediation script
     * @return string|null
    */
    public function getRemediationScriptError(): ?string {
        return $this->remediationScriptError;
    }

    /**
     * Gets the remediationState property value. Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError.
     * @return RemediationState|null
    */
    public function getRemediationState(): ?RemediationState {
        return $this->remediationState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('assignmentFilterIds', $this->assignmentFilterIds);
        $writer->writeEnumValue('detectionState', $this->detectionState);
        $writer->writeDateTimeValue('expectedStateUpdateDateTime', $this->expectedStateUpdateDateTime);
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->lastStateUpdateDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeObjectValue('managedDevice', $this->managedDevice);
        $writer->writeStringValue('postRemediationDetectionScriptError', $this->postRemediationDetectionScriptError);
        $writer->writeStringValue('postRemediationDetectionScriptOutput', $this->postRemediationDetectionScriptOutput);
        $writer->writeStringValue('preRemediationDetectionScriptError', $this->preRemediationDetectionScriptError);
        $writer->writeStringValue('preRemediationDetectionScriptOutput', $this->preRemediationDetectionScriptOutput);
        $writer->writeStringValue('remediationScriptError', $this->remediationScriptError);
        $writer->writeEnumValue('remediationState', $this->remediationState);
    }

    /**
     * Sets the assignmentFilterIds property value. A list of the assignment filter ids used for health script applicability evaluation
     *  @param array<string>|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?array $value ): void {
        $this->assignmentFilterIds = $value;
    }

    /**
     * Sets the detectionState property value. Detection state from the lastest device health script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     *  @param RunState|null $value Value to set for the detectionState property.
    */
    public function setDetectionState(?RunState $value ): void {
        $this->detectionState = $value;
    }

    /**
     * Sets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     *  @param DateTime|null $value Value to set for the expectedStateUpdateDateTime property.
    */
    public function setExpectedStateUpdateDateTime(?DateTime $value ): void {
        $this->expectedStateUpdateDateTime = $value;
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     *  @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value ): void {
        $this->lastStateUpdateDateTime = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managedDevice property value. The managed device on which the device health script executed
     *  @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value ): void {
        $this->managedDevice = $value;
    }

    /**
     * Sets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     *  @param string|null $value Value to set for the postRemediationDetectionScriptError property.
    */
    public function setPostRemediationDetectionScriptError(?string $value ): void {
        $this->postRemediationDetectionScriptError = $value;
    }

    /**
     * Sets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     *  @param string|null $value Value to set for the postRemediationDetectionScriptOutput property.
    */
    public function setPostRemediationDetectionScriptOutput(?string $value ): void {
        $this->postRemediationDetectionScriptOutput = $value;
    }

    /**
     * Sets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     *  @param string|null $value Value to set for the preRemediationDetectionScriptError property.
    */
    public function setPreRemediationDetectionScriptError(?string $value ): void {
        $this->preRemediationDetectionScriptError = $value;
    }

    /**
     * Sets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     *  @param string|null $value Value to set for the preRemediationDetectionScriptOutput property.
    */
    public function setPreRemediationDetectionScriptOutput(?string $value ): void {
        $this->preRemediationDetectionScriptOutput = $value;
    }

    /**
     * Sets the remediationScriptError property value. Error output of the remediation script
     *  @param string|null $value Value to set for the remediationScriptError property.
    */
    public function setRemediationScriptError(?string $value ): void {
        $this->remediationScriptError = $value;
    }

    /**
     * Sets the remediationState property value. Remediation state from the lastest device health script execution. Possible values are: unknown, skipped, success, remediationFailed, scriptError.
     *  @param RemediationState|null $value Value to set for the remediationState property.
    */
    public function setRemediationState(?RemediationState $value ): void {
        $this->remediationState = $value;
    }

}
