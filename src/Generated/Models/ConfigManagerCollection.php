<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A ConfigManager defined collection of devices or users.
*/
class ConfigManagerCollection extends Entity implements Parsable 
{
    /**
     * Instantiates a new configManagerCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigManagerCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigManagerCollection {
        return new ConfigManagerCollection();
    }

    /**
     * Gets the collectionIdentifier property value. The collection identifier in SCCM.
     * @return string|null
    */
    public function getCollectionIdentifier(): ?string {
        $val = $this->getBackingStore()->get('collectionIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collectionIdentifier'");
    }

    /**
     * Gets the createdDateTime property value. The created date.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The DisplayName.
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
        return array_merge(parent::getFieldDeserializers(), [
            'collectionIdentifier' => fn(ParseNode $n) => $o->setCollectionIdentifier($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hierarchyIdentifier' => fn(ParseNode $n) => $o->setHierarchyIdentifier($n->getStringValue()),
            'hierarchyName' => fn(ParseNode $n) => $o->setHierarchyName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hierarchyIdentifier property value. The Hierarchy Identifier.
     * @return string|null
    */
    public function getHierarchyIdentifier(): ?string {
        $val = $this->getBackingStore()->get('hierarchyIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hierarchyIdentifier'");
    }

    /**
     * Gets the hierarchyName property value. The HierarchyName.
     * @return string|null
    */
    public function getHierarchyName(): ?string {
        $val = $this->getBackingStore()->get('hierarchyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hierarchyName'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The last modified date.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('collectionIdentifier', $this->getCollectionIdentifier());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('hierarchyIdentifier', $this->getHierarchyIdentifier());
        $writer->writeStringValue('hierarchyName', $this->getHierarchyName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the collectionIdentifier property value. The collection identifier in SCCM.
     * @param string|null $value Value to set for the collectionIdentifier property.
    */
    public function setCollectionIdentifier(?string $value): void {
        $this->getBackingStore()->set('collectionIdentifier', $value);
    }

    /**
     * Sets the createdDateTime property value. The created date.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The DisplayName.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hierarchyIdentifier property value. The Hierarchy Identifier.
     * @param string|null $value Value to set for the hierarchyIdentifier property.
    */
    public function setHierarchyIdentifier(?string $value): void {
        $this->getBackingStore()->set('hierarchyIdentifier', $value);
    }

    /**
     * Sets the hierarchyName property value. The HierarchyName.
     * @param string|null $value Value to set for the hierarchyName property.
    */
    public function setHierarchyName(?string $value): void {
        $this->getBackingStore()->set('hierarchyName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The last modified date.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
