<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluatePoliciesJobResponse extends JobResponseBase implements Parsable 
{
    /**
     * Instantiates a new DlpEvaluatePoliciesJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluatePoliciesJobResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluatePoliciesJobResponse {
        return new DlpEvaluatePoliciesJobResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'result' => fn(ParseNode $n) => $o->setResult($n->getObjectValue([DlpPoliciesJobResult::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the result property value. The result property
     * @return DlpPoliciesJobResult|null
    */
    public function getResult(): ?DlpPoliciesJobResult {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof DlpPoliciesJobResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('result', $this->getResult());
    }

    /**
     * Sets the result property value. The result property
     * @param DlpPoliciesJobResult|null $value Value to set for the result property.
    */
    public function setResult(?DlpPoliciesJobResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

}
