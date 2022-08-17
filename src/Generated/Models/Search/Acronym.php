<?php

namespace Microsoft\Graph\Beta\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acronym extends SearchAnswer implements Parsable 
{
    /**
     * @var string|null $standsFor What the acronym stands for.
    */
    private ?string $standsFor = null;
    
    /**
     * @var AnswerState|null $state The state property
    */
    private ?AnswerState $state = null;
    
    /**
     * Instantiates a new Acronym and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.search.acronym');
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
     * Gets the state property value. The state property
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
     * Sets the state property value. The state property
     *  @param AnswerState|null $value Value to set for the state property.
    */
    public function setState(?AnswerState $value ): void {
        $this->state = $value;
    }

}
