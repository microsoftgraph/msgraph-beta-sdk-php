<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Bandwidth limits in kilobytes per second.
*/
class DeliveryOptimizationBandwidthAbsolute extends DeliveryOptimizationBandwidth implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationBandwidthAbsolute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationBandwidthAbsolute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationBandwidthAbsolute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationBandwidthAbsolute {
        return new DeliveryOptimizationBandwidthAbsolute();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumDownloadBandwidthInKilobytesPerSecond' => fn(ParseNode $n) => $o->setMaximumDownloadBandwidthInKilobytesPerSecond($n->getIntegerValue()),
            'maximumUploadBandwidthInKilobytesPerSecond' => fn(ParseNode $n) => $o->setMaximumUploadBandwidthInKilobytesPerSecond($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maximumDownloadBandwidthInKilobytesPerSecond property value. Specifies the maximum download bandwidth in KiloBytes/second that the device can use across all concurrent download activities using Delivery Optimization. Valid values 0 to 4294967295
     * @return int|null
    */
    public function getMaximumDownloadBandwidthInKilobytesPerSecond(): ?int {
        $val = $this->getBackingStore()->get('maximumDownloadBandwidthInKilobytesPerSecond');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumDownloadBandwidthInKilobytesPerSecond'");
    }

    /**
     * Gets the maximumUploadBandwidthInKilobytesPerSecond property value. Specifies the maximum upload bandwidth in KiloBytes/second that a device will use across all concurrent upload activity using Delivery Optimization (0-4000000). Valid values 0 to 4000000
     * @return int|null
    */
    public function getMaximumUploadBandwidthInKilobytesPerSecond(): ?int {
        $val = $this->getBackingStore()->get('maximumUploadBandwidthInKilobytesPerSecond');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumUploadBandwidthInKilobytesPerSecond'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumDownloadBandwidthInKilobytesPerSecond', $this->getMaximumDownloadBandwidthInKilobytesPerSecond());
        $writer->writeIntegerValue('maximumUploadBandwidthInKilobytesPerSecond', $this->getMaximumUploadBandwidthInKilobytesPerSecond());
    }

    /**
     * Sets the maximumDownloadBandwidthInKilobytesPerSecond property value. Specifies the maximum download bandwidth in KiloBytes/second that the device can use across all concurrent download activities using Delivery Optimization. Valid values 0 to 4294967295
     * @param int|null $value Value to set for the maximumDownloadBandwidthInKilobytesPerSecond property.
    */
    public function setMaximumDownloadBandwidthInKilobytesPerSecond(?int $value): void {
        $this->getBackingStore()->set('maximumDownloadBandwidthInKilobytesPerSecond', $value);
    }

    /**
     * Sets the maximumUploadBandwidthInKilobytesPerSecond property value. Specifies the maximum upload bandwidth in KiloBytes/second that a device will use across all concurrent upload activity using Delivery Optimization (0-4000000). Valid values 0 to 4000000
     * @param int|null $value Value to set for the maximumUploadBandwidthInKilobytesPerSecond property.
    */
    public function setMaximumUploadBandwidthInKilobytesPerSecond(?int $value): void {
        $this->getBackingStore()->set('maximumUploadBandwidthInKilobytesPerSecond', $value);
    }

}
