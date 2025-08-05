<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedTransaction extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedTransaction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedTransaction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedTransaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedTransaction {
        return new RelatedTransaction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the transactionId property value. Unique identifier of the transaction. Required.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        $val = $this->getBackingStore()->get('transactionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('transactionId', $this->getTransactionId());
    }

    /**
     * Sets the transactionId property value. Unique identifier of the transaction. Required.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->getBackingStore()->set('transactionId', $value);
    }

}
