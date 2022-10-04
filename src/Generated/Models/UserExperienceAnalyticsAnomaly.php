<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAnomaly extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $anomalyFirstOccurrenceDateTime Indicates the first occurrence date and time for the anomaly.
    */
    private ?DateTime $anomalyFirstOccurrenceDateTime = null;
    
    /**
     * @var string|null $anomalyId The unique identifier of the anomaly.
    */
    private ?string $anomalyId = null;
    
    /**
     * @var DateTime|null $anomalyLatestOccurrenceDateTime Indicates the latest occurrence date and time for the anomaly.
    */
    private ?DateTime $anomalyLatestOccurrenceDateTime = null;
    
    /**
     * @var string|null $anomalyName The name of the anomaly.
    */
    private ?string $anomalyName = null;
    
    /**
     * @var UserExperienceAnalyticsAnomalyType|null $anomalyType Indicates the category of the anomaly. Eg: anomaly type can be device, application, stop error, driver or other.
    */
    private ?UserExperienceAnalyticsAnomalyType $anomalyType = null;
    
    /**
     * @var string|null $assetName The name of the application or module that caused the anomaly.
    */
    private ?string $assetName = null;
    
    /**
     * @var string|null $assetPublisher The publisher of the application or module that caused the anomaly.
    */
    private ?string $assetPublisher = null;
    
    /**
     * @var string|null $assetVersion The version of the application or module that caused the anomaly.
    */
    private ?string $assetVersion = null;
    
    /**
     * @var string|null $detectionModelId The unique identifier of the anomaly detection model.
    */
    private ?string $detectionModelId = null;
    
    /**
     * @var int|null $deviceImpactedCount The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
    */
    private ?int $deviceImpactedCount = null;
    
    /**
     * @var string|null $issueId The unique identifier of the anomaly detection model.
    */
    private ?string $issueId = null;
    
    /**
     * @var UserExperienceAnalyticsAnomalySeverity|null $severity Indicates the severity of the anomaly. Eg: anomaly severity can be high, medium, low, informational or other.
    */
    private ?UserExperienceAnalyticsAnomalySeverity $severity = null;
    
    /**
     * @var UserExperienceAnalyticsAnomalyState|null $state Indicates the state of the anomaly. Eg: anomaly severity can be new, active, disabled, removed or other.
    */
    private ?UserExperienceAnalyticsAnomalyState $state = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAnomaly and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAnomaly');
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
        return $this->anomalyFirstOccurrenceDateTime;
    }

    /**
     * Gets the anomalyId property value. The unique identifier of the anomaly.
     * @return string|null
    */
    public function getAnomalyId(): ?string {
        return $this->anomalyId;
    }

    /**
     * Gets the anomalyLatestOccurrenceDateTime property value. Indicates the latest occurrence date and time for the anomaly.
     * @return DateTime|null
    */
    public function getAnomalyLatestOccurrenceDateTime(): ?DateTime {
        return $this->anomalyLatestOccurrenceDateTime;
    }

    /**
     * Gets the anomalyName property value. The name of the anomaly.
     * @return string|null
    */
    public function getAnomalyName(): ?string {
        return $this->anomalyName;
    }

    /**
     * Gets the anomalyType property value. Indicates the category of the anomaly. Eg: anomaly type can be device, application, stop error, driver or other.
     * @return UserExperienceAnalyticsAnomalyType|null
    */
    public function getAnomalyType(): ?UserExperienceAnalyticsAnomalyType {
        return $this->anomalyType;
    }

    /**
     * Gets the assetName property value. The name of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetName(): ?string {
        return $this->assetName;
    }

    /**
     * Gets the assetPublisher property value. The publisher of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetPublisher(): ?string {
        return $this->assetPublisher;
    }

    /**
     * Gets the assetVersion property value. The version of the application or module that caused the anomaly.
     * @return string|null
    */
    public function getAssetVersion(): ?string {
        return $this->assetVersion;
    }

    /**
     * Gets the detectionModelId property value. The unique identifier of the anomaly detection model.
     * @return string|null
    */
    public function getDetectionModelId(): ?string {
        return $this->detectionModelId;
    }

    /**
     * Gets the deviceImpactedCount property value. The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceImpactedCount(): ?int {
        return $this->deviceImpactedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anomalyFirstOccurrenceDateTime' => function (ParseNode $n) use ($o) { $o->setAnomalyFirstOccurrenceDateTime($n->getDateTimeValue()); },
            'anomalyId' => function (ParseNode $n) use ($o) { $o->setAnomalyId($n->getStringValue()); },
            'anomalyLatestOccurrenceDateTime' => function (ParseNode $n) use ($o) { $o->setAnomalyLatestOccurrenceDateTime($n->getDateTimeValue()); },
            'anomalyName' => function (ParseNode $n) use ($o) { $o->setAnomalyName($n->getStringValue()); },
            'anomalyType' => function (ParseNode $n) use ($o) { $o->setAnomalyType($n->getEnumValue(UserExperienceAnalyticsAnomalyType::class)); },
            'assetName' => function (ParseNode $n) use ($o) { $o->setAssetName($n->getStringValue()); },
            'assetPublisher' => function (ParseNode $n) use ($o) { $o->setAssetPublisher($n->getStringValue()); },
            'assetVersion' => function (ParseNode $n) use ($o) { $o->setAssetVersion($n->getStringValue()); },
            'detectionModelId' => function (ParseNode $n) use ($o) { $o->setDetectionModelId($n->getStringValue()); },
            'deviceImpactedCount' => function (ParseNode $n) use ($o) { $o->setDeviceImpactedCount($n->getIntegerValue()); },
            'issueId' => function (ParseNode $n) use ($o) { $o->setIssueId($n->getStringValue()); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(UserExperienceAnalyticsAnomalySeverity::class)); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(UserExperienceAnalyticsAnomalyState::class)); },
        ]);
    }

    /**
     * Gets the issueId property value. The unique identifier of the anomaly detection model.
     * @return string|null
    */
    public function getIssueId(): ?string {
        return $this->issueId;
    }

    /**
     * Gets the severity property value. Indicates the severity of the anomaly. Eg: anomaly severity can be high, medium, low, informational or other.
     * @return UserExperienceAnalyticsAnomalySeverity|null
    */
    public function getSeverity(): ?UserExperienceAnalyticsAnomalySeverity {
        return $this->severity;
    }

    /**
     * Gets the state property value. Indicates the state of the anomaly. Eg: anomaly severity can be new, active, disabled, removed or other.
     * @return UserExperienceAnalyticsAnomalyState|null
    */
    public function getState(): ?UserExperienceAnalyticsAnomalyState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('anomalyFirstOccurrenceDateTime', $this->anomalyFirstOccurrenceDateTime);
        $writer->writeStringValue('anomalyId', $this->anomalyId);
        $writer->writeDateTimeValue('anomalyLatestOccurrenceDateTime', $this->anomalyLatestOccurrenceDateTime);
        $writer->writeStringValue('anomalyName', $this->anomalyName);
        $writer->writeEnumValue('anomalyType', $this->anomalyType);
        $writer->writeStringValue('assetName', $this->assetName);
        $writer->writeStringValue('assetPublisher', $this->assetPublisher);
        $writer->writeStringValue('assetVersion', $this->assetVersion);
        $writer->writeStringValue('detectionModelId', $this->detectionModelId);
        $writer->writeIntegerValue('deviceImpactedCount', $this->deviceImpactedCount);
        $writer->writeStringValue('issueId', $this->issueId);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the anomalyFirstOccurrenceDateTime property value. Indicates the first occurrence date and time for the anomaly.
     *  @param DateTime|null $value Value to set for the anomalyFirstOccurrenceDateTime property.
    */
    public function setAnomalyFirstOccurrenceDateTime(?DateTime $value ): void {
        $this->anomalyFirstOccurrenceDateTime = $value;
    }

    /**
     * Sets the anomalyId property value. The unique identifier of the anomaly.
     *  @param string|null $value Value to set for the anomalyId property.
    */
    public function setAnomalyId(?string $value ): void {
        $this->anomalyId = $value;
    }

    /**
     * Sets the anomalyLatestOccurrenceDateTime property value. Indicates the latest occurrence date and time for the anomaly.
     *  @param DateTime|null $value Value to set for the anomalyLatestOccurrenceDateTime property.
    */
    public function setAnomalyLatestOccurrenceDateTime(?DateTime $value ): void {
        $this->anomalyLatestOccurrenceDateTime = $value;
    }

    /**
     * Sets the anomalyName property value. The name of the anomaly.
     *  @param string|null $value Value to set for the anomalyName property.
    */
    public function setAnomalyName(?string $value ): void {
        $this->anomalyName = $value;
    }

    /**
     * Sets the anomalyType property value. Indicates the category of the anomaly. Eg: anomaly type can be device, application, stop error, driver or other.
     *  @param UserExperienceAnalyticsAnomalyType|null $value Value to set for the anomalyType property.
    */
    public function setAnomalyType(?UserExperienceAnalyticsAnomalyType $value ): void {
        $this->anomalyType = $value;
    }

    /**
     * Sets the assetName property value. The name of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetName property.
    */
    public function setAssetName(?string $value ): void {
        $this->assetName = $value;
    }

    /**
     * Sets the assetPublisher property value. The publisher of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetPublisher property.
    */
    public function setAssetPublisher(?string $value ): void {
        $this->assetPublisher = $value;
    }

    /**
     * Sets the assetVersion property value. The version of the application or module that caused the anomaly.
     *  @param string|null $value Value to set for the assetVersion property.
    */
    public function setAssetVersion(?string $value ): void {
        $this->assetVersion = $value;
    }

    /**
     * Sets the detectionModelId property value. The unique identifier of the anomaly detection model.
     *  @param string|null $value Value to set for the detectionModelId property.
    */
    public function setDetectionModelId(?string $value ): void {
        $this->detectionModelId = $value;
    }

    /**
     * Sets the deviceImpactedCount property value. The number of devices impacted by the anomaly. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the deviceImpactedCount property.
    */
    public function setDeviceImpactedCount(?int $value ): void {
        $this->deviceImpactedCount = $value;
    }

    /**
     * Sets the issueId property value. The unique identifier of the anomaly detection model.
     *  @param string|null $value Value to set for the issueId property.
    */
    public function setIssueId(?string $value ): void {
        $this->issueId = $value;
    }

    /**
     * Sets the severity property value. Indicates the severity of the anomaly. Eg: anomaly severity can be high, medium, low, informational or other.
     *  @param UserExperienceAnalyticsAnomalySeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?UserExperienceAnalyticsAnomalySeverity $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the state property value. Indicates the state of the anomaly. Eg: anomaly severity can be new, active, disabled, removed or other.
     *  @param UserExperienceAnalyticsAnomalyState|null $value Value to set for the state property.
    */
    public function setState(?UserExperienceAnalyticsAnomalyState $value ): void {
        $this->state = $value;
    }

}
