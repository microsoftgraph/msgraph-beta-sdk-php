<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Search;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acronym extends SearchAnswer 
{
    /** @var string|null $standsFor What the acronym stands for. */
    private ?string $standsFor = null;
    
    /** @var AnswerState|null $state State of the acronym. Possible values are: published, draft, excluded, or unknownFutureValue. */
    private ?AnswerState $state = null;
    
    /**
     * Instantiates a new acronym and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acronym
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Acronym {
        return new Acronym();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'standsFor' => function (self $o, ParseNode $n) { $o->setStandsFor($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(AnswerState::class)); },
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
