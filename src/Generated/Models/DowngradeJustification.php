<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DowngradeJustification implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new downgradeJustification and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DowngradeJustification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DowngradeJustification {
        return new DowngradeJustification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isDowngradeJustified' => fn(ParseNode $n) => $o->setIsDowngradeJustified($n->getBooleanValue()),
            'justificationMessage' => fn(ParseNode $n) => $o->setJustificationMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isDowngradeJustified property value. Indicates whether the downgrade is or is not justified.
     * @return bool|null
    */
    public function getIsDowngradeJustified(): ?bool {
        return $this->getBackingStore()->get('isDowngradeJustified');
    }

    /**
     * Gets the justificationMessage property value. Message that indicates why a downgrade is justified. The message will appear in administrative logs.
     * @return string|null
    */
    public function getJustificationMessage(): ?string {
        return $this->getBackingStore()->get('justificationMessage');
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
        $writer->writeBooleanValue('isDowngradeJustified', $this->getIsDowngradeJustified());
        $writer->writeStringValue('justificationMessage', $this->getJustificationMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isDowngradeJustified property value. Indicates whether the downgrade is or is not justified.
     * @param bool|null $value Value to set for the isDowngradeJustified property.
    */
    public function setIsDowngradeJustified(?bool $value): void {
        $this->getBackingStore()->set('isDowngradeJustified', $value);
    }

    /**
     * Sets the justificationMessage property value. Message that indicates why a downgrade is justified. The message will appear in administrative logs.
     * @param string|null $value Value to set for the justificationMessage property.
    */
    public function setJustificationMessage(?string $value): void {
        $this->getBackingStore()->set('justificationMessage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
