<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements Parsable 
{
    /**
     * @var bool|null $isExpeditable Indicates whether the content can be deployed as an expedited quality update. Read-only.
    */
    private ?bool $isExpeditable = null;
    
    /**
     * @var QualityUpdateClassification|null $qualityUpdateClassification The qualityUpdateClassification property
    */
    private ?QualityUpdateClassification $qualityUpdateClassification = null;
    
    /**
     * Instantiates a new QualityUpdateCatalogEntry and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isExpeditable' => function (ParseNode $n) use ($o) { $o->setIsExpeditable($n->getBooleanValue()); },
            'qualityUpdateClassification' => function (ParseNode $n) use ($o) { $o->setQualityUpdateClassification($n->getEnumValue(QualityUpdateClassification::class)); },
        ]);
    }

    /**
     * Gets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     * @return bool|null
    */
    public function getIsExpeditable(): ?bool {
        return $this->isExpeditable;
    }

    /**
     * Gets the qualityUpdateClassification property value. The qualityUpdateClassification property
     * @return QualityUpdateClassification|null
    */
    public function getQualityUpdateClassification(): ?QualityUpdateClassification {
        return $this->qualityUpdateClassification;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isExpeditable', $this->isExpeditable);
        $writer->writeEnumValue('qualityUpdateClassification', $this->qualityUpdateClassification);
    }

    /**
     * Sets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     *  @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value ): void {
        $this->isExpeditable = $value;
    }

    /**
     * Sets the qualityUpdateClassification property value. The qualityUpdateClassification property
     *  @param QualityUpdateClassification|null $value Value to set for the qualityUpdateClassification property.
    */
    public function setQualityUpdateClassification(?QualityUpdateClassification $value ): void {
        $this->qualityUpdateClassification = $value;
    }

}
