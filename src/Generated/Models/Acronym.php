<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Search\AnswerState;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acronym extends SearchAnswer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $standsFor What the acronym stands for.
    */
    private ?string $standsFor = null;
    
    /**
     * @var AnswerState|null $state State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue.
    */
    private ?AnswerState $state = null;
    
    /**
     * Instantiates a new Acronym and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acronym
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Acronym {
        return new Acronym();
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
            'standsFor' => function (ParseNode $n) use ($o) { $o->setStandsFor($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(AnswerState::class)); },
        ]);
    }

    /**
     * Gets the standsFor property value. What the acronym stands for.
     * @return string|null
    */
    public function getStandsFor(): ?string {
        return $this->standsFor;
    }

    /**
     * Gets the state property value. State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue.
     * @return AnswerState|null
    */
    public function getState(): ?AnswerState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('standsFor', $this->standsFor);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the standsFor property value. What the acronym stands for.
     *  @param string|null $value Value to set for the standsFor property.
    */
    public function setStandsFor(?string $value ): void {
        $this->standsFor = $value;
    }

    /**
     * Sets the state property value. State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue.
     *  @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value ): void {
        $this->state = $value;
    }

}
