<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Psr\Http\Message\StreamInterface;

class CompanyInformation extends Entity implements Parsable 
{
    /**
     * Instantiates a new companyInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompanyInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompanyInformation {
        return new CompanyInformation();
    }

    /**
     * Gets the address property value. The address property
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->getBackingStore()->get('currencyCode');
    }

    /**
     * Gets the currentFiscalYearStartDate property value. The currentFiscalYearStartDate property
     * @return Date|null
    */
    public function getCurrentFiscalYearStartDate(): ?Date {
        return $this->getBackingStore()->get('currentFiscalYearStartDate');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
    }

    /**
     * Gets the faxNumber property value. The faxNumber property
     * @return string|null
    */
    public function getFaxNumber(): ?string {
        return $this->getBackingStore()->get('faxNumber');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currentFiscalYearStartDate' => fn(ParseNode $n) => $o->setCurrentFiscalYearStartDate($n->getDateValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'faxNumber' => fn(ParseNode $n) => $o->setFaxNumber($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getBinaryContent()),
            'taxRegistrationNumber' => fn(ParseNode $n) => $o->setTaxRegistrationNumber($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ]);
    }

    /**
     * Gets the industry property value. The industry property
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->getBackingStore()->get('industry');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->getBackingStore()->get('phoneNumber');
    }

    /**
     * Gets the picture property value. The picture property
     * @return StreamInterface|null
    */
    public function getPicture(): ?StreamInterface {
        return $this->getBackingStore()->get('picture');
    }

    /**
     * Gets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        return $this->getBackingStore()->get('taxRegistrationNumber');
    }

    /**
     * Gets the website property value. The website property
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->getBackingStore()->get('website');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeDateValue('currentFiscalYearStartDate', $this->getCurrentFiscalYearStartDate());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('faxNumber', $this->getFaxNumber());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeBinaryContent('picture', $this->getPicture());
        $writer->writeStringValue('taxRegistrationNumber', $this->getTaxRegistrationNumber());
        $writer->writeStringValue('website', $this->getWebsite());
    }

    /**
     * Sets the address property value. The address property
     * @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     * @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value): void {
        $this->getBackingStore()->set('currencyCode', $value);
    }

    /**
     * Sets the currentFiscalYearStartDate property value. The currentFiscalYearStartDate property
     * @param Date|null $value Value to set for the currentFiscalYearStartDate property.
    */
    public function setCurrentFiscalYearStartDate(?Date $value): void {
        $this->getBackingStore()->set('currentFiscalYearStartDate', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the faxNumber property value. The faxNumber property
     * @param string|null $value Value to set for the faxNumber property.
    */
    public function setFaxNumber(?string $value): void {
        $this->getBackingStore()->set('faxNumber', $value);
    }

    /**
     * Sets the industry property value. The industry property
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->getBackingStore()->set('industry', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the picture property value. The picture property
     * @param StreamInterface|null $value Value to set for the picture property.
    */
    public function setPicture(?StreamInterface $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @param string|null $value Value to set for the taxRegistrationNumber property.
    */
    public function setTaxRegistrationNumber(?string $value): void {
        $this->getBackingStore()->set('taxRegistrationNumber', $value);
    }

    /**
     * Sets the website property value. The website property
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->getBackingStore()->set('website', $value);
    }

}
