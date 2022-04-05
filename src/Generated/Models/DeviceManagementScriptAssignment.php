<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptAssignment extends Entity 
{
    /** @var DeviceAndAppManagementAssignmentTarget|null $target The Id of the Azure Active Directory group we are targeting the script to. */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new deviceManagementScriptAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptAssignment {
        return new DeviceManagementScriptAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(DeviceAndAppManagementAssignmentTarget::class)); },
        ]);
    }

    /**
     * Gets the target property value. The Id of the Azure Active Directory group we are targeting the script to.
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
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the target property value. The Id of the Azure Active Directory group we are targeting the script to.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
