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
     * Instantiates a new alertRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the alertImpact property value. The impact of the alert event. Consists of a list of key-value pair and a number followed by the aggregation type. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. 12 affectedCloudPcPercentage means 12% of Cloud PCs are affected. The list of key-value pair indicates the details of the alert impact.
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        $val = $this->getBackingStore()->get('alertImpact');
        if (is_null($val) || $val instanceof AlertImpact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertImpact'");
    }

    /**
     * Gets the alertRuleId property value. The corresponding ID of the alert rule.
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        $val = $this->getBackingStore()->get('alertRuleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRuleId'");
    }

    /**
     * Gets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue, cloudPcInGracePeriodScenario. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: cloudPcInGracePeriodScenario.
     * @return AlertRecord_alertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRecord_alertRuleTemplate {
        $val = $this->getBackingStore()->get('alertRuleTemplate');
        if (is_null($val) || $val instanceof AlertRecord_alertRuleTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRuleTemplate'");
    }

    /**
     * Gets the detectedDateTime property value. The date and time when the alert event was detected. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('detectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedDateTime'");
    }

    /**
     * Gets the displayName property value. The display name of the alert record.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertImpact' => fn(ParseNode $n) => $o->setAlertImpact($n->getObjectValue([AlertImpact::class, 'createFromDiscriminatorValue'])),
            'alertRuleId' => fn(ParseNode $n) => $o->setAlertRuleId($n->getStringValue()),
            'alertRuleTemplate' => fn(ParseNode $n) => $o->setAlertRuleTemplate($n->getEnumValue(AlertRecord_alertRuleTemplate::class)),
            'detectedDateTime' => fn(ParseNode $n) => $o->setDetectedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'resolvedDateTime' => fn(ParseNode $n) => $o->setResolvedDateTime($n->getDateTimeValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertRecord_severity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AlertRecord_status::class)),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time when the alert record was last updated. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the resolvedDateTime property value. The date and time when the alert event was resolved. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getResolvedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('resolvedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedDateTime'");
    }

    /**
     * Gets the severity property value. The severity of the alert event. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @return AlertRecord_severity|null
    */
    public function getSeverity(): ?AlertRecord_severity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof AlertRecord_severity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the status property value. The status of the alert record. The possible values are: active, resolved, unknownFutureValue.
     * @return AlertRecord_status|null
    */
    public function getStatus(): ?AlertRecord_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof AlertRecord_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertImpact', $this->getAlertImpact());
        $writer->writeStringValue('alertRuleId', $this->getAlertRuleId());
        $writer->writeEnumValue('alertRuleTemplate', $this->getAlertRuleTemplate());
        $writer->writeDateTimeValue('detectedDateTime', $this->getDetectedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeDateTimeValue('resolvedDateTime', $this->getResolvedDateTime());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the alertImpact property value. The impact of the alert event. Consists of a list of key-value pair and a number followed by the aggregation type. For example, 6 affectedCloudPcCount means that 6 Cloud PCs are affected. 12 affectedCloudPcPercentage means 12% of Cloud PCs are affected. The list of key-value pair indicates the details of the alert impact.
     * @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value): void {
        $this->getBackingStore()->set('alertImpact', $value);
    }

    /**
     * Sets the alertRuleId property value. The corresponding ID of the alert rule.
     * @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value): void {
        $this->getBackingStore()->set('alertRuleId', $value);
    }

    /**
     * Sets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue, cloudPcInGracePeriodScenario. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: cloudPcInGracePeriodScenario.
     * @param AlertRecord_alertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRecord_alertRuleTemplate $value): void {
        $this->getBackingStore()->set('alertRuleTemplate', $value);
    }

    /**
     * Sets the detectedDateTime property value. The date and time when the alert event was detected. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('detectedDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the alert record.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time when the alert record was last updated. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the resolvedDateTime property value. The date and time when the alert event was resolved. The Timestamp type represents date and time information using ISO 8601 format. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the resolvedDateTime property.
    */
    public function setResolvedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('resolvedDateTime', $value);
    }

    /**
     * Sets the severity property value. The severity of the alert event. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @param AlertRecord_severity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertRecord_severity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the status property value. The status of the alert record. The possible values are: active, resolved, unknownFutureValue.
     * @param AlertRecord_status|null $value Value to set for the status property.
    */
    public function setStatus(?AlertRecord_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
