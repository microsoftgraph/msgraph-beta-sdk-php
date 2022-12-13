<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DiscoveredSensitiveType implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new discoveredSensitiveType and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoveredSensitiveType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscoveredSensitiveType {
        return new DiscoveredSensitiveType();
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
     * Gets the classificationAttributes property value. The classificationAttributes property
     * @return array<ClassificationAttribute>|null
    */
    public function getClassificationAttributes(): ?array {
        return $this->getBackingStore()->get('classificationAttributes');
    }

    /**
     * Gets the confidence property value. The confidence property
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->getBackingStore()->get('confidence');
    }

    /**
     * Gets the count property value. The count property
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->getBackingStore()->get('count');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classificationAttributes' => fn(ParseNode $n) => $o->setClassificationAttributes($n->getCollectionOfObjectValues([ClassificationAttribute::class, 'createFromDiscriminatorValue'])),
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getIntegerValue()),
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return Guid|null
    */
    public function getId(): ?Guid {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classificationAttributes', $this->getClassificationAttributes());
        $writer->writeIntegerValue('confidence', $this->getConfidence());
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the classificationAttributes property value. The classificationAttributes property
     *  @param array<ClassificationAttribute>|null $value Value to set for the classificationAttributes property.
    */
    public function setClassificationAttributes(?array $value): void {
        $this->getBackingStore()->set('classificationAttributes', $value);
    }

    /**
     * Sets the confidence property value. The confidence property
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the count property value. The count property
     *  @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->getBackingStore()->set('count', $value);
    }

    /**
     * Sets the id property value. The id property
     *  @param Guid|null $value Value to set for the id property.
    */
    public function setId(?Guid $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
