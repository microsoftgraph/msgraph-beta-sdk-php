<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Item extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Item {
        return new Item();
    }

    /**
     * Gets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     * @return string|null
    */
    public function getBaseUnitOfMeasureId(): ?string {
        return $this->getBackingStore()->get('baseUnitOfMeasureId');
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return bool|null
    */
    public function getBlocked(): ?bool {
        return $this->getBackingStore()->get('blocked');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
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
        return $this->getBackingStore()->get('gtin');
    }

    /**
     * Gets the inventory property value. The inventory property
     * @return string|null
    */
    public function getInventory(): ?string {
        return $this->getBackingStore()->get('inventory');
    }

    /**
     * Gets the itemCategory property value. The itemCategory property
     * @return ItemCategory|null
    */
    public function getItemCategory(): ?ItemCategory {
        return $this->getBackingStore()->get('itemCategory');
    }

    /**
     * Gets the itemCategoryCode property value. The itemCategoryCode property
     * @return string|null
    */
    public function getItemCategoryCode(): ?string {
        return $this->getBackingStore()->get('itemCategoryCode');
    }

    /**
     * Gets the itemCategoryId property value. The itemCategoryId property
     * @return string|null
    */
    public function getItemCategoryId(): ?string {
        return $this->getBackingStore()->get('itemCategoryId');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->getBackingStore()->get('picture');
    }

    /**
     * Gets the priceIncludesTax property value. The priceIncludesTax property
     * @return bool|null
    */
    public function getPriceIncludesTax(): ?bool {
        return $this->getBackingStore()->get('priceIncludesTax');
    }

    /**
     * Gets the taxGroupCode property value. The taxGroupCode property
     * @return string|null
    */
    public function getTaxGroupCode(): ?string {
        return $this->getBackingStore()->get('taxGroupCode');
    }

    /**
     * Gets the taxGroupId property value. The taxGroupId property
     * @return string|null
    */
    public function getTaxGroupId(): ?string {
        return $this->getBackingStore()->get('taxGroupId');
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the unitCost property value. The unitCost property
     * @return string|null
    */
    public function getUnitCost(): ?string {
        return $this->getBackingStore()->get('unitCost');
    }

    /**
     * Gets the unitPrice property value. The unitPrice property
     * @return string|null
    */
    public function getUnitPrice(): ?string {
        return $this->getBackingStore()->get('unitPrice');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('baseUnitOfMeasureId', $this->getBaseUnitOfMeasureId());
        $writer->writeBooleanValue('blocked', $this->getBlocked());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('gtin', $this->getGtin());
        $writer->writeStringValue('inventory', $this->getInventory());
        $writer->writeObjectValue('itemCategory', $this->getItemCategory());
        $writer->writeStringValue('itemCategoryCode', $this->getItemCategoryCode());
        $writer->writeStringValue('itemCategoryId', $this->getItemCategoryId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeBooleanValue('priceIncludesTax', $this->getPriceIncludesTax());
        $writer->writeStringValue('taxGroupCode', $this->getTaxGroupCode());
        $writer->writeStringValue('taxGroupId', $this->getTaxGroupId());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('unitCost', $this->getUnitCost());
        $writer->writeStringValue('unitPrice', $this->getUnitPrice());
    }

    /**
     * Sets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     *  @param string|null $value Value to set for the baseUnitOfMeasureId property.
    */
    public function setBaseUnitOfMeasureId(?string $value): void {
        $this->getBackingStore()->set('baseUnitOfMeasureId', $value);
    }

    /**
     * Sets the blocked property value. The blocked property
     *  @param bool|null $value Value to set for the blocked property.
    */
    public function setBlocked(?bool $value): void {
        $this->getBackingStore()->set('blocked', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the gtin property value. The gtin property
     *  @param string|null $value Value to set for the gtin property.
    */
    public function setGtin(?string $value): void {
        $this->getBackingStore()->set('gtin', $value);
    }

    /**
     * Sets the inventory property value. The inventory property
     *  @param string|null $value Value to set for the inventory property.
    */
    public function setInventory(?string $value): void {
        $this->getBackingStore()->set('inventory', $value);
    }

    /**
     * Sets the itemCategory property value. The itemCategory property
     *  @param ItemCategory|null $value Value to set for the itemCategory property.
    */
    public function setItemCategory(?ItemCategory $value): void {
        $this->getBackingStore()->set('itemCategory', $value);
    }

    /**
     * Sets the itemCategoryCode property value. The itemCategoryCode property
     *  @param string|null $value Value to set for the itemCategoryCode property.
    */
    public function setItemCategoryCode(?string $value): void {
        $this->getBackingStore()->set('itemCategoryCode', $value);
    }

    /**
     * Sets the itemCategoryId property value. The itemCategoryId property
     *  @param string|null $value Value to set for the itemCategoryId property.
    */
    public function setItemCategoryId(?string $value): void {
        $this->getBackingStore()->set('itemCategoryId', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the number property value. The number property
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the priceIncludesTax property value. The priceIncludesTax property
     *  @param bool|null $value Value to set for the priceIncludesTax property.
    */
    public function setPriceIncludesTax(?bool $value): void {
        $this->getBackingStore()->set('priceIncludesTax', $value);
    }

    /**
     * Sets the taxGroupCode property value. The taxGroupCode property
     *  @param string|null $value Value to set for the taxGroupCode property.
    */
    public function setTaxGroupCode(?string $value): void {
        $this->getBackingStore()->set('taxGroupCode', $value);
    }

    /**
     * Sets the taxGroupId property value. The taxGroupId property
     *  @param string|null $value Value to set for the taxGroupId property.
    */
    public function setTaxGroupId(?string $value): void {
        $this->getBackingStore()->set('taxGroupId', $value);
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the unitCost property value. The unitCost property
     *  @param string|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?string $value): void {
        $this->getBackingStore()->set('unitCost', $value);
    }

    /**
     * Sets the unitPrice property value. The unitPrice property
     *  @param string|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?string $value): void {
        $this->getBackingStore()->set('unitPrice', $value);
    }

}
