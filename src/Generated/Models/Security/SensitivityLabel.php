<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * @var string|null $color The color property
    */
    private ?string $color = null;
    
    /**
     * @var array<string>|null $contentFormats The contentFormats property
    */
    private ?array $contentFormats = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $hasProtection The hasProtection property
    */
    private ?bool $hasProtection = null;
    
    /**
     * @var bool|null $isActive The isActive property
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isAppliable The isAppliable property
    */
    private ?bool $isAppliable = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var SensitivityLabel|null $parent The parent property
    */
    private ?SensitivityLabel $parent = null;
    
    /**
     * @var int|null $sensitivity The sensitivity property
    */
    private ?int $sensitivity = null;
    
    /**
     * @var string|null $tooltip The tooltip property
    */
    private ?string $tooltip = null;
    
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
     * Gets the color property value. The color property
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Gets the contentFormats property value. The contentFormats property
     * @return array<string>|null
    */
    public function getContentFormats(): ?array {
        return $this->contentFormats;
    }

    /**
     * Gets the description property value. The description property
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
            'color' => function (ParseNode $n) use ($o) { $o->setColor($n->getStringValue()); },
            'contentFormats' => function (ParseNode $n) use ($o) { $o->setContentFormats($n->getCollectionOfPrimitiveValues()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'hasProtection' => function (ParseNode $n) use ($o) { $o->setHasProtection($n->getBooleanValue()); },
            'isActive' => function (ParseNode $n) use ($o) { $o->setIsActive($n->getBooleanValue()); },
            'isAppliable' => function (ParseNode $n) use ($o) { $o->setIsAppliable($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'parent' => function (ParseNode $n) use ($o) { $o->setParent($n->getObjectValue(array(SensitivityLabel::class, 'createFromDiscriminatorValue'))); },
            'sensitivity' => function (ParseNode $n) use ($o) { $o->setSensitivity($n->getIntegerValue()); },
            'tooltip' => function (ParseNode $n) use ($o) { $o->setTooltip($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasProtection property value. The hasProtection property
     * @return bool|null
    */
    public function getHasProtection(): ?bool {
        return $this->hasProtection;
    }

    /**
     * Gets the isActive property value. The isActive property
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isAppliable property value. The isAppliable property
     * @return bool|null
    */
    public function getIsAppliable(): ?bool {
        return $this->isAppliable;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parent property value. The parent property
     * @return SensitivityLabel|null
    */
    public function getParent(): ?SensitivityLabel {
        return $this->parent;
    }

    /**
     * Gets the sensitivity property value. The sensitivity property
     * @return int|null
    */
    public function getSensitivity(): ?int {
        return $this->sensitivity;
    }

    /**
     * Gets the tooltip property value. The tooltip property
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
     * Sets the color property value. The color property
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the contentFormats property value. The contentFormats property
     *  @param array<string>|null $value Value to set for the contentFormats property.
    */
    public function setContentFormats(?array $value ): void {
        $this->contentFormats = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the hasProtection property value. The hasProtection property
     *  @param bool|null $value Value to set for the hasProtection property.
    */
    public function setHasProtection(?bool $value ): void {
        $this->hasProtection = $value;
    }

    /**
     * Sets the isActive property value. The isActive property
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isAppliable property value. The isAppliable property
     *  @param bool|null $value Value to set for the isAppliable property.
    */
    public function setIsAppliable(?bool $value ): void {
        $this->isAppliable = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parent property value. The parent property
     *  @param SensitivityLabel|null $value Value to set for the parent property.
    */
    public function setParent(?SensitivityLabel $value ): void {
        $this->parent = $value;
    }

    /**
     * Sets the sensitivity property value. The sensitivity property
     *  @param int|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?int $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the tooltip property value. The tooltip property
     *  @param string|null $value Value to set for the tooltip property.
    */
    public function setTooltip(?string $value ): void {
        $this->tooltip = $value;
    }

}
