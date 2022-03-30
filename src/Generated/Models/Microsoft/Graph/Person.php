<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Person extends Entity 
{
    /** @var string|null $birthday The person's birthday. */
    private ?string $birthday = null;
    
    /** @var string|null $companyName The name of the person's company. */
    private ?string $companyName = null;
    
    /** @var string|null $department The person's department. */
    private ?string $department = null;
    
    /** @var string|null $displayName The person's display name. */
    private ?string $displayName = null;
    
    /** @var array<RankedEmailAddress>|null $emailAddresses The person's email addresses. */
    private ?array $emailAddresses = null;
    
    /** @var string|null $givenName The person's given name. */
    private ?string $givenName = null;
    
    /** @var bool|null $isFavorite true if the user has flagged this person as a favorite. */
    private ?bool $isFavorite = null;
    
    /** @var string|null $mailboxType The type of mailbox that is represented by the person's email address. */
    private ?string $mailboxType = null;
    
    /** @var string|null $officeLocation The location of the person's office. */
    private ?string $officeLocation = null;
    
    /** @var string|null $personNotes Free-form notes that the user has taken about this person. */
    private ?string $personNotes = null;
    
    /** @var string|null $personType The type of person. */
    private ?string $personType = null;
    
    /** @var array<Phone>|null $phones The person's phone numbers. */
    private ?array $phones = null;
    
    /** @var array<Location>|null $postalAddresses The person's addresses. */
    private ?array $postalAddresses = null;
    
    /** @var string|null $profession The person's profession. */
    private ?string $profession = null;
    
    /** @var array<PersonDataSource>|null $sources The sources the user data comes from, for example Directory or Outlook Contacts. */
    private ?array $sources = null;
    
    /** @var string|null $surname The person's surname. */
    private ?string $surname = null;
    
    /** @var string|null $title The person's title. */
    private ?string $title = null;
    
    /** @var string|null $userPrincipalName The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain. */
    private ?string $userPrincipalName = null;
    
    /** @var array<Website>|null $websites The person's websites. */
    private ?array $websites = null;
    
    /** @var string|null $yomiCompany The phonetic Japanese name of the person's company. */
    private ?string $yomiCompany = null;
    
    /**
     * Instantiates a new person and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Person
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Person {
        return new Person();
    }

    /**
     * Gets the birthday property value. The person's birthday.
     * @return string|null
    */
    public function getBirthday(): ?string {
        return $this->birthday;
    }

    /**
     * Gets the companyName property value. The name of the person's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The person's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The person's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddresses property value. The person's email addresses.
     * @return array<RankedEmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'birthday' => function (self $o, ParseNode $n) { $o->setBirthday($n->getStringValue()); },
            'companyName' => function (self $o, ParseNode $n) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (self $o, ParseNode $n) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'emailAddresses' => function (self $o, ParseNode $n) { $o->setEmailAddresses($n->getCollectionOfObjectValues(RankedEmailAddress::class)); },
            'givenName' => function (self $o, ParseNode $n) { $o->setGivenName($n->getStringValue()); },
            'isFavorite' => function (self $o, ParseNode $n) { $o->setIsFavorite($n->getBooleanValue()); },
            'mailboxType' => function (self $o, ParseNode $n) { $o->setMailboxType($n->getStringValue()); },
            'officeLocation' => function (self $o, ParseNode $n) { $o->setOfficeLocation($n->getStringValue()); },
            'personNotes' => function (self $o, ParseNode $n) { $o->setPersonNotes($n->getStringValue()); },
            'personType' => function (self $o, ParseNode $n) { $o->setPersonType($n->getStringValue()); },
            'phones' => function (self $o, ParseNode $n) { $o->setPhones($n->getCollectionOfObjectValues(Phone::class)); },
            'postalAddresses' => function (self $o, ParseNode $n) { $o->setPostalAddresses($n->getCollectionOfObjectValues(Location::class)); },
            'profession' => function (self $o, ParseNode $n) { $o->setProfession($n->getStringValue()); },
            'sources' => function (self $o, ParseNode $n) { $o->setSources($n->getCollectionOfObjectValues(PersonDataSource::class)); },
            'surname' => function (self $o, ParseNode $n) { $o->setSurname($n->getStringValue()); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
            'websites' => function (self $o, ParseNode $n) { $o->setWebsites($n->getCollectionOfObjectValues(Website::class)); },
            'yomiCompany' => function (self $o, ParseNode $n) { $o->setYomiCompany($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the givenName property value. The person's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the isFavorite property value. true if the user has flagged this person as a favorite.
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->isFavorite;
    }

    /**
     * Gets the mailboxType property value. The type of mailbox that is represented by the person's email address.
     * @return string|null
    */
    public function getMailboxType(): ?string {
        return $this->mailboxType;
    }

    /**
     * Gets the officeLocation property value. The location of the person's office.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the personNotes property value. Free-form notes that the user has taken about this person.
     * @return string|null
    */
    public function getPersonNotes(): ?string {
        return $this->personNotes;
    }

    /**
     * Gets the personType property value. The type of person.
     * @return string|null
    */
    public function getPersonType(): ?string {
        return $this->personType;
    }

    /**
     * Gets the phones property value. The person's phone numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the postalAddresses property value. The person's addresses.
     * @return array<Location>|null
    */
    public function getPostalAddresses(): ?array {
        return $this->postalAddresses;
    }

    /**
     * Gets the profession property value. The person's profession.
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Gets the sources property value. The sources the user data comes from, for example Directory or Outlook Contacts.
     * @return array<PersonDataSource>|null
    */
    public function getSources(): ?array {
        return $this->sources;
    }

    /**
     * Gets the surname property value. The person's surname.
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the title property value. The person's title.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the websites property value. The person's websites.
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        return $this->websites;
    }

    /**
     * Gets the yomiCompany property value. The phonetic Japanese name of the person's company.
     * @return string|null
    */
    public function getYomiCompany(): ?string {
        return $this->yomiCompany;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('birthday', $this->birthday);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->emailAddresses);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeBooleanValue('isFavorite', $this->isFavorite);
        $writer->writeStringValue('mailboxType', $this->mailboxType);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('personNotes', $this->personNotes);
        $writer->writeStringValue('personType', $this->personType);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->postalAddresses);
        $writer->writeStringValue('profession', $this->profession);
        $writer->writeCollectionOfObjectValues('sources', $this->sources);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeCollectionOfObjectValues('websites', $this->websites);
        $writer->writeStringValue('yomiCompany', $this->yomiCompany);
    }

    /**
     * Sets the birthday property value. The person's birthday.
     *  @param string|null $value Value to set for the birthday property.
    */
    public function setBirthday(?string $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the companyName property value. The name of the person's company.
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The person's department.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The person's display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddresses property value. The person's email addresses.
     *  @param array<RankedEmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the givenName property value. The person's given name.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the isFavorite property value. true if the user has flagged this person as a favorite.
     *  @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value ): void {
        $this->isFavorite = $value;
    }

    /**
     * Sets the mailboxType property value. The type of mailbox that is represented by the person's email address.
     *  @param string|null $value Value to set for the mailboxType property.
    */
    public function setMailboxType(?string $value ): void {
        $this->mailboxType = $value;
    }

    /**
     * Sets the officeLocation property value. The location of the person's office.
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the personNotes property value. Free-form notes that the user has taken about this person.
     *  @param string|null $value Value to set for the personNotes property.
    */
    public function setPersonNotes(?string $value ): void {
        $this->personNotes = $value;
    }

    /**
     * Sets the personType property value. The type of person.
     *  @param string|null $value Value to set for the personType property.
    */
    public function setPersonType(?string $value ): void {
        $this->personType = $value;
    }

    /**
     * Sets the phones property value. The person's phone numbers.
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the postalAddresses property value. The person's addresses.
     *  @param array<Location>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value ): void {
        $this->postalAddresses = $value;
    }

    /**
     * Sets the profession property value. The person's profession.
     *  @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value ): void {
        $this->profession = $value;
    }

    /**
     * Sets the sources property value. The sources the user data comes from, for example Directory or Outlook Contacts.
     *  @param array<PersonDataSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value ): void {
        $this->sources = $value;
    }

    /**
     * Sets the surname property value. The person's surname.
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the title property value. The person's title.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the websites property value. The person's websites.
     *  @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value ): void {
        $this->websites = $value;
    }

    /**
     * Sets the yomiCompany property value. The phonetic Japanese name of the person's company.
     *  @param string|null $value Value to set for the yomiCompany property.
    */
    public function setYomiCompany(?string $value ): void {
        $this->yomiCompany = $value;
    }

}
