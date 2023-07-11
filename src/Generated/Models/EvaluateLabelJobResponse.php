<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateLabelJobResponse extends JobResponseBase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new evaluateLabelJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResponse {
        return new EvaluateLabelJobResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'result' => fn(ParseNode $n) => $o->setResult($n->getObjectValue([EvaluateLabelJobResultGroup::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the result property value. The result property
     * @return EvaluateLabelJobResultGroup|null
    */
    public function getResult(): ?EvaluateLabelJobResultGroup {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof EvaluateLabelJobResultGroup) {
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('result', $this->getResult());
    }

    /**
     * Sets the result property value. The result property
     * @param EvaluateLabelJobResultGroup|null $value Value to set for the result property.
    */
    public function setResult(?EvaluateLabelJobResultGroup $value): void {
        $this->getBackingStore()->set('result', $value);
    }

}
