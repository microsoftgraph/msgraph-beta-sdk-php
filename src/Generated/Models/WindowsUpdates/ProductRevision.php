<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProductRevision extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProductRevision and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProductRevision
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProductRevision {
        return new ProductRevision();
    }

    /**
     * Gets the catalogEntry property value. The catalogEntry property
     * @return CatalogEntry|null
    */
    public function getCatalogEntry(): ?CatalogEntry {
        $val = $this->getBackingStore()->get('catalogEntry');
        if (is_null($val) || $val instanceof CatalogEntry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntry'");
    }

    /**
     * Gets the displayName property value. The display name of the content. Read-only.
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
            'catalogEntry' => fn(ParseNode $n) => $o->setCatalogEntry($n->getObjectValue([CatalogEntry::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isHotpatchUpdate' => fn(ParseNode $n) => $o->setIsHotpatchUpdate($n->getBooleanValue()),
            'knowledgeBaseArticle' => fn(ParseNode $n) => $o->setKnowledgeBaseArticle($n->getObjectValue([KnowledgeBaseArticle::class, 'createFromDiscriminatorValue'])),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getObjectValue([BuildVersionDetails::class, 'createFromDiscriminatorValue'])),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isHotpatchUpdate property value. True indicates that the content is hotpatchable; otherwise, false. For more information, see Deploy a hotpatch quality update using Windows Autopatch. Read-only.
     * @return bool|null
    */
    public function getIsHotpatchUpdate(): ?bool {
        $val = $this->getBackingStore()->get('isHotpatchUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHotpatchUpdate'");
    }

    /**
     * Gets the knowledgeBaseArticle property value. The knowledge base article associated with the product revision.
     * @return KnowledgeBaseArticle|null
    */
    public function getKnowledgeBaseArticle(): ?KnowledgeBaseArticle {
        $val = $this->getBackingStore()->get('knowledgeBaseArticle');
        if (is_null($val) || $val instanceof KnowledgeBaseArticle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knowledgeBaseArticle'");
    }

    /**
     * Gets the osBuild property value. The osBuild property
     * @return BuildVersionDetails|null
    */
    public function getOsBuild(): ?BuildVersionDetails {
        $val = $this->getBackingStore()->get('osBuild');
        if (is_null($val) || $val instanceof BuildVersionDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuild'");
    }

    /**
     * Gets the product property value. The product of the revision. The possible values are: Windows 10, Windows 11. Read-only.
     * @return string|null
    */
    public function getProduct(): ?string {
        $val = $this->getBackingStore()->get('product');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'product'");
    }

    /**
     * Gets the releaseDateTime property value. The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('releaseDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseDateTime'");
    }

    /**
     * Gets the version property value. The version of the feature update. Read-only.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalogEntry', $this->getCatalogEntry());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isHotpatchUpdate', $this->getIsHotpatchUpdate());
        $writer->writeObjectValue('knowledgeBaseArticle', $this->getKnowledgeBaseArticle());
        $writer->writeObjectValue('osBuild', $this->getOsBuild());
        $writer->writeStringValue('product', $this->getProduct());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the catalogEntry property value. The catalogEntry property
     * @param CatalogEntry|null $value Value to set for the catalogEntry property.
    */
    public function setCatalogEntry(?CatalogEntry $value): void {
        $this->getBackingStore()->set('catalogEntry', $value);
    }

    /**
     * Sets the displayName property value. The display name of the content. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isHotpatchUpdate property value. True indicates that the content is hotpatchable; otherwise, false. For more information, see Deploy a hotpatch quality update using Windows Autopatch. Read-only.
     * @param bool|null $value Value to set for the isHotpatchUpdate property.
    */
    public function setIsHotpatchUpdate(?bool $value): void {
        $this->getBackingStore()->set('isHotpatchUpdate', $value);
    }

    /**
     * Sets the knowledgeBaseArticle property value. The knowledge base article associated with the product revision.
     * @param KnowledgeBaseArticle|null $value Value to set for the knowledgeBaseArticle property.
    */
    public function setKnowledgeBaseArticle(?KnowledgeBaseArticle $value): void {
        $this->getBackingStore()->set('knowledgeBaseArticle', $value);
    }

    /**
     * Sets the osBuild property value. The osBuild property
     * @param BuildVersionDetails|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?BuildVersionDetails $value): void {
        $this->getBackingStore()->set('osBuild', $value);
    }

    /**
     * Sets the product property value. The product of the revision. The possible values are: Windows 10, Windows 11. Read-only.
     * @param string|null $value Value to set for the product property.
    */
    public function setProduct(?string $value): void {
        $this->getBackingStore()->set('product', $value);
    }

    /**
     * Sets the releaseDateTime property value. The release date for the content. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the version property value. The version of the feature update. Read-only.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
