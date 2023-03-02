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
        return $this->getBackingStore()->get('approvalDuration');
    }

    /**
     * Gets the approvalState property value. Possible values are: pending, approved, denied, aborted, canceled.
     * @return ApprovalState|null
    */
    public function getApprovalState(): ?ApprovalState {
        return $this->getBackingStore()->get('approvalState');
    }

    /**
     * Gets the approvalType property value. The approvalType property
     * @return string|null
    */
    public function getApprovalType(): ?string {
        return $this->getBackingStore()->get('approvalType');
    }

    /**
     * Gets the approverReason property value. The approverReason property
     * @return string|null
    */
    public function getApproverReason(): ?string {
        return $this->getBackingStore()->get('approverReason');
    }

    /**
     * Gets the endDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalDuration' => fn(ParseNode $n) => $o->setApprovalDuration($n->getDateIntervalValue()),
            'approvalState' => fn(ParseNode $n) => $o->setApprovalState($n->getEnumValue(ApprovalState::class)),
            'approvalType' => fn(ParseNode $n) => $o->setApprovalType($n->getStringValue()),
            'approverReason' => fn(ParseNode $n) => $o->setApproverReason($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'request' => fn(ParseNode $n) => $o->setRequest($n->getObjectValue([PrivilegedRoleAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'requestorReason' => fn(ParseNode $n) => $o->setRequestorReason($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleInfo' => fn(ParseNode $n) => $o->setRoleInfo($n->getObjectValue([PrivilegedRole::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the request property value. Read-only. The role assignment request for this approval object
     * @return PrivilegedRoleAssignmentRequest|null
    */
    public function getRequest(): ?PrivilegedRoleAssignmentRequest {
        return $this->getBackingStore()->get('request');
    }

    /**
     * Gets the requestorReason property value. The requestorReason property
     * @return string|null
    */
    public function getRequestorReason(): ?string {
        return $this->getBackingStore()->get('requestorReason');
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->getBackingStore()->get('roleId');
    }

    /**
     * Gets the roleInfo property value. The roleInfo property
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->getBackingStore()->get('roleInfo');
    }

    /**
     * Gets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
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
     * Sets the approvalState property value. Possible values are: pending, approved, denied, aborted, canceled.
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
     * Sets the endDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the request property value. Read-only. The role assignment request for this approval object
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
     * Sets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
