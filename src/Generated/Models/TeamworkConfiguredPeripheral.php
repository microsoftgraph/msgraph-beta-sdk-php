<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkConfiguredPeripheral implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isOptional True if the current peripheral is optional. If set to false, this property is also used as part of the calculation of the health state for the device.
    */
    private ?bool $isOptional = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TeamworkPeripheral|null $peripheral The peripheral property
    */
    private ?TeamworkPeripheral $peripheral = null;
    
    /**
     * Instantiates a new teamworkConfiguredPeripheral and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkConfiguredPeripheral');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkConfiguredPeripheral
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkConfiguredPeripheral {
        return new TeamworkConfiguredPeripheral();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isOptional' => function (ParseNode $n) use ($o) { $o->setIsOptional($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'peripheral' => function (ParseNode $n) use ($o) { $o->setPeripheral($n->getObjectValue(array(TeamworkPeripheral::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isOptional property value. True if the current peripheral is optional. If set to false, this property is also used as part of the calculation of the health state for the device.
     * @return bool|null
    */
    public function getIsOptional(): ?bool {
        return $this->isOptional;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the peripheral property value. The peripheral property
     * @return TeamworkPeripheral|null
    */
    public function getPeripheral(): ?TeamworkPeripheral {
        return $this->peripheral;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isOptional', $this->isOptional);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('peripheral', $this->peripheral);
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
     * Sets the isOptional property value. True if the current peripheral is optional. If set to false, this property is also used as part of the calculation of the health state for the device.
     *  @param bool|null $value Value to set for the isOptional property.
    */
    public function setIsOptional(?bool $value ): void {
        $this->isOptional = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the peripheral property value. The peripheral property
     *  @param TeamworkPeripheral|null $value Value to set for the peripheral property.
    */
    public function setPeripheral(?TeamworkPeripheral $value ): void {
        $this->peripheral = $value;
    }

}
