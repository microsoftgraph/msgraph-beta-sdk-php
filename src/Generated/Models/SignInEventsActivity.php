<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInEventsActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new SignInEventsActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInEventsActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInEventsActivity {
        return new SignInEventsActivity();
    }

    /**
     * Gets the activityDateTime property value. The aggregated day for which the summary applies to. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (gt, lt).
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'signInCount' => fn(ParseNode $n) => $o->setSignInCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the signInCount property value. The number of sign-in events that occurred for this day. Supports $filter (gt, lt, eq).
     * @return int|null
    */
    public function getSignInCount(): ?int {
        $val = $this->getBackingStore()->get('signInCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeIntegerValue('signInCount', $this->getSignInCount());
    }

    /**
     * Sets the activityDateTime property value. The aggregated day for which the summary applies to. This property always represents the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (gt, lt).
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the signInCount property value. The number of sign-in events that occurred for this day. Supports $filter (gt, lt, eq).
     * @param int|null $value Value to set for the signInCount property.
    */
    public function setSignInCount(?int $value): void {
        $this->getBackingStore()->set('signInCount', $value);
    }

}
