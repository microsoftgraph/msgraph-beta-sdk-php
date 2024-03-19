<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Contact extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new Contact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.contact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the assistantName property value. The name of the contact's assistant.
     * @return string|null
    */
    public function getAssistantName(): ?string {
        $val = $this->getBackingStore()->get('assistantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assistantName'");
    }

    /**
     * Gets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        $val = $this->getBackingStore()->get('birthday');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'birthday'");
    }

    /**
     * Gets the children property value. The names of the contact's children.
     * @return array<string>|null
    */
    public function getChildren(): ?array {
        $val = $this->getBackingStore()->get('children');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'children'");
    }

    /**
     * Gets the companyName property value. The name of the contact's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        $val = $this->getBackingStore()->get('companyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyName'");
    }

    /**
     * Gets the department property value. The contact's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        $val = $this->getBackingStore()->get('department');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'department'");
    }

    /**
     * Gets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
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
     * Gets the emailAddresses property value. The contact's email addresses.
     * @return array<TypedEmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        $val = $this->getBackingStore()->get('emailAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TypedEmailAddress::class);
            /** @var array<TypedEmailAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddresses'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the contact. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assistantName' => fn(ParseNode $n) => $o->setAssistantName($n->getStringValue()),
            'birthday' => fn(ParseNode $n) => $o->setBirthday($n->getDateTimeValue()),
            'children' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setChildren($val);
            },
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddresses' => fn(ParseNode $n) => $o->setEmailAddresses($n->getCollectionOfObjectValues([TypedEmailAddress::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'fileAs' => fn(ParseNode $n) => $o->setFileAs($n->getStringValue()),
            'flag' => fn(ParseNode $n) => $o->setFlag($n->getObjectValue([FollowupFlag::class, 'createFromDiscriminatorValue'])),
            'gender' => fn(ParseNode $n) => $o->setGender($n->getStringValue()),
            'generation' => fn(ParseNode $n) => $o->setGeneration($n->getStringValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'imAddresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setImAddresses($val);
            },
            'initials' => fn(ParseNode $n) => $o->setInitials($n->getStringValue()),
            'isFavorite' => fn(ParseNode $n) => $o->setIsFavorite($n->getBooleanValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            'manager' => fn(ParseNode $n) => $o->setManager($n->getStringValue()),
            'middleName' => fn(ParseNode $n) => $o->setMiddleName($n->getStringValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'nickName' => fn(ParseNode $n) => $o->setNickName($n->getStringValue()),
            'officeLocation' => fn(ParseNode $n) => $o->setOfficeLocation($n->getStringValue()),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'personalNotes' => fn(ParseNode $n) => $o->setPersonalNotes($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'postalAddresses' => fn(ParseNode $n) => $o->setPostalAddresses($n->getCollectionOfObjectValues([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'profession' => fn(ParseNode $n) => $o->setProfession($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'spouseName' => fn(ParseNode $n) => $o->setSpouseName($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'websites' => fn(ParseNode $n) => $o->setWebsites($n->getCollectionOfObjectValues([Website::class, 'createFromDiscriminatorValue'])),
            'weddingAnniversary' => fn(ParseNode $n) => $o->setWeddingAnniversary($n->getDateValue()),
            'yomiCompanyName' => fn(ParseNode $n) => $o->setYomiCompanyName($n->getStringValue()),
            'yomiGivenName' => fn(ParseNode $n) => $o->setYomiGivenName($n->getStringValue()),
            'yomiSurname' => fn(ParseNode $n) => $o->setYomiSurname($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileAs property value. The name the contact is filed under.
     * @return string|null
    */
    public function getFileAs(): ?string {
        $val = $this->getBackingStore()->get('fileAs');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileAs'");
    }

    /**
     * Gets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        $val = $this->getBackingStore()->get('flag');
        if (is_null($val) || $val instanceof FollowupFlag) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flag'");
    }

    /**
     * Gets the gender property value. The contact's gender.
     * @return string|null
    */
    public function getGender(): ?string {
        $val = $this->getBackingStore()->get('gender');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gender'");
    }

    /**
     * Gets the generation property value. The contact's generation.
     * @return string|null
    */
    public function getGeneration(): ?string {
        $val = $this->getBackingStore()->get('generation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'generation'");
    }

    /**
     * Gets the givenName property value. The contact's given name.
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
     * Gets the imAddresses property value. The contact's instant messaging (IM) addresses.
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        $val = $this->getBackingStore()->get('imAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imAddresses'");
    }

    /**
     * Gets the initials property value. The contact's initials.
     * @return string|null
    */
    public function getInitials(): ?string {
        $val = $this->getBackingStore()->get('initials');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initials'");
    }

    /**
     * Gets the isFavorite property value. The isFavorite property
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        $val = $this->getBackingStore()->get('isFavorite');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFavorite'");
    }

    /**
     * Gets the jobTitle property value. The contact’s job title.
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
     * Gets the manager property value. The name of the contact's manager.
     * @return string|null
    */
    public function getManager(): ?string {
        $val = $this->getBackingStore()->get('manager');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manager'");
    }

    /**
     * Gets the middleName property value. The contact's middle name.
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
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the nickName property value. The contact's nickname.
     * @return string|null
    */
    public function getNickName(): ?string {
        $val = $this->getBackingStore()->get('nickName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nickName'");
    }

    /**
     * Gets the officeLocation property value. The location of the contact's office.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        $val = $this->getBackingStore()->get('officeLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeLocation'");
    }

    /**
     * Gets the parentFolderId property value. The ID of the contact's parent folder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        $val = $this->getBackingStore()->get('parentFolderId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentFolderId'");
    }

    /**
     * Gets the personalNotes property value. The user's notes about the contact.
     * @return string|null
    */
    public function getPersonalNotes(): ?string {
        $val = $this->getBackingStore()->get('personalNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personalNotes'");
    }

    /**
     * Gets the phones property value. Phone numbers associated with the contact, for example, home phone, mobile phone, and business phone.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        $val = $this->getBackingStore()->get('phones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Phone::class);
            /** @var array<Phone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phones'");
    }

    /**
     * Gets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        $val = $this->getBackingStore()->get('photo');
        if (is_null($val) || $val instanceof ProfilePhoto) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photo'");
    }

    /**
     * Gets the postalAddresses property value. Addresses associated with the contact, for example, home address and business address.
     * @return array<PhysicalAddress>|null
    */
    public function getPostalAddresses(): ?array {
        $val = $this->getBackingStore()->get('postalAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PhysicalAddress::class);
            /** @var array<PhysicalAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postalAddresses'");
    }

    /**
     * Gets the profession property value. The contact's profession.
     * @return string|null
    */
    public function getProfession(): ?string {
        $val = $this->getBackingStore()->get('profession');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profession'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Gets the spouseName property value. The name of the contact's spouse/partner.
     * @return string|null
    */
    public function getSpouseName(): ?string {
        $val = $this->getBackingStore()->get('spouseName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spouseName'");
    }

    /**
     * Gets the surname property value. The contact's surname.
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
     * Gets the title property value. The contact's title.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the websites property value. Web sites associated with the contact.
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        $val = $this->getBackingStore()->get('websites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Website::class);
            /** @var array<Website>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'websites'");
    }

    /**
     * Gets the weddingAnniversary property value. The contact's wedding anniversary.
     * @return Date|null
    */
    public function getWeddingAnniversary(): ?Date {
        $val = $this->getBackingStore()->get('weddingAnniversary');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'weddingAnniversary'");
    }

    /**
     * Gets the yomiCompanyName property value. The phonetic Japanese company name of the contact.
     * @return string|null
    */
    public function getYomiCompanyName(): ?string {
        $val = $this->getBackingStore()->get('yomiCompanyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yomiCompanyName'");
    }

    /**
     * Gets the yomiGivenName property value. The phonetic Japanese given name (first name) of the contact.
     * @return string|null
    */
    public function getYomiGivenName(): ?string {
        $val = $this->getBackingStore()->get('yomiGivenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yomiGivenName'");
    }

    /**
     * Gets the yomiSurname property value. The phonetic Japanese surname (last name)  of the contact.
     * @return string|null
    */
    public function getYomiSurname(): ?string {
        $val = $this->getBackingStore()->get('yomiSurname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yomiSurname'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assistantName', $this->getAssistantName());
        $writer->writeDateTimeValue('birthday', $this->getBirthday());
        $writer->writeCollectionOfPrimitiveValues('children', $this->getChildren());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->getEmailAddresses());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeStringValue('fileAs', $this->getFileAs());
        $writer->writeObjectValue('flag', $this->getFlag());
        $writer->writeStringValue('gender', $this->getGender());
        $writer->writeStringValue('generation', $this->getGeneration());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->getImAddresses());
        $writer->writeStringValue('initials', $this->getInitials());
        $writer->writeBooleanValue('isFavorite', $this->getIsFavorite());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('manager', $this->getManager());
        $writer->writeStringValue('middleName', $this->getMiddleName());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('nickName', $this->getNickName());
        $writer->writeStringValue('officeLocation', $this->getOfficeLocation());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeStringValue('personalNotes', $this->getPersonalNotes());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->getPostalAddresses());
        $writer->writeStringValue('profession', $this->getProfession());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeStringValue('spouseName', $this->getSpouseName());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeCollectionOfObjectValues('websites', $this->getWebsites());
        $writer->writeDateValue('weddingAnniversary', $this->getWeddingAnniversary());
        $writer->writeStringValue('yomiCompanyName', $this->getYomiCompanyName());
        $writer->writeStringValue('yomiGivenName', $this->getYomiGivenName());
        $writer->writeStringValue('yomiSurname', $this->getYomiSurname());
    }

    /**
     * Sets the assistantName property value. The name of the contact's assistant.
     * @param string|null $value Value to set for the assistantName property.
    */
    public function setAssistantName(?string $value): void {
        $this->getBackingStore()->set('assistantName', $value);
    }

    /**
     * Sets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value): void {
        $this->getBackingStore()->set('birthday', $value);
    }

    /**
     * Sets the children property value. The names of the contact's children.
     * @param array<string>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the companyName property value. The name of the contact's company.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the department property value. The contact's department.
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddresses property value. The contact's email addresses.
     * @param array<TypedEmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('emailAddresses', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the contact. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the fileAs property value. The name the contact is filed under.
     * @param string|null $value Value to set for the fileAs property.
    */
    public function setFileAs(?string $value): void {
        $this->getBackingStore()->set('fileAs', $value);
    }

    /**
     * Sets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     * @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(?FollowupFlag $value): void {
        $this->getBackingStore()->set('flag', $value);
    }

    /**
     * Sets the gender property value. The contact's gender.
     * @param string|null $value Value to set for the gender property.
    */
    public function setGender(?string $value): void {
        $this->getBackingStore()->set('gender', $value);
    }

    /**
     * Sets the generation property value. The contact's generation.
     * @param string|null $value Value to set for the generation property.
    */
    public function setGeneration(?string $value): void {
        $this->getBackingStore()->set('generation', $value);
    }

    /**
     * Sets the givenName property value. The contact's given name.
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the imAddresses property value. The contact's instant messaging (IM) addresses.
     * @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value): void {
        $this->getBackingStore()->set('imAddresses', $value);
    }

    /**
     * Sets the initials property value. The contact's initials.
     * @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value): void {
        $this->getBackingStore()->set('initials', $value);
    }

    /**
     * Sets the isFavorite property value. The isFavorite property
     * @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value): void {
        $this->getBackingStore()->set('isFavorite', $value);
    }

    /**
     * Sets the jobTitle property value. The contact’s job title.
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the manager property value. The name of the contact's manager.
     * @param string|null $value Value to set for the manager property.
    */
    public function setManager(?string $value): void {
        $this->getBackingStore()->set('manager', $value);
    }

    /**
     * Sets the middleName property value. The contact's middle name.
     * @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value): void {
        $this->getBackingStore()->set('middleName', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the nickName property value. The contact's nickname.
     * @param string|null $value Value to set for the nickName property.
    */
    public function setNickName(?string $value): void {
        $this->getBackingStore()->set('nickName', $value);
    }

    /**
     * Sets the officeLocation property value. The location of the contact's office.
     * @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the parentFolderId property value. The ID of the contact's parent folder.
     * @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the personalNotes property value. The user's notes about the contact.
     * @param string|null $value Value to set for the personalNotes property.
    */
    public function setPersonalNotes(?string $value): void {
        $this->getBackingStore()->set('personalNotes', $value);
    }

    /**
     * Sets the phones property value. Phone numbers associated with the contact, for example, home phone, mobile phone, and business phone.
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

    /**
     * Sets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the postalAddresses property value. Addresses associated with the contact, for example, home address and business address.
     * @param array<PhysicalAddress>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value): void {
        $this->getBackingStore()->set('postalAddresses', $value);
    }

    /**
     * Sets the profession property value. The contact's profession.
     * @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value): void {
        $this->getBackingStore()->set('profession', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the spouseName property value. The name of the contact's spouse/partner.
     * @param string|null $value Value to set for the spouseName property.
    */
    public function setSpouseName(?string $value): void {
        $this->getBackingStore()->set('spouseName', $value);
    }

    /**
     * Sets the surname property value. The contact's surname.
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the title property value. The contact's title.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the websites property value. Web sites associated with the contact.
     * @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value): void {
        $this->getBackingStore()->set('websites', $value);
    }

    /**
     * Sets the weddingAnniversary property value. The contact's wedding anniversary.
     * @param Date|null $value Value to set for the weddingAnniversary property.
    */
    public function setWeddingAnniversary(?Date $value): void {
        $this->getBackingStore()->set('weddingAnniversary', $value);
    }

    /**
     * Sets the yomiCompanyName property value. The phonetic Japanese company name of the contact.
     * @param string|null $value Value to set for the yomiCompanyName property.
    */
    public function setYomiCompanyName(?string $value): void {
        $this->getBackingStore()->set('yomiCompanyName', $value);
    }

    /**
     * Sets the yomiGivenName property value. The phonetic Japanese given name (first name) of the contact.
     * @param string|null $value Value to set for the yomiGivenName property.
    */
    public function setYomiGivenName(?string $value): void {
        $this->getBackingStore()->set('yomiGivenName', $value);
    }

    /**
     * Sets the yomiSurname property value. The phonetic Japanese surname (last name)  of the contact.
     * @param string|null $value Value to set for the yomiSurname property.
    */
    public function setYomiSurname(?string $value): void {
        $this->getBackingStore()->set('yomiSurname', $value);
    }

}
