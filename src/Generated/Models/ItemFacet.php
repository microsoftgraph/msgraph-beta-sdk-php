<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemFacet extends Entity implements Parsable 
{
    /**
     * Instantiates a new itemFacet and sets the default values.
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
        return $this->getBackingStore()->get('allowedAudiences');
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        ]);
    }

    /**
     * Gets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     * @return InferenceData|null
    */
    public function getInference(): ?InferenceData {
        return $this->getBackingStore()->get('inference');
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->getBackingStore()->get('isSearchable');
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the source property value. Where the values within an entity originated if synced from another service.
     * @return PersonDataSources|null
    */
    public function getSource(): ?PersonDataSources {
        return $this->getBackingStore()->get('source');
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
    }

    /**
     * Sets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @param AllowedAudiences|null $value Value to set for the allowedAudiences property.
    */
    public function setAllowedAudiences(?AllowedAudiences $value): void {
        $this->getBackingStore()->set('allowedAudiences', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
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
     * Sets the lastModifiedBy property value. The lastModifiedBy property
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

}
