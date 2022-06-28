<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationship extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<DelegatedAdminAccessAssignment>|null $accessAssignments The access assignments associated with the delegated admin relationship.
    */
    private ?array $accessAssignments = null;
    
    /**
     * @var DelegatedAdminAccessDetails|null $accessDetails The accessDetails property
    */
    private ?DelegatedAdminAccessDetails $accessDetails = null;
    
    /**
     * @var DateTime|null $activatedDateTime The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
    */
    private ?DateTime $activatedDateTime = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DelegatedAdminRelationshipCustomerParticipant|null $customer The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
    */
    private ?DelegatedAdminRelationshipCustomerParticipant $customer = null;
    
    /**
     * @var string|null $displayName The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateInterval|null $duration The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var DateTime|null $endDateTime The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<DelegatedAdminRelationshipOperation>|null $operations The long running operations associated with the delegated admin relationship.
    */
    private ?array $operations = null;
    
    /**
     * @var array<DelegatedAdminRelationshipRequest>|null $requests The requests associated with the delegated admin relationship.
    */
    private ?array $requests = null;
    
    /**
     * @var DelegatedAdminRelationshipStatus|null $status The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
    */
    private ?DelegatedAdminRelationshipStatus $status = null;
    
    /**
     * Instantiates a new DelegatedAdminRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationship {
        return new DelegatedAdminRelationship();
    }

    /**
     * Gets the accessAssignments property value. The access assignments associated with the delegated admin relationship.
     * @return array<DelegatedAdminAccessAssignment>|null
    */
    public function getAccessAssignments(): ?array {
        return $this->accessAssignments;
    }

    /**
     * Gets the accessDetails property value. The accessDetails property
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        return $this->accessDetails;
    }

    /**
     * Gets the activatedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
     * @return DateTime|null
    */
    public function getActivatedDateTime(): ?DateTime {
        return $this->activatedDateTime;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customer property value. The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
     * @return DelegatedAdminRelationshipCustomerParticipant|null
    */
    public function getCustomer(): ?DelegatedAdminRelationshipCustomerParticipant {
        return $this->customer;
    }

    /**
     * Gets the displayName property value. The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the duration property value. The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the endDateTime property value. The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
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
            'accessAssignments' => function (ParseNode $n) use ($o) { $o->setAccessAssignments($n->getCollectionOfObjectValues(array(DelegatedAdminAccessAssignment::class, 'createFromDiscriminatorValue'))); },
            'accessDetails' => function (ParseNode $n) use ($o) { $o->setAccessDetails($n->getObjectValue(array(DelegatedAdminAccessDetails::class, 'createFromDiscriminatorValue'))); },
            'activatedDateTime' => function (ParseNode $n) use ($o) { $o->setActivatedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customer' => function (ParseNode $n) use ($o) { $o->setCustomer($n->getObjectValue(array(DelegatedAdminRelationshipCustomerParticipant::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getDateIntervalValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(DelegatedAdminRelationshipOperation::class, 'createFromDiscriminatorValue'))); },
            'requests' => function (ParseNode $n) use ($o) { $o->setRequests($n->getCollectionOfObjectValues(array(DelegatedAdminRelationshipRequest::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DelegatedAdminRelationshipStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the operations property value. The long running operations associated with the delegated admin relationship.
     * @return array<DelegatedAdminRelationshipOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the requests property value. The requests associated with the delegated admin relationship.
     * @return array<DelegatedAdminRelationshipRequest>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Gets the status property value. The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
     * @return DelegatedAdminRelationshipStatus|null
    */
    public function getStatus(): ?DelegatedAdminRelationshipStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessAssignments', $this->accessAssignments);
        $writer->writeObjectValue('accessDetails', $this->accessDetails);
        $writer->writeDateTimeValue('activatedDateTime', $this->activatedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('customer', $this->customer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateIntervalValue('duration', $this->duration);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('requests', $this->requests);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessAssignments property value. The access assignments associated with the delegated admin relationship.
     *  @param array<DelegatedAdminAccessAssignment>|null $value Value to set for the accessAssignments property.
    */
    public function setAccessAssignments(?array $value ): void {
        $this->accessAssignments = $value;
    }

    /**
     * Sets the accessDetails property value. The accessDetails property
     *  @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value ): void {
        $this->accessDetails = $value;
    }

    /**
     * Sets the activatedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
     *  @param DateTime|null $value Value to set for the activatedDateTime property.
    */
    public function setActivatedDateTime(?DateTime $value ): void {
        $this->activatedDateTime = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customer property value. The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
     *  @param DelegatedAdminRelationshipCustomerParticipant|null $value Value to set for the customer property.
    */
    public function setCustomer(?DelegatedAdminRelationshipCustomerParticipant $value ): void {
        $this->customer = $value;
    }

    /**
     * Sets the displayName property value. The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the duration property value. The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDateTime property value. The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the operations property value. The long running operations associated with the delegated admin relationship.
     *  @param array<DelegatedAdminRelationshipOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the requests property value. The requests associated with the delegated admin relationship.
     *  @param array<DelegatedAdminRelationshipRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value ): void {
        $this->requests = $value;
    }

    /**
     * Sets the status property value. The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
     *  @param DelegatedAdminRelationshipStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminRelationshipStatus $value ): void {
        $this->status = $value;
    }

}
