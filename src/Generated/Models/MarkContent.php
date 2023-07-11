<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkContent extends LabelActionBase implements Parsable 
{
    /**
     * Instantiates a new markContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.markContent');
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fontColor' => fn(ParseNode $n) => $o->setFontColor($n->getStringValue()),
            'fontSize' => fn(ParseNode $n) => $o->setFontSize($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fontColor property value. The fontColor property
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
     * Gets the fontSize property value. The fontSize property
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the text property value. The text property
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fontColor', $this->getFontColor());
        $writer->writeIntegerValue('fontSize', $this->getFontSize());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the fontColor property value. The fontColor property
     * @param string|null $value Value to set for the fontColor property.
    */
    public function setFontColor(?string $value): void {
        $this->getBackingStore()->set('fontColor', $value);
    }

    /**
     * Sets the fontSize property value. The fontSize property
     * @param int|null $value Value to set for the fontSize property.
    */
    public function setFontSize(?int $value): void {
        $this->getBackingStore()->set('fontSize', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
