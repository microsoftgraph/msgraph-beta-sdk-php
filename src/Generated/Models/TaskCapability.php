<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TaskCapability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TaskCapability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskCapability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskCapability {
        return new TaskCapability();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the assignedPriorityForTaskPersonalView property value. Indicates whether assigned priority is shown in the task's personal view.
     * @return bool|null
    */
    public function getAssignedPriorityForTaskPersonalView(): ?bool {
        $val = $this->getBackingStore()->get('assignedPriorityForTaskPersonalView');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedPriorityForTaskPersonalView'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dependencies property value. Indicates whether dependencies are enabled for the task.
     * @return bool|null
    */
    public function getDependencies(): ?bool {
        $val = $this->getBackingStore()->get('dependencies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependencies'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedPriorityForTaskPersonalView' => fn(ParseNode $n) => $o->setAssignedPriorityForTaskPersonalView($n->getBooleanValue()),
            'dependencies' => fn(ParseNode $n) => $o->setDependencies($n->getBooleanValue()),
            'history' => fn(ParseNode $n) => $o->setHistory($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the history property value. Indicates whether history tracking is enabled for the task.
     * @return bool|null
    */
    public function getHistory(): ?bool {
        $val = $this->getBackingStore()->get('history');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'history'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('assignedPriorityForTaskPersonalView', $this->getAssignedPriorityForTaskPersonalView());
        $writer->writeBooleanValue('dependencies', $this->getDependencies());
        $writer->writeBooleanValue('history', $this->getHistory());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignedPriorityForTaskPersonalView property value. Indicates whether assigned priority is shown in the task's personal view.
     * @param bool|null $value Value to set for the assignedPriorityForTaskPersonalView property.
    */
    public function setAssignedPriorityForTaskPersonalView(?bool $value): void {
        $this->getBackingStore()->set('assignedPriorityForTaskPersonalView', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dependencies property value. Indicates whether dependencies are enabled for the task.
     * @param bool|null $value Value to set for the dependencies property.
    */
    public function setDependencies(?bool $value): void {
        $this->getBackingStore()->set('dependencies', $value);
    }

    /**
     * Sets the history property value. Indicates whether history tracking is enabled for the task.
     * @param bool|null $value Value to set for the history property.
    */
    public function setHistory(?bool $value): void {
        $this->getBackingStore()->set('history', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
