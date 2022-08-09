<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppPolicyAssignment extends Entity implements Parsable 
{
    /**
     * @var DeviceAndAppManagementAssignmentSource|null $source Represents source of assignment.
    */
    private ?DeviceAndAppManagementAssignmentSource $source = null;
    
    /**
     * @var string|null $sourceId Identifier for resource used for deployment to a group
    */
    private ?string $sourceId = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target Identifier for deployment to a group or app
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new targetedManagedAppPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.targetedManagedAppPolicyAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppPolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppPolicyAssignment {
        return new TargetedManagedAppPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)); },
            'sourceId' => function (ParseNode $n) use ($o) { $o->setSourceId($n->getStringValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the source property value. Represents source of assignment.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        return $this->source;
    }

    /**
     * Gets the sourceId property value. Identifier for resource used for deployment to a group
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. Identifier for deployment to a group or app
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
        $writer->writeEnumValue('source', $this->source);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the source property value. Represents source of assignment.
     *  @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceId property value. Identifier for resource used for deployment to a group
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the target property value. Identifier for deployment to a group or app
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
