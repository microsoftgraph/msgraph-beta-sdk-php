<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActionStep implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ActionUrl|null $actionUrl The actionUrl property
    */
    private ?ActionUrl $actionUrl = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $stepNumber The stepNumber property
    */
    private ?int $stepNumber = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * Instantiates a new actionStep and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.actionStep');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActionStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActionStep {
        return new ActionStep();
    }

    /**
     * Gets the actionUrl property value. The actionUrl property
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
        $o = $this;
        return  [
            'actionUrl' => fn(ParseNode $n) => $o->setActionUrl($n->getObjectValue([ActionUrl::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stepNumber' => fn(ParseNode $n) => $o->setStepNumber($n->getIntegerValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the stepNumber property value. The stepNumber property
     * @return int|null
    */
    public function getStepNumber(): ?int {
        return $this->stepNumber;
    }

    /**
     * Gets the text property value. The text property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('stepNumber', $this->stepNumber);
        $writer->writeStringValue('text', $this->text);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionUrl property value. The actionUrl property
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the stepNumber property value. The stepNumber property
     *  @param int|null $value Value to set for the stepNumber property.
    */
    public function setStepNumber(?int $value ): void {
        $this->stepNumber = $value;
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
