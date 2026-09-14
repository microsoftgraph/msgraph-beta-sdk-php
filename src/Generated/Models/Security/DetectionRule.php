<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectionRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new DetectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetectionRule {
        return new DetectionRule();
    }

    /**
     * Gets the createdBy property value. Name of the user or application that created the rule. Read-only. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp of rule creation. Read-only. Supports $filter (eq, ne, not, le, ge, lt, gt) and $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. A user-supplied description of the detection rule. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the detectionAction property value. The detectionAction property
     * @return DetectionAction|null
    */
    public function getDetectionAction(): ?DetectionAction {
        $val = $this->getBackingStore()->get('detectionAction');
        if (is_null($val) || $val instanceof DetectionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionAction'");
    }

    /**
     * Gets the detectorId property value. Internal detector identifier. Deprecated. This property will be removed from this resource on 2026-10-01.
     * @return string|null
    */
    public function getDetectorId(): ?string {
        $val = $this->getBackingStore()->get('detectorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectorId'");
    }

    /**
     * Gets the displayName property value. The display name of the rule. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains) and $orderby.
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
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectionAction' => fn(ParseNode $n) => $o->setDetectionAction($n->getObjectValue([DetectionAction::class, 'createFromDiscriminatorValue'])),
            'detectorId' => fn(ParseNode $n) => $o->setDetectorId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastRunDetails' => fn(ParseNode $n) => $o->setLastRunDetails($n->getObjectValue([RunDetails::class, 'createFromDiscriminatorValue'])),
            'queryCondition' => fn(ParseNode $n) => $o->setQueryCondition($n->getObjectValue([QueryCondition::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RuleSchedule::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DetectionRuleStatus::class)),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the rule is turned on for the tenant. Supports $filter (eq, ne, not). Deprecated. Use status instead. This property will be removed from this resource on 2026-10-01.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the lastModifiedBy property value. Name of the user or application that last updated the rule. Read-only. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of when the rule was last updated. Read-only. Supports $filter (eq, ne, not, le, ge, lt, gt) and $orderby.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the lastRunDetails property value. Runtime execution details for the most recent rule run. Supports $filter on the following nested properties:String: lastRunDetails/failureReason  supports eq, ne, not, in, startsWith, endsWith, contains.DateTimeOffset: lastRunDetails/lastRunDateTime  supports eq, ne, not, le, ge, lt, gt.Enum: lastRunDetails/status, lastRunDetails/errorCode  each supports eq, ne, not, in.Deprecated. This property will be removed from this resource on 2026-10-01. Runtime execution details aren't exposed in the v1.0 API.
     * @return RunDetails|null
    */
    public function getLastRunDetails(): ?RunDetails {
        $val = $this->getBackingStore()->get('lastRunDetails');
        if (is_null($val) || $val instanceof RunDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRunDetails'");
    }

    /**
     * Gets the queryCondition property value. The queryCondition property
     * @return QueryCondition|null
    */
    public function getQueryCondition(): ?QueryCondition {
        $val = $this->getBackingStore()->get('queryCondition');
        if (is_null($val) || $val instanceof QueryCondition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'queryCondition'");
    }

    /**
     * Gets the schedule property value. The schedule property
     * @return RuleSchedule|null
    */
    public function getSchedule(): ?RuleSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof RuleSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the status property value. The status property
     * @return DetectionRuleStatus|null
    */
    public function getStatus(): ?DetectionRuleStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DetectionRuleStatus) {
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
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('detectionAction', $this->getDetectionAction());
        $writer->writeStringValue('detectorId', $this->getDetectorId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('lastRunDetails', $this->getLastRunDetails());
        $writer->writeObjectValue('queryCondition', $this->getQueryCondition());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdBy property value. Name of the user or application that created the rule. Read-only. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of rule creation. Read-only. Supports $filter (eq, ne, not, le, ge, lt, gt) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. A user-supplied description of the detection rule. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectionAction property value. The detectionAction property
     * @param DetectionAction|null $value Value to set for the detectionAction property.
    */
    public function setDetectionAction(?DetectionAction $value): void {
        $this->getBackingStore()->set('detectionAction', $value);
    }

    /**
     * Sets the detectorId property value. Internal detector identifier. Deprecated. This property will be removed from this resource on 2026-10-01.
     * @param string|null $value Value to set for the detectorId property.
    */
    public function setDetectorId(?string $value): void {
        $this->getBackingStore()->set('detectorId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the rule. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains) and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the rule is turned on for the tenant. Supports $filter (eq, ne, not). Deprecated. Use status instead. This property will be removed from this resource on 2026-10-01.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Name of the user or application that last updated the rule. Read-only. Supports $filter (eq, ne, not, in, startsWith, endsWith, contains).
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of when the rule was last updated. Read-only. Supports $filter (eq, ne, not, le, ge, lt, gt) and $orderby.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastRunDetails property value. Runtime execution details for the most recent rule run. Supports $filter on the following nested properties:String: lastRunDetails/failureReason  supports eq, ne, not, in, startsWith, endsWith, contains.DateTimeOffset: lastRunDetails/lastRunDateTime  supports eq, ne, not, le, ge, lt, gt.Enum: lastRunDetails/status, lastRunDetails/errorCode  each supports eq, ne, not, in.Deprecated. This property will be removed from this resource on 2026-10-01. Runtime execution details aren't exposed in the v1.0 API.
     * @param RunDetails|null $value Value to set for the lastRunDetails property.
    */
    public function setLastRunDetails(?RunDetails $value): void {
        $this->getBackingStore()->set('lastRunDetails', $value);
    }

    /**
     * Sets the queryCondition property value. The queryCondition property
     * @param QueryCondition|null $value Value to set for the queryCondition property.
    */
    public function setQueryCondition(?QueryCondition $value): void {
        $this->getBackingStore()->set('queryCondition', $value);
    }

    /**
     * Sets the schedule property value. The schedule property
     * @param RuleSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RuleSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param DetectionRuleStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DetectionRuleStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
