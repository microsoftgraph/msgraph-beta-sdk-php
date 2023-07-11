<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign a device management script to a group.
*/
class DeviceHealthScriptAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'runRemediationScript' => fn(ParseNode $n) => $o->setRunRemediationScript($n->getBooleanValue()),
            'runSchedule' => fn(ParseNode $n) => $o->setRunSchedule($n->getObjectValue([DeviceHealthScriptRunSchedule::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the runRemediationScript property value. Determine whether we want to run detection script only or run both detection script and remediation script
     * @return bool|null
    */
    public function getRunRemediationScript(): ?bool {
        $val = $this->getBackingStore()->get('runRemediationScript');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runRemediationScript'");
    }

    /**
     * Gets the runSchedule property value. Script run schedule for the target group
     * @return DeviceHealthScriptRunSchedule|null
    */
    public function getRunSchedule(): ?DeviceHealthScriptRunSchedule {
        $val = $this->getBackingStore()->get('runSchedule');
        if (is_null($val) || $val instanceof DeviceHealthScriptRunSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runSchedule'");
    }

    /**
     * Gets the target property value. The Azure Active Directory group we are targeting the script to
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentTarget) {
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('runRemediationScript', $this->getRunRemediationScript());
        $writer->writeObjectValue('runSchedule', $this->getRunSchedule());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the runRemediationScript property value. Determine whether we want to run detection script only or run both detection script and remediation script
     * @param bool|null $value Value to set for the runRemediationScript property.
    */
    public function setRunRemediationScript(?bool $value): void {
        $this->getBackingStore()->set('runRemediationScript', $value);
    }

    /**
     * Sets the runSchedule property value. Script run schedule for the target group
     * @param DeviceHealthScriptRunSchedule|null $value Value to set for the runSchedule property.
    */
    public function setRunSchedule(?DeviceHealthScriptRunSchedule $value): void {
        $this->getBackingStore()->set('runSchedule', $value);
    }

    /**
     * Sets the target property value. The Azure Active Directory group we are targeting the script to
     * @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
