<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ActionStep implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ActionStep and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActionStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActionStep {
        return new ActionStep();
    }

    /**
     * Gets the actionUrl property value. A link to the documentation or Microsoft Entra admin center page that is associated with the action step.
     * @return ActionUrl|null
    */
    public function getActionUrl(): ?ActionUrl {
        $val = $this->getBackingStore()->get('actionUrl');
        if (is_null($val) || $val instanceof ActionUrl) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionUrl'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionUrl' => fn(ParseNode $n) => $o->setActionUrl($n->getObjectValue([ActionUrl::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'stepNumber' => fn(ParseNode $n) => $o->setStepNumber($n->getIntegerValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
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
     * Gets the stepNumber property value. Indicates the position for this action in the order of the collection of actions to be taken.
     * @return int|null
    */
    public function getStepNumber(): ?int {
        $val = $this->getBackingStore()->get('stepNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stepNumber'");
    }

    /**
     * Gets the text property value. Friendly description of the action to take.
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actionUrl', $this->getActionUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('stepNumber', $this->getStepNumber());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionUrl property value. A link to the documentation or Microsoft Entra admin center page that is associated with the action step.
     * @param ActionUrl|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?ActionUrl $value): void {
        $this->getBackingStore()->set('actionUrl', $value);
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the stepNumber property value. Indicates the position for this action in the order of the collection of actions to be taken.
     * @param int|null $value Value to set for the stepNumber property.
    */
    public function setStepNumber(?int $value): void {
        $this->getBackingStore()->set('stepNumber', $value);
    }

    /**
     * Sets the text property value. Friendly description of the action to take.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
