<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionEvent extends Entity implements Parsable 
{
    /**
     * @var IdentitySet|null $createdBy The user who created the retentionEvent.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The date time when the retentionEvent was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Optional information about the event.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the event.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<EventPropagationResult>|null $eventPropagationResults The eventPropagationResults property
    */
    private ?array $eventPropagationResults = null;
    
    /**
     * @var array<EventQuery>|null $eventQueries Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
    */
    private ?array $eventQueries = null;
    
    /**
     * @var RetentionEventStatus|null $eventStatus The eventStatus property
    */
    private ?RetentionEventStatus $eventStatus = null;
    
    /**
     * @var DateTime|null $eventTriggerDateTime Optional time when the event should be triggered.
    */
    private ?DateTime $eventTriggerDateTime = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy The user who last modified the retentionEvent.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The latest date time when the retentionEvent was modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $lastStatusUpdateDateTime Last time the status of the event was updated.
    */
    private ?DateTime $lastStatusUpdateDateTime = null;
    
    /**
     * @var RetentionEventType|null $retentionEventType Specifies the event that will start the retention period for labels that use this event type when an event is created.
    */
    private ?RetentionEventType $retentionEventType = null;
    
    /**
     * Instantiates a new retentionEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionEvent {
        return new RetentionEvent();
    }

    /**
     * Gets the createdBy property value. The user who created the retentionEvent.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date time when the retentionEvent was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Optional information about the event.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the event.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the eventPropagationResults property value. The eventPropagationResults property
     * @return array<EventPropagationResult>|null
    */
    public function getEventPropagationResults(): ?array {
        return $this->eventPropagationResults;
    }

    /**
     * Gets the eventQueries property value. Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     * @return array<EventQuery>|null
    */
    public function getEventQueries(): ?array {
        return $this->eventQueries;
    }

    /**
     * Gets the eventStatus property value. The eventStatus property
     * @return RetentionEventStatus|null
    */
    public function getEventStatus(): ?RetentionEventStatus {
        return $this->eventStatus;
    }

    /**
     * Gets the eventTriggerDateTime property value. Optional time when the event should be triggered.
     * @return DateTime|null
    */
    public function getEventTriggerDateTime(): ?DateTime {
        return $this->eventTriggerDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'eventPropagationResults' => function (ParseNode $n) use ($o) { $o->setEventPropagationResults($n->getCollectionOfObjectValues(array(EventPropagationResult::class, 'createFromDiscriminatorValue'))); },
            'eventQueries' => function (ParseNode $n) use ($o) { $o->setEventQueries($n->getCollectionOfObjectValues(array(EventQuery::class, 'createFromDiscriminatorValue'))); },
            'eventStatus' => function (ParseNode $n) use ($o) { $o->setEventStatus($n->getObjectValue(array(RetentionEventStatus::class, 'createFromDiscriminatorValue'))); },
            'eventTriggerDateTime' => function (ParseNode $n) use ($o) { $o->setEventTriggerDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lastStatusUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastStatusUpdateDateTime($n->getDateTimeValue()); },
            'retentionEventType' => function (ParseNode $n) use ($o) { $o->setRetentionEventType($n->getObjectValue(array(RetentionEventType::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the retentionEvent.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The latest date time when the retentionEvent was modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastStatusUpdateDateTime property value. Last time the status of the event was updated.
     * @return DateTime|null
    */
    public function getLastStatusUpdateDateTime(): ?DateTime {
        return $this->lastStatusUpdateDateTime;
    }

    /**
     * Gets the retentionEventType property value. Specifies the event that will start the retention period for labels that use this event type when an event is created.
     * @return RetentionEventType|null
    */
    public function getRetentionEventType(): ?RetentionEventType {
        return $this->retentionEventType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('eventPropagationResults', $this->eventPropagationResults);
        $writer->writeCollectionOfObjectValues('eventQueries', $this->eventQueries);
        $writer->writeObjectValue('eventStatus', $this->eventStatus);
        $writer->writeDateTimeValue('eventTriggerDateTime', $this->eventTriggerDateTime);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('lastStatusUpdateDateTime', $this->lastStatusUpdateDateTime);
        $writer->writeObjectValue('retentionEventType', $this->retentionEventType);
    }

    /**
     * Sets the createdBy property value. The user who created the retentionEvent.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date time when the retentionEvent was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Optional information about the event.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the event.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the eventPropagationResults property value. The eventPropagationResults property
     *  @param array<EventPropagationResult>|null $value Value to set for the eventPropagationResults property.
    */
    public function setEventPropagationResults(?array $value ): void {
        $this->eventPropagationResults = $value;
    }

    /**
     * Sets the eventQueries property value. Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     *  @param array<EventQuery>|null $value Value to set for the eventQueries property.
    */
    public function setEventQueries(?array $value ): void {
        $this->eventQueries = $value;
    }

    /**
     * Sets the eventStatus property value. The eventStatus property
     *  @param RetentionEventStatus|null $value Value to set for the eventStatus property.
    */
    public function setEventStatus(?RetentionEventStatus $value ): void {
        $this->eventStatus = $value;
    }

    /**
     * Sets the eventTriggerDateTime property value. Optional time when the event should be triggered.
     *  @param DateTime|null $value Value to set for the eventTriggerDateTime property.
    */
    public function setEventTriggerDateTime(?DateTime $value ): void {
        $this->eventTriggerDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the retentionEvent.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The latest date time when the retentionEvent was modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastStatusUpdateDateTime property value. Last time the status of the event was updated.
     *  @param DateTime|null $value Value to set for the lastStatusUpdateDateTime property.
    */
    public function setLastStatusUpdateDateTime(?DateTime $value ): void {
        $this->lastStatusUpdateDateTime = $value;
    }

    /**
     * Sets the retentionEventType property value. Specifies the event that will start the retention period for labels that use this event type when an event is created.
     *  @param RetentionEventType|null $value Value to set for the retentionEventType property.
    */
    public function setRetentionEventType(?RetentionEventType $value ): void {
        $this->retentionEventType = $value;
    }

}
