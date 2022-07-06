<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSessionBase extends ExactMatchJobBase implements Parsable 
{
    /**
     * @var string|null $dataStoreId The dataStoreId property
    */
    private ?string $dataStoreId = null;
    
    /**
     * @var DateTime|null $processingCompletionDateTime The processingCompletionDateTime property
    */
    private ?DateTime $processingCompletionDateTime = null;
    
    /**
     * @var int|null $remainingBlockCount The remainingBlockCount property
    */
    private ?int $remainingBlockCount = null;
    
    /**
     * @var int|null $remainingJobCount The remainingJobCount property
    */
    private ?int $remainingJobCount = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var int|null $totalBlockCount The totalBlockCount property
    */
    private ?int $totalBlockCount = null;
    
    /**
     * @var int|null $totalJobCount The totalJobCount property
    */
    private ?int $totalJobCount = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var DateTime|null $uploadCompletionDateTime The uploadCompletionDateTime property
    */
    private ?DateTime $uploadCompletionDateTime = null;
    
    /**
     * Instantiates a new ExactMatchSessionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchSessionBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchSessionBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exactMatchSession': return new ExactMatchSession();
            }
        }
        return new ExactMatchSessionBase();
    }

    /**
     * Gets the dataStoreId property value. The dataStoreId property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataStoreId' => function (ParseNode $n) use ($o) { $o->setDataStoreId($n->getStringValue()); },
            'processingCompletionDateTime' => function (ParseNode $n) use ($o) { $o->setProcessingCompletionDateTime($n->getDateTimeValue()); },
            'remainingBlockCount' => function (ParseNode $n) use ($o) { $o->setRemainingBlockCount($n->getIntegerValue()); },
            'remainingJobCount' => function (ParseNode $n) use ($o) { $o->setRemainingJobCount($n->getIntegerValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
            'totalBlockCount' => function (ParseNode $n) use ($o) { $o->setTotalBlockCount($n->getIntegerValue()); },
            'totalJobCount' => function (ParseNode $n) use ($o) { $o->setTotalJobCount($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
            'uploadCompletionDateTime' => function (ParseNode $n) use ($o) { $o->setUploadCompletionDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the processingCompletionDateTime property value. The processingCompletionDateTime property
     * @return DateTime|null
    */
    public function getProcessingCompletionDateTime(): ?DateTime {
        return $this->processingCompletionDateTime;
    }

    /**
     * Gets the remainingBlockCount property value. The remainingBlockCount property
     * @return int|null
    */
    public function getRemainingBlockCount(): ?int {
        return $this->remainingBlockCount;
    }

    /**
     * Gets the remainingJobCount property value. The remainingJobCount property
     * @return int|null
    */
    public function getRemainingJobCount(): ?int {
        return $this->remainingJobCount;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the totalBlockCount property value. The totalBlockCount property
     * @return int|null
    */
    public function getTotalBlockCount(): ?int {
        return $this->totalBlockCount;
    }

    /**
     * Gets the totalJobCount property value. The totalJobCount property
     * @return int|null
    */
    public function getTotalJobCount(): ?int {
        return $this->totalJobCount;
    }

    /**
     * Gets the uploadCompletionDateTime property value. The uploadCompletionDateTime property
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
        $writer->writeStringValue('@odata.type', $this->type);
        $writer->writeDateTimeValue('uploadCompletionDateTime', $this->uploadCompletionDateTime);
    }

    /**
     * Sets the dataStoreId property value. The dataStoreId property
     *  @param string|null $value Value to set for the dataStoreId property.
    */
    public function setDataStoreId(?string $value ): void {
        $this->dataStoreId = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the processingCompletionDateTime property value. The processingCompletionDateTime property
     *  @param DateTime|null $value Value to set for the processingCompletionDateTime property.
    */
    public function setProcessingCompletionDateTime(?DateTime $value ): void {
        $this->processingCompletionDateTime = $value;
    }

    /**
     * Sets the remainingBlockCount property value. The remainingBlockCount property
     *  @param int|null $value Value to set for the remainingBlockCount property.
    */
    public function setRemainingBlockCount(?int $value ): void {
        $this->remainingBlockCount = $value;
    }

    /**
     * Sets the remainingJobCount property value. The remainingJobCount property
     *  @param int|null $value Value to set for the remainingJobCount property.
    */
    public function setRemainingJobCount(?int $value ): void {
        $this->remainingJobCount = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the totalBlockCount property value. The totalBlockCount property
     *  @param int|null $value Value to set for the totalBlockCount property.
    */
    public function setTotalBlockCount(?int $value ): void {
        $this->totalBlockCount = $value;
    }

    /**
     * Sets the totalJobCount property value. The totalJobCount property
     *  @param int|null $value Value to set for the totalJobCount property.
    */
    public function setTotalJobCount(?int $value ): void {
        $this->totalJobCount = $value;
    }

    /**
     * Sets the uploadCompletionDateTime property value. The uploadCompletionDateTime property
     *  @param DateTime|null $value Value to set for the uploadCompletionDateTime property.
    */
    public function setUploadCompletionDateTime(?DateTime $value ): void {
        $this->uploadCompletionDateTime = $value;
    }

}
