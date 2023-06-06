<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Person extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Person {
        return new Person();
    }

    /**
     * Gets the birthday property value. The person's birthday.
     * @return string|null
    */
    public function getBirthday(): ?string {
        return $this->getBackingStore()->get('birthday');
    }

    /**
     * Gets the companyName property value. The name of the person's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->getBackingStore()->get('companyName');
    }

    /**
     * Gets the department property value. The person's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->getBackingStore()->get('department');
    }

    /**
     * Gets the displayName property value. The person's display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the emailAddresses property value. The person's email addresses.
     * @return array<RankedEmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->getBackingStore()->get('emailAddresses');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'birthday' => fn(ParseNode $n) => $o->setBirthday($n->getStringValue()),
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'department' => fn(ParseNode $n) => $o->setDepartment($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddresses' => fn(ParseNode $n) => $o->setEmailAddresses($n->getCollectionOfObjectValues([RankedEmailAddress::class, 'createFromDiscriminatorValue'])),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            'isFavorite' => fn(ParseNode $n) => $o->setIsFavorite($n->getBooleanValue()),
            'mailboxType' => fn(ParseNode $n) => $o->setMailboxType($n->getStringValue()),
            'officeLocation' => fn(ParseNode $n) => $o->setOfficeLocation($n->getStringValue()),
            'personNotes' => fn(ParseNode $n) => $o->setPersonNotes($n->getStringValue()),
            'personType' => fn(ParseNode $n) => $o->setPersonType($n->getStringValue()),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
            'postalAddresses' => fn(ParseNode $n) => $o->setPostalAddresses($n->getCollectionOfObjectValues([Location::class, 'createFromDiscriminatorValue'])),
            'profession' => fn(ParseNode $n) => $o->setProfession($n->getStringValue()),
            'sources' => fn(ParseNode $n) => $o->setSources($n->getCollectionOfObjectValues([PersonDataSource::class, 'createFromDiscriminatorValue'])),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'websites' => fn(ParseNode $n) => $o->setWebsites($n->getCollectionOfObjectValues([Website::class, 'createFromDiscriminatorValue'])),
            'yomiCompany' => fn(ParseNode $n) => $o->setYomiCompany($n->getStringValue()),
        ]);
    }

    /**
     * Gets the givenName property value. The person's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->getBackingStore()->get('givenName');
    }

    /**
     * Gets the isFavorite property value. True if the user has flagged this person as a favorite.
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->getBackingStore()->get('isFavorite');
    }

    /**
     * Gets the mailboxType property value. The type of mailbox that is represented by the person's email address.
     * @return string|null
    */
    public function getMailboxType(): ?string {
        return $this->getBackingStore()->get('mailboxType');
    }

    /**
     * Gets the officeLocation property value. The location of the person's office.
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->getBackingStore()->get('officeLocation');
    }

    /**
     * Gets the personNotes property value. Free-form notes that the user has taken about this person.
     * @return string|null
    */
    public function getPersonNotes(): ?string {
        return $this->getBackingStore()->get('personNotes');
    }

    /**
     * Gets the personType property value. The type of person, for example distribution list.
     * @return string|null
    */
    public function getPersonType(): ?string {
        return $this->getBackingStore()->get('personType');
    }

    /**
     * Gets the phones property value. The person's phone numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->getBackingStore()->get('phones');
    }

    /**
     * Gets the postalAddresses property value. The person's addresses.
     * @return array<Location>|null
    */
    public function getPostalAddresses(): ?array {
        return $this->getBackingStore()->get('postalAddresses');
    }

    /**
     * Gets the profession property value. The person's profession.
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->getBackingStore()->get('profession');
    }

    /**
     * Gets the sources property value. The sources the user data comes from, for example Directory or Outlook Contacts.
     * @return array<PersonDataSource>|null
    */
    public function getSources(): ?array {
        return $this->getBackingStore()->get('sources');
    }

    /**
     * Gets the surname property value. The person's surname.
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->getBackingStore()->get('surname');
    }

    /**
     * Gets the title property value. The person's title.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the websites property value. The person's websites.
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        return $this->getBackingStore()->get('websites');
    }

    /**
     * Gets the yomiCompany property value. The phonetic Japanese name of the person's company.
     * @return string|null
    */
    public function getYomiCompany(): ?string {
        return $this->getBackingStore()->get('yomiCompany');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('birthday', $this->getBirthday());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeStringValue('department', $this->getDepartment());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->getEmailAddresses());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeBooleanValue('isFavorite', $this->getIsFavorite());
        $writer->writeStringValue('mailboxType', $this->getMailboxType());
        $writer->writeStringValue('officeLocation', $this->getOfficeLocation());
        $writer->writeStringValue('personNotes', $this->getPersonNotes());
        $writer->writeStringValue('personType', $this->getPersonType());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->getPostalAddresses());
        $writer->writeStringValue('profession', $this->getProfession());
        $writer->writeCollectionOfObjectValues('sources', $this->getSources());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeCollectionOfObjectValues('websites', $this->getWebsites());
        $writer->writeStringValue('yomiCompany', $this->getYomiCompany());
    }

    /**
     * Sets the birthday property value. The person's birthday.
     * @param string|null $value Value to set for the birthday property.
    */
    public function setBirthday(?string $value): void {
        $this->getBackingStore()->set('birthday', $value);
    }

    /**
     * Sets the companyName property value. The name of the person's company.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->getBackingStore()->set('companyName', $value);
    }

    /**
     * Sets the department property value. The person's department.
     * @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value): void {
        $this->getBackingStore()->set('department', $value);
    }

    /**
     * Sets the displayName property value. The person's display name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddresses property value. The person's email addresses.
     * @param array<RankedEmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value): void {
        $this->getBackingStore()->set('emailAddresses', $value);
    }

    /**
     * Sets the givenName property value. The person's given name.
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the isFavorite property value. True if the user has flagged this person as a favorite.
     * @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value): void {
        $this->getBackingStore()->set('isFavorite', $value);
    }

    /**
     * Sets the mailboxType property value. The type of mailbox that is represented by the person's email address.
     * @param string|null $value Value to set for the mailboxType property.
    */
    public function setMailboxType(?string $value): void {
        $this->getBackingStore()->set('mailboxType', $value);
    }

    /**
     * Sets the officeLocation property value. The location of the person's office.
     * @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value): void {
        $this->getBackingStore()->set('officeLocation', $value);
    }

    /**
     * Sets the personNotes property value. Free-form notes that the user has taken about this person.
     * @param string|null $value Value to set for the personNotes property.
    */
    public function setPersonNotes(?string $value): void {
        $this->getBackingStore()->set('personNotes', $value);
    }

    /**
     * Sets the personType property value. The type of person, for example distribution list.
     * @param string|null $value Value to set for the personType property.
    */
    public function setPersonType(?string $value): void {
        $this->getBackingStore()->set('personType', $value);
    }

    /**
     * Sets the phones property value. The person's phone numbers.
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

    /**
     * Sets the postalAddresses property value. The person's addresses.
     * @param array<Location>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value): void {
        $this->getBackingStore()->set('postalAddresses', $value);
    }

    /**
     * Sets the profession property value. The person's profession.
     * @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value): void {
        $this->getBackingStore()->set('profession', $value);
    }

    /**
     * Sets the sources property value. The sources the user data comes from, for example Directory or Outlook Contacts.
     * @param array<PersonDataSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

    /**
     * Sets the surname property value. The person's surname.
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

    /**
     * Sets the title property value. The person's title.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard RFC 822. By convention, this should map to the person's email name. The general format is alias@domain.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the websites property value. The person's websites.
     * @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value): void {
        $this->getBackingStore()->set('websites', $value);
    }

    /**
     * Sets the yomiCompany property value. The phonetic Japanese name of the person's company.
     * @param string|null $value Value to set for the yomiCompany property.
    */
    public function setYomiCompany(?string $value): void {
        $this->getBackingStore()->set('yomiCompany', $value);
    }

}
