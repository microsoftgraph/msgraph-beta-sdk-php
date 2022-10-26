<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Item extends Entity implements Parsable 
{
    /**
     * @var string|null $baseUnitOfMeasureId The baseUnitOfMeasureId property
    */
    private ?string $baseUnitOfMeasureId = null;
    
    /**
     * @var bool|null $blocked The blocked property
    */
    private ?bool $blocked = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $gtin The gtin property
    */
    private ?string $gtin = null;
    
    /**
     * @var string|null $inventory The inventory property
    */
    private ?string $inventory = null;
    
    /**
     * @var ItemCategory|null $itemCategory The itemCategory property
    */
    private ?ItemCategory $itemCategory = null;
    
    /**
     * @var string|null $itemCategoryCode The itemCategoryCode property
    */
    private ?string $itemCategoryCode = null;
    
    /**
     * @var string|null $itemCategoryId The itemCategoryId property
    */
    private ?string $itemCategoryId = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
    /**
     * @var array<Picture>|null $picture The picture property
    */
    private ?array $picture = null;
    
    /**
     * @var bool|null $priceIncludesTax The priceIncludesTax property
    */
    private ?bool $priceIncludesTax = null;
    
    /**
     * @var string|null $taxGroupCode The taxGroupCode property
    */
    private ?string $taxGroupCode = null;
    
    /**
     * @var string|null $taxGroupId The taxGroupId property
    */
    private ?string $taxGroupId = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $unitCost The unitCost property
    */
    private ?string $unitCost = null;
    
    /**
     * @var string|null $unitPrice The unitPrice property
    */
    private ?string $unitPrice = null;
    
    /**
     * Instantiates a new item and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.item');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Item
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Item {
        return new Item();
    }

    /**
     * Gets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     * @return string|null
    */
    public function getBaseUnitOfMeasureId(): ?string {
        return $this->baseUnitOfMeasureId;
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return bool|null
    */
    public function getBlocked(): ?bool {
        return $this->blocked;
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'baseUnitOfMeasureId' => fn(ParseNode $n) => $o->setBaseUnitOfMeasureId($n->getStringValue()),
            'blocked' => fn(ParseNode $n) => $o->setBlocked($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'gtin' => fn(ParseNode $n) => $o->setGtin($n->getStringValue()),
            'inventory' => fn(ParseNode $n) => $o->setInventory($n->getStringValue()),
            'itemCategory' => fn(ParseNode $n) => $o->setItemCategory($n->getObjectValue([ItemCategory::class, 'createFromDiscriminatorValue'])),
            'itemCategoryCode' => fn(ParseNode $n) => $o->setItemCategoryCode($n->getStringValue()),
            'itemCategoryId' => fn(ParseNode $n) => $o->setItemCategoryId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'priceIncludesTax' => fn(ParseNode $n) => $o->setPriceIncludesTax($n->getBooleanValue()),
            'taxGroupCode' => fn(ParseNode $n) => $o->setTaxGroupCode($n->getStringValue()),
            'taxGroupId' => fn(ParseNode $n) => $o->setTaxGroupId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'unitCost' => fn(ParseNode $n) => $o->setUnitCost($n->getStringValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getStringValue()),
        ]);
    }

    /**
     * Gets the gtin property value. The gtin property
     * @return string|null
    */
    public function getGtin(): ?string {
        return $this->gtin;
    }

    /**
     * Gets the inventory property value. The inventory property
     * @return string|null
    */
    public function getInventory(): ?string {
        return $this->inventory;
    }

    /**
     * Gets the itemCategory property value. The itemCategory property
     * @return ItemCategory|null
    */
    public function getItemCategory(): ?ItemCategory {
        return $this->itemCategory;
    }

    /**
     * Gets the itemCategoryCode property value. The itemCategoryCode property
     * @return string|null
    */
    public function getItemCategoryCode(): ?string {
        return $this->itemCategoryCode;
    }

    /**
     * Gets the itemCategoryId property value. The itemCategoryId property
     * @return string|null
    */
    public function getItemCategoryId(): ?string {
        return $this->itemCategoryId;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the priceIncludesTax property value. The priceIncludesTax property
     * @return bool|null
    */
    public function getPriceIncludesTax(): ?bool {
        return $this->priceIncludesTax;
    }

    /**
     * Gets the taxGroupCode property value. The taxGroupCode property
     * @return string|null
    */
    public function getTaxGroupCode(): ?string {
        return $this->taxGroupCode;
    }

    /**
     * Gets the taxGroupId property value. The taxGroupId property
     * @return string|null
    */
    public function getTaxGroupId(): ?string {
        return $this->taxGroupId;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the unitCost property value. The unitCost property
     * @return string|null
    */
    public function getUnitCost(): ?string {
        return $this->unitCost;
    }

    /**
     * Gets the unitPrice property value. The unitPrice property
     * @return string|null
    */
    public function getUnitPrice(): ?string {
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
        $writer->writeStringValue('inventory', $this->inventory);
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
        $writer->writeStringValue('unitCost', $this->unitCost);
        $writer->writeStringValue('unitPrice', $this->unitPrice);
    }

    /**
     * Sets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     *  @param string|null $value Value to set for the baseUnitOfMeasureId property.
    */
    public function setBaseUnitOfMeasureId(?string $value ): void {
        $this->baseUnitOfMeasureId = $value;
    }

    /**
     * Sets the blocked property value. The blocked property
     *  @param bool|null $value Value to set for the blocked property.
    */
    public function setBlocked(?bool $value ): void {
        $this->blocked = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the gtin property value. The gtin property
     *  @param string|null $value Value to set for the gtin property.
    */
    public function setGtin(?string $value ): void {
        $this->gtin = $value;
    }

    /**
     * Sets the inventory property value. The inventory property
     *  @param string|null $value Value to set for the inventory property.
    */
    public function setInventory(?string $value ): void {
        $this->inventory = $value;
    }

    /**
     * Sets the itemCategory property value. The itemCategory property
     *  @param ItemCategory|null $value Value to set for the itemCategory property.
    */
    public function setItemCategory(?ItemCategory $value ): void {
        $this->itemCategory = $value;
    }

    /**
     * Sets the itemCategoryCode property value. The itemCategoryCode property
     *  @param string|null $value Value to set for the itemCategoryCode property.
    */
    public function setItemCategoryCode(?string $value ): void {
        $this->itemCategoryCode = $value;
    }

    /**
     * Sets the itemCategoryId property value. The itemCategoryId property
     *  @param string|null $value Value to set for the itemCategoryId property.
    */
    public function setItemCategoryId(?string $value ): void {
        $this->itemCategoryId = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. The number property
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the priceIncludesTax property value. The priceIncludesTax property
     *  @param bool|null $value Value to set for the priceIncludesTax property.
    */
    public function setPriceIncludesTax(?bool $value ): void {
        $this->priceIncludesTax = $value;
    }

    /**
     * Sets the taxGroupCode property value. The taxGroupCode property
     *  @param string|null $value Value to set for the taxGroupCode property.
    */
    public function setTaxGroupCode(?string $value ): void {
        $this->taxGroupCode = $value;
    }

    /**
     * Sets the taxGroupId property value. The taxGroupId property
     *  @param string|null $value Value to set for the taxGroupId property.
    */
    public function setTaxGroupId(?string $value ): void {
        $this->taxGroupId = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the unitCost property value. The unitCost property
     *  @param string|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?string $value ): void {
        $this->unitCost = $value;
    }

    /**
     * Sets the unitPrice property value. The unitPrice property
     *  @param string|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?string $value ): void {
        $this->unitPrice = $value;
    }

}
