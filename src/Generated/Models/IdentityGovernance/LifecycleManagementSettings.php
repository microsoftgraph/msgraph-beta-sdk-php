<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LifecycleManagementSettings extends Entity implements Parsable 
{
    /**
     * @var int|null $workflowScheduleIntervalInHours The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
    */
    private ?int $workflowScheduleIntervalInHours = null;
    
    /**
     * Instantiates a new lifecycleManagementSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.lifecycleManagementSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecycleManagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecycleManagementSettings {
        return new LifecycleManagementSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'workflowScheduleIntervalInHours' => function (ParseNode $n) use ($o) { $o->setWorkflowScheduleIntervalInHours($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the workflowScheduleIntervalInHours property value. The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
     * @return int|null
    */
    public function getWorkflowScheduleIntervalInHours(): ?int {
        return $this->workflowScheduleIntervalInHours;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('workflowScheduleIntervalInHours', $this->workflowScheduleIntervalInHours);
    }

    /**
     * Sets the workflowScheduleIntervalInHours property value. The interval in hours at which all workflows running in the tenant should be scheduled for execution. This interval has a minimum value of 1 and a maximum value of 24. The default value is 3 hours.
     *  @param int|null $value Value to set for the workflowScheduleIntervalInHours property.
    */
    public function setWorkflowScheduleIntervalInHours(?int $value ): void {
        $this->workflowScheduleIntervalInHours = $value;
    }

}
