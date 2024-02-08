<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Item implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Item and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     * @return string|null
    */
    public function getBaseUnitOfMeasureId(): ?string {
        $val = $this->getBackingStore()->get('baseUnitOfMeasureId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseUnitOfMeasureId'");
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return bool|null
    */
    public function getBlocked(): ?bool {
        $val = $this->getBackingStore()->get('blocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blocked'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'baseUnitOfMeasureId' => fn(ParseNode $n) => $o->setBaseUnitOfMeasureId($n->getStringValue()),
            'blocked' => fn(ParseNode $n) => $o->setBlocked($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'gtin' => fn(ParseNode $n) => $o->setGtin($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inventory' => fn(ParseNode $n) => $o->setInventory($n->getStringValue()),
            'itemCategory' => fn(ParseNode $n) => $o->setItemCategory($n->getObjectValue([ItemCategory::class, 'createFromDiscriminatorValue'])),
            'itemCategoryCode' => fn(ParseNode $n) => $o->setItemCategoryCode($n->getStringValue()),
            'itemCategoryId' => fn(ParseNode $n) => $o->setItemCategoryId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'priceIncludesTax' => fn(ParseNode $n) => $o->setPriceIncludesTax($n->getBooleanValue()),
            'taxGroupCode' => fn(ParseNode $n) => $o->setTaxGroupCode($n->getStringValue()),
            'taxGroupId' => fn(ParseNode $n) => $o->setTaxGroupId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'unitCost' => fn(ParseNode $n) => $o->setUnitCost($n->getStringValue()),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getStringValue()),
        ];
    }

    /**
     * Gets the gtin property value. The gtin property
     * @return string|null
    */
    public function getGtin(): ?string {
        $val = $this->getBackingStore()->get('gtin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gtin'");
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the inventory property value. The inventory property
     * @return string|null
    */
    public function getInventory(): ?string {
        $val = $this->getBackingStore()->get('inventory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inventory'");
    }

    /**
     * Gets the itemCategory property value. The itemCategory property
     * @return ItemCategory|null
    */
    public function getItemCategory(): ?ItemCategory {
        $val = $this->getBackingStore()->get('itemCategory');
        if (is_null($val) || $val instanceof ItemCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemCategory'");
    }

    /**
     * Gets the itemCategoryCode property value. The itemCategoryCode property
     * @return string|null
    */
    public function getItemCategoryCode(): ?string {
        $val = $this->getBackingStore()->get('itemCategoryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemCategoryCode'");
    }

    /**
     * Gets the itemCategoryId property value. The itemCategoryId property
     * @return string|null
    */
    public function getItemCategoryId(): ?string {
        $val = $this->getBackingStore()->get('itemCategoryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemCategoryId'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        $val = $this->getBackingStore()->get('number');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'number'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        $val = $this->getBackingStore()->get('picture');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Picture::class);
            /** @var array<Picture>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'picture'");
    }

    /**
     * Gets the priceIncludesTax property value. The priceIncludesTax property
     * @return bool|null
    */
    public function getPriceIncludesTax(): ?bool {
        $val = $this->getBackingStore()->get('priceIncludesTax');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priceIncludesTax'");
    }

    /**
     * Gets the taxGroupCode property value. The taxGroupCode property
     * @return string|null
    */
    public function getTaxGroupCode(): ?string {
        $val = $this->getBackingStore()->get('taxGroupCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxGroupCode'");
    }

    /**
     * Gets the taxGroupId property value. The taxGroupId property
     * @return string|null
    */
    public function getTaxGroupId(): ?string {
        $val = $this->getBackingStore()->get('taxGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxGroupId'");
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the unitCost property value. The unitCost property
     * @return string|null
    */
    public function getUnitCost(): ?string {
        $val = $this->getBackingStore()->get('unitCost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unitCost'");
    }

    /**
     * Gets the unitPrice property value. The unitPrice property
     * @return string|null
    */
    public function getUnitPrice(): ?string {
        $val = $this->getBackingStore()->get('unitPrice');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unitPrice'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('baseUnitOfMeasureId', $this->getBaseUnitOfMeasureId());
        $writer->writeBooleanValue('blocked', $this->getBlocked());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('gtin', $this->getGtin());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('inventory', $this->getInventory());
        $writer->writeObjectValue('itemCategory', $this->getItemCategory());
        $writer->writeStringValue('itemCategoryCode', $this->getItemCategoryCode());
        $writer->writeStringValue('itemCategoryId', $this->getItemCategoryId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeBooleanValue('priceIncludesTax', $this->getPriceIncludesTax());
        $writer->writeStringValue('taxGroupCode', $this->getTaxGroupCode());
        $writer->writeStringValue('taxGroupId', $this->getTaxGroupId());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('unitCost', $this->getUnitCost());
        $writer->writeStringValue('unitPrice', $this->getUnitPrice());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the baseUnitOfMeasureId property value. The baseUnitOfMeasureId property
     * @param string|null $value Value to set for the baseUnitOfMeasureId property.
    */
    public function setBaseUnitOfMeasureId(?string $value): void {
        $this->getBackingStore()->set('baseUnitOfMeasureId', $value);
    }

    /**
     * Sets the blocked property value. The blocked property
     * @param bool|null $value Value to set for the blocked property.
    */
    public function setBlocked(?bool $value): void {
        $this->getBackingStore()->set('blocked', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the gtin property value. The gtin property
     * @param string|null $value Value to set for the gtin property.
    */
    public function setGtin(?string $value): void {
        $this->getBackingStore()->set('gtin', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the inventory property value. The inventory property
     * @param string|null $value Value to set for the inventory property.
    */
    public function setInventory(?string $value): void {
        $this->getBackingStore()->set('inventory', $value);
    }

    /**
     * Sets the itemCategory property value. The itemCategory property
     * @param ItemCategory|null $value Value to set for the itemCategory property.
    */
    public function setItemCategory(?ItemCategory $value): void {
        $this->getBackingStore()->set('itemCategory', $value);
    }

    /**
     * Sets the itemCategoryCode property value. The itemCategoryCode property
     * @param string|null $value Value to set for the itemCategoryCode property.
    */
    public function setItemCategoryCode(?string $value): void {
        $this->getBackingStore()->set('itemCategoryCode', $value);
    }

    /**
     * Sets the itemCategoryId property value. The itemCategoryId property
     * @param string|null $value Value to set for the itemCategoryId property.
    */
    public function setItemCategoryId(?string $value): void {
        $this->getBackingStore()->set('itemCategoryId', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the picture property value. The picture property
     * @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the priceIncludesTax property value. The priceIncludesTax property
     * @param bool|null $value Value to set for the priceIncludesTax property.
    */
    public function setPriceIncludesTax(?bool $value): void {
        $this->getBackingStore()->set('priceIncludesTax', $value);
    }

    /**
     * Sets the taxGroupCode property value. The taxGroupCode property
     * @param string|null $value Value to set for the taxGroupCode property.
    */
    public function setTaxGroupCode(?string $value): void {
        $this->getBackingStore()->set('taxGroupCode', $value);
    }

    /**
     * Sets the taxGroupId property value. The taxGroupId property
     * @param string|null $value Value to set for the taxGroupId property.
    */
    public function setTaxGroupId(?string $value): void {
        $this->getBackingStore()->set('taxGroupId', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the unitCost property value. The unitCost property
     * @param string|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?string $value): void {
        $this->getBackingStore()->set('unitCost', $value);
    }

    /**
     * Sets the unitPrice property value. The unitPrice property
     * @param string|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?string $value): void {
        $this->getBackingStore()->set('unitPrice', $value);
    }

}
