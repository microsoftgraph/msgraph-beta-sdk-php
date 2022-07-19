<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\PlayPrompt;

use Microsoft\Graph\Beta\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlayPromptPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $clientContext The clientContext property
    */
    private ?string $clientContext = null;
    
    /**
     * @var bool|null $loop The loop property
    */
    private ?bool $loop = null;
    
    /**
     * @var array<Prompt>|null $prompts The prompts property
    */
    private ?array $prompts = null;
    
    /**
     * Instantiates a new playPromptPostRequestBody and sets the default values.
    */
    public function __construct() {
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->clientContext;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => function (ParseNode $n) use ($o) { $o->setClientContext($n->getStringValue()); },
            'loop' => function (ParseNode $n) use ($o) { $o->setLoop($n->getBooleanValue()); },
            'prompts' => function (ParseNode $n) use ($o) { $o->setPrompts($n->getCollectionOfObjectValues(array(Prompt::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the loop property value. The loop property
     * @return bool|null
    */
    public function getLoop(): ?bool {
        return $this->loop;
    }

    /**
     * Gets the prompts property value. The prompts property
     * @return array<Prompt>|null
    */
    public function getPrompts(): ?array {
        return $this->prompts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->clientContext);
        $writer->writeBooleanValue('loop', $this->loop);
        $writer->writeCollectionOfObjectValues('prompts', $this->prompts);
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
     * Sets the clientContext property value. The clientContext property
     *  @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value ): void {
        $this->clientContext = $value;
    }

    /**
     * Sets the loop property value. The loop property
     *  @param bool|null $value Value to set for the loop property.
    */
    public function setLoop(?bool $value ): void {
        $this->loop = $value;
    }

    /**
     * Sets the prompts property value. The prompts property
     *  @param array<Prompt>|null $value Value to set for the prompts property.
    */
    public function setPrompts(?array $value ): void {
        $this->prompts = $value;
    }

}
