<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppInstallSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppInstallSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppInstallSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppInstallSummary {
        return new MobileAppInstallSummary();
    }

    /**
     * Gets the failedDeviceCount property value. Number of Devices that have failed to install this app.
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
     * Gets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this app.
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
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'failedUserCount' => fn(ParseNode $n) => $o->setFailedUserCount($n->getIntegerValue()),
            'installedDeviceCount' => fn(ParseNode $n) => $o->setInstalledDeviceCount($n->getIntegerValue()),
            'installedUserCount' => fn(ParseNode $n) => $o->setInstalledUserCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'notApplicableUserCount' => fn(ParseNode $n) => $o->setNotApplicableUserCount($n->getIntegerValue()),
            'notInstalledDeviceCount' => fn(ParseNode $n) => $o->setNotInstalledDeviceCount($n->getIntegerValue()),
            'notInstalledUserCount' => fn(ParseNode $n) => $o->setNotInstalledUserCount($n->getIntegerValue()),
            'pendingInstallDeviceCount' => fn(ParseNode $n) => $o->setPendingInstallDeviceCount($n->getIntegerValue()),
            'pendingInstallUserCount' => fn(ParseNode $n) => $o->setPendingInstallUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the installedDeviceCount property value. Number of Devices that have successfully installed this app.
     * @return int|null
    */
    public function getInstalledDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('installedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedDeviceCount'");
    }

    /**
     * Gets the installedUserCount property value. Number of Users whose devices have all succeeded to install this app.
     * @return int|null
    */
    public function getInstalledUserCount(): ?int {
        $val = $this->getBackingStore()->get('installedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installedUserCount'");
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of Devices that are not applicable for this app.
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
     * Gets the notApplicableUserCount property value. Number of Users whose devices were all not applicable for this app.
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
     * Gets the notInstalledDeviceCount property value. Number of Devices that does not have this app installed.
     * @return int|null
    */
    public function getNotInstalledDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notInstalledDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notInstalledDeviceCount'");
    }

    /**
     * Gets the notInstalledUserCount property value. Number of Users that have 1 or more devices that did not install this app.
     * @return int|null
    */
    public function getNotInstalledUserCount(): ?int {
        $val = $this->getBackingStore()->get('notInstalledUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notInstalledUserCount'");
    }

    /**
     * Gets the pendingInstallDeviceCount property value. Number of Devices that have been notified to install this app.
     * @return int|null
    */
    public function getPendingInstallDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('pendingInstallDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingInstallDeviceCount'");
    }

    /**
     * Gets the pendingInstallUserCount property value. Number of Users that have 1 or more device that have been notified to install this app and have 0 devices with failures.
     * @return int|null
    */
    public function getPendingInstallUserCount(): ?int {
        $val = $this->getBackingStore()->get('pendingInstallUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingInstallUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('failedUserCount', $this->getFailedUserCount());
        $writer->writeIntegerValue('installedDeviceCount', $this->getInstalledDeviceCount());
        $writer->writeIntegerValue('installedUserCount', $this->getInstalledUserCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('notApplicableUserCount', $this->getNotApplicableUserCount());
        $writer->writeIntegerValue('notInstalledDeviceCount', $this->getNotInstalledDeviceCount());
        $writer->writeIntegerValue('notInstalledUserCount', $this->getNotInstalledUserCount());
        $writer->writeIntegerValue('pendingInstallDeviceCount', $this->getPendingInstallDeviceCount());
        $writer->writeIntegerValue('pendingInstallUserCount', $this->getPendingInstallUserCount());
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to install this app.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the failedUserCount property value. Number of Users that have 1 or more device that failed to install this app.
     * @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value): void {
        $this->getBackingStore()->set('failedUserCount', $value);
    }

    /**
     * Sets the installedDeviceCount property value. Number of Devices that have successfully installed this app.
     * @param int|null $value Value to set for the installedDeviceCount property.
    */
    public function setInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('installedDeviceCount', $value);
    }

    /**
     * Sets the installedUserCount property value. Number of Users whose devices have all succeeded to install this app.
     * @param int|null $value Value to set for the installedUserCount property.
    */
    public function setInstalledUserCount(?int $value): void {
        $this->getBackingStore()->set('installedUserCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of Devices that are not applicable for this app.
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the notApplicableUserCount property value. Number of Users whose devices were all not applicable for this app.
     * @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableUserCount', $value);
    }

    /**
     * Sets the notInstalledDeviceCount property value. Number of Devices that does not have this app installed.
     * @param int|null $value Value to set for the notInstalledDeviceCount property.
    */
    public function setNotInstalledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledDeviceCount', $value);
    }

    /**
     * Sets the notInstalledUserCount property value. Number of Users that have 1 or more devices that did not install this app.
     * @param int|null $value Value to set for the notInstalledUserCount property.
    */
    public function setNotInstalledUserCount(?int $value): void {
        $this->getBackingStore()->set('notInstalledUserCount', $value);
    }

    /**
     * Sets the pendingInstallDeviceCount property value. Number of Devices that have been notified to install this app.
     * @param int|null $value Value to set for the pendingInstallDeviceCount property.
    */
    public function setPendingInstallDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingInstallDeviceCount', $value);
    }

    /**
     * Sets the pendingInstallUserCount property value. Number of Users that have 1 or more device that have been notified to install this app and have 0 devices with failures.
     * @param int|null $value Value to set for the pendingInstallUserCount property.
    */
    public function setPendingInstallUserCount(?int $value): void {
        $this->getBackingStore()->set('pendingInstallUserCount', $value);
    }

}
