<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedApproval extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateInterval|null $approvalDuration The approvalDuration property
    */
    private ?DateInterval $approvalDuration = null;
    
    /**
     * @var ApprovalState|null $approvalState Possible values are: pending, approved, denied, aborted, canceled.
    */
    private ?ApprovalState $approvalState = null;
    
    /**
     * @var string|null $approvalType The approvalType property
    */
    private ?string $approvalType = null;
    
    /**
     * @var string|null $approverReason The approverReason property
    */
    private ?string $approverReason = null;
    
    /**
     * @var DateTime|null $endDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var PrivilegedRoleAssignmentRequest|null $request Read-only. The role assignment request for this approval object
    */
    private ?PrivilegedRoleAssignmentRequest $request = null;
    
    /**
     * @var string|null $requestorReason The requestorReason property
    */
    private ?string $requestorReason = null;
    
    /**
     * @var string|null $roleId The roleId property
    */
    private ?string $roleId = null;
    
    /**
     * @var PrivilegedRole|null $roleInfo The roleInfo property
    */
    private ?PrivilegedRole $roleInfo = null;
    
    /**
     * @var DateTime|null $startDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new PrivilegedApproval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approvalDuration property value. The approvalDuration property
     * @return DateInterval|null
    */
    public function getApprovalDuration(): ?DateInterval {
        return $this->approvalDuration;
    }

    /**
     * Gets the approvalState property value. Possible values are: pending, approved, denied, aborted, canceled.
     * @return ApprovalState|null
    */
    public function getApprovalState(): ?ApprovalState {
        return $this->approvalState;
    }

    /**
     * Gets the approvalType property value. The approvalType property
     * @return string|null
    */
    public function getApprovalType(): ?string {
        return $this->approvalType;
    }

    /**
     * Gets the approverReason property value. The approverReason property
     * @return string|null
    */
    public function getApproverReason(): ?string {
        return $this->approverReason;
    }

    /**
     * Gets the endDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalDuration' => function (ParseNode $n) use ($o) { $o->setApprovalDuration($n->getDateIntervalValue()); },
            'approvalState' => function (ParseNode $n) use ($o) { $o->setApprovalState($n->getEnumValue(ApprovalState::class)); },
            'approvalType' => function (ParseNode $n) use ($o) { $o->setApprovalType($n->getStringValue()); },
            'approverReason' => function (ParseNode $n) use ($o) { $o->setApproverReason($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'request' => function (ParseNode $n) use ($o) { $o->setRequest($n->getObjectValue(array(PrivilegedRoleAssignmentRequest::class, 'createFromDiscriminatorValue'))); },
            'requestorReason' => function (ParseNode $n) use ($o) { $o->setRequestorReason($n->getStringValue()); },
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleInfo' => function (ParseNode $n) use ($o) { $o->setRoleInfo($n->getObjectValue(array(PrivilegedRole::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the request property value. Read-only. The role assignment request for this approval object
     * @return PrivilegedRoleAssignmentRequest|null
    */
    public function getRequest(): ?PrivilegedRoleAssignmentRequest {
        return $this->request;
    }

    /**
     * Gets the requestorReason property value. The requestorReason property
     * @return string|null
    */
    public function getRequestorReason(): ?string {
        return $this->requestorReason;
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleInfo property value. The roleInfo property
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->roleInfo;
    }

    /**
     * Gets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('approvalDuration', $this->approvalDuration);
        $writer->writeEnumValue('approvalState', $this->approvalState);
        $writer->writeStringValue('approvalType', $this->approvalType);
        $writer->writeStringValue('approverReason', $this->approverReason);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeObjectValue('request', $this->request);
        $writer->writeStringValue('requestorReason', $this->requestorReason);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeObjectValue('roleInfo', $this->roleInfo);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('userId', $this->userId);
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
     * Sets the approvalDuration property value. The approvalDuration property
     *  @param DateInterval|null $value Value to set for the approvalDuration property.
    */
    public function setApprovalDuration(?DateInterval $value ): void {
        $this->approvalDuration = $value;
    }

    /**
     * Sets the approvalState property value. Possible values are: pending, approved, denied, aborted, canceled.
     *  @param ApprovalState|null $value Value to set for the approvalState property.
    */
    public function setApprovalState(?ApprovalState $value ): void {
        $this->approvalState = $value;
    }

    /**
     * Sets the approvalType property value. The approvalType property
     *  @param string|null $value Value to set for the approvalType property.
    */
    public function setApprovalType(?string $value ): void {
        $this->approvalType = $value;
    }

    /**
     * Sets the approverReason property value. The approverReason property
     *  @param string|null $value Value to set for the approverReason property.
    */
    public function setApproverReason(?string $value ): void {
        $this->approverReason = $value;
    }

    /**
     * Sets the endDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the request property value. Read-only. The role assignment request for this approval object
     *  @param PrivilegedRoleAssignmentRequest|null $value Value to set for the request property.
    */
    public function setRequest(?PrivilegedRoleAssignmentRequest $value ): void {
        $this->request = $value;
    }

    /**
     * Sets the requestorReason property value. The requestorReason property
     *  @param string|null $value Value to set for the requestorReason property.
    */
    public function setRequestorReason(?string $value ): void {
        $this->requestorReason = $value;
    }

    /**
     * Sets the roleId property value. The roleId property
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleInfo property value. The roleInfo property
     *  @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value ): void {
        $this->roleInfo = $value;
    }

    /**
     * Sets the startDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the userId property value. The userId property
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
