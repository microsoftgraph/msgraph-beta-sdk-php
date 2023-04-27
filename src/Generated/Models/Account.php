<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Account extends Entity implements Parsable 
{
    /**
     * Instantiates a new Account and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Account
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Account {
        return new Account();
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return bool|null
    */
    public function getBlocked(): ?bool {
        return $this->getBackingStore()->get('blocked');
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->getBackingStore()->get('category');
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
            'blocked' => fn(ParseNode $n) => $o->setBlocked($n->getBooleanValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'subCategory' => fn(ParseNode $n) => $o->setSubCategory($n->getStringValue()),
        ]);
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
     * Gets the subCategory property value. The subCategory property
     * @return string|null
    */
    public function getSubCategory(): ?string {
        return $this->getBackingStore()->get('subCategory');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('blocked', $this->getBlocked());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('subCategory', $this->getSubCategory());
    }

    /**
     * Sets the blocked property value. The blocked property
     * @param bool|null $value Value to set for the blocked property.
    */
    public function setBlocked(?bool $value): void {
        $this->getBackingStore()->set('blocked', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
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
     * Sets the subCategory property value. The subCategory property
     * @param string|null $value Value to set for the subCategory property.
    */
    public function setSubCategory(?string $value): void {
        $this->getBackingStore()->set('subCategory', $value);
    }

}
