<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\Runs\Item\UserProcessingResults\Item\TaskProcessingResults\Item\Resume;

use Microsoft\Graph\Beta\Generated\Models\IdentityGovernance\CustomTaskExtensionCallbackData;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResumePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CustomTaskExtensionCallbackData|null $data The data property
    */
    private ?CustomTaskExtensionCallbackData $data = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new resumePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResumePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResumePostRequestBody {
        return new ResumePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. The data property
     * @return CustomTaskExtensionCallbackData|null
    */
    public function getData(): ?CustomTaskExtensionCallbackData {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => function (ParseNode $n) use ($o) { $o->setData($n->getObjectValue(array(CustomTaskExtensionCallbackData::class, 'createFromDiscriminatorValue'))); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('data', $this->data);
        $writer->writeStringValue('source', $this->source);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the data property value. The data property
     *  @param CustomTaskExtensionCallbackData|null $value Value to set for the data property.
    */
    public function setData(?CustomTaskExtensionCallbackData $value ): void {
        $this->data = $value;
    }

    /**
     * Sets the source property value. The source property
     *  @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
