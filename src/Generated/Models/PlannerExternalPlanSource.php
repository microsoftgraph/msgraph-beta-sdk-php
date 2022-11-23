<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerExternalPlanSource extends PlannerPlanCreation implements Parsable 
{
    /**
     * Instantiates a new PlannerExternalPlanSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerExternalPlanSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerExternalPlanSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerExternalPlanSource {
        return new PlannerExternalPlanSource();
    }

    /**
     * Gets the contextScenarioId property value. The contextScenarioId property
     * @return string|null
    */
    public function getContextScenarioId(): ?string {
        return $this->getBackingStore()->get('contextScenarioId');
    }

    /**
     * Gets the externalContextId property value. The externalContextId property
     * @return string|null
    */
    public function getExternalContextId(): ?string {
        return $this->getBackingStore()->get('externalContextId');
    }

    /**
     * Gets the externalObjectId property value. The externalObjectId property
     * @return string|null
    */
    public function getExternalObjectId(): ?string {
        return $this->getBackingStore()->get('externalObjectId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contextScenarioId' => fn(ParseNode $n) => $o->setContextScenarioId($n->getStringValue()),
            'externalContextId' => fn(ParseNode $n) => $o->setExternalContextId($n->getStringValue()),
            'externalObjectId' => fn(ParseNode $n) => $o->setExternalObjectId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contextScenarioId', $this->getContextScenarioId());
        $writer->writeStringValue('externalContextId', $this->getExternalContextId());
        $writer->writeStringValue('externalObjectId', $this->getExternalObjectId());
    }

    /**
     * Sets the contextScenarioId property value. The contextScenarioId property
     *  @param string|null $value Value to set for the contextScenarioId property.
    */
    public function setContextScenarioId(?string $value): void {
        $this->getBackingStore()->set('contextScenarioId', $value);
    }

    /**
     * Sets the externalContextId property value. The externalContextId property
     *  @param string|null $value Value to set for the externalContextId property.
    */
    public function setExternalContextId(?string $value): void {
        $this->getBackingStore()->set('externalContextId', $value);
    }

    /**
     * Sets the externalObjectId property value. The externalObjectId property
     *  @param string|null $value Value to set for the externalObjectId property.
    */
    public function setExternalObjectId(?string $value): void {
        $this->getBackingStore()->set('externalObjectId', $value);
    }

}
