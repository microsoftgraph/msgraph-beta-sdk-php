<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequest extends Entity implements Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AccessPackageAssignment|null $accessPackageAssignment For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.  Supports $expand.
    */
    private ?AccessPackageAssignment $accessPackageAssignment = null;
    
    /**
     * @var array<AccessPackageAnswer>|null $answers Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
    */
    private ?array $answers = null;
    
    /**
     * @var DateTime|null $completedDate The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $completedDate = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<CustomExtensionHandlerInstance>|null $customExtensionHandlerInstances A collection of custom workflow extension instances being run on an assignment request. Read-only.
    */
    private ?array $customExtensionHandlerInstances = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expirationDateTime property
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var bool|null $isValidationOnly True if the request is not to be processed for assignment.
    */
    private ?bool $isValidationOnly = null;
    
    /**
     * @var string|null $justification The requestor's supplied justification.
    */
    private ?string $justification = null;
    
    /**
     * @var AccessPackageSubject|null $requestor The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
    */
    private ?AccessPackageSubject $requestor = null;
    
    /**
     * @var string|null $requestState One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted or Scheduled. Read-only.
    */
    private ?string $requestState = null;
    
    /**
     * @var string|null $requestStatus More information on the request processing status. Read-only.
    */
    private ?string $requestStatus = null;
    
    /**
     * @var string|null $requestType One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove or SystemRemove. A request from the user themselves would have requestType of UserAdd, UserUpdate or UserRemove. Read-only.
    */
    private ?string $requestType = null;
    
    /**
     * @var RequestSchedule|null $schedule The range of dates that access is to be assigned to the requestor. Read-only.
    */
    private ?RequestSchedule $schedule = null;
    
    /**
     * Instantiates a new accessPackageAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentRequest');
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
        return $this->accessPackage;
    }

    /**
     * Gets the accessPackageAssignment property value. For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.  Supports $expand.
     * @return AccessPackageAssignment|null
    */
    public function getAccessPackageAssignment(): ?AccessPackageAssignment {
        return $this->accessPackageAssignment;
    }

    /**
     * Gets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @return array<AccessPackageAnswer>|null
    */
    public function getAnswers(): ?array {
        return $this->answers;
    }

    /**
     * Gets the completedDate property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDate(): ?DateTime {
        return $this->completedDate;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customExtensionHandlerInstances property value. A collection of custom workflow extension instances being run on an assignment request. Read-only.
     * @return array<CustomExtensionHandlerInstance>|null
    */
    public function getCustomExtensionHandlerInstances(): ?array {
        return $this->customExtensionHandlerInstances;
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignment' => fn(ParseNode $n) => $o->setAccessPackageAssignment($n->getObjectValue([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'answers' => fn(ParseNode $n) => $o->setAnswers($n->getCollectionOfObjectValues([AccessPackageAnswer::class, 'createFromDiscriminatorValue'])),
            'completedDate' => fn(ParseNode $n) => $o->setCompletedDate($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customExtensionHandlerInstances' => fn(ParseNode $n) => $o->setCustomExtensionHandlerInstances($n->getCollectionOfObjectValues([CustomExtensionHandlerInstance::class, 'createFromDiscriminatorValue'])),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'isValidationOnly' => fn(ParseNode $n) => $o->setIsValidationOnly($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'requestor' => fn(ParseNode $n) => $o->setRequestor($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            'requestState' => fn(ParseNode $n) => $o->setRequestState($n->getStringValue()),
            'requestStatus' => fn(ParseNode $n) => $o->setRequestStatus($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getStringValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isValidationOnly property value. True if the request is not to be processed for assignment.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->isValidationOnly;
    }

    /**
     * Gets the justification property value. The requestor's supplied justification.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        return $this->requestor;
    }

    /**
     * Gets the requestState property value. One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted or Scheduled. Read-only.
     * @return string|null
    */
    public function getRequestState(): ?string {
        return $this->requestState;
    }

    /**
     * Gets the requestStatus property value. More information on the request processing status. Read-only.
     * @return string|null
    */
    public function getRequestStatus(): ?string {
        return $this->requestStatus;
    }

    /**
     * Gets the requestType property value. One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove or SystemRemove. A request from the user themselves would have requestType of UserAdd, UserUpdate or UserRemove. Read-only.
     * @return string|null
    */
    public function getRequestType(): ?string {
        return $this->requestType;
    }

    /**
     * Gets the schedule property value. The range of dates that access is to be assigned to the requestor. Read-only.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        return $this->schedule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeObjectValue('accessPackageAssignment', $this->accessPackageAssignment);
        $writer->writeCollectionOfObjectValues('answers', $this->answers);
        $writer->writeDateTimeValue('completedDate', $this->completedDate);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('customExtensionHandlerInstances', $this->customExtensionHandlerInstances);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeBooleanValue('isValidationOnly', $this->isValidationOnly);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('requestor', $this->requestor);
        $writer->writeStringValue('requestState', $this->requestState);
        $writer->writeStringValue('requestStatus', $this->requestStatus);
        $writer->writeStringValue('requestType', $this->requestType);
        $writer->writeObjectValue('schedule', $this->schedule);
    }

    /**
     * Sets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable. Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the accessPackageAssignment property value. For a requestType of UserAdd or AdminAdd, this is an access package assignment requested to be created.  For a requestType of UserRemove, AdminRemove or SystemRemove, this has the id property of an existing assignment to be removed.  Supports $expand.
     *  @param AccessPackageAssignment|null $value Value to set for the accessPackageAssignment property.
    */
    public function setAccessPackageAssignment(?AccessPackageAssignment $value ): void {
        $this->accessPackageAssignment = $value;
    }

    /**
     * Sets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     *  @param array<AccessPackageAnswer>|null $value Value to set for the answers property.
    */
    public function setAnswers(?array $value ): void {
        $this->answers = $value;
    }

    /**
     * Sets the completedDate property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the completedDate property.
    */
    public function setCompletedDate(?DateTime $value ): void {
        $this->completedDate = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customExtensionHandlerInstances property value. A collection of custom workflow extension instances being run on an assignment request. Read-only.
     *  @param array<CustomExtensionHandlerInstance>|null $value Value to set for the customExtensionHandlerInstances property.
    */
    public function setCustomExtensionHandlerInstances(?array $value ): void {
        $this->customExtensionHandlerInstances = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the isValidationOnly property value. True if the request is not to be processed for assignment.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value ): void {
        $this->isValidationOnly = $value;
    }

    /**
     * Sets the justification property value. The requestor's supplied justification.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     *  @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value ): void {
        $this->requestor = $value;
    }

    /**
     * Sets the requestState property value. One of PendingApproval, Canceled,  Denied, Delivering, Delivered, PartiallyDelivered, DeliveryFailed, Submitted or Scheduled. Read-only.
     *  @param string|null $value Value to set for the requestState property.
    */
    public function setRequestState(?string $value ): void {
        $this->requestState = $value;
    }

    /**
     * Sets the requestStatus property value. More information on the request processing status. Read-only.
     *  @param string|null $value Value to set for the requestStatus property.
    */
    public function setRequestStatus(?string $value ): void {
        $this->requestStatus = $value;
    }

    /**
     * Sets the requestType property value. One of UserAdd, UserExtend, UserUpdate, UserRemove, AdminAdd, AdminRemove or SystemRemove. A request from the user themselves would have requestType of UserAdd, UserUpdate or UserRemove. Read-only.
     *  @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value ): void {
        $this->requestType = $value;
    }

    /**
     * Sets the schedule property value. The range of dates that access is to be assigned to the requestor. Read-only.
     *  @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value ): void {
        $this->schedule = $value;
    }

}
