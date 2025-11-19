<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HardwareOathTokenAuthenticationMethodDevice extends AuthenticationMethodDevice implements Parsable 
{
    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.hardwareOathTokenAuthenticationMethodDevice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareOathTokenAuthenticationMethodDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareOathTokenAuthenticationMethodDevice {
        return new HardwareOathTokenAuthenticationMethodDevice();
    }

    /**
     * Gets the assignedTo property value. User the token is assigned to. Nullable. Supports $filter (eq).
     * @return Identity|null
    */
    public function getAssignedTo(): ?Identity {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the assignTo property value. Assign the hardware OATH token to a user.
     * @return User|null
    */
    public function getAssignTo(): ?User {
        $val = $this->getBackingStore()->get('assignTo');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignTo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'assignTo' => fn(ParseNode $n) => $o->setAssignTo($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'hashFunction' => fn(ParseNode $n) => $o->setHashFunction($n->getEnumValue(HardwareOathTokenHashFunction::class)),
            'lastUsedDateTime' => fn(ParseNode $n) => $o->setLastUsedDateTime($n->getDateTimeValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'secretKey' => fn(ParseNode $n) => $o->setSecretKey($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(HardwareOathTokenStatus::class)),
            'timeIntervalInSeconds' => fn(ParseNode $n) => $o->setTimeIntervalInSeconds($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the hashFunction property value. Hash function of the hardrware token. The possible values are: hmacsha1 or hmacsha256. Default value is: hmacsha1. Supports $filter (eq).
     * @return HardwareOathTokenHashFunction|null
    */
    public function getHashFunction(): ?HardwareOathTokenHashFunction {
        $val = $this->getBackingStore()->get('hashFunction');
        if (is_null($val) || $val instanceof HardwareOathTokenHashFunction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hashFunction'");
    }

    /**
     * Gets the lastUsedDateTime property value. The date and time the authentication method was last used by the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUsedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsedDateTime'");
    }

    /**
     * Gets the manufacturer property value. Manufacturer name of the hardware token. Supports $filter (eq).
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
     * Gets the model property value. Model name of the hardware token. Supports $filter (eq).
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the secretKey property value. Secret key of the specific hardware token, provided by the vendor.
     * @return string|null
    */
    public function getSecretKey(): ?string {
        $val = $this->getBackingStore()->get('secretKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretKey'");
    }

    /**
     * Gets the serialNumber property value. Serial number of the specific hardware token, often found on the back of the device. Supports $select and $filter (eq).
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the status property value. Status of the hardware OATH token.The possible values are: available, assigned, activated, failedActivation. Supports $filter(eq).
     * @return HardwareOathTokenStatus|null
    */
    public function getStatus(): ?HardwareOathTokenStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof HardwareOathTokenStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the timeIntervalInSeconds property value. Refresh interval of the 6-digit verification code, in seconds. The possible values are: 30 or 60. Supports $filter (eq).
     * @return int|null
    */
    public function getTimeIntervalInSeconds(): ?int {
        $val = $this->getBackingStore()->get('timeIntervalInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeIntervalInSeconds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedTo', $this->getAssignedTo());
        $writer->writeObjectValue('assignTo', $this->getAssignTo());
        $writer->writeEnumValue('hashFunction', $this->getHashFunction());
        $writer->writeDateTimeValue('lastUsedDateTime', $this->getLastUsedDateTime());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('secretKey', $this->getSecretKey());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('timeIntervalInSeconds', $this->getTimeIntervalInSeconds());
    }

    /**
     * Sets the assignedTo property value. User the token is assigned to. Nullable. Supports $filter (eq).
     * @param Identity|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?Identity $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the assignTo property value. Assign the hardware OATH token to a user.
     * @param User|null $value Value to set for the assignTo property.
    */
    public function setAssignTo(?User $value): void {
        $this->getBackingStore()->set('assignTo', $value);
    }

    /**
     * Sets the hashFunction property value. Hash function of the hardrware token. The possible values are: hmacsha1 or hmacsha256. Default value is: hmacsha1. Supports $filter (eq).
     * @param HardwareOathTokenHashFunction|null $value Value to set for the hashFunction property.
    */
    public function setHashFunction(?HardwareOathTokenHashFunction $value): void {
        $this->getBackingStore()->set('hashFunction', $value);
    }

    /**
     * Sets the lastUsedDateTime property value. The date and time the authentication method was last used by the user. Read-only. Optional. This optional value is null if the authentication method doesn't populate it. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUsedDateTime', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer name of the hardware token. Supports $filter (eq).
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. Model name of the hardware token. Supports $filter (eq).
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the secretKey property value. Secret key of the specific hardware token, provided by the vendor.
     * @param string|null $value Value to set for the secretKey property.
    */
    public function setSecretKey(?string $value): void {
        $this->getBackingStore()->set('secretKey', $value);
    }

    /**
     * Sets the serialNumber property value. Serial number of the specific hardware token, often found on the back of the device. Supports $select and $filter (eq).
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the status property value. Status of the hardware OATH token.The possible values are: available, assigned, activated, failedActivation. Supports $filter(eq).
     * @param HardwareOathTokenStatus|null $value Value to set for the status property.
    */
    public function setStatus(?HardwareOathTokenStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the timeIntervalInSeconds property value. Refresh interval of the 6-digit verification code, in seconds. The possible values are: 30 or 60. Supports $filter (eq).
     * @param int|null $value Value to set for the timeIntervalInSeconds property.
    */
    public function setTimeIntervalInSeconds(?int $value): void {
        $this->getBackingStore()->set('timeIntervalInSeconds', $value);
    }

}
