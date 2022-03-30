<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Tasks extends Entity 
{
    /** @var array<BaseTask>|null $alltasks All tasks in the users mailbox. */
    private ?array $alltasks = null;
    
    /** @var array<BaseTaskList>|null $lists The task lists in the users mailbox. */
    private ?array $lists = null;
    
    /**
     * Instantiates a new tasks and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tasks
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Tasks {
        return new Tasks();
    }

    /**
     * Gets the alltasks property value. All tasks in the users mailbox.
     * @return array<BaseTask>|null
    */
    public function getAlltasks(): ?array {
        return $this->alltasks;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'alltasks' => function (self $o, ParseNode $n) { $o->setAlltasks($n->getCollectionOfObjectValues(BaseTask::class)); },
            'lists' => function (self $o, ParseNode $n) { $o->setLists($n->getCollectionOfObjectValues(BaseTaskList::class)); },
        ]);
    }

    /**
     * Gets the lists property value. The task lists in the users mailbox.
     * @return array<BaseTaskList>|null
    */
    public function getLists(): ?array {
        return $this->lists;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alltasks', $this->alltasks);
        $writer->writeCollectionOfObjectValues('lists', $this->lists);
    }

    /**
     * Sets the alltasks property value. All tasks in the users mailbox.
     *  @param array<BaseTask>|null $value Value to set for the alltasks property.
    */
    public function setAlltasks(?array $value ): void {
        $this->alltasks = $value;
    }

    /**
     * Sets the lists property value. The task lists in the users mailbox.
     *  @param array<BaseTaskList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value ): void {
        $this->lists = $value;
    }

}
