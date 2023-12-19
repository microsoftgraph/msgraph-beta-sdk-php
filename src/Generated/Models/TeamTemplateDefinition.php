<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the audience property value. Describes the audience the team template is available to. The possible values are: organization, user, public, unknownFutureValue.
     * @return TeamTemplateDefinition_audience|null
    */
    public function getAudience(): ?TeamTemplateDefinition_audience {
        $val = $this->getBackingStore()->get('audience');
        if (is_null($val) || $val instanceof TeamTemplateDefinition_audience) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audience'");
    }

    /**
     * Gets the categories property value. The assigned categories for the team template.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the description property value. A brief description of the team template as it will appear to the users in Microsoft Teams.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The user defined name of the team template.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getEnumValue(TeamTemplateDefinition_audience::class)),
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
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
     * Gets the iconUrl property value. The icon url for the team template.
     * @return string|null
    */
    public function getIconUrl(): ?string {
        $val = $this->getBackingStore()->get('iconUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconUrl'");
    }

    /**
     * Gets the languageTag property value. Language the template is available in.
     * @return string|null
    */
    public function getLanguageTag(): ?string {
        $val = $this->getBackingStore()->get('languageTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'languageTag'");
    }

    /**
     * Gets the lastModifiedBy property value. The identity of the user who last modified the team template.
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
     * Gets the lastModifiedDateTime property value. The date time of when the team template was last modified.
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
     * Gets the parentTemplateId property value. The templateId for the team template
     * @return string|null
    */
    public function getParentTemplateId(): ?string {
        $val = $this->getBackingStore()->get('parentTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentTemplateId'");
    }

    /**
     * Gets the publisherName property value. The organization which published the team template.
     * @return string|null
    */
    public function getPublisherName(): ?string {
        $val = $this->getBackingStore()->get('publisherName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherName'");
    }

    /**
     * Gets the shortDescription property value. A short-description of the team template as it will appear to the users in Microsoft Teams.
     * @return string|null
    */
    public function getShortDescription(): ?string {
        $val = $this->getBackingStore()->get('shortDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortDescription'");
    }

    /**
     * Gets the teamDefinition property value. Collection of channel objects. A channel represents a topic, and therefore a logical isolation of discussion, within a team.
     * @return Team|null
    */
    public function getTeamDefinition(): ?Team {
        $val = $this->getBackingStore()->get('teamDefinition');
        if (is_null($val) || $val instanceof Team) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamDefinition'");
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
     * Sets the audience property value. Describes the audience the team template is available to. The possible values are: organization, user, public, unknownFutureValue.
     * @param TeamTemplateDefinition_audience|null $value Value to set for the audience property.
    */
    public function setAudience(?TeamTemplateDefinition_audience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the categories property value. The assigned categories for the team template.
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the description property value. A brief description of the team template as it will appear to the users in Microsoft Teams.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The user defined name of the team template.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the iconUrl property value. The icon url for the team template.
     * @param string|null $value Value to set for the iconUrl property.
    */
    public function setIconUrl(?string $value): void {
        $this->getBackingStore()->set('iconUrl', $value);
    }

    /**
     * Sets the languageTag property value. Language the template is available in.
     * @param string|null $value Value to set for the languageTag property.
    */
    public function setLanguageTag(?string $value): void {
        $this->getBackingStore()->set('languageTag', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The identity of the user who last modified the team template.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time of when the team template was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the parentTemplateId property value. The templateId for the team template
     * @param string|null $value Value to set for the parentTemplateId property.
    */
    public function setParentTemplateId(?string $value): void {
        $this->getBackingStore()->set('parentTemplateId', $value);
    }

    /**
     * Sets the publisherName property value. The organization which published the team template.
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

    /**
     * Sets the shortDescription property value. A short-description of the team template as it will appear to the users in Microsoft Teams.
     * @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value): void {
        $this->getBackingStore()->set('shortDescription', $value);
    }

    /**
     * Sets the teamDefinition property value. Collection of channel objects. A channel represents a topic, and therefore a logical isolation of discussion, within a team.
     * @param Team|null $value Value to set for the teamDefinition property.
    */
    public function setTeamDefinition(?Team $value): void {
        $this->getBackingStore()->set('teamDefinition', $value);
    }

}
