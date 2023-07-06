<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelHealthThreshold extends Entity implements Parsable 
{
    /**
     * Instantiates a new MicrosoftTunnelHealthThreshold and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelHealthThreshold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelHealthThreshold {
        return new MicrosoftTunnelHealthThreshold();
    }

    /**
     * Gets the defaultHealthyThreshold property value. The threshold for being healthy based on default health status metrics: CPU usage healthy < 50%, Memory usage healthy < 50%, Disk space healthy > 5GB, Latency healthy < 10ms, health metrics can be customized. Read-only.
     * @return int|null
    */
    public function getDefaultHealthyThreshold(): ?int {
        $val = $this->getBackingStore()->get('defaultHealthyThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultHealthyThreshold'");
    }

    /**
     * Gets the defaultUnhealthyThreshold property value. The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy > 75%, Memory usage unhealthy > 75%, Disk space < 3GB, Latency unhealthy > 20ms, health metrics can be customized. Read-only.
     * @return int|null
    */
    public function getDefaultUnhealthyThreshold(): ?int {
        $val = $this->getBackingStore()->get('defaultUnhealthyThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultUnhealthyThreshold'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultHealthyThreshold' => fn(ParseNode $n) => $o->setDefaultHealthyThreshold($n->getIntegerValue()),
            'defaultUnhealthyThreshold' => fn(ParseNode $n) => $o->setDefaultUnhealthyThreshold($n->getIntegerValue()),
            'healthyThreshold' => fn(ParseNode $n) => $o->setHealthyThreshold($n->getIntegerValue()),
            'unhealthyThreshold' => fn(ParseNode $n) => $o->setUnhealthyThreshold($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the healthyThreshold property value. The threshold for being healthy based on default health status metrics: CPU usage healthy < 50%, Memory usage healthy < 50%, Disk space healthy > 5GB, Latency healthy < 10ms, health metrics can be customized.
     * @return int|null
    */
    public function getHealthyThreshold(): ?int {
        $val = $this->getBackingStore()->get('healthyThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthyThreshold'");
    }

    /**
     * Gets the unhealthyThreshold property value. The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy > 75%, Memory usage unhealthy > 75%, Disk space < 3GB, Latency Unhealthy > 20ms, health metrics can be customized.
     * @return int|null
    */
    public function getUnhealthyThreshold(): ?int {
        $val = $this->getBackingStore()->get('unhealthyThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unhealthyThreshold'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultHealthyThreshold', $this->getDefaultHealthyThreshold());
        $writer->writeIntegerValue('defaultUnhealthyThreshold', $this->getDefaultUnhealthyThreshold());
        $writer->writeIntegerValue('healthyThreshold', $this->getHealthyThreshold());
        $writer->writeIntegerValue('unhealthyThreshold', $this->getUnhealthyThreshold());
    }

    /**
     * Sets the defaultHealthyThreshold property value. The threshold for being healthy based on default health status metrics: CPU usage healthy < 50%, Memory usage healthy < 50%, Disk space healthy > 5GB, Latency healthy < 10ms, health metrics can be customized. Read-only.
     * @param int|null $value Value to set for the defaultHealthyThreshold property.
    */
    public function setDefaultHealthyThreshold(?int $value): void {
        $this->getBackingStore()->set('defaultHealthyThreshold', $value);
    }

    /**
     * Sets the defaultUnhealthyThreshold property value. The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy > 75%, Memory usage unhealthy > 75%, Disk space < 3GB, Latency unhealthy > 20ms, health metrics can be customized. Read-only.
     * @param int|null $value Value to set for the defaultUnhealthyThreshold property.
    */
    public function setDefaultUnhealthyThreshold(?int $value): void {
        $this->getBackingStore()->set('defaultUnhealthyThreshold', $value);
    }

    /**
     * Sets the healthyThreshold property value. The threshold for being healthy based on default health status metrics: CPU usage healthy < 50%, Memory usage healthy < 50%, Disk space healthy > 5GB, Latency healthy < 10ms, health metrics can be customized.
     * @param int|null $value Value to set for the healthyThreshold property.
    */
    public function setHealthyThreshold(?int $value): void {
        $this->getBackingStore()->set('healthyThreshold', $value);
    }

    /**
     * Sets the unhealthyThreshold property value. The threshold for being unhealthy based on default health status metrics: CPU usage unhealthy > 75%, Memory usage unhealthy > 75%, Disk space < 3GB, Latency Unhealthy > 20ms, health metrics can be customized.
     * @param int|null $value Value to set for the unhealthyThreshold property.
    */
    public function setUnhealthyThreshold(?int $value): void {
        $this->getBackingStore()->set('unhealthyThreshold', $value);
    }

}
