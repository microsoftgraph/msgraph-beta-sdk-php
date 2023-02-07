<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PersonCertification extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new PersonCertification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.personCertification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonCertification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonCertification {
        return new PersonCertification();
    }

    /**
     * Gets the certificationId property value. The referenceable identifier for the certification.
     * @return string|null
    */
    public function getCertificationId(): ?string {
        return $this->getBackingStore()->get('certificationId');
    }

    /**
     * Gets the description property value. Description of the certification.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Title of the certification.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDate property value. The date that the certification expires.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->getBackingStore()->get('endDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificationId' => fn(ParseNode $n) => $o->setCertificationId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'issuedDate' => fn(ParseNode $n) => $o->setIssuedDate($n->getDateValue()),
            'issuingAuthority' => fn(ParseNode $n) => $o->setIssuingAuthority($n->getStringValue()),
            'issuingCompany' => fn(ParseNode $n) => $o->setIssuingCompany($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the issuedDate property value. The date that the certification was issued.
     * @return Date|null
    */
    public function getIssuedDate(): ?Date {
        return $this->getBackingStore()->get('issuedDate');
    }

    /**
     * Gets the issuingAuthority property value. Authority which granted the certification.
     * @return string|null
    */
    public function getIssuingAuthority(): ?string {
        return $this->getBackingStore()->get('issuingAuthority');
    }

    /**
     * Gets the issuingCompany property value. Company which granted the certification.
     * @return string|null
    */
    public function getIssuingCompany(): ?string {
        return $this->getBackingStore()->get('issuingCompany');
    }

    /**
     * Gets the startDate property value. The date that the certification became valid.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->getBackingStore()->get('startDate');
    }

    /**
     * Gets the thumbnailUrl property value. URL referencing a thumbnail of the certification.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->getBackingStore()->get('thumbnailUrl');
    }

    /**
     * Gets the webUrl property value. URL referencing the certification.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificationId', $this->getCertificationId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeDateValue('issuedDate', $this->getIssuedDate());
        $writer->writeStringValue('issuingAuthority', $this->getIssuingAuthority());
        $writer->writeStringValue('issuingCompany', $this->getIssuingCompany());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the certificationId property value. The referenceable identifier for the certification.
     * @param string|null $value Value to set for the certificationId property.
    */
    public function setCertificationId(?string $value): void {
        $this->getBackingStore()->set('certificationId', $value);
    }

    /**
     * Sets the description property value. Description of the certification.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Title of the certification.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDate property value. The date that the certification expires.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the issuedDate property value. The date that the certification was issued.
     * @param Date|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?Date $value): void {
        $this->getBackingStore()->set('issuedDate', $value);
    }

    /**
     * Sets the issuingAuthority property value. Authority which granted the certification.
     * @param string|null $value Value to set for the issuingAuthority property.
    */
    public function setIssuingAuthority(?string $value): void {
        $this->getBackingStore()->set('issuingAuthority', $value);
    }

    /**
     * Sets the issuingCompany property value. Company which granted the certification.
     * @param string|null $value Value to set for the issuingCompany property.
    */
    public function setIssuingCompany(?string $value): void {
        $this->getBackingStore()->set('issuingCompany', $value);
    }

    /**
     * Sets the startDate property value. The date that the certification became valid.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the thumbnailUrl property value. URL referencing a thumbnail of the certification.
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

    /**
     * Sets the webUrl property value. URL referencing the certification.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
