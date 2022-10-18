<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementResourceAccessProfileAssignment extends Entity implements Parsable 
{
    /**
     * @var DeviceManagementResourceAccessProfileIntent|null $intent The administrator intent for the assignment of the profile.
    */
    private ?DeviceManagementResourceAccessProfileIntent $intent = null;
    
    /**
     * @var string|null $sourceId The identifier of the source of the assignment.
    */
    private ?string $sourceId = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target Base type for assignment targets.
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new deviceManagementResourceAccessProfileAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementResourceAccessProfileAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementResourceAccessProfileAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementResourceAccessProfileAssignment {
        return new DeviceManagementResourceAccessProfileAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => fn(ParseNode $n) => $o->setIntent($n->getEnumValue(DeviceManagementResourceAccessProfileIntent::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the intent property value. The administrator intent for the assignment of the profile.
     * @return DeviceManagementResourceAccessProfileIntent|null
    */
    public function getIntent(): ?DeviceManagementResourceAccessProfileIntent {
        return $this->intent;
    }

    /**
     * Gets the sourceId property value. The identifier of the source of the assignment.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. Base type for assignment targets.
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
        $writer->writeEnumValue('intent', $this->intent);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the intent property value. The administrator intent for the assignment of the profile.
     *  @param DeviceManagementResourceAccessProfileIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?DeviceManagementResourceAccessProfileIntent $value ): void {
        $this->intent = $value;
    }

    /**
     * Sets the sourceId property value. The identifier of the source of the assignment.
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the target property value. Base type for assignment targets.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
