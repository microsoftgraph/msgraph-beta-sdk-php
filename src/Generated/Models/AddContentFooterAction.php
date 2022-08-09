<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddContentFooterAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var ContentAlignment|null $alignment The alignment property
    */
    private ?ContentAlignment $alignment = null;
    
    /**
     * @var string|null $fontColor Color of the font to use for the footer.
    */
    private ?string $fontColor = null;
    
    /**
     * @var string|null $fontName Name of the font to use for the footer.
    */
    private ?string $fontName = null;
    
    /**
     * @var int|null $fontSize Font size to use for the footer.
    */
    private ?int $fontSize = null;
    
    /**
     * @var int|null $margin The margin of the header from the bottom of the document.
    */
    private ?int $margin = null;
    
    /**
     * @var string|null $text The contents of the footer itself.
    */
    private ?string $text = null;
    
    /**
     * @var string|null $uiElementName The name of the UI element where the footer should be placed.
    */
    private ?string $uiElementName = null;
    
    /**
     * Instantiates a new AddContentFooterAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.addContentFooterAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddContentFooterAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddContentFooterAction {
        return new AddContentFooterAction();
    }

    /**
     * Gets the alignment property value. The alignment property
     * @return ContentAlignment|null
    */
    public function getAlignment(): ?ContentAlignment {
        return $this->alignment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alignment' => function (ParseNode $n) use ($o) { $o->setAlignment($n->getEnumValue(ContentAlignment::class)); },
            'fontColor' => function (ParseNode $n) use ($o) { $o->setFontColor($n->getStringValue()); },
            'fontName' => function (ParseNode $n) use ($o) { $o->setFontName($n->getStringValue()); },
            'fontSize' => function (ParseNode $n) use ($o) { $o->setFontSize($n->getIntegerValue()); },
            'margin' => function (ParseNode $n) use ($o) { $o->setMargin($n->getIntegerValue()); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
            'uiElementName' => function (ParseNode $n) use ($o) { $o->setUiElementName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fontColor property value. Color of the font to use for the footer.
     * @return string|null
    */
    public function getFontColor(): ?string {
        return $this->fontColor;
    }

    /**
     * Gets the fontName property value. Name of the font to use for the footer.
     * @return string|null
    */
    public function getFontName(): ?string {
        return $this->fontName;
    }

    /**
     * Gets the fontSize property value. Font size to use for the footer.
     * @return int|null
    */
    public function getFontSize(): ?int {
        return $this->fontSize;
    }

    /**
     * Gets the margin property value. The margin of the header from the bottom of the document.
     * @return int|null
    */
    public function getMargin(): ?int {
        return $this->margin;
    }

    /**
     * Gets the text property value. The contents of the footer itself.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the uiElementName property value. The name of the UI element where the footer should be placed.
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
        $writer->writeEnumValue('alignment', $this->alignment);
        $writer->writeStringValue('fontColor', $this->fontColor);
        $writer->writeStringValue('fontName', $this->fontName);
        $writer->writeIntegerValue('fontSize', $this->fontSize);
        $writer->writeIntegerValue('margin', $this->margin);
        $writer->writeStringValue('text', $this->text);
        $writer->writeStringValue('uiElementName', $this->uiElementName);
    }

    /**
     * Sets the alignment property value. The alignment property
     *  @param ContentAlignment|null $value Value to set for the alignment property.
    */
    public function setAlignment(?ContentAlignment $value ): void {
        $this->alignment = $value;
    }

    /**
     * Sets the fontColor property value. Color of the font to use for the footer.
     *  @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value ): void {
        $this->fontColor = $value;
    }

    /**
     * Sets the fontName property value. Name of the font to use for the footer.
     *  @param string|null $value Value to set for the fontName property.
    */
    public function setFontName(?string $value ): void {
        $this->fontName = $value;
    }

    /**
     * Sets the fontSize property value. Font size to use for the footer.
     *  @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value ): void {
        $this->fontSize = $value;
    }

    /**
     * Sets the margin property value. The margin of the header from the bottom of the document.
     *  @param int|null $value Value to set for the margin property.
    */
    public function setMargin(?int $value ): void {
        $this->margin = $value;
    }

    /**
     * Sets the text property value. The contents of the footer itself.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the uiElementName property value. The name of the UI element where the footer should be placed.
     *  @param string|null $value Value to set for the uiElementName property.
    */
    public function setUiElementName(?string $value ): void {
        $this->uiElementName = $value;
    }

}
