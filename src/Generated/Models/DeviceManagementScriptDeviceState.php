<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptDeviceState extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $errorCode Error code corresponding to erroneous execution of the device management script.
    */
    private ?int $errorCode = null;
    
    /**
     * @var string|null $errorDescription Error description corresponding to erroneous execution of the device management script.
    */
    private ?string $errorDescription = null;
    
    /**
     * @var DateTime|null $lastStateUpdateDateTime Latest time the device management script executes.
    */
    private ?DateTime $lastStateUpdateDateTime = null;
    
    /**
     * @var ManagedDevice|null $managedDevice The managed devices that executes the device management script.
    */
    private ?ManagedDevice $managedDevice = null;
    
    /**
     * @var string|null $resultMessage Details of execution output.
    */
    private ?string $resultMessage = null;
    
    /**
     * @var RunState|null $runState State of latest run of the device management script. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    */
    private ?RunState $runState = null;
    
    /**
     * Instantiates a new deviceManagementScriptDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptDeviceState {
        return new DeviceManagementScriptDeviceState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorCode property value. Error code corresponding to erroneous execution of the device management script.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * Gets the errorDescription property value. Error description corresponding to erroneous execution of the device management script.
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        return $this->errorDescription;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'errorDescription' => function (ParseNode $n) use ($o) { $o->setErrorDescription($n->getStringValue()); },
            'lastStateUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastStateUpdateDateTime($n->getDateTimeValue()); },
            'managedDevice' => function (ParseNode $n) use ($o) { $o->setManagedDevice($n->getObjectValue(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'resultMessage' => function (ParseNode $n) use ($o) { $o->setResultMessage($n->getStringValue()); },
            'runState' => function (ParseNode $n) use ($o) { $o->setRunState($n->getEnumValue(RunState::class)); },
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. Latest time the device management script executes.
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        return $this->lastStateUpdateDateTime;
    }

    /**
     * Gets the managedDevice property value. The managed devices that executes the device management script.
     * @return ManagedDevice|null
    */
    public function getManagedDevice(): ?ManagedDevice {
        return $this->managedDevice;
    }

    /**
     * Gets the resultMessage property value. Details of execution output.
     * @return string|null
    */
    public function getResultMessage(): ?string {
        return $this->resultMessage;
    }

    /**
     * Gets the runState property value. State of latest run of the device management script. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     * @return RunState|null
    */
    public function getRunState(): ?RunState {
        return $this->runState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeStringValue('errorDescription', $this->errorDescription);
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->lastStateUpdateDateTime);
        $writer->writeObjectValue('managedDevice', $this->managedDevice);
        $writer->writeStringValue('resultMessage', $this->resultMessage);
        $writer->writeEnumValue('runState', $this->runState);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the errorCode property value. Error code corresponding to erroneous execution of the device management script.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorDescription property value. Error description corresponding to erroneous execution of the device management script.
     *  @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value ): void {
        $this->errorDescription = $value;
    }

    /**
     * Sets the lastStateUpdateDateTime property value. Latest time the device management script executes.
     *  @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value ): void {
        $this->lastStateUpdateDateTime = $value;
    }

    /**
     * Sets the managedDevice property value. The managed devices that executes the device management script.
     *  @param ManagedDevice|null $value Value to set for the managedDevice property.
    */
    public function setManagedDevice(?ManagedDevice $value ): void {
        $this->managedDevice = $value;
    }

    /**
     * Sets the resultMessage property value. Details of execution output.
     *  @param string|null $value Value to set for the resultMessage property.
    */
    public function setResultMessage(?string $value ): void {
        $this->resultMessage = $value;
    }

    /**
     * Sets the runState property value. State of latest run of the device management script. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
     *  @param RunState|null $value Value to set for the runState property.
    */
    public function setRunState(?RunState $value ): void {
        $this->runState = $value;
    }

}
