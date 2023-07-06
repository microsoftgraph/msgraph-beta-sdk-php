<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsQualityUpdateCatalogItem extends WindowsUpdateCatalogItem implements Parsable 
{
    /**
     * Instantiates a new WindowsQualityUpdateCatalogItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsQualityUpdateCatalogItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateCatalogItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateCatalogItem {
        return new WindowsQualityUpdateCatalogItem();
    }

    /**
     * Gets the classification property value. Windows quality update classification
     * @return WindowsQualityUpdateClassification|null
    */
    public function getClassification(): ?WindowsQualityUpdateClassification {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof WindowsQualityUpdateClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(WindowsQualityUpdateClassification::class)),
            'isExpeditable' => fn(ParseNode $n) => $o->setIsExpeditable($n->getBooleanValue()),
            'kbArticleId' => fn(ParseNode $n) => $o->setKbArticleId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isExpeditable property value. Flag indicating if update qualifies for expedite
     * @return bool|null
    */
    public function getIsExpeditable(): ?bool {
        $val = $this->getBackingStore()->get('isExpeditable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExpeditable'");
    }

    /**
     * Gets the kbArticleId property value. Knowledge base article id
     * @return string|null
    */
    public function getKbArticleId(): ?string {
        $val = $this->getBackingStore()->get('kbArticleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kbArticleId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeBooleanValue('isExpeditable', $this->getIsExpeditable());
        $writer->writeStringValue('kbArticleId', $this->getKbArticleId());
    }

    /**
     * Sets the classification property value. Windows quality update classification
     * @param WindowsQualityUpdateClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?WindowsQualityUpdateClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the isExpeditable property value. Flag indicating if update qualifies for expedite
     * @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value): void {
        $this->getBackingStore()->set('isExpeditable', $value);
    }

    /**
     * Sets the kbArticleId property value. Knowledge base article id
     * @param string|null $value Value to set for the kbArticleId property.
    */
    public function setKbArticleId(?string $value): void {
        $this->getBackingStore()->set('kbArticleId', $value);
    }

}
