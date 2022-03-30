<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Psr\Http\Message\StreamInterface;

class CompanyInformation extends Entity 
{
    /** @var PostalAddressType|null $address  */
    private ?PostalAddressType $address = null;
    
    /** @var string|null $currencyCode  */
    private ?string $currencyCode = null;
    
    /** @var Date|null $currentFiscalYearStartDate  */
    private ?Date $currentFiscalYearStartDate = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $email  */
    private ?string $email = null;
    
    /** @var string|null $faxNumber  */
    private ?string $faxNumber = null;
    
    /** @var string|null $industry  */
    private ?string $industry = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $phoneNumber  */
    private ?string $phoneNumber = null;
    
    /** @var StreamInterface|null $picture  */
    private ?StreamInterface $picture = null;
    
    /** @var string|null $taxRegistrationNumber  */
    private ?string $taxRegistrationNumber = null;
    
    /** @var string|null $website  */
    private ?string $website = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): CompanyInformation {
        return new CompanyInformation();
    }

    /**
     * Gets the address property value. 
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->address;
    }

    /**
     * Gets the currencyCode property value. 
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currentFiscalYearStartDate property value. 
     * @return Date|null
    */
    public function getCurrentFiscalYearStartDate(): ?Date {
        return $this->currentFiscalYearStartDate;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. 
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the faxNumber property value. 
     * @return string|null
    */
    public function getFaxNumber(): ?string {
        return $this->faxNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getObjectValue(PostalAddressType::class)); },
            'currencyCode' => function (self $o, ParseNode $n) { $o->setCurrencyCode($n->getStringValue()); },
            'currentFiscalYearStartDate' => function (self $o, ParseNode $n) { $o->setCurrentFiscalYearStartDate($n->getDateValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'faxNumber' => function (self $o, ParseNode $n) { $o->setFaxNumber($n->getStringValue()); },
            'industry' => function (self $o, ParseNode $n) { $o->setIndustry($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
            'picture' => function (self $o, ParseNode $n) { $o->setPicture($n->getBinaryContent()); },
            'taxRegistrationNumber' => function (self $o, ParseNode $n) { $o->setTaxRegistrationNumber($n->getStringValue()); },
            'website' => function (self $o, ParseNode $n) { $o->setWebsite($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the industry property value. 
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the phoneNumber property value. 
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the picture property value. 
     * @return StreamInterface|null
    */
    public function getPicture(): ?StreamInterface {
        return $this->picture;
    }

    /**
     * Gets the taxRegistrationNumber property value. 
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        return $this->taxRegistrationNumber;
    }

    /**
     * Gets the website property value. 
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeDateValue('currentFiscalYearStartDate', $this->currentFiscalYearStartDate);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('faxNumber', $this->faxNumber);
        $writer->writeStringValue('industry', $this->industry);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeBinaryContent('picture', $this->picture);
        $writer->writeStringValue('taxRegistrationNumber', $this->taxRegistrationNumber);
        $writer->writeStringValue('website', $this->website);
    }

    /**
     * Sets the address property value. 
     *  @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the currencyCode property value. 
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currentFiscalYearStartDate property value. 
     *  @param Date|null $value Value to set for the currentFiscalYearStartDate property.
    */
    public function setCurrentFiscalYearStartDate(?Date $value ): void {
        $this->currentFiscalYearStartDate = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. 
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the faxNumber property value. 
     *  @param string|null $value Value to set for the faxNumber property.
    */
    public function setFaxNumber(?string $value ): void {
        $this->faxNumber = $value;
    }

    /**
     * Sets the industry property value. 
     *  @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value ): void {
        $this->industry = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the phoneNumber property value. 
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the picture property value. 
     *  @param StreamInterface|null $value Value to set for the picture property.
    */
    public function setPicture(?StreamInterface $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the taxRegistrationNumber property value. 
     *  @param string|null $value Value to set for the taxRegistrationNumber property.
    */
    public function setTaxRegistrationNumber(?string $value ): void {
        $this->taxRegistrationNumber = $value;
    }

    /**
     * Sets the website property value. 
     *  @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value ): void {
        $this->website = $value;
    }

}
