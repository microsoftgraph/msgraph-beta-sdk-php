<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Delivery Optimization Max cache size percentage types.
*/
class DeliveryOptimizationMaxCacheSizePercentage extends DeliveryOptimizationMaxCacheSize implements Parsable 
{
    /**
     * Instantiates a new deliveryOptimizationMaxCacheSizePercentage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationMaxCacheSizePercentage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationMaxCacheSizePercentage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationMaxCacheSizePercentage {
        return new DeliveryOptimizationMaxCacheSizePercentage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumCacheSizePercentage' => fn(ParseNode $n) => $o->setMaximumCacheSizePercentage($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maximumCacheSizePercentage property value. Specifies the maximum cache size that Delivery Optimization can utilize, as a percentage of disk size (1-100). Valid values 1 to 100
     * @return int|null
    */
    public function getMaximumCacheSizePercentage(): ?int {
        $val = $this->getBackingStore()->get('maximumCacheSizePercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumCacheSizePercentage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumCacheSizePercentage', $this->getMaximumCacheSizePercentage());
    }

    /**
     * Sets the maximumCacheSizePercentage property value. Specifies the maximum cache size that Delivery Optimization can utilize, as a percentage of disk size (1-100). Valid values 1 to 100
     * @param int|null $value Value to set for the maximumCacheSizePercentage property.
    */
    public function setMaximumCacheSizePercentage(?int $value): void {
        $this->getBackingStore()->set('maximumCacheSizePercentage', $value);
    }

}
