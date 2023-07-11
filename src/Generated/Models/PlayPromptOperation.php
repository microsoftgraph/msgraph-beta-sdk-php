<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlayPromptOperation extends CommsOperation implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new playPromptOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlayPromptOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlayPromptOperation {
        return new PlayPromptOperation();
    }

    /**
     * Gets the completionReason property value. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled.
     * @return PlayPromptCompletionReason|null
    */
    public function getCompletionReason(): ?PlayPromptCompletionReason {
        $val = $this->getBackingStore()->get('completionReason');
        if (is_null($val) || $val instanceof PlayPromptCompletionReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completionReason' => fn(ParseNode $n) => $o->setCompletionReason($n->getEnumValue(PlayPromptCompletionReason::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('completionReason', $this->getCompletionReason());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the completionReason property value. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled.
     * @param PlayPromptCompletionReason|null $value Value to set for the completionReason property.
    */
    public function setCompletionReason(?PlayPromptCompletionReason $value): void {
        $this->getBackingStore()->set('completionReason', $value);
    }

}
