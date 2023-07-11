<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedApproval extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedApproval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedApproval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedApproval {
        return new PrivilegedApproval();
    }

    /**
     * Gets the approvalDuration property value. The approvalDuration property
     * @return DateInterval|null
    */
    public function getApprovalDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('approvalDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalDuration'");
    }

    /**
     * Gets the approvalState property value. The approvalState property
     * @return ApprovalState|null
    */
    public function getApprovalState(): ?ApprovalState {
        $val = $this->getBackingStore()->get('approvalState');
        if (is_null($val) || $val instanceof ApprovalState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalState'");
    }

    /**
     * Gets the approvalType property value. The approvalType property
     * @return string|null
    */
    public function getApprovalType(): ?string {
        $val = $this->getBackingStore()->get('approvalType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalType'");
    }

    /**
     * Gets the approverReason property value. The approverReason property
     * @return string|null
    */
    public function getApproverReason(): ?string {
        $val = $this->getBackingStore()->get('approverReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approverReason'");
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalDuration' => fn(ParseNode $n) => $o->setApprovalDuration($n->getDateIntervalValue()),
            'approvalState' => fn(ParseNode $n) => $o->setApprovalState($n->getEnumValue(ApprovalState::class)),
            'approvalType' => fn(ParseNode $n) => $o->setApprovalType($n->getStringValue()),
            'approverReason' => fn(ParseNode $n) => $o->setApproverReason($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'request' => fn(ParseNode $n) => $o->setRequest($n->getObjectValue([PrivilegedRoleAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'requestorReason' => fn(ParseNode $n) => $o->setRequestorReason($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleInfo' => fn(ParseNode $n) => $o->setRoleInfo($n->getObjectValue([PrivilegedRole::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
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
     * Gets the request property value. The request property
     * @return PrivilegedRoleAssignmentRequest|null
    */
    public function getRequest(): ?PrivilegedRoleAssignmentRequest {
        $val = $this->getBackingStore()->get('request');
        if (is_null($val) || $val instanceof PrivilegedRoleAssignmentRequest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'request'");
    }

    /**
     * Gets the requestorReason property value. The requestorReason property
     * @return string|null
    */
    public function getRequestorReason(): ?string {
        $val = $this->getBackingStore()->get('requestorReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestorReason'");
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        $val = $this->getBackingStore()->get('roleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleId'");
    }

    /**
     * Gets the roleInfo property value. The roleInfo property
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        $val = $this->getBackingStore()->get('roleInfo');
        if (is_null($val) || $val instanceof PrivilegedRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleInfo'");
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
        $writer->writeDateIntervalValue('approvalDuration', $this->getApprovalDuration());
        $writer->writeEnumValue('approvalState', $this->getApprovalState());
        $writer->writeStringValue('approvalType', $this->getApprovalType());
        $writer->writeStringValue('approverReason', $this->getApproverReason());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('request', $this->getRequest());
        $writer->writeStringValue('requestorReason', $this->getRequestorReason());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeObjectValue('roleInfo', $this->getRoleInfo());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the approvalDuration property value. The approvalDuration property
     * @param DateInterval|null $value Value to set for the approvalDuration property.
    */
    public function setApprovalDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('approvalDuration', $value);
    }

    /**
     * Sets the approvalState property value. The approvalState property
     * @param ApprovalState|null $value Value to set for the approvalState property.
    */
    public function setApprovalState(?ApprovalState $value): void {
        $this->getBackingStore()->set('approvalState', $value);
    }

    /**
     * Sets the approvalType property value. The approvalType property
     * @param string|null $value Value to set for the approvalType property.
    */
    public function setApprovalType(?string $value): void {
        $this->getBackingStore()->set('approvalType', $value);
    }

    /**
     * Sets the approverReason property value. The approverReason property
     * @param string|null $value Value to set for the approverReason property.
    */
    public function setApproverReason(?string $value): void {
        $this->getBackingStore()->set('approverReason', $value);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the request property value. The request property
     * @param PrivilegedRoleAssignmentRequest|null $value Value to set for the request property.
    */
    public function setRequest(?PrivilegedRoleAssignmentRequest $value): void {
        $this->getBackingStore()->set('request', $value);
    }

    /**
     * Sets the requestorReason property value. The requestorReason property
     * @param string|null $value Value to set for the requestorReason property.
    */
    public function setRequestorReason(?string $value): void {
        $this->getBackingStore()->set('requestorReason', $value);
    }

    /**
     * Sets the roleId property value. The roleId property
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleInfo property value. The roleInfo property
     * @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value): void {
        $this->getBackingStore()->set('roleInfo', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
