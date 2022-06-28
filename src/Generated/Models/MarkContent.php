<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkContent extends LabelActionBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $fontColor The fontColor property
    */
    private ?string $fontColor = null;
    
    /**
     * @var int|null $fontSize The fontSize property
    */
    private ?int $fontSize = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * Instantiates a new MarkContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarkContent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.addFooter': return new AddFooter();
                case '#microsoft.graph.addHeader': return new AddHeader();
                case '#microsoft.graph.addWatermark': return new AddWatermark();
            }
        }
        return new MarkContent();
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
        return array_merge(parent::getFieldDeserializers(), [
            'fontColor' => function (ParseNode $n) use ($o) { $o->setFontColor($n->getStringValue()); },
            'fontSize' => function (ParseNode $n) use ($o) { $o->setFontSize($n->getIntegerValue()); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fontColor property value. The fontColor property
     * @return string|null
    */
    public function getFontColor(): ?string {
        return $this->fontColor;
    }

    /**
     * Gets the fontSize property value. The fontSize property
     * @return int|null
    */
    public function getFontSize(): ?int {
        return $this->fontSize;
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
        parent::serialize($writer);
        $writer->writeStringValue('fontColor', $this->fontColor);
        $writer->writeIntegerValue('fontSize', $this->fontSize);
        $writer->writeStringValue('text', $this->text);
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
     * Sets the fontColor property value. The fontColor property
     *  @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value ): void {
        $this->fontColor = $value;
    }

    /**
     * Sets the fontSize property value. The fontSize property
     *  @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value ): void {
        $this->fontSize = $value;
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
