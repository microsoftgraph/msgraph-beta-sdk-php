<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\DeletedItemContainer;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LifecycleWorkflowsContainer extends Entity implements Parsable 
{
    /**
     * @var array<CustomTaskExtension>|null $customTaskExtensions The customTaskExtension instance.
    */
    private ?array $customTaskExtensions = null;
    
    /**
     * @var DeletedItemContainer|null $deletedItems Deleted workflows in your lifecycle workflows instance.
    */
    private ?DeletedItemContainer $deletedItems = null;
    
    /**
     * @var LifecycleManagementSettings|null $settings The settings property
    */
    private ?LifecycleManagementSettings $settings = null;
    
    /**
     * @var array<TaskDefinition>|null $taskDefinitions The definition of tasks within the lifecycle workflows instance.
    */
    private ?array $taskDefinitions = null;
    
    /**
     * @var array<Workflow>|null $workflows The workflows in the lifecycle workflows instance.
    */
    private ?array $workflows = null;
    
    /**
     * @var array<WorkflowTemplate>|null $workflowTemplates The workflow templates in the lifecycle workflow instance.
    */
    private ?array $workflowTemplates = null;
    
    /**
     * Instantiates a new LifecycleWorkflowsContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.lifecycleWorkflowsContainer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecycleWorkflowsContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecycleWorkflowsContainer {
        return new LifecycleWorkflowsContainer();
    }

    /**
     * Gets the customTaskExtensions property value. The customTaskExtension instance.
     * @return array<CustomTaskExtension>|null
    */
    public function getCustomTaskExtensions(): ?array {
        return $this->customTaskExtensions;
    }

    /**
     * Gets the deletedItems property value. Deleted workflows in your lifecycle workflows instance.
     * @return DeletedItemContainer|null
    */
    public function getDeletedItems(): ?DeletedItemContainer {
        return $this->deletedItems;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customTaskExtensions' => fn(ParseNode $n) => $o->setCustomTaskExtensions($n->getCollectionOfObjectValues([CustomTaskExtension::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getObjectValue([DeletedItemContainer::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([LifecycleManagementSettings::class, 'createFromDiscriminatorValue'])),
            'taskDefinitions' => fn(ParseNode $n) => $o->setTaskDefinitions($n->getCollectionOfObjectValues([TaskDefinition::class, 'createFromDiscriminatorValue'])),
            'workflows' => fn(ParseNode $n) => $o->setWorkflows($n->getCollectionOfObjectValues([Workflow::class, 'createFromDiscriminatorValue'])),
            'workflowTemplates' => fn(ParseNode $n) => $o->setWorkflowTemplates($n->getCollectionOfObjectValues([WorkflowTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. The settings property
     * @return LifecycleManagementSettings|null
    */
    public function getSettings(): ?LifecycleManagementSettings {
        return $this->settings;
    }

    /**
     * Gets the taskDefinitions property value. The definition of tasks within the lifecycle workflows instance.
     * @return array<TaskDefinition>|null
    */
    public function getTaskDefinitions(): ?array {
        return $this->taskDefinitions;
    }

    /**
     * Gets the workflows property value. The workflows in the lifecycle workflows instance.
     * @return array<Workflow>|null
    */
    public function getWorkflows(): ?array {
        return $this->workflows;
    }

    /**
     * Gets the workflowTemplates property value. The workflow templates in the lifecycle workflow instance.
     * @return array<WorkflowTemplate>|null
    */
    public function getWorkflowTemplates(): ?array {
        return $this->workflowTemplates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customTaskExtensions', $this->customTaskExtensions);
        $writer->writeObjectValue('deletedItems', $this->deletedItems);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('taskDefinitions', $this->taskDefinitions);
        $writer->writeCollectionOfObjectValues('workflows', $this->workflows);
        $writer->writeCollectionOfObjectValues('workflowTemplates', $this->workflowTemplates);
    }

    /**
     * Sets the customTaskExtensions property value. The customTaskExtension instance.
     *  @param array<CustomTaskExtension>|null $value Value to set for the customTaskExtensions property.
    */
    public function setCustomTaskExtensions(?array $value ): void {
        $this->customTaskExtensions = $value;
    }

    /**
     * Sets the deletedItems property value. Deleted workflows in your lifecycle workflows instance.
     *  @param DeletedItemContainer|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?DeletedItemContainer $value ): void {
        $this->deletedItems = $value;
    }

    /**
     * Sets the settings property value. The settings property
     *  @param LifecycleManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?LifecycleManagementSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the taskDefinitions property value. The definition of tasks within the lifecycle workflows instance.
     *  @param array<TaskDefinition>|null $value Value to set for the taskDefinitions property.
    */
    public function setTaskDefinitions(?array $value ): void {
        $this->taskDefinitions = $value;
    }

    /**
     * Sets the workflows property value. The workflows in the lifecycle workflows instance.
     *  @param array<Workflow>|null $value Value to set for the workflows property.
    */
    public function setWorkflows(?array $value ): void {
        $this->workflows = $value;
    }

    /**
     * Sets the workflowTemplates property value. The workflow templates in the lifecycle workflow instance.
     *  @param array<WorkflowTemplate>|null $value Value to set for the workflowTemplates property.
    */
    public function setWorkflowTemplates(?array $value ): void {
        $this->workflowTemplates = $value;
    }

}
