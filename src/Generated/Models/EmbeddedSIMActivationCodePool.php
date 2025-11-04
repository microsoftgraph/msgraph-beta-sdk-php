<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A pool represents a group of embedded SIM activation codes.
*/
class EmbeddedSIMActivationCodePool extends Entity implements Parsable 
{
    /**
     * Instantiates a new EmbeddedSIMActivationCodePool and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMActivationCodePool
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMActivationCodePool {
        return new EmbeddedSIMActivationCodePool();
    }

    /**
     * Gets the activationCodeCount property value. The total count of activation codes which belong to this pool.
     * @return int|null
    */
    public function getActivationCodeCount(): ?int {
        $val = $this->getBackingStore()->get('activationCodeCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationCodeCount'");
    }

    /**
     * Gets the activationCodes property value. The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     * @return array<EmbeddedSIMActivationCode>|null
    */
    public function getActivationCodes(): ?array {
        $val = $this->getBackingStore()->get('activationCodes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmbeddedSIMActivationCode::class);
            /** @var array<EmbeddedSIMActivationCode>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationCodes'");
    }

    /**
     * Gets the assignments property value. Navigational property to a list of targets to which this pool is assigned.
     * @return array<EmbeddedSIMActivationCodePoolAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmbeddedSIMActivationCodePoolAssignment::class);
            /** @var array<EmbeddedSIMActivationCodePoolAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. The time the embedded SIM activation code pool was created. Generated service side.
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
     * Gets the deviceStates property value. Navigational property to a list of device states for this pool.
     * @return array<EmbeddedSIMDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        $val = $this->getBackingStore()->get('deviceStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmbeddedSIMDeviceState::class);
            /** @var array<EmbeddedSIMDeviceState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStates'");
    }

    /**
     * Gets the displayName property value. The admin defined name of the embedded SIM activation code pool.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationCodeCount' => fn(ParseNode $n) => $o->setActivationCodeCount($n->getIntegerValue()),
            'activationCodes' => fn(ParseNode $n) => $o->setActivationCodes($n->getCollectionOfObjectValues([EmbeddedSIMActivationCode::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([EmbeddedSIMActivationCodePoolAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([EmbeddedSIMDeviceState::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The time the embedded SIM activation code pool was last modified. Updated service side.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activationCodeCount', $this->getActivationCodeCount());
        $writer->writeCollectionOfObjectValues('activationCodes', $this->getActivationCodes());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('deviceStates', $this->getDeviceStates());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
    }

    /**
     * Sets the activationCodeCount property value. The total count of activation codes which belong to this pool.
     * @param int|null $value Value to set for the activationCodeCount property.
    */
    public function setActivationCodeCount(?int $value): void {
        $this->getBackingStore()->set('activationCodeCount', $value);
    }

    /**
     * Sets the activationCodes property value. The activation codes which belong to this pool. This navigation property is used to post activation codes to Intune but cannot be used to read activation codes from Intune.
     * @param array<EmbeddedSIMActivationCode>|null $value Value to set for the activationCodes property.
    */
    public function setActivationCodes(?array $value): void {
        $this->getBackingStore()->set('activationCodes', $value);
    }

    /**
     * Sets the assignments property value. Navigational property to a list of targets to which this pool is assigned.
     * @param array<EmbeddedSIMActivationCodePoolAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The time the embedded SIM activation code pool was created. Generated service side.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceStates property value. Navigational property to a list of device states for this pool.
     * @param array<EmbeddedSIMDeviceState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value): void {
        $this->getBackingStore()->set('deviceStates', $value);
    }

    /**
     * Sets the displayName property value. The admin defined name of the embedded SIM activation code pool.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The time the embedded SIM activation code pool was last modified. Updated service side.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

}
