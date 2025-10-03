<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegationSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new DelegationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegationSettings {
        return new DelegationSettings();
    }

    /**
     * Gets the allowedActions property value. The allowed actions for the delegator or delegate.
     * @return DelegateAllowedActions|null
    */
    public function getAllowedActions(): ?DelegateAllowedActions {
        $val = $this->getBackingStore()->get('allowedActions');
        if (is_null($val) || $val instanceof DelegateAllowedActions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedActions'");
    }

    /**
     * Gets the createdDateTime property value. Date and time when the delegator or delegate entry was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
            'allowedActions' => fn(ParseNode $n) => $o->setAllowedActions($n->getObjectValue([DelegateAllowedActions::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether the delegator or delegate relationship is currently active.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('allowedActions', $this->getAllowedActions());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
    }

    /**
     * Sets the allowedActions property value. The allowed actions for the delegator or delegate.
     * @param DelegateAllowedActions|null $value Value to set for the allowedActions property.
    */
    public function setAllowedActions(?DelegateAllowedActions $value): void {
        $this->getBackingStore()->set('allowedActions', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time when the delegator or delegate entry was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether the delegator or delegate relationship is currently active.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

}
