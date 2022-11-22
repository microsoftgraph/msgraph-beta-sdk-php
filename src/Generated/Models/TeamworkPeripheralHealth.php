<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkPeripheralHealth implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkPeripheralHealth and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connection property value. The connected state and time since the peripheral device was connected.
     * @return TeamworkConnection|null
    */
    public function getConnection(): ?TeamworkConnection {
        return $this->getBackingStore()->get('connection');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connection' => fn(ParseNode $n) => $o->setConnection($n->getObjectValue([TeamworkConnection::class, 'createFromDiscriminatorValue'])),
            'isOptional' => fn(ParseNode $n) => $o->setIsOptional($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'peripheral' => fn(ParseNode $n) => $o->setPeripheral($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isOptional property value. True if the peripheral is optional. Used for health computation.
     * @return bool|null
    */
    public function getIsOptional(): ?bool {
        return $this->getBackingStore()->get('isOptional');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the peripheral property value. The peripheral property
     * @return TeamworkPeripheral|null
    */
    public function getPeripheral(): ?TeamworkPeripheral {
        return $this->getBackingStore()->get('peripheral');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('connection', $this->getConnection());
        $writer->writeBooleanValue('isOptional', $this->getIsOptional());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('peripheral', $this->getPeripheral());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connection property value. The connected state and time since the peripheral device was connected.
     *  @param TeamworkConnection|null $value Value to set for the connection property.
    */
    public function setConnection(?TeamworkConnection $value): void {
        $this->getBackingStore()->set('connection', $value);
    }

    /**
     * Sets the isOptional property value. True if the peripheral is optional. Used for health computation.
     *  @param bool|null $value Value to set for the isOptional property.
    */
    public function setIsOptional(?bool $value): void {
        $this->getBackingStore()->set('isOptional', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the peripheral property value. The peripheral property
     *  @param TeamworkPeripheral|null $value Value to set for the peripheral property.
    */
    public function setPeripheral(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('peripheral', $value);
    }

}
