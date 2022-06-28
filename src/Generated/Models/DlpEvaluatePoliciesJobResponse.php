<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluatePoliciesJobResponse extends JobResponseBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DlpPoliciesJobResult|null $result The result property
    */
    private ?DlpPoliciesJobResult $result = null;
    
    /**
     * Instantiates a new DlpEvaluatePoliciesJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getObjectValue(array(DlpPoliciesJobResult::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the result property value. The result property
     * @return DlpPoliciesJobResult|null
    */
    public function getResult(): ?DlpPoliciesJobResult {
        return $this->result;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('result', $this->result);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the result property value. The result property
     *  @param DlpPoliciesJobResult|null $value Value to set for the result property.
    */
    public function setResult(?DlpPoliciesJobResult $value ): void {
        $this->result = $value;
    }

}
