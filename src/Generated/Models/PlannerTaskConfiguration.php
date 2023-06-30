<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTaskConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerTaskConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskConfiguration {
        return new PlannerTaskConfiguration();
    }

    /**
     * Gets the editPolicy property value. Policy configuration for tasks created for the businessScenario when they are being changed outside of the scenario.
     * @return PlannerTaskPolicy|null
    */
    public function getEditPolicy(): ?PlannerTaskPolicy {
        $val = $this->getBackingStore()->get('editPolicy');
        if (is_null($val) || $val instanceof PlannerTaskPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editPolicy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'editPolicy' => fn(ParseNode $n) => $o->setEditPolicy($n->getObjectValue([PlannerTaskPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('editPolicy', $this->getEditPolicy());
    }

    /**
     * Sets the editPolicy property value. Policy configuration for tasks created for the businessScenario when they are being changed outside of the scenario.
     * @param PlannerTaskPolicy|null $value Value to set for the editPolicy property.
    */
    public function setEditPolicy(?PlannerTaskPolicy $value): void {
        $this->getBackingStore()->set('editPolicy', $value);
    }

}
