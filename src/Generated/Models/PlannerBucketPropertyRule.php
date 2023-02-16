<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerBucketPropertyRule extends PlannerPropertyRule implements Parsable 
{
    /**
     * Instantiates a new PlannerBucketPropertyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerBucketPropertyRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerBucketPropertyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerBucketPropertyRule {
        return new PlannerBucketPropertyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'order' => fn(ParseNode $n) => $o->setOrder($n->getCollectionOfPrimitiveValues()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the order property value. The order property
     * @return array<string>|null
    */
    public function getOrder(): ?array {
        return $this->getBackingStore()->get('order');
    }

    /**
     * Gets the title property value. The title property
     * @return array<string>|null
    */
    public function getTitle(): ?array {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('order', $this->getOrder());
        $writer->writeCollectionOfPrimitiveValues('title', $this->getTitle());
    }

    /**
     * Sets the order property value. The order property
     * @param array<string>|null $value Value to set for the order property.
    */
    public function setOrder(?array $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the title property value. The title property
     * @param array<string>|null $value Value to set for the title property.
    */
    public function setTitle(?array $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
