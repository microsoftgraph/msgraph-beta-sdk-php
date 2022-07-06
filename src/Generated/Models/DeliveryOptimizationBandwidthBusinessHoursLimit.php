<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationBandwidthBusinessHoursLimit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $bandwidthBeginBusinessHours Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    */
    private ?int $bandwidthBeginBusinessHours = null;
    
    /**
     * @var int|null $bandwidthEndBusinessHours Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
    */
    private ?int $bandwidthEndBusinessHours = null;
    
    /**
     * @var int|null $bandwidthPercentageDuringBusinessHours Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
    */
    private ?int $bandwidthPercentageDuringBusinessHours = null;
    
    /**
     * @var int|null $bandwidthPercentageOutsideBusinessHours Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
    */
    private ?int $bandwidthPercentageOutsideBusinessHours = null;
    
    /**
     * Instantiates a new deliveryOptimizationBandwidthBusinessHoursLimit and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationBandwidthBusinessHoursLimit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationBandwidthBusinessHoursLimit {
        return new DeliveryOptimizationBandwidthBusinessHoursLimit();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bandwidthBeginBusinessHours property value. Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     * @return int|null
    */
    public function getBandwidthBeginBusinessHours(): ?int {
        return $this->bandwidthBeginBusinessHours;
    }

    /**
     * Gets the bandwidthEndBusinessHours property value. Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     * @return int|null
    */
    public function getBandwidthEndBusinessHours(): ?int {
        return $this->bandwidthEndBusinessHours;
    }

    /**
     * Gets the bandwidthPercentageDuringBusinessHours property value. Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getBandwidthPercentageDuringBusinessHours(): ?int {
        return $this->bandwidthPercentageDuringBusinessHours;
    }

    /**
     * Gets the bandwidthPercentageOutsideBusinessHours property value. Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getBandwidthPercentageOutsideBusinessHours(): ?int {
        return $this->bandwidthPercentageOutsideBusinessHours;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bandwidthBeginBusinessHours' => function (ParseNode $n) use ($o) { $o->setBandwidthBeginBusinessHours($n->getIntegerValue()); },
            'bandwidthEndBusinessHours' => function (ParseNode $n) use ($o) { $o->setBandwidthEndBusinessHours($n->getIntegerValue()); },
            'bandwidthPercentageDuringBusinessHours' => function (ParseNode $n) use ($o) { $o->setBandwidthPercentageDuringBusinessHours($n->getIntegerValue()); },
            'bandwidthPercentageOutsideBusinessHours' => function (ParseNode $n) use ($o) { $o->setBandwidthPercentageOutsideBusinessHours($n->getIntegerValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bandwidthBeginBusinessHours', $this->bandwidthBeginBusinessHours);
        $writer->writeIntegerValue('bandwidthEndBusinessHours', $this->bandwidthEndBusinessHours);
        $writer->writeIntegerValue('bandwidthPercentageDuringBusinessHours', $this->bandwidthPercentageDuringBusinessHours);
        $writer->writeIntegerValue('bandwidthPercentageOutsideBusinessHours', $this->bandwidthPercentageOutsideBusinessHours);
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
     * Sets the bandwidthBeginBusinessHours property value. Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     *  @param int|null $value Value to set for the bandwidthBeginBusinessHours property.
    */
    public function setBandwidthBeginBusinessHours(?int $value ): void {
        $this->bandwidthBeginBusinessHours = $value;
    }

    /**
     * Sets the bandwidthEndBusinessHours property value. Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     *  @param int|null $value Value to set for the bandwidthEndBusinessHours property.
    */
    public function setBandwidthEndBusinessHours(?int $value ): void {
        $this->bandwidthEndBusinessHours = $value;
    }

    /**
     * Sets the bandwidthPercentageDuringBusinessHours property value. Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the bandwidthPercentageDuringBusinessHours property.
    */
    public function setBandwidthPercentageDuringBusinessHours(?int $value ): void {
        $this->bandwidthPercentageDuringBusinessHours = $value;
    }

    /**
     * Sets the bandwidthPercentageOutsideBusinessHours property value. Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the bandwidthPercentageOutsideBusinessHours property.
    */
    public function setBandwidthPercentageOutsideBusinessHours(?int $value ): void {
        $this->bandwidthPercentageOutsideBusinessHours = $value;
    }

}
