<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskHistoryItem extends PlannerHistoryItem implements Parsable 
{
    /**
     * Instantiates a new TaskHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.taskHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskHistoryItem {
        return new TaskHistoryItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'newData' => fn(ParseNode $n) => $o->setNewData($n->getObjectValue([PlannerTaskData::class, 'createFromDiscriminatorValue'])),
            'oldData' => fn(ParseNode $n) => $o->setOldData($n->getObjectValue([PlannerTaskData::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the newData property value. A snapshot of the task state after the change. This property is null for deletion events.
     * @return PlannerTaskData|null
    */
    public function getNewData(): ?PlannerTaskData {
        $val = $this->getBackingStore()->get('newData');
        if (is_null($val) || $val instanceof PlannerTaskData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newData'");
    }

    /**
     * Gets the oldData property value. A snapshot of the task state before the change. This property is null for creation and undeletion events.
     * @return PlannerTaskData|null
    */
    public function getOldData(): ?PlannerTaskData {
        $val = $this->getBackingStore()->get('oldData');
        if (is_null($val) || $val instanceof PlannerTaskData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('newData', $this->getNewData());
        $writer->writeObjectValue('oldData', $this->getOldData());
    }

    /**
     * Sets the newData property value. A snapshot of the task state after the change. This property is null for deletion events.
     * @param PlannerTaskData|null $value Value to set for the newData property.
    */
    public function setNewData(?PlannerTaskData $value): void {
        $this->getBackingStore()->set('newData', $value);
    }

    /**
     * Sets the oldData property value. A snapshot of the task state before the change. This property is null for creation and undeletion events.
     * @param PlannerTaskData|null $value Value to set for the oldData property.
    */
    public function setOldData(?PlannerTaskData $value): void {
        $this->getBackingStore()->set('oldData', $value);
    }

}
