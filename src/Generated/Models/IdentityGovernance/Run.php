<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Run extends Entity implements Parsable 
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
     * @var DateTime|null $scheduledDateTime The scheduledDateTime property
    */
    private ?DateTime $scheduledDateTime = null;
    
    /**
     * @var DateTime|null $startedDateTime The startedDateTime property
    */
    private ?DateTime $startedDateTime = null;
    
    /**
     * @var int|null $successfulUsersCount The successfulUsersCount property
    */
    private ?int $successfulUsersCount = null;
    
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
     * @var int|null $totalUsersCount The totalUsersCount property
    */
    private ?int $totalUsersCount = null;
    
    /**
     * @var array<UserProcessingResult>|null $userProcessingResults The userProcessingResults property
    */
    private ?array $userProcessingResults = null;
    
    /**
     * @var WorkflowExecutionType|null $workflowExecutionType The workflowExecutionType property
    */
    private ?WorkflowExecutionType $workflowExecutionType = null;
    
    /**
     * Instantiates a new run and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.run');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Run
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Run {
        return new Run();
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
            'failedTasksCount' => function (ParseNode $n) use ($o) { $o->setFailedTasksCount($n->getIntegerValue()); },
            'failedUsersCount' => function (ParseNode $n) use ($o) { $o->setFailedUsersCount($n->getIntegerValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'processingStatus' => function (ParseNode $n) use ($o) { $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)); },
            'scheduledDateTime' => function (ParseNode $n) use ($o) { $o->setScheduledDateTime($n->getDateTimeValue()); },
            'startedDateTime' => function (ParseNode $n) use ($o) { $o->setStartedDateTime($n->getDateTimeValue()); },
            'successfulUsersCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulUsersCount($n->getIntegerValue()); },
            'taskProcessingResults' => function (ParseNode $n) use ($o) { $o->setTaskProcessingResults($n->getCollectionOfObjectValues(array(TaskProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'totalTasksCount' => function (ParseNode $n) use ($o) { $o->setTotalTasksCount($n->getIntegerValue()); },
            'totalUnprocessedTasksCount' => function (ParseNode $n) use ($o) { $o->setTotalUnprocessedTasksCount($n->getIntegerValue()); },
            'totalUsersCount' => function (ParseNode $n) use ($o) { $o->setTotalUsersCount($n->getIntegerValue()); },
            'userProcessingResults' => function (ParseNode $n) use ($o) { $o->setUserProcessingResults($n->getCollectionOfObjectValues(array(UserProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'workflowExecutionType' => function (ParseNode $n) use ($o) { $o->setWorkflowExecutionType($n->getEnumValue(WorkflowExecutionType::class)); },
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
     * Gets the successfulUsersCount property value. The successfulUsersCount property
     * @return int|null
    */
    public function getSuccessfulUsersCount(): ?int {
        return $this->successfulUsersCount;
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
     * Gets the totalUsersCount property value. The totalUsersCount property
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        return $this->totalUsersCount;
    }

    /**
     * Gets the userProcessingResults property value. The userProcessingResults property
     * @return array<UserProcessingResult>|null
    */
    public function getUserProcessingResults(): ?array {
        return $this->userProcessingResults;
    }

    /**
     * Gets the workflowExecutionType property value. The workflowExecutionType property
     * @return WorkflowExecutionType|null
    */
    public function getWorkflowExecutionType(): ?WorkflowExecutionType {
        return $this->workflowExecutionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeIntegerValue('failedTasksCount', $this->failedTasksCount);
        $writer->writeIntegerValue('failedUsersCount', $this->failedUsersCount);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeEnumValue('processingStatus', $this->processingStatus);
        $writer->writeDateTimeValue('scheduledDateTime', $this->scheduledDateTime);
        $writer->writeDateTimeValue('startedDateTime', $this->startedDateTime);
        $writer->writeIntegerValue('successfulUsersCount', $this->successfulUsersCount);
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->taskProcessingResults);
        $writer->writeIntegerValue('totalTasksCount', $this->totalTasksCount);
        $writer->writeIntegerValue('totalUnprocessedTasksCount', $this->totalUnprocessedTasksCount);
        $writer->writeIntegerValue('totalUsersCount', $this->totalUsersCount);
        $writer->writeCollectionOfObjectValues('userProcessingResults', $this->userProcessingResults);
        $writer->writeEnumValue('workflowExecutionType', $this->workflowExecutionType);
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
     * Sets the successfulUsersCount property value. The successfulUsersCount property
     *  @param int|null $value Value to set for the successfulUsersCount property.
    */
    public function setSuccessfulUsersCount(?int $value ): void {
        $this->successfulUsersCount = $value;
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
     * Sets the totalUsersCount property value. The totalUsersCount property
     *  @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value ): void {
        $this->totalUsersCount = $value;
    }

    /**
     * Sets the userProcessingResults property value. The userProcessingResults property
     *  @param array<UserProcessingResult>|null $value Value to set for the userProcessingResults property.
    */
    public function setUserProcessingResults(?array $value ): void {
        $this->userProcessingResults = $value;
    }

    /**
     * Sets the workflowExecutionType property value. The workflowExecutionType property
     *  @param WorkflowExecutionType|null $value Value to set for the workflowExecutionType property.
    */
    public function setWorkflowExecutionType(?WorkflowExecutionType $value ): void {
        $this->workflowExecutionType = $value;
    }

}
