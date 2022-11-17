<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PersonNamePronounciation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new personNamePronounciation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.personNamePronounciation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonNamePronounciation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonNamePronounciation {
        return new PersonNamePronounciation();
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
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'first' => fn(ParseNode $n) => $o->setFirst($n->getStringValue()),
            'last' => fn(ParseNode $n) => $o->setLast($n->getStringValue()),
            'maiden' => fn(ParseNode $n) => $o->setMaiden($n->getStringValue()),
            'middle' => fn(ParseNode $n) => $o->setMiddle($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the first property value. The first property
     * @return string|null
    */
    public function getFirst(): ?string {
        return $this->getBackingStore()->get('first');
    }

    /**
     * Gets the last property value. The last property
     * @return string|null
    */
    public function getLast(): ?string {
        return $this->getBackingStore()->get('last');
    }

    /**
     * Gets the maiden property value. The maiden property
     * @return string|null
    */
    public function getMaiden(): ?string {
        return $this->getBackingStore()->get('maiden');
    }

    /**
     * Gets the middle property value. The middle property
     * @return string|null
    */
    public function getMiddle(): ?string {
        return $this->getBackingStore()->get('middle');
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('first', $this->getFirst());
        $writer->writeStringValue('last', $this->getLast());
        $writer->writeStringValue('maiden', $this->getMaiden());
        $writer->writeStringValue('middle', $this->getMiddle());
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
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the first property value. The first property
     *  @param string|null $value Value to set for the first property.
    */
    public function setFirst(?string $value): void {
        $this->getBackingStore()->set('first', $value);
    }

    /**
     * Sets the last property value. The last property
     *  @param string|null $value Value to set for the last property.
    */
    public function setLast(?string $value): void {
        $this->getBackingStore()->set('last', $value);
    }

    /**
     * Sets the maiden property value. The maiden property
     *  @param string|null $value Value to set for the maiden property.
    */
    public function setMaiden(?string $value): void {
        $this->getBackingStore()->set('maiden', $value);
    }

    /**
     * Sets the middle property value. The middle property
     *  @param string|null $value Value to set for the middle property.
    */
    public function setMiddle(?string $value): void {
        $this->getBackingStore()->set('middle', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
