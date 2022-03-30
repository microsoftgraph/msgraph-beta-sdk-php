<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterEvaluationStatusDetails extends Entity 
{
    /** @var string|null $payloadId PayloadId on which filter has been applied. */
    private ?string $payloadId = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterEvaluationStatusDetails {
        return new AssignmentFilterEvaluationStatusDetails();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'payloadId' => function (self $o, ParseNode $n) { $o->setPayloadId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the payloadId property value. PayloadId on which filter has been applied.
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('payloadId', $this->payloadId);
    }

    /**
     * Sets the payloadId property value. PayloadId on which filter has been applied.
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

}
