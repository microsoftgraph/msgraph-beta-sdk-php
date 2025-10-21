<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddContentHeaderAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new AddContentHeaderAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.addContentHeaderAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddContentHeaderAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddContentHeaderAction {
        return new AddContentHeaderAction();
    }

    /**
     * Gets the alignment property value. The alignment property
     * @return ContentAlignment|null
    */
    public function getAlignment(): ?ContentAlignment {
        $val = $this->getBackingStore()->get('alignment');
        if (is_null($val) || $val instanceof ContentAlignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alignment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alignment' => fn(ParseNode $n) => $o->setAlignment($n->getEnumValue(ContentAlignment::class)),
            'fontColor' => fn(ParseNode $n) => $o->setFontColor($n->getStringValue()),
            'fontName' => fn(ParseNode $n) => $o->setFontName($n->getStringValue()),
            'fontSize' => fn(ParseNode $n) => $o->setFontSize($n->getIntegerValue()),
            'margin' => fn(ParseNode $n) => $o->setMargin($n->getIntegerValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'uiElementName' => fn(ParseNode $n) => $o->setUiElementName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fontColor property value. Color of the font to use for the header.
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
     * Gets the fontName property value. Name of the font to use for the header.
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
     * Gets the fontSize property value. Font size to use for the header.
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
     * Gets the margin property value. The margin of the header from the top of the document.
     * @return int|null
    */
    public function getMargin(): ?int {
        $val = $this->getBackingStore()->get('margin');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'margin'");
    }

    /**
     * Gets the text property value. The contents of the header itself.
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
     * Gets the uiElementName property value. The name of the UI element where the header should be placed.
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
        $writer->writeEnumValue('alignment', $this->getAlignment());
        $writer->writeStringValue('fontColor', $this->getFontColor());
        $writer->writeStringValue('fontName', $this->getFontName());
        $writer->writeIntegerValue('fontSize', $this->getFontSize());
        $writer->writeIntegerValue('margin', $this->getMargin());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeStringValue('uiElementName', $this->getUiElementName());
    }

    /**
     * Sets the alignment property value. The alignment property
     * @param ContentAlignment|null $value Value to set for the alignment property.
    */
    public function setAlignment(?ContentAlignment $value): void {
        $this->getBackingStore()->set('alignment', $value);
    }

    /**
     * Sets the fontColor property value. Color of the font to use for the header.
     * @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value): void {
        $this->getBackingStore()->set('fontColor', $value);
    }

    /**
     * Sets the fontName property value. Name of the font to use for the header.
     * @param string|null $value Value to set for the fontName property.
    */
    public function setFontName(?string $value): void {
        $this->getBackingStore()->set('fontName', $value);
    }

    /**
     * Sets the fontSize property value. Font size to use for the header.
     * @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value): void {
        $this->getBackingStore()->set('fontSize', $value);
    }

    /**
     * Sets the margin property value. The margin of the header from the top of the document.
     * @param int|null $value Value to set for the margin property.
    */
    public function setMargin(?int $value): void {
        $this->getBackingStore()->set('margin', $value);
    }

    /**
     * Sets the text property value. The contents of the header itself.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the uiElementName property value. The name of the UI element where the header should be placed.
     * @param string|null $value Value to set for the uiElementName property.
    */
    public function setUiElementName(?string $value): void {
        $this->getBackingStore()->set('uiElementName', $value);
    }

}
