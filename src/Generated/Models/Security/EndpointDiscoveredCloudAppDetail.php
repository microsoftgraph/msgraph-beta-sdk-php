<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EndpointDiscoveredCloudAppDetail extends DiscoveredCloudAppDetail implements Parsable 
{
    /**
     * Instantiates a new EndpointDiscoveredCloudAppDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndpointDiscoveredCloudAppDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndpointDiscoveredCloudAppDetail {
        return new EndpointDiscoveredCloudAppDetail();
    }

    /**
     * Gets the deviceCount property value. The number of devices that accessed the discovered app.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * Gets the devices property value. Represents the devices that access the discovered apps.
     * @return array<DiscoveredCloudAppDevice>|null
    */
    public function getDevices(): ?array {
        $val = $this->getBackingStore()->get('devices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DiscoveredCloudAppDevice::class);
            /** @var array<DiscoveredCloudAppDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devices'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getCollectionOfObjectValues([DiscoveredCloudAppDevice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeCollectionOfObjectValues('devices', $this->getDevices());
    }

    /**
     * Sets the deviceCount property value. The number of devices that accessed the discovered app.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the devices property value. Represents the devices that access the discovered apps.
     * @param array<DiscoveredCloudAppDevice>|null $value Value to set for the devices property.
    */
    public function setDevices(?array $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

}
