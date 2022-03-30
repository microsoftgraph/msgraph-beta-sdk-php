<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSessionBase extends ExactMatchJobBase 
{
    /** @var string|null $dataStoreId  */
    private ?string $dataStoreId = null;
    
    /** @var DateTime|null $processingCompletionDateTime  */
    private ?DateTime $processingCompletionDateTime = null;
    
    /** @var int|null $remainingBlockCount  */
    private ?int $remainingBlockCount = null;
    
    /** @var int|null $remainingJobCount  */
    private ?int $remainingJobCount = null;
    
    /** @var string|null $state  */
    private ?string $state = null;
    
    /** @var int|null $totalBlockCount  */
    private ?int $totalBlockCount = null;
    
    /** @var int|null $totalJobCount  */
    private ?int $totalJobCount = null;
    
    /** @var DateTime|null $uploadCompletionDateTime  */
    private ?DateTime $uploadCompletionDateTime = null;
    
    /**
     * Instantiates a new exactMatchSessionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchSessionBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchSessionBase {
        return new ExactMatchSessionBase();
    }

    /**
     * Gets the dataStoreId property value. 
     * @return string|null
    */
    public function getDataStoreId(): ?string {
        return $this->dataStoreId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'dataStoreId' => function (self $o, ParseNode $n) { $o->setDataStoreId($n->getStringValue()); },
            'processingCompletionDateTime' => function (self $o, ParseNode $n) { $o->setProcessingCompletionDateTime($n->getDateTimeValue()); },
            'remainingBlockCount' => function (self $o, ParseNode $n) { $o->setRemainingBlockCount($n->getIntegerValue()); },
            'remainingJobCount' => function (self $o, ParseNode $n) { $o->setRemainingJobCount($n->getIntegerValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
            'totalBlockCount' => function (self $o, ParseNode $n) { $o->setTotalBlockCount($n->getIntegerValue()); },
            'totalJobCount' => function (self $o, ParseNode $n) { $o->setTotalJobCount($n->getIntegerValue()); },
            'uploadCompletionDateTime' => function (self $o, ParseNode $n) { $o->setUploadCompletionDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the processingCompletionDateTime property value. 
     * @return DateTime|null
    */
    public function getProcessingCompletionDateTime(): ?DateTime {
        return $this->processingCompletionDateTime;
    }

    /**
     * Gets the remainingBlockCount property value. 
     * @return int|null
    */
    public function getRemainingBlockCount(): ?int {
        return $this->remainingBlockCount;
    }

    /**
     * Gets the remainingJobCount property value. 
     * @return int|null
    */
    public function getRemainingJobCount(): ?int {
        return $this->remainingJobCount;
    }

    /**
     * Gets the state property value. 
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the totalBlockCount property value. 
     * @return int|null
    */
    public function getTotalBlockCount(): ?int {
        return $this->totalBlockCount;
    }

    /**
     * Gets the totalJobCount property value. 
     * @return int|null
    */
    public function getTotalJobCount(): ?int {
        return $this->totalJobCount;
    }

    /**
     * Gets the uploadCompletionDateTime property value. 
     * @return DateTime|null
    */
    public function getUploadCompletionDateTime(): ?DateTime {
        return $this->uploadCompletionDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('dataStoreId', $this->dataStoreId);
        $writer->writeDateTimeValue('processingCompletionDateTime', $this->processingCompletionDateTime);
        $writer->writeIntegerValue('remainingBlockCount', $this->remainingBlockCount);
        $writer->writeIntegerValue('remainingJobCount', $this->remainingJobCount);
        $writer->writeStringValue('state', $this->state);
        $writer->writeIntegerValue('totalBlockCount', $this->totalBlockCount);
        $writer->writeIntegerValue('totalJobCount', $this->totalJobCount);
        $writer->writeDateTimeValue('uploadCompletionDateTime', $this->uploadCompletionDateTime);
    }

    /**
     * Sets the dataStoreId property value. 
     *  @param string|null $value Value to set for the dataStoreId property.
    */
    public function setDataStoreId(?string $value ): void {
        $this->dataStoreId = $value;
    }

    /**
     * Sets the processingCompletionDateTime property value. 
     *  @param DateTime|null $value Value to set for the processingCompletionDateTime property.
    */
    public function setProcessingCompletionDateTime(?DateTime $value ): void {
        $this->processingCompletionDateTime = $value;
    }

    /**
     * Sets the remainingBlockCount property value. 
     *  @param int|null $value Value to set for the remainingBlockCount property.
    */
    public function setRemainingBlockCount(?int $value ): void {
        $this->remainingBlockCount = $value;
    }

    /**
     * Sets the remainingJobCount property value. 
     *  @param int|null $value Value to set for the remainingJobCount property.
    */
    public function setRemainingJobCount(?int $value ): void {
        $this->remainingJobCount = $value;
    }

    /**
     * Sets the state property value. 
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the totalBlockCount property value. 
     *  @param int|null $value Value to set for the totalBlockCount property.
    */
    public function setTotalBlockCount(?int $value ): void {
        $this->totalBlockCount = $value;
    }

    /**
     * Sets the totalJobCount property value. 
     *  @param int|null $value Value to set for the totalJobCount property.
    */
    public function setTotalJobCount(?int $value ): void {
        $this->totalJobCount = $value;
    }

    /**
     * Sets the uploadCompletionDateTime property value. 
     *  @param DateTime|null $value Value to set for the uploadCompletionDateTime property.
    */
    public function setUploadCompletionDateTime(?DateTime $value ): void {
        $this->uploadCompletionDateTime = $value;
    }

}
