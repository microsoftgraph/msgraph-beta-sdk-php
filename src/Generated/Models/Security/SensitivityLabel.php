<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new SensitivityLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabel {
        return new SensitivityLabel();
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
     * Gets the contentFormats property value. Returns the supported content formats for the label.
     * @return array<string>|null
    */
    public function getContentFormats(): ?array {
        $val = $this->getBackingStore()->get('contentFormats');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentFormats'");
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
            'contentFormats' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContentFormats($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'hasProtection' => fn(ParseNode $n) => $o->setHasProtection($n->getBooleanValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isAppliable' => fn(ParseNode $n) => $o->setIsAppliable($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getIntegerValue()),
            'tooltip' => fn(ParseNode $n) => $o->setTooltip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasProtection property value. Indicates whether the label has protection actions configured.
     * @return bool|null
    */
    public function getHasProtection(): ?bool {
        $val = $this->getBackingStore()->get('hasProtection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasProtection'");
    }

    /**
     * Gets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
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
     * Gets the isAppliable property value. Indicates whether the label can be applied to content. False if the label is a parent with child labels.
     * @return bool|null
    */
    public function getIsAppliable(): ?bool {
        $val = $this->getBackingStore()->get('isAppliable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAppliable'");
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
     * Gets the parent property value. The parent property
     * @return SensitivityLabel|null
    */
    public function getParent(): ?SensitivityLabel {
        $val = $this->getBackingStore()->get('parent');
        if (is_null($val) || $val instanceof SensitivityLabel) {
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
        $writer->writeCollectionOfPrimitiveValues('contentFormats', $this->getContentFormats());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('hasProtection', $this->getHasProtection());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isAppliable', $this->getIsAppliable());
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
     * Sets the contentFormats property value. Returns the supported content formats for the label.
     * @param array<string>|null $value Value to set for the contentFormats property.
    */
    public function setContentFormats(?array $value): void {
        $this->getBackingStore()->set('contentFormats', $value);
    }

    /**
     * Sets the description property value. The admin-defined description for the label.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the hasProtection property value. Indicates whether the label has protection actions configured.
     * @param bool|null $value Value to set for the hasProtection property.
    */
    public function setHasProtection(?bool $value): void {
        $this->getBackingStore()->set('hasProtection', $value);
    }

    /**
     * Sets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the isAppliable property value. Indicates whether the label can be applied to content. False if the label is a parent with child labels.
     * @param bool|null $value Value to set for the isAppliable property.
    */
    public function setIsAppliable(?bool $value): void {
        $this->getBackingStore()->set('isAppliable', $value);
    }

    /**
     * Sets the name property value. The plaintext name of the label.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parent property value. The parent property
     * @param SensitivityLabel|null $value Value to set for the parent property.
    */
    public function setParent(?SensitivityLabel $value): void {
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
