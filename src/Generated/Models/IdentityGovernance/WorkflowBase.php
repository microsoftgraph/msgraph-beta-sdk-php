<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkflowBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var LifecycleWorkflowCategory|null $category The category property
    */
    private ?LifecycleWorkflowCategory $category = null;
    
    /**
     * @var User|null $createdBy The user who created the workflow.
    */
    private ?User $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime When a workflow was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description A string that describes the purpose of the workflow.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName A string to identify the workflow.
    */
    private ?string $displayName = null;
    
    /**
     * @var WorkflowExecutionConditions|null $executionConditions Defines when and for who the workflow will run.
    */
    private ?WorkflowExecutionConditions $executionConditions = null;
    
    /**
     * @var bool|null $isEnabled Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var bool|null $isSchedulingEnabled If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Cannot be true for a disabled workflow (where isEnabled is false).
    */
    private ?bool $isSchedulingEnabled = null;
    
    /**
     * @var User|null $lastModifiedBy The user who last modified the workflow.
    */
    private ?User $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime When the workflow was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<Task>|null $tasks The tasks in the workflow.
    */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new workflowBase and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identityGovernance.workflowBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.workflow': return new Workflow();
                case '#microsoft.graph.identityGovernance.workflowVersion': return new WorkflowVersion();
            }
        }
        return new WorkflowBase();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleWorkflowCategory|null
    */
    public function getCategory(): ?LifecycleWorkflowCategory {
        return $this->category;
    }

    /**
     * Gets the createdBy property value. The user who created the workflow.
     * @return User|null
    */
    public function getCreatedBy(): ?User {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. When a workflow was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. A string that describes the purpose of the workflow.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. A string to identify the workflow.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the executionConditions property value. Defines when and for who the workflow will run.
     * @return WorkflowExecutionConditions|null
    */
    public function getExecutionConditions(): ?WorkflowExecutionConditions {
        return $this->executionConditions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(LifecycleWorkflowCategory::class)); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'executionConditions' => function (ParseNode $n) use ($o) { $o->setExecutionConditions($n->getObjectValue(array(WorkflowExecutionConditions::class, 'createFromDiscriminatorValue'))); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'isSchedulingEnabled' => function (ParseNode $n) use ($o) { $o->setIsSchedulingEnabled($n->getBooleanValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'tasks' => function (ParseNode $n) use ($o) { $o->setTasks($n->getCollectionOfObjectValues(array(Task::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isEnabled property value. Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the isSchedulingEnabled property value. If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Cannot be true for a disabled workflow (where isEnabled is false).
     * @return bool|null
    */
    public function getIsSchedulingEnabled(): ?bool {
        return $this->isSchedulingEnabled;
    }

    /**
     * Gets the lastModifiedBy property value. The user who last modified the workflow.
     * @return User|null
    */
    public function getLastModifiedBy(): ?User {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. When the workflow was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the tasks property value. The tasks in the workflow.
     * @return array<Task>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->category);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('executionConditions', $this->executionConditions);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeBooleanValue('isSchedulingEnabled', $this->isSchedulingEnabled);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param LifecycleWorkflowCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleWorkflowCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the workflow.
     *  @param User|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?User $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. When a workflow was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. A string that describes the purpose of the workflow.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. A string to identify the workflow.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the executionConditions property value. Defines when and for who the workflow will run.
     *  @param WorkflowExecutionConditions|null $value Value to set for the executionConditions property.
    */
    public function setExecutionConditions(?WorkflowExecutionConditions $value ): void {
        $this->executionConditions = $value;
    }

    /**
     * Sets the isEnabled property value. Whether the workflow is enabled or disabled. If this setting is true, the workflow can be run on demand or on schedule when isSchedulingEnabled is true.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the isSchedulingEnabled property value. If true, the Lifecycle Workflow engine executes the workflow based on the schedule defined by tenant settings. Cannot be true for a disabled workflow (where isEnabled is false).
     *  @param bool|null $value Value to set for the isSchedulingEnabled property.
    */
    public function setIsSchedulingEnabled(?bool $value ): void {
        $this->isSchedulingEnabled = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The user who last modified the workflow.
     *  @param User|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?User $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. When the workflow was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tasks property value. The tasks in the workflow.
     *  @param array<Task>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
