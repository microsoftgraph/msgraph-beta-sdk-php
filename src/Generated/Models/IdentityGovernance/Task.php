<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\KeyValuePair;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Task extends Entity implements Parsable 
{
    /**
     * @var array<KeyValuePair>|null $arguments Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks.
    */
    private ?array $arguments = null;
    
    /**
     * @var LifecycleTaskCategory|null $category The category property
    */
    private ?LifecycleTaskCategory $category = null;
    
    /**
     * @var bool|null $continueOnError A boolean value that determines if the failure of this task stops the subsequent workflows from running.
    */
    private ?bool $continueOnError = null;
    
    /**
     * @var string|null $description A string that describes the purpose of the task for administrative use.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName A unique string that identifies the task. Supports $filter(eq) and orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $executionSequence An integer that states in what order the task will run in a workflow.
    */
    private ?int $executionSequence = null;
    
    /**
     * @var bool|null $isEnabled A boolean value that denotes whether the task is set to run or not. Supports $filter(eq, ne) and orderBy.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var string|null $taskDefinitionId A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks
    */
    private ?string $taskDefinitionId = null;
    
    /**
     * @var array<TaskProcessingResult>|null $taskProcessingResults The result of processing the task.
    */
    private ?array $taskProcessingResults = null;
    
    /**
     * Instantiates a new task and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.task');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Task
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Task {
        return new Task();
    }

    /**
     * Gets the arguments property value. Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks.
     * @return array<KeyValuePair>|null
    */
    public function getArguments(): ?array {
        return $this->arguments;
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleTaskCategory|null
    */
    public function getCategory(): ?LifecycleTaskCategory {
        return $this->category;
    }

    /**
     * Gets the continueOnError property value. A boolean value that determines if the failure of this task stops the subsequent workflows from running.
     * @return bool|null
    */
    public function getContinueOnError(): ?bool {
        return $this->continueOnError;
    }

    /**
     * Gets the description property value. A string that describes the purpose of the task for administrative use.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. A unique string that identifies the task. Supports $filter(eq) and orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the executionSequence property value. An integer that states in what order the task will run in a workflow.
     * @return int|null
    */
    public function getExecutionSequence(): ?int {
        return $this->executionSequence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'arguments' => fn(ParseNode $n) => $o->setArguments($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LifecycleTaskCategory::class)),
            'continueOnError' => fn(ParseNode $n) => $o->setContinueOnError($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'executionSequence' => fn(ParseNode $n) => $o->setExecutionSequence($n->getIntegerValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'taskDefinitionId' => fn(ParseNode $n) => $o->setTaskDefinitionId($n->getStringValue()),
            'taskProcessingResults' => fn(ParseNode $n) => $o->setTaskProcessingResults($n->getCollectionOfObjectValues([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. A boolean value that denotes whether the task is set to run or not. Supports $filter(eq, ne) and orderBy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the taskDefinitionId property value. A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks
     * @return string|null
    */
    public function getTaskDefinitionId(): ?string {
        return $this->taskDefinitionId;
    }

    /**
     * Gets the taskProcessingResults property value. The result of processing the task.
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->taskProcessingResults;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('arguments', $this->arguments);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeBooleanValue('continueOnError', $this->continueOnError);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('executionSequence', $this->executionSequence);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeStringValue('taskDefinitionId', $this->taskDefinitionId);
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->taskProcessingResults);
    }

    /**
     * Sets the arguments property value. Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks.
     *  @param array<KeyValuePair>|null $value Value to set for the arguments property.
    */
    public function setArguments(?array $value ): void {
        $this->arguments = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param LifecycleTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleTaskCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the continueOnError property value. A boolean value that determines if the failure of this task stops the subsequent workflows from running.
     *  @param bool|null $value Value to set for the continueOnError property.
    */
    public function setContinueOnError(?bool $value ): void {
        $this->continueOnError = $value;
    }

    /**
     * Sets the description property value. A string that describes the purpose of the task for administrative use.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. A unique string that identifies the task. Supports $filter(eq) and orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the executionSequence property value. An integer that states in what order the task will run in a workflow.
     *  @param int|null $value Value to set for the executionSequence property.
    */
    public function setExecutionSequence(?int $value ): void {
        $this->executionSequence = $value;
    }

    /**
     * Sets the isEnabled property value. A boolean value that denotes whether the task is set to run or not. Supports $filter(eq, ne) and orderBy.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the taskDefinitionId property value. A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks
     *  @param string|null $value Value to set for the taskDefinitionId property.
    */
    public function setTaskDefinitionId(?string $value ): void {
        $this->taskDefinitionId = $value;
    }

    /**
     * Sets the taskProcessingResults property value. The result of processing the task.
     *  @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value ): void {
        $this->taskProcessingResults = $value;
    }

}
