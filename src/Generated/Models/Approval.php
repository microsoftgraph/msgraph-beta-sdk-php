<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Approval extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Approval {
        return new Approval();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([ApprovalStep::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the steps property value. Used to represent the decision associated with a single step in the approval process configured in approvalStage.
     * @return array<ApprovalStep>|null
    */
    public function getSteps(): ?array {
        $val = $this->getBackingStore()->get('steps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalStep::class);
            /** @var array<ApprovalStep>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'steps'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
    }

    /**
     * Sets the steps property value. Used to represent the decision associated with a single step in the approval process configured in approvalStage.
     * @param array<ApprovalStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->getBackingStore()->set('steps', $value);
    }

}
