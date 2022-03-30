<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Profile extends Entity 
{
    /** @var array<UserAccountInformation>|null $account  */
    private ?array $account = null;
    
    /** @var array<ItemAddress>|null $addresses Represents details of addresses associated with the user. */
    private ?array $addresses = null;
    
    /** @var array<PersonAnnualEvent>|null $anniversaries Represents the details of meaningful dates associated with a person. */
    private ?array $anniversaries = null;
    
    /** @var array<PersonAward>|null $awards Represents the details of awards or honors associated with a person. */
    private ?array $awards = null;
    
    /** @var array<PersonCertification>|null $certifications Represents the details of certifications associated with a person. */
    private ?array $certifications = null;
    
    /** @var array<EducationalActivity>|null $educationalActivities Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities. */
    private ?array $educationalActivities = null;
    
    /** @var array<ItemEmail>|null $emails Represents detailed information about email addresses associated with the user. */
    private ?array $emails = null;
    
    /** @var array<PersonInterest>|null $interests Provides detailed information about interests the user has associated with themselves in various services. */
    private ?array $interests = null;
    
    /** @var array<LanguageProficiency>|null $languages Represents detailed information about languages that a user has added to their profile. */
    private ?array $languages = null;
    
    /** @var array<PersonName>|null $names Represents the names a user has added to their profile. */
    private ?array $names = null;
    
    /** @var array<PersonAnnotation>|null $notes Represents notes that a user has added to their profile. */
    private ?array $notes = null;
    
    /** @var array<ItemPatent>|null $patents Represents patents that a user has added to their profile. */
    private ?array $patents = null;
    
    /** @var array<ItemPhone>|null $phones Represents detailed information about phone numbers associated with a user in various services. */
    private ?array $phones = null;
    
    /** @var array<WorkPosition>|null $positions Represents detailed information about work positions associated with a user's profile. */
    private ?array $positions = null;
    
    /** @var array<ProjectParticipation>|null $projects Represents detailed information about projects associated with a user. */
    private ?array $projects = null;
    
    /** @var array<ItemPublication>|null $publications Represents details of any publications a user has added to their profile. */
    private ?array $publications = null;
    
    /** @var array<SkillProficiency>|null $skills Represents detailed information about skills associated with a user in various services. */
    private ?array $skills = null;
    
    /** @var array<WebAccount>|null $webAccounts Represents web accounts the user has indicated they use or has added to their user profile. */
    private ?array $webAccounts = null;
    
    /** @var array<PersonWebsite>|null $websites Represents detailed information about websites associated with a user in various services. */
    private ?array $websites = null;
    
    /**
     * Instantiates a new profile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Profile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Profile {
        return new Profile();
    }

    /**
     * Gets the account property value. 
     * @return array<UserAccountInformation>|null
    */
    public function getAccount(): ?array {
        return $this->account;
    }

    /**
     * Gets the addresses property value. Represents details of addresses associated with the user.
     * @return array<ItemAddress>|null
    */
    public function getAddresses(): ?array {
        return $this->addresses;
    }

    /**
     * Gets the anniversaries property value. Represents the details of meaningful dates associated with a person.
     * @return array<PersonAnnualEvent>|null
    */
    public function getAnniversaries(): ?array {
        return $this->anniversaries;
    }

    /**
     * Gets the awards property value. Represents the details of awards or honors associated with a person.
     * @return array<PersonAward>|null
    */
    public function getAwards(): ?array {
        return $this->awards;
    }

    /**
     * Gets the certifications property value. Represents the details of certifications associated with a person.
     * @return array<PersonCertification>|null
    */
    public function getCertifications(): ?array {
        return $this->certifications;
    }

    /**
     * Gets the educationalActivities property value. Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     * @return array<EducationalActivity>|null
    */
    public function getEducationalActivities(): ?array {
        return $this->educationalActivities;
    }

    /**
     * Gets the emails property value. Represents detailed information about email addresses associated with the user.
     * @return array<ItemEmail>|null
    */
    public function getEmails(): ?array {
        return $this->emails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (self $o, ParseNode $n) { $o->setAccount($n->getCollectionOfObjectValues(UserAccountInformation::class)); },
            'addresses' => function (self $o, ParseNode $n) { $o->setAddresses($n->getCollectionOfObjectValues(ItemAddress::class)); },
            'anniversaries' => function (self $o, ParseNode $n) { $o->setAnniversaries($n->getCollectionOfObjectValues(PersonAnnualEvent::class)); },
            'awards' => function (self $o, ParseNode $n) { $o->setAwards($n->getCollectionOfObjectValues(PersonAward::class)); },
            'certifications' => function (self $o, ParseNode $n) { $o->setCertifications($n->getCollectionOfObjectValues(PersonCertification::class)); },
            'educationalActivities' => function (self $o, ParseNode $n) { $o->setEducationalActivities($n->getCollectionOfObjectValues(EducationalActivity::class)); },
            'emails' => function (self $o, ParseNode $n) { $o->setEmails($n->getCollectionOfObjectValues(ItemEmail::class)); },
            'interests' => function (self $o, ParseNode $n) { $o->setInterests($n->getCollectionOfObjectValues(PersonInterest::class)); },
            'languages' => function (self $o, ParseNode $n) { $o->setLanguages($n->getCollectionOfObjectValues(LanguageProficiency::class)); },
            'names' => function (self $o, ParseNode $n) { $o->setNames($n->getCollectionOfObjectValues(PersonName::class)); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getCollectionOfObjectValues(PersonAnnotation::class)); },
            'patents' => function (self $o, ParseNode $n) { $o->setPatents($n->getCollectionOfObjectValues(ItemPatent::class)); },
            'phones' => function (self $o, ParseNode $n) { $o->setPhones($n->getCollectionOfObjectValues(ItemPhone::class)); },
            'positions' => function (self $o, ParseNode $n) { $o->setPositions($n->getCollectionOfObjectValues(WorkPosition::class)); },
            'projects' => function (self $o, ParseNode $n) { $o->setProjects($n->getCollectionOfObjectValues(ProjectParticipation::class)); },
            'publications' => function (self $o, ParseNode $n) { $o->setPublications($n->getCollectionOfObjectValues(ItemPublication::class)); },
            'skills' => function (self $o, ParseNode $n) { $o->setSkills($n->getCollectionOfObjectValues(SkillProficiency::class)); },
            'webAccounts' => function (self $o, ParseNode $n) { $o->setWebAccounts($n->getCollectionOfObjectValues(WebAccount::class)); },
            'websites' => function (self $o, ParseNode $n) { $o->setWebsites($n->getCollectionOfObjectValues(PersonWebsite::class)); },
        ]);
    }

    /**
     * Gets the interests property value. Provides detailed information about interests the user has associated with themselves in various services.
     * @return array<PersonInterest>|null
    */
    public function getInterests(): ?array {
        return $this->interests;
    }

    /**
     * Gets the languages property value. Represents detailed information about languages that a user has added to their profile.
     * @return array<LanguageProficiency>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Gets the names property value. Represents the names a user has added to their profile.
     * @return array<PersonName>|null
    */
    public function getNames(): ?array {
        return $this->names;
    }

    /**
     * Gets the notes property value. Represents notes that a user has added to their profile.
     * @return array<PersonAnnotation>|null
    */
    public function getNotes(): ?array {
        return $this->notes;
    }

    /**
     * Gets the patents property value. Represents patents that a user has added to their profile.
     * @return array<ItemPatent>|null
    */
    public function getPatents(): ?array {
        return $this->patents;
    }

    /**
     * Gets the phones property value. Represents detailed information about phone numbers associated with a user in various services.
     * @return array<ItemPhone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the positions property value. Represents detailed information about work positions associated with a user's profile.
     * @return array<WorkPosition>|null
    */
    public function getPositions(): ?array {
        return $this->positions;
    }

    /**
     * Gets the projects property value. Represents detailed information about projects associated with a user.
     * @return array<ProjectParticipation>|null
    */
    public function getProjects(): ?array {
        return $this->projects;
    }

    /**
     * Gets the publications property value. Represents details of any publications a user has added to their profile.
     * @return array<ItemPublication>|null
    */
    public function getPublications(): ?array {
        return $this->publications;
    }

    /**
     * Gets the skills property value. Represents detailed information about skills associated with a user in various services.
     * @return array<SkillProficiency>|null
    */
    public function getSkills(): ?array {
        return $this->skills;
    }

    /**
     * Gets the webAccounts property value. Represents web accounts the user has indicated they use or has added to their user profile.
     * @return array<WebAccount>|null
    */
    public function getWebAccounts(): ?array {
        return $this->webAccounts;
    }

    /**
     * Gets the websites property value. Represents detailed information about websites associated with a user in various services.
     * @return array<PersonWebsite>|null
    */
    public function getWebsites(): ?array {
        return $this->websites;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('account', $this->account);
        $writer->writeCollectionOfObjectValues('addresses', $this->addresses);
        $writer->writeCollectionOfObjectValues('anniversaries', $this->anniversaries);
        $writer->writeCollectionOfObjectValues('awards', $this->awards);
        $writer->writeCollectionOfObjectValues('certifications', $this->certifications);
        $writer->writeCollectionOfObjectValues('educationalActivities', $this->educationalActivities);
        $writer->writeCollectionOfObjectValues('emails', $this->emails);
        $writer->writeCollectionOfObjectValues('interests', $this->interests);
        $writer->writeCollectionOfObjectValues('languages', $this->languages);
        $writer->writeCollectionOfObjectValues('names', $this->names);
        $writer->writeCollectionOfObjectValues('notes', $this->notes);
        $writer->writeCollectionOfObjectValues('patents', $this->patents);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeCollectionOfObjectValues('positions', $this->positions);
        $writer->writeCollectionOfObjectValues('projects', $this->projects);
        $writer->writeCollectionOfObjectValues('publications', $this->publications);
        $writer->writeCollectionOfObjectValues('skills', $this->skills);
        $writer->writeCollectionOfObjectValues('webAccounts', $this->webAccounts);
        $writer->writeCollectionOfObjectValues('websites', $this->websites);
    }

    /**
     * Sets the account property value. 
     *  @param array<UserAccountInformation>|null $value Value to set for the account property.
    */
    public function setAccount(?array $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the addresses property value. Represents details of addresses associated with the user.
     *  @param array<ItemAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value ): void {
        $this->addresses = $value;
    }

    /**
     * Sets the anniversaries property value. Represents the details of meaningful dates associated with a person.
     *  @param array<PersonAnnualEvent>|null $value Value to set for the anniversaries property.
    */
    public function setAnniversaries(?array $value ): void {
        $this->anniversaries = $value;
    }

    /**
     * Sets the awards property value. Represents the details of awards or honors associated with a person.
     *  @param array<PersonAward>|null $value Value to set for the awards property.
    */
    public function setAwards(?array $value ): void {
        $this->awards = $value;
    }

    /**
     * Sets the certifications property value. Represents the details of certifications associated with a person.
     *  @param array<PersonCertification>|null $value Value to set for the certifications property.
    */
    public function setCertifications(?array $value ): void {
        $this->certifications = $value;
    }

    /**
     * Sets the educationalActivities property value. Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     *  @param array<EducationalActivity>|null $value Value to set for the educationalActivities property.
    */
    public function setEducationalActivities(?array $value ): void {
        $this->educationalActivities = $value;
    }

    /**
     * Sets the emails property value. Represents detailed information about email addresses associated with the user.
     *  @param array<ItemEmail>|null $value Value to set for the emails property.
    */
    public function setEmails(?array $value ): void {
        $this->emails = $value;
    }

    /**
     * Sets the interests property value. Provides detailed information about interests the user has associated with themselves in various services.
     *  @param array<PersonInterest>|null $value Value to set for the interests property.
    */
    public function setInterests(?array $value ): void {
        $this->interests = $value;
    }

    /**
     * Sets the languages property value. Represents detailed information about languages that a user has added to their profile.
     *  @param array<LanguageProficiency>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value ): void {
        $this->languages = $value;
    }

    /**
     * Sets the names property value. Represents the names a user has added to their profile.
     *  @param array<PersonName>|null $value Value to set for the names property.
    */
    public function setNames(?array $value ): void {
        $this->names = $value;
    }

    /**
     * Sets the notes property value. Represents notes that a user has added to their profile.
     *  @param array<PersonAnnotation>|null $value Value to set for the notes property.
    */
    public function setNotes(?array $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the patents property value. Represents patents that a user has added to their profile.
     *  @param array<ItemPatent>|null $value Value to set for the patents property.
    */
    public function setPatents(?array $value ): void {
        $this->patents = $value;
    }

    /**
     * Sets the phones property value. Represents detailed information about phone numbers associated with a user in various services.
     *  @param array<ItemPhone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the positions property value. Represents detailed information about work positions associated with a user's profile.
     *  @param array<WorkPosition>|null $value Value to set for the positions property.
    */
    public function setPositions(?array $value ): void {
        $this->positions = $value;
    }

    /**
     * Sets the projects property value. Represents detailed information about projects associated with a user.
     *  @param array<ProjectParticipation>|null $value Value to set for the projects property.
    */
    public function setProjects(?array $value ): void {
        $this->projects = $value;
    }

    /**
     * Sets the publications property value. Represents details of any publications a user has added to their profile.
     *  @param array<ItemPublication>|null $value Value to set for the publications property.
    */
    public function setPublications(?array $value ): void {
        $this->publications = $value;
    }

    /**
     * Sets the skills property value. Represents detailed information about skills associated with a user in various services.
     *  @param array<SkillProficiency>|null $value Value to set for the skills property.
    */
    public function setSkills(?array $value ): void {
        $this->skills = $value;
    }

    /**
     * Sets the webAccounts property value. Represents web accounts the user has indicated they use or has added to their user profile.
     *  @param array<WebAccount>|null $value Value to set for the webAccounts property.
    */
    public function setWebAccounts(?array $value ): void {
        $this->webAccounts = $value;
    }

    /**
     * Sets the websites property value. Represents detailed information about websites associated with a user in various services.
     *  @param array<PersonWebsite>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value ): void {
        $this->websites = $value;
    }

}
