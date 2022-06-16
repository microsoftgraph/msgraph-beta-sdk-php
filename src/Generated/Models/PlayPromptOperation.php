<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlayPromptOperation extends CommsOperation 
{
    /** @var PlayPromptCompletionReason|null $completionReason Possible values are: unknown, completedSuccessfully, mediaOperationCanceled. */
    private ?PlayPromptCompletionReason $completionReason = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlayPromptOperation {
        return new PlayPromptOperation();
    }

    /**
     * Gets the completionReason property value. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled.
     * @return PlayPromptCompletionReason|null
    */
    public function getCompletionReason(): ?PlayPromptCompletionReason {
        return $this->completionReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'completionReason' => function (self $o, ParseNode $n) { $o->setCompletionReason($n->getEnumValue(PlayPromptCompletionReason::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('completionReason', $this->completionReason);
    }

    /**
     * Sets the completionReason property value. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled.
     *  @param PlayPromptCompletionReason|null $value Value to set for the completionReason property.
    */
    public function setCompletionReason(?PlayPromptCompletionReason $value ): void {
        $this->completionReason = $value;
    }

}
