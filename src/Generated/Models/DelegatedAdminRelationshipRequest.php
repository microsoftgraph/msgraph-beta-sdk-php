<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationshipRequest extends Entity implements Parsable 
{
    /**
     * @var DelegatedAdminRelationshipRequestAction|null $action The action property
    */
    private ?DelegatedAdminRelationshipRequestAction $action = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DelegatedAdminRelationshipRequestStatus|null $status The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
    */
    private ?DelegatedAdminRelationshipRequestStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminRelationshipRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.delegatedAdminRelationshipRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationshipRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationshipRequest {
        return new DelegatedAdminRelationshipRequest();
    }

    /**
     * Gets the action property value. The action property
     * @return DelegatedAdminRelationshipRequestAction|null
    */
    public function getAction(): ?DelegatedAdminRelationshipRequestAction {
        return $this->action;
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(DelegatedAdminRelationshipRequestAction::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DelegatedAdminRelationshipRequestStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the status property value. The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     * @return DelegatedAdminRelationshipRequestStatus|null
    */
    public function getStatus(): ?DelegatedAdminRelationshipRequestStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->action);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the action property value. The action property
     *  @param DelegatedAdminRelationshipRequestAction|null $value Value to set for the action property.
    */
    public function setAction(?DelegatedAdminRelationshipRequestAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the status property value. The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue.
     *  @param DelegatedAdminRelationshipRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminRelationshipRequestStatus $value ): void {
        $this->status = $value;
    }

}
