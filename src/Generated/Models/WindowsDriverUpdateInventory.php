<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A new entity to represent driver inventories.
*/
class WindowsDriverUpdateInventory extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsDriverUpdateInventory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDriverUpdateInventory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDriverUpdateInventory {
        return new WindowsDriverUpdateInventory();
    }

    /**
     * Gets the applicableDeviceCount property value. The number of devices for which this driver is applicable.
     * @return int|null
    */
    public function getApplicableDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('applicableDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableDeviceCount'");
    }

    /**
     * Gets the approvalStatus property value. An enum type to represent approval status of a driver.
     * @return DriverApprovalStatus|null
    */
    public function getApprovalStatus(): ?DriverApprovalStatus {
        $val = $this->getBackingStore()->get('approvalStatus');
        if (is_null($val) || $val instanceof DriverApprovalStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalStatus'");
    }

    /**
     * Gets the category property value. An enum type to represent which category a driver belongs to.
     * @return DriverCategory|null
    */
    public function getCategory(): ?DriverCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof DriverCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the deployDateTime property value. The date time when a driver should be deployed if approvalStatus is approved.
     * @return DateTime|null
    */
    public function getDeployDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deployDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployDateTime'");
    }

    /**
     * Gets the driverClass property value. The class of the driver.
     * @return string|null
    */
    public function getDriverClass(): ?string {
        $val = $this->getBackingStore()->get('driverClass');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driverClass'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceCount' => fn(ParseNode $n) => $o->setApplicableDeviceCount($n->getIntegerValue()),
            'approvalStatus' => fn(ParseNode $n) => $o->setApprovalStatus($n->getEnumValue(DriverApprovalStatus::class)),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(DriverCategory::class)),
            'deployDateTime' => fn(ParseNode $n) => $o->setDeployDateTime($n->getDateTimeValue()),
            'driverClass' => fn(ParseNode $n) => $o->setDriverClass($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the driver.
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
     * Gets the name property value. The name of the driver.
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
     * Gets the releaseDateTime property value. The release date time of the driver.
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
     * Gets the version property value. The version of the driver.
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
        $writer->writeIntegerValue('applicableDeviceCount', $this->getApplicableDeviceCount());
        $writer->writeEnumValue('approvalStatus', $this->getApprovalStatus());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('deployDateTime', $this->getDeployDateTime());
        $writer->writeStringValue('driverClass', $this->getDriverClass());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the applicableDeviceCount property value. The number of devices for which this driver is applicable.
     * @param int|null $value Value to set for the applicableDeviceCount property.
    */
    public function setApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('applicableDeviceCount', $value);
    }

    /**
     * Sets the approvalStatus property value. An enum type to represent approval status of a driver.
     * @param DriverApprovalStatus|null $value Value to set for the approvalStatus property.
    */
    public function setApprovalStatus(?DriverApprovalStatus $value): void {
        $this->getBackingStore()->set('approvalStatus', $value);
    }

    /**
     * Sets the category property value. An enum type to represent which category a driver belongs to.
     * @param DriverCategory|null $value Value to set for the category property.
    */
    public function setCategory(?DriverCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the deployDateTime property value. The date time when a driver should be deployed if approvalStatus is approved.
     * @param DateTime|null $value Value to set for the deployDateTime property.
    */
    public function setDeployDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deployDateTime', $value);
    }

    /**
     * Sets the driverClass property value. The class of the driver.
     * @param string|null $value Value to set for the driverClass property.
    */
    public function setDriverClass(?string $value): void {
        $this->getBackingStore()->set('driverClass', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the driver.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the name property value. The name of the driver.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the releaseDateTime property value. The release date time of the driver.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the version property value. The version of the driver.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
