<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JobResponseBase extends Entity 
{
    /** @var DateTime|null $creationDateTime  */
    private ?DateTime $creationDateTime = null;
    
    /** @var DateTime|null $endDateTime  */
    private ?DateTime $endDateTime = null;
    
    /** @var ClassificationError|null $error  */
    private ?ClassificationError $error = null;
    
    /** @var DateTime|null $startDateTime  */
    private ?DateTime $startDateTime = null;
    
    /** @var string|null $status  */
    private ?string $status = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /**
     * Instantiates a new jobResponseBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JobResponseBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): JobResponseBase {
        return new JobResponseBase();
    }

    /**
     * Gets the creationDateTime property value. 
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the endDateTime property value. 
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the error property value. 
     * @return ClassificationError|null
    */
    public function getError(): ?ClassificationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getDateTimeValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(ClassificationError::class)); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the startDateTime property value. 
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. 
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the tenantId property value. 
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the creationDateTime property value. 
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the endDateTime property value. 
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the error property value. 
     *  @param ClassificationError|null $value Value to set for the error property.
    */
    public function setError(?ClassificationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the startDateTime property value. 
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. 
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tenantId property value. 
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
