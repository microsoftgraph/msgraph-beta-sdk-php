<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminAccessAssignment extends Entity 
{
    /** @var DelegatedAdminAccessContainer|null $accessContainer  */
    private ?DelegatedAdminAccessContainer $accessContainer = null;
    
    /** @var DelegatedAdminAccessDetails|null $accessDetails  */
    private ?DelegatedAdminAccessDetails $accessDetails = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var DelegatedAdminAccessAssignmentStatus|null $status  */
    private ?DelegatedAdminAccessAssignmentStatus $status = null;
    
    /**
     * Instantiates a new delegatedAdminAccessAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminAccessAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminAccessAssignment {
        return new DelegatedAdminAccessAssignment();
    }

    /**
     * Gets the accessContainer property value. 
     * @return DelegatedAdminAccessContainer|null
    */
    public function getAccessContainer(): ?DelegatedAdminAccessContainer {
        return $this->accessContainer;
    }

    /**
     * Gets the accessDetails property value. 
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        return $this->accessDetails;
    }

    /**
     * Gets the createdDateTime property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'accessContainer' => function (self $o, ParseNode $n) { $o->setAccessContainer($n->getObjectValue(DelegatedAdminAccessContainer::class)); },
            'accessDetails' => function (self $o, ParseNode $n) { $o->setAccessDetails($n->getObjectValue(DelegatedAdminAccessDetails::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(DelegatedAdminAccessAssignmentStatus::class)); },
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
     * Gets the status property value. 
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
    }

    /**
     * Sets the accessContainer property value. 
     *  @param DelegatedAdminAccessContainer|null $value Value to set for the accessContainer property.
    */
    public function setAccessContainer(?DelegatedAdminAccessContainer $value ): void {
        $this->accessContainer = $value;
    }

    /**
     * Sets the accessDetails property value. 
     *  @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value ): void {
        $this->accessDetails = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the status property value. 
     *  @param DelegatedAdminAccessAssignmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminAccessAssignmentStatus $value ): void {
        $this->status = $value;
    }

}
