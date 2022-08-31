<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskProcessingResult extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime The completedDateTime property
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $failureReason The failureReason property
    */
    private ?string $failureReason = null;
    
    /**
     * @var LifecycleWorkflowProcessingStatus|null $processingStatus The processingStatus property
    */
    private ?LifecycleWorkflowProcessingStatus $processingStatus = null;
    
    /**
     * @var DateTime|null $startedDateTime The startedDateTime property
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var User|null $subject The subject property
    */
    private ?User $subject = null;
    
    /**
     * @var Task|null $task The task property
    */
    private ?Task $task = null;
    
    /**
     * Instantiates a new taskProcessingResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.taskProcessingResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskProcessingResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskProcessingResult {
        return new TaskProcessingResult();
    }

    /**
     * Gets the completedDateTime property value. The completedDateTime property
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the failureReason property value. The failureReason property
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'failureReason' => function (ParseNode $n) use ($o) { $o->setFailureReason($n->getStringValue()); },
            'processingStatus' => function (ParseNode $n) use ($o) { $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'task' => function (ParseNode $n) use ($o) { $o->setTask($n->getObjectValue(array(Task::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return LifecycleWorkflowProcessingStatus|null
    */
    public function getProcessingStatus(): ?LifecycleWorkflowProcessingStatus {
        return $this->processingStatus;
    }

    /**
     * Gets the startedDateTime property value. The startedDateTime property
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->startedDateTime;
    }

    /**
     * Gets the subject property value. The subject property
     * @return User|null
    */
    public function getSubject(): ?User {
        return $this->subject;
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        return $this->task;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('failureReason', $this->failureReason);
        $writer->writeEnumValue('processingStatus', $this->processingStatus);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeObjectValue('subject', $this->subject);
        $writer->writeObjectValue('task', $this->task);
    }

    /**
     * Sets the completedDateTime property value. The completedDateTime property
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the failureReason property value. The failureReason property
     *  @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value ): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     *  @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value ): void {
        $this->processingStatus = $value;
    }

    /**
     * Sets the startedDateTime property value. The startedDateTime property
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value ): void {
        $this->startedDateTime = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param User|null $value Value to set for the subject property.
    */
    public function setSubject(?User $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the task property value. The task property
     *  @param Task|null $value Value to set for the task property.
    */
    public function setTask(?Task $value ): void {
        $this->task = $value;
    }

}
