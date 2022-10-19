<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkHardwareConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkPeripheral|null $compute The compute property
    */
    private ?TeamworkPeripheral $compute = null;
    
    /**
     * @var TeamworkPeripheral|null $hdmiIngest The hdmiIngest property
    */
    private ?TeamworkPeripheral $hdmiIngest = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $processorModel The CPU model on the device.
    */
    private ?string $processorModel = null;
    
    /**
     * Instantiates a new teamworkHardwareConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkHardwareConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHardwareConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHardwareConfiguration {
        return new TeamworkHardwareConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compute property value. The compute property
     * @return TeamworkPeripheral|null
    */
    public function getCompute(): ?TeamworkPeripheral {
        return $this->compute;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compute' => fn(ParseNode $n) => $o->setCompute($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'hdmiIngest' => fn(ParseNode $n) => $o->setHdmiIngest($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processorModel' => fn(ParseNode $n) => $o->setProcessorModel($n->getStringValue()),
        ];
    }

    /**
     * Gets the hdmiIngest property value. The hdmiIngest property
     * @return TeamworkPeripheral|null
    */
    public function getHdmiIngest(): ?TeamworkPeripheral {
        return $this->hdmiIngest;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the processorModel property value. The CPU model on the device.
     * @return string|null
    */
    public function getProcessorModel(): ?string {
        return $this->processorModel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('compute', $this->compute);
        $writer->writeObjectValue('hdmiIngest', $this->hdmiIngest);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('processorModel', $this->processorModel);
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
     * Sets the compute property value. The compute property
     *  @param TeamworkPeripheral|null $value Value to set for the compute property.
    */
    public function setCompute(?TeamworkPeripheral $value ): void {
        $this->compute = $value;
    }

    /**
     * Sets the hdmiIngest property value. The hdmiIngest property
     *  @param TeamworkPeripheral|null $value Value to set for the hdmiIngest property.
    */
    public function setHdmiIngest(?TeamworkPeripheral $value ): void {
        $this->hdmiIngest = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the processorModel property value. The CPU model on the device.
     *  @param string|null $value Value to set for the processorModel property.
    */
    public function setProcessorModel(?string $value ): void {
        $this->processorModel = $value;
    }

}
