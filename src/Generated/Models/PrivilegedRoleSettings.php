<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrivilegedRoleSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedRoleSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRoleSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRoleSettings {
        return new PrivilegedRoleSettings();
    }

    /**
     * Gets the approvalOnElevation property value. The approvalOnElevation property
     * @return bool|null
    */
    public function getApprovalOnElevation(): ?bool {
        $val = $this->getBackingStore()->get('approvalOnElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalOnElevation'");
    }

    /**
     * Gets the approverIds property value. The approverIds property
     * @return array<string>|null
    */
    public function getApproverIds(): ?array {
        $val = $this->getBackingStore()->get('approverIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approverIds'");
    }

    /**
     * Gets the elevationDuration property value. The elevationDuration property
     * @return DateInterval|null
    */
    public function getElevationDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('elevationDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elevationDuration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalOnElevation' => fn(ParseNode $n) => $o->setApprovalOnElevation($n->getBooleanValue()),
            'approverIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApproverIds($val);
            },
            'elevationDuration' => fn(ParseNode $n) => $o->setElevationDuration($n->getDateIntervalValue()),
            'isMfaOnElevationConfigurable' => fn(ParseNode $n) => $o->setIsMfaOnElevationConfigurable($n->getBooleanValue()),
            'lastGlobalAdmin' => fn(ParseNode $n) => $o->setLastGlobalAdmin($n->getBooleanValue()),
            'maxElavationDuration' => fn(ParseNode $n) => $o->setMaxElavationDuration($n->getDateIntervalValue()),
            'mfaOnElevation' => fn(ParseNode $n) => $o->setMfaOnElevation($n->getBooleanValue()),
            'minElevationDuration' => fn(ParseNode $n) => $o->setMinElevationDuration($n->getDateIntervalValue()),
            'notificationToUserOnElevation' => fn(ParseNode $n) => $o->setNotificationToUserOnElevation($n->getBooleanValue()),
            'ticketingInfoOnElevation' => fn(ParseNode $n) => $o->setTicketingInfoOnElevation($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isMfaOnElevationConfigurable property value. The isMfaOnElevationConfigurable property
     * @return bool|null
    */
    public function getIsMfaOnElevationConfigurable(): ?bool {
        $val = $this->getBackingStore()->get('isMfaOnElevationConfigurable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMfaOnElevationConfigurable'");
    }

    /**
     * Gets the lastGlobalAdmin property value. The lastGlobalAdmin property
     * @return bool|null
    */
    public function getLastGlobalAdmin(): ?bool {
        $val = $this->getBackingStore()->get('lastGlobalAdmin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastGlobalAdmin'");
    }

    /**
     * Gets the maxElavationDuration property value. The maxElavationDuration property
     * @return DateInterval|null
    */
    public function getMaxElavationDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('maxElavationDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxElavationDuration'");
    }

    /**
     * Gets the mfaOnElevation property value. The mfaOnElevation property
     * @return bool|null
    */
    public function getMfaOnElevation(): ?bool {
        $val = $this->getBackingStore()->get('mfaOnElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaOnElevation'");
    }

    /**
     * Gets the minElevationDuration property value. The minElevationDuration property
     * @return DateInterval|null
    */
    public function getMinElevationDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('minElevationDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minElevationDuration'");
    }

    /**
     * Gets the notificationToUserOnElevation property value. The notificationToUserOnElevation property
     * @return bool|null
    */
    public function getNotificationToUserOnElevation(): ?bool {
        $val = $this->getBackingStore()->get('notificationToUserOnElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationToUserOnElevation'");
    }

    /**
     * Gets the ticketingInfoOnElevation property value. The ticketingInfoOnElevation property
     * @return bool|null
    */
    public function getTicketingInfoOnElevation(): ?bool {
        $val = $this->getBackingStore()->get('ticketingInfoOnElevation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ticketingInfoOnElevation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('approvalOnElevation', $this->getApprovalOnElevation());
        $writer->writeCollectionOfPrimitiveValues('approverIds', $this->getApproverIds());
        $writer->writeDateIntervalValue('elevationDuration', $this->getElevationDuration());
        $writer->writeBooleanValue('isMfaOnElevationConfigurable', $this->getIsMfaOnElevationConfigurable());
        $writer->writeBooleanValue('lastGlobalAdmin', $this->getLastGlobalAdmin());
        $writer->writeDateIntervalValue('maxElavationDuration', $this->getMaxElavationDuration());
        $writer->writeBooleanValue('mfaOnElevation', $this->getMfaOnElevation());
        $writer->writeDateIntervalValue('minElevationDuration', $this->getMinElevationDuration());
        $writer->writeBooleanValue('notificationToUserOnElevation', $this->getNotificationToUserOnElevation());
        $writer->writeBooleanValue('ticketingInfoOnElevation', $this->getTicketingInfoOnElevation());
    }

    /**
     * Sets the approvalOnElevation property value. The approvalOnElevation property
     * @param bool|null $value Value to set for the approvalOnElevation property.
    */
    public function setApprovalOnElevation(?bool $value): void {
        $this->getBackingStore()->set('approvalOnElevation', $value);
    }

    /**
     * Sets the approverIds property value. The approverIds property
     * @param array<string>|null $value Value to set for the approverIds property.
    */
    public function setApproverIds(?array $value): void {
        $this->getBackingStore()->set('approverIds', $value);
    }

    /**
     * Sets the elevationDuration property value. The elevationDuration property
     * @param DateInterval|null $value Value to set for the elevationDuration property.
    */
    public function setElevationDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('elevationDuration', $value);
    }

    /**
     * Sets the isMfaOnElevationConfigurable property value. The isMfaOnElevationConfigurable property
     * @param bool|null $value Value to set for the isMfaOnElevationConfigurable property.
    */
    public function setIsMfaOnElevationConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isMfaOnElevationConfigurable', $value);
    }

    /**
     * Sets the lastGlobalAdmin property value. The lastGlobalAdmin property
     * @param bool|null $value Value to set for the lastGlobalAdmin property.
    */
    public function setLastGlobalAdmin(?bool $value): void {
        $this->getBackingStore()->set('lastGlobalAdmin', $value);
    }

    /**
     * Sets the maxElavationDuration property value. The maxElavationDuration property
     * @param DateInterval|null $value Value to set for the maxElavationDuration property.
    */
    public function setMaxElavationDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('maxElavationDuration', $value);
    }

    /**
     * Sets the mfaOnElevation property value. The mfaOnElevation property
     * @param bool|null $value Value to set for the mfaOnElevation property.
    */
    public function setMfaOnElevation(?bool $value): void {
        $this->getBackingStore()->set('mfaOnElevation', $value);
    }

    /**
     * Sets the minElevationDuration property value. The minElevationDuration property
     * @param DateInterval|null $value Value to set for the minElevationDuration property.
    */
    public function setMinElevationDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('minElevationDuration', $value);
    }

    /**
     * Sets the notificationToUserOnElevation property value. The notificationToUserOnElevation property
     * @param bool|null $value Value to set for the notificationToUserOnElevation property.
    */
    public function setNotificationToUserOnElevation(?bool $value): void {
        $this->getBackingStore()->set('notificationToUserOnElevation', $value);
    }

    /**
     * Sets the ticketingInfoOnElevation property value. The ticketingInfoOnElevation property
     * @param bool|null $value Value to set for the ticketingInfoOnElevation property.
    */
    public function setTicketingInfoOnElevation(?bool $value): void {
        $this->getBackingStore()->set('ticketingInfoOnElevation', $value);
    }

}
