<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationship extends Entity 
{
    /** @var array<DelegatedAdminAccessAssignment>|null $accessAssignments  */
    private ?array $accessAssignments = null;
    
    /** @var DelegatedAdminAccessDetails|null $accessDetails  */
    private ?DelegatedAdminAccessDetails $accessDetails = null;
    
    /** @var DateTime|null $activatedDateTime  */
    private ?DateTime $activatedDateTime = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var DelegatedAdminRelationshipCustomerParticipant|null $customer  */
    private ?DelegatedAdminRelationshipCustomerParticipant $customer = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var DateInterval|null $duration  */
    private ?DateInterval $duration = null;
    
    /** @var DateTime|null $endDateTime  */
    private ?DateTime $endDateTime = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<DelegatedAdminRelationshipOperation>|null $operations  */
    private ?array $operations = null;
    
    /** @var DelegatedAdminRelationshipParticipant|null $partner  */
    private ?DelegatedAdminRelationshipParticipant $partner = null;
    
    /** @var array<DelegatedAdminRelationshipRequest>|null $requests  */
    private ?array $requests = null;
    
    /** @var DelegatedAdminRelationshipStatus|null $status  */
    private ?DelegatedAdminRelationshipStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationship
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationship {
        return new DelegatedAdminRelationship();
    }

    /**
     * Gets the accessAssignments property value. 
     * @return array<DelegatedAdminAccessAssignment>|null
    */
    public function getAccessAssignments(): ?array {
        return $this->accessAssignments;
    }

    /**
     * Gets the accessDetails property value. 
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        return $this->accessDetails;
    }

    /**
     * Gets the activatedDateTime property value. 
     * @return DateTime|null
    */
    public function getActivatedDateTime(): ?DateTime {
        return $this->activatedDateTime;
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customer property value. 
     * @return DelegatedAdminRelationshipCustomerParticipant|null
    */
    public function getCustomer(): ?DelegatedAdminRelationshipCustomerParticipant {
        return $this->customer;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the duration property value. 
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the endDateTime property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'accessAssignments' => function (self $o, ParseNode $n) { $o->setAccessAssignments($n->getCollectionOfObjectValues(DelegatedAdminAccessAssignment::class)); },
            'accessDetails' => function (self $o, ParseNode $n) { $o->setAccessDetails($n->getObjectValue(DelegatedAdminAccessDetails::class)); },
            'activatedDateTime' => function (self $o, ParseNode $n) { $o->setActivatedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customer' => function (self $o, ParseNode $n) { $o->setCustomer($n->getObjectValue(DelegatedAdminRelationshipCustomerParticipant::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'duration' => function (self $o, ParseNode $n) { $o->setDuration($n->getDateIntervalValue()); },
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfObjectValues(DelegatedAdminRelationshipOperation::class)); },
            'partner' => function (self $o, ParseNode $n) { $o->setPartner($n->getObjectValue(DelegatedAdminRelationshipParticipant::class)); },
            'requests' => function (self $o, ParseNode $n) { $o->setRequests($n->getCollectionOfObjectValues(DelegatedAdminRelationshipRequest::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(DelegatedAdminRelationshipStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the operations property value. 
     * @return array<DelegatedAdminRelationshipOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the partner property value. 
     * @return DelegatedAdminRelationshipParticipant|null
    */
    public function getPartner(): ?DelegatedAdminRelationshipParticipant {
        return $this->partner;
    }

    /**
     * Gets the requests property value. 
     * @return array<DelegatedAdminRelationshipRequest>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Gets the status property value. 
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
        $writer->writeObjectValue('partner', $this->partner);
        $writer->writeCollectionOfObjectValues('requests', $this->requests);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the accessAssignments property value. 
     *  @param array<DelegatedAdminAccessAssignment>|null $value Value to set for the accessAssignments property.
    */
    public function setAccessAssignments(?array $value ): void {
        $this->accessAssignments = $value;
    }

    /**
     * Sets the accessDetails property value. 
     *  @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value ): void {
        $this->accessDetails = $value;
    }

    /**
     * Sets the activatedDateTime property value. 
     *  @param DateTime|null $value Value to set for the activatedDateTime property.
    */
    public function setActivatedDateTime(?DateTime $value ): void {
        $this->activatedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customer property value. 
     *  @param DelegatedAdminRelationshipCustomerParticipant|null $value Value to set for the customer property.
    */
    public function setCustomer(?DelegatedAdminRelationshipCustomerParticipant $value ): void {
        $this->customer = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the duration property value. 
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDateTime property value. 
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the operations property value. 
     *  @param array<DelegatedAdminRelationshipOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the partner property value. 
     *  @param DelegatedAdminRelationshipParticipant|null $value Value to set for the partner property.
    */
    public function setPartner(?DelegatedAdminRelationshipParticipant $value ): void {
        $this->partner = $value;
    }

    /**
     * Sets the requests property value. 
     *  @param array<DelegatedAdminRelationshipRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value ): void {
        $this->requests = $value;
    }

    /**
     * Sets the status property value. 
     *  @param DelegatedAdminRelationshipStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminRelationshipStatus $value ): void {
        $this->status = $value;
    }

}
