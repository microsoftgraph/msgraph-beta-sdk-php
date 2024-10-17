<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequest {
        return new AccessPackageAssignmentRequest();
    }

    /**
     * Gets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof AccessPackage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * Gets the accessPackageAssignment property value. For a requestType of UserAdd or AdminAdd, an access package assignment requested to be created. For a requestType of UserRemove, AdminRemove, or SystemRemove, this property has the id property of an existing assignment to be removed. Supports $expand.
     * @return AccessPackageAssignment|null
    */
    public function getAccessPackageAssignment(): ?AccessPackageAssignment {
        $val = $this->getBackingStore()->get('accessPackageAssignment');
        if (is_null($val) || $val instanceof AccessPackageAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignment'");
    }

    /**
     * Gets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @return array<AccessPackageAnswer>|null
    */
    public function getAnswers(): ?array {
        $val = $this->getBackingStore()->get('answers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAnswer::class);
            /** @var array<AccessPackageAnswer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answers'");
    }

    /**
     * Gets the completedDate property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDate(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDate'");
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment request workflow.
     * @return array<CustomExtensionCalloutInstance>|null
    */
    public function getCustomExtensionCalloutInstances(): ?array {
        $val = $this->getBackingStore()->get('customExtensionCalloutInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionCalloutInstance::class);
            /** @var array<CustomExtensionCalloutInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionCalloutInstances'");
    }

    /**
     * Gets the customExtensionHandlerInstances property value. A collection of custom workflow extension instances being run on an assignment request. Read-only.
     * @return array<CustomExtensionHandlerInstance>|null
    */
    public function getCustomExtensionHandlerInstances(): ?array {
        $val = $this->getBackingStore()->get('customExtensionHandlerInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionHandlerInstance::class);
            /** @var array<CustomExtensionHandlerInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionHandlerInstances'");
    }

    /**
     * Gets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignment' => fn(ParseNode $n) => $o->setAccessPackageAssignment($n->getObjectValue([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'answers' => fn(ParseNode $n) => $o->setAnswers($n->getCollectionOfObjectValues([AccessPackageAnswer::class, 'createFromDiscriminatorValue'])),
            'completedDate' => fn(ParseNode $n) => $o->setCompletedDate($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customExtensionCalloutInstances' => fn(ParseNode $n) => $o->setCustomExtensionCalloutInstances($n->getCollectionOfObjectValues([CustomExtensionCalloutInstance::class, 'createFromDiscriminatorValue'])),
            'customExtensionHandlerInstances' => fn(ParseNode $n) => $o->setCustomExtensionHandlerInstances($n->getCollectionOfObjectValues([CustomExtensionHandlerInstance::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([RequestActivity::class, 'createFromDiscriminatorValue'])),
            'isValidationOnly' => fn(ParseNode $n) => $o->setIsValidationOnly($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'requestor' => fn(ParseNode $n) => $o->setRequestor($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            'requestState' => fn(ParseNode $n) => $o->setRequestState($n->getStringValue()),
            'requestStatus' => fn(ParseNode $n) => $o->setRequestStatus($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'verifiedCredentialsData' => fn(ParseNode $n) => $o->setVerifiedCredentialsData($n->getCollectionOfObjectValues([VerifiedCredentialData::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the history property value. The history property
     * @return array<RequestActivity>|null
    */
    public function getHistory(): ?array {
        $val = $this->getBackingStore()->get('history');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RequestActivity::class);
            /** @var array<RequestActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
    }

    /**
     * Gets the isValidationOnly property value. True if the request isn't to be processed for assignment.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        $val = $this->getBackingStore()->get('isValidationOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isValidationOnly'");
    }

    /**
     * Gets the justification property value. The requestor's supplied justification.
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        $val = $this->getBackingStore()->get('requestor');
        if (is_null($val) || $val instanceof AccessPackageSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestor'");
    }

    /**
     * Gets the requestState property value. One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted, or Scheduled. Read-only.
     * @return string|null
    */
    public function getRequestState(): ?string {
        $val = $this->getBackingStore()->get('requestState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestState'");
    }

    /**
     * Gets the requestStatus property value. More information on the request processing status. Read-only.
     * @return string|null
    */
    public function getRequestStatus(): ?string {
        $val = $this->getBackingStore()->get('requestStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestStatus'");
    }

    /**
     * Gets the requestType property value. One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove, or SystemRemove. A request from the user has a requestType of UserAdd, UserUpdate, or UserRemove. Read-only.
     * @return string|null
    */
    public function getRequestType(): ?string {
        $val = $this->getBackingStore()->get('requestType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestType'");
    }

    /**
     * Gets the schedule property value. The range of dates that access is to be assigned to the requestor. Read-only.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof RequestSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the verifiedCredentialsData property value. The details of the verifiable credential that the requestor presented, such as the issuer and claims. Read-only.
     * @return array<VerifiedCredentialData>|null
    */
    public function getVerifiedCredentialsData(): ?array {
        $val = $this->getBackingStore()->get('verifiedCredentialsData');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VerifiedCredentialData::class);
            /** @var array<VerifiedCredentialData>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedCredentialsData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeObjectValue('accessPackageAssignment', $this->getAccessPackageAssignment());
        $writer->writeCollectionOfObjectValues('answers', $this->getAnswers());
        $writer->writeDateTimeValue('completedDate', $this->getCompletedDate());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('customExtensionCalloutInstances', $this->getCustomExtensionCalloutInstances());
        $writer->writeCollectionOfObjectValues('customExtensionHandlerInstances', $this->getCustomExtensionHandlerInstances());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeBooleanValue('isValidationOnly', $this->getIsValidationOnly());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeObjectValue('requestor', $this->getRequestor());
        $writer->writeStringValue('requestState', $this->getRequestState());
        $writer->writeStringValue('requestStatus', $this->getRequestStatus());
        $writer->writeStringValue('requestType', $this->getRequestType());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeCollectionOfObjectValues('verifiedCredentialsData', $this->getVerifiedCredentialsData());
    }

    /**
     * Sets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
     * @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the accessPackageAssignment property value. For a requestType of UserAdd or AdminAdd, an access package assignment requested to be created. For a requestType of UserRemove, AdminRemove, or SystemRemove, this property has the id property of an existing assignment to be removed. Supports $expand.
     * @param AccessPackageAssignment|null $value Value to set for the accessPackageAssignment property.
    */
    public function setAccessPackageAssignment(?AccessPackageAssignment $value): void {
        $this->getBackingStore()->set('accessPackageAssignment', $value);
    }

    /**
     * Sets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @param array<AccessPackageAnswer>|null $value Value to set for the answers property.
    */
    public function setAnswers(?array $value): void {
        $this->getBackingStore()->set('answers', $value);
    }

    /**
     * Sets the completedDate property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the completedDate property.
    */
    public function setCompletedDate(?DateTime $value): void {
        $this->getBackingStore()->set('completedDate', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment request workflow.
     * @param array<CustomExtensionCalloutInstance>|null $value Value to set for the customExtensionCalloutInstances property.
    */
    public function setCustomExtensionCalloutInstances(?array $value): void {
        $this->getBackingStore()->set('customExtensionCalloutInstances', $value);
    }

    /**
     * Sets the customExtensionHandlerInstances property value. A collection of custom workflow extension instances being run on an assignment request. Read-only.
     * @param array<CustomExtensionHandlerInstance>|null $value Value to set for the customExtensionHandlerInstances property.
    */
    public function setCustomExtensionHandlerInstances(?array $value): void {
        $this->getBackingStore()->set('customExtensionHandlerInstances', $value);
    }

    /**
     * Sets the expirationDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the history property value. The history property
     * @param array<RequestActivity>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the isValidationOnly property value. True if the request isn't to be processed for assignment.
     * @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value): void {
        $this->getBackingStore()->set('isValidationOnly', $value);
    }

    /**
     * Sets the justification property value. The requestor's supplied justification.
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('requestor', $value);
    }

    /**
     * Sets the requestState property value. One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted, or Scheduled. Read-only.
     * @param string|null $value Value to set for the requestState property.
    */
    public function setRequestState(?string $value): void {
        $this->getBackingStore()->set('requestState', $value);
    }

    /**
     * Sets the requestStatus property value. More information on the request processing status. Read-only.
     * @param string|null $value Value to set for the requestStatus property.
    */
    public function setRequestStatus(?string $value): void {
        $this->getBackingStore()->set('requestStatus', $value);
    }

    /**
     * Sets the requestType property value. One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove, or SystemRemove. A request from the user has a requestType of UserAdd, UserUpdate, or UserRemove. Read-only.
     * @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

    /**
     * Sets the schedule property value. The range of dates that access is to be assigned to the requestor. Read-only.
     * @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the verifiedCredentialsData property value. The details of the verifiable credential that the requestor presented, such as the issuer and claims. Read-only.
     * @param array<VerifiedCredentialData>|null $value Value to set for the verifiedCredentialsData property.
    */
    public function setVerifiedCredentialsData(?array $value): void {
        $this->getBackingStore()->set('verifiedCredentialsData', $value);
    }

}
