<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements Parsable 
{
    /**
     * Instantiates a new qualityUpdateCatalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.qualityUpdateCatalogEntry');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateCatalogEntry {
        return new QualityUpdateCatalogEntry();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isExpeditable' => fn(ParseNode $n) => $o->setIsExpeditable($n->getBooleanValue()),
            'qualityUpdateClassification' => fn(ParseNode $n) => $o->setQualityUpdateClassification($n->getEnumValue(QualityUpdateClassification::class)),
        ]);
    }

    /**
     * Gets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
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
     * Gets the qualityUpdateClassification property value. The qualityUpdateClassification property
     * @return QualityUpdateClassification|null
    */
    public function getQualityUpdateClassification(): ?QualityUpdateClassification {
        $val = $this->getBackingStore()->get('qualityUpdateClassification');
        if (is_null($val) || $val instanceof QualityUpdateClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualityUpdateClassification'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isExpeditable', $this->getIsExpeditable());
        $writer->writeEnumValue('qualityUpdateClassification', $this->getQualityUpdateClassification());
    }

    /**
     * Sets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     * @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value): void {
        $this->getBackingStore()->set('isExpeditable', $value);
    }

    /**
     * Sets the qualityUpdateClassification property value. The qualityUpdateClassification property
     * @param QualityUpdateClassification|null $value Value to set for the qualityUpdateClassification property.
    */
    public function setQualityUpdateClassification(?QualityUpdateClassification $value): void {
        $this->getBackingStore()->set('qualityUpdateClassification', $value);
    }

}
