<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkSetReviewStatus extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkSetReviewStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkSetReviewStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkSetReviewStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkSetReviewStatus {
        return new CloudPcBulkSetReviewStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'reviewStatus' => fn(ParseNode $n) => $o->setReviewStatus($n->getObjectValue([CloudPcReviewStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the reviewStatus property value. The reviewStatus property
     * @return CloudPcReviewStatus|null
    */
    public function getReviewStatus(): ?CloudPcReviewStatus {
        $val = $this->getBackingStore()->get('reviewStatus');
        if (is_null($val) || $val instanceof CloudPcReviewStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('reviewStatus', $this->getReviewStatus());
    }

    /**
     * Sets the reviewStatus property value. The reviewStatus property
     * @param CloudPcReviewStatus|null $value Value to set for the reviewStatus property.
    */
    public function setReviewStatus(?CloudPcReviewStatus $value): void {
        $this->getBackingStore()->set('reviewStatus', $value);
    }

}
