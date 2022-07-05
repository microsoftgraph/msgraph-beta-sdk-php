<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptDeviceState extends Entity implements Parsable 
{
    /**
     * @var RunState|null $detectionState Detection state from the lastest device compliance script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    */
    private ?RunState $detectionState = null;
    
    /**
     * @var DateTime|null $expectedStateUpdateDateTime The next timestamp of when the device compliance script is expected to execute
    */
    private ?DateTime $expectedStateUpdateDateTime = null;
    
    /**
     * @var DateTime|null $lastStateUpdateDateTime The last timestamp of when the device compliance script executed
    */
    private ?DateTime $lastStateUpdateDateTime = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The last time that Intune Managment Extension synced with Intune
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var ManagedDevice|null $managedDevice The managed device on which the device compliance script executed
    */
    private ?ManagedDevice $managedDevice = null;
    
    /**
     * @var string|null $scriptError Error from the detection script
    */
    private ?string $scriptError = null;
    
    /**
     * @var string|null $scriptOutput Output of the detection script
    */
    private ?string $scriptOutput = null;
    
    /**
     * Instantiates a new deviceComplianceScriptDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the detectionState property value. Detection state from the lastest device compliance script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     * @return RunState|null
    */
    public function getDetectionState(): ?RunState {
        return $this->detectionState;
    }

    /**
     * Gets the expectedStateUpdateDateTime property value. The next timestamp of when the device compliance script is expected to execute
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
            'detectionState' => function (ParseNode $n) use ($o) { $o->setDetectionState($n->getEnumValue(RunState::class)); },
            'expectedStateUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setExpectedStateUpdateDateTime($n->getDateTimeValue()); },
            'lastStateUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastStateUpdateDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDevice' => function (ParseNode $n) use ($o) { $o->setManagedDevice($n->getObjectValue(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'scriptError' => function (ParseNode $n) use ($o) { $o->setScriptError($n->getStringValue()); },
            'scriptOutput' => function (ParseNode $n) use ($o) { $o->setScriptOutput($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. The last timestamp of when the device compliance script executed
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
     * Gets the managedDevice property value. The managed device on which the device compliance script executed
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        return $this->managedDevice;
    }

    /**
     * Gets the scriptError property value. Error from the detection script
     * @return string|null
    */
    public function getScriptError(): ?string {
        return $this->scriptError;
    }

    /**
     * Gets the scriptOutput property value. Output of the detection script
     * @return string|null
    */
    public function getScriptOutput(): ?string {
        return $this->scriptOutput;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionState', $this->detectionState);
        $writer->writeDateTimeValue('expectedStateUpdateDateTime', $this->expectedStateUpdateDateTime);
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->lastStateUpdateDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeObjectValue('managedDevice', $this->managedDevice);
        $writer->writeStringValue('scriptError', $this->scriptError);
        $writer->writeStringValue('scriptOutput', $this->scriptOutput);
    }

    /**
     * Sets the detectionState property value. Detection state from the lastest device compliance script execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     *  @param RunState|null $value Value to set for the detectionState property.
    */
    public function setDetectionState(?RunState $value ): void {
        $this->detectionState = $value;
    }

    /**
     * Sets the expectedStateUpdateDateTime property value. The next timestamp of when the device compliance script is expected to execute
     *  @param DateTime|null $value Value to set for the expectedStateUpdateDateTime property.
    */
    public function setExpectedStateUpdateDateTime(?DateTime $value ): void {
        $this->expectedStateUpdateDateTime = $value;
    }

    /**
     * Sets the lastStateUpdateDateTime property value. The last timestamp of when the device compliance script executed
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
     * Sets the managedDevice property value. The managed device on which the device compliance script executed
     *  @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value ): void {
        $this->managedDevice = $value;
    }

    /**
     * Sets the scriptError property value. Error from the detection script
     *  @param string|null $value Value to set for the scriptError property.
    */
    public function setScriptError(?string $value ): void {
        $this->scriptError = $value;
    }

    /**
     * Sets the scriptOutput property value. Output of the detection script
     *  @param string|null $value Value to set for the scriptOutput property.
    */
    public function setScriptOutput(?string $value ): void {
        $this->scriptOutput = $value;
    }

}
