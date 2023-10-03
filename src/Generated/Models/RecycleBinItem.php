<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecycleBinItem extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new recycleBinItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.recycleBinItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecycleBinItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecycleBinItem {
        return new RecycleBinItem();
    }

    /**
     * Gets the deletedDateTime property value. The deletedDateTime property
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * Gets the deletedFromLocation property value. The deletedFromLocation property
     * @return string|null
    */
    public function getDeletedFromLocation(): ?string {
        $val = $this->getBackingStore()->get('deletedFromLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedFromLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'deletedFromLocation' => fn(ParseNode $n) => $o->setDeletedFromLocation($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeStringValue('deletedFromLocation', $this->getDeletedFromLocation());
        $writer->writeIntegerValue('size', $this->getSize());
    }

    /**
     * Sets the deletedDateTime property value. The deletedDateTime property
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the deletedFromLocation property value. The deletedFromLocation property
     * @param string|null $value Value to set for the deletedFromLocation property.
    */
    public function setDeletedFromLocation(?string $value): void {
        $this->getBackingStore()->set('deletedFromLocation', $value);
    }

    /**
     * Sets the size property value. The size property
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

}
