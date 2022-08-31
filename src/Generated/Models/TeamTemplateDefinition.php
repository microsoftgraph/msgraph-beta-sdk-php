<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamTemplateDefinition extends Entity implements Parsable 
{
    /**
     * @var TeamTemplateAudience|null $audience The audience property
    */
    private ?TeamTemplateAudience $audience = null;
    
    /**
     * @var array<string>|null $categories The categories property
    */
    private ?array $categories = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $iconUrl The iconUrl property
    */
    private ?string $iconUrl = null;
    
    /**
     * @var string|null $languageTag The languageTag property
    */
    private ?string $languageTag = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The lastModifiedBy property
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $parentTemplateId The parentTemplateId property
    */
    private ?string $parentTemplateId = null;
    
    /**
     * @var string|null $publisherName The publisherName property
    */
    private ?string $publisherName = null;
    
    /**
     * @var string|null $shortDescription The shortDescription property
    */
    private ?string $shortDescription = null;
    
    /**
     * @var Team|null $teamDefinition The teamDefinition property
    */
    private ?Team $teamDefinition = null;
    
    /**
     * Instantiates a new teamTemplateDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamTemplateDefinition');
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
        return $this->audience;
    }

    /**
     * Gets the categories property value. The categories property
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => function (ParseNode $n) use ($o) { $o->setAudience($n->getEnumValue(TeamTemplateAudience::class)); },
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'iconUrl' => function (ParseNode $n) use ($o) { $o->setIconUrl($n->getStringValue()); },
            'languageTag' => function (ParseNode $n) use ($o) { $o->setLanguageTag($n->getStringValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'parentTemplateId' => function (ParseNode $n) use ($o) { $o->setParentTemplateId($n->getStringValue()); },
            'publisherName' => function (ParseNode $n) use ($o) { $o->setPublisherName($n->getStringValue()); },
            'shortDescription' => function (ParseNode $n) use ($o) { $o->setShortDescription($n->getStringValue()); },
            'teamDefinition' => function (ParseNode $n) use ($o) { $o->setTeamDefinition($n->getObjectValue(array(Team::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the iconUrl property value. The iconUrl property
     * @return string|null
    */
    public function getIconUrl(): ?string {
        return $this->iconUrl;
    }

    /**
     * Gets the languageTag property value. The languageTag property
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        return $this->languageTag;
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the parentTemplateId property value. The parentTemplateId property
     * @return string|null
    */
    public function getParentTemplateId(): ?string {
        return $this->parentTemplateId;
    }

    /**
     * Gets the publisherName property value. The publisherName property
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->publisherName;
    }

    /**
     * Gets the shortDescription property value. The shortDescription property
     * @return string|null
    */
    public function getShortDescription(): ?string {
        return $this->shortDescription;
    }

    /**
     * Gets the teamDefinition property value. The teamDefinition property
     * @return Team|null
    */
    public function getTeamDefinition(): ?Team {
        return $this->teamDefinition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('audience', $this->audience);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('iconUrl', $this->iconUrl);
        $writer->writeStringValue('languageTag', $this->languageTag);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('parentTemplateId', $this->parentTemplateId);
        $writer->writeStringValue('publisherName', $this->publisherName);
        $writer->writeStringValue('shortDescription', $this->shortDescription);
        $writer->writeObjectValue('teamDefinition', $this->teamDefinition);
    }

    /**
     * Sets the audience property value. The audience property
     *  @param TeamTemplateAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?TeamTemplateAudience $value ): void {
        $this->audience = $value;
    }

    /**
     * Sets the categories property value. The categories property
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the iconUrl property value. The iconUrl property
     *  @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value ): void {
        $this->iconUrl = $value;
    }

    /**
     * Sets the languageTag property value. The languageTag property
     *  @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value ): void {
        $this->languageTag = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the parentTemplateId property value. The parentTemplateId property
     *  @param string|null $value Value to set for the parentTemplateId property.
    */
    public function setParentTemplateId(?string $value ): void {
        $this->parentTemplateId = $value;
    }

    /**
     * Sets the publisherName property value. The publisherName property
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value ): void {
        $this->publisherName = $value;
    }

    /**
     * Sets the shortDescription property value. The shortDescription property
     *  @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value ): void {
        $this->shortDescription = $value;
    }

    /**
     * Sets the teamDefinition property value. The teamDefinition property
     *  @param Team|null $value Value to set for the teamDefinition property.
    */
    public function setTeamDefinition(?Team $value ): void {
        $this->teamDefinition = $value;
    }

}
