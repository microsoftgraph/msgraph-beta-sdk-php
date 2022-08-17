<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PersonCertification extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $certificationId The referenceable identifier for the certification.
    */
    private ?string $certificationId = null;
    
    /**
     * @var string|null $description Description of the certification.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Title of the certification.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $endDate The date that the certification expires.
    */
    private ?Date $endDate = null;
    
    /**
     * @var Date|null $issuedDate The date that the certification was issued.
    */
    private ?Date $issuedDate = null;
    
    /**
     * @var string|null $issuingAuthority Authority which granted the certification.
    */
    private ?string $issuingAuthority = null;
    
    /**
     * @var string|null $issuingCompany Company which granted the certification.
    */
    private ?string $issuingCompany = null;
    
    /**
     * @var Date|null $startDate The date that the certification became valid.
    */
    private ?Date $startDate = null;
    
    /**
     * @var string|null $thumbnailUrl URL referencing a thumbnail of the certification.
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var string|null $webUrl URL referencing the certification.
    */
    private ?string $webUrl = null;
    
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
        return $this->certificationId;
    }

    /**
     * Gets the description property value. Description of the certification.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Title of the certification.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDate property value. The date that the certification expires.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificationId' => function (ParseNode $n) use ($o) { $o->setCertificationId($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDate' => function (ParseNode $n) use ($o) { $o->setEndDate($n->getDateValue()); },
            'issuedDate' => function (ParseNode $n) use ($o) { $o->setIssuedDate($n->getDateValue()); },
            'issuingAuthority' => function (ParseNode $n) use ($o) { $o->setIssuingAuthority($n->getStringValue()); },
            'issuingCompany' => function (ParseNode $n) use ($o) { $o->setIssuingCompany($n->getStringValue()); },
            'startDate' => function (ParseNode $n) use ($o) { $o->setStartDate($n->getDateValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the issuedDate property value. The date that the certification was issued.
     * @return Date|null
    */
    public function getIssuedDate(): ?Date {
        return $this->issuedDate;
    }

    /**
     * Gets the issuingAuthority property value. Authority which granted the certification.
     * @return string|null
    */
    public function getIssuingAuthority(): ?string {
        return $this->issuingAuthority;
    }

    /**
     * Gets the issuingCompany property value. Company which granted the certification.
     * @return string|null
    */
    public function getIssuingCompany(): ?string {
        return $this->issuingCompany;
    }

    /**
     * Gets the startDate property value. The date that the certification became valid.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Gets the thumbnailUrl property value. URL referencing a thumbnail of the certification.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the webUrl property value. URL referencing the certification.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificationId', $this->certificationId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('endDate', $this->endDate);
        $writer->writeDateValue('issuedDate', $this->issuedDate);
        $writer->writeStringValue('issuingAuthority', $this->issuingAuthority);
        $writer->writeStringValue('issuingCompany', $this->issuingCompany);
        $writer->writeDateValue('startDate', $this->startDate);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the certificationId property value. The referenceable identifier for the certification.
     *  @param string|null $value Value to set for the certificationId property.
    */
    public function setCertificationId(?string $value ): void {
        $this->certificationId = $value;
    }

    /**
     * Sets the description property value. Description of the certification.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Title of the certification.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDate property value. The date that the certification expires.
     *  @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value ): void {
        $this->endDate = $value;
    }

    /**
     * Sets the issuedDate property value. The date that the certification was issued.
     *  @param Date|null $value Value to set for the issuedDate property.
    */
    public function setIssuedDate(?Date $value ): void {
        $this->issuedDate = $value;
    }

    /**
     * Sets the issuingAuthority property value. Authority which granted the certification.
     *  @param string|null $value Value to set for the issuingAuthority property.
    */
    public function setIssuingAuthority(?string $value ): void {
        $this->issuingAuthority = $value;
    }

    /**
     * Sets the issuingCompany property value. Company which granted the certification.
     *  @param string|null $value Value to set for the issuingCompany property.
    */
    public function setIssuingCompany(?string $value ): void {
        $this->issuingCompany = $value;
    }

    /**
     * Sets the startDate property value. The date that the certification became valid.
     *  @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value ): void {
        $this->startDate = $value;
    }

    /**
     * Sets the thumbnailUrl property value. URL referencing a thumbnail of the certification.
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the webUrl property value. URL referencing the certification.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
