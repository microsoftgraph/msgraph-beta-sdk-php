<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProjectParticipation extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new ProjectParticipation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.projectParticipation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProjectParticipation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProjectParticipation {
        return new ProjectParticipation();
    }

    /**
     * Gets the categories property value. Contains categories a user has associated with the project (for example, digital transformation, oil rig).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the client property value. Contains detailed information about the client the project was for.
     * @return CompanyDetail|null
    */
    public function getClient(): ?CompanyDetail {
        return $this->getBackingStore()->get('client');
    }

    /**
     * Gets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     * @return array<string>|null
    */
    public function getCollaborationTags(): ?array {
        return $this->getBackingStore()->get('collaborationTags');
    }

    /**
     * Gets the colleagues property value. Lists people that also worked on the project.
     * @return array<RelatedPerson>|null
    */
    public function getColleagues(): ?array {
        return $this->getBackingStore()->get('colleagues');
    }

    /**
     * Gets the detail property value. Contains detail about the user's role on the project.
     * @return PositionDetail|null
    */
    public function getDetail(): ?PositionDetail {
        return $this->getBackingStore()->get('detail');
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the project.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfPrimitiveValues()),
            'client' => fn(ParseNode $n) => $o->setClient($n->getObjectValue([CompanyDetail::class, 'createFromDiscriminatorValue'])),
            'collaborationTags' => fn(ParseNode $n) => $o->setCollaborationTags($n->getCollectionOfPrimitiveValues()),
            'colleagues' => fn(ParseNode $n) => $o->setColleagues($n->getCollectionOfObjectValues([RelatedPerson::class, 'createFromDiscriminatorValue'])),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getObjectValue([PositionDetail::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'sponsors' => fn(ParseNode $n) => $o->setSponsors($n->getCollectionOfObjectValues([RelatedPerson::class, 'createFromDiscriminatorValue'])),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the sponsors property value. The Person or people who sponsored the project.
     * @return array<RelatedPerson>|null
    */
    public function getSponsors(): ?array {
        return $this->getBackingStore()->get('sponsors');
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->getBackingStore()->get('thumbnailUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeObjectValue('client', $this->getClient());
        $writer->writeCollectionOfPrimitiveValues('collaborationTags', $this->getCollaborationTags());
        $writer->writeCollectionOfObjectValues('colleagues', $this->getColleagues());
        $writer->writeObjectValue('detail', $this->getDetail());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('sponsors', $this->getSponsors());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
    }

    /**
     * Sets the categories property value. Contains categories a user has associated with the project (for example, digital transformation, oil rig).
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the client property value. Contains detailed information about the client the project was for.
     *  @param CompanyDetail|null $value Value to set for the client property.
    */
    public function setClient(?CompanyDetail $value): void {
        $this->getBackingStore()->set('client', $value);
    }

    /**
     * Sets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     *  @param array<string>|null $value Value to set for the collaborationTags property.
    */
    public function setCollaborationTags(?array $value): void {
        $this->getBackingStore()->set('collaborationTags', $value);
    }

    /**
     * Sets the colleagues property value. Lists people that also worked on the project.
     *  @param array<RelatedPerson>|null $value Value to set for the colleagues property.
    */
    public function setColleagues(?array $value): void {
        $this->getBackingStore()->set('colleagues', $value);
    }

    /**
     * Sets the detail property value. Contains detail about the user's role on the project.
     *  @param PositionDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?PositionDetail $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the project.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the sponsors property value. The Person or people who sponsored the project.
     *  @param array<RelatedPerson>|null $value Value to set for the sponsors property.
    */
    public function setSponsors(?array $value): void {
        $this->getBackingStore()->set('sponsors', $value);
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

}
