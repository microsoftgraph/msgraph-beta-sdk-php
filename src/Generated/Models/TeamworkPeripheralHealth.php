<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkPeripheralHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkConnection|null $connection The connected state and time since the peripheral device was connected.
    */
    private ?TeamworkConnection $connection = null;
    
    /**
     * @var bool|null $isOptional True if the peripheral is optional. Used for health computation.
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
     * Instantiates a new teamworkPeripheralHealth and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkPeripheralHealth');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkPeripheralHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkPeripheralHealth {
        return new TeamworkPeripheralHealth();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the connection property value. The connected state and time since the peripheral device was connected.
     * @return TeamworkConnection|null
    */
    public function getConnection(): ?TeamworkConnection {
        return $this->connection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connection' => function (ParseNode $n) use ($o) { $o->setConnection($n->getObjectValue(array(TeamworkConnection::class, 'createFromDiscriminatorValue'))); },
            'isOptional' => function (ParseNode $n) use ($o) { $o->setIsOptional($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'peripheral' => function (ParseNode $n) use ($o) { $o->setPeripheral($n->getObjectValue(array(TeamworkPeripheral::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isOptional property value. True if the peripheral is optional. Used for health computation.
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
        $writer->writeObjectValue('connection', $this->connection);
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
     * Sets the connection property value. The connected state and time since the peripheral device was connected.
     *  @param TeamworkConnection|null $value Value to set for the connection property.
    */
    public function setConnection(?TeamworkConnection $value ): void {
        $this->connection = $value;
    }

    /**
     * Sets the isOptional property value. True if the peripheral is optional. Used for health computation.
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
