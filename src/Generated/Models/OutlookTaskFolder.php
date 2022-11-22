<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookTaskFolder extends Entity implements Parsable 
{
    /**
     * Instantiates a new outlookTaskFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('changeKey');
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
        return $this->getBackingStore()->get('isDefaultFolder');
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('multiValueExtendedProperties');
    }

    /**
     * Gets the name property value. The name of the task folder.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the parentGroupKey property value. The unique GUID identifier for the task folder's parent group.
     * @return string|null
    */
    public function getParentGroupKey(): ?string {
        return $this->getBackingStore()->get('parentGroupKey');
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->getBackingStore()->get('singleValueExtendedProperties');
    }

    /**
     * Gets the tasks property value. The tasks in this task folder. Read-only. Nullable.
     * @return array<OutlookTask>|null
    */
    public function getTasks(): ?array {
        return $this->getBackingStore()->get('tasks');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeBooleanValue('isDefaultFolder', $this->getIsDefaultFolder());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('parentGroupKey', $this->getParentGroupKey());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the changeKey property value. The version of the task folder.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the isDefaultFolder property value. True if the folder is the default task folder.
     *  @param bool|null $value Value to set for the isDefaultFolder property.
    */
    public function setIsDefaultFolder(?bool $value): void {
        $this->getBackingStore()->set('isDefaultFolder', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the name property value. The name of the task folder.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parentGroupKey property value. The unique GUID identifier for the task folder's parent group.
     *  @param string|null $value Value to set for the parentGroupKey property.
    */
    public function setParentGroupKey(?string $value): void {
        $this->getBackingStore()->set('parentGroupKey', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the tasks property value. The tasks in this task folder. Read-only. Nullable.
     *  @param array<OutlookTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
