<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class StructuredDataEntry implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new StructuredDataEntry and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StructuredDataEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StructuredDataEntry {
        return new StructuredDataEntry();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'keyEntry' => fn(ParseNode $n) => $o->setKeyEntry($n->getObjectValue([StructuredDataEntryTypedValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'valueEntry' => fn(ParseNode $n) => $o->setValueEntry($n->getObjectValue([StructuredDataEntryTypedValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the keyEntry property value. The keyEntry property
     * @return StructuredDataEntryTypedValue|null
    */
    public function getKeyEntry(): ?StructuredDataEntryTypedValue {
        $val = $this->getBackingStore()->get('keyEntry');
        if (is_null($val) || $val instanceof StructuredDataEntryTypedValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyEntry'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the valueEntry property value. The valueEntry property
     * @return StructuredDataEntryTypedValue|null
    */
    public function getValueEntry(): ?StructuredDataEntryTypedValue {
        $val = $this->getBackingStore()->get('valueEntry');
        if (is_null($val) || $val instanceof StructuredDataEntryTypedValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueEntry'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('keyEntry', $this->getKeyEntry());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('valueEntry', $this->getValueEntry());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the keyEntry property value. The keyEntry property
     * @param StructuredDataEntryTypedValue|null $value Value to set for the keyEntry property.
    */
    public function setKeyEntry(?StructuredDataEntryTypedValue $value): void {
        $this->getBackingStore()->set('keyEntry', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the valueEntry property value. The valueEntry property
     * @param StructuredDataEntryTypedValue|null $value Value to set for the valueEntry property.
    */
    public function setValueEntry(?StructuredDataEntryTypedValue $value): void {
        $this->getBackingStore()->set('valueEntry', $value);
    }

}
