<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationAnalyticsUsagePoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationAnalyticsUsagePoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationAnalyticsUsagePoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationAnalyticsUsagePoint {
        return new ApplicationAnalyticsUsagePoint();
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
     * Gets the cloudAppsCount property value. The count attributed to cloud applications for the specified aggregation type.
     * @return int|null
    */
    public function getCloudAppsCount(): ?int {
        $val = $this->getBackingStore()->get('cloudAppsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudAppsCount'");
    }

    /**
     * Gets the enterpriseAppsCount property value. The count attributed to enterprise applications for the specified aggregation type.
     * @return int|null
    */
    public function getEnterpriseAppsCount(): ?int {
        $val = $this->getBackingStore()->get('enterpriseAppsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseAppsCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudAppsCount' => fn(ParseNode $n) => $o->setCloudAppsCount($n->getIntegerValue()),
            'enterpriseAppsCount' => fn(ParseNode $n) => $o->setEnterpriseAppsCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'timeStampDateTime' => fn(ParseNode $n) => $o->setTimeStampDateTime($n->getDateTimeValue()),
            'totalCount' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
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
     * Gets the timeStampDateTime property value. The date for which the aggregated data point represents.
     * @return DateTime|null
    */
    public function getTimeStampDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('timeStampDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeStampDateTime'");
    }

    /**
     * Gets the totalCount property value. The total count for the specified aggregation type (users, devices, or transactions).
     * @return int|null
    */
    public function getTotalCount(): ?int {
        $val = $this->getBackingStore()->get('totalCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cloudAppsCount', $this->getCloudAppsCount());
        $writer->writeIntegerValue('enterpriseAppsCount', $this->getEnterpriseAppsCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('timeStampDateTime', $this->getTimeStampDateTime());
        $writer->writeIntegerValue('totalCount', $this->getTotalCount());
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
     * Sets the cloudAppsCount property value. The count attributed to cloud applications for the specified aggregation type.
     * @param int|null $value Value to set for the cloudAppsCount property.
    */
    public function setCloudAppsCount(?int $value): void {
        $this->getBackingStore()->set('cloudAppsCount', $value);
    }

    /**
     * Sets the enterpriseAppsCount property value. The count attributed to enterprise applications for the specified aggregation type.
     * @param int|null $value Value to set for the enterpriseAppsCount property.
    */
    public function setEnterpriseAppsCount(?int $value): void {
        $this->getBackingStore()->set('enterpriseAppsCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the timeStampDateTime property value. The date for which the aggregated data point represents.
     * @param DateTime|null $value Value to set for the timeStampDateTime property.
    */
    public function setTimeStampDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('timeStampDateTime', $value);
    }

    /**
     * Sets the totalCount property value. The total count for the specified aggregation type (users, devices, or transactions).
     * @param int|null $value Value to set for the totalCount property.
    */
    public function setTotalCount(?int $value): void {
        $this->getBackingStore()->set('totalCount', $value);
    }

}
