<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for User state of the hardware configuration
*/
class HardwareConfigurationUserState extends Entity implements Parsable 
{
    /**
     * Instantiates a new HardwareConfigurationUserState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareConfigurationUserState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareConfigurationUserState {
        return new HardwareConfigurationUserState();
    }

    /**
     * Gets the errorDeviceCount property value. Error device count for specific user.
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
     * Gets the failedDeviceCount property value. Failed device count for specific user.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'lastStateUpdateDateTime' => fn(ParseNode $n) => $o->setLastStateUpdateDateTime($n->getDateTimeValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'pendingDeviceCount' => fn(ParseNode $n) => $o->setPendingDeviceCount($n->getIntegerValue()),
            'successfulDeviceCount' => fn(ParseNode $n) => $o->setSuccessfulDeviceCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastStateUpdateDateTime property value. Last timestamp when the hardware configuration executed
     * @return DateTime|null
    */
    public function getLastStateUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastStateUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastStateUpdateDateTime'");
    }

    /**
     * Gets the notApplicableDeviceCount property value. Not applicable device count for specific user.
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
     * Gets the pendingDeviceCount property value. Pending device count for specific user.
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
     * Gets the successfulDeviceCount property value. Success device count for specific user.
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
     * Gets the unknownDeviceCount property value. Unknown device count for specific user.
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
     * Gets the upn property value. User Principal Name (UPN).
     * @return string|null
    */
    public function getUpn(): ?string {
        $val = $this->getBackingStore()->get('upn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upn'");
    }

    /**
     * Gets the userEmail property value. User Email address.
     * @return string|null
    */
    public function getUserEmail(): ?string {
        $val = $this->getBackingStore()->get('userEmail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userEmail'");
    }

    /**
     * Gets the userName property value. User name
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeDateTimeValue('lastStateUpdateDateTime', $this->getLastStateUpdateDateTime());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('pendingDeviceCount', $this->getPendingDeviceCount());
        $writer->writeIntegerValue('successfulDeviceCount', $this->getSuccessfulDeviceCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
        $writer->writeStringValue('upn', $this->getUpn());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the errorDeviceCount property value. Error device count for specific user.
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the failedDeviceCount property value. Failed device count for specific user.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the lastStateUpdateDateTime property value. Last timestamp when the hardware configuration executed
     * @param DateTime|null $value Value to set for the lastStateUpdateDateTime property.
    */
    public function setLastStateUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastStateUpdateDateTime', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Not applicable device count for specific user.
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the pendingDeviceCount property value. Pending device count for specific user.
     * @param int|null $value Value to set for the pendingDeviceCount property.
    */
    public function setPendingDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingDeviceCount', $value);
    }

    /**
     * Sets the successfulDeviceCount property value. Success device count for specific user.
     * @param int|null $value Value to set for the successfulDeviceCount property.
    */
    public function setSuccessfulDeviceCount(?int $value): void {
        $this->getBackingStore()->set('successfulDeviceCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Unknown device count for specific user.
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

    /**
     * Sets the upn property value. User Principal Name (UPN).
     * @param string|null $value Value to set for the upn property.
    */
    public function setUpn(?string $value): void {
        $this->getBackingStore()->set('upn', $value);
    }

    /**
     * Sets the userEmail property value. User Email address.
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the userName property value. User name
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
