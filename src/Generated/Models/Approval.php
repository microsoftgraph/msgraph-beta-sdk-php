<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Approval extends Entity 
{
    /** @var array<ApprovalStep>|null $steps The steps property */
    private ?array $steps = null;
    
    /**
     * Instantiates a new approval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Approval
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Approval {
        return new Approval();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'steps' => function (self $o, ParseNode $n) { $o->setSteps($n->getCollectionOfObjectValues(ApprovalStep::class)); },
        ]);
    }

    /**
     * Gets the steps property value. The steps property
     * @return array<ApprovalStep>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('steps', $this->steps);
    }

    /**
     * Sets the steps property value. The steps property
     *  @param array<ApprovalStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value ): void {
        $this->steps = $value;
    }

}
