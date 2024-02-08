<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessScenarioTask extends PlannerTask implements Parsable 
{
    /**
     * Instantiates a new BusinessScenarioTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessScenarioTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessScenarioTask {
        return new BusinessScenarioTask();
    }

    /**
     * Gets the businessScenarioProperties property value. Scenario-specific properties of the task. externalObjectId and externalBucketId properties must be specified when creating a task.
     * @return BusinessScenarioProperties|null
    */
    public function getBusinessScenarioProperties(): ?BusinessScenarioProperties {
        $val = $this->getBackingStore()->get('businessScenarioProperties');
        if (is_null($val) || $val instanceof BusinessScenarioProperties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessScenarioProperties'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'businessScenarioProperties' => fn(ParseNode $n) => $o->setBusinessScenarioProperties($n->getObjectValue([BusinessScenarioProperties::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([BusinessScenarioTaskTargetBase::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the target property value. Target of the task that specifies where the task should be placed. Must be specified when creating a task.
     * @return BusinessScenarioTaskTargetBase|null
    */
    public function getTarget(): ?BusinessScenarioTaskTargetBase {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof BusinessScenarioTaskTargetBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('businessScenarioProperties', $this->getBusinessScenarioProperties());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the businessScenarioProperties property value. Scenario-specific properties of the task. externalObjectId and externalBucketId properties must be specified when creating a task.
     * @param BusinessScenarioProperties|null $value Value to set for the businessScenarioProperties property.
    */
    public function setBusinessScenarioProperties(?BusinessScenarioProperties $value): void {
        $this->getBackingStore()->set('businessScenarioProperties', $value);
    }

    /**
     * Sets the target property value. Target of the task that specifies where the task should be placed. Must be specified when creating a task.
     * @param BusinessScenarioTaskTargetBase|null $value Value to set for the target property.
    */
    public function setTarget(?BusinessScenarioTaskTargetBase $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
