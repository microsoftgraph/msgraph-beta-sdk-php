<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsPermissionsDefinition extends PermissionsDefinition implements Parsable 
{
    /**
     * Instantiates a new AwsPermissionsDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsPermissionsDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsPermissionsDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsPermissionsDefinition {
        return new AwsPermissionsDefinition();
    }

    /**
     * Gets the actionInfo property value. The actionInfo property
     * @return AwsPermissionsDefinitionAction|null
    */
    public function getActionInfo(): ?AwsPermissionsDefinitionAction {
        $val = $this->getBackingStore()->get('actionInfo');
        if (is_null($val) || $val instanceof AwsPermissionsDefinitionAction) {
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
            'actionInfo' => fn(ParseNode $n) => $o->setActionInfo($n->getObjectValue([AwsPermissionsDefinitionAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actionInfo', $this->getActionInfo());
    }

    /**
     * Sets the actionInfo property value. The actionInfo property
     * @param AwsPermissionsDefinitionAction|null $value Value to set for the actionInfo property.
    */
    public function setActionInfo(?AwsPermissionsDefinitionAction $value): void {
        $this->getBackingStore()->set('actionInfo', $value);
    }

}
