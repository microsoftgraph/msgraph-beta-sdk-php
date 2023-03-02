<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SkillProficiency extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new SkillProficiency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.skillProficiency');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SkillProficiency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SkillProficiency {
        return new SkillProficiency();
    }

    /**
     * Gets the categories property value. Contains categories a user has associated with the skill (for example, personal, professional, hobby).
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     * @return array<string>|null
    */
    public function getCollaborationTags(): ?array {
        return $this->getBackingStore()->get('collaborationTags');
    }

    /**
     * Gets the displayName property value. Contains a friendly name for the skill.
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
            'collaborationTags' => fn(ParseNode $n) => $o->setCollaborationTags($n->getCollectionOfPrimitiveValues()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'proficiency' => fn(ParseNode $n) => $o->setProficiency($n->getEnumValue(SkillProficiencyLevel::class)),
            'thumbnailUrl' => fn(ParseNode $n) => $o->setThumbnailUrl($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the proficiency property value. Detail of the users proficiency with this skill. Possible values are: elementary, limitedWorking, generalProfessional, advancedProfessional, expert, unknownFutureValue.
     * @return SkillProficiencyLevel|null
    */
    public function getProficiency(): ?SkillProficiencyLevel {
        return $this->getBackingStore()->get('proficiency');
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->getBackingStore()->get('thumbnailUrl');
    }

    /**
     * Gets the webUrl property value. Contains a link to an information source about the skill.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfPrimitiveValues('collaborationTags', $this->getCollaborationTags());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('proficiency', $this->getProficiency());
        $writer->writeStringValue('thumbnailUrl', $this->getThumbnailUrl());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the categories property value. Contains categories a user has associated with the skill (for example, personal, professional, hobby).
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the collaborationTags property value. Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
     * @param array<string>|null $value Value to set for the collaborationTags property.
    */
    public function setCollaborationTags(?array $value): void {
        $this->getBackingStore()->set('collaborationTags', $value);
    }

    /**
     * Sets the displayName property value. Contains a friendly name for the skill.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the proficiency property value. Detail of the users proficiency with this skill. Possible values are: elementary, limitedWorking, generalProfessional, advancedProfessional, expert, unknownFutureValue.
     * @param SkillProficiencyLevel|null $value Value to set for the proficiency property.
    */
    public function setProficiency(?SkillProficiencyLevel $value): void {
        $this->getBackingStore()->set('proficiency', $value);
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     * @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value): void {
        $this->getBackingStore()->set('thumbnailUrl', $value);
    }

    /**
     * Sets the webUrl property value. Contains a link to an information source about the skill.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
