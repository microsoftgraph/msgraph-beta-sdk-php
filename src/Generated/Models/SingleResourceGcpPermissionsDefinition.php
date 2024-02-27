<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SingleResourceGcpPermissionsDefinition extends PermissionsDefinition implements Parsable 
{
    /**
     * Instantiates a new SingleResourceGcpPermissionsDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.singleResourceGcpPermissionsDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SingleResourceGcpPermissionsDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SingleResourceGcpPermissionsDefinition {
        return new SingleResourceGcpPermissionsDefinition();
    }

    /**
     * Gets the actionInfo property value. The actionInfo property
     * @return GcpPermissionsDefinitionAction|null
    */
    public function getActionInfo(): ?GcpPermissionsDefinitionAction {
        $val = $this->getBackingStore()->get('actionInfo');
        if (is_null($val) || $val instanceof GcpPermissionsDefinitionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionInfo' => fn(ParseNode $n) => $o->setActionInfo($n->getObjectValue([GcpPermissionsDefinitionAction::class, 'createFromDiscriminatorValue'])),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceId property value. Identifier for the resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actionInfo', $this->getActionInfo());
        $writer->writeStringValue('resourceId', $this->getResourceId());
    }

    /**
     * Sets the actionInfo property value. The actionInfo property
     * @param GcpPermissionsDefinitionAction|null $value Value to set for the actionInfo property.
    */
    public function setActionInfo(?GcpPermissionsDefinitionAction $value): void {
        $this->getBackingStore()->set('actionInfo', $value);
    }

    /**
     * Sets the resourceId property value. Identifier for the resource.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

}
