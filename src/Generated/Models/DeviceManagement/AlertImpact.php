<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\KeyValuePair;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AlertImpact implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new alertImpact and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertImpact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertImpact {
        return new AlertImpact();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the aggregationType property value. The aggregation type of the impact. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @return AggregationType|null
    */
    public function getAggregationType(): ?AggregationType {
        $val = $this->getBackingStore()->get('aggregationType');
        if (is_null($val) || $val instanceof AggregationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregationType'");
    }

    /**
     * Gets the alertImpactDetails property value. The detail information of the impact. For example, if the Frontline Cloud PCs near concurrency limit alert is triggered, the details contain the impacted Frontline license SKU name, such as Windows 365 Frontline 2 vCPU/8GB/128GB, and the corresponding impacted value.
     * @return array<KeyValuePair>|null
    */
    public function getAlertImpactDetails(): ?array {
        $val = $this->getBackingStore()->get('alertImpactDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertImpactDetails'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregationType' => fn(ParseNode $n) => $o->setAggregationType($n->getEnumValue(AggregationType::class)),
            'alertImpactDetails' => fn(ParseNode $n) => $o->setAlertImpactDetails($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
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
     * Gets the value property value. The number value of the impact. For the aggregation types of count and affectedCloudPcCount, the value indicates the number of affected instances. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. For the aggregation types of percentage and affectedCloudPcPercentage, the value indicates the percent of affected instances. For example, 12 affectedCloudPcPercentage means that 12% of Cloud PCs are affected.
     * @return int|null
    */
    public function getValue(): ?int {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('aggregationType', $this->getAggregationType());
        $writer->writeCollectionOfObjectValues('alertImpactDetails', $this->getAlertImpactDetails());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('value', $this->getValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the aggregationType property value. The aggregation type of the impact. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @param AggregationType|null $value Value to set for the aggregationType property.
    */
    public function setAggregationType(?AggregationType $value): void {
        $this->getBackingStore()->set('aggregationType', $value);
    }

    /**
     * Sets the alertImpactDetails property value. The detail information of the impact. For example, if the Frontline Cloud PCs near concurrency limit alert is triggered, the details contain the impacted Frontline license SKU name, such as Windows 365 Frontline 2 vCPU/8GB/128GB, and the corresponding impacted value.
     * @param array<KeyValuePair>|null $value Value to set for the alertImpactDetails property.
    */
    public function setAlertImpactDetails(?array $value): void {
        $this->getBackingStore()->set('alertImpactDetails', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the value property value. The number value of the impact. For the aggregation types of count and affectedCloudPcCount, the value indicates the number of affected instances. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. For the aggregation types of percentage and affectedCloudPcPercentage, the value indicates the percent of affected instances. For example, 12 affectedCloudPcPercentage means that 12% of Cloud PCs are affected.
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
