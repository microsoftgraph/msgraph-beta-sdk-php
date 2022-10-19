<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookTaskFolder extends Entity implements Parsable 
{
    /**
     * @var string|null $changeKey The version of the task folder.
    */
    private ?string $changeKey = null;
    
    /**
     * @var bool|null $isDefaultFolder True if the folder is the default task folder.
    */
    private ?bool $isDefaultFolder = null;
    
    /**
     * @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
    */
    private ?array $multiValueExtendedProperties = null;
    
    /**
     * @var string|null $name The name of the task folder.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $parentGroupKey The unique GUID identifier for the task folder's parent group.
    */
    private ?string $parentGroupKey = null;
    
    /**
     * @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
    */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * @var array<OutlookTask>|null $tasks The tasks in this task folder. Read-only. Nullable.
    */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new outlookTaskFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.outlookTaskFolder');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookTaskFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookTaskFolder {
        return new OutlookTaskFolder();
    }

    /**
     * Gets the changeKey property value. The version of the task folder.
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
            'isDefaultFolder' => fn(ParseNode $n) => $o->setIsDefaultFolder($n->getBooleanValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parentGroupKey' => fn(ParseNode $n) => $o->setParentGroupKey($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([OutlookTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefaultFolder property value. True if the folder is the default task folder.
     * @return bool|null
    */
    public function getIsDefaultFolder(): ?bool {
        return $this->isDefaultFolder;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the name property value. The name of the task folder.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parentGroupKey property value. The unique GUID identifier for the task folder's parent group.
     * @return string|null
    */
    public function getParentGroupKey(): ?string {
        return $this->parentGroupKey;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the tasks property value. The tasks in this task folder. Read-only. Nullable.
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
        $writer->writeStringValue('changeKey', $this->changeKey);
        $writer->writeBooleanValue('isDefaultFolder', $this->isDefaultFolder);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('parentGroupKey', $this->parentGroupKey);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the changeKey property value. The version of the task folder.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value ): void {
        $this->changeKey = $value;
    }

    /**
     * Sets the isDefaultFolder property value. True if the folder is the default task folder.
     *  @param bool|null $value Value to set for the isDefaultFolder property.
    */
    public function setIsDefaultFolder(?bool $value ): void {
        $this->isDefaultFolder = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the name property value. The name of the task folder.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parentGroupKey property value. The unique GUID identifier for the task folder's parent group.
     *  @param string|null $value Value to set for the parentGroupKey property.
    */
    public function setParentGroupKey(?string $value ): void {
        $this->parentGroupKey = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the tasks property value. The tasks in this task folder. Read-only. Nullable.
     *  @param array<OutlookTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
