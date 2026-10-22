<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\RetrieveCloudPcPerformanceMetricsReport;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\CloudPcPerformanceMetricNamesType;
use Microsoft\Graph\Beta\Generated\Models\CloudPcVmPerformanceMetricsTimeRange;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RetrieveCloudPcPerformanceMetricsReportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RetrieveCloudPcPerformanceMetricsReportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetrieveCloudPcPerformanceMetricsReportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetrieveCloudPcPerformanceMetricsReportPostRequestBody {
        return new RetrieveCloudPcPerformanceMetricsReportPostRequestBody();
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
     * Gets the cloudPcId property value. The cloudPcId property
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        $val = $this->getBackingStore()->get('cloudPcId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcId'");
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'metricNames' => fn(ParseNode $n) => $o->setMetricNames($n->getEnumValue(CloudPcPerformanceMetricNamesType::class)),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'timeRange' => fn(ParseNode $n) => $o->setTimeRange($n->getEnumValue(CloudPcVmPerformanceMetricsTimeRange::class)),
        ];
    }

    /**
     * Gets the metricNames property value. The metricNames property
     * @return CloudPcPerformanceMetricNamesType|null
    */
    public function getMetricNames(): ?CloudPcPerformanceMetricNamesType {
        $val = $this->getBackingStore()->get('metricNames');
        if (is_null($val) || $val instanceof CloudPcPerformanceMetricNamesType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricNames'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the timeRange property value. The timeRange property
     * @return CloudPcVmPerformanceMetricsTimeRange|null
    */
    public function getTimeRange(): ?CloudPcVmPerformanceMetricsTimeRange {
        $val = $this->getBackingStore()->get('timeRange');
        if (is_null($val) || $val instanceof CloudPcVmPerformanceMetricsTimeRange) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeRange'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cloudPcId', $this->getCloudPcId());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeEnumValue('metricNames', $this->getMetricNames());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('timeRange', $this->getTimeRange());
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
     * Sets the cloudPcId property value. The cloudPcId property
     * @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value): void {
        $this->getBackingStore()->set('cloudPcId', $value);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the metricNames property value. The metricNames property
     * @param CloudPcPerformanceMetricNamesType|null $value Value to set for the metricNames property.
    */
    public function setMetricNames(?CloudPcPerformanceMetricNamesType $value): void {
        $this->getBackingStore()->set('metricNames', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the timeRange property value. The timeRange property
     * @param CloudPcVmPerformanceMetricsTimeRange|null $value Value to set for the timeRange property.
    */
    public function setTimeRange(?CloudPcVmPerformanceMetricsTimeRange $value): void {
        $this->getBackingStore()->set('timeRange', $value);
    }

}
