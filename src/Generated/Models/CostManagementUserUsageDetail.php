<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * One user's raw usage detail, distinct from the processed report at userUsageRecords.
*/
class CostManagementUserUsageDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CostManagementUserUsageDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserUsageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserUsageDetail {
        return new CostManagementUserUsageDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this user over the requested window, boundedto the latest processed watermark rather than reprocessed. Read-only.
     * @return float|null
    */
    public function getConsumedQuantity(): ?float {
        $val = $this->getBackingStore()->get('consumedQuantity');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumedQuantity'");
    }

    /**
     * Gets the dataStatus property value. Freshness of the source activity data this detail was computed from, when the native sourcereports an as-of timestamp for the window. Null rather than fabricated when the source hasnone to report. Read-only.
     * @return CostManagementUsageDataStatus|null
    */
    public function getDataStatus(): ?CostManagementUsageDataStatus {
        $val = $this->getBackingStore()->get('dataStatus');
        if (is_null($val) || $val instanceof CostManagementUsageDataStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consumedQuantity' => fn(ParseNode $n) => $o->setConsumedQuantity($n->getFloatValue()),
            'dataStatus' => fn(ParseNode $n) => $o->setDataStatus($n->getObjectValue([CostManagementUsageDataStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([CostManagementUserUsageServiceDetail::class, 'createFromDiscriminatorValue'])),
            'sessionCount' => fn(ParseNode $n) => $o->setSessionCount($n->getIntegerValue()),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([CostManagementUserUsageSessionDetail::class, 'createFromDiscriminatorValue'])),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the services property value. This user's raw consumption, split by governed service. The same native grouped result isalso addressable directly at the services navigation collection.
     * @return array<CostManagementUserUsageServiceDetail>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserUsageServiceDetail::class);
            /** @var array<CostManagementUserUsageServiceDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Gets the sessionCount property value. Count of billable-flagged activity sessions, bounded to the latest processed watermark, thatcontributed to consumedQuantity. Excludes non-billable activity; the timestamp window and rawsource distinguish this count from the processed completed-day report. Read-only.
     * @return int|null
    */
    public function getSessionCount(): ?int {
        $val = $this->getBackingStore()->get('sessionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionCount'");
    }

    /**
     * Gets the sessions property value. This user's raw usage grouped by session identifiers represented by the native source.Activity without a session identifier may be omitted even when included in the parent total;child quantities need not sum to the parent's consumedQuantity. Also available as a direct collection.
     * @return array<CostManagementUserUsageSessionDetail>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserUsageSessionDetail::class);
            /** @var array<CostManagementUserUsageSessionDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Gets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @return CostManagementUnit|null
    */
    public function getUnit(): ?CostManagementUnit {
        $val = $this->getBackingStore()->get('unit');
        if (is_null($val) || $val instanceof CostManagementUnit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unit'");
    }

    /**
     * Gets the userId property value. The identifier of the user this detail covers. Read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
        $writer->writeEnumValue('unit', $this->getUnit());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this user over the requested window, boundedto the latest processed watermark rather than reprocessed. Read-only.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the dataStatus property value. Freshness of the source activity data this detail was computed from, when the native sourcereports an as-of timestamp for the window. Null rather than fabricated when the source hasnone to report. Read-only.
     * @param CostManagementUsageDataStatus|null $value Value to set for the dataStatus property.
    */
    public function setDataStatus(?CostManagementUsageDataStatus $value): void {
        $this->getBackingStore()->set('dataStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the services property value. This user's raw consumption, split by governed service. The same native grouped result isalso addressable directly at the services navigation collection.
     * @param array<CostManagementUserUsageServiceDetail>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

    /**
     * Sets the sessionCount property value. Count of billable-flagged activity sessions, bounded to the latest processed watermark, thatcontributed to consumedQuantity. Excludes non-billable activity; the timestamp window and rawsource distinguish this count from the processed completed-day report. Read-only.
     * @param int|null $value Value to set for the sessionCount property.
    */
    public function setSessionCount(?int $value): void {
        $this->getBackingStore()->set('sessionCount', $value);
    }

    /**
     * Sets the sessions property value. This user's raw usage grouped by session identifiers represented by the native source.Activity without a session identifier may be omitted even when included in the parent total;child quantities need not sum to the parent's consumedQuantity. Also available as a direct collection.
     * @param array<CostManagementUserUsageSessionDetail>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user this detail covers. Read-only.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
