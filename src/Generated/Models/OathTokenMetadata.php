<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OathTokenMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new oathTokenMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OathTokenMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OathTokenMetadata {
        return new OathTokenMetadata();
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
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'manufacturerProperties' => fn(ParseNode $n) => $o->setManufacturerProperties($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'tokenType' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the manufacturerProperties property value. The manufacturerProperties property
     * @return array<KeyValue>|null
    */
    public function getManufacturerProperties(): ?array {
        return $this->getBackingStore()->get('manufacturerProperties');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the serialNumber property value. The serialNumber property
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->getBackingStore()->get('serialNumber');
    }

    /**
     * Gets the tokenType property value. The tokenType property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->getBackingStore()->get('tokenType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeCollectionOfObjectValues('manufacturerProperties', $this->getManufacturerProperties());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('tokenType', $this->getTokenType());
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
     * Sets the enabled property value. The enabled property
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the manufacturerProperties property value. The manufacturerProperties property
     *  @param array<KeyValue>|null $value Value to set for the manufacturerProperties property.
    */
    public function setManufacturerProperties(?array $value): void {
        $this->getBackingStore()->set('manufacturerProperties', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serialNumber property value. The serialNumber property
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the tokenType property value. The tokenType property
     *  @param string|null $value Value to set for the tokenType property.
    */
    public function setTokenType(?string $value): void {
        $this->getBackingStore()->set('tokenType', $value);
    }

}
