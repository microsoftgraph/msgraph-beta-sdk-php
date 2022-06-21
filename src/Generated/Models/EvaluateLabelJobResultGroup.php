<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateLabelJobResultGroup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EvaluateLabelJobResult|null $automatic The automatic property
    */
    private ?EvaluateLabelJobResult $automatic = null;
    
    /**
     * @var EvaluateLabelJobResult|null $recommended The recommended property
    */
    private ?EvaluateLabelJobResult $recommended = null;
    
    /**
     * Instantiates a new evaluateLabelJobResultGroup and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResultGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResultGroup {
        return new EvaluateLabelJobResultGroup();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the automatic property value. The automatic property
     * @return EvaluateLabelJobResult|null
    */
    public function getAutomatic(): ?EvaluateLabelJobResult {
        return $this->automatic;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automatic' => function (ParseNode $n) use ($o) { $o->setAutomatic($n->getObjectValue(array(EvaluateLabelJobResult::class, 'createFromDiscriminatorValue'))); },
            'recommended' => function (ParseNode $n) use ($o) { $o->setRecommended($n->getObjectValue(array(EvaluateLabelJobResult::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the recommended property value. The recommended property
     * @return EvaluateLabelJobResult|null
    */
    public function getRecommended(): ?EvaluateLabelJobResult {
        return $this->recommended;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automatic', $this->automatic);
        $writer->writeObjectValue('recommended', $this->recommended);
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
     * Sets the automatic property value. The automatic property
     *  @param EvaluateLabelJobResult|null $value Value to set for the automatic property.
    */
    public function setAutomatic(?EvaluateLabelJobResult $value ): void {
        $this->automatic = $value;
    }

    /**
     * Sets the recommended property value. The recommended property
     *  @param EvaluateLabelJobResult|null $value Value to set for the recommended property.
    */
    public function setRecommended(?EvaluateLabelJobResult $value ): void {
        $this->recommended = $value;
    }

}
