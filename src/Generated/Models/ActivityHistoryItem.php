<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivityHistoryItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new activityHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityHistoryItem {
        return new ActivityHistoryItem();
    }

    /**
     * Gets the activeDurationSeconds property value. The activeDurationSeconds property
     * @return int|null
    */
    public function getActiveDurationSeconds(): ?int {
        $val = $this->getBackingStore()->get('activeDurationSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDurationSeconds'");
    }

    /**
     * Gets the activity property value. The activity property
     * @return UserActivity|null
    */
    public function getActivity(): ?UserActivity {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || $val instanceof UserActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDurationSeconds' => fn(ParseNode $n) => $o->setActiveDurationSeconds($n->getIntegerValue()),
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getObjectValue([UserActivity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastActiveDateTime' => fn(ParseNode $n) => $o->setLastActiveDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ActivityHistoryItem_status::class)),
            'userTimezone' => fn(ParseNode $n) => $o->setUserTimezone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActiveDateTime property value. The lastActiveDateTime property
     * @return DateTime|null
    */
    public function getLastActiveDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActiveDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActiveDateTime'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
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
     * Gets the startedDateTime property value. The startedDateTime property
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startedDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return ActivityHistoryItem_status|null
    */
    public function getStatus(): ?ActivityHistoryItem_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ActivityHistoryItem_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userTimezone property value. The userTimezone property
     * @return string|null
    */
    public function getUserTimezone(): ?string {
        $val = $this->getBackingStore()->get('userTimezone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userTimezone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDurationSeconds', $this->getActiveDurationSeconds());
        $writer->writeObjectValue('activity', $this->getActivity());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('lastActiveDateTime', $this->getLastActiveDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userTimezone', $this->getUserTimezone());
    }

    /**
     * Sets the activeDurationSeconds property value. The activeDurationSeconds property
     * @param int|null $value Value to set for the activeDurationSeconds property.
    */
    public function setActiveDurationSeconds(?int $value): void {
        $this->getBackingStore()->set('activeDurationSeconds', $value);
    }

    /**
     * Sets the activity property value. The activity property
     * @param UserActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?UserActivity $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastActiveDateTime property value. The lastActiveDateTime property
     * @param DateTime|null $value Value to set for the lastActiveDateTime property.
    */
    public function setLastActiveDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActiveDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the startedDateTime property value. The startedDateTime property
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ActivityHistoryItem_status|null $value Value to set for the status property.
    */
    public function setStatus(?ActivityHistoryItem_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userTimezone property value. The userTimezone property
     * @param string|null $value Value to set for the userTimezone property.
    */
    public function setUserTimezone(?string $value): void {
        $this->getBackingStore()->set('userTimezone', $value);
    }

}
