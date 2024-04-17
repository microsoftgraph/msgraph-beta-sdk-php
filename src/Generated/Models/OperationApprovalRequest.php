<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The OperationApprovalRequest entity encompasses the operation an admin wishes to perform and is requesting approval to complete. It contains the detail of the operation one wishes to perform, user metadata of the requestor, and a justification for the change. It allows for several operations for both the requestor and the potential approver to either approve, deny, or cancel the request and a response justification to provide information for the decision.
*/
class OperationApprovalRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new OperationApprovalRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperationApprovalRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperationApprovalRequest {
        return new OperationApprovalRequest();
    }

    /**
     * Gets the approvalJustification property value. Indicates the justification for approving or rejecting the request. Maximum length of justification is 1024 characters. For example: 'Approved per Change 23423 - needed for Feb 2023 application baseline updates.' Read-only. This property is read-only.
     * @return string|null
    */
    public function getApprovalJustification(): ?string {
        $val = $this->getBackingStore()->get('approvalJustification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalJustification'");
    }

    /**
     * Gets the approver property value. The identity of the approver as an Identity Set. Optionally contains the application ID, the device ID and the User ID. See information about this type here: https://learn.microsoft.com/graph/api/resources/identityset?view=graph-rest-1.0. Read-only. This property is read-only.
     * @return IdentitySet|null
    */
    public function getApprover(): ?IdentitySet {
        $val = $this->getBackingStore()->get('approver');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approver'");
    }

    /**
     * Gets the expirationDateTime property value. Indicates the DateTime when any action on the approval request is no longer permitted. The value cannot be modified and is automatically populated when the request is created using expiration offset values defined in the service controllers. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalJustification' => fn(ParseNode $n) => $o->setApprovalJustification($n->getStringValue()),
            'approver' => fn(ParseNode $n) => $o->setApprover($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'requestJustification' => fn(ParseNode $n) => $o->setRequestJustification($n->getStringValue()),
            'requestor' => fn(ParseNode $n) => $o->setRequestor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'requiredOperationApprovalPolicyTypes' => fn(ParseNode $n) => $o->setRequiredOperationApprovalPolicyTypes($n->getCollectionOfEnumValues(OperationApprovalPolicyType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OperationApprovalRequestStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Indicates the last DateTime that the request was modified. The value cannot be modified and is automatically populated whenever values in the request are updated. For example, when the 'status' property changes from needsApproval to approved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the requestDateTime property value. Indicates the DateTime that the request was made. The value cannot be modified and is automatically populated when the request is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDateTime'");
    }

    /**
     * Gets the requestJustification property value. Indicates the justification for creating the request. Maximum length of justification is 1024 characters. For example: 'Needed for Feb 2023 application baseline updates.' Read-only. This property is read-only.
     * @return string|null
    */
    public function getRequestJustification(): ?string {
        $val = $this->getBackingStore()->get('requestJustification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestJustification'");
    }

    /**
     * Gets the requestor property value. The identity of the requestor as an Identity Set. Optionally contains the application ID, the device ID and the User ID. See information about this type here: https://learn.microsoft.com/graph/api/resources/identityset?view=graph-rest-1.0. Read-only. This property is read-only.
     * @return IdentitySet|null
    */
    public function getRequestor(): ?IdentitySet {
        $val = $this->getBackingStore()->get('requestor');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestor'");
    }

    /**
     * Gets the requiredOperationApprovalPolicyTypes property value. Indicates the approval policy types required by the request in order for the request to be approved or rejected. Read-only. This property is read-only.
     * @return array<OperationApprovalPolicyType>|null
    */
    public function getRequiredOperationApprovalPolicyTypes(): ?array {
        $val = $this->getBackingStore()->get('requiredOperationApprovalPolicyTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OperationApprovalPolicyType::class);
            /** @var array<OperationApprovalPolicyType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredOperationApprovalPolicyTypes'");
    }

    /**
     * Gets the status property value. Indicates the status of the Approval Request. The status of a request will change when an action is successfully performed on it, such as when it is `approved` or `rejected`, or when the request's expiration DateTime passes and the result is `expired`.
     * @return OperationApprovalRequestStatus|null
    */
    public function getStatus(): ?OperationApprovalRequestStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof OperationApprovalRequestStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the approvalJustification property value. Indicates the justification for approving or rejecting the request. Maximum length of justification is 1024 characters. For example: 'Approved per Change 23423 - needed for Feb 2023 application baseline updates.' Read-only. This property is read-only.
     * @param string|null $value Value to set for the approvalJustification property.
    */
    public function setApprovalJustification(?string $value): void {
        $this->getBackingStore()->set('approvalJustification', $value);
    }

    /**
     * Sets the approver property value. The identity of the approver as an Identity Set. Optionally contains the application ID, the device ID and the User ID. See information about this type here: https://learn.microsoft.com/graph/api/resources/identityset?view=graph-rest-1.0. Read-only. This property is read-only.
     * @param IdentitySet|null $value Value to set for the approver property.
    */
    public function setApprover(?IdentitySet $value): void {
        $this->getBackingStore()->set('approver', $value);
    }

    /**
     * Sets the expirationDateTime property value. Indicates the DateTime when any action on the approval request is no longer permitted. The value cannot be modified and is automatically populated when the request is created using expiration offset values defined in the service controllers. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Indicates the last DateTime that the request was modified. The value cannot be modified and is automatically populated whenever values in the request are updated. For example, when the 'status' property changes from needsApproval to approved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the requestDateTime property value. Indicates the DateTime that the request was made. The value cannot be modified and is automatically populated when the request is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the requestJustification property value. Indicates the justification for creating the request. Maximum length of justification is 1024 characters. For example: 'Needed for Feb 2023 application baseline updates.' Read-only. This property is read-only.
     * @param string|null $value Value to set for the requestJustification property.
    */
    public function setRequestJustification(?string $value): void {
        $this->getBackingStore()->set('requestJustification', $value);
    }

    /**
     * Sets the requestor property value. The identity of the requestor as an Identity Set. Optionally contains the application ID, the device ID and the User ID. See information about this type here: https://learn.microsoft.com/graph/api/resources/identityset?view=graph-rest-1.0. Read-only. This property is read-only.
     * @param IdentitySet|null $value Value to set for the requestor property.
    */
    public function setRequestor(?IdentitySet $value): void {
        $this->getBackingStore()->set('requestor', $value);
    }

    /**
     * Sets the requiredOperationApprovalPolicyTypes property value. Indicates the approval policy types required by the request in order for the request to be approved or rejected. Read-only. This property is read-only.
     * @param array<OperationApprovalPolicyType>|null $value Value to set for the requiredOperationApprovalPolicyTypes property.
    */
    public function setRequiredOperationApprovalPolicyTypes(?array $value): void {
        $this->getBackingStore()->set('requiredOperationApprovalPolicyTypes', $value);
    }

    /**
     * Sets the status property value. Indicates the status of the Approval Request. The status of a request will change when an action is successfully performed on it, such as when it is `approved` or `rejected`, or when the request's expiration DateTime passes and the result is `expired`.
     * @param OperationApprovalRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?OperationApprovalRequestStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
