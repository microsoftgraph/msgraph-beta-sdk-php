<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CallAiInsight extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallAiInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallAiInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallAiInsight {
        return new CallAiInsight();
    }

    /**
     * Gets the actionItems property value. The collection of AI-generated action items. Read-only.
     * @return array<ActionItem>|null
    */
    public function getActionItems(): ?array {
        $val = $this->getBackingStore()->get('actionItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActionItem::class);
            /** @var array<ActionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionItems'");
    }

    /**
     * Gets the callId property value. The ID for the online meeting call for which the callAiInsight was generated. Read-only.
     * @return string|null
    */
    public function getCallId(): ?string {
        $val = $this->getBackingStore()->get('callId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callId'");
    }

    /**
     * Gets the contentCorrelationId property value. The unique ID that correlates the transcript from which the insights were generated. Read-only.
     * @return string|null
    */
    public function getContentCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('contentCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCorrelationId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the corresponding transcript was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the endDateTime property value. Date and time at which the corresponding transcription ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionItems' => fn(ParseNode $n) => $o->setActionItems($n->getCollectionOfObjectValues([ActionItem::class, 'createFromDiscriminatorValue'])),
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'contentCorrelationId' => fn(ParseNode $n) => $o->setContentCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'meetingNotes' => fn(ParseNode $n) => $o->setMeetingNotes($n->getCollectionOfObjectValues([MeetingNote::class, 'createFromDiscriminatorValue'])),
            'viewpoint' => fn(ParseNode $n) => $o->setViewpoint($n->getObjectValue([CallAiInsightViewPoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the meetingNotes property value. The collection of AI-generated meeting notes. Read-only.
     * @return array<MeetingNote>|null
    */
    public function getMeetingNotes(): ?array {
        $val = $this->getBackingStore()->get('meetingNotes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingNote::class);
            /** @var array<MeetingNote>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingNotes'");
    }

    /**
     * Gets the viewpoint property value. The caller-specific properties of the callAiInsight entity. Read-only.
     * @return CallAiInsightViewPoint|null
    */
    public function getViewpoint(): ?CallAiInsightViewPoint {
        $val = $this->getBackingStore()->get('viewpoint');
        if (is_null($val) || $val instanceof CallAiInsightViewPoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewpoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actionItems', $this->getActionItems());
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeStringValue('contentCorrelationId', $this->getContentCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('meetingNotes', $this->getMeetingNotes());
        $writer->writeObjectValue('viewpoint', $this->getViewpoint());
    }

    /**
     * Sets the actionItems property value. The collection of AI-generated action items. Read-only.
     * @param array<ActionItem>|null $value Value to set for the actionItems property.
    */
    public function setActionItems(?array $value): void {
        $this->getBackingStore()->set('actionItems', $value);
    }

    /**
     * Sets the callId property value. The ID for the online meeting call for which the callAiInsight was generated. Read-only.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the contentCorrelationId property value. The unique ID that correlates the transcript from which the insights were generated. Read-only.
     * @param string|null $value Value to set for the contentCorrelationId property.
    */
    public function setContentCorrelationId(?string $value): void {
        $this->getBackingStore()->set('contentCorrelationId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the corresponding transcript was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the endDateTime property value. Date and time at which the corresponding transcription ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the meetingNotes property value. The collection of AI-generated meeting notes. Read-only.
     * @param array<MeetingNote>|null $value Value to set for the meetingNotes property.
    */
    public function setMeetingNotes(?array $value): void {
        $this->getBackingStore()->set('meetingNotes', $value);
    }

    /**
     * Sets the viewpoint property value. The caller-specific properties of the callAiInsight entity. Read-only.
     * @param CallAiInsightViewPoint|null $value Value to set for the viewpoint property.
    */
    public function setViewpoint(?CallAiInsightViewPoint $value): void {
        $this->getBackingStore()->set('viewpoint', $value);
    }

}
