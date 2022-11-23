<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSessionBase extends ExactMatchJobBase implements Parsable 
{
    /**
     * Instantiates a new ExactMatchSessionBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exactMatchSessionBase');
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
        return $this->getBackingStore()->get('dataStoreId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataStoreId' => fn(ParseNode $n) => $o->setDataStoreId($n->getStringValue()),
            'processingCompletionDateTime' => fn(ParseNode $n) => $o->setProcessingCompletionDateTime($n->getDateTimeValue()),
            'remainingBlockCount' => fn(ParseNode $n) => $o->setRemainingBlockCount($n->getIntegerValue()),
            'remainingJobCount' => fn(ParseNode $n) => $o->setRemainingJobCount($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'totalBlockCount' => fn(ParseNode $n) => $o->setTotalBlockCount($n->getIntegerValue()),
            'totalJobCount' => fn(ParseNode $n) => $o->setTotalJobCount($n->getIntegerValue()),
            'uploadCompletionDateTime' => fn(ParseNode $n) => $o->setUploadCompletionDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the processingCompletionDateTime property value. The processingCompletionDateTime property
     * @return DateTime|null
    */
    public function getProcessingCompletionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('processingCompletionDateTime');
    }

    /**
     * Gets the remainingBlockCount property value. The remainingBlockCount property
     * @return int|null
    */
    public function getRemainingBlockCount(): ?int {
        return $this->getBackingStore()->get('remainingBlockCount');
    }

    /**
     * Gets the remainingJobCount property value. The remainingJobCount property
     * @return int|null
    */
    public function getRemainingJobCount(): ?int {
        return $this->getBackingStore()->get('remainingJobCount');
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the totalBlockCount property value. The totalBlockCount property
     * @return int|null
    */
    public function getTotalBlockCount(): ?int {
        return $this->getBackingStore()->get('totalBlockCount');
    }

    /**
     * Gets the totalJobCount property value. The totalJobCount property
     * @return int|null
    */
    public function getTotalJobCount(): ?int {
        return $this->getBackingStore()->get('totalJobCount');
    }

    /**
     * Gets the uploadCompletionDateTime property value. The uploadCompletionDateTime property
     * @return DateTime|null
    */
    public function getUploadCompletionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('uploadCompletionDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('dataStoreId', $this->getDataStoreId());
        $writer->writeDateTimeValue('processingCompletionDateTime', $this->getProcessingCompletionDateTime());
        $writer->writeIntegerValue('remainingBlockCount', $this->getRemainingBlockCount());
        $writer->writeIntegerValue('remainingJobCount', $this->getRemainingJobCount());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeIntegerValue('totalBlockCount', $this->getTotalBlockCount());
        $writer->writeIntegerValue('totalJobCount', $this->getTotalJobCount());
        $writer->writeDateTimeValue('uploadCompletionDateTime', $this->getUploadCompletionDateTime());
    }

    /**
     * Sets the dataStoreId property value. The dataStoreId property
     *  @param string|null $value Value to set for the dataStoreId property.
    */
    public function setDataStoreId(?string $value): void {
        $this->getBackingStore()->set('dataStoreId', $value);
    }

    /**
     * Sets the processingCompletionDateTime property value. The processingCompletionDateTime property
     *  @param DateTime|null $value Value to set for the processingCompletionDateTime property.
    */
    public function setProcessingCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('processingCompletionDateTime', $value);
    }

    /**
     * Sets the remainingBlockCount property value. The remainingBlockCount property
     *  @param int|null $value Value to set for the remainingBlockCount property.
    */
    public function setRemainingBlockCount(?int $value): void {
        $this->getBackingStore()->set('remainingBlockCount', $value);
    }

    /**
     * Sets the remainingJobCount property value. The remainingJobCount property
     *  @param int|null $value Value to set for the remainingJobCount property.
    */
    public function setRemainingJobCount(?int $value): void {
        $this->getBackingStore()->set('remainingJobCount', $value);
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the totalBlockCount property value. The totalBlockCount property
     *  @param int|null $value Value to set for the totalBlockCount property.
    */
    public function setTotalBlockCount(?int $value): void {
        $this->getBackingStore()->set('totalBlockCount', $value);
    }

    /**
     * Sets the totalJobCount property value. The totalJobCount property
     *  @param int|null $value Value to set for the totalJobCount property.
    */
    public function setTotalJobCount(?int $value): void {
        $this->getBackingStore()->set('totalJobCount', $value);
    }

    /**
     * Sets the uploadCompletionDateTime property value. The uploadCompletionDateTime property
     *  @param DateTime|null $value Value to set for the uploadCompletionDateTime property.
    */
    public function setUploadCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('uploadCompletionDateTime', $value);
    }

}
