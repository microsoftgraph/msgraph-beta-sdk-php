<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkplaceSensorDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkplaceSensorDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkplaceSensorDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkplaceSensorDevice {
        return new WorkplaceSensorDevice();
    }

    /**
     * Gets the description property value. The description of the device.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceId property value. The user-defined unique identifier of the device provided at the time of creation.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the displayName property value. The display name of the device.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'ipV4Address' => fn(ParseNode $n) => $o->setIpV4Address($n->getStringValue()),
            'ipV6Address' => fn(ParseNode $n) => $o->setIpV6Address($n->getStringValue()),
            'macAddress' => fn(ParseNode $n) => $o->setMacAddress($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
            'sensors' => fn(ParseNode $n) => $o->setSensors($n->getCollectionOfObjectValues([WorkplaceSensor::class, 'createFromDiscriminatorValue'])),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
        ]);
    }

    /**
     * Gets the ipV4Address property value. The IPv4 address of the device.
     * @return string|null
    */
    public function getIpV4Address(): ?string {
        $val = $this->getBackingStore()->get('ipV4Address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipV4Address'");
    }

    /**
     * Gets the ipV6Address property value. The IPv6 address of the device.
     * @return string|null
    */
    public function getIpV6Address(): ?string {
        $val = $this->getBackingStore()->get('ipV6Address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipV6Address'");
    }

    /**
     * Gets the macAddress property value. The MAC address of the device.
     * @return string|null
    */
    public function getMacAddress(): ?string {
        $val = $this->getBackingStore()->get('macAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddress'");
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the device.
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
     * Gets the placeId property value. The unique identifier of the place where the device is located. If the device is installed in a room equipped with a mailbox, this property should match the ExternalDirectoryObjectId or Microsoft Entra object ID of the room mailbox.
     * @return string|null
    */
    public function getPlaceId(): ?string {
        $val = $this->getBackingStore()->get('placeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeId'");
    }

    /**
     * Gets the sensors property value. A list of sensors associated with the device that collect and report data about physical or environmental conditions, such as occupancy, people count, inferred occupancy, temperature, Wi-Fi, and more.
     * @return array<WorkplaceSensor>|null
    */
    public function getSensors(): ?array {
        $val = $this->getBackingStore()->get('sensors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkplaceSensor::class);
            /** @var array<WorkplaceSensor>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensors'");
    }

    /**
     * Gets the tags property value. A list of custom tags associated with the device.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('ipV4Address', $this->getIpV4Address());
        $writer->writeStringValue('ipV6Address', $this->getIpV6Address());
        $writer->writeStringValue('macAddress', $this->getMacAddress());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('placeId', $this->getPlaceId());
        $writer->writeCollectionOfObjectValues('sensors', $this->getSensors());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
    }

    /**
     * Sets the description property value. The description of the device.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceId property value. The user-defined unique identifier of the device provided at the time of creation.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the device.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the ipV4Address property value. The IPv4 address of the device.
     * @param string|null $value Value to set for the ipV4Address property.
    */
    public function setIpV4Address(?string $value): void {
        $this->getBackingStore()->set('ipV4Address', $value);
    }

    /**
     * Sets the ipV6Address property value. The IPv6 address of the device.
     * @param string|null $value Value to set for the ipV6Address property.
    */
    public function setIpV6Address(?string $value): void {
        $this->getBackingStore()->set('ipV6Address', $value);
    }

    /**
     * Sets the macAddress property value. The MAC address of the device.
     * @param string|null $value Value to set for the macAddress property.
    */
    public function setMacAddress(?string $value): void {
        $this->getBackingStore()->set('macAddress', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the device.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the placeId property value. The unique identifier of the place where the device is located. If the device is installed in a room equipped with a mailbox, this property should match the ExternalDirectoryObjectId or Microsoft Entra object ID of the room mailbox.
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

    /**
     * Sets the sensors property value. A list of sensors associated with the device that collect and report data about physical or environmental conditions, such as occupancy, people count, inferred occupancy, temperature, Wi-Fi, and more.
     * @param array<WorkplaceSensor>|null $value Value to set for the sensors property.
    */
    public function setSensors(?array $value): void {
        $this->getBackingStore()->set('sensors', $value);
    }

    /**
     * Sets the tags property value. A list of custom tags associated with the device.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
