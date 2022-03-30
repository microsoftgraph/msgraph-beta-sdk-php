<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkPeripheralHealth implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TeamworkConnection|null $connection The connected state and time since the peripheral device was connected. */
    private ?TeamworkConnection $connection = null;
    
    /** @var bool|null $isOptional True if the peripheral is optional. Used for health computation. */
    private ?bool $isOptional = null;
    
    /** @var TeamworkPeripheral|null $peripheral  */
    private ?TeamworkPeripheral $peripheral = null;
    
    /**
     * Instantiates a new teamworkPeripheralHealth and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkPeripheralHealth
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkPeripheralHealth {
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
        return  [
            'connection' => function (self $o, ParseNode $n) { $o->setConnection($n->getObjectValue(TeamworkConnection::class)); },
            'isOptional' => function (self $o, ParseNode $n) { $o->setIsOptional($n->getBooleanValue()); },
            'peripheral' => function (self $o, ParseNode $n) { $o->setPeripheral($n->getObjectValue(TeamworkPeripheral::class)); },
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
     * Gets the peripheral property value. 
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
     * Sets the peripheral property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the peripheral property.
    */
    public function setPeripheral(?TeamworkPeripheral $value ): void {
        $this->peripheral = $value;
    }

}
