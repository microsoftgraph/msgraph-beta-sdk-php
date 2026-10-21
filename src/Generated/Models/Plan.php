<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Plan extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new Plan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Plan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Plan {
        return new Plan();
    }

    /**
     * Gets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the buckets property value. The collection of buckets in the plan. Read-only. Nullable.
     * @return array<Bucket>|null
    */
    public function getBuckets(): ?array {
        $val = $this->getBackingStore()->get('buckets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Bucket::class);
            /** @var array<Bucket>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buckets'");
    }

    /**
     * Gets the calendar property value. Working-time calendar settings for the plan.
     * @return PlanCalendar|null
    */
    public function getCalendar(): ?PlanCalendar {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || $val instanceof PlanCalendar) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return PlanCapability|null
    */
    public function getCapabilities(): ?PlanCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof PlanCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the container property value. Identifies the group, Teams channel, or user that owns the plan. Required, and immutable after creation.
     * @return PlanContainer|null
    */
    public function getContainer(): ?PlanContainer {
        $val = $this->getBackingStore()->get('container');
        if (is_null($val) || $val instanceof PlanContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'container'");
    }

    /**
     * Gets the contentSensitivityLabelAssignment property value. The sensitivity label assigned to content associated with the plan.
     * @return ContentSensitivityLabelAssignment|null
    */
    public function getContentSensitivityLabelAssignment(): ?ContentSensitivityLabelAssignment {
        $val = $this->getBackingStore()->get('contentSensitivityLabelAssignment');
        if (is_null($val) || $val instanceof ContentSensitivityLabelAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentSensitivityLabelAssignment'");
    }

    /**
     * Gets the contexts property value. The collection of context links describing where the plan is surfaced. Read-only. Nullable.
     * @return array<PlanContextLink>|null
    */
    public function getContexts(): ?array {
        $val = $this->getBackingStore()->get('contexts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlanContextLink::class);
            /** @var array<PlanContextLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contexts'");
    }

    /**
     * Gets the creationInfo property value. Read-only creation metadata for the entity.
     * @return CreationInfo|null
    */
    public function getCreationInfo(): ?CreationInfo {
        $val = $this->getBackingStore()->get('creationInfo');
        if (is_null($val) || $val instanceof CreationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationInfo'");
    }

    /**
     * Gets the customFieldDefinitions property value. The collection of custom field definitions in the plan. Read-only. Nullable.
     * @return array<CustomFieldDefinition>|null
    */
    public function getCustomFieldDefinitions(): ?array {
        $val = $this->getBackingStore()->get('customFieldDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomFieldDefinition::class);
            /** @var array<CustomFieldDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFieldDefinitions'");
    }

    /**
     * Gets the dependencies property value. The collection of dependencies between items in the plan. Read-only. Nullable.
     * @return array<Dependency>|null
    */
    public function getDependencies(): ?array {
        $val = $this->getBackingStore()->get('dependencies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Dependency::class);
            /** @var array<Dependency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependencies'");
    }

    /**
     * Gets the displayName property value. Title of the plan.
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
     * Gets the duration property value. Duration of the plan, in days.
     * @return int|null
    */
    public function getDuration(): ?int {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @return ExtensionFieldCollection|null
    */
    public function getExtensions(): ?ExtensionFieldCollection {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof ExtensionFieldCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([Bucket::class, 'createFromDiscriminatorValue'])),
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getObjectValue([PlanCalendar::class, 'createFromDiscriminatorValue'])),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([PlanCapability::class, 'createFromDiscriminatorValue'])),
            'container' => fn(ParseNode $n) => $o->setContainer($n->getObjectValue([PlanContainer::class, 'createFromDiscriminatorValue'])),
            'contentSensitivityLabelAssignment' => fn(ParseNode $n) => $o->setContentSensitivityLabelAssignment($n->getObjectValue([ContentSensitivityLabelAssignment::class, 'createFromDiscriminatorValue'])),
            'contexts' => fn(ParseNode $n) => $o->setContexts($n->getCollectionOfObjectValues([PlanContextLink::class, 'createFromDiscriminatorValue'])),
            'creationInfo' => fn(ParseNode $n) => $o->setCreationInfo($n->getObjectValue([CreationInfo::class, 'createFromDiscriminatorValue'])),
            'customFieldDefinitions' => fn(ParseNode $n) => $o->setCustomFieldDefinitions($n->getCollectionOfObjectValues([CustomFieldDefinition::class, 'createFromDiscriminatorValue'])),
            'dependencies' => fn(ParseNode $n) => $o->setDependencies($n->getCollectionOfObjectValues([Dependency::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
            'goals' => fn(ParseNode $n) => $o->setGoals($n->getCollectionOfObjectValues([Goal::class, 'createFromDiscriminatorValue'])),
            'hasChat' => fn(ParseNode $n) => $o->setHasChat($n->getBooleanValue()),
            'historyItems' => fn(ParseNode $n) => $o->setHistoryItems($n->getCollectionOfObjectValues([HistoryItem::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'links' => fn(ParseNode $n) => $o->setLinks($n->getCollectionOfObjectValues([ContentLink::class, 'createFromDiscriminatorValue'])),
            'planView' => fn(ParseNode $n) => $o->setPlanView($n->getObjectValue([PlanView::class, 'createFromDiscriminatorValue'])),
            'sharedWithContainers' => fn(ParseNode $n) => $o->setSharedWithContainers($n->getCollectionOfObjectValues([PlannerSharedWithContainer::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([Task::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the goals property value. The collection of goals in the plan. Read-only. Nullable.
     * @return array<Goal>|null
    */
    public function getGoals(): ?array {
        $val = $this->getBackingStore()->get('goals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Goal::class);
            /** @var array<Goal>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'goals'");
    }

    /**
     * Gets the hasChat property value. Indicates whether the plan has an associated chat.
     * @return bool|null
    */
    public function getHasChat(): ?bool {
        $val = $this->getBackingStore()->get('hasChat');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasChat'");
    }

    /**
     * Gets the historyItems property value. The collection of history (audit) items for the plan. Read-only. Nullable.
     * @return array<HistoryItem>|null
    */
    public function getHistoryItems(): ?array {
        $val = $this->getBackingStore()->get('historyItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HistoryItem::class);
            /** @var array<HistoryItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'historyItems'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
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
     * Gets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
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
     * Gets the links property value. The collection of content links attached to the plan. Read-only. Nullable.
     * @return array<ContentLink>|null
    */
    public function getLinks(): ?array {
        $val = $this->getBackingStore()->get('links');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentLink::class);
            /** @var array<ContentLink>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'links'");
    }

    /**
     * Gets the planView property value. Plan-scoped view settings, including category definitions.
     * @return PlanView|null
    */
    public function getPlanView(): ?PlanView {
        $val = $this->getBackingStore()->get('planView');
        if (is_null($val) || $val instanceof PlanView) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planView'");
    }

    /**
     * Gets the sharedWithContainers property value. The list of containers (for example, additional groups or channels) that the plan is shared with.
     * @return array<PlannerSharedWithContainer>|null
    */
    public function getSharedWithContainers(): ?array {
        $val = $this->getBackingStore()->get('sharedWithContainers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerSharedWithContainer::class);
            /** @var array<PlannerSharedWithContainer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedWithContainers'");
    }

    /**
     * Gets the tasks property value. The collection of tasks in the plan. Read-only. Nullable.
     * @return array<Task>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Task::class);
            /** @var array<Task>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeCollectionOfObjectValues('buckets', $this->getBuckets());
        $writer->writeObjectValue('calendar', $this->getCalendar());
        $writer->writeObjectValue('container', $this->getContainer());
        $writer->writeObjectValue('contentSensitivityLabelAssignment', $this->getContentSensitivityLabelAssignment());
        $writer->writeCollectionOfObjectValues('contexts', $this->getContexts());
        $writer->writeCollectionOfObjectValues('customFieldDefinitions', $this->getCustomFieldDefinitions());
        $writer->writeCollectionOfObjectValues('dependencies', $this->getDependencies());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeCollectionOfObjectValues('goals', $this->getGoals());
        $writer->writeBooleanValue('hasChat', $this->getHasChat());
        $writer->writeCollectionOfObjectValues('historyItems', $this->getHistoryItems());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('links', $this->getLinks());
        $writer->writeObjectValue('planView', $this->getPlanView());
        $writer->writeCollectionOfObjectValues('sharedWithContainers', $this->getSharedWithContainers());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the buckets property value. The collection of buckets in the plan. Read-only. Nullable.
     * @param array<Bucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the calendar property value. Working-time calendar settings for the plan.
     * @param PlanCalendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?PlanCalendar $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param PlanCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?PlanCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the container property value. Identifies the group, Teams channel, or user that owns the plan. Required, and immutable after creation.
     * @param PlanContainer|null $value Value to set for the container property.
    */
    public function setContainer(?PlanContainer $value): void {
        $this->getBackingStore()->set('container', $value);
    }

    /**
     * Sets the contentSensitivityLabelAssignment property value. The sensitivity label assigned to content associated with the plan.
     * @param ContentSensitivityLabelAssignment|null $value Value to set for the contentSensitivityLabelAssignment property.
    */
    public function setContentSensitivityLabelAssignment(?ContentSensitivityLabelAssignment $value): void {
        $this->getBackingStore()->set('contentSensitivityLabelAssignment', $value);
    }

    /**
     * Sets the contexts property value. The collection of context links describing where the plan is surfaced. Read-only. Nullable.
     * @param array<PlanContextLink>|null $value Value to set for the contexts property.
    */
    public function setContexts(?array $value): void {
        $this->getBackingStore()->set('contexts', $value);
    }

    /**
     * Sets the creationInfo property value. Read-only creation metadata for the entity.
     * @param CreationInfo|null $value Value to set for the creationInfo property.
    */
    public function setCreationInfo(?CreationInfo $value): void {
        $this->getBackingStore()->set('creationInfo', $value);
    }

    /**
     * Sets the customFieldDefinitions property value. The collection of custom field definitions in the plan. Read-only. Nullable.
     * @param array<CustomFieldDefinition>|null $value Value to set for the customFieldDefinitions property.
    */
    public function setCustomFieldDefinitions(?array $value): void {
        $this->getBackingStore()->set('customFieldDefinitions', $value);
    }

    /**
     * Sets the dependencies property value. The collection of dependencies between items in the plan. Read-only. Nullable.
     * @param array<Dependency>|null $value Value to set for the dependencies property.
    */
    public function setDependencies(?array $value): void {
        $this->getBackingStore()->set('dependencies', $value);
    }

    /**
     * Sets the displayName property value. Title of the plan.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the duration property value. Duration of the plan, in days.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @param ExtensionFieldCollection|null $value Value to set for the extensions property.
    */
    public function setExtensions(?ExtensionFieldCollection $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the goals property value. The collection of goals in the plan. Read-only. Nullable.
     * @param array<Goal>|null $value Value to set for the goals property.
    */
    public function setGoals(?array $value): void {
        $this->getBackingStore()->set('goals', $value);
    }

    /**
     * Sets the hasChat property value. Indicates whether the plan has an associated chat.
     * @param bool|null $value Value to set for the hasChat property.
    */
    public function setHasChat(?bool $value): void {
        $this->getBackingStore()->set('hasChat', $value);
    }

    /**
     * Sets the historyItems property value. The collection of history (audit) items for the plan. Read-only. Nullable.
     * @param array<HistoryItem>|null $value Value to set for the historyItems property.
    */
    public function setHistoryItems(?array $value): void {
        $this->getBackingStore()->set('historyItems', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the links property value. The collection of content links attached to the plan. Read-only. Nullable.
     * @param array<ContentLink>|null $value Value to set for the links property.
    */
    public function setLinks(?array $value): void {
        $this->getBackingStore()->set('links', $value);
    }

    /**
     * Sets the planView property value. Plan-scoped view settings, including category definitions.
     * @param PlanView|null $value Value to set for the planView property.
    */
    public function setPlanView(?PlanView $value): void {
        $this->getBackingStore()->set('planView', $value);
    }

    /**
     * Sets the sharedWithContainers property value. The list of containers (for example, additional groups or channels) that the plan is shared with.
     * @param array<PlannerSharedWithContainer>|null $value Value to set for the sharedWithContainers property.
    */
    public function setSharedWithContainers(?array $value): void {
        $this->getBackingStore()->set('sharedWithContainers', $value);
    }

    /**
     * Sets the tasks property value. The collection of tasks in the plan. Read-only. Nullable.
     * @param array<Task>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
