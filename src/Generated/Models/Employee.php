<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Employee implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Employee and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the address property value. The address property
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the birthDate property value. The birthDate property
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        $val = $this->getBackingStore()->get('birthDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'birthDate'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * Gets the employmentDate property value. The employmentDate property
     * @return Date|null
    */
    public function getEmploymentDate(): ?Date {
        $val = $this->getBackingStore()->get('employmentDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'employmentDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'employmentDate' => fn(ParseNode $n) => $o->setEmploymentDate($n->getDateValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'middleName' => fn(ParseNode $n) => $o->setMiddleName($n->getStringValue()),
            'mobilePhone' => fn(ParseNode $n) => $o->setMobilePhone($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'personalEmail' => fn(ParseNode $n) => $o->setPersonalEmail($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'statisticsGroupCode' => fn(ParseNode $n) => $o->setStatisticsGroupCode($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'terminationDate' => fn(ParseNode $n) => $o->setTerminationDate($n->getDateValue()),
        ];
    }

    /**
     * Gets the givenName property value. The givenName property
     * @return string|null
    */
    public function getGivenName(): ?string {
        $val = $this->getBackingStore()->get('givenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'givenName'");
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        $val = $this->getBackingStore()->get('jobTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobTitle'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
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
     * Gets the middleName property value. The middleName property
     * @return string|null
    */
    public function getMiddleName(): ?string {
        $val = $this->getBackingStore()->get('middleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'middleName'");
    }

    /**
     * Gets the mobilePhone property value. The mobilePhone property
     * @return string|null
    */
    public function getMobilePhone(): ?string {
        $val = $this->getBackingStore()->get('mobilePhone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobilePhone'");
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        $val = $this->getBackingStore()->get('number');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'number'");
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
     * Gets the personalEmail property value. The personalEmail property
     * @return string|null
    */
    public function getPersonalEmail(): ?string {
        $val = $this->getBackingStore()->get('personalEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalEmail'");
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        $val = $this->getBackingStore()->get('picture');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Picture::class);
            /** @var array<Picture>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'picture'");
    }

    /**
     * Gets the statisticsGroupCode property value. The statisticsGroupCode property
     * @return string|null
    */
    public function getStatisticsGroupCode(): ?string {
        $val = $this->getBackingStore()->get('statisticsGroupCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statisticsGroupCode'");
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        $val = $this->getBackingStore()->get('surname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'surname'");
    }

    /**
     * Gets the terminationDate property value. The terminationDate property
     * @return Date|null
    */
    public function getTerminationDate(): ?Date {
        $val = $this->getBackingStore()->get('terminationDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'terminationDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateValue('employmentDate', $this->getEmploymentDate());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('middleName', $this->getMiddleName());
        $writer->writeStringValue('mobilePhone', $this->getMobilePhone());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('personalEmail', $this->getPersonalEmail());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeStringValue('statisticsGroupCode', $this->getStatisticsGroupCode());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeDateValue('terminationDate', $this->getTerminationDate());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. The address property
     * @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the birthDate property value. The birthDate property
     * @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value): void {
        $this->getBackingStore()->set('birthDate', $value);
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
     * Sets the employmentDate property value. The employmentDate property
     * @param Date|null $value Value to set for the employmentDate property.
    */
    public function setEmploymentDate(?Date $value): void {
        $this->getBackingStore()->set('employmentDate', $value);
    }

    /**
     * Sets the givenName property value. The givenName property
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the middleName property value. The middleName property
     * @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the mobilePhone property value. The mobilePhone property
     * @param string|null $value Value to set for the mobilePhone property.
    */
    public function setMobilePhone(?string $value): void {
        $this->getBackingStore()->set('mobilePhone', $value);
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the personalEmail property value. The personalEmail property
     * @param string|null $value Value to set for the personalEmail property.
    */
    public function setPersonalEmail(?string $value): void {
        $this->getBackingStore()->set('personalEmail', $value);
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
     * @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the statisticsGroupCode property value. The statisticsGroupCode property
     * @param string|null $value Value to set for the statisticsGroupCode property.
    */
    public function setStatisticsGroupCode(?string $value): void {
        $this->getBackingStore()->set('statisticsGroupCode', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the surname property value. The surname property
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the terminationDate property value. The terminationDate property
     * @param Date|null $value Value to set for the terminationDate property.
    */
    public function setTerminationDate(?Date $value): void {
        $this->getBackingStore()->set('terminationDate', $value);
    }

}
