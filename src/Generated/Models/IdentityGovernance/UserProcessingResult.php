<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserProcessingResult extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime The completedDateTime property
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var int|null $failedTasksCount The failedTasksCount property
    */
    private ?int $failedTasksCount = null;
    
    /**
     * @var LifecycleWorkflowProcessingStatus|null $processingStatus The processingStatus property
    */
    private ?LifecycleWorkflowProcessingStatus $processingStatus = null;
    
    /**
     * @var DateTime|null $scheduledDateTime The scheduledDateTime property
    */
    private ?DateTime $scheduledDateTime = null;
    
    /**
     * @var DateTime|null $startedDateTime The startedDateTime property
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var User|null $subject The subject property
    */
    private ?User $subject = null;
    
    /**
     * @var array<TaskProcessingResult>|null $taskProcessingResults The taskProcessingResults property
    */
    private ?array $taskProcessingResults = null;
    
    /**
     * @var int|null $totalTasksCount The totalTasksCount property
    */
    private ?int $totalTasksCount = null;
    
    /**
     * @var int|null $totalUnprocessedTasksCount The totalUnprocessedTasksCount property
    */
    private ?int $totalUnprocessedTasksCount = null;
    
    /**
     * @var WorkflowExecutionType|null $workflowExecutionType The workflowExecutionType property
    */
    private ?WorkflowExecutionType $workflowExecutionType = null;
    
    /**
     * @var int|null $workflowVersion The workflowVersion property
    */
    private ?int $workflowVersion = null;
    
    /**
     * Instantiates a new userProcessingResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.userProcessingResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserProcessingResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserProcessingResult {
        return new UserProcessingResult();
    }

    /**
     * Gets the completedDateTime property value. The completedDateTime property
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the failedTasksCount property value. The failedTasksCount property
     * @return int|null
    */
    public function getFailedTasksCount(): ?int {
        return $this->failedTasksCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'failedTasksCount' => function (ParseNode $n) use ($o) { $o->setFailedTasksCount($n->getIntegerValue()); },
            'processingStatus' => function (ParseNode $n) use ($o) { $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)); },
            'scheduledDateTime' => function (ParseNode $n) use ($o) { $o->setScheduledDateTime($n->getDateTimeValue()); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'taskProcessingResults' => function (ParseNode $n) use ($o) { $o->setTaskProcessingResults($n->getCollectionOfObjectValues(array(TaskProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'totalTasksCount' => function (ParseNode $n) use ($o) { $o->setTotalTasksCount($n->getIntegerValue()); },
            'totalUnprocessedTasksCount' => function (ParseNode $n) use ($o) { $o->setTotalUnprocessedTasksCount($n->getIntegerValue()); },
            'workflowExecutionType' => function (ParseNode $n) use ($o) { $o->setWorkflowExecutionType($n->getEnumValue(WorkflowExecutionType::class)); },
            'workflowVersion' => function (ParseNode $n) use ($o) { $o->setWorkflowVersion($n->getIntegerValue()); },
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
     * Gets the scheduledDateTime property value. The scheduledDateTime property
     * @return DateTime|null
    */
    public function getScheduledDateTime(): ?DateTime {
        return $this->scheduledDateTime;
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
     * Gets the taskProcessingResults property value. The taskProcessingResults property
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->taskProcessingResults;
    }

    /**
     * Gets the totalTasksCount property value. The totalTasksCount property
     * @return int|null
    */
    public function getTotalTasksCount(): ?int {
        return $this->totalTasksCount;
    }

    /**
     * Gets the totalUnprocessedTasksCount property value. The totalUnprocessedTasksCount property
     * @return int|null
    */
    public function getTotalUnprocessedTasksCount(): ?int {
        return $this->totalUnprocessedTasksCount;
    }

    /**
     * Gets the workflowExecutionType property value. The workflowExecutionType property
     * @return WorkflowExecutionType|null
    */
    public function getWorkflowExecutionType(): ?WorkflowExecutionType {
        return $this->workflowExecutionType;
    }

    /**
     * Gets the workflowVersion property value. The workflowVersion property
     * @return int|null
    */
    public function getWorkflowVersion(): ?int {
        return $this->workflowVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeIntegerValue('failedTasksCount', $this->failedTasksCount);
        $writer->writeEnumValue('processingStatus', $this->processingStatus);
        $writer->writeDateTimeValue('scheduledDateTime', $this->scheduledDateTime);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeObjectValue('subject', $this->subject);
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->taskProcessingResults);
        $writer->writeIntegerValue('totalTasksCount', $this->totalTasksCount);
        $writer->writeIntegerValue('totalUnprocessedTasksCount', $this->totalUnprocessedTasksCount);
        $writer->writeEnumValue('workflowExecutionType', $this->workflowExecutionType);
        $writer->writeIntegerValue('workflowVersion', $this->workflowVersion);
    }

    /**
     * Sets the completedDateTime property value. The completedDateTime property
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the failedTasksCount property value. The failedTasksCount property
     *  @param int|null $value Value to set for the failedTasksCount property.
    */
    public function setFailedTasksCount(?int $value ): void {
        $this->failedTasksCount = $value;
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     *  @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value ): void {
        $this->processingStatus = $value;
    }

    /**
     * Sets the scheduledDateTime property value. The scheduledDateTime property
     *  @param DateTime|null $value Value to set for the scheduledDateTime property.
    */
    public function setScheduledDateTime(?DateTime $value ): void {
        $this->scheduledDateTime = $value;
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
     * Sets the taskProcessingResults property value. The taskProcessingResults property
     *  @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value ): void {
        $this->taskProcessingResults = $value;
    }

    /**
     * Sets the totalTasksCount property value. The totalTasksCount property
     *  @param int|null $value Value to set for the totalTasksCount property.
    */
    public function setTotalTasksCount(?int $value ): void {
        $this->totalTasksCount = $value;
    }

    /**
     * Sets the totalUnprocessedTasksCount property value. The totalUnprocessedTasksCount property
     *  @param int|null $value Value to set for the totalUnprocessedTasksCount property.
    */
    public function setTotalUnprocessedTasksCount(?int $value ): void {
        $this->totalUnprocessedTasksCount = $value;
    }

    /**
     * Sets the workflowExecutionType property value. The workflowExecutionType property
     *  @param WorkflowExecutionType|null $value Value to set for the workflowExecutionType property.
    */
    public function setWorkflowExecutionType(?WorkflowExecutionType $value ): void {
        $this->workflowExecutionType = $value;
    }

    /**
     * Sets the workflowVersion property value. The workflowVersion property
     *  @param int|null $value Value to set for the workflowVersion property.
    */
    public function setWorkflowVersion(?int $value ): void {
        $this->workflowVersion = $value;
    }

}
