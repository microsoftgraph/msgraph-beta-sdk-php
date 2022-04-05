<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicyAssignment extends Entity 
{
    /** @var DeviceAndAppManagementAssignmentSource|null $source The assignment source for the device compliance policy, direct or parcel/policySet. Possible values are: direct, policySets. */
    private ?DeviceAndAppManagementAssignmentSource $source = null;
    
    /** @var string|null $sourceId The identifier of the source of the assignment. */
    private ?string $sourceId = null;
    
    /** @var DeviceAndAppManagementAssignmentTarget|null $target The assignment target for the DeviceManagementConfigurationPolicy. */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationPolicyAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationPolicyAssignment {
        return new DeviceManagementConfigurationPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'source' => function (self $o, ParseNode $n) { $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)); },
            'sourceId' => function (self $o, ParseNode $n) { $o->setSourceId($n->getStringValue()); },
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(DeviceAndAppManagementAssignmentTarget::class)); },
        ]);
    }

    /**
     * Gets the source property value. The assignment source for the device compliance policy, direct or parcel/policySet. Possible values are: direct, policySets.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        return $this->source;
    }

    /**
     * Gets the sourceId property value. The identifier of the source of the assignment.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the target property value. The assignment target for the DeviceManagementConfigurationPolicy.
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
     * Sets the source property value. The assignment source for the device compliance policy, direct or parcel/policySet. Possible values are: direct, policySets.
     *  @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceId property value. The identifier of the source of the assignment.
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the target property value. The assignment target for the DeviceManagementConfigurationPolicy.
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
