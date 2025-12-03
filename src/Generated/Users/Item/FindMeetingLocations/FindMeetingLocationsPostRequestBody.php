<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\FindMeetingLocations;

use DateInterval;
use Microsoft\Graph\Beta\Generated\Models\AttendeeBase;
use Microsoft\Graph\Beta\Generated\Models\TimeConstraint;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FindMeetingLocationsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FindMeetingLocationsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindMeetingLocationsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindMeetingLocationsPostRequestBody {
        return new FindMeetingLocationsPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the allowFreeOnly property value. The allowFreeOnly property
     * @return bool|null
    */
    public function getAllowFreeOnly(): ?bool {
        $val = $this->getBackingStore()->get('allowFreeOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowFreeOnly'");
    }

    /**
     * Gets the attendees property value. The attendees property
     * @return array<AttendeeBase>|null
    */
    public function getAttendees(): ?array {
        $val = $this->getBackingStore()->get('attendees');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttendeeBase::class);
            /** @var array<AttendeeBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attendees'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowFreeOnly' => fn(ParseNode $n) => $o->setAllowFreeOnly($n->getBooleanValue()),
            'attendees' => fn(ParseNode $n) => $o->setAttendees($n->getCollectionOfObjectValues([AttendeeBase::class, 'createFromDiscriminatorValue'])),
            'maxCandidates' => fn(ParseNode $n) => $o->setMaxCandidates($n->getIntegerValue()),
            'meetingDuration' => fn(ParseNode $n) => $o->setMeetingDuration($n->getDateIntervalValue()),
            'query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
            'timeConstraint' => fn(ParseNode $n) => $o->setTimeConstraint($n->getObjectValue([TimeConstraint::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the maxCandidates property value. The maxCandidates property
     * @return int|null
    */
    public function getMaxCandidates(): ?int {
        $val = $this->getBackingStore()->get('maxCandidates');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxCandidates'");
    }

    /**
     * Gets the meetingDuration property value. The meetingDuration property
     * @return DateInterval|null
    */
    public function getMeetingDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('meetingDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingDuration'");
    }

    /**
     * Gets the query property value. The query property
     * @return string|null
    */
    public function getQuery(): ?string {
        $val = $this->getBackingStore()->get('query');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'query'");
    }

    /**
     * Gets the timeConstraint property value. The timeConstraint property
     * @return TimeConstraint|null
    */
    public function getTimeConstraint(): ?TimeConstraint {
        $val = $this->getBackingStore()->get('timeConstraint');
        if (is_null($val) || $val instanceof TimeConstraint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeConstraint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowFreeOnly', $this->getAllowFreeOnly());
        $writer->writeCollectionOfObjectValues('attendees', $this->getAttendees());
        $writer->writeIntegerValue('maxCandidates', $this->getMaxCandidates());
        $writer->writeDateIntervalValue('meetingDuration', $this->getMeetingDuration());
        $writer->writeStringValue('query', $this->getQuery());
        $writer->writeObjectValue('timeConstraint', $this->getTimeConstraint());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowFreeOnly property value. The allowFreeOnly property
     * @param bool|null $value Value to set for the allowFreeOnly property.
    */
    public function setAllowFreeOnly(?bool $value): void {
        $this->getBackingStore()->set('allowFreeOnly', $value);
    }

    /**
     * Sets the attendees property value. The attendees property
     * @param array<AttendeeBase>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value): void {
        $this->getBackingStore()->set('attendees', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the maxCandidates property value. The maxCandidates property
     * @param int|null $value Value to set for the maxCandidates property.
    */
    public function setMaxCandidates(?int $value): void {
        $this->getBackingStore()->set('maxCandidates', $value);
    }

    /**
     * Sets the meetingDuration property value. The meetingDuration property
     * @param DateInterval|null $value Value to set for the meetingDuration property.
    */
    public function setMeetingDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('meetingDuration', $value);
    }

    /**
     * Sets the query property value. The query property
     * @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the timeConstraint property value. The timeConstraint property
     * @param TimeConstraint|null $value Value to set for the timeConstraint property.
    */
    public function setTimeConstraint(?TimeConstraint $value): void {
        $this->getBackingStore()->set('timeConstraint', $value);
    }

}
