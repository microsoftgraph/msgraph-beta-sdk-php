<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OutlookTaskGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new OutlookTaskGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('changeKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeKey'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('groupKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupKey'");
    }

    /**
     * Gets the isDefaultGroup property value. True if the task group is the default task group.
     * @return bool|null
    */
    public function getIsDefaultGroup(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultGroup'");
    }

    /**
     * Gets the name property value. The name of the task group.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the taskFolders property value. The collection of task folders in the task group. Read-only. Nullable.
     * @return array<OutlookTaskFolder>|null
    */
    public function getTaskFolders(): ?array {
        $val = $this->getBackingStore()->get('taskFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OutlookTaskFolder::class);
            /** @var array<OutlookTaskFolder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskFolders'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeStringValue('groupKey', $this->getGroupKey());
        $writer->writeBooleanValue('isDefaultGroup', $this->getIsDefaultGroup());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('taskFolders', $this->getTaskFolders());
    }

    /**
     * Sets the changeKey property value. The version of the task group.
     * @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the groupKey property value. The unique GUID identifier for the task group.
     * @param string|null $value Value to set for the groupKey property.
    */
    public function setGroupKey(?string $value): void {
        $this->getBackingStore()->set('groupKey', $value);
    }

    /**
     * Sets the isDefaultGroup property value. True if the task group is the default task group.
     * @param bool|null $value Value to set for the isDefaultGroup property.
    */
    public function setIsDefaultGroup(?bool $value): void {
        $this->getBackingStore()->set('isDefaultGroup', $value);
    }

    /**
     * Sets the name property value. The name of the task group.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the taskFolders property value. The collection of task folders in the task group. Read-only. Nullable.
     * @param array<OutlookTaskFolder>|null $value Value to set for the taskFolders property.
    */
    public function setTaskFolders(?array $value): void {
        $this->getBackingStore()->set('taskFolders', $value);
    }

}
