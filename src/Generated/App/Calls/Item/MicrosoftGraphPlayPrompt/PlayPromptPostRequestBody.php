<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphPlayPrompt;

use Microsoft\Graph\Beta\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlayPromptPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new playPromptPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlayPromptPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlayPromptPostRequestBody {
        return new PlayPromptPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->getBackingStore()->get('clientContext');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'loop' => fn(ParseNode $n) => $o->setLoop($n->getBooleanValue()),
            'prompts' => fn(ParseNode $n) => $o->setPrompts($n->getCollectionOfObjectValues([Prompt::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the loop property value. The loop property
     * @return bool|null
    */
    public function getLoop(): ?bool {
        return $this->getBackingStore()->get('loop');
    }

    /**
     * Gets the prompts property value. The prompts property
     * @return array<Prompt>|null
    */
    public function getPrompts(): ?array {
        return $this->getBackingStore()->get('prompts');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeBooleanValue('loop', $this->getLoop());
        $writer->writeCollectionOfObjectValues('prompts', $this->getPrompts());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientContext property value. The clientContext property
     * @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the loop property value. The loop property
     * @param bool|null $value Value to set for the loop property.
    */
    public function setLoop(?bool $value): void {
        $this->getBackingStore()->set('loop', $value);
    }

    /**
     * Sets the prompts property value. The prompts property
     * @param array<Prompt>|null $value Value to set for the prompts property.
    */
    public function setPrompts(?array $value): void {
        $this->getBackingStore()->set('prompts', $value);
    }

}
