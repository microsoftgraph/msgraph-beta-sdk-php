<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceComplianceScriptDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceScriptDeviceState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptDeviceState {
        return new DeviceComplianceScriptDeviceState();
    }

    /**
     * Gets the detectionState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getDetectionState(): ?RunState {
        return $this->getBackingStore()->get('detectionState');
    }

    /**
     * Gets the expectedStateUpdateDateTime property value. The next timestamp of when the device compliance script is expected to execute
     * @return DateTime|null
    */
    public function getExpectedStateUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expectedStateUpdateDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionState' => fn(ParseNode $n) => $o->setDetectionState($n->getEnumValue(RunState::class)),
            'expectedStateUpdateDateTime' => fn(ParseNode $n) => $o->setExpectedStateUpdateDateTime($n->getDateTimeValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'managedDevice' => fn(ParseNode $n) => $o->setManagedDevice($n->getObjectValue([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'scriptError' => fn(ParseNode $n) => $o->setScriptError($n->getStringValue()),
            'scriptOutput' => fn(ParseNode $n) => $o->setScriptOutput($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the device compliance script executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastStateUpdateDateTime');
    }

    /**
     * Gets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the managedDevice property value. The managed device on which the device compliance script executed
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        return $this->getBackingStore()->get('managedDevice');
    }

    /**
     * Gets the scriptError property value. Error from the detection script
     * @return string|null
    */
    public function getScriptError(): ?string {
        return $this->getBackingStore()->get('scriptError');
    }

    /**
     * Gets the scriptOutput property value. Output of the detection script
     * @return string|null
    */
    public function getScriptOutput(): ?string {
        return $this->getBackingStore()->get('scriptOutput');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionState', $this->getDetectionState());
        $writer->writeDateTimeValue('expectedStateUpdateDateTime', $this->getExpectedStateUpdateDateTime());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeObjectValue('managedDevice', $this->getManagedDevice());
        $writer->writeStringValue('scriptError', $this->getScriptError());
        $writer->writeStringValue('scriptOutput', $this->getScriptOutput());
    }

    /**
     * Sets the detectionState property value. Indicates the type of execution status of the device management script.
     *  @param RunState|null $value Value to set for the detectionState property.
    */
    public function setDetectionState(?RunState $value): void {
        $this->getBackingStore()->set('detectionState', $value);
    }

    /**
     * Sets the expectedStateUpdateDateTime property value. The next timestamp of when the device compliance script is expected to execute
     *  @param DateTime|null $value Value to set for the expectedStateUpdateDateTime property.
    */
    public function setExpectedStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expectedStateUpdateDateTime', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the device compliance script executed
     *  @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. The last time that Intune Managment Extension synced with Intune
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the managedDevice property value. The managed device on which the device compliance script executed
     *  @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value): void {
        $this->getBackingStore()->set('managedDevice', $value);
    }

    /**
     * Sets the scriptError property value. Error from the detection script
     *  @param string|null $value Value to set for the scriptError property.
    */
    public function setScriptError(?string $value): void {
        $this->getBackingStore()->set('scriptError', $value);
    }

    /**
     * Sets the scriptOutput property value. Output of the detection script
     *  @param string|null $value Value to set for the scriptOutput property.
    */
    public function setScriptOutput(?string $value): void {
        $this->getBackingStore()->set('scriptOutput', $value);
    }

}
