<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookTaskGroup extends Entity implements Parsable 
{
    /**
     * @var string|null $changeKey The version of the task group.
    */
    private ?string $changeKey = null;
    
    /**
     * @var string|null $groupKey The unique GUID identifier for the task group.
    */
    private ?string $groupKey = null;
    
    /**
     * @var bool|null $isDefaultGroup True if the task group is the default task group.
    */
    private ?bool $isDefaultGroup = null;
    
    /**
     * @var string|null $name The name of the task group.
    */
    private ?string $name = null;
    
    /**
     * @var array<OutlookTaskFolder>|null $taskFolders The collection of task folders in the task group. Read-only. Nullable.
    */
    private ?array $taskFolders = null;
    
    /**
     * Instantiates a new outlookTaskGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.outlookTaskGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookTaskGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookTaskGroup {
        return new OutlookTaskGroup();
    }

    /**
     * Gets the changeKey property value. The version of the task group.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        return $this->changeKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'groupKey' => fn(ParseNode $n) => $o->setGroupKey($n->getStringValue()),
            'isDefaultGroup' => fn(ParseNode $n) => $o->setIsDefaultGroup($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'taskFolders' => fn(ParseNode $n) => $o->setTaskFolders($n->getCollectionOfObjectValues([OutlookTaskFolder::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupKey property value. The unique GUID identifier for the task group.
     * @return string|null
    */
    public function getGroupKey(): ?string {
        return $this->groupKey;
    }

    /**
     * Gets the isDefaultGroup property value. True if the task group is the default task group.
     * @return bool|null
    */
    public function getIsDefaultGroup(): ?bool {
        return $this->isDefaultGroup;
    }

    /**
     * Gets the name property value. The name of the task group.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the taskFolders property value. The collection of task folders in the task group. Read-only. Nullable.
     * @return array<OutlookTaskFolder>|null
    */
    public function getTaskFolders(): ?array {
        return $this->taskFolders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('changeKey', $this->changeKey);
        $writer->writeStringValue('groupKey', $this->groupKey);
        $writer->writeBooleanValue('isDefaultGroup', $this->isDefaultGroup);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('taskFolders', $this->taskFolders);
    }

    /**
     * Sets the changeKey property value. The version of the task group.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value ): void {
        $this->changeKey = $value;
    }

    /**
     * Sets the groupKey property value. The unique GUID identifier for the task group.
     *  @param string|null $value Value to set for the groupKey property.
    */
    public function setGroupKey(?string $value ): void {
        $this->groupKey = $value;
    }

    /**
     * Sets the isDefaultGroup property value. True if the task group is the default task group.
     *  @param bool|null $value Value to set for the isDefaultGroup property.
    */
    public function setIsDefaultGroup(?bool $value ): void {
        $this->isDefaultGroup = $value;
    }

    /**
     * Sets the name property value. The name of the task group.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the taskFolders property value. The collection of task folders in the task group. Read-only. Nullable.
     *  @param array<OutlookTaskFolder>|null $value Value to set for the taskFolders property.
    */
    public function setTaskFolders(?array $value ): void {
        $this->taskFolders = $value;
    }

}
