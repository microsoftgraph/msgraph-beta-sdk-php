<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddWatermarkAction extends InformationProtectionAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $fontColor Color of the font to use for the watermark.
    */
    private ?string $fontColor = null;
    
    /**
     * @var string|null $fontName Name of the font to use for the watermark.
    */
    private ?string $fontName = null;
    
    /**
     * @var int|null $fontSize Font size to use for the watermark.
    */
    private ?int $fontSize = null;
    
    /**
     * @var WatermarkLayout|null $layout Possible values are: horizontal, diagonal.
    */
    private ?WatermarkLayout $layout = null;
    
    /**
     * @var string|null $text The contents of the watermark itself.
    */
    private ?string $text = null;
    
    /**
     * @var string|null $uiElementName The name of the UI element where the watermark should be placed.
    */
    private ?string $uiElementName = null;
    
    /**
     * Instantiates a new AddWatermarkAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
            'fontName' => function (ParseNode $n) use ($o) { $o->setFontName($n->getStringValue()); },
            'fontSize' => function (ParseNode $n) use ($o) { $o->setFontSize($n->getIntegerValue()); },
            'layout' => function (ParseNode $n) use ($o) { $o->setLayout($n->getEnumValue(WatermarkLayout::class)); },
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
            'uiElementName' => function (ParseNode $n) use ($o) { $o->setUiElementName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fontColor property value. Color of the font to use for the watermark.
     * @return string|null
    */
    public function getFontColor(): ?string {
        return $this->fontColor;
    }

    /**
     * Gets the fontName property value. Name of the font to use for the watermark.
     * @return string|null
    */
    public function getFontName(): ?string {
        return $this->fontName;
    }

    /**
     * Gets the fontSize property value. Font size to use for the watermark.
     * @return int|null
    */
    public function getFontSize(): ?int {
        return $this->fontSize;
    }

    /**
     * Gets the layout property value. Possible values are: horizontal, diagonal.
     * @return WatermarkLayout|null
    */
    public function getLayout(): ?WatermarkLayout {
        return $this->layout;
    }

    /**
     * Gets the text property value. The contents of the watermark itself.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the uiElementName property value. The name of the UI element where the watermark should be placed.
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
     * Sets the fontColor property value. Color of the font to use for the watermark.
     *  @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value ): void {
        $this->fontColor = $value;
    }

    /**
     * Sets the fontName property value. Name of the font to use for the watermark.
     *  @param string|null $value Value to set for the fontName property.
    */
    public function setFontName(?string $value ): void {
        $this->fontName = $value;
    }

    /**
     * Sets the fontSize property value. Font size to use for the watermark.
     *  @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value ): void {
        $this->fontSize = $value;
    }

    /**
     * Sets the layout property value. Possible values are: horizontal, diagonal.
     *  @param WatermarkLayout|null $value Value to set for the layout property.
    */
    public function setLayout(?WatermarkLayout $value ): void {
        $this->layout = $value;
    }

    /**
     * Sets the text property value. The contents of the watermark itself.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the uiElementName property value. The name of the UI element where the watermark should be placed.
     *  @param string|null $value Value to set for the uiElementName property.
    */
    public function setUiElementName(?string $value ): void {
        $this->uiElementName = $value;
    }

}
