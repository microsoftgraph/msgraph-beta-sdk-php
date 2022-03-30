<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Employee extends Entity 
{
    /** @var PostalAddressType|null $address  */
    private ?PostalAddressType $address = null;
    
    /** @var Date|null $birthDate  */
    private ?Date $birthDate = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $email  */
    private ?string $email = null;
    
    /** @var Date|null $employmentDate  */
    private ?Date $employmentDate = null;
    
    /** @var string|null $givenName  */
    private ?string $givenName = null;
    
    /** @var string|null $jobTitle  */
    private ?string $jobTitle = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $middleName  */
    private ?string $middleName = null;
    
    /** @var string|null $mobilePhone  */
    private ?string $mobilePhone = null;
    
    /** @var string|null $number  */
    private ?string $number = null;
    
    /** @var string|null $personalEmail  */
    private ?string $personalEmail = null;
    
    /** @var string|null $phoneNumber  */
    private ?string $phoneNumber = null;
    
    /** @var array<Picture>|null $picture  */
    private ?array $picture = null;
    
    /** @var string|null $statisticsGroupCode  */
    private ?string $statisticsGroupCode = null;
    
    /** @var string|null $status  */
    private ?string $status = null;
    
    /** @var string|null $surname  */
    private ?string $surname = null;
    
    /** @var Date|null $terminationDate  */
    private ?Date $terminationDate = null;
    
    /**
     * Instantiates a new employee and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Employee
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Employee {
        return new Employee();
    }

    /**
     * Gets the address property value. 
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->address;
    }

    /**
     * Gets the birthDate property value. 
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->birthDate;
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
     * Gets the employmentDate property value. 
     * @return Date|null
    */
    public function getEmploymentDate(): ?Date {
        return $this->employmentDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getObjectValue(PostalAddressType::class)); },
            'birthDate' => function (self $o, ParseNode $n) { $o->setBirthDate($n->getDateValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'employmentDate' => function (self $o, ParseNode $n) { $o->setEmploymentDate($n->getDateValue()); },
            'givenName' => function (self $o, ParseNode $n) { $o->setGivenName($n->getStringValue()); },
            'jobTitle' => function (self $o, ParseNode $n) { $o->setJobTitle($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'middleName' => function (self $o, ParseNode $n) { $o->setMiddleName($n->getStringValue()); },
            'mobilePhone' => function (self $o, ParseNode $n) { $o->setMobilePhone($n->getStringValue()); },
            'number' => function (self $o, ParseNode $n) { $o->setNumber($n->getStringValue()); },
            'personalEmail' => function (self $o, ParseNode $n) { $o->setPersonalEmail($n->getStringValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
            'picture' => function (self $o, ParseNode $n) { $o->setPicture($n->getCollectionOfObjectValues(Picture::class)); },
            'statisticsGroupCode' => function (self $o, ParseNode $n) { $o->setStatisticsGroupCode($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'surname' => function (self $o, ParseNode $n) { $o->setSurname($n->getStringValue()); },
            'terminationDate' => function (self $o, ParseNode $n) { $o->setTerminationDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the givenName property value. 
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the jobTitle property value. 
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the middleName property value. 
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }

    /**
     * Gets the mobilePhone property value. 
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->mobilePhone;
    }

    /**
     * Gets the number property value. 
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the personalEmail property value. 
     * @return string|null
    */
    public function getPersonalEmail(): ?string {
        return $this->personalEmail;
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
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the statisticsGroupCode property value. 
     * @return string|null
    */
    public function getStatisticsGroupCode(): ?string {
        return $this->statisticsGroupCode;
    }

    /**
     * Gets the status property value. 
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the surname property value. 
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the terminationDate property value. 
     * @return Date|null
    */
    public function getTerminationDate(): ?Date {
        return $this->terminationDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeDateValue('birthDate', $this->birthDate);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeDateValue('employmentDate', $this->employmentDate);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('middleName', $this->middleName);
        $writer->writeStringValue('mobilePhone', $this->mobilePhone);
        $writer->writeStringValue('number', $this->number);
        $writer->writeStringValue('personalEmail', $this->personalEmail);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeCollectionOfObjectValues('picture', $this->picture);
        $writer->writeStringValue('statisticsGroupCode', $this->statisticsGroupCode);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeDateValue('terminationDate', $this->terminationDate);
    }

    /**
     * Sets the address property value. 
     *  @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the birthDate property value. 
     *  @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value ): void {
        $this->birthDate = $value;
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
     * Sets the employmentDate property value. 
     *  @param Date|null $value Value to set for the employmentDate property.
    */
    public function setEmploymentDate(?Date $value ): void {
        $this->employmentDate = $value;
    }

    /**
     * Sets the givenName property value. 
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the jobTitle property value. 
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the middleName property value. 
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value ): void {
        $this->middleName = $value;
    }

    /**
     * Sets the mobilePhone property value. 
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value ): void {
        $this->mobilePhone = $value;
    }

    /**
     * Sets the number property value. 
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the personalEmail property value. 
     *  @param string|null $value Value to set for the personalEmail property.
    */
    public function setPersonalEmail(?string $value ): void {
        $this->personalEmail = $value;
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
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the statisticsGroupCode property value. 
     *  @param string|null $value Value to set for the statisticsGroupCode property.
    */
    public function setStatisticsGroupCode(?string $value ): void {
        $this->statisticsGroupCode = $value;
    }

    /**
     * Sets the status property value. 
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the surname property value. 
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the terminationDate property value. 
     *  @param Date|null $value Value to set for the terminationDate property.
    */
    public function setTerminationDate(?Date $value ): void {
        $this->terminationDate = $value;
    }

}
