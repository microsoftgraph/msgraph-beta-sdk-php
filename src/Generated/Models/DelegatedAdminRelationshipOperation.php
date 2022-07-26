<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationshipOperation extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $data The data (payload) for the operation. Read-only.
    */
    private ?string $data = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DelegatedAdminRelationshipOperationType|null $operationType The operationType property
    */
    private ?DelegatedAdminRelationshipOperationType $operationType = null;
    
    /**
     * @var LongRunningOperationStatus|null $status The status property
    */
    private ?LongRunningOperationStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminRelationshipOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.delegatedAdminRelationshipOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationshipOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationshipOperation {
        return new DelegatedAdminRelationshipOperation();
    }

    /**
     * Gets the createdDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the data property value. The data (payload) for the operation. Read-only.
     * @return string|null
    */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'data' => function (ParseNode $n) use ($o) { $o->setData($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'operationType' => function (ParseNode $n) use ($o) { $o->setOperationType($n->getEnumValue(DelegatedAdminRelationshipOperationType::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return DelegatedAdminRelationshipOperationType|null
    */
    public function getOperationType(): ?DelegatedAdminRelationshipOperationType {
        return $this->operationType;
    }

    /**
     * Gets the status property value. The status property
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('data', $this->data);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the createdDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the data property value. The data (payload) for the operation. Read-only.
     *  @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value ): void {
        $this->data = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the operationType property value. The operationType property
     *  @param DelegatedAdminRelationshipOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?DelegatedAdminRelationshipOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value ): void {
        $this->status = $value;
    }

}
