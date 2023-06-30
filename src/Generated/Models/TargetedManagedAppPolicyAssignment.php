<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type for deployment of groups or apps.
*/
class TargetedManagedAppPolicyAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new targetedManagedAppPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the source property value. Represents source of assignment.
     * @return DeviceAndAppManagementAssignmentSource|null
    */
    public function getSource(): ?DeviceAndAppManagementAssignmentSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the sourceId property value. Identifier for resource used for deployment to a group
     * @return string|null
    */
    public function getSourceId(): ?string {
        $val = $this->getBackingStore()->get('sourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceId'");
    }

    /**
     * Gets the target property value. Identifier for deployment to a group or app
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
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the source property value. Represents source of assignment.
     * @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the sourceId property value. Identifier for resource used for deployment to a group
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

    /**
     * Sets the target property value. Identifier for deployment to a group or app
     * @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
