<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeliveryOptimizationBandwidthBusinessHoursLimit implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deliveryOptimizationBandwidthBusinessHoursLimit and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bandwidthBeginBusinessHours property value. Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     * @return int|null
    */
    public function getBandwidthBeginBusinessHours(): ?int {
        return $this->getBackingStore()->get('bandwidthBeginBusinessHours');
    }

    /**
     * Gets the bandwidthEndBusinessHours property value. Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     * @return int|null
    */
    public function getBandwidthEndBusinessHours(): ?int {
        return $this->getBackingStore()->get('bandwidthEndBusinessHours');
    }

    /**
     * Gets the bandwidthPercentageDuringBusinessHours property value. Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getBandwidthPercentageDuringBusinessHours(): ?int {
        return $this->getBackingStore()->get('bandwidthPercentageDuringBusinessHours');
    }

    /**
     * Gets the bandwidthPercentageOutsideBusinessHours property value. Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
     * @return int|null
    */
    public function getBandwidthPercentageOutsideBusinessHours(): ?int {
        return $this->getBackingStore()->get('bandwidthPercentageOutsideBusinessHours');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bandwidthBeginBusinessHours' => fn(ParseNode $n) => $o->setBandwidthBeginBusinessHours($n->getIntegerValue()),
            'bandwidthEndBusinessHours' => fn(ParseNode $n) => $o->setBandwidthEndBusinessHours($n->getIntegerValue()),
            'bandwidthPercentageDuringBusinessHours' => fn(ParseNode $n) => $o->setBandwidthPercentageDuringBusinessHours($n->getIntegerValue()),
            'bandwidthPercentageOutsideBusinessHours' => fn(ParseNode $n) => $o->setBandwidthPercentageOutsideBusinessHours($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bandwidthBeginBusinessHours', $this->getBandwidthBeginBusinessHours());
        $writer->writeIntegerValue('bandwidthEndBusinessHours', $this->getBandwidthEndBusinessHours());
        $writer->writeIntegerValue('bandwidthPercentageDuringBusinessHours', $this->getBandwidthPercentageDuringBusinessHours());
        $writer->writeIntegerValue('bandwidthPercentageOutsideBusinessHours', $this->getBandwidthPercentageOutsideBusinessHours());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bandwidthBeginBusinessHours property value. Specifies the beginning of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     *  @param int|null $value Value to set for the bandwidthBeginBusinessHours property.
    */
    public function setBandwidthBeginBusinessHours(?int $value): void {
        $this->getBackingStore()->set('bandwidthBeginBusinessHours', $value);
    }

    /**
     * Sets the bandwidthEndBusinessHours property value. Specifies the end of business hours using a 24-hour clock (0-23). Valid values 0 to 23
     *  @param int|null $value Value to set for the bandwidthEndBusinessHours property.
    */
    public function setBandwidthEndBusinessHours(?int $value): void {
        $this->getBackingStore()->set('bandwidthEndBusinessHours', $value);
    }

    /**
     * Sets the bandwidthPercentageDuringBusinessHours property value. Specifies the percentage of bandwidth to limit during business hours (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the bandwidthPercentageDuringBusinessHours property.
    */
    public function setBandwidthPercentageDuringBusinessHours(?int $value): void {
        $this->getBackingStore()->set('bandwidthPercentageDuringBusinessHours', $value);
    }

    /**
     * Sets the bandwidthPercentageOutsideBusinessHours property value. Specifies the percentage of bandwidth to limit outsidse business hours (0-100). Valid values 0 to 100
     *  @param int|null $value Value to set for the bandwidthPercentageOutsideBusinessHours property.
    */
    public function setBandwidthPercentageOutsideBusinessHours(?int $value): void {
        $this->getBackingStore()->set('bandwidthPercentageOutsideBusinessHours', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
