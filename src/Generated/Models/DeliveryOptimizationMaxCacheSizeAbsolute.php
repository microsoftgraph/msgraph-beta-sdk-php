<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationMaxCacheSizeAbsolute extends DeliveryOptimizationMaxCacheSize implements Parsable 
{
    /**
     * @var int|null $maximumCacheSizeInGigabytes Specifies the maximum size in GB of Delivery Optimization cache. Valid values 0 to 4294967295
    */
    private ?int $maximumCacheSizeInGigabytes = null;
    
    /**
     * Instantiates a new DeliveryOptimizationMaxCacheSizeAbsolute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deliveryOptimizationMaxCacheSizeAbsolute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationMaxCacheSizeAbsolute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationMaxCacheSizeAbsolute {
        return new DeliveryOptimizationMaxCacheSizeAbsolute();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumCacheSizeInGigabytes' => function (ParseNode $n) use ($o) { $o->setMaximumCacheSizeInGigabytes($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maximumCacheSizeInGigabytes property value. Specifies the maximum size in GB of Delivery Optimization cache. Valid values 0 to 4294967295
     * @return int|null
    */
    public function getMaximumCacheSizeInGigabytes(): ?int {
        return $this->maximumCacheSizeInGigabytes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumCacheSizeInGigabytes', $this->maximumCacheSizeInGigabytes);
    }

    /**
     * Sets the maximumCacheSizeInGigabytes property value. Specifies the maximum size in GB of Delivery Optimization cache. Valid values 0 to 4294967295
     *  @param int|null $value Value to set for the maximumCacheSizeInGigabytes property.
    */
    public function setMaximumCacheSizeInGigabytes(?int $value ): void {
        $this->maximumCacheSizeInGigabytes = $value;
    }

}
