<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PersonAward extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new PersonAward and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.personAward');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonAward
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonAward {
        return new PersonAward();
    }

    /**
     * Gets the description property value. Descpription of the award or honor.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Name of the award or honor.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'issuedDate' => fn(ParseNode $n) => $o->setIssuedDate($n->getDateValue()),
            'issuingAuthority' => fn(ParseNode $n) => $o->setIssuingAuthority($n->getStringValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the issuedDate property value. The date that the award or honor was granted.
     * @return Date|null
    */
    public function getIssuedDate(): ?Date {
        $val = $this->getBackingStore()->get('issuedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuedDate'");
    }

    /**
     * Gets the issuingAuthority property value. Authority which granted the award or honor.
     * @return string|null
    */
    public function getIssuingAuthority(): ?string {
        $val = $this->getBackingStore()->get('issuingAuthority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuingAuthority'");
    }

    /**
     * Gets the thumbnailUrl property value. URL referencing a thumbnail of the award or honor.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        $val = $this->getBackingStore()->get('thumbnailUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbnailUrl'");
    }

    /**
     * Gets the webUrl property value. URL referencing the award or honor.
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
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('issuedDate', $this->getIssuedDate());
        $writer->writeStringValue('issuingAuthority', $this->getIssuingAuthority());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the description property value. Descpription of the award or honor.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Name of the award or honor.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the issuedDate property value. The date that the award or honor was granted.
     * @param Date|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?Date $value): void {
        $this->getBackingStore()->set('issuedDate', $value);
    }

    /**
     * Sets the issuingAuthority property value. Authority which granted the award or honor.
     * @param string|null $value Value to set for the issuingAuthority property.
    */
    public function setIssuingAuthority(?string $value): void {
        $this->getBackingStore()->set('issuingAuthority', $value);
    }

    /**
     * Sets the thumbnailUrl property value. URL referencing a thumbnail of the award or honor.
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

    /**
     * Sets the webUrl property value. URL referencing the award or honor.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
