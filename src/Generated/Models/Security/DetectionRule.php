<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectionRule extends ProtectionRule implements Parsable 
{
    /**
     * Instantiates a new detectionRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.detectionRule');
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionAction' => fn(ParseNode $n) => $o->setDetectionAction($n->getObjectValue([DetectionAction::class, 'createFromDiscriminatorValue'])),
            'lastRunDetails' => fn(ParseNode $n) => $o->setLastRunDetails($n->getObjectValue([RunDetails::class, 'createFromDiscriminatorValue'])),
            'queryCondition' => fn(ParseNode $n) => $o->setQueryCondition($n->getObjectValue([QueryCondition::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RuleSchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastRunDetails property value. The lastRunDetails property
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('detectionAction', $this->getDetectionAction());
        $writer->writeObjectValue('lastRunDetails', $this->getLastRunDetails());
        $writer->writeObjectValue('queryCondition', $this->getQueryCondition());
        $writer->writeObjectValue('schedule', $this->getSchedule());
    }

    /**
     * Sets the detectionAction property value. The detectionAction property
     * @param DetectionAction|null $value Value to set for the detectionAction property.
    */
    public function setDetectionAction(?DetectionAction $value): void {
        $this->getBackingStore()->set('detectionAction', $value);
    }

    /**
     * Sets the lastRunDetails property value. The lastRunDetails property
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

}
