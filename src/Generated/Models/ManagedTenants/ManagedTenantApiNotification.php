<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenantApiNotification extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedTenantApiNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenantApiNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenantApiNotification {
        return new ManagedTenantApiNotification();
    }

    /**
     * Gets the alert property value. The alert property
     * @return ManagedTenantAlert|null
    */
    public function getAlert(): ?ManagedTenantAlert {
        $val = $this->getBackingStore()->get('alert');
        if (is_null($val) || $val instanceof ManagedTenantAlert) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alert'");
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('createdByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUserId'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alert' => fn(ParseNode $n) => $o->setAlert($n->getObjectValue([ManagedTenantAlert::class, 'createFromDiscriminatorValue'])),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isAcknowledged' => fn(ParseNode $n) => $o->setIsAcknowledged($n->getBooleanValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAcknowledged property value. The isAcknowledged property
     * @return bool|null
    */
    public function getIsAcknowledged(): ?bool {
        $val = $this->getBackingStore()->get('isAcknowledged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAcknowledged'");
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        $val = $this->getBackingStore()->get('lastActionByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionByUserId'");
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alert', $this->getAlert());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isAcknowledged', $this->getIsAcknowledged());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the alert property value. The alert property
     * @param ManagedTenantAlert|null $value Value to set for the alert property.
    */
    public function setAlert(?ManagedTenantAlert $value): void {
        $this->getBackingStore()->set('alert', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isAcknowledged property value. The isAcknowledged property
     * @param bool|null $value Value to set for the isAcknowledged property.
    */
    public function setIsAcknowledged(?bool $value): void {
        $this->getBackingStore()->set('isAcknowledged', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     * @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
