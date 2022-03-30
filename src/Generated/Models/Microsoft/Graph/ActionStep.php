<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActionStep implements AdditionalDataHolder, Parsable 
{
    /** @var ActionUrl|null $actionUrl  */
    private ?ActionUrl $actionUrl = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $stepNumber  */
    private ?int $stepNumber = null;
    
    /** @var string|null $text  */
    private ?string $text = null;
    
    /**
     * Instantiates a new actionStep and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActionStep
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ActionStep {
        return new ActionStep();
    }

    /**
     * Gets the actionUrl property value. 
     * @return ActionUrl|null
    */
    public function getActionUrl(): ?ActionUrl {
        return $this->actionUrl;
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
        return  [
            'actionUrl' => function (self $o, ParseNode $n) { $o->setActionUrl($n->getObjectValue(ActionUrl::class)); },
            'stepNumber' => function (self $o, ParseNode $n) { $o->setStepNumber($n->getIntegerValue()); },
            'text' => function (self $o, ParseNode $n) { $o->setText($n->getStringValue()); },
        ];
    }

    /**
     * Gets the stepNumber property value. 
     * @return int|null
    */
    public function getStepNumber(): ?int {
        return $this->stepNumber;
    }

    /**
     * Gets the text property value. 
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actionUrl', $this->actionUrl);
        $writer->writeIntegerValue('stepNumber', $this->stepNumber);
        $writer->writeStringValue('text', $this->text);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionUrl property value. 
     *  @param ActionUrl|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?ActionUrl $value ): void {
        $this->actionUrl = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the stepNumber property value. 
     *  @param int|null $value Value to set for the stepNumber property.
    */
    public function setStepNumber(?int $value ): void {
        $this->stepNumber = $value;
    }

    /**
     * Sets the text property value. 
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
