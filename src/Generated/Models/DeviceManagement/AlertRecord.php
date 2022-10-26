<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertRecord extends Entity implements Parsable 
{
    /**
     * @var AlertImpact|null $alertImpact The impact of the alert event. Consists of a number followed by the aggregation type. For example, 6 Count and 12 AffectedCloudPcPercentage.
    */
    private ?AlertImpact $alertImpact = null;
    
    /**
     * @var string|null $alertRuleId The corresponding ID of the alert rule.
    */
    private ?string $alertRuleId = null;
    
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var DateTime|null $detectedDateTime The date and time when the alert event was detected. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $detectedDateTime = null;
    
    /**
     * @var string|null $displayName The display name of the alert record.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The date and time when the alert record was last updated. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var DateTime|null $resolvedDateTime The date and time when the alert event was resolved. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $resolvedDateTime = null;
    
    /**
     * @var RuleSeverityType|null $severity The severity of the alert event. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
    */
    private ?RuleSeverityType $severity = null;
    
    /**
     * @var AlertStatusType|null $status The status of the alert record. The possible values are: active, resolved, unknownFutureValue.
    */
    private ?AlertStatusType $status = null;
    
    /**
     * Instantiates a new alertRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagement.alertRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertRecord {
        return new AlertRecord();
    }

    /**
     * Gets the alertImpact property value. The impact of the alert event. Consists of a number followed by the aggregation type. For example, 6 Count and 12 AffectedCloudPcPercentage.
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        return $this->alertImpact;
    }

    /**
     * Gets the alertRuleId property value. The corresponding ID of the alert rule.
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        return $this->alertRuleId;
    }

    /**
     * Gets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        return $this->alertRuleTemplate;
    }

    /**
     * Gets the detectedDateTime property value. The date and time when the alert event was detected. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        return $this->detectedDateTime;
    }

    /**
     * Gets the displayName property value. The display name of the alert record.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertImpact' => fn(ParseNode $n) => $o->setAlertImpact($n->getObjectValue([AlertImpact::class, 'createFromDiscriminatorValue'])),
            'alertRuleId' => fn(ParseNode $n) => $o->setAlertRuleId($n->getStringValue()),
            'alertRuleTemplate' => fn(ParseNode $n) => $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)),
            'detectedDateTime' => fn(ParseNode $n) => $o->setDetectedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'resolvedDateTime' => fn(ParseNode $n) => $o->setResolvedDateTime($n->getDateTimeValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(RuleSeverityType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AlertStatusType::class)),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time when the alert record was last updated. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the resolvedDateTime property value. The date and time when the alert event was resolved. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getResolvedDateTime(): ?DateTime {
        return $this->resolvedDateTime;
    }

    /**
     * Gets the severity property value. The severity of the alert event. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        return $this->severity;
    }

    /**
     * Gets the status property value. The status of the alert record. The possible values are: active, resolved, unknownFutureValue.
     * @return AlertStatusType|null
    */
    public function getStatus(): ?AlertStatusType {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertImpact', $this->alertImpact);
        $writer->writeStringValue('alertRuleId', $this->alertRuleId);
        $writer->writeEnumValue('alertRuleTemplate', $this->alertRuleTemplate);
        $writer->writeDateTimeValue('detectedDateTime', $this->detectedDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeDateTimeValue('resolvedDateTime', $this->resolvedDateTime);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the alertImpact property value. The impact of the alert event. Consists of a number followed by the aggregation type. For example, 6 Count and 12 AffectedCloudPcPercentage.
     *  @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value ): void {
        $this->alertImpact = $value;
    }

    /**
     * Sets the alertRuleId property value. The corresponding ID of the alert rule.
     *  @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value ): void {
        $this->alertRuleId = $value;
    }

    /**
     * Sets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the detectedDateTime property value. The date and time when the alert event was detected. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value ): void {
        $this->detectedDateTime = $value;
    }

    /**
     * Sets the displayName property value. The display name of the alert record.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time when the alert record was last updated. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the resolvedDateTime property value. The date and time when the alert event was resolved. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the resolvedDateTime property.
    */
    public function setResolvedDateTime(?DateTime $value ): void {
        $this->resolvedDateTime = $value;
    }

    /**
     * Sets the severity property value. The severity of the alert event. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the status property value. The status of the alert record. The possible values are: active, resolved, unknownFutureValue.
     *  @param AlertStatusType|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatusType $value ): void {
        $this->status = $value;
    }

}
