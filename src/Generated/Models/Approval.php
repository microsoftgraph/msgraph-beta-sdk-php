<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Approval extends Entity implements Parsable 
{
    /**
     * Instantiates a new approval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.approval');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Approval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Approval {
        return new Approval();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([ApprovalStep::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the steps property value. The steps property
     * @return array<ApprovalStep>|null
    */
    public function getSteps(): ?array {
        return $this->getBackingStore()->get('steps');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
    }

    /**
     * Sets the steps property value. The steps property
     *  @param array<ApprovalStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->getBackingStore()->set('steps', $value);
    }

}
