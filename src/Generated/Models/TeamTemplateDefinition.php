<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamTemplateDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamTemplateDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamTemplateDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamTemplateDefinition {
        return new TeamTemplateDefinition();
    }

    /**
     * Gets the audience property value. The audience property
     * @return TeamTemplateAudience|null
    */
    public function getAudience(): ?TeamTemplateAudience {
        return $this->getBackingStore()->get('audience');
    }

    /**
     * Gets the categories property value. The categories property
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getEnumValue(TeamTemplateAudience::class)),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfPrimitiveValues()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'iconUrl' => fn(ParseNode $n) => $o->setIconUrl($n->getStringValue()),
            'languageTag' => fn(ParseNode $n) => $o->setLanguageTag($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'parentTemplateId' => fn(ParseNode $n) => $o->setParentTemplateId($n->getStringValue()),
            'publisherName' => fn(ParseNode $n) => $o->setPublisherName($n->getStringValue()),
            'shortDescription' => fn(ParseNode $n) => $o->setShortDescription($n->getStringValue()),
            'teamDefinition' => fn(ParseNode $n) => $o->setTeamDefinition($n->getObjectValue([Team::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iconUrl property value. The iconUrl property
     * @return string|null
    */
    public function getIconUrl(): ?string {
        return $this->getBackingStore()->get('iconUrl');
    }

    /**
     * Gets the languageTag property value. The languageTag property
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->getBackingStore()->get('languageTag');
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the parentTemplateId property value. The parentTemplateId property
     * @return string|null
    */
    public function getParentTemplateId(): ?string {
        return $this->getBackingStore()->get('parentTemplateId');
    }

    /**
     * Gets the publisherName property value. The publisherName property
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->getBackingStore()->get('publisherName');
    }

    /**
     * Gets the shortDescription property value. The shortDescription property
     * @return string|null
    */
    public function getShortDescription(): ?string {
        return $this->getBackingStore()->get('shortDescription');
    }

    /**
     * Gets the teamDefinition property value. The teamDefinition property
     * @return Team|null
    */
    public function getTeamDefinition(): ?Team {
        return $this->getBackingStore()->get('teamDefinition');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('audience', $this->getAudience());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('iconUrl', $this->getIconUrl());
        $writer->writeStringValue('languageTag', $this->getLanguageTag());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('parentTemplateId', $this->getParentTemplateId());
        $writer->writeStringValue('publisherName', $this->getPublisherName());
        $writer->writeStringValue('shortDescription', $this->getShortDescription());
        $writer->writeObjectValue('teamDefinition', $this->getTeamDefinition());
    }

    /**
     * Sets the audience property value. The audience property
     *  @param TeamTemplateAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?TeamTemplateAudience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the categories property value. The categories property
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the iconUrl property value. The iconUrl property
     *  @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value): void {
        $this->getBackingStore()->set('iconUrl', $value);
    }

    /**
     * Sets the languageTag property value. The languageTag property
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the parentTemplateId property value. The parentTemplateId property
     *  @param string|null $value Value to set for the parentTemplateId property.
    */
    public function setParentTemplateId(?string $value): void {
        $this->getBackingStore()->set('parentTemplateId', $value);
    }

    /**
     * Sets the publisherName property value. The publisherName property
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the shortDescription property value. The shortDescription property
     *  @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value): void {
        $this->getBackingStore()->set('shortDescription', $value);
    }

    /**
     * Sets the teamDefinition property value. The teamDefinition property
     *  @param Team|null $value Value to set for the teamDefinition property.
    */
    public function setTeamDefinition(?Team $value): void {
        $this->getBackingStore()->set('teamDefinition', $value);
    }

}
