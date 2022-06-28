<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationBandwidthPercentage extends DeliveryOptimizationBandwidth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maximumBackgroundBandwidthPercentage Specifies the maximum background download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
    */
    private ?int $maximumBackgroundBandwidthPercentage = null;
    
    /**
     * @var int|null $maximumForegroundBandwidthPercentage Specifies the maximum foreground download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
    */
    private ?int $maximumForegroundBandwidthPercentage = null;
    
    /**
     * Instantiates a new DeliveryOptimizationBandwidthPercentage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumBackgroundBandwidthPercentage' => function (ParseNode $n) use ($o) { $o->setMaximumBackgroundBandwidthPercentage($n->getIntegerValue()); },
            'maximumForegroundBandwidthPercentage' => function (ParseNode $n) use ($o) { $o->setMaximumForegroundBandwidthPercentage($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maximumBackgroundBandwidthPercentage property value. Specifies the maximum background download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMaximumBackgroundBandwidthPercentage(): ?int {
        return $this->maximumBackgroundBandwidthPercentage;
    }

    /**
     * Gets the maximumForegroundBandwidthPercentage property value. Specifies the maximum foreground download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getMaximumForegroundBandwidthPercentage(): ?int {
        return $this->maximumForegroundBandwidthPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumBackgroundBandwidthPercentage', $this->maximumBackgroundBandwidthPercentage);
        $writer->writeIntegerValue('maximumForegroundBandwidthPercentage', $this->maximumForegroundBandwidthPercentage);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the maximumBackgroundBandwidthPercentage property value. Specifies the maximum background download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the maximumBackgroundBandwidthPercentage property.
    */
    public function setMaximumBackgroundBandwidthPercentage(?int $value ): void {
        $this->maximumBackgroundBandwidthPercentage = $value;
    }

    /**
     * Sets the maximumForegroundBandwidthPercentage property value. Specifies the maximum foreground download bandwidth that Delivery Optimization uses across all concurrent download activities as a percentage of available download bandwidth (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the maximumForegroundBandwidthPercentage property.
    */
    public function setMaximumForegroundBandwidthPercentage(?int $value ): void {
        $this->maximumForegroundBandwidthPercentage = $value;
    }

}
