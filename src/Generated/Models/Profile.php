<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Profile extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Profile {
        return new Profile();
    }

    /**
     * Gets the account property value. The account property
     * @return array<UserAccountInformation>|null
    */
    public function getAccount(): ?array {
        $val = $this->getBackingStore()->get('account');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserAccountInformation::class);
            /** @var array<UserAccountInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'account'");
    }

    /**
     * Gets the addresses property value. Represents details of addresses associated with the user.
     * @return array<ItemAddress>|null
    */
    public function getAddresses(): ?array {
        $val = $this->getBackingStore()->get('addresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemAddress::class);
            /** @var array<ItemAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addresses'");
    }

    /**
     * Gets the anniversaries property value. Represents the details of meaningful dates associated with a person.
     * @return array<PersonAnnualEvent>|null
    */
    public function getAnniversaries(): ?array {
        $val = $this->getBackingStore()->get('anniversaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonAnnualEvent::class);
            /** @var array<PersonAnnualEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anniversaries'");
    }

    /**
     * Gets the awards property value. Represents the details of awards or honors associated with a person.
     * @return array<PersonAward>|null
    */
    public function getAwards(): ?array {
        $val = $this->getBackingStore()->get('awards');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonAward::class);
            /** @var array<PersonAward>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'awards'");
    }

    /**
     * Gets the certifications property value. Represents the details of certifications associated with a person.
     * @return array<PersonCertification>|null
    */
    public function getCertifications(): ?array {
        $val = $this->getBackingStore()->get('certifications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonCertification::class);
            /** @var array<PersonCertification>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certifications'");
    }

    /**
     * Gets the educationalActivities property value. Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     * @return array<EducationalActivity>|null
    */
    public function getEducationalActivities(): ?array {
        $val = $this->getBackingStore()->get('educationalActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EducationalActivity::class);
            /** @var array<EducationalActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'educationalActivities'");
    }

    /**
     * Gets the emails property value. Represents detailed information about email addresses associated with the user.
     * @return array<ItemEmail>|null
    */
    public function getEmails(): ?array {
        $val = $this->getBackingStore()->get('emails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemEmail::class);
            /** @var array<ItemEmail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getCollectionOfObjectValues([UserAccountInformation::class, 'createFromDiscriminatorValue'])),
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([ItemAddress::class, 'createFromDiscriminatorValue'])),
            'anniversaries' => fn(ParseNode $n) => $o->setAnniversaries($n->getCollectionOfObjectValues([PersonAnnualEvent::class, 'createFromDiscriminatorValue'])),
            'awards' => fn(ParseNode $n) => $o->setAwards($n->getCollectionOfObjectValues([PersonAward::class, 'createFromDiscriminatorValue'])),
            'certifications' => fn(ParseNode $n) => $o->setCertifications($n->getCollectionOfObjectValues([PersonCertification::class, 'createFromDiscriminatorValue'])),
            'educationalActivities' => fn(ParseNode $n) => $o->setEducationalActivities($n->getCollectionOfObjectValues([EducationalActivity::class, 'createFromDiscriminatorValue'])),
            'emails' => fn(ParseNode $n) => $o->setEmails($n->getCollectionOfObjectValues([ItemEmail::class, 'createFromDiscriminatorValue'])),
            'interests' => fn(ParseNode $n) => $o->setInterests($n->getCollectionOfObjectValues([PersonInterest::class, 'createFromDiscriminatorValue'])),
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfObjectValues([LanguageProficiency::class, 'createFromDiscriminatorValue'])),
            'names' => fn(ParseNode $n) => $o->setNames($n->getCollectionOfObjectValues([PersonName::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getCollectionOfObjectValues([PersonAnnotation::class, 'createFromDiscriminatorValue'])),
            'patents' => fn(ParseNode $n) => $o->setPatents($n->getCollectionOfObjectValues([ItemPatent::class, 'createFromDiscriminatorValue'])),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([ItemPhone::class, 'createFromDiscriminatorValue'])),
            'positions' => fn(ParseNode $n) => $o->setPositions($n->getCollectionOfObjectValues([WorkPosition::class, 'createFromDiscriminatorValue'])),
            'projects' => fn(ParseNode $n) => $o->setProjects($n->getCollectionOfObjectValues([ProjectParticipation::class, 'createFromDiscriminatorValue'])),
            'publications' => fn(ParseNode $n) => $o->setPublications($n->getCollectionOfObjectValues([ItemPublication::class, 'createFromDiscriminatorValue'])),
            'skills' => fn(ParseNode $n) => $o->setSkills($n->getCollectionOfObjectValues([SkillProficiency::class, 'createFromDiscriminatorValue'])),
            'webAccounts' => fn(ParseNode $n) => $o->setWebAccounts($n->getCollectionOfObjectValues([WebAccount::class, 'createFromDiscriminatorValue'])),
            'websites' => fn(ParseNode $n) => $o->setWebsites($n->getCollectionOfObjectValues([PersonWebsite::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the interests property value. Provides detailed information about interests the user has associated with themselves in various services.
     * @return array<PersonInterest>|null
    */
    public function getInterests(): ?array {
        $val = $this->getBackingStore()->get('interests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonInterest::class);
            /** @var array<PersonInterest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interests'");
    }

    /**
     * Gets the languages property value. Represents detailed information about languages that a user has added to their profile.
     * @return array<LanguageProficiency>|null
    */
    public function getLanguages(): ?array {
        $val = $this->getBackingStore()->get('languages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LanguageProficiency::class);
            /** @var array<LanguageProficiency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languages'");
    }

    /**
     * Gets the names property value. Represents the names a user has added to their profile.
     * @return array<PersonName>|null
    */
    public function getNames(): ?array {
        $val = $this->getBackingStore()->get('names');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonName::class);
            /** @var array<PersonName>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'names'");
    }

    /**
     * Gets the notes property value. Represents notes that a user has added to their profile.
     * @return array<PersonAnnotation>|null
    */
    public function getNotes(): ?array {
        $val = $this->getBackingStore()->get('notes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonAnnotation::class);
            /** @var array<PersonAnnotation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the patents property value. Represents patents that a user has added to their profile.
     * @return array<ItemPatent>|null
    */
    public function getPatents(): ?array {
        $val = $this->getBackingStore()->get('patents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemPatent::class);
            /** @var array<ItemPatent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'patents'");
    }

    /**
     * Gets the phones property value. Represents detailed information about phone numbers associated with a user in various services.
     * @return array<ItemPhone>|null
    */
    public function getPhones(): ?array {
        $val = $this->getBackingStore()->get('phones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemPhone::class);
            /** @var array<ItemPhone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phones'");
    }

    /**
     * Gets the positions property value. Represents detailed information about work positions associated with a user's profile.
     * @return array<WorkPosition>|null
    */
    public function getPositions(): ?array {
        $val = $this->getBackingStore()->get('positions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkPosition::class);
            /** @var array<WorkPosition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'positions'");
    }

    /**
     * Gets the projects property value. Represents detailed information about projects associated with a user.
     * @return array<ProjectParticipation>|null
    */
    public function getProjects(): ?array {
        $val = $this->getBackingStore()->get('projects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProjectParticipation::class);
            /** @var array<ProjectParticipation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'projects'");
    }

    /**
     * Gets the publications property value. Represents details of any publications a user has added to their profile.
     * @return array<ItemPublication>|null
    */
    public function getPublications(): ?array {
        $val = $this->getBackingStore()->get('publications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ItemPublication::class);
            /** @var array<ItemPublication>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publications'");
    }

    /**
     * Gets the skills property value. Represents detailed information about skills associated with a user in various services.
     * @return array<SkillProficiency>|null
    */
    public function getSkills(): ?array {
        $val = $this->getBackingStore()->get('skills');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SkillProficiency::class);
            /** @var array<SkillProficiency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skills'");
    }

    /**
     * Gets the webAccounts property value. Represents web accounts the user has indicated they use or has added to their user profile.
     * @return array<WebAccount>|null
    */
    public function getWebAccounts(): ?array {
        $val = $this->getBackingStore()->get('webAccounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebAccount::class);
            /** @var array<WebAccount>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webAccounts'");
    }

    /**
     * Gets the websites property value. Represents detailed information about websites associated with a user in various services.
     * @return array<PersonWebsite>|null
    */
    public function getWebsites(): ?array {
        $val = $this->getBackingStore()->get('websites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PersonWebsite::class);
            /** @var array<PersonWebsite>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'websites'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('account', $this->getAccount());
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
        $writer->writeCollectionOfObjectValues('anniversaries', $this->getAnniversaries());
        $writer->writeCollectionOfObjectValues('awards', $this->getAwards());
        $writer->writeCollectionOfObjectValues('certifications', $this->getCertifications());
        $writer->writeCollectionOfObjectValues('educationalActivities', $this->getEducationalActivities());
        $writer->writeCollectionOfObjectValues('emails', $this->getEmails());
        $writer->writeCollectionOfObjectValues('interests', $this->getInterests());
        $writer->writeCollectionOfObjectValues('languages', $this->getLanguages());
        $writer->writeCollectionOfObjectValues('names', $this->getNames());
        $writer->writeCollectionOfObjectValues('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('patents', $this->getPatents());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
        $writer->writeCollectionOfObjectValues('positions', $this->getPositions());
        $writer->writeCollectionOfObjectValues('projects', $this->getProjects());
        $writer->writeCollectionOfObjectValues('publications', $this->getPublications());
        $writer->writeCollectionOfObjectValues('skills', $this->getSkills());
        $writer->writeCollectionOfObjectValues('webAccounts', $this->getWebAccounts());
        $writer->writeCollectionOfObjectValues('websites', $this->getWebsites());
    }

    /**
     * Sets the account property value. The account property
     * @param array<UserAccountInformation>|null $value Value to set for the account property.
    */
    public function setAccount(?array $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the addresses property value. Represents details of addresses associated with the user.
     * @param array<ItemAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->getBackingStore()->set('addresses', $value);
    }

    /**
     * Sets the anniversaries property value. Represents the details of meaningful dates associated with a person.
     * @param array<PersonAnnualEvent>|null $value Value to set for the anniversaries property.
    */
    public function setAnniversaries(?array $value): void {
        $this->getBackingStore()->set('anniversaries', $value);
    }

    /**
     * Sets the awards property value. Represents the details of awards or honors associated with a person.
     * @param array<PersonAward>|null $value Value to set for the awards property.
    */
    public function setAwards(?array $value): void {
        $this->getBackingStore()->set('awards', $value);
    }

    /**
     * Sets the certifications property value. Represents the details of certifications associated with a person.
     * @param array<PersonCertification>|null $value Value to set for the certifications property.
    */
    public function setCertifications(?array $value): void {
        $this->getBackingStore()->set('certifications', $value);
    }

    /**
     * Sets the educationalActivities property value. Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
     * @param array<EducationalActivity>|null $value Value to set for the educationalActivities property.
    */
    public function setEducationalActivities(?array $value): void {
        $this->getBackingStore()->set('educationalActivities', $value);
    }

    /**
     * Sets the emails property value. Represents detailed information about email addresses associated with the user.
     * @param array<ItemEmail>|null $value Value to set for the emails property.
    */
    public function setEmails(?array $value): void {
        $this->getBackingStore()->set('emails', $value);
    }

    /**
     * Sets the interests property value. Provides detailed information about interests the user has associated with themselves in various services.
     * @param array<PersonInterest>|null $value Value to set for the interests property.
    */
    public function setInterests(?array $value): void {
        $this->getBackingStore()->set('interests', $value);
    }

    /**
     * Sets the languages property value. Represents detailed information about languages that a user has added to their profile.
     * @param array<LanguageProficiency>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->getBackingStore()->set('languages', $value);
    }

    /**
     * Sets the names property value. Represents the names a user has added to their profile.
     * @param array<PersonName>|null $value Value to set for the names property.
    */
    public function setNames(?array $value): void {
        $this->getBackingStore()->set('names', $value);
    }

    /**
     * Sets the notes property value. Represents notes that a user has added to their profile.
     * @param array<PersonAnnotation>|null $value Value to set for the notes property.
    */
    public function setNotes(?array $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the patents property value. Represents patents that a user has added to their profile.
     * @param array<ItemPatent>|null $value Value to set for the patents property.
    */
    public function setPatents(?array $value): void {
        $this->getBackingStore()->set('patents', $value);
    }

    /**
     * Sets the phones property value. Represents detailed information about phone numbers associated with a user in various services.
     * @param array<ItemPhone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

    /**
     * Sets the positions property value. Represents detailed information about work positions associated with a user's profile.
     * @param array<WorkPosition>|null $value Value to set for the positions property.
    */
    public function setPositions(?array $value): void {
        $this->getBackingStore()->set('positions', $value);
    }

    /**
     * Sets the projects property value. Represents detailed information about projects associated with a user.
     * @param array<ProjectParticipation>|null $value Value to set for the projects property.
    */
    public function setProjects(?array $value): void {
        $this->getBackingStore()->set('projects', $value);
    }

    /**
     * Sets the publications property value. Represents details of any publications a user has added to their profile.
     * @param array<ItemPublication>|null $value Value to set for the publications property.
    */
    public function setPublications(?array $value): void {
        $this->getBackingStore()->set('publications', $value);
    }

    /**
     * Sets the skills property value. Represents detailed information about skills associated with a user in various services.
     * @param array<SkillProficiency>|null $value Value to set for the skills property.
    */
    public function setSkills(?array $value): void {
        $this->getBackingStore()->set('skills', $value);
    }

    /**
     * Sets the webAccounts property value. Represents web accounts the user has indicated they use or has added to their user profile.
     * @param array<WebAccount>|null $value Value to set for the webAccounts property.
    */
    public function setWebAccounts(?array $value): void {
        $this->getBackingStore()->set('webAccounts', $value);
    }

    /**
     * Sets the websites property value. Represents detailed information about websites associated with a user in various services.
     * @param array<PersonWebsite>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value): void {
        $this->getBackingStore()->set('websites', $value);
    }

}
