<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookUser extends Entity 
{
    /** @var array<OutlookCategory>|null $masterCategories A list of categories defined for the user. */
    private ?array $masterCategories = null;
    
    /** @var array<OutlookTaskFolder>|null $taskFolders  */
    private ?array $taskFolders = null;
    
    /** @var array<OutlookTaskGroup>|null $taskGroups  */
    private ?array $taskGroups = null;
    
    /** @var array<OutlookTask>|null $tasks  */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new outlookUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookUser
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OutlookUser {
        return new OutlookUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'masterCategories' => function (self $o, ParseNode $n) { $o->setMasterCategories($n->getCollectionOfObjectValues(OutlookCategory::class)); },
            'taskFolders' => function (self $o, ParseNode $n) { $o->setTaskFolders($n->getCollectionOfObjectValues(OutlookTaskFolder::class)); },
            'taskGroups' => function (self $o, ParseNode $n) { $o->setTaskGroups($n->getCollectionOfObjectValues(OutlookTaskGroup::class)); },
            'tasks' => function (self $o, ParseNode $n) { $o->setTasks($n->getCollectionOfObjectValues(OutlookTask::class)); },
        ]);
    }

    /**
     * Gets the masterCategories property value. A list of categories defined for the user.
     * @return array<OutlookCategory>|null
    */
    public function getMasterCategories(): ?array {
        return $this->masterCategories;
    }

    /**
     * Gets the taskFolders property value. 
     * @return array<OutlookTaskFolder>|null
    */
    public function getTaskFolders(): ?array {
        return $this->taskFolders;
    }

    /**
     * Gets the taskGroups property value. 
     * @return array<OutlookTaskGroup>|null
    */
    public function getTaskGroups(): ?array {
        return $this->taskGroups;
    }

    /**
     * Gets the tasks property value. 
     * @return array<OutlookTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('masterCategories', $this->masterCategories);
        $writer->writeCollectionOfObjectValues('taskFolders', $this->taskFolders);
        $writer->writeCollectionOfObjectValues('taskGroups', $this->taskGroups);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the masterCategories property value. A list of categories defined for the user.
     *  @param array<OutlookCategory>|null $value Value to set for the masterCategories property.
    */
    public function setMasterCategories(?array $value ): void {
        $this->masterCategories = $value;
    }

    /**
     * Sets the taskFolders property value. 
     *  @param array<OutlookTaskFolder>|null $value Value to set for the taskFolders property.
    */
    public function setTaskFolders(?array $value ): void {
        $this->taskFolders = $value;
    }

    /**
     * Sets the taskGroups property value. 
     *  @param array<OutlookTaskGroup>|null $value Value to set for the taskGroups property.
    */
    public function setTaskGroups(?array $value ): void {
        $this->taskGroups = $value;
    }

    /**
     * Sets the tasks property value. 
     *  @param array<OutlookTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
