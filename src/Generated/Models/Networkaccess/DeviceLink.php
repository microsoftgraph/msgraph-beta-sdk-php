<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLink extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLink {
        return new DeviceLink();
    }

    /**
     * Gets the bandwidthCapacityInMbps property value. The bandwidthCapacityInMbps property
     * @return BandwidthCapacityInMbps|null
    */
    public function getBandwidthCapacityInMbps(): ?BandwidthCapacityInMbps {
        $val = $this->getBackingStore()->get('bandwidthCapacityInMbps');
        if (is_null($val) || $val instanceof BandwidthCapacityInMbps) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bandwidthCapacityInMbps'");
    }

    /**
     * Gets the bgpConfiguration property value. The bgpConfiguration property
     * @return BgpConfiguration|null
    */
    public function getBgpConfiguration(): ?BgpConfiguration {
        $val = $this->getBackingStore()->get('bgpConfiguration');
        if (is_null($val) || $val instanceof BgpConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bgpConfiguration'");
    }

    /**
     * Gets the deviceVendor property value. The deviceVendor property
     * @return DeviceVendor|null
    */
    public function getDeviceVendor(): ?DeviceVendor {
        $val = $this->getBackingStore()->get('deviceVendor');
        if (is_null($val) || $val instanceof DeviceVendor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceVendor'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bandwidthCapacityInMbps' => fn(ParseNode $n) => $o->setBandwidthCapacityInMbps($n->getEnumValue(BandwidthCapacityInMbps::class)),
            'bgpConfiguration' => fn(ParseNode $n) => $o->setBgpConfiguration($n->getObjectValue([BgpConfiguration::class, 'createFromDiscriminatorValue'])),
            'deviceVendor' => fn(ParseNode $n) => $o->setDeviceVendor($n->getEnumValue(DeviceVendor::class)),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'redundancyConfiguration' => fn(ParseNode $n) => $o->setRedundancyConfiguration($n->getObjectValue([RedundancyConfiguration::class, 'createFromDiscriminatorValue'])),
            'tunnelConfiguration' => fn(ParseNode $n) => $o->setTunnelConfiguration($n->getObjectValue([TunnelConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the name property value. The name property
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
     * Gets the redundancyConfiguration property value. The redundancyConfiguration property
     * @return RedundancyConfiguration|null
    */
    public function getRedundancyConfiguration(): ?RedundancyConfiguration {
        $val = $this->getBackingStore()->get('redundancyConfiguration');
        if (is_null($val) || $val instanceof RedundancyConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redundancyConfiguration'");
    }

    /**
     * Gets the tunnelConfiguration property value. The tunnelConfiguration property
     * @return TunnelConfiguration|null
    */
    public function getTunnelConfiguration(): ?TunnelConfiguration {
        $val = $this->getBackingStore()->get('tunnelConfiguration');
        if (is_null($val) || $val instanceof TunnelConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tunnelConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('bandwidthCapacityInMbps', $this->getBandwidthCapacityInMbps());
        $writer->writeObjectValue('bgpConfiguration', $this->getBgpConfiguration());
        $writer->writeEnumValue('deviceVendor', $this->getDeviceVendor());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('redundancyConfiguration', $this->getRedundancyConfiguration());
        $writer->writeObjectValue('tunnelConfiguration', $this->getTunnelConfiguration());
    }

    /**
     * Sets the bandwidthCapacityInMbps property value. The bandwidthCapacityInMbps property
     * @param BandwidthCapacityInMbps|null $value Value to set for the bandwidthCapacityInMbps property.
    */
    public function setBandwidthCapacityInMbps(?BandwidthCapacityInMbps $value): void {
        $this->getBackingStore()->set('bandwidthCapacityInMbps', $value);
    }

    /**
     * Sets the bgpConfiguration property value. The bgpConfiguration property
     * @param BgpConfiguration|null $value Value to set for the bgpConfiguration property.
    */
    public function setBgpConfiguration(?BgpConfiguration $value): void {
        $this->getBackingStore()->set('bgpConfiguration', $value);
    }

    /**
     * Sets the deviceVendor property value. The deviceVendor property
     * @param DeviceVendor|null $value Value to set for the deviceVendor property.
    */
    public function setDeviceVendor(?DeviceVendor $value): void {
        $this->getBackingStore()->set('deviceVendor', $value);
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the redundancyConfiguration property value. The redundancyConfiguration property
     * @param RedundancyConfiguration|null $value Value to set for the redundancyConfiguration property.
    */
    public function setRedundancyConfiguration(?RedundancyConfiguration $value): void {
        $this->getBackingStore()->set('redundancyConfiguration', $value);
    }

    /**
     * Sets the tunnelConfiguration property value. The tunnelConfiguration property
     * @param TunnelConfiguration|null $value Value to set for the tunnelConfiguration property.
    */
    public function setTunnelConfiguration(?TunnelConfiguration $value): void {
        $this->getBackingStore()->set('tunnelConfiguration', $value);
    }

}
