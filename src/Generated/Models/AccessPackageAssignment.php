<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignment extends Entity implements Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AccessPackageAssignmentPolicy|null $accessPackageAssignmentPolicy Read-only. Nullable. Supports $filter (eq) on the id property
    */
    private ?AccessPackageAssignmentPolicy $accessPackageAssignmentPolicy = null;
    
    /**
     * @var array<AccessPackageAssignmentRequest>|null $accessPackageAssignmentRequests The accessPackageAssignmentRequests property
    */
    private ?array $accessPackageAssignmentRequests = null;
    
    /**
     * @var array<AccessPackageAssignmentResourceRole>|null $accessPackageAssignmentResourceRoles The resource roles delivered to the target user for this assignment. Read-only. Nullable.
    */
    private ?array $accessPackageAssignmentResourceRoles = null;
    
    /**
     * @var string|null $accessPackageId The identifier of the access package. Read-only.
    */
    private ?string $accessPackageId = null;
    
    /**
     * @var string|null $assignmentPolicyId The identifier of the access package assignment policy. Read-only.
    */
    private ?string $assignmentPolicyId = null;
    
    /**
     * @var string|null $assignmentState The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only. Supports $filter (eq).
    */
    private ?string $assignmentState = null;
    
    /**
     * @var string|null $assignmentStatus More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
    */
    private ?string $assignmentStatus = null;
    
    /**
     * @var string|null $catalogId The identifier of the catalog containing the access package. Read-only.
    */
    private ?string $catalogId = null;
    
    /**
     * @var DateTime|null $expiredDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $expiredDateTime = null;
    
    /**
     * @var bool|null $isExtended Indicates whether the access package assignment is extended. Read-only.
    */
    private ?bool $isExtended = null;
    
    /**
     * @var RequestSchedule|null $schedule When the access assignment is to be in place. Read-only.
    */
    private ?RequestSchedule $schedule = null;
    
    /**
     * @var AccessPackageSubject|null $target The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
    */
    private ?AccessPackageSubject $target = null;
    
    /**
     * @var string|null $targetId The ID of the subject with the assignment. Read-only.
    */
    private ?string $targetId = null;
    
    /**
     * Instantiates a new accessPackageAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignment {
        return new AccessPackageAssignment();
    }

    /**
     * Gets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the accessPackageAssignmentPolicy property value. Read-only. Nullable. Supports $filter (eq) on the id property
     * @return AccessPackageAssignmentPolicy|null
    */
    public function getAccessPackageAssignmentPolicy(): ?AccessPackageAssignmentPolicy {
        return $this->accessPackageAssignmentPolicy;
    }

    /**
     * Gets the accessPackageAssignmentRequests property value. The accessPackageAssignmentRequests property
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAccessPackageAssignmentRequests(): ?array {
        return $this->accessPackageAssignmentRequests;
    }

    /**
     * Gets the accessPackageAssignmentResourceRoles property value. The resource roles delivered to the target user for this assignment. Read-only. Nullable.
     * @return array<AccessPackageAssignmentResourceRole>|null
    */
    public function getAccessPackageAssignmentResourceRoles(): ?array {
        return $this->accessPackageAssignmentResourceRoles;
    }

    /**
     * Gets the accessPackageId property value. The identifier of the access package. Read-only.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        return $this->accessPackageId;
    }

    /**
     * Gets the assignmentPolicyId property value. The identifier of the access package assignment policy. Read-only.
     * @return string|null
    */
    public function getAssignmentPolicyId(): ?string {
        return $this->assignmentPolicyId;
    }

    /**
     * Gets the assignmentState property value. The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only. Supports $filter (eq).
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->assignmentState;
    }

    /**
     * Gets the assignmentStatus property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     * @return string|null
    */
    public function getAssignmentStatus(): ?string {
        return $this->assignmentStatus;
    }

    /**
     * Gets the catalogId property value. The identifier of the catalog containing the access package. Read-only.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        return $this->catalogId;
    }

    /**
     * Gets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpiredDateTime(): ?DateTime {
        return $this->expiredDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (ParseNode $n) use ($o) { $o->setAccessPackage($n->getObjectValue(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentPolicy' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentPolicy($n->getObjectValue(array(AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentRequests' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentRequests($n->getCollectionOfObjectValues(array(AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentResourceRoles' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentResourceRoles($n->getCollectionOfObjectValues(array(AccessPackageAssignmentResourceRole::class, 'createFromDiscriminatorValue'))); },
            'accessPackageId' => function (ParseNode $n) use ($o) { $o->setAccessPackageId($n->getStringValue()); },
            'assignmentPolicyId' => function (ParseNode $n) use ($o) { $o->setAssignmentPolicyId($n->getStringValue()); },
            'assignmentState' => function (ParseNode $n) use ($o) { $o->setAssignmentState($n->getStringValue()); },
            'assignmentStatus' => function (ParseNode $n) use ($o) { $o->setAssignmentStatus($n->getStringValue()); },
            'catalogId' => function (ParseNode $n) use ($o) { $o->setCatalogId($n->getStringValue()); },
            'expiredDateTime' => function (ParseNode $n) use ($o) { $o->setExpiredDateTime($n->getDateTimeValue()); },
            'isExtended' => function (ParseNode $n) use ($o) { $o->setIsExtended($n->getBooleanValue()); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(RequestSchedule::class, 'createFromDiscriminatorValue'))); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(AccessPackageSubject::class, 'createFromDiscriminatorValue'))); },
            'targetId' => function (ParseNode $n) use ($o) { $o->setTargetId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isExtended property value. Indicates whether the access package assignment is extended. Read-only.
     * @return bool|null
    */
    public function getIsExtended(): ?bool {
        return $this->isExtended;
    }

    /**
     * Gets the schedule property value. When the access assignment is to be in place. Read-only.
     * @return RequestSchedule|null
    */
    public function getSchedule(): ?RequestSchedule {
        return $this->schedule;
    }

    /**
     * Gets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @return AccessPackageSubject|null
    */
    public function getTarget(): ?AccessPackageSubject {
        return $this->target;
    }

    /**
     * Gets the targetId property value. The ID of the subject with the assignment. Read-only.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->targetId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeObjectValue('accessPackageAssignmentPolicy', $this->accessPackageAssignmentPolicy);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentRequests', $this->accessPackageAssignmentRequests);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentResourceRoles', $this->accessPackageAssignmentResourceRoles);
        $writer->writeStringValue('accessPackageId', $this->accessPackageId);
        $writer->writeStringValue('assignmentPolicyId', $this->assignmentPolicyId);
        $writer->writeStringValue('assignmentState', $this->assignmentState);
        $writer->writeStringValue('assignmentStatus', $this->assignmentStatus);
        $writer->writeStringValue('catalogId', $this->catalogId);
        $writer->writeDateTimeValue('expiredDateTime', $this->expiredDateTime);
        $writer->writeBooleanValue('isExtended', $this->isExtended);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeObjectValue('target', $this->target);
        $writer->writeStringValue('targetId', $this->targetId);
    }

    /**
     * Sets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the accessPackageAssignmentPolicy property value. Read-only. Nullable. Supports $filter (eq) on the id property
     *  @param AccessPackageAssignmentPolicy|null $value Value to set for the accessPackageAssignmentPolicy property.
    */
    public function setAccessPackageAssignmentPolicy(?AccessPackageAssignmentPolicy $value ): void {
        $this->accessPackageAssignmentPolicy = $value;
    }

    /**
     * Sets the accessPackageAssignmentRequests property value. The accessPackageAssignmentRequests property
     *  @param array<AccessPackageAssignmentRequest>|null $value Value to set for the accessPackageAssignmentRequests property.
    */
    public function setAccessPackageAssignmentRequests(?array $value ): void {
        $this->accessPackageAssignmentRequests = $value;
    }

    /**
     * Sets the accessPackageAssignmentResourceRoles property value. The resource roles delivered to the target user for this assignment. Read-only. Nullable.
     *  @param array<AccessPackageAssignmentResourceRole>|null $value Value to set for the accessPackageAssignmentResourceRoles property.
    */
    public function setAccessPackageAssignmentResourceRoles(?array $value ): void {
        $this->accessPackageAssignmentResourceRoles = $value;
    }

    /**
     * Sets the accessPackageId property value. The identifier of the access package. Read-only.
     *  @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value ): void {
        $this->accessPackageId = $value;
    }

    /**
     * Sets the assignmentPolicyId property value. The identifier of the access package assignment policy. Read-only.
     *  @param string|null $value Value to set for the assignmentPolicyId property.
    */
    public function setAssignmentPolicyId(?string $value ): void {
        $this->assignmentPolicyId = $value;
    }

    /**
     * Sets the assignmentState property value. The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only. Supports $filter (eq).
     *  @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value ): void {
        $this->assignmentState = $value;
    }

    /**
     * Sets the assignmentStatus property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     *  @param string|null $value Value to set for the assignmentStatus property.
    */
    public function setAssignmentStatus(?string $value ): void {
        $this->assignmentStatus = $value;
    }

    /**
     * Sets the catalogId property value. The identifier of the catalog containing the access package. Read-only.
     *  @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value ): void {
        $this->catalogId = $value;
    }

    /**
     * Sets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the expiredDateTime property.
    */
    public function setExpiredDateTime(?DateTime $value ): void {
        $this->expiredDateTime = $value;
    }

    /**
     * Sets the isExtended property value. Indicates whether the access package assignment is extended. Read-only.
     *  @param bool|null $value Value to set for the isExtended property.
    */
    public function setIsExtended(?bool $value ): void {
        $this->isExtended = $value;
    }

    /**
     * Sets the schedule property value. When the access assignment is to be in place. Read-only.
     *  @param RequestSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?RequestSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     *  @param AccessPackageSubject|null $value Value to set for the target property.
    */
    public function setTarget(?AccessPackageSubject $value ): void {
        $this->target = $value;
    }

    /**
     * Sets the targetId property value. The ID of the subject with the assignment. Read-only.
     *  @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value ): void {
        $this->targetId = $value;
    }

}
