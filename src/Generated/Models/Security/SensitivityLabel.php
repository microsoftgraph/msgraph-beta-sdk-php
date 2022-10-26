<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * @var string|null $color The color that the UI should display for the label, if configured.
    */
    private ?string $color = null;
    
    /**
     * @var array<string>|null $contentFormats Returns the supported content formats for the label.
    */
    private ?array $contentFormats = null;
    
    /**
     * @var string|null $description The admin-defined description for the label.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $hasProtection Indicates whether the label has protection actions configured.
    */
    private ?bool $hasProtection = null;
    
    /**
     * @var bool|null $isActive Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isAppliable Indicates whether the label can be applied to content. False if the label is a parent with child labels.
    */
    private ?bool $isAppliable = null;
    
    /**
     * @var string|null $name The plaintext name of the label.
    */
    private ?string $name = null;
    
    /**
     * @var SensitivityLabel|null $parent The parent label associated with a child label. Null if the label has no parent.
    */
    private ?SensitivityLabel $parent = null;
    
    /**
     * @var int|null $sensitivity The sensitivity value of the label, where lower is less sensitive.
    */
    private ?int $sensitivity = null;
    
    /**
     * @var string|null $tooltip The tooltip that should be displayed for the label in a UI.
    */
    private ?string $tooltip = null;
    
    /**
     * Instantiates a new sensitivityLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.sensitivityLabel');
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
        return $this->color;
    }

    /**
     * Gets the contentFormats property value. Returns the supported content formats for the label.
     * @return array<string>|null
    */
    public function getContentFormats(): ?array {
        return $this->contentFormats;
    }

    /**
     * Gets the description property value. The admin-defined description for the label.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
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
        return $this->hasProtection;
    }

    /**
     * Gets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isAppliable property value. Indicates whether the label can be applied to content. False if the label is a parent with child labels.
     * @return bool|null
    */
    public function getIsAppliable(): ?bool {
        return $this->isAppliable;
    }

    /**
     * Gets the name property value. The plaintext name of the label.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parent property value. The parent label associated with a child label. Null if the label has no parent.
     * @return SensitivityLabel|null
    */
    public function getParent(): ?SensitivityLabel {
        return $this->parent;
    }

    /**
     * Gets the sensitivity property value. The sensitivity value of the label, where lower is less sensitive.
     * @return int|null
    */
    public function getSensitivity(): ?int {
        return $this->sensitivity;
    }

    /**
     * Gets the tooltip property value. The tooltip that should be displayed for the label in a UI.
     * @return string|null
    */
    public function getTooltip(): ?string {
        return $this->tooltip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('color', $this->color);
        $writer->writeCollectionOfPrimitiveValues('contentFormats', $this->contentFormats);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('hasProtection', $this->hasProtection);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeBooleanValue('isAppliable', $this->isAppliable);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('parent', $this->parent);
        $writer->writeIntegerValue('sensitivity', $this->sensitivity);
        $writer->writeStringValue('tooltip', $this->tooltip);
    }

    /**
     * Sets the color property value. The color that the UI should display for the label, if configured.
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the contentFormats property value. Returns the supported content formats for the label.
     *  @param array<string>|null $value Value to set for the contentFormats property.
    */
    public function setContentFormats(?array $value ): void {
        $this->contentFormats = $value;
    }

    /**
     * Sets the description property value. The admin-defined description for the label.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the hasProtection property value. Indicates whether the label has protection actions configured.
     *  @param bool|null $value Value to set for the hasProtection property.
    */
    public function setHasProtection(?bool $value ): void {
        $this->hasProtection = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in the UI.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isAppliable property value. Indicates whether the label can be applied to content. False if the label is a parent with child labels.
     *  @param bool|null $value Value to set for the isAppliable property.
    */
    public function setIsAppliable(?bool $value ): void {
        $this->isAppliable = $value;
    }

    /**
     * Sets the name property value. The plaintext name of the label.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parent property value. The parent label associated with a child label. Null if the label has no parent.
     *  @param SensitivityLabel|null $value Value to set for the parent property.
    */
    public function setParent(?SensitivityLabel $value ): void {
        $this->parent = $value;
    }

    /**
     * Sets the sensitivity property value. The sensitivity value of the label, where lower is less sensitive.
     *  @param int|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?int $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the tooltip property value. The tooltip that should be displayed for the label in a UI.
     *  @param string|null $value Value to set for the tooltip property.
    */
    public function setTooltip(?string $value ): void {
        $this->tooltip = $value;
    }

}
