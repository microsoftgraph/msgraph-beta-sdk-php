<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserPasswordResetsAndChangesSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserPasswordResetsAndChangesSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserPasswordResetsAndChangesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserPasswordResetsAndChangesSummary {
        return new UserPasswordResetsAndChangesSummary();
    }

    /**
     * Gets the aggregatedDateTime property value. The aggregated day for which the summary applies to. This property will always represent the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAggregatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('aggregatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregatedDateTime'");
    }

    /**
     * Gets the changePasswordSelfServiceCount property value. The number of self-service password changes that occurred during this window.
     * @return int|null
    */
    public function getChangePasswordSelfServiceCount(): ?int {
        $val = $this->getBackingStore()->get('changePasswordSelfServiceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changePasswordSelfServiceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregatedDateTime' => fn(ParseNode $n) => $o->setAggregatedDateTime($n->getDateTimeValue()),
            'changePasswordSelfServiceCount' => fn(ParseNode $n) => $o->setChangePasswordSelfServiceCount($n->getIntegerValue()),
            'passwordResetsByAdminCount' => fn(ParseNode $n) => $o->setPasswordResetsByAdminCount($n->getIntegerValue()),
            'passwordResetsSelfServiceCount' => fn(ParseNode $n) => $o->setPasswordResetsSelfServiceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the passwordResetsByAdminCount property value. The number of admin-triggered password resets that occurred during this window.
     * @return int|null
    */
    public function getPasswordResetsByAdminCount(): ?int {
        $val = $this->getBackingStore()->get('passwordResetsByAdminCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordResetsByAdminCount'");
    }

    /**
     * Gets the passwordResetsSelfServiceCount property value. The number of self-service password resets that occurred during this window.
     * @return int|null
    */
    public function getPasswordResetsSelfServiceCount(): ?int {
        $val = $this->getBackingStore()->get('passwordResetsSelfServiceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordResetsSelfServiceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('aggregatedDateTime', $this->getAggregatedDateTime());
        $writer->writeIntegerValue('changePasswordSelfServiceCount', $this->getChangePasswordSelfServiceCount());
        $writer->writeIntegerValue('passwordResetsByAdminCount', $this->getPasswordResetsByAdminCount());
        $writer->writeIntegerValue('passwordResetsSelfServiceCount', $this->getPasswordResetsSelfServiceCount());
    }

    /**
     * Sets the aggregatedDateTime property value. The aggregated day for which the summary applies to. This property will always represent the entire day. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the aggregatedDateTime property.
    */
    public function setAggregatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('aggregatedDateTime', $value);
    }

    /**
     * Sets the changePasswordSelfServiceCount property value. The number of self-service password changes that occurred during this window.
     * @param int|null $value Value to set for the changePasswordSelfServiceCount property.
    */
    public function setChangePasswordSelfServiceCount(?int $value): void {
        $this->getBackingStore()->set('changePasswordSelfServiceCount', $value);
    }

    /**
     * Sets the passwordResetsByAdminCount property value. The number of admin-triggered password resets that occurred during this window.
     * @param int|null $value Value to set for the passwordResetsByAdminCount property.
    */
    public function setPasswordResetsByAdminCount(?int $value): void {
        $this->getBackingStore()->set('passwordResetsByAdminCount', $value);
    }

    /**
     * Sets the passwordResetsSelfServiceCount property value. The number of self-service password resets that occurred during this window.
     * @param int|null $value Value to set for the passwordResetsSelfServiceCount property.
    */
    public function setPasswordResetsSelfServiceCount(?int $value): void {
        $this->getBackingStore()->set('passwordResetsSelfServiceCount', $value);
    }

}
