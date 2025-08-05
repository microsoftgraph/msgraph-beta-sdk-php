<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserMfaSignInSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserMfaSignInSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserMfaSignInSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserMfaSignInSummary {
        return new UserMfaSignInSummary();
    }

    /**
     * Gets the createdDateTime property value. The date and time (UTC) for when the summary was aggregated for. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'multiFactorSignIns' => fn(ParseNode $n) => $o->setMultiFactorSignIns($n->getIntegerValue()),
            'singleFactorSignIns' => fn(ParseNode $n) => $o->setSingleFactorSignIns($n->getIntegerValue()),
            'totalSignIns' => fn(ParseNode $n) => $o->setTotalSignIns($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the multiFactorSignIns property value. The total number of MFA sign-ins for the given day.
     * @return int|null
    */
    public function getMultiFactorSignIns(): ?int {
        $val = $this->getBackingStore()->get('multiFactorSignIns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiFactorSignIns'");
    }

    /**
     * Gets the singleFactorSignIns property value. The total number of non-MFA sign ins for the given day.
     * @return int|null
    */
    public function getSingleFactorSignIns(): ?int {
        $val = $this->getBackingStore()->get('singleFactorSignIns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleFactorSignIns'");
    }

    /**
     * Gets the totalSignIns property value. The total number of sign-ins for the given day.
     * @return int|null
    */
    public function getTotalSignIns(): ?int {
        $val = $this->getBackingStore()->get('totalSignIns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalSignIns'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('multiFactorSignIns', $this->getMultiFactorSignIns());
        $writer->writeIntegerValue('singleFactorSignIns', $this->getSingleFactorSignIns());
        $writer->writeIntegerValue('totalSignIns', $this->getTotalSignIns());
    }

    /**
     * Sets the createdDateTime property value. The date and time (UTC) for when the summary was aggregated for. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the multiFactorSignIns property value. The total number of MFA sign-ins for the given day.
     * @param int|null $value Value to set for the multiFactorSignIns property.
    */
    public function setMultiFactorSignIns(?int $value): void {
        $this->getBackingStore()->set('multiFactorSignIns', $value);
    }

    /**
     * Sets the singleFactorSignIns property value. The total number of non-MFA sign ins for the given day.
     * @param int|null $value Value to set for the singleFactorSignIns property.
    */
    public function setSingleFactorSignIns(?int $value): void {
        $this->getBackingStore()->set('singleFactorSignIns', $value);
    }

    /**
     * Sets the totalSignIns property value. The total number of sign-ins for the given day.
     * @param int|null $value Value to set for the totalSignIns property.
    */
    public function setTotalSignIns(?int $value): void {
        $this->getBackingStore()->set('totalSignIns', $value);
    }

}
