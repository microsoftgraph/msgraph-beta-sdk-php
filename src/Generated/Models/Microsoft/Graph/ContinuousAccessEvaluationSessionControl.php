<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContinuousAccessEvaluationSessionControl implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ContinuousAccessEvaluationMode|null $mode Specifies continuous access evaluation settings. The possible values are: strictEnforcement, disabled, unknownFutureValue. */
    private ?ContinuousAccessEvaluationMode $mode = null;
    
    /**
     * Instantiates a new continuousAccessEvaluationSessionControl and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContinuousAccessEvaluationSessionControl
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ContinuousAccessEvaluationSessionControl {
        return new ContinuousAccessEvaluationSessionControl();
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
        return  [
            'mode' => function (self $o, ParseNode $n) { $o->setMode($n->getEnumValue(ContinuousAccessEvaluationMode::class)); },
        ];
    }

    /**
     * Gets the mode property value. Specifies continuous access evaluation settings. The possible values are: strictEnforcement, disabled, unknownFutureValue.
     * @return ContinuousAccessEvaluationMode|null
    */
    public function getMode(): ?ContinuousAccessEvaluationMode {
        return $this->mode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('mode', $this->mode);
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
     * Sets the mode property value. Specifies continuous access evaluation settings. The possible values are: strictEnforcement, disabled, unknownFutureValue.
     *  @param ContinuousAccessEvaluationMode|null $value Value to set for the mode property.
    */
    public function setMode(?ContinuousAccessEvaluationMode $value ): void {
        $this->mode = $value;
    }

}
