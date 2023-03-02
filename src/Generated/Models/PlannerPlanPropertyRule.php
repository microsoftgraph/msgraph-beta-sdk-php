<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlanPropertyRule extends PlannerPropertyRule implements Parsable 
{
    /**
     * Instantiates a new PlannerPlanPropertyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerPlanPropertyRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlanPropertyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlanPropertyRule {
        return new PlannerPlanPropertyRule();
    }

    /**
     * Gets the buckets property value. The buckets property
     * @return array<string>|null
    */
    public function getBuckets(): ?array {
        return $this->getBackingStore()->get('buckets');
    }

    /**
     * Gets the categoryDescriptions property value. The categoryDescriptions property
     * @return PlannerFieldRules|null
    */
    public function getCategoryDescriptions(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('categoryDescriptions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfPrimitiveValues()),
            'categoryDescriptions' => fn(ParseNode $n) => $o->setCategoryDescriptions($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfPrimitiveValues()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getObjectValue([PlannerFieldRules::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tasks property value. The tasks property
     * @return array<string>|null
    */
    public function getTasks(): ?array {
        return $this->getBackingStore()->get('tasks');
    }

    /**
     * Gets the title property value. The title property
     * @return PlannerFieldRules|null
    */
    public function getTitle(): ?PlannerFieldRules {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('buckets', $this->getBuckets());
        $writer->writeObjectValue('categoryDescriptions', $this->getCategoryDescriptions());
        $writer->writeCollectionOfPrimitiveValues('tasks', $this->getTasks());
        $writer->writeObjectValue('title', $this->getTitle());
    }

    /**
     * Sets the buckets property value. The buckets property
     * @param array<string>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the categoryDescriptions property value. The categoryDescriptions property
     * @param PlannerFieldRules|null $value Value to set for the categoryDescriptions property.
    */
    public function setCategoryDescriptions(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('categoryDescriptions', $value);
    }

    /**
     * Sets the tasks property value. The tasks property
     * @param array<string>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

    /**
     * Sets the title property value. The title property
     * @param PlannerFieldRules|null $value Value to set for the title property.
    */
    public function setTitle(?PlannerFieldRules $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
