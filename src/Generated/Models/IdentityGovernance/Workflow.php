<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Workflow extends WorkflowBase implements Parsable 
{
    /**
     * @var DateTime|null $deletedDateTime When the workflow was deleted. Supports $filter(lt,gt) and $orderBy.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var array<User>|null $executionScope The unique identifier of the Azure AD identity that last modified the workflow object.
    */
    private ?array $executionScope = null;
    
    /**
     * @var string|null $id Identifier used for individually addressing a specific workflow. Supports $filter(eq, ne).
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $nextScheduleRunDateTime The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderBy.
    */
    private ?DateTime $nextScheduleRunDateTime = null;
    
    /**
     * @var array<Run>|null $runs The runs property
    */
    private ?array $runs = null;
    
    /**
     * @var array<TaskReport>|null $taskReports Represents the aggregation of task execution data for tasks within a workflow object.
    */
    private ?array $taskReports = null;
    
    /**
     * @var array<UserProcessingResult>|null $userProcessingResults The userProcessingResults property
    */
    private ?array $userProcessingResults = null;
    
    /**
     * @var int|null $version The current version number of the workflow. Value is 1 when the workflow is first created. Supports $filter(eq, ne).
    */
    private ?int $version = null;
    
    /**
     * @var array<WorkflowVersion>|null $versions The workflow versions that are available.
    */
    private ?array $versions = null;
    
    /**
     * Instantiates a new Workflow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.workflow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workflow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workflow {
        return new Workflow();
    }

    /**
     * Gets the deletedDateTime property value. When the workflow was deleted. Supports $filter(lt,gt) and $orderBy.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * Gets the executionScope property value. The unique identifier of the Azure AD identity that last modified the workflow object.
     * @return array<User>|null
    */
    public function getExecutionScope(): ?array {
        return $this->executionScope;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => function (ParseNode $n) use ($o) { $o->setDeletedDateTime($n->getDateTimeValue()); },
            'executionScope' => function (ParseNode $n) use ($o) { $o->setExecutionScope($n->getCollectionOfObjectValues(array(User::class, 'createFromDiscriminatorValue'))); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'nextScheduleRunDateTime' => function (ParseNode $n) use ($o) { $o->setNextScheduleRunDateTime($n->getDateTimeValue()); },
            'runs' => function (ParseNode $n) use ($o) { $o->setRuns($n->getCollectionOfObjectValues(array(Run::class, 'createFromDiscriminatorValue'))); },
            'taskReports' => function (ParseNode $n) use ($o) { $o->setTaskReports($n->getCollectionOfObjectValues(array(TaskReport::class, 'createFromDiscriminatorValue'))); },
            'userProcessingResults' => function (ParseNode $n) use ($o) { $o->setUserProcessingResults($n->getCollectionOfObjectValues(array(UserProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(WorkflowVersion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the id property value. Identifier used for individually addressing a specific workflow. Supports $filter(eq, ne).
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the nextScheduleRunDateTime property value. The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderBy.
     * @return DateTime|null
    */
    public function getNextScheduleRunDateTime(): ?DateTime {
        return $this->nextScheduleRunDateTime;
    }

    /**
     * Gets the runs property value. The runs property
     * @return array<Run>|null
    */
    public function getRuns(): ?array {
        return $this->runs;
    }

    /**
     * Gets the taskReports property value. Represents the aggregation of task execution data for tasks within a workflow object.
     * @return array<TaskReport>|null
    */
    public function getTaskReports(): ?array {
        return $this->taskReports;
    }

    /**
     * Gets the userProcessingResults property value. The userProcessingResults property
     * @return array<UserProcessingResult>|null
    */
    public function getUserProcessingResults(): ?array {
        return $this->userProcessingResults;
    }

    /**
     * Gets the version property value. The current version number of the workflow. Value is 1 when the workflow is first created. Supports $filter(eq, ne).
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the versions property value. The workflow versions that are available.
     * @return array<WorkflowVersion>|null
    */
    public function getVersions(): ?array {
        return $this->versions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeCollectionOfObjectValues('executionScope', $this->executionScope);
        $writer->writeStringValue('id', $this->id);
        $writer->writeDateTimeValue('nextScheduleRunDateTime', $this->nextScheduleRunDateTime);
        $writer->writeCollectionOfObjectValues('runs', $this->runs);
        $writer->writeCollectionOfObjectValues('taskReports', $this->taskReports);
        $writer->writeCollectionOfObjectValues('userProcessingResults', $this->userProcessingResults);
        $writer->writeIntegerValue('version', $this->version);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
    }

    /**
     * Sets the deletedDateTime property value. When the workflow was deleted. Supports $filter(lt,gt) and $orderBy.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the executionScope property value. The unique identifier of the Azure AD identity that last modified the workflow object.
     *  @param array<User>|null $value Value to set for the executionScope property.
    */
    public function setExecutionScope(?array $value ): void {
        $this->executionScope = $value;
    }

    /**
     * Sets the id property value. Identifier used for individually addressing a specific workflow. Supports $filter(eq, ne).
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the nextScheduleRunDateTime property value. The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderBy.
     *  @param DateTime|null $value Value to set for the nextScheduleRunDateTime property.
    */
    public function setNextScheduleRunDateTime(?DateTime $value ): void {
        $this->nextScheduleRunDateTime = $value;
    }

    /**
     * Sets the runs property value. The runs property
     *  @param array<Run>|null $value Value to set for the runs property.
    */
    public function setRuns(?array $value ): void {
        $this->runs = $value;
    }

    /**
     * Sets the taskReports property value. Represents the aggregation of task execution data for tasks within a workflow object.
     *  @param array<TaskReport>|null $value Value to set for the taskReports property.
    */
    public function setTaskReports(?array $value ): void {
        $this->taskReports = $value;
    }

    /**
     * Sets the userProcessingResults property value. The userProcessingResults property
     *  @param array<UserProcessingResult>|null $value Value to set for the userProcessingResults property.
    */
    public function setUserProcessingResults(?array $value ): void {
        $this->userProcessingResults = $value;
    }

    /**
     * Sets the version property value. The current version number of the workflow. Value is 1 when the workflow is first created. Supports $filter(eq, ne).
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the versions property value. The workflow versions that are available.
     *  @param array<WorkflowVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
