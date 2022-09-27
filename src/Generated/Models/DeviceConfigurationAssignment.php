<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationAssignment extends Entity implements Parsable 
{
    /**
     * @var DeviceConfigAssignmentIntent|null $intent The admin intent to apply or remove the profile. Possible values are: apply, remove.
    */
    private ?DeviceConfigAssignmentIntent $intent = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentSource|null $source Represents source of assignment.
    */
    private ?DeviceAndAppManagementAssignmentSource $source = null;
    
    /**
     * @var string|null $sourceId The identifier of the source of the assignment. This property is read-only.
    */
    private ?string $sourceId = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target The assignment target for the device configuration.
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new deviceConfigurationAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceConfigurationAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationAssignment {
        return new DeviceConfigurationAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => function (ParseNode $n) use ($o) { $o->setIntent($n->getEnumValue(DeviceConfigAssignmentIntent::class)); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the intent property value. The admin intent to apply or remove the profile. Possible values are: apply, remove.
     * @return DeviceConfigAssignmentIntent|null
    */
    public function getIntent(): ?DeviceConfigAssignmentIntent {
        return $this->intent;
    }

    /**
     * Gets the source property value. Represents source of assignment.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        return $this->source;
    }

    /**
     * Gets the sourceId property value. The identifier of the source of the assignment. This property is read-only.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. The assignment target for the device configuration.
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
        $writer->writeEnumValue('source', $this->source);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the intent property value. The admin intent to apply or remove the profile. Possible values are: apply, remove.
     *  @param DeviceConfigAssignmentIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?DeviceConfigAssignmentIntent $value ): void {
        $this->intent = $value;
    }

    /**
     * Sets the source property value. Represents source of assignment.
     *  @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the target property value. The assignment target for the device configuration.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
