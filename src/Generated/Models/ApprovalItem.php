<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApprovalItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApprovalItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalItem {
        return new ApprovalItem();
    }

    /**
     * Gets the allowCancel property value. Indicates whether the approval item can be canceled.
     * @return bool|null
    */
    public function getAllowCancel(): ?bool {
        $val = $this->getBackingStore()->get('allowCancel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCancel'");
    }

    /**
     * Gets the allowEmailNotification property value. Indicates whether email notification is enabled.
     * @return bool|null
    */
    public function getAllowEmailNotification(): ?bool {
        $val = $this->getBackingStore()->get('allowEmailNotification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEmailNotification'");
    }

    /**
     * Gets the approvalType property value. The workflow type of the approval item. The possible values are: basic, basicAwaitAll, custom, customAwaitAll. Required.
     * @return ApprovalItemType|null
    */
    public function getApprovalType(): ?ApprovalItemType {
        $val = $this->getBackingStore()->get('approvalType');
        if (is_null($val) || $val instanceof ApprovalItemType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalType'");
    }

    /**
     * Gets the approvers property value. The identity of the principals to whom the approval item was initially assigned. Required.
     * @return array<ApprovalIdentitySet>|null
    */
    public function getApprovers(): ?array {
        $val = $this->getBackingStore()->get('approvers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalIdentitySet::class);
            /** @var array<ApprovalIdentitySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvers'");
    }

    /**
     * Gets the completedDateTime property value. Approval request completion date and time. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. Creation date and time of the approval request. Read-only.
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
     * Gets the description property value. The description of the approval request.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName of the approval request. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowCancel' => fn(ParseNode $n) => $o->setAllowCancel($n->getBooleanValue()),
            'allowEmailNotification' => fn(ParseNode $n) => $o->setAllowEmailNotification($n->getBooleanValue()),
            'approvalType' => fn(ParseNode $n) => $o->setApprovalType($n->getEnumValue(ApprovalItemType::class)),
            'approvers' => fn(ParseNode $n) => $o->setApprovers($n->getCollectionOfObjectValues([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([ApprovalIdentitySet::class, 'createFromDiscriminatorValue'])),
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([ApprovalItemRequest::class, 'createFromDiscriminatorValue'])),
            'responsePrompts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResponsePrompts($val);
            },
            'responses' => fn(ParseNode $n) => $o->setResponses($n->getCollectionOfObjectValues([ApprovalItemResponse::class, 'createFromDiscriminatorValue'])),
            'result' => fn(ParseNode $n) => $o->setResult($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ApprovalItemState::class)),
            'viewPoint' => fn(ParseNode $n) => $o->setViewPoint($n->getObjectValue([ApprovalItemViewPoint::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the owner property value. The identity set of the principal who owns the approval item. Only provide a value for this property when creating an approval item on behalf of the principal. If the owner field isn't provided, the user information from the user context is used.
     * @return ApprovalIdentitySet|null
    */
    public function getOwner(): ?ApprovalIdentitySet {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || $val instanceof ApprovalIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the requests property value. A collection of requests created for each approver on the approval item.
     * @return array<ApprovalItemRequest>|null
    */
    public function getRequests(): ?array {
        $val = $this->getBackingStore()->get('requests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalItemRequest::class);
            /** @var array<ApprovalItemRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requests'");
    }

    /**
     * Gets the responsePrompts property value. Approval response prompts. Only provide a value for this property when creating a custom approval item. For custom approval items, supply two response prompt strings. The default response prompts are 'Approve' and 'Reject'.
     * @return array<string>|null
    */
    public function getResponsePrompts(): ?array {
        $val = $this->getBackingStore()->get('responsePrompts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responsePrompts'");
    }

    /**
     * Gets the responses property value. A collection of responses created for the approval item.
     * @return array<ApprovalItemResponse>|null
    */
    public function getResponses(): ?array {
        $val = $this->getBackingStore()->get('responses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalItemResponse::class);
            /** @var array<ApprovalItemResponse>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responses'");
    }

    /**
     * Gets the result property value. The result field is only populated once the approval item is in its final state. The result of the approval item is based on the approvalType. For basic approval items, the result is either 'Approved' or 'Rejected'. For custom approval items, the result could either be a single response or multiple responses separated by a semi-colon. Read-only.
     * @return string|null
    */
    public function getResult(): ?string {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the state property value. The approval item state. The possible values are: canceled, created, pending, completed. Read-only.
     * @return ApprovalItemState|null
    */
    public function getState(): ?ApprovalItemState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ApprovalItemState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the viewPoint property value. Represents user viewpoints data on the ApprovalItem. The data includes the users roles regarding the approval item. Read-only.
     * @return ApprovalItemViewPoint|null
    */
    public function getViewPoint(): ?ApprovalItemViewPoint {
        $val = $this->getBackingStore()->get('viewPoint');
        if (is_null($val) || $val instanceof ApprovalItemViewPoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'viewPoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowEmailNotification', $this->getAllowEmailNotification());
        $writer->writeEnumValue('approvalType', $this->getApprovalType());
        $writer->writeCollectionOfObjectValues('approvers', $this->getApprovers());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
        $writer->writeCollectionOfPrimitiveValues('responsePrompts', $this->getResponsePrompts());
        $writer->writeCollectionOfObjectValues('responses', $this->getResponses());
    }

    /**
     * Sets the allowCancel property value. Indicates whether the approval item can be canceled.
     * @param bool|null $value Value to set for the allowCancel property.
    */
    public function setAllowCancel(?bool $value): void {
        $this->getBackingStore()->set('allowCancel', $value);
    }

    /**
     * Sets the allowEmailNotification property value. Indicates whether email notification is enabled.
     * @param bool|null $value Value to set for the allowEmailNotification property.
    */
    public function setAllowEmailNotification(?bool $value): void {
        $this->getBackingStore()->set('allowEmailNotification', $value);
    }

    /**
     * Sets the approvalType property value. The workflow type of the approval item. The possible values are: basic, basicAwaitAll, custom, customAwaitAll. Required.
     * @param ApprovalItemType|null $value Value to set for the approvalType property.
    */
    public function setApprovalType(?ApprovalItemType $value): void {
        $this->getBackingStore()->set('approvalType', $value);
    }

    /**
     * Sets the approvers property value. The identity of the principals to whom the approval item was initially assigned. Required.
     * @param array<ApprovalIdentitySet>|null $value Value to set for the approvers property.
    */
    public function setApprovers(?array $value): void {
        $this->getBackingStore()->set('approvers', $value);
    }

    /**
     * Sets the completedDateTime property value. Approval request completion date and time. Read-only.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. Creation date and time of the approval request. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the approval request.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName of the approval request. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the owner property value. The identity set of the principal who owns the approval item. Only provide a value for this property when creating an approval item on behalf of the principal. If the owner field isn't provided, the user information from the user context is used.
     * @param ApprovalIdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?ApprovalIdentitySet $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the requests property value. A collection of requests created for each approver on the approval item.
     * @param array<ApprovalItemRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->getBackingStore()->set('requests', $value);
    }

    /**
     * Sets the responsePrompts property value. Approval response prompts. Only provide a value for this property when creating a custom approval item. For custom approval items, supply two response prompt strings. The default response prompts are 'Approve' and 'Reject'.
     * @param array<string>|null $value Value to set for the responsePrompts property.
    */
    public function setResponsePrompts(?array $value): void {
        $this->getBackingStore()->set('responsePrompts', $value);
    }

    /**
     * Sets the responses property value. A collection of responses created for the approval item.
     * @param array<ApprovalItemResponse>|null $value Value to set for the responses property.
    */
    public function setResponses(?array $value): void {
        $this->getBackingStore()->set('responses', $value);
    }

    /**
     * Sets the result property value. The result field is only populated once the approval item is in its final state. The result of the approval item is based on the approvalType. For basic approval items, the result is either 'Approved' or 'Rejected'. For custom approval items, the result could either be a single response or multiple responses separated by a semi-colon. Read-only.
     * @param string|null $value Value to set for the result property.
    */
    public function setResult(?string $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the state property value. The approval item state. The possible values are: canceled, created, pending, completed. Read-only.
     * @param ApprovalItemState|null $value Value to set for the state property.
    */
    public function setState(?ApprovalItemState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the viewPoint property value. Represents user viewpoints data on the ApprovalItem. The data includes the users roles regarding the approval item. Read-only.
     * @param ApprovalItemViewPoint|null $value Value to set for the viewPoint property.
    */
    public function setViewPoint(?ApprovalItemViewPoint $value): void {
        $this->getBackingStore()->set('viewPoint', $value);
    }

}
