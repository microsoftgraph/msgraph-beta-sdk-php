<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemFacet extends Entity implements Parsable 
{
    /**
     * @var AllowedAudiences|null $allowedAudiences The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
    */
    private ?AllowedAudiences $allowedAudiences = null;
    
    /**
     * @var IdentitySet|null $createdBy The createdBy property
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Provides the dateTimeOffset for when the entity was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var InferenceData|null $inference Contains inference detail if the entity is inferred by the creating or modifying application.
    */
    private ?InferenceData $inference = null;
    
    /**
     * @var bool|null $isSearchable The isSearchable property
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The lastModifiedBy property
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Provides the dateTimeOffset for when the entity was created.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var PersonDataSources|null $source Where the values within an entity originated if synced from another service.
    */
    private ?PersonDataSources $source = null;
    
    /**
     * Instantiates a new itemFacet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemFacet');
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
        return $this->allowedAudiences;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAudiences' => function (ParseNode $n) use ($o) { $o->setAllowedAudiences($n->getEnumValue(AllowedAudiences::class)); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'inference' => function (ParseNode $n) use ($o) { $o->setInference($n->getObjectValue(array(InferenceData::class, 'createFromDiscriminatorValue'))); },
            'isSearchable' => function (ParseNode $n) use ($o) { $o->setIsSearchable($n->getBooleanValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getObjectValue(array(PersonDataSources::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     * @return InferenceData|null
    */
    public function getInference(): ?InferenceData {
        return $this->inference;
    }

    /**
     * Gets the isSearchable property value. The isSearchable property
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the source property value. Where the values within an entity originated if synced from another service.
     * @return PersonDataSources|null
    */
    public function getSource(): ?PersonDataSources {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedAudiences', $this->allowedAudiences);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('inference', $this->inference);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('source', $this->source);
    }

    /**
     * Sets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     *  @param AllowedAudiences|null $value Value to set for the allowedAudiences property.
    */
    public function setAllowedAudiences(?AllowedAudiences $value ): void {
        $this->allowedAudiences = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     *  @param InferenceData|null $value Value to set for the inference property.
    */
    public function setInference(?InferenceData $value ): void {
        $this->inference = $value;
    }

    /**
     * Sets the isSearchable property value. The isSearchable property
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the source property value. Where the values within an entity originated if synced from another service.
     *  @param PersonDataSources|null $value Value to set for the source property.
    */
    public function setSource(?PersonDataSources $value ): void {
        $this->source = $value;
    }

}
