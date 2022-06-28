<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskTrigger extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PrintTaskDefinition|null $definition The definition property
    */
    private ?PrintTaskDefinition $definition = null;
    
    /**
     * @var PrintEvent|null $event The Universal Print event that will cause a new printTask to be triggered. Valid values are described in the following table.
    */
    private ?PrintEvent $event = null;
    
    /**
     * Instantiates a new printTaskTrigger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTaskTrigger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTaskTrigger {
        return new PrintTaskTrigger();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the definition property value. The definition property
     * @return PrintTaskDefinition|null
    */
    public function getDefinition(): ?PrintTaskDefinition {
        return $this->definition;
    }

    /**
     * Gets the event property value. The Universal Print event that will cause a new printTask to be triggered. Valid values are described in the following table.
     * @return PrintEvent|null
    */
    public function getEvent(): ?PrintEvent {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definition' => function (ParseNode $n) use ($o) { $o->setDefinition($n->getObjectValue(array(PrintTaskDefinition::class, 'createFromDiscriminatorValue'))); },
            'event' => function (ParseNode $n) use ($o) { $o->setEvent($n->getEnumValue(PrintEvent::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('definition', $this->definition);
        $writer->writeEnumValue('event', $this->event);
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
     * Sets the definition property value. The definition property
     *  @param PrintTaskDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?PrintTaskDefinition $value ): void {
        $this->definition = $value;
    }

    /**
     * Sets the event property value. The Universal Print event that will cause a new printTask to be triggered. Valid values are described in the following table.
     *  @param PrintEvent|null $value Value to set for the event property.
    */
    public function setEvent(?PrintEvent $value ): void {
        $this->event = $value;
    }

}
