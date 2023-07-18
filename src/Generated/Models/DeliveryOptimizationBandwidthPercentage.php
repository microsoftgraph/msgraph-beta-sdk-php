<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Bandwidth limits specified as a percentage.
*/
class DeliveryOptimizationBandwidthPercentage extends DeliveryOptimizationBandwidth implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationBandwidthPercentage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationBandwidthPercentage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationBandwidthPercentage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationBandwidthPercentage {
        return new DeliveryOptimizationBandwidthPercentage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumBackgroundBandwidthPercentage' => fn(ParseNode $n) => $o->setMaximumBackgroundBandwidthPercentage($n->getIntegerValue()),
            'maximumForegroundBandwidthPercentage' => fn(ParseNode $n) => $o->setMaximumForegroundBandwidthPercentage($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maximumBackgroundBandwidthPercentage property value. Specifies the maximum background download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMaximumBackgroundBandwidthPercentage(): ?int {
        $val = $this->getBackingStore()->get('maximumBackgroundBandwidthPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumBackgroundBandwidthPercentage'");
    }

    /**
     * Gets the maximumForegroundBandwidthPercentage property value. Specifies the maximum foreground download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMaximumForegroundBandwidthPercentage(): ?int {
        $val = $this->getBackingStore()->get('maximumForegroundBandwidthPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumForegroundBandwidthPercentage'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumBackgroundBandwidthPercentage', $this->getMaximumBackgroundBandwidthPercentage());
        $writer->writeIntegerValue('maximumForegroundBandwidthPercentage', $this->getMaximumForegroundBandwidthPercentage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the maximumBackgroundBandwidthPercentage property value. Specifies the maximum background download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @param int|null $value Value to set for the maximumBackgroundBandwidthPercentage property.
    */
    public function setMaximumBackgroundBandwidthPercentage(?int $value): void {
        $this->getBackingStore()->set('maximumBackgroundBandwidthPercentage', $value);
    }

    /**
     * Sets the maximumForegroundBandwidthPercentage property value. Specifies the maximum foreground download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @param int|null $value Value to set for the maximumForegroundBandwidthPercentage property.
    */
    public function setMaximumForegroundBandwidthPercentage(?int $value): void {
        $this->getBackingStore()->set('maximumForegroundBandwidthPercentage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
