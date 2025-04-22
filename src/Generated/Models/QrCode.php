<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QrCode extends Entity implements Parsable 
{
    /**
     * Instantiates a new QrCode and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QrCode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QrCode {
        return new QrCode();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the expireDateTime property value. The expireDateTime property
     * @return DateTime|null
    */
    public function getExpireDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expireDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expireDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'expireDateTime' => fn(ParseNode $n) => $o->setExpireDateTime($n->getDateTimeValue()),
            'image' => fn(ParseNode $n) => $o->setImage($n->getObjectValue([QrCodeImageDetails::class, 'createFromDiscriminatorValue'])),
            'lastUsedDateTime' => fn(ParseNode $n) => $o->setLastUsedDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the image property value. The image property
     * @return QrCodeImageDetails|null
    */
    public function getImage(): ?QrCodeImageDetails {
        $val = $this->getBackingStore()->get('image');
        if (is_null($val) || $val instanceof QrCodeImageDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'image'");
    }

    /**
     * Gets the lastUsedDateTime property value. The lastUsedDateTime property
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUsedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsedDateTime'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('expireDateTime', $this->getExpireDateTime());
        $writer->writeObjectValue('image', $this->getImage());
        $writer->writeDateTimeValue('lastUsedDateTime', $this->getLastUsedDateTime());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the expireDateTime property value. The expireDateTime property
     * @param DateTime|null $value Value to set for the expireDateTime property.
    */
    public function setExpireDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expireDateTime', $value);
    }

    /**
     * Sets the image property value. The image property
     * @param QrCodeImageDetails|null $value Value to set for the image property.
    */
    public function setImage(?QrCodeImageDetails $value): void {
        $this->getBackingStore()->set('image', $value);
    }

    /**
     * Sets the lastUsedDateTime property value. The lastUsedDateTime property
     * @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUsedDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
