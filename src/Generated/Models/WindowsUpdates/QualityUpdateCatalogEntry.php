<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the catalogName property value. The catalog name of the content. Read-only.
     * @return string|null
    */
    public function getCatalogName(): ?string {
        $val = $this->getBackingStore()->get('catalogName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogName'");
    }

    /**
     * Gets the cveSeverityInformation property value. Severity information of the Common Vulnerabilities and Exposures associated with the content.
     * @return QualityUpdateCveSeverityInformation|null
    */
    public function getCveSeverityInformation(): ?QualityUpdateCveSeverityInformation {
        $val = $this->getBackingStore()->get('cveSeverityInformation');
        if (is_null($val) || $val instanceof QualityUpdateCveSeverityInformation) {
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
            'catalogName' => fn(ParseNode $n) => $o->setCatalogName($n->getStringValue()),
            'cveSeverityInformation' => fn(ParseNode $n) => $o->setCveSeverityInformation($n->getObjectValue([QualityUpdateCveSeverityInformation::class, 'createFromDiscriminatorValue'])),
            'isExpeditable' => fn(ParseNode $n) => $o->setIsExpeditable($n->getBooleanValue()),
            'productRevisions' => fn(ParseNode $n) => $o->setProductRevisions($n->getCollectionOfObjectValues([ProductRevision::class, 'createFromDiscriminatorValue'])),
            'qualityUpdateCadence' => fn(ParseNode $n) => $o->setQualityUpdateCadence($n->getEnumValue(QualityUpdateCadence::class)),
            'qualityUpdateClassification' => fn(ParseNode $n) => $o->setQualityUpdateClassification($n->getEnumValue(QualityUpdateClassification::class)),
            'shortName' => fn(ParseNode $n) => $o->setShortName($n->getStringValue()),
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
     * Gets the productRevisions property value. The operating system product revisions that are released as part of this quality update.
     * @return array<ProductRevision>|null
    */
    public function getProductRevisions(): ?array {
        $val = $this->getBackingStore()->get('productRevisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProductRevision::class);
            /** @var array<ProductRevision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productRevisions'");
    }

    /**
     * Gets the qualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand, unknownFutureValue. Read-only.
     * @return QualityUpdateCadence|null
    */
    public function getQualityUpdateCadence(): ?QualityUpdateCadence {
        $val = $this->getBackingStore()->get('qualityUpdateCadence');
        if (is_null($val) || $val instanceof QualityUpdateCadence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qualityUpdateCadence'");
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
     * Gets the shortName property value. The short name of the content. Read-only.
     * @return string|null
    */
    public function getShortName(): ?string {
        $val = $this->getBackingStore()->get('shortName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('catalogName', $this->getCatalogName());
        $writer->writeObjectValue('cveSeverityInformation', $this->getCveSeverityInformation());
        $writer->writeBooleanValue('isExpeditable', $this->getIsExpeditable());
        $writer->writeCollectionOfObjectValues('productRevisions', $this->getProductRevisions());
        $writer->writeEnumValue('qualityUpdateCadence', $this->getQualityUpdateCadence());
        $writer->writeEnumValue('qualityUpdateClassification', $this->getQualityUpdateClassification());
        $writer->writeStringValue('shortName', $this->getShortName());
    }

    /**
     * Sets the catalogName property value. The catalog name of the content. Read-only.
     * @param string|null $value Value to set for the catalogName property.
    */
    public function setCatalogName(?string $value): void {
        $this->getBackingStore()->set('catalogName', $value);
    }

    /**
     * Sets the cveSeverityInformation property value. Severity information of the Common Vulnerabilities and Exposures associated with the content.
     * @param QualityUpdateCveSeverityInformation|null $value Value to set for the cveSeverityInformation property.
    */
    public function setCveSeverityInformation(?QualityUpdateCveSeverityInformation $value): void {
        $this->getBackingStore()->set('cveSeverityInformation', $value);
    }

    /**
     * Sets the isExpeditable property value. Indicates whether the content can be deployed as an expedited quality update. Read-only.
     * @param bool|null $value Value to set for the isExpeditable property.
    */
    public function setIsExpeditable(?bool $value): void {
        $this->getBackingStore()->set('isExpeditable', $value);
    }

    /**
     * Sets the productRevisions property value. The operating system product revisions that are released as part of this quality update.
     * @param array<ProductRevision>|null $value Value to set for the productRevisions property.
    */
    public function setProductRevisions(?array $value): void {
        $this->getBackingStore()->set('productRevisions', $value);
    }

    /**
     * Sets the qualityUpdateCadence property value. The publishing cadence of the quality update. Possible values are: monthly, outOfBand, unknownFutureValue. Read-only.
     * @param QualityUpdateCadence|null $value Value to set for the qualityUpdateCadence property.
    */
    public function setQualityUpdateCadence(?QualityUpdateCadence $value): void {
        $this->getBackingStore()->set('qualityUpdateCadence', $value);
    }

    /**
     * Sets the qualityUpdateClassification property value. The qualityUpdateClassification property
     * @param QualityUpdateClassification|null $value Value to set for the qualityUpdateClassification property.
    */
    public function setQualityUpdateClassification(?QualityUpdateClassification $value): void {
        $this->getBackingStore()->set('qualityUpdateClassification', $value);
    }

    /**
     * Sets the shortName property value. The short name of the content. Read-only.
     * @param string|null $value Value to set for the shortName property.
    */
    public function setShortName(?string $value): void {
        $this->getBackingStore()->set('shortName', $value);
    }

}
