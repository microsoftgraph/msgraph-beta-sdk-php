<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptAssignment extends Entity implements Parsable 
{
    /**
     * @var bool|null $runRemediationScript Determine whether we want to run detection script only or run both detection script and remediation script
    */
    private ?bool $runRemediationScript = null;
    
    /**
     * @var DeviceHealthScriptRunSchedule|null $runSchedule Script run schedule for the target group
    */
    private ?DeviceHealthScriptRunSchedule $runSchedule = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target The Azure Active Directory group we are targeting the script to
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new deviceHealthScriptAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptAssignment {
        return new DeviceHealthScriptAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'runRemediationScript' => function (ParseNode $n) use ($o) { $o->setRunRemediationScript($n->getBooleanValue()); },
            'runSchedule' => function (ParseNode $n) use ($o) { $o->setRunSchedule($n->getObjectValue(array(DeviceHealthScriptRunSchedule::class, 'createFromDiscriminatorValue'))); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the runRemediationScript property value. Determine whether we want to run detection script only or run both detection script and remediation script
     * @return bool|null
    */
    public function getRunRemediationScript(): ?bool {
        return $this->runRemediationScript;
    }

    /**
     * Gets the runSchedule property value. Script run schedule for the target group
     * @return DeviceHealthScriptRunSchedule|null
    */
    public function getRunSchedule(): ?DeviceHealthScriptRunSchedule {
        return $this->runSchedule;
    }

    /**
     * Gets the target property value. The Azure Active Directory group we are targeting the script to
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('runRemediationScript', $this->runRemediationScript);
        $writer->writeObjectValue('runSchedule', $this->runSchedule);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the runRemediationScript property value. Determine whether we want to run detection script only or run both detection script and remediation script
     *  @param bool|null $value Value to set for the runRemediationScript property.
    */
    public function setRunRemediationScript(?bool $value ): void {
        $this->runRemediationScript = $value;
    }

    /**
     * Sets the runSchedule property value. Script run schedule for the target group
     *  @param DeviceHealthScriptRunSchedule|null $value Value to set for the runSchedule property.
    */
    public function setRunSchedule(?DeviceHealthScriptRunSchedule $value ): void {
        $this->runSchedule = $value;
    }

    /**
     * Sets the target property value. The Azure Active Directory group we are targeting the script to
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
