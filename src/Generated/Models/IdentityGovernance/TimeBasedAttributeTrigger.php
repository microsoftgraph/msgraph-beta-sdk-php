<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeBasedAttributeTrigger extends WorkflowExecutionTrigger implements Parsable 
{
    /**
     * @var int|null $offsetInDays How many days before or after the time-based attribute specified the workflow should trigger. For example, if the attribute is employeeHireDate and offsetInDays is -1, then the workflow should trigger one day before the employee hire date. The value can range between -60 and 60 days.
    */
    private ?int $offsetInDays = null;
    
    /**
     * @var WorkflowTriggerTimeBasedAttribute|null $timeBasedAttribute The timeBasedAttribute property
    */
    private ?WorkflowTriggerTimeBasedAttribute $timeBasedAttribute = null;
    
    /**
     * Instantiates a new TimeBasedAttributeTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.timeBasedAttributeTrigger');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeBasedAttributeTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeBasedAttributeTrigger {
        return new TimeBasedAttributeTrigger();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'offsetInDays' => function (ParseNode $n) use ($o) { $o->setOffsetInDays($n->getIntegerValue()); },
            'timeBasedAttribute' => function (ParseNode $n) use ($o) { $o->setTimeBasedAttribute($n->getEnumValue(WorkflowTriggerTimeBasedAttribute::class)); },
        ]);
    }

    /**
     * Gets the offsetInDays property value. How many days before or after the time-based attribute specified the workflow should trigger. For example, if the attribute is employeeHireDate and offsetInDays is -1, then the workflow should trigger one day before the employee hire date. The value can range between -60 and 60 days.
     * @return int|null
    */
    public function getOffsetInDays(): ?int {
        return $this->offsetInDays;
    }

    /**
     * Gets the timeBasedAttribute property value. The timeBasedAttribute property
     * @return WorkflowTriggerTimeBasedAttribute|null
    */
    public function getTimeBasedAttribute(): ?WorkflowTriggerTimeBasedAttribute {
        return $this->timeBasedAttribute;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('offsetInDays', $this->offsetInDays);
        $writer->writeEnumValue('timeBasedAttribute', $this->timeBasedAttribute);
    }

    /**
     * Sets the offsetInDays property value. How many days before or after the time-based attribute specified the workflow should trigger. For example, if the attribute is employeeHireDate and offsetInDays is -1, then the workflow should trigger one day before the employee hire date. The value can range between -60 and 60 days.
     *  @param int|null $value Value to set for the offsetInDays property.
    */
    public function setOffsetInDays(?int $value ): void {
        $this->offsetInDays = $value;
    }

    /**
     * Sets the timeBasedAttribute property value. The timeBasedAttribute property
     *  @param WorkflowTriggerTimeBasedAttribute|null $value Value to set for the timeBasedAttribute property.
    */
    public function setTimeBasedAttribute(?WorkflowTriggerTimeBasedAttribute $value ): void {
        $this->timeBasedAttribute = $value;
    }

}
