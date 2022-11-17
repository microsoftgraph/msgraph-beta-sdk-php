<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SensitiveContentLocation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sensitiveContentLocation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sensitiveContentLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitiveContentLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitiveContentLocation {
        return new SensitiveContentLocation();
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
     * Gets the confidence property value. The confidence property
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->getBackingStore()->get('confidence');
    }

    /**
     * Gets the evidences property value. The evidences property
     * @return array<SensitiveContentEvidence>|null
    */
    public function getEvidences(): ?array {
        return $this->getBackingStore()->get('evidences');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getIntegerValue()),
            'evidences' => fn(ParseNode $n) => $o->setEvidences($n->getCollectionOfObjectValues([SensitiveContentEvidence::class, 'createFromDiscriminatorValue'])),
            'idMatch' => fn(ParseNode $n) => $o->setIdMatch($n->getStringValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the idMatch property value. The idMatch property
     * @return string|null
    */
    public function getIdMatch(): ?string {
        return $this->getBackingStore()->get('idMatch');
    }

    /**
     * Gets the length property value. The length property
     * @return int|null
    */
    public function getLength(): ?int {
        return $this->getBackingStore()->get('length');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the offset property value. The offset property
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->getBackingStore()->get('offset');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('confidence', $this->getConfidence());
        $writer->writeCollectionOfObjectValues('evidences', $this->getEvidences());
        $writer->writeStringValue('idMatch', $this->getIdMatch());
        $writer->writeIntegerValue('length', $this->getLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('offset', $this->getOffset());
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
     * Sets the confidence property value. The confidence property
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the evidences property value. The evidences property
     *  @param array<SensitiveContentEvidence>|null $value Value to set for the evidences property.
    */
    public function setEvidences(?array $value): void {
        $this->getBackingStore()->set('evidences', $value);
    }

    /**
     * Sets the idMatch property value. The idMatch property
     *  @param string|null $value Value to set for the idMatch property.
    */
    public function setIdMatch(?string $value): void {
        $this->getBackingStore()->set('idMatch', $value);
    }

    /**
     * Sets the length property value. The length property
     *  @param int|null $value Value to set for the length property.
    */
    public function setLength(?int $value): void {
        $this->getBackingStore()->set('length', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offset property value. The offset property
     *  @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->getBackingStore()->set('offset', $value);
    }

}
