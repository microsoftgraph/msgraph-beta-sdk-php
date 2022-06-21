<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParentLabelDetails implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $color The color that the user interface should display for the label, if configured. */
    private ?string $color = null;
    
    /** @var string|null $description The admin-defined description for the label. */
    private ?string $description = null;
    
    /** @var string|null $id The label ID is a globally unique identifier (GUID). */
    private ?string $id = null;
    
    /** @var bool|null $isActive Indicates whether the label is active or not. Active labels should be hidden or disabled in user interfaces. */
    private ?bool $isActive = null;
    
    /** @var string|null $name The plaintext name of the label. */
    private ?string $name = null;
    
    /** @var ParentLabelDetails|null $parent The parent property */
    private ?ParentLabelDetails $parent = null;
    
    /** @var int|null $sensitivity The sensitivity value of the label, where lower is less sensitive. */
    private ?int $sensitivity = null;
    
    /** @var string|null $tooltip The tooltip that should be displayed for the label in a user interface. */
    private ?string $tooltip = null;
    
    /**
     * Instantiates a new parentLabelDetails and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParentLabelDetails
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ParentLabelDetails {
        return new ParentLabelDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the color property value. The color that the user interface should display for the label, if configured.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
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
        return  [
            'color' => function (self $o, ParseNode $n) { $o->setColor($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'isActive' => function (self $o, ParseNode $n) { $o->setIsActive($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'parent' => function (self $o, ParseNode $n) { $o->setParent($n->getObjectValue(ParentLabelDetails::class)); },
            'sensitivity' => function (self $o, ParseNode $n) { $o->setSensitivity($n->getIntegerValue()); },
            'tooltip' => function (self $o, ParseNode $n) { $o->setTooltip($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The label ID is a globally unique identifier (GUID).
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in user interfaces.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the name property value. The plaintext name of the label.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parent property value. The parent property
     * @return ParentLabelDetails|null
    */
    public function getParent(): ?ParentLabelDetails {
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
     * Gets the tooltip property value. The tooltip that should be displayed for the label in a user interface.
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
        $writer->writeStringValue('color', $this->color);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('parent', $this->parent);
        $writer->writeIntegerValue('sensitivity', $this->sensitivity);
        $writer->writeStringValue('tooltip', $this->tooltip);
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
     * Sets the color property value. The color that the user interface should display for the label, if configured.
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the description property value. The admin-defined description for the label.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The label ID is a globally unique identifier (GUID).
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isActive property value. Indicates whether the label is active or not. Active labels should be hidden or disabled in user interfaces.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the name property value. The plaintext name of the label.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parent property value. The parent property
     *  @param ParentLabelDetails|null $value Value to set for the parent property.
    */
    public function setParent(?ParentLabelDetails $value ): void {
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
     * Sets the tooltip property value. The tooltip that should be displayed for the label in a user interface.
     *  @param string|null $value Value to set for the tooltip property.
    */
    public function setTooltip(?string $value ): void {
        $this->tooltip = $value;
    }

}
