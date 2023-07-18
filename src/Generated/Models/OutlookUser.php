<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OutlookUser extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookUser {
        return new OutlookUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'masterCategories' => fn(ParseNode $n) => $o->setMasterCategories($n->getCollectionOfObjectValues([OutlookCategory::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'taskFolders' => fn(ParseNode $n) => $o->setTaskFolders($n->getCollectionOfObjectValues([OutlookTaskFolder::class, 'createFromDiscriminatorValue'])),
            'taskGroups' => fn(ParseNode $n) => $o->setTaskGroups($n->getCollectionOfObjectValues([OutlookTaskGroup::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([OutlookTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the masterCategories property value. A list of categories defined for the user.
     * @return array<OutlookCategory>|null
    */
    public function getMasterCategories(): ?array {
        $val = $this->getBackingStore()->get('masterCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OutlookCategory::class);
            /** @var array<OutlookCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'masterCategories'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the taskFolders property value. The taskFolders property
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
     * Gets the taskGroups property value. The taskGroups property
     * @return array<OutlookTaskGroup>|null
    */
    public function getTaskGroups(): ?array {
        $val = $this->getBackingStore()->get('taskGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OutlookTaskGroup::class);
            /** @var array<OutlookTaskGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskGroups'");
    }

    /**
     * Gets the tasks property value. The tasks property
     * @return array<OutlookTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OutlookTask::class);
            /** @var array<OutlookTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('masterCategories', $this->getMasterCategories());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('taskFolders', $this->getTaskFolders());
        $writer->writeCollectionOfObjectValues('taskGroups', $this->getTaskGroups());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the masterCategories property value. A list of categories defined for the user.
     * @param array<OutlookCategory>|null $value Value to set for the masterCategories property.
    */
    public function setMasterCategories(?array $value): void {
        $this->getBackingStore()->set('masterCategories', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the taskFolders property value. The taskFolders property
     * @param array<OutlookTaskFolder>|null $value Value to set for the taskFolders property.
    */
    public function setTaskFolders(?array $value): void {
        $this->getBackingStore()->set('taskFolders', $value);
    }

    /**
     * Sets the taskGroups property value. The taskGroups property
     * @param array<OutlookTaskGroup>|null $value Value to set for the taskGroups property.
    */
    public function setTaskGroups(?array $value): void {
        $this->getBackingStore()->set('taskGroups', $value);
    }

    /**
     * Sets the tasks property value. The tasks property
     * @param array<OutlookTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
