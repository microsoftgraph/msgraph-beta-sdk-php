<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SectionDisplayIcon implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SectionDisplayIcon and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SectionDisplayIcon
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SectionDisplayIcon {
        return new SectionDisplayIcon();
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
     * Gets the contentUrl property value. The contentUrl property
     * @return string|null
    */
    public function getContentUrl(): ?string {
        $val = $this->getBackingStore()->get('contentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentUrl'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'iconType' => fn(ParseNode $n) => $o->setIconType($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'skinTone' => fn(ParseNode $n) => $o->setSkinTone($n->getEnumValue(SectionIconSkinTone::class)),
        ];
    }

    /**
     * Gets the iconType property value. The iconType property
     * @return string|null
    */
    public function getIconType(): ?string {
        $val = $this->getBackingStore()->get('iconType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconType'");
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
     * Gets the skinTone property value. The skinTone property
     * @return SectionIconSkinTone|null
    */
    public function getSkinTone(): ?SectionIconSkinTone {
        $val = $this->getBackingStore()->get('skinTone');
        if (is_null($val) || $val instanceof SectionIconSkinTone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skinTone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentUrl', $this->getContentUrl());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('iconType', $this->getIconType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('skinTone', $this->getSkinTone());
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
     * Sets the contentUrl property value. The contentUrl property
     * @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value): void {
        $this->getBackingStore()->set('contentUrl', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the iconType property value. The iconType property
     * @param string|null $value Value to set for the iconType property.
    */
    public function setIconType(?string $value): void {
        $this->getBackingStore()->set('iconType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the skinTone property value. The skinTone property
     * @param SectionIconSkinTone|null $value Value to set for the skinTone property.
    */
    public function setSkinTone(?SectionIconSkinTone $value): void {
        $this->getBackingStore()->set('skinTone', $value);
    }

}
