<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The device configuration assignment entity assigns an AAD group to a specific device configuration.
*/
class DeviceConfigurationAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceConfigurationAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'intent' => fn(ParseNode $n) => $o->setIntent($n->getEnumValue(DeviceConfigAssignmentIntent::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(DeviceAndAppManagementAssignmentSource::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the intent property value. The admin intent to apply or remove the profile. Possible values are: apply, remove.
     * @return DeviceConfigAssignmentIntent|null
    */
    public function getIntent(): ?DeviceConfigAssignmentIntent {
        $val = $this->getBackingStore()->get('intent');
        if (is_null($val) || $val instanceof DeviceConfigAssignmentIntent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intent'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
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
     * Gets the sourceId property value. The identifier of the source of the assignment. This property is read-only.
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
     * Gets the target property value. The assignment target for the device configuration.
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
        $writer->writeEnumValue('intent', $this->getIntent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the intent property value. The admin intent to apply or remove the profile. Possible values are: apply, remove.
     * @param DeviceConfigAssignmentIntent|null $value Value to set for the intent property.
    */
    public function setIntent(?DeviceConfigAssignmentIntent $value): void {
        $this->getBackingStore()->set('intent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. Represents source of assignment.
     * @param DeviceAndAppManagementAssignmentSource|null $value Value to set for the source property.
    */
    public function setSource(?DeviceAndAppManagementAssignmentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the sourceId property value. The identifier of the source of the assignment. This property is read-only.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

    /**
     * Sets the target property value. The assignment target for the device configuration.
     * @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
