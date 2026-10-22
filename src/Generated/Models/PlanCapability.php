<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PlanCapability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlanCapability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanCapability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanCapability {
        return new PlanCapability();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the calendar property value. Indicates whether calendar features are enabled for the plan.
     * @return bool|null
    */
    public function getCalendar(): ?bool {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * Gets the customFields property value. Indicates whether custom fields are enabled for the plan.
     * @return bool|null
    */
    public function getCustomFields(): ?bool {
        $val = $this->getBackingStore()->get('customFields');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFields'");
    }

    /**
     * Gets the extensions property value. Indicates whether custom extension fields are enabled for the plan.
     * @return bool|null
    */
    public function getExtensions(): ?bool {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getBooleanValue()),
            'customFields' => fn(ParseNode $n) => $o->setCustomFields($n->getBooleanValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getBooleanValue()),
            'goals' => fn(ParseNode $n) => $o->setGoals($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'undo' => fn(ParseNode $n) => $o->setUndo($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the goals property value. Indicates whether goals are enabled for the plan.
     * @return bool|null
    */
    public function getGoals(): ?bool {
        $val = $this->getBackingStore()->get('goals');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'goals'");
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
     * Gets the undo property value. Indicates whether undo is enabled for the plan.
     * @return bool|null
    */
    public function getUndo(): ?bool {
        $val = $this->getBackingStore()->get('undo');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'undo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('calendar', $this->getCalendar());
        $writer->writeBooleanValue('customFields', $this->getCustomFields());
        $writer->writeBooleanValue('extensions', $this->getExtensions());
        $writer->writeBooleanValue('goals', $this->getGoals());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('undo', $this->getUndo());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the calendar property value. Indicates whether calendar features are enabled for the plan.
     * @param bool|null $value Value to set for the calendar property.
    */
    public function setCalendar(?bool $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the customFields property value. Indicates whether custom fields are enabled for the plan.
     * @param bool|null $value Value to set for the customFields property.
    */
    public function setCustomFields(?bool $value): void {
        $this->getBackingStore()->set('customFields', $value);
    }

    /**
     * Sets the extensions property value. Indicates whether custom extension fields are enabled for the plan.
     * @param bool|null $value Value to set for the extensions property.
    */
    public function setExtensions(?bool $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the goals property value. Indicates whether goals are enabled for the plan.
     * @param bool|null $value Value to set for the goals property.
    */
    public function setGoals(?bool $value): void {
        $this->getBackingStore()->set('goals', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the undo property value. Indicates whether undo is enabled for the plan.
     * @param bool|null $value Value to set for the undo property.
    */
    public function setUndo(?bool $value): void {
        $this->getBackingStore()->set('undo', $value);
    }

}
