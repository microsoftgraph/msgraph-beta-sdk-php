<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Edition extends Entity implements Parsable 
{
    /**
     * Instantiates a new Edition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Edition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Edition {
        return new Edition();
    }

    /**
     * Gets the deviceFamily property value. The device family targeted by the edition.
     * @return string|null
    */
    public function getDeviceFamily(): ?string {
        $val = $this->getBackingStore()->get('deviceFamily');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceFamily'");
    }

    /**
     * Gets the endOfServiceDateTime property value. The date and time when the edition reached the end of service. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getEndOfServiceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endOfServiceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endOfServiceDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceFamily' => fn(ParseNode $n) => $o->setDeviceFamily($n->getStringValue()),
            'endOfServiceDateTime' => fn(ParseNode $n) => $o->setEndOfServiceDateTime($n->getDateTimeValue()),
            'generalAvailabilityDateTime' => fn(ParseNode $n) => $o->setGeneralAvailabilityDateTime($n->getDateTimeValue()),
            'isInService' => fn(ParseNode $n) => $o->setIsInService($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'releasedName' => fn(ParseNode $n) => $o->setReleasedName($n->getStringValue()),
            'servicingPeriods' => fn(ParseNode $n) => $o->setServicingPeriods($n->getCollectionOfObjectValues([ServicingPeriod::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the generalAvailabilityDateTime property value. The date and time when the edition became available to the general customers for the first time. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getGeneralAvailabilityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('generalAvailabilityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'generalAvailabilityDateTime'");
    }

    /**
     * Gets the isInService property value. Indicates whether the edition is in service or out of service.
     * @return bool|null
    */
    public function getIsInService(): ?bool {
        $val = $this->getBackingStore()->get('isInService');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInService'");
    }

    /**
     * Gets the name property value. The name of the edition. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the releasedName property value. The public name of the edition. Read-only.
     * @return string|null
    */
    public function getReleasedName(): ?string {
        $val = $this->getBackingStore()->get('releasedName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releasedName'");
    }

    /**
     * Gets the servicingPeriods property value. The servicingPeriods property
     * @return array<ServicingPeriod>|null
    */
    public function getServicingPeriods(): ?array {
        $val = $this->getBackingStore()->get('servicingPeriods');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServicingPeriod::class);
            /** @var array<ServicingPeriod>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicingPeriods'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceFamily', $this->getDeviceFamily());
        $writer->writeDateTimeValue('endOfServiceDateTime', $this->getEndOfServiceDateTime());
        $writer->writeDateTimeValue('generalAvailabilityDateTime', $this->getGeneralAvailabilityDateTime());
        $writer->writeBooleanValue('isInService', $this->getIsInService());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('releasedName', $this->getReleasedName());
        $writer->writeCollectionOfObjectValues('servicingPeriods', $this->getServicingPeriods());
    }

    /**
     * Sets the deviceFamily property value. The device family targeted by the edition.
     * @param string|null $value Value to set for the deviceFamily property.
    */
    public function setDeviceFamily(?string $value): void {
        $this->getBackingStore()->set('deviceFamily', $value);
    }

    /**
     * Sets the endOfServiceDateTime property value. The date and time when the edition reached the end of service. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the endOfServiceDateTime property.
    */
    public function setEndOfServiceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endOfServiceDateTime', $value);
    }

    /**
     * Sets the generalAvailabilityDateTime property value. The date and time when the edition became available to the general customers for the first time. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the generalAvailabilityDateTime property.
    */
    public function setGeneralAvailabilityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('generalAvailabilityDateTime', $value);
    }

    /**
     * Sets the isInService property value. Indicates whether the edition is in service or out of service.
     * @param bool|null $value Value to set for the isInService property.
    */
    public function setIsInService(?bool $value): void {
        $this->getBackingStore()->set('isInService', $value);
    }

    /**
     * Sets the name property value. The name of the edition. Read-only.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the releasedName property value. The public name of the edition. Read-only.
     * @param string|null $value Value to set for the releasedName property.
    */
    public function setReleasedName(?string $value): void {
        $this->getBackingStore()->set('releasedName', $value);
    }

    /**
     * Sets the servicingPeriods property value. The servicingPeriods property
     * @param array<ServicingPeriod>|null $value Value to set for the servicingPeriods property.
    */
    public function setServicingPeriods(?array $value): void {
        $this->getBackingStore()->set('servicingPeriods', $value);
    }

}
