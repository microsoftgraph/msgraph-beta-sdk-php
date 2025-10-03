<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the run summary of a hardware configuration script.
*/
class HardwareConfigurationRunSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new HardwareConfigurationRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareConfigurationRunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareConfigurationRunSummary {
        return new HardwareConfigurationRunSummary();
    }

    /**
     * Gets the errorDeviceCount property value. Number of devices for which hardware configuration state is error
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * Gets the errorUserCount property value. Number of users for which hardware configuration state is error
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        $val = $this->getBackingStore()->get('errorUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorUserCount'");
    }

    /**
     * Gets the failedDeviceCount property value. Number of devices for which hardware configuration found an issue
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('failedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedDeviceCount'");
    }

    /**
     * Gets the failedUserCount property value. Number of users for which hardware configuration found an issue
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        $val = $this->getBackingStore()->get('failedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedUserCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'errorUserCount' => fn(ParseNode $n) => $o->setErrorUserCount($n->getIntegerValue()),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'failedUserCount' => fn(ParseNode $n) => $o->setFailedUserCount($n->getIntegerValue()),
            'lastRunDateTime' => fn(ParseNode $n) => $o->setLastRunDateTime($n->getDateTimeValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'notApplicableUserCount' => fn(ParseNode $n) => $o->setNotApplicableUserCount($n->getIntegerValue()),
            'pendingDeviceCount' => fn(ParseNode $n) => $o->setPendingDeviceCount($n->getIntegerValue()),
            'pendingUserCount' => fn(ParseNode $n) => $o->setPendingUserCount($n->getIntegerValue()),
            'successfulDeviceCount' => fn(ParseNode $n) => $o->setSuccessfulDeviceCount($n->getIntegerValue()),
            'successfulUserCount' => fn(ParseNode $n) => $o->setSuccessfulUserCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
            'unknownUserCount' => fn(ParseNode $n) => $o->setUnknownUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastRunDateTime property value. Last run time for the configuration across all devices
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRunDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRunDateTime'");
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of devices for which hardware configuration state is not applicable
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableDeviceCount'");
    }

    /**
     * Gets the notApplicableUserCount property value. Number of users for which hardware configuration state is not applicable
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableUserCount'");
    }

    /**
     * Gets the pendingDeviceCount property value. Number of devices for which hardware configuration is in pending state
     * @return int|null
    */
    public function getPendingDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingDeviceCount'");
    }

    /**
     * Gets the pendingUserCount property value. Number of users for which hardware configuration is in pending state
     * @return int|null
    */
    public function getPendingUserCount(): ?int {
        $val = $this->getBackingStore()->get('pendingUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingUserCount'");
    }

    /**
     * Gets the successfulDeviceCount property value. Number of devices for which hardware configured without any issue
     * @return int|null
    */
    public function getSuccessfulDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('successfulDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulDeviceCount'");
    }

    /**
     * Gets the successfulUserCount property value. Number of users for which hardware configured without any issue
     * @return int|null
    */
    public function getSuccessfulUserCount(): ?int {
        $val = $this->getBackingStore()->get('successfulUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulUserCount'");
    }

    /**
     * Gets the unknownDeviceCount property value. Number of devices for which hardware configuration state is unknown
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownDeviceCount'");
    }

    /**
     * Gets the unknownUserCount property value. Number of users for which hardware configuration state is unknown
     * @return int|null
    */
    public function getUnknownUserCount(): ?int {
        $val = $this->getBackingStore()->get('unknownUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('errorUserCount', $this->getErrorUserCount());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('failedUserCount', $this->getFailedUserCount());
        $writer->writeDateTimeValue('lastRunDateTime', $this->getLastRunDateTime());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('notApplicableUserCount', $this->getNotApplicableUserCount());
        $writer->writeIntegerValue('pendingDeviceCount', $this->getPendingDeviceCount());
        $writer->writeIntegerValue('pendingUserCount', $this->getPendingUserCount());
        $writer->writeIntegerValue('successfulDeviceCount', $this->getSuccessfulDeviceCount());
        $writer->writeIntegerValue('successfulUserCount', $this->getSuccessfulUserCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
        $writer->writeIntegerValue('unknownUserCount', $this->getUnknownUserCount());
    }

    /**
     * Sets the errorDeviceCount property value. Number of devices for which hardware configuration state is error
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the errorUserCount property value. Number of users for which hardware configuration state is error
     * @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value): void {
        $this->getBackingStore()->set('errorUserCount', $value);
    }

    /**
     * Sets the failedDeviceCount property value. Number of devices for which hardware configuration found an issue
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the failedUserCount property value. Number of users for which hardware configuration found an issue
     * @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value): void {
        $this->getBackingStore()->set('failedUserCount', $value);
    }

    /**
     * Sets the lastRunDateTime property value. Last run time for the configuration across all devices
     * @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRunDateTime', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of devices for which hardware configuration state is not applicable
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the notApplicableUserCount property value. Number of users for which hardware configuration state is not applicable
     * @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableUserCount', $value);
    }

    /**
     * Sets the pendingDeviceCount property value. Number of devices for which hardware configuration is in pending state
     * @param int|null $value Value to set for the pendingDeviceCount property.
    */
    public function setPendingDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingDeviceCount', $value);
    }

    /**
     * Sets the pendingUserCount property value. Number of users for which hardware configuration is in pending state
     * @param int|null $value Value to set for the pendingUserCount property.
    */
    public function setPendingUserCount(?int $value): void {
        $this->getBackingStore()->set('pendingUserCount', $value);
    }

    /**
     * Sets the successfulDeviceCount property value. Number of devices for which hardware configured without any issue
     * @param int|null $value Value to set for the successfulDeviceCount property.
    */
    public function setSuccessfulDeviceCount(?int $value): void {
        $this->getBackingStore()->set('successfulDeviceCount', $value);
    }

    /**
     * Sets the successfulUserCount property value. Number of users for which hardware configured without any issue
     * @param int|null $value Value to set for the successfulUserCount property.
    */
    public function setSuccessfulUserCount(?int $value): void {
        $this->getBackingStore()->set('successfulUserCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Number of devices for which hardware configuration state is unknown
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

    /**
     * Sets the unknownUserCount property value. Number of users for which hardware configuration state is unknown
     * @param int|null $value Value to set for the unknownUserCount property.
    */
    public function setUnknownUserCount(?int $value): void {
        $this->getBackingStore()->set('unknownUserCount', $value);
    }

}
