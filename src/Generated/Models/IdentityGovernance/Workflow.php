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
     * @var DateTime|null $deletedDateTime The deletedDateTime property
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var array<User>|null $executionScope The executionScope property
    */
    private ?array $executionScope = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isEnabled The isEnabled property
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var bool|null $isSchedulingEnabled The isSchedulingEnabled property
    */
    private ?bool $isSchedulingEnabled = null;
    
    /**
     * @var DateTime|null $nextScheduleRunDateTime The nextScheduleRunDateTime property
    */
    private ?DateTime $nextScheduleRunDateTime = null;
    
    /**
     * @var array<Run>|null $runs The runs property
    */
    private ?array $runs = null;
    
    /**
     * @var array<TaskReport>|null $taskReports The taskReports property
    */
    private ?array $taskReports = null;
    
    /**
     * @var array<UserProcessingResult>|null $userProcessingResults The userProcessingResults property
    */
    private ?array $userProcessingResults = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * @var array<WorkflowVersion>|null $versions The versions property
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
     * Gets the deletedDateTime property value. The deletedDateTime property
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * Gets the executionScope property value. The executionScope property
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
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'isSchedulingEnabled' => function (ParseNode $n) use ($o) { $o->setIsSchedulingEnabled($n->getBooleanValue()); },
            'nextScheduleRunDateTime' => function (ParseNode $n) use ($o) { $o->setNextScheduleRunDateTime($n->getDateTimeValue()); },
            'runs' => function (ParseNode $n) use ($o) { $o->setRuns($n->getCollectionOfObjectValues(array(Run::class, 'createFromDiscriminatorValue'))); },
            'taskReports' => function (ParseNode $n) use ($o) { $o->setTaskReports($n->getCollectionOfObjectValues(array(TaskReport::class, 'createFromDiscriminatorValue'))); },
            'userProcessingResults' => function (ParseNode $n) use ($o) { $o->setUserProcessingResults($n->getCollectionOfObjectValues(array(UserProcessingResult::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(WorkflowVersion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEnabled property value. The isEnabled property
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the isSchedulingEnabled property value. The isSchedulingEnabled property
     * @return bool|null
    */
    public function getIsSchedulingEnabled(): ?bool {
        return $this->isSchedulingEnabled;
    }

    /**
     * Gets the nextScheduleRunDateTime property value. The nextScheduleRunDateTime property
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
     * Gets the taskReports property value. The taskReports property
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
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the versions property value. The versions property
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
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('isSchedulingEnabled', $this->isSchedulingEnabled);
        $writer->writeDateTimeValue('nextScheduleRunDateTime', $this->nextScheduleRunDateTime);
        $writer->writeCollectionOfObjectValues('runs', $this->runs);
        $writer->writeCollectionOfObjectValues('taskReports', $this->taskReports);
        $writer->writeCollectionOfObjectValues('userProcessingResults', $this->userProcessingResults);
        $writer->writeIntegerValue('version', $this->version);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
    }

    /**
     * Sets the deletedDateTime property value. The deletedDateTime property
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the executionScope property value. The executionScope property
     *  @param array<User>|null $value Value to set for the executionScope property.
    */
    public function setExecutionScope(?array $value ): void {
        $this->executionScope = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEnabled property value. The isEnabled property
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the isSchedulingEnabled property value. The isSchedulingEnabled property
     *  @param bool|null $value Value to set for the isSchedulingEnabled property.
    */
    public function setIsSchedulingEnabled(?bool $value ): void {
        $this->isSchedulingEnabled = $value;
    }

    /**
     * Sets the nextScheduleRunDateTime property value. The nextScheduleRunDateTime property
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
     * Sets the taskReports property value. The taskReports property
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
     * Sets the version property value. The version property
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the versions property value. The versions property
     *  @param array<WorkflowVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
