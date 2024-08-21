<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new ApprovalIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.approvalIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalIdentitySet {
        return new ApprovalIdentitySet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. The Microsoft Entra group associated with the approval item.
     * @return Identity|null
    */
    public function getGroup(): ?Identity {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('group', $this->getGroup());
    }

    /**
     * Sets the group property value. The Microsoft Entra group associated with the approval item.
     * @param Identity|null $value Value to set for the group property.
    */
    public function setGroup(?Identity $value): void {
        $this->getBackingStore()->set('group', $value);
    }

}
