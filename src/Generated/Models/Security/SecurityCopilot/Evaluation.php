<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Evaluation extends Entity implements Parsable 
{
    /**
     * Instantiates a new Evaluation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Evaluation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Evaluation {
        return new Evaluation();
    }

    /**
     * Gets the completedDateTime property value. Evaluation completion time.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. Evaluation created time.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the executionCount property value. Evaluation execution count.
     * @return int|null
    */
    public function getExecutionCount(): ?int {
        $val = $this->getBackingStore()->get('executionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executionCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'executionCount' => fn(ParseNode $n) => $o->setExecutionCount($n->getIntegerValue()),
            'isCancelled' => fn(ParseNode $n) => $o->setIsCancelled($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getObjectValue([EvaluationResult::class, 'createFromDiscriminatorValue'])),
            'runStartDateTime' => fn(ParseNode $n) => $o->setRunStartDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(EvaluationState::class)),
        ]);
    }

    /**
     * Gets the isCancelled property value. Evaluation cancellation status.
     * @return bool|null
    */
    public function getIsCancelled(): ?bool {
        $val = $this->getBackingStore()->get('isCancelled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCancelled'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Evaluation modified time.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the result property value. Evaluation results collection.
     * @return EvaluationResult|null
    */
    public function getResult(): ?EvaluationResult {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof EvaluationResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the runStartDateTime property value. Evaluation Run start time.
     * @return DateTime|null
    */
    public function getRunStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('runStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runStartDateTime'");
    }

    /**
     * Gets the state property value. The state property
     * @return EvaluationState|null
    */
    public function getState(): ?EvaluationState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof EvaluationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('executionCount', $this->getExecutionCount());
        $writer->writeBooleanValue('isCancelled', $this->getIsCancelled());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('result', $this->getResult());
        $writer->writeDateTimeValue('runStartDateTime', $this->getRunStartDateTime());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the completedDateTime property value. Evaluation completion time.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. Evaluation created time.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the executionCount property value. Evaluation execution count.
     * @param int|null $value Value to set for the executionCount property.
    */
    public function setExecutionCount(?int $value): void {
        $this->getBackingStore()->set('executionCount', $value);
    }

    /**
     * Sets the isCancelled property value. Evaluation cancellation status.
     * @param bool|null $value Value to set for the isCancelled property.
    */
    public function setIsCancelled(?bool $value): void {
        $this->getBackingStore()->set('isCancelled', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Evaluation modified time.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the result property value. Evaluation results collection.
     * @param EvaluationResult|null $value Value to set for the result property.
    */
    public function setResult(?EvaluationResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the runStartDateTime property value. Evaluation Run start time.
     * @param DateTime|null $value Value to set for the runStartDateTime property.
    */
    public function setRunStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('runStartDateTime', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param EvaluationState|null $value Value to set for the state property.
    */
    public function setState(?EvaluationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
