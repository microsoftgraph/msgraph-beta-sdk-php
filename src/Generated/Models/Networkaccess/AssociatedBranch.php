<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssociatedBranch extends Association implements Parsable 
{
    /**
     * Instantiates a new AssociatedBranch and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.associatedBranch');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssociatedBranch
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssociatedBranch {
        return new AssociatedBranch();
    }

    /**
     * Gets the branchId property value. Identifier for the branch.
     * @return string|null
    */
    public function getBranchId(): ?string {
        $val = $this->getBackingStore()->get('branchId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'branchId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'branchId' => fn(ParseNode $n) => $o->setBranchId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('branchId', $this->getBranchId());
    }

    /**
     * Sets the branchId property value. Identifier for the branch.
     * @param string|null $value Value to set for the branchId property.
    */
    public function setBranchId(?string $value): void {
        $this->getBackingStore()->set('branchId', $value);
    }

}
