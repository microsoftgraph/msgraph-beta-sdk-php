<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyOperation extends Entity 
{
    /** @var DateTime|null $lastModifiedDateTime The date and time the entity was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var GroupPolicyOperationStatus|null $operationStatus The group policy operation status. Possible values are: unknown, inProgress, success, failed. */
    private ?GroupPolicyOperationStatus $operationStatus = null;
    
    /** @var GroupPolicyOperationType|null $operationType The type of group policy operation. Possible values are: none, upload, uploadNewVersion, addLanguageFiles, removeLanguageFiles, updateLanguageFiles, remove. */
    private ?GroupPolicyOperationType $operationType = null;
    
    /** @var string|null $statusDetails The group policy operation status detail. */
    private ?string $statusDetails = null;
    
    /**
     * Instantiates a new groupPolicyOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyOperation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyOperation {
        return new GroupPolicyOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'operationStatus' => function (self $o, ParseNode $n) { $o->setOperationStatus($n->getEnumValue(GroupPolicyOperationStatus::class)); },
            'operationType' => function (self $o, ParseNode $n) { $o->setOperationType($n->getEnumValue(GroupPolicyOperationType::class)); },
            'statusDetails' => function (self $o, ParseNode $n) { $o->setStatusDetails($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the operationStatus property value. The group policy operation status. Possible values are: unknown, inProgress, success, failed.
     * @return GroupPolicyOperationStatus|null
    */
    public function getOperationStatus(): ?GroupPolicyOperationStatus {
        return $this->operationStatus;
    }

    /**
     * Gets the operationType property value. The type of group policy operation. Possible values are: none, upload, uploadNewVersion, addLanguageFiles, removeLanguageFiles, updateLanguageFiles, remove.
     * @return GroupPolicyOperationType|null
    */
    public function getOperationType(): ?GroupPolicyOperationType {
        return $this->operationType;
    }

    /**
     * Gets the statusDetails property value. The group policy operation status detail.
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        return $this->statusDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('operationStatus', $this->operationStatus);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeStringValue('statusDetails', $this->statusDetails);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the operationStatus property value. The group policy operation status. Possible values are: unknown, inProgress, success, failed.
     *  @param GroupPolicyOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?GroupPolicyOperationStatus $value ): void {
        $this->operationStatus = $value;
    }

    /**
     * Sets the operationType property value. The type of group policy operation. Possible values are: none, upload, uploadNewVersion, addLanguageFiles, removeLanguageFiles, updateLanguageFiles, remove.
     *  @param GroupPolicyOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?GroupPolicyOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the statusDetails property value. The group policy operation status detail.
     *  @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value ): void {
        $this->statusDetails = $value;
    }

}
