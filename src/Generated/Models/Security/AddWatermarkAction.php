<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddWatermarkAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var string|null $fontColor The fontColor property
    */
    private ?string $fontColor = null;
    
    /**
     * @var string|null $fontName The fontName property
    */
    private ?string $fontName = null;
    
    /**
     * @var int|null $fontSize The fontSize property
    */
    private ?int $fontSize = null;
    
    /**
     * @var WatermarkLayout|null $layout The layout property
    */
    private ?WatermarkLayout $layout = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * @var string|null $uiElementName The uiElementName property
    */
    private ?string $uiElementName = null;
    
    /**
     * Instantiates a new AddWatermarkAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddWatermarkAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddWatermarkAction {
        return new AddWatermarkAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fontColor' => function (ParseNode $n) use ($o) { $o->setFontColor($n->getStringValue()); },
            'fontName' => function (ParseNode $n) use ($o) { $o->setFontName($n->getStringValue()); },
            'fontSize' => function (ParseNode $n) use ($o) { $o->setFontSize($n->getIntegerValue()); },
            'layout' => function (ParseNode $n) use ($o) { $o->setLayout($n->getEnumValue(WatermarkLayout::class)); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
            'uiElementName' => function (ParseNode $n) use ($o) { $o->setUiElementName($n->getStringValue()); },
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
     * Gets the fontName property value. The fontName property
     * @return string|null
    */
    public function getFontName(): ?string {
        return $this->fontName;
    }

    /**
     * Gets the fontSize property value. The fontSize property
     * @return int|null
    */
    public function getFontSize(): ?int {
        return $this->fontSize;
    }

    /**
     * Gets the layout property value. The layout property
     * @return WatermarkLayout|null
    */
    public function getLayout(): ?WatermarkLayout {
        return $this->layout;
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the uiElementName property value. The uiElementName property
     * @return string|null
    */
    public function getUiElementName(): ?string {
        return $this->uiElementName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fontColor', $this->fontColor);
        $writer->writeStringValue('fontName', $this->fontName);
        $writer->writeIntegerValue('fontSize', $this->fontSize);
        $writer->writeEnumValue('layout', $this->layout);
        $writer->writeStringValue('text', $this->text);
        $writer->writeStringValue('uiElementName', $this->uiElementName);
    }

    /**
     * Sets the fontColor property value. The fontColor property
     *  @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value ): void {
        $this->fontColor = $value;
    }

    /**
     * Sets the fontName property value. The fontName property
     *  @param string|null $value Value to set for the fontName property.
    */
    public function setFontName(?string $value ): void {
        $this->fontName = $value;
    }

    /**
     * Sets the fontSize property value. The fontSize property
     *  @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value ): void {
        $this->fontSize = $value;
    }

    /**
     * Sets the layout property value. The layout property
     *  @param WatermarkLayout|null $value Value to set for the layout property.
    */
    public function setLayout(?WatermarkLayout $value ): void {
        $this->layout = $value;
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the uiElementName property value. The uiElementName property
     *  @param string|null $value Value to set for the uiElementName property.
    */
    public function setUiElementName(?string $value ): void {
        $this->uiElementName = $value;
    }

}
