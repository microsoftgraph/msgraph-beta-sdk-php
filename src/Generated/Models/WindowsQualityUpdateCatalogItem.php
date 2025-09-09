<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows update catalog item entity
*/
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
     * Gets the classification property value. Windows quality update category
     * @return WindowsQualityUpdateCategory|null
    */
    public function getClassification(): ?WindowsQualityUpdateCategory {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof WindowsQualityUpdateCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * Gets the cveSeverityInformation property value. CVE information for catalog items
     * @return WindowsQualityUpdateCveSeverityInformation|null
    */
    public function getCveSeverityInformation(): ?WindowsQualityUpdateCveSeverityInformation {
        $val = $this->getBackingStore()->get('cveSeverityInformation');
        if (is_null($val) || $val instanceof WindowsQualityUpdateCveSeverityInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cveSeverityInformation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(WindowsQualityUpdateCategory::class)),
            'cveSeverityInformation' => fn(ParseNode $n) => $o->setCveSeverityInformation($n->getObjectValue([WindowsQualityUpdateCveSeverityInformation::class, 'createFromDiscriminatorValue'])),
            'isExpeditable' => fn(ParseNode $n) => $o->setIsExpeditable($n->getBooleanValue()),
            'kbArticleId' => fn(ParseNode $n) => $o->setKbArticleId($n->getStringValue()),
            'productRevisions' => fn(ParseNode $n) => $o->setProductRevisions($n->getCollectionOfObjectValues([WindowsQualityUpdateCatalogProductRevision::class, 'createFromDiscriminatorValue'])),
            'qualityUpdateCadence' => fn(ParseNode $n) => $o->setQualityUpdateCadence($n->getEnumValue(WindowsQualityUpdateCadence::class)),
        ]);
    }

    /**
     * Gets the isExpeditable property value. When TRUE, indicates that the quality updates qualify for expedition. When FALSE, indicates the quality updates do not quality for expedition. Default value is FALSE. Read-only
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
     * Gets the kbArticleId property value. Identifies the knowledge base article associated with the Windows quality update catalog item. Read-only
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
     * Gets the productRevisions property value. The operating system product revisions that are released as part of this quality update. Read-only.
     * @return array<WindowsQualityUpdateCatalogProductRevision>|null
    */
    public function getProductRevisions(): ?array {
        $val = $this->getBackingStore()->get('productRevisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsQualityUpdateCatalogProductRevision::class);
            /** @var array<WindowsQualityUpdateCatalogProductRevision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productRevisions'");
    }

    /**
     * Gets the qualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand. This property cannot be modified and is automatically populated when the catalog is created.
     * @return WindowsQualityUpdateCadence|null
    */
    public function getQualityUpdateCadence(): ?WindowsQualityUpdateCadence {
        $val = $this->getBackingStore()->get('qualityUpdateCadence');
        if (is_null($val) || $val instanceof WindowsQualityUpdateCadence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualityUpdateCadence'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeObjectValue('cveSeverityInformation', $this->getCveSeverityInformation());
        $writer->writeBooleanValue('isExpeditable', $this->getIsExpeditable());
        $writer->writeStringValue('kbArticleId', $this->getKbArticleId());
        $writer->writeCollectionOfObjectValues('productRevisions', $this->getProductRevisions());
        $writer->writeEnumValue('qualityUpdateCadence', $this->getQualityUpdateCadence());
    }

    /**
     * Sets the classification property value. Windows quality update category
     * @param WindowsQualityUpdateCategory|null $value Value to set for the classification property.
    */
    public function setClassification(?WindowsQualityUpdateCategory $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the cveSeverityInformation property value. CVE information for catalog items
     * @param WindowsQualityUpdateCveSeverityInformation|null $value Value to set for the cveSeverityInformation property.
    */
    public function setCveSeverityInformation(?WindowsQualityUpdateCveSeverityInformation $value): void {
        $this->getBackingStore()->set('cveSeverityInformation', $value);
    }

    /**
     * Sets the isExpeditable property value. When TRUE, indicates that the quality updates qualify for expedition. When FALSE, indicates the quality updates do not quality for expedition. Default value is FALSE. Read-only
     * @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value): void {
        $this->getBackingStore()->set('isExpeditable', $value);
    }

    /**
     * Sets the kbArticleId property value. Identifies the knowledge base article associated with the Windows quality update catalog item. Read-only
     * @param string|null $value Value to set for the kbArticleId property.
    */
    public function setKbArticleId(?string $value): void {
        $this->getBackingStore()->set('kbArticleId', $value);
    }

    /**
     * Sets the productRevisions property value. The operating system product revisions that are released as part of this quality update. Read-only.
     * @param array<WindowsQualityUpdateCatalogProductRevision>|null $value Value to set for the productRevisions property.
    */
    public function setProductRevisions(?array $value): void {
        $this->getBackingStore()->set('productRevisions', $value);
    }

    /**
     * Sets the qualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand. This property cannot be modified and is automatically populated when the catalog is created.
     * @param WindowsQualityUpdateCadence|null $value Value to set for the qualityUpdateCadence property.
    */
    public function setQualityUpdateCadence(?WindowsQualityUpdateCadence $value): void {
        $this->getBackingStore()->set('qualityUpdateCadence', $value);
    }

}
