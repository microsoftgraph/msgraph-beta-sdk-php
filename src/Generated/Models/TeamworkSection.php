<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamworkSection extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamworkSection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSection {
        return new TeamworkSection();
    }

    /**
     * Gets the createdDateTime property value. Date and time when the section was created. Read-only. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
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
     * Gets the displayIcon property value. The icon displayed for the section.
     * @return SectionDisplayIcon|null
    */
    public function getDisplayIcon(): ?SectionDisplayIcon {
        $val = $this->getBackingStore()->get('displayIcon');
        if (is_null($val) || $val instanceof SectionDisplayIcon) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayIcon'");
    }

    /**
     * Gets the displayName property value. The display name of the section. Required. Maximum length is 50 characters. Display names are case-sensitive and must be unique within a user's sections. The following names are reserved for system-defined sections and can't be used when creating a user-defined section: RecentChats, QuickViews, TeamsAndChannels, MutedChats, MeetingChats, EngageCommunities.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayIcon' => fn(ParseNode $n) => $o->setDisplayIcon($n->getObjectValue([SectionDisplayIcon::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isExpanded' => fn(ParseNode $n) => $o->setIsExpanded($n->getBooleanValue()),
            'isHierarchicalViewEnabled' => fn(ParseNode $n) => $o->setIsHierarchicalViewEnabled($n->getBooleanValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([TeamworkSectionItem::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'sectionType' => fn(ParseNode $n) => $o->setSectionType($n->getEnumValue(SectionType::class)),
            'sortType' => fn(ParseNode $n) => $o->setSortType($n->getEnumValue(SectionSortType::class)),
        ]);
    }

    /**
     * Gets the isExpanded property value. Indicates whether the section is expanded in the user interface. The default value is true.
     * @return bool|null
    */
    public function getIsExpanded(): ?bool {
        $val = $this->getBackingStore()->get('isExpanded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExpanded'");
    }

    /**
     * Gets the isHierarchicalViewEnabled property value. Indicates whether the hierarchical view is enabled for the section. Read-only.
     * @return bool|null
    */
    public function getIsHierarchicalViewEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHierarchicalViewEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHierarchicalViewEnabled'");
    }

    /**
     * Gets the items property value. The items (chats, channels, meetings, or communities) organized within the section.
     * @return array<TeamworkSectionItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamworkSectionItem::class);
            /** @var array<TeamworkSectionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time when the section was last modified. Read-only. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
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
     * Gets the sectionType property value. The type of the section. The possible values are: userDefined, systemDefined, unknownFutureValue. Read-only.
     * @return SectionType|null
    */
    public function getSectionType(): ?SectionType {
        $val = $this->getBackingStore()->get('sectionType');
        if (is_null($val) || $val instanceof SectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sectionType'");
    }

    /**
     * Gets the sortType property value. The sort order of items in the section. The valid values depend on the sectionType. The possible values are: mostRecent, unreadThenMostRecent, nameAlphabetical, userDefinedCustomOrder, unknownFutureValue.
     * @return SectionSortType|null
    */
    public function getSortType(): ?SectionSortType {
        $val = $this->getBackingStore()->get('sortType');
        if (is_null($val) || $val instanceof SectionSortType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('displayIcon', $this->getDisplayIcon());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isExpanded', $this->getIsExpanded());
        $writer->writeBooleanValue('isHierarchicalViewEnabled', $this->getIsHierarchicalViewEnabled());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('sectionType', $this->getSectionType());
        $writer->writeEnumValue('sortType', $this->getSortType());
    }

    /**
     * Sets the createdDateTime property value. Date and time when the section was created. Read-only. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayIcon property value. The icon displayed for the section.
     * @param SectionDisplayIcon|null $value Value to set for the displayIcon property.
    */
    public function setDisplayIcon(?SectionDisplayIcon $value): void {
        $this->getBackingStore()->set('displayIcon', $value);
    }

    /**
     * Sets the displayName property value. The display name of the section. Required. Maximum length is 50 characters. Display names are case-sensitive and must be unique within a user's sections. The following names are reserved for system-defined sections and can't be used when creating a user-defined section: RecentChats, QuickViews, TeamsAndChannels, MutedChats, MeetingChats, EngageCommunities.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isExpanded property value. Indicates whether the section is expanded in the user interface. The default value is true.
     * @param bool|null $value Value to set for the isExpanded property.
    */
    public function setIsExpanded(?bool $value): void {
        $this->getBackingStore()->set('isExpanded', $value);
    }

    /**
     * Sets the isHierarchicalViewEnabled property value. Indicates whether the hierarchical view is enabled for the section. Read-only.
     * @param bool|null $value Value to set for the isHierarchicalViewEnabled property.
    */
    public function setIsHierarchicalViewEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHierarchicalViewEnabled', $value);
    }

    /**
     * Sets the items property value. The items (chats, channels, meetings, or communities) organized within the section.
     * @param array<TeamworkSectionItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time when the section was last modified. Read-only. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the sectionType property value. The type of the section. The possible values are: userDefined, systemDefined, unknownFutureValue. Read-only.
     * @param SectionType|null $value Value to set for the sectionType property.
    */
    public function setSectionType(?SectionType $value): void {
        $this->getBackingStore()->set('sectionType', $value);
    }

    /**
     * Sets the sortType property value. The sort order of items in the section. The valid values depend on the sectionType. The possible values are: mostRecent, unreadThenMostRecent, nameAlphabetical, userDefinedCustomOrder, unknownFutureValue.
     * @param SectionSortType|null $value Value to set for the sortType property.
    */
    public function setSortType(?SectionSortType $value): void {
        $this->getBackingStore()->set('sortType', $value);
    }

}
