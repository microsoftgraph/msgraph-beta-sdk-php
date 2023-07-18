<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Bandwidth limit as a percentage with business hours.
*/
class DeliveryOptimizationBandwidthHoursWithPercentage extends DeliveryOptimizationBandwidth implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationBandwidthHoursWithPercentage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationBandwidthHoursWithPercentage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationBandwidthHoursWithPercentage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationBandwidthHoursWithPercentage {
        return new DeliveryOptimizationBandwidthHoursWithPercentage();
    }

    /**
     * Gets the bandwidthBackgroundPercentageHours property value. Background download percentage hours.
     * @return DeliveryOptimizationBandwidthBusinessHoursLimit|null
    */
    public function getBandwidthBackgroundPercentageHours(): ?DeliveryOptimizationBandwidthBusinessHoursLimit {
        $val = $this->getBackingStore()->get('bandwidthBackgroundPercentageHours');
        if (is_null($val) || $val instanceof DeliveryOptimizationBandwidthBusinessHoursLimit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bandwidthBackgroundPercentageHours'");
    }

    /**
     * Gets the bandwidthForegroundPercentageHours property value. Foreground download percentage hours.
     * @return DeliveryOptimizationBandwidthBusinessHoursLimit|null
    */
    public function getBandwidthForegroundPercentageHours(): ?DeliveryOptimizationBandwidthBusinessHoursLimit {
        $val = $this->getBackingStore()->get('bandwidthForegroundPercentageHours');
        if (is_null($val) || $val instanceof DeliveryOptimizationBandwidthBusinessHoursLimit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bandwidthForegroundPercentageHours'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bandwidthBackgroundPercentageHours' => fn(ParseNode $n) => $o->setBandwidthBackgroundPercentageHours($n->getObjectValue([DeliveryOptimizationBandwidthBusinessHoursLimit::class, 'createFromDiscriminatorValue'])),
            'bandwidthForegroundPercentageHours' => fn(ParseNode $n) => $o->setBandwidthForegroundPercentageHours($n->getObjectValue([DeliveryOptimizationBandwidthBusinessHoursLimit::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
        $writer->writeObjectValue('bandwidthBackgroundPercentageHours', $this->getBandwidthBackgroundPercentageHours());
        $writer->writeObjectValue('bandwidthForegroundPercentageHours', $this->getBandwidthForegroundPercentageHours());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the bandwidthBackgroundPercentageHours property value. Background download percentage hours.
     * @param DeliveryOptimizationBandwidthBusinessHoursLimit|null $value Value to set for the bandwidthBackgroundPercentageHours property.
    */
    public function setBandwidthBackgroundPercentageHours(?DeliveryOptimizationBandwidthBusinessHoursLimit $value): void {
        $this->getBackingStore()->set('bandwidthBackgroundPercentageHours', $value);
    }

    /**
     * Sets the bandwidthForegroundPercentageHours property value. Foreground download percentage hours.
     * @param DeliveryOptimizationBandwidthBusinessHoursLimit|null $value Value to set for the bandwidthForegroundPercentageHours property.
    */
    public function setBandwidthForegroundPercentageHours(?DeliveryOptimizationBandwidthBusinessHoursLimit $value): void {
        $this->getBackingStore()->set('bandwidthForegroundPercentageHours', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
