<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskReport extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $completedDateTime The completedDateTime property
    */
    private ?DateTime $completedDateTime = null;
    
    /**
     * @var int|null $failedUsersCount The failedUsersCount property
    */
    private ?int $failedUsersCount = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The lastUpdatedDateTime property
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var LifecycleWorkflowProcessingStatus|null $processingStatus The processingStatus property
    */
    private ?LifecycleWorkflowProcessingStatus $processingStatus = null;
    
    /**
     * @var string|null $runId The runId property
    */
    private ?string $runId = null;
    
    /**
     * @var DateTime|null $startedDateTime The startedDateTime property
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var int|null $successfulUsersCount The successfulUsersCount property
    */
    private ?int $successfulUsersCount = null;
    
    /**
     * @var Task|null $task The task property
    */
    private ?Task $task = null;
    
    /**
     * @var TaskDefinition|null $taskDefinition The taskDefinition property
    */
    private ?TaskDefinition $taskDefinition = null;
    
    /**
     * @var array<TaskProcessingResult>|null $taskProcessingResults The taskProcessingResults property
    */
    private ?array $taskProcessingResults = null;
    
    /**
     * @var int|null $totalUsersCount The totalUsersCount property
    */
    private ?int $totalUsersCount = null;
    
    /**
     * @var int|null $unprocessedUsersCount The unprocessedUsersCount property
    */
    private ?int $unprocessedUsersCount = null;
    
    /**
     * Instantiates a new TaskReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.taskReport');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskReport {
        return new TaskReport();
    }

    /**
     * Gets the completedDateTime property value. The completedDateTime property
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the failedUsersCount property value. The failedUsersCount property
     * @return int|null
    */
    public function getFailedUsersCount(): ?int {
        return $this->failedUsersCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'failedUsersCount' => function (ParseNode $n) use ($o) { $o->setFailedUsersCount($n->getIntegerValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'processingStatus' => function (ParseNode $n) use ($o) { $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)); },
            'runId' => function (ParseNode $n) use ($o) { $o->setRunId($n->getStringValue()); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'successfulUsersCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulUsersCount($n->getIntegerValue()); },
            'task' => function (ParseNode $n) use ($o) { $o->setTask($n->getObjectValue(array(Task::class, 'createFromDiscriminatorValue'))); },
            'taskDefinition' => function (ParseNode $n) use ($o) { $o->setTaskDefinition($n->getObjectValue(array(TaskDefinition::class, 'createFromDiscriminatorValue'))); },
            'taskProcessingResults' => function (ParseNode $n) use ($o) { $o->setTaskProcessingResults($n->getCollectionOfObjectValues(array(TaskProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'totalUsersCount' => function (ParseNode $n) use ($o) { $o->setTotalUsersCount($n->getIntegerValue()); },
            'unprocessedUsersCount' => function (ParseNode $n) use ($o) { $o->setUnprocessedUsersCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return LifecycleWorkflowProcessingStatus|null
    */
    public function getProcessingStatus(): ?LifecycleWorkflowProcessingStatus {
        return $this->processingStatus;
    }

    /**
     * Gets the runId property value. The runId property
     * @return string|null
    */
    public function getRunId(): ?string {
        return $this->runId;
    }

    /**
     * Gets the startedDateTime property value. The startedDateTime property
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->startedDateTime;
    }

    /**
     * Gets the successfulUsersCount property value. The successfulUsersCount property
     * @return int|null
    */
    public function getSuccessfulUsersCount(): ?int {
        return $this->successfulUsersCount;
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        return $this->task;
    }

    /**
     * Gets the taskDefinition property value. The taskDefinition property
     * @return TaskDefinition|null
    */
    public function getTaskDefinition(): ?TaskDefinition {
        return $this->taskDefinition;
    }

    /**
     * Gets the taskProcessingResults property value. The taskProcessingResults property
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->taskProcessingResults;
    }

    /**
     * Gets the totalUsersCount property value. The totalUsersCount property
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        return $this->totalUsersCount;
    }

    /**
     * Gets the unprocessedUsersCount property value. The unprocessedUsersCount property
     * @return int|null
    */
    public function getUnprocessedUsersCount(): ?int {
        return $this->unprocessedUsersCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeIntegerValue('failedUsersCount', $this->failedUsersCount);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeEnumValue('processingStatus', $this->processingStatus);
        $writer->writeStringValue('runId', $this->runId);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeIntegerValue('successfulUsersCount', $this->successfulUsersCount);
        $writer->writeObjectValue('task', $this->task);
        $writer->writeObjectValue('taskDefinition', $this->taskDefinition);
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->taskProcessingResults);
        $writer->writeIntegerValue('totalUsersCount', $this->totalUsersCount);
        $writer->writeIntegerValue('unprocessedUsersCount', $this->unprocessedUsersCount);
    }

    /**
     * Sets the completedDateTime property value. The completedDateTime property
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the failedUsersCount property value. The failedUsersCount property
     *  @param int|null $value Value to set for the failedUsersCount property.
    */
    public function setFailedUsersCount(?int $value ): void {
        $this->failedUsersCount = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     *  @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value ): void {
        $this->processingStatus = $value;
    }

    /**
     * Sets the runId property value. The runId property
     *  @param string|null $value Value to set for the runId property.
    */
    public function setRunId(?string $value ): void {
        $this->runId = $value;
    }

    /**
     * Sets the startedDateTime property value. The startedDateTime property
     *  @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value ): void {
        $this->startedDateTime = $value;
    }

    /**
     * Sets the successfulUsersCount property value. The successfulUsersCount property
     *  @param int|null $value Value to set for the successfulUsersCount property.
    */
    public function setSuccessfulUsersCount(?int $value ): void {
        $this->successfulUsersCount = $value;
    }

    /**
     * Sets the task property value. The task property
     *  @param Task|null $value Value to set for the task property.
    */
    public function setTask(?Task $value ): void {
        $this->task = $value;
    }

    /**
     * Sets the taskDefinition property value. The taskDefinition property
     *  @param TaskDefinition|null $value Value to set for the taskDefinition property.
    */
    public function setTaskDefinition(?TaskDefinition $value ): void {
        $this->taskDefinition = $value;
    }

    /**
     * Sets the taskProcessingResults property value. The taskProcessingResults property
     *  @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value ): void {
        $this->taskProcessingResults = $value;
    }

    /**
     * Sets the totalUsersCount property value. The totalUsersCount property
     *  @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value ): void {
        $this->totalUsersCount = $value;
    }

    /**
     * Sets the unprocessedUsersCount property value. The unprocessedUsersCount property
     *  @param int|null $value Value to set for the unprocessedUsersCount property.
    */
    public function setUnprocessedUsersCount(?int $value ): void {
        $this->unprocessedUsersCount = $value;
    }

}
