<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class containing information about the payloads on which filter has been applied.
*/
class AssignmentFilterEvaluationStatusDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new assignmentFilterEvaluationStatusDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterEvaluationStatusDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterEvaluationStatusDetails {
        return new AssignmentFilterEvaluationStatusDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payloadId' => fn(ParseNode $n) => $o->setPayloadId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the payloadId property value. PayloadId on which filter has been applied.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        $val = $this->getBackingStore()->get('payloadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('payloadId', $this->getPayloadId());
    }

    /**
     * Sets the payloadId property value. PayloadId on which filter has been applied.
     * @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value): void {
        $this->getBackingStore()->set('payloadId', $value);
    }

}
