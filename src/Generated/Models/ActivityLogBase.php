<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivityLogBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new ActivityLogBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityLogBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityLogBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.backupPolicyActivityLog': return new BackupPolicyActivityLog();
                case '#microsoft.graph.dynamicRuleActivityLog': return new DynamicRuleActivityLog();
                case '#microsoft.graph.offboardingActivityLog': return new OffboardingActivityLog();
                case '#microsoft.graph.restoreTaskActivityLog': return new RestoreTaskActivityLog();
            }
        }
        return new ActivityLogBase();
    }

    /**
     * Gets the activityType property value. The activityType property
     * @return ActivityLogOperationType|null
    */
    public function getActivityType(): ?ActivityLogOperationType {
        $val = $this->getBackingStore()->get('activityType');
        if (is_null($val) || $val instanceof ActivityLogOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityType'");
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * Gets the eventDateTime property value. The eventDateTime property
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getEnumValue(ActivityLogOperationType::class)),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'performedBy' => fn(ParseNode $n) => $o->setPerformedBy($n->getStringValue()),
            'resultStatus' => fn(ParseNode $n) => $o->setResultStatus($n->getEnumValue(ActivityLogResultStatus::class)),
            'serviceType' => fn(ParseNode $n) => $o->setServiceType($n->getEnumValue(ServiceType::class)),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(ActivityLogSeverity::class)),
        ]);
    }

    /**
     * Gets the performedBy property value. The performedBy property
     * @return string|null
    */
    public function getPerformedBy(): ?string {
        $val = $this->getBackingStore()->get('performedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'performedBy'");
    }

    /**
     * Gets the resultStatus property value. The resultStatus property
     * @return ActivityLogResultStatus|null
    */
    public function getResultStatus(): ?ActivityLogResultStatus {
        $val = $this->getBackingStore()->get('resultStatus');
        if (is_null($val) || $val instanceof ActivityLogResultStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultStatus'");
    }

    /**
     * Gets the serviceType property value. The serviceType property
     * @return ServiceType|null
    */
    public function getServiceType(): ?ServiceType {
        $val = $this->getBackingStore()->get('serviceType');
        if (is_null($val) || $val instanceof ServiceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceType'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return ActivityLogSeverity|null
    */
    public function getSeverity(): ?ActivityLogSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof ActivityLogSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activityType', $this->getActivityType());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('performedBy', $this->getPerformedBy());
        $writer->writeEnumValue('resultStatus', $this->getResultStatus());
        $writer->writeEnumValue('serviceType', $this->getServiceType());
        $writer->writeEnumValue('severity', $this->getSeverity());
    }

    /**
     * Sets the activityType property value. The activityType property
     * @param ActivityLogOperationType|null $value Value to set for the activityType property.
    */
    public function setActivityType(?ActivityLogOperationType $value): void {
        $this->getBackingStore()->set('activityType', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the eventDateTime property value. The eventDateTime property
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the performedBy property value. The performedBy property
     * @param string|null $value Value to set for the performedBy property.
    */
    public function setPerformedBy(?string $value): void {
        $this->getBackingStore()->set('performedBy', $value);
    }

    /**
     * Sets the resultStatus property value. The resultStatus property
     * @param ActivityLogResultStatus|null $value Value to set for the resultStatus property.
    */
    public function setResultStatus(?ActivityLogResultStatus $value): void {
        $this->getBackingStore()->set('resultStatus', $value);
    }

    /**
     * Sets the serviceType property value. The serviceType property
     * @param ServiceType|null $value Value to set for the serviceType property.
    */
    public function setServiceType(?ServiceType $value): void {
        $this->getBackingStore()->set('serviceType', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param ActivityLogSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?ActivityLogSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
