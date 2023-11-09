<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * These are elevation approval requests for EPM support arbitrated scenario initiated by IW user that admins can take action on.
*/
class PrivilegeManagementElevationRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegeManagementElevationRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegeManagementElevationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegeManagementElevationRequest {
        return new PrivilegeManagementElevationRequest();
    }

    /**
     * Gets the applicationDetail property value. Details of the application which is being requested to elevate, allowing the admin to understand the identity of the application. It includes file info such as FilePath, FileHash, FilePublisher, and etc. Returned by default. Read-only.
     * @return ApplicationDetail|null
    */
    public function getApplicationDetail(): ?ApplicationDetail {
        $val = $this->getBackingStore()->get('applicationDetail');
        if (is_null($val) || $val instanceof ApplicationDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationDetail'");
    }

    /**
     * Gets the deviceName property value. The device name used to initiate the elevation request. For example: 'cotonso-laptop'. Returned by default. Read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationDetail' => fn(ParseNode $n) => $o->setApplicationDetail($n->getObjectValue([ApplicationDetail::class, 'createFromDiscriminatorValue'])),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'requestCreatedDateTime' => fn(ParseNode $n) => $o->setRequestCreatedDateTime($n->getDateTimeValue()),
            'requestedByUserId' => fn(ParseNode $n) => $o->setRequestedByUserId($n->getStringValue()),
            'requestedByUserPrincipalName' => fn(ParseNode $n) => $o->setRequestedByUserPrincipalName($n->getStringValue()),
            'requestedOnDeviceId' => fn(ParseNode $n) => $o->setRequestedOnDeviceId($n->getStringValue()),
            'requestExpiryDateTime' => fn(ParseNode $n) => $o->setRequestExpiryDateTime($n->getDateTimeValue()),
            'requestJustification' => fn(ParseNode $n) => $o->setRequestJustification($n->getStringValue()),
            'requestLastModifiedDateTime' => fn(ParseNode $n) => $o->setRequestLastModifiedDateTime($n->getDateTimeValue()),
            'reviewCompletedByUserId' => fn(ParseNode $n) => $o->setReviewCompletedByUserId($n->getStringValue()),
            'reviewCompletedByUserPrincipalName' => fn(ParseNode $n) => $o->setReviewCompletedByUserPrincipalName($n->getStringValue()),
            'reviewCompletedDateTime' => fn(ParseNode $n) => $o->setReviewCompletedDateTime($n->getDateTimeValue()),
            'reviewerJustification' => fn(ParseNode $n) => $o->setReviewerJustification($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ElevationRequestState::class)),
        ]);
    }

    /**
     * Gets the requestCreatedDateTime property value. The date and time when the elevation request was submitted/created. The value cannot be modified and is automatically populated when the elevation request is submitted/created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getRequestCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestCreatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestCreatedDateTime'");
    }

    /**
     * Gets the requestedByUserId property value. The Azure Active Directory (AAD) identifier of the end user who is requesting this elevation. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. Returned by default. Read-only.
     * @return string|null
    */
    public function getRequestedByUserId(): ?string {
        $val = $this->getBackingStore()->get('requestedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedByUserId'");
    }

    /**
     * Gets the requestedByUserPrincipalName property value. The User Principal Name (UPN) of the end user who requested this elevation. For example: 'user1@contoso.com'. Returned by default. Read-only.
     * @return string|null
    */
    public function getRequestedByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('requestedByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedByUserPrincipalName'");
    }

    /**
     * Gets the requestedOnDeviceId property value. The Intune Device Identifier of the managed device used to initiate the elevation request. For example: '90F5F6E8-CA09-4811-97F6-4D0DD532D916'. Returned by default. Read-only.
     * @return string|null
    */
    public function getRequestedOnDeviceId(): ?string {
        $val = $this->getBackingStore()->get('requestedOnDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestedOnDeviceId'");
    }

    /**
     * Gets the requestExpiryDateTime property value. Expiration set for the request when it was created, regardless of approved or denied status. For example: '2023-08-03T14:24:22Z'. Returned by default. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getRequestExpiryDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestExpiryDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestExpiryDateTime'");
    }

    /**
     * Gets the requestJustification property value. Justification provided by the end user for the elevation request. For example :'Need to elevate to install microsoft word'. Read-only.
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
     * Gets the requestLastModifiedDateTime property value. The date and time when the elevation request was either submitted/created or approved/denied. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getRequestLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestLastModifiedDateTime'");
    }

    /**
     * Gets the reviewCompletedByUserId property value. This is the Azure Active Directory (AAD) user id of the administrator who approved or denied the request. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. This field would be String.Empty before the request is either approved or denied. Read-only.
     * @return string|null
    */
    public function getReviewCompletedByUserId(): ?string {
        $val = $this->getBackingStore()->get('reviewCompletedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewCompletedByUserId'");
    }

    /**
     * Gets the reviewCompletedByUserPrincipalName property value. This is the User Principal Name (UPN) of the administrator who approved or denied the request. For example: 'admin@contoso.com'. This field would be String.Empty before the request is either approved or denied. Read-only.
     * @return string|null
    */
    public function getReviewCompletedByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('reviewCompletedByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewCompletedByUserPrincipalName'");
    }

    /**
     * Gets the reviewCompletedDateTime property value. The DateTime for which the request was approved or denied. For example, midnight UTC on August 3rd, 2023 would look like this: '2023-08-03T00:00:00Z'. Read-only.
     * @return DateTime|null
    */
    public function getReviewCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reviewCompletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewCompletedDateTime'");
    }

    /**
     * Gets the reviewerJustification property value. An optional justification provided by approver at approval or denied time. This field will be String.Empty if approver decides to not provide a justification. For example: 'Run this installer today'
     * @return string|null
    */
    public function getReviewerJustification(): ?string {
        $val = $this->getBackingStore()->get('reviewerJustification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewerJustification'");
    }

    /**
     * Gets the status property value. Indicates state of elevation request
     * @return ElevationRequestState|null
    */
    public function getStatus(): ?ElevationRequestState {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ElevationRequestState) {
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
        $writer->writeObjectValue('applicationDetail', $this->getApplicationDetail());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('requestCreatedDateTime', $this->getRequestCreatedDateTime());
        $writer->writeStringValue('requestedByUserId', $this->getRequestedByUserId());
        $writer->writeStringValue('requestedByUserPrincipalName', $this->getRequestedByUserPrincipalName());
        $writer->writeStringValue('requestedOnDeviceId', $this->getRequestedOnDeviceId());
        $writer->writeDateTimeValue('requestExpiryDateTime', $this->getRequestExpiryDateTime());
        $writer->writeStringValue('requestJustification', $this->getRequestJustification());
        $writer->writeDateTimeValue('requestLastModifiedDateTime', $this->getRequestLastModifiedDateTime());
        $writer->writeStringValue('reviewCompletedByUserId', $this->getReviewCompletedByUserId());
        $writer->writeStringValue('reviewCompletedByUserPrincipalName', $this->getReviewCompletedByUserPrincipalName());
        $writer->writeDateTimeValue('reviewCompletedDateTime', $this->getReviewCompletedDateTime());
        $writer->writeStringValue('reviewerJustification', $this->getReviewerJustification());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the applicationDetail property value. Details of the application which is being requested to elevate, allowing the admin to understand the identity of the application. It includes file info such as FilePath, FileHash, FilePublisher, and etc. Returned by default. Read-only.
     * @param ApplicationDetail|null $value Value to set for the applicationDetail property.
    */
    public function setApplicationDetail(?ApplicationDetail $value): void {
        $this->getBackingStore()->set('applicationDetail', $value);
    }

    /**
     * Sets the deviceName property value. The device name used to initiate the elevation request. For example: 'cotonso-laptop'. Returned by default. Read-only.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the requestCreatedDateTime property value. The date and time when the elevation request was submitted/created. The value cannot be modified and is automatically populated when the elevation request is submitted/created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the requestCreatedDateTime property.
    */
    public function setRequestCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestCreatedDateTime', $value);
    }

    /**
     * Sets the requestedByUserId property value. The Azure Active Directory (AAD) identifier of the end user who is requesting this elevation. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. Returned by default. Read-only.
     * @param string|null $value Value to set for the requestedByUserId property.
    */
    public function setRequestedByUserId(?string $value): void {
        $this->getBackingStore()->set('requestedByUserId', $value);
    }

    /**
     * Sets the requestedByUserPrincipalName property value. The User Principal Name (UPN) of the end user who requested this elevation. For example: 'user1@contoso.com'. Returned by default. Read-only.
     * @param string|null $value Value to set for the requestedByUserPrincipalName property.
    */
    public function setRequestedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('requestedByUserPrincipalName', $value);
    }

    /**
     * Sets the requestedOnDeviceId property value. The Intune Device Identifier of the managed device used to initiate the elevation request. For example: '90F5F6E8-CA09-4811-97F6-4D0DD532D916'. Returned by default. Read-only.
     * @param string|null $value Value to set for the requestedOnDeviceId property.
    */
    public function setRequestedOnDeviceId(?string $value): void {
        $this->getBackingStore()->set('requestedOnDeviceId', $value);
    }

    /**
     * Sets the requestExpiryDateTime property value. Expiration set for the request when it was created, regardless of approved or denied status. For example: '2023-08-03T14:24:22Z'. Returned by default. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the requestExpiryDateTime property.
    */
    public function setRequestExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestExpiryDateTime', $value);
    }

    /**
     * Sets the requestJustification property value. Justification provided by the end user for the elevation request. For example :'Need to elevate to install microsoft word'. Read-only.
     * @param string|null $value Value to set for the requestJustification property.
    */
    public function setRequestJustification(?string $value): void {
        $this->getBackingStore()->set('requestJustification', $value);
    }

    /**
     * Sets the requestLastModifiedDateTime property value. The date and time when the elevation request was either submitted/created or approved/denied. The value cannot be modified and is automatically populated. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the requestLastModifiedDateTime property.
    */
    public function setRequestLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestLastModifiedDateTime', $value);
    }

    /**
     * Sets the reviewCompletedByUserId property value. This is the Azure Active Directory (AAD) user id of the administrator who approved or denied the request. For example: 'F1A57311-B9EB-45B7-9415-8555E68EDC9E'. This field would be String.Empty before the request is either approved or denied. Read-only.
     * @param string|null $value Value to set for the reviewCompletedByUserId property.
    */
    public function setReviewCompletedByUserId(?string $value): void {
        $this->getBackingStore()->set('reviewCompletedByUserId', $value);
    }

    /**
     * Sets the reviewCompletedByUserPrincipalName property value. This is the User Principal Name (UPN) of the administrator who approved or denied the request. For example: 'admin@contoso.com'. This field would be String.Empty before the request is either approved or denied. Read-only.
     * @param string|null $value Value to set for the reviewCompletedByUserPrincipalName property.
    */
    public function setReviewCompletedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('reviewCompletedByUserPrincipalName', $value);
    }

    /**
     * Sets the reviewCompletedDateTime property value. The DateTime for which the request was approved or denied. For example, midnight UTC on August 3rd, 2023 would look like this: '2023-08-03T00:00:00Z'. Read-only.
     * @param DateTime|null $value Value to set for the reviewCompletedDateTime property.
    */
    public function setReviewCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewCompletedDateTime', $value);
    }

    /**
     * Sets the reviewerJustification property value. An optional justification provided by approver at approval or denied time. This field will be String.Empty if approver decides to not provide a justification. For example: 'Run this installer today'
     * @param string|null $value Value to set for the reviewerJustification property.
    */
    public function setReviewerJustification(?string $value): void {
        $this->getBackingStore()->set('reviewerJustification', $value);
    }

    /**
     * Sets the status property value. Indicates state of elevation request
     * @param ElevationRequestState|null $value Value to set for the status property.
    */
    public function setStatus(?ElevationRequestState $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
