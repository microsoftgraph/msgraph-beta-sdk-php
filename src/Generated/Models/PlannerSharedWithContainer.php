<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerSharedWithContainer extends PlannerPlanContainer implements Parsable 
{
    /**
     * Instantiates a new PlannerSharedWithContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerSharedWithContainer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerSharedWithContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerSharedWithContainer {
        return new PlannerSharedWithContainer();
    }

    /**
     * Gets the accessLevel property value. The accessLevel property
     * @return PlannerPlanAccessLevel|null
    */
    public function getAccessLevel(): ?PlannerPlanAccessLevel {
        return $this->getBackingStore()->get('accessLevel');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessLevel' => fn(ParseNode $n) => $o->setAccessLevel($n->getEnumValue(PlannerPlanAccessLevel::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessLevel', $this->getAccessLevel());
    }

    /**
     * Sets the accessLevel property value. The accessLevel property
     * @param PlannerPlanAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?PlannerPlanAccessLevel $value): void {
        $this->getBackingStore()->set('accessLevel', $value);
    }

}
