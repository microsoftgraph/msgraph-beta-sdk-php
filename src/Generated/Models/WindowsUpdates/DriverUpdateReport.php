<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DriverUpdateReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new DriverUpdateReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriverUpdateReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriverUpdateReport {
        return new DriverUpdateReport();
    }

    /**
     * Gets the deviceStatuses property value. The latest rollout statuses for devices associated with the driver update.
     * @return array<DriverUpdateDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        $val = $this->getBackingStore()->get('deviceStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriverUpdateDeviceStatus::class);
            /** @var array<DriverUpdateDeviceStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatuses'");
    }

    /**
     * Gets the displayName property value. The display name of the driver update. Read-only.
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
     * Gets the class property value. The device class targeted by the driver update. Read-only.
     * @return string|null
    */
    public function getEscapedClass(): ?string {
        $val = $this->getBackingStore()->get('escapedClass');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedClass'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([DriverUpdateDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'class' => fn(ParseNode $n) => $o->setEscapedClass($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the driver update. Read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the releaseDateTime property value. The date and time when the driver update was released. Read-only.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('releaseDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseDateTime'");
    }

    /**
     * Gets the version property value. The driver version. Read-only.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
    }

    /**
     * Sets the deviceStatuses property value. The latest rollout statuses for devices associated with the driver update.
     * @param array<DriverUpdateDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the displayName property value. The display name of the driver update. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the class property value. The device class targeted by the driver update. Read-only.
     * @param string|null $value Value to set for the class property.
    */
    public function setEscapedClass(?string $value): void {
        $this->getBackingStore()->set('escapedClass', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the driver update. Read-only.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the releaseDateTime property value. The date and time when the driver update was released. Read-only.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the version property value. The driver version. Read-only.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
