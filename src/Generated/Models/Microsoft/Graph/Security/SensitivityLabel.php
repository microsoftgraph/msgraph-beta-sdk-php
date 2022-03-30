<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity 
{
    /** @var string|null $color  */
    private ?string $color = null;
    
    /** @var array<string>|null $contentFormats  */
    private ?array $contentFormats = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var bool|null $hasProtection  */
    private ?bool $hasProtection = null;
    
    /** @var bool|null $isActive  */
    private ?bool $isActive = null;
    
    /** @var bool|null $isAppliable  */
    private ?bool $isAppliable = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var SensitivityLabel|null $parent  */
    private ?SensitivityLabel $parent = null;
    
    /** @var int|null $sensitivity  */
    private ?int $sensitivity = null;
    
    /** @var string|null $tooltip  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabel {
        return new SensitivityLabel();
    }

    /**
     * Gets the color property value. 
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Gets the contentFormats property value. 
     * @return array<string>|null
    */
    public function getContentFormats(): ?array {
        return $this->contentFormats;
    }

    /**
     * Gets the description property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'color' => function (self $o, ParseNode $n) { $o->setColor($n->getStringValue()); },
            'contentFormats' => function (self $o, ParseNode $n) { $o->setContentFormats($n->getCollectionOfPrimitiveValues()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'hasProtection' => function (self $o, ParseNode $n) { $o->setHasProtection($n->getBooleanValue()); },
            'isActive' => function (self $o, ParseNode $n) { $o->setIsActive($n->getBooleanValue()); },
            'isAppliable' => function (self $o, ParseNode $n) { $o->setIsAppliable($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'parent' => function (self $o, ParseNode $n) { $o->setParent($n->getObjectValue(SensitivityLabel::class)); },
            'sensitivity' => function (self $o, ParseNode $n) { $o->setSensitivity($n->getIntegerValue()); },
            'tooltip' => function (self $o, ParseNode $n) { $o->setTooltip($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasProtection property value. 
     * @return bool|null
    */
    public function getHasProtection(): ?bool {
        return $this->hasProtection;
    }

    /**
     * Gets the isActive property value. 
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isAppliable property value. 
     * @return bool|null
    */
    public function getIsAppliable(): ?bool {
        return $this->isAppliable;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parent property value. 
     * @return SensitivityLabel|null
    */
    public function getParent(): ?SensitivityLabel {
        return $this->parent;
    }

    /**
     * Gets the sensitivity property value. 
     * @return int|null
    */
    public function getSensitivity(): ?int {
        return $this->sensitivity;
    }

    /**
     * Gets the tooltip property value. 
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
     * Sets the color property value. 
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the contentFormats property value. 
     *  @param array<string>|null $value Value to set for the contentFormats property.
    */
    public function setContentFormats(?array $value ): void {
        $this->contentFormats = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the hasProtection property value. 
     *  @param bool|null $value Value to set for the hasProtection property.
    */
    public function setHasProtection(?bool $value ): void {
        $this->hasProtection = $value;
    }

    /**
     * Sets the isActive property value. 
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isAppliable property value. 
     *  @param bool|null $value Value to set for the isAppliable property.
    */
    public function setIsAppliable(?bool $value ): void {
        $this->isAppliable = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parent property value. 
     *  @param SensitivityLabel|null $value Value to set for the parent property.
    */
    public function setParent(?SensitivityLabel $value ): void {
        $this->parent = $value;
    }

    /**
     * Sets the sensitivity property value. 
     *  @param int|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?int $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the tooltip property value. 
     *  @param string|null $value Value to set for the tooltip property.
    */
    public function setTooltip(?string $value ): void {
        $this->tooltip = $value;
    }

}
