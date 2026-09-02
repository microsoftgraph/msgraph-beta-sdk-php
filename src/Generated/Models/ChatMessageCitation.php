<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChatMessageCitation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ChatMessageCitation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageCitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageCitation {
        return new ChatMessageCitation();
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
     * Gets the excerpt property value. Read-only. Text snippet from the cited source.
     * @return string|null
    */
    public function getExcerpt(): ?string {
        $val = $this->getBackingStore()->get('excerpt');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excerpt'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excerpt' => fn(ParseNode $n) => $o->setExcerpt($n->getStringValue()),
            'iconType' => fn(ParseNode $n) => $o->setIconType($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitivityLabel' => fn(ParseNode $n) => $o->setSensitivityLabel($n->getObjectValue([ChatMessageCitationSensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the iconType property value. Read-only. Icon type identifier for the cited source, for example, ExcelIcon or WordIcon.
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
     * Gets the id property value. Read-only. Citation identifier that's unique within the message. The message body references this identifier inline, for example, [1].
     * @return int|null
    */
    public function getId(): ?int {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
     * Gets the sensitivityLabel property value. Read-only. Sensitivity label applied to the cited source.
     * @return ChatMessageCitationSensitivityLabel|null
    */
    public function getSensitivityLabel(): ?ChatMessageCitationSensitivityLabel {
        $val = $this->getBackingStore()->get('sensitivityLabel');
        if (is_null($val) || $val instanceof ChatMessageCitationSensitivityLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabel'");
    }

    /**
     * Gets the title property value. Read-only. Display title of the cited source.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the webUrl property value. Read-only. URL to the cited source.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('excerpt', $this->getExcerpt());
        $writer->writeStringValue('iconType', $this->getIconType());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('sensitivityLabel', $this->getSensitivityLabel());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
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
     * Sets the excerpt property value. Read-only. Text snippet from the cited source.
     * @param string|null $value Value to set for the excerpt property.
    */
    public function setExcerpt(?string $value): void {
        $this->getBackingStore()->set('excerpt', $value);
    }

    /**
     * Sets the iconType property value. Read-only. Icon type identifier for the cited source, for example, ExcelIcon or WordIcon.
     * @param string|null $value Value to set for the iconType property.
    */
    public function setIconType(?string $value): void {
        $this->getBackingStore()->set('iconType', $value);
    }

    /**
     * Sets the id property value. Read-only. Citation identifier that's unique within the message. The message body references this identifier inline, for example, [1].
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensitivityLabel property value. Read-only. Sensitivity label applied to the cited source.
     * @param ChatMessageCitationSensitivityLabel|null $value Value to set for the sensitivityLabel property.
    */
    public function setSensitivityLabel(?ChatMessageCitationSensitivityLabel $value): void {
        $this->getBackingStore()->set('sensitivityLabel', $value);
    }

    /**
     * Sets the title property value. Read-only. Display title of the cited source.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the webUrl property value. Read-only. URL to the cited source.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
