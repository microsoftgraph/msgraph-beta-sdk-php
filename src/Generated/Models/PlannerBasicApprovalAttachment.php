<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerBasicApprovalAttachment extends PlannerBaseApprovalAttachment implements Parsable 
{
    /**
     * Instantiates a new PlannerBasicApprovalAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerBasicApprovalAttachment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerBasicApprovalAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerBasicApprovalAttachment {
        return new PlannerBasicApprovalAttachment();
    }

    /**
     * Gets the approvalId property value. Read-only. The identifier of the approval in the approval service.
     * @return string|null
    */
    public function getApprovalId(): ?string {
        $val = $this->getBackingStore()->get('approvalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalId' => fn(ParseNode $n) => $o->setApprovalId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('approvalId', $this->getApprovalId());
    }

    /**
     * Sets the approvalId property value. Read-only. The identifier of the approval in the approval service.
     * @param string|null $value Value to set for the approvalId property.
    */
    public function setApprovalId(?string $value): void {
        $this->getBackingStore()->set('approvalId', $value);
    }

}
