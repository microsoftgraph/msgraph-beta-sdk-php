<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\CustomExtensionData;
use Microsoft\Graph\Beta\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTaskExtensionCalloutData extends CustomExtensionData implements Parsable 
{
    /**
     * @var User|null $subject The subject property
    */
    private ?User $subject = null;
    
    /**
     * @var Task|null $task The task property
    */
    private ?Task $task = null;
    
    /**
     * @var TaskProcessingResult|null $taskProcessingresult The taskProcessingresult property
    */
    private ?TaskProcessingResult $taskProcessingresult = null;
    
    /**
     * @var Workflow|null $workflow The workflow property
    */
    private ?Workflow $workflow = null;
    
    /**
     * Instantiates a new CustomTaskExtensionCalloutData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionCalloutData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionCalloutData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionCalloutData {
        return new CustomTaskExtensionCalloutData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([Task::class, 'createFromDiscriminatorValue'])),
            'taskProcessingresult' => fn(ParseNode $n) => $o->setTaskProcessingresult($n->getObjectValue([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
            'workflow' => fn(ParseNode $n) => $o->setWorkflow($n->getObjectValue([Workflow::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the taskProcessingresult property value. The taskProcessingresult property
     * @return TaskProcessingResult|null
    */
    public function getTaskProcessingresult(): ?TaskProcessingResult {
        return $this->taskProcessingresult;
    }

    /**
     * Gets the workflow property value. The workflow property
     * @return Workflow|null
    */
    public function getWorkflow(): ?Workflow {
        return $this->workflow;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('subject', $this->subject);
        $writer->writeObjectValue('task', $this->task);
        $writer->writeObjectValue('taskProcessingresult', $this->taskProcessingresult);
        $writer->writeObjectValue('workflow', $this->workflow);
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

    /**
     * Sets the taskProcessingresult property value. The taskProcessingresult property
     *  @param TaskProcessingResult|null $value Value to set for the taskProcessingresult property.
    */
    public function setTaskProcessingresult(?TaskProcessingResult $value ): void {
        $this->taskProcessingresult = $value;
    }

    /**
     * Sets the workflow property value. The workflow property
     *  @param Workflow|null $value Value to set for the workflow property.
    */
    public function setWorkflow(?Workflow $value ): void {
        $this->workflow = $value;
    }

}
