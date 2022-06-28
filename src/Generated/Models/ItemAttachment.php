<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAttachment extends Attachment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var OutlookItem|null $item The attached contact, message or event. Navigation property.
    */
    private ?OutlookItem $item = null;
    
    /**
     * Instantiates a new ItemAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemAttachment {
        return new ItemAttachment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'item' => function (ParseNode $n) use ($o) { $o->setItem($n->getObjectValue(array(OutlookItem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the item property value. The attached contact, message or event. Navigation property.
     * @return OutlookItem|null
    */
    public function getItem(): ?OutlookItem {
        return $this->item;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('item', $this->item);
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
     * Sets the item property value. The attached contact, message or event. Navigation property.
     *  @param OutlookItem|null $value Value to set for the item property.
    */
    public function setItem(?OutlookItem $value ): void {
        $this->item = $value;
    }

}
