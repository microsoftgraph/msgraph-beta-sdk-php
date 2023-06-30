<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new informationProtectionLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionLabel {
        return new InformationProtectionLabel();
    }

    /**
     * Gets the color property value. The color that the UI should display for the label, if configured.
     * @return string|null
    */
    public function getColor(): ?string {
        $val = $this->getBackingStore()->get('color');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'color'");
    }

    /**
     * Gets the description property value. The admin-defined description for the label.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([ParentLabelDetails::class, 'createFromDiscriminatorValue'])),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getIntegerValue()),
            'tooltip' => fn(ParseNode $n) => $o->setTooltip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in UI.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the name property value. The plaintext name of the label.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the parent property value. The parent label associated with a child label. Null if label has no parent.
     * @return ParentLabelDetails|null
    */
    public function getParent(): ?ParentLabelDetails {
        $val = $this->getBackingStore()->get('parent');
        if (is_null($val) || $val instanceof ParentLabelDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parent'");
    }

    /**
     * Gets the sensitivity property value. The sensitivity value of the label, where lower is less sensitive.
     * @return int|null
    */
    public function getSensitivity(): ?int {
        $val = $this->getBackingStore()->get('sensitivity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivity'");
    }

    /**
     * Gets the tooltip property value. The tooltip that should be displayed for the label in a UI.
     * @return string|null
    */
    public function getTooltip(): ?string {
        $val = $this->getBackingStore()->get('tooltip');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tooltip'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('parent', $this->getParent());
        $writer->writeIntegerValue('sensitivity', $this->getSensitivity());
        $writer->writeStringValue('tooltip', $this->getTooltip());
    }

    /**
     * Sets the color property value. The color that the UI should display for the label, if configured.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the description property value. The admin-defined description for the label.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in UI.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the name property value. The plaintext name of the label.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parent property value. The parent label associated with a child label. Null if label has no parent.
     * @param ParentLabelDetails|null $value Value to set for the parent property.
    */
    public function setParent(?ParentLabelDetails $value): void {
        $this->getBackingStore()->set('parent', $value);
    }

    /**
     * Sets the sensitivity property value. The sensitivity value of the label, where lower is less sensitive.
     * @param int|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?int $value): void {
        $this->getBackingStore()->set('sensitivity', $value);
    }

    /**
     * Sets the tooltip property value. The tooltip that should be displayed for the label in a UI.
     * @param string|null $value Value to set for the tooltip property.
    */
    public function setTooltip(?string $value): void {
        $this->getBackingStore()->set('tooltip', $value);
    }

}
