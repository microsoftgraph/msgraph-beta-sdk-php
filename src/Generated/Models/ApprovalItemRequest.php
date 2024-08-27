<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalItemRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApprovalItemRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalItemRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalItemRequest {
        return new ApprovalItemRequest();
    }

    /**
     * Gets the approver property value. The identity set of the principal assigned to this request.
     * @return ApprovalIdentitySet|null
    */
    public function getApprover(): ?ApprovalIdentitySet {
        $val = $this->getBackingStore()->get('approver');
        if (is_null($val) || $val instanceof ApprovalIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approver'");
    }

    /**
     * Gets the createdDateTime property value. Creation date and time for the request.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approver' => fn(ParseNode $n) => $o->setApprover($n->getObjectValue([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isReassigned' => fn(ParseNode $n) => $o->setIsReassigned($n->getBooleanValue()),
            'reassignedFrom' => fn(ParseNode $n) => $o->setReassignedFrom($n->getObjectValue([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isReassigned property value. Indicates whether a request was reassigned.
     * @return bool|null
    */
    public function getIsReassigned(): ?bool {
        $val = $this->getBackingStore()->get('isReassigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReassigned'");
    }

    /**
     * Gets the reassignedFrom property value. The identity set of the principal who reassigned the request.
     * @return ApprovalIdentitySet|null
    */
    public function getReassignedFrom(): ?ApprovalIdentitySet {
        $val = $this->getBackingStore()->get('reassignedFrom');
        if (is_null($val) || $val instanceof ApprovalIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reassignedFrom'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the approver property value. The identity set of the principal assigned to this request.
     * @param ApprovalIdentitySet|null $value Value to set for the approver property.
    */
    public function setApprover(?ApprovalIdentitySet $value): void {
        $this->getBackingStore()->set('approver', $value);
    }

    /**
     * Sets the createdDateTime property value. Creation date and time for the request.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isReassigned property value. Indicates whether a request was reassigned.
     * @param bool|null $value Value to set for the isReassigned property.
    */
    public function setIsReassigned(?bool $value): void {
        $this->getBackingStore()->set('isReassigned', $value);
    }

    /**
     * Sets the reassignedFrom property value. The identity set of the principal who reassigned the request.
     * @param ApprovalIdentitySet|null $value Value to set for the reassignedFrom property.
    */
    public function setReassignedFrom(?ApprovalIdentitySet $value): void {
        $this->getBackingStore()->set('reassignedFrom', $value);
    }

}
