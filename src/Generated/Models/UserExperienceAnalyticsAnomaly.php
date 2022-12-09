<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAnomaly extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsAnomaly and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAnomaly
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAnomaly {
        return new UserExperienceAnalyticsAnomaly();
    }

    /**
     * Gets the anomalyFirstOccurrenceDateTime property value. Indicates the first occurrence date and time for the anomaly.
     * @return DateTime|null
    */
    public function getAnomalyFirstOccurrenceDateTime(): ?DateTime {
        return $this->getBackingStore()->get('anomalyFirstOccurrenceDateTime');
    }

    /**
     * Gets the anomalyId property value. The unique identifier of the anomaly.
     * @return string|null
    */
    public function getAnomalyId(): ?string {
        return $this->getBackingStore()->get('anomalyId');
    }

    /**
     * Gets the anomalyLatestOccurrenceDateTime property value. Indicates the latest occurrence date and time for the anomaly.
     * @return DateTime|null
    */
    public function getAnomalyLatestOccurrenceDateTime(): ?DateTime {
        return $this->getBackingStore()->get('anomalyLatestOccurrenceDateTime');
    }

    /**
     * Gets the anomalyName property value. The name of the anomaly.
     * @return string|null
    */
    public function getAnomalyName(): ?string {
        return $this->getBackingStore()->get('anomalyName');
    }

    /**
     * Gets the anomalyType property value. Indicates the category of the anomaly. Eg: anomaly type can be device, application, stop error, driver or other.
     * @return UserExperienceAnalyticsAnomalyType|null
    */
    public function getAnomalyType(): ?UserExperienceAnalyticsAnomalyType {
        return $this->getBackingStore()->get('anomalyType');
    }

    /**
     * Gets the assetName property value. The name of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetName(): ?string {
        return $this->getBackingStore()->get('assetName');
    }

    /**
     * Gets the assetPublisher property value. The publisher of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetPublisher(): ?string {
        return $this->getBackingStore()->get('assetPublisher');
    }

    /**
     * Gets the assetVersion property value. The version of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetVersion(): ?string {
        return $this->getBackingStore()->get('assetVersion');
    }

    /**
     * Gets the detectionModelId property value. The unique identifier of the anomaly detection model.
     * @return string|null
    */
    public function getDetectionModelId(): ?string {
        return $this->getBackingStore()->get('detectionModelId');
    }

    /**
     * Gets the deviceImpactedCount property value. The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceImpactedCount(): ?int {
        return $this->getBackingStore()->get('deviceImpactedCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anomalyFirstOccurrenceDateTime' => fn(ParseNode $n) => $o->setAnomalyFirstOccurrenceDateTime($n->getDateTimeValue()),
            'anomalyId' => fn(ParseNode $n) => $o->setAnomalyId($n->getStringValue()),
            'anomalyLatestOccurrenceDateTime' => fn(ParseNode $n) => $o->setAnomalyLatestOccurrenceDateTime($n->getDateTimeValue()),
            'anomalyName' => fn(ParseNode $n) => $o->setAnomalyName($n->getStringValue()),
            'anomalyType' => fn(ParseNode $n) => $o->setAnomalyType($n->getEnumValue(UserExperienceAnalyticsAnomalyType::class)),
            'assetName' => fn(ParseNode $n) => $o->setAssetName($n->getStringValue()),
            'assetPublisher' => fn(ParseNode $n) => $o->setAssetPublisher($n->getStringValue()),
            'assetVersion' => fn(ParseNode $n) => $o->setAssetVersion($n->getStringValue()),
            'detectionModelId' => fn(ParseNode $n) => $o->setDetectionModelId($n->getStringValue()),
            'deviceImpactedCount' => fn(ParseNode $n) => $o->setDeviceImpactedCount($n->getIntegerValue()),
            'issueId' => fn(ParseNode $n) => $o->setIssueId($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(UserExperienceAnalyticsAnomalySeverity::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(UserExperienceAnalyticsAnomalyState::class)),
        ]);
    }

    /**
     * Gets the issueId property value. The unique identifier of the anomaly detection model.
     * @return string|null
    */
    public function getIssueId(): ?string {
        return $this->getBackingStore()->get('issueId');
    }

    /**
     * Gets the severity property value. Indicates the severity of the anomaly. Eg: anomaly severity can be high, medium, low, informational or other.
     * @return UserExperienceAnalyticsAnomalySeverity|null
    */
    public function getSeverity(): ?UserExperienceAnalyticsAnomalySeverity {
        return $this->getBackingStore()->get('severity');
    }

    /**
     * Gets the state property value. Indicates the state of the anomaly. Eg: anomaly severity can be new, active, disabled, removed or other.
     * @return UserExperienceAnalyticsAnomalyState|null
    */
    public function getState(): ?UserExperienceAnalyticsAnomalyState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('anomalyFirstOccurrenceDateTime', $this->getAnomalyFirstOccurrenceDateTime());
        $writer->writeStringValue('anomalyId', $this->getAnomalyId());
        $writer->writeDateTimeValue('anomalyLatestOccurrenceDateTime', $this->getAnomalyLatestOccurrenceDateTime());
        $writer->writeStringValue('anomalyName', $this->getAnomalyName());
        $writer->writeEnumValue('anomalyType', $this->getAnomalyType());
        $writer->writeStringValue('assetName', $this->getAssetName());
        $writer->writeStringValue('assetPublisher', $this->getAssetPublisher());
        $writer->writeStringValue('assetVersion', $this->getAssetVersion());
        $writer->writeStringValue('detectionModelId', $this->getDetectionModelId());
        $writer->writeIntegerValue('deviceImpactedCount', $this->getDeviceImpactedCount());
        $writer->writeStringValue('issueId', $this->getIssueId());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the anomalyFirstOccurrenceDateTime property value. Indicates the first occurrence date and time for the anomaly.
     *  @param DateTime|null $value Value to set for the anomalyFirstOccurrenceDateTime property.
    */
    public function setAnomalyFirstOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('anomalyFirstOccurrenceDateTime', $value);
    }

    /**
     * Sets the anomalyId property value. The unique identifier of the anomaly.
     *  @param string|null $value Value to set for the anomalyId property.
    */
    public function setAnomalyId(?string $value): void {
        $this->getBackingStore()->set('anomalyId', $value);
    }

    /**
     * Sets the anomalyLatestOccurrenceDateTime property value. Indicates the latest occurrence date and time for the anomaly.
     *  @param DateTime|null $value Value to set for the anomalyLatestOccurrenceDateTime property.
    */
    public function setAnomalyLatestOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('anomalyLatestOccurrenceDateTime', $value);
    }

    /**
     * Sets the anomalyName property value. The name of the anomaly.
     *  @param string|null $value Value to set for the anomalyName property.
    */
    public function setAnomalyName(?string $value): void {
        $this->getBackingStore()->set('anomalyName', $value);
    }

    /**
     * Sets the anomalyType property value. Indicates the category of the anomaly. Eg: anomaly type can be device, application, stop error, driver or other.
     *  @param UserExperienceAnalyticsAnomalyType|null $value Value to set for the anomalyType property.
    */
    public function setAnomalyType(?UserExperienceAnalyticsAnomalyType $value): void {
        $this->getBackingStore()->set('anomalyType', $value);
    }

    /**
     * Sets the assetName property value. The name of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetName property.
    */
    public function setAssetName(?string $value): void {
        $this->getBackingStore()->set('assetName', $value);
    }

    /**
     * Sets the assetPublisher property value. The publisher of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetPublisher property.
    */
    public function setAssetPublisher(?string $value): void {
        $this->getBackingStore()->set('assetPublisher', $value);
    }

    /**
     * Sets the assetVersion property value. The version of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetVersion property.
    */
    public function setAssetVersion(?string $value): void {
        $this->getBackingStore()->set('assetVersion', $value);
    }

    /**
     * Sets the detectionModelId property value. The unique identifier of the anomaly detection model.
     *  @param string|null $value Value to set for the detectionModelId property.
    */
    public function setDetectionModelId(?string $value): void {
        $this->getBackingStore()->set('detectionModelId', $value);
    }

    /**
     * Sets the deviceImpactedCount property value. The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the deviceImpactedCount property.
    */
    public function setDeviceImpactedCount(?int $value): void {
        $this->getBackingStore()->set('deviceImpactedCount', $value);
    }

    /**
     * Sets the issueId property value. The unique identifier of the anomaly detection model.
     *  @param string|null $value Value to set for the issueId property.
    */
    public function setIssueId(?string $value): void {
        $this->getBackingStore()->set('issueId', $value);
    }

    /**
     * Sets the severity property value. Indicates the severity of the anomaly. Eg: anomaly severity can be high, medium, low, informational or other.
     *  @param UserExperienceAnalyticsAnomalySeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?UserExperienceAnalyticsAnomalySeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the state property value. Indicates the state of the anomaly. Eg: anomaly severity can be new, active, disabled, removed or other.
     *  @param UserExperienceAnalyticsAnomalyState|null $value Value to set for the state property.
    */
    public function setState(?UserExperienceAnalyticsAnomalyState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
