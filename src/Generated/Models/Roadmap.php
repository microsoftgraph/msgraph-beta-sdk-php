<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Roadmap extends ChangeItemBase implements Parsable 
{
    /**
     * Instantiates a new Roadmap and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roadmap');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Roadmap
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Roadmap {
        return new Roadmap();
    }

    /**
     * Gets the category property value. Indicates the category with which this item is associated. Supports $filter (eq, ne, in) and $orderby.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the changeItemState property value. The changeItemState property
     * @return ChangeItemState|null
    */
    public function getChangeItemState(): ?ChangeItemState {
        $val = $this->getBackingStore()->get('changeItemState');
        if (is_null($val) || $val instanceof ChangeItemState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeItemState'");
    }

    /**
     * Gets the deliveryStage property value. The deliveryStage property
     * @return RoadmapItemDeliveryStage|null
    */
    public function getDeliveryStage(): ?RoadmapItemDeliveryStage {
        $val = $this->getBackingStore()->get('deliveryStage');
        if (is_null($val) || $val instanceof RoadmapItemDeliveryStage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deliveryStage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'changeItemState' => fn(ParseNode $n) => $o->setChangeItemState($n->getEnumValue(ChangeItemState::class)),
            'deliveryStage' => fn(ParseNode $n) => $o->setDeliveryStage($n->getEnumValue(RoadmapItemDeliveryStage::class)),
            'gotoLink' => fn(ParseNode $n) => $o->setGotoLink($n->getStringValue()),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the gotoLink property value. Link to the feature page in the Microsoft Entra admin center. Supports $filter (eq, ne, in) and $orderby.
     * @return string|null
    */
    public function getGotoLink(): ?string {
        $val = $this->getBackingStore()->get('gotoLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gotoLink'");
    }

    /**
     * Gets the publishedDateTime property value. Feature planned release date. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('publishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeEnumValue('changeItemState', $this->getChangeItemState());
        $writer->writeEnumValue('deliveryStage', $this->getDeliveryStage());
        $writer->writeStringValue('gotoLink', $this->getGotoLink());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
    }

    /**
     * Sets the category property value. Indicates the category with which this item is associated. Supports $filter (eq, ne, in) and $orderby.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the changeItemState property value. The changeItemState property
     * @param ChangeItemState|null $value Value to set for the changeItemState property.
    */
    public function setChangeItemState(?ChangeItemState $value): void {
        $this->getBackingStore()->set('changeItemState', $value);
    }

    /**
     * Sets the deliveryStage property value. The deliveryStage property
     * @param RoadmapItemDeliveryStage|null $value Value to set for the deliveryStage property.
    */
    public function setDeliveryStage(?RoadmapItemDeliveryStage $value): void {
        $this->getBackingStore()->set('deliveryStage', $value);
    }

    /**
     * Sets the gotoLink property value. Link to the feature page in the Microsoft Entra admin center. Supports $filter (eq, ne, in) and $orderby.
     * @param string|null $value Value to set for the gotoLink property.
    */
    public function setGotoLink(?string $value): void {
        $this->getBackingStore()->set('gotoLink', $value);
    }

    /**
     * Sets the publishedDateTime property value. Feature planned release date. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

}
