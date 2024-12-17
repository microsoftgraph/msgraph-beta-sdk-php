<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Announcement extends ChangeItemBase implements Parsable 
{
    /**
     * Instantiates a new Announcement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.announcement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Announcement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Announcement {
        return new Announcement();
    }

    /**
     * Gets the announcementDateTime property value. Change announcement date. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @return DateTime|null
    */
    public function getAnnouncementDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('announcementDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'announcementDateTime'");
    }

    /**
     * Gets the changeType property value. The changeType property
     * @return ChangeAnnouncementChangeType|null
    */
    public function getChangeType(): ?ChangeAnnouncementChangeType {
        $val = $this->getBackingStore()->get('changeType');
        if (is_null($val) || $val instanceof ChangeAnnouncementChangeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'announcementDateTime' => fn(ParseNode $n) => $o->setAnnouncementDateTime($n->getDateTimeValue()),
            'changeType' => fn(ParseNode $n) => $o->setChangeType($n->getEnumValue(ChangeAnnouncementChangeType::class)),
            'impactLink' => fn(ParseNode $n) => $o->setImpactLink($n->getStringValue()),
            'isCustomerActionRequired' => fn(ParseNode $n) => $o->setIsCustomerActionRequired($n->getBooleanValue()),
            'targetDateTime' => fn(ParseNode $n) => $o->setTargetDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the impactLink property value. Change impact URL. Supports $filter (eq, ne, in) and $orderby.
     * @return string|null
    */
    public function getImpactLink(): ?string {
        $val = $this->getBackingStore()->get('impactLink');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactLink'");
    }

    /**
     * Gets the isCustomerActionRequired property value. Indicates whether the customer needs to take any action for this change. Supports $filter (eq, ne).
     * @return bool|null
    */
    public function getIsCustomerActionRequired(): ?bool {
        $val = $this->getBackingStore()->get('isCustomerActionRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCustomerActionRequired'");
    }

    /**
     * Gets the targetDateTime property value. Date on which the change rolls out. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @return DateTime|null
    */
    public function getTargetDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('targetDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('announcementDateTime', $this->getAnnouncementDateTime());
        $writer->writeEnumValue('changeType', $this->getChangeType());
        $writer->writeStringValue('impactLink', $this->getImpactLink());
        $writer->writeBooleanValue('isCustomerActionRequired', $this->getIsCustomerActionRequired());
        $writer->writeDateTimeValue('targetDateTime', $this->getTargetDateTime());
    }

    /**
     * Sets the announcementDateTime property value. Change announcement date. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @param DateTime|null $value Value to set for the announcementDateTime property.
    */
    public function setAnnouncementDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('announcementDateTime', $value);
    }

    /**
     * Sets the changeType property value. The changeType property
     * @param ChangeAnnouncementChangeType|null $value Value to set for the changeType property.
    */
    public function setChangeType(?ChangeAnnouncementChangeType $value): void {
        $this->getBackingStore()->set('changeType', $value);
    }

    /**
     * Sets the impactLink property value. Change impact URL. Supports $filter (eq, ne, in) and $orderby.
     * @param string|null $value Value to set for the impactLink property.
    */
    public function setImpactLink(?string $value): void {
        $this->getBackingStore()->set('impactLink', $value);
    }

    /**
     * Sets the isCustomerActionRequired property value. Indicates whether the customer needs to take any action for this change. Supports $filter (eq, ne).
     * @param bool|null $value Value to set for the isCustomerActionRequired property.
    */
    public function setIsCustomerActionRequired(?bool $value): void {
        $this->getBackingStore()->set('isCustomerActionRequired', $value);
    }

    /**
     * Sets the targetDateTime property value. Date on which the change rolls out. Supports $filter (eq, ne, gt, lt, le and ge on year(), month(), day(), hour(), minute(), and second() built in functions) and $orderby.
     * @param DateTime|null $value Value to set for the targetDateTime property.
    */
    public function setTargetDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('targetDateTime', $value);
    }

}
