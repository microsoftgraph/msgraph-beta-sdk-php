<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminRelationshipOperation extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
     * @var DelegatedAdminRelationshipOperationType|null $operationType The type of long-running operation. The possible values are: delegatedAdminAccessAssignmentUpdate, unknownFutureValue. Read-only.
    */
    private ?DelegatedAdminRelationshipOperationType $operationType = null;
    
    /**
     * @var LongRunningOperationStatus|null $status The status of the operation. Read-only. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only. Supports $orderBy.
    */
    private ?LongRunningOperationStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminRelationshipOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
     * Gets the operationType property value. The type of long-running operation. The possible values are: delegatedAdminAccessAssignmentUpdate, unknownFutureValue. Read-only.
     * @return DelegatedAdminRelationshipOperationType|null
    */
    public function getOperationType(): ?DelegatedAdminRelationshipOperationType {
        return $this->operationType;
    }

    /**
     * Gets the status property value. The status of the operation. Read-only. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only. Supports $orderBy.
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
     * Sets the operationType property value. The type of long-running operation. The possible values are: delegatedAdminAccessAssignmentUpdate, unknownFutureValue. Read-only.
     *  @param DelegatedAdminRelationshipOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?DelegatedAdminRelationshipOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the status property value. The status of the operation. Read-only. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only. Supports $orderBy.
     *  @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value ): void {
        $this->status = $value;
    }

}
