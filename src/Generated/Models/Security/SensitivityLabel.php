<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new sensitivityLabel and sets the default values.
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
        return $this->getBackingStore()->get('color');
    }

    /**
     * Gets the contentFormats property value. Returns the supported content formats for the label.
     * @return array<string>|null
    */
    public function getContentFormats(): ?array {
        return $this->getBackingStore()->get('contentFormats');
    }

    /**
     * Gets the description property value. The admin-defined description for the label.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'contentFormats' => fn(ParseNode $n) => $o->setContentFormats($n->getCollectionOfPrimitiveValues()),
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
        return $this->getBackingStore()->get('hasProtection');
    }

    /**
     * Gets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->getBackingStore()->get('isActive');
    }

    /**
     * Gets the isAppliable property value. Indicates whether the label can be applied to content. False if the label is a parent with child labels.
     * @return bool|null
    */
    public function getIsAppliable(): ?bool {
        return $this->getBackingStore()->get('isAppliable');
    }

    /**
     * Gets the name property value. The plaintext name of the label.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the parent property value. The parent label associated with a child label. Null if the label has no parent.
     * @return SensitivityLabel|null
    */
    public function getParent(): ?SensitivityLabel {
        return $this->getBackingStore()->get('parent');
    }

    /**
     * Gets the sensitivity property value. The sensitivity value of the label, where lower is less sensitive.
     * @return int|null
    */
    public function getSensitivity(): ?int {
        return $this->getBackingStore()->get('sensitivity');
    }

    /**
     * Gets the tooltip property value. The tooltip that should be displayed for the label in a UI.
     * @return string|null
    */
    public function getTooltip(): ?string {
        return $this->getBackingStore()->get('tooltip');
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
     * Sets the parent property value. The parent label associated with a child label. Null if the label has no parent.
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
