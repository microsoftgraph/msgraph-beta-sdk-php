<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceSummarizedAppState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceId DeviceId of device represented by this object
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RunState|null $summarizedAppState Indicates the type of execution status of the device management script.
    */
    private ?RunState $summarizedAppState = null;
    
    /**
     * Instantiates a new managedDeviceSummarizedAppState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedDeviceSummarizedAppState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceSummarizedAppState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceSummarizedAppState {
        return new ManagedDeviceSummarizedAppState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. DeviceId of device represented by this object
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'summarizedAppState' => fn(ParseNode $n) => $o->setSummarizedAppState($n->getEnumValue(RunState::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the summarizedAppState property value. Indicates the type of execution status of the device management script.
     * @return RunState|null
    */
    public function getSummarizedAppState(): ?RunState {
        return $this->summarizedAppState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('summarizedAppState', $this->summarizedAppState);
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
     * Sets the deviceId property value. DeviceId of device represented by this object
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the summarizedAppState property value. Indicates the type of execution status of the device management script.
     *  @param RunState|null $value Value to set for the summarizedAppState property.
    */
    public function setSummarizedAppState(?RunState $value ): void {
        $this->summarizedAppState = $value;
    }

}
