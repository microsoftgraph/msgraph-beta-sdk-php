<?php

namespace Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\BusinessFlows\Item\RecordDecisions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordDecisionsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $justification The justification property
    */
    private ?string $justification = null;
    
    /**
     * @var string|null $reviewResult The reviewResult property
    */
    private ?string $reviewResult = null;
    
    /**
     * Instantiates a new recordDecisionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordDecisionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecordDecisionsPostRequestBody {
        return new RecordDecisionsPostRequestBody();
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
        return  [
            'justification' => function (ParseNode $n) use ($o) { $o->setJustification($n->getStringValue()); },
            'reviewResult' => function (ParseNode $n) use ($o) { $o->setReviewResult($n->getStringValue()); },
        ];
    }

    /**
     * Gets the justification property value. The justification property
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the reviewResult property value. The reviewResult property
     * @return string|null
    */
    public function getReviewResult(): ?string {
        return $this->reviewResult;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeStringValue('reviewResult', $this->reviewResult);
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
     * Sets the justification property value. The justification property
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the reviewResult property value. The reviewResult property
     *  @param string|null $value Value to set for the reviewResult property.
    */
    public function setReviewResult(?string $value ): void {
        $this->reviewResult = $value;
    }

}
