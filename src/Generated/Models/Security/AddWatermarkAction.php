<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddWatermarkAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new addWatermarkAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.addWatermarkAction');
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fontColor' => fn(ParseNode $n) => $o->setFontColor($n->getStringValue()),
            'fontName' => fn(ParseNode $n) => $o->setFontName($n->getStringValue()),
            'fontSize' => fn(ParseNode $n) => $o->setFontSize($n->getIntegerValue()),
            'layout' => fn(ParseNode $n) => $o->setLayout($n->getEnumValue(WatermarkLayout::class)),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'uiElementName' => fn(ParseNode $n) => $o->setUiElementName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fontColor property value. Color of the font to use for the watermark.
     * @return string|null
    */
    public function getFontColor(): ?string {
        $val = $this->getBackingStore()->get('fontColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fontColor'");
    }

    /**
     * Gets the fontName property value. Name of the font to use for the watermark.
     * @return string|null
    */
    public function getFontName(): ?string {
        $val = $this->getBackingStore()->get('fontName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fontName'");
    }

    /**
     * Gets the fontSize property value. Font size to use for the watermark.
     * @return int|null
    */
    public function getFontSize(): ?int {
        $val = $this->getBackingStore()->get('fontSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fontSize'");
    }

    /**
     * Gets the layout property value. The layout property
     * @return WatermarkLayout|null
    */
    public function getLayout(): ?WatermarkLayout {
        $val = $this->getBackingStore()->get('layout');
        if (is_null($val) || $val instanceof WatermarkLayout) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'layout'");
    }

    /**
     * Gets the text property value. The contents of the watermark itself.
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Gets the uiElementName property value. The name of the UI element where the watermark should be placed.
     * @return string|null
    */
    public function getUiElementName(): ?string {
        $val = $this->getBackingStore()->get('uiElementName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uiElementName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fontColor', $this->getFontColor());
        $writer->writeStringValue('fontName', $this->getFontName());
        $writer->writeIntegerValue('fontSize', $this->getFontSize());
        $writer->writeEnumValue('layout', $this->getLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeStringValue('uiElementName', $this->getUiElementName());
    }

    /**
     * Sets the fontColor property value. Color of the font to use for the watermark.
     * @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value): void {
        $this->getBackingStore()->set('fontColor', $value);
    }

    /**
     * Sets the fontName property value. Name of the font to use for the watermark.
     * @param string|null $value Value to set for the fontName property.
    */
    public function setFontName(?string $value): void {
        $this->getBackingStore()->set('fontName', $value);
    }

    /**
     * Sets the fontSize property value. Font size to use for the watermark.
     * @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value): void {
        $this->getBackingStore()->set('fontSize', $value);
    }

    /**
     * Sets the layout property value. The layout property
     * @param WatermarkLayout|null $value Value to set for the layout property.
    */
    public function setLayout(?WatermarkLayout $value): void {
        $this->getBackingStore()->set('layout', $value);
    }

    /**
     * Sets the text property value. The contents of the watermark itself.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the uiElementName property value. The name of the UI element where the watermark should be placed.
     * @param string|null $value Value to set for the uiElementName property.
    */
    public function setUiElementName(?string $value): void {
        $this->getBackingStore()->set('uiElementName', $value);
    }

}
