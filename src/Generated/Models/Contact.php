<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Contact extends OutlookItem implements Parsable 
{
    /**
     * @var string|null $assistantName The name of the contact's assistant.
    */
    private ?string $assistantName = null;
    
    /**
     * @var DateTime|null $birthday The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $birthday = null;
    
    /**
     * @var array<string>|null $children The names of the contact's children.
    */
    private ?array $children = null;
    
    /**
     * @var string|null $companyName The name of the contact's company.
    */
    private ?string $companyName = null;
    
    /**
     * @var string|null $department The contact's department.
    */
    private ?string $department = null;
    
    /**
     * @var string|null $displayName The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<TypedEmailAddress>|null $emailAddresses The contact's email addresses.
    */
    private ?array $emailAddresses = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the contact. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var string|null $fileAs The name the contact is filed under.
    */
    private ?string $fileAs = null;
    
    /**
     * @var FollowupFlag|null $flag The flag value that indicates the status, start date, due date, or completion date for the contact.
    */
    private ?FollowupFlag $flag = null;
    
    /**
     * @var string|null $gender The contact's gender.
    */
    private ?string $gender = null;
    
    /**
     * @var string|null $generation The contact's generation.
    */
    private ?string $generation = null;
    
    /**
     * @var string|null $givenName The contact's given name.
    */
    private ?string $givenName = null;
    
    /**
     * @var array<string>|null $imAddresses The imAddresses property
    */
    private ?array $imAddresses = null;
    
    /**
     * @var string|null $initials The initials property
    */
    private ?string $initials = null;
    
    /**
     * @var bool|null $isFavorite The isFavorite property
    */
    private ?bool $isFavorite = null;
    
    /**
     * @var string|null $jobTitle The jobTitle property
    */
    private ?string $jobTitle = null;
    
    /**
     * @var string|null $manager The manager property
    */
    private ?string $manager = null;
    
    /**
     * @var string|null $middleName The middleName property
    */
    private ?string $middleName = null;
    
    /**
     * @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
    */
    private ?array $multiValueExtendedProperties = null;
    
    /**
     * @var string|null $nickName The nickName property
    */
    private ?string $nickName = null;
    
    /**
     * @var string|null $officeLocation The officeLocation property
    */
    private ?string $officeLocation = null;
    
    /**
     * @var string|null $parentFolderId The parentFolderId property
    */
    private ?string $parentFolderId = null;
    
    /**
     * @var string|null $personalNotes The personalNotes property
    */
    private ?string $personalNotes = null;
    
    /**
     * @var array<Phone>|null $phones The phones property
    */
    private ?array $phones = null;
    
    /**
     * @var ProfilePhoto|null $photo Optional contact picture. You can get or set a photo for a contact.
    */
    private ?ProfilePhoto $photo = null;
    
    /**
     * @var array<PhysicalAddress>|null $postalAddresses The postalAddresses property
    */
    private ?array $postalAddresses = null;
    
    /**
     * @var string|null $profession The profession property
    */
    private ?string $profession = null;
    
    /**
     * @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the contact. Read-only. Nullable.
    */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * @var string|null $spouseName The spouseName property
    */
    private ?string $spouseName = null;
    
    /**
     * @var string|null $surname The surname property
    */
    private ?string $surname = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * @var array<Website>|null $websites The websites property
    */
    private ?array $websites = null;
    
    /**
     * @var Date|null $weddingAnniversary The weddingAnniversary property
    */
    private ?Date $weddingAnniversary = null;
    
    /**
     * @var string|null $yomiCompanyName The yomiCompanyName property
    */
    private ?string $yomiCompanyName = null;
    
    /**
     * @var string|null $yomiGivenName The yomiGivenName property
    */
    private ?string $yomiGivenName = null;
    
    /**
     * @var string|null $yomiSurname The yomiSurname property
    */
    private ?string $yomiSurname = null;
    
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
        return $this->assistantName;
    }

    /**
     * Gets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        return $this->birthday;
    }

    /**
     * Gets the children property value. The names of the contact's children.
     * @return array<string>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the companyName property value. The name of the contact's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The contact's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddresses property value. The contact's email addresses.
     * @return array<TypedEmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the contact. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assistantName' => function (ParseNode $n) use ($o) { $o->setAssistantName($n->getStringValue()); },
            'birthday' => function (ParseNode $n) use ($o) { $o->setBirthday($n->getDateTimeValue()); },
            'children' => function (ParseNode $n) use ($o) { $o->setChildren($n->getCollectionOfPrimitiveValues()); },
            'companyName' => function (ParseNode $n) use ($o) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (ParseNode $n) use ($o) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'emailAddresses' => function (ParseNode $n) use ($o) { $o->setEmailAddresses($n->getCollectionOfObjectValues(array(TypedEmailAddress::class, 'createFromDiscriminatorValue'))); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'fileAs' => function (ParseNode $n) use ($o) { $o->setFileAs($n->getStringValue()); },
            'flag' => function (ParseNode $n) use ($o) { $o->setFlag($n->getObjectValue(array(FollowupFlag::class, 'createFromDiscriminatorValue'))); },
            'gender' => function (ParseNode $n) use ($o) { $o->setGender($n->getStringValue()); },
            'generation' => function (ParseNode $n) use ($o) { $o->setGeneration($n->getStringValue()); },
            'givenName' => function (ParseNode $n) use ($o) { $o->setGivenName($n->getStringValue()); },
            'imAddresses' => function (ParseNode $n) use ($o) { $o->setImAddresses($n->getCollectionOfPrimitiveValues()); },
            'initials' => function (ParseNode $n) use ($o) { $o->setInitials($n->getStringValue()); },
            'isFavorite' => function (ParseNode $n) use ($o) { $o->setIsFavorite($n->getBooleanValue()); },
            'jobTitle' => function (ParseNode $n) use ($o) { $o->setJobTitle($n->getStringValue()); },
            'manager' => function (ParseNode $n) use ($o) { $o->setManager($n->getStringValue()); },
            'middleName' => function (ParseNode $n) use ($o) { $o->setMiddleName($n->getStringValue()); },
            'multiValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(array(MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'nickName' => function (ParseNode $n) use ($o) { $o->setNickName($n->getStringValue()); },
            'officeLocation' => function (ParseNode $n) use ($o) { $o->setOfficeLocation($n->getStringValue()); },
            'parentFolderId' => function (ParseNode $n) use ($o) { $o->setParentFolderId($n->getStringValue()); },
            'personalNotes' => function (ParseNode $n) use ($o) { $o->setPersonalNotes($n->getStringValue()); },
            'phones' => function (ParseNode $n) use ($o) { $o->setPhones($n->getCollectionOfObjectValues(array(Phone::class, 'createFromDiscriminatorValue'))); },
            'photo' => function (ParseNode $n) use ($o) { $o->setPhoto($n->getObjectValue(array(ProfilePhoto::class, 'createFromDiscriminatorValue'))); },
            'postalAddresses' => function (ParseNode $n) use ($o) { $o->setPostalAddresses($n->getCollectionOfObjectValues(array(PhysicalAddress::class, 'createFromDiscriminatorValue'))); },
            'profession' => function (ParseNode $n) use ($o) { $o->setProfession($n->getStringValue()); },
            'singleValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(array(SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'spouseName' => function (ParseNode $n) use ($o) { $o->setSpouseName($n->getStringValue()); },
            'surname' => function (ParseNode $n) use ($o) { $o->setSurname($n->getStringValue()); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
            'websites' => function (ParseNode $n) use ($o) { $o->setWebsites($n->getCollectionOfObjectValues(array(Website::class, 'createFromDiscriminatorValue'))); },
            'weddingAnniversary' => function (ParseNode $n) use ($o) { $o->setWeddingAnniversary($n->getDateValue()); },
            'yomiCompanyName' => function (ParseNode $n) use ($o) { $o->setYomiCompanyName($n->getStringValue()); },
            'yomiGivenName' => function (ParseNode $n) use ($o) { $o->setYomiGivenName($n->getStringValue()); },
            'yomiSurname' => function (ParseNode $n) use ($o) { $o->setYomiSurname($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileAs property value. The name the contact is filed under.
     * @return string|null
    */
    public function getFileAs(): ?string {
        return $this->fileAs;
    }

    /**
     * Gets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        return $this->flag;
    }

    /**
     * Gets the gender property value. The contact's gender.
     * @return string|null
    */
    public function getGender(): ?string {
        return $this->gender;
    }

    /**
     * Gets the generation property value. The contact's generation.
     * @return string|null
    */
    public function getGeneration(): ?string {
        return $this->generation;
    }

    /**
     * Gets the givenName property value. The contact's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the imAddresses property value. The imAddresses property
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        return $this->imAddresses;
    }

    /**
     * Gets the initials property value. The initials property
     * @return string|null
    */
    public function getInitials(): ?string {
        return $this->initials;
    }

    /**
     * Gets the isFavorite property value. The isFavorite property
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->isFavorite;
    }

    /**
     * Gets the jobTitle property value. The jobTitle property
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the manager property value. The manager property
     * @return string|null
    */
    public function getManager(): ?string {
        return $this->manager;
    }

    /**
     * Gets the middleName property value. The middleName property
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the nickName property value. The nickName property
     * @return string|null
    */
    public function getNickName(): ?string {
        return $this->nickName;
    }

    /**
     * Gets the officeLocation property value. The officeLocation property
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the parentFolderId property value. The parentFolderId property
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the personalNotes property value. The personalNotes property
     * @return string|null
    */
    public function getPersonalNotes(): ?string {
        return $this->personalNotes;
    }

    /**
     * Gets the phones property value. The phones property
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the postalAddresses property value. The postalAddresses property
     * @return array<PhysicalAddress>|null
    */
    public function getPostalAddresses(): ?array {
        return $this->postalAddresses;
    }

    /**
     * Gets the profession property value. The profession property
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the spouseName property value. The spouseName property
     * @return string|null
    */
    public function getSpouseName(): ?string {
        return $this->spouseName;
    }

    /**
     * Gets the surname property value. The surname property
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the websites property value. The websites property
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        return $this->websites;
    }

    /**
     * Gets the weddingAnniversary property value. The weddingAnniversary property
     * @return Date|null
    */
    public function getWeddingAnniversary(): ?Date {
        return $this->weddingAnniversary;
    }

    /**
     * Gets the yomiCompanyName property value. The yomiCompanyName property
     * @return string|null
    */
    public function getYomiCompanyName(): ?string {
        return $this->yomiCompanyName;
    }

    /**
     * Gets the yomiGivenName property value. The yomiGivenName property
     * @return string|null
    */
    public function getYomiGivenName(): ?string {
        return $this->yomiGivenName;
    }

    /**
     * Gets the yomiSurname property value. The yomiSurname property
     * @return string|null
    */
    public function getYomiSurname(): ?string {
        return $this->yomiSurname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assistantName', $this->assistantName);
        $writer->writeDateTimeValue('birthday', $this->birthday);
        $writer->writeCollectionOfPrimitiveValues('children', $this->children);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->emailAddresses);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeStringValue('fileAs', $this->fileAs);
        $writer->writeObjectValue('flag', $this->flag);
        $writer->writeStringValue('gender', $this->gender);
        $writer->writeStringValue('generation', $this->generation);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->imAddresses);
        $writer->writeStringValue('initials', $this->initials);
        $writer->writeBooleanValue('isFavorite', $this->isFavorite);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('manager', $this->manager);
        $writer->writeStringValue('middleName', $this->middleName);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('nickName', $this->nickName);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeStringValue('personalNotes', $this->personalNotes);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->postalAddresses);
        $writer->writeStringValue('profession', $this->profession);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeStringValue('spouseName', $this->spouseName);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeStringValue('title', $this->title);
        $writer->writeCollectionOfObjectValues('websites', $this->websites);
        $writer->writeDateValue('weddingAnniversary', $this->weddingAnniversary);
        $writer->writeStringValue('yomiCompanyName', $this->yomiCompanyName);
        $writer->writeStringValue('yomiGivenName', $this->yomiGivenName);
        $writer->writeStringValue('yomiSurname', $this->yomiSurname);
    }

    /**
     * Sets the assistantName property value. The name of the contact's assistant.
     *  @param string|null $value Value to set for the assistantName property.
    */
    public function setAssistantName(?string $value ): void {
        $this->assistantName = $value;
    }

    /**
     * Sets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the children property value. The names of the contact's children.
     *  @param array<string>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the companyName property value. The name of the contact's company.
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The contact's department.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddresses property value. The contact's email addresses.
     *  @param array<TypedEmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the contact. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the fileAs property value. The name the contact is filed under.
     *  @param string|null $value Value to set for the fileAs property.
    */
    public function setFileAs(?string $value ): void {
        $this->fileAs = $value;
    }

    /**
     * Sets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     *  @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(?FollowupFlag $value ): void {
        $this->flag = $value;
    }

    /**
     * Sets the gender property value. The contact's gender.
     *  @param string|null $value Value to set for the gender property.
    */
    public function setGender(?string $value ): void {
        $this->gender = $value;
    }

    /**
     * Sets the generation property value. The contact's generation.
     *  @param string|null $value Value to set for the generation property.
    */
    public function setGeneration(?string $value ): void {
        $this->generation = $value;
    }

    /**
     * Sets the givenName property value. The contact's given name.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the imAddresses property value. The imAddresses property
     *  @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value ): void {
        $this->imAddresses = $value;
    }

    /**
     * Sets the initials property value. The initials property
     *  @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value ): void {
        $this->initials = $value;
    }

    /**
     * Sets the isFavorite property value. The isFavorite property
     *  @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value ): void {
        $this->isFavorite = $value;
    }

    /**
     * Sets the jobTitle property value. The jobTitle property
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the manager property value. The manager property
     *  @param string|null $value Value to set for the manager property.
    */
    public function setManager(?string $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the middleName property value. The middleName property
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value ): void {
        $this->middleName = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the nickName property value. The nickName property
     *  @param string|null $value Value to set for the nickName property.
    */
    public function setNickName(?string $value ): void {
        $this->nickName = $value;
    }

    /**
     * Sets the officeLocation property value. The officeLocation property
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the parentFolderId property value. The parentFolderId property
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the personalNotes property value. The personalNotes property
     *  @param string|null $value Value to set for the personalNotes property.
    */
    public function setPersonalNotes(?string $value ): void {
        $this->personalNotes = $value;
    }

    /**
     * Sets the phones property value. The phones property
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the postalAddresses property value. The postalAddresses property
     *  @param array<PhysicalAddress>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value ): void {
        $this->postalAddresses = $value;
    }

    /**
     * Sets the profession property value. The profession property
     *  @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value ): void {
        $this->profession = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the spouseName property value. The spouseName property
     *  @param string|null $value Value to set for the spouseName property.
    */
    public function setSpouseName(?string $value ): void {
        $this->spouseName = $value;
    }

    /**
     * Sets the surname property value. The surname property
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the websites property value. The websites property
     *  @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value ): void {
        $this->websites = $value;
    }

    /**
     * Sets the weddingAnniversary property value. The weddingAnniversary property
     *  @param Date|null $value Value to set for the weddingAnniversary property.
    */
    public function setWeddingAnniversary(?Date $value ): void {
        $this->weddingAnniversary = $value;
    }

    /**
     * Sets the yomiCompanyName property value. The yomiCompanyName property
     *  @param string|null $value Value to set for the yomiCompanyName property.
    */
    public function setYomiCompanyName(?string $value ): void {
        $this->yomiCompanyName = $value;
    }

    /**
     * Sets the yomiGivenName property value. The yomiGivenName property
     *  @param string|null $value Value to set for the yomiGivenName property.
    */
    public function setYomiGivenName(?string $value ): void {
        $this->yomiGivenName = $value;
    }

    /**
     * Sets the yomiSurname property value. The yomiSurname property
     *  @param string|null $value Value to set for the yomiSurname property.
    */
    public function setYomiSurname(?string $value ): void {
        $this->yomiSurname = $value;
    }

}
