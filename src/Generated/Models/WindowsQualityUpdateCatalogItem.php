<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsQualityUpdateCatalogItem extends WindowsUpdateCatalogItem implements Parsable 
{
    /**
     * @var WindowsQualityUpdateClassification|null $classification Windows quality update classification
    */
    private ?WindowsQualityUpdateClassification $classification = null;
    
    /**
     * @var bool|null $isExpeditable Flag indicating if update qualifies for expedite
    */
    private ?bool $isExpeditable = null;
    
    /**
     * @var string|null $kbArticleId Knowledge base article id
    */
    private ?string $kbArticleId = null;
    
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
        return $this->classification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->isExpeditable;
    }

    /**
     * Gets the kbArticleId property value. Knowledge base article id
     * @return string|null
    */
    public function getKbArticleId(): ?string {
        return $this->kbArticleId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->classification);
        $writer->writeBooleanValue('isExpeditable', $this->isExpeditable);
        $writer->writeStringValue('kbArticleId', $this->kbArticleId);
    }

    /**
     * Sets the classification property value. Windows quality update classification
     *  @param WindowsQualityUpdateClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?WindowsQualityUpdateClassification $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the isExpeditable property value. Flag indicating if update qualifies for expedite
     *  @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value ): void {
        $this->isExpeditable = $value;
    }

    /**
     * Sets the kbArticleId property value. Knowledge base article id
     *  @param string|null $value Value to set for the kbArticleId property.
    */
    public function setKbArticleId(?string $value ): void {
        $this->kbArticleId = $value;
    }

}
