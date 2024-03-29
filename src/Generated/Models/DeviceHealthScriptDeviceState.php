<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties for device run state of the device health script.
*/
class DeviceHealthScriptDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceHealthScriptDeviceState and sets the default values.
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
        $val = $this->getBackingStore()->get('assignmentFilterIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterIds'");
    }

    /**
     * Gets the detectionState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getDetectionState(): ?RunState {
        $val = $this->getBackingStore()->get('detectionState');
        if (is_null($val) || $val instanceof RunState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionState'");
    }

    /**
     * Gets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     * @return DateTime|null
    */
    public function getExpectedStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expectedStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expectedStateUpdateDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentFilterIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssignmentFilterIds($val);
            },
            'detectionState' => fn(ParseNode $n) => $o->setDetectionState($n->getEnumValue(RunState::class)),
            'expectedStateUpdateDateTime' => fn(ParseNode $n) => $o->setExpectedStateUpdateDateTime($n->getDateTimeValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managedDevice' => fn(ParseNode $n) => $o->setManagedDevice($n->getObjectValue([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'postRemediationDetectionScriptError' => fn(ParseNode $n) => $o->setPostRemediationDetectionScriptError($n->getStringValue()),
            'postRemediationDetectionScriptOutput' => fn(ParseNode $n) => $o->setPostRemediationDetectionScriptOutput($n->getStringValue()),
            'preRemediationDetectionScriptError' => fn(ParseNode $n) => $o->setPreRemediationDetectionScriptError($n->getStringValue()),
            'preRemediationDetectionScriptOutput' => fn(ParseNode $n) => $o->setPreRemediationDetectionScriptOutput($n->getStringValue()),
            'remediationScriptError' => fn(ParseNode $n) => $o->setRemediationScriptError($n->getStringValue()),
            'remediationState' => fn(ParseNode $n) => $o->setRemediationState($n->getEnumValue(RemediationState::class)),
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastStateUpdateDateTime'");
    }

    /**
     * Gets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the managedDevice property value. The managed device on which the device health script executed
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        $val = $this->getBackingStore()->get('managedDevice');
        if (is_null($val) || $val instanceof ManagedDevice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevice'");
    }

    /**
     * Gets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptError(): ?string {
        $val = $this->getBackingStore()->get('postRemediationDetectionScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postRemediationDetectionScriptError'");
    }

    /**
     * Gets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     * @return string|null
    */
    public function getPostRemediationDetectionScriptOutput(): ?string {
        $val = $this->getBackingStore()->get('postRemediationDetectionScriptOutput');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postRemediationDetectionScriptOutput'");
    }

    /**
     * Gets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptError(): ?string {
        $val = $this->getBackingStore()->get('preRemediationDetectionScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preRemediationDetectionScriptError'");
    }

    /**
     * Gets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     * @return string|null
    */
    public function getPreRemediationDetectionScriptOutput(): ?string {
        $val = $this->getBackingStore()->get('preRemediationDetectionScriptOutput');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preRemediationDetectionScriptOutput'");
    }

    /**
     * Gets the remediationScriptError property value. Error output of the remediation script
     * @return string|null
    */
    public function getRemediationScriptError(): ?string {
        $val = $this->getBackingStore()->get('remediationScriptError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationScriptError'");
    }

    /**
     * Gets the remediationState property value. Indicates the type of execution status of the device management script.
     * @return RemediationState|null
    */
    public function getRemediationState(): ?RemediationState {
        $val = $this->getBackingStore()->get('remediationState');
        if (is_null($val) || $val instanceof RemediationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('assignmentFilterIds', $this->getAssignmentFilterIds());
        $writer->writeEnumValue('detectionState', $this->getDetectionState());
        $writer->writeDateTimeValue('expectedStateUpdateDateTime', $this->getExpectedStateUpdateDateTime());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeObjectValue('managedDevice', $this->getManagedDevice());
        $writer->writeStringValue('postRemediationDetectionScriptError', $this->getPostRemediationDetectionScriptError());
        $writer->writeStringValue('postRemediationDetectionScriptOutput', $this->getPostRemediationDetectionScriptOutput());
        $writer->writeStringValue('preRemediationDetectionScriptError', $this->getPreRemediationDetectionScriptError());
        $writer->writeStringValue('preRemediationDetectionScriptOutput', $this->getPreRemediationDetectionScriptOutput());
        $writer->writeStringValue('remediationScriptError', $this->getRemediationScriptError());
        $writer->writeEnumValue('remediationState', $this->getRemediationState());
    }

    /**
     * Sets the assignmentFilterIds property value. A list of the assignment filter ids used for health script applicability evaluation
     * @param array<string>|null $value Value to set for the assignmentFilterIds property.
    */
    public function setAssignmentFilterIds(?array $value): void {
        $this->getBackingStore()->set('assignmentFilterIds', $value);
    }

    /**
     * Sets the detectionState property value. Indicates the type of execution status of the device management script.
     * @param RunState|null $value Value to set for the detectionState property.
    */
    public function setDetectionState(?RunState $value): void {
        $this->getBackingStore()->set('detectionState', $value);
    }

    /**
     * Sets the expectedStateUpdateDateTime property value. The next timestamp of when the device health script is expected to execute
     * @param DateTime|null $value Value to set for the expectedStateUpdateDateTime property.
    */
    public function setExpectedStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expectedStateUpdateDateTime', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the device health script executed
     * @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the managedDevice property value. The managed device on which the device health script executed
     * @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value): void {
        $this->getBackingStore()->set('managedDevice', $value);
    }

    /**
     * Sets the postRemediationDetectionScriptError property value. Error from the detection script after remediation
     * @param string|null $value Value to set for the postRemediationDetectionScriptError property.
    */
    public function setPostRemediationDetectionScriptError(?string $value): void {
        $this->getBackingStore()->set('postRemediationDetectionScriptError', $value);
    }

    /**
     * Sets the postRemediationDetectionScriptOutput property value. Detection script output after remediation
     * @param string|null $value Value to set for the postRemediationDetectionScriptOutput property.
    */
    public function setPostRemediationDetectionScriptOutput(?string $value): void {
        $this->getBackingStore()->set('postRemediationDetectionScriptOutput', $value);
    }

    /**
     * Sets the preRemediationDetectionScriptError property value. Error from the detection script before remediation
     * @param string|null $value Value to set for the preRemediationDetectionScriptError property.
    */
    public function setPreRemediationDetectionScriptError(?string $value): void {
        $this->getBackingStore()->set('preRemediationDetectionScriptError', $value);
    }

    /**
     * Sets the preRemediationDetectionScriptOutput property value. Output of the detection script before remediation
     * @param string|null $value Value to set for the preRemediationDetectionScriptOutput property.
    */
    public function setPreRemediationDetectionScriptOutput(?string $value): void {
        $this->getBackingStore()->set('preRemediationDetectionScriptOutput', $value);
    }

    /**
     * Sets the remediationScriptError property value. Error output of the remediation script
     * @param string|null $value Value to set for the remediationScriptError property.
    */
    public function setRemediationScriptError(?string $value): void {
        $this->getBackingStore()->set('remediationScriptError', $value);
    }

    /**
     * Sets the remediationState property value. Indicates the type of execution status of the device management script.
     * @param RemediationState|null $value Value to set for the remediationState property.
    */
    public function setRemediationState(?RemediationState $value): void {
        $this->getBackingStore()->set('remediationState', $value);
    }

}
