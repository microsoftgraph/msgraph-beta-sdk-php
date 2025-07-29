<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ItemFacet extends Entity implements Parsable 
{
    /**
     * Instantiates a new ItemFacet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemFacet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemFacet {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.educationalActivity': return new EducationalActivity();
                case '#microsoft.graph.itemAddress': return new ItemAddress();
                case '#microsoft.graph.itemEmail': return new ItemEmail();
                case '#microsoft.graph.itemPatent': return new ItemPatent();
                case '#microsoft.graph.itemPhone': return new ItemPhone();
                case '#microsoft.graph.itemPublication': return new ItemPublication();
                case '#microsoft.graph.languageProficiency': return new LanguageProficiency();
                case '#microsoft.graph.personAnnotation': return new PersonAnnotation();
                case '#microsoft.graph.personAnnualEvent': return new PersonAnnualEvent();
                case '#microsoft.graph.personAward': return new PersonAward();
                case '#microsoft.graph.personCertification': return new PersonCertification();
                case '#microsoft.graph.personInterest': return new PersonInterest();
                case '#microsoft.graph.personName': return new PersonName();
                case '#microsoft.graph.personResponsibility': return new PersonResponsibility();
                case '#microsoft.graph.personWebsite': return new PersonWebsite();
                case '#microsoft.graph.projectParticipation': return new ProjectParticipation();
                case '#microsoft.graph.skillProficiency': return new SkillProficiency();
                case '#microsoft.graph.userAccountInformation': return new UserAccountInformation();
                case '#microsoft.graph.webAccount': return new WebAccount();
                case '#microsoft.graph.workPosition': return new WorkPosition();
            }
        }
        return new ItemFacet();
    }

    /**
     * Gets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @return AllowedAudiences|null
    */
    public function getAllowedAudiences(): ?AllowedAudiences {
        $val = $this->getBackingStore()->get('allowedAudiences');
        if (is_null($val) || $val instanceof AllowedAudiences) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAudiences'");
    }

    /**
     * Gets the createdBy property value. Provides the identifier of the user and/or application that created the entity.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAudiences' => fn(ParseNode $n) => $o->setAllowedAudiences($n->getEnumValue(AllowedAudiences::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'inference' => fn(ParseNode $n) => $o->setInference($n->getObjectValue([InferenceData::class, 'createFromDiscriminatorValue'])),
            'isSearchable' => fn(ParseNode $n) => $o->setIsSearchable($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([PersonDataSources::class, 'createFromDiscriminatorValue'])),
            'sources' => fn(ParseNode $n) => $o->setSources($n->getCollectionOfObjectValues([ProfileSourceAnnotation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     * @return InferenceData|null
    */
    public function getInference(): ?InferenceData {
        $val = $this->getBackingStore()->get('inference');
        if (is_null($val) || $val instanceof InferenceData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inference'");
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        $val = $this->getBackingStore()->get('isSearchable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSearchable'");
    }

    /**
     * Gets the lastModifiedBy property value. Provides the identifier of the user and/or application that last modified the entity.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
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
     * Gets the source property value. Where the values within an entity originated if synced from another service.
     * @return PersonDataSources|null
    */
    public function getSource(): ?PersonDataSources {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof PersonDataSources) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the sources property value. Where the values within an entity originated if synced from another source.
     * @return array<ProfileSourceAnnotation>|null
    */
    public function getSources(): ?array {
        $val = $this->getBackingStore()->get('sources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProfileSourceAnnotation::class);
            /** @var array<ProfileSourceAnnotation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedAudiences', $this->getAllowedAudiences());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('inference', $this->getInference());
        $writer->writeBooleanValue('isSearchable', $this->getIsSearchable());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('source', $this->getSource());
        $writer->writeCollectionOfObjectValues('sources', $this->getSources());
    }

    /**
     * Sets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @param AllowedAudiences|null $value Value to set for the allowedAudiences property.
    */
    public function setAllowedAudiences(?AllowedAudiences $value): void {
        $this->getBackingStore()->set('allowedAudiences', $value);
    }

    /**
     * Sets the createdBy property value. Provides the identifier of the user and/or application that created the entity.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     * @param InferenceData|null $value Value to set for the inference property.
    */
    public function setInference(?InferenceData $value): void {
        $this->getBackingStore()->set('inference', $value);
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     * @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value): void {
        $this->getBackingStore()->set('isSearchable', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Provides the identifier of the user and/or application that last modified the entity.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the source property value. Where the values within an entity originated if synced from another service.
     * @param PersonDataSources|null $value Value to set for the source property.
    */
    public function setSource(?PersonDataSources $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the sources property value. Where the values within an entity originated if synced from another source.
     * @param array<ProfileSourceAnnotation>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

}
