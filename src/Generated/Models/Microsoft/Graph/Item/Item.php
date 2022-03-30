<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Item;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Item extends Entity 
{
    /** @var string|null $baseUnitOfMeasureId  */
    private ?string $baseUnitOfMeasureId = null;
    
    /** @var bool|null $blocked  */
    private ?bool $blocked = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $gtin  */
    private ?string $gtin = null;
    
    /** @var float|null $inventory  */
    private ?float $inventory = null;
    
    /** @var ItemCategory|null $itemCategory  */
    private ?ItemCategory $itemCategory = null;
    
    /** @var string|null $itemCategoryCode  */
    private ?string $itemCategoryCode = null;
    
    /** @var string|null $itemCategoryId  */
    private ?string $itemCategoryId = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $number  */
    private ?string $number = null;
    
    /** @var array<Picture>|null $picture  */
    private ?array $picture = null;
    
    /** @var bool|null $priceIncludesTax  */
    private ?bool $priceIncludesTax = null;
    
    /** @var string|null $taxGroupCode  */
    private ?string $taxGroupCode = null;
    
    /** @var string|null $taxGroupId  */
    private ?string $taxGroupId = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /** @var float|null $unitCost  */
    private ?float $unitCost = null;
    
    /** @var float|null $unitPrice  */
    private ?float $unitPrice = null;
    
    /**
     * Instantiates a new item and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Item
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Item {
        return new Item();
    }

    /**
     * Gets the baseUnitOfMeasureId property value. 
     * @return string|null
    */
    public function getBaseUnitOfMeasureId(): ?string {
        return $this->baseUnitOfMeasureId;
    }

    /**
     * Gets the blocked property value. 
     * @return bool|null
    */
    public function getBlocked(): ?bool {
        return $this->blocked;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'baseUnitOfMeasureId' => function (self $o, ParseNode $n) { $o->setBaseUnitOfMeasureId($n->getStringValue()); },
            'blocked' => function (self $o, ParseNode $n) { $o->setBlocked($n->getBooleanValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'gtin' => function (self $o, ParseNode $n) { $o->setGtin($n->getStringValue()); },
            'inventory' => function (self $o, ParseNode $n) { $o->setInventory($n->getFloatValue()); },
            'itemCategory' => function (self $o, ParseNode $n) { $o->setItemCategory($n->getObjectValue(ItemCategory::class)); },
            'itemCategoryCode' => function (self $o, ParseNode $n) { $o->setItemCategoryCode($n->getStringValue()); },
            'itemCategoryId' => function (self $o, ParseNode $n) { $o->setItemCategoryId($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'number' => function (self $o, ParseNode $n) { $o->setNumber($n->getStringValue()); },
            'picture' => function (self $o, ParseNode $n) { $o->setPicture($n->getCollectionOfObjectValues(Picture::class)); },
            'priceIncludesTax' => function (self $o, ParseNode $n) { $o->setPriceIncludesTax($n->getBooleanValue()); },
            'taxGroupCode' => function (self $o, ParseNode $n) { $o->setTaxGroupCode($n->getStringValue()); },
            'taxGroupId' => function (self $o, ParseNode $n) { $o->setTaxGroupId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'unitCost' => function (self $o, ParseNode $n) { $o->setUnitCost($n->getFloatValue()); },
            'unitPrice' => function (self $o, ParseNode $n) { $o->setUnitPrice($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the gtin property value. 
     * @return string|null
    */
    public function getGtin(): ?string {
        return $this->gtin;
    }

    /**
     * Gets the inventory property value. 
     * @return float|null
    */
    public function getInventory(): ?float {
        return $this->inventory;
    }

    /**
     * Gets the itemCategory property value. 
     * @return ItemCategory|null
    */
    public function getItemCategory(): ?ItemCategory {
        return $this->itemCategory;
    }

    /**
     * Gets the itemCategoryCode property value. 
     * @return string|null
    */
    public function getItemCategoryCode(): ?string {
        return $this->itemCategoryCode;
    }

    /**
     * Gets the itemCategoryId property value. 
     * @return string|null
    */
    public function getItemCategoryId(): ?string {
        return $this->itemCategoryId;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the number property value. 
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the picture property value. 
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the priceIncludesTax property value. 
     * @return bool|null
    */
    public function getPriceIncludesTax(): ?bool {
        return $this->priceIncludesTax;
    }

    /**
     * Gets the taxGroupCode property value. 
     * @return string|null
    */
    public function getTaxGroupCode(): ?string {
        return $this->taxGroupCode;
    }

    /**
     * Gets the taxGroupId property value. 
     * @return string|null
    */
    public function getTaxGroupId(): ?string {
        return $this->taxGroupId;
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the unitCost property value. 
     * @return float|null
    */
    public function getUnitCost(): ?float {
        return $this->unitCost;
    }

    /**
     * Gets the unitPrice property value. 
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('baseUnitOfMeasureId', $this->baseUnitOfMeasureId);
        $writer->writeBooleanValue('blocked', $this->blocked);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('gtin', $this->gtin);
        $writer->writeFloatValue('inventory', $this->inventory);
        $writer->writeObjectValue('itemCategory', $this->itemCategory);
        $writer->writeStringValue('itemCategoryCode', $this->itemCategoryCode);
        $writer->writeStringValue('itemCategoryId', $this->itemCategoryId);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('number', $this->number);
        $writer->writeCollectionOfObjectValues('picture', $this->picture);
        $writer->writeBooleanValue('priceIncludesTax', $this->priceIncludesTax);
        $writer->writeStringValue('taxGroupCode', $this->taxGroupCode);
        $writer->writeStringValue('taxGroupId', $this->taxGroupId);
        $writer->writeStringValue('type', $this->type);
        $writer->writeFloatValue('unitCost', $this->unitCost);
        $writer->writeFloatValue('unitPrice', $this->unitPrice);
    }

    /**
     * Sets the baseUnitOfMeasureId property value. 
     *  @param string|null $value Value to set for the baseUnitOfMeasureId property.
    */
    public function setBaseUnitOfMeasureId(?string $value ): void {
        $this->baseUnitOfMeasureId = $value;
    }

    /**
     * Sets the blocked property value. 
     *  @param bool|null $value Value to set for the blocked property.
    */
    public function setBlocked(?bool $value ): void {
        $this->blocked = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the gtin property value. 
     *  @param string|null $value Value to set for the gtin property.
    */
    public function setGtin(?string $value ): void {
        $this->gtin = $value;
    }

    /**
     * Sets the inventory property value. 
     *  @param float|null $value Value to set for the inventory property.
    */
    public function setInventory(?float $value ): void {
        $this->inventory = $value;
    }

    /**
     * Sets the itemCategory property value. 
     *  @param ItemCategory|null $value Value to set for the itemCategory property.
    */
    public function setItemCategory(?ItemCategory $value ): void {
        $this->itemCategory = $value;
    }

    /**
     * Sets the itemCategoryCode property value. 
     *  @param string|null $value Value to set for the itemCategoryCode property.
    */
    public function setItemCategoryCode(?string $value ): void {
        $this->itemCategoryCode = $value;
    }

    /**
     * Sets the itemCategoryId property value. 
     *  @param string|null $value Value to set for the itemCategoryId property.
    */
    public function setItemCategoryId(?string $value ): void {
        $this->itemCategoryId = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. 
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the picture property value. 
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the priceIncludesTax property value. 
     *  @param bool|null $value Value to set for the priceIncludesTax property.
    */
    public function setPriceIncludesTax(?bool $value ): void {
        $this->priceIncludesTax = $value;
    }

    /**
     * Sets the taxGroupCode property value. 
     *  @param string|null $value Value to set for the taxGroupCode property.
    */
    public function setTaxGroupCode(?string $value ): void {
        $this->taxGroupCode = $value;
    }

    /**
     * Sets the taxGroupId property value. 
     *  @param string|null $value Value to set for the taxGroupId property.
    */
    public function setTaxGroupId(?string $value ): void {
        $this->taxGroupId = $value;
    }

    /**
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the unitCost property value. 
     *  @param float|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?float $value ): void {
        $this->unitCost = $value;
    }

    /**
     * Sets the unitPrice property value. 
     *  @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value ): void {
        $this->unitPrice = $value;
    }

}
