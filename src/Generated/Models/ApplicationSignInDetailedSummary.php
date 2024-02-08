<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicationSignInDetailedSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicationSignInDetailedSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationSignInDetailedSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationSignInDetailedSummary {
        return new ApplicationSignInDetailedSummary();
    }

    /**
     * Gets the aggregatedEventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAggregatedEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('aggregatedEventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregatedEventDateTime'");
    }

    /**
     * Gets the appDisplayName property value. Name of the application that the user signed in to.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. ID of the application that the user signed in to.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregatedEventDateTime' => fn(ParseNode $n) => $o->setAggregatedEventDateTime($n->getDateTimeValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'signInCount' => fn(ParseNode $n) => $o->setSignInCount($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SignInStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the signInCount property value. Count of sign-ins made by the application.
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
     * Gets the status property value. Details of the sign-in status.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SignInStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('aggregatedEventDateTime', $this->getAggregatedEventDateTime());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeIntegerValue('signInCount', $this->getSignInCount());
        $writer->writeObjectValue('status', $this->getStatus());
    }

    /**
     * Sets the aggregatedEventDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the aggregatedEventDateTime property.
    */
    public function setAggregatedEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('aggregatedEventDateTime', $value);
    }

    /**
     * Sets the appDisplayName property value. Name of the application that the user signed in to.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. ID of the application that the user signed in to.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the signInCount property value. Count of sign-ins made by the application.
     * @param int|null $value Value to set for the signInCount property.
    */
    public function setSignInCount(?int $value): void {
        $this->getBackingStore()->set('signInCount', $value);
    }

    /**
     * Sets the status property value. Details of the sign-in status.
     * @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
