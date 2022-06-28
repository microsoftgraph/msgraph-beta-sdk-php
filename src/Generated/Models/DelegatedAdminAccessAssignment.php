<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminAccessAssignment extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DelegatedAdminAccessContainer|null $accessContainer The accessContainer property
    */
    private ?DelegatedAdminAccessContainer $accessContainer = null;
    
    /**
     * @var DelegatedAdminAccessDetails|null $accessDetails The accessDetails property
    */
    private ?DelegatedAdminAccessDetails $accessDetails = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $createdDateTime The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DelegatedAdminAccessAssignmentStatus|null $status The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
    */
    private ?DelegatedAdminAccessAssignmentStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminAccessAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminAccessAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminAccessAssignment {
        return new DelegatedAdminAccessAssignment();
    }

    /**
     * Gets the accessContainer property value. The accessContainer property
     * @return DelegatedAdminAccessContainer|null
    */
    public function getAccessContainer(): ?DelegatedAdminAccessContainer {
        return $this->accessContainer;
    }

    /**
     * Gets the accessDetails property value. The accessDetails property
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        return $this->accessDetails;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
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
            'accessContainer' => function (ParseNode $n) use ($o) { $o->setAccessContainer($n->getObjectValue(array(DelegatedAdminAccessContainer::class, 'createFromDiscriminatorValue'))); },
            'accessDetails' => function (ParseNode $n) use ($o) { $o->setAccessDetails($n->getObjectValue(array(DelegatedAdminAccessDetails::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DelegatedAdminAccessAssignmentStatus::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the status property value. The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     * @return DelegatedAdminAccessAssignmentStatus|null
    */
    public function getStatus(): ?DelegatedAdminAccessAssignmentStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessContainer', $this->accessContainer);
        $writer->writeObjectValue('accessDetails', $this->accessDetails);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessContainer property value. The accessContainer property
     *  @param DelegatedAdminAccessContainer|null $value Value to set for the accessContainer property.
    */
    public function setAccessContainer(?DelegatedAdminAccessContainer $value ): void {
        $this->accessContainer = $value;
    }

    /**
     * Sets the accessDetails property value. The accessDetails property
     *  @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value ): void {
        $this->accessDetails = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the status property value. The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     *  @param DelegatedAdminAccessAssignmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminAccessAssignmentStatus $value ): void {
        $this->status = $value;
    }

}
