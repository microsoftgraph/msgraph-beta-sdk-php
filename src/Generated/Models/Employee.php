<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Employee extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Employee {
        return new Employee();
    }

    /**
     * Gets the address property value. The address property
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the birthDate property value. The birthDate property
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->getBackingStore()->get('birthDate');
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
     * Gets the employmentDate property value. The employmentDate property
     * @return Date|null
    */
    public function getEmploymentDate(): ?Date {
        return $this->getBackingStore()->get('employmentDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'employmentDate' => fn(ParseNode $n) => $o->setEmploymentDate($n->getDateValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'middleName' => fn(ParseNode $n) => $o->setMiddleName($n->getStringValue()),
            'mobilePhone' => fn(ParseNode $n) => $o->setMobilePhone($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'personalEmail' => fn(ParseNode $n) => $o->setPersonalEmail($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'statisticsGroupCode' => fn(ParseNode $n) => $o->setStatisticsGroupCode($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'terminationDate' => fn(ParseNode $n) => $o->setTerminationDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the givenName property value. The givenName property
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->getBackingStore()->get('givenName');
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->getBackingStore()->get('jobTitle');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the middleName property value. The middleName property
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->getBackingStore()->get('middleName');
    }

    /**
     * Gets the mobilePhone property value. The mobilePhone property
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        return $this->getBackingStore()->get('mobilePhone');
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the personalEmail property value. The personalEmail property
     * @return string|null
    */
    public function getPersonalEmail(): ?string {
        return $this->getBackingStore()->get('personalEmail');
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
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->getBackingStore()->get('picture');
    }

    /**
     * Gets the statisticsGroupCode property value. The statisticsGroupCode property
     * @return string|null
    */
    public function getStatisticsGroupCode(): ?string {
        return $this->getBackingStore()->get('statisticsGroupCode');
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->getBackingStore()->get('surname');
    }

    /**
     * Gets the terminationDate property value. The terminationDate property
     * @return Date|null
    */
    public function getTerminationDate(): ?Date {
        return $this->getBackingStore()->get('terminationDate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateValue('employmentDate', $this->getEmploymentDate());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('middleName', $this->getMiddleName());
        $writer->writeStringValue('mobilePhone', $this->getMobilePhone());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('personalEmail', $this->getPersonalEmail());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeStringValue('statisticsGroupCode', $this->getStatisticsGroupCode());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeDateValue('terminationDate', $this->getTerminationDate());
    }

    /**
     * Sets the address property value. The address property
     *  @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the birthDate property value. The birthDate property
     *  @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value): void {
        $this->getBackingStore()->set('birthDate', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email property
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the employmentDate property value. The employmentDate property
     *  @param Date|null $value Value to set for the employmentDate property.
    */
    public function setEmploymentDate(?Date $value): void {
        $this->getBackingStore()->set('employmentDate', $value);
    }

    /**
     * Sets the givenName property value. The givenName property
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the middleName property value. The middleName property
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the mobilePhone property value. The mobilePhone property
     *  @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the number property value. The number property
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the personalEmail property value. The personalEmail property
     *  @param string|null $value Value to set for the personalEmail property.
    */
    public function setPersonalEmail(?string $value): void {
        $this->getBackingStore()->set('personalEmail', $value);
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the statisticsGroupCode property value. The statisticsGroupCode property
     *  @param string|null $value Value to set for the statisticsGroupCode property.
    */
    public function setStatisticsGroupCode(?string $value): void {
        $this->getBackingStore()->set('statisticsGroupCode', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the surname property value. The surname property
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the terminationDate property value. The terminationDate property
     *  @param Date|null $value Value to set for the terminationDate property.
    */
    public function setTerminationDate(?Date $value): void {
        $this->getBackingStore()->set('terminationDate', $value);
    }

}
