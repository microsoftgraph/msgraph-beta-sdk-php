<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationBandwidthHoursWithPercentage extends DeliveryOptimizationBandwidth implements Parsable 
{
    /**
     * @var DeliveryOptimizationBandwidthBusinessHoursLimit|null $bandwidthBackgroundPercentageHours Background download percentage hours.
    */
    private ?DeliveryOptimizationBandwidthBusinessHoursLimit $bandwidthBackgroundPercentageHours = null;
    
    /**
     * @var DeliveryOptimizationBandwidthBusinessHoursLimit|null $bandwidthForegroundPercentageHours Foreground download percentage hours.
    */
    private ?DeliveryOptimizationBandwidthBusinessHoursLimit $bandwidthForegroundPercentageHours = null;
    
    /**
     * Instantiates a new DeliveryOptimizationBandwidthHoursWithPercentage and sets the default values.
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
        return $this->bandwidthBackgroundPercentageHours;
    }

    /**
     * Gets the bandwidthForegroundPercentageHours property value. Foreground download percentage hours.
     * @return DeliveryOptimizationBandwidthBusinessHoursLimit|null
    */
    public function getBandwidthForegroundPercentageHours(): ?DeliveryOptimizationBandwidthBusinessHoursLimit {
        return $this->bandwidthForegroundPercentageHours;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bandwidthBackgroundPercentageHours' => fn(ParseNode $n) => $o->setBandwidthBackgroundPercentageHours($n->getObjectValue([DeliveryOptimizationBandwidthBusinessHoursLimit::class, 'createFromDiscriminatorValue'])),
            'bandwidthForegroundPercentageHours' => fn(ParseNode $n) => $o->setBandwidthForegroundPercentageHours($n->getObjectValue([DeliveryOptimizationBandwidthBusinessHoursLimit::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bandwidthBackgroundPercentageHours', $this->bandwidthBackgroundPercentageHours);
        $writer->writeObjectValue('bandwidthForegroundPercentageHours', $this->bandwidthForegroundPercentageHours);
    }

    /**
     * Sets the bandwidthBackgroundPercentageHours property value. Background download percentage hours.
     *  @param DeliveryOptimizationBandwidthBusinessHoursLimit|null $value Value to set for the bandwidthBackgroundPercentageHours property.
    */
    public function setBandwidthBackgroundPercentageHours(?DeliveryOptimizationBandwidthBusinessHoursLimit $value ): void {
        $this->bandwidthBackgroundPercentageHours = $value;
    }

    /**
     * Sets the bandwidthForegroundPercentageHours property value. Foreground download percentage hours.
     *  @param DeliveryOptimizationBandwidthBusinessHoursLimit|null $value Value to set for the bandwidthForegroundPercentageHours property.
    */
    public function setBandwidthForegroundPercentageHours(?DeliveryOptimizationBandwidthBusinessHoursLimit $value ): void {
        $this->bandwidthForegroundPercentageHours = $value;
    }

}
